<?php
/**
 * Default content and ACF field builders for the Photo Media Policy page.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Asset path prefix for Photo Media Policy images.
 *
 * @return string
 */
function bdc_get_photo_media_policy_asset_base() {
	return 'assets/images/Photo & Media Policy/';
}

/**
 * Default policy sections. Each row is one sidebar link and one content card.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_photo_media_policy_sections_defaults() {
	$asset_base     = bdc_get_photo_media_policy_asset_base();
	$checklist_icon = bdc_theme_asset_url( $asset_base . 'WhatsApp Image 2026-08-09 at 6.01.25 PM.jpeg' );

	return array(
		array(
			'slug'         => 'commitment',
			'section_id'   => 'media-commitment',
			'nav_label'    => 'Our Commitment',
			'icon'         => bdc_theme_asset_url( $asset_base . 'abd4f72a-0bb4-4fb9-9096-e6413cd064f3-removebg-preview.png' ),
			'icon_blend'   => true,
			'title'        => '1. Our Commitment',
			'section_body' => '<p>Bright Dreamers is committed to protecting the privacy, dignity, and safety of every child in our community. Photos and videos are used thoughtfully to celebrate learning and creativity &mdash; never to exploit or misrepresent a child.</p>',
		),
		array(
			'slug'         => 'whentaken',
			'section_id'   => 'media-when-taken',
			'nav_label'    => 'When Photos & Videos May Be Taken',
			'icon'         => bdc_theme_asset_url( $asset_base . '0296d481-5110-4e02-b060-d6b7728004c1-removebg-preview.png' ),
			'icon_blend'   => false,
			'title'        => '2. When Photos & Videos May Be Taken',
			'section_body' => '<p>Photos and videos may be taken during approved Bright Dreamers activities, including workshops, community projects, Dream Market events, and other supervised experiences. Photography is always optional and conducted respectfully.</p>',
		),
		array(
			'slug'         => 'howused',
			'section_id'   => 'media-how-used',
			'nav_label'    => 'How We Use Photos & Videos',
			'icon'         => bdc_theme_asset_url( $asset_base . '1450c6df-d881-4bf3-8949-a76704d63431-removebg-preview.png' ),
			'icon_blend'   => false,
			'title'        => '3. How We Use Photos & Videos',
			'section_body' => '<p>We may use approved photos and videos to:</p><ul class="media-policy-list media-policy-list--green"><li>Share stories and updates on our website</li><li>Highlight children&rsquo;s projects and achievements</li><li>Promote programs, events, and community activities</li><li>Create newsletters, reports, and educational materials</li></ul><p>We do not use photos or videos for advertising unrelated to our mission.</p>',
		),
		array(
			'slug'         => 'consent',
			'section_id'   => 'media-parental-consent',
			'nav_label'    => 'Parental Consent',
			'icon'         => bdc_theme_asset_url( $asset_base . 'a30541e3-b02b-4aa3-b173-579697f84539-removebg-preview.png' ),
			'icon_blend'   => false,
			'title'        => '4. Parental Consent',
			'section_body' => '<p>We obtain written consent from a parent or guardian before using a child&rsquo;s photo or video in any public-facing materials. Families may choose full consent, limited consent, or no photography at any time.</p><p><a class="media-policy-section__contact" href="' . esc_url( bdc_page_url( 'photo-media-consent.html' ) ) . '">Complete the Photo &amp; Media Consent Form</a></p>',
		),
		array(
			'slug'         => 'protection',
			'section_id'   => 'media-protection',
			'nav_label'    => 'How We Protect Photos & Videos',
			'icon'         => bdc_theme_asset_url( $asset_base . '14a0863a-4911-4c0c-9c16-24b11109cf12-removebg-preview.png' ),
			'icon_blend'   => false,
			'title'        => '5. How We Protect Photos & Videos',
			'section_body' => '<p>All media is stored securely with limited access to authorized staff and volunteers. We never sell personal images, and we review our storage and sharing practices regularly to keep children safe.</p>',
		),
		array(
			'slug'         => 'sharing',
			'section_id'   => 'media-sharing',
			'nav_label'    => 'Sharing & Publications',
			'icon'         => bdc_theme_asset_url( $asset_base . '1450c6df-d881-4bf3-8949-a76704d63431-removebg-preview.png' ),
			'icon_blend'   => false,
			'title'        => '6. Sharing & Publications',
			'section_body' => '<p>When we share photos or videos, we do so thoughtfully. A child&rsquo;s full name is rarely used; we may use a first name only or no name at all. We avoid sharing identifying details such as school name or home address.</p>',
		),
		array(
			'slug'         => 'notdo',
			'section_id'   => 'media-not-do',
			'nav_label'    => 'What We Do Not Do',
			'icon'         => bdc_theme_asset_url( $asset_base . 'a0259083-2c50-4600-a1b2-9b3f656305ee-removebg-preview.png' ),
			'icon_blend'   => false,
			'title'        => '7. What We Do Not Do',
			'section_body' => '<ul class="media-policy-list media-policy-list--pink"><li>Sell or share photos with third parties</li><li>Use images for unrelated marketing</li><li>Post photos without appropriate consent</li><li>Share identifiable images publicly without permission</li></ul>',
		),
		array(
			'slug'         => 'rights',
			'section_id'   => 'media-rights',
			'nav_label'    => 'Your Rights',
			'icon'         => bdc_theme_asset_url( $asset_base . '60c31d4b-2d71-49b4-9311-979e1e6feeeb-removebg-preview.png' ),
			'icon_blend'   => false,
			'title'        => '8. Your Rights',
			'section_body' => '<ul class="media-policy-checklist"><li><img class="media-policy-checklist__icon" src="' . esc_url( $checklist_icon ) . '" alt="" width="18" height="18" loading="lazy" decoding="async" aria-hidden="true" /><span>Request to review photos or videos of your child</span></li><li><img class="media-policy-checklist__icon" src="' . esc_url( $checklist_icon ) . '" alt="" width="18" height="18" loading="lazy" decoding="async" aria-hidden="true" /><span>Request removal from future use</span></li><li><img class="media-policy-checklist__icon" src="' . esc_url( $checklist_icon ) . '" alt="" width="18" height="18" loading="lazy" decoding="async" aria-hidden="true" /><span>Withdraw consent at any time</span></li><li><img class="media-policy-checklist__icon" src="' . esc_url( $checklist_icon ) . '" alt="" width="18" height="18" loading="lazy" decoding="async" aria-hidden="true" /><span>Ask questions about our media practices</span></li></ul>',
		),
		array(
			'slug'         => 'questions',
			'section_id'   => 'media-questions',
			'nav_label'    => 'Questions or Concerns',
			'icon'         => bdc_theme_asset_url( $asset_base . '789fd039-72d6-40a1-a56e-a46a110b48cc-removebg-preview.png' ),
			'icon_blend'   => false,
			'title'        => '9. Questions or Concerns',
			'section_body' => '<p>If you have questions about this policy or how your child&rsquo;s image is used, please contact us. We are happy to explain our practices and address any concerns promptly.</p><p><a class="media-policy-section__contact" href="' . esc_url( bdc_page_url( 'contact.html' ) ) . '">Contact our team</a></p>',
		),
	);
}

/**
 * Default left-sidebar navigation rows for the Photo Media Policy page.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_photo_media_policy_nav_items_defaults() {
	$items = array();

	foreach ( bdc_get_photo_media_policy_sections_defaults() as $row ) {
		$items[] = array(
			'anchor_id' => $row['section_id'],
			'icon'      => $row['icon'],
			'label'     => $row['nav_label'] ?? $row['title'],
		);
	}

	return $items;
}

/**
 * ACF field name for one Photo Media Policy section sub-field.
 *
 * @param string $slug Section slug.
 * @param string $sub  Sub field: title, icon, icon_blend, body.
 * @return string
 */
