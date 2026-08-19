<?php
/**
 * Bright Dreamers Club theme functions and definitions.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'BDC_THEME_DIR', get_template_directory() );

require_once BDC_THEME_DIR . '/inc/maintenance-mode.php';
require_once BDC_THEME_DIR . '/inc/forms/forms-config.php';
require_once BDC_THEME_DIR . '/inc/forms/form-settings.php';
require_once BDC_THEME_DIR . '/inc/theme-settings.php';
require_once BDC_THEME_DIR . '/inc/forms/form-handler.php';

/**
 * Map static theme slugs to live WordPress page slugs when they differ.
 *
 * @return array<string, string>
 */
function bdc_get_slug_aliases() {
	return array(
		'apply-to-become'     => 'apply-to-join',
		'photo-media-consent' => 'photo-media-consent-form',
		'partner-inquiry'     => 'partner-inquiry-form',
	);
}

/**
 * Normalize a static or WP slug using theme aliases.
 *
 * @param string $slug Page slug or html filename stem.
 * @return string
 */
function bdc_normalize_page_slug( $slug ) {
	$aliases = bdc_get_slug_aliases();

	return isset( $aliases[ $slug ] ) ? $aliases[ $slug ] : $slug;
}

/**
 * Cache-busting version from file modification time.
 *
 * @param string $relative_path Path relative to theme root, e.g. assets/css/style.css.
 * @return string|false
 */
function bdc_asset_version( $relative_path ) {
	$file = BDC_THEME_DIR . '/' . ltrim( $relative_path, '/' );

	if ( ! file_exists( $file ) ) {
		return false;
	}

	return (string) filemtime( $file );
}

/**
 * Resolve internal page URL from static HTML filename or slug.
 *
 * Uses get_permalink() when a matching WP page exists; otherwise home_url() with default slug path.
 *
 * @param string $html_or_slug e.g. 'about.html' or 'about'.
 * @return string
 */
function bdc_page_url( $html_or_slug ) {
	$slug = strtolower( preg_replace( '/\.html$/', '', basename( $html_or_slug ) ) );
	$slug = bdc_normalize_page_slug( $slug );

	if ( 'index' === $slug ) {
		$front_page_id = (int) get_option( 'page_on_front' );
		if ( $front_page_id ) {
			return get_permalink( $front_page_id );
		}
		return home_url( '/' );
	}

	$page = get_page_by_path( $slug );
	if ( $page ) {
		return get_permalink( $page );
	}

	return home_url( '/' . $slug . '/' );
}

/**
 * Preconnect hints for Google Fonts.
 *
 * @param array  $urls          URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 * @return array
 */
function bdc_resource_hints( $urls, $relation_type ) {
	if ( 'preconnect' !== $relation_type ) {
		return $urls;
	}

	$urls[] = array(
		'href'        => 'https://fonts.googleapis.com',
		'crossorigin' => false,
	);

	$urls[] = array(
		'href'        => 'https://fonts.gstatic.com',
		'crossorigin' => 'anonymous',
	);

	return $urls;
}
add_filter( 'wp_resource_hints', 'bdc_resource_hints', 10, 2 );

/**
 * Theme setup.
 */
function bdc_theme_setup() {
	load_theme_textdomain( 'bright-dreamers-club', BDC_THEME_DIR . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'bright-dreamers-club' ),
		)
	);
}
add_action( 'after_setup_theme', 'bdc_theme_setup' );

/**
 * Match static index.html body class on the front page.
 *
 * @param string[] $classes Body classes.
 * @return string[]
 */
function bdc_front_page_body_class( $classes ) {
	if ( is_front_page() ) {
		$classes[] = 'home-page';
	}

	return $classes;
}
add_filter( 'body_class', 'bdc_front_page_body_class' );

/**
 * Match static HTML body classes for page templates (forms, policies, etc.).
 *
 * Layout and icon sizing CSS is scoped to these body classes in style.css.
 *
 * @param string[] $classes Body classes.
 * @return string[]
 */
