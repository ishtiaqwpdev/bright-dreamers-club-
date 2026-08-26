<?php
/**
 * Theme header — announcement bar, site header, and primary navigation.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$header = bdc_get_site_header_context();
$header_announce_text = $header['announce_text'];
$header_social_links  = $header['social_links'];
$header_logo_url      = $header['logo_url'];
$header_logo_alt      = $header['logo_alt'];
$header_donate_text   = $header['donate_text'];
$header_donate_link   = $header['donate_link'];
$header_apply_text    = $header['apply_text'];
$header_apply_link    = $header['apply_link'];
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Announcement bar -->
<div class="announce-bar">
	<div class="site-container announce-bar__inner">
		<p class="announce-bar__text">
			<span class="announce-bar__heart" aria-hidden="true">
				<svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor">
					<path
						d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
					/>
				</svg>
			</span>
			<?php echo esc_html( $header_announce_text ); ?>
		</p>
		<ul class="announce-bar__social" aria-label="Social media">
			<?php foreach ( $header_social_links as $social ) : ?>
				<?php
				$social_slug = isset( $social['slug'] ) ? (string) $social['slug'] : '';
				$social_url  = ! empty( $social['url'] ) ? (string) $social['url'] : '';

				if ( '' === $social_slug || '' === $social_url ) {
					continue;
				}
				?>
				<li>
					<a
						class="social-icon"
						href="<?php echo esc_url( $social_url ); ?>"
						target="_blank"
						rel="noopener noreferrer"
						aria-label="<?php echo esc_attr( bdc_get_social_aria_label( $social_slug ) ); ?>"
					>
						<?php bdc_render_social_icon_svg( $social_slug ); ?>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>

<!-- Shared site header -->
<header class="site-header" data-nav>
	<div class="site-container site-header__inner">
		<a class="site-header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Bright Dreamers Club home">
			<img
				src="<?php echo esc_url( $header_logo_url ); ?>"
				alt="<?php echo esc_attr( $header_logo_alt ); ?>"
				width="240"
				height="72"
			>
		</a>

		<nav class="site-nav" aria-label="Primary">
			<?php
			if ( bdc_hf_has_saved_settings() ) {
				bdc_primary_menu_fallback(
					array(
						'bdc_menu_context' => 'desktop',
					)
				);
			} else {
				wp_nav_menu(
					array(
						'theme_location'   => 'primary',
						'container'        => false,
						'menu_class'       => 'site-nav__list',
						'fallback_cb'      => 'bdc_primary_menu_fallback',
						'depth'            => 2,
						'bdc_menu_context' => 'desktop',
					)
				);
			}
			?>
		</nav>

		<div class="site-header__actions">
			<a class="btn btn--outline btn-hover" href="<?php echo esc_url( $header_donate_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $header_donate_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
				<svg class="btn__icon" viewBox="0 0 24 24" width="16" height="16" fill="currentColor" aria-hidden="true">
					<path
						d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
					/>
				</svg>
				<?php echo esc_html( $header_donate_text ); ?>
			</a>
			<a class="btn btn--solid btn-hover" href="<?php echo esc_url( $header_apply_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $header_apply_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>><?php echo esc_html( $header_apply_text ); ?></a>
		</div>

		<button
			class="menu-toggle"
			type="button"
			data-menu-toggle
			aria-expanded="false"
			aria-controls="mobile-menu"
			aria-label="Open menu"
		>
			<span></span>
			<span></span>
			<span></span>
		</button>
	</div>

	<div
		class="mobile-menu"
		id="mobile-menu"
		data-mobile-menu
		role="dialog"
		aria-modal="true"
		aria-label="<?php esc_attr_e( 'Site menu', 'bright-dreamers-club' ); ?>"
		aria-hidden="true"
		inert
	>
		<?php get_template_part( 'template-parts/mobile-nav-menu' ); ?>
	</div>
</header>
