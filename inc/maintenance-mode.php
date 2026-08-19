<?php
/**
 * Site maintenance mode — theme option with admin bypass.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'BDC_MAINTENANCE_OPTION', 'bdc_maintenance_settings' );

/**
 * Default maintenance settings.
 *
 * @return array<string, mixed>
 */
function bdc_get_maintenance_defaults() {
	return array(
		'enabled'     => 0,
		'title'       => __( 'We\'re updating our site', 'bright-dreamers-club' ),
		'description' => __( 'Bright Dreamers Club is temporarily unavailable while we make improvements. Thank you for your patience — we\'ll be back soon to keep inspiring children to dream, create, grow, and give.', 'bright-dreamers-club' ),
		'note'        => __( 'Please check back shortly.', 'bright-dreamers-club' ),
	);
}

/**
 * Get merged maintenance settings.
 *
 * @return array<string, mixed>
 */
function bdc_get_maintenance_settings() {
	$stored = get_option( BDC_MAINTENANCE_OPTION, array() );

	if ( ! is_array( $stored ) ) {
		$stored = array();
	}

	return wp_parse_args( $stored, bdc_get_maintenance_defaults() );
}

/**
 * Whether maintenance mode is enabled.
 *
 * @return bool
 */
function bdc_is_maintenance_mode_enabled() {
	$settings = bdc_get_maintenance_settings();

	return ! empty( $settings['enabled'] );
}

/**
 * Whether the current request should bypass maintenance mode.
 *
 * @return bool
 */
function bdc_should_bypass_maintenance() {
	if ( ! bdc_is_maintenance_mode_enabled() ) {
		return true;
	}

	if ( is_admin() ) {
		return true;
	}

	if ( wp_doing_ajax() || wp_doing_cron() ) {
		return true;
	}

	global $pagenow;

	if ( isset( $pagenow ) && in_array( $pagenow, array( 'wp-login.php', 'wp-register.php' ), true ) ) {
		return true;
	}

	if ( current_user_can( 'manage_options' ) ) {
		return true;
	}

	return false;
}

/**
 * Show maintenance page to public visitors.
 */
function bdc_maybe_show_maintenance_page() {
	if ( bdc_should_bypass_maintenance() ) {
		return;
	}

	bdc_render_maintenance_page();
	exit;
}
add_action( 'template_redirect', 'bdc_maybe_show_maintenance_page', 0 );

/**
 * Output the maintenance screen.
 */
function bdc_render_maintenance_page() {
	$settings = bdc_get_maintenance_settings();
	$logo_url = get_template_directory_uri() . '/assets/images/bright-dreamers-logo-removebg-preview.png';
	$css_url  = get_template_directory_uri() . '/assets/css/maintenance.css';
	$css_ver  = bdc_asset_version( 'assets/css/maintenance.css' );

	status_header( 503 );
	nocache_headers();
	header( 'Retry-After: 3600' );

	$title       = $settings['title'];
	$description = $settings['description'];
	$note        = $settings['note'];
	?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="noindex, nofollow">
	<title><?php echo esc_html( $title ); ?> &mdash; <?php bloginfo( 'name' ); ?></title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bitter:wght@600;700&family=Outfit:wght@400;500;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo esc_url( $css_url ); ?>?v=<?php echo esc_attr( (string) $css_ver ); ?>">
</head>
<body class="bdc-maintenance-page">
	<main class="bdc-maintenance" role="main">
		<div class="bdc-maintenance__card card-shadow">
			<img
				class="bdc-maintenance__logo"
				src="<?php echo esc_url( $logo_url ); ?>"
				alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"
				width="240"
				height="72"
				decoding="async"
			>

			<p class="bdc-maintenance__badge"><?php esc_html_e( 'Maintenance Mode', 'bright-dreamers-club' ); ?></p>

			<h1 class="bdc-maintenance__title"><?php echo esc_html( $title ); ?></h1>

			<?php if ( $description ) : ?>
				<p class="bdc-maintenance__description"><?php echo esc_html( $description ); ?></p>
			<?php endif; ?>

			<?php if ( $note ) : ?>
				<p class="bdc-maintenance__note"><?php echo esc_html( $note ); ?></p>
			<?php endif; ?>
		</div>
	</main>
</body>
</html>
	<?php
}

/**
 * Register maintenance settings.
 */
function bdc_register_maintenance_settings() {
	register_setting(
		'bdc_maintenance_group',
		BDC_MAINTENANCE_OPTION,
		array(
			'type'              => 'array',
			'sanitize_callback' => 'bdc_sanitize_maintenance_settings',
			'default'           => bdc_get_maintenance_defaults(),
		)
	);
}
add_action( 'admin_init', 'bdc_register_maintenance_settings' );

/**
 * Sanitize maintenance settings from the admin form.
 *
 * @param mixed $input Raw input.
 * @return array<string, mixed>
 */
function bdc_sanitize_maintenance_settings( $input ) {
	$defaults = bdc_get_maintenance_defaults();
	$input    = is_array( $input ) ? $input : array();

	return array(
		'enabled'     => empty( $input['enabled'] ) ? 0 : 1,
		'title'       => sanitize_text_field( $input['title'] ?? $defaults['title'] ),
		'description' => sanitize_textarea_field( $input['description'] ?? $defaults['description'] ),
		'note'        => sanitize_text_field( $input['note'] ?? $defaults['note'] ),
	);
}

/**
 * Add theme maintenance settings page.
 */
