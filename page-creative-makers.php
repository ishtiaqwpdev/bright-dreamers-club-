<?php
/**
 * Creative Makers page template — converted from creative-makers.html.
 *
 * Template Name: Creative Makers
 *
 * @package Bright_Dreamers_Club
 */

get_header();

$creative_makers_page_id = get_queried_object_id();

$creative_makers_hero_lazy_placeholder = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';

$creative_makers_hero_breadcrumb_home_text = bdc_get_acf_text(
	'creative_makers_hero_breadcrumb_home_text',
	'Home',
	$creative_makers_page_id
);
$creative_makers_hero_breadcrumb_home_link = bdc_get_acf_link(
	'creative_makers_hero_breadcrumb_home_link',
	array(
		'title'  => 'Home',
		'url'    => bdc_page_url( 'index.html' ),
		'target' => '',
	),
	$creative_makers_page_id
);
$creative_makers_hero_breadcrumb_parent_text = bdc_get_acf_text(
	'creative_makers_hero_breadcrumb_parent_text',
	'Explore',
	$creative_makers_page_id
);
$creative_makers_hero_breadcrumb_parent_link = bdc_get_acf_link(
	'creative_makers_hero_breadcrumb_parent_link',
	array(
		'title'  => 'Explore',
		'url'    => bdc_page_url( 'explore.html' ),
		'target' => '',
	),
	$creative_makers_page_id
);
$creative_makers_hero_breadcrumb_current_text = bdc_get_acf_text(
	'creative_makers_hero_breadcrumb_current_text',
	'Creative Makers',
	$creative_makers_page_id
);
$creative_makers_hero_title = bdc_get_acf_text(
	'creative_makers_hero_title',
	'Creative Makers',
	$creative_makers_page_id
);
$creative_makers_hero_title_heart_url = bdc_get_acf_image_url(
	'creative_makers_hero_title_heart',
	bdc_theme_asset_url( 'assets/images/creative-makers-deco-heart.jpeg' ),
	$creative_makers_page_id
);
$creative_makers_hero_tagline = bdc_get_acf_text(
	'creative_makers_hero_tagline',
	'Imagine it. Create it. Share it.',
	$creative_makers_page_id
);
$creative_makers_hero_text = bdc_get_acf_text(
	'creative_makers_hero_text',
	'Creative Makers is where children explore their imagination through art, design, and hands-on crafts. From painting and DIY projects to decorating and upcycling, kids learn to express themselves, build confidence, and turn everyday materials into something meaningful.',
	$creative_makers_page_id
);
$creative_makers_hero_primary_btn_text = bdc_get_acf_text(
	'creative_makers_hero_primary_btn_text',
	'Learn More About This Experience',
	$creative_makers_page_id
);
$creative_makers_hero_primary_btn_link = bdc_get_acf_link(
	'creative_makers_hero_primary_btn_link',
	array(
		'title'  => 'Learn More About This Experience',
		'url'    => '#creative-makers-parents',
		'target' => '',
	),
	$creative_makers_page_id
);
$creative_makers_hero_back_text = bdc_get_acf_text(
	'creative_makers_hero_back_text',
	'Back to All Experiences',
	$creative_makers_page_id
);
$creative_makers_hero_back_link = bdc_get_acf_link(
	'creative_makers_hero_back_link',
	array(
		'title'  => 'Back to All Experiences',
		'url'    => bdc_page_url( 'explore.html' ),
		'target' => '',
	),
	$creative_makers_page_id
);
$creative_makers_hero_banner_url = bdc_get_acf_image_url(
	'creative_makers_hero_banner',
	bdc_theme_asset_url( 'assets/images/creative-makers-hero-banner.jpeg' ),
	$creative_makers_page_id
);
$creative_makers_hero_banner_alt = bdc_get_acf_text(
	'creative_makers_hero_banner_alt',
	'Three children smiling while painting together at a table',
	$creative_makers_page_id
);
$creative_makers_hero_deco_star_url = bdc_get_acf_image_url(
	'creative_makers_hero_deco_star',
	bdc_theme_asset_url( 'assets/images/creative-makers-deco-star.jpeg' ),
	$creative_makers_page_id
);
$creative_makers_hero_deco_plane_url = bdc_get_acf_image_url(
	'creative_makers_hero_deco_plane',
	bdc_theme_asset_url( 'assets/images/creative-makers-deco-plane.jpeg' ),
	$creative_makers_page_id
);

