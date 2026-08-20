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
$accessibility_panel_slugs_allowed = array( 'purple', 'pink', 'yellow' );

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

$accessibility_provide_items_defaults = array(
	array(
		'icon'  => bdc_theme_asset_url( $accessibility_asset_base . '906ef700-e6bf-4359-8c2a-745554349ba9-removebg-preview.png' ),
		'title' => 'Easy Navigation',
		'text'  => 'Clear menus and logical page structure so you can find what you need quickly.',
	),
	array(
		'icon'  => bdc_theme_asset_url( $accessibility_asset_base . 'cf6a9c15-4f87-46c4-a2d9-0a1deb401e6d-removebg-preview.png' ),
		'title' => 'Readable Content',
		'text'  => 'Legible fonts, sufficient contrast, and well-organized text for comfortable reading.',
	),
	array(
		'icon'  => bdc_theme_asset_url( $accessibility_asset_base . '20981b85-1e35-46dc-8319-6430fbfc04e6-removebg-preview.png' ),
		'title' => 'Keyboard Accessibility',
		'text'  => 'Full functionality for users who navigate with a keyboard or assistive devices.',
	),
	array(
		'icon'  => bdc_theme_asset_url( $accessibility_asset_base . 'dab96672-b166-4e8f-a580-cc3b6b24ea03-removebg-preview.png' ),
		'title' => 'Alt Text & Labels',
		'text'  => 'Descriptive text for images and clear labels on forms and interactive elements.',
	),
	array(
		'icon'  => bdc_theme_asset_url( $accessibility_asset_base . '0c918463-dc16-4e2c-8855-07feb739708b-removebg-preview.png' ),
		'title' => 'Compatibility',
		'text'  => 'Support for common browsers, screen readers, and assistive technologies.',
	),
	array(
		'icon'  => bdc_theme_asset_url( $accessibility_asset_base . '77f5c4ed-843d-40bc-a5f1-8551b8ee5dc8-removebg-preview.png' ),
		'title' => 'Responsive Design',
		'text'  => 'A consistent experience across desktop, tablet, and mobile devices.',
	),
);

$accessibility_provide_items_raw = bdc_get_acf_repeater( 'accessibility_provide_items', $accessibility_provide_items_defaults, $accessibility_page_id );
$accessibility_provide_items     = array();

