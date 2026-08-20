<?php
/**
 * Default content and ACF field builders for the FAQ page.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Asset path prefix for FAQ images.
 *
 * @return string
 */
function bdc_get_faq_asset_base() {
	return 'assets/images/faq/';
}

/**
 * Default sidebar topic buttons. Topic keys stay fixed for front-end filtering.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_faq_topics_defaults() {
	$asset_base = bdc_get_faq_asset_base();

	return array(
		array(
			'slug'  => 'about',
			'icon'  => bdc_theme_asset_url( $asset_base . '98a64bbe-c19d-4a6b-85cc-84889788bb0a-removebg-preview.png' ),
			'label' => 'About Bright Dreamers',
		),
		array(
			'slug'  => 'programs',
			'icon'  => bdc_theme_asset_url( $asset_base . '0401b3ea-7e4a-4ccc-b5b5-9600ffb2ac1c-removebg-preview.png' ),
			'label' => 'Programs & Experiences',
		),
		array(
			'slug'  => 'parents',
			'icon'  => bdc_theme_asset_url( $asset_base . '7a067c96-48b6-4dce-9edb-94229ab9eb32-removebg-preview.png' ),
			'label' => 'For Parents',
		),
		array(
			'slug'  => 'join',
			'icon'  => bdc_theme_asset_url( $asset_base . '9ec2a6ea-f797-44c6-b014-cf293910c5ef-removebg-preview.png' ),
			'label' => 'Join & Participate',
		),
		array(
			'slug'  => 'safety',
			'icon'  => bdc_theme_asset_url( $asset_base . 'd106249c-aebc-4fda-92a2-7dca03fb818e-removebg-preview.png' ),
			'label' => 'Safety & Privacy',
		),
		array(
			'slug'  => 'volunteering',
			'icon'  => bdc_theme_asset_url( $asset_base . '5bc9f8e2-56e2-4ec8-91d4-14f9183d39ea-removebg-preview.png' ),
			'label' => 'Volunteering',
		),
		array(
			'slug'  => 'donations',
			'icon'  => bdc_theme_asset_url( $asset_base . '15a1a426-65a0-4300-9353-cc62724fe2f5-removebg-preview.png' ),
			'label' => 'Donations & Partners',
		),
	);
}

/**
 * ACF field name for one FAQ topic sub-field.
 *
 * @param string $slug Topic key.
 * @param string $sub  Sub field: label, icon.
 * @return string
 */
function bdc_faq_topic_field_name( $slug, $sub ) {
	return 'faq_topic_' . $slug . '_' . $sub;
}