function bdc_photo_media_policy_section_field_name( $slug, $sub ) {
	return 'photo_media_policy_sec_' . $slug . '_' . $sub;
}

/**
 * Tabbed ACF fields for each Photo Media Policy section (sidebar + content).
 *
 * Uses standard text/image/wysiwyg fields instead of repeaters so they always
 * render in the block editor.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_photo_media_policy_acf_section_fields() {
	$fields = array(
		array(
			'key'     => 'field_photo_media_policy_sections_intro',
			'label'   => 'Policy sections',
			'name'    => '',
			'type'    => 'message',
			'message' => 'Each tab is one left-sidebar link and the matching content card. The title and icon update both sides of the page.',
		),
	);

	foreach ( bdc_get_photo_media_policy_sections_defaults() as $row ) {
		$slug = $row['slug'];

		$fields[] = array(
			'key'       => 'field_photo_media_policy_tab_' . $slug,
			'label'     => $row['title'],
			'name'      => '',
			'type'      => 'tab',
			'placement' => 'left',
			'endpoint'  => 0,
		);

		$fields[] = array(
			'key'           => 'field_photo_media_policy_sec_' . $slug . '_nav_label',
			'label'         => 'Sidebar link label',
			'name'          => bdc_photo_media_policy_section_field_name( $slug, 'nav_label' ),
			'type'          => 'text',
			'default_value' => $row['nav_label'] ?? $row['title'],
		);

		$fields[] = array(
			'key'           => 'field_photo_media_policy_sec_' . $slug . '_title',
			'label'         => 'Section title',
			'name'          => bdc_photo_media_policy_section_field_name( $slug, 'title' ),
			'type'          => 'text',
			'default_value' => $row['title'],
		);

		$fields[] = array(
			'key'           => 'field_photo_media_policy_sec_' . $slug . '_icon',
			'label'         => 'Icon (sidebar + section)',
			'name'          => bdc_photo_media_policy_section_field_name( $slug, 'icon' ),
			'type'          => 'image',
			'return_format' => 'array',
			'preview_size'  => 'thumbnail',
			'library'       => 'all',
			'instructions'  => 'Leave empty to keep the default icon.',
			'wrapper'       => array(
				'width' => '50',
			),
		);

		$fields[] = array(
			'key'           => 'field_photo_media_policy_sec_' . $slug . '_icon_blend',
			'label'         => 'Blend icon with background',
			'name'          => bdc_photo_media_policy_section_field_name( $slug, 'icon_blend' ),
			'type'          => 'true_false',
			'ui'            => 1,
			'default_value' => ! empty( $row['icon_blend'] ) ? 1 : 0,
			'instructions'  => 'Turn on for icons that should use the blend style.',
			'wrapper'       => array(
				'width' => '50',
			),
		);

		$fields[] = array(
			'key'           => 'field_photo_media_policy_sec_' . $slug . '_body',
			'label'         => 'Section body',
			'name'          => bdc_photo_media_policy_section_field_name( $slug, 'body' ),
			'type'          => 'wysiwyg',
			'tabs'          => 'all',
			'toolbar'       => 'basic',
			'media_upload'  => 0,
			'delay'         => 1,
			'default_value' => $row['section_body'],
		);
	}

	return $fields;
}

/**
 * Resolve Photo Media Policy sidebar links and content cards from ACF.
 *
 * @param int $post_id Page ID.
 * @return array{nav_items: array<int, array<string, mixed>>, sections: array<int, array<string, mixed>>}
 */
