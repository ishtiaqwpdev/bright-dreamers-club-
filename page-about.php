<?php
/**
 * About page template — converted from about.html.
 *
 * Template Name: About
 *
 * @package Bright_Dreamers_Club
 */

get_header();

$about_page_id = get_queried_object_id();

$about_hero_lazy_placeholder = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';

$about_hero_eyebrow = bdc_get_acf_text(
	'about_hero_eyebrow',
	'ABOUT US',
	$about_page_id
);
$about_hero_title_line_1 = bdc_get_acf_text(
	'about_hero_title_line_1',
	'Every Child Has a Dream.',
	$about_page_id
);
$about_hero_title_accent = bdc_get_acf_text(
	'about_hero_title_accent',
	'We\'re',
	$about_page_id
);
$about_hero_title_underline_url = bdc_get_acf_image_url(
	'about_hero_title_underline',
	bdc_theme_asset_url( 'assets/images/heading-underline.jpeg' ),
	$about_page_id
);
$about_hero_title_line_2 = bdc_get_acf_text(
	'about_hero_title_line_2',
	'Here to Help It Grow.',
	$about_page_id
);
$about_hero_text = bdc_get_acf_text(
	'about_hero_text',
	'Bright Dreamers is a nonprofit community where children are encouraged to dream freely, explore their ideas, create with confidence, and make a positive difference in the world.',
	$about_page_id
);
$about_hero_primary_btn_text = bdc_get_acf_text(
	'about_hero_primary_btn_text',
	'Apply to Become a Bright Dreamer',
	$about_page_id
);
$about_hero_primary_btn_link = bdc_get_acf_link(
	'about_hero_primary_btn_link',
	array(
		'title'  => '',
		'url'    => bdc_page_url( 'apply-to-become.html' ),
		'target' => '',
	),
	$about_page_id
);
$about_hero_secondary_btn_text = bdc_get_acf_text(
	'about_hero_secondary_btn_text',
	'See Our Vision',
	$about_page_id
);
$about_hero_secondary_btn_link = bdc_get_acf_link(
	'about_hero_secondary_btn_link',
	array(
		'title'  => '',
		'url'    => bdc_page_url( 'our-vision.html' ),
		'target' => '',
	),
	$about_page_id
);
$about_hero_banner_url = bdc_get_acf_image_url(
	'about_hero_banner',
	bdc_theme_asset_url( 'assets/images/about-banner.png' ),
	$about_page_id
);
$about_hero_banner_alt = bdc_get_acf_text(
	'about_hero_banner_alt',
	'Children creating art together at Bright Dreamers Club',
	$about_page_id
);
?>
    <main id="main-content">
      <section class="page-hero about-hero" aria-label="About Bright Dreamers">
        <div class="site-container page-hero__inner">
          <div class="page-hero__content">
            <p class="about-hero__eyebrow"><?php echo esc_html( $about_hero_eyebrow ); ?></p>

            <h1 class="about-hero__title">
              <?php if ( '' !== trim( $about_hero_title_line_1 ) ) : ?>
              <span class="about-hero__title-line about-hero__title-line--navy">
                <?php echo esc_html( $about_hero_title_line_1 ); ?>
              </span>
              <?php endif; ?>
              <?php if ( '' !== trim( $about_hero_title_accent ) || '' !== trim( $about_hero_title_line_2 ) ) : ?>
              <span class="about-hero__title-line about-hero__title-line--pink">
                <?php if ( '' !== trim( $about_hero_title_accent ) ) : ?>
                <span class="heading-underline">
                  <?php echo esc_html( $about_hero_title_accent ); ?>
                  <img
                    class="heading-underline__img"
                    src="<?php echo esc_url( $about_hero_title_underline_url ); ?>"
                    alt=""
                    width="120"
                    height="12"
                  />
                </span>
                <?php endif; ?>
                <?php if ( '' !== trim( $about_hero_title_line_2 ) ) : ?>
                <?php echo ( '' !== trim( $about_hero_title_accent ) ) ? ' ' : ''; ?><?php echo esc_html( $about_hero_title_line_2 ); ?>
                <?php endif; ?>
              </span>
              <?php endif; ?>
            </h1>

            <?php if ( '' !== trim( $about_hero_text ) ) : ?>
            <p class="page-hero__text">
              <?php echo esc_html( $about_hero_text ); ?>
            </p>
            <?php endif; ?>

            <div class="page-hero__actions">
              <?php if ( ! empty( $about_hero_primary_btn_link['url'] ) && '' !== trim( $about_hero_primary_btn_text ) ) : ?>
              <a class="btn btn--solid btn--lg btn-hover" href="<?php echo esc_url( $about_hero_primary_btn_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $about_hero_primary_btn_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
                <svg
                  class="btn__icon btn__icon--star"
                  viewBox="0 0 24 24"
                  fill="var(--color-yellow)"
                  aria-hidden="true"
                >
                  <path
                    d="M12 2l2.4 4.9 5.4.8-3.9 3.8.9 5.4L12 14.8 7.2 17l.9-5.4L4.2 7.7l5.4-.8L12 2z"
                  />
                </svg>
                <?php echo esc_html( $about_hero_primary_btn_text ); ?>
              </a>
              <?php endif; ?>
              <?php if ( ! empty( $about_hero_secondary_btn_link['url'] ) && '' !== trim( $about_hero_secondary_btn_text ) ) : ?>
              <a class="btn btn--outline btn--lg btn-hover" href="<?php echo esc_url( $about_hero_secondary_btn_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $about_hero_secondary_btn_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
                <?php echo esc_html( $about_hero_secondary_btn_text ); ?>
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
              <?php endif; ?>
            </div>
          </div>

          <div class="about-hero__media">
            <div class="lazy-img-wrap">
              <img
                class="about-hero__banner lazy-img"
                src="<?php echo esc_attr( $about_hero_lazy_placeholder ); ?>"
                data-src="<?php echo esc_url( $about_hero_banner_url ); ?>"
                alt="<?php echo esc_attr( $about_hero_banner_alt ); ?>"
                width="1200"
                height="900"
                decoding="async"
              />
            </div>
          </div>
        </div>
      </section>

      <section class="our-story" aria-label="Our Story">
        <div class="site-container">
          <div class="our-story__card">
            <div class="our-story__inner">
              <div class="our-story__media">
                <div class="lazy-img-wrap">
                  <img
                    class="our-story__photo lazy-img"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                    data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/our-story-photo.png' ); ?>"
                    alt="Two Bright Dreamers holding a sign that reads Our Ideas Can Change The World"
                    width="900"
                    height="900"
                    decoding="async"
                  />
                </div>
              </div>

              <div class="our-story__content">
                <h2 class="our-story__title">
                  Our Story
                  <svg
                    class="our-story__title-icon"
                    viewBox="0 0 24 24"
                    width="24"
                    height="24"
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

                <p class="our-story__text">
                  It started at home. Bright Dreamers began with two little girls
                  full of imagination. Every day they asked questions, invented
                  ideas, designed projects, and dreamed about making the world a
                  little brighter.
                </p>

                <p class="our-story__text">
                  Watching them made us realize something important&hellip;
                </p>

                <p class="our-story__text our-story__text--highlight">
                  Children don't need someone to tell them what to dream. They
                  need someone who believes in their dreams.
                </p>

                <p class="our-story__text our-story__text--last">
                  Today, we're building a small, intentional nonprofit community
                  where children have opportunities to discover their talents,
                  explore their own ideas, and grow into confident, kind, and
                  creative people.
                </p>
              </div>

              <div class="our-story__aside">
                <div class="lazy-img-wrap">
                  <img
                    class="our-story__jar lazy-img"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                    data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/our-story-jar.png' ); ?>"
                    alt=""
                    width="400"
                    height="500"
                    decoding="async"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="we-believe" aria-label="We Believe">
        <div class="site-container we-believe__inner">
          <h2 class="we-believe__title">
            We Believe
            <svg
              class="we-believe__title-icon"
              viewBox="0 0 24 24"
              width="24"
              height="24"
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

          <div class="we-believe__row">
            <img
              class="we-believe__deco we-believe__deco--left"
              src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/believe-deco-dots-removebg-preview.png' ); ?>"
              alt=""
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />

            <div class="we-believe__slider" role="list">
              <article class="believe-card believe-card--pink" role="listitem">
                <img
                  class="believe-card__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/believe-icon-star.png' ); ?>"
                  alt=""
                  width="64"
                  height="64"
                  loading="lazy"
                />
                <p class="believe-card__text">Every child has unique talents.</p>
              </article>

              <article class="believe-card believe-card--purple" role="listitem">
                <img
                  class="believe-card__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/believe-icon-heart.png' ); ?>"
                  alt=""
                  width="64"
                  height="64"
                  loading="lazy"
                />
                <p class="believe-card__text">Every idea deserves to be heard.</p>
              </article>

              <article class="believe-card believe-card--yellow" role="listitem">
                <img
                  class="believe-card__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/believe-icon-palette-removebg-preview.png' ); ?>"
                  alt=""
                  width="64"
                  height="64"
                  loading="lazy"
                />
                <p class="believe-card__text">Creativity builds confidence.</p>
              </article>

              <article class="believe-card believe-card--green" role="listitem">
                <img
                  class="believe-card__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/believe-icon-people.png' ); ?>"
                  alt=""
                  width="64"
                  height="64"
                  loading="lazy"
                />
                <p class="believe-card__text">Children learn by doing.</p>
              </article>

              <article class="believe-card believe-card--peach" role="listitem">
                <img
                  class="believe-card__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/believe-icon-leaf.png' ); ?>"
                  alt=""
                  width="64"
                  height="64"
                  loading="lazy"
                />
                <p class="believe-card__text">Kindness changes communities.</p>
              </article>

              <article class="believe-card believe-card--blue" role="listitem">
                <img
                  class="believe-card__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/believe-icon-sparkles.png' ); ?>"
                  alt=""
                  width="64"
                  height="64"
                  loading="lazy"
                />
                <p class="believe-card__text">
                  Dreams become real when we work together.
                </p>
              </article>
            </div>

            <img
              class="we-believe__deco we-believe__deco--right"
              src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/believe-deco-dots-removebg-preview (1).png' ); ?>"
              alt=""
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />
          </div>
        </div>
      </section>

      <section class="about-panels" aria-label="How Bright Dreamers works">
        <div class="site-container about-panels__inner">
          <div class="about-panels__grid">
            <article
              class="panel-card panel-card--journey"
              aria-label="Children Lead the Journey — a Bright Dreamer holding a sign that reads My idea Can Help Others"
            >
              <div class="panel-card__content">
                <h3 class="panel-card__title">
                  Children Lead the Journey
                  <svg
                    class="panel-card__title-icon panel-card__title-icon--crown"
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

                <div class="panel-card__copy">
                  <p>
                    At Bright Dreamers, children are not just participants. They
                    are creators. Dreamers. Problem solvers. Idea makers.
                  </p>
                  <p>
                    Many of our projects begin with children's own ideas. Adults
                    guide, encourage, and provide a safe environment—but we
                    believe the best ideas often come from children themselves.
                  </p>
                  <p>
                    Together we turn imagination into real projects that help
                    others.
                  </p>
                </div>

                <svg
                  class="panel-card__deco-heart"
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
              </div>

              <div class="panel-card__figure">
                <img
                  class="panel-card__figure-img"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/panel-journey-girl-removebg-preview.png' ); ?>"
                  alt="A Bright Dreamer holding a sign that says My idea Can Help Others"
                  width="400"
                  height="400"
                  loading="lazy"
                  decoding="async"
                />
              </div>
            </article>

            <article class="panel-card panel-card--council">
              <div class="panel-card__content">
                <h3 class="panel-card__title">
                  Young Dreamers Council
                  <svg
                    class="panel-card__title-icon panel-card__title-icon--star"
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

                <p class="panel-card__lead">
                  Bright Dreamers believes children's voices matter.
                </p>

                <ul class="panel-card__list">
                  <li>Share ideas</li>
                  <li>Suggest projects</li>
                  <li>Identify causes they care about</li>
                  <li>Vote on activities</li>
                  <li>Help shape the future</li>
                </ul>

                <p class="panel-card__note">
                  Adult mentors guide and support them every step of the way.
                </p>
              </div>

              <div class="panel-card__figure">
                <div class="lazy-img-wrap">
                  <img
                    class="panel-card__figure-img lazy-img"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                    data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/panel-council-figures-removebg-preview.png' ); ?>"
                    alt=""
                    width="400"
                    height="400"
                    decoding="async"
                  />
                </div>
              </div>
            </article>

            <article class="panel-card panel-card--role">
              <div class="panel-card__content panel-card__content--full">
                <h3 class="panel-card__title">
                  Our Role
                  <img
                    class="panel-card__title-icon panel-card__title-icon--img"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/role-heart-outline.png' ); ?>"
                    alt=""
                    width="24"
                    height="24"
                    loading="lazy"
                  />
                </h3>

                <p class="panel-card__lead panel-card__lead--tight">We are&hellip;</p>

                <div class="role-icons" role="list">
                  <div class="role-icons__item" role="listitem">
                    <img
                      class="role-icons__img"
                      src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/role-icon-heart.jpeg' ); ?>"
                      alt=""
                      width="64"
                      height="64"
                      loading="lazy"
                    />
                    <span class="role-icons__label">Encouragers</span>
                  </div>
                  <div class="role-icons__item" role="listitem">
                    <img
                      class="role-icons__img"
                      src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/role-icon-palette.jpeg' ); ?>"
                      alt=""
                      width="64"
                      height="64"
                      loading="lazy"
                    />
                    <span class="role-icons__label">Creators</span>
                  </div>
                  <div class="role-icons__item" role="listitem">
                    <img
                      class="role-icons__img"
                      src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/role-icon-leaf.jpeg' ); ?>"
                      alt=""
                      width="64"
                      height="64"
                      loading="lazy"
                    />
                    <span class="role-icons__label">Mentors</span>
                  </div>
                  <div class="role-icons__item" role="listitem">
                    <img
                      class="role-icons__img"
                      src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/role-icon-ear.jpeg' ); ?>"
                      alt=""
                      width="64"
                      height="64"
                      loading="lazy"
                    />
                    <span class="role-icons__label">Listeners</span>
                  </div>
                  <div class="role-icons__item" role="listitem">
                    <img
                      class="role-icons__img"
                      src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/role-icon-star.jpeg' ); ?>"
                      alt=""
                      width="64"
                      height="64"
                      loading="lazy"
                    />
                    <span class="role-icons__label">Supporters</span>
                  </div>
                </div>

                <div class="role-callout">
                  <img
                    class="role-callout__icon"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/believe-icon-people.png' ); ?>"
                    alt=""
                    width="48"
                    height="48"
                    loading="lazy"
                  />
                  <p class="role-callout__text">
                    <strong>Not instructors. Not lecturers.</strong>
                    We walk beside children on their journey.
                  </p>
                  <img
                    class="role-callout__heart"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/role-heart-outline.png' ); ?>"
                    alt=""
                    width="36"
                    height="36"
                    loading="lazy"
                  />
                </div>
              </div>
            </article>

            <article class="panel-card panel-card--approach">
              <div class="panel-card__content panel-card__content--full">
                <h3 class="panel-card__title">
                  Our Approach
                  <svg
                    class="panel-card__title-icon panel-card__title-icon--star"
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

                <div class="approach-steps" role="list">
                  <div class="approach-step" role="listitem">
                    <img
                      class="approach-step__icon"
                      src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/approach-dream.jpeg' ); ?>"
                      alt=""
                      width="72"
                      height="72"
                      loading="lazy"
                    />
                    <p class="approach-step__title">Dream</p>
                    <p class="approach-step__text">Imagine possibilities.</p>
                  </div>

                  <img
                    class="approach-step__arrow"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/approach-arrow.jpeg' ); ?>"
                    alt=""
                    width="32"
                    height="16"
                    loading="lazy"
                  />

                  <div class="approach-step" role="listitem">
                    <img
                      class="approach-step__icon"
                      src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/approach-create.jpeg' ); ?>"
                      alt=""
                      width="72"
                      height="72"
                      loading="lazy"
                    />
                    <p class="approach-step__title">Create</p>
                    <p class="approach-step__text">Build something meaningful.</p>
                  </div>

                  <img
                    class="approach-step__arrow"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/approach-arrow.jpeg' ); ?>"
                    alt=""
                    width="32"
                    height="16"
                    loading="lazy"
                  />

                  <div class="approach-step" role="listitem">
                    <img
                      class="approach-step__icon"
                      src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/approach-grow.jpeg' ); ?>"
                      alt=""
                      width="72"
                      height="72"
                      loading="lazy"
                    />
                    <p class="approach-step__title">Grow</p>
                    <p class="approach-step__text">Learn through experience.</p>
                  </div>

                  <img
                    class="approach-step__arrow"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/approach-arrow.jpeg' ); ?>"
                    alt=""
                    width="32"
                    height="16"
                    loading="lazy"
                  />

                  <div class="approach-step" role="listitem">
                    <img
                      class="approach-step__icon"
                      src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/approach-share.jpeg' ); ?>"
                      alt=""
                      width="72"
                      height="72"
                      loading="lazy"
                    />
                    <p class="approach-step__title">Share</p>
                    <p class="approach-step__text">Present ideas confidently.</p>
                  </div>

                  <img
                    class="approach-step__arrow"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/approach-arrow.jpeg' ); ?>"
                    alt=""
                    width="32"
                    height="16"
                    loading="lazy"
                  />

                  <div class="approach-step" role="listitem">
                    <img
                      class="approach-step__icon"
                      src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/approach-give.jpeg' ); ?>"
                      alt=""
                      width="72"
                      height="72"
                      loading="lazy"
                    />
                    <p class="approach-step__title">Give</p>
                    <p class="approach-step__text">Use creativity to help others.</p>
                  </div>
                </div>
              </div>
            </article>
          </div>
        </div>
      </section>

      <section class="compare-different" aria-labelledby="compare-different-title">
        <div class="site-container compare-different__wrap">
          <h2 class="compare-different__title" id="compare-different-title">
            What Makes Bright Dreamers Different?
            <img
              class="compare-different__heart"
              src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/role-heart-outline.png' ); ?>"
              alt=""
              width="24"
              height="24"
              loading="lazy"
            />
          </h2>

          <div class="compare-different__bar">
            <div class="compare-side compare-side--left">
              <div class="lazy-img-wrap lazy-img-wrap--fill">
                <img
                  class="compare-side__photo lazy-img"
                  src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                  data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/compare-left-photo.jpeg' ); ?>"
                  alt="Children walking together in a field at sunset"
                  width="600"
                  height="400"
                  decoding="async"
                />
              </div>
              <div class="compare-side__text">
                <p class="compare-side__label">Many programs focus on</p>
                <ul class="compare-side__list">
                  <li>
                    <img
                      class="compare-side__mark"
                      src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/compare-icon-x.jpeg' ); ?>"
                      alt=""
                      width="24"
                      height="24"
                      loading="lazy"
                    />
                    Following instructions
                  </li>
                  <li>
                    <img
                      class="compare-side__mark"
                      src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/compare-icon-x.jpeg' ); ?>"
                      alt=""
                      width="24"
                      height="24"
                      loading="lazy"
                    />
                    One right answer
                  </li>
                  <li>
                    <img
                      class="compare-side__mark"
                      src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/compare-icon-x.jpeg' ); ?>"
                      alt=""
                      width="24"
                      height="24"
                      loading="lazy"
                    />
                    Adult-led activities
                  </li>
                  <li>
                    <img
                      class="compare-side__mark"
                      src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/compare-icon-x.jpeg' ); ?>"
                      alt=""
                      width="24"
                      height="24"
                      loading="lazy"
                    />
                    Finished projects
                  </li>
                </ul>
              </div>
            </div>

            <div class="compare-different__vs" aria-hidden="true">
              <img
                class="compare-different__vs-badge"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/compare-vs-badge.jpeg' ); ?>"
                alt=""
                width="56"
                height="56"
                loading="lazy"
              />
            </div>

            <div class="compare-side compare-side--right">
              <div class="compare-side__text">
                <p class="compare-side__label">Bright Dreamers focuses on</p>
                <ul class="compare-side__list compare-side__list--grid">
                  <li>
                    <img
                      class="compare-side__mark"
                      src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/compare-icon-check.jpeg' ); ?>"
                      alt=""
                      width="24"
                      height="24"
                      loading="lazy"
                    />
                    Children's ideas
                  </li>
                  <li>
                    <img
                      class="compare-side__mark"
                      src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/compare-icon-check.jpeg' ); ?>"
                      alt=""
                      width="24"
                      height="24"
                      loading="lazy"
                    />
                    Creativity
                  </li>
                  <li>
                    <img
                      class="compare-side__mark"
                      src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/compare-icon-check.jpeg' ); ?>"
                      alt=""
                      width="24"
                      height="24"
                      loading="lazy"
                    />
                    Exploration
                  </li>
                  <li>
                    <img
                      class="compare-side__mark"
                      src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/compare-icon-check.jpeg' ); ?>"
                      alt=""
                      width="24"
                      height="24"
                      loading="lazy"
                    />
                    Teamwork
                  </li>
                  <li>
                    <img
                      class="compare-side__mark"
                      src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/compare-icon-check.jpeg' ); ?>"
                      alt=""
                      width="24"
                      height="24"
                      loading="lazy"
                    />
                    Leadership
                  </li>
                  <li>
                    <img
                      class="compare-side__mark"
                      src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/compare-icon-check.jpeg' ); ?>"
                      alt=""
                      width="24"
                      height="24"
                      loading="lazy"
                    />
                    Community impact
                  </li>
                  <li>
                    <img
                      class="compare-side__mark"
                      src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/compare-icon-check.jpeg' ); ?>"
                      alt=""
                      width="24"
                      height="24"
                      loading="lazy"
                    />
                    Kindness
                  </li>
                </ul>
              </div>
              <div class="lazy-img-wrap lazy-img-wrap--fill">
                <img
                  class="compare-side__photo lazy-img"
                  src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                  data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/compare-right-photo.jpeg' ); ?>"
                  alt="Children planting together in a garden"
                  width="600"
                  height="400"
                  decoding="async"
                />
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
