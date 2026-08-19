<?php
/**
 * Central AJAX handler and helpers for Bright Dreamers theme forms.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once BDC_THEME_DIR . '/inc/forms/forms-config.php';
require_once BDC_THEME_DIR . '/inc/forms/mailer.php';

/**
 * Render hidden security fields for a theme form.
 *
 * @param string $form_id Form identifier.
 */
function bdc_render_form_security_fields( $form_id ) {
	?>
	<input type="hidden" name="form_id" value="<?php echo esc_attr( $form_id ); ?>" />
	<input type="hidden" name="action" value="bdc_submit_form" />
	<?php wp_nonce_field( 'bdc_form_' . $form_id, 'bdc_form_nonce' ); ?>
	<div class="bdc-form-honeypot" aria-hidden="true" tabindex="-1">
		<label for="<?php echo esc_attr( 'bdc_hp_' . $form_id ); ?>">Leave this field empty</label>
		<input
			type="text"
			name="bdc_honeypot"
			id="<?php echo esc_attr( 'bdc_hp_' . $form_id ); ?>"
			value=""
			tabindex="-1"
			autocomplete="off"
		/>
	</div>
	<?php
}

/**
 * Read a POST field, supporting bracketed array names.
 *
 * @param string $field_key Field key.
 * @return mixed
 */
function bdc_forms_get_post_value( $field_key ) {
	if ( isset( $_POST[ $field_key ] ) ) { // phpcs:ignore WordPress.Security.NonceVerification.Missing
		return wp_unslash( $_POST[ $field_key ] ); // phpcs:ignore WordPress.Security.NonceVerification.Missing
	}

	$bracket_key = $field_key . '[]';

	if ( isset( $_POST[ $bracket_key ] ) ) { // phpcs:ignore WordPress.Security.NonceVerification.Missing
		return wp_unslash( $_POST[ $bracket_key ] ); // phpcs:ignore WordPress.Security.NonceVerification.Missing
	}

	return null;
}

/**
 * Sanitize a single field value based on its definition.
 *
 * @param mixed                $raw_value Raw input.
 * @param array<string, mixed> $field_def Field definition.
 * @return mixed
 */
function bdc_forms_sanitize_field_value( $raw_value, array $field_def ) {
	$type = $field_def['type'] ?? 'text';

	switch ( $type ) {
		case 'email':
			return sanitize_email( (string) $raw_value );

		case 'textarea':
			return sanitize_textarea_field( (string) $raw_value );

		case 'tel':
			return sanitize_text_field( (string) $raw_value );

		case 'date':
			return sanitize_text_field( (string) $raw_value );

		case 'checkbox':
			return '' !== (string) $raw_value ? '1' : '';

		case 'checkbox_group':
			$values = is_array( $raw_value ) ? $raw_value : array( (string) $raw_value );
			$values = array_filter(
				array_map(
					static function ( $item ) {
						return sanitize_text_field( (string) $item );
					},
					$values
				),
				static function ( $item ) {
					return '' !== $item;
				}
			);

			return array_values( array_unique( $values ) );

		case 'radio':
		case 'select':
			return sanitize_text_field( (string) $raw_value );

		case 'file':
			return sanitize_file_name( (string) $raw_value );

		default:
			return sanitize_text_field( (string) $raw_value );
	}
}

/**
 * Validate a sanitized field value.
 *
 * @param mixed                $value     Sanitized value.
 * @param array<string, mixed> $field_def Field definition.
 * @return string Empty string if valid, otherwise error message.
 */
function bdc_forms_validate_field_value( $value, array $field_def ) {
	$label    = (string) ( $field_def['label'] ?? 'This field' );
	$required = ! empty( $field_def['required'] );
	$type     = $field_def['type'] ?? 'text';

	if ( $required ) {
		if ( 'checkbox_group' === $type && ( ! is_array( $value ) || empty( $value ) ) ) {
			return sprintf( 'Please select at least one option for %s.', $label );
		}

		if ( 'checkbox' === $type && '' === (string) $value ) {
			return sprintf( 'Please confirm %s.', $label );
		}

		if ( ! in_array( $type, array( 'checkbox', 'checkbox_group', 'file' ), true ) && '' === trim( (string) $value ) ) {
			return sprintf( '%s is required.', $label );
		}
	}

	if ( 'email' === $type && '' !== (string) $value && ! is_email( (string) $value ) ) {
		return sprintf( 'Please enter a valid email address for %s.', $label );
	}

	if ( in_array( $type, array( 'select', 'radio' ), true ) && '' !== (string) $value && ! empty( $field_def['options'] ) ) {
		if ( ! isset( $field_def['options'][ (string) $value ] ) ) {
			return sprintf( 'Please choose a valid option for %s.', $label );
		}
	}

	if ( 'checkbox_group' === $type && is_array( $value ) && ! empty( $field_def['options'] ) ) {
		foreach ( $value as $item ) {
			if ( ! isset( $field_def['options'][ $item ] ) ) {
				return sprintf( 'Please choose valid options for %s.', $label );
			}
		}
	}

	return '';
}

