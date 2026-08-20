<?php
/**
 * Default content and ACF field builders for the Photo Media Consent page.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Default “On This Page” sidebar nav rows.
 *
 * Anchors match the form section IDs and are not editable.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_photo_consent_nav_defaults() {
	$asset_base = 'assets/images/Photo & Media conoent form/';

	return array(
		array(
			'slug'      => 'child',
			'label'     => 'Child Information',
			'anchor_id' => 'consent-child',
			'icon'      => bdc_theme_asset_url( $asset_base . '3cf2faca-23f5-4f28-bad2-0b9cae7a26d8-removebg-preview.png' ),
		),
		array(
			'slug'      => 'options',
			'label'     => 'Consent Options',
			'anchor_id' => 'consent-options',
			'icon'      => bdc_theme_asset_url( $asset_base . 'b374bddc-61e4-4aac-8f34-415f539153f3-removebg-preview.png' ),
		),
		array(
			'slug'      => 'usage',
			'label'     => 'Usage & Sharing',
			'anchor_id' => 'consent-usage',
			'icon'      => bdc_theme_asset_url( $asset_base . '23b70f0e-fa13-46ac-b61d-e237fe9be65d__1_-removebg-preview.png' ),
		),
		array(
			'slug'      => 'rights',
			'label'     => 'Your Rights',
			'anchor_id' => 'consent-rights',
			'icon'      => bdc_theme_asset_url( $asset_base . '8dfaeb43-a271-4015-b1d9-07af7165566b-removebg-preview.png' ),
		),
		array(
			'slug'      => 'terms',
			'label'     => 'Terms',
			'anchor_id' => 'consent-terms',
			'icon'      => bdc_theme_asset_url( $asset_base . '81e6b8ad-49f2-4714-a8e8-0133d3824dcd-removebg-preview.png' ),
		),
		array(
			'slug'      => 'signature',
			'label'     => 'Signature',
			'anchor_id' => 'consent-signature',
			'icon'      => bdc_theme_asset_url( $asset_base . '504972f1-7c43-42ab-9310-b8d0690162a1-removebg-preview.png' ),
		),
		array(
			'slug'      => 'contact',
			'label'     => 'Contact Us',
			'anchor_id' => 'consent-contact',
			'icon'      => bdc_theme_asset_url( $asset_base . 'c8787907-a5fc-4a6d-bb5b-434cea33372a-removebg-preview.png' ),
		),
	);
}

/**
 * ACF field name for one sidebar nav row.
 *
 * @param string $slug Row slug.
 * @param string $sub  Sub field: icon, label.
 * @return string
 */
function bdc_photo_consent_nav_field_name( $slug, $sub ) {
	return 'photo_consent_nav_' . $slug . '_' . $sub;
}

