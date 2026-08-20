<?php
/**
 * Default content and ACF field builders for the Partner Inquiry page.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Default “About Partnerships” sidebar rows.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_partner_about_defaults() {
	$asset_base = 'assets/images/Partner inquery form/';

	return array(
		array(
			'slug'  => 'creative',
			'label' => 'Creative',
			'icon'  => bdc_theme_asset_url( $asset_base . 'bb82fd16-57fa-467c-b022-eb4b24b91569-removebg-preview.png' ),
			'text'  => 'We welcome creative, meaningful partnerships.',
		),
		array(
			'slug'  => 'safety',
			'label' => 'Safety',
			'icon'  => bdc_theme_asset_url( $asset_base . 'fd83dcce-5e29-4f24-ba61-2a9addaf1e96-removebg-preview-e1786252180908.png' ),
			'text'  => 'We prioritize child safety and thoughtful collaboration.',
		),
		array(
			'slug'  => 'values',
			'label' => 'Values',
			'icon'  => bdc_theme_asset_url( $asset_base . '97f4da01-f16f-4e98-9267-60d7e64423e6__1_-removebg-preview.png' ),
			'text'  => 'We look for partners who align with our values.',
		),
	);
}

/**
 * ACF field name for one About Partnerships row.
 *
 * @param string $slug Row slug.
 * @param string $sub  Sub field: icon, text.
 * @return string
 */
function bdc_partner_about_field_name( $slug, $sub ) {
	return 'partner_about_' . $slug . '_' . $sub;
}

/**
 * Tabbed ACF fields for the About Partnerships sidebar list.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_partner_acf_about_fields() {
	$fields = array(
		array(
			'key'           => 'field_partner_about_heading_icon',
			'label'         => 'Heading icon',
			'name'          => 'partner_about_heading_icon',
			'type'          => 'image',
			'return_format' => 'array',
			'preview_size'  => 'thumbnail',
			'library'       => 'all',
			'instructions'  => 'Leave empty to keep the default icon.',
		),
		array(
			'key'           => 'field_partner_about_heading',
			'label'         => 'Card heading',
			'name'          => 'partner_about_heading',
			'type'          => 'text',
			'default_value' => 'About Partnerships',
		),
		array(
			'key'           => 'field_partner_about_intro',
			'label'         => 'Intro paragraph',
			'name'          => 'partner_about_intro',
			'type'          => 'textarea',
			'rows'          => 3,
			'new_lines'     => '',
			'default_value' => 'Bright Dreamers partners with organizations, businesses, and community members who share our vision.',
		),
		array(
			'key'     => 'field_partner_about_rows_intro',
			'label'   => 'About rows',
			'name'    => '',
			'type'    => 'message',
			'message' => 'Each tab is one row in About Partnerships.',
		),
	);

	foreach ( bdc_get_partner_about_defaults() as $row ) {
		$slug = $row['slug'];

		$fields[] = array(
			'key'       => 'field_partner_about_tab_' . $slug,
			'label'     => $row['label'],
			'name'      => '',
			'type'      => 'tab',
			'placement' => 'left',
			'endpoint'  => 0,
		);

		$fields[] = array(
			'key'           => 'field_partner_about_' . $slug . '_icon',
			'label'         => 'Row icon',
			'name'          => bdc_partner_about_field_name( $slug, 'icon' ),
			'type'          => 'image',
			'return_format' => 'array',
			'preview_size'  => 'thumbnail',
			'library'       => 'all',
			'instructions'  => 'Leave empty to keep the default icon.',
		);

		$fields[] = array(
			'key'           => 'field_partner_about_' . $slug . '_text',
			'label'         => 'Row text',
			'name'          => bdc_partner_about_field_name( $slug, 'text' ),
			'type'          => 'textarea',
			'rows'          => 2,
			'new_lines'     => '',
			'default_value' => $row['text'],
		);
	}

	return $fields;
}

/**
 * Resolve About Partnerships rows from ACF.
 *
 * @param int $post_id Page ID.
 * @return array<int, array<string, mixed>>
 */
function bdc_get_partner_resolved_about( $post_id ) {
	$post_id = (int) $post_id;
	$items   = array();

	foreach ( bdc_get_partner_about_defaults() as $default ) {
		$slug = $default['slug'];

		$items[] = array(
			'icon' => bdc_get_acf_image_url(
				bdc_partner_about_field_name( $slug, 'icon' ),
				$default['icon'],
				$post_id
			),
			'text' => bdc_get_acf_text(
				bdc_partner_about_field_name( $slug, 'text' ),
				$default['text'],
				$post_id
			),
		);
	}

	return $items;
}

/**
 * Pre-fill About Partnerships row text in the editor.
 *
 * @param mixed $value   Stored value.
 * @param mixed $post_id Post ID.
 * @param array $field   Field settings.
 * @return mixed
 */
function bdc_acf_load_partner_about_value( $value, $post_id, $field ) {
	unset( $post_id );

	if ( empty( $field['name'] ) || 0 !== strpos( $field['name'], 'partner_about_' ) ) {
		return $value;
	}

	if ( is_string( $value ) && '' !== trim( wp_strip_all_tags( $value ) ) ) {
		return $value;
	}

	if ( ! preg_match( '/^partner_about_([a-z]+)_text$/', $field['name'], $matches ) ) {
		return $value;
	}

	$slug = $matches[1];

	foreach ( bdc_get_partner_about_defaults() as $row ) {
		if ( $row['slug'] === $slug ) {
			return $row['text'];
		}
	}

	return $value;
}