/**
 * Tabbed ACF fields for FAQ sidebar topics and the “still have questions” card.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_faq_acf_topic_fields() {
	$fields = array(
		array(
			'key'           => 'field_faq_topics_aria_label',
			'label'         => 'Sidebar aria label',
			'name'          => 'faq_topics_aria_label',
			'type'          => 'text',
			'default_value' => 'Browse by topic',
		),
		array(
			'key'           => 'field_faq_topics_title',
			'label'         => 'Sidebar heading',
			'name'          => 'faq_topics_title',
			'type'          => 'text',
			'default_value' => 'Browse by Topic',
		),
		array(
			'key'     => 'field_faq_topics_intro',
			'label'   => 'Topic buttons',
			'name'    => '',
			'type'    => 'message',
			'message' => 'Each tab is one topic button. The topic key stays the same so search and filters keep working.',
		),
	);

	foreach ( bdc_get_faq_topics_defaults() as $row ) {
		$slug = $row['slug'];

		$fields[] = array(
			'key'       => 'field_faq_topic_tab_' . $slug,
			'label'     => $row['label'],
			'name'      => '',
			'type'      => 'tab',
			'placement' => 'left',
			'endpoint'  => 0,
		);

		$fields[] = array(
			'key'     => 'field_faq_topic_' . $slug . '_key_note',
			'label'   => 'Topic key',
			'name'    => '',
			'type'    => 'message',
			'message' => 'Filter key: <code>' . esc_html( $slug ) . '</code>',
		);

		$fields[] = array(
			'key'           => 'field_faq_topic_' . $slug . '_label',
			'label'         => 'Button label',
			'name'          => bdc_faq_topic_field_name( $slug, 'label' ),
			'type'          => 'text',
			'default_value' => $row['label'],
		);

		$fields[] = array(
			'key'           => 'field_faq_topic_' . $slug . '_icon',
			'label'         => 'Button icon',
			'name'          => bdc_faq_topic_field_name( $slug, 'icon' ),
			'type'          => 'image',
			'return_format' => 'array',
			'preview_size'  => 'thumbnail',
			'library'       => 'all',
			'instructions'  => 'Leave empty to keep the default icon.',
		);
	}

	$fields[] = array(
		'key'       => 'field_faq_sidebar_card_tab',
		'label'     => 'Still have questions',
		'name'      => '',
		'type'      => 'tab',
		'placement' => 'left',
		'endpoint'  => 0,
	);

	$fields[] = array(
		'key'           => 'field_faq_sidebar_card_heart',
		'label'         => 'Card heart icon',
		'name'          => 'faq_sidebar_card_heart',
		'type'          => 'image',
		'return_format' => 'array',
		'preview_size'  => 'thumbnail',
		'library'       => 'all',
		'instructions'  => 'Leave empty to keep the default icon.',
	);

	$fields[] = array(
		'key'           => 'field_faq_sidebar_card_title',
		'label'         => 'Card title',
		'name'          => 'faq_sidebar_card_title',
		'type'          => 'text',
		'default_value' => 'Still have questions?',
	);

	$fields[] = array(
		'key'           => 'field_faq_sidebar_card_text',
		'label'         => 'Card text',
		'name'          => 'faq_sidebar_card_text',
		'type'          => 'textarea',
		'rows'          => 3,
		'new_lines'     => '',
		'default_value' => 'We\'re here to help! Reach out to our team and we\'ll get back to you soon.',
	);

	$fields[] = array(
		'key'           => 'field_faq_sidebar_card_link',
		'label'         => 'Button link',
		'name'          => 'faq_sidebar_card_link',
		'type'          => 'link',
		'return_format' => 'array',
	);

	$fields[] = array(
		'key'           => 'field_faq_sidebar_card_btn_heart',
		'label'         => 'Button heart icon',
		'name'          => 'faq_sidebar_card_btn_heart',
		'type'          => 'image',
		'return_format' => 'array',
		'preview_size'  => 'thumbnail',
		'library'       => 'all',
		'instructions'  => 'Leave empty to keep the default icon.',
	);

	return $fields;
}

/**
 * Resolve FAQ sidebar topics from ACF.
 *
 * @param int $post_id Page ID.
 * @return array<int, array<string, mixed>>
 */
function bdc_get_faq_resolved_topics( $post_id ) {
	$post_id = (int) $post_id;
	$topics  = array();

	foreach ( bdc_get_faq_topics_defaults() as $default ) {
		$slug = $default['slug'];

		$topics[] = array(
			'slug'  => $slug,
			'icon'  => bdc_get_acf_image_url(
				bdc_faq_topic_field_name( $slug, 'icon' ),
				$default['icon'],
				$post_id
			),
			'label' => bdc_get_acf_text(
				bdc_faq_topic_field_name( $slug, 'label' ),
				$default['label'],
				$post_id
			),
		);
	}

	return $topics;
}

/**
 * Pre-fill FAQ topic labels in the editor when nothing is saved yet.
 *
 * @param mixed $value   Stored value.
 * @param mixed $post_id Post ID.
 * @param array $field   Field settings.
 * @return mixed
 */
function bdc_acf_load_faq_topic_value( $value, $post_id, $field ) {
	unset( $post_id );

	if ( empty( $field['name'] ) || 0 !== strpos( $field['name'], 'faq_topic_' ) ) {
		return $value;
	}

	if ( is_string( $value ) && '' !== trim( wp_strip_all_tags( $value ) ) ) {
		return $value;
	}

	if ( ! preg_match( '/^faq_topic_([a-z]+)_label$/', $field['name'], $matches ) ) {
		return $value;
	}

	$slug = $matches[1];

	foreach ( bdc_get_faq_topics_defaults() as $row ) {
		if ( $row['slug'] === $slug ) {
			return $row['label'];
		}
	}

	return $value;
}