foreach ( $accessibility_provide_items_raw as $index => $row ) {
	$default = $accessibility_provide_items_defaults[ $index ] ?? array(
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

	$accessibility_provide_items[] = $resolved;
}

if ( empty( $accessibility_provide_items ) ) {
	$accessibility_provide_items = $accessibility_provide_items_defaults;
}

$accessibility_panels_aria_label = bdc_get_acf_text( 'accessibility_panels_aria_label', 'Accessibility information', $accessibility_page_id );

$accessibility_panels_defaults = array(
	array(
		'panel_slug'   => 'purple',
		'icon'         => bdc_theme_asset_url( $accessibility_asset_base . 'bb97bc2a-bfef-4cd1-8fbf-7682b2da1864-removebg-preview.png' ),
		'title'        => 'Ongoing Improvements',
		'section_body' => '<p class="accessibility-panel__text">Accessibility is an ongoing effort. We regularly review our website and content to identify and remove barriers and ensure we meet the evolving needs of our community.</p>',
		'deco_url'     => bdc_theme_asset_url( $accessibility_asset_base . 'b4102ca5-050d-4ae4-bcc8-c0103428b45b-removebg-preview.png' ),
		'aside_body'   => '',
		'panel_link'   => array(
			'title'  => '',
			'url'    => '',
			'target' => '',
		),
	),
	array(
		'panel_slug'   => 'pink',
		'icon'         => bdc_theme_asset_url( $accessibility_asset_base . '752d6f1f-1b10-4ee5-a9fd-bdff1d4889c2-removebg-preview.png' ),
		'title'        => 'Need Assistance or Have Feedback?',
		'section_body' => '<p class="accessibility-panel__text">If you encounter any accessibility barriers on our website or have suggestions on how we can improve, we&rsquo;d love to hear from you.</p>',
		'deco_url'     => '',
		'aside_body'   => '<p class="accessibility-panel__aside-row"><img class="accessibility-panel__aside-icon" src="' . esc_url( bdc_theme_asset_url( $accessibility_asset_base . '752d6f1f-1b10-4ee5-a9fd-bdff1d4889c2-removebg-preview.png' ) ) . '" alt="" width="28" height="28" loading="lazy" decoding="async" aria-hidden="true" /><span>Email: <a class="accessibility-panel__email" href="mailto:hello@brightdreamersclub.org">hello@brightdreamersclub.org</a></span></p><p class="accessibility-panel__aside-row"><img class="accessibility-panel__aside-icon" src="' . esc_url( bdc_theme_asset_url( $accessibility_asset_base . '2031e644-cd28-4b1a-8e69-26a210fad38b-removebg-preview.png' ) ) . '" alt="" width="28" height="28" loading="lazy" decoding="async" aria-hidden="true" /><span>We aim to respond within 3 business days</span></p>',
		'panel_link'   => array(
			'title'  => '',
			'url'    => '',
			'target' => '',
		),
	),
	array(
		'panel_slug'   => 'yellow',
		'icon'         => bdc_theme_asset_url( $accessibility_asset_base . '26cbaa97-18ff-4146-a1c5-67a824d943c1-removebg-preview (1).png' ),
		'title'        => 'Standards We Follow',
		'section_body' => '<p class="accessibility-panel__text">This website strives to conform to WCAG 2.1 Level AA standards to ensure a more inclusive experience for all.</p>',
		'deco_url'     => '',
		'aside_body'   => '',
		'panel_link'   => array(
			'title'  => 'Learn more about WCAG 2.1',
			'url'    => 'https://www.w3.org/WAI/standards-guidelines/wcag/',
			'target' => '_blank',
		),
	),
);

$accessibility_panels_raw = bdc_get_acf_repeater( 'accessibility_panels', $accessibility_panels_defaults, $accessibility_page_id );
$accessibility_panels     = array();

foreach ( $accessibility_panels_raw as $index => $row ) {
	$default = $accessibility_panels_defaults[ $index ] ?? array(
		'panel_slug'   => 'purple',
		'icon'         => '',
		'title'        => '',
		'section_body' => '',
		'deco_url'     => '',
		'aside_body'   => '',
		'panel_link'   => array(
			'title'  => '',
			'url'    => '',
			'target' => '',
		),
	);

	$panel_slug   = isset( $row['panel_slug'] ) ? sanitize_key( (string) $row['panel_slug'] ) : '';
	$title        = isset( $row['title'] ) ? trim( (string) $row['title'] ) : '';
	$section_body = isset( $row['section_body'] ) ? trim( (string) $row['section_body'] ) : '';
	$aside_body   = isset( $row['aside_body'] ) ? trim( (string) $row['aside_body'] ) : '';

	if ( ! in_array( $panel_slug, $accessibility_panel_slugs_allowed, true ) ) {
		$panel_slug = (string) $default['panel_slug'];
	}

	$resolved = array(
		'panel_slug'   => $panel_slug,
		'icon'         => bdc_acf_image_value_to_url( $row['icon'] ?? null, (string) $default['icon'] ),
		'title'        => '' !== $title ? $title : (string) $default['title'],
		'section_body' => '' !== $section_body ? $section_body : (string) $default['section_body'],
		'deco_url'     => bdc_acf_image_value_to_url( $row['deco_url'] ?? null, (string) $default['deco_url'] ),
		'aside_body'   => '' !== $aside_body ? $aside_body : (string) $default['aside_body'],
		'panel_link'   => bdc_resolve_acf_link_value( $row['panel_link'] ?? null, (array) $default['panel_link'] ),
	);

	if ( '' === trim( $resolved['title'] ) && '' === trim( $resolved['section_body'] ) ) {
		continue;
	}

	$accessibility_panels[] = $resolved;
}

if ( empty( $accessibility_panels ) ) {
	$accessibility_panels = $accessibility_panels_defaults;
}
?>
    <main id="main-content">
      <?php require get_template_directory() . '/template-parts/policy/accessibility-hero.php'; ?>
      <?php require get_template_directory() . '/template-parts/policy/accessibility-commitment.php'; ?>
      <?php require get_template_directory() . '/template-parts/policy/accessibility-provide-grid.php'; ?>
      <?php require get_template_directory() . '/template-parts/policy/accessibility-panels.php'; ?>
    </main>

<?php
get_footer();
