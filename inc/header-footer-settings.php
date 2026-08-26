<?php
/**
 * Header & Footer settings (Bright Dreamers admin page).
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'BDC_HF_SETTINGS_OPTION', 'bdc_header_footer_settings' );

/**
 * Settings tabs.
 *
 * @return array<string, string>
 */
function bdc_get_header_footer_settings_tabs() {
	return array(
		'header' => __( 'Header', 'bright-dreamers-club' ),
		'footer' => __( 'Footer', 'bright-dreamers-club' ),
	);
}

/**
 * Default header menu items (label + URL, with optional children).
 *
 * @return array<string, array<string, mixed>>
 */
function bdc_hf_default_menu_items() {
	return array(
		'home'          => array(
			'label'    => 'Home',
			'url'      => home_url( '/' ),
			'children' => array(),
		),
		'about'         => array(
			'label'    => 'About Us',
			'url'      => home_url( '/about/' ),
			'children' => array(),
		),
		'explore'       => array(
			'label'    => 'Explore',
			'url'      => home_url( '/explore/' ),
			'children' => array(
				'creative_makers'       => array(
					'label' => 'Creative Makers',
					'url'   => home_url( '/creative-makers/' ),
				),
				'young_ideas_lab'       => array(
					'label' => 'Young Ideas Lab',
					'url'   => home_url( '/young-ideas-lab/' ),
				),
				'create_for_cause'      => array(
					'label' => 'Create for a Cause',
					'url'   => home_url( '/create-for-cause/' ),
				),
				'community_adventures'  => array(
					'label' => 'Community Adventures',
					'url'   => home_url( '/community-adventures/' ),
				),
			),
		),
		'for_parents'   => array(
			'label'    => 'For Parents',
			'url'      => home_url( '/for-parents/' ),
			'children' => array(),
		),
		'our_vision'    => array(
			'label'    => 'Our Vision',
			'url'      => home_url( '/our-vision/' ),
			'children' => array(),
		),
		'get_involved'  => array(
			'label'    => 'Get Involved',
			'url'      => home_url( '/get-involved/' ),
			'children' => array(),
		),
		'partners'      => array(
			'label'    => 'Partners',
			'url'      => home_url( '/partners/' ),
			'children' => array(),
		),
		'contact'       => array(
			'label'    => 'Contact',
			'url'      => home_url( '/contact/' ),
			'children' => array(),
		),
	);
}

/**
 * Default named link rows.
 *
 * @param string $group explore|get_involved|resources|legal.
 * @return array<string, array{label:string,url:string}>
 */
function bdc_hf_default_link_group( $group ) {
	switch ( $group ) {
		case 'explore':
			return array(
				'home'         => array( 'label' => 'Home', 'url' => home_url( '/' ) ),
				'about'        => array( 'label' => 'About Us', 'url' => home_url( '/about/' ) ),
				'explore'      => array( 'label' => 'Explore', 'url' => home_url( '/explore/' ) ),
				'for_parents'  => array( 'label' => 'For Parents', 'url' => home_url( '/for-parents/' ) ),
				'our_vision'   => array( 'label' => 'Our Vision', 'url' => home_url( '/our-vision/' ) ),
				'get_involved' => array( 'label' => 'Get Involved', 'url' => home_url( '/get-involved/' ) ),
				'partners'     => array( 'label' => 'Partners', 'url' => home_url( '/partners/' ) ),
				'contact'      => array( 'label' => 'Contact Us', 'url' => home_url( '/contact/' ) ),
			);
		case 'get_involved':
			return array(
				'volunteer' => array( 'label' => 'Volunteer', 'url' => bdc_page_url( 'volunteer-application.html' ) ),
				'partner'   => array( 'label' => 'Partner With Us', 'url' => bdc_page_url( 'partner-inquiry.html' ) ),
				'donate'    => array( 'label' => 'Donate', 'url' => home_url( '/donation-interest/' ) ),
				'share'     => array( 'label' => 'Share Our Mission', 'url' => home_url( '/our-vision/' ) ),
			);
		case 'resources':
			return array(
				'faq'           => array( 'label' => 'FAQ', 'url' => home_url( '/faq/' ) ),
				'child_safety'  => array( 'label' => 'Child Safety & Safeguarding', 'url' => home_url( '/faq/' ) ),
				'photo_policy'  => array( 'label' => 'Photo & Media Policy', 'url' => home_url( '/photo-media-policy/' ) ),
				'photo_consent' => array( 'label' => 'Photo & Media Consent Form', 'url' => bdc_page_url( 'photo-media-consent.html' ) ),
				'financial'     => array( 'label' => 'Financial Transparency', 'url' => home_url( '/financial-transparency/' ) ),
			);
		case 'legal':
			return array(
				'privacy'       => array( 'label' => 'Privacy Policy', 'url' => home_url( '/privacy-policy/' ) ),
				'terms'         => array( 'label' => 'Terms of Use', 'url' => home_url( '/terms/' ) ),
				'accessibility' => array( 'label' => 'Accessibility', 'url' => home_url( '/accessibility/' ) ),
			);
		default:
			return array();
	}
}

/**
 * Default social URLs.
 *
 * @return array<string, string>
 */
function bdc_hf_default_social_urls() {
	$links = array();

	foreach ( bdc_get_default_social_links() as $row ) {
		$links[ $row['slug'] ] = $row['url'];
	}

	return $links;
}

/**
 * Full default settings tree.
 *
 * @return array<string, mixed>
 */
