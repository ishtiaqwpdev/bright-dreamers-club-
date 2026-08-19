<?php
/**
 * Theme header — announcement bar, site header, and primary navigation.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
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
			A nonprofit community inspiring children to dream, create, learn, lead,
			and give.
		</p>
		<ul class="announce-bar__social" aria-label="Social media">
			<li>
				<a
					class="social-icon"
					href="https://www.facebook.com/"
					target="_blank"
					rel="noopener noreferrer"
					aria-label="Facebook"
				>
					<svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor" aria-hidden="true">
						<path
							d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14C17.17 2.09 15.79 2 14.61 2 11.91 2 10 3.66 10 6.7V9.5H7v4h3V22h4v-8.5z"
						/>
					</svg>
				</a>
			</li>
			<li>
				<a
					class="social-icon"
					href="https://www.instagram.com/"
					target="_blank"
					rel="noopener noreferrer"
					aria-label="Instagram"
				>
					<svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor" aria-hidden="true">
						<path
							d="M7 2h10a5 5 0 0 1 5 5v10a5 5 0 0 1-5 5H7a5 5 0 0 1-5-5V7a5 5 0 0 1 5-5zm0 2a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3H7zm5 3.5A4.5 4.5 0 1 1 7.5 12 4.5 4.5 0 0 1 12 7.5zm0 2A2.5 2.5 0 1 0 14.5 12 2.5 2.5 0 0 0 12 9.5zM17.5 6a1 1 0 1 1-1 1 1 1 0 0 1 1-1z"
						/>
					</svg>
				</a>
			</li>
			<li>
				<a
					class="social-icon"
					href="https://www.pinterest.com/"
					target="_blank"
					rel="noopener noreferrer"
					aria-label="Pinterest"
				>
					<svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor" aria-hidden="true">
						<path
							d="M12 2C6.48 2 2 6.48 2 12c0 4.17 2.55 7.74 6.17 9.23-.08-.7-.16-1.78.03-2.55.18-.72 1.14-4.84 1.14-4.84s-.29-.58-.29-1.44c0-1.35.78-2.35 1.76-2.35.83 0 1.23.62 1.23 1.37 0 .83-.53 2.08-.8 3.23-.23.97.48 1.76 1.43 1.76 1.72 0 2.88-2.21 2.88-4.83 0-2-1.35-3.49-3.81-3.49-2.77 0-4.5 2.05-4.5 4.34 0 .79.23 1.35.6 1.78.07.08.08.15.06.23l-.22.9c-.04.14-.12.17-.27.1-1-.47-1.47-1.72-1.47-3.12 0-2.32 1.96-5.1 5.86-5.1 3.13 0 5.2 2.26 5.2 4.69 0 3.21-1.79 5.61-4.43 5.61-.89 0-1.72-.48-2-.99l-.55 2.08c-.2.76-.59 1.71-.88 2.29A10 10 0 0 0 12 22c5.52 0 10-4.48 10-10S17.52 2 12 2z"
						/>
					</svg>
				</a>
			</li>
			<li>
				<a
					class="social-icon"
					href="https://www.youtube.com/"
					target="_blank"
					rel="noopener noreferrer"
					aria-label="YouTube"
				>
					<svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor" aria-hidden="true">
						<path
							d="M23.5 6.2a3 3 0 0 0-2.1-2.1C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.4.6A3 3 0 0 0 .5 6.2 31.5 31.5 0 0 0 0 12a31.5 31.5 0 0 0 .5 5.8 3 3 0 0 0 2.1 2.1c1.9.6 9.4.6 9.4.6s7.5 0 9.4-.6a3 3 0 0 0 2.1-2.1A31.5 31.5 0 0 0 24 12a31.5 31.5 0 0 0-.5-5.8zM9.75 15.5v-7l6.5 3.5-6.5 3.5z"
						/>
					</svg>
				</a>
			</li>
		</ul>
	</div>
</div>

<!-- Shared site header -->
<header class="site-header" data-nav>
	<div class="site-container site-header__inner">
		<a class="site-header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Bright Dreamers Club home">
			<img
				src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/bright-dreamers-logo-removebg-preview.png' ); ?>"
				alt="Bright Dreamers Club — Dream, Create, Grow, Give"
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
			<a class="btn btn--outline btn-hover" href="<?php echo esc_url( home_url( '/donation-interest/' ) ); ?>">
				<svg class="btn__icon" viewBox="0 0 24 24" width="16" height="16" fill="currentColor" aria-hidden="true">
					<path
						d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
					/>
				</svg>
				Donate
			</a>
			<a class="btn btn--solid btn-hover" href="<?php echo esc_url( bdc_page_url( 'apply-to-become.html' ) ); ?>">Apply to Join</a>
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
				<a class="btn btn--outline btn-hover" href="<?php echo esc_url( home_url( '/donation-interest/' ) ); ?>">Donate</a>
				<a class="btn btn--solid btn-hover" href="<?php echo esc_url( bdc_page_url( 'apply-to-become.html' ) ); ?>">Apply to Join</a>
			</div>
		</div>
	</div>
</header>
