<?php
/**
 * Theme header — announcement bar, site header, and primary navigation.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$header_announce_text = bdc_get_acf_option_text(
	'global_header_announce_text',
	'A nonprofit community inspiring children to dream, create, learn, lead, and give.'
);
$header_social_links  = bdc_get_acf_option_repeater( 'global_header_social', bdc_get_default_social_links() );
$header_logo_url      = bdc_get_acf_option_image_url(
	'global_header_logo',
	bdc_theme_asset_url( 'assets/images/bright-dreamers-logo-removebg-preview.png' )
);
$header_logo_alt      = bdc_get_acf_option_text(
	'global_header_logo_alt',
	'Bright Dreamers Club — Dream, Create, Grow, Give'
);
$header_donate_text   = bdc_get_acf_option_text( 'global_header_donate_text', 'Donate' );
$header_donate_link   = bdc_get_acf_option_link(
	'global_header_donate_link',
	array(
		'title'  => 'Donate',
		'url'    => home_url( '/donation-interest/' ),
		'target' => '',
	)
);
$header_apply_text    = bdc_get_acf_option_text( 'global_header_apply_text', 'Apply to Join' );
$header_apply_link    = bdc_get_acf_option_link(
	'global_header_apply_link',
	array(
		'title'  => 'Apply to Join',
		'url'    => bdc_page_url( 'apply-to-become.html' ),
		'target' => '',
	)
);
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
			wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container'       => false,
					'menu_class'      => 'site-nav__list',
					'fallback_cb'     => 'bdc_primary_menu_fallback',
					'depth'             => 2,
					'bdc_menu_context'  => 'desktop',
				)
			);
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
		aria-hidden="true"
	>
		<div class="site-container">
			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container'       => false,
					'menu_class'      => 'mobile-menu__list',
					'fallback_cb'     => 'bdc_primary_menu_fallback',
					'depth'             => 2,
					'bdc_menu_context'  => 'mobile',
				)
			);
			?>
			<div class="mobile-menu__actions">
				<a class="btn btn--outline btn-hover" href="<?php echo esc_url( $header_donate_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $header_donate_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>><?php echo esc_html( $header_donate_text ); ?></a>
				<a class="btn btn--solid btn-hover" href="<?php echo esc_url( $header_apply_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $header_apply_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>><?php echo esc_html( $header_apply_text ); ?></a>
			</div>
		</div>
	</div>
</header>
