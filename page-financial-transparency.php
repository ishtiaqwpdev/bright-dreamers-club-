<?php
/**
 * Financial Transparency page template — converted from financial-transparency.html.
 *
 * Template Name: Financial Transparency
 *
 * @package Bright_Dreamers_Club
 */

get_header();

$financial_transparency_page_id    = get_queried_object_id();
$financial_transparency_asset_base = 'assets/images/Financial Transparency/';
$financial_transparency_lazy_placeholder = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';

$financial_transparency_hero_aria_label = bdc_get_acf_text( 'financial_transparency_hero_aria_label', 'Financial Transparency', $financial_transparency_page_id );
$financial_transparency_hero_title      = bdc_get_acf_text( 'financial_transparency_hero_title', 'Financial Transparency', $financial_transparency_page_id );
$financial_transparency_hero_heart_url  = bdc_get_acf_image_url(
	'financial_transparency_hero_heart',
	bdc_theme_asset_url( $financial_transparency_asset_base . 'd6e8c880-1c10-455d-8ec2-c9abb69107ab-removebg-preview.png' ),
	$financial_transparency_page_id
);
$financial_transparency_hero_text = bdc_get_acf_text(
	'financial_transparency_hero_text',
	'Bright Dreamers Club is committed to honesty, accountability, and transparency in how we use every gift and donation. We believe trust is built through openness.',
	$financial_transparency_page_id
);
$financial_transparency_hero_banner_url = bdc_get_acf_image_url(
	'financial_transparency_hero_banner',
	bdc_theme_asset_url( $financial_transparency_asset_base . '270af4dc-4edd-4c23-9b04-eebde5bbe6db.png' ),
	$financial_transparency_page_id
);
$financial_transparency_hero_banner_alt = bdc_get_acf_text(
	'financial_transparency_hero_banner_alt',
	'A jar of coins with a small plant growing out of the top',
	$financial_transparency_page_id
);
$financial_transparency_hero_lazy_placeholder = $financial_transparency_lazy_placeholder;

$financial_transparency_commitment_aria_label = bdc_get_acf_text( 'financial_transparency_commitment_aria_label', 'Our commitment', $financial_transparency_page_id );
$financial_transparency_commitment_icon_url   = bdc_get_acf_image_url(
	'financial_transparency_commitment_icon',
	bdc_theme_asset_url( $financial_transparency_asset_base . '199dca81-01dc-4a02-8600-640d57cc8d15-removebg-preview.png' ),
	$financial_transparency_page_id
);
$financial_transparency_commitment_title = bdc_get_acf_text( 'financial_transparency_commitment_title', 'Our Commitment', $financial_transparency_page_id );
$financial_transparency_commitment_text  = bdc_get_acf_text(
	'financial_transparency_commitment_text',
	'We steward every dollar with care and integrity. Our goal is to use resources responsibly, report clearly, and ensure donations directly support children, families, and the communities we serve.',
	$financial_transparency_page_id
);
$financial_transparency_commitment_deco_url = bdc_get_acf_image_url(
	'financial_transparency_commitment_deco',
	bdc_theme_asset_url( $financial_transparency_asset_base . '3e1301f3-9fe7-4ece-b1aa-0ad59fbfcfc5-removebg-preview.png' ),
	$financial_transparency_page_id
);

$financial_transparency_support_aria_label = bdc_get_acf_text( 'financial_transparency_support_aria_label', 'Where your support goes', $financial_transparency_page_id );
$financial_transparency_support_title      = bdc_get_acf_text( 'financial_transparency_support_title', 'Where Your Support Goes', $financial_transparency_page_id );

