<?php
/**
 * Explore page template — converted from explore.html.
 *
 * Template Name: Explore
 *
 * @package Bright_Dreamers_Club
 */

get_header();

$explore_page_id = get_queried_object_id();

$explore_hero_lazy_placeholder = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';

$explore_hero_eyebrow = bdc_get_acf_text(
	'explore_hero_eyebrow',
	'Explore Experiences',
	$explore_page_id
);
$explore_hero_title_line_1 = bdc_get_acf_text(
	'explore_hero_title_line_1',
	'Big Dreams',
	$explore_page_id
);
$explore_hero_title_line_2 = bdc_get_acf_text(
	'explore_hero_title_line_2',
	'Begin With',
	$explore_page_id
);
$explore_hero_title_line_3 = bdc_get_acf_text(
	'explore_hero_title_line_3',
	'Small Ideas',
	$explore_page_id
);
$explore_hero_deco_url = bdc_get_acf_image_url(
	'explore_hero_deco',
	bdc_theme_asset_url( 'assets/images/explore-hero-deco-removebg-preview.png' ),
	$explore_page_id
);
$explore_hero_text = bdc_get_acf_text(
	'explore_hero_text',
	'Every child is unique. Some love to paint. Some invent. Some help others.',
	$explore_page_id
);
$explore_hero_text_last = bdc_get_acf_text(
	'explore_hero_text_last',
	'Bright Dreamers creates opportunities for children to explore who they are and discover what they love through creativity, real experiences, and community.',
	$explore_page_id
);
$explore_hero_primary_btn_text = bdc_get_acf_text(
	'explore_hero_primary_btn_text',
	'Explore Experiences',
	$explore_page_id
);
$explore_hero_primary_btn_link = bdc_get_acf_link(
	'explore_hero_primary_btn_link',
	array(
		'title'  => 'Explore Experiences',
		'url'    => '#explore-content',
		'target' => '',
	),
	$explore_page_id
);
$explore_hero_secondary_btn_text = bdc_get_acf_text(
	'explore_hero_secondary_btn_text',
	'How It Works',
	$explore_page_id
);
$explore_hero_secondary_btn_link = bdc_get_acf_link(
	'explore_hero_secondary_btn_link',
	array(
		'title'  => 'How It Works',
		'url'    => bdc_page_url( 'about.html' ),
		'target' => '',
	),
	$explore_page_id
);
$explore_hero_banner_url = bdc_get_acf_image_url(
	'explore_hero_banner',
	bdc_theme_asset_url( 'assets/images/explore-hero-banner.jpeg' ),
	$explore_page_id
);
$explore_hero_banner_alt = bdc_get_acf_text(
	'explore_hero_banner_alt',
	'Children painting a mural that reads together we create brighter communities',
	$explore_page_id
);
$explore_hero_banner_mobile_url = bdc_theme_asset_url( 'assets/images/explore-banner-mobile.jpg' );
$explore_hero_banner_mobile_ver = bdc_asset_version( 'assets/images/explore-banner-mobile.jpg' );
if ( $explore_hero_banner_mobile_ver ) {
	$explore_hero_banner_mobile_url = add_query_arg( 'v', $explore_hero_banner_mobile_ver, $explore_hero_banner_mobile_url );
}

$explore_hero_tags_defaults = array(
	array( 'item_text' => 'Ideas' ),
	array( 'item_text' => 'Creativity' ),
	array( 'item_text' => 'Kindness' ),
	array( 'item_text' => 'Community' ),
	array( 'item_text' => 'Impact' ),
);
$explore_hero_tags_raw = bdc_get_acf_repeater( 'explore_hero_tags', $explore_hero_tags_defaults, $explore_page_id );
$explore_hero_tags     = array();

foreach ( $explore_hero_tags_raw as $index => $row ) {
	$default   = $explore_hero_tags_defaults[ $index ] ?? array( 'item_text' => '' );
	$item_text = isset( $row['item_text'] ) ? trim( (string) $row['item_text'] ) : '';
	$item_text = '' !== $item_text ? $item_text : (string) $default['item_text'];

	if ( '' === trim( $item_text ) ) {
		continue;
	}

	$explore_hero_tags[] = $item_text;
}

