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

acf_add_local_field_group(
	array(
		'key'                   => 'group_home_different',
		'title'                 => 'Home — What Makes Us Different',
		'fields'                => array(
			array(
				'key'           => 'field_home_different_title',
				'label'         => 'Section title',
				'name'          => 'home_different_title',
				'type'          => 'text',
				'default_value' => 'What Makes Bright Dreamers Different?',
			),
			array(
				'key'          => 'field_home_different_items',
				'label'        => 'Items',
				'name'         => 'home_different_items',
				'type'         => 'repeater',
				'layout'       => 'block',
				'button_label' => 'Add item',
				'min'          => 1,
				'max'          => 8,
				'instructions' => 'Leave empty to keep all six default items. Icon images are optional — defaults stay if not set.',
				'sub_fields'   => array(
					array(
						'key'           => 'field_home_different_item_icon',
						'label'         => 'Icon',
						'name'          => 'icon',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'thumbnail',
					),
					array(
						'key'   => 'field_home_different_item_name',
						'label' => 'Name',
						'name'  => 'name',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_home_different_item_description',
						'label' => 'Description',
						'name'  => 'description',
						'type'  => 'text',
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
		'menu_order'            => 2,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_home_reality',
		'title'                 => 'Home — How Ideas Become Reality',
		'fields'                => array(
			array(
				'key'           => 'field_home_reality_title',
				'label'         => 'Section title',
				'name'          => 'home_reality_title',
				'type'          => 'text',
				'default_value' => 'How Ideas Become Reality',
			),
			array(
				'key'          => 'field_home_reality_steps',
				'label'        => 'Steps',
				'name'         => 'home_reality_steps',
				'type'         => 'repeater',
				'layout'       => 'block',
				'button_label' => 'Add step',
				'min'          => 1,
				'max'          => 8,
				'instructions' => 'Leave the repeater empty to keep all six default steps. Color style keeps the theme default per row if not set.',
				'sub_fields'   => array(
					array(
						'key'           => 'field_home_reality_step_icon',
						'label'         => 'Icon',
						'name'          => 'icon',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'thumbnail',
					),
					array(
						'key'   => 'field_home_reality_step_title',
						'label' => 'Step title',
						'name'  => 'title',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_home_reality_step_description',
						'label' => 'Description',
						'name'  => 'description',
						'type'  => 'text',
					),
					array(
						'key'           => 'field_home_reality_step_style',
						'label'         => 'Color style',
						'name'          => 'style_slug',
						'type'          => 'select',
						'choices'       => array(
							''          => 'Default for this row',
							'dream'     => 'Dream',
							'imagine'   => 'Imagine',
							'create'    => 'Create',
							'share'     => 'Share',
							'help'      => 'Help Others',
							'celebrate' => 'Celebrate',
						),
						'default_value' => '',
						'allow_null'  => 1,
						'ui'          => 0,
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
		'menu_order'            => 3,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_home_explore',
		'title'                 => 'Home — Explore Experiences',
		'fields'                => array(
			array(
				'key'           => 'field_home_explore_title',
				'label'         => 'Section title',
				'name'          => 'home_explore_title',
				'type'          => 'text',
				'default_value' => 'Explore Experiences',
			),
			array(
				'key'          => 'field_home_explore_cards',
				'label'        => 'Experience cards',
				'name'         => 'home_explore_cards',
				'type'         => 'repeater',
				'layout'       => 'block',
				'button_label' => 'Add card',
				'min'          => 1,
				'max'          => 6,
				'instructions' => 'Leave empty to keep all four default program cards.',
				'sub_fields'   => array(
					array(
						'key'           => 'field_home_explore_card_photo',
						'label'         => 'Photo',
						'name'          => 'photo',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'medium',
					),
					array(
						'key'   => 'field_home_explore_card_photo_alt',
						'label' => 'Photo alt text',
						'name'  => 'photo_alt',
						'type'  => 'text',
					),
					array(
						'key'           => 'field_home_explore_card_icon',
						'label'         => 'Card icon',
						'name'          => 'icon',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'thumbnail',
					),
					array(
						'key'   => 'field_home_explore_card_title',
						'label' => 'Title',
						'name'  => 'title',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_home_explore_card_text',
						'label' => 'Description',
						'name'  => 'description',
						'type'  => 'textarea',
						'rows'  => 2,
					),
					array(
						'key'           => 'field_home_explore_card_link',
						'label'         => 'Learn More link',
						'name'          => 'link',
						'type'          => 'link',
						'return_format' => 'array',
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
		'menu_order'            => 4,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);

acf_add_local_field_group(
	array(
		'key'                   => 'group_home_spotlight',
		'title'                 => 'Home — Spotlight',
		'fields'                => array(
			array(
				'key'        => 'field_home_spotlight_ideas',
				'label'      => 'Card 1 — Children\'s Ideas Matter',
				'name'       => 'home_spotlight_ideas',
				'type'       => 'group',
				'layout'     => 'block',
				'sub_fields' => array(
					array(
						'key'           => 'field_home_spotlight_ideas_title',
						'label'         => 'Title',
						'name'          => 'title',
						'type'          => 'text',
						'default_value' => 'Children\'s Ideas Matter',
					),
					array(
						'key'           => 'field_home_spotlight_ideas_lead',
						'label'         => 'Lead paragraph',
						'name'          => 'lead',
						'type'          => 'textarea',
						'rows'          => 2,
						'default_value' => 'Bright Dreamers is built with children—not just for children.',
					),
					array(
						'key'           => 'field_home_spotlight_ideas_body',
						'label'         => 'Body paragraph',
						'name'          => 'body',
						'type'          => 'textarea',
						'rows'          => 4,
						'default_value' => 'Many of our projects begin with children\'s own ideas. Children help imagine new activities, suggest community projects, and inspire future programs through our Young Dreamers Council.',
					),
					array(
						'key'           => 'field_home_spotlight_ideas_highlight',
						'label'         => 'Highlight text',
						'name'          => 'highlight',
						'type'          => 'textarea',
						'rows'          => 2,
						'new_lines'     => 'br',
						'default_value' => "Because the best ideas sometimes\ncome from the smallest voices.",
						'instructions'  => 'Use a line break for a second line.',
					),
					array(
						'key'           => 'field_home_spotlight_ideas_photo',
						'label'         => 'Photo',
						'name'          => 'photo',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'medium',
					),
					array(
						'key'           => 'field_home_spotlight_ideas_photo_alt',
						'label'         => 'Photo alt text',
						'name'          => 'photo_alt',
						'type'          => 'text',
						'default_value' => 'Children collaborating together at a table',
					),
				),
			),
			array(
				'key'        => 'field_home_spotlight_council',
				'label'      => 'Card 2 — Young Dreamers Council',
				'name'       => 'home_spotlight_council',
				'type'       => 'group',
				'layout'     => 'block',
				'sub_fields' => array(
					array(
						'key'           => 'field_home_spotlight_council_title',
						'label'         => 'Title',
						'name'          => 'title',
						'type'          => 'text',
						'default_value' => 'Young Dreamers Council',
					),
					array(
						'key'          => 'field_home_spotlight_council_list',
						'label'        => 'List items',
						'name'         => 'list_items',
						'type'         => 'repeater',
						'layout'       => 'table',
						'button_label' => 'Add item',
						'min'          => 1,
						'max'          => 8,
						'sub_fields'   => array(
							array(
								'key'   => 'field_home_spotlight_council_list_text',
								'label' => 'Item text',
								'name'  => 'item_text',
								'type'  => 'text',
							),
						),
					),
					array(
						'key'           => 'field_home_spotlight_council_note',
						'label'         => 'Note',
						'name'          => 'note',
						'type'          => 'textarea',
						'rows'          => 2,
						'default_value' => 'Adult mentors guide and support them every step of the way.',
					),
					array(
						'key'           => 'field_home_spotlight_council_link',
						'label'         => 'Button link',
						'name'          => 'link',
						'type'          => 'link',
						'return_format' => 'array',
					),
					array(
						'key'           => 'field_home_spotlight_council_illustration',
						'label'         => 'Illustration',
						'name'          => 'illustration',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'medium',
						'instructions'  => 'Leave empty to keep the current council illustration.',
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
		'menu_order'            => 5,
		'position'              => 'normal',
		'style'                 => 'default',
		'label_placement'       => 'top',
		'instruction_placement' => 'label',
		'active'                => true,
	)
);
