<?php
/**
 * Community Adventures page template — converted from community-adventures.html.
 *
 * Template Name: Community Adventures
 *
 * @package Bright_Dreamers_Club
 */

get_header();
?>
    <main id="main-content" class="community-adventures-page">
      <section class="page-hero creative-makers-hero community-adventures-hero" aria-labelledby="community-adventures-title">
        <div class="site-container creative-makers-hero__wrap">
          <div class="creative-makers-hero__inner page-hero__inner">
            <div class="page-hero__content creative-makers-hero__content">
              <nav class="creative-makers-breadcrumbs" aria-label="Breadcrumb">
                <ol class="creative-makers-breadcrumbs__list">
                  <li><a href="<?php echo esc_url( bdc_page_url( 'index.html' ) ); ?>">Home</a></li>
                  <li><a href="<?php echo esc_url( bdc_page_url( 'explore.html' ) ); ?>">Explore</a></li>
                  <li aria-current="page">Community Adventures</li>
                </ol>
              </nav>

              <h1 class="creative-makers-hero__title" id="community-adventures-title">
                Community Adventures
              </h1>

              <p class="creative-makers-hero__tagline">
                Explore. Discover. Connect.
              </p>

              <p class="creative-makers-hero__text">
                Children explore their community through real-life experiences. They
                visit places, meet inspiring people, learn new things, and discover
                ways we can all work together to make our community better.
              </p>

              <div class="page-hero__actions creative-makers-hero__actions">
                <a class="btn btn--solid btn--lg btn-hover" href="#community-adventures-parents">
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
                <a class="creative-makers-hero__back" href="<?php echo esc_url( bdc_page_url( 'explore.html' ) ); ?>">
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
                  Back to All Experiences
                </a>
              </div>
            </div>

            <div class="creative-makers-hero__media">
              <div class="lazy-img-wrap">
                <img
                  class="creative-makers-hero__banner lazy-img"
                  src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                  data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/community-adventures-hero-banner.png' ); ?>"
                  alt="Children exploring outdoors and discovering their community together"
                  width="1200"
                  height="720"
                  decoding="async"
                />
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="creative-makers-explore" aria-labelledby="community-adventures-explore-title">
        <div class="site-container">
          <h2 class="creative-makers-explore__title" id="community-adventures-explore-title">
            Children Explore
          </h2>

          <div class="creative-makers-explore__grid">
            <article class="creative-makers-activity creative-makers-activity--paint">
              <img
                class="creative-makers-activity__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/community-adventures-icon-places-removebg-preview.png' ); ?>"
                alt=""
                width="68"
                height="68"
                loading="lazy"
                decoding="async"
              />
              <h3 class="creative-makers-activity__title">Local Places</h3>
            </article>

            <article class="creative-makers-activity creative-makers-activity--crafts">
              <img
                class="creative-makers-activity__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/community-adventures-icon-helpers-removebg-preview.png' ); ?>"
                alt=""
                width="68"
                height="68"
                loading="lazy"
                decoding="async"
              />
              <h3 class="creative-makers-activity__title">Community Helpers</h3>
            </article>

            <article class="creative-makers-activity creative-makers-activity--media">
              <img
                class="creative-makers-activity__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/community-adventures-icon-nature-removebg-preview.png' ); ?>"
                alt=""
                width="68"
                height="68"
                loading="lazy"
                decoding="async"
              />
              <h3 class="creative-makers-activity__title">Nature &amp; Outdoors</h3>
            </article>

            <article class="creative-makers-activity creative-makers-activity--design">
              <img
                class="creative-makers-activity__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/community-adventures-icon-culture-removebg-preview.png' ); ?>"
                alt=""
                width="68"
                height="68"
                loading="lazy"
                decoding="async"
              />
              <h3 class="creative-makers-activity__title">Culture &amp; Arts</h3>
            </article>

            <article class="creative-makers-activity creative-makers-activity--upcycle">
              <img
                class="creative-makers-activity__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/community-adventures-icon-business-removebg-preview.png' ); ?>"
                alt=""
                width="68"
                height="68"
                loading="lazy"
                decoding="async"
              />
              <h3 class="creative-makers-activity__title">Local Businesses</h3>
            </article>
          </div>
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
                  Curiosity
                </li>
                <li>
                  <span class="creative-makers-info-card__check" aria-hidden="true">
                    <svg viewBox="0 0 24 24" width="11" height="11" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7" /></svg>
                  </span>
                  Communication
                </li>
                <li>
                  <span class="creative-makers-info-card__check" aria-hidden="true">
                    <svg viewBox="0 0 24 24" width="11" height="11" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7" /></svg>
                  </span>
                  Adaptability
                </li>
                <li>
                  <span class="creative-makers-info-card__check" aria-hidden="true">
                    <svg viewBox="0 0 24 24" width="11" height="11" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7" /></svg>
                  </span>
                  Social awareness
                </li>
                <li>
                  <span class="creative-makers-info-card__check" aria-hidden="true">
                    <svg viewBox="0 0 24 24" width="11" height="11" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7" /></svg>
                  </span>
                  Appreciation
                </li>
              </ul>
              <img
                class="creative-makers-info-card__deco creative-makers-info-card__deco--star"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/community-adventures-deco-star-removebg-preview.png' ); ?>"
                alt=""
                width="26"
                height="26"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
            </article>

            <article class="creative-makers-info-card creative-makers-info-card--grow">
              <h2 class="creative-makers-info-card__title creative-makers-info-card__title--pink">
                <span class="heading-underline heading-underline--pink">
                  Children Grow
                  <img
                    class="heading-underline__img"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/heading-underline.jpeg' ); ?>"
                    alt=""
                    width="120"
                    height="12"
                  />
                </span>
                Shape the Experience
              </h2>
              <p class="creative-makers-info-card__text">
                Children suggest places to visit, ask questions, and help plan our
                adventures.
              </p>
              <img
                class="creative-makers-info-card__deco creative-makers-info-card__deco--heart"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/community-adventures-deco-heart-removebg-preview.png' ); ?>"
                alt=""
                width="26"
                height="26"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
            </article>

            <article class="creative-makers-info-card creative-makers-info-card--impact">
              <h2 class="creative-makers-info-card__title">Making an Impact</h2>
              <p class="creative-makers-info-card__text">
                Children understand their community better and discover ways to
                contribute, support others, and help it grow.
              </p>
              <img
                class="creative-makers-info-card__deco creative-makers-info-card__deco--plant"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/community-adventures-deco-plant-removebg-preview.png' ); ?>"
                alt=""
                width="36"
                height="36"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
            </article>
          </div>
        </div>
      </section>

      <section
        class="creative-makers-parents"
        id="community-adventures-parents"
        aria-labelledby="community-adventures-parents-title"
      >
        <div class="site-container">
          <h2 class="creative-makers-parents__title" id="community-adventures-parents-title">
            What Parents Should Know
          </h2>

          <div class="creative-makers-parents__accordion">
            <input
              class="creative-makers-faq__input"
              type="radio"
              name="community-adventures-faq"
              id="community-adventures-faq-expect"
              checked
            />
            <input
              class="creative-makers-faq__input"
              type="radio"
              name="community-adventures-faq"
              id="community-adventures-faq-materials"
            />
            <input
              class="creative-makers-faq__input"
              type="radio"
              name="community-adventures-faq"
              id="community-adventures-faq-safety"
            />
            <input
              class="creative-makers-faq__input"
              type="radio"
              name="community-adventures-faq"
              id="community-adventures-faq-program"
            />

            <div class="creative-makers-parents__tablist" role="tablist" aria-label="Parent information topics">
              <label class="creative-makers-faq__tab" for="community-adventures-faq-expect" role="tab">
                What to Expect
              </label>
              <label class="creative-makers-faq__tab" for="community-adventures-faq-materials" role="tab">
                Materials
              </label>
              <label class="creative-makers-faq__tab" for="community-adventures-faq-safety" role="tab">
                Safety &amp; Supervision
              </label>
              <label class="creative-makers-faq__tab" for="community-adventures-faq-program" role="tab">
                Program Details &amp; Registration
              </label>
            </div>

            <div class="creative-makers-parents__panels">
              <article
                class="creative-makers-faq__panel creative-makers-faq__panel--expect"
                role="tabpanel"
                aria-labelledby="community-adventures-faq-expect"
              >
                <p>
                  Sessions include field visits, guest speakers, and hands-on
                  activities in the community. Children observe, ask questions, and
                  reflect on what they learn at each stop.
                </p>
              </article>

              <article
                class="creative-makers-faq__panel creative-makers-faq__panel--materials"
                role="tabpanel"
                aria-labelledby="community-adventures-faq-materials"
              >
                <p>
                  We provide journals, maps, and activity guides for each adventure.
                  Children are encouraged to wear comfortable clothing and bring a
                  water bottle. Any special items needed for a visit are shared in
                  advance.
                </p>
              </article>

              <article
                class="creative-makers-faq__panel creative-makers-faq__panel--safety"
                role="tabpanel"
                aria-labelledby="community-adventures-faq-safety"
              >
                <p>
                  All outings are fully supervised with clear safety guidelines.
                  Permission forms, appropriate adult-to-child ratios, and route
                  planning are in place for every adventure.
                </p>
              </article>

              <article
                class="creative-makers-faq__panel creative-makers-faq__panel--program"
                role="tabpanel"
                aria-labelledby="community-adventures-faq-program"
              >
                <p>
                  Community Adventures runs as part of Bright Dreamers experiences
                  throughout the year. Visit our Get Involved page or contact us to
                  learn about upcoming sessions, age groups, and how to register
                  your child.
                </p>
              </article>
            </div>
          </div>
        </div>
      </section>

      <section class="creative-makers-cta" aria-label="Join Community Adventures">
        <div class="site-container creative-makers-cta__inner">
          <div class="creative-makers-cta__card">
            <img
              class="creative-makers-cta__heart"
              src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/community-adventures-cta-heart.jpeg' ); ?>"
              alt=""
              width="28"
              height="28"
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />
            <p class="creative-makers-cta__text">
              Every adventure starts with a curious mind.
            </p>
            <img
              class="creative-makers-cta__plane"
              src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/community-adventures-deco-globe-removebg-preview.png' ); ?>"
              alt=""
              width="90"
              height="45"
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
