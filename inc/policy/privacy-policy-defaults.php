<?php
/**
 * Default content for the Privacy Policy page (front end + ACF editor).
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
 * Default left-sidebar navigation rows for the Privacy Policy page.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_privacy_policy_nav_items_defaults() {
	$asset_base = bdc_get_privacy_policy_asset_base();

	return array(
		array(
			'anchor_id' => 'privacy-commitment',
			'icon'      => bdc_theme_asset_url( $asset_base . '6a865669-8fb3-459b-b2f1-1398e282cdb8__1_-removebg-preview.png' ),
			'label'     => '1. Our Privacy Commitment',
		),
		array(
			'anchor_id' => 'privacy-collect',
			'icon'      => bdc_theme_asset_url( $asset_base . 'e33e3c84-4719-4c46-a012-86a1d2971ce6.png' ),
			'label'     => '2. Information We Collect',
		),
		array(
			'anchor_id' => 'privacy-use',
			'icon'      => bdc_theme_asset_url( $asset_base . '10857d29-e7bb-4611-bfed-bff0aa832ecd-removebg-preview.png' ),
			'label'     => '3. How We Use Information',
		),
		array(
			'anchor_id' => 'privacy-children',
			'icon'      => bdc_theme_asset_url( $asset_base . '0507c991-0328-4294-9a76-feeaf885a10c.png' ),
			'label'     => '4. Children\'s Privacy',
		),
		array(
			'anchor_id' => 'privacy-parents',
			'icon'      => bdc_theme_asset_url( $asset_base . '99f2e1d3-0ee0-4c5b-a4c7-42dc7f309862.png' ),
			'label'     => '5. Parent & Guardian Rights',
		),
		array(
			'anchor_id' => 'privacy-cookies',
			'icon'      => bdc_theme_asset_url( $asset_base . '96ac01d2-a3ba-4e10-a9f3-1a0b164dad0f-removebg-preview.png' ),
			'label'     => '6. Cookies & Similar Technologies',
		),
		array(
			'anchor_id' => 'privacy-protect',
			'icon'      => bdc_theme_asset_url( $asset_base . '15aeb5c5-082c-4a44-8195-c5b50377e5b4-removebg-preview.png' ),
			'label'     => '7. How We Protect Your Information',
		),
		array(
			'anchor_id' => 'privacy-sharing',
			'icon'      => bdc_theme_asset_url( $asset_base . '58f0805d-846a-477c-9a6b-248c522ab3a1-removebg-preview.png' ),
			'label'     => '8. Sharing Information',
		),
		array(
			'anchor_id' => 'privacy-rights',
			'icon'      => bdc_theme_asset_url( $asset_base . '7b4ec0a7-9605-4610-b699-34431e9bec45-removebg-preview.png' ),
			'label'     => '9. Your Rights & Choices',
		),
		array(
			'anchor_id' => 'privacy-changes',
			'icon'      => bdc_theme_asset_url( $asset_base . '6773ccc5-4190-42d4-948e-7aa9b19e1c85-removebg-preview.png' ),
			'label'     => '10. Changes to This Policy',
		),
		array(
			'anchor_id' => 'privacy-contact',
			'icon'      => bdc_theme_asset_url( $asset_base . 'd9aa19fb-9974-44f2-944f-2a36382a7aa4-removebg-preview.png' ),
			'label'     => '11. Contact Us',
		),
	);
}

/**
 * Default main-content section rows for the Privacy Policy page.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_privacy_policy_sections_defaults() {
	$asset_base = bdc_get_privacy_policy_asset_base();

	return array(
		array(
			'section_id'   => 'privacy-commitment',
			'icon'         => bdc_theme_asset_url( $asset_base . '6a865669-8fb3-459b-b2f1-1398e282cdb8__1_-removebg-preview.png' ),
			'icon_blend'   => true,
			'title'        => '1. Our Privacy Commitment',
			'section_body' => '<p>Bright Dreamers Club is dedicated to safeguarding personal information with care and respect. We collect only what we need to operate our programs, communicate with families, and support our mission &mdash; and we handle it responsibly at every step.</p>',
		),
		array(
			'section_id'   => 'privacy-collect',
			'icon'         => bdc_theme_asset_url( $asset_base . 'e33e3c84-4719-4c46-a012-86a1d2971ce6.png' ),
			'icon_blend'   => false,
			'title'        => '2. Information We Collect',
			'section_body' => '<p>We may collect information such as:</p><ul class="media-policy-list media-policy-list--green"><li>Name and contact details provided through forms or registrations</li><li>Information shared by parents or guardians about a child&rsquo;s participation</li><li>Volunteer, donor, or partner inquiry details</li><li>Basic website usage data (see Cookies section)</li></ul>',
		),
		array(
			'section_id'   => 'privacy-use',
			'icon'         => bdc_theme_asset_url( $asset_base . '10857d29-e7bb-4611-bfed-bff0aa832ecd-removebg-preview.png' ),
			'icon_blend'   => false,
			'title'        => '3. How We Use Information',
			'section_body' => '<p>We use personal information to:</p><ul class="media-policy-list media-policy-list--green"><li>Operate programs, events, and community experiences</li><li>Communicate with families, volunteers, and supporters</li><li>Process applications, donations, and inquiries</li><li>Improve our website and services</li><li>Maintain safety and comply with legal obligations</li></ul>',
		),
		array(
			'section_id'   => 'privacy-children',
			'icon'         => bdc_theme_asset_url( $asset_base . '0507c991-0328-4294-9a76-feeaf885a10c.png' ),
			'icon_blend'   => false,
			'title'        => '4. Children&rsquo;s Privacy',
			'section_body' => '<p>Protecting children is our highest priority. We do not knowingly collect personal information directly from children without appropriate parental or guardian involvement. Program participation information is generally provided by a parent or guardian.</p>',
		),
		array(
			'section_id'   => 'privacy-parents',
			'icon'         => bdc_theme_asset_url( $asset_base . '99f2e1d3-0ee0-4c5b-a4c7-42dc7f309862.png' ),
			'icon_blend'   => false,
			'title'        => '5. Parent &amp; Guardian Rights',
			'section_body' => '<p>Parents and guardians may request access to, correction of, or deletion of a child&rsquo;s personal information where applicable. You may also withdraw consent for specific uses, such as photography, in accordance with our Photo &amp; Media Policy.</p><p><a class="media-policy-section__contact" href="' . esc_url( bdc_page_url( 'photo-media-policy.html' ) ) . '">View our Photo &amp; Media Policy</a></p>',
		),
		array(
			'section_id'   => 'privacy-cookies',
			'icon'         => bdc_theme_asset_url( $asset_base . '96ac01d2-a3ba-4e10-a9f3-1a0b164dad0f-removebg-preview.png' ),
			'icon_blend'   => false,
			'title'        => '6. Cookies &amp; Similar Technologies',
			'section_body' => '<p>Our website may use cookies and similar technologies to help the site function, remember preferences, and understand how visitors use our pages. You can adjust cookie settings through your browser at any time.</p>',
		),
		array(
			'section_id'   => 'privacy-protect',
			'icon'         => bdc_theme_asset_url( $asset_base . '15aeb5c5-082c-4a44-8195-c5b50377e5b4-removebg-preview.png' ),
			'icon_blend'   => false,
			'title'        => '7. How We Protect Your Information',
			'section_body' => '<p>We use reasonable administrative, technical, and organizational safeguards to protect personal information. Access is limited to authorized staff and volunteers who need the information to perform their roles.</p>',
		),
		array(
			'section_id'   => 'privacy-sharing',
			'icon'         => bdc_theme_asset_url( $asset_base . '58f0805d-846a-477c-9a6b-248c522ab3a1-removebg-preview.png' ),
			'icon_blend'   => false,
			'title'        => '8. Sharing Information',
			'section_body' => '<p>We do not sell personal information. We may share information only when necessary to operate our programs, comply with law, or with trusted service providers who help us run our website and communications under appropriate safeguards.</p>',
		),
		array(
			'section_id'   => 'privacy-rights',
			'icon'         => bdc_theme_asset_url( $asset_base . '7b4ec0a7-9605-4610-b699-34431e9bec45-removebg-preview.png' ),
			'icon_blend'   => false,
			'title'        => '9. Your Rights &amp; Choices',
			'section_body' => '<p>Depending on your location, you may have the right to:</p><ul class="media-policy-list media-policy-list--green"><li>Request access to personal information we hold about you</li><li>Ask us to correct inaccurate information</li><li>Request deletion where applicable</li><li>Opt out of certain communications</li></ul>',
		),
		array(
			'section_id'   => 'privacy-changes',
			'icon'         => bdc_theme_asset_url( $asset_base . '6773ccc5-4190-42d4-948e-7aa9b19e1c85-removebg-preview.png' ),
			'icon_blend'   => false,
			'title'        => '10. Changes to This Policy',
			'section_body' => '<p>We may update this Privacy Policy from time to time. When we make changes, we will post the updated policy on this page. Continued use of our website after updates means you accept the revised policy.</p>',
		),
		array(
			'section_id'   => 'privacy-contact',
			'icon'         => bdc_theme_asset_url( $asset_base . 'd9aa19fb-9974-44f2-944f-2a36382a7aa4-removebg-preview.png' ),
			'icon_blend'   => false,
			'title'        => '11. Contact Us',
			'section_body' => '<p>If you have questions about this Privacy Policy or how we handle personal information, please contact us. We are happy to help.</p><p><a class="media-policy-section__contact" href="mailto:hello@brightdreamersclub.org">hello@brightdreamersclub.org</a></p><p><a class="media-policy-section__contact" href="' . esc_url( bdc_page_url( 'contact.html' ) ) . '">Contact our team</a></p>',
		),
	);
}

/**
 * Privacy Policy nav rows formatted for the ACF editor.
 *
 * Icons are left empty so the theme keeps each default icon until replaced.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_privacy_policy_nav_items_acf_defaults() {
	$rows = array();

	foreach ( bdc_get_privacy_policy_nav_items_defaults() as $row ) {
		$rows[] = array(
			'anchor_id' => $row['anchor_id'],
			'icon'      => '',
			'label'     => $row['label'],
		);
	}

	return $rows;
}

/**
 * Privacy Policy section rows formatted for the ACF editor.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_privacy_policy_sections_acf_defaults() {
	$rows = array();

	foreach ( bdc_get_privacy_policy_sections_defaults() as $row ) {
		$rows[] = array(
			'section_id'   => $row['section_id'],
			'icon'         => '',
			'icon_blend'   => ! empty( $row['icon_blend'] ) ? 1 : 0,
			'title'        => $row['title'],
			'section_body' => $row['section_body'],
		);
	}

	return $rows;
}

/**
 * Whether a post uses the Privacy Policy template or slug.
 *
 * @param int $post_id Post ID.
 * @return bool
 */
