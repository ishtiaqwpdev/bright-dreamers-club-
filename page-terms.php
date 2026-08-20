<?php
/**
 * Terms page template — converted from terms.html.
 *
 * Template Name: Terms
 *
 * @package Bright_Dreamers_Club
 */

get_header();

$terms_page_id      = get_queried_object_id();
$terms_asset_base   = 'assets/images/Terms of Use/';
$terms_lazy_placeholder = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';

$terms_hero_aria_label = bdc_get_acf_text( 'terms_hero_aria_label', 'Terms of Use', $terms_page_id );
$terms_hero_title      = bdc_get_acf_text( 'terms_hero_title', 'Terms of Use', $terms_page_id );
$terms_hero_heart_url  = bdc_get_acf_image_url(
	'terms_hero_heart',
	bdc_theme_asset_url( 'assets/images/Financial Transparency/d6e8c880-1c10-455d-8ec2-c9abb69107ab-removebg-preview.png' ),
	$terms_page_id
);
$terms_hero_text = bdc_get_acf_text(
	'terms_hero_text',
	'Welcome to Bright Dreamers Club. By accessing or using our website, you agree to these Terms of Use. Please read them carefully.',
	$terms_page_id
);
$terms_hero_updated_icon_url = bdc_get_acf_image_url(
	'terms_hero_updated_icon',
	bdc_theme_asset_url( $terms_asset_base . '7cbf6fed-3434-4fa5-bc6d-6bf0083aaa89-removebg-preview.png' ),
	$terms_page_id
);
$terms_hero_updated_text = bdc_get_acf_text(
	'terms_hero_updated_text',
	'Last updated: September 1st, 2026',
	$terms_page_id
);
$terms_hero_banner_url = bdc_get_acf_image_url(
	'terms_hero_banner',
	bdc_theme_asset_url( $terms_asset_base . '2284e61d-a8f3-4c82-9b56-10ffbd05e332.png' ),
	$terms_page_id
);
$terms_hero_banner_alt = bdc_get_acf_text(
	'terms_hero_banner_alt',
	'Three children looking at a laptop together',
	$terms_page_id
);
$terms_hero_lazy_placeholder = $terms_lazy_placeholder;

$terms_commitment_aria_label = bdc_get_acf_text( 'terms_commitment_aria_label', 'Our commitment', $terms_page_id );
$terms_commitment_icon_url   = bdc_get_acf_image_url(
	'terms_commitment_icon',
	bdc_theme_asset_url( $terms_asset_base . 'a2e4f8a2-6735-408f-8687-83d61e957ceb-removebg-preview.png' ),
	$terms_page_id
);
$terms_commitment_title = bdc_get_acf_text( 'terms_commitment_title', 'Our Commitment', $terms_page_id );
$terms_commitment_text  = bdc_get_acf_text(
	'terms_commitment_text',
	'These Terms of Use govern your access to brightdreamersclub.org. We created them to protect our community, clarify expectations, and ensure a safe, positive experience for everyone who visits our site.',
	$terms_page_id
);
$terms_commitment_deco_url = bdc_get_acf_image_url(
	'terms_commitment_deco',
	bdc_theme_asset_url( $terms_asset_base . '692dbf43-395d-4b36-9586-3553f8506dbb-removebg-preview.png' ),
	$terms_page_id
);

$terms_sections_aria_label = bdc_get_acf_text( 'terms_sections_aria_label', 'Terms sections', $terms_page_id );
$terms_sections            = bdc_get_terms_resolved_sections( $terms_page_id );

$terms_bottom_aria_label = bdc_get_acf_text( 'terms_bottom_aria_label', 'Questions and contact', $terms_page_id );
$terms_bottom_questions_icon_url = bdc_get_acf_image_url(
	'terms_bottom_questions_icon',
	bdc_theme_asset_url( $terms_asset_base . 'e268bd1c-64e9-4ada-847f-e481befa82df-removebg-preview.png' ),
	$terms_page_id
);
$terms_bottom_title = bdc_get_acf_text( 'terms_bottom_title', 'Questions?', $terms_page_id );
$terms_bottom_text  = bdc_get_acf_text(
	'terms_bottom_text',
	'If you have any questions about these Terms of Use, we\'re here to help.',
	$terms_page_id
);
$terms_bottom_cta_link = bdc_get_acf_link(
	'terms_bottom_cta_link',
	array(
		'title'  => 'Contact Us Form',
		'url'    => bdc_page_url( 'contact.html' ),
		'target' => '',
	),
	$terms_page_id
);
$terms_bottom_cta_icon_url = bdc_get_acf_image_url(
	'terms_bottom_cta_icon',
	bdc_theme_asset_url( $terms_asset_base . '6dba94ac-4b73-4b35-b339-e98fc225a49d-removebg-preview.png' ),
	$terms_page_id
);
$terms_bottom_cta_title = bdc_get_acf_text( 'terms_bottom_cta_title', 'Contact Us Form', $terms_page_id );
$terms_bottom_cta_text  = bdc_get_acf_text(
	'terms_bottom_cta_text',
	'Send us a message through our contact form.',
	$terms_page_id
);
$terms_bottom_deco_url = bdc_get_acf_image_url(
	'terms_bottom_deco',
	bdc_theme_asset_url( $terms_asset_base . '3add6096-920c-4e88-82e8-0fcb86394a86-removebg-preview (1).png' ),
	$terms_page_id
);
?>
    <main id="main-content">
      <?php require get_template_directory() . '/template-parts/policy/terms-hero.php'; ?>
      <?php require get_template_directory() . '/template-parts/policy/terms-commitment.php'; ?>
      <?php require get_template_directory() . '/template-parts/policy/terms-sections-grid.php'; ?>
      <?php require get_template_directory() . '/template-parts/policy/terms-bottom-banner.php'; ?>
    </main>

<?php
get_footer();
