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
 * Resolve a published page ID from its slug/path.
 *
 * @param string $slug Page slug.
 * @return int
 */
function bdc_get_page_id_by_slug( $slug ) {
	$page = get_page_by_path( $slug );

	return $page instanceof WP_Post ? (int) $page->ID : 0;
}

/**
 * Build ACF location rules for a theme page template.
 *
 * Matches explicit template assignment and known page IDs so fields appear in the
 * editor even when WordPress only uses slug-based template hierarchy on the front end.
 *
 * @param string $template_file Theme page template file, e.g. page-about.php.
 * @param string $slug          Optional page slug to also match.
 * @return array<int, array<int, array<string, string>>>
 */
function bdc_get_acf_page_locations( $template_file, $slug = '' ) {
	$locations = array(
		array(
			array(
				'param'    => 'page_template',
				'operator' => '==',
				'value'    => $template_file,
			),
		),
	);

	$page_ids = array();

	if ( '' !== $slug ) {
		$page_ids[] = bdc_get_page_id_by_slug( $slug );
	}

	if ( 'page-privacy-policy.php' === $template_file ) {
		$page_ids[] = (int) get_option( 'wp_page_for_privacy_policy' );
	}

	$page_ids = array_values( array_unique( array_filter( $page_ids ) ) );

	foreach ( $page_ids as $page_id ) {
		$locations[] = array(
			array(
				'param'    => 'page',
				'operator' => '==',
				'value'    => (string) $page_id,
			),
		);
	}

	return $locations;
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
 * Repair UTF-8 text that was saved as Windows-1252 mojibake (e.g. We areâ€¦).
 *
 * @param mixed $text Raw text.
 * @return mixed
 */
function bdc_fix_mojibake( $text ) {
	if ( ! is_string( $text ) || '' === $text ) {
		return $text;
	}

	return strtr(
		$text,
		array(
			'â€¦' => '...',
			'â€“' => '-',
			'â€”' => '-',
			'â€™' => "'",
			'â€˜' => "'",
			'â€œ' => '"',
			'â€' => '"',
		)
	);
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
			return bdc_fix_mojibake( $value );
		}
	}

	return bdc_fix_mojibake( $fallback );
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

				$merged[ $key ] = is_string( $value ) ? bdc_fix_mojibake( $value ) : $value;
			}
		}
	}

	return array_map( 'bdc_fix_mojibake', $merged );
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

/**
 * Read a text/textarea ACF option field with fallback.
 *
 * @param string $field_name Field name.
 * @param string $fallback   Fallback string.
 * @return string
 */
function bdc_get_acf_option_text( $field_name, $fallback ) {
	return bdc_get_acf_text( $field_name, $fallback, 'option' );
}

/**
 * Read an image ACF option field and return a URL with fallback.
 *
 * @param string $field_name   Field name.
 * @param string $fallback_url Fallback image URL.
 * @return string
 */
function bdc_get_acf_option_image_url( $field_name, $fallback_url ) {
	return bdc_get_acf_image_url( $field_name, $fallback_url, 'option' );
}

/**
 * Read a link ACF option field with fallback.
 *
 * @param string               $field_name Field name.
 * @param array<string,string> $fallback   title, url, target.
 * @return array<string, string>
 */
function bdc_get_acf_option_link( $field_name, array $fallback ) {
	return bdc_get_acf_link( $field_name, $fallback, 'option' );
}

/**
 * Read a repeater ACF option field with fallback rows.
 *
 * @param string                           $field_name    Field name.
 * @param array<int, array<string, mixed>> $fallback_rows Default rows.
 * @return array<int, array<string, mixed>>
 */
function bdc_get_acf_option_repeater( $field_name, array $fallback_rows ) {
	return bdc_get_acf_repeater( $field_name, $fallback_rows, 'option' );
}

/**
 * Default announce-bar / footer social link rows.
 *
 * @return array<int, array<string, string>>
 */
function bdc_get_default_social_links() {
	return array(
		array(
			'slug' => 'facebook',
			'url'  => 'https://www.facebook.com/',
		),
		array(
			'slug' => 'instagram',
			'url'  => 'https://www.instagram.com/',
		),
		array(
			'slug' => 'pinterest',
			'url'  => 'https://www.pinterest.com/',
		),
		array(
			'slug' => 'youtube',
			'url'  => 'https://www.youtube.com/',
		),
	);
}

/**
 * Accessible label for a social network slug.
 *
 * @param string $slug facebook|instagram|pinterest|youtube.
 * @return string
 */