function bdc_build_default_header_footer_settings() {
	$social = bdc_hf_default_social_urls();

	return array(
		'announce_text'            => 'A nonprofit community inspiring children to dream, create, learn, lead, and give.',
		'header_logo_id'           => 0,
		'header_logo_alt'          => 'Bright Dreamers Club — Dream, Create, Grow, Give',
		'social'                   => $social,
		'donate_text'              => 'Donate',
		'donate_url'               => home_url( '/donation-interest/' ),
		'apply_text'               => 'Apply to Join',
		'apply_url'                => bdc_page_url( 'apply-to-become.html' ),
		'menu'                     => bdc_hf_default_menu_items(),
		'footer_logo_id'           => 0,
		'footer_logo_alt'          => 'Bright Dreamers — Dream, Create, Grow, Give',
		'mission_text'             => 'Empowering children to dream, create, grow, learn, and give.',
		'footer_social'            => $social,
		'explore_heading'          => 'Explore',
		'explore_links'            => bdc_hf_default_link_group( 'explore' ),
		'get_involved_heading'     => 'Get Involved',
		'get_involved_links'       => bdc_hf_default_link_group( 'get_involved' ),
		'resources_heading'        => 'Resources',
		'resources_links'          => bdc_hf_default_link_group( 'resources' ),
		'art_id'                   => 0,
		'art_alt'                  => 'Bright Dreamers children gathered around a heart',
		'newsletter_heading'       => 'Stay Connected',
		'newsletter_url'           => home_url( '/newsletter-signup/' ),
		'newsletter_text'          => 'Subscribe for updates, inspiring stories, new experiences, and ways to make a difference.',
		'newsletter_placeholder'   => 'Your email',
		'newsletter_button'        => 'Subscribe',
		'newsletter_action'        => home_url( '/newsletter-signup/' ),
		'plant_id'                 => 0,
		'copyright'                => 'Bright Dreamers. All rights reserved.',
		'legal_links'              => bdc_hf_default_link_group( 'legal' ),
	);
}

/**
 * Merge stored settings onto defaults without dropping keys.
 *
 * @param array<string, mixed> $stored   Saved option.
 * @param array<string, mixed> $defaults Default tree.
 * @return array<string, mixed>
 */
function bdc_hf_merge_settings( array $stored, array $defaults ) {
	$merged = $defaults;

	foreach ( $defaults as $key => $default_value ) {
		if ( ! array_key_exists( $key, $stored ) ) {
			continue;
		}

		$value = $stored[ $key ];

		if ( is_array( $default_value ) ) {
			$merged[ $key ] = bdc_hf_merge_settings( is_array( $value ) ? $value : array(), $default_value );
			continue;
		}

		if ( is_int( $default_value ) ) {
			$merged[ $key ] = (int) $value;
			continue;
		}

		$merged[ $key ] = is_string( $value ) ? $value : (string) $default_value;
	}

	return $merged;
}

/**
 * Settings used in admin and on the front end.
 *
 * @return array<string, mixed>
 */
function bdc_get_header_footer_settings() {
	$defaults = bdc_build_default_header_footer_settings();
	$stored   = get_option( BDC_HF_SETTINGS_OPTION, array() );

	if ( ! is_array( $stored ) ) {
		return $defaults;
	}

	return bdc_hf_merge_settings( $stored, $defaults );
}

/**
 * Sanitize a label + URL pair.
 *
 * @param mixed                $raw     Incoming pair.
 * @param array{label:string,url:string} $default Fallback.
 * @return array{label:string,url:string}
 */
function bdc_hf_sanitize_link_pair( $raw, array $default ) {
	$raw = is_array( $raw ) ? $raw : array();

	$label = sanitize_text_field( $raw['label'] ?? $default['label'] );
	$url   = esc_url_raw( $raw['url'] ?? $default['url'] );

	if ( '' === $label ) {
		$label = $default['label'];
	}

	if ( '' === $url ) {
		$url = $default['url'];
	}

	return array(
		'label' => $label,
		'url'   => $url,
	);
}

/**
 * Sanitize a named group of label/URL rows.
 *
 * @param mixed                                $raw     Incoming group.
 * @param array<string, array{label:string,url:string}> $defaults Default rows.
 * @return array<string, array{label:string,url:string}>
 */
function bdc_hf_sanitize_link_group( $raw, array $defaults ) {
	$raw     = is_array( $raw ) ? $raw : array();
	$cleaned = array();

	foreach ( $defaults as $slug => $default_row ) {
		$cleaned[ $slug ] = bdc_hf_sanitize_link_pair( $raw[ $slug ] ?? array(), $default_row );
	}

	return $cleaned;
}

/**
 * Sanitize settings from wp-admin.
 *
 * Merges the active tab into the saved option so the other tab is not wiped.
 *
 * @param mixed $input Raw input.
 * @return array<string, mixed>
 */