$creative_makers_explore_title = bdc_get_acf_text(
	'creative_makers_explore_title',
	'Children Explore',
	$creative_makers_page_id
);
$creative_makers_explore_activities_defaults = array(
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/creative-makers-icon-paint.jpeg' ),
		'title'      => 'Painting & Drawing',
		'color_slug' => 'paint',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/creative-makers-icon-scissors.jpeg' ),
		'title'      => 'Crafts & DIY',
		'color_slug' => 'crafts',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/creative-makers-icon-rocket-removebg-preview.png' ),
		'title'      => 'Mixed Media Art',
		'color_slug' => 'media',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/creative-makers-icon-clip-removebg-preview.png' ),
		'title'      => 'Design & Decorate',
		'color_slug' => 'design',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/creative-makers-icon-recycle-removebg-preview.png' ),
		'title'      => 'Upcycle & Reuse',
		'color_slug' => 'upcycle',
	),
);
$creative_makers_explore_color_slugs_allowed = array( 'paint', 'crafts', 'media', 'design', 'upcycle' );
$creative_makers_explore_activities_raw      = bdc_get_acf_repeater( 'creative_makers_explore_activities', $creative_makers_explore_activities_defaults, $creative_makers_page_id );
$creative_makers_explore_activities          = array();

foreach ( $creative_makers_explore_activities_raw as $index => $row ) {
	$default = $creative_makers_explore_activities_defaults[ $index ] ?? array(
		'icon'       => '',
		'title'      => '',
		'color_slug' => 'paint',
	);

	$title = isset( $row['title'] ) ? trim( (string) $row['title'] ) : '';

	$color_slug = isset( $row['color_slug'] ) ? sanitize_key( (string) $row['color_slug'] ) : '';
	if ( ! in_array( $color_slug, $creative_makers_explore_color_slugs_allowed, true ) ) {
		$color_slug = (string) $default['color_slug'];
	}

	$resolved = array(
		'icon'       => bdc_acf_image_value_to_url( $row['icon'] ?? null, (string) $default['icon'] ),
		'title'      => '' !== $title ? $title : (string) $default['title'],
		'color_slug' => $color_slug,
	);

	if ( '' === trim( $resolved['title'] ) ) {
		continue;
	}

	$creative_makers_explore_activities[] = $resolved;
}

if ( empty( $creative_makers_explore_activities ) ) {
	$creative_makers_explore_activities = $creative_makers_explore_activities_defaults;
}

$creative_makers_info_aria_label = bdc_get_acf_text(
	'creative_makers_info_aria_label',
	'Skills, growth, and impact',
	$creative_makers_page_id
);
$creative_makers_info_skills_title = bdc_get_acf_text(
	'creative_makers_info_skills_title',
	'Skills Children Naturally Build',
	$creative_makers_page_id
);
$creative_makers_info_skills_items_defaults = array(
	array( 'item_text' => 'Creativity & Imagination' ),
	array( 'item_text' => 'Self-expression' ),
	array( 'item_text' => 'Focus & patience' ),
	array( 'item_text' => 'Confidence' ),
	array( 'item_text' => 'Problem solving' ),
);
$creative_makers_info_skills_items_raw = bdc_get_acf_repeater( 'creative_makers_info_skills_items', $creative_makers_info_skills_items_defaults, $creative_makers_page_id );
$creative_makers_info_skills_items     = array();

