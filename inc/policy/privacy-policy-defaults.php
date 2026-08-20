<?php
/**
 * Default content and ACF field builders for the Privacy Policy page.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Asset path prefix for Privacy Policy images.
 *
 * @return string
 */
function bdc_get_privacy_policy_asset_base() {
	return 'assets/images/Privacy Policy/';
}

/**
 * Default policy sections. Each row is one sidebar link and one content card.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_privacy_policy_sections_defaults() {
	$asset_base = bdc_get_privacy_policy_asset_base();

	return array(
		array(
			'slug'         => 'commitment',
			'section_id'   => 'privacy-commitment',
			'icon'         => bdc_theme_asset_url( $asset_base . '6a865669-8fb3-459b-b2f1-1398e282cdb8__1_-removebg-preview.png' ),
			'icon_blend'   => true,
			'title'        => '1. Our Privacy Commitment',
			'section_body' => '<p>Bright Dreamers Club is dedicated to safeguarding personal information with care and respect. We collect only what we need to operate our programs, communicate with families, and support our mission &mdash; and we handle it responsibly at every step.</p>',
		),
		array(
			'slug'         => 'collect',
			'section_id'   => 'privacy-collect',
			'icon'         => bdc_theme_asset_url( $asset_base . 'e33e3c84-4719-4c46-a012-86a1d2971ce6.png' ),
			'icon_blend'   => false,
			'title'        => '2. Information We Collect',
			'section_body' => '<p>We may collect information such as:</p><ul class="media-policy-list media-policy-list--green"><li>Name and contact details provided through forms or registrations</li><li>Information shared by parents or guardians about a child&rsquo;s participation</li><li>Volunteer, donor, or partner inquiry details</li><li>Basic website usage data (see Cookies section)</li></ul>',
		),
		array(
			'slug'         => 'use',
			'section_id'   => 'privacy-use',
			'icon'         => bdc_theme_asset_url( $asset_base . '10857d29-e7bb-4611-bfed-bff0aa832ecd-removebg-preview.png' ),
			'icon_blend'   => false,
			'title'        => '3. How We Use Information',
			'section_body' => '<p>We use personal information to:</p><ul class="media-policy-list media-policy-list--green"><li>Operate programs, events, and community experiences</li><li>Communicate with families, volunteers, and supporters</li><li>Process applications, donations, and inquiries</li><li>Improve our website and services</li><li>Maintain safety and comply with legal obligations</li></ul>',
		),
		array(
			'slug'         => 'children',
			'section_id'   => 'privacy-children',
			'icon'         => bdc_theme_asset_url( $asset_base . '0507c991-0328-4294-9a76-feeaf885a10c.png' ),
			'icon_blend'   => false,
			'title'        => '4. Children\'s Privacy',
			'section_body' => '<p>Protecting children is our highest priority. We do not knowingly collect personal information directly from children without appropriate parental or guardian involvement. Program participation information is generally provided by a parent or guardian.</p>',
		),
		array(
			'slug'         => 'parents',
			'section_id'   => 'privacy-parents',
			'icon'         => bdc_theme_asset_url( $asset_base . '99f2e1d3-0ee0-4c5b-a4c7-42dc7f309862.png' ),
			'icon_blend'   => false,
			'title'        => '5. Parent & Guardian Rights',
			'section_body' => '<p>Parents and guardians may request access to, correction of, or deletion of a child&rsquo;s personal information where applicable. You may also withdraw consent for specific uses, such as photography, in accordance with our Photo &amp; Media Policy.</p><p><a class="media-policy-section__contact" href="' . esc_url( bdc_page_url( 'photo-media-policy.html' ) ) . '">View our Photo &amp; Media Policy</a></p>',
		),
		array(
			'slug'         => 'cookies',
			'section_id'   => 'privacy-cookies',
			'icon'         => bdc_theme_asset_url( $asset_base . '96ac01d2-a3ba-4e10-a9f3-1a0b164dad0f-removebg-preview.png' ),
			'icon_blend'   => false,
			'title'        => '6. Cookies & Similar Technologies',
			'section_body' => '<p>Our website may use cookies and similar technologies to help the site function, remember preferences, and understand how visitors use our pages. You can adjust cookie settings through your browser at any time.</p>',
		),
		array(
			'slug'         => 'protect',
			'section_id'   => 'privacy-protect',
			'icon'         => bdc_theme_asset_url( $asset_base . '15aeb5c5-082c-4a44-8195-c5b50377e5b4-removebg-preview.png' ),
			'icon_blend'   => false,
			'title'        => '7. How We Protect Your Information',
			'section_body' => '<p>We use reasonable administrative, technical, and organizational safeguards to protect personal information. Access is limited to authorized staff and volunteers who need the information to perform their roles.</p>',
		),
		array(
			'slug'         => 'sharing',
			'section_id'   => 'privacy-sharing',
			'icon'         => bdc_theme_asset_url( $asset_base . '58f0805d-846a-477c-9a6b-248c522ab3a1-removebg-preview.png' ),
			'icon_blend'   => false,
			'title'        => '8. Sharing Information',
			'section_body' => '<p>We do not sell personal information. We may share information only when necessary to operate our programs, comply with law, or with trusted service providers who help us run our website and communications under appropriate safeguards.</p>',
		),
		array(
			'slug'         => 'rights',
			'section_id'   => 'privacy-rights',
			'icon'         => bdc_theme_asset_url( $asset_base . '7b4ec0a7-9605-4610-b699-34431e9bec45-removebg-preview.png' ),
			'icon_blend'   => false,
			'title'        => '9. Your Rights & Choices',
			'section_body' => '<p>Depending on your location, you may have the right to:</p><ul class="media-policy-list media-policy-list--green"><li>Request access to personal information we hold about you</li><li>Ask us to correct inaccurate information</li><li>Request deletion where applicable</li><li>Opt out of certain communications</li></ul>',
		),
		array(
			'slug'         => 'changes',
			'section_id'   => 'privacy-changes',
			'icon'         => bdc_theme_asset_url( $asset_base . '6773ccc5-4190-42d4-948e-7aa9b19e1c85-removebg-preview.png' ),
			'icon_blend'   => false,
			'title'        => '10. Changes to This Policy',
			'section_body' => '<p>We may update this Privacy Policy from time to time. When we make changes, we will post the updated policy on this page. Continued use of our website after updates means you accept the revised policy.</p>',
		),
		array(
			'slug'         => 'contact',
			'section_id'   => 'privacy-contact',
			'icon'         => bdc_theme_asset_url( $asset_base . 'd9aa19fb-9974-44f2-944f-2a36382a7aa4-removebg-preview.png' ),
			'icon_blend'   => false,
			'title'        => '11. Contact Us',
			'section_body' => '<p>If you have questions about this Privacy Policy or how we handle personal information, please contact us. We are happy to help.</p><p><a class="media-policy-section__contact" href="mailto:hello@brightdreamersclub.org">hello@brightdreamersclub.org</a></p><p><a class="media-policy-section__contact" href="' . esc_url( bdc_page_url( 'contact.html' ) ) . '">Contact our team</a></p>',
		),
	);
}

/**
 * Default left-sidebar navigation rows for the Privacy Policy page.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_privacy_policy_nav_items_defaults() {
	$items = array();

	foreach ( bdc_get_privacy_policy_sections_defaults() as $row ) {
		$items[] = array(
			'anchor_id' => $row['section_id'],
			'icon'      => $row['icon'],
			'label'     => $row['title'],
		);
	}

	return $items;
}

/**
 * ACF field name for one Privacy Policy section sub-field.
 *
 * @param string $slug Section slug.
 * @param string $sub  Sub field: title, icon, icon_blend, body.
 * @return string
 */
