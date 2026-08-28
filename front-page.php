<?php
/**
 * Front page template — converted from index.html.
 *
 * @package Bright_Dreamers_Club
 */

get_header();

$front_page_id = bdc_get_front_page_id();

$home_hero_logo_url = bdc_theme_asset_url( 'assets/images/bright-dreamers-logo.png' );
$home_hero_logo_ver = bdc_asset_version( 'assets/images/bright-dreamers-logo.png' );
if ( $home_hero_logo_ver ) {
	$home_hero_logo_url = add_query_arg( 'v', $home_hero_logo_ver, $home_hero_logo_url );
}
$home_hero_logo_alt = bdc_get_acf_text(
	'home_hero_logo_alt',
	'Bright Dreamers — Dream, Create, Grow, Give',
	$front_page_id
);
$home_hero_text = bdc_get_acf_text(
	'home_hero_text',
	'A nonprofit community where children\'s ideas become real projects that build confidence, creativity, kindness, and positive change.',
	$front_page_id
);
$home_hero_primary_cta = bdc_get_acf_link(
	'home_hero_primary_cta',
	array(
		'title'  => 'Apply to Become a Bright Dreamer',
		'url'    => bdc_page_url( 'apply-to-become.html' ),
		'target' => '',
	),
	$front_page_id
);
$home_hero_secondary_cta = bdc_get_acf_link(
	'home_hero_secondary_cta',
	array(
		'title'  => 'See Our Vision',
		'url'    => bdc_page_url( 'our-vision.html' ),
		'target' => '',
	),
	$front_page_id
);
$home_hero_banner_url = bdc_theme_asset_url( 'assets/images/home-hero-banner.png' );
$home_hero_banner_ver = bdc_asset_version( 'assets/images/home-hero-banner.png' );
if ( $home_hero_banner_ver ) {
	$home_hero_banner_url = add_query_arg( 'v', $home_hero_banner_ver, $home_hero_banner_url );
}
$home_hero_banner_alt = bdc_get_acf_text(
	'home_hero_banner_alt',
	'Three Bright Dreamers holding colorful heart flower drawings',
	$front_page_id
);

$home_pillars_idea_defaults = array(
	'image' => bdc_theme_asset_url( 'assets/images/home-pillar-books.jpeg' ),
	'title' => 'It All Starts With One Idea',
	'quote' => 'I have an idea.',
	'text'  => 'At Bright Dreamers, children don\'t just imagine—they create. They lead. They discover their talents while making a positive difference in the world.',
);
$home_pillars_idea = bdc_get_acf_group( 'home_pillars_idea', $home_pillars_idea_defaults, $front_page_id );
$home_pillars_idea_image = bdc_acf_image_value_to_url( $home_pillars_idea['image'] ?? null, $home_pillars_idea_defaults['image'] );
$home_pillars_idea_title = (string) $home_pillars_idea['title'];
$home_pillars_idea_quote = (string) $home_pillars_idea['quote'];
$home_pillars_idea_text  = (string) $home_pillars_idea['text'];

$home_pillars_mission_defaults = array(
	'title'        => 'Our Mission',
	'intro_text'   => 'We believe every child deserves the opportunity to:',
	'list_items'   => array(
		array( 'item_text' => 'Dream boldly.' ),
		array( 'item_text' => 'Create confidently.' ),
		array( 'item_text' => 'Grow through real experiences.' ),
		array( 'item_text' => 'Give their talents to help others.' ),
	),
	'closing_text' => 'Our mission is to help children discover who they are, what they love, and the impact they can make.',
	'link'         => array(
		'title'  => 'Learn About Us',
		'url'    => bdc_page_url( 'about.html' ),
		'target' => '',
	),
);
$home_pillars_mission       = bdc_get_acf_group( 'home_pillars_mission', $home_pillars_mission_defaults, $front_page_id );
$home_pillars_mission_link  = bdc_resolve_acf_link_value( $home_pillars_mission['link'] ?? null, $home_pillars_mission_defaults['link'] );
$home_pillars_mission_items = ( is_array( $home_pillars_mission['list_items'] ?? null ) && ! empty( $home_pillars_mission['list_items'] ) )
	? $home_pillars_mission['list_items']
	: $home_pillars_mission_defaults['list_items'];
$home_pillars_mission_checks = array( 'pink', 'orange', 'green', 'purple' );