function bdc_page_template_body_classes( $classes ) {
	if ( ! is_page() ) {
		return $classes;
	}

	$template_classes = array(
		'page-apply-to-become.php'          => array( 'apply-to-become-page' ),
		'page-donation-interest.php'        => array( 'donation-interest-page', 'apply-to-become-page' ),
		'page-volunteer-application.php'    => array( 'volunteer-application-page', 'apply-to-become-page' ),
		'page-partner-inquiry.php'          => array( 'partner-inquiry-page', 'apply-to-become-page' ),
		'page-newsletter-signup.php'        => array( 'newsletter-signup-page' ),
		'page-newsletter-welcome-email.php' => array( 'newsletter-email-preview-page' ),
		'page-privacy-policy.php'           => array( 'privacy-policy-page', 'media-policy-page' ),
		'page-photo-media-policy.php'       => array( 'media-policy-page' ),
		'page-photo-media-consent.php'      => array( 'media-consent-page', 'media-policy-page' ),
		'page-faq.php'                      => array( 'faq-page' ),
		'page-accessibility.php'            => array( 'accessibility-page' ),
		'page-terms.php'                    => array( 'terms-page' ),
		'page-financial-transparency.php'   => array( 'financial-transparency-page' ),
	);

	$template = get_page_template_slug();

	if ( $template && isset( $template_classes[ $template ] ) ) {
		$classes = array_merge( $classes, $template_classes[ $template ] );
	}

	$page = get_queried_object();
	if ( $page instanceof WP_Post ) {
		$page_slug_classes = array(
			'apply-to-join'               => array( 'apply-to-become-page' ),
			'apply-to-become'             => array( 'apply-to-become-page' ),
			'donation-interest'           => array( 'donation-interest-page', 'apply-to-become-page' ),
			'volunteer'                     => array( 'volunteer-application-page', 'apply-to-become-page' ),
			'volunteer-application'         => array( 'volunteer-application-page', 'apply-to-become-page' ),
			'partner-inquiry'             => array( 'partner-inquiry-page', 'apply-to-become-page' ),
			'partner-inquiry-form'        => array( 'partner-inquiry-page', 'apply-to-become-page' ),
			'newsletter-signup'           => array( 'newsletter-signup-page' ),
			'newsletter-welcome-email'    => array( 'newsletter-email-preview-page' ),
			'privacy-policy'              => array( 'privacy-policy-page', 'media-policy-page' ),
			'photo-media-policy'          => array( 'media-policy-page' ),
			'photo-media-consent'         => array( 'media-consent-page', 'media-policy-page' ),
			'photo-media-consent-form'    => array( 'media-consent-page', 'media-policy-page' ),
			'faq'                         => array( 'faq-page' ),
			'accessibility'               => array( 'accessibility-page' ),
			'terms'                       => array( 'terms-page' ),
			'financial-transparency'      => array( 'financial-transparency-page' ),
		);

		$slug = bdc_normalize_page_slug( $page->post_name );

		if ( isset( $page_slug_classes[ $slug ] ) ) {
			$classes = array_merge( $classes, $page_slug_classes[ $slug ] );
		}
	}

	return array_values( array_unique( $classes ) );
}
add_filter( 'body_class', 'bdc_page_template_body_classes' );

/**
 * Enqueue theme CSS and JS via wp_enqueue_scripts.
 */
