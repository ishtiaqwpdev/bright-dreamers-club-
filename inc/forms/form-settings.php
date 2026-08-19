<?php
/**
 * Bright Dreamers form notification settings (admin UI + runtime merge).
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'BDC_FORM_SETTINGS_OPTION', 'bdc_form_settings' );

/**
 * Settings tabs for the admin screen.
 *
 * @return array<string, string>
 */
function bdc_get_form_settings_tabs() {
	return array(
		'general'               => __( 'General', 'bright-dreamers-club' ),
		'newsletter_signup'     => __( 'Newsletter Signup', 'bright-dreamers-club' ),
		'donation_interest'     => __( 'Donation Interest', 'bright-dreamers-club' ),
		'apply_to_join'         => __( 'Apply to Join', 'bright-dreamers-club' ),
		'partner_inquiry'       => __( 'Partner Inquiry', 'bright-dreamers-club' ),
		'contact'               => __( 'Contact', 'bright-dreamers-club' ),
		'volunteer_application' => __( 'Volunteer Application', 'bright-dreamers-club' ),
		'photo_media_consent'   => __( 'Photo & Media Consent', 'bright-dreamers-club' ),
	);
}

/**
 * Convert user email paragraphs to textarea value.
 *
 * @param string[] $paragraphs Paragraph list.
 * @return string
 */
function bdc_form_settings_user_body_to_text( array $paragraphs ) {
	return implode( "\n\n", array_map( 'strval', $paragraphs ) );
}

/**
 * Parse textarea user email body into paragraphs.
 *
 * @param string $text Raw textarea value.
 * @return string[]
 */
function bdc_form_settings_parse_user_body( $text ) {
	$text = trim( (string) $text );

	if ( '' === $text ) {
		return array();
	}

	$parts = preg_split( "/\r\n|\r|\n\s*\r?\n/", $text );

	if ( ! is_array( $parts ) ) {
		return array( $text );
	}

	return array_values(
		array_filter(
			array_map(
				static function ( $part ) {
					return trim( (string) $part );
				},
				$parts
			),
			static function ( $part ) {
				return '' !== $part;
			}
		)
	);
}

/**
 * Build default editable settings from base form config.
 *
 * @return array<string, mixed>
 */
function bdc_build_default_form_settings() {
	$base     = bdc_get_forms_base_config();
	$settings = array(
		'admin_emails' => (string) get_option( 'admin_email' ),
		'forms'        => array(),
	);

	foreach ( $base as $form_id => $form ) {
		$settings['forms'][ $form_id ] = array(
			'admin_subject' => (string) ( $form['admin_subject'] ?? '' ),
			'user_subject'  => (string) ( $form['user_subject'] ?? '' ),
			'user_body'     => bdc_form_settings_user_body_to_text( (array) ( $form['user_body'] ?? array() ) ),
			'success'       => wp_parse_args(
				(array) ( $form['success'] ?? array() ),
				array(
					'title'   => '',
					'lead'    => '',
					'text'    => '',
					'tagline' => 'Dream • Create • Grow • Give',
					'note'    => '',
				)
			),
		);
	}

	return $settings;
}

/**
 * Settings used to populate the admin form.
 *
 * @return array<string, mixed>
 */
function bdc_get_form_settings_for_admin() {
	$defaults = bdc_build_default_form_settings();
	$stored   = get_option( BDC_FORM_SETTINGS_OPTION, array() );

	if ( ! is_array( $stored ) ) {
		return $defaults;
	}

	$settings = array(
		'admin_emails' => (string) ( $stored['admin_emails'] ?? $defaults['admin_emails'] ),
		'forms'        => array(),
	);

	foreach ( $defaults['forms'] as $form_id => $default_form ) {
		$stored_form = isset( $stored['forms'][ $form_id ] ) && is_array( $stored['forms'][ $form_id ] )
			? $stored['forms'][ $form_id ]
			: array();

		$settings['forms'][ $form_id ] = array(
			'admin_subject' => (string) ( $stored_form['admin_subject'] ?? $default_form['admin_subject'] ),
			'user_subject'  => (string) ( $stored_form['user_subject'] ?? $default_form['user_subject'] ),
			'user_body'     => (string) ( $stored_form['user_body'] ?? $default_form['user_body'] ),
			'success'       => wp_parse_args(
				isset( $stored_form['success'] ) && is_array( $stored_form['success'] ) ? $stored_form['success'] : array(),
				$default_form['success']
			),
		);
	}

	return $settings;
}