function bdc_add_maintenance_settings_page() {
	add_theme_page(
		__( 'Site Maintenance', 'bright-dreamers-club' ),
		__( 'Site Maintenance', 'bright-dreamers-club' ),
		'manage_options',
		'bdc-maintenance',
		'bdc_render_maintenance_settings_page'
	);
}
add_action( 'admin_menu', 'bdc_add_maintenance_settings_page' );

/**
 * Render maintenance settings page.
 */
function bdc_render_maintenance_settings_page() {
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}

	$settings = bdc_get_maintenance_settings();
	$enabled  = ! empty( $settings['enabled'] );
	?>
	<div class="wrap">
		<h1><?php esc_html_e( 'Site Maintenance Mode', 'bright-dreamers-club' ); ?></h1>

		<?php if ( $enabled ) : ?>
			<div class="notice notice-warning">
				<p>
					<strong><?php esc_html_e( 'Maintenance mode is ON.', 'bright-dreamers-club' ); ?></strong>
					<?php esc_html_e( 'Public visitors see the maintenance page. Logged-in administrators can still browse the site normally.', 'bright-dreamers-club' ); ?>
				</p>
			</div>
		<?php else : ?>
			<div class="notice notice-success">
				<p><?php esc_html_e( 'Maintenance mode is OFF. The site is visible to everyone.', 'bright-dreamers-club' ); ?></p>
			</div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'bdc_maintenance_group' ); ?>

			<table class="form-table" role="presentation">
				<tr>
					<th scope="row"><?php esc_html_e( 'Enable maintenance mode', 'bright-dreamers-club' ); ?></th>
					<td>
						<label for="bdc-maintenance-enabled">
							<input
								type="checkbox"
								id="bdc-maintenance-enabled"
								name="<?php echo esc_attr( BDC_MAINTENANCE_OPTION ); ?>[enabled]"
								value="1"
								<?php checked( $enabled ); ?>
							>
							<?php esc_html_e( 'Show maintenance page to visitors', 'bright-dreamers-club' ); ?>
						</label>
						<p class="description">
							<?php esc_html_e( 'Administrators will still see the full site and wp-admin.', 'bright-dreamers-club' ); ?>
						</p>
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="bdc-maintenance-title"><?php esc_html_e( 'Heading', 'bright-dreamers-club' ); ?></label></th>
					<td>
						<input
							type="text"
							class="regular-text"
							id="bdc-maintenance-title"
							name="<?php echo esc_attr( BDC_MAINTENANCE_OPTION ); ?>[title]"
							value="<?php echo esc_attr( $settings['title'] ); ?>"
						>
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="bdc-maintenance-description"><?php esc_html_e( 'Description', 'bright-dreamers-club' ); ?></label></th>
					<td>
						<textarea
							class="large-text"
							rows="5"
							id="bdc-maintenance-description"
							name="<?php echo esc_attr( BDC_MAINTENANCE_OPTION ); ?>[description]"
						><?php echo esc_textarea( $settings['description'] ); ?></textarea>
					</td>
				</tr>
				<tr>
					<th scope="row"><label for="bdc-maintenance-note"><?php esc_html_e( 'Short note', 'bright-dreamers-club' ); ?></label></th>
					<td>
						<input
							type="text"
							class="regular-text"
							id="bdc-maintenance-note"
							name="<?php echo esc_attr( BDC_MAINTENANCE_OPTION ); ?>[note]"
							value="<?php echo esc_attr( $settings['note'] ); ?>"
						>
						<p class="description"><?php esc_html_e( 'Optional line shown below the description.', 'bright-dreamers-club' ); ?></p>
					</td>
				</tr>
			</table>

			<?php submit_button( __( 'Save Maintenance Settings', 'bright-dreamers-club' ) ); ?>
		</form>
	</div>
	<?php
}

/**
 * Dashboard notice when maintenance mode is active.
 */
function bdc_maintenance_admin_notice() {
	if ( ! current_user_can( 'manage_options' ) || ! bdc_is_maintenance_mode_enabled() ) {
		return;
	}

	$url = admin_url( 'themes.php?page=bdc-maintenance' );
	?>
	<div class="notice notice-warning">
		<p>
			<strong><?php esc_html_e( 'Bright Dreamers maintenance mode is active.', 'bright-dreamers-club' ); ?></strong>
			<?php esc_html_e( 'Visitors see the maintenance page.', 'bright-dreamers-club' ); ?>
			<a href="<?php echo esc_url( $url ); ?>"><?php esc_html_e( 'Manage settings', 'bright-dreamers-club' ); ?></a>
		</p>
	</div>
	<?php
}
add_action( 'admin_notices', 'bdc_maintenance_admin_notice' );

/**
 * Admin bar indicator for maintenance mode.
 *
 * @param WP_Admin_Bar $admin_bar Admin bar instance.
 */
function bdc_maintenance_admin_bar_notice( $admin_bar ) {
	if ( ! current_user_can( 'manage_options' ) || ! bdc_is_maintenance_mode_enabled() ) {
		return;
	}

	$admin_bar->add_node(
		array(
			'id'    => 'bdc-maintenance-mode',
			'title' => esc_html__( 'Maintenance: ON', 'bright-dreamers-club' ),
			'href'  => admin_url( 'themes.php?page=bdc-maintenance' ),
			'meta'  => array(
				'class' => 'bdc-maintenance-admin-bar',
			),
		)
	);
}
add_action( 'admin_bar_menu', 'bdc_maintenance_admin_bar_notice', 100 );
