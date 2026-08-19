<?php
/**
 * Helpers for reading ACF fields with theme fallbacks.
 *
 * If ACF is inactive or a field is empty, the original hardcoded default is used
 * so the front end never goes blank.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Front page ID when a static front page is set.
 *
 * @return int
 */
function bdc_get_front_page_id() {
	return (int) get_option( 'page_on_front' );
}

/**
 * Theme asset URL from a path relative to the theme root.
 *
 * @param string $relative_path e.g. assets/images/logo.jpeg.
 * @return string
 */
function bdc_theme_asset_url( $relative_path ) {
	return trailingslashit( get_template_directory_uri() ) . ltrim( $relative_path, '/' );
}

/**
 * Read a text/textarea ACF field with fallback.
 *
 * @param string $field_name Field name.
 * @param string $fallback   Fallback string.
 * @param int    $post_id    Optional post ID.
 * @return string
 */
function bdc_get_acf_text( $field_name, $fallback, $post_id = 0 ) {
	if ( function_exists( 'get_field' ) ) {
		$value = get_field( $field_name, $post_id ?: null );

		if ( is_string( $value ) && '' !== trim( $value ) ) {
			return $value;
		}
	}

	return $fallback;
}

/**
 * Read an image ACF field and return a URL with fallback.
 *
 * @param string $field_name   Field name.
 * @param string $fallback_url Fallback image URL.
 * @param int    $post_id      Optional post ID.
 * @return string
 */
function bdc_get_acf_image_url( $field_name, $fallback_url, $post_id = 0 ) {
	if ( function_exists( 'get_field' ) ) {
		$image = get_field( $field_name, $post_id ?: null );

		if ( is_array( $image ) && ! empty( $image['url'] ) ) {
			return (string) $image['url'];
		}

		if ( is_numeric( $image ) ) {
			$url = wp_get_attachment_image_url( (int) $image, 'full' );

			if ( $url ) {
				return $url;
			}
		}
	}

	return $fallback_url;
}

/**
 * Read a link ACF field with fallback.
 *
 * @param string               $field_name Field name.
 * @param array<string,string> $fallback   title, url, target.
 * @param int                  $post_id    Optional post ID.
 * @return array<string, string>
 */
function bdc_get_acf_link( $field_name, array $fallback, $post_id = 0 ) {
	$fallback = wp_parse_args(
		$fallback,
		array(
			'title'  => '',
			'url'    => '',
			'target' => '',
		)
	);

	if ( function_exists( 'get_field' ) ) {
		$link = get_field( $field_name, $post_id ?: null );

		if ( is_array( $link ) && ! empty( $link['url'] ) ) {
			return array(
				'title'  => '' !== trim( (string) ( $link['title'] ?? '' ) ) ? (string) $link['title'] : $fallback['title'],
				'url'    => (string) $link['url'],
				'target' => (string) ( $link['target'] ?? '' ),
			);
		}
	}

	return $fallback;
}

/**
 * Build target attribute for a link field array.
 *
 * @param array<string, string> $link Link array.
 * @return string HTML attribute fragment, empty if same window.
 */
function bdc_acf_link_target_attr( array $link ) {
	if ( empty( $link['target'] ) ) {
		return '';
	}

	return ' target="' . esc_attr( $link['target'] ) . '" rel="noopener noreferrer"';
}

/**
 * Resolve an ACF image value (array, ID, or empty) to a URL.
 *
 * @param mixed  $image        ACF image value.
 * @param string $fallback_url Fallback URL.
 * @return string
 */
function bdc_acf_image_value_to_url( $image, $fallback_url ) {
	if ( is_array( $image ) && ! empty( $image['url'] ) ) {
		return (string) $image['url'];
	}

	if ( is_numeric( $image ) ) {
		$url = wp_get_attachment_image_url( (int) $image, 'full' );

		if ( $url ) {
			return $url;
		}
	}

	return $fallback_url;
}

/**
 * Resolve a link array with fallback defaults.
 *
 * @param mixed                  $link     ACF link value.
 * @param array<string, string>  $fallback Fallback link.
 * @return array<string, string>
 */
function bdc_resolve_acf_link_value( $link, array $fallback ) {
	$fallback = wp_parse_args(
		$fallback,
		array(
			'title'  => '',
			'url'    => '',
			'target' => '',
		)
	);

	if ( is_array( $link ) && ! empty( $link['url'] ) ) {
		return array(
			'title'  => '' !== trim( (string) ( $link['title'] ?? '' ) ) ? (string) $link['title'] : $fallback['title'],
			'url'    => (string) $link['url'],
			'target' => (string) ( $link['target'] ?? '' ),
		);
	}

	return $fallback;
}

/**
 * Read a group field and merge with defaults (empty values keep fallbacks).
 *
 * @param string               $field_name Field name.
 * @param array<string, mixed> $fallback   Default group values.
 * @param int                  $post_id    Optional post ID.
 * @return array<string, mixed>
 */
function bdc_get_acf_group( $field_name, array $fallback, $post_id = 0 ) {
	$merged = $fallback;

	if ( function_exists( 'get_field' ) ) {
		$group = get_field( $field_name, $post_id ?: null );

		if ( is_array( $group ) ) {
			foreach ( $group as $key => $value ) {
				if ( ! array_key_exists( $key, $fallback ) ) {
					continue;
				}

				if ( is_array( $value ) && empty( $value ) ) {
					continue;
				}

				if ( is_string( $value ) && '' === trim( $value ) ) {
					continue;
				}

				if ( null === $value || false === $value ) {
					continue;
				}

				$merged[ $key ] = $value;
			}
		}
	}

	return $merged;
}

/**
 * Read a repeater field with fallback rows.
 *
 * @param string                             $field_name    Field name.
 * @param array<int, array<string, mixed>>   $fallback_rows Default rows.
 * @param int                                $post_id       Optional post ID.
 * @return array<int, array<string, mixed>>
 */
function bdc_get_acf_repeater( $field_name, array $fallback_rows, $post_id = 0 ) {
	if ( function_exists( 'get_field' ) ) {
		$rows = get_field( $field_name, $post_id ?: null );

		if ( is_array( $rows ) && ! empty( $rows ) ) {
			return $rows;
		}
	}

	return $fallback_rows;
}
