<?php
/**
 * Mobile off-canvas navigation helpers.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Convert a WordPress menu item list into the theme link tree.
 *
 * @param WP_Post[] $items Menu items.
 * @return array<int, array<string, mixed>>
 */
function bdc_nav_items_from_wp_menu( $items ) {
	$by_parent = array();

	foreach ( $items as $item ) {
		$parent = (int) $item->menu_item_parent;
		if ( ! isset( $by_parent[ $parent ] ) ) {
			$by_parent[ $parent ] = array();
		}
		$by_parent[ $parent ][] = $item;
	}

	$out = array();

	foreach ( $by_parent[0] ?? array() as $item ) {
		$entry = array(
			'label' => (string) $item->title,
			'url'   => (string) $item->url,
		);

		$children = array();

		foreach ( $by_parent[ (int) $item->ID ] ?? array() as $child ) {
			$children[] = array(
				'label' => (string) $child->title,
				'url'   => (string) $child->url,
			);
		}

		if ( ! empty( $children ) ) {
			$entry['children'] = $children;
		}

		$out[] = $entry;
	}

	return $out;
}

/**
 * Menu links for the designed mobile nav (WP menu, saved settings, or defaults).
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_mobile_nav_links() {
	if ( ! bdc_hf_has_saved_settings() && has_nav_menu( 'primary' ) ) {
		$locations = get_nav_menu_locations();

		if ( ! empty( $locations['primary'] ) ) {
			$items = wp_get_nav_menu_items( $locations['primary'] );

			if ( $items ) {
				$converted = bdc_nav_items_from_wp_menu( $items );
				if ( ! empty( $converted ) ) {
					return $converted;
				}
			}
		}
	}

	$links = bdc_get_header_menu_links();

	if ( ! empty( $links ) ) {
		return $links;
	}

	return array_values( bdc_hf_default_menu_items() );
}

/**
 * Normalize a URL to a comparable path slug (leading slash, no trailing slash).
 *
 * @param string $url Absolute or relative URL.
 * @return string
 */
function bdc_nav_url_path( $url ) {
	$path = (string) wp_parse_url( (string) $url, PHP_URL_PATH );
	$path = untrailingslashit( strtolower( $path ) );

	if ( '' === $path || '/' === $path ) {
		return '/';
	}

	$slug = bdc_normalize_page_slug( basename( $path ) );

	return '' === $slug ? '/' : '/' . $slug;
}

/**
 * Current request path used for mobile-nav active states.
 *
 * @return string
 */
function bdc_current_nav_path() {
	if ( is_front_page() ) {
		return '/';
	}

	if ( is_page() ) {
		$page = get_queried_object();
		if ( $page instanceof WP_Post && ! empty( $page->post_name ) ) {
			return '/' . bdc_normalize_page_slug( $page->post_name );
		}
	}

	$request = isset( $_SERVER['REQUEST_URI'] ) ? (string) wp_unslash( $_SERVER['REQUEST_URI'] ) : '';
	$path    = (string) wp_parse_url( $request, PHP_URL_PATH );

	return bdc_nav_url_path( $path );
}

/**
 * Whether a nav URL matches the current page.
 *
 * @param string $url Menu URL.
 * @return bool
 */
function bdc_nav_url_is_current( $url ) {
	return bdc_nav_url_path( $url ) === bdc_current_nav_path();
}

/**
 * Icon key for a top-level mobile nav item.
 *
 * @param string $label Item label.
 * @param string $url   Item URL.
 * @return string
 */
function bdc_mobile_nav_icon_key( $label, $url ) {
	$slug      = ltrim( bdc_nav_url_path( $url ), '/' );
	$label_key = strtolower( trim( (string) $label ) );

	$map = array(
		''             => 'home',
		'index'        => 'home',
		'home'         => 'home',
		'about'        => 'about',
		'about us'     => 'about',
		'explore'      => 'explore',
		'for-parents'  => 'parents',
		'for parents'  => 'parents',
		'our-vision'   => 'vision',
		'our vision'   => 'vision',
		'get-involved' => 'involved',
		'get involved' => 'involved',
		'partners'     => 'partners',
		'contact'      => 'contact',
		'contact us'   => 'contact',
	);

	if ( isset( $map[ $slug ] ) ) {
		return $map[ $slug ];
	}

	if ( isset( $map[ $label_key ] ) ) {
		return $map[ $label_key ];
	}

	return 'default';
}

/**
 * Output the inline SVG for a mobile nav icon key.
 *
 * @param string $key Icon key.
 * @return void
 */