foreach ( $creative_makers_info_skills_items_raw as $index => $row ) {
	$default   = $creative_makers_info_skills_items_defaults[ $index ] ?? array( 'item_text' => '' );
	$item_text = isset( $row['item_text'] ) ? trim( (string) $row['item_text'] ) : '';
	$resolved  = '' !== $item_text ? $item_text : (string) $default['item_text'];

	if ( '' === trim( $resolved ) ) {
		continue;
	}

	$creative_makers_info_skills_items[] = array( 'item_text' => $resolved );
}

if ( empty( $creative_makers_info_skills_items ) ) {
	$creative_makers_info_skills_items = $creative_makers_info_skills_items_defaults;
}
$creative_makers_info_skills_deco_url = bdc_get_acf_image_url(
	'creative_makers_info_skills_deco',
	bdc_theme_asset_url( 'assets/images/creative-makers-info-heart-removebg-preview.png' ),
	$creative_makers_page_id
);
$creative_makers_info_grow_title_underline_word = bdc_get_acf_text(
	'creative_makers_info_grow_title_underline_word',
	'Children Grow',
	$creative_makers_page_id
);
$creative_makers_info_grow_title_underline_url = bdc_get_acf_image_url(
	'creative_makers_info_grow_title_underline',
	bdc_theme_asset_url( 'assets/images/heading-underline.jpeg' ),
	$creative_makers_page_id
);
$creative_makers_info_grow_title_suffix = bdc_get_acf_text(
	'creative_makers_info_grow_title_suffix',
	'Shape the Experience',
	$creative_makers_page_id
);
$creative_makers_info_grow_text = bdc_get_acf_text(
	'creative_makers_info_grow_text',
	'Children bring their own ideas, choose projects that excite them, and help shape what the group creates together. Every session leaves room for curiosity, collaboration, and proud moments of "I made this!"',
	$creative_makers_page_id
);
$creative_makers_info_grow_deco_url = bdc_get_acf_image_url(
	'creative_makers_info_grow_deco',
	bdc_theme_asset_url( 'assets/images/creative-makers-deco-star-removebg-preview.png' ),
	$creative_makers_page_id
);
$creative_makers_info_impact_title = bdc_get_acf_text(
	'creative_makers_info_impact_title',
	'Making an Impact',
	$creative_makers_page_id
);
$creative_makers_info_impact_text = bdc_get_acf_text(
	'creative_makers_info_impact_text',
	'Creative work doesn\'t stay on the table — children share art with the community, gift handmade projects, and learn that small creations can brighten someone\'s day.',
	$creative_makers_page_id
);
$creative_makers_info_impact_deco_url = bdc_get_acf_image_url(
	'creative_makers_info_impact_deco',
	bdc_theme_asset_url( 'assets/images/creative-makers-deco-plant-removebg-preview.png' ),
	$creative_makers_page_id
);

