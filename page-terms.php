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

$terms_sections_defaults = array(
	array(
		'icon'         => bdc_theme_asset_url( $terms_asset_base . 'e5eb48c5-d630-4137-bc54-9cc6d9e5ef08-removebg-preview.png' ),
		'title'        => '1. Use of Our Website',
		'section_body' => '<p class="terms-section-card__text">By using this site, you agree to comply with these terms and all applicable laws. Content is provided for general information about Bright Dreamers Club programs, resources, and community activities.</p>',
	),
	array(
		'icon'         => bdc_theme_asset_url( $terms_asset_base . 'c66e3371-368a-4edf-9891-28f249498a6f-removebg-preview.png' ),
		'title'        => '2. Acceptable Use',
		'section_body' => '<p class="terms-section-card__text">You agree not to misuse the site, attempt unauthorized access, or use it in ways that could harm children, members, volunteers, or our organization.</p>',
	),
	array(
		'icon'         => bdc_theme_asset_url( $terms_asset_base . '13d1889b-d767-40af-9664-0b95a2d0c39d-removebg-preview.png' ),
		'title'        => '3. Intellectual Property',
		'section_body' => '<p class="terms-section-card__text">All content, logos, images, and materials on this site are owned by Bright Dreamers Club unless otherwise noted. You may not copy, reproduce, or distribute without permission.</p>',
	),
	array(
		'icon'         => bdc_theme_asset_url( $terms_asset_base . '41da6640-6812-4bdd-8047-07ddb002528a-removebg-preview.png' ),
		'title'        => '4. Links to Other Websites',
		'section_body' => '<p class="terms-section-card__text">Our site may link to third-party websites. We are not responsible for the content, policies, or practices of those external sites.</p>',
	),
	array(
		'icon'         => bdc_theme_asset_url( $terms_asset_base . '50e11c9a-c9b8-433e-ba9a-999ce35404e9-removebg-preview.png' ),
		'title'        => '5. Disclaimer of Warranties',
		'section_body' => '<p class="terms-section-card__text">This website is provided &ldquo;as is.&rdquo; We do not guarantee uninterrupted access or that all information on the site is complete, current, or error-free.</p>',
	),
	array(
		'icon'         => bdc_theme_asset_url( $terms_asset_base . '6554bb76-3aa4-4b73-b5fa-5ee56d782936-removebg-preview.png' ),
		'title'        => '6. Limitation of Liability',
		'section_body' => '<p class="terms-section-card__text">Bright Dreamers Club is not liable for damages arising from your use of this website, to the fullest extent permitted by applicable law.</p>',
	),
	array(
		'icon'         => bdc_theme_asset_url( $terms_asset_base . 'e5b42336-787f-4999-b111-559698a94765-removebg-preview.png' ),
		'title'        => '7. Changes to These Terms',
		'section_body' => '<p class="terms-section-card__text">We may update these terms from time to time. Continued use of the site after changes are posted means you accept the updated terms.</p>',
	),
	array(
		'icon'         => bdc_theme_asset_url( $terms_asset_base . '345f4f61-94ce-4c61-9a92-0e2e4a76660d-removebg-preview.png' ),
		'title'        => '8. Contact Us',
		'section_body' => '<p class="terms-section-card__text">If you have questions about these Terms of Use, please reach out through our <a class="terms-section-card__link" href="' . esc_url( bdc_page_url( 'contact.html' ) ) . '">contact page</a> or email <a class="terms-section-card__link" href="mailto:hello@brightdreamersclub.org">hello@brightdreamersclub.org</a>.</p>',
	),
);

$terms_sections_raw = bdc_get_acf_repeater( 'terms_sections', $terms_sections_defaults, $terms_page_id );
$terms_sections     = array();

foreach ( $terms_sections_raw as $index => $row ) {
	$default = $terms_sections_defaults[ $index ] ?? array(
		'icon'         => '',
		'title'        => '',
		'section_body' => '',
	);

	$title        = isset( $row['title'] ) ? trim( (string) $row['title'] ) : '';
	$section_body = isset( $row['section_body'] ) ? trim( (string) $row['section_body'] ) : '';

	$resolved = array(
		'icon'         => bdc_acf_image_value_to_url( $row['icon'] ?? null, (string) $default['icon'] ),
		'title'        => '' !== $title ? $title : (string) $default['title'],
		'section_body' => '' !== $section_body ? $section_body : (string) $default['section_body'],
	);

	if ( '' === trim( $resolved['title'] ) && '' === trim( $resolved['section_body'] ) ) {
		continue;
	}

	$terms_sections[] = $resolved;
}

if ( empty( $terms_sections ) ) {
	$terms_sections = $terms_sections_defaults;
}

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
