<?php
/**
 * Default content and ACF field builders for the Apply to Join page.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Default “About the Application” sidebar rows.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_apply_about_defaults() {
	return array(
		array(
			'slug'      => 'unique',
			'wrap_slot' => true,
			'icon'      => bdc_theme_asset_url( 'assets/images/apply-sidebar-heart.png' ),
			'icon_class'=> 'apply-sidebar-list__icon apply-sidebar-list__icon--heart',
			'text'      => 'There are no wrong answers — we want to hear what makes your child unique.',
		),
		array(
			'slug'      => 'curiosity',
			'wrap_slot' => false,
			'icon'      => bdc_theme_asset_url( 'assets/images/apply-sidebar-star.png' ),
			'icon_class'=> 'apply-sidebar-list__icon',
			'text'      => 'We celebrate curiosity, creativity, and kind hearts.',
		),
		array(
			'slug'      => 'community',
			'wrap_slot' => false,
			'icon'      => bdc_theme_asset_url( 'assets/images/apply-sidebar-group.png' ),
			'icon_class'=> 'apply-sidebar-list__icon',
			'text'      => 'Bright Dreamers is a small, intentional community — not a large program.',
		),
		array(
			'slug'      => 'time',
			'wrap_slot' => false,
			'icon'      => bdc_theme_asset_url( 'assets/images/apply-sidebar-clock.png' ),
			'icon_class'=> 'apply-sidebar-list__icon',
			'text'      => 'Plan for about 10–15 minutes to complete this form thoughtfully.',
		),
		array(
			'slug'      => 'privacy',
			'wrap_slot' => false,
			'icon'      => bdc_theme_asset_url( 'assets/images/apply-sidebar-lock.png' ),
			'icon_class'=> 'apply-sidebar-list__icon',
			'text'      => 'Your information is kept private and read only by our team.',
		),
	);
}

/**
 * ACF field name for one About-the-Application row.
 *
 * @param string $slug Row slug.
 * @param string $sub  Sub field: icon, text.
 * @return string
 */
function bdc_apply_about_field_name( $slug, $sub ) {
	return 'apply_about_' . $slug . '_' . $sub;
}

/**
 * Tabbed ACF fields for the About the Application sidebar card.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_apply_acf_about_fields() {
	$fields = array(
		array(
			'key'           => 'field_apply_about_title',
			'label'         => 'Card heading',
			'name'          => 'apply_about_title',
			'type'          => 'text',
			'default_value' => 'About the Application',
		),
		array(
			'key'     => 'field_apply_about_intro',
			'label'   => 'About items',
			'name'    => '',
			'type'    => 'message',
			'message' => 'Each tab is one row in the About the Application list.',
		),
	);

	foreach ( bdc_get_apply_about_defaults() as $row ) {
		$slug = $row['slug'];

		$fields[] = array(
			'key'       => 'field_apply_about_tab_' . $slug,
			'label'     => ucfirst( $slug ),
			'name'      => '',
			'type'      => 'tab',
			'placement' => 'left',
			'endpoint'  => 0,
		);

		$fields[] = array(
			'key'           => 'field_apply_about_' . $slug . '_icon',
			'label'         => 'Row icon',
			'name'          => bdc_apply_about_field_name( $slug, 'icon' ),
			'type'          => 'image',
			'return_format' => 'array',
			'preview_size'  => 'thumbnail',
			'library'       => 'all',
			'instructions'  => 'Leave empty to keep the default icon.',
		);

		$fields[] = array(
			'key'           => 'field_apply_about_' . $slug . '_text',
			'label'         => 'Row text',
			'name'          => bdc_apply_about_field_name( $slug, 'text' ),
			'type'          => 'textarea',
			'rows'          => 3,
			'new_lines'     => '',
			'default_value' => $row['text'],
		);
	}

	return $fields;
}

/**
 * Resolve About the Application rows from ACF.
 *
 * @param int $post_id Page ID.
 * @return array<int, array<string, mixed>>
 */
function bdc_get_apply_resolved_about( $post_id ) {
	$post_id = (int) $post_id;
	$items   = array();

	foreach ( bdc_get_apply_about_defaults() as $default ) {
		$slug = $default['slug'];

		$items[] = array(
			'wrap_slot'  => ! empty( $default['wrap_slot'] ),
			'icon_class' => $default['icon_class'],
			'icon'       => bdc_get_acf_image_url(
				bdc_apply_about_field_name( $slug, 'icon' ),
				$default['icon'],
				$post_id
			),
			'text'       => bdc_get_acf_text(
				bdc_apply_about_field_name( $slug, 'text' ),
				$default['text'],
				$post_id
			),
		);
	}

	return $items;
}

/**
 * Pre-fill About row text in the editor when nothing is saved yet.
 *
 * @param mixed $value   Stored value.
 * @param mixed $post_id Post ID.
 * @param array $field   Field settings.
 * @return mixed
 */
function bdc_acf_load_apply_about_value( $value, $post_id, $field ) {
	unset( $post_id );

	if ( empty( $field['name'] ) || 0 !== strpos( $field['name'], 'apply_about_' ) ) {
		return $value;
	}

	if ( is_string( $value ) && '' !== trim( wp_strip_all_tags( $value ) ) ) {
		return $value;
	}

	if ( ! preg_match( '/^apply_about_([a-z]+)_text$/', $field['name'], $matches ) ) {
		return $value;
	}

	$slug = $matches[1];

	foreach ( bdc_get_apply_about_defaults() as $row ) {
		if ( $row['slug'] === $slug ) {
			return $row['text'];
		}
	}

	return $value;
}