function bdc_sanitize_header_footer_settings( $input ) {
	$defaults = bdc_build_default_header_footer_settings();
	$current  = bdc_get_header_footer_settings();
	$input    = is_array( $input ) ? $input : array();
	$tab      = isset( $_POST['bdc_hf_active_tab'] ) ? sanitize_key( wp_unslash( $_POST['bdc_hf_active_tab'] ) ) : 'header'; // phpcs:ignore WordPress.Security.NonceVerification.Missing

	if ( 'footer' === $tab ) {
		$current['footer_logo_id']         = absint( $input['footer_logo_id'] ?? 0 );
		$current['footer_logo_alt']        = sanitize_text_field( $input['footer_logo_alt'] ?? $defaults['footer_logo_alt'] );
		$current['mission_text']           = sanitize_textarea_field( $input['mission_text'] ?? $defaults['mission_text'] );
		$current['footer_social']          = bdc_hf_sanitize_social( $input['footer_social'] ?? array(), $defaults['footer_social'] );
		$current['explore_heading']        = sanitize_text_field( $input['explore_heading'] ?? $defaults['explore_heading'] );
		$current['explore_links']          = bdc_hf_sanitize_link_group( $input['explore_links'] ?? array(), $defaults['explore_links'] );
		$current['get_involved_heading']   = sanitize_text_field( $input['get_involved_heading'] ?? $defaults['get_involved_heading'] );
		$current['get_involved_links']     = bdc_hf_sanitize_link_group( $input['get_involved_links'] ?? array(), $defaults['get_involved_links'] );
		$current['resources_heading']      = sanitize_text_field( $input['resources_heading'] ?? $defaults['resources_heading'] );
		$current['resources_links']        = bdc_hf_sanitize_link_group( $input['resources_links'] ?? array(), $defaults['resources_links'] );
		$current['art_id']                 = absint( $input['art_id'] ?? 0 );
		$current['art_alt']                = sanitize_text_field( $input['art_alt'] ?? $defaults['art_alt'] );
		$current['newsletter_heading']     = sanitize_text_field( $input['newsletter_heading'] ?? $defaults['newsletter_heading'] );
		$current['newsletter_url']         = esc_url_raw( $input['newsletter_url'] ?? $defaults['newsletter_url'] );
		$current['newsletter_text']        = sanitize_textarea_field( $input['newsletter_text'] ?? $defaults['newsletter_text'] );
		$current['newsletter_placeholder'] = sanitize_text_field( $input['newsletter_placeholder'] ?? $defaults['newsletter_placeholder'] );
		$current['newsletter_button']      = sanitize_text_field( $input['newsletter_button'] ?? $defaults['newsletter_button'] );
		$current['newsletter_action']      = esc_url_raw( $input['newsletter_action'] ?? $defaults['newsletter_action'] );
		$current['plant_id']               = absint( $input['plant_id'] ?? 0 );
		$current['copyright']              = sanitize_text_field( $input['copyright'] ?? $defaults['copyright'] );
		$current['legal_links']            = bdc_hf_sanitize_link_group( $input['legal_links'] ?? array(), $defaults['legal_links'] );

		return $current;
	}

	$current['announce_text']   = sanitize_textarea_field( $input['announce_text'] ?? $defaults['announce_text'] );
	$current['header_logo_id']  = absint( $input['header_logo_id'] ?? 0 );
	$current['header_logo_alt'] = sanitize_text_field( $input['header_logo_alt'] ?? $defaults['header_logo_alt'] );
	$current['social']          = bdc_hf_sanitize_social( $input['social'] ?? array(), $defaults['social'] );
	$current['donate_text']     = sanitize_text_field( $input['donate_text'] ?? $defaults['donate_text'] );
	$current['donate_url']      = esc_url_raw( $input['donate_url'] ?? $defaults['donate_url'] );
	$current['apply_text']      = sanitize_text_field( $input['apply_text'] ?? $defaults['apply_text'] );
	$current['apply_url']       = esc_url_raw( $input['apply_url'] ?? $defaults['apply_url'] );

	$menu_in = isset( $input['menu'] ) && is_array( $input['menu'] ) ? $input['menu'] : array();
	$menu    = array();

	foreach ( $defaults['menu'] as $slug => $default_item ) {
		$item  = isset( $menu_in[ $slug ] ) && is_array( $menu_in[ $slug ] ) ? $menu_in[ $slug ] : array();
		$pair  = bdc_hf_sanitize_link_pair( $item, array( 'label' => $default_item['label'], 'url' => $default_item['url'] ) );
		$kids  = array();

		foreach ( (array) $default_item['children'] as $child_slug => $child_default ) {
			$child_raw = isset( $item['children'][ $child_slug ] ) && is_array( $item['children'][ $child_slug ] )
				? $item['children'][ $child_slug ]
				: array();
			$kids[ $child_slug ] = bdc_hf_sanitize_link_pair( $child_raw, $child_default );
		}

		$menu[ $slug ] = array(
			'label'    => $pair['label'],
			'url'      => $pair['url'],
			'children' => $kids,
		);
	}

	$current['menu'] = $menu;

	return $current;
}

/**
 * Sanitize social URL map.
 *
 * @param mixed                $raw      Incoming map.
 * @param array<string,string> $defaults Default URLs.
 * @return array<string, string>
 */
function bdc_hf_sanitize_social( $raw, array $defaults ) {
	$raw     = is_array( $raw ) ? $raw : array();
	$cleaned = array();

	foreach ( $defaults as $slug => $default_url ) {
		$url = isset( $raw[ $slug ] ) ? esc_url_raw( (string) $raw[ $slug ] ) : $default_url;
		$cleaned[ $slug ] = $url;
	}

	return $cleaned;
}

/**
 * Register the option.
 */
function bdc_register_header_footer_settings() {
	register_setting(
		'bdc_hf_settings_group',
		BDC_HF_SETTINGS_OPTION,
		array(
			'type'              => 'array',
			'sanitize_callback' => 'bdc_sanitize_header_footer_settings',
			'default'           => bdc_build_default_header_footer_settings(),
		)
	);
}
add_action( 'admin_init', 'bdc_register_header_footer_settings' );

/**
 * Add Header & Footer under Bright Dreamers.
 */
function bdc_register_header_footer_settings_page() {
	add_submenu_page(
		'bdc-theme-settings',
		__( 'Header & Footer', 'bright-dreamers-club' ),
		__( 'Header & Footer', 'bright-dreamers-club' ),
		'manage_options',
		'bdc-header-footer',
		'bdc_render_header_footer_settings_page'
	);
}
add_action( 'admin_menu', 'bdc_register_header_footer_settings_page', 10 );

/**
 * Keep the active tab after save.
 *
 * @param string $location Redirect URL.
 * @return string
 */
function bdc_hf_settings_redirect_with_tab( $location ) {
	if ( false === strpos( $location, 'page=bdc-header-footer' ) ) {
		return $location;
	}

	$tab = isset( $_POST['bdc_hf_active_tab'] ) ? sanitize_key( wp_unslash( $_POST['bdc_hf_active_tab'] ) ) : ''; // phpcs:ignore WordPress.Security.NonceVerification.Missing

	if ( $tab && isset( bdc_get_header_footer_settings_tabs()[ $tab ] ) ) {
		$location = add_query_arg( 'tab', $tab, $location );
	}

	return $location;
}
add_filter( 'wp_redirect', 'bdc_hf_settings_redirect_with_tab' );

/**
 * Saved notice.
 */
function bdc_hf_settings_saved_notice() {
	if ( ! isset( $_GET['page'] ) || 'bdc-header-footer' !== $_GET['page'] ) { // phpcs:ignore WordPress.Security.NonceVerification.Recommended
		return;
	}

	if ( empty( $_GET['settings-updated'] ) ) { // phpcs:ignore WordPress.Security.NonceVerification.Recommended
		return;
	}

	add_settings_error(
		'bdc_hf_settings_group',
		'bdc_hf_settings_saved',
		__( 'Header & Footer settings saved successfully.', 'bright-dreamers-club' ),
		'updated'
	);
}
add_action( 'admin_init', 'bdc_hf_settings_saved_notice' );

/**
 * Admin assets for the Header & Footer screen.
 *
 * @param string $hook_suffix Current admin page.
 */
function bdc_enqueue_header_footer_settings_assets( $hook_suffix ) {
	if ( false === strpos( $hook_suffix, 'bdc-header-footer' ) ) {
		return;
	}

	wp_enqueue_media();
	wp_enqueue_style(
		'bdc-form-settings-admin',
		get_template_directory_uri() . '/assets/css/admin-form-settings.css',
		array(),
		bdc_asset_version( 'assets/css/admin-form-settings.css' )
	);
	wp_enqueue_script(
		'bdc-header-footer-admin',
		get_template_directory_uri() . '/assets/js/admin-header-footer-settings.js',
		array( 'jquery' ),
		bdc_asset_version( 'assets/js/admin-header-footer-settings.js' ),
		true
	);
}
add_action( 'admin_enqueue_scripts', 'bdc_enqueue_header_footer_settings_assets' );

