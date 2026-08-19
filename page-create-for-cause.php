<?php
/**
 * Create for a Cause page template — converted from create-for-cause.html.
 *
 * Template Name: Create for a Cause
 *
 * @package Bright_Dreamers_Club
 */

get_header();
?>
    <main id="main-content" class="create-for-cause-page">
      <section class="page-hero creative-makers-hero create-for-cause-hero" aria-labelledby="create-for-cause-title">
        <div class="site-container creative-makers-hero__wrap">
          <div class="creative-makers-hero__inner page-hero__inner">
            <div class="page-hero__content creative-makers-hero__content">
              <nav class="creative-makers-breadcrumbs" aria-label="Breadcrumb">
                <ol class="creative-makers-breadcrumbs__list">
                  <li><a href="<?php echo esc_url( bdc_page_url( 'index.html' ) ); ?>">Home</a></li>
                  <li><a href="<?php echo esc_url( bdc_page_url( 'explore.html' ) ); ?>">Explore</a></li>
                  <li aria-current="page">Create for a Cause</li>
                </ol>
              </nav>

              <h1 class="creative-makers-hero__title" id="create-for-cause-title">
                Create for a Cause
              </h1>

              <p class="creative-makers-hero__tagline">
                Create with heart. Make a difference.
              </p>

              <p class="creative-makers-hero__text">
                In this experience, children use their creativity to support causes
                they care about. They plan projects, make items, raise awareness,
                and give back to the community through their own creations.
              </p>

              <div class="page-hero__actions creative-makers-hero__actions">
                <a class="btn btn--solid btn--lg btn-hover" href="#create-for-cause-parents">
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
                  data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/46fd4d76-4bf8-4376-aa4f-fa8a19c43d33.png' ); ?>"
                  alt="Three children holding a colorful handmade thank-you sign"
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
            Children Explore
          </h2>

          <div class="creative-makers-explore__grid">
            <article class="creative-makers-activity creative-makers-activity--paint">
              <span class="creative-makers-activity__icon-box">
                <img
                  class="creative-makers-activity__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/create-for-cause-icon-kindness.png' ); ?>"
                  alt=""
                  loading="lazy"
                  decoding="async"
                />
              </span>
              <h3 class="creative-makers-activity__title">Kindness Projects</h3>
            </article>

            <article class="creative-makers-activity creative-makers-activity--crafts">
              <span class="creative-makers-activity__icon-box">
                <img
                  class="creative-makers-activity__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/create-for-cause-icon-donation.png' ); ?>"
                  alt=""
                  loading="lazy"
                  decoding="async"
                />
              </span>
              <h3 class="creative-makers-activity__title">Donation Drives</h3>
            </article>

            <article class="creative-makers-activity creative-makers-activity--media">
              <span class="creative-makers-activity__icon-box">
                <img
                  class="creative-makers-activity__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/create-for-cause-icon-care.png' ); ?>"
                  alt=""
                  loading="lazy"
                  decoding="async"
                />
              </span>
              <h3 class="creative-makers-activity__title">Care Packages</h3>
            </article>

            <article class="creative-makers-activity creative-makers-activity--design">
              <span class="creative-makers-activity__icon-box">
                <img
                  class="creative-makers-activity__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/create-for-cause-icon-awareness.png' ); ?>"
                  alt=""
                  loading="lazy"
                  decoding="async"
                />
              </span>
              <h3 class="creative-makers-activity__title">Awareness Campaigns</h3>
            </article>

            <article class="creative-makers-activity creative-makers-activity--upcycle">
              <span class="creative-makers-activity__icon-box">
                <img
                  class="creative-makers-activity__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/create-for-cause-icon-events.png' ); ?>"
                  alt=""
                  loading="lazy"
                  decoding="async"
                />
              </span>
              <h3 class="creative-makers-activity__title">Helping Events</h3>
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
