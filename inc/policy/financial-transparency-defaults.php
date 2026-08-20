<?php
/**
 * Default content and ACF field builders for the Financial Transparency page.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Asset path prefix for Financial Transparency images.
 *
 * @return string
 */
function bdc_get_financial_asset_base() {
	return 'assets/images/Financial Transparency/';
}

/**
 * Default “Where Your Support Goes” cards.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_financial_support_defaults() {
	$asset_base = bdc_get_financial_asset_base();

	return array(
		array(
			'slug'  => 'programs',
			'icon'  => bdc_theme_asset_url( $asset_base . '02e680ce-5c67-478f-824f-d5e61399cecb-removebg-preview.png' ),
			'title' => 'Programs for Children',
			'text'  => 'Funding creative experiences, workshops, and learning opportunities that help children dream big.',
		),
		array(
			'slug'  => 'community',
			'icon'  => bdc_theme_asset_url( $asset_base . '7d4ac421-beee-4e5c-b89f-7c6103ebba57-removebg-preview.png' ),
			'title' => 'Community & Outreach',
			'text'  => 'Supporting local partnerships, events, and initiatives that connect children with their communities.',
		),
		array(
			'slug'  => 'environment',
			'icon'  => bdc_theme_asset_url( $asset_base . 'b96e81a8-e66c-46e1-a99b-a005e10e8a78-removebg-preview.png' ),
			'title' => 'Safe & Inclusive Environment',
			'text'  => 'Ensuring every child feels welcome, protected, and valued in all our programs.',
		),
		array(
			'slug'  => 'growth',
			'icon'  => bdc_theme_asset_url( $asset_base . '3add6096-920c-4e88-82e8-0fcb86394a86-removebg-preview.png' ),
			'title' => 'Growth & Sustainability',
			'text'  => 'Investing in the long-term health of our organization so we can serve generations of dreamers.',
		),
		array(
			'slug'  => 'operations',
			'icon'  => bdc_theme_asset_url( $asset_base . 'd8ff79b1-91fc-4d24-94ad-80933d538505-removebg-preview.png' ),
			'title' => 'Operations',
			'text'  => 'Covering essential costs that keep our programs running smoothly and responsibly.',
		),
	);
}

/**
 * ACF field name for one support-card sub-field.
 *
 * @param string $slug Card slug.
 * @param string $sub  Sub field: title, icon, text.
 * @return string
 */
function bdc_financial_support_field_name( $slug, $sub ) {
	return 'financial_transparency_support_' . $slug . '_' . $sub;
}

/**
 * Tabbed ACF fields for the support grid.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_financial_acf_support_fields() {
	$fields = array(
		array(
			'key'           => 'field_financial_transparency_support_aria_label',
			'label'         => 'Section aria label',
			'name'          => 'financial_transparency_support_aria_label',
			'type'          => 'text',
			'default_value' => 'Where your support goes',
		),
		array(
			'key'           => 'field_financial_transparency_support_title',
			'label'         => 'Section heading',
			'name'          => 'financial_transparency_support_title',
			'type'          => 'text',
			'default_value' => 'Where Your Support Goes',
		),
		array(
			'key'     => 'field_financial_transparency_support_intro',
			'label'   => 'Support cards',
			'name'    => '',
			'type'    => 'message',
			'message' => 'Each tab is one card in the grid. Change the title, icon, or text to update that card.',
		),
	);

	foreach ( bdc_get_financial_support_defaults() as $row ) {
		$slug = $row['slug'];

		$fields[] = array(
			'key'       => 'field_financial_transparency_support_tab_' . $slug,
			'label'     => $row['title'],
			'name'      => '',
			'type'      => 'tab',
			'placement' => 'left',
			'endpoint'  => 0,
		);

		$fields[] = array(
			'key'           => 'field_financial_transparency_support_' . $slug . '_title',
			'label'         => 'Card title',
			'name'          => bdc_financial_support_field_name( $slug, 'title' ),
			'type'          => 'text',
			'default_value' => $row['title'],
		);

		$fields[] = array(
			'key'           => 'field_financial_transparency_support_' . $slug . '_icon',
			'label'         => 'Card icon',
			'name'          => bdc_financial_support_field_name( $slug, 'icon' ),
			'type'          => 'image',
			'return_format' => 'array',
			'preview_size'  => 'thumbnail',
			'library'       => 'all',
			'instructions'  => 'Leave empty to keep the default icon.',
		);

		$fields[] = array(
			'key'           => 'field_financial_transparency_support_' . $slug . '_text',
			'label'         => 'Card text',
			'name'          => bdc_financial_support_field_name( $slug, 'text' ),
			'type'          => 'textarea',
			'rows'          => 3,
			'new_lines'     => '',
			'default_value' => $row['text'],
		);
	}

	return $fields;
}

/**
 * Resolve support-grid cards from ACF.
 *
 * @param int $post_id Page ID.
 * @return array<int, array<string, mixed>>
 */