/**
 * Default FAQ accordion items.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_faq_items_defaults() {
	$apply_url     = esc_url( bdc_page_url( 'apply-to-become.html' ) );
	$volunteer_url = esc_url( bdc_page_url( 'volunteer-application.html' ) );
	$partner_url   = esc_url( bdc_page_url( 'partner-inquiry.html' ) );
	$newsletter_url = esc_url( bdc_page_url( 'newsletter-signup.html' ) );

	return array(
		array(
			'slug'     => 'whatis',
			'topics'   => 'about',
			'is_open'  => false,
			'question' => 'What is Bright Dreamers?',
			'answer'   => '<p>Bright Dreamers is a nonprofit community initiative that helps children explore ideas, create, learn, and make a positive difference. We offer project-based experiences where young people can dream, build, and share their work with others.</p>',
		),
		array(
			'slug'     => 'agegroup',
			'topics'   => 'about programs parents',
			'is_open'  => false,
			'question' => 'What age group do your programs serve?',
			'answer'   => '<p>Our programs are designed primarily for school-age children who are curious, creative, and excited to work on ideas with others. Specific experiences may vary by project, and we share age guidance with families when opportunities open.</p>',
		),
		array(
			'slug'     => 'howjoin',
			'topics'   => 'join',
			'is_open'  => true,
			'question' => 'How can my child join Bright Dreamers?',
			'answer'   => '<p>Families can start by completing our <a href="' . $apply_url . '">Apply to Join</a> form. We review each application thoughtfully and follow up when a project or experience is a good fit for your child&rsquo;s interests and readiness.</p>',
		),
		array(
			'slug'     => 'arefree',
			'topics'   => 'about programs parents join',
			'is_open'  => false,
			'question' => 'Are your programs free?',
			'answer'   => '<p>Many of our community experiences are offered at low or no cost whenever possible. When materials, venues, or special projects require support, we share details with families in advance so there are no surprises.</p>',
		),
		array(
			'slug'     => 'volunteer',
			'topics'   => 'volunteering',
			'is_open'  => false,
			'question' => 'How can I volunteer?',
			'answer'   => '<p>We welcome volunteers who want to share time, skills, and encouragement with children. Visit our <a href="' . $volunteer_url . '">Volunteer Application</a> page to tell us about your interests and availability.</p>',
		),
		array(
			'slug'     => 'childsafety',
			'topics'   => 'safety parents',
			'is_open'  => false,
			'question' => 'How do you ensure children\'s safety?',
			'answer'   => '<p>Child safety is central to everything we do. We use thoughtful supervision, age-appropriate activities, and clear guidelines for volunteers and partners. Additional screening may apply depending on a volunteer&rsquo;s role and level of interaction with children.</p>',
		),
		array(
			'slug'     => 'donationsused',
			'topics'   => 'donations',
			'is_open'  => false,
			'question' => 'How are donations used?',
			'answer'   => '<p>Donations help provide materials, learning experiences, and project support for children. Gifts may fund supplies, child-led initiatives, community projects, or our Dream Market social enterprise depending on donor preference.</p>',
		),
		array(
			'slug'     => 'partners',
			'topics'   => 'donations',
			'is_open'  => false,
			'question' => 'Can organizations or schools partner with you?',
			'answer'   => '<p>Yes. We welcome partnerships with schools, businesses, and community organizations that align with our mission. Share your idea through our <a href="' . $partner_url . '">Partner Inquiry</a> form and our team will follow up.</p>',
		),
		array(
			'slug'     => 'stayupdated',
			'topics'   => 'join',
			'is_open'  => false,
			'question' => 'How can I stay updated?',
			'answer'   => '<p>Subscribe to our newsletter for stories, events, and ways to get involved. You can sign up on our <a href="' . $newsletter_url . '">Newsletter Sign Up</a> page or through the footer on any page.</p>',
		),
	);
}

/**
 * ACF field name for one FAQ item sub-field.
 *
 * @param string $slug Item slug.
 * @param string $sub  Sub field: question, answer, topics, open.
 * @return string
 */
function bdc_faq_item_field_name( $slug, $sub ) {
	return 'faq_item_' . $slug . '_' . $sub;
}

/**
 * Tabbed ACF fields for FAQ accordion items.
 *
 * @return array<int, array<string, mixed>>
 */