$home_pillars_inspire_defaults = array(
	'image'           => bdc_theme_asset_url( 'assets/images/home-pillar-jar.jpeg' ),
	'line_1'          => 'Together, we can',
	'line_2'          => 'inspire big',
	'accent_1'        => 'dreams',
	'line_3'          => 'and create lasting',
	'accent_2'        => 'change.',
	'underline_image' => bdc_theme_asset_url( 'assets/images/heading-underline.jpeg' ),
);
$home_pillars_inspire       = bdc_get_acf_group( 'home_pillars_inspire', $home_pillars_inspire_defaults, $front_page_id );
$home_pillars_inspire_image = bdc_acf_image_value_to_url( $home_pillars_inspire['image'] ?? null, $home_pillars_inspire_defaults['image'] );
$home_pillars_inspire_underline = bdc_acf_image_value_to_url(
	$home_pillars_inspire['underline_image'] ?? null,
	$home_pillars_inspire_defaults['underline_image']
);
$home_pillars_inspire_line_1   = (string) $home_pillars_inspire['line_1'];
$home_pillars_inspire_line_2   = (string) $home_pillars_inspire['line_2'];
$home_pillars_inspire_accent_1 = (string) $home_pillars_inspire['accent_1'];
$home_pillars_inspire_line_3   = (string) $home_pillars_inspire['line_3'];
$home_pillars_inspire_accent_2 = (string) $home_pillars_inspire['accent_2'];
$home_pillars_mission_title    = (string) $home_pillars_mission['title'];
$home_pillars_mission_intro    = (string) $home_pillars_mission['intro_text'];
$home_pillars_mission_closing  = (string) $home_pillars_mission['closing_text'];

$home_different_title = bdc_get_acf_text(
	'home_different_title',
	'What Makes Bright Dreamers Different?',
	$front_page_id
);
$home_different_items_defaults = array(
	array(
		'icon'        => bdc_theme_asset_url( 'assets/images/believe-icon-star.png' ),
		'name'        => 'Dream',
		'description' => 'Children imagine possibilities.',
	),
	array(
		'icon'        => bdc_theme_asset_url( 'assets/images/role-icon-palette.jpeg' ),
		'name'        => 'Create',
		'description' => 'Turn ideas into real projects.',
	),
	array(
		'icon'        => bdc_theme_asset_url( 'assets/images/home-diff-grow.jpeg' ),
		'name'        => 'Grow',
		'description' => 'Build confidence through experience.',
	),
	array(
		'icon'        => bdc_theme_asset_url( 'assets/images/home-diff-connect.jpeg' ),
		'name'        => 'Connect',
		'description' => 'Work together and make friends.',
	),
	array(
		'icon'        => bdc_theme_asset_url( 'assets/images/home-diff-lead.jpeg' ),
		'name'        => 'Lead',
		'description' => 'Share ideas and solve problems.',
	),
	array(
		'icon'        => bdc_theme_asset_url( 'assets/images/home-diff-give.jpeg' ),
		'name'        => 'Give',
		'description' => 'Use creativity to help others.',
	),
);
$home_different_items_raw = bdc_get_acf_repeater( 'home_different_items', $home_different_items_defaults, $front_page_id );
$home_different_items     = array();

foreach ( $home_different_items_raw as $index => $row ) {
	$default = $home_different_items_defaults[ $index ] ?? array(
		'icon'        => '',
		'name'        => '',
		'description' => '',
	);

	$name        = isset( $row['name'] ) ? trim( (string) $row['name'] ) : '';
	$description = isset( $row['description'] ) ? trim( (string) $row['description'] ) : '';

	$home_different_items[] = array(
		'icon'        => bdc_acf_image_value_to_url( $row['icon'] ?? null, (string) $default['icon'] ),
		'name'        => '' !== $name ? $name : (string) $default['name'],
		'description' => '' !== $description ? $description : (string) $default['description'],
	);
}

