<?php
/**
 * Default content and ACF field builders for the Terms of Use page.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Asset path prefix for Terms of Use images.
 *
 * @return string
 */
function bdc_get_terms_asset_base() {
	return 'assets/images/Terms of Use/';
}

/**
 * Default Terms of Use cards. Each row is one grid card.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_terms_sections_defaults() {
	$asset_base = bdc_get_terms_asset_base();

	return array(
		array(
			'slug'         => 'website',
			'icon'         => bdc_theme_asset_url( $asset_base . 'e5eb48c5-d630-4137-bc54-9cc6d9e5ef08-removebg-preview.png' ),
			'title'        => '1. Use of Our Website',
			'section_body' => '<p class="terms-section-card__text">By using this site, you agree to comply with these terms and all applicable laws. Content is provided for general information about Bright Dreamers Club programs, resources, and community activities.</p>',
		),
		array(
			'slug'         => 'acceptable',
			'icon'         => bdc_theme_asset_url( $asset_base . 'c66e3371-368a-4edf-9891-28f249498a6f-removebg-preview.png' ),
			'title'        => '2. Acceptable Use',
			'section_body' => '<p class="terms-section-card__text">You agree not to misuse the site, attempt unauthorized access, or use it in ways that could harm children, members, volunteers, or our organization.</p>',
		),
		array(
			'slug'         => 'intellectual',
			'icon'         => bdc_theme_asset_url( $asset_base . '13d1889b-d767-40af-9664-0b95a2d0c39d-removebg-preview.png' ),
			'title'        => '3. Intellectual Property',
			'section_body' => '<p class="terms-section-card__text">All content, logos, images, and materials on this site are owned by Bright Dreamers Club unless otherwise noted. You may not copy, reproduce, or distribute without permission.</p>',
		),
		array(
			'slug'         => 'links',
			'icon'         => bdc_theme_asset_url( $asset_base . '41da6640-6812-4bdd-8047-07ddb002528a-removebg-preview.png' ),
			'title'        => '4. Links to Other Websites',
			'section_body' => '<p class="terms-section-card__text">Our site may link to third-party websites. We are not responsible for the content, policies, or practices of those external sites.</p>',
		),
		array(
			'slug'         => 'disclaimer',
			'icon'         => bdc_theme_asset_url( $asset_base . '50e11c9a-c9b8-433e-ba9a-999ce35404e9-removebg-preview.png' ),
			'title'        => '5. Disclaimer of Warranties',
			'section_body' => '<p class="terms-section-card__text">This website is provided &ldquo;as is.&rdquo; We do not guarantee uninterrupted access or that all information on the site is complete, current, or error-free.</p>',
		),
		array(
			'slug'         => 'liability',
			'icon'         => bdc_theme_asset_url( $asset_base . '6554bb76-3aa4-4b73-b5fa-5ee56d782936-removebg-preview.png' ),
			'title'        => '6. Limitation of Liability',
			'section_body' => '<p class="terms-section-card__text">Bright Dreamers Club is not liable for damages arising from your use of this website, to the fullest extent permitted by applicable law.</p>',
		),
		array(
			'slug'         => 'changes',
			'icon'         => bdc_theme_asset_url( $asset_base . 'e5b42336-787f-4999-b111-559698a94765-removebg-preview.png' ),
			'title'        => '7. Changes to These Terms',
			'section_body' => '<p class="terms-section-card__text">We may update these terms from time to time. Continued use of the site after changes are posted means you accept the updated terms.</p>',
		),
		array(
			'slug'         => 'contact',
			'icon'         => bdc_theme_asset_url( $asset_base . '345f4f61-94ce-4c61-9a92-0e2e4a76660d-removebg-preview.png' ),
			'title'        => '8. Contact Us',
			'section_body' => '<p class="terms-section-card__text">If you have questions about these Terms of Use, please reach out through our <a class="terms-section-card__link" href="' . esc_url( bdc_page_url( 'contact.html' ) ) . '">contact page</a> or email <a class="terms-section-card__link" href="mailto:hello@brightdreamersclub.org">hello@brightdreamersclub.org</a>.</p>',
		),
	);
}

/**
 * ACF field name for one Terms section sub-field.
 *
 * @param string $slug Section slug.
 * @param string $sub  Sub field: title, icon, body.
 * @return string
 */