function bdc_privacy_policy_section_field_name( $slug, $sub ) {
	return 'privacy_policy_sec_' . $slug . '_' . $sub;
}

/**
 * Tabbed ACF fields for each Privacy Policy section (sidebar + content).
 *
 * Uses standard text/image/wysiwyg fields instead of repeaters so they always
 * render in the block editor.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_privacy_policy_acf_section_fields() {
	$fields = array(
		array(
			'key'     => 'field_privacy_policy_sections_intro',
			'label'   => 'Policy sections',
			'name'    => '',
			'type'    => 'message',
			'message' => 'Each tab is one left-sidebar link and the matching content card. The title and icon update both sides of the page.',
		),
	);

	foreach ( bdc_get_privacy_policy_sections_defaults() as $row ) {
		$slug = $row['slug'];

		$fields[] = array(
			'key'       => 'field_privacy_policy_tab_' . $slug,
			'label'     => $row['title'],
			'name'      => '',
			'type'      => 'tab',
			'placement' => 'left',
			'endpoint'  => 0,
		);

		$fields[] = array(
			'key'           => 'field_privacy_policy_sec_' . $slug . '_title',
			'label'         => 'Title (sidebar + section heading)',
			'name'          => bdc_privacy_policy_section_field_name( $slug, 'title' ),
			'type'          => 'text',
			'default_value' => $row['title'],
		);

		$fields[] = array(
			'key'           => 'field_privacy_policy_sec_' . $slug . '_icon',
			'label'         => 'Icon (sidebar + section)',
			'name'          => bdc_privacy_policy_section_field_name( $slug, 'icon' ),
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
			'key'           => 'field_privacy_policy_sec_' . $slug . '_icon_blend',
			'label'         => 'Blend icon with background',
			'name'          => bdc_privacy_policy_section_field_name( $slug, 'icon_blend' ),
			'type'          => 'true_false',
			'ui'            => 1,
			'default_value' => ! empty( $row['icon_blend'] ) ? 1 : 0,
			'instructions'  => 'Turn on for icons that should use the blend style.',
			'wrapper'       => array(
				'width' => '50',
			),
		);

		$fields[] = array(
			'key'           => 'field_privacy_policy_sec_' . $slug . '_body',
			'label'         => 'Section body',
			'name'          => bdc_privacy_policy_section_field_name( $slug, 'body' ),
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
 * Resolve Privacy Policy sidebar links and content cards from ACF.
 *
 * @param int $post_id Page ID.
 * @return array{nav_items: array<int, array<string, mixed>>, sections: array<int, array<string, mixed>>}
 */
