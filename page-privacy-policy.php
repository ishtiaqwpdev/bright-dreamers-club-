<?php
/**
 * Privacy Policy page template — converted from privacy-policy.html.
 *
 * Template Name: Privacy Policy
 *
 * @package Bright_Dreamers_Club
 */

get_header();

$privacy_policy_page_id      = get_queried_object_id();
$privacy_policy_asset_base   = 'assets/images/Privacy Policy/';
$privacy_policy_lazy_placeholder = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';

$privacy_policy_hero_aria_label = bdc_get_acf_text(
	'privacy_policy_hero_aria_label',
	'Privacy Policy',
	$privacy_policy_page_id
);
$privacy_policy_hero_title = bdc_get_acf_text(
	'privacy_policy_hero_title',
	'Privacy Policy',
	$privacy_policy_page_id
);
$privacy_policy_hero_heart_url = bdc_get_acf_image_url(
	'privacy_policy_hero_heart',
	bdc_theme_asset_url( 'assets/images/Financial Transparency/d6e8c880-1c10-455d-8ec2-c9abb69107ab-removebg-preview.png' ),
	$privacy_policy_page_id
);
$privacy_policy_hero_text = bdc_get_acf_text(
	'privacy_policy_hero_text',
	'At Bright Dreamers Club, we respect your privacy and are committed to protecting the personal information of children, families, volunteers, and supporters.',
	$privacy_policy_page_id
);
$privacy_policy_hero_text_second = bdc_get_acf_text(
	'privacy_policy_hero_text_second',
	'This Privacy Policy explains what information we collect, how we use it, and the choices you have.',
	$privacy_policy_page_id
);
$privacy_policy_hero_banner_url = bdc_get_acf_image_url(
	'privacy_policy_hero_banner',
	bdc_theme_asset_url( $privacy_policy_asset_base . '38fffde1-e596-4c8d-a653-d576997a1060.png' ),
	$privacy_policy_page_id
);
$privacy_policy_hero_banner_alt = bdc_get_acf_text(
	'privacy_policy_hero_banner_alt',
	'A young girl smiling while holding a shield with a lock icon',
	$privacy_policy_page_id
);

$privacy_policy_main_aria_label = bdc_get_acf_text(
	'privacy_policy_main_aria_label',
	'Privacy policy content',
	$privacy_policy_page_id
);
$privacy_policy_sidebar_title = bdc_get_acf_text(
	'privacy_policy_sidebar_title',
	'On This Page',
	$privacy_policy_page_id
);
$privacy_policy_nav_aria_label = bdc_get_acf_text(
	'privacy_policy_nav_aria_label',
	'Privacy policy sections',
	$privacy_policy_page_id
);
$privacy_policy_sidebar_card_icon_url = bdc_get_acf_image_url(
	'privacy_policy_sidebar_card_icon',
	bdc_theme_asset_url( $privacy_policy_asset_base . '8bc6af71-a2cd-4fa1-bd69-a6ff2c98251b-removebg-preview.png' ),
	$privacy_policy_page_id
);
$privacy_policy_sidebar_card_text = bdc_get_acf_text(
	'privacy_policy_sidebar_card_text',
	'We care deeply about protecting children\'s privacy, dignity, and trust.',
	$privacy_policy_page_id
);

$privacy_policy_nav_items_defaults = bdc_get_privacy_policy_nav_items_defaults();

$privacy_policy_sections_defaults = bdc_get_privacy_policy_sections_defaults();

$privacy_policy_nav_items_raw = bdc_get_acf_repeater( 'privacy_policy_nav_items', $privacy_policy_nav_items_defaults, $privacy_policy_page_id );
$privacy_policy_nav_items     = array();

