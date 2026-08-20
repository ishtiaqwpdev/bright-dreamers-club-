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

$privacy_policy_nav_items_defaults = array(
	array(
		'anchor_id' => 'privacy-commitment',
		'icon'      => bdc_theme_asset_url( $privacy_policy_asset_base . '6a865669-8fb3-459b-b2f1-1398e282cdb8__1_-removebg-preview.png' ),
		'label'     => '1. Our Privacy Commitment',
	),
	array(
		'anchor_id' => 'privacy-collect',
		'icon'      => bdc_theme_asset_url( $privacy_policy_asset_base . 'e33e3c84-4719-4c46-a012-86a1d2971ce6.png' ),
		'label'     => '2. Information We Collect',
	),
	array(
		'anchor_id' => 'privacy-use',
		'icon'      => bdc_theme_asset_url( $privacy_policy_asset_base . '10857d29-e7bb-4611-bfed-bff0aa832ecd-removebg-preview.png' ),
		'label'     => '3. How We Use Information',
	),
	array(
		'anchor_id' => 'privacy-children',
		'icon'      => bdc_theme_asset_url( $privacy_policy_asset_base . '0507c991-0328-4294-9a76-feeaf885a10c.png' ),
		'label'     => '4. Children\'s Privacy',
	),
	array(
		'anchor_id' => 'privacy-parents',
		'icon'      => bdc_theme_asset_url( $privacy_policy_asset_base . '99f2e1d3-0ee0-4c5b-a4c7-42dc7f309862.png' ),
		'label'     => '5. Parent & Guardian Rights',
	),
	array(
		'anchor_id' => 'privacy-cookies',
		'icon'      => bdc_theme_asset_url( $privacy_policy_asset_base . '96ac01d2-a3ba-4e10-a9f3-1a0b164dad0f-removebg-preview.png' ),
		'label'     => '6. Cookies & Similar Technologies',
	),
	array(
		'anchor_id' => 'privacy-protect',
		'icon'      => bdc_theme_asset_url( $privacy_policy_asset_base . '15aeb5c5-082c-4a44-8195-c5b50377e5b4-removebg-preview.png' ),
		'label'     => '7. How We Protect Your Information',
	),
	array(
		'anchor_id' => 'privacy-sharing',
		'icon'      => bdc_theme_asset_url( $privacy_policy_asset_base . '58f0805d-846a-477c-9a6b-248c522ab3a1-removebg-preview.png' ),
		'label'     => '8. Sharing Information',
	),
	array(
		'anchor_id' => 'privacy-rights',
		'icon'      => bdc_theme_asset_url( $privacy_policy_asset_base . '7b4ec0a7-9605-4610-b699-34431e9bec45-removebg-preview.png' ),
		'label'     => '9. Your Rights & Choices',
	),
	array(
		'anchor_id' => 'privacy-changes',
		'icon'      => bdc_theme_asset_url( $privacy_policy_asset_base . '6773ccc5-4190-42d4-948e-7aa9b19e1c85-removebg-preview.png' ),
		'label'     => '10. Changes to This Policy',
	),
	array(
		'anchor_id' => 'privacy-contact',
		'icon'      => bdc_theme_asset_url( $privacy_policy_asset_base . 'd9aa19fb-9974-44f2-944f-2a36382a7aa4-removebg-preview.png' ),
		'label'     => '11. Contact Us',
	),
);