function bdc_is_privacy_policy_page( $post_id ) {
	$post_id = (int) $post_id;

	if ( $post_id <= 0 ) {
		return false;
	}

	$post = get_post( $post_id );

	if ( ! $post || 'page' !== $post->post_type ) {
		return false;
	}

	if ( 'page-privacy-policy.php' === get_page_template_slug( $post_id ) ) {
		return true;
	}

	if ( 'privacy-policy' === $post->post_name ) {
		return true;
	}

	return $post_id === (int) get_option( 'wp_page_for_privacy_policy' );
}

/**
 * Whether an ACF repeater value is empty or has no meaningful rows.
 *
 * @param mixed $value Repeater value.
 * @return bool
 */
function bdc_acf_repeater_value_is_empty( $value ) {
	if ( null === $value || false === $value || '' === $value ) {
		return true;
	}

	if ( ! is_array( $value ) ) {
		return true;
	}

	if ( array() === $value ) {
		return true;
	}

	foreach ( $value as $row ) {
		if ( ! is_array( $row ) ) {
			continue;
		}

		foreach ( $row as $cell ) {
			if ( is_array( $cell ) && ! empty( $cell ) ) {
				return false;
			}

			if ( is_string( $cell ) && '' !== trim( $cell ) ) {
				return false;
			}

			if ( ! empty( $cell ) ) {
				return false;
			}
		}
	}

	return true;
}