if ( empty( $explore_hero_tags ) ) {
	foreach ( $explore_hero_tags_defaults as $default_item ) {
		$explore_hero_tags[] = (string) $default_item['item_text'];
	}
}

$explore_ways_title = bdc_get_acf_text(
	'explore_ways_title',
	'Ways Children Can Explore',
	$explore_page_id
);
$explore_ways_cards_defaults = array(
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/explore-way-create-icon.jpeg' ),
		'title'      => 'Create',
		'icon_boost' => false,
		'photo'      => bdc_theme_asset_url( 'assets/images/explore-makers-photo.jpeg' ),
		'photo_alt'  => 'A young girl painting with watercolors',
		'text'       => 'Paint, craft, design, build, sew, and make beautiful things with your hands and imagination.',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/explore-way-invent-icon.jpeg' ),
		'title'      => 'Imagine & Invent',
		'icon_boost' => true,
		'photo'      => bdc_theme_asset_url( 'assets/images/explore-ideas-photo.jpeg' ),
		'photo_alt'  => 'Two boys working on a creative project',
		'text'       => 'Ask questions, experiment, solve problems, and turn ideas into something new.',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/explore-way-give-icon.jpeg' ),
		'title'      => 'Help & Give',
		'icon_boost' => false,
		'photo'      => bdc_theme_asset_url( 'assets/images/explore-cause-photo.jpeg' ),
		'photo_alt'  => 'Children working together on a community project',
		'text'       => 'Create gifts, support local causes, organize donation projects, and spread kindness together.',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/explore-way-lead-icon.jpeg' ),
		'title'      => 'Lead Together',
		'icon_boost' => false,
		'photo'      => bdc_theme_asset_url( 'assets/images/home-ideas-photo.jpeg' ),
		'photo_alt'  => 'Children collaborating around a table',
		'text'       => 'Share ideas, vote on projects, help shape Bright Dreamers, and lead with your voice.',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/explore-way-world-icon.jpeg' ),
		'title'      => 'Explore the World',
		'icon_boost' => false,
		'photo'      => bdc_theme_asset_url( 'assets/images/explore-adventures-photo.jpeg' ),
		'photo_alt'  => 'Children exploring outdoors with binoculars',
		'text'       => 'Visit places, meet people, discover nature, local businesses, and learn from real-life experiences.',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/explore-way-market-icon.jpeg' ),
		'title'      => 'Dream Market',
		'icon_boost' => false,
		'photo'      => bdc_theme_asset_url( 'assets/images/explore-way-market-photo.jpeg' ),
		'photo_alt'  => 'Children sharing handmade creations at a community market',
		'text'       => 'Share or sell creations at community markets. Grow confidence, earn, and give back.',
	),
);
$explore_ways_cards_raw = bdc_get_acf_repeater( 'explore_ways_cards', $explore_ways_cards_defaults, $explore_page_id );
$explore_ways_cards     = array();

foreach ( $explore_ways_cards_raw as $index => $row ) {
	$default = $explore_ways_cards_defaults[ $index ] ?? array(
		'icon'       => '',
		'title'      => '',
		'icon_boost' => false,
		'photo'      => '',
		'photo_alt'  => '',
		'text'       => '',
	);

	$title      = isset( $row['title'] ) ? trim( (string) $row['title'] ) : '';
	$text       = isset( $row['text'] ) ? trim( (string) $row['text'] ) : '';
	$photo_alt  = isset( $row['photo_alt'] ) ? trim( (string) $row['photo_alt'] ) : '';
	$icon_boost = ! empty( $row['icon_boost'] );

	if ( ! $icon_boost && isset( $default['icon_boost'] ) ) {
		$icon_boost = (bool) $default['icon_boost'];
	}

	$resolved = array(
		'icon'       => bdc_acf_image_value_to_url( $row['icon'] ?? null, (string) $default['icon'] ),
		'title'      => '' !== $title ? $title : (string) $default['title'],
		'icon_boost' => $icon_boost,
		'photo'      => bdc_acf_image_value_to_url( $row['photo'] ?? null, (string) $default['photo'] ),
		'photo_alt'  => '' !== $photo_alt ? $photo_alt : (string) $default['photo_alt'],
		'text'       => '' !== $text ? $text : (string) $default['text'],
	);

	if ( '' === trim( $resolved['title'] ) && '' === trim( $resolved['text'] ) ) {
		continue;
	}

	$explore_ways_cards[] = $resolved;
}

