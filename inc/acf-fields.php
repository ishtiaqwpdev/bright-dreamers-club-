<?php
/**
 * ACF local field groups (version-controlled).
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'acf_add_local_field_group' ) ) {
	return;
}

acf_add_local_field_group(
	array(
		'key'                   => 'group_home_hero',
		'title'                 => 'Home — Hero',
		'fields'                => array(
			array(
				'key'           => 'field_home_hero_logo',
				'label'         => 'Logo',
				'name'          => 'home_hero_logo',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the current theme logo.',
			),
			array(
				'key'           => 'field_home_hero_logo_alt',
				'label'         => 'Logo alt text',
				'name'          => 'home_hero_logo_alt',
				'type'          => 'text',
				'default_value' => 'Bright Dreamers — Dream, Create, Grow, Give',
			),
			array(
				'key'           => 'field_home_hero_text',
				'label'         => 'Intro text',
				'name'          => 'home_hero_text',
				'type'          => 'textarea',
				'rows'          => 3,
				'new_lines'     => '',
				'default_value' => 'A nonprofit community where children\'s ideas become real projects that build confidence, creativity, kindness, and positive change.',
			),
			array(
				'key'           => 'field_home_hero_primary_cta',
				'label'         => 'Primary button',
				'name'          => 'home_hero_primary_cta',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'           => 'field_home_hero_secondary_cta',
				'label'         => 'Secondary button',
				'name'          => 'home_hero_secondary_cta',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'           => 'field_home_hero_banner',
				'label'         => 'Hero banner image',
				'name'          => 'home_hero_banner',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the current hero photo.',
			),
			array(
				'key'           => 'field_home_hero_banner_alt',
				'label'         => 'Banner alt text',
				'name'          => 'home_hero_banner_alt',
				'type'          => 'text',
				'default_value' => 'Three Bright Dreamers holding colorful heart flower drawings in a sunny park',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_type',
					'operator' => '==',
					'value'    => 'front_page',
				),
			),
		),
		'menu_order'            => 0,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_home_pillars',
		'title'                 => 'Home — Pillars',
		'fields'                => array(
			array(
				'key'        => 'field_home_pillars_idea',
				'label'      => 'Pillar 1 — It All Starts With One Idea',
				'name'       => 'home_pillars_idea',
				'type'       => 'group',
				'layout'     => 'block',
				'sub_fields' => array(
					array(
						'key'           => 'field_home_pillars_idea_image',
						'label'         => 'Photo',
						'name'          => 'image',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'medium',
						'instructions'  => 'Leave empty to keep the current books photo.',
					),
					array(
						'key'           => 'field_home_pillars_idea_title',
						'label'         => 'Heading',
						'name'          => 'title',
						'type'          => 'text',
						'default_value' => 'It All Starts With One Idea',
					),
					array(
						'key'           => 'field_home_pillars_idea_quote',
						'label'         => 'Quote',
						'name'          => 'quote',
						'type'          => 'text',
						'default_value' => 'I have an idea.',
					),
					array(
						'key'           => 'field_home_pillars_idea_text',
						'label'         => 'Body text',
						'name'          => 'text',
						'type'          => 'textarea',
						'rows'          => 4,
						'default_value' => 'At Bright Dreamers, children don\'t just imagine—they create. They lead. They discover their talents while making a positive difference in the world.',
					),
				),
			),
			array(
				'key'        => 'field_home_pillars_mission',
				'label'      => 'Pillar 2 — Our Mission',
				'name'       => 'home_pillars_mission',
				'type'       => 'group',
				'layout'     => 'block',
				'sub_fields' => array(
					array(
						'key'           => 'field_home_pillars_mission_title',
						'label'         => 'Heading',
						'name'          => 'title',
						'type'          => 'text',
						'default_value' => 'Our Mission',
					),
					array(
						'key'           => 'field_home_pillars_mission_intro',
						'label'         => 'Intro text',
						'name'          => 'intro_text',
						'type'          => 'textarea',
						'rows'          => 2,
						'default_value' => 'We believe every child deserves the opportunity to:',
					),
					array(
						'key'          => 'field_home_pillars_mission_list',
						'label'        => 'Mission list',
						'name'         => 'list_items',
						'type'         => 'repeater',
						'layout'       => 'table',
						'button_label' => 'Add list item',
						'min'          => 1,
						'max'          => 6,
						'sub_fields'   => array(
							array(
								'key'   => 'field_home_pillars_mission_list_text',
								'label' => 'Item text',
								'name'  => 'item_text',
								'type'  => 'text',
							),
						),
					),
					array(
						'key'           => 'field_home_pillars_mission_closing',
						'label'         => 'Closing text',
						'name'          => 'closing_text',
						'type'          => 'textarea',
						'rows'          => 3,
						'default_value' => 'Our mission is to help children discover who they are, what they love, and the impact they can make.',
					),
					array(
						'key'           => 'field_home_pillars_mission_link',
						'label'         => 'Link',
						'name'          => 'link',
						'type'          => 'link',
						'return_format' => 'array',
					),
				),
			),
			array(
				'key'        => 'field_home_pillars_inspire',
				'label'      => 'Pillar 3 — Inspire',
				'name'       => 'home_pillars_inspire',
				'type'       => 'group',
				'layout'     => 'block',
				'sub_fields' => array(
					array(
						'key'           => 'field_home_pillars_inspire_image',
						'label'         => 'Photo',
						'name'          => 'image',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'medium',
						'instructions'  => 'Leave empty to keep the current jar photo.',
					),
					array(
						'key'           => 'field_home_pillars_inspire_line_1',
						'label'         => 'Line 1',
						'name'          => 'line_1',
						'type'          => 'text',
						'default_value' => 'Together, we can',
					),
					array(
						'key'           => 'field_home_pillars_inspire_line_2',
						'label'         => 'Line 2',
						'name'          => 'line_2',
						'type'          => 'text',
						'default_value' => 'inspire big',
					),
					array(
						'key'           => 'field_home_pillars_inspire_accent_1',
						'label'         => 'Pink accent word',
						'name'          => 'accent_1',
						'type'          => 'text',
						'default_value' => 'dreams',
					),
					array(
						'key'           => 'field_home_pillars_inspire_line_3',
						'label'         => 'Line 3',
						'name'          => 'line_3',
						'type'          => 'text',
						'default_value' => 'and create lasting',
					),
					array(
						'key'           => 'field_home_pillars_inspire_accent_2',
						'label'         => 'Green accent word',
						'name'          => 'accent_2',
						'type'          => 'text',
						'default_value' => 'change.',
					),
					array(
						'key'           => 'field_home_pillars_inspire_underline',
						'label'         => 'Underline decoration',
						'name'          => 'underline_image',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'medium',
						'instructions'  => 'Leave empty to keep the current underline image.',
					),
				),
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'page_type',
					'operator' => '==',
					'value'    => 'front_page',
				),
			),
		),
		'menu_order'            => 1,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);