$financial_transparency_support_items_defaults = array(
	array(
		'icon'  => bdc_theme_asset_url( $financial_transparency_asset_base . '02e680ce-5c67-478f-824f-d5e61399cecb-removebg-preview.png' ),
		'title' => 'Programs for Children',
		'text'  => 'Funding creative experiences, workshops, and learning opportunities that help children dream big.',
	),
	array(
		'icon'  => bdc_theme_asset_url( $financial_transparency_asset_base . '7d4ac421-beee-4e5c-b89f-7c6103ebba57-removebg-preview.png' ),
		'title' => 'Community & Outreach',
		'text'  => 'Supporting local partnerships, events, and initiatives that connect children with their communities.',
	),
	array(
		'icon'  => bdc_theme_asset_url( $financial_transparency_asset_base . 'b96e81a8-e66c-46e1-a99b-a005e10e8a78-removebg-preview.png' ),
		'title' => 'Safe & Inclusive Environment',
		'text'  => 'Ensuring every child feels welcome, protected, and valued in all our programs.',
	),
	array(
		'icon'  => bdc_theme_asset_url( $financial_transparency_asset_base . '3add6096-920c-4e88-82e8-0fcb86394a86-removebg-preview.png' ),
		'title' => 'Growth & Sustainability',
		'text'  => 'Investing in the long-term health of our organization so we can serve generations of dreamers.',
	),
	array(
		'icon'  => bdc_theme_asset_url( $financial_transparency_asset_base . 'd8ff79b1-91fc-4d24-94ad-80933d538505-removebg-preview.png' ),
		'title' => 'Operations',
		'text'  => 'Covering essential costs that keep our programs running smoothly and responsibly.',
	),
);

$financial_transparency_support_items_raw = bdc_get_acf_repeater( 'financial_transparency_support_items', $financial_transparency_support_items_defaults, $financial_transparency_page_id );
$financial_transparency_support_items     = array();

foreach ( $financial_transparency_support_items_raw as $index => $row ) {
	$default = $financial_transparency_support_items_defaults[ $index ] ?? array(
		'icon'  => '',
		'title' => '',
		'text'  => '',
	);

	$title = isset( $row['title'] ) ? trim( (string) $row['title'] ) : '';
	$text  = isset( $row['text'] ) ? trim( (string) $row['text'] ) : '';

	$resolved = array(
		'icon'  => bdc_acf_image_value_to_url( $row['icon'] ?? null, (string) $default['icon'] ),
		'title' => '' !== $title ? $title : (string) $default['title'],
		'text'  => '' !== $text ? $text : (string) $default['text'],
	);

	if ( '' === trim( $resolved['title'] ) && '' === trim( $resolved['text'] ) ) {
		continue;
	}

	$financial_transparency_support_items[] = $resolved;
}

if ( empty( $financial_transparency_support_items ) ) {
	$financial_transparency_support_items = $financial_transparency_support_items_defaults;
}

$financial_transparency_promise_aria_label = bdc_get_acf_text( 'financial_transparency_promise_aria_label', 'Our promise to you', $financial_transparency_page_id );
$financial_transparency_promise_title      = bdc_get_acf_text( 'financial_transparency_promise_title', 'Our Promise to You', $financial_transparency_page_id );
$financial_transparency_promise_footer_text = bdc_get_acf_text(
	'financial_transparency_promise_footer_text',
	'As we grow, we will continue to share updates and stories that show the impact of your support.',
	$financial_transparency_page_id
);
$financial_transparency_promise_footer_heart_url = bdc_get_acf_image_url(
	'financial_transparency_promise_footer_heart',
	bdc_theme_asset_url( $financial_transparency_asset_base . 'd6e8c880-1c10-455d-8ec2-c9abb69107ab-removebg-preview.png' ),
	$financial_transparency_page_id
);

$financial_transparency_promise_items_defaults = array(
	array(
		'icon'  => bdc_theme_asset_url( $financial_transparency_asset_base . '88926bd0-7c68-4298-8f5c-1f19ee03410b-removebg-preview.png' ),
		'title' => 'Honesty',
		'text'  => 'We communicate openly and truthfully.',
	),
	array(
		'icon'  => bdc_theme_asset_url( $financial_transparency_asset_base . 'd26bdab9-ecde-42d1-9e97-c852a9b17560-removebg-preview.png' ),
		'title' => 'Accountability',
		'text'  => 'We take responsibility for our actions and decisions.',
	),
	array(
		'icon'  => bdc_theme_asset_url( $financial_transparency_asset_base . 'f8b19465-3566-4f66-9e9e-447140dbfe92-removebg-preview.png' ),
		'title' => 'Responsibility',
		'text'  => 'We use resources wisely to maximize our impact.',
	),
	array(
		'icon'  => bdc_theme_asset_url( $financial_transparency_asset_base . '68f3d95e-b891-4109-98dc-9709e057bea6-removebg-preview.png' ),
		'title' => 'Respect',
		'text'  => 'We honor the trust you place in our mission.',
	),
);