function bdc_get_privacy_policy_resolved_content( $post_id ) {
	$post_id   = (int) $post_id;
	$nav_items = array();
	$sections  = array();

	foreach ( bdc_get_privacy_policy_sections_defaults() as $default ) {
		$slug  = $default['slug'];
		$title = bdc_get_acf_text(
			bdc_privacy_policy_section_field_name( $slug, 'title' ),
			$default['title'],
			$post_id
		);
		$icon  = bdc_get_acf_image_url(
			bdc_privacy_policy_section_field_name( $slug, 'icon' ),
			$default['icon'],
			$post_id
		);
		$body  = bdc_get_acf_text(
			bdc_privacy_policy_section_field_name( $slug, 'body' ),
			$default['section_body'],
			$post_id
		);

		$icon_blend = (bool) $default['icon_blend'];

		if ( function_exists( 'get_field' ) ) {
			$saved_blend = get_field( bdc_privacy_policy_section_field_name( $slug, 'icon_blend' ), $post_id );

			if ( null !== $saved_blend && false !== $saved_blend && '' !== $saved_blend ) {
				$icon_blend = (bool) $saved_blend;
			} elseif ( 0 === $saved_blend || '0' === $saved_blend ) {
				$icon_blend = false;
			}
		}

		$nav_items[] = array(
			'anchor_id' => $default['section_id'],
			'icon'      => $icon,
			'label'     => $title,
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
function bdc_acf_load_privacy_policy_section_value( $value, $post_id, $field ) {
	unset( $post_id );

	if ( empty( $field['name'] ) || 0 !== strpos( $field['name'], 'privacy_policy_sec_' ) ) {
		return $value;
	}

	if ( is_string( $value ) && '' !== trim( wp_strip_all_tags( $value ) ) ) {
		return $value;
	}

	if ( ! preg_match( '/^privacy_policy_sec_([a-z]+)_([a-z_]+)$/', $field['name'], $matches ) ) {
		return $value;
	}

	$slug = $matches[1];
	$sub  = $matches[2];

	if ( 'title' !== $sub && 'body' !== $sub ) {
		return $value;
	}

	foreach ( bdc_get_privacy_policy_sections_defaults() as $row ) {
		if ( $row['slug'] !== $slug ) {
			continue;
		}

		return 'title' === $sub ? $row['title'] : $row['section_body'];
	}

	return $value;
}

add_filter( 'acf/load_value', 'bdc_acf_load_privacy_policy_section_value', 10, 3 );
