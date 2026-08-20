<?php
/**
 * Accessibility page template — converted from accessibility.html.
 *
 * Template Name: Accessibility
 *
 * @package Bright_Dreamers_Club
 */

get_header();

$accessibility_page_id    = get_queried_object_id();
$accessibility_asset_base = 'assets/images/Accessibility/';
$accessibility_lazy_placeholder = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';

$accessibility_hero_aria_label = bdc_get_acf_text( 'accessibility_hero_aria_label', 'Accessibility', $accessibility_page_id );
$accessibility_hero_breadcrumb_home_text = bdc_get_acf_text( 'accessibility_hero_breadcrumb_home_text', 'Home', $accessibility_page_id );
$accessibility_hero_breadcrumb_home_link = bdc_get_acf_link(
	'accessibility_hero_breadcrumb_home_link',
	array(
		'title'  => 'Home',
		'url'    => bdc_page_url( 'index.html' ),
		'target' => '',
	),
	$accessibility_page_id
);
$accessibility_hero_breadcrumb_parent_text = bdc_get_acf_text( 'accessibility_hero_breadcrumb_parent_text', 'Resources', $accessibility_page_id );
$accessibility_hero_breadcrumb_parent_link = bdc_get_acf_link(
	'accessibility_hero_breadcrumb_parent_link',
	array(
		'title'  => 'Resources',
		'url'    => bdc_page_url( 'faq.html' ),
		'target' => '',
	),
	$accessibility_page_id
);
$accessibility_hero_breadcrumb_current_text = bdc_get_acf_text( 'accessibility_hero_breadcrumb_current_text', 'Accessibility', $accessibility_page_id );
$accessibility_hero_title = bdc_get_acf_text( 'accessibility_hero_title', 'Accessibility', $accessibility_page_id );
$accessibility_hero_heart_url = bdc_get_acf_image_url(
	'accessibility_hero_heart',
	bdc_theme_asset_url( $accessibility_asset_base . '17e9775d-fb51-4e15-8923-ed640844345c-removebg-preview-e1786341996741.png' ),
	$accessibility_page_id
);
$accessibility_hero_text = bdc_get_acf_text(
	'accessibility_hero_text',
	'Bright Dreamers Club is committed to ensuring our website is accessible to everyone, including people with disabilities. We strive to provide an inclusive experience for all visitors.',
	$accessibility_page_id
);
$accessibility_hero_banner_url = bdc_get_acf_image_url(
	'accessibility_hero_banner',
	bdc_theme_asset_url( $accessibility_asset_base . 'Gemini_Generated_Image_os9ru3os9ru3os9r.png' ),
	$accessibility_page_id
);
$accessibility_hero_banner_alt = bdc_get_acf_text(
	'accessibility_hero_banner_alt',
	'A young girl in a wheelchair using a laptop',
	$accessibility_page_id
);
$accessibility_hero_lazy_placeholder = $accessibility_lazy_placeholder;

$accessibility_commitment_aria_label = bdc_get_acf_text( 'accessibility_commitment_aria_label', 'Our commitment', $accessibility_page_id );
$accessibility_commitment_icon_url   = bdc_get_acf_image_url(
	'accessibility_commitment_icon',
	bdc_theme_asset_url( $accessibility_asset_base . '2cdbd022-39f7-4097-a9f0-05a8b50c2d8e-removebg-preview.png' ),
	$accessibility_page_id
);
$accessibility_commitment_title = bdc_get_acf_text( 'accessibility_commitment_title', 'Our Commitment', $accessibility_page_id );
$accessibility_commitment_text  = bdc_get_acf_text(
	'accessibility_commitment_text',
	'We are dedicated to making brightdreamersclub.org accessible and usable for all. We follow recognized accessibility standards and work continuously to improve the experience for every visitor, including adherence to the Web Content Accessibility Guidelines (WCAG) 2.1 Level AA.',
	$accessibility_page_id
);
$accessibility_commitment_star_url = bdc_get_acf_image_url(
	'accessibility_commitment_star',
	bdc_theme_asset_url( $accessibility_asset_base . '26cbaa97-18ff-4146-a1c5-67a824d943c1-removebg-preview (1).png' ),
	$accessibility_page_id
);
$accessibility_commitment_quote_url = bdc_get_acf_image_url(
	'accessibility_commitment_quote',
	bdc_theme_asset_url( $accessibility_asset_base . '16e5410c-5a68-47fb-9932-3d504a00c0e6-removebg-preview.png' ),
	$accessibility_page_id
);

$accessibility_provide_aria_label = bdc_get_acf_text( 'accessibility_provide_aria_label', 'We aim to provide', $accessibility_page_id );
$accessibility_provide_title      = bdc_get_acf_text( 'accessibility_provide_title', 'We aim to provide', $accessibility_page_id );
$accessibility_provide_items      = bdc_get_accessibility_resolved_sections( $accessibility_page_id );

$accessibility_panels_aria_label = bdc_get_acf_text( 'accessibility_panels_aria_label', 'Accessibility information', $accessibility_page_id );
$accessibility_panels            = bdc_get_accessibility_resolved_panels( $accessibility_page_id );
?>
    <main id="main-content">
      <?php require get_template_directory() . '/template-parts/policy/accessibility-hero.php'; ?>
      <?php require get_template_directory() . '/template-parts/policy/accessibility-commitment.php'; ?>
      <?php require get_template_directory() . '/template-parts/policy/accessibility-provide-grid.php'; ?>
      <?php require get_template_directory() . '/template-parts/policy/accessibility-panels.php'; ?>
    </main>

<?php
get_footer();