/**
 * Handle uploaded files for configured forms.
 *
 * @param string               $form_id     Form identifier.
 * @param array<string, mixed> $form_config Form config.
 * @param array<string, mixed> $data        Data array passed by reference.
 * @return array{errors: array<string,string>, attachments: string[]}
 */
function bdc_forms_process_uploads( $form_id, array $form_config, array &$data ) {
	$result = array(
		'errors'      => array(),
		'attachments' => array(),
	);

	if ( empty( $form_config['supports_files'] ) || empty( $form_config['file_fields'] ) ) {
		return $result;
	}

	$allowed_mimes = array(
		'jpg|jpeg|jpe' => 'image/jpeg',
		'png'          => 'image/png',
		'pdf'          => 'application/pdf',
	);

	foreach ( (array) $form_config['file_fields'] as $field_key ) {
		if ( empty( $_FILES[ $field_key ] ) || empty( $_FILES[ $field_key ]['name'] ) ) { // phpcs:ignore WordPress.Security.NonceVerification.Missing
			continue;
		}

		$file = $_FILES[ $field_key ]; // phpcs:ignore WordPress.Security.NonceVerification.Missing

		if ( ! empty( $file['error'] ) && UPLOAD_ERR_NO_FILE !== (int) $file['error'] ) {
			$result['errors'][ $field_key ] = 'There was a problem uploading your file. Please try again.';
			continue;
		}

		if ( UPLOAD_ERR_NO_FILE === (int) $file['error'] ) {
			continue;
		}

		$checked = wp_check_filetype_and_ext( $file['tmp_name'], $file['name'], $allowed_mimes );

		if ( empty( $checked['ext'] ) || empty( $checked['type'] ) ) {
			$result['errors'][ $field_key ] = 'Please upload a JPG, PNG, or PDF file.';
			continue;
		}

		if ( (int) $file['size'] > 10 * MB_IN_BYTES ) {
			$result['errors'][ $field_key ] = 'File size must be 10MB or less.';
			continue;
		}

		require_once ABSPATH . 'wp-admin/includes/file.php';

		$upload = wp_handle_upload(
			$file,
			array(
				'test_form' => false,
				'mimes'     => $allowed_mimes,
			)
		);

		if ( isset( $upload['error'] ) ) {
			$result['errors'][ $field_key ] = 'There was a problem uploading your file. Please try again.';
			continue;
		}

		$data[ $field_key ] = basename( $file['name'] );
		$result['attachments'][] = $upload['file'];
	}

	return $result;
}

/**
 * Additional cross-field validation rules.
 *
 * @param string               $form_id Form identifier.
 * @param array<string, mixed> $data    Sanitized data.
 * @return array<string, string>
 */
function bdc_forms_validate_conditional_rules( $form_id, array $data ) {
	$errors = array();

	if ( 'volunteer_application' === $form_id && ( $data['volunteered_before'] ?? '' ) === 'yes' ) {
		if ( '' === trim( (string) ( $data['volunteer_history'] ?? '' ) ) ) {
			$errors['volunteer_history'] = 'Please tell us about your previous volunteer experience.';
		}
	}

	return $errors;
}

/**
 * Sanitize and validate a submission against form config.
 *
 * @param string               $form_id     Form identifier.
 * @param array<string, mixed> $form_config Form config.
 * @return array{success:bool,data?:array<string,mixed>,errors?:array<string,string>,attachments?:string[]}
 */
