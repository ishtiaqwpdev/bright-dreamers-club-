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
$photo_media_policy_checklist_icon = bdc_theme_asset_url( $photo_media_policy_asset_base . 'WhatsApp Image 2026-08-09 at 6.01.25 PM.jpeg' );

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

$photo_media_policy_nav_items_defaults = array(
	array(
		'anchor_id' => 'media-commitment',
		'icon'      => bdc_theme_asset_url( $photo_media_policy_asset_base . 'abd4f72a-0bb4-4fb9-9096-e6413cd064f3-removebg-preview.png' ),
		'label'     => 'Our Commitment',
	),
	array(
		'anchor_id' => 'media-when-taken',
		'icon'      => bdc_theme_asset_url( $photo_media_policy_asset_base . '0296d481-5110-4e02-b060-d6b7728004c1-removebg-preview.png' ),
		'label'     => 'When Photos & Videos May Be Taken',
	),
	array(
		'anchor_id' => 'media-how-used',
		'icon'      => bdc_theme_asset_url( $photo_media_policy_asset_base . '1450c6df-d881-4bf3-8949-a76704d63431-removebg-preview.png' ),
		'label'     => 'How We Use Photos & Videos',
	),
	array(
		'anchor_id' => 'media-parental-consent',
		'icon'      => bdc_theme_asset_url( $photo_media_policy_asset_base . 'a30541e3-b02b-4aa3-b173-579697f84539-removebg-preview.png' ),
		'label'     => 'Parental Consent',
	),
	array(
		'anchor_id' => 'media-protection',
		'icon'      => bdc_theme_asset_url( $photo_media_policy_asset_base . '14a0863a-4911-4c0c-9c16-24b11109cf12-removebg-preview.png' ),
		'label'     => 'How We Protect Photos & Videos',
	),
	array(
		'anchor_id' => 'media-sharing',
		'icon'      => bdc_theme_asset_url( $photo_media_policy_asset_base . '1450c6df-d881-4bf3-8949-a76704d63431-removebg-preview.png' ),
		'label'     => 'Sharing & Publications',
	),
	array(
		'anchor_id' => 'media-not-do',
		'icon'      => bdc_theme_asset_url( $photo_media_policy_asset_base . 'a0259083-2c50-4600-a1b2-9b3f656305ee-removebg-preview.png' ),
		'label'     => 'What We Do Not Do',
	),
	array(
		'anchor_id' => 'media-rights',
		'icon'      => bdc_theme_asset_url( $photo_media_policy_asset_base . '60c31d4b-2d71-49b4-9311-979e1e6feeeb-removebg-preview.png' ),
		'label'     => 'Your Rights',
	),
	array(
		'anchor_id' => 'media-questions',
		'icon'      => bdc_theme_asset_url( $photo_media_policy_asset_base . '789fd039-72d6-40a1-a56e-a46a110b48cc-removebg-preview.png' ),
		'label'     => 'Questions or Concerns',
	),
);

