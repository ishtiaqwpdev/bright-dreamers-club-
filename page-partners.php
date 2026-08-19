<?php
/**
 * Partners page template — converted from partners.html.
 *
 * Template Name: Partners
 *
 * @package Bright_Dreamers_Club
 */

get_header();
?>
<main id="main-content">
      <section class="page-hero vision-hero about-hero partners-hero" aria-label="Partners">
        <div class="site-container page-hero__inner">
          <div class="page-hero__content vision-hero__content">
            <p class="vision-hero__eyebrow">
              PARTNERS
              <svg
                class="vision-hero__eyebrow-heart"
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

            <div class="vision-hero__title-wrap">
              <h1 class="vision-hero__title">
                <span class="vision-hero__title-line vision-hero__title-line--navy"
                  >Stronger Together.</span
                >
                <span class="vision-hero__title-line vision-hero__title-line--pink">
                  <span class="heading-underline heading-underline--partners">
                    Brighter
                    <img
                      class="heading-underline__img"
                      src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/partners-heading-underline-removebg-preview.png' ); ?>"
                      alt=""
                      width="140"
                      height="12"
                      decoding="async"
                      aria-hidden="true"
                    />
                  </span>
                  Futures.
                </span>
              </h1>
            </div>

            <p class="vision-hero__text">
              Bright Dreamers partners with individuals, businesses, artists, and organizations who
              believe in the power of children&rsquo;s ideas. Together, we turn imagination into
              real opportunities that
              <span class="vision-hero__accent vision-hero__accent--pink">inspire kids</span> and
              strengthen our community.
            </p>

            <div class="page-hero__actions">
              <a class="btn btn--solid btn--lg btn-hover" href="<?php echo esc_url( bdc_page_url( 'partner-inquiry.html' ) ); ?>">
                Partner With Us
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
              <a class="btn btn--outline btn--lg btn-hover" href="<?php echo esc_url( bdc_page_url( 'our-vision.html' ) ); ?>">
                Explore Our Vision
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
                data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/partners-hero-banner.jpeg' ); ?>"
                alt="Children collaborating on a model village with the words Big Ideas Kind Hearts Brighter Tomorrows"
                width="1200"
                height="900"
                decoding="async"
              />
            </div>
          </div>
        </div>
      </section>

      <section class="partners-ways section-padding" aria-labelledby="partners-ways-title">
        <div class="site-container">
          <h2 class="partners-ways__title" id="partners-ways-title">
            Ways to Partner
            <svg
              class="partners-ways__title-icon"
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

          <p class="partners-ways__intro">
            There are many ways to open doors for children&rsquo;s ideas. Choose the partnership
            that&rsquo;s right for you.
          </p>

          <div class="partners-ways__grid">
            <article class="partners-ways-card partners-ways-card--purple">
              <img
                class="partners-ways-card__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/partners-way-icon-creative.jpeg' ); ?>"
                alt=""
                width="84"
                height="84"
                loading="lazy"
                decoding="async"
              />
              <h3 class="partners-ways-card__title">Creative Partners</h3>
              <p class="partners-ways-card__text">
                Artists, designers, makers, photographers, and professionals who share skills,
                mentor, and inspire children&rsquo;s creativity.
              </p>
            </article>

            <article class="partners-ways-card partners-ways-card--green">
              <img
                class="partners-ways-card__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/partners-way-icon-community.jpeg' ); ?>"
                alt=""
                width="84"
                height="84"
                loading="lazy"
                decoding="async"
              />
              <h3 class="partners-ways-card__title">Community Partners</h3>
              <p class="partners-ways-card__text">
                Libraries, museums, schools, nonprofits, community centers, and local organizations
                working together to expand opportunities for kids.
              </p>
            </article>

            <article class="partners-ways-card partners-ways-card--blue">
              <img
                class="partners-ways-card__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/partners-way-icon-business.jpeg' ); ?>"
                alt=""
                width="84"
                height="84"
                loading="lazy"
                decoding="async"
              />
              <h3 class="partners-ways-card__title">Business Partners</h3>
              <p class="partners-ways-card__text">
                Businesses that host visits, provide expertise, open their doors, and help children
                see how ideas become real.
              </p>
            </article>

            <article class="partners-ways-card partners-ways-card--pink">
              <img
                class="partners-ways-card__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/partners-way-icon-sponsors.jpeg' ); ?>"
                alt=""
                width="84"
                height="84"
                loading="lazy"
                decoding="async"
              />
              <h3 class="partners-ways-card__title">Project Sponsors</h3>
              <p class="partners-ways-card__text">
                Individuals or companies who fund specific child-led projects, events, markets,
                murals, gardens, and creative initiatives.
              </p>
            </article>

            <article class="partners-ways-card partners-ways-card--orange">
              <img
                class="partners-ways-card__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/partners-way-icon-inkind.jpeg' ); ?>"
                alt=""
                width="84"
                height="84"
                loading="lazy"
                decoding="async"
              />
              <h3 class="partners-ways-card__title">In-Kind Partners</h3>
              <p class="partners-ways-card__text">
                Organizations and businesses that donate materials, supplies, spaces, services,
                food, tools, or other essential resources.
              </p>
            </article>
          </div>
        </div>
      </section>

      <section class="partners-impact section-padding" aria-labelledby="partners-impact-title">
        <div class="site-container">
          <div class="partners-impact__box">
            <h2 class="partners-impact__title" id="partners-impact-title">
              Your Partnership Makes a Real Difference
              <svg
                class="partners-impact__title-star"
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
                  d="M12 2l2.4 4.9 5.4.8-3.9 3.8.9 5.4L12 14.8 7.2 17l.9-5.4L4.2 7.7l5.4-.8L12 2z"
                />
              </svg>
            </h2>

            <p class="partners-impact__intro">
              Every partnership helps children dream bigger, explore their interests, and make a
              positive impact.
            </p>

            <div class="partners-impact__grid">
              <article class="partners-impact-card">
                <div class="lazy-img-wrap lazy-img-wrap--cover">
                  <img
                    class="partners-impact-card__photo lazy-img"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                    data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/partners-impact-photo-ideas.jpeg' ); ?>"
                    alt="Children painting a colorful community mural together"
                    width="400"
                    height="300"
                    decoding="async"
                  />
                </div>
                <h3 class="partners-impact-card__title">Ideas Become Real</h3>
                <p class="partners-impact-card__text">
                  Children see their ideas come to life through projects and experiences.
                </p>
                <img
                  class="partners-impact-card__deco"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/partners-impact-deco-heart-purple.jpeg' ); ?>"
                  alt=""
                  width="26"
                  height="26"
                  loading="lazy"
                  decoding="async"
                  aria-hidden="true"
                />
              </article>

              <article class="partners-impact-card">
                <div class="lazy-img-wrap lazy-img-wrap--cover">
                  <img
                    class="partners-impact-card__photo lazy-img"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                    data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/partners-impact-photo-skills.jpeg' ); ?>"
                    alt="A boy focused on a hands-on woodworking project"
                    width="400"
                    height="300"
                    decoding="async"
                  />
                </div>
                <h3 class="partners-impact-card__title">Skills Grow</h3>
                <p class="partners-impact-card__text">
                  They build confidence, learn new skills, and discover their strengths.
                </p>
                <img
                  class="partners-impact-card__deco"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/partners-impact-deco-leaf.jpeg' ); ?>"
                  alt=""
                  width="26"
                  height="26"
                  loading="lazy"
                  decoding="async"
                  aria-hidden="true"
                />
              </article>

              <article class="partners-impact-card">
                <div class="lazy-img-wrap lazy-img-wrap--cover">
                  <img
                    class="partners-impact-card__photo lazy-img"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                    data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/partners-impact-photo-communities.jpeg' ); ?>"
                    alt="Children holding a Dream Market sign at a community market"
                    width="400"
                    height="300"
                    decoding="async"
                  />
                </div>
                <h3 class="partners-impact-card__title">Communities Thrive</h3>
                <p class="partners-impact-card__text">
                  Our community becomes stronger, kinder, and more connected.
                </p>
                <img
                  class="partners-impact-card__deco"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/partners-impact-deco-heart-pink.jpeg' ); ?>"
                  alt=""
                  width="26"
                  height="26"
                  loading="lazy"
                  decoding="async"
                  aria-hidden="true"
                />
              </article>

              <article class="partners-impact-card">
                <div class="lazy-img-wrap lazy-img-wrap--cover">
                  <img
                    class="partners-impact-card__photo lazy-img"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                    data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/partners-impact-photo-opportunities.jpeg' ); ?>"
                    alt="Children planting seedlings together in a garden"
                    width="400"
                    height="300"
                    decoding="async"
                  />
                </div>
                <h3 class="partners-impact-card__title">Opportunities Expand</h3>
                <p class="partners-impact-card__text">
                  Partners open doors to new places, people, and real-world learning.
                </p>
                <img
                  class="partners-impact-card__deco"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/partners-impact-deco-star-yellow.jpeg' ); ?>"
                  alt=""
                  width="26"
                  height="26"
                  loading="lazy"
                  decoding="async"
                  aria-hidden="true"
                />
              </article>

              <article class="partners-impact-card">
                <div class="lazy-img-wrap lazy-img-wrap--cover">
                  <img
                    class="partners-impact-card__photo lazy-img"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                    data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/partners-impact-photo-kindness.jpeg' ); ?>"
                    alt="A girl reading kind messages on a wall of colorful paper hearts"
                    width="400"
                    height="300"
                    decoding="async"
                  />
                </div>
                <h3 class="partners-impact-card__title">Kindness Multiplies</h3>
                <p class="partners-impact-card__text">
                  When we invest in children, we create a brighter, more hopeful future.
                </p>
                <img
                  class="partners-impact-card__deco"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/partners-impact-deco-star-purple.jpeg' ); ?>"
                  alt=""
                  width="26"
                  height="26"
                  loading="lazy"
                  decoding="async"
                  aria-hidden="true"
                />
              </article>
            </div>
          </div>
        </div>
      </section>

      <section class="partners-opportunity-cta section-padding" aria-label="Share an opportunity">
        <div class="site-container partners-opportunity-cta__inner">
          <div class="partners-opportunity-cta__card">
            <div class="partners-opportunity-cta__lead">
              <h2 class="partners-opportunity-cta__title">
                Have an Opportunity for
                <span class="heading-underline heading-underline--partners-cta">
                  Bright Dreamers
                  <img
                    class="heading-underline__img"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/partners-heading-underline-removebg-preview.png' ); ?>"
                    alt=""
                    width="180"
                    height="12"
                    decoding="async"
                    aria-hidden="true"
                  />
                </span>
                ?
              </h2>
              <img
                class="partners-opportunity-cta__bulb"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/partners-opportunity-bulb-removebg-preview.png' ); ?>"
                alt=""
                width="72"
                height="72"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
            </div>

            <p class="partners-opportunity-cta__text">
              Do you have a space, project, challenge, skill, or community need that children could
              help explore creatively? We&rsquo;d love to hear your idea.
            </p>

            <a class="btn btn--lg btn-hover partners-opportunity-cta__btn" href="<?php echo esc_url( bdc_page_url( 'partner-inquiry.html' ) ); ?>">
              Share an Opportunity
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

            <img
              class="partners-opportunity-cta__plane"
              src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/partners-opportunity-plane-removebg-preview.png' ); ?>"
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

      <section class="partners-founding section-padding" aria-labelledby="partners-founding-title">
        <div class="site-container">
          <h2 class="partners-founding__title" id="partners-founding-title">
            Founding Partners Coming Soon
            <svg
              class="partners-founding__title-icon"
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

          <p class="partners-founding__intro">
            We&rsquo;re building a community of changemakers. Will your organization be one of our
            founding partners?
          </p>

          <div class="partners-founding__grid">
            <article class="partners-founding-card partners-founding-card--purple">
              <img
                class="partners-founding-card__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/partners-founding-icon-org.jpeg' ); ?>"
                alt=""
                width="84"
                height="84"
                loading="lazy"
                decoding="async"
              />
              <h3 class="partners-founding-card__title">Your Organization Here</h3>
              <p class="partners-founding-card__text">This space could feature your logo.</p>
            </article>

            <article class="partners-founding-card partners-founding-card--green">
              <img
                class="partners-founding-card__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/partners-founding-icon-founding-green.jpeg' ); ?>"
                alt=""
                width="84"
                height="84"
                loading="lazy"
                decoding="async"
              />
              <h3 class="partners-founding-card__title">Founding Partner</h3>
              <p class="partners-founding-card__text">
                Join us in shaping a brighter future for kids.
              </p>
            </article>

            <article class="partners-founding-card partners-founding-card--blue">
              <img
                class="partners-founding-card__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/partners-founding-icon-community.jpeg' ); ?>"
                alt=""
                width="84"
                height="84"
                loading="lazy"
                decoding="async"
              />
              <h3 class="partners-founding-card__title">Community Partner</h3>
              <p class="partners-founding-card__text">
                Together, we can inspire dreams and create impact.
              </p>
            </article>

            <article class="partners-founding-card partners-founding-card--pink">
              <img
                class="partners-founding-card__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/partners-founding-icon-megaphone.jpeg' ); ?>"
                alt=""
                width="84"
                height="84"
                loading="lazy"
                decoding="async"
              />
              <h3 class="partners-founding-card__title">Your Organization Here</h3>
              <p class="partners-founding-card__text">This space could feature your logo.</p>
            </article>

            <article class="partners-founding-card partners-founding-card--gold">
              <img
                class="partners-founding-card__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/partners-founding-icon-stars.jpeg' ); ?>"
                alt=""
                width="84"
                height="84"
                loading="lazy"
                decoding="async"
              />
              <h3 class="partners-founding-card__title">Founding Partner</h3>
              <p class="partners-founding-card__text">
                Be part of something meaningful from the start.
              </p>
            </article>
          </div>
        </div>
      </section>

      <!-- More partner sections can be added here -->
    </main>
<?php
get_footer();