/**
 * Parse comma/line separated admin emails.
 *
 * @param string $raw Raw email list.
 * @return string[]
 */
function bdc_parse_admin_email_list( $raw ) {
	$raw = str_replace( array( "\r\n", "\r", "\n", ';' ), ',', (string) $raw );
	$parts = array_map( 'trim', explode( ',', $raw ) );

	return array_values(
		array_filter(
			array_map( 'sanitize_email', $parts ),
			'is_email'
		)
	);
}

/**
 * Admin notification recipients from saved settings.
 *
 * @return string[]
 */
function bdc_get_form_admin_recipients() {
	$stored = get_option( BDC_FORM_SETTINGS_OPTION, array() );

	if ( is_array( $stored ) && ! empty( $stored['admin_emails'] ) ) {
		$parsed = bdc_parse_admin_email_list( $stored['admin_emails'] );

		if ( ! empty( $parsed ) ) {
			return $parsed;
		}
	}

	$email = apply_filters( 'bdc_forms_admin_email', get_option( 'admin_email' ) );

	return array_filter( array( sanitize_email( $email ) ) );
}

/**
 * Merge saved theme settings into runtime form config.
 *
 * @param array<string, array<string, mixed>> $config Base config.
 * @return array<string, array<string, mixed>>
 */
function bdc_apply_saved_form_settings( array $config ) {
	$stored = get_option( BDC_FORM_SETTINGS_OPTION, false );

	if ( false === $stored || ! is_array( $stored ) ) {
		return $config;
	}

	$recipients = bdc_get_form_admin_recipients();

	if ( ! empty( $recipients ) ) {
		foreach ( $config as $form_id => &$form ) {
			$form['admin_recipients'] = $recipients;
		}
		unset( $form );
	}

	if ( empty( $stored['forms'] ) || ! is_array( $stored['forms'] ) ) {
		return $config;
	}

	foreach ( $config as $form_id => &$form ) {
		if ( empty( $stored['forms'][ $form_id ] ) || ! is_array( $stored['forms'][ $form_id ] ) ) {
			continue;
		}

		$over = $stored['forms'][ $form_id ];

		if ( ! empty( $over['admin_subject'] ) ) {
			$form['admin_subject'] = (string) $over['admin_subject'];
		}

		if ( ! empty( $over['user_subject'] ) ) {
			$form['user_subject'] = (string) $over['user_subject'];
		}

		if ( ! empty( $over['user_body'] ) ) {
			$paragraphs = bdc_form_settings_parse_user_body( $over['user_body'] );

			if ( ! empty( $paragraphs ) ) {
				$form['user_body'] = $paragraphs;
			}
		}

		if ( ! empty( $over['success'] ) && is_array( $over['success'] ) ) {
			$form['success'] = wp_parse_args( $over['success'], (array) ( $form['success'] ?? array() ) );
		}
	}
	unset( $form );

	return $config;
}

/**
 * Sanitize settings saved from wp-admin.
 *
 * @param mixed $input Raw input.
 * @return array<string, mixed>
 */
function bdc_sanitize_form_settings( $input ) {
	$defaults = bdc_build_default_form_settings();
	$input    = is_array( $input ) ? $input : array();

	$admin_emails = sanitize_text_field( $input['admin_emails'] ?? $defaults['admin_emails'] );
	$forms        = array();

	foreach ( $defaults['forms'] as $form_id => $default_form ) {
		$raw = isset( $input['forms'][ $form_id ] ) && is_array( $input['forms'][ $form_id ] )
			? $input['forms'][ $form_id ]
			: array();

		$success_raw = isset( $raw['success'] ) && is_array( $raw['success'] ) ? $raw['success'] : array();

		$forms[ $form_id ] = array(
			'admin_subject' => wp_strip_all_tags( $raw['admin_subject'] ?? $default_form['admin_subject'] ),
			'user_subject'  => wp_strip_all_tags( $raw['user_subject'] ?? $default_form['user_subject'] ),
			'user_body'     => sanitize_textarea_field( $raw['user_body'] ?? $default_form['user_body'] ),
			'success'       => array(
				'title'   => sanitize_text_field( $success_raw['title'] ?? $default_form['success']['title'] ),
				'lead'    => sanitize_text_field( $success_raw['lead'] ?? $default_form['success']['lead'] ),
				'text'    => sanitize_textarea_field( $success_raw['text'] ?? $default_form['success']['text'] ),
				'tagline' => sanitize_text_field( $success_raw['tagline'] ?? $default_form['success']['tagline'] ),
				'note'    => sanitize_text_field( $success_raw['note'] ?? $default_form['success']['note'] ),
			),
		);
	}

	return array(
		'admin_emails' => $admin_emails,
		'forms'        => $forms,
	);
}

