<?php
/**
 * Default content and ACF field builders for the Volunteer Application page.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Default “Why Volunteer With Us?” sidebar rows.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_volunteer_why_defaults() {
	$icon = bdc_theme_asset_url( 'assets/images/Volunteer Application/7ac788f3-2674-486b-a5c5-21fe489bb929-removebg-preview.png' );

	return array(
		array(
			'slug'  => 'impact',
			'label' => 'Impact',
			'icon'  => $icon,
			'text'  => 'Make a direct impact on children\'s lives',
		),
		array(
			'slug'  => 'community',
			'label' => 'Community',
			'icon'  => $icon,
			'text'  => 'Join a supportive, creative community',
		),
		array(
			'slug'  => 'flexible',
			'label' => 'Flexible',
			'icon'  => $icon,
			'text'  => 'Flexible opportunities that fit your schedule',
		),
		array(
			'slug'  => 'experience',
			'label' => 'Experience',
			'icon'  => $icon,
			'text'  => 'Gain meaningful experience and connections',
		),
	);
}

/**
 * ACF field name for one Why-Volunteer row.
 *
 * @param string $slug Row slug.
 * @param string $sub  Sub field: icon, text.
 * @return string
 */
function bdc_volunteer_why_field_name( $slug, $sub ) {
	return 'volunteer_why_' . $slug . '_' . $sub;
}

/**
 * Tabbed ACF fields for the Why Volunteer sidebar list.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_volunteer_acf_why_fields() {
	$fields = array(
		array(
			'key'           => 'field_volunteer_why_title_icon',
			'label'         => 'Heading icon',
			'name'          => 'volunteer_why_title_icon',
			'type'          => 'image',
			'return_format' => 'array',
			'preview_size'  => 'thumbnail',
			'library'       => 'all',
			'instructions'  => 'Leave empty to keep the default icon.',
		),
		array(
			'key'           => 'field_volunteer_why_title_line1',
			'label'         => 'Heading line 1',
			'name'          => 'volunteer_why_title_line1',
			'type'          => 'text',
			'default_value' => 'Why Volunteer',
		),
		array(
			'key'           => 'field_volunteer_why_title_line2',
			'label'         => 'Heading line 2',
			'name'          => 'volunteer_why_title_line2',
			'type'          => 'text',
			'default_value' => 'With Us?',
		),
		array(
			'key'     => 'field_volunteer_why_intro',
			'label'   => 'Why volunteer rows',
			'name'    => '',
			'type'    => 'message',
			'message' => 'Each tab is one row in Why Volunteer With Us.',
		),
	);

	foreach ( bdc_get_volunteer_why_defaults() as $row ) {
		$slug = $row['slug'];

		$fields[] = array(
			'key'       => 'field_volunteer_why_tab_' . $slug,
			'label'     => $row['label'],
			'name'      => '',
			'type'      => 'tab',
			'placement' => 'left',
			'endpoint'  => 0,
		);

		$fields[] = array(
			'key'           => 'field_volunteer_why_' . $slug . '_icon',
			'label'         => 'Row icon',
			'name'          => bdc_volunteer_why_field_name( $slug, 'icon' ),
			'type'          => 'image',
			'return_format' => 'array',
			'preview_size'  => 'thumbnail',
			'library'       => 'all',
			'instructions'  => 'Leave empty to keep the default icon.',
		);

		$fields[] = array(
			'key'           => 'field_volunteer_why_' . $slug . '_text',
			'label'         => 'Row text',
			'name'          => bdc_volunteer_why_field_name( $slug, 'text' ),
			'type'          => 'textarea',
			'rows'          => 2,
			'new_lines'     => '',
			'default_value' => $row['text'],
		);
	}

	return $fields;
}

/**
 * Resolve Why Volunteer rows from ACF.
 *
 * @param int $post_id Page ID.
 * @return array<int, array<string, mixed>>
 */
function bdc_get_volunteer_resolved_why( $post_id ) {
	$post_id = (int) $post_id;
	$items   = array();

	foreach ( bdc_get_volunteer_why_defaults() as $default ) {
		$slug = $default['slug'];

		$items[] = array(
			'icon' => bdc_get_acf_image_url(
				bdc_volunteer_why_field_name( $slug, 'icon' ),
				$default['icon'],
				$post_id
			),
			'text' => bdc_get_acf_text(
				bdc_volunteer_why_field_name( $slug, 'text' ),
				$default['text'],
				$post_id
			),
		);
	}

	return $items;
}

/**
 * Pre-fill Why Volunteer row text in the editor when nothing is saved yet.
 *
 * @param mixed $value   Stored value.
 * @param mixed $post_id Post ID.
 * @param array $field   Field settings.
 * @return mixed
 */
function bdc_acf_load_volunteer_why_value( $value, $post_id, $field ) {
	unset( $post_id );

	if ( empty( $field['name'] ) || 0 !== strpos( $field['name'], 'volunteer_why_' ) ) {
		return $value;
	}

	if ( is_string( $value ) && '' !== trim( wp_strip_all_tags( $value ) ) ) {
		return $value;
	}

	if ( ! preg_match( '/^volunteer_why_([a-z]+)_text$/', $field['name'], $matches ) ) {
		return $value;
	}

	$slug = $matches[1];

	foreach ( bdc_get_volunteer_why_defaults() as $row ) {
		if ( $row['slug'] === $slug ) {
			return $row['text'];
		}
	}

	return $value;
}

add_filter( 'acf/load_value', 'bdc_acf_load_volunteer_why_value', 10, 3 );
