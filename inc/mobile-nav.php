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
			$svg = '<svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor" aria-hidden="true"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>';
			break;
		case 'about':
			$svg = '<svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor" aria-hidden="true"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>';
			break;
		case 'explore':
			$svg = '<svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm2.19 12.19L6 18l3.81-8.19L18 6l-3.81 8.19z"/></svg>';
			break;
		case 'parents':
			$svg = '<svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor" aria-hidden="true"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>';
			break;
		case 'vision':
			$svg = '<svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor" aria-hidden="true"><path d="M12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>';
			break;
		case 'involved':
			$svg = '<svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor" aria-hidden="true"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/><circle cx="18.4" cy="4.4" r="1.35"/><circle cx="21.15" cy="7.05" r="1"/></svg>';
			break;
		case 'partners':
			$svg = '<svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor" aria-hidden="true"><path d="M11.11 12.16 9.7 10.74a2.12 2.12 0 0 0-3 0L4.5 12.94l2.12 2.12 1.5-1.5 1.41 1.41-1.5 1.5 2.12 2.12 2.2-2.2c.83-.83.83-2.17 0-3zM19.5 11.06l-2.2-2.2-1.41 1.41 1.5 1.5-1.41 1.41-1.5-1.5-2.12 2.12 1.41 1.41 2.2-2.2c.83-.83.83-2.17 0-3zM8.11 6.53 6.7 5.11 4.58 7.23 6.7 9.35 8.11 7.94l.7.7 1.42-1.41-.7-.7 1.42-1.41-1.42-1.42-1.42 1.42zm7.78 0-1.42-1.42-1.41 1.42.7.7-1.41 1.41 1.41 1.42.71-.71 1.41 1.41 2.12-2.12-2.12-2.12z"/></svg>';
			break;
		case 'contact':
			$svg = '<svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor" aria-hidden="true"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4-8 5-8-5V6l8 5 8-5v2z"/></svg>';
			break;
		default:
			$svg = '<svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor" aria-hidden="true"><circle cx="12" cy="12" r="4.5"/></svg>';
			break;
	}

	echo $svg; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}
