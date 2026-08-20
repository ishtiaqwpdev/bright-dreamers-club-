<?php
/**
 * Photo Media Policy page template — converted from photo-media-policy.html.
 *
 * Template Name: Photo Media Policy
 *
 * @package Bright_Dreamers_Club
 */

get_header();

$photo_media_policy_page_id    = get_queried_object_id();
$photo_media_policy_asset_base = 'assets/images/Photo & Media Policy/';
$photo_media_policy_lazy_placeholder = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';

$photo_media_policy_hero_aria_label = bdc_get_acf_text(
	'photo_media_policy_hero_aria_label',
	'Photo and Media Policy',
	$photo_media_policy_page_id
);
$photo_media_policy_hero_breadcrumb_home_text = bdc_get_acf_text(
	'photo_media_policy_hero_breadcrumb_home_text',
	'Home',
	$photo_media_policy_page_id
);
$photo_media_policy_hero_breadcrumb_home_link = bdc_get_acf_link(
	'photo_media_policy_hero_breadcrumb_home_link',
	array(
		'title'  => 'Home',
		'url'    => bdc_page_url( 'index.html' ),
		'target' => '',
	),
	$photo_media_policy_page_id
);
$photo_media_policy_hero_breadcrumb_parent_text = bdc_get_acf_text(
	'photo_media_policy_hero_breadcrumb_parent_text',
	'Resources',
	$photo_media_policy_page_id
);
$photo_media_policy_hero_breadcrumb_parent_link = bdc_get_acf_link(
	'photo_media_policy_hero_breadcrumb_parent_link',
	array(
		'title'  => 'Resources',
		'url'    => bdc_page_url( 'faq.html' ),
		'target' => '',
	),
	$photo_media_policy_page_id
);
$photo_media_policy_hero_breadcrumb_current_text = bdc_get_acf_text(
	'photo_media_policy_hero_breadcrumb_current_text',
	'Photo & Media Policy',
	$photo_media_policy_page_id
);
$photo_media_policy_hero_title = bdc_get_acf_text(
	'photo_media_policy_hero_title',
	'Photo & Media Policy',
	$photo_media_policy_page_id
);
$photo_media_policy_hero_heart_url = bdc_get_acf_image_url(
	'photo_media_policy_hero_heart',
	bdc_theme_asset_url( $photo_media_policy_asset_base . '2ddeafed-dd66-4ca3-8a5c-055efd2e7083-removebg-preview.png' ),
	$photo_media_policy_page_id
);
$photo_media_policy_hero_text = bdc_get_acf_text(
	'photo_media_policy_hero_text',
	'At Bright Dreamers, we believe in celebrating children\'s creativity while protecting their privacy and dignity. This policy explains how we take, use, and safeguard photos and videos.',
	$photo_media_policy_page_id
);
$photo_media_policy_hero_banner_url = bdc_get_acf_image_url(
	'photo_media_policy_hero_banner',
	bdc_theme_asset_url( $photo_media_policy_asset_base . '77ada95f-2de9-4cb6-ab7a-01ffed9e2327.png' ),
	$photo_media_policy_page_id
);
$photo_media_policy_hero_banner_alt = bdc_get_acf_text(
	'photo_media_policy_hero_banner_alt',
	'A young girl holding a camera',
	$photo_media_policy_page_id
);

$photo_media_policy_main_aria_label = bdc_get_acf_text(
	'photo_media_policy_main_aria_label',
	'Photo and media policy content',
	$photo_media_policy_page_id
);
$photo_media_policy_sidebar_title = bdc_get_acf_text(
	'photo_media_policy_sidebar_title',
	'On This Page',
	$photo_media_policy_page_id
);
$photo_media_policy_nav_aria_label = bdc_get_acf_text(
	'photo_media_policy_nav_aria_label',
	'Policy sections',
	$photo_media_policy_page_id
);
$photo_media_policy_sidebar_card_icon_url = bdc_get_acf_image_url(
	'photo_media_policy_sidebar_card_icon',
	bdc_theme_asset_url( $photo_media_policy_asset_base . '8f3e5bf2-5474-4343-bebc-4b3c89358535-removebg-preview.png' ),
	$photo_media_policy_page_id
);
$photo_media_policy_sidebar_card_text = bdc_get_acf_text(
	'photo_media_policy_sidebar_card_text',
	'Protecting children is our priority. This policy helps us create a safe and respectful environment for all.',
	$photo_media_policy_page_id
);

$photo_media_policy_resolved  = bdc_get_photo_media_policy_resolved_content( $photo_media_policy_page_id );
$photo_media_policy_nav_items = $photo_media_policy_resolved['nav_items'];
$photo_media_policy_sections  = $photo_media_policy_resolved['sections'];

$hero_section_class            = 'page-hero media-policy-hero';
$hero_aria_label               = $photo_media_policy_hero_aria_label;
$hero_show_breadcrumbs         = true;
$hero_breadcrumb_home_text     = $photo_media_policy_hero_breadcrumb_home_text;
$hero_breadcrumb_home_link     = $photo_media_policy_hero_breadcrumb_home_link;
$hero_breadcrumb_parent_text   = $photo_media_policy_hero_breadcrumb_parent_text;
$hero_breadcrumb_parent_link   = $photo_media_policy_hero_breadcrumb_parent_link;
$hero_breadcrumb_current_text  = $photo_media_policy_hero_breadcrumb_current_text;
$hero_title                    = $photo_media_policy_hero_title;
$hero_heart_url                = $photo_media_policy_hero_heart_url;
$hero_text                     = $photo_media_policy_hero_text;
$hero_text_second              = '';
$hero_text_second_class        = '';
$hero_banner_url               = $photo_media_policy_hero_banner_url;
$hero_banner_alt               = $photo_media_policy_hero_banner_alt;
$hero_lazy_placeholder         = $photo_media_policy_lazy_placeholder;

$main_aria_label   = $photo_media_policy_main_aria_label;
$sidebar_title     = $photo_media_policy_sidebar_title;
$nav_aria_label    = $photo_media_policy_nav_aria_label;
$nav_items         = $photo_media_policy_nav_items;
$sidebar_card_icon = $photo_media_policy_sidebar_card_icon_url;
$sidebar_card_text = $photo_media_policy_sidebar_card_text;
$sections          = $photo_media_policy_sections;
?>
    <main id="main-content">
      <?php require get_template_directory() . '/template-parts/policy/media-policy-hero.php'; ?>
      <?php require get_template_directory() . '/template-parts/policy/media-policy-main.php'; ?>
    </main>

<?php
get_footer();