/**
 * Default “What Happens Next?” timeline steps.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_apply_timeline_defaults() {
	return array(
		array(
			'slug'  => 'review',
			'title' => 'We Review Your Application',
			'text'  => 'Within a few days, our team carefully reads every application we receive.',
		),
		array(
			'slug'  => 'connect',
			'title' => 'We Connect With Your Family',
			'text'  => 'If it looks like a good fit, we reach out to learn more about your child and your hopes.',
		),
		array(
			'slug'  => 'joinchild',
			'title' => 'Your Child Joins Bright Dreamers',
			'text'  => 'Welcome! Your child is invited into upcoming experiences with mentors, peers, and community partners.',
		),
	);
}

/**
 * ACF field name for one timeline step.
 *
 * @param string $slug Step slug.
 * @param string $sub  Sub field: title, text.
 * @return string
 */
function bdc_apply_timeline_field_name( $slug, $sub ) {
	return 'apply_timeline_' . $slug . '_' . $sub;
}

/**
 * Tabbed ACF fields for the What Happens Next timeline.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_apply_acf_timeline_fields() {
	$fields = array(
		array(
			'key'           => 'field_apply_timeline_title',
			'label'         => 'Card heading',
			'name'          => 'apply_timeline_title',
			'type'          => 'text',
			'default_value' => 'What Happens Next?',
		),
		array(
			'key'           => 'field_apply_timeline_plane',
			'label'         => 'Plane decoration',
			'name'          => 'apply_timeline_plane',
			'type'          => 'image',
			'return_format' => 'array',
			'preview_size'  => 'thumbnail',
			'library'       => 'all',
			'instructions'  => 'Leave empty to keep the default decoration.',
		),
		array(
			'key'     => 'field_apply_timeline_intro',
			'label'   => 'Timeline steps',
			'name'    => '',
			'type'    => 'message',
			'message' => 'Each tab is one step in What Happens Next.',
		),
	);

	foreach ( bdc_get_apply_timeline_defaults() as $row ) {
		$slug = $row['slug'];

		$fields[] = array(
			'key'       => 'field_apply_timeline_tab_' . $slug,
			'label'     => $row['title'],
			'name'      => '',
			'type'      => 'tab',
			'placement' => 'left',
			'endpoint'  => 0,
		);

		$fields[] = array(
			'key'           => 'field_apply_timeline_' . $slug . '_title',
			'label'         => 'Step title',
			'name'          => bdc_apply_timeline_field_name( $slug, 'title' ),
			'type'          => 'text',
			'default_value' => $row['title'],
		);

		$fields[] = array(
			'key'           => 'field_apply_timeline_' . $slug . '_text',
			'label'         => 'Step text',
			'name'          => bdc_apply_timeline_field_name( $slug, 'text' ),
			'type'          => 'textarea',
			'rows'          => 3,
			'new_lines'     => '',
			'default_value' => $row['text'],
		);
	}

	return $fields;
}

/**
 * Resolve timeline steps from ACF.
 *
 * @param int $post_id Page ID.
 * @return array<int, array<string, mixed>>
 */
function bdc_get_apply_resolved_timeline( $post_id ) {
	$post_id = (int) $post_id;
	$steps   = array();

	foreach ( bdc_get_apply_timeline_defaults() as $default ) {
		$slug = $default['slug'];

		$steps[] = array(
			'title' => bdc_get_acf_text(
				bdc_apply_timeline_field_name( $slug, 'title' ),
				$default['title'],
				$post_id
			),
			'text'  => bdc_get_acf_text(
				bdc_apply_timeline_field_name( $slug, 'text' ),
				$default['text'],
				$post_id
			),
		);
	}

	return $steps;
}

/**
 * Pre-fill timeline title and text in the editor when nothing is saved yet.
 *
 * @param mixed $value   Stored value.
 * @param mixed $post_id Post ID.
 * @param array $field   Field settings.
 * @return mixed
 */
function bdc_acf_load_apply_timeline_value( $value, $post_id, $field ) {
	unset( $post_id );

	if ( empty( $field['name'] ) || 0 !== strpos( $field['name'], 'apply_timeline_' ) ) {
		return $value;
	}

	if ( is_string( $value ) && '' !== trim( wp_strip_all_tags( $value ) ) ) {
		return $value;
	}

	if ( ! preg_match( '/^apply_timeline_([a-z]+)_([a-z_]+)$/', $field['name'], $matches ) ) {
		return $value;
	}

	$slug = $matches[1];
	$sub  = $matches[2];

	if ( 'title' !== $sub && 'text' !== $sub ) {
		return $value;
	}

	foreach ( bdc_get_apply_timeline_defaults() as $row ) {
		if ( $row['slug'] !== $slug ) {
			continue;
		}

		return 'title' === $sub ? $row['title'] : $row['text'];
	}

	return $value;
}

add_filter( 'acf/load_value', 'bdc_acf_load_apply_about_value', 10, 3 );
add_filter( 'acf/load_value', 'bdc_acf_load_apply_timeline_value', 10, 3 );