function bdc_terms_section_field_name( $slug, $sub ) {
	return 'terms_sec_' . $slug . '_' . $sub;
}

/**
 * Tabbed ACF fields for each Terms of Use card.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_terms_acf_section_fields() {
	$fields = array(
		array(
			'key'           => 'field_terms_sections_aria_label',
			'label'         => 'Sections aria label',
			'name'          => 'terms_sections_aria_label',
			'type'          => 'text',
			'default_value' => 'Terms sections',
		),
		array(
			'key'     => 'field_terms_sections_intro',
			'label'   => 'Terms cards',
			'name'    => '',
			'type'    => 'message',
			'message' => 'Each tab is one card in the terms grid. Change the title, icon, or body text to update that card on the page.',
		),
	);

	foreach ( bdc_get_terms_sections_defaults() as $row ) {
		$slug = $row['slug'];

		$fields[] = array(
			'key'       => 'field_terms_tab_' . $slug,
			'label'     => $row['title'],
			'name'      => '',
			'type'      => 'tab',
			'placement' => 'left',
			'endpoint'  => 0,
		);

		$fields[] = array(
			'key'           => 'field_terms_sec_' . $slug . '_title',
			'label'         => 'Card title',
			'name'          => bdc_terms_section_field_name( $slug, 'title' ),
			'type'          => 'text',
			'default_value' => $row['title'],
		);

		$fields[] = array(
			'key'           => 'field_terms_sec_' . $slug . '_icon',
			'label'         => 'Card icon',
			'name'          => bdc_terms_section_field_name( $slug, 'icon' ),
			'type'          => 'image',
			'return_format' => 'array',
			'preview_size'  => 'thumbnail',
			'library'       => 'all',
			'instructions'  => 'Leave empty to keep the default icon.',
		);

		$fields[] = array(
			'key'           => 'field_terms_sec_' . $slug . '_body',
			'label'         => 'Card body',
			'name'          => bdc_terms_section_field_name( $slug, 'body' ),
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
 * Resolve Terms of Use grid cards from ACF.
 *
 * @param int $post_id Page ID.
 * @return array<int, array<string, mixed>>
 */
function bdc_get_terms_resolved_sections( $post_id ) {
	$post_id  = (int) $post_id;
	$sections = array();

	foreach ( bdc_get_terms_sections_defaults() as $default ) {
		$slug = $default['slug'];

		$sections[] = array(
			'icon'         => bdc_get_acf_image_url(
				bdc_terms_section_field_name( $slug, 'icon' ),
				$default['icon'],
				$post_id
			),
			'title'        => bdc_get_acf_text(
				bdc_terms_section_field_name( $slug, 'title' ),
				$default['title'],
				$post_id
			),
			'section_body' => bdc_get_acf_text(
				bdc_terms_section_field_name( $slug, 'body' ),
				$default['section_body'],
				$post_id
			),
		);
	}

	return $sections;
}

/**
 * Pre-fill Terms card title and body in the editor when nothing is saved yet.
 *
 * @param mixed $value   Stored value.
 * @param mixed $post_id Post ID.
 * @param array $field   Field settings.
 * @return mixed
 */
function bdc_acf_load_terms_section_value( $value, $post_id, $field ) {
	unset( $post_id );

	if ( empty( $field['name'] ) || 0 !== strpos( $field['name'], 'terms_sec_' ) ) {
		return $value;
	}

	if ( is_string( $value ) && '' !== trim( wp_strip_all_tags( $value ) ) ) {
		return $value;
	}

	if ( ! preg_match( '/^terms_sec_([a-z]+)_([a-z_]+)$/', $field['name'], $matches ) ) {
		return $value;
	}

	$slug = $matches[1];
	$sub  = $matches[2];

	if ( 'title' !== $sub && 'body' !== $sub ) {
		return $value;
	}

	foreach ( bdc_get_terms_sections_defaults() as $row ) {
		if ( $row['slug'] !== $slug ) {
			continue;
		}

		return 'title' === $sub ? $row['title'] : $row['section_body'];
	}

	return $value;
}

add_filter( 'acf/load_value', 'bdc_acf_load_terms_section_value', 10, 3 );
