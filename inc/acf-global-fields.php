<?php
/**
 * ACF options fields for global site header and footer.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'acf_add_options_sub_page' ) || ! function_exists( 'acf_add_local_field_group' ) ) {
	return;
}

// Header & Footer editing now lives at Bright Dreamers → Header & Footer.
// ACF option fields below still work as fallbacks if those settings were never saved.

acf_add_local_field_group(
	array(
		'key'                   => 'group_global_header',
		'title'                 => 'Global — Site Header',
		'fields'                => array(
			array(
				'key'           => 'field_global_header_announce_text',
				'label'         => 'Announcement bar text',
				'name'          => 'global_header_announce_text',
				'type'          => 'textarea',
				'rows'          => 2,
				'new_lines'     => '',
				'default_value' => 'A nonprofit community inspiring children to dream, create, learn, lead, and give.',
			),
			array(
				'key'          => 'field_global_header_social',
				'label'        => 'Announcement bar social links',
				'name'         => 'global_header_social',
				'type'         => 'repeater',
				'layout'       => 'table',
				'button_label' => 'Add social link',
				'instructions' => 'Leave empty to keep the default Facebook, Instagram, Pinterest, and YouTube links.',
				'sub_fields'   => array(
					array(
						'key'           => 'field_global_header_social_slug',
						'label'         => 'Network',
						'name'          => 'slug',
						'type'          => 'select',
						'choices'       => array(
							'facebook'  => 'Facebook',
							'instagram' => 'Instagram',
							'pinterest' => 'Pinterest',
							'youtube'   => 'YouTube',
						),
						'default_value' => 'facebook',
						'allow_null'    => 0,
					),
					array(
						'key'   => 'field_global_header_social_url',
						'label' => 'URL',
						'name'  => 'url',
						'type'  => 'url',
					),
				),
			),
			array(
				'key'           => 'field_global_header_logo',
				'label'         => 'Header logo',
				'name'          => 'global_header_logo',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the current theme logo.',
			),
			array(
				'key'           => 'field_global_header_logo_alt',
				'label'         => 'Header logo alt text',
				'name'          => 'global_header_logo_alt',
				'type'          => 'text',
				'default_value' => 'Bright Dreamers Club — Dream, Create, Grow, Give',
			),
			array(
				'key'           => 'field_global_header_donate_text',
				'label'         => 'Donate button text',
				'name'          => 'global_header_donate_text',
				'type'          => 'text',
				'default_value' => 'Donate',
			),
			array(
				'key'           => 'field_global_header_donate_link',
				'label'         => 'Donate button link',
				'name'          => 'global_header_donate_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
			array(
				'key'           => 'field_global_header_apply_text',
				'label'         => 'Apply button text',
				'name'          => 'global_header_apply_text',
				'type'          => 'text',
				'default_value' => 'Apply to Join',
			),
			array(
				'key'           => 'field_global_header_apply_link',
				'label'         => 'Apply button link',
				'name'          => 'global_header_apply_link',
				'type'          => 'link',
				'return_format' => 'array',
			),
		),
		'location'              => array(
			array(
				array(
					'param'    => 'options_page',
					'operator' => '==',
					'value'    => 'bdc-site-globals',
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
		'key'                   => 'group_global_footer',
		'title'                 => 'Global — Site Footer',
		'fields'                => array(
			array(
				'key'           => 'field_global_footer_logo',
				'label'         => 'Footer logo',
				'name'          => 'global_footer_logo',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the current theme logo.',
			),
			array(
				'key'           => 'field_global_footer_logo_alt',
				'label'         => 'Footer logo alt text',
				'name'          => 'global_footer_logo_alt',
				'type'          => 'text',
				'default_value' => 'Bright Dreamers — Dream, Create, Grow, Give',
			),
			array(
				'key'           => 'field_global_footer_mission_text',
				'label'         => 'Mission text',
				'name'          => 'global_footer_mission_text',
				'type'          => 'textarea',
				'rows'          => 2,
				'new_lines'     => '',
				'default_value' => 'Empowering children to dream, create, grow, learn, and give.',
			),
			array(
				'key'          => 'field_global_footer_social',
				'label'        => 'Footer social links',
				'name'         => 'global_footer_social',
				'type'         => 'repeater',
				'layout'       => 'table',
				'button_label' => 'Add social link',
				'instructions' => 'Leave empty to keep the default Facebook, Instagram, Pinterest, and YouTube links.',
				'sub_fields'   => array(
					array(
						'key'           => 'field_global_footer_social_slug',
						'label'         => 'Network',
						'name'          => 'slug',
						'type'          => 'select',
						'choices'       => array(
							'facebook'  => 'Facebook',
							'instagram' => 'Instagram',
							'pinterest' => 'Pinterest',
							'youtube'   => 'YouTube',
						),
						'default_value' => 'facebook',
						'allow_null'    => 0,
					),
					array(
						'key'   => 'field_global_footer_social_url',
						'label' => 'URL',
						'name'  => 'url',
						'type'  => 'url',
					),
				),
			),
			array(
				'key'           => 'field_global_footer_explore_heading',
				'label'         => 'Explore column heading',
				'name'          => 'global_footer_explore_heading',
				'type'          => 'text',
				'default_value' => 'Explore',
			),
			array(
				'key'          => 'field_global_footer_explore_links',
				'label'        => 'Explore links',
				'name'         => 'global_footer_explore_links',
				'type'         => 'repeater',
				'layout'       => 'table',
				'button_label' => 'Add link',
				'instructions' => 'Leave empty to keep the default Explore links.',
				'sub_fields'   => array(
					array(
						'key'   => 'field_global_footer_explore_link_text',
						'label' => 'Link text',
						'name'  => 'text',
						'type'  => 'text',
					),
					array(
						'key'           => 'field_global_footer_explore_link_url',
						'label'         => 'Link',
						'name'          => 'link',
						'type'          => 'link',
						'return_format' => 'array',
					),
				),
			),
			array(
				'key'           => 'field_global_footer_get_involved_heading',
				'label'         => 'Get Involved column heading',
				'name'          => 'global_footer_get_involved_heading',
				'type'          => 'text',
				'default_value' => 'Get Involved',
			),
			array(
				'key'          => 'field_global_footer_get_involved_links',
				'label'        => 'Get Involved links',
				'name'         => 'global_footer_get_involved_links',
				'type'         => 'repeater',
				'layout'       => 'table',
				'button_label' => 'Add link',
				'instructions' => 'Leave empty to keep the default Get Involved links.',
				'sub_fields'   => array(
					array(
						'key'   => 'field_global_footer_get_involved_link_text',
						'label' => 'Link text',
						'name'  => 'text',
						'type'  => 'text',
					),
					array(
						'key'           => 'field_global_footer_get_involved_link_url',
						'label'         => 'Link',
						'name'          => 'link',
						'type'          => 'link',
						'return_format' => 'array',
					),
				),
			),
			array(
				'key'           => 'field_global_footer_resources_heading',
				'label'         => 'Resources column heading',
				'name'          => 'global_footer_resources_heading',
				'type'          => 'text',
				'default_value' => 'Resources',
			),
			array(
				'key'          => 'field_global_footer_resources_links',
				'label'        => 'Resources links',
				'name'         => 'global_footer_resources_links',
				'type'         => 'repeater',
				'layout'       => 'table',
				'button_label' => 'Add link',
				'instructions' => 'Leave empty to keep the default Resources links.',
				'sub_fields'   => array(
					array(
						'key'   => 'field_global_footer_resources_link_text',
						'label' => 'Link text',
						'name'  => 'text',
						'type'  => 'text',
					),
					array(
						'key'           => 'field_global_footer_resources_link_url',
						'label'         => 'Link',
						'name'          => 'link',
						'type'          => 'link',
						'return_format' => 'array',
					),
				),
			),
			array(
				'key'           => 'field_global_footer_art_image',
				'label'         => 'Footer art image',
				'name'          => 'global_footer_art_image',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'medium',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the current footer illustration.',
			),
			array(
				'key'           => 'field_global_footer_art_alt',
				'label'         => 'Footer art alt text',
				'name'          => 'global_footer_art_alt',
				'type'          => 'text',
				'default_value' => 'Bright Dreamers children gathered around a heart',
			),
			array(
				'key'           => 'field_global_footer_newsletter_heading_link',
				'label'         => 'Newsletter heading link',
				'name'          => 'global_footer_newsletter_heading_link',
				'type'          => 'link',
				'return_format' => 'array',
				'instructions'  => 'Link wraps the “Stay Connected” heading.',
			),
			array(
				'key'           => 'field_global_footer_newsletter_text',
				'label'         => 'Newsletter text',
				'name'          => 'global_footer_newsletter_text',
				'type'          => 'textarea',
				'rows'          => 3,
				'new_lines'     => '',
				'default_value' => 'Subscribe for updates, inspiring stories, new experiences, and ways to make a difference.',
			),
			array(
				'key'           => 'field_global_footer_newsletter_placeholder',
				'label'         => 'Newsletter email placeholder',
				'name'          => 'global_footer_newsletter_placeholder',
				'type'          => 'text',
				'default_value' => 'Your email',
			),
			array(
				'key'           => 'field_global_footer_newsletter_button_text',
				'label'         => 'Newsletter button text',
				'name'          => 'global_footer_newsletter_button_text',
				'type'          => 'text',
				'default_value' => 'Subscribe',
			),
			array(
				'key'   => 'field_global_footer_newsletter_form_action',
				'label' => 'Newsletter form action URL',
				'name'  => 'global_footer_newsletter_form_action',
				'type'  => 'url',
			),
			array(
				'key'           => 'field_global_footer_plant_deco_image',
				'label'         => 'Newsletter plant decoration',
				'name'          => 'global_footer_plant_deco_image',
				'type'          => 'image',
				'return_format' => 'array',
				'preview_size'  => 'thumbnail',
				'library'       => 'all',
				'instructions'  => 'Leave empty to keep the current plant decoration.',
			),
			array(
				'key'           => 'field_global_footer_copyright_prefix',
				'label'         => 'Copyright text (after year)',
				'name'          => 'global_footer_copyright_prefix',
				'type'          => 'text',
				'default_value' => 'Bright Dreamers. All rights reserved.',
				'instructions'  => 'Appears after the dynamic copyright year, e.g. “© 2026 Bright Dreamers. All rights reserved.”',
			),
			array(
				'key'          => 'field_global_footer_legal_links',
				'label'        => 'Legal links',
				'name'         => 'global_footer_legal_links',
				'type'         => 'repeater',
				'layout'       => 'table',
				'button_label' => 'Add legal link',
				'instructions' => 'Leave empty to keep the default Privacy Policy, Terms of Use, and Accessibility links.',
				'sub_fields'   => array(
					array(
						'key'   => 'field_global_footer_legal_link_text',
						'label' => 'Link text',
						'name'  => 'text',
						'type'  => 'text',
					),
					array(
						'key'           => 'field_global_footer_legal_link_url',
						'label'         => 'Link',
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
					'param'    => 'options_page',
					'operator' => '==',
					'value'    => 'bdc-site-globals',
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
