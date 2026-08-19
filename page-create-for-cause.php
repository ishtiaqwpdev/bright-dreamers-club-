<?php
/**
 * Create for a Cause page template — converted from create-for-cause.html.
 *
 * Template Name: Create for a Cause
 *
 * @package Bright_Dreamers_Club
 */

get_header();

$create_for_cause_page_id = get_queried_object_id();

$create_for_cause_hero_lazy_placeholder = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';

$create_for_cause_hero_breadcrumb_home_text = bdc_get_acf_text(
	'create_for_cause_hero_breadcrumb_home_text',
	'Home',
	$create_for_cause_page_id
);
$create_for_cause_hero_breadcrumb_home_link = bdc_get_acf_link(
	'create_for_cause_hero_breadcrumb_home_link',
	array(
		'title'  => 'Home',
		'url'    => bdc_page_url( 'index.html' ),
		'target' => '',
	),
	$create_for_cause_page_id
);
$create_for_cause_hero_breadcrumb_parent_text = bdc_get_acf_text(
	'create_for_cause_hero_breadcrumb_parent_text',
	'Explore',
	$create_for_cause_page_id
);
$create_for_cause_hero_breadcrumb_parent_link = bdc_get_acf_link(
	'create_for_cause_hero_breadcrumb_parent_link',
	array(
		'title'  => 'Explore',
		'url'    => bdc_page_url( 'explore.html' ),
		'target' => '',
	),
	$create_for_cause_page_id
);
$create_for_cause_hero_breadcrumb_current_text = bdc_get_acf_text(
	'create_for_cause_hero_breadcrumb_current_text',
	'Create for a Cause',
	$create_for_cause_page_id
);
$create_for_cause_hero_title = bdc_get_acf_text(
	'create_for_cause_hero_title',
	'Create for a Cause',
	$create_for_cause_page_id
);
$create_for_cause_hero_tagline = bdc_get_acf_text(
	'create_for_cause_hero_tagline',
	'Create with heart. Make a difference.',
	$create_for_cause_page_id
);
$create_for_cause_hero_text = bdc_get_acf_text(
	'create_for_cause_hero_text',
	'In this experience, children use their creativity to support causes they care about. They plan projects, make items, raise awareness, and give back to the community through their own creations.',
	$create_for_cause_page_id
);
$create_for_cause_hero_primary_btn_text = bdc_get_acf_text(
	'create_for_cause_hero_primary_btn_text',
	'Learn More About This Experience',
	$create_for_cause_page_id
);
$create_for_cause_hero_primary_btn_link = bdc_get_acf_link(
	'create_for_cause_hero_primary_btn_link',
	array(
		'title'  => 'Learn More About This Experience',
		'url'    => '#create-for-cause-parents',
		'target' => '',
	),
	$create_for_cause_page_id
);
$create_for_cause_hero_back_text = bdc_get_acf_text(
	'create_for_cause_hero_back_text',
	'Back to All Experiences',
	$create_for_cause_page_id
);
$create_for_cause_hero_back_link = bdc_get_acf_link(
	'create_for_cause_hero_back_link',
	array(
		'title'  => 'Back to All Experiences',
		'url'    => bdc_page_url( 'explore.html' ),
		'target' => '',
	),
	$create_for_cause_page_id
);
$create_for_cause_hero_banner_url = bdc_get_acf_image_url(
	'create_for_cause_hero_banner',
	bdc_theme_asset_url( 'assets/images/46fd4d76-4bf8-4376-aa4f-fa8a19c43d33.png' ),
	$create_for_cause_page_id
);
$create_for_cause_hero_banner_alt = bdc_get_acf_text(
	'create_for_cause_hero_banner_alt',
	'Three children holding a colorful handmade thank-you sign',
	$create_for_cause_page_id
);

$create_for_cause_explore_title = bdc_get_acf_text(
	'create_for_cause_explore_title',
	'Children Explore',
	$create_for_cause_page_id
);
$create_for_cause_explore_activities_defaults = array(
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/create-for-cause-icon-kindness.png' ),
		'title'      => 'Kindness Projects',
		'color_slug' => 'paint',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/create-for-cause-icon-donation.png' ),
		'title'      => 'Donation Drives',
		'color_slug' => 'crafts',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/create-for-cause-icon-care.png' ),
		'title'      => 'Care Packages',
		'color_slug' => 'media',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/create-for-cause-icon-awareness.png' ),
		'title'      => 'Awareness Campaigns',
		'color_slug' => 'design',
	),
	array(
		'icon'       => bdc_theme_asset_url( 'assets/images/create-for-cause-icon-events.png' ),
		'title'      => 'Helping Events',
		'color_slug' => 'upcycle',
	),
);
$create_for_cause_explore_color_slugs_allowed = array( 'paint', 'crafts', 'media', 'design', 'upcycle' );
$create_for_cause_explore_activities_raw      = bdc_get_acf_repeater( 'create_for_cause_explore_activities', $create_for_cause_explore_activities_defaults, $create_for_cause_page_id );
$create_for_cause_explore_activities          = array();