/**
 * Tabbed ACF fields for the On This Page sidebar nav.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_photo_consent_acf_nav_fields() {
	$fields = array(
		array(
			'key'           => 'field_photo_consent_main_aria_label',
			'label'         => 'Main section aria label',
			'name'          => 'photo_consent_main_aria_label',
			'type'          => 'text',
			'default_value' => 'Photo and media consent form',
		),
		array(
			'key'           => 'field_photo_consent_sidebar_aria_label',
			'label'         => 'Sidebar aria label',
			'name'          => 'photo_consent_sidebar_aria_label',
			'type'          => 'text',
			'default_value' => 'On this page',
		),
		array(
			'key'           => 'field_photo_consent_sidebar_title',
			'label'         => 'Sidebar heading',
			'name'          => 'photo_consent_sidebar_title',
			'type'          => 'text',
			'default_value' => 'On This Page',
		),
		array(
			'key'           => 'field_photo_consent_nav_aria_label',
			'label'         => 'Navigation aria label',
			'name'          => 'photo_consent_nav_aria_label',
			'type'          => 'text',
			'default_value' => 'Form sections',
		),
		array(
			'key'     => 'field_photo_consent_nav_intro',
			'label'   => 'Sidebar links',
			'name'    => '',
			'type'    => 'message',
			'message' => 'Each tab is one left-sidebar link. Anchors stay tied to the form sections.',
		),
	);

	foreach ( bdc_get_photo_consent_nav_defaults() as $row ) {
		$slug = $row['slug'];

		$fields[] = array(
			'key'       => 'field_photo_consent_nav_tab_' . $slug,
			'label'     => $row['label'],
			'name'      => '',
			'type'      => 'tab',
			'placement' => 'left',
			'endpoint'  => 0,
		);

		$fields[] = array(
			'key'           => 'field_photo_consent_nav_' . $slug . '_icon',
			'label'         => 'Link icon',
			'name'          => bdc_photo_consent_nav_field_name( $slug, 'icon' ),
			'type'          => 'image',
			'return_format' => 'array',
			'preview_size'  => 'thumbnail',
			'library'       => 'all',
			'instructions'  => 'Leave empty to keep the default icon.',
		);

		$fields[] = array(
			'key'           => 'field_photo_consent_nav_' . $slug . '_label',
			'label'         => 'Link label',
			'name'          => bdc_photo_consent_nav_field_name( $slug, 'label' ),
			'type'          => 'text',
			'default_value' => $row['label'],
		);
	}

	$fields[] = array(
		'key'       => 'field_photo_consent_trust_tab',
		'label'     => 'Trust card',
		'name'      => '',
		'type'      => 'tab',
		'placement' => 'left',
		'endpoint'  => 0,
	);

	$fields[] = array(
		'key'           => 'field_photo_consent_trust_icon',
		'label'         => 'Card icon',
		'name'          => 'photo_consent_trust_icon',
		'type'          => 'image',
		'return_format' => 'array',
		'preview_size'  => 'thumbnail',
		'library'       => 'all',
		'instructions'  => 'Leave empty to keep the default illustration.',
	);

	$fields[] = array(
		'key'           => 'field_photo_consent_trust_heading',
		'label'         => 'Card heading',
		'name'          => 'photo_consent_trust_heading',
		'type'          => 'text',
		'default_value' => 'Your Trust Matters',
	);

	$fields[] = array(
		'key'           => 'field_photo_consent_trust_text',
		'label'         => 'Card text',
		'name'          => 'photo_consent_trust_text',
		'type'          => 'textarea',
		'rows'          => 3,
		'new_lines'     => '',
		'default_value' => 'We respect your decisions and will always protect your child\'s privacy and dignity.',
	);

	return $fields;
}

/**
 * Resolve On This Page nav rows from ACF.
 *
 * @param int $post_id Page ID.
 * @return array<int, array<string, mixed>>
 */
function bdc_get_photo_consent_resolved_nav( $post_id ) {
	$post_id = (int) $post_id;
	$items   = array();

	foreach ( bdc_get_photo_consent_nav_defaults() as $default ) {
		$slug = $default['slug'];

		$items[] = array(
			'anchor_id' => $default['anchor_id'],
			'icon'      => bdc_get_acf_image_url(
				bdc_photo_consent_nav_field_name( $slug, 'icon' ),
				$default['icon'],
				$post_id
			),
			'label'     => bdc_get_acf_text(
				bdc_photo_consent_nav_field_name( $slug, 'label' ),
				$default['label'],
				$post_id
			),
		);
	}

	return $items;
}

/**
 * Pre-fill sidebar nav labels in the editor.
 *
 * @param mixed $value   Stored value.
 * @param mixed $post_id Post ID.
 * @param array $field   Field settings.
 * @return mixed
 */
function bdc_acf_load_photo_consent_nav_value( $value, $post_id, $field ) {
	unset( $post_id );

	if ( empty( $field['name'] ) || 0 !== strpos( $field['name'], 'photo_consent_nav_' ) ) {
		return $value;
	}

	if ( is_string( $value ) && '' !== trim( wp_strip_all_tags( $value ) ) ) {
		return $value;
	}

	if ( ! preg_match( '/^photo_consent_nav_([a-z]+)_label$/', $field['name'], $matches ) ) {
		return $value;
	}

	$slug = $matches[1];

	foreach ( bdc_get_photo_consent_nav_defaults() as $row ) {
		if ( $row['slug'] === $slug ) {
			return $row['label'];
		}
	}

	return $value;
}

add_filter( 'acf/load_value', 'bdc_acf_load_photo_consent_nav_value', 10, 3 );