/**
 * Resolve an image ID to a URL, else fallback (including ACF option).
 *
 * @param int    $attachment_id Saved ID.
 * @param string $acf_name      ACF option field name.
 * @param string $fallback_url  Theme asset URL.
 * @return string
 */
function bdc_hf_image_url( $attachment_id, $acf_name, $fallback_url ) {
	$attachment_id = (int) $attachment_id;

	if ( $attachment_id > 0 ) {
		$url = wp_get_attachment_image_url( $attachment_id, 'full' );

		if ( $url ) {
			return $url;
		}
	}

	return bdc_get_acf_option_image_url( $acf_name, $fallback_url );
}

/**
 * Convert a social URL map into the header/footer loop format.
 *
 * @param array<string, string> $urls Slug => URL.
 * @return array<int, array<string, string>>
 */
function bdc_hf_social_rows( array $urls ) {
	$rows = array();

	foreach ( $urls as $slug => $url ) {
		if ( '' === trim( (string) $url ) ) {
			continue;
		}

		$rows[] = array(
			'slug' => (string) $slug,
			'url'  => (string) $url,
		);
	}

	return $rows;
}

/**
 * Convert a named link group into footer repeater-style rows.
 *
 * @param array<string, array{label:string,url:string}> $group Link group.
 * @return array<int, array<string, mixed>>
 */
function bdc_hf_link_rows( array $group ) {
	$rows = array();

	foreach ( $group as $row ) {
		$label = trim( (string) ( $row['label'] ?? '' ) );
		$url   = trim( (string) ( $row['url'] ?? '' ) );

		if ( '' === $label || '' === $url ) {
			continue;
		}

		$rows[] = array(
			'text' => $label,
			'link' => array(
				'title'  => $label,
				'url'    => $url,
				'target' => '',
			),
		);
	}

	return $rows;
}

/**
 * Primary nav links for the fallback header menu.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_header_menu_links() {
	$settings = bdc_get_header_footer_settings();
	$items    = array();

	foreach ( (array) $settings['menu'] as $item ) {
		$label = trim( (string) ( $item['label'] ?? '' ) );
		$url   = trim( (string) ( $item['url'] ?? '' ) );

		if ( '' === $label || '' === $url ) {
			continue;
		}

		$children = array();

		foreach ( (array) ( $item['children'] ?? array() ) as $child ) {
			$child_label = trim( (string) ( $child['label'] ?? '' ) );
			$child_url   = trim( (string) ( $child['url'] ?? '' ) );

			if ( '' === $child_label || '' === $child_url ) {
				continue;
			}

			$children[] = array(
				'label' => $child_label,
				'url'   => $child_url,
			);
		}

		$entry = array(
			'label' => $label,
			'url'   => $url,
		);

		if ( ! empty( $children ) ) {
			$entry['children'] = $children;
		}

		$items[] = $entry;
	}

	return $items;
}

/**
 * Render an image picker row.
 *
 * @param string $id_name  Input name for attachment ID.
 * @param string $field_id HTML id.
 * @param string $label    Field label.
 * @param int    $image_id Current attachment ID.
 */
function bdc_hf_render_image_row( $id_name, $field_id, $label, $image_id ) {
	$image_id  = (int) $image_id;
	$preview   = $image_id ? wp_get_attachment_image_url( $image_id, 'medium' ) : '';
	?>
	<tr>
		<th scope="row"><label for="<?php echo esc_attr( $field_id ); ?>"><?php echo esc_html( $label ); ?></label></th>
		<td>
			<div class="bdc-hf-media" data-bdc-media>
				<input type="hidden" class="bdc-hf-media__id" id="<?php echo esc_attr( $field_id ); ?>" name="<?php echo esc_attr( $id_name ); ?>" value="<?php echo esc_attr( (string) $image_id ); ?>" />
				<?php if ( $preview ) : ?>
					<img class="bdc-hf-media__preview" src="<?php echo esc_url( $preview ); ?>" alt="" />
				<?php else : ?>
					<img class="bdc-hf-media__preview" src="" alt="" hidden />
				<?php endif; ?>
				<p>
					<button type="button" class="button bdc-hf-media__choose"><?php esc_html_e( 'Choose image', 'bright-dreamers-club' ); ?></button>
					<button type="button" class="button bdc-hf-media__remove" <?php echo $image_id ? '' : 'hidden'; ?>><?php esc_html_e( 'Remove', 'bright-dreamers-club' ); ?></button>
				</p>
				<p class="description"><?php esc_html_e( 'Leave empty to keep the current theme image.', 'bright-dreamers-club' ); ?></p>
			</div>
		</td>
	</tr>
	<?php
}

/**
 * Render a label + URL pair.
 *
 * @param string $name_prefix Input name prefix.
 * @param string $id_prefix   HTML id prefix.
 * @param string $heading     Row heading.
 * @param array{label:string,url:string} $row Current values.
 */
function bdc_hf_render_link_pair_rows( $name_prefix, $id_prefix, $heading, array $row ) {
	?>
	<tr>
		<th scope="row" colspan="2"><h3 class="bdc-form-settings-subheading"><?php echo esc_html( $heading ); ?></h3></th>
	</tr>
	<tr>
		<th scope="row"><label for="<?php echo esc_attr( $id_prefix . '-label' ); ?>"><?php esc_html_e( 'Label', 'bright-dreamers-club' ); ?></label></th>
		<td><input type="text" class="regular-text" id="<?php echo esc_attr( $id_prefix . '-label' ); ?>" name="<?php echo esc_attr( $name_prefix . '[label]' ); ?>" value="<?php echo esc_attr( $row['label'] ?? '' ); ?>" /></td>
	</tr>
	<tr>
		<th scope="row"><label for="<?php echo esc_attr( $id_prefix . '-url' ); ?>"><?php esc_html_e( 'Link URL', 'bright-dreamers-club' ); ?></label></th>
		<td><input type="url" class="large-text" id="<?php echo esc_attr( $id_prefix . '-url' ); ?>" name="<?php echo esc_attr( $name_prefix . '[url]' ); ?>" value="<?php echo esc_attr( $row['url'] ?? '' ); ?>" /></td>
	</tr>
	<?php
}