$photo_media_policy_sections_defaults = array(
	array(
		'section_id'   => 'media-commitment',
		'icon'         => bdc_theme_asset_url( $photo_media_policy_asset_base . 'abd4f72a-0bb4-4fb9-9096-e6413cd064f3-removebg-preview.png' ),
		'icon_blend'   => true,
		'title'        => '1. Our Commitment',
		'section_body' => '<p>Bright Dreamers is committed to protecting the privacy, dignity, and safety of every child in our community. Photos and videos are used thoughtfully to celebrate learning and creativity &mdash; never to exploit or misrepresent a child.</p>',
	),
	array(
		'section_id'   => 'media-when-taken',
		'icon'         => bdc_theme_asset_url( $photo_media_policy_asset_base . '0296d481-5110-4e02-b060-d6b7728004c1-removebg-preview.png' ),
		'icon_blend'   => false,
		'title'        => '2. When Photos &amp; Videos May Be Taken',
		'section_body' => '<p>Photos and videos may be taken during approved Bright Dreamers activities, including workshops, community projects, Dream Market events, and other supervised experiences. Photography is always optional and conducted respectfully.</p>',
	),
	array(
		'section_id'   => 'media-how-used',
		'icon'         => bdc_theme_asset_url( $photo_media_policy_asset_base . '1450c6df-d881-4bf3-8949-a76704d63431-removebg-preview.png' ),
		'icon_blend'   => false,
		'title'        => '3. How We Use Photos &amp; Videos',
		'section_body' => '<p>We may use approved photos and videos to:</p><ul class="media-policy-list media-policy-list--green"><li>Share stories and updates on our website</li><li>Highlight children&rsquo;s projects and achievements</li><li>Promote programs, events, and community activities</li><li>Create newsletters, reports, and educational materials</li></ul><p>We do not use photos or videos for advertising unrelated to our mission.</p>',
	),
	array(
		'section_id'   => 'media-parental-consent',
		'icon'         => bdc_theme_asset_url( $photo_media_policy_asset_base . 'a30541e3-b02b-4aa3-b173-579697f84539-removebg-preview.png' ),
		'icon_blend'   => false,
		'title'        => '4. Parental Consent',
		'section_body' => '<p>We obtain written consent from a parent or guardian before using a child&rsquo;s photo or video in any public-facing materials. Families may choose full consent, limited consent, or no photography at any time.</p><p><a class="media-policy-section__contact" href="' . esc_url( bdc_page_url( 'photo-media-consent.html' ) ) . '">Complete the Photo &amp; Media Consent Form</a></p>',
	),
	array(
		'section_id'   => 'media-protection',
		'icon'         => bdc_theme_asset_url( $photo_media_policy_asset_base . '14a0863a-4911-4c0c-9c16-24b11109cf12-removebg-preview.png' ),
		'icon_blend'   => false,
		'title'        => '5. How We Protect Photos &amp; Videos',
		'section_body' => '<p>All media is stored securely with limited access to authorized staff and volunteers. We never sell personal images, and we review our storage and sharing practices regularly to keep children safe.</p>',
	),
	array(
		'section_id'   => 'media-sharing',
		'icon'         => bdc_theme_asset_url( $photo_media_policy_asset_base . '1450c6df-d881-4bf3-8949-a76704d63431-removebg-preview.png' ),
		'icon_blend'   => false,
		'title'        => '6. Sharing &amp; Publications',
		'section_body' => '<p>When we share photos or videos, we do so thoughtfully. A child&rsquo;s full name is rarely used; we may use a first name only or no name at all. We avoid sharing identifying details such as school name or home address.</p>',
	),
	array(
		'section_id'   => 'media-not-do',
		'icon'         => bdc_theme_asset_url( $photo_media_policy_asset_base . 'a0259083-2c50-4600-a1b2-9b3f656305ee-removebg-preview.png' ),
		'icon_blend'   => false,
		'title'        => '7. What We Do Not Do',
		'section_body' => '<ul class="media-policy-list media-policy-list--pink"><li>Sell or share photos with third parties</li><li>Use images for unrelated marketing</li><li>Post photos without appropriate consent</li><li>Share identifiable images publicly without permission</li></ul>',
	),
	array(
		'section_id'   => 'media-rights',
		'icon'         => bdc_theme_asset_url( $photo_media_policy_asset_base . '60c31d4b-2d71-49b4-9311-979e1e6feeeb-removebg-preview.png' ),
		'icon_blend'   => false,
		'title'        => '8. Your Rights',
		'section_body' => '<ul class="media-policy-checklist"><li><img class="media-policy-checklist__icon" src="' . esc_url( $photo_media_policy_checklist_icon ) . '" alt="" width="18" height="18" loading="lazy" decoding="async" aria-hidden="true" /><span>Request to review photos or videos of your child</span></li><li><img class="media-policy-checklist__icon" src="' . esc_url( $photo_media_policy_checklist_icon ) . '" alt="" width="18" height="18" loading="lazy" decoding="async" aria-hidden="true" /><span>Request removal from future use</span></li><li><img class="media-policy-checklist__icon" src="' . esc_url( $photo_media_policy_checklist_icon ) . '" alt="" width="18" height="18" loading="lazy" decoding="async" aria-hidden="true" /><span>Withdraw consent at any time</span></li><li><img class="media-policy-checklist__icon" src="' . esc_url( $photo_media_policy_checklist_icon ) . '" alt="" width="18" height="18" loading="lazy" decoding="async" aria-hidden="true" /><span>Ask questions about our media practices</span></li></ul>',
	),
	array(
		'section_id'   => 'media-questions',
		'icon'         => bdc_theme_asset_url( $photo_media_policy_asset_base . '789fd039-72d6-40a1-a56e-a46a110b48cc-removebg-preview.png' ),
		'icon_blend'   => false,
		'title'        => '9. Questions or Concerns',
		'section_body' => '<p>If you have questions about this policy or how your child&rsquo;s image is used, please contact us. We are happy to explain our practices and address any concerns promptly.</p><p><a class="media-policy-section__contact" href="' . esc_url( bdc_page_url( 'contact.html' ) ) . '">Contact our team</a></p>',
	),
);

$photo_media_policy_nav_items_raw = bdc_get_acf_repeater( 'photo_media_policy_nav_items', $photo_media_policy_nav_items_defaults, $photo_media_policy_page_id );
$photo_media_policy_nav_items     = array();

foreach ( $photo_media_policy_nav_items_raw as $index => $row ) {
	$default = $photo_media_policy_nav_items_defaults[ $index ] ?? array(
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

	$photo_media_policy_nav_items[] = $resolved;
}

if ( empty( $photo_media_policy_nav_items ) ) {
	$photo_media_policy_nav_items = $photo_media_policy_nav_items_defaults;
}

$photo_media_policy_sections_raw = bdc_get_acf_repeater( 'photo_media_policy_sections', $photo_media_policy_sections_defaults, $photo_media_policy_page_id );
$photo_media_policy_sections     = array();

foreach ( $photo_media_policy_sections_raw as $index => $row ) {
	$default = $photo_media_policy_sections_defaults[ $index ] ?? array(
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

	$photo_media_policy_sections[] = $resolved;
}

if ( empty( $photo_media_policy_sections ) ) {
	$photo_media_policy_sections = $photo_media_policy_sections_defaults;
}

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
