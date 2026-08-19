<?php
/**
 * Young Ideas Lab page template — converted from young-ideas-lab.html.
 *
 * Template Name: Young Ideas Lab
 *
 * @package Bright_Dreamers_Club
 */

get_header();
?>
    <main id="main-content" class="young-ideas-lab-page">
      <section class="page-hero creative-makers-hero young-ideas-lab-hero" aria-labelledby="young-ideas-lab-title">
        <div class="site-container creative-makers-hero__wrap">
          <div class="creative-makers-hero__inner page-hero__inner">
            <div class="page-hero__content creative-makers-hero__content">
              <nav class="creative-makers-breadcrumbs" aria-label="Breadcrumb">
                <ol class="creative-makers-breadcrumbs__list">
                  <li><a href="<?php echo esc_url( bdc_page_url( 'index.html' ) ); ?>">Home</a></li>
                  <li><a href="<?php echo esc_url( bdc_page_url( 'explore.html' ) ); ?>">Explore</a></li>
                  <li aria-current="page">Young Ideas Lab</li>
                </ol>
              </nav>

              <h1 class="creative-makers-hero__title" id="young-ideas-lab-title">
                Young Ideas Lab
                <img
                  class="creative-makers-hero__title-heart"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/young-ideas-lab-title-lightbulb.jpeg' ); ?>"
                  alt=""
                  width="28"
                  height="28"
                  decoding="async"
                  aria-hidden="true"
                />
              </h1>

              <p class="creative-makers-hero__tagline">
                Ask. Imagine. Invent. Solve.
              </p>

              <p class="creative-makers-hero__text">
                Young Ideas Lab encourages children to think curiously, ask
                questions, and try new things. They experiment, solve problems,
                and turn simple ideas into real solutions.
              </p>

              <div class="page-hero__actions creative-makers-hero__actions">
                <a class="btn btn--solid btn--lg btn-hover" href="#young-ideas-lab-parents">
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
                  data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/young-ideas-lab-hero-banner.jpeg' ); ?>"
                  alt="Two children working together on a science and engineering project"
                  width="1200"
                  height="720"
                  decoding="async"
                />
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="creative-makers-explore" aria-labelledby="creative-makers-explore-title">
        <div class="site-container">
          <h2 class="creative-makers-explore__title" id="creative-makers-explore-title">
            Children Explore
          </h2>

          <div class="creative-makers-explore__grid">
            <article class="creative-makers-activity creative-makers-activity--paint">
              <img
                class="creative-makers-activity__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/young-ideas-lab-icon-flask.jpeg' ); ?>"
                alt=""
                width="68"
                height="68"
                loading="lazy"
                decoding="async"
              />
              <h3 class="creative-makers-activity__title">Science &amp; Experiments</h3>
            </article>

            <article class="creative-makers-activity creative-makers-activity--crafts">
              <img
                class="creative-makers-activity__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/young-ideas-lab-icon-puzzle-removebg-preview.png' ); ?>"
                alt=""
                width="68"
                height="68"
                loading="lazy"
                decoding="async"
              />
              <h3 class="creative-makers-activity__title">Problem Solving</h3>
            </article>

            <article class="creative-makers-activity creative-makers-activity--media">
              <img
                class="creative-makers-activity__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/young-ideas-lab-icon-lightbulb-removebg-preview.png' ); ?>"
                alt=""
                width="68"
                height="68"
                loading="lazy"
                decoding="async"
              />
              <h3 class="creative-makers-activity__title">Inventions &amp; Ideas</h3>
            </article>

            <article class="creative-makers-activity creative-makers-activity--design">
              <img
                class="creative-makers-activity__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/young-ideas-lab-icon-code-removebg-preview.png' ); ?>"
                alt=""
                width="68"
                height="68"
                loading="lazy"
                decoding="async"
              />
              <h3 class="creative-makers-activity__title">Coding Basics</h3>
            </article>

            <article class="creative-makers-activity creative-makers-activity--upcycle">
              <img
                class="creative-makers-activity__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/young-ideas-lab-icon-leaf-removebg-preview.png' ); ?>"
                alt=""
                width="68"
                height="68"
                loading="lazy"
                decoding="async"
              />
              <h3 class="creative-makers-activity__title">Design Thinking</h3>
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
                  Critical thinking
                </li>
                <li>
                  <span class="creative-makers-info-card__check" aria-hidden="true">
                    <svg viewBox="0 0 24 24" width="11" height="11" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7" /></svg>
                  </span>
                  Creativity
                </li>
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
                  Persistence
                </li>
                <li>
                  <span class="creative-makers-info-card__check" aria-hidden="true">
                    <svg viewBox="0 0 24 24" width="11" height="11" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7" /></svg>
                  </span>
                  Logical reasoning
                </li>
              </ul>
              <img
                class="creative-makers-info-card__deco creative-makers-info-card__deco--heart"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/young-ideas-lab-info-heart.jpeg' ); ?>"
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
                Children suggest ideas, choose challenges, and help decide what
                we explore and build.
              </p>
              <img
                class="creative-makers-info-card__deco creative-makers-info-card__deco--star"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/young-ideas-lab-deco-star-removebg-preview.png' ); ?>"
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
                Children&rsquo;s ideas can become inventions, solutions, and
                projects that help our community and make life better.
              </p>
              <img
                class="creative-makers-info-card__deco creative-makers-info-card__deco--plant"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/young-ideas-lab-deco-plant-removebg-preview.png' ); ?>"
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
        id="young-ideas-lab-parents"
        aria-labelledby="young-ideas-lab-parents-title"
      >
        <div class="site-container">
          <h2 class="creative-makers-parents__title" id="young-ideas-lab-parents-title">
            What Parents Should Know
          </h2>

          <div class="creative-makers-parents__accordion">
            <input
              class="creative-makers-faq__input"
              type="radio"
              name="young-ideas-lab-faq"
              id="young-ideas-lab-faq-expect"
              checked
            />
            <input
              class="creative-makers-faq__input"
              type="radio"
              name="young-ideas-lab-faq"
              id="young-ideas-lab-faq-materials"
            />
            <input
              class="creative-makers-faq__input"
              type="radio"
              name="young-ideas-lab-faq"
              id="young-ideas-lab-faq-safety"
            />
            <input
              class="creative-makers-faq__input"
              type="radio"
              name="young-ideas-lab-faq"
              id="young-ideas-lab-faq-program"
            />

            <div class="creative-makers-parents__tablist" role="tablist" aria-label="Parent information topics">
              <label class="creative-makers-faq__tab" for="young-ideas-lab-faq-expect" role="tab">
                What to Expect
              </label>
              <label class="creative-makers-faq__tab" for="young-ideas-lab-faq-materials" role="tab">
                Materials
              </label>
              <label class="creative-makers-faq__tab" for="young-ideas-lab-faq-safety" role="tab">
                Safety &amp; Supervision
              </label>
              <label class="creative-makers-faq__tab" for="young-ideas-lab-faq-program" role="tab">
                Program Details &amp; Registration
              </label>
            </div>

            <div class="creative-makers-parents__panels">
              <article
                class="creative-makers-faq__panel creative-makers-faq__panel--expect"
                role="tabpanel"
                aria-labelledby="young-ideas-lab-faq-expect"
              >
                <p>
                  Sessions blend guided challenges with open exploration time.
                  Children investigate questions, work individually and in small
                  teams, and share what they discover at the end of each experience.
                </p>
              </article>

              <article
                class="creative-makers-faq__panel creative-makers-faq__panel--materials"
                role="tabpanel"
                aria-labelledby="young-ideas-lab-faq-materials"
              >
                <p>
                  We provide lab kits, building materials, tablets for coding
                  activities, and safe experiment supplies. Children are encouraged
                  to bring recycled items for invention projects. Workspaces are set
                  up for hands-on learning.
                </p>
              </article>

              <article
                class="creative-makers-faq__panel creative-makers-faq__panel--safety"
                role="tabpanel"
                aria-labelledby="young-ideas-lab-faq-safety"
              >
                <p>
                  All activities are age-appropriate with adult guidance. Tools and
                  experiments are introduced with clear safety instructions. Small
                  group sizes ensure every child gets attention and support.
                </p>
              </article>

              <article
                class="creative-makers-faq__panel creative-makers-faq__panel--program"
                role="tabpanel"
                aria-labelledby="young-ideas-lab-faq-program"
              >
                <p>
                  Young Ideas Lab runs as part of Bright Dreamers experiences
                  throughout the year. Visit our Get Involved page or contact us to
                  learn about upcoming sessions, age groups, and how to register
                  your child.
                </p>
              </article>
            </div>
          </div>
        </div>
      </section>

      <section class="creative-makers-cta" aria-label="Join Young Ideas Lab">
        <div class="site-container creative-makers-cta__inner">
          <div class="creative-makers-cta__card">
            <img
              class="creative-makers-cta__heart"
              src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/young-ideas-lab-cta-lightbulb-removebg-preview.png' ); ?>"
              alt=""
              width="28"
              height="28"
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />
            <p class="creative-makers-cta__text">
              Big ideas can come from small questions.
            </p>
            <img
              class="creative-makers-cta__plane"
              src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/young-ideas-lab-deco-plane-removebg-preview.png' ); ?>"
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