/**
 * Whether saved ACF repeater row-count meta is empty.
 *
 * @param int    $post_id    Post ID.
 * @param string $field_name Repeater field name.
 * @return bool
 */
function bdc_acf_repeater_meta_is_empty( $post_id, $field_name ) {
	$count = get_post_meta( (int) $post_id, $field_name, true );

	return '' === $count || false === $count || null === $count || '0' === (string) $count;
}

/**
 * Pre-fill Privacy Policy sidebar nav rows when nothing has been saved yet.
 *
 * @param mixed $value   Stored value.
 * @param mixed $post_id Post ID.
 * @param array $field   Field settings.
 * @return mixed
 */
function bdc_acf_load_privacy_policy_nav_items( $value, $post_id, $field ) {
	unset( $field );

	if ( ! bdc_acf_repeater_value_is_empty( $value ) ) {
		return $value;
	}

	return bdc_get_privacy_policy_nav_items_acf_defaults();
}

/**
 * Pre-fill Privacy Policy main content rows when nothing has been saved yet.
 *
 * @param mixed $value   Stored value.
 * @param mixed $post_id Post ID.
 * @param array $field   Field settings.
 * @return mixed
 */
function bdc_acf_load_privacy_policy_sections( $value, $post_id, $field ) {
	unset( $field );

	if ( ! bdc_acf_repeater_value_is_empty( $value ) ) {
		return $value;
	}

	return bdc_get_privacy_policy_sections_acf_defaults();
}