$home_reality_title = bdc_get_acf_text(
	'home_reality_title',
	'How Ideas Become Reality',
	$front_page_id
);
$home_reality_arrow_url = bdc_theme_asset_url( 'assets/images/approach-arrow.jpeg' );
$home_reality_steps_defaults = array(
	array(
		'icon'        => bdc_theme_asset_url( 'assets/images/home-reality-dream.png' ),
		'title'       => 'Dream',
		'description' => 'It starts with a spark of an idea.',
		'style_slug'  => 'dream',
	),
	array(
		'icon'        => bdc_theme_asset_url( 'assets/images/home-reality-imagine.png' ),
		'title'       => 'Imagine',
		'description' => 'We explore and plan together.',
		'style_slug'  => 'imagine',
	),
	array(
		'icon'        => bdc_theme_asset_url( 'assets/images/home-reality-create.png' ),
		'title'       => 'Create',
		'description' => 'We build, design, and make.',
		'style_slug'  => 'create',
	),
	array(
		'icon'        => bdc_theme_asset_url( 'assets/images/home-reality-share.png' ),
		'title'       => 'Share',
		'description' => 'We present, celebrate, and inspire.',
		'style_slug'  => 'share',
	),
	array(
		'icon'        => bdc_theme_asset_url( 'assets/images/home-reality-help.png' ),
		'title'       => 'Help Others',
		'description' => 'We use our ideas to make a difference.',
		'style_slug'  => 'help',
	),
	array(
		'icon'        => bdc_theme_asset_url( 'assets/images/home-reality-celebrate.png' ),
		'title'       => 'Celebrate',
		'description' => 'We cheer each other on and keep growing!',
		'style_slug'  => 'celebrate',
	),
);
$home_reality_step_slugs_allowed = array( 'dream', 'imagine', 'create', 'share', 'help', 'celebrate' );
$home_reality_steps_raw          = bdc_get_acf_repeater( 'home_reality_steps', $home_reality_steps_defaults, $front_page_id );
$home_reality_steps              = array();

foreach ( $home_reality_steps_raw as $index => $row ) {
	$default = $home_reality_steps_defaults[ $index ] ?? array(
		'icon'        => '',
		'title'       => '',
		'description' => '',
		'style_slug'  => 'dream',
	);

	$title       = isset( $row['title'] ) ? trim( (string) $row['title'] ) : '';
	$description = isset( $row['description'] ) ? trim( (string) $row['description'] ) : '';
	$style_slug  = isset( $row['style_slug'] ) ? sanitize_key( (string) $row['style_slug'] ) : '';

	if ( ! in_array( $style_slug, $home_reality_step_slugs_allowed, true ) ) {
		$style_slug = (string) $default['style_slug'];
	}

	$home_reality_steps[] = array(
		'icon'        => bdc_acf_image_value_to_url( $row['icon'] ?? null, (string) $default['icon'] ),
		'title'       => '' !== $title ? $title : (string) $default['title'],
		'description' => '' !== $description ? $description : (string) $default['description'],
		'style_slug'  => $style_slug,
	);
}

$home_explore_title = bdc_get_acf_text(
	'home_explore_title',
	'Explore Experiences',
	$front_page_id
);
$home_explore_cards_defaults = array(
	array(
		'photo'       => bdc_theme_asset_url( 'assets/images/home-explore-makers-photo.png' ),
		'photo_alt'   => 'A young girl smiling while holding up a colorful drawing',
		'icon'        => bdc_theme_asset_url( 'assets/images/explore-makers-icon.jpeg' ),
		'title'       => 'Creative Makers',
		'description' => 'Art, design, crafts, and creative projects that bring ideas to life.',
		'link'        => array(
			'title'  => 'Learn More',
			'url'    => bdc_page_url( 'creative-makers.html' ),
			'target' => '',
		),
	),
	array(
		'photo'       => bdc_theme_asset_url( 'assets/images/home-explore-ideas-photo.png' ),
		'photo_alt'   => 'A young girl in a lab coat with fresh ideas on a chalkboard',
		'icon'        => bdc_theme_asset_url( 'assets/images/explore-ideas-icon.jpeg' ),
		'title'       => 'Young Ideas Lab',
		'description' => 'Science, innovation, coding, and invention for curious minds.',
		'link'        => array(
			'title'  => 'Learn More',
			'url'    => bdc_page_url( 'young-ideas-lab.html' ),
			'target' => '',
		),
	),
	array(
		'photo'       => bdc_theme_asset_url( 'assets/images/home-explore-cause-photo.png' ),
		'photo_alt'   => 'Two people painting a colorful floral mural on an outdoor wall',
		'icon'        => bdc_theme_asset_url( 'assets/images/explore-cause-icon.jpeg' ),
		'title'       => 'Create for a Cause',
		'description' => 'Projects that help our community and make the world better.',
		'link'        => array(
			'title'  => 'Learn More',
			'url'    => bdc_page_url( 'create-for-cause.html' ),
			'target' => '',
		),
	),
	array(
		'photo'       => bdc_theme_asset_url( 'assets/images/home-explore-adventures-photo.png' ),
		'photo_alt'   => 'Children and families at a colorful outdoor playground',
		'icon'        => bdc_theme_asset_url( 'assets/images/explore-adventures-icon.jpeg' ),
		'title'       => 'Community Adventures',
		'description' => 'Explore, discover, and learn through real-world adventures.',
		'link'        => array(
			'title'  => 'Learn More',
			'url'    => bdc_page_url( 'community-adventures.html' ),
			'target' => '',
		),
	),
);
$home_explore_cards_raw = bdc_get_acf_repeater( 'home_explore_cards', $home_explore_cards_defaults, $front_page_id );
$home_explore_cards     = array();