function bdc_get_social_aria_label( $slug ) {
	$labels = array(
		'facebook'  => 'Facebook',
		'instagram' => 'Instagram',
		'pinterest' => 'Pinterest',
		'youtube'   => 'YouTube',
	);

	return $labels[ $slug ] ?? ucfirst( (string) $slug );
}

/**
 * Output the inline SVG for a social network slug.
 *
 * @param string $slug facebook|instagram|pinterest|youtube.
 * @return void
 */
function bdc_render_social_icon_svg( $slug ) {
	switch ( $slug ) {
		case 'facebook':
			?>
			<svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor" aria-hidden="true">
				<path
					d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14C17.17 2.09 15.79 2 14.61 2 11.91 2 10 3.66 10 6.7V9.5H7v4h3V22h4v-8.5z"
				/>
			</svg>
			<?php
			break;
		case 'instagram':
			?>
			<svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor" aria-hidden="true">
				<path
					d="M7 2h10a5 5 0 0 1 5 5v10a5 5 0 0 1-5 5H7a5 5 0 0 1-5-5V7a5 5 0 0 1 5-5zm0 2a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3H7zm5 3.5A4.5 4.5 0 1 1 7.5 12 4.5 4.5 0 0 1 12 7.5zm0 2A2.5 2.5 0 1 0 14.5 12 2.5 2.5 0 0 0 12 9.5zM17.5 6a1 1 0 1 1-1 1 1 1 0 0 1 1-1z"
				/>
			</svg>
			<?php
			break;
		case 'pinterest':
			?>
			<svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor" aria-hidden="true">
				<path
					d="M12 2C6.48 2 2 6.48 2 12c0 4.17 2.55 7.74 6.17 9.23-.08-.7-.16-1.78.03-2.55.18-.72 1.14-4.84 1.14-4.84s-.29-.58-.29-1.44c0-1.35.78-2.35 1.76-2.35.83 0 1.23.62 1.23 1.37 0 .83-.53 2.08-.8 3.23-.23.97.48 1.76 1.43 1.76 1.72 0 2.88-2.21 2.88-4.83 0-2-1.35-3.49-3.81-3.49-2.77 0-4.5 2.05-4.5 4.34 0 .79.23 1.35.6 1.78.07.08.08.15.06.23l-.22.9c-.04.14-.12.17-.27.1-1-.47-1.47-1.72-1.47-3.12 0-2.32 1.96-5.1 5.86-5.1 3.13 0 5.2 2.26 5.2 4.69 0 3.21-1.79 5.61-4.43 5.61-.89 0-1.72-.48-2-.99l-.55 2.08c-.2.76-.59 1.71-.88 2.29A10 10 0 0 0 12 22c5.52 0 10-4.48 10-10S17.52 2 12 2z"
				/>
			</svg>
			<?php
			break;
		case 'youtube':
			?>
			<svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor" aria-hidden="true">
				<path
					d="M23.5 6.2a3 3 0 0 0-2.1-2.1C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.4.6A3 3 0 0 0 .5 6.2 31.5 31.5 0 0 0 0 12a31.5 31.5 0 0 0 .5 5.8 3 3 0 0 0 2.1 2.1c1.9.6 9.4.6 9.4.6s7.5 0 9.4-.6a3 3 0 0 0 2.1-2.1A31.5 31.5 0 0 0 24 12a31.5 31.5 0 0 0-.5-5.8zM9.75 15.5v-7l6.5 3.5-6.5 3.5z"
				/>
			</svg>
			<?php
			break;
	}
}

/**
 * Render the shared page hero partial.
 *
 * @param array<string, mixed> $args Hero arguments. See template-parts/page-hero.php.
 * @return void
 */
function bdc_render_page_hero( array $args ) {
	get_template_part( 'template-parts/page-hero', null, $args );
}

/**
 * Join non-empty copy fragments into one supporting paragraph.
 *
 * @param string ...$parts Copy fragments.
 * @return string
 */
function bdc_hero_join_copy( ...$parts ) {
	$clean = array();

	foreach ( $parts as $part ) {
		$part = trim( (string) $part );
		if ( '' !== $part ) {
			$clean[] = $part;
		}
	}

	return implode( ' ', $clean );
}

/**
 * Build escaped headline spans for colored title lines.
 *
 * @param array<int, array{text?:string,class?:string}> $lines Title lines.
 * @return string
 */
function bdc_hero_lines_html( array $lines ) {
	$html = '';

	foreach ( $lines as $line ) {
		$text  = trim( (string) ( $line['text'] ?? '' ) );
		$class = trim( (string) ( $line['class'] ?? '' ) );

		if ( '' === $text ) {
			continue;
		}

		$html .= '<span class="' . esc_attr( $class ) . '">' . esc_html( $text ) . '</span>';
	}

	return $html;
}