/**
 * Register form settings option.
 */
function bdc_register_form_settings() {
	register_setting(
		'bdc_form_settings_group',
		BDC_FORM_SETTINGS_OPTION,
		array(
			'type'              => 'array',
			'sanitize_callback' => 'bdc_sanitize_form_settings',
			'default'           => bdc_build_default_form_settings(),
		)
	);
}
add_action( 'admin_init', 'bdc_register_form_settings' );

/**
 * Keep the active settings tab after save.
 *
 * @param string $location Redirect location.
 * @return string
 */
function bdc_form_settings_redirect_with_tab( $location ) {
	if ( false === strpos( $location, 'page=bdc-theme-settings' ) ) {
		return $location;
	}

	$tab = isset( $_POST['bdc_form_settings_active_tab'] ) // phpcs:ignore WordPress.Security.NonceVerification.Missing
		? sanitize_key( wp_unslash( $_POST['bdc_form_settings_active_tab'] ) )
		: '';

	if ( $tab && isset( bdc_get_form_settings_tabs()[ $tab ] ) ) {
		$location = add_query_arg( 'tab', $tab, $location );
	}

	return $location;
}
add_filter( 'wp_redirect', 'bdc_form_settings_redirect_with_tab' );

/**
 * Admin styles for the settings screen.
 *
 * @param string $hook_suffix Current admin page hook.
 */
function bdc_enqueue_form_settings_assets( $hook_suffix ) {
	if ( 'toplevel_page_bdc-theme-settings' !== $hook_suffix ) {
		return;
	}

	wp_enqueue_style(
		'bdc-form-settings-admin',
		get_template_directory_uri() . '/assets/css/admin-form-settings.css',
		array(),
		bdc_asset_version( 'assets/css/admin-form-settings.css' )
	);
}
add_action( 'admin_enqueue_scripts', 'bdc_enqueue_form_settings_assets' );

/**
 * Render one form's settings fields.
 *
 * @param string               $form_id  Form identifier.
 * @param array<string, mixed> $settings Current settings.
 */