foreach ( $home_explore_cards_raw as $index => $row ) {
	$default = $home_explore_cards_defaults[ $index ] ?? array(
		'photo'       => '',
		'photo_alt'   => '',
		'icon'        => '',
		'title'       => '',
		'description' => '',
		'link'        => array(
			'title'  => 'Learn More',
			'url'    => '',
			'target' => '',
		),
	);

	$title       = isset( $row['title'] ) ? trim( (string) $row['title'] ) : '';
	$description = isset( $row['description'] ) ? trim( (string) $row['description'] ) : '';
	$photo_alt   = isset( $row['photo_alt'] ) ? trim( (string) $row['photo_alt'] ) : '';

	$home_explore_cards[] = array(
		'photo'       => in_array( (int) $index, array( 0, 1, 2, 3 ), true )
			? (string) $default['photo']
			: bdc_acf_image_value_to_url( $row['photo'] ?? null, (string) $default['photo'] ),
		'photo_alt'   => in_array( (int) $index, array( 0, 1, 2, 3 ), true )
			? (string) $default['photo_alt']
			: ( '' !== $photo_alt ? $photo_alt : (string) $default['photo_alt'] ),
		'icon'        => bdc_acf_image_value_to_url( $row['icon'] ?? null, (string) $default['icon'] ),
		'title'       => '' !== $title ? $title : (string) $default['title'],
		'description' => '' !== $description ? $description : (string) $default['description'],
		'link'        => bdc_resolve_acf_link_value( $row['link'] ?? null, $default['link'] ),
	);
}

$home_spotlight_ideas_defaults = array(
	'title'      => 'Children\'s Ideas Matter',
	'lead'       => 'Bright Dreamers is built with children—not just for children.',
	'body'       => 'Many of our projects begin with children\'s own ideas. Children help imagine new activities, suggest community projects, and inspire future programs through our Young Dreamers Council.',
	'highlight'  => "Because the best ideas sometimes\ncome from the smallest voices.",
	'photo'      => bdc_theme_asset_url( 'assets/images/home-ideas-photo.png' ),
	'photo_alt'  => 'Children lying in a circle looking up and smiling',
);
$home_spotlight_ideas       = bdc_get_acf_group( 'home_spotlight_ideas', $home_spotlight_ideas_defaults, $front_page_id );
$home_spotlight_ideas_photo = $home_spotlight_ideas_defaults['photo'];
$home_ideas_photo_ver       = bdc_asset_version( 'assets/images/home-ideas-photo.png' );
if ( $home_ideas_photo_ver ) {
	$home_spotlight_ideas_photo = add_query_arg( 'v', $home_ideas_photo_ver, $home_spotlight_ideas_photo );
}
$home_spotlight_ideas_title = (string) $home_spotlight_ideas['title'];
$home_spotlight_ideas_lead  = (string) $home_spotlight_ideas['lead'];
$home_spotlight_ideas_body  = (string) $home_spotlight_ideas['body'];
$home_spotlight_ideas_highlight = preg_replace( '/<br\s*\/?>/i', "\n", (string) $home_spotlight_ideas['highlight'] );
$home_spotlight_ideas_photo_alt = (string) $home_spotlight_ideas_defaults['photo_alt'];