$creative_makers_parents_section_id = bdc_get_acf_text(
	'creative_makers_parents_section_id',
	'creative-makers-parents',
	$creative_makers_page_id
);
$creative_makers_parents_title = bdc_get_acf_text(
	'creative_makers_parents_title',
	'What Parents Should Know',
	$creative_makers_page_id
);
$creative_makers_parents_tablist_aria_label = bdc_get_acf_text(
	'creative_makers_parents_tablist_aria_label',
	'Parent information topics',
	$creative_makers_page_id
);
$creative_makers_parents_faq_items_defaults = array(
	array(
		'panel_slug' => 'expect',
		'tab_label'  => 'What to Expect',
		'panel_text' => 'Sessions blend guided projects with open creative time. Children explore different materials, work individually and in small groups, and share what they make at the end of each experience.',
	),
	array(
		'panel_slug' => 'materials',
		'tab_label'  => 'Materials',
		'panel_text' => 'We provide paints, paper, craft supplies, and safe tools. Children are encouraged to bring found objects for upcycling projects. Aprons and workspace covers help keep messes manageable.',
	),
	array(
		'panel_slug' => 'safety',
		'tab_label'  => 'Safety & Supervision',
		'panel_text' => 'All activities are age-appropriate with adult guidance. Scissors, glue, and paints are introduced with clear safety instructions. Small group sizes ensure every child gets attention and support.',
	),
	array(
		'panel_slug' => 'program',
		'tab_label'  => 'Program Details & Registration',
		'panel_text' => 'Creative Makers runs as part of Bright Dreamers experiences throughout the year. Visit our Get Involved page or contact us to learn about upcoming sessions, age groups, and how to register your child.',
	),
);
$creative_makers_parents_faq_slugs_allowed = array( 'expect', 'materials', 'safety', 'program' );
$creative_makers_parents_faq_items_raw      = bdc_get_acf_repeater( 'creative_makers_parents_faq_items', $creative_makers_parents_faq_items_defaults, $creative_makers_page_id );
$creative_makers_parents_faq_items          = array();

foreach ( $creative_makers_parents_faq_items_raw as $index => $row ) {
	$default = $creative_makers_parents_faq_items_defaults[ $index ] ?? array(
		'panel_slug' => 'expect',
		'tab_label'  => '',
		'panel_text' => '',
	);

	$tab_label  = isset( $row['tab_label'] ) ? trim( (string) $row['tab_label'] ) : '';
	$panel_text = isset( $row['panel_text'] ) ? trim( (string) $row['panel_text'] ) : '';
	$panel_slug = isset( $row['panel_slug'] ) ? sanitize_key( (string) $row['panel_slug'] ) : '';

	if ( ! in_array( $panel_slug, $creative_makers_parents_faq_slugs_allowed, true ) ) {
		$panel_slug = (string) $default['panel_slug'];
	}

	$resolved = array(
		'panel_slug' => $panel_slug,
		'tab_label'  => '' !== $tab_label ? $tab_label : (string) $default['tab_label'],
		'panel_text' => '' !== $panel_text ? $panel_text : (string) $default['panel_text'],
	);

	if ( '' === trim( $resolved['tab_label'] ) && '' === trim( $resolved['panel_text'] ) ) {
		continue;
	}

	$creative_makers_parents_faq_items[] = $resolved;
}

if ( empty( $creative_makers_parents_faq_items ) ) {
	$creative_makers_parents_faq_items = $creative_makers_parents_faq_items_defaults;
}

