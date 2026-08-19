<?php
/**
 * Branded HTML email rendering and delivery for theme forms.
 *
 * Uses wp_mail(). For reliable deliverability on production, configure an SMTP
 * plugin (e.g. WP Mail SMTP) — raw wp_mail() on shared hosting often lands in spam.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Set HTML content type for wp_mail during form sends.
 *
 * @return string
 */
function bdc_forms_mail_content_type() {
	return 'text/html; charset=UTF-8';
}

/**
 * Extract a friendly first name from a full name string.
 *
 * @param string $value Raw name value.
 * @return string
 */
function bdc_forms_first_name_from( $value ) {
	$value = trim( (string) $value );

	if ( '' === $value ) {
		return 'Friend';
	}

	$parts = preg_split( '/\s+/', $value );

	return $parts ? $parts[0] : 'Friend';
}

/**
 * Render an email template file.
 *
 * @param string               $template Template basename without .php.
 * @param array<string, mixed> $vars     Variables for the template.
 * @return string
 */
function bdc_forms_render_email_template( $template, array $vars ) {
	$file = BDC_THEME_DIR . '/inc/forms/templates/' . $template . '.php';

	if ( ! file_exists( $file ) ) {
		return '';
	}

	ob_start();
	extract( $vars, EXTR_SKIP ); // phpcs:ignore WordPress.PHP.DontExtract.extract_extract
	include $file;

	return (string) ob_get_clean();
}

/**
 * Format stored field values for display in emails.
 *
 * @param mixed                $value      Sanitized value.
 * @param array<string, mixed> $field_def  Field definition.
 * @return string
 */
function bdc_forms_format_field_value( $value, array $field_def ) {
	if ( is_array( $value ) ) {
		$labels = array();

		foreach ( $value as $item ) {
			if ( isset( $field_def['options'][ $item ] ) ) {
				$labels[] = $field_def['options'][ $item ];
				continue;
			}

			$labels[] = (string) $item;
		}

		return implode( ', ', $labels );
	}

	if ( isset( $field_def['options'] ) && is_string( $value ) && isset( $field_def['options'][ $value ] ) ) {
		return (string) $field_def['options'][ $value ];
	}

	if ( 'file' === ( $field_def['type'] ?? '' ) ) {
		return is_string( $value ) && '' !== $value ? $value : '—';
	}

	if ( 'checkbox' === ( $field_def['type'] ?? '' ) ) {
		return '' !== (string) $value ? 'Yes' : 'No';
	}

	return (string) $value;
}

/**
 * Build admin + display rows from sanitized submission data.
 *
 * @param array<string, mixed> $form_config Form config.
 * @param array<string, mixed> $data        Sanitized data.
 * @return array<int, array{label:string,value:string}>
 */
function bdc_forms_build_display_rows( array $form_config, array $data ) {
	$rows = array();

	foreach ( $form_config['fields'] as $field_key => $field_def ) {
		if ( ! array_key_exists( $field_key, $data ) ) {
			continue;
		}

		$value = bdc_forms_format_field_value( $data[ $field_key ], $field_def );

		if ( '' === trim( $value ) ) {
			continue;
		}

		$rows[] = array(
			'label' => (string) $field_def['label'],
			'value' => $value,
		);
	}

	return $rows;
}

/**
 * Send admin notification email for a form submission.
 *
 * @param string               $form_id     Form identifier.
 * @param array<string, mixed> $data        Sanitized submission data.
 * @param string[]             $attachments Optional attachment file paths.
 * @return bool
 */
function bdc_forms_send_admin_notification( $form_id, array $data, array $attachments = array() ) {
	$form_config = bdc_get_form_config( $form_id );

	if ( ! $form_config ) {
		return false;
	}

	$rows = bdc_forms_build_display_rows( $form_config, $data );

	$inner = bdc_forms_render_email_template(
		'admin-notification',
		array(
			'form_label'   => $form_config['label'],
			'rows'         => $rows,
			'submitted_at' => wp_date( 'F j, Y \a\t g:i a' ),
		)
	);

	$body = bdc_forms_render_email_template(
		'email-wrapper',
		array(
			'content'   => $inner,
			'home_url'  => home_url( '/' ),
			'logo_url'  => get_template_directory_uri() . '/assets/images/bright-dreamers-logo-removebg-preview.png',
			'show_home' => false,
		)
	);

	add_filter( 'wp_mail_content_type', 'bdc_forms_mail_content_type' );

	$sent = wp_mail(
		$form_config['admin_recipients'],
		$form_config['admin_subject'],
		$body,
		array( 'Reply-To: ' . bdc_forms_get_reply_to( $form_config, $data ) ),
		$attachments
	);

	remove_filter( 'wp_mail_content_type', 'bdc_forms_mail_content_type' );

	return $sent;
}

/**
 * Send user confirmation email for a form submission.
 *
 * @param string               $form_id Form identifier.
 * @param array<string, mixed> $data    Sanitized submission data.
 * @return bool
 */
function bdc_forms_send_user_confirmation( $form_id, array $data ) {
	$form_config = bdc_get_form_config( $form_id );

	if ( ! $form_config ) {
		return false;
	}

	$user_email_field = $form_config['user_email_field'] ?? 'email';
	$user_name_field  = $form_config['user_name_field'] ?? 'full_name';

	if ( empty( $data[ $user_email_field ] ) || ! is_email( $data[ $user_email_field ] ) ) {
	return false;
	}

	$first_name = bdc_forms_first_name_from( $data[ $user_name_field ] ?? '' );
	$paragraphs = array();

	foreach ( (array) ( $form_config['user_body'] ?? array() ) as $paragraph ) {
		$paragraphs[] = str_replace( '{{first_name}}', esc_html( $first_name ), $paragraph );
	}

	$inner = bdc_forms_render_email_template(
		'user-confirmation',
		array(
			'paragraphs' => $paragraphs,
		)
	);

	$body = bdc_forms_render_email_template(
		'email-wrapper',
		array(
			'content'   => $inner,
			'home_url'  => home_url( '/' ),
			'logo_url'  => get_template_directory_uri() . '/assets/images/bright-dreamers-logo-removebg-preview.png',
			'show_home' => true,
		)
	);

	add_filter( 'wp_mail_content_type', 'bdc_forms_mail_content_type' );

	$sent = wp_mail(
		$data[ $user_email_field ],
		$form_config['user_subject'],
		$body,
		array( 'Reply-To: ' . bdc_forms_get_admin_from_address() )
	);

	remove_filter( 'wp_mail_content_type', 'bdc_forms_mail_content_type' );

	return $sent;
}

/**
 * Reply-To header for admin notifications.
 *
 * @param array<string, mixed> $form_config Form config.
 * @param array<string, mixed> $data        Sanitized data.
 * @return string
 */
function bdc_forms_get_reply_to( array $form_config, array $data ) {
	$email_field = $form_config['user_email_field'] ?? 'email';
	$name_field  = $form_config['user_name_field'] ?? 'full_name';

	if ( empty( $data[ $email_field ] ) || ! is_email( $data[ $email_field ] ) ) {
		return bdc_forms_get_admin_from_address();
	}

	$name = sanitize_text_field( (string) ( $data[ $name_field ] ?? '' ) );

	if ( '' === $name ) {
		return sanitize_email( $data[ $email_field ] );
	}

	return sprintf( '%s <%s>', $name, sanitize_email( $data[ $email_field ] ) );
}

/**
 * From/reply address based on site admin email.
 *
 * @return string
 */
function bdc_forms_get_admin_from_address() {
	return sanitize_email( get_option( 'admin_email' ) );
}