$privacy_policy_sections_defaults = array(
	array(
		'section_id'   => 'privacy-commitment',
		'icon'         => bdc_theme_asset_url( $privacy_policy_asset_base . '6a865669-8fb3-459b-b2f1-1398e282cdb8__1_-removebg-preview.png' ),
		'icon_blend'   => true,
		'title'        => '1. Our Privacy Commitment',
		'section_body' => '<p>Bright Dreamers Club is dedicated to safeguarding personal information with care and respect. We collect only what we need to operate our programs, communicate with families, and support our mission &mdash; and we handle it responsibly at every step.</p>',
	),
	array(
		'section_id'   => 'privacy-collect',
		'icon'         => bdc_theme_asset_url( $privacy_policy_asset_base . 'e33e3c84-4719-4c46-a012-86a1d2971ce6.png' ),
		'icon_blend'   => false,
		'title'        => '2. Information We Collect',
		'section_body' => '<p>We may collect information such as:</p><ul class="media-policy-list media-policy-list--green"><li>Name and contact details provided through forms or registrations</li><li>Information shared by parents or guardians about a child&rsquo;s participation</li><li>Volunteer, donor, or partner inquiry details</li><li>Basic website usage data (see Cookies section)</li></ul>',
	),
	array(
		'section_id'   => 'privacy-use',
		'icon'         => bdc_theme_asset_url( $privacy_policy_asset_base . '10857d29-e7bb-4611-bfed-bff0aa832ecd-removebg-preview.png' ),
		'icon_blend'   => false,
		'title'        => '3. How We Use Information',
		'section_body' => '<p>We use personal information to:</p><ul class="media-policy-list media-policy-list--green"><li>Operate programs, events, and community experiences</li><li>Communicate with families, volunteers, and supporters</li><li>Process applications, donations, and inquiries</li><li>Improve our website and services</li><li>Maintain safety and comply with legal obligations</li></ul>',
	),
	array(
		'section_id'   => 'privacy-children',
		'icon'         => bdc_theme_asset_url( $privacy_policy_asset_base . '0507c991-0328-4294-9a76-feeaf885a10c.png' ),
		'icon_blend'   => false,
		'title'        => '4. Children&rsquo;s Privacy',
		'section_body' => '<p>Protecting children is our highest priority. We do not knowingly collect personal information directly from children without appropriate parental or guardian involvement. Program participation information is generally provided by a parent or guardian.</p>',
	),
	array(
		'section_id'   => 'privacy-parents',
		'icon'         => bdc_theme_asset_url( $privacy_policy_asset_base . '99f2e1d3-0ee0-4c5b-a4c7-42dc7f309862.png' ),
		'icon_blend'   => false,
		'title'        => '5. Parent &amp; Guardian Rights',
		'section_body' => '<p>Parents and guardians may request access to, correction of, or deletion of a child&rsquo;s personal information where applicable. You may also withdraw consent for specific uses, such as photography, in accordance with our Photo &amp; Media Policy.</p><p><a class="media-policy-section__contact" href="' . esc_url( bdc_page_url( 'photo-media-policy.html' ) ) . '">View our Photo &amp; Media Policy</a></p>',
	),
	array(
		'section_id'   => 'privacy-cookies',
		'icon'         => bdc_theme_asset_url( $privacy_policy_asset_base . '96ac01d2-a3ba-4e10-a9f3-1a0b164dad0f-removebg-preview.png' ),
		'icon_blend'   => false,
		'title'        => '6. Cookies &amp; Similar Technologies',
		'section_body' => '<p>Our website may use cookies and similar technologies to help the site function, remember preferences, and understand how visitors use our pages. You can adjust cookie settings through your browser at any time.</p>',
	),
	array(
		'section_id'   => 'privacy-protect',
		'icon'         => bdc_theme_asset_url( $privacy_policy_asset_base . '15aeb5c5-082c-4a44-8195-c5b50377e5b4-removebg-preview.png' ),
		'icon_blend'   => false,
		'title'        => '7. How We Protect Your Information',
		'section_body' => '<p>We use reasonable administrative, technical, and organizational safeguards to protect personal information. Access is limited to authorized staff and volunteers who need the information to perform their roles.</p>',
	),
	array(
		'section_id'   => 'privacy-sharing',
		'icon'         => bdc_theme_asset_url( $privacy_policy_asset_base . '58f0805d-846a-477c-9a6b-248c522ab3a1-removebg-preview.png' ),
		'icon_blend'   => false,
		'title'        => '8. Sharing Information',
		'section_body' => '<p>We do not sell personal information. We may share information only when necessary to operate our programs, comply with law, or with trusted service providers who help us run our website and communications under appropriate safeguards.</p>',
	),
	array(
		'section_id'   => 'privacy-rights',
		'icon'         => bdc_theme_asset_url( $privacy_policy_asset_base . '7b4ec0a7-9605-4610-b699-34431e9bec45-removebg-preview.png' ),
		'icon_blend'   => false,
		'title'        => '9. Your Rights &amp; Choices',
		'section_body' => '<p>Depending on your location, you may have the right to:</p><ul class="media-policy-list media-policy-list--green"><li>Request access to personal information we hold about you</li><li>Ask us to correct inaccurate information</li><li>Request deletion where applicable</li><li>Opt out of certain communications</li></ul>',
	),
	array(
		'section_id'   => 'privacy-changes',
		'icon'         => bdc_theme_asset_url( $privacy_policy_asset_base . '6773ccc5-4190-42d4-948e-7aa9b19e1c85-removebg-preview.png' ),
		'icon_blend'   => false,
		'title'        => '10. Changes to This Policy',
		'section_body' => '<p>We may update this Privacy Policy from time to time. When we make changes, we will post the updated policy on this page. Continued use of our website after updates means you accept the revised policy.</p>',
	),
	array(
		'section_id'   => 'privacy-contact',
		'icon'         => bdc_theme_asset_url( $privacy_policy_asset_base . 'd9aa19fb-9974-44f2-944f-2a36382a7aa4-removebg-preview.png' ),
		'icon_blend'   => false,
		'title'        => '11. Contact Us',
		'section_body' => '<p>If you have questions about this Privacy Policy or how we handle personal information, please contact us. We are happy to help.</p><p><a class="media-policy-section__contact" href="mailto:hello@brightdreamersclub.org">hello@brightdreamersclub.org</a></p><p><a class="media-policy-section__contact" href="' . esc_url( bdc_page_url( 'contact.html' ) ) . '">Contact our team</a></p>',
	),
);

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