if ( empty( $explore_ways_cards ) ) {
	$explore_ways_cards = $explore_ways_cards_defaults;
}

$explore_skills_title = bdc_get_acf_text(
	'explore_skills_title',
	'Skills Children Build (And Parents Love!)',
	$explore_page_id
);
$explore_skills_cards_defaults = array(
	array(
		'icon'  => bdc_theme_asset_url( 'assets/images/explore-makers-icon.jpeg' ),
		'title' => 'Creativity',
		'text'  => 'Express original ideas and imagination.',
	),
	array(
		'icon'  => bdc_theme_asset_url( 'assets/images/explore-skill-problem-icon.jpeg' ),
		'title' => 'Problem Solving',
		'text'  => 'Think critically and find solutions in fun ways.',
	),
	array(
		'icon'  => bdc_theme_asset_url( 'assets/images/approach-share.jpeg' ),
		'title' => 'Communication',
		'text'  => 'Share ideas clearly and listen to others.',
	),
	array(
		'icon'  => bdc_theme_asset_url( 'assets/images/home-diff-connect.jpeg' ),
		'title' => 'Collaboration',
		'text'  => 'Work as a team and build strong friendships.',
	),
	array(
		'icon'  => bdc_theme_asset_url( 'assets/images/home-diff-lead.jpeg' ),
		'title' => 'Leadership',
		'text'  => 'Take initiative, inspire others, and lead projects.',
	),
	array(
		'icon'  => bdc_theme_asset_url( 'assets/images/explore-skill-confidence-icon.jpeg' ),
		'title' => 'Confidence',
		'text'  => 'Believe in themselves and celebrate progress.',
	),
	array(
		'icon'  => bdc_theme_asset_url( 'assets/images/explore-cause-icon.jpeg' ),
		'title' => 'Empathy',
		'text'  => 'Understand others and show kindness every day.',
	),
	array(
		'icon'  => bdc_theme_asset_url( 'assets/images/explore-skill-finance-icon.jpeg' ),
		'title' => 'Financial Literacy',
		'text'  => 'Learn money basics through real-world experiences.',
	),
	array(
		'icon'  => bdc_theme_asset_url( 'assets/images/explore-skill-resilience-icon.jpeg' ),
		'title' => 'Resilience',
		'text'  => 'Keep trying, learn from mistakes, and grow stronger.',
	),
);
$explore_skills_cards_raw = bdc_get_acf_repeater( 'explore_skills_cards', $explore_skills_cards_defaults, $explore_page_id );
$explore_skills_cards     = array();