function bdc_get_photo_media_policy_resolved_content( $post_id ) {
	$post_id   = (int) $post_id;
	$nav_items = array();
	$sections  = array();

	foreach ( bdc_get_photo_media_policy_sections_defaults() as $default ) {
		$slug      = $default['slug'];
		$nav_label = bdc_get_acf_text(
			bdc_photo_media_policy_section_field_name( $slug, 'nav_label' ),
			$default['nav_label'] ?? $default['title'],
			$post_id
		);
		$title = bdc_get_acf_text(
			bdc_photo_media_policy_section_field_name( $slug, 'title' ),
			$default['title'],
			$post_id
		);
		$icon  = bdc_get_acf_image_url(
			bdc_photo_media_policy_section_field_name( $slug, 'icon' ),
			$default['icon'],
			$post_id
		);
		$body  = bdc_get_acf_text(
			bdc_photo_media_policy_section_field_name( $slug, 'body' ),
			$default['section_body'],
			$post_id
		);

		$icon_blend = (bool) $default['icon_blend'];

		if ( function_exists( 'get_field' ) ) {
			$saved_blend = get_field( bdc_photo_media_policy_section_field_name( $slug, 'icon_blend' ), $post_id );

			if ( null !== $saved_blend && false !== $saved_blend && '' !== $saved_blend ) {
				$icon_blend = (bool) $saved_blend;
			} elseif ( 0 === $saved_blend || '0' === $saved_blend ) {
				$icon_blend = false;
			}
		}

		$nav_items[] = array(
			'anchor_id' => $default['section_id'],
			'icon'      => $icon,
			'label'     => $nav_label,
		);

		$sections[] = array(
			'section_id'   => $default['section_id'],
			'icon'         => $icon,
			'icon_blend'   => $icon_blend,
			'title'        => $title,
			'section_body' => $body,
		);
	}

	return array(
		'nav_items' => $nav_items,
		'sections'  => $sections,
	);
}

/**
 * Pre-fill section title and body in the editor when nothing is saved yet.
 *
 * @param mixed $value   Stored value.
 * @param mixed $post_id Post ID.
 * @param array $field   Field settings.
 * @return mixed
 */
function bdc_acf_load_photo_media_policy_section_value( $value, $post_id, $field ) {
	unset( $post_id );

	if ( empty( $field['name'] ) || 0 !== strpos( $field['name'], 'photo_media_policy_sec_' ) ) {
		return $value;
	}

	if ( is_string( $value ) && '' !== trim( wp_strip_all_tags( $value ) ) ) {
		return $value;
	}

	if ( ! preg_match( '/^photo_media_policy_sec_([a-z]+)_([a-z_]+)$/', $field['name'], $matches ) ) {
		return $value;
	}

	$slug = $matches[1];
	$sub  = $matches[2];

	if ( 'title' !== $sub && 'nav_label' !== $sub && 'body' !== $sub ) {
		return $value;
	}

	foreach ( bdc_get_photo_media_policy_sections_defaults() as $row ) {
		if ( $row['slug'] !== $slug ) {
			continue;
		}

		if ( 'title' === $sub ) {
			return $row['title'];
		}

		if ( 'nav_label' === $sub ) {
			return $row['nav_label'] ?? $row['title'];
		}

		return $row['section_body'];
	}

	return $value;
}

add_filter( 'acf/load_value', 'bdc_acf_load_photo_media_policy_section_value', 10, 3 );