/**
 * Header tab fields.
 *
 * @param array<string, mixed> $settings Current settings.
 */
function bdc_render_header_settings_fields( array $settings ) {
	$option = BDC_HF_SETTINGS_OPTION;
	?>
	<h2><?php esc_html_e( 'Announcement bar', 'bright-dreamers-club' ); ?></h2>
	<table class="form-table bdc-form-settings-table" role="presentation">
		<tr>
			<th scope="row"><label for="bdc-hf-announce"><?php esc_html_e( 'Announcement text', 'bright-dreamers-club' ); ?></label></th>
			<td>
				<textarea class="large-text" rows="2" id="bdc-hf-announce" name="<?php echo esc_attr( $option . '[announce_text]' ); ?>"><?php echo esc_textarea( $settings['announce_text'] ); ?></textarea>
			</td>
		</tr>
		<?php foreach ( array( 'facebook' => 'Facebook', 'instagram' => 'Instagram', 'pinterest' => 'Pinterest', 'youtube' => 'YouTube' ) as $slug => $label ) : ?>
			<tr>
				<th scope="row"><label for="<?php echo esc_attr( 'bdc-hf-social-' . $slug ); ?>"><?php echo esc_html( $label . ' URL' ); ?></label></th>
				<td><input type="url" class="large-text" id="<?php echo esc_attr( 'bdc-hf-social-' . $slug ); ?>" name="<?php echo esc_attr( $option . '[social][' . $slug . ']' ); ?>" value="<?php echo esc_attr( $settings['social'][ $slug ] ?? '' ); ?>" /></td>
			</tr>
		<?php endforeach; ?>
	</table>

	<h2><?php esc_html_e( 'Logo & buttons', 'bright-dreamers-club' ); ?></h2>
	<table class="form-table bdc-form-settings-table" role="presentation">
		<?php bdc_hf_render_image_row( $option . '[header_logo_id]', 'bdc-hf-header-logo', __( 'Header logo', 'bright-dreamers-club' ), (int) $settings['header_logo_id'] ); ?>
		<tr>
			<th scope="row"><label for="bdc-hf-header-logo-alt"><?php esc_html_e( 'Logo alt text', 'bright-dreamers-club' ); ?></label></th>
			<td><input type="text" class="large-text" id="bdc-hf-header-logo-alt" name="<?php echo esc_attr( $option . '[header_logo_alt]' ); ?>" value="<?php echo esc_attr( $settings['header_logo_alt'] ); ?>" /></td>
		</tr>
		<tr>
			<th scope="row"><label for="bdc-hf-donate-text"><?php esc_html_e( 'Donate button text', 'bright-dreamers-club' ); ?></label></th>
			<td><input type="text" class="regular-text" id="bdc-hf-donate-text" name="<?php echo esc_attr( $option . '[donate_text]' ); ?>" value="<?php echo esc_attr( $settings['donate_text'] ); ?>" /></td>
		</tr>
		<tr>
			<th scope="row"><label for="bdc-hf-donate-url"><?php esc_html_e( 'Donate button URL', 'bright-dreamers-club' ); ?></label></th>
			<td><input type="url" class="large-text" id="bdc-hf-donate-url" name="<?php echo esc_attr( $option . '[donate_url]' ); ?>" value="<?php echo esc_attr( $settings['donate_url'] ); ?>" /></td>
		</tr>
		<tr>
			<th scope="row"><label for="bdc-hf-apply-text"><?php esc_html_e( 'Apply button text', 'bright-dreamers-club' ); ?></label></th>
			<td><input type="text" class="regular-text" id="bdc-hf-apply-text" name="<?php echo esc_attr( $option . '[apply_text]' ); ?>" value="<?php echo esc_attr( $settings['apply_text'] ); ?>" /></td>
		</tr>
		<tr>
			<th scope="row"><label for="bdc-hf-apply-url"><?php esc_html_e( 'Apply button URL', 'bright-dreamers-club' ); ?></label></th>
			<td><input type="url" class="large-text" id="bdc-hf-apply-url" name="<?php echo esc_attr( $option . '[apply_url]' ); ?>" value="<?php echo esc_attr( $settings['apply_url'] ); ?>" /></td>
		</tr>
	</table>

	<h2><?php esc_html_e( 'Header menu', 'bright-dreamers-club' ); ?></h2>
	<p class="description"><?php esc_html_e( 'These links power the desktop and mobile header menus.', 'bright-dreamers-club' ); ?></p>
	<table class="form-table bdc-form-settings-table" role="presentation">
		<?php foreach ( $settings['menu'] as $slug => $item ) : ?>
			<?php
			bdc_hf_render_link_pair_rows(
				$option . '[menu][' . $slug . ']',
				'bdc-hf-menu-' . $slug,
				(string) $item['label'],
				$item
			);

			foreach ( (array) ( $item['children'] ?? array() ) as $child_slug => $child ) :
				bdc_hf_render_link_pair_rows(
					$option . '[menu][' . $slug . '][children][' . $child_slug . ']',
					'bdc-hf-menu-' . $slug . '-' . $child_slug,
					'— ' . (string) $child['label'],
					$child
				);
			endforeach;
			?>
		<?php endforeach; ?>
	</table>
	<?php
}

/**
 * Footer tab fields.
 *
 * @param array<string, mixed> $settings Current settings.
 */