$financial_transparency_promise_items_raw = bdc_get_acf_repeater( 'financial_transparency_promise_items', $financial_transparency_promise_items_defaults, $financial_transparency_page_id );
$financial_transparency_promise_items     = array();

foreach ( $financial_transparency_promise_items_raw as $index => $row ) {
	$default = $financial_transparency_promise_items_defaults[ $index ] ?? array(
		'icon'  => '',
		'title' => '',
		'text'  => '',
	);

	$title = isset( $row['title'] ) ? trim( (string) $row['title'] ) : '';
	$text  = isset( $row['text'] ) ? trim( (string) $row['text'] ) : '';

	$resolved = array(
		'icon'  => bdc_acf_image_value_to_url( $row['icon'] ?? null, (string) $default['icon'] ),
		'title' => '' !== $title ? $title : (string) $default['title'],
		'text'  => '' !== $text ? $text : (string) $default['text'],
	);

	if ( '' === trim( $resolved['title'] ) && '' === trim( $resolved['text'] ) ) {
		continue;
	}

	$financial_transparency_promise_items[] = $resolved;
}

if ( empty( $financial_transparency_promise_items ) ) {
	$financial_transparency_promise_items = $financial_transparency_promise_items_defaults;
}

$financial_transparency_questions_aria_label = bdc_get_acf_text( 'financial_transparency_questions_aria_label', 'Questions', $financial_transparency_page_id );
$financial_transparency_questions_icon_url   = bdc_get_acf_image_url(
	'financial_transparency_questions_icon',
	bdc_theme_asset_url( $financial_transparency_asset_base . '58240885-f6f9-487b-9ada-a8304ff3c436-removebg-preview.png' ),
	$financial_transparency_page_id
);
$financial_transparency_questions_title = bdc_get_acf_text( 'financial_transparency_questions_title', 'Questions or Want to Learn More?', $financial_transparency_page_id );
$financial_transparency_questions_text  = bdc_get_acf_text(
	'financial_transparency_questions_text',
	'We\'re happy to answer questions about our finances, donations, or how we allocate resources.',
	$financial_transparency_page_id
);
$financial_transparency_questions_cta_link = bdc_get_acf_link(
	'financial_transparency_questions_cta_link',
	array(
		'title'  => 'Contact Us',
		'url'    => bdc_page_url( 'contact.html' ),
		'target' => '',
	),
	$financial_transparency_page_id
);
$financial_transparency_questions_cta_icon_url = bdc_get_acf_image_url(
	'financial_transparency_questions_cta_icon',
	bdc_theme_asset_url( $financial_transparency_asset_base . '84bcec2e-0190-42d2-abcc-9fe3de22e14f-removebg-preview.png' ),
	$financial_transparency_page_id
);
$financial_transparency_questions_cta_title = bdc_get_acf_text( 'financial_transparency_questions_cta_title', 'Contact Us', $financial_transparency_page_id );
$financial_transparency_questions_cta_text  = bdc_get_acf_text(
	'financial_transparency_questions_cta_text',
	'Send us a message through our contact form.',
	$financial_transparency_page_id
);
$financial_transparency_questions_cta_arrow_url = bdc_get_acf_image_url(
	'financial_transparency_questions_cta_arrow',
	bdc_theme_asset_url( $financial_transparency_asset_base . '973f8ad9-cf63-445d-a9e0-d95b4e54cd67-removebg-preview.png' ),
	$financial_transparency_page_id
);
$financial_transparency_questions_deco_url = bdc_get_acf_image_url(
	'financial_transparency_questions_deco',
	bdc_theme_asset_url( $financial_transparency_asset_base . '3add6096-920c-4e88-82e8-0fcb86394a86-removebg-preview.png' ),
	$financial_transparency_page_id
);
?>
    <main id="main-content">
      <?php require get_template_directory() . '/template-parts/policy/financial-hero.php'; ?>
      <?php require get_template_directory() . '/template-parts/policy/financial-commitment.php'; ?>
      <?php require get_template_directory() . '/template-parts/policy/financial-support-grid.php'; ?>
      <?php require get_template_directory() . '/template-parts/policy/financial-promise.php'; ?>
      <?php require get_template_directory() . '/template-parts/policy/financial-questions.php'; ?>
    </main>

<?php
get_footer();