function bdc_forms_prepare_submission( $form_id, array $form_config ) {
	$data   = array();
	$errors = array();

	foreach ( $form_config['fields'] as $field_key => $field_def ) {
		if ( 'file' === ( $field_def['type'] ?? '' ) ) {
			continue;
		}

		$raw_value = bdc_forms_get_post_value( $field_key );

		if ( null === $raw_value ) {
			if ( 'checkbox_group' === ( $field_def['type'] ?? '' ) ) {
				$data[ $field_key ] = array();
			} elseif ( 'checkbox' === ( $field_def['type'] ?? '' ) ) {
				$data[ $field_key ] = '';
			} else {
				$data[ $field_key ] = '';
			}
		} else {
			$data[ $field_key ] = bdc_forms_sanitize_field_value( $raw_value, $field_def );
		}

		$error = bdc_forms_validate_field_value( $data[ $field_key ], $field_def );

		if ( '' !== $error ) {
			$errors[ $field_key ] = $error;
		}
	}

	$upload_result = bdc_forms_process_uploads( $form_id, $form_config, $data );

	if ( ! empty( $upload_result['errors'] ) ) {
		$errors = array_merge( $errors, $upload_result['errors'] );
	}

	$errors = array_merge( $errors, bdc_forms_validate_conditional_rules( $form_id, $data ) );

	if ( ! empty( $errors ) ) {
		return array(
			'success' => false,
			'errors'  => $errors,
		);
	}

	return array(
		'success'     => true,
		'data'        => $data,
		'attachments' => $upload_result['attachments'],
	);
}

/**
 * Return a fake success response for bots that fill the honeypot.
 *
 * @param array<string, mixed> $form_config Form config.
 */
function bdc_forms_respond_honeypot_success( array $form_config ) {
	wp_send_json(
		array(
			'success' => true,
			'message' => $form_config['success'] ?? array(),
		)
	);
}

/**
 * AJAX handler for all theme forms.
 */
function bdc_handle_form_submission() {
	$form_id = isset( $_POST['form_id'] ) ? sanitize_key( wp_unslash( $_POST['form_id'] ) ) : ''; // phpcs:ignore WordPress.Security.NonceVerification.Missing

	if ( '' === $form_id ) {
		wp_send_json(
			array(
				'success' => false,
				'message' => 'Invalid form submission.',
			),
			400
		);
	}

	$form_config = bdc_get_form_config( $form_id );

	if ( ! $form_config ) {
		wp_send_json(
			array(
				'success' => false,
				'message' => 'Unknown form.',
			),
			400
		);
	}

	if (
		empty( $_POST['bdc_form_nonce'] ) ||
		! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['bdc_form_nonce'] ) ), 'bdc_form_' . $form_id )
	) {
		wp_send_json(
			array(
				'success' => false,
				'message' => 'Security check failed. Please refresh and try again.',
			),
			403
		);
	}

	$honeypot = isset( $_POST['bdc_honeypot'] ) ? trim( (string) wp_unslash( $_POST['bdc_honeypot'] ) ) : ''; // phpcs:ignore WordPress.Security.NonceVerification.Missing

	if ( '' !== $honeypot ) {
		bdc_forms_respond_honeypot_success( $form_config );
	}

	$result = bdc_forms_prepare_submission( $form_id, $form_config );

	if ( empty( $result['success'] ) ) {
		wp_send_json(
			array(
				'success' => false,
				'errors'  => $result['errors'] ?? array(),
				'message' => 'Please correct the highlighted fields.',
			),
			422
		);
	}

	$data        = $result['data'];
	$attachments = $result['attachments'] ?? array();

	bdc_forms_send_admin_notification( $form_id, $data, $attachments );
	bdc_forms_send_user_confirmation( $form_id, $data );

	wp_send_json(
		array(
			'success' => true,
			'message' => $form_config['success'] ?? array(),
		)
	);
}
add_action( 'wp_ajax_bdc_submit_form', 'bdc_handle_form_submission' );
add_action( 'wp_ajax_nopriv_bdc_submit_form', 'bdc_handle_form_submission' );

/**
 * Enqueue shared forms JavaScript.
 */
function bdc_enqueue_forms_script() {
	wp_enqueue_script(
		'bdc-forms',
		get_template_directory_uri() . '/assets/js/forms.js',
		array(),
		bdc_asset_version( 'assets/js/forms.js' ),
		true
	);

	wp_localize_script(
		'bdc-forms',
		'bdcForms',
		array(
			'ajaxUrl' => admin_url( 'admin-ajax.php' ),
			'homeUrl' => home_url( '/' ),
		)
	);
}
add_action( 'wp_enqueue_scripts', 'bdc_enqueue_forms_script', 20 );