function bdc_render_footer_settings_fields( array $settings ) {
	$option = BDC_HF_SETTINGS_OPTION;
	?>
	<h2><?php esc_html_e( 'Brand', 'bright-dreamers-club' ); ?></h2>
	<table class="form-table bdc-form-settings-table" role="presentation">
		<?php bdc_hf_render_image_row( $option . '[footer_logo_id]', 'bdc-hf-footer-logo', __( 'Footer logo', 'bright-dreamers-club' ), (int) $settings['footer_logo_id'] ); ?>
		<tr>
			<th scope="row"><label for="bdc-hf-footer-logo-alt"><?php esc_html_e( 'Logo alt text', 'bright-dreamers-club' ); ?></label></th>
			<td><input type="text" class="large-text" id="bdc-hf-footer-logo-alt" name="<?php echo esc_attr( $option . '[footer_logo_alt]' ); ?>" value="<?php echo esc_attr( $settings['footer_logo_alt'] ); ?>" /></td>
		</tr>
		<tr>
			<th scope="row"><label for="bdc-hf-mission"><?php esc_html_e( 'Mission / description', 'bright-dreamers-club' ); ?></label></th>
			<td><textarea class="large-text" rows="3" id="bdc-hf-mission" name="<?php echo esc_attr( $option . '[mission_text]' ); ?>"><?php echo esc_textarea( $settings['mission_text'] ); ?></textarea></td>
		</tr>
		<?php foreach ( array( 'facebook' => 'Facebook', 'instagram' => 'Instagram', 'pinterest' => 'Pinterest', 'youtube' => 'YouTube' ) as $slug => $label ) : ?>
			<tr>
				<th scope="row"><label for="<?php echo esc_attr( 'bdc-hf-footer-social-' . $slug ); ?>"><?php echo esc_html( $label . ' URL' ); ?></label></th>
				<td><input type="url" class="large-text" id="<?php echo esc_attr( 'bdc-hf-footer-social-' . $slug ); ?>" name="<?php echo esc_attr( $option . '[footer_social][' . $slug . ']' ); ?>" value="<?php echo esc_attr( $settings['footer_social'][ $slug ] ?? '' ); ?>" /></td>
			</tr>
		<?php endforeach; ?>
		<?php bdc_hf_render_image_row( $option . '[art_id]', 'bdc-hf-art', __( 'Footer illustration', 'bright-dreamers-club' ), (int) $settings['art_id'] ); ?>
		<tr>
			<th scope="row"><label for="bdc-hf-art-alt"><?php esc_html_e( 'Illustration alt text', 'bright-dreamers-club' ); ?></label></th>
			<td><input type="text" class="large-text" id="bdc-hf-art-alt" name="<?php echo esc_attr( $option . '[art_alt]' ); ?>" value="<?php echo esc_attr( $settings['art_alt'] ); ?>" /></td>
		</tr>
	</table>

	<h2><?php esc_html_e( 'Explore links', 'bright-dreamers-club' ); ?></h2>
	<table class="form-table bdc-form-settings-table" role="presentation">
		<tr>
			<th scope="row"><label for="bdc-hf-explore-heading"><?php esc_html_e( 'Column heading', 'bright-dreamers-club' ); ?></label></th>
			<td><input type="text" class="regular-text" id="bdc-hf-explore-heading" name="<?php echo esc_attr( $option . '[explore_heading]' ); ?>" value="<?php echo esc_attr( $settings['explore_heading'] ); ?>" /></td>
		</tr>
		<?php foreach ( $settings['explore_links'] as $slug => $row ) : ?>
			<?php bdc_hf_render_link_pair_rows( $option . '[explore_links][' . $slug . ']', 'bdc-hf-explore-' . $slug, (string) $row['label'], $row ); ?>
		<?php endforeach; ?>
	</table>

	<h2><?php esc_html_e( 'Get Involved links', 'bright-dreamers-club' ); ?></h2>
	<table class="form-table bdc-form-settings-table" role="presentation">
		<tr>
			<th scope="row"><label for="bdc-hf-gi-heading"><?php esc_html_e( 'Column heading', 'bright-dreamers-club' ); ?></label></th>
			<td><input type="text" class="regular-text" id="bdc-hf-gi-heading" name="<?php echo esc_attr( $option . '[get_involved_heading]' ); ?>" value="<?php echo esc_attr( $settings['get_involved_heading'] ); ?>" /></td>
		</tr>
		<?php foreach ( $settings['get_involved_links'] as $slug => $row ) : ?>
			<?php bdc_hf_render_link_pair_rows( $option . '[get_involved_links][' . $slug . ']', 'bdc-hf-gi-' . $slug, (string) $row['label'], $row ); ?>
		<?php endforeach; ?>
	</table>

	<h2><?php esc_html_e( 'Resources links', 'bright-dreamers-club' ); ?></h2>
	<table class="form-table bdc-form-settings-table" role="presentation">
		<tr>
			<th scope="row"><label for="bdc-hf-res-heading"><?php esc_html_e( 'Column heading', 'bright-dreamers-club' ); ?></label></th>
			<td><input type="text" class="regular-text" id="bdc-hf-res-heading" name="<?php echo esc_attr( $option . '[resources_heading]' ); ?>" value="<?php echo esc_attr( $settings['resources_heading'] ); ?>" /></td>
		</tr>
		<?php foreach ( $settings['resources_links'] as $slug => $row ) : ?>
			<?php bdc_hf_render_link_pair_rows( $option . '[resources_links][' . $slug . ']', 'bdc-hf-res-' . $slug, (string) $row['label'], $row ); ?>
		<?php endforeach; ?>
	</table>

	<h2><?php esc_html_e( 'Newsletter', 'bright-dreamers-club' ); ?></h2>
	<table class="form-table bdc-form-settings-table" role="presentation">
		<tr>
			<th scope="row"><label for="bdc-hf-nl-heading"><?php esc_html_e( 'Heading', 'bright-dreamers-club' ); ?></label></th>
			<td><input type="text" class="regular-text" id="bdc-hf-nl-heading" name="<?php echo esc_attr( $option . '[newsletter_heading]' ); ?>" value="<?php echo esc_attr( $settings['newsletter_heading'] ); ?>" /></td>
		</tr>
		<tr>
			<th scope="row"><label for="bdc-hf-nl-url"><?php esc_html_e( 'Heading link URL', 'bright-dreamers-club' ); ?></label></th>
			<td><input type="url" class="large-text" id="bdc-hf-nl-url" name="<?php echo esc_attr( $option . '[newsletter_url]' ); ?>" value="<?php echo esc_attr( $settings['newsletter_url'] ); ?>" /></td>
		</tr>
		<tr>
			<th scope="row"><label for="bdc-hf-nl-text"><?php esc_html_e( 'Description', 'bright-dreamers-club' ); ?></label></th>
			<td><textarea class="large-text" rows="3" id="bdc-hf-nl-text" name="<?php echo esc_attr( $option . '[newsletter_text]' ); ?>"><?php echo esc_textarea( $settings['newsletter_text'] ); ?></textarea></td>
		</tr>
		<tr>
			<th scope="row"><label for="bdc-hf-nl-placeholder"><?php esc_html_e( 'Email placeholder', 'bright-dreamers-club' ); ?></label></th>
			<td><input type="text" class="regular-text" id="bdc-hf-nl-placeholder" name="<?php echo esc_attr( $option . '[newsletter_placeholder]' ); ?>" value="<?php echo esc_attr( $settings['newsletter_placeholder'] ); ?>" /></td>
		</tr>
		<tr>
			<th scope="row"><label for="bdc-hf-nl-button"><?php esc_html_e( 'Button text', 'bright-dreamers-club' ); ?></label></th>
			<td><input type="text" class="regular-text" id="bdc-hf-nl-button" name="<?php echo esc_attr( $option . '[newsletter_button]' ); ?>" value="<?php echo esc_attr( $settings['newsletter_button'] ); ?>" /></td>
		</tr>
		<tr>
			<th scope="row"><label for="bdc-hf-nl-action"><?php esc_html_e( 'Form action URL', 'bright-dreamers-club' ); ?></label></th>
			<td>
				<input type="url" class="large-text" id="bdc-hf-nl-action" name="<?php echo esc_attr( $option . '[newsletter_action]' ); ?>" value="<?php echo esc_attr( $settings['newsletter_action'] ); ?>" />
				<p class="description"><?php esc_html_e( 'Where the email field submits. Usually the Newsletter Signup page.', 'bright-dreamers-club' ); ?></p>
			</td>
		</tr>
		<?php bdc_hf_render_image_row( $option . '[plant_id]', 'bdc-hf-plant', __( 'Plant decoration', 'bright-dreamers-club' ), (int) $settings['plant_id'] ); ?>
	</table>

	<h2><?php esc_html_e( 'Copyright & legal', 'bright-dreamers-club' ); ?></h2>
	<table class="form-table bdc-form-settings-table" role="presentation">
		<tr>
			<th scope="row"><label for="bdc-hf-copyright"><?php esc_html_e( 'Copyright text', 'bright-dreamers-club' ); ?></label></th>
			<td>
				<input type="text" class="large-text" id="bdc-hf-copyright" name="<?php echo esc_attr( $option . '[copyright]' ); ?>" value="<?php echo esc_attr( $settings['copyright'] ); ?>" />
				<p class="description"><?php esc_html_e( 'Shown after the year, e.g. “© 2026 Bright Dreamers. All rights reserved.”', 'bright-dreamers-club' ); ?></p>
			</td>
		</tr>
		<?php foreach ( $settings['legal_links'] as $slug => $row ) : ?>
			<?php bdc_hf_render_link_pair_rows( $option . '[legal_links][' . $slug . ']', 'bdc-hf-legal-' . $slug, (string) $row['label'], $row ); ?>
		<?php endforeach; ?>
	</table>
	<?php
}

