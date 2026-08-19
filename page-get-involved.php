<?php
/**
 * Get Involved page template — converted from get-involved.html.
 *
 * Template Name: Get Involved
 *
 * @package Bright_Dreamers_Club
 */

get_header();
?>
    <main id="main-content">
      <section class="page-hero get-involved-hero about-hero" aria-label="Get Involved">
        <div class="site-container page-hero__inner">
          <div class="page-hero__content">
            <p class="get-involved-hero__eyebrow">
              GET INVOLVED
              <svg
                class="get-involved-hero__eyebrow-heart"
                viewBox="0 0 24 24"
                width="18"
                height="18"
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
            </p>

            <h1 class="get-involved-hero__title">
              <span class="get-involved-hero__title-line get-involved-hero__title-line--pink">Get</span>
              <span class="get-involved-hero__title-line get-involved-hero__title-line--navy"
                >Involved</span
              >
            </h1>

            <p class="get-involved-hero__text">
              We&rsquo;re building a community where young ideas are heard,
              <span class="get-involved-hero__accent get-involved-hero__accent--pink">supported</span>,
              and turned into
              <span class="get-involved-hero__accent get-involved-hero__accent--pink"
                >real projects</span
              >
              that help others.
            </p>

            <p class="get-involved-hero__text get-involved-hero__text--secondary">
              Your time, skills, resources, and support help open doors for children with ideas and
              the desire to make a difference.
            </p>

            <div class="page-hero__actions">
              <a class="btn btn--solid btn--lg btn-hover" href="<?php echo esc_url( bdc_page_url( 'volunteer-application.html' ) ); ?>">
                Volunteer With Us
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
                  <circle cx="9" cy="8" r="2.8" />
                  <path d="M4.5 18c.65-2.4 2.4-3.8 4.5-3.8s3.85 1.4 4.5 3.8" />
                  <path d="M16 11v4M18 13h-4" />
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
                data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/get-involved-hero-banner.jpeg' ); ?>"
                alt="Children collaborating on a creative project together"
                width="1200"
                height="900"
                decoding="async"
              />
            </div>
          </div>
        </div>
      </section>

      <section class="get-involved-ways section-padding" aria-labelledby="get-involved-ways-title">
        <div class="site-container">
            <h2 class="get-involved-ways__title" id="get-involved-ways-title">
              How You Can Get Involved
              <svg
                class="get-involved-ways__title-icon"
                viewBox="0 0 24 24"
                width="22"
                height="22"
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
            </h2>

            <div class="get-involved-ways__grid">
              <article class="get-involved-ways-card">
                <img
                  class="get-involved-ways-card__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/get-involved-icon-time.jpeg' ); ?>"
                  alt=""
                  width="84"
                  height="84"
                  loading="lazy"
                  decoding="async"
                />
                <h3 class="get-involved-ways-card__title">Share Your Time</h3>
                <p class="get-involved-ways-card__text">
                  Volunteer your time and help children explore, create, and bring their ideas to
                  life.
                </p>
                <a class="get-involved-ways-card__link" href="<?php echo esc_url( bdc_page_url( 'volunteer-application.html' ) ); ?>">
                  Learn More
                  <span aria-hidden="true">&rarr;</span>
                </a>
              </article>

              <article class="get-involved-ways-card">
                <img
                  class="get-involved-ways-card__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/get-involved-icon-skills.jpeg' ); ?>"
                  alt=""
                  width="84"
                  height="84"
                  loading="lazy"
                  decoding="async"
                />
                <h3 class="get-involved-ways-card__title">Share Your Skills</h3>
                <p class="get-involved-ways-card__text">
                  Use your talents and experience to mentor, teach, or guide children on their
                  projects.
                </p>
                <a class="get-involved-ways-card__link" href="#skills">
                  Learn More
                  <span aria-hidden="true">&rarr;</span>
                </a>
              </article>

              <article class="get-involved-ways-card">
                <img
                  class="get-involved-ways-card__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/get-involved-icon-door.jpeg' ); ?>"
                  alt=""
                  width="84"
                  height="84"
                  loading="lazy"
                  decoding="async"
                />
                <h3 class="get-involved-ways-card__title">Open a Door</h3>
                <p class="get-involved-ways-card__text">
                  Offer spaces, opportunities, connections, or real-world experiences that inspire
                  young minds.
                </p>
                <a class="get-involved-ways-card__link" href="#open-a-door">
                  Learn More
                  <span aria-hidden="true">&rarr;</span>
                </a>
              </article>

              <article class="get-involved-ways-card">
                <img
                  class="get-involved-ways-card__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/get-involved-icon-support.jpeg' ); ?>"
                  alt=""
                  width="84"
                  height="84"
                  loading="lazy"
                  decoding="async"
                />
                <h3 class="get-involved-ways-card__title">Support a Project</h3>
                <p class="get-involved-ways-card__text">
                  Help fund materials, resources, and experiences that make child-led projects
                  possible.
                </p>
                <a class="get-involved-ways-card__link" href="<?php echo esc_url( bdc_page_url( 'donation-interest.html' ) ); ?>">
                  Learn More
                  <span aria-hidden="true">&rarr;</span>
                </a>
              </article>

              <article class="get-involved-ways-card">
                <img
                  class="get-involved-ways-card__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/get-involved-icon-spread.jpeg' ); ?>"
                  alt=""
                  width="84"
                  height="84"
                  loading="lazy"
                  decoding="async"
                />
                <h3 class="get-involved-ways-card__title">Spread the Word</h3>
                <p class="get-involved-ways-card__text">
                  Tell others about Bright Dreamers and help more children with ideas find us.
                </p>
                <a class="get-involved-ways-card__link" href="#spread-the-word">
                  Learn More
                  <span aria-hidden="true">&rarr;</span>
                </a>
              </article>
            </div>
        </div>
      </section>

      <section class="get-involved-impact section-padding" aria-labelledby="get-involved-impact-title">
        <div class="site-container">
          <div class="get-involved-impact__card">
            <div class="get-involved-impact__inner">
              <div class="get-involved-impact__copy">
                <h2 class="get-involved-impact__title" id="get-involved-impact-title">
                  <span class="get-involved-impact__title-line get-involved-impact__title-line--navy"
                    >Help Us Make</span
                  >
                  <span class="get-involved-impact__title-line get-involved-impact__title-line--pink"
                    >Young Ideas Possible</span
                  >
                </h2>
                <p class="get-involved-impact__intro">
                  Bright Dreamers is intentionally small and project-based. We welcome children who
                  are curious, motivated, and excited to share their ideas and work together.
                </p>
                <aside class="get-involved-impact__note">
                  <svg
                    class="get-involved-impact__note-star"
                    viewBox="0 0 24 24"
                    width="22"
                    height="22"
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
                  <p class="get-involved-impact__note-text">
                    We don&rsquo;t measure success by how many we reach&mdash;but by the impact we create
                    together, one idea at a time.
                  </p>
                </aside>
              </div>

              <div class="get-involved-impact__visual">
                <div class="get-involved-timeline" role="list">
                  <article class="get-involved-timeline__step" role="listitem">
                    <div
                      class="get-involved-timeline__icon-wrap get-involved-timeline__icon-wrap--pink"
                      aria-hidden="true"
                    >
                      <svg
                        class="get-involved-timeline__icon-svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.8"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      >
                        <path
                          d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
                        />
                      </svg>
                    </div>
                    <div class="get-involved-timeline__rail" aria-hidden="true">
                      <span class="get-involved-timeline__dot get-involved-timeline__dot--pink"></span>
                    </div>
                    <div class="get-involved-timeline__content">
                      <h3 class="get-involved-timeline__title get-involved-timeline__title--pink">
                        Children Lead the Way
                      </h3>
                      <p class="get-involved-timeline__text">
                        We open our doors to children with ideas, creativity, and the desire to make
                        a difference.
                      </p>
                    </div>
                  </article>

                  <article class="get-involved-timeline__step" role="listitem">
                    <img
                      class="get-involved-timeline__icon"
                      src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/get-involved-timeline-together-removebg-preview.png' ); ?>"
                      alt=""
                      width="56"
                      height="56"
                      loading="lazy"
                      decoding="async"
                    />
                    <div class="get-involved-timeline__rail" aria-hidden="true">
                      <span class="get-involved-timeline__dot get-involved-timeline__dot--pink"></span>
                    </div>
                    <div class="get-involved-timeline__content">
                      <h3 class="get-involved-timeline__title get-involved-timeline__title--pink">
                        We Build Together
                      </h3>
                      <p class="get-involved-timeline__text">
                        Families, volunteers, and community partners bring their time, skills, and
                        resources to bring ideas to life.
                      </p>
                    </div>
                  </article>

                  <article class="get-involved-timeline__step" role="listitem">
                    <img
                      class="get-involved-timeline__icon"
                      src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/get-involved-timeline-grow-removebg-preview.png' ); ?>"
                      alt=""
                      width="56"
                      height="56"
                      loading="lazy"
                      decoding="async"
                    />
                    <div class="get-involved-timeline__rail" aria-hidden="true">
                      <span class="get-involved-timeline__dot get-involved-timeline__dot--green"></span>
                    </div>
                    <div class="get-involved-timeline__content">
                      <h3 class="get-involved-timeline__title get-involved-timeline__title--green">
                        Ideas Become Real
                      </h3>
                      <p class="get-involved-timeline__text">
                        Through collaboration, children turn their ideas into projects that inspire
                        and help others.
                      </p>
                    </div>
                  </article>

                  <article class="get-involved-timeline__step" role="listitem">
                    <img
                      class="get-involved-timeline__icon"
                      src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/get-involved-timeline-community-removebg-preview.png' ); ?>"
                      alt=""
                      width="56"
                      height="56"
                      loading="lazy"
                      decoding="async"
                    />
                    <div class="get-involved-timeline__rail" aria-hidden="true">
                      <span class="get-involved-timeline__dot get-involved-timeline__dot--blue"></span>
                    </div>
                    <div class="get-involved-timeline__content">
                      <h3 class="get-involved-timeline__title get-involved-timeline__title--blue">
                        A Stronger Community
                      </h3>
                      <p class="get-involved-timeline__text">
                        Every project creates a ripple effect of kindness, learning, and positive
                        change.
                      </p>
                    </div>
                  </article>
                </div>

                <div class="lazy-img-wrap">
                  <img
                    class="get-involved-impact__illustration lazy-img"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                    data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/get-involved-lightbulb-removebg-preview.png' ); ?>"
                    alt="Children working together on a bright idea"
                    width="560"
                    height="520"
                    decoding="async"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="get-involved-partner-cta section-padding" aria-label="Contact us about partnerships">
        <div class="site-container">
          <div class="get-involved-partner-cta__card">
            <img
              class="get-involved-partner-cta__envelope"
              src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/get-involved-cta-envelope-removebg-preview.png' ); ?>"
              alt=""
              width="185"
              height="140"
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />

            <div class="get-involved-partner-cta__copy">
              <p class="get-involved-partner-cta__title">
                Have an idea for a partnership or want to support a child&rsquo;s project?
              </p>
              <p class="get-involved-partner-cta__sub">We&rsquo;d love to hear from you.</p>
            </div>

            <a class="btn btn--solid btn--lg btn-hover get-involved-partner-cta__btn" href="<?php echo esc_url( bdc_page_url( 'partner-inquiry.html' ) ); ?>">
              Contact Us
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

            <img
              class="get-involved-partner-cta__deco"
              src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/get-involved-cta-deco-removebg-preview.png' ); ?>"
              alt=""
              width="120"
              height="80"
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />
          </div>
        </div>
      </section>

      <!-- GET INVOLVED SECTIONS GO HERE -->
    </main>

<?php
get_footer();