/**
 * Ensure Privacy Policy repeaters render with default rows in the editor.
 *
 * @param array $field ACF field settings.
 * @return array
 */
function bdc_acf_pre_render_privacy_policy_repeater( $field ) {
	if ( ! is_admin() || empty( $field['name'] ) || 'repeater' !== ( $field['type'] ?? '' ) ) {
		return $field;
	}

	if ( ! in_array( $field['name'], array( 'privacy_policy_nav_items', 'privacy_policy_sections' ), true ) ) {
		return $field;
	}

	global $post;

	if ( ! $post instanceof WP_Post || ! bdc_is_privacy_policy_page( $post->ID ) ) {
		return $field;
	}

	if ( bdc_acf_repeater_value_is_empty( $field['value'] ?? null ) ) {
		if ( 'privacy_policy_nav_items' === $field['name'] ) {
			$field['value'] = bdc_get_privacy_policy_nav_items_acf_defaults();
		} else {
			$field['value'] = bdc_get_privacy_policy_sections_acf_defaults();
		}
	}

	return $field;
}

/**
 * Save default Privacy Policy repeater rows the first time the page is edited.
 *
 * @return void
 */
function bdc_seed_privacy_policy_acf_repeaters_on_edit() {
	if ( ! function_exists( 'update_field' ) || ! is_admin() ) {
		return;
	}

	global $post;

	if ( ! $post instanceof WP_Post || ! bdc_is_privacy_policy_page( $post->ID ) ) {
		return;
	}

	if ( bdc_acf_repeater_meta_is_empty( $post->ID, 'privacy_policy_nav_items' ) ) {
		update_field( 'privacy_policy_nav_items', bdc_get_privacy_policy_nav_items_acf_defaults(), $post->ID );
	}

	if ( bdc_acf_repeater_meta_is_empty( $post->ID, 'privacy_policy_sections' ) ) {
		update_field( 'privacy_policy_sections', bdc_get_privacy_policy_sections_acf_defaults(), $post->ID );
	}
}

/**
 * Register Privacy Policy ACF default hooks.
 *
 * @return void
 */
function bdc_register_privacy_policy_acf_defaults() {
	add_filter( 'acf/load_value/name=privacy_policy_nav_items', 'bdc_acf_load_privacy_policy_nav_items', 10, 3 );
	add_filter( 'acf/load_value/name=privacy_policy_sections', 'bdc_acf_load_privacy_policy_sections', 10, 3 );
	add_filter( 'acf/pre_render_field/type=repeater', 'bdc_acf_pre_render_privacy_policy_repeater', 10, 1 );
	add_action( 'acf/input/admin_head', 'bdc_seed_privacy_policy_acf_repeaters_on_edit' );
}

add_action( 'acf/init', 'bdc_register_privacy_policy_acf_defaults' );