function bdc_render_form_settings_fields( $form_id, array $settings ) {
	$form   = $settings['forms'][ $form_id ] ?? array();
	$prefix = BDC_FORM_SETTINGS_OPTION . '[forms][' . $form_id . ']';
	?>
	<table class="form-table bdc-form-settings-table" role="presentation">
		<tr>
			<th scope="row"><label for="<?php echo esc_attr( $form_id . '-admin-subject' ); ?>"><?php esc_html_e( 'Admin email subject', 'bright-dreamers-club' ); ?></label></th>
			<td>
				<input type="text" class="large-text" id="<?php echo esc_attr( $form_id . '-admin-subject' ); ?>" name="<?php echo esc_attr( $prefix . '[admin_subject]' ); ?>" value="<?php echo esc_attr( $form['admin_subject'] ?? '' ); ?>" />
				<p class="description"><?php esc_html_e( 'Sent to your team when this form is submitted.', 'bright-dreamers-club' ); ?></p>
			</td>
		</tr>
		<tr>
			<th scope="row"><label for="<?php echo esc_attr( $form_id . '-user-subject' ); ?>"><?php esc_html_e( 'User confirmation subject', 'bright-dreamers-club' ); ?></label></th>
			<td>
				<input type="text" class="large-text" id="<?php echo esc_attr( $form_id . '-user-subject' ); ?>" name="<?php echo esc_attr( $prefix . '[user_subject]' ); ?>" value="<?php echo esc_attr( $form['user_subject'] ?? '' ); ?>" />
			</td>
		</tr>
		<tr>
			<th scope="row"><label for="<?php echo esc_attr( $form_id . '-user-body' ); ?>"><?php esc_html_e( 'User confirmation message', 'bright-dreamers-club' ); ?></label></th>
			<td>
				<textarea class="large-text code" rows="10" id="<?php echo esc_attr( $form_id . '-user-body' ); ?>" name="<?php echo esc_attr( $prefix . '[user_body]' ); ?>"><?php echo esc_textarea( $form['user_body'] ?? '' ); ?></textarea>
				<p class="description"><?php esc_html_e( 'Use {{first_name}} for the submitter\'s first name. Separate paragraphs with a blank line.', 'bright-dreamers-club' ); ?></p>
			</td>
		</tr>
		<tr>
			<th scope="row" colspan="2"><h2 class="bdc-form-settings-subheading"><?php esc_html_e( 'On-page success message', 'bright-dreamers-club' ); ?></h2></th>
		</tr>
		<tr>
			<th scope="row"><label for="<?php echo esc_attr( $form_id . '-success-title' ); ?>"><?php esc_html_e( 'Title', 'bright-dreamers-club' ); ?></label></th>
			<td><input type="text" class="large-text" id="<?php echo esc_attr( $form_id . '-success-title' ); ?>" name="<?php echo esc_attr( $prefix . '[success][title]' ); ?>" value="<?php echo esc_attr( $form['success']['title'] ?? '' ); ?>" /></td>
		</tr>
		<tr>
			<th scope="row"><label for="<?php echo esc_attr( $form_id . '-success-lead' ); ?>"><?php esc_html_e( 'Lead line', 'bright-dreamers-club' ); ?></label></th>
			<td><input type="text" class="large-text" id="<?php echo esc_attr( $form_id . '-success-lead' ); ?>" name="<?php echo esc_attr( $prefix . '[success][lead]' ); ?>" value="<?php echo esc_attr( $form['success']['lead'] ?? '' ); ?>" /></td>
		</tr>
		<tr>
			<th scope="row"><label for="<?php echo esc_attr( $form_id . '-success-text' ); ?>"><?php esc_html_e( 'Body text', 'bright-dreamers-club' ); ?></label></th>
			<td><textarea class="large-text" rows="4" id="<?php echo esc_attr( $form_id . '-success-text' ); ?>" name="<?php echo esc_attr( $prefix . '[success][text]' ); ?>"><?php echo esc_textarea( $form['success']['text'] ?? '' ); ?></textarea></td>
		</tr>
		<tr>
			<th scope="row"><label for="<?php echo esc_attr( $form_id . '-success-tagline' ); ?>"><?php esc_html_e( 'Tagline', 'bright-dreamers-club' ); ?></label></th>
			<td><input type="text" class="regular-text" id="<?php echo esc_attr( $form_id . '-success-tagline' ); ?>" name="<?php echo esc_attr( $prefix . '[success][tagline]' ); ?>" value="<?php echo esc_attr( $form['success']['tagline'] ?? '' ); ?>" /></td>
		</tr>
		<tr>
			<th scope="row"><label for="<?php echo esc_attr( $form_id . '-success-note' ); ?>"><?php esc_html_e( 'Small note', 'bright-dreamers-club' ); ?></label></th>
			<td>
				<input type="text" class="large-text" id="<?php echo esc_attr( $form_id . '-success-note' ); ?>" name="<?php echo esc_attr( $prefix . '[success][note]' ); ?>" value="<?php echo esc_attr( $form['success']['note'] ?? '' ); ?>" />
				<p class="description"><?php esc_html_e( 'Optional line shown below the Back to Home button.', 'bright-dreamers-club' ); ?></p>
			</td>
		</tr>
	</table>
	<?php
}

/**
 * Render Bright Dreamers form notification settings page.
 */
