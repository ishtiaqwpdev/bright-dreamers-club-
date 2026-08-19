<?php
/**
 * Creative Makers page template — converted from creative-makers.html.
 *
 * Template Name: Creative Makers
 *
 * @package Bright_Dreamers_Club
 */

get_header();
?>
    <main id="main-content">
      <section class="page-hero creative-makers-hero" aria-labelledby="creative-makers-title">
        <div class="site-container creative-makers-hero__wrap">
          <div class="creative-makers-hero__inner page-hero__inner">
            <div class="page-hero__content creative-makers-hero__content">
              <nav class="creative-makers-breadcrumbs" aria-label="Breadcrumb">
                <ol class="creative-makers-breadcrumbs__list">
                  <li><a href="<?php echo esc_url( bdc_page_url( 'index.html' ) ); ?>">Home</a></li>
                  <li><a href="<?php echo esc_url( bdc_page_url( 'explore.html' ) ); ?>">Explore</a></li>
                  <li aria-current="page">Creative Makers</li>
                </ol>
              </nav>

              <h1 class="creative-makers-hero__title" id="creative-makers-title">
                Creative Makers
                <img
                  class="creative-makers-hero__title-heart"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/creative-makers-deco-heart.jpeg' ); ?>"
                  alt=""
                  width="28"
                  height="28"
                  decoding="async"
                  aria-hidden="true"
                />
              </h1>

              <p class="creative-makers-hero__tagline">
                Imagine it. Create it. Share it.
              </p>

              <p class="creative-makers-hero__text">
                Creative Makers is where children explore their imagination through
                art, design, and hands-on crafts. From painting and DIY projects to
                decorating and upcycling, kids learn to express themselves, build
                confidence, and turn everyday materials into something meaningful.
              </p>

              <div class="page-hero__actions creative-makers-hero__actions">
                <a class="btn btn--solid btn--lg btn-hover" href="#creative-makers-parents">
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
                  data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/creative-makers-hero-banner.jpeg' ); ?>"
                  alt="Three children smiling while painting together at a table"
                  width="1200"
                  height="720"
                  decoding="async"
                />
              </div>
            </div>
          </div>

          <img
            class="creative-makers-hero__deco creative-makers-hero__deco--star"
            src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/creative-makers-deco-star.jpeg' ); ?>"
            alt=""
            width="34"
            height="34"
            decoding="async"
            aria-hidden="true"
          />
          <img
            class="creative-makers-hero__deco creative-makers-hero__deco--plane"
            src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/creative-makers-deco-plane.jpeg' ); ?>"
            alt=""
            width="120"
            height="60"
            decoding="async"
            aria-hidden="true"
          />
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
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/creative-makers-icon-paint.jpeg' ); ?>"
                alt=""
                width="68"
                height="68"
                loading="lazy"
                decoding="async"
              />
              <h3 class="creative-makers-activity__title">Painting &amp; Drawing</h3>
            </article>

            <article class="creative-makers-activity creative-makers-activity--crafts">
              <img
                class="creative-makers-activity__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/creative-makers-icon-scissors.jpeg' ); ?>"
                alt=""
                width="68"
                height="68"
                loading="lazy"
                decoding="async"
              />
              <h3 class="creative-makers-activity__title">Crafts &amp; DIY</h3>
            </article>

            <article class="creative-makers-activity creative-makers-activity--media">
              <img
                class="creative-makers-activity__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/creative-makers-icon-rocket-removebg-preview.png' ); ?>"
                alt=""
                width="68"
                height="68"
                loading="lazy"
                decoding="async"
              />
              <h3 class="creative-makers-activity__title">Mixed Media Art</h3>
            </article>

            <article class="creative-makers-activity creative-makers-activity--design">
              <img
                class="creative-makers-activity__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/creative-makers-icon-clip-removebg-preview.png' ); ?>"
                alt=""
                width="68"
                height="68"
                loading="lazy"
                decoding="async"
              />
              <h3 class="creative-makers-activity__title">Design &amp; Decorate</h3>
            </article>

            <article class="creative-makers-activity creative-makers-activity--upcycle">
              <img
                class="creative-makers-activity__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/creative-makers-icon-recycle-removebg-preview.png' ); ?>"
                alt=""
                width="68"
                height="68"
                loading="lazy"
                decoding="async"
              />
              <h3 class="creative-makers-activity__title">Upcycle &amp; Reuse</h3>
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
                  Creativity &amp; Imagination
                </li>
                <li>
                  <span class="creative-makers-info-card__check" aria-hidden="true">
                    <svg viewBox="0 0 24 24" width="11" height="11" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7" /></svg>
                  </span>
                  Self-expression
                </li>
                <li>
                  <span class="creative-makers-info-card__check" aria-hidden="true">
                    <svg viewBox="0 0 24 24" width="11" height="11" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7" /></svg>
                  </span>
                  Focus &amp; patience
                </li>
                <li>
                  <span class="creative-makers-info-card__check" aria-hidden="true">
                    <svg viewBox="0 0 24 24" width="11" height="11" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7" /></svg>
                  </span>
                  Confidence
                </li>
                <li>
                  <span class="creative-makers-info-card__check" aria-hidden="true">
                    <svg viewBox="0 0 24 24" width="11" height="11" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7" /></svg>
                  </span>
                  Problem solving
                </li>
              </ul>
              <img
                class="creative-makers-info-card__deco creative-makers-info-card__deco--heart"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/creative-makers-info-heart-removebg-preview.png' ); ?>"
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
                Children bring their own ideas, choose projects that excite them, and
                help shape what the group creates together. Every session leaves room
                for curiosity, collaboration, and proud moments of &ldquo;I made
                this!&rdquo;
              </p>
              <img
                class="creative-makers-info-card__deco creative-makers-info-card__deco--star"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/creative-makers-deco-star-removebg-preview.png' ); ?>"
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
                Creative work doesn&rsquo;t stay on the table — children share art with
                the community, gift handmade projects, and learn that small creations
                can brighten someone&rsquo;s day.
              </p>
              <img
                class="creative-makers-info-card__deco creative-makers-info-card__deco--plant"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/creative-makers-deco-plant-removebg-preview.png' ); ?>"
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
        id="creative-makers-parents"
        aria-labelledby="creative-makers-parents-title"
      >
        <div class="site-container">
          <h2 class="creative-makers-parents__title" id="creative-makers-parents-title">
            What Parents Should Know
          </h2>

          <div class="creative-makers-parents__accordion">
            <input
              class="creative-makers-faq__input"
              type="radio"
              name="creative-makers-faq"
              id="creative-makers-faq-expect"
              checked
            />
            <input
              class="creative-makers-faq__input"
              type="radio"
              name="creative-makers-faq"
              id="creative-makers-faq-materials"
            />
            <input
              class="creative-makers-faq__input"
              type="radio"
              name="creative-makers-faq"
              id="creative-makers-faq-safety"
            />
            <input
              class="creative-makers-faq__input"
              type="radio"
              name="creative-makers-faq"
              id="creative-makers-faq-program"
            />

            <div class="creative-makers-parents__tablist" role="tablist" aria-label="Parent information topics">
              <label class="creative-makers-faq__tab" for="creative-makers-faq-expect" role="tab">
                What to Expect
              </label>
              <label class="creative-makers-faq__tab" for="creative-makers-faq-materials" role="tab">
                Materials
              </label>
              <label class="creative-makers-faq__tab" for="creative-makers-faq-safety" role="tab">
                Safety &amp; Supervision
              </label>
              <label class="creative-makers-faq__tab" for="creative-makers-faq-program" role="tab">
                Program Details &amp; Registration
              </label>
            </div>

            <div class="creative-makers-parents__panels">
              <article
                class="creative-makers-faq__panel creative-makers-faq__panel--expect"
                role="tabpanel"
                aria-labelledby="creative-makers-faq-expect"
              >
                <p>
                  Sessions blend guided projects with open creative time. Children
                  explore different materials, work individually and in small groups,
                  and share what they make at the end of each experience.
                </p>
              </article>

              <article
                class="creative-makers-faq__panel creative-makers-faq__panel--materials"
                role="tabpanel"
                aria-labelledby="creative-makers-faq-materials"
              >
                <p>
                  We provide paints, paper, craft supplies, and safe tools. Children
                  are encouraged to bring found objects for upcycling projects. Aprons
                  and workspace covers help keep messes manageable.
                </p>
              </article>

              <article
                class="creative-makers-faq__panel creative-makers-faq__panel--safety"
                role="tabpanel"
                aria-labelledby="creative-makers-faq-safety"
              >
                <p>
                  All activities are age-appropriate with adult guidance. Scissors,
                  glue, and paints are introduced with clear safety instructions.
                  Small group sizes ensure every child gets attention and support.
                </p>
              </article>

              <article
                class="creative-makers-faq__panel creative-makers-faq__panel--program"
                role="tabpanel"
                aria-labelledby="creative-makers-faq-program"
              >
                <p>
                  Creative Makers runs as part of Bright Dreamers experiences throughout
                  the year. Visit our Get Involved page or contact us to learn about
                  upcoming sessions, age groups, and how to register your child.
                </p>
              </article>
            </div>
          </div>
        </div>
      </section>

      <section class="creative-makers-cta" aria-label="Join Creative Makers">
        <div class="site-container creative-makers-cta__inner">
          <div class="creative-makers-cta__card">
            <img
              class="creative-makers-cta__heart"
              src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/creative-makers-deco-heart-sm.jpeg' ); ?>"
              alt=""
              width="28"
              height="28"
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />
            <p class="creative-makers-cta__text">
              Every child has a creative spark. We help them set it free.
            </p>
            <img
              class="creative-makers-cta__plane"
              src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/creative-makers-deco-plane-removebg-preview.png' ); ?>"
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
