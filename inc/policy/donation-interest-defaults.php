<?php
/**
 * Default content and ACF field builders for the Donation Interest page.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Default “Your Impact” sidebar rows.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_donation_impact_defaults() {
	$asset_base = 'assets/images/Donation-form/';

	return array(
		array(
			'slug'  => 'empower',
			'label' => 'Empower',
			'icon'  => bdc_theme_asset_url( $asset_base . '6ac78354-fdbf-4656-a6cc-679bda19ad43-removebg-preview.png' ),
			'title' => 'Empower Children',
			'text'  => 'Help kids explore ideas and build confidence.',
		),
		array(
			'slug'  => 'confidence',
			'label' => 'Confidence',
			'icon'  => bdc_theme_asset_url( $asset_base . '6cff45fc-5da2-497e-afa6-30e2e23833a0-removebg-preview.png' ),
			'title' => 'Build Confidence',
			'text'  => 'Support learning, creativity, and growth.',
		),
		array(
			'slug'  => 'communities',
			'label' => 'Communities',
			'icon'  => bdc_theme_asset_url( $asset_base . '214cf1d0-5f5e-4359-bbfe-771402b4a0fc-removebg-preview.png' ),
			'title' => 'Stronger Communities',
			'text'  => 'Create positive change together.',
		),
	);
}

/**
 * ACF field name for one donation impact row.
 *
 * @param string $slug Row slug.
 * @param string $sub  Sub field: icon, title, text.
 * @return string
 */
function bdc_donation_impact_field_name( $slug, $sub ) {
	return 'donation_impact_' . $slug . '_' . $sub;
}

/**
 * Tabbed ACF fields for the Your Impact sidebar list.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_donation_acf_impact_fields() {
	$fields = array(
		array(
			'key'           => 'field_donation_impact_heading_icon',
			'label'         => 'Heading icon',
			'name'          => 'donation_impact_heading_icon',
			'type'          => 'image',
			'return_format' => 'array',
			'preview_size'  => 'thumbnail',
			'library'       => 'all',
			'instructions'  => 'Leave empty to keep the default icon.',
		),
		array(
			'key'           => 'field_donation_impact_heading',
			'label'         => 'Card heading',
			'name'          => 'donation_impact_heading',
			'type'          => 'text',
			'default_value' => 'Your Impact',
		),
		array(
			'key'     => 'field_donation_impact_intro',
			'label'   => 'Impact rows',
			'name'    => '',
			'type'    => 'message',
			'message' => 'Each tab is one row in Your Impact.',
		),
	);

	foreach ( bdc_get_donation_impact_defaults() as $row ) {
		$slug = $row['slug'];

		$fields[] = array(
			'key'       => 'field_donation_impact_tab_' . $slug,
			'label'     => $row['label'],
			'name'      => '',
			'type'      => 'tab',
			'placement' => 'left',
			'endpoint'  => 0,
		);

		$fields[] = array(
			'key'           => 'field_donation_impact_' . $slug . '_title',
			'label'         => 'Row title',
			'name'          => bdc_donation_impact_field_name( $slug, 'title' ),
			'type'          => 'text',
			'default_value' => $row['title'],
		);

		$fields[] = array(
			'key'           => 'field_donation_impact_' . $slug . '_icon',
			'label'         => 'Row icon',
			'name'          => bdc_donation_impact_field_name( $slug, 'icon' ),
			'type'          => 'image',
			'return_format' => 'array',
			'preview_size'  => 'thumbnail',
			'library'       => 'all',
			'instructions'  => 'Leave empty to keep the default icon.',
		);

		$fields[] = array(
			'key'           => 'field_donation_impact_' . $slug . '_text',
			'label'         => 'Row text',
			'name'          => bdc_donation_impact_field_name( $slug, 'text' ),
			'type'          => 'textarea',
			'rows'          => 2,
			'new_lines'     => '',
			'default_value' => $row['text'],
		);
	}

	return $fields;
}

/**
 * Resolve Your Impact rows from ACF.
 *
 * @param int $post_id Page ID.
 * @return array<int, array<string, mixed>>
 */
function bdc_get_donation_resolved_impact( $post_id ) {
	$post_id = (int) $post_id;
	$items   = array();

	foreach ( bdc_get_donation_impact_defaults() as $default ) {
		$slug = $default['slug'];

		$items[] = array(
			'icon'  => bdc_get_acf_image_url(
				bdc_donation_impact_field_name( $slug, 'icon' ),
				$default['icon'],
				$post_id
			),
			'title' => bdc_get_acf_text(
				bdc_donation_impact_field_name( $slug, 'title' ),
				$default['title'],
				$post_id
			),
			'text'  => bdc_get_acf_text(
				bdc_donation_impact_field_name( $slug, 'text' ),
				$default['text'],
				$post_id
			),
		);
	}

	return $items;
}

/**
 * Pre-fill donation impact title and text in the editor when nothing is saved yet.
 *
 * @param mixed $value   Stored value.
 * @param mixed $post_id Post ID.
 * @param array $field   Field settings.
 * @return mixed
 */
function bdc_acf_load_donation_impact_value( $value, $post_id, $field ) {
	unset( $post_id );

	if ( empty( $field['name'] ) || 0 !== strpos( $field['name'], 'donation_impact_' ) ) {
		return $value;
	}

	if ( is_string( $value ) && '' !== trim( wp_strip_all_tags( $value ) ) ) {
		return $value;
	}

	if ( ! preg_match( '/^donation_impact_([a-z]+)_([a-z_]+)$/', $field['name'], $matches ) ) {
		return $value;
	}

	$slug = $matches[1];
	$sub  = $matches[2];

	if ( 'title' !== $sub && 'text' !== $sub ) {
		return $value;
	}

	foreach ( bdc_get_donation_impact_defaults() as $row ) {
		if ( $row['slug'] !== $slug ) {
			continue;
		}

		return 'title' === $sub ? $row['title'] : $row['text'];
	}

	return $value;
}

add_filter( 'acf/load_value', 'bdc_acf_load_donation_impact_value', 10, 3 );