/**
 * Render the Header & Footer settings page.
 */
function bdc_render_header_footer_settings_page() {
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}

	$tabs       = bdc_get_header_footer_settings_tabs();
	$active_tab = isset( $_GET['tab'] ) ? sanitize_key( wp_unslash( $_GET['tab'] ) ) : 'header'; // phpcs:ignore WordPress.Security.NonceVerification.Recommended
	$settings   = bdc_get_header_footer_settings();
	$page_url   = admin_url( 'admin.php?page=bdc-header-footer' );

	if ( ! isset( $tabs[ $active_tab ] ) ) {
		$active_tab = 'header';
	}
	?>
	<div class="wrap bdc-form-settings-wrap">
		<h1><?php esc_html_e( 'Bright Dreamers — Header & Footer', 'bright-dreamers-club' ); ?></h1>
		<p class="bdc-form-settings-intro"><?php esc_html_e( 'Change logos, announcement text, menu labels, social links, and footer content. Empty image fields keep the current theme artwork.', 'bright-dreamers-club' ); ?></p>

		<?php settings_errors( 'bdc_hf_settings_group' ); ?>

		<nav class="nav-tab-wrapper bdc-form-settings-tabs" aria-label="<?php esc_attr_e( 'Header and footer sections', 'bright-dreamers-club' ); ?>">
			<?php foreach ( $tabs as $tab_id => $tab_label ) : ?>
				<a
					href="<?php echo esc_url( add_query_arg( 'tab', $tab_id, $page_url ) ); ?>"
					class="nav-tab <?php echo $active_tab === $tab_id ? 'nav-tab-active' : ''; ?>"
				><?php echo esc_html( $tab_label ); ?></a>
			<?php endforeach; ?>
		</nav>

		<form method="post" action="options.php" class="bdc-form-settings-form">
			<?php settings_fields( 'bdc_hf_settings_group' ); ?>
			<input type="hidden" name="bdc_hf_active_tab" value="<?php echo esc_attr( $active_tab ); ?>" />

			<div class="bdc-form-settings-panel">
				<?php
				if ( 'footer' === $active_tab ) {
					bdc_render_footer_settings_fields( $settings );
				} else {
					bdc_render_header_settings_fields( $settings );
				}
				?>
			</div>

			<?php submit_button( __( 'Save Header & Footer', 'bright-dreamers-club' ) ); ?>
		</form>
	</div>
	<?php
}

/**
 * Whether Header & Footer settings have been saved at least once.
 *
 * @return bool
 */
function bdc_hf_has_saved_settings() {
	return is_array( get_option( BDC_HF_SETTINGS_OPTION, false ) );
}

/**
 * Values used by header.php.
 *
 * @return array<string, mixed>
 */
function bdc_get_site_header_context() {
	$defaults = bdc_build_default_header_footer_settings();
	$logo_fallback = bdc_theme_asset_url( 'assets/images/bright-dreamers-logo-removebg-preview.png' );
	$logo_mobile   = bdc_theme_asset_url( 'assets/images/bright-dreamers-logo.png' );

	if ( ! bdc_hf_has_saved_settings() ) {
		$donate = bdc_get_acf_option_link(
			'global_header_donate_link',
			array(
				'title'  => $defaults['donate_text'],
				'url'    => $defaults['donate_url'],
				'target' => '',
			)
		);
		$apply = bdc_get_acf_option_link(
			'global_header_apply_link',
			array(
				'title'  => $defaults['apply_text'],
				'url'    => $defaults['apply_url'],
				'target' => '',
			)
		);

		return array(
			'announce_text' => bdc_get_acf_option_text( 'global_header_announce_text', $defaults['announce_text'] ),
			'social_links'  => bdc_get_acf_option_repeater( 'global_header_social', bdc_get_default_social_links() ),
			'logo_url'        => bdc_get_acf_option_image_url( 'global_header_logo', $logo_fallback ),
			'logo_mobile_url' => $logo_mobile,
			'logo_alt'        => bdc_get_acf_option_text( 'global_header_logo_alt', $defaults['header_logo_alt'] ),
			'donate_text'   => bdc_get_acf_option_text( 'global_header_donate_text', $donate['title'] ),
			'donate_link'   => $donate,
			'apply_text'    => bdc_get_acf_option_text( 'global_header_apply_text', $apply['title'] ),
			'apply_link'    => $apply,
		);
	}

	$settings = bdc_get_header_footer_settings();

	return array(
		'announce_text' => $settings['announce_text'],
		'social_links'  => bdc_hf_social_rows( $settings['social'] ),
		'logo_url'        => bdc_hf_image_url( (int) $settings['header_logo_id'], 'global_header_logo', $logo_fallback ),
		'logo_mobile_url' => $logo_mobile,
		'logo_alt'        => $settings['header_logo_alt'],
		'donate_text'   => $settings['donate_text'],
		'donate_link'   => array(
			'title'  => $settings['donate_text'],
			'url'    => $settings['donate_url'],
			'target' => '',
		),
		'apply_text'    => $settings['apply_text'],
		'apply_link'    => array(
			'title'  => $settings['apply_text'],
			'url'    => $settings['apply_url'],
			'target' => '',
		),
	);
}