function bdc_get_financial_resolved_support( $post_id ) {
	$post_id = (int) $post_id;
	$items   = array();

	foreach ( bdc_get_financial_support_defaults() as $default ) {
		$slug = $default['slug'];

		$items[] = array(
			'icon'  => bdc_get_acf_image_url(
				bdc_financial_support_field_name( $slug, 'icon' ),
				$default['icon'],
				$post_id
			),
			'title' => bdc_get_acf_text(
				bdc_financial_support_field_name( $slug, 'title' ),
				$default['title'],
				$post_id
			),
			'text'  => bdc_get_acf_text(
				bdc_financial_support_field_name( $slug, 'text' ),
				$default['text'],
				$post_id
			),
		);
	}

	return $items;
}

/**
 * Pre-fill support card title and text in the editor when nothing is saved yet.
 *
 * @param mixed $value   Stored value.
 * @param mixed $post_id Post ID.
 * @param array $field   Field settings.
 * @return mixed
 */
function bdc_acf_load_financial_support_value( $value, $post_id, $field ) {
	unset( $post_id );

	if ( empty( $field['name'] ) || 0 !== strpos( $field['name'], 'financial_transparency_support_' ) ) {
		return $value;
	}

	if ( is_string( $value ) && '' !== trim( wp_strip_all_tags( $value ) ) ) {
		return $value;
	}

	if ( ! preg_match( '/^financial_transparency_support_([a-z]+)_([a-z_]+)$/', $field['name'], $matches ) ) {
		return $value;
	}

	$slug = $matches[1];
	$sub  = $matches[2];

	if ( 'title' !== $sub && 'text' !== $sub ) {
		return $value;
	}

	foreach ( bdc_get_financial_support_defaults() as $row ) {
		if ( $row['slug'] !== $slug ) {
			continue;
		}

		return 'title' === $sub ? $row['title'] : $row['text'];
	}

	return $value;
}

/**
 * Default “Our Promise to You” cards.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_financial_promise_defaults() {
	$asset_base = bdc_get_financial_asset_base();

	return array(
		array(
			'slug'  => 'honesty',
			'icon'  => bdc_theme_asset_url( $asset_base . '88926bd0-7c68-4298-8f5c-1f19ee03410b-removebg-preview.png' ),
			'title' => 'Honesty',
			'text'  => 'We communicate openly and truthfully.',
		),
		array(
			'slug'  => 'accountability',
			'icon'  => bdc_theme_asset_url( $asset_base . 'd26bdab9-ecde-42d1-9e97-c852a9b17560-removebg-preview.png' ),
			'title' => 'Accountability',
			'text'  => 'We take responsibility for our actions and decisions.',
		),
		array(
			'slug'  => 'responsibility',
			'icon'  => bdc_theme_asset_url( $asset_base . 'f8b19465-3566-4f66-9e9e-447140dbfe92-removebg-preview.png' ),
			'title' => 'Responsibility',
			'text'  => 'We use resources wisely to maximize our impact.',
		),
		array(
			'slug'  => 'respect',
			'icon'  => bdc_theme_asset_url( $asset_base . '68f3d95e-b891-4109-98dc-9709e057bea6-removebg-preview.png' ),
			'title' => 'Respect',
			'text'  => 'We honor the trust you place in our mission.',
		),
	);
}

/**
 * ACF field name for one promise-card sub-field.
 *
 * @param string $slug Card slug.
 * @param string $sub  Sub field: title, icon, text.
 * @return string
 */
function bdc_financial_promise_field_name( $slug, $sub ) {
	return 'financial_transparency_promise_' . $slug . '_' . $sub;
}