$home_spotlight_council_defaults = array(
	'title'      => 'Young Dreamers Council',
	'list_items' => array(
		array( 'item_text' => 'Share ideas' ),
		array( 'item_text' => 'Suggest projects' ),
		array( 'item_text' => 'Identify causes they care about' ),
		array( 'item_text' => 'Vote on activities' ),
		array( 'item_text' => 'Help shape the future' ),
	),
	'note'         => 'Adult mentors guide and support them every step of the way.',
	'link'         => array(
		'title'  => 'Learn How It Works',
		'url'    => bdc_page_url( 'about.html' ),
		'target' => '',
	),
	'illustration' => bdc_theme_asset_url( 'assets/images/home-council-illustration-removebg-preview.png' ),
);
$home_spotlight_council              = bdc_get_acf_group( 'home_spotlight_council', $home_spotlight_council_defaults, $front_page_id );
$home_spotlight_council_link         = bdc_resolve_acf_link_value( $home_spotlight_council['link'] ?? null, $home_spotlight_council_defaults['link'] );
$home_spotlight_council_illustration = bdc_acf_image_value_to_url(
	$home_spotlight_council['illustration'] ?? null,
	$home_spotlight_council_defaults['illustration']
);
$home_spotlight_council_title = (string) $home_spotlight_council['title'];
$home_spotlight_council_note  = (string) $home_spotlight_council['note'];
$home_spotlight_council_items = ( is_array( $home_spotlight_council['list_items'] ?? null ) && ! empty( $home_spotlight_council['list_items'] ) )
	? $home_spotlight_council['list_items']
	: $home_spotlight_council_defaults['list_items'];