function bdc_enqueue_assets() {
	wp_enqueue_style(
		'bdc-google-fonts',
		'https://fonts.googleapis.com/css2?family=Bitter:wght@400;500;600;700;800&family=Outfit:wght@300;400;500;600;700&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'bdc-main',
		get_template_directory_uri() . '/assets/css/style.css',
		array( 'bdc-google-fonts' ),
		bdc_asset_version( 'assets/css/style.css' )
	);

	wp_enqueue_script( 'jquery' );

	wp_enqueue_script(
		'bdc-lazy-images',
		get_template_directory_uri() . '/assets/js/lazy-images.js',
		array( 'jquery' ),
		bdc_asset_version( 'assets/js/lazy-images.js' ),
		true
	);

	wp_enqueue_script(
		'bdc-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array( 'jquery', 'bdc-lazy-images' ),
		bdc_asset_version( 'assets/js/main.js' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'bdc_enqueue_assets' );

/**
 * Append Bright Dreamers nav classes for wp_nav_menu output.
 *
 * @param string[] $classes CSS classes.
 * @param WP_Post  $item    Menu item.
 * @param stdClass $args    wp_nav_menu() args.
 * @param int      $depth   Menu depth.
 * @return string[]
 */
function bdc_nav_menu_css_class( $classes, $item, $args, $depth ) {
	if ( empty( $args->bdc_menu_context ) ) {
		return $classes;
	}

	if ( 'desktop' === $args->bdc_menu_context && 0 === $depth ) {
		$classes[] = 'site-nav__item';
		if ( in_array( 'menu-item-has-children', $classes, true ) ) {
			$classes[] = 'site-nav__item--dropdown';
		}
	}

	if ( 'mobile' === $args->bdc_menu_context && 0 === $depth && in_array( 'menu-item-has-children', $classes, true ) ) {
		$classes[] = 'mobile-menu__group';
	}

	return $classes;
}
add_filter( 'nav_menu_css_class', 'bdc_nav_menu_css_class', 10, 4 );

/**
 * Submenu UL classes for primary navigation.
 *
 * @param string[] $classes CSS classes.
 * @param stdClass $args    wp_nav_menu() args.
 * @param int      $depth   Menu depth.
 * @return string[]
 */
function bdc_nav_menu_submenu_css_class( $classes, $args, $depth ) {
	if ( empty( $args->bdc_menu_context ) ) {
		return $classes;
	}

	if ( 'desktop' === $args->bdc_menu_context && 0 === $depth ) {
		$classes[] = 'site-nav__submenu';
	}

	if ( 'mobile' === $args->bdc_menu_context && 0 === $depth ) {
		$classes[] = 'mobile-menu__sublist';
	}

	return $classes;
}
add_filter( 'nav_menu_submenu_css_class', 'bdc_nav_menu_submenu_css_class', 10, 3 );

/**
 * Anchor classes for primary navigation links.
 *
 * @param array    $atts  Link attributes.
 * @param WP_Post  $item  Menu item.
 * @param stdClass $args  wp_nav_menu() args.
 * @param int      $depth Menu depth.
 * @return array
 */
function bdc_nav_menu_link_attributes( $atts, $item, $args, $depth ) {
	if ( empty( $args->bdc_menu_context ) ) {
		return $atts;
	}

	$classes = isset( $atts['class'] ) ? $atts['class'] . ' ' : '';

	if ( 'desktop' === $args->bdc_menu_context ) {
		if ( 0 === $depth ) {
			$classes .= 'nav-link ';
		} else {
			$classes .= 'site-nav__sublink ';
		}
	}

	if ( ! empty( $item->current ) || ! empty( $item->current_item_ancestor ) ) {
		$classes .= 'is-active';
	}

	if ( ! empty( $classes ) ) {
		$atts['class'] = trim( $classes );
	}

	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'bdc_nav_menu_link_attributes', 10, 4 );

/**
 * Primary navigation links for fallback menus.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_primary_menu_links() {
	return array(
		array( 'url' => home_url( '/' ), 'label' => 'Home' ),
		array( 'url' => home_url( '/about/' ), 'label' => 'About Us' ),
		array(
			'url'      => home_url( '/explore/' ),
			'label'    => 'Explore',
			'children' => array(
				array( 'url' => home_url( '/creative-makers/' ), 'label' => 'Creative Makers' ),
				array( 'url' => home_url( '/young-ideas-lab/' ), 'label' => 'Young Ideas Lab' ),
				array( 'url' => home_url( '/create-for-cause/' ), 'label' => 'Create for a Cause' ),
				array( 'url' => home_url( '/community-adventures/' ), 'label' => 'Community Adventures' ),
			),
		),
		array( 'url' => home_url( '/for-parents/' ), 'label' => 'For Parents' ),
		array( 'url' => home_url( '/our-vision/' ), 'label' => 'Our Vision' ),
		array( 'url' => home_url( '/get-involved/' ), 'label' => 'Get Involved' ),
		array( 'url' => home_url( '/partners/' ), 'label' => 'Partners' ),
		array( 'url' => home_url( '/contact/' ), 'label' => 'Contact' ),
	);
}

/**
 * Fallback desktop menu matching the static HTML structure.
 *
 * @param array $args wp_nav_menu() args.
 */
function bdc_primary_menu_fallback( $args ) {
	if ( isset( $args['bdc_menu_context'] ) && 'mobile' === $args['bdc_menu_context'] ) {
		bdc_mobile_menu_fallback( $args );
		return;
	}

	$links = bdc_get_primary_menu_links();

	echo '<ul class="site-nav__list">';
	foreach ( $links as $link ) {
		if ( ! empty( $link['children'] ) ) {
			echo '<li class="site-nav__item site-nav__item--dropdown">';
			echo '<a class="nav-link" href="' . esc_url( $link['url'] ) . '">' . esc_html( $link['label'] ) . '</a>';
			echo '<ul class="site-nav__submenu">';
			foreach ( $link['children'] as $child ) {
				echo '<li><a class="site-nav__sublink" href="' . esc_url( $child['url'] ) . '">' . esc_html( $child['label'] ) . '</a></li>';
			}
			echo '</ul></li>';
			continue;
		}

		echo '<li><a class="nav-link" href="' . esc_url( $link['url'] ) . '">' . esc_html( $link['label'] ) . '</a></li>';
	}
	echo '</ul>';
}

/**
 * Fallback mobile menu matching the static HTML structure.
 *
 * @param array $args wp_nav_menu() args.
 */
function bdc_mobile_menu_fallback( $args ) {
	$links = bdc_get_primary_menu_links();

	echo '<ul class="mobile-menu__list">';
	foreach ( $links as $link ) {
		if ( ! empty( $link['children'] ) ) {
			echo '<li class="mobile-menu__group">';
			echo '<a href="' . esc_url( $link['url'] ) . '">' . esc_html( $link['label'] ) . '</a>';
			echo '<ul class="mobile-menu__sublist">';
			foreach ( $link['children'] as $child ) {
				echo '<li><a href="' . esc_url( $child['url'] ) . '">' . esc_html( $child['label'] ) . '</a></li>';
			}
			echo '</ul></li>';
			continue;
		}

		echo '<li><a href="' . esc_url( $link['url'] ) . '">' . esc_html( $link['label'] ) . '</a></li>';
	}
	echo '</ul>';
}