function bdc_get_faq_acf_item_fields() {
	$fields = array(
		array(
			'key'           => 'field_faq_main_aria_label',
			'label'         => 'Section aria label',
			'name'          => 'faq_main_aria_label',
			'type'          => 'text',
			'default_value' => 'FAQ topics and answers',
		),
		array(
			'key'           => 'field_faq_toggle_icon',
			'label'         => 'Accordion plus icon',
			'name'          => 'faq_toggle_icon',
			'type'          => 'image',
			'return_format' => 'array',
			'preview_size'  => 'thumbnail',
			'library'       => 'all',
			'instructions'  => 'Used on every question. Leave empty to keep the default plus icon.',
		),
		array(
			'key'           => 'field_faq_empty_text',
			'label'         => 'No-results message',
			'name'          => 'faq_empty_text',
			'type'          => 'text',
			'default_value' => 'No matching questions found. Try another search or topic.',
		),
		array(
			'key'     => 'field_faq_items_intro',
			'label'   => 'Questions',
			'name'    => '',
			'type'    => 'message',
			'message' => 'Each tab is one accordion question. Topic keys should match the sidebar: about, programs, parents, join, safety, volunteering, donations.',
		),
	);

	foreach ( bdc_get_faq_items_defaults() as $row ) {
		$slug = $row['slug'];

		$fields[] = array(
			'key'       => 'field_faq_item_tab_' . $slug,
			'label'     => $row['question'],
			'name'      => '',
			'type'      => 'tab',
			'placement' => 'left',
			'endpoint'  => 0,
		);

		$fields[] = array(
			'key'           => 'field_faq_item_' . $slug . '_question',
			'label'         => 'Question',
			'name'          => bdc_faq_item_field_name( $slug, 'question' ),
			'type'          => 'text',
			'default_value' => $row['question'],
		);

		$fields[] = array(
			'key'           => 'field_faq_item_' . $slug . '_answer',
			'label'         => 'Answer',
			'name'          => bdc_faq_item_field_name( $slug, 'answer' ),
			'type'          => 'wysiwyg',
			'tabs'          => 'all',
			'toolbar'       => 'basic',
			'media_upload'  => 0,
			'delay'         => 1,
			'default_value' => $row['answer'],
		);

		$fields[] = array(
			'key'           => 'field_faq_item_' . $slug . '_topics',
			'label'         => 'Topic keys',
			'name'          => bdc_faq_item_field_name( $slug, 'topics' ),
			'type'          => 'text',
			'default_value' => $row['topics'],
			'instructions'  => 'Space-separated keys, e.g. about programs parents',
		);

		$fields[] = array(
			'key'           => 'field_faq_item_' . $slug . '_open',
			'label'         => 'Open this question by default',
			'name'          => bdc_faq_item_field_name( $slug, 'open' ),
			'type'          => 'true_false',
			'ui'            => 1,
			'default_value' => ! empty( $row['is_open'] ) ? 1 : 0,
		);
	}

	return $fields;
}

/**
 * Resolve FAQ accordion items from ACF.
 *
 * @param int $post_id Page ID.
 * @return array<int, array<string, mixed>>
 */
function bdc_get_faq_resolved_items( $post_id ) {
	$post_id = (int) $post_id;
	$items   = array();

	foreach ( bdc_get_faq_items_defaults() as $default ) {
		$slug = $default['slug'];

		$is_open = (bool) $default['is_open'];

		if ( function_exists( 'get_field' ) ) {
			$saved_open = get_field( bdc_faq_item_field_name( $slug, 'open' ), $post_id );

			if ( null !== $saved_open && false !== $saved_open && '' !== $saved_open ) {
				$is_open = (bool) $saved_open;
			} elseif ( 0 === $saved_open || '0' === $saved_open ) {
				$is_open = false;
			}
		}

		$items[] = array(
			'topics'   => bdc_get_acf_text(
				bdc_faq_item_field_name( $slug, 'topics' ),
				$default['topics'],
				$post_id
			),
			'is_open'  => $is_open,
			'question' => bdc_get_acf_text(
				bdc_faq_item_field_name( $slug, 'question' ),
				$default['question'],
				$post_id
			),
			'answer'   => bdc_get_acf_text(
				bdc_faq_item_field_name( $slug, 'answer' ),
				$default['answer'],
				$post_id
			),
		);
	}

	return $items;
}

/**
 * Pre-fill FAQ question, answer, and topic keys in the editor.
 *
 * @param mixed $value   Stored value.
 * @param mixed $post_id Post ID.
 * @param array $field   Field settings.
 * @return mixed
 */
function bdc_acf_load_faq_item_value( $value, $post_id, $field ) {
	unset( $post_id );

	if ( empty( $field['name'] ) || 0 !== strpos( $field['name'], 'faq_item_' ) ) {
		return $value;
	}

	if ( is_string( $value ) && '' !== trim( wp_strip_all_tags( $value ) ) ) {
		return $value;
	}

	if ( ! preg_match( '/^faq_item_([a-z]+)_([a-z_]+)$/', $field['name'], $matches ) ) {
		return $value;
	}

	$slug = $matches[1];
	$sub  = $matches[2];

	if ( ! in_array( $sub, array( 'question', 'answer', 'topics' ), true ) ) {
		return $value;
	}

	foreach ( bdc_get_faq_items_defaults() as $row ) {
		if ( $row['slug'] !== $slug ) {
			continue;
		}

		if ( 'question' === $sub ) {
			return $row['question'];
		}

		if ( 'topics' === $sub ) {
			return $row['topics'];
		}

		return $row['answer'];
	}

	return $value;
}

add_filter( 'acf/load_value', 'bdc_acf_load_faq_topic_value', 10, 3 );
add_filter( 'acf/load_value', 'bdc_acf_load_faq_item_value', 10, 3 );