$creative_makers_cta_aria_label = bdc_get_acf_text(
	'creative_makers_cta_aria_label',
	'Join Creative Makers',
	$creative_makers_page_id
);
$creative_makers_cta_heart_url = bdc_get_acf_image_url(
	'creative_makers_cta_heart',
	bdc_theme_asset_url( 'assets/images/creative-makers-deco-heart-sm.jpeg' ),
	$creative_makers_page_id
);
$creative_makers_cta_text = bdc_get_acf_text(
	'creative_makers_cta_text',
	'Every child has a creative spark. We help them set it free.',
	$creative_makers_page_id
);
$creative_makers_cta_plane_url = bdc_get_acf_image_url(
	'creative_makers_cta_plane',
	bdc_theme_asset_url( 'assets/images/creative-makers-deco-plane-removebg-preview.png' ),
	$creative_makers_page_id
);
$creative_makers_cta_btn_text = bdc_get_acf_text(
	'creative_makers_cta_btn_text',
	'Learn More About This Experience',
	$creative_makers_page_id
);
$creative_makers_cta_btn_link = bdc_get_acf_link(
	'creative_makers_cta_btn_link',
	array(
		'title'  => 'Learn More About This Experience',
		'url'    => bdc_page_url( 'get-involved.html' ),
		'target' => '',
	),
	$creative_makers_page_id
);
?>
    <main id="main-content">
      <?php
      get_template_part(
        'template-parts/page-hero',
        null,
        array(
          'section_class'      => 'creative-makers-hero',
          'labelledby'         => 'creative-makers-title',
          'headline'           => $creative_makers_hero_title,
          'headline_id'        => 'creative-makers-title',
          'supporting_copy'    => bdc_hero_join_copy( $creative_makers_hero_tagline, $creative_makers_hero_text ),
          'primary_cta_text'   => $creative_makers_hero_primary_btn_text,
          'primary_cta_link'   => $creative_makers_hero_primary_btn_link,
          'secondary_cta_text' => $creative_makers_hero_back_text,
          'secondary_cta_link' => $creative_makers_hero_back_link,
          'hero_image'         => $creative_makers_hero_banner_url,
          'hero_image_alt'     => $creative_makers_hero_banner_alt,
          'media_class'        => 'creative-makers-hero__media',
          'image_class'        => 'creative-makers-hero__banner',
        )
      );
      ?>

      <section class="creative-makers-explore" aria-labelledby="creative-makers-explore-title">
        <div class="site-container">
          <h2 class="creative-makers-explore__title" id="creative-makers-explore-title">
            <?php echo esc_html( $creative_makers_explore_title ); ?>
          </h2>

          <?php require get_template_directory() . '/template-parts/creative-makers-explore-grid.php'; ?>
        </div>
      </section>

      <section class="creative-makers-info" aria-label="<?php echo esc_attr( $creative_makers_info_aria_label ); ?>">
        <div class="site-container">
          <?php require get_template_directory() . '/template-parts/creative-makers-info-grid.php'; ?>
        </div>
      </section>

      <section
        class="creative-makers-parents"
        id="<?php echo esc_attr( $creative_makers_parents_section_id ); ?>"
        aria-labelledby="creative-makers-parents-title"
      >
        <div class="site-container">
          <h2 class="creative-makers-parents__title" id="creative-makers-parents-title">
            <?php echo esc_html( $creative_makers_parents_title ); ?>
          </h2>

          <?php require get_template_directory() . '/template-parts/creative-makers-parents-faq.php'; ?>
        </div>
      </section>

      <section class="creative-makers-cta" aria-label="<?php echo esc_attr( $creative_makers_cta_aria_label ); ?>">
        <div class="site-container creative-makers-cta__inner">
          <div class="creative-makers-cta__card">
            <?php if ( '' !== trim( $creative_makers_cta_heart_url ) ) : ?>
            <img
              class="creative-makers-cta__heart"
              src="<?php echo esc_url( $creative_makers_cta_heart_url ); ?>"
              alt=""
              width="28"
              height="28"
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />
            <?php endif; ?>
            <?php if ( '' !== trim( $creative_makers_cta_text ) ) : ?>
            <p class="creative-makers-cta__text">
              <?php echo esc_html( $creative_makers_cta_text ); ?>
            </p>
            <?php endif; ?>
            <?php if ( '' !== trim( $creative_makers_cta_plane_url ) ) : ?>
            <img
              class="creative-makers-cta__plane"
              src="<?php echo esc_url( $creative_makers_cta_plane_url ); ?>"
              alt=""
              width="90"
              height="45"
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />
            <?php endif; ?>
            <?php if ( ! empty( $creative_makers_cta_btn_link['url'] ) && '' !== trim( $creative_makers_cta_btn_text ) ) : ?>
            <a class="btn btn--solid btn--lg btn-hover creative-makers-cta__btn" href="<?php echo esc_url( $creative_makers_cta_btn_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $creative_makers_cta_btn_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
              <?php echo esc_html( $creative_makers_cta_btn_text ); ?>
              <svg
                class="btn__icon"
                viewBox="0 0 24 24"
                width="18"
                height="18"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                aria-hidden="true"
              >
                <path d="M5 12h14M13 6l6 6-6 6" />
              </svg>
            </a>
            <?php endif; ?>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
