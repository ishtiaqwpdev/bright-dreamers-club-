<?php
/**
 * Default content and ACF field builders for the Newsletter Signup page.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Default “When you subscribe” benefit rows.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_newsletter_benefit_defaults() {
	$asset_base = 'assets/images/Newsletter form/';

	return array(
		array(
			'slug'  => 'stories',
			'label' => 'Stories',
			'icon'  => bdc_theme_asset_url( $asset_base . '2ddeafed-dd66-4ca3-8a5c-055efd2e7083-removebg-preview.png' ),
			'text'  => 'Inspiring stories of our Bright Dreamers in action',
		),
		array(
			'slug'  => 'updates',
			'label' => 'Updates',
			'icon'  => bdc_theme_asset_url( $asset_base . '6684836c-25c8-4147-bcea-ffbe697e500a-removebg-preview.png' ),
			'text'  => 'Updates on new experiences, events, and projects',
		),
		array(
			'slug'  => 'volunteer',
			'label' => 'Volunteer',
			'icon'  => bdc_theme_asset_url( $asset_base . '6fecbcf6-1650-406f-9442-bfed9906a5b8-removebg-preview.png' ),
			'text'  => 'Volunteer opportunities and ways to get involved',
		),
		array(
			'slug'  => 'news',
			'label' => 'News',
			'icon'  => bdc_theme_asset_url( $asset_base . 'ef22b805-101e-48c3-8bb0-e4b965825016-removebg-preview.png' ),
			'text'  => 'News, resources, and community highlights',
		),
	);
}

/**
 * ACF field name for one newsletter benefit row.
 *
 * @param string $slug Row slug.
 * @param string $sub  Sub field: icon, text.
 * @return string
 */
function bdc_newsletter_benefit_field_name( $slug, $sub ) {
	return 'newsletter_benefit_' . $slug . '_' . $sub;
}

/**
 * Tabbed ACF fields for the subscribe-benefits list.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_newsletter_acf_benefit_fields() {
	$fields = array(
		array(
			'key'           => 'field_newsletter_benefits_title',
			'label'         => 'Benefits heading',
			'name'          => 'newsletter_benefits_title',
			'type'          => 'text',
			'default_value' => 'When you subscribe, you\'ll receive:',
		),
		array(
			'key'     => 'field_newsletter_benefits_intro',
			'label'   => 'Benefit rows',
			'name'    => '',
			'type'    => 'message',
			'message' => 'Each tab is one item in When you subscribe, you\'ll receive.',
		),
	);

	foreach ( bdc_get_newsletter_benefit_defaults() as $row ) {
		$slug = $row['slug'];

		$fields[] = array(
			'key'       => 'field_newsletter_benefit_tab_' . $slug,
			'label'     => $row['label'],
			'name'      => '',
			'type'      => 'tab',
			'placement' => 'left',
			'endpoint'  => 0,
		);

		$fields[] = array(
			'key'           => 'field_newsletter_benefit_' . $slug . '_icon',
			'label'         => 'Row icon',
			'name'          => bdc_newsletter_benefit_field_name( $slug, 'icon' ),
			'type'          => 'image',
			'return_format' => 'array',
			'preview_size'  => 'thumbnail',
			'library'       => 'all',
			'instructions'  => 'Leave empty to keep the default icon.',
		);

		$fields[] = array(
			'key'           => 'field_newsletter_benefit_' . $slug . '_text',
			'label'         => 'Row text',
			'name'          => bdc_newsletter_benefit_field_name( $slug, 'text' ),
			'type'          => 'textarea',
			'rows'          => 2,
			'new_lines'     => '',
			'default_value' => $row['text'],
		);
	}

	return $fields;
}

/**
 * Resolve newsletter benefit rows from ACF.
 *
 * @param int $post_id Page ID.
 * @return array<int, array<string, mixed>>
 */
function bdc_get_newsletter_resolved_benefits( $post_id ) {
	$post_id = (int) $post_id;
	$items   = array();

	foreach ( bdc_get_newsletter_benefit_defaults() as $default ) {
		$slug = $default['slug'];

		$items[] = array(
			'icon' => bdc_get_acf_image_url(
				bdc_newsletter_benefit_field_name( $slug, 'icon' ),
				$default['icon'],
				$post_id
			),
			'text' => bdc_get_acf_text(
				bdc_newsletter_benefit_field_name( $slug, 'text' ),
				$default['text'],
				$post_id
			),
		);
	}

	return $items;
}

/**
 * Pre-fill newsletter benefit text in the editor when nothing is saved yet.
 *
 * @param mixed $value   Stored value.
 * @param mixed $post_id Post ID.
 * @param array $field   Field settings.
 * @return mixed
 */
function bdc_acf_load_newsletter_benefit_value( $value, $post_id, $field ) {
	unset( $post_id );

	if ( empty( $field['name'] ) || 0 !== strpos( $field['name'], 'newsletter_benefit_' ) ) {
		return $value;
	}

	if ( is_string( $value ) && '' !== trim( wp_strip_all_tags( $value ) ) ) {
		return $value;
	}

	if ( ! preg_match( '/^newsletter_benefit_([a-z]+)_text$/', $field['name'], $matches ) ) {
		return $value;
	}

	$slug = $matches[1];

	foreach ( bdc_get_newsletter_benefit_defaults() as $row ) {
		if ( $row['slug'] === $slug ) {
			return $row['text'];
		}
	}

	return $value;
}

add_filter( 'acf/load_value', 'bdc_acf_load_newsletter_benefit_value', 10, 3 );