function bdc_render_form_settings_page() {
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}

	$tabs         = bdc_get_form_settings_tabs();
	$active_tab   = isset( $_GET['tab'] ) ? sanitize_key( wp_unslash( $_GET['tab'] ) ) : 'general'; // phpcs:ignore WordPress.Security.NonceVerification.Recommended
	$settings     = bdc_get_form_settings_for_admin();
	$page_url     = admin_url( 'admin.php?page=bdc-theme-settings' );
	$base_config  = bdc_get_forms_base_config();

	if ( ! isset( $tabs[ $active_tab ] ) ) {
		$active_tab = 'general';
	}
	?>
	<div class="wrap bdc-form-settings-wrap">
		<h1><?php esc_html_e( 'Bright Dreamers — Form Notifications', 'bright-dreamers-club' ); ?></h1>

		<p class="description bdc-form-settings-intro">
			<?php esc_html_e( 'Manage admin notification emails, user confirmation emails, and on-page success messages for all full-page forms.', 'bright-dreamers-club' ); ?>
		</p>

		<nav class="nav-tab-wrapper bdc-form-settings-tabs" aria-label="<?php esc_attr_e( 'Form settings sections', 'bright-dreamers-club' ); ?>">
			<?php foreach ( $tabs as $tab_id => $tab_label ) : ?>
				<a
					href="<?php echo esc_url( add_query_arg( 'tab', $tab_id, $page_url ) ); ?>"
					class="nav-tab <?php echo $active_tab === $tab_id ? 'nav-tab-active' : ''; ?>"
				><?php echo esc_html( $tab_label ); ?></a>
			<?php endforeach; ?>
		</nav>

		<form method="post" action="options.php" class="bdc-form-settings-form">
			<?php settings_fields( 'bdc_form_settings_group' ); ?>
			<input type="hidden" name="bdc_form_settings_active_tab" value="<?php echo esc_attr( $active_tab ); ?>" />

			<?php foreach ( $settings['forms'] as $form_id => $form_values ) : ?>
				<?php
				foreach ( array( 'admin_subject', 'user_subject', 'user_body' ) as $key ) :
					$value = $form_values[ $key ] ?? '';
					if ( 'general' !== $active_tab && $active_tab !== $form_id ) :
						?>
						<input type="hidden" name="<?php echo esc_attr( BDC_FORM_SETTINGS_OPTION . '[forms][' . $form_id . '][' . $key . ']' ); ?>" value="<?php echo esc_attr( $value ); ?>" />
					<?php endif; ?>
				<?php endforeach; ?>

				<?php if ( isset( $form_values['success'] ) && is_array( $form_values['success'] ) ) : ?>
					<?php foreach ( $form_values['success'] as $success_key => $success_value ) : ?>
						<?php if ( 'general' !== $active_tab && $active_tab !== $form_id ) : ?>
							<input type="hidden" name="<?php echo esc_attr( BDC_FORM_SETTINGS_OPTION . '[forms][' . $form_id . '][success][' . $success_key . ']' ); ?>" value="<?php echo esc_attr( $success_value ); ?>" />
						<?php endif; ?>
					<?php endforeach; ?>
				<?php endif; ?>
			<?php endforeach; ?>

			<?php if ( 'general' !== $active_tab ) : ?>
				<input type="hidden" name="<?php echo esc_attr( BDC_FORM_SETTINGS_OPTION . '[admin_emails]' ); ?>" value="<?php echo esc_attr( $settings['admin_emails'] ); ?>" />
			<?php endif; ?>

			<div class="bdc-form-settings-panel">
				<?php if ( 'general' === $active_tab ) : ?>
					<h2><?php esc_html_e( 'General email settings', 'bright-dreamers-club' ); ?></h2>
					<table class="form-table" role="presentation">
						<tr>
							<th scope="row"><label for="bdc-admin-emails"><?php esc_html_e( 'Admin notification email(s)', 'bright-dreamers-club' ); ?></label></th>
							<td>
								<input
									type="text"
									class="large-text"
									id="bdc-admin-emails"
									name="<?php echo esc_attr( BDC_FORM_SETTINGS_OPTION . '[admin_emails]' ); ?>"
									value="<?php echo esc_attr( $settings['admin_emails'] ); ?>"
									placeholder="hello@brightdreamersclub.org"
								/>
								<p class="description"><?php esc_html_e( 'Comma-separated. All form submissions are sent here.', 'bright-dreamers-club' ); ?></p>
							</td>
						</tr>
					</table>

					<div class="notice notice-info inline bdc-form-settings-notice">
						<p>
							<strong><?php esc_html_e( 'Email deliverability tip:', 'bright-dreamers-club' ); ?></strong>
							<?php esc_html_e( 'For reliable delivery, install an SMTP plugin (e.g. WP Mail SMTP) on production hosting.', 'bright-dreamers-club' ); ?>
						</p>
					</div>

					<h2><?php esc_html_e( 'Forms covered by this system', 'bright-dreamers-club' ); ?></h2>
					<ul class="bdc-form-settings-list">
						<?php foreach ( $base_config as $form_id => $form ) : ?>
							<li>
								<a href="<?php echo esc_url( add_query_arg( 'tab', $form_id, $page_url ) ); ?>">
									<?php echo esc_html( $form['label'] ?? $form_id ); ?>
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php else : ?>
					<h2><?php echo esc_html( $base_config[ $active_tab ]['label'] ?? $tabs[ $active_tab ] ); ?></h2>
					<?php bdc_render_form_settings_fields( $active_tab, $settings ); ?>
				<?php endif; ?>
			</div>

			<?php submit_button( __( 'Save Form Settings', 'bright-dreamers-club' ) ); ?>
		</form>
	</div>
	<?php
}