?>
    <main id="main-content">
      <section class="page-hero home-hero" aria-label="Welcome">
        <div class="site-container page-hero__inner">
          <div class="page-hero__content">
            <div class="home-hero__brand">
              <img
                class="home-hero__logo"
                src="<?php echo esc_url( $home_hero_logo_url ); ?>"
                alt="<?php echo esc_attr( $home_hero_logo_alt ); ?>"
                width="380"
                height="110"
                decoding="async"
              />
            </div>

            <p class="page-hero__text">
              <?php echo esc_html( $home_hero_text ); ?>
            </p>

            <div class="page-hero__actions">
              <a class="btn btn--solid btn--lg btn-hover" href="<?php echo esc_url( $home_hero_primary_cta['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $home_hero_primary_cta ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
                <?php echo esc_html( $home_hero_primary_cta['title'] ); ?>
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
                  <circle cx="9" cy="9" r="2.6" />
                  <circle cx="15.5" cy="9.5" r="2.2" />
                  <path d="M4.5 19c.7-2.6 2.6-4 4.5-4s3.8 1.4 4.5 4" />
                  <path d="M12.8 18.5c.5-1.8 1.8-2.8 3.2-2.8 1.2 0 2.2.7 2.8 2" />
                </svg>
              </a>
              <a class="btn btn--outline btn--lg btn-hover" href="<?php echo esc_url( $home_hero_secondary_cta['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $home_hero_secondary_cta ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
                <?php echo esc_html( $home_hero_secondary_cta['title'] ); ?>
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
                  <path
                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
                  />
                </svg>
              </a>
            </div>
          </div>

          <div class="home-hero__media">
            <div class="lazy-img-wrap">
              <img
                class="home-hero__banner"
                src="<?php echo esc_url( $home_hero_banner_url ); ?>"
                alt="<?php echo esc_attr( $home_hero_banner_alt ); ?>"
                width="1024"
                height="584"
                decoding="async"
              />
            </div>
          </div>
        </div>
      </section>

      <section class="home-pillars scroll-rise" aria-label="Bright Dreamers pillars">
        <div class="site-container">
          <div class="home-pillars__row">
            <article class="home-pillar home-pillar--idea">
              <div class="home-pillar__inner">
                <div class="home-pillar__figure">
                  <div class="lazy-img-wrap">
                    <img
                      class="home-pillar__img lazy-img"
                      src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                      data-src="<?php echo esc_url( $home_pillars_idea_image ); ?>"
                      alt=""
                      width="280"
                      height="320"
                      decoding="async"
                    />
                  </div>
                </div>

                <div class="home-pillar__content">
                  <h2 class="home-pillar__title">
                    <?php echo esc_html( $home_pillars_idea_title ); ?>
                    <svg
                      class="home-pillar__title-icon home-pillar__title-icon--star"
                      viewBox="0 0 24 24"
                      width="20"
                      height="20"
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

                  <p class="home-pillar__quote">&ldquo;<?php echo esc_html( $home_pillars_idea_quote ); ?>&rdquo;</p>

                  <p class="home-pillar__text">
                    <?php echo esc_html( $home_pillars_idea_text ); ?>
                  </p>
                </div>
              </div>
            </article>

            <article class="home-pillar home-pillar--mission">
              <div class="home-pillar__content home-pillar__content--full">
                <h2 class="home-pillar__title">
                  <?php echo esc_html( $home_pillars_mission_title ); ?>
                  <svg
                    class="home-pillar__title-icon home-pillar__title-icon--heart"
                    viewBox="0 0 24 24"
                    width="20"
                    height="20"
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

                <p class="home-pillar__text">
                  <?php echo esc_html( $home_pillars_mission_intro ); ?>
                </p>

                <ul class="home-pillar__list">
                  <?php foreach ( $home_pillars_mission_items as $index => $item ) : ?>
                    <?php
                    $item_text   = isset( $item['item_text'] ) ? trim( (string) $item['item_text'] ) : '';
                    $check_class = $home_pillars_mission_checks[ $index ] ?? 'pink';

                    if ( '' === $item_text ) {
                      continue;
                    }
                    ?>
                  <li>
                    <span class="home-pillar__check home-pillar__check--<?php echo esc_attr( $check_class ); ?>" aria-hidden="true">
                      <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 13l4 4L19 7" />
                      </svg>
                    </span>
                    <?php echo esc_html( $item_text ); ?>
                  </li>
                  <?php endforeach; ?>
                </ul>

                <p class="home-pillar__text">
                  <?php echo esc_html( $home_pillars_mission_closing ); ?>
                </p>

                <a class="home-pillar__link" href="<?php echo esc_url( $home_pillars_mission_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $home_pillars_mission_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
                  <?php echo esc_html( $home_pillars_mission_link['title'] ); ?>
                  <span aria-hidden="true">&rarr;</span>
                </a>
              </div>
            </article>

            <article class="home-pillar home-pillar--inspire">
              <div class="home-pillar__inner">
                <div class="home-pillar__figure">
                  <div class="lazy-img-wrap">
                    <img
                      class="home-pillar__img home-pillar__img--jar lazy-img"
                      src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                      data-src="<?php echo esc_url( $home_pillars_inspire_image ); ?>"
                      alt=""
                      width="280"
                      height="320"
                      decoding="async"
                    />
                  </div>
                </div>

                <div class="home-pillar__content">
                  <p class="home-pillar__inspire-text">
                    <?php echo esc_html( $home_pillars_inspire_line_1 ); ?><br />
                    <?php echo esc_html( $home_pillars_inspire_line_2 ); ?>
                    <span class="home-pillar__accent home-pillar__accent--pink"><?php echo esc_html( $home_pillars_inspire_accent_1 ); ?></span><br />
                    <?php echo esc_html( $home_pillars_inspire_line_3 ); ?><br />
                    <span class="heading-underline heading-underline--inspire">
                      <span class="home-pillar__accent home-pillar__accent--green"
                        ><?php echo esc_html( $home_pillars_inspire_accent_2 ); ?></span
                      >
                      <img
                        class="heading-underline__img"
                        src="<?php echo esc_url( $home_pillars_inspire_underline ); ?>"
                        alt=""
                        width="120"
                        height="12"
                      />
                    </span>
                  </p>
                </div>
              </div>
            </article>
          </div>
        </div>
      </section>

      <section class="home-different scroll-rise scroll-rise--delay-1" aria-labelledby="home-different-title">
        <div class="site-container">
          <h2 class="home-different__title" id="home-different-title">
            <?php echo esc_html( $home_different_title ); ?>
            <svg
              class="home-different__title-icon"
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

          <div class="home-different__grid">
            <?php foreach ( $home_different_items as $item ) : ?>
              <?php
              if ( '' === trim( $item['name'] ) && '' === trim( $item['description'] ) ) {
                continue;
              }
              ?>
            <div class="home-different__item">
              <span class="home-different__icon-wrap" aria-hidden="true">
                <img
                  class="home-different__icon"
                  src="<?php echo esc_url( $item['icon'] ); ?>"
                  alt=""
                  width="56"
                  height="56"
                  loading="lazy"
                  decoding="async"
                />
              </span>
              <p class="home-different__text">
                <strong class="home-different__name"><?php echo esc_html( $item['name'] ); ?></strong>
                <?php echo esc_html( $item['description'] ); ?>
              </p>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <section class="home-reality scroll-rise scroll-rise--delay-2" aria-labelledby="home-reality-title">
        <div class="site-container">
          <div class="home-reality__box">
            <span class="home-reality__deco-wrap home-reality__deco-wrap--left" aria-hidden="true">
              <img
                class="home-reality__deco"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/believe-deco-dots-removebg-preview.png' ); ?>"
                alt=""
                loading="lazy"
                decoding="async"
              />
            </span>
            <span class="home-reality__deco-wrap home-reality__deco-wrap--right" aria-hidden="true">
              <img
                class="home-reality__deco"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/believe-deco-dots-removebg-preview (1).png' ); ?>"
                alt=""
                loading="lazy"
                decoding="async"
              />
            </span>

            <div class="home-reality__inner">
          <h2 class="home-reality__title" id="home-reality-title">
            <?php echo esc_html( $home_reality_title ); ?>
            <svg
              class="home-reality__title-icon"
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

          <div class="home-reality__steps">
            <?php
            $home_reality_steps_visible = array_values(
              array_filter(
                $home_reality_steps,
                static function ( $step ) {
                  return '' !== trim( $step['title'] ) || '' !== trim( $step['description'] );
                }
              )
            );
            $home_reality_step_total    = count( $home_reality_steps_visible );

            foreach ( $home_reality_steps_visible as $step_index => $step ) :
              $step_slug = $step['style_slug'];
              ?>
            <div class="home-reality-step">
              <span class="home-reality-step__icon-wrap home-reality-step__icon-wrap--<?php echo esc_attr( $step_slug ); ?>" aria-hidden="true">
                <img
                  class="home-reality-step__icon"
                  src="<?php echo esc_url( $step['icon'] ); ?>"
                  alt=""
                  loading="lazy"
                  decoding="async"
                />
              </span>
              <p class="home-reality-step__title home-reality-step__title--<?php echo esc_attr( $step_slug ); ?>"><?php echo esc_html( $step['title'] ); ?></p>
              <p class="home-reality-step__text"><?php echo esc_html( $step['description'] ); ?></p>
            </div>

            <?php if ( $step_index < $home_reality_step_total - 1 ) : ?>
            <img
              class="home-reality-step__arrow"
              src="<?php echo esc_url( $home_reality_arrow_url ); ?>"
              alt=""
              width="32"
              height="16"
              aria-hidden="true"
            />
            <?php endif; ?>
            <?php endforeach; ?>
          </div>
            </div>
          </div>
        </div>
      </section>

      <section class="home-explore scroll-rise scroll-rise--delay-1" aria-labelledby="home-explore-title">
        <div class="site-container">
          <h2 class="home-explore__title" id="home-explore-title">
            <?php echo esc_html( $home_explore_title ); ?>
            <svg
              class="home-explore__title-icon"
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

          <div class="home-explore__grid">
            <?php foreach ( $home_explore_cards as $card ) : ?>
              <?php
              if ( '' === trim( $card['title'] ) && '' === trim( $card['description'] ) ) {
                continue;
              }
              ?>
            <article class="experience-card">
              <div class="experience-card__media">
                <div class="lazy-img-wrap lazy-img-wrap--cover">
                  <img
                    class="experience-card__photo lazy-img"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                    data-src="<?php echo esc_url( $card['photo'] ); ?>"
                    alt="<?php echo esc_attr( $card['photo_alt'] ); ?>"
                    width="400"
                    height="300"
                    decoding="async"
                  />
                </div>
                <span class="experience-card__icon-wrap" aria-hidden="true">
                  <img
                    class="experience-card__icon"
                    src="<?php echo esc_url( $card['icon'] ); ?>"
                    alt=""
                    width="44"
                    height="44"
                    loading="lazy"
                    decoding="async"
                  />
                </span>
              </div>
              <h3 class="experience-card__title"><?php echo esc_html( $card['title'] ); ?></h3>
              <p class="experience-card__text">
                <?php echo esc_html( $card['description'] ); ?>
              </p>
              <?php if ( ! empty( $card['link']['url'] ) ) : ?>
              <a class="experience-card__link" href="<?php echo esc_url( $card['link']['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $card['link'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
                <?php echo esc_html( $card['link']['title'] ); ?>
                <span aria-hidden="true">&rarr;</span>
              </a>
              <?php endif; ?>
            </article>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <section class="home-spotlight scroll-rise scroll-rise--delay-2" aria-label="Children lead at Bright Dreamers">
        <div class="site-container">
          <div class="home-spotlight__grid">
          <article class="spotlight-card spotlight-card--ideas">
            <div class="spotlight-card__content">
              <h3 class="spotlight-card__title">
                <?php echo esc_html( $home_spotlight_ideas_title ); ?>
                <svg
                  class="spotlight-card__title-icon spotlight-card__title-icon--star"
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
              </h3>

              <div class="spotlight-card__copy">
                <p class="spotlight-card__lead">
                  <?php echo esc_html( $home_spotlight_ideas_lead ); ?>
                </p>
                <p class="spotlight-card__body">
                  <?php echo esc_html( $home_spotlight_ideas_body ); ?>
                </p>
                <p class="spotlight-card__highlight">
                  <?php echo wp_kses( nl2br( esc_html( $home_spotlight_ideas_highlight ) ), array( 'br' => array() ) ); ?>
                </p>
              </div>
            </div>

            <div class="spotlight-card__figure">
              <span class="spotlight-card__figure-wrap spotlight-card__figure-wrap--ideas" aria-hidden="true">
                <div class="lazy-img-wrap lazy-img-wrap--fill">
                  <img
                    class="spotlight-card__figure-img lazy-img"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                    data-src="<?php echo esc_url( $home_spotlight_ideas_photo ); ?>"
                    alt="<?php echo esc_attr( $home_spotlight_ideas_photo_alt ); ?>"
                    width="612"
                    height="408"
                    decoding="async"
                  />
                </div>
              </span>
            </div>
          </article>

          <article class="spotlight-card spotlight-card--council">
            <div class="spotlight-card__content">
              <h3 class="spotlight-card__title">
                <?php echo esc_html( $home_spotlight_council_title ); ?>
                <svg
                  class="spotlight-card__title-icon spotlight-card__title-icon--crown"
                  viewBox="0 0 24 24"
                  width="22"
                  height="22"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1.7"
                  aria-hidden="true"
                >
                  <path
                    d="M4 18h16M6 18l1.2-7.2 2.8 3.6 3-5.8 3 5.8 2.8-3.6L18 18M6 10l2-4 4 2 4-2 2 4"
                  />
                </svg>
              </h3>

              <ul class="spotlight-card__list">
                <?php foreach ( $home_spotlight_council_items as $item ) : ?>
                  <?php
                  $item_text = isset( $item['item_text'] ) ? trim( (string) $item['item_text'] ) : '';
                  if ( '' === $item_text ) {
                    continue;
                  }
                  ?>
                <li><?php echo esc_html( $item_text ); ?></li>
                <?php endforeach; ?>
              </ul>

              <p class="spotlight-card__note">
                <?php echo esc_html( $home_spotlight_council_note ); ?>
              </p>

              <?php if ( ! empty( $home_spotlight_council_link['url'] ) ) : ?>
              <a class="btn btn--outline btn-hover spotlight-card__btn" href="<?php echo esc_url( $home_spotlight_council_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $home_spotlight_council_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
                <?php echo esc_html( $home_spotlight_council_link['title'] ); ?>
                <span aria-hidden="true">&rarr;</span>
              </a>
              <?php endif; ?>
            </div>

            <div class="spotlight-card__figure">
              <span class="spotlight-card__figure-wrap" aria-hidden="true">
                <div class="lazy-img-wrap lazy-img-wrap--fill">
                  <img
                    class="spotlight-card__figure-img lazy-img"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                    data-src="<?php echo esc_url( $home_spotlight_council_illustration ); ?>"
                    alt=""
                    width="400"
                    height="400"
                    decoding="async"
                  />
                </div>
              </span>
            </div>
          </article>
          </div>
        </div>
      </section>

      <!-- HOME SECTIONS GO HERE -->
    </main>

<?php
get_footer();
