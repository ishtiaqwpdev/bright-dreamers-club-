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

$privacy_policy_resolved     = bdc_get_privacy_policy_resolved_content( $privacy_policy_page_id );
$privacy_policy_nav_items    = $privacy_policy_resolved['nav_items'];
$privacy_policy_sections     = $privacy_policy_resolved['sections'];

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