/**
 * Default “What Happens Next?” steps.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_partner_next_defaults() {
	return array(
		array(
			'slug'  => 'review',
			'label' => 'Review',
			'title' => 'We Review Your Inquiry',
			'text'  => 'Our team reads every submission carefully.',
		),
		array(
			'slug'  => 'conversation',
			'label' => 'Conversation',
			'title' => 'We Schedule a Conversation',
			'text'  => 'If it looks like a good fit, we reach out to learn more.',
		),
		array(
			'slug'  => 'explore',
			'label' => 'Explore',
			'title' => 'We Explore Partnership Opportunities',
			'text'  => 'Together, we discuss ways to support children and the community.',
		),
	);
}

/**
 * ACF field name for one What Happens Next step.
 *
 * @param string $slug Step slug.
 * @param string $sub  Sub field: title, text.
 * @return string
 */
function bdc_partner_next_field_name( $slug, $sub ) {
	return 'partner_next_' . $slug . '_' . $sub;
}

/**
 * Tabbed ACF fields for What Happens Next.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_partner_acf_next_fields() {
	$fields = array(
		array(
			'key'           => 'field_partner_next_heading',
			'label'         => 'Card heading',
			'name'          => 'partner_next_heading',
			'type'          => 'text',
			'default_value' => 'What Happens Next?',
		),
		array(
			'key'           => 'field_partner_next_plane',
			'label'         => 'Plane decoration',
			'name'          => 'partner_next_plane',
			'type'          => 'image',
			'return_format' => 'array',
			'preview_size'  => 'medium',
			'library'       => 'all',
			'instructions'  => 'Leave empty to keep the default decoration.',
		),
		array(
			'key'     => 'field_partner_next_intro',
			'label'   => 'Next steps',
			'name'    => '',
			'type'    => 'message',
			'message' => 'Each tab is one step in What Happens Next.',
		),
	);

	foreach ( bdc_get_partner_next_defaults() as $row ) {
		$slug = $row['slug'];

		$fields[] = array(
			'key'       => 'field_partner_next_tab_' . $slug,
			'label'     => $row['label'],
			'name'      => '',
			'type'      => 'tab',
			'placement' => 'left',
			'endpoint'  => 0,
		);

		$fields[] = array(
			'key'           => 'field_partner_next_' . $slug . '_title',
			'label'         => 'Step title',
			'name'          => bdc_partner_next_field_name( $slug, 'title' ),
			'type'          => 'text',
			'default_value' => $row['title'],
		);

		$fields[] = array(
			'key'           => 'field_partner_next_' . $slug . '_text',
			'label'         => 'Step text',
			'name'          => bdc_partner_next_field_name( $slug, 'text' ),
			'type'          => 'textarea',
			'rows'          => 2,
			'new_lines'     => '',
			'default_value' => $row['text'],
		);
	}

	return $fields;
}

/**
 * Resolve What Happens Next steps from ACF.
 *
 * @param int $post_id Page ID.
 * @return array<int, array<string, mixed>>
 */
function bdc_get_partner_resolved_next( $post_id ) {
	$post_id = (int) $post_id;
	$steps   = array();

	foreach ( bdc_get_partner_next_defaults() as $default ) {
		$slug = $default['slug'];

		$steps[] = array(
			'title' => bdc_get_acf_text(
				bdc_partner_next_field_name( $slug, 'title' ),
				$default['title'],
				$post_id
			),
			'text'  => bdc_get_acf_text(
				bdc_partner_next_field_name( $slug, 'text' ),
				$default['text'],
				$post_id
			),
		);
	}

	return $steps;
}

/**
 * Pre-fill What Happens Next title and text in the editor.
 *
 * @param mixed $value   Stored value.
 * @param mixed $post_id Post ID.
 * @param array $field   Field settings.
 * @return mixed
 */
function bdc_acf_load_partner_next_value( $value, $post_id, $field ) {
	unset( $post_id );

	if ( empty( $field['name'] ) || 0 !== strpos( $field['name'], 'partner_next_' ) ) {
		return $value;
	}

	if ( is_string( $value ) && '' !== trim( wp_strip_all_tags( $value ) ) ) {
		return $value;
	}

	if ( ! preg_match( '/^partner_next_([a-z]+)_([a-z_]+)$/', $field['name'], $matches ) ) {
		return $value;
	}

	$slug = $matches[1];
	$sub  = $matches[2];

	if ( 'title' !== $sub && 'text' !== $sub ) {
		return $value;
	}

	foreach ( bdc_get_partner_next_defaults() as $row ) {
		if ( $row['slug'] !== $slug ) {
			continue;
		}

		return 'title' === $sub ? $row['title'] : $row['text'];
	}

	return $value;
}

add_filter( 'acf/load_value', 'bdc_acf_load_partner_about_value', 10, 3 );
add_filter( 'acf/load_value', 'bdc_acf_load_partner_next_value', 10, 3 );