/**
 * Values used by footer.php.
 *
 * @return array<string, mixed>
 */
function bdc_get_site_footer_context() {
	$defaults      = bdc_build_default_header_footer_settings();
	$logo_fallback = bdc_theme_asset_url( 'assets/images/bright-dreamers-logo-removebg-preview.png' );
	$art_fallback  = bdc_theme_asset_url( 'assets/images/a78c0669-c149-4611-891f-86ce471532b4-removebg-preview.png' );
	$plant_fallback = bdc_theme_asset_url( 'assets/images/footer-plant-deco.png' );

	if ( ! bdc_hf_has_saved_settings() ) {
		$newsletter_link = bdc_get_acf_option_link(
			'global_footer_newsletter_heading_link',
			array(
				'title'  => $defaults['newsletter_heading'],
				'url'    => $defaults['newsletter_url'],
				'target' => '',
			)
		);

		return array(
			'logo_url'               => bdc_get_acf_option_image_url( 'global_footer_logo', $logo_fallback ),
			'logo_alt'               => bdc_get_acf_option_text( 'global_footer_logo_alt', $defaults['footer_logo_alt'] ),
			'mission_text'           => bdc_get_acf_option_text( 'global_footer_mission_text', $defaults['mission_text'] ),
			'social_links'           => bdc_get_acf_option_repeater( 'global_footer_social', bdc_get_default_social_links() ),
			'explore_heading'        => bdc_get_acf_option_text( 'global_footer_explore_heading', $defaults['explore_heading'] ),
			'explore_links'          => bdc_get_acf_option_repeater( 'global_footer_explore_links', bdc_hf_link_rows( $defaults['explore_links'] ) ),
			'get_involved_heading'   => bdc_get_acf_option_text( 'global_footer_get_involved_heading', $defaults['get_involved_heading'] ),
			'get_involved_links'     => bdc_get_acf_option_repeater( 'global_footer_get_involved_links', bdc_hf_link_rows( $defaults['get_involved_links'] ) ),
			'resources_heading'      => bdc_get_acf_option_text( 'global_footer_resources_heading', $defaults['resources_heading'] ),
			'resources_links'        => bdc_get_acf_option_repeater( 'global_footer_resources_links', bdc_hf_link_rows( $defaults['resources_links'] ) ),
			'art_url'                => bdc_get_acf_option_image_url( 'global_footer_art_image', $art_fallback ),
			'art_alt'                => bdc_get_acf_option_text( 'global_footer_art_alt', $defaults['art_alt'] ),
			'newsletter_heading_link'=> $newsletter_link,
			'newsletter_text'        => bdc_get_acf_option_text( 'global_footer_newsletter_text', $defaults['newsletter_text'] ),
			'newsletter_placeholder' => bdc_get_acf_option_text( 'global_footer_newsletter_placeholder', $defaults['newsletter_placeholder'] ),
			'newsletter_button_text' => bdc_get_acf_option_text( 'global_footer_newsletter_button_text', $defaults['newsletter_button'] ),
			'newsletter_form_action' => bdc_get_acf_option_text( 'global_footer_newsletter_form_action', $defaults['newsletter_action'] ),
			'plant_url'              => bdc_get_acf_option_image_url( 'global_footer_plant_deco_image', $plant_fallback ),
			'copyright'              => bdc_get_acf_option_text( 'global_footer_copyright_prefix', $defaults['copyright'] ),
			'legal_links'            => bdc_get_acf_option_repeater( 'global_footer_legal_links', bdc_hf_link_rows( $defaults['legal_links'] ) ),
		);
	}

	$settings = bdc_get_header_footer_settings();

	return array(
		'logo_url'                => bdc_hf_image_url( (int) $settings['footer_logo_id'], 'global_footer_logo', $logo_fallback ),
		'logo_alt'                => $settings['footer_logo_alt'],
		'mission_text'            => $settings['mission_text'],
		'social_links'            => bdc_hf_social_rows( $settings['footer_social'] ),
		'explore_heading'         => $settings['explore_heading'],
		'explore_links'           => bdc_hf_link_rows( $settings['explore_links'] ),
		'get_involved_heading'    => $settings['get_involved_heading'],
		'get_involved_links'      => bdc_hf_link_rows( $settings['get_involved_links'] ),
		'resources_heading'       => $settings['resources_heading'],
		'resources_links'         => bdc_hf_link_rows( $settings['resources_links'] ),
		'art_url'                 => bdc_hf_image_url( (int) $settings['art_id'], 'global_footer_art_image', $art_fallback ),
		'art_alt'                 => $settings['art_alt'],
		'newsletter_heading_link' => array(
			'title'  => $settings['newsletter_heading'],
			'url'    => $settings['newsletter_url'],
			'target' => '',
		),
		'newsletter_text'         => $settings['newsletter_text'],
		'newsletter_placeholder'  => $settings['newsletter_placeholder'],
		'newsletter_button_text'  => $settings['newsletter_button'],
		'newsletter_form_action'  => $settings['newsletter_action'],
		'plant_url'               => bdc_hf_image_url( (int) $settings['plant_id'], 'global_footer_plant_deco_image', $plant_fallback ),
		'copyright'               => $settings['copyright'],
		'legal_links'             => bdc_hf_link_rows( $settings['legal_links'] ),
	);
}