function bdc_render_mobile_nav_icon( $key ) {
	$svg = '';

	switch ( $key ) {
		case 'home':
			$svg = '<svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true"><path d="M12 3.4 3.2 10.8c-.28.24-.1.75.24.75H6.1v8.1c0 .36.3.65.66.65h3.5v-5.2h3.48v5.2h3.5c.36 0 .66-.29.66-.65v-8.1h2.66c.34 0 .52-.51.24-.75L12 3.4z"/></svg>';
			break;
		case 'about':
			$svg = '<svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true"><circle cx="9" cy="8" r="2.45"/><path d="M3.9 17.35c.28-2.7 2.5-4.15 5.1-4.15s4.82 1.45 5.1 4.15c.04.38-.26.75-.67.75H4.57c-.41 0-.71-.37-.67-.75z"/><circle cx="16.35" cy="8.35" r="2.15"/><path d="M13.55 17.35c.18-1.55 1.15-2.7 2.8-3.2 1.55.5 2.7 1.65 2.95 3.2.05.38-.26.75-.67.75h-4.4c-.42 0-.73-.37-.68-.75z"/></svg>';
			break;
		case 'explore':
			$svg = '<svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true"><path d="M12 2.2A9.8 9.8 0 1 0 21.8 12 9.81 9.81 0 0 0 12 2.2zm3.55 6.05-1.55 5.05-5.05 1.55 1.55-5.05 5.05-1.55z"/><circle cx="12" cy="12" r="1.15" fill="#fff"/></svg>';
			break;
		case 'parents':
			$svg = '<svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true"><path d="M12 20.6 10.4 19.15C6.15 15.3 3.4 12.8 3.4 9.55 3.4 7.1 5.3 5.2 7.75 5.2c1.4 0 2.75.66 3.6 1.7.85-1.04 2.2-1.7 3.6-1.7 2.45 0 4.35 1.9 4.35 4.35 0 3.25-2.75 5.75-7 9.6L12 20.6z"/></svg>';
			break;
		case 'vision':
			$svg = '<svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true"><path d="m12 3.1 2.15 5.85 6.25.2-4.9 3.85 1.75 6-5.25-3.7-5.25 3.7 1.75-6-4.9-3.85 6.25-.2L12 3.1z"/></svg>';
			break;
		case 'involved':
			$svg = '<svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true"><path d="M12 14.85 10.95 13.9c-2.55-2.3-4.15-3.75-4.15-5.6 0-1.25.95-2.2 2.2-2.2.7 0 1.4.32 1.85.85.45-.53 1.15-.85 1.85-.85 1.25 0 2.2.95 2.2 2.2 0 1.85-1.6 3.3-4.15 5.6L12 14.85z"/><path d="M4.4 16.4c.85-1.15 2.15-1.85 3.55-2.05.35.4.75.78 1.2 1.15L8.4 16.2c-.35.32-.9.3-1.22-.05l-2.3-2.5c-.2-.22-.15-.58.1-.75.22-.16.54-.12.72.1l.7.7zm15.2 0-2.78-2.4c.22-.22.54-.26.76-.1.25.17.3.53.1.75l-2.3 2.5c-.32.35-.87.37-1.22.05l-.75-.7c.45-.37.85-.75 1.2-1.15 1.4.2 2.7.9 3.55 2.05.2.26.58.3.8.1.25-.18.3-.52.14-.75l-.5-.35z"/></svg>';
			break;
		case 'partners':
			$svg = '<svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true"><path d="M8.35 13.55 5.2 10.4a1.55 1.55 0 0 1 2.2-2.2l2.15 2.15.95-.95 3.55 3.55c.5.5.5 1.3 0 1.8l-.45.45c-.5.5-1.3.5-1.8 0l-1.35-1.35-2.1.7zm7.3-2.2 2.95-2.95a1.55 1.55 0 1 0-2.2-2.2l-2.15 2.15-1-.95-1.15 1.15 3.55 3.55.9-.85c.55-.5.55-1.35.1-1.9z"/></svg>';
			break;
		case 'contact':
			$svg = '<svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true"><path d="M4.4 6.2A2.2 2.2 0 0 1 6.6 4h10.8a2.2 2.2 0 0 1 2.2 2.2v11.1a2.2 2.2 0 0 1-2.2 2.2H6.6a2.2 2.2 0 0 1-2.2-2.2V6.2zm1.45.55 6.15 4.2 6.15-4.2H5.85z"/></svg>';
			break;
		default:
			$svg = '<svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor" aria-hidden="true"><circle cx="12" cy="12" r="4.5"/></svg>';
			break;
	}

	echo $svg; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}