foreach ( $explore_skills_cards_raw as $index => $row ) {
	$default = $explore_skills_cards_defaults[ $index ] ?? array(
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

	$explore_skills_cards[] = $resolved;
}

if ( empty( $explore_skills_cards ) ) {
	$explore_skills_cards = $explore_skills_cards_defaults;
}

$explore_grow_title = bdc_get_acf_text(
	'explore_grow_title',
	'Our Experiences Grow With Children',
	$explore_page_id
);
$explore_grow_stages_defaults = array(
	array(
		'style_slug'  => 'wonder',
		'photo'       => bdc_theme_asset_url( 'assets/images/explore-grow-wonder-photo.png' ),
		'photo_alt'   => 'A young girl looking up with curiosity',
		'icon'        => bdc_theme_asset_url( 'assets/images/explore-grow-wonder-icon.png' ),
		'label'       => 'Wonder',
		'quote'       => 'I love trying new things.',
		'text'        => 'Curious and ready to explore.',
		'arrow_color' => 'green',
	),
	array(
		'style_slug'  => 'discover',
		'photo'       => bdc_theme_asset_url( 'assets/images/explore-grow-discover-photo.png' ),
		'photo_alt'   => 'A girl exploring with a magnifying glass',
		'icon'        => bdc_theme_asset_url( 'assets/images/explore-grow-discover-icon.png' ),
		'label'       => 'Discover',
		'quote'       => 'I found something I enjoy.',
		'text'        => 'Explore interests and talents.',
		'arrow_color' => 'orange',
	),
	array(
		'style_slug'  => 'create',
		'photo'       => bdc_theme_asset_url( 'assets/images/explore-grow-create-photo.png' ),
		'photo_alt'   => 'A boy building and creating at a table',
		'icon'        => bdc_theme_asset_url( 'assets/images/explore-grow-create-icon.png' ),
		'label'       => 'Create',
		'quote'       => 'I can build something amazing!',
		'text'        => 'Practice, create, and bring ideas to life.',
		'arrow_color' => 'pink',
	),
	array(
		'style_slug'  => 'share',
		'photo'       => bdc_theme_asset_url( 'assets/images/explore-grow-share-photo.png' ),
		'photo_alt'   => 'A girl sharing ideas with a microphone',
		'icon'        => bdc_theme_asset_url( 'assets/images/explore-grow-share-icon.png' ),
		'label'       => 'Share',
		'quote'       => 'I can inspire others.',
		'text'        => 'Share ideas and celebrate creations.',
		'arrow_color' => 'blue',
	),
	array(
		'style_slug'  => 'give',
		'photo'       => bdc_theme_asset_url( 'assets/images/explore-grow-give-photo.png' ),
		'photo_alt'   => 'Two girls holding a thank you sign together',
		'icon'        => bdc_theme_asset_url( 'assets/images/explore-grow-give-icon.png' ),
		'label'       => 'Give',
		'quote'       => 'My ideas can help my community.',
		'text'        => 'Use talents to make a positive impact.',
		'arrow_color' => '',
	),
);
$explore_grow_style_slugs_allowed  = array( 'wonder', 'discover', 'create', 'share', 'give' );
$explore_grow_arrow_colors_allowed = array( 'green', 'orange', 'pink', 'blue' );
$explore_grow_stages_raw           = bdc_get_acf_repeater( 'explore_grow_stages', $explore_grow_stages_defaults, $explore_page_id );
$explore_grow_stages               = array();

foreach ( $explore_grow_stages_raw as $index => $row ) {
	$default = $explore_grow_stages_defaults[ $index ] ?? array(
		'style_slug'  => 'wonder',
		'photo'       => '',
		'photo_alt'   => '',
		'icon'        => '',
		'label'       => '',
		'quote'       => '',
		'text'        => '',
		'arrow_color' => '',
	);

	$label       = isset( $row['label'] ) ? trim( (string) $row['label'] ) : '';
	$quote       = isset( $row['quote'] ) ? trim( (string) $row['quote'] ) : '';
	$text        = isset( $row['text'] ) ? trim( (string) $row['text'] ) : '';
	$photo_alt   = isset( $row['photo_alt'] ) ? trim( (string) $row['photo_alt'] ) : '';
	$style_slug  = isset( $row['style_slug'] ) ? sanitize_key( (string) $row['style_slug'] ) : '';
	$arrow_color = isset( $row['arrow_color'] ) ? sanitize_key( (string) $row['arrow_color'] ) : '';

	if ( ! in_array( $style_slug, $explore_grow_style_slugs_allowed, true ) ) {
		$style_slug = (string) $default['style_slug'];
	}

	if ( '' === $arrow_color && isset( $default['arrow_color'] ) ) {
		$arrow_color = (string) $default['arrow_color'];
	}

	if ( ! in_array( $arrow_color, $explore_grow_arrow_colors_allowed, true ) ) {
		$arrow_color = '';
	}

	$resolved = array(
		'style_slug'  => $style_slug,
		'photo'       => bdc_acf_image_value_to_url( $row['photo'] ?? null, (string) $default['photo'] ),
		'photo_alt'   => '' !== $photo_alt ? $photo_alt : (string) $default['photo_alt'],
		'icon'        => bdc_acf_image_value_to_url( $row['icon'] ?? null, (string) $default['icon'] ),
		'label'       => '' !== $label ? $label : (string) $default['label'],
		'quote'       => '' !== $quote ? $quote : (string) $default['quote'],
		'text'        => '' !== $text ? $text : (string) $default['text'],
		'arrow_color' => $arrow_color,
	);

	if ( '' === trim( $resolved['label'] ) && '' === trim( $resolved['text'] ) && '' === trim( $resolved['quote'] ) ) {
		continue;
	}

	$explore_grow_stages[] = $resolved;
}

if ( empty( $explore_grow_stages ) ) {
	$explore_grow_stages = $explore_grow_stages_defaults;
}

$explore_impact_title = bdc_get_acf_text(
	'explore_impact_title',
	'Real Ideas. Real Projects. Real Impact.',
	$explore_page_id
);
$explore_impact_cards_defaults = array(
	array(
		'photo'     => bdc_theme_asset_url( 'assets/images/explore-impact-art.jpeg' ),
		'photo_alt' => 'Children standing in front of a colorful community mural',
		'title'     => 'Art in Our Community',
		'text'      => 'Create murals and art installations to brighten public spaces.',
	),
	array(
		'photo'     => bdc_theme_asset_url( 'assets/images/explore-impact-sell.jpeg' ),
		'photo_alt' => 'Children collaborating at a table with books and a tablet',
		'title'     => 'Create & Sell',
		'text'      => 'Make products, art, and creations to share and fund future projects.',
	),
	array(
		'photo'     => bdc_theme_asset_url( 'assets/images/explore-impact-give.jpeg' ),
		'photo_alt' => 'Children planting a sapling together outdoors',
		'title'     => 'Give Back',
		'text'      => 'Support shelters, food drives, clean-ups, parks, gardens, and more.',
	),
	array(
		'photo'     => bdc_theme_asset_url( 'assets/images/explore-impact-kindness.jpeg' ),
		'photo_alt' => 'Children working together to plant in a garden',
		'title'     => 'Kindness Projects',
		'text'      => 'Make cards, kits, and gifts to bring joy to others.',
	),
	array(
		'photo'     => bdc_theme_asset_url( 'assets/images/explore-impact-plants.jpeg' ),
		'photo_alt' => 'Three girls creating art together at a table',
		'title'     => 'Plants & Planet',
		'text'      => 'Plant trees, grow gardens, and care for our planet together.',
	),
);
$explore_impact_cards_raw = bdc_get_acf_repeater( 'explore_impact_cards', $explore_impact_cards_defaults, $explore_page_id );
$explore_impact_cards     = array();

foreach ( $explore_impact_cards_raw as $index => $row ) {
	$default = $explore_impact_cards_defaults[ $index ] ?? array(
		'photo'     => '',
		'photo_alt' => '',
		'title'     => '',
		'text'      => '',
	);

	$title     = isset( $row['title'] ) ? trim( (string) $row['title'] ) : '';
	$text      = isset( $row['text'] ) ? trim( (string) $row['text'] ) : '';
	$photo_alt = isset( $row['photo_alt'] ) ? trim( (string) $row['photo_alt'] ) : '';

	$resolved = array(
		'photo'     => bdc_acf_image_value_to_url( $row['photo'] ?? null, (string) $default['photo'] ),
		'photo_alt' => '' !== $photo_alt ? $photo_alt : (string) $default['photo_alt'],
		'title'     => '' !== $title ? $title : (string) $default['title'],
		'text'      => '' !== $text ? $text : (string) $default['text'],
	);

	if ( '' === trim( $resolved['title'] ) && '' === trim( $resolved['text'] ) ) {
		continue;
	}

	$explore_impact_cards[] = $resolved;
}

if ( empty( $explore_impact_cards ) ) {
	$explore_impact_cards = $explore_impact_cards_defaults;
}

$explore_impact_quote_blob_url = bdc_get_acf_image_url(
	'explore_impact_quote_blob',
	bdc_theme_asset_url( 'assets/images/explore-impact-quote-blob.png' ),
	$explore_page_id
);
$explore_impact_quote_stanzas_defaults = array(
	array(
		'line_1' => 'It starts with',
		'line_2' => 'an idea.',
	),
	array(
		'line_1' => 'It grows with',
		'line_2' => 'kind hearts.',
	),
	array(
		'line_1' => 'It changes',
		'line_2' => 'the world.',
	),
);
$explore_impact_quote_stanzas_raw = bdc_get_acf_repeater( 'explore_impact_quote_stanzas', $explore_impact_quote_stanzas_defaults, $explore_page_id );
$explore_impact_quote_stanzas     = array();

foreach ( $explore_impact_quote_stanzas_raw as $index => $row ) {
	$default = $explore_impact_quote_stanzas_defaults[ $index ] ?? array(
		'line_1' => '',
		'line_2' => '',
	);

	$line_1 = isset( $row['line_1'] ) ? trim( (string) $row['line_1'] ) : '';
	$line_2 = isset( $row['line_2'] ) ? trim( (string) $row['line_2'] ) : '';

	$resolved = array(
		'line_1' => '' !== $line_1 ? $line_1 : (string) $default['line_1'],
		'line_2' => '' !== $line_2 ? $line_2 : (string) $default['line_2'],
	);

	if ( '' === trim( $resolved['line_1'] ) && '' === trim( $resolved['line_2'] ) ) {
		continue;
	}

	$explore_impact_quote_stanzas[] = $resolved;
}

if ( empty( $explore_impact_quote_stanzas ) ) {
	$explore_impact_quote_stanzas = $explore_impact_quote_stanzas_defaults;
}

$explore_dream_title = bdc_get_acf_text(
	'explore_dream_title',
	'Where Will Your Child\'s',
	$explore_page_id
);
$explore_dream_title_accent = bdc_get_acf_text(
	'explore_dream_title_accent',
	'Dream',
	$explore_page_id
);
$explore_dream_title_suffix = bdc_get_acf_text(
	'explore_dream_title_suffix',
	'Begin?',
	$explore_page_id
);
$explore_dream_photo_url = bdc_get_acf_image_url(
	'explore_dream_photo',
	bdc_theme_asset_url( 'assets/images/explore-dream-photo-removebg-preview.png' ),
	$explore_page_id
);
$explore_dream_photo_alt = bdc_get_acf_text(
	'explore_dream_photo_alt',
	'Two girls smiling and holding a sign that says I have an idea',
	$explore_page_id
);
$explore_dream_list_defaults = array(
	array( 'item_text' => 'There is no perfect age.' ),
	array( 'item_text' => 'No perfect start.' ),
	array( 'item_text' => 'No perfect idea.' ),
	array( 'item_text' => 'Only curiosity.' ),
	array( 'item_text' => 'And a small step forward.' ),
);
$explore_dream_list_raw = bdc_get_acf_repeater( 'explore_dream_list', $explore_dream_list_defaults, $explore_page_id );
$explore_dream_list     = array();

foreach ( $explore_dream_list_raw as $index => $row ) {
	$default   = $explore_dream_list_defaults[ $index ] ?? array( 'item_text' => '' );
	$item_text = isset( $row['item_text'] ) ? trim( (string) $row['item_text'] ) : '';
	$item_text = '' !== $item_text ? $item_text : (string) $default['item_text'];

	if ( '' === trim( $item_text ) ) {
		continue;
	}

	$explore_dream_list[] = $item_text;
}

if ( empty( $explore_dream_list ) ) {
	foreach ( $explore_dream_list_defaults as $default_item ) {
		$explore_dream_list[] = (string) $default_item['item_text'];
	}
}

$explore_dream_jar_url = bdc_get_acf_image_url(
	'explore_dream_jar',
	bdc_theme_asset_url( 'assets/images/explore-dream-jar.jpeg' ),
	$explore_page_id
);
$explore_dream_primary_btn_text = bdc_get_acf_text(
	'explore_dream_primary_btn_text',
	'Apply to Become a Bright Dreamer',
	$explore_page_id
);
$explore_dream_primary_btn_link = bdc_get_acf_link(
	'explore_dream_primary_btn_link',
	array(
		'title'  => 'Apply to Become a Bright Dreamer',
		'url'    => bdc_page_url( 'apply-to-become.html' ),
		'target' => '',
	),
	$explore_page_id
);
$explore_dream_secondary_btn_text = bdc_get_acf_text(
	'explore_dream_secondary_btn_text',
	'Explore Our Story',
	$explore_page_id
);
$explore_dream_secondary_btn_link = bdc_get_acf_link(
	'explore_dream_secondary_btn_link',
	array(
		'title'  => 'Explore Our Story',
		'url'    => bdc_page_url( 'about.html' ),
		'target' => '',
	),
	$explore_page_id
);
?>
    <main id="main-content">
      <?php
      get_template_part(
        'template-parts/page-hero',
        null,
        array(
          'section_class'    => 'explore-hero',
          'aria_label'       => 'Explore Bright Dreamers',
          'section_label'    => $explore_hero_eyebrow,
          'headline_html'    => bdc_hero_lines_html(
            array(
              array( 'text' => $explore_hero_title_line_1, 'class' => 'explore-hero__title-line explore-hero__title-line--navy' ),
              array( 'text' => $explore_hero_title_line_2, 'class' => 'explore-hero__title-line explore-hero__title-line--navy' ),
              array( 'text' => $explore_hero_title_line_3, 'class' => 'explore-hero__title-line explore-hero__title-line--pink' ),
            )
          ),
          'supporting_copy'  => bdc_hero_join_copy( $explore_hero_text, $explore_hero_text_last ),
          'primary_cta_text' => $explore_hero_primary_btn_text,
          'primary_cta_link' => $explore_hero_primary_btn_link,
          'secondary_cta_text' => $explore_hero_secondary_btn_text,
          'secondary_cta_link' => $explore_hero_secondary_btn_link,
          'hero_image'       => $explore_hero_banner_url,
          'hero_image_mobile' => $explore_hero_banner_mobile_url,
          'hero_image_alt'   => $explore_hero_banner_alt,
          'media_class'      => 'explore-hero__media',
          'image_class'      => 'explore-hero__banner',
        )
      );
      ?>

      <div id="explore-content">
        <section class="explore-ways section-padding" aria-labelledby="explore-ways-title">
          <div class="site-container">
            <h2 class="explore-ways__title" id="explore-ways-title">
              <?php echo esc_html( $explore_ways_title ); ?>
              <svg
                class="explore-ways__title-icon"
                viewBox="0 0 24 24"
                width="22"
                height="22"
                fill="none"
                stroke="currentColor"
                stroke-width="1.8"
                aria-hidden="true"
              >
                <path
                  d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
                />
              </svg>
            </h2>

            <?php require get_template_directory() . '/template-parts/explore-ways-grid.php'; ?>
          </div>
        </section>

        <section class="explore-skills section-padding" aria-labelledby="explore-skills-title">
          <div class="site-container">
            <h2 class="explore-skills__title" id="explore-skills-title">
              <?php echo esc_html( $explore_skills_title ); ?>
              <svg
                class="explore-skills__title-icon"
                viewBox="0 0 24 24"
                width="22"
                height="22"
                fill="none"
                stroke="currentColor"
                stroke-width="1.8"
                aria-hidden="true"
              >
                <path
                  d="M12 2l2.4 4.9 5.4.8-3.9 3.8.9 5.4L12 14.8 7.2 17l.9-5.4L4.2 7.7l5.4-.8L12 2z"
                />
              </svg>
            </h2>

            <?php require get_template_directory() . '/template-parts/explore-skills-grid.php'; ?>
          </div>
        </section>

        <section class="explore-grow section-padding" aria-labelledby="explore-grow-title">
          <div class="site-container">
            <h2 class="explore-grow__title" id="explore-grow-title">
              <?php echo esc_html( $explore_grow_title ); ?>
            </h2>

            <?php require get_template_directory() . '/template-parts/explore-grow-track.php'; ?>
          </div>
        </section>

        <section class="explore-impact section-padding" aria-labelledby="explore-impact-title">
          <div class="site-container">
            <h2 class="explore-impact__title" id="explore-impact-title">
              <?php echo esc_html( $explore_impact_title ); ?>
              <svg
                class="explore-impact__title-icon"
                viewBox="0 0 24 24"
                width="22"
                height="22"
                fill="none"
                stroke="currentColor"
                stroke-width="1.8"
                aria-hidden="true"
              >
                <path
                  d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
                />
              </svg>
            </h2>

            <?php require get_template_directory() . '/template-parts/explore-impact-track.php'; ?>
          </div>
        </section>

        <section class="explore-dream section-padding" aria-labelledby="explore-dream-title">
          <div class="site-container">
            <div class="explore-dream__card">
              <div class="explore-dream__grid">
                <h2 class="explore-dream__title" id="explore-dream-title">
                  <?php if ( '' !== trim( $explore_dream_title ) ) : ?>
                  <?php echo esc_html( $explore_dream_title ); ?>
                  <?php endif; ?>
                  <?php if ( '' !== trim( $explore_dream_title_accent ) ) : ?>
                  <span class="explore-dream__accent"><?php echo esc_html( $explore_dream_title_accent ); ?></span>
                  <?php endif; ?>
                  <?php if ( '' !== trim( $explore_dream_title_suffix ) ) : ?>
                  <?php echo esc_html( $explore_dream_title_suffix ); ?>
                  <?php endif; ?>
                </h2>

                <div class="explore-dream__photo-wrap">
                  <div class="lazy-img-wrap">
                    <img
                      class="explore-dream__photo lazy-img"
                      src="<?php echo esc_attr( $explore_hero_lazy_placeholder ); ?>"
                      data-src="<?php echo esc_url( $explore_dream_photo_url ); ?>"
                      alt="<?php echo esc_attr( $explore_dream_photo_alt ); ?>"
                      width="420"
                      height="320"
                      decoding="async"
                    />
                  </div>
                </div>

                <ul class="explore-dream__list">
                  <?php foreach ( $explore_dream_list as $dream_item ) : ?>
                  <li>
                    <span class="explore-dream__check" aria-hidden="true">
                      <svg
                        viewBox="0 0 24 24"
                        width="11"
                        height="11"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2.8"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      >
                        <path d="M5 13l4 4L19 7" />
                      </svg>
                    </span>
                    <?php echo esc_html( $dream_item ); ?>
                  </li>
                  <?php endforeach; ?>
                </ul>

                <div class="explore-dream__jar-wrap">
                  <div class="lazy-img-wrap">
                    <img
                      class="explore-dream__jar lazy-img"
                      src="<?php echo esc_attr( $explore_hero_lazy_placeholder ); ?>"
                      data-src="<?php echo esc_url( $explore_dream_jar_url ); ?>"
                      alt=""
                      width="260"
                      height="280"
                      decoding="async"
                      aria-hidden="true"
                    />
                  </div>
                </div>

                <div class="explore-dream__actions">
                  <?php if ( ! empty( $explore_dream_primary_btn_link['url'] ) && '' !== trim( $explore_dream_primary_btn_text ) ) : ?>
                  <a class="btn btn--solid btn--lg btn-hover" href="<?php echo esc_url( $explore_dream_primary_btn_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $explore_dream_primary_btn_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
                    <?php echo esc_html( $explore_dream_primary_btn_text ); ?>
                    <svg
                      class="btn__icon"
                      viewBox="0 0 24 24"
                      width="18"
                      height="18"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="1.7"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      aria-hidden="true"
                    >
                      <path d="M5 12h14M13 6l6 6-6 6" />
                    </svg>
                  </a>
                  <?php endif; ?>
                  <?php if ( ! empty( $explore_dream_secondary_btn_link['url'] ) && '' !== trim( $explore_dream_secondary_btn_text ) ) : ?>
                  <a
                    class="btn btn--outline btn--lg btn-hover explore-dream__btn-outline"
                    href="<?php echo esc_url( $explore_dream_secondary_btn_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $explore_dream_secondary_btn_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                  >
                    <?php echo esc_html( $explore_dream_secondary_btn_text ); ?>
                    <svg
                      class="btn__icon"
                      viewBox="0 0 24 24"
                      width="18"
                      height="18"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="1.8"
                      aria-hidden="true"
                    >
                      <circle cx="12" cy="12" r="9" />
                      <path d="M10 8.5v7l5.5-3.5L10 8.5z" fill="currentColor" stroke="none" />
                    </svg>
                  </a>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </main>

<?php
get_footer();