foreach ( $privacy_policy_nav_items_raw as $index => $row ) {
	$default = $privacy_policy_nav_items_defaults[ $index ] ?? array(
		'anchor_id' => '',
		'icon'      => '',
		'label'     => '',
	);

	$anchor_id = isset( $row['anchor_id'] ) ? sanitize_key( (string) $row['anchor_id'] ) : '';
	$label     = isset( $row['label'] ) ? trim( (string) $row['label'] ) : '';

	$resolved = array(
		'anchor_id' => '' !== $anchor_id ? $anchor_id : (string) $default['anchor_id'],
		'icon'      => bdc_acf_image_value_to_url( $row['icon'] ?? null, (string) $default['icon'] ),
		'label'     => '' !== $label ? $label : (string) $default['label'],
	);

	if ( '' === trim( $resolved['label'] ) ) {
		continue;
	}

	$privacy_policy_nav_items[] = $resolved;
}

if ( empty( $privacy_policy_nav_items ) ) {
	$privacy_policy_nav_items = $privacy_policy_nav_items_defaults;
}

$privacy_policy_sections_raw = bdc_get_acf_repeater( 'privacy_policy_sections', $privacy_policy_sections_defaults, $privacy_policy_page_id );
$privacy_policy_sections     = array();

foreach ( $privacy_policy_sections_raw as $index => $row ) {
	$default = $privacy_policy_sections_defaults[ $index ] ?? array(
		'section_id'   => '',
		'icon'         => '',
		'icon_blend'   => false,
		'title'        => '',
		'section_body' => '',
	);

	$section_id   = isset( $row['section_id'] ) ? sanitize_key( (string) $row['section_id'] ) : '';
	$title        = isset( $row['title'] ) ? trim( (string) $row['title'] ) : '';
	$section_body = isset( $row['section_body'] ) ? trim( (string) $row['section_body'] ) : '';
	$icon_blend   = ! empty( $row['icon_blend'] );

	if ( ! $icon_blend && isset( $default['icon_blend'] ) ) {
		$icon_blend = (bool) $default['icon_blend'];
	}

	$resolved = array(
		'section_id'   => '' !== $section_id ? $section_id : (string) $default['section_id'],
		'icon'         => bdc_acf_image_value_to_url( $row['icon'] ?? null, (string) $default['icon'] ),
		'icon_blend'   => $icon_blend,
		'title'        => '' !== $title ? $title : (string) $default['title'],
		'section_body' => '' !== $section_body ? $section_body : (string) $default['section_body'],
	);

	if ( '' === trim( $resolved['title'] ) && '' === trim( $resolved['section_body'] ) ) {
		continue;
	}

	$privacy_policy_sections[] = $resolved;
}

if ( empty( $privacy_policy_sections ) ) {
	$privacy_policy_sections = $privacy_policy_sections_defaults;
}

$hero_section_class     = 'page-hero media-policy-hero privacy-hero';
$hero_aria_label        = $privacy_policy_hero_aria_label;
$hero_show_breadcrumbs  = false;
$hero_title             = $privacy_policy_hero_title;
$hero_heart_url         = $privacy_policy_hero_heart_url;
$hero_text              = $privacy_policy_hero_text;
$hero_text_second       = $privacy_policy_hero_text_second;
$hero_text_second_class = 'privacy-hero__text--second';
$hero_banner_url        = $privacy_policy_hero_banner_url;
$hero_banner_alt        = $privacy_policy_hero_banner_alt;
$hero_lazy_placeholder  = $privacy_policy_lazy_placeholder;

$main_aria_label    = $privacy_policy_main_aria_label;
$sidebar_title      = $privacy_policy_sidebar_title;
$nav_aria_label     = $privacy_policy_nav_aria_label;
$nav_items          = $privacy_policy_nav_items;
$sidebar_card_icon  = $privacy_policy_sidebar_card_icon_url;
$sidebar_card_text  = $privacy_policy_sidebar_card_text;
$sections           = $privacy_policy_sections;
?>
    <main id="main-content">
      <?php require get_template_directory() . '/template-parts/policy/media-policy-hero.php'; ?>
      <?php require get_template_directory() . '/template-parts/policy/media-policy-main.php'; ?>
    </main>

<?php
get_footer();