foreach ( $create_for_cause_explore_activities_raw as $index => $row ) {
	$default = $create_for_cause_explore_activities_defaults[ $index ] ?? array(
		'icon'       => '',
		'title'      => '',
		'color_slug' => 'paint',
	);

	$title = isset( $row['title'] ) ? trim( (string) $row['title'] ) : '';

	$color_slug = isset( $row['color_slug'] ) ? sanitize_key( (string) $row['color_slug'] ) : '';
	if ( ! in_array( $color_slug, $create_for_cause_explore_color_slugs_allowed, true ) ) {
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

	$create_for_cause_explore_activities[] = $resolved;
}

if ( empty( $create_for_cause_explore_activities ) ) {
	$create_for_cause_explore_activities = $create_for_cause_explore_activities_defaults;
}
?>
    <main id="main-content" class="create-for-cause-page">
      <section class="page-hero creative-makers-hero create-for-cause-hero" aria-labelledby="create-for-cause-title">
        <div class="site-container creative-makers-hero__wrap">
          <div class="creative-makers-hero__inner page-hero__inner">
            <div class="page-hero__content creative-makers-hero__content">
              <nav class="creative-makers-breadcrumbs" aria-label="Breadcrumb">
                <ol class="creative-makers-breadcrumbs__list">
                  <?php if ( ! empty( $create_for_cause_hero_breadcrumb_home_link['url'] ) && '' !== trim( $create_for_cause_hero_breadcrumb_home_text ) ) : ?>
                  <li><a href="<?php echo esc_url( $create_for_cause_hero_breadcrumb_home_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $create_for_cause_hero_breadcrumb_home_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>><?php echo esc_html( $create_for_cause_hero_breadcrumb_home_text ); ?></a></li>
                  <?php endif; ?>
                  <?php if ( ! empty( $create_for_cause_hero_breadcrumb_parent_link['url'] ) && '' !== trim( $create_for_cause_hero_breadcrumb_parent_text ) ) : ?>
                  <li><a href="<?php echo esc_url( $create_for_cause_hero_breadcrumb_parent_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $create_for_cause_hero_breadcrumb_parent_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>><?php echo esc_html( $create_for_cause_hero_breadcrumb_parent_text ); ?></a></li>
                  <?php endif; ?>
                  <?php if ( '' !== trim( $create_for_cause_hero_breadcrumb_current_text ) ) : ?>
                  <li aria-current="page"><?php echo esc_html( $create_for_cause_hero_breadcrumb_current_text ); ?></li>
                  <?php endif; ?>
                </ol>
              </nav>

              <?php if ( '' !== trim( $create_for_cause_hero_title ) ) : ?>
              <h1 class="creative-makers-hero__title" id="create-for-cause-title">
                <?php echo esc_html( $create_for_cause_hero_title ); ?>
              </h1>
              <?php endif; ?>

              <?php if ( '' !== trim( $create_for_cause_hero_tagline ) ) : ?>
              <p class="creative-makers-hero__tagline">
                <?php echo esc_html( $create_for_cause_hero_tagline ); ?>
              </p>
              <?php endif; ?>

              <?php if ( '' !== trim( $create_for_cause_hero_text ) ) : ?>
              <p class="creative-makers-hero__text">
                <?php echo esc_html( $create_for_cause_hero_text ); ?>
              </p>
              <?php endif; ?>

              <div class="page-hero__actions creative-makers-hero__actions">
                <?php if ( ! empty( $create_for_cause_hero_primary_btn_link['url'] ) && '' !== trim( $create_for_cause_hero_primary_btn_text ) ) : ?>
                <a class="btn btn--solid btn--lg btn-hover" href="<?php echo esc_url( $create_for_cause_hero_primary_btn_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $create_for_cause_hero_primary_btn_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
                  <?php echo esc_html( $create_for_cause_hero_primary_btn_text ); ?>
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
                <?php if ( ! empty( $create_for_cause_hero_back_link['url'] ) && '' !== trim( $create_for_cause_hero_back_text ) ) : ?>
                <a class="creative-makers-hero__back" href="<?php echo esc_url( $create_for_cause_hero_back_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $create_for_cause_hero_back_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
                  <svg
                    viewBox="0 0 24 24"
                    width="16"
                    height="16"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    aria-hidden="true"
                  >
                    <path d="M19 12H5M11 6l-6 6 6 6" />
                  </svg>
                  <?php echo esc_html( $create_for_cause_hero_back_text ); ?>
                </a>
                <?php endif; ?>
              </div>
            </div>

            <div class="creative-makers-hero__media">
              <div class="lazy-img-wrap">
                <img
                  class="creative-makers-hero__banner lazy-img"
                  src="<?php echo esc_attr( $create_for_cause_hero_lazy_placeholder ); ?>"
                  data-src="<?php echo esc_url( $create_for_cause_hero_banner_url ); ?>"
                  alt="<?php echo esc_attr( $create_for_cause_hero_banner_alt ); ?>"
                  width="1200"
                  height="720"
                  decoding="async"
                />
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="creative-makers-explore" aria-labelledby="create-for-cause-explore-title">
        <div class="site-container">
          <h2 class="creative-makers-explore__title" id="create-for-cause-explore-title">
            <?php echo esc_html( $create_for_cause_explore_title ); ?>
          </h2>

          <?php require get_template_directory() . '/template-parts/create-for-cause-explore-grid.php'; ?>
        </div>
      </section>

      <section class="creative-makers-info" aria-label="Skills, growth, and impact">
        <div class="site-container">
          <div class="creative-makers-info__grid">
            <article class="creative-makers-info-card creative-makers-info-card--skills">
              <h2 class="creative-makers-info-card__title">Skills Children Naturally Build</h2>
              <ul class="creative-makers-info-card__list">
                <li>
                  <span class="creative-makers-info-card__check" aria-hidden="true">
                    <svg viewBox="0 0 24 24" width="11" height="11" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7" /></svg>
                  </span>
                  Empathy
                </li>
                <li>
                  <span class="creative-makers-info-card__check" aria-hidden="true">
                    <svg viewBox="0 0 24 24" width="11" height="11" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7" /></svg>
                  </span>
                  Responsibility
                </li>
                <li>
                  <span class="creative-makers-info-card__check" aria-hidden="true">
                    <svg viewBox="0 0 24 24" width="11" height="11" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7" /></svg>
                  </span>
                  Teamwork
                </li>
                <li>
                  <span class="creative-makers-info-card__check" aria-hidden="true">
                    <svg viewBox="0 0 24 24" width="11" height="11" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7" /></svg>
                  </span>
                  Leadership
                </li>
                <li>
                  <span class="creative-makers-info-card__check" aria-hidden="true">
                    <svg viewBox="0 0 24 24" width="11" height="11" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7" /></svg>
                  </span>
                  Communication
                </li>
              </ul>
              <span class="creative-makers-info-card__deco-box creative-makers-info-card__deco-box--star" aria-hidden="true">
                <img
                  class="creative-makers-info-card__deco"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/create-for-cause-deco-star.png' ); ?>"
                  alt=""
                  loading="lazy"
                  decoding="async"
                />
              </span>
            </article>

            <article class="creative-makers-info-card creative-makers-info-card--grow">
              <h2 class="creative-makers-info-card__title creative-makers-info-card__title--pink">
                Children Grow Shape the Experience
              </h2>
              <p class="creative-makers-info-card__text">
                Children choose causes, plan projects, and decide how they want to
                help others.
              </p>
              <span class="creative-makers-info-card__deco-box creative-makers-info-card__deco-box--heart" aria-hidden="true">
                <img
                  class="creative-makers-info-card__deco"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/create-for-cause-deco-heart.png' ); ?>"
                  alt=""
                  loading="lazy"
                  decoding="async"
                />
              </span>
            </article>

            <article class="creative-makers-info-card creative-makers-info-card--impact">
              <h2 class="creative-makers-info-card__title">Making an Impact</h2>
              <p class="creative-makers-info-card__text">
                Children learn that their actions&mdash;big or small&mdash;can bring
                hope, support, and positive change to people and places in need.
              </p>
              <span class="creative-makers-info-card__deco-box creative-makers-info-card__deco-box--plant" aria-hidden="true">
                <img
                  class="creative-makers-info-card__deco"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/create-for-cause-deco-plant.png' ); ?>"
                  alt=""
                  loading="lazy"
                  decoding="async"
                />
              </span>
            </article>
          </div>
        </div>
      </section>

      <section
        class="creative-makers-parents"
        id="create-for-cause-parents"
        aria-labelledby="create-for-cause-parents-title"
      >
        <div class="site-container">
          <h2 class="creative-makers-parents__title" id="create-for-cause-parents-title">
            What Parents Should Know
          </h2>

          <div class="creative-makers-parents__accordion">
            <input
              class="creative-makers-faq__input"
              type="radio"
              name="create-for-cause-faq"
              id="create-for-cause-faq-expect"
              checked
            />
            <input
              class="creative-makers-faq__input"
              type="radio"
              name="create-for-cause-faq"
              id="create-for-cause-faq-materials"
            />
            <input
              class="creative-makers-faq__input"
              type="radio"
              name="create-for-cause-faq"
              id="create-for-cause-faq-safety"
            />
            <input
              class="creative-makers-faq__input"
              type="radio"
              name="create-for-cause-faq"
              id="create-for-cause-faq-program"
            />

            <div class="creative-makers-parents__tablist" role="tablist" aria-label="Parent information topics">
              <label class="creative-makers-faq__tab" for="create-for-cause-faq-expect" role="tab">
                What to Expect
              </label>
              <label class="creative-makers-faq__tab" for="create-for-cause-faq-materials" role="tab">
                Materials
              </label>
              <label class="creative-makers-faq__tab" for="create-for-cause-faq-safety" role="tab">
                Safety &amp; Supervision
              </label>
              <label class="creative-makers-faq__tab" for="create-for-cause-faq-program" role="tab">
                Program Details &amp; Registration
              </label>
            </div>

            <div class="creative-makers-parents__panels">
              <article
                class="creative-makers-faq__panel creative-makers-faq__panel--expect"
                role="tabpanel"
                aria-labelledby="create-for-cause-faq-expect"
              >
                <p>
                  Sessions blend creative projects with a community purpose. Children
                  work individually and in teams to plan, create, and share projects
                  that support causes they care about.
                </p>
              </article>

              <article
                class="creative-makers-faq__panel creative-makers-faq__panel--materials"
                role="tabpanel"
                aria-labelledby="create-for-cause-faq-materials"
              >
                <p>
                  We provide craft supplies, packaging materials, and display items
                  for awareness projects. Children may also bring items to donate or
                  upcycle. All materials are age-appropriate and safe to use.
                </p>
              </article>

              <article
                class="creative-makers-faq__panel creative-makers-faq__panel--safety"
                role="tabpanel"
                aria-labelledby="create-for-cause-faq-safety"
              >
                <p>
                  All activities are age-appropriate with adult guidance. Scissors,
                  glue, and tools are introduced with clear safety instructions.
                  Small group sizes ensure every child gets attention and support.
                </p>
              </article>

              <article
                class="creative-makers-faq__panel creative-makers-faq__panel--program"
                role="tabpanel"
                aria-labelledby="create-for-cause-faq-program"
              >
                <p>
                  Create for a Cause runs as part of Bright Dreamers experiences
                  throughout the year. Visit our Get Involved page or contact us to
                  learn about upcoming sessions, age groups, and how to register
                  your child.
                </p>
              </article>
            </div>
          </div>
        </div>
      </section>

      <section class="creative-makers-cta" aria-label="Join Create for a Cause">
        <div class="site-container creative-makers-cta__inner">
          <div class="creative-makers-cta__card">
            <img
              class="creative-makers-cta__heart"
              src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/adda1b2f-6762-4f43-a19f-91248315eaa2-removebg-preview.png' ); ?>"
              alt=""
              width="28"
              height="28"
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />
            <p class="creative-makers-cta__text">
              Small acts of kindness can create big change.
            </p>
            <img
              class="creative-makers-cta__plane"
              src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/e1649e8e-1d0b-4c20-aba2-bfb8efc76209-removebg-preview.png' ); ?>"
              alt=""
              width="150"
              height="75"
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />
            <a class="btn btn--solid btn--lg btn-hover creative-makers-cta__btn" href="<?php echo esc_url( bdc_page_url( 'get-involved.html' ) ); ?>">
              Learn More About This Experience
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
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
