<?php
/**
 * For Parents page template — converted from for-parents.html.
 *
 * Template Name: For Parents
 *
 * @package Bright_Dreamers_Club
 */

get_header();
?>
    <main id="main-content">
      <section class="page-hero for-parents-hero" aria-label="For Parents">
        <div class="site-container page-hero__inner">
          <div class="page-hero__content">
            <div class="for-parents-hero__title-wrap">
              <h1 class="for-parents-hero__title">
                <span class="for-parents-hero__title-row">
                  <span class="for-parents-hero__title-line for-parents-hero__title-line--pink"
                    >For</span
                  >
                  <svg
                    class="for-parents-hero__heart"
                    viewBox="0 0 24 24"
                    width="26"
                    height="26"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    aria-hidden="true"
                  >
                    <path
                      d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
                    />
                  </svg>
                </span>
                <span class="for-parents-hero__title-line for-parents-hero__title-line--navy"
                  >Parents</span
                >
              </h1>
              <svg
                class="for-parents-hero__star"
                viewBox="0 0 24 24"
                width="28"
                height="28"
                fill="none"
                stroke="currentColor"
                stroke-width="1.8"
                stroke-linejoin="round"
                aria-hidden="true"
              >
                <path
                  d="M12 2.8l2.55 5.35 5.85.7-4.35 3.95 1.2 5.75L12 15.7l-5.25 2.85 1.2-5.75-4.35-3.95 5.85-.7L12 2.8z"
                />
              </svg>
            </div>

            <p class="for-parents-hero__subhead">
              You know your child best. We&rsquo;re here to help their
              <span class="for-parents-hero__accent for-parents-hero__accent--pink">ideas</span>
              <span class="for-parents-hero__accent for-parents-hero__accent--green"> grow.</span>
            </p>

            <p class="for-parents-hero__text">
              Bright Dreamers is a small, intentional community where children with ideas,
              curiosity, and a desire to make a difference come together to explore, create,
              and turn their ideas into real
              <span class="for-parents-hero__accent for-parents-hero__accent--cyan"
                >projects.</span
              >
            </p>

            <div class="page-hero__actions">
              <a class="btn btn--solid btn--lg btn-hover" href="<?php echo esc_url( bdc_page_url( 'get-involved.html' ) ); ?>">
                Apply for Your Child
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
              <a class="btn btn--outline btn--lg btn-hover" href="<?php echo esc_url( bdc_page_url( 'our-vision.html' ) ); ?>">
                See Our Vision
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

          <div class="about-hero__media">
            <div class="lazy-img-wrap">
              <img
                class="about-hero__banner lazy-img"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/for-parents-hero-banner.png' ); ?>"
                alt="A mother and daughter drawing together at a table with colored pencils"
                width="1200"
                height="900"
                decoding="async"
              />
            </div>
          </div>
        </div>
      </section>

      <section class="for-parents-expect section-padding" aria-labelledby="for-parents-expect-title">
        <div class="for-parents-expect__wrap">
          <img
            class="for-parents-expect__deco for-parents-expect__deco--left"
            src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/for-parents-expect-stars.png' ); ?>"
            alt=""
            width="56"
            height="120"
            loading="lazy"
            decoding="async"
            aria-hidden="true"
          />

          <div class="site-container for-parents-expect__inner">
            <h2 class="for-parents-expect__title" id="for-parents-expect-title">
              What Parents Can Expect
              <svg
                class="for-parents-expect__title-icon"
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

            <div class="for-parents-expect__grid">
              <article class="for-parents-expect-card">
                <img
                  class="for-parents-expect-card__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/for-parents-expect-icon-led.png' ); ?>"
                  alt=""
                  width="72"
                  height="72"
                  loading="lazy"
                  decoding="async"
                />
                <h3 class="for-parents-expect-card__title">Child-Led &amp; Idea-Focused</h3>
                <p class="for-parents-expect-card__text">
                  Children bring their ideas, interests, and questions. We help them explore and
                  take action.
                </p>
              </article>

              <article class="for-parents-expect-card">
                <img
                  class="for-parents-expect-card__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/for-parents-expect-icon-creative.png' ); ?>"
                  alt=""
                  width="72"
                  height="72"
                  loading="lazy"
                  decoding="async"
                />
                <h3 class="for-parents-expect-card__title">Creative Exploration</h3>
                <p class="for-parents-expect-card__text">
                  Through hands-on projects, creative activities, and real-world experiences,
                  children discover what excites them.
                </p>
              </article>

              <article class="for-parents-expect-card">
                <img
                  class="for-parents-expect-card__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/for-parents-expect-icon-mentors.png' ); ?>"
                  alt=""
                  width="72"
                  height="72"
                  loading="lazy"
                  decoding="async"
                />
                <h3 class="for-parents-expect-card__title">Caring Mentors &amp; Volunteers</h3>
                <p class="for-parents-expect-card__text">
                  Our mentors and volunteers guide, encourage, and support children as their ideas
                  grow.
                </p>
              </article>

              <article class="for-parents-expect-card">
                <img
                  class="for-parents-expect-card__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/for-parents-expect-icon-community.png' ); ?>"
                  alt=""
                  width="72"
                  height="72"
                  loading="lazy"
                  decoding="async"
                />
                <h3 class="for-parents-expect-card__title">Community Connection</h3>
                <p class="for-parents-expect-card__text">
                  Children collaborate with others, build confidence, and learn the value of giving
                  back.
                </p>
              </article>

              <article class="for-parents-expect-card">
                <img
                  class="for-parents-expect-card__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/for-parents-expect-icon-growth.png' ); ?>"
                  alt=""
                  width="72"
                  height="72"
                  loading="lazy"
                  decoding="async"
                />
                <h3 class="for-parents-expect-card__title">Growth That Lasts</h3>
                <p class="for-parents-expect-card__text">
                  We focus on building curiosity, creativity, kindness, and the confidence to make
                  a difference.
                </p>
              </article>
            </div>
          </div>

          <img
            class="for-parents-expect__deco for-parents-expect__deco--right"
            src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/for-parents-expect-stars.png' ); ?>"
            alt=""
            width="56"
            height="120"
            loading="lazy"
            decoding="async"
            aria-hidden="true"
          />
        </div>
      </section>

      <section class="for-parents-fit section-padding" aria-label="Is Bright Dreamers right for your child">
        <div class="site-container">
          <div class="for-parents-fit__grid">
            <article class="for-parents-fit-card for-parents-fit-card--pink">
              <div class="for-parents-fit-card__head">
                <h2 class="for-parents-fit-card__title">
                  Is Bright Dreamers Right for My Child?
                </h2>
                <svg
                  class="for-parents-fit-card__star"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1.8"
                  stroke-linejoin="round"
                  aria-hidden="true"
                >
                  <path
                    d="M12 2.8l2.55 5.35 5.85.7-4.35 3.95 1.2 5.75L12 15.7l-5.25 2.85 1.2-5.75-4.35-3.95 5.85-.7L12 2.8z"
                  />
                </svg>
              </div>

              <p class="for-parents-fit-card__intro">
                Bright Dreamers may be a wonderful fit for a child who:
              </p>

              <ul class="for-parents-fit-card__list">
                <li>
                  <span class="for-parents-fit-card__check" aria-hidden="true">
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
                  has ideas they love talking about
                </li>
                <li>
                  <span class="for-parents-fit-card__check" aria-hidden="true">
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
                  wants to share a talent or discover one
                </li>
                <li>
                  <span class="for-parents-fit-card__check" aria-hidden="true">
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
                  enjoys making, creating, building, helping, or exploring
                </li>
                <li>
                  <span class="for-parents-fit-card__check" aria-hidden="true">
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
                  enjoys contributing to a group
                </li>
                <li>
                  <span class="for-parents-fit-card__check" aria-hidden="true">
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
                  is curious and asks lots of questions
                </li>
                <li>
                  <span class="for-parents-fit-card__check" aria-hidden="true">
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
                  would like to turn an idea into something real
                </li>
              </ul>
            </article>

            <article class="for-parents-fit-card for-parents-fit-card--lavender">
              <div class="for-parents-fit-card__quote-layout">
                <div class="lazy-img-wrap">
                  <img
                    class="for-parents-fit-card__jar lazy-img"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                    data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/for-parents-fit-jar.png' ); ?>"
                    alt=""
                    width="180"
                    height="220"
                    decoding="async"
                    aria-hidden="true"
                  />
                </div>
                <p class="for-parents-fit-card__quote">
                  Children do not need to arrive with a polished talent or a perfect idea.
                  Curiosity, imagination, kindness, and a willingness to participate are wonderful
                  places to begin.
                </p>
              </div>
              <svg
                class="for-parents-fit-card__heart"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.8"
                stroke-linecap="round"
                stroke-linejoin="round"
                aria-hidden="true"
              >
                <path
                  d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
                />
              </svg>
            </article>
          </div>
        </div>
      </section>

      <section class="for-parents-info section-padding" aria-labelledby="for-parents-info-experience-title">
        <div class="site-container">
          <div class="for-parents-info__grid">
            <article class="for-parents-info-card for-parents-info-card--cream">
              <h2 class="for-parents-info-card__title" id="for-parents-info-experience-title">
                <span class="heading-underline heading-underline--orange">
                  Experience
                  <img
                    class="heading-underline__img"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/heading-underline.jpeg' ); ?>"
                    alt=""
                    width="120"
                    height="12"
                  />
                </span>
                Information
              </h2>

              <div class="for-parents-info-card__features">
                <div class="for-parents-info-feature">
                  <img
                    class="for-parents-info-feature__icon"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/for-parents-info-icon-calendar.png' ); ?>"
                    alt=""
                    width="42"
                    height="42"
                    loading="lazy"
                    decoding="async"
                  />
                  <div>
                    <h3 class="for-parents-info-feature__title">Project-Based Experiences</h3>
                    <p class="for-parents-info-feature__text">
                      Children participate in projects that match their ideas, interests, and
                      current opportunities.
                    </p>
                  </div>
                </div>

                <div class="for-parents-info-feature">
                  <img
                    class="for-parents-info-feature__icon"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/for-parents-info-icon-community.png' ); ?>"
                    alt=""
                    width="42"
                    height="42"
                    loading="lazy"
                    decoding="async"
                  />
                  <div>
                    <h3 class="for-parents-info-feature__title">Small &amp; Intentional Community</h3>
                    <p class="for-parents-info-feature__text">
                      We keep groups small so every child is known, supported, and involved.
                    </p>
                  </div>
                </div>

                <div class="for-parents-info-feature">
                  <img
                    class="for-parents-info-feature__icon"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/for-parents-info-icon-family.png' ); ?>"
                    alt=""
                    width="42"
                    height="42"
                    loading="lazy"
                    decoding="async"
                  />
                  <div>
                    <h3 class="for-parents-info-feature__title">Family Partnership</h3>
                    <p class="for-parents-info-feature__text">
                      Parents and guardians are important partners in their child&rsquo;s journey with
                      Bright Dreamers.
                    </p>
                  </div>
                </div>

                <div class="for-parents-info-feature">
                  <img
                    class="for-parents-info-feature__icon"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/for-parents-info-icon-safe.png' ); ?>"
                    alt=""
                    width="42"
                    height="42"
                    loading="lazy"
                    decoding="async"
                  />
                  <div>
                    <h3 class="for-parents-info-feature__title">
                      Safe, Respectful, and Encouraging Environment
                    </h3>
                    <p class="for-parents-info-feature__text">
                      Every child is valued, heard, and treated with respect.
                    </p>
                  </div>
                </div>
              </div>

              <p class="for-parents-info-card__footer">
                Participation is free. Space is limited and based on fit with current projects.<br />
                Children are welcomed based on their interests, ideas, and readiness to participate.
              </p>

              <img
                class="for-parents-info-card__heart"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/for-parents-info-heart.png' ); ?>"
                alt=""
                width="30"
                height="30"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
            </article>

            <article class="for-parents-info-card for-parents-info-card--lavender">
              <h2 class="for-parents-info-card__title" id="for-parents-info-start-title">
                How to
                <span class="heading-underline heading-underline--pink">
                  Get
                  <img
                    class="heading-underline__img"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/heading-underline.jpeg' ); ?>"
                    alt=""
                    width="120"
                    height="12"
                  />
                </span>
                Started
              </h2>

              <div class="for-parents-info-start">
                <ol class="for-parents-info-steps">
                  <li class="for-parents-info-step">
                    <span class="for-parents-info-step__num for-parents-info-step__num--pink"
                      >1</span
                    >
                    <div>
                      <h3 class="for-parents-info-step__title">Apply for Your Child</h3>
                      <p class="for-parents-info-step__text">
                        Tell us about your child&rsquo;s interests, ideas, and what excites them.
                      </p>
                    </div>
                  </li>
                  <li class="for-parents-info-step">
                    <span class="for-parents-info-step__num for-parents-info-step__num--purple"
                      >2</span
                    >
                    <div>
                      <h3 class="for-parents-info-step__title">We Review Applications</h3>
                      <p class="for-parents-info-step__text">
                        We carefully review each application to find the best fit for current
                        projects.
                      </p>
                    </div>
                  </li>
                  <li class="for-parents-info-step">
                    <span class="for-parents-info-step__num for-parents-info-step__num--green"
                      >3</span
                    >
                    <div>
                      <h3 class="for-parents-info-step__title">We Connect With You</h3>
                      <p class="for-parents-info-step__text">
                        If there&rsquo;s a good match, we&rsquo;ll reach out to learn more and guide
                        you through next steps.
                      </p>
                    </div>
                  </li>
                </ol>

                <img
                  class="for-parents-info-start__plane"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/for-parents-info-plane.png' ); ?>"
                  alt=""
                  width="128"
                  height="140"
                  loading="lazy"
                  decoding="async"
                  aria-hidden="true"
                />

                <a
                  class="btn btn--solid btn--lg btn-hover for-parents-info-start__btn"
                  href="<?php echo esc_url( bdc_page_url( 'get-involved.html' ) ); ?>"
                >
                  Apply for Your Child
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
            </article>
          </div>
        </div>
      </section>

      <section class="for-parents-cta" aria-label="Contact us">
        <div class="site-container for-parents-cta__inner">
          <div class="for-parents-cta__card">
            <img
              class="for-parents-cta__envelope"
              src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/for-parents-cta-envelope.png' ); ?>"
              alt=""
              width="185"
              height="140"
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />

            <div class="for-parents-cta__content">
              <h2 class="for-parents-cta__title">
                We&rsquo;re here to support you and your child.
              </h2>
              <p class="for-parents-cta__text">Have questions? We&rsquo;d love to help.</p>
            </div>

            <div class="for-parents-cta__actions">
              <a
                class="btn btn--outline btn--lg btn-hover for-parents-cta__btn"
                href="<?php echo esc_url( bdc_page_url( 'contact.html' ) ); ?>"
              >
                Contact Us
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

              <svg
                class="for-parents-cta__star"
                viewBox="0 0 24 24"
                width="28"
                height="28"
                fill="none"
                stroke="currentColor"
                stroke-width="1.8"
                stroke-linejoin="round"
                aria-hidden="true"
              >
                <path
                  d="M12 2.8l2.55 5.35 5.85.7-4.35 3.95 1.2 5.75L12 15.7l-5.25 2.85 1.2-5.75-4.35-3.95 5.85-.7L12 2.8z"
                />
              </svg>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