/**
 * Tabbed ACF fields for the promise section.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_financial_acf_promise_fields() {
	$fields = array(
		array(
			'key'           => 'field_financial_transparency_promise_aria_label',
			'label'         => 'Section aria label',
			'name'          => 'financial_transparency_promise_aria_label',
			'type'          => 'text',
			'default_value' => 'Our promise to you',
		),
		array(
			'key'           => 'field_financial_transparency_promise_title',
			'label'         => 'Section heading',
			'name'          => 'financial_transparency_promise_title',
			'type'          => 'text',
			'default_value' => 'Our Promise to You',
		),
		array(
			'key'           => 'field_financial_transparency_promise_footer_text',
			'label'         => 'Footer sentence',
			'name'          => 'financial_transparency_promise_footer_text',
			'type'          => 'textarea',
			'rows'          => 2,
			'new_lines'     => '',
			'default_value' => 'As we grow, we will continue to share updates and stories that show the impact of your support.',
		),
		array(
			'key'           => 'field_financial_transparency_promise_footer_heart',
			'label'         => 'Footer heart icon',
			'name'          => 'financial_transparency_promise_footer_heart',
			'type'          => 'image',
			'return_format' => 'array',
			'preview_size'  => 'thumbnail',
			'library'       => 'all',
			'instructions'  => 'Leave empty to keep the default heart icon.',
		),
		array(
			'key'     => 'field_financial_transparency_promise_intro',
			'label'   => 'Promise cards',
			'name'    => '',
			'type'    => 'message',
			'message' => 'Each tab is one promise card. Change the title, icon, or text to update that card.',
		),
	);

	foreach ( bdc_get_financial_promise_defaults() as $row ) {
		$slug = $row['slug'];

		$fields[] = array(
			'key'       => 'field_financial_transparency_promise_tab_' . $slug,
			'label'     => $row['title'],
			'name'      => '',
			'type'      => 'tab',
			'placement' => 'left',
			'endpoint'  => 0,
		);

		$fields[] = array(
			'key'           => 'field_financial_transparency_promise_' . $slug . '_title',
			'label'         => 'Card title',
			'name'          => bdc_financial_promise_field_name( $slug, 'title' ),
			'type'          => 'text',
			'default_value' => $row['title'],
		);

		$fields[] = array(
			'key'           => 'field_financial_transparency_promise_' . $slug . '_icon',
			'label'         => 'Card icon',
			'name'          => bdc_financial_promise_field_name( $slug, 'icon' ),
			'type'          => 'image',
			'return_format' => 'array',
			'preview_size'  => 'thumbnail',
			'library'       => 'all',
			'instructions'  => 'Leave empty to keep the default icon.',
		);

		$fields[] = array(
			'key'           => 'field_financial_transparency_promise_' . $slug . '_text',
			'label'         => 'Card text',
			'name'          => bdc_financial_promise_field_name( $slug, 'text' ),
			'type'          => 'textarea',
			'rows'          => 3,
			'new_lines'     => '',
			'default_value' => $row['text'],
		);
	}

	return $fields;
}

/**
 * Resolve promise cards from ACF.
 *
 * @param int $post_id Page ID.
 * @return array<int, array<string, mixed>>
 */
function bdc_get_financial_resolved_promise( $post_id ) {
	$post_id = (int) $post_id;
	$items   = array();

	foreach ( bdc_get_financial_promise_defaults() as $default ) {
		$slug = $default['slug'];

		$items[] = array(
			'icon'  => bdc_get_acf_image_url(
				bdc_financial_promise_field_name( $slug, 'icon' ),
				$default['icon'],
				$post_id
			),
			'title' => bdc_get_acf_text(
				bdc_financial_promise_field_name( $slug, 'title' ),
				$default['title'],
				$post_id
			),
			'text'  => bdc_get_acf_text(
				bdc_financial_promise_field_name( $slug, 'text' ),
				$default['text'],
				$post_id
			),
		);
	}

	return $items;
}

/**
 * Pre-fill promise card title and text in the editor when nothing is saved yet.
 *
 * @param mixed $value   Stored value.
 * @param mixed $post_id Post ID.
 * @param array $field   Field settings.
 * @return mixed
 */
function bdc_acf_load_financial_promise_value( $value, $post_id, $field ) {
	unset( $post_id );

	if ( empty( $field['name'] ) || 0 !== strpos( $field['name'], 'financial_transparency_promise_' ) ) {
		return $value;
	}

	if ( is_string( $value ) && '' !== trim( wp_strip_all_tags( $value ) ) ) {
		return $value;
	}

	if ( ! preg_match( '/^financial_transparency_promise_([a-z]+)_([a-z_]+)$/', $field['name'], $matches ) ) {
		return $value;
	}

	$slug = $matches[1];
	$sub  = $matches[2];

	if ( 'title' !== $sub && 'text' !== $sub ) {
		return $value;
	}

	foreach ( bdc_get_financial_promise_defaults() as $row ) {
		if ( $row['slug'] !== $slug ) {
			continue;
		}

		return 'title' === $sub ? $row['title'] : $row['text'];
	}

	return $value;
}

add_filter( 'acf/load_value', 'bdc_acf_load_financial_support_value', 10, 3 );
add_filter( 'acf/load_value', 'bdc_acf_load_financial_promise_value', 10, 3 );
