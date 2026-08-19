<?php
/**
 * Front page template — converted from index.html.
 *
 * @package Bright_Dreamers_Club
 */

get_header();
?>
    <main id="main-content">
      <section class="page-hero home-hero" aria-label="Welcome">
        <div class="site-container page-hero__inner">
          <div class="page-hero__content">
            <div class="home-hero__brand">
              <img
                class="home-hero__logo"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/bright-dreamers-logo.jpeg' ); ?>"
                alt="Bright Dreamers — Dream, Create, Grow, Give"
                width="380"
                height="110"
                decoding="async"
              />
            </div>

            <p class="page-hero__text">
              A nonprofit community where children's ideas become real projects
              that build confidence, creativity, kindness, and positive change.
            </p>

            <div class="page-hero__actions">
              <a class="btn btn--solid btn--lg btn-hover" href="<?php echo esc_url( bdc_page_url( 'apply-to-become.html' ) ); ?>">
                Apply to Become a Bright Dreamer
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

          <div class="home-hero__media">
            <div class="lazy-img-wrap">
              <img
                class="home-hero__banner lazy-img"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/home-hero-banner.png' ); ?>"
                alt="Three Bright Dreamers holding colorful heart flower drawings in a sunny park"
                width="1200"
                height="900"
                decoding="async"
              />
            </div>
          </div>
        </div>
      </section>

      <section class="home-pillars scroll-rise" aria-label="Bright Dreamers pillars">
        <div class="site-container">
          <div class="home-pillars__row">
            <article class="home-pillar home-pillar--idea">
              <div class="home-pillar__inner">
                <div class="home-pillar__figure">
                  <div class="lazy-img-wrap">
                    <img
                      class="home-pillar__img lazy-img"
                      src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                      data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/home-pillar-books.jpeg' ); ?>"
                      alt=""
                      width="280"
                      height="320"
                      decoding="async"
                    />
                  </div>
                </div>

                <div class="home-pillar__content">
                  <h2 class="home-pillar__title">
                    It All Starts With One Idea
                    <svg
                      class="home-pillar__title-icon home-pillar__title-icon--star"
                      viewBox="0 0 24 24"
                      width="20"
                      height="20"
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

                  <p class="home-pillar__quote">&ldquo;I have an idea.&rdquo;</p>

                  <p class="home-pillar__text">
                    At Bright Dreamers, children don&rsquo;t just imagine&mdash;they
                    create. They lead. They discover their talents while making a
                    positive difference in the world.
                  </p>
                </div>
              </div>
            </article>

            <article class="home-pillar home-pillar--mission">
              <div class="home-pillar__content home-pillar__content--full">
                <h2 class="home-pillar__title">
                  Our Mission
                  <svg
                    class="home-pillar__title-icon home-pillar__title-icon--heart"
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
                </h2>

                <p class="home-pillar__text">
                  We believe every child deserves the opportunity to:
                </p>

                <ul class="home-pillar__list">
                  <li>
                    <span class="home-pillar__check home-pillar__check--pink" aria-hidden="true">
                      <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 13l4 4L19 7" />
                      </svg>
                    </span>
                    Dream boldly.
                  </li>
                  <li>
                    <span class="home-pillar__check home-pillar__check--orange" aria-hidden="true">
                      <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 13l4 4L19 7" />
                      </svg>
                    </span>
                    Create confidently.
                  </li>
                  <li>
                    <span class="home-pillar__check home-pillar__check--green" aria-hidden="true">
                      <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 13l4 4L19 7" />
                      </svg>
                    </span>
                    Grow through real experiences.
                  </li>
                  <li>
                    <span class="home-pillar__check home-pillar__check--purple" aria-hidden="true">
                      <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 13l4 4L19 7" />
                      </svg>
                    </span>
                    Give their talents to help others.
                  </li>
                </ul>

                <p class="home-pillar__text">
                  Our mission is to help children discover who they are, what they
                  love, and the impact they can make.
                </p>

                <a class="home-pillar__link" href="<?php echo esc_url( bdc_page_url( 'about.html' ) ); ?>">
                  Learn About Us
                  <span aria-hidden="true">&rarr;</span>
                </a>
              </div>
            </article>

            <article class="home-pillar home-pillar--inspire">
              <div class="home-pillar__inner">
                <div class="home-pillar__figure">
                  <div class="lazy-img-wrap">
                    <img
                      class="home-pillar__img home-pillar__img--jar lazy-img"
                      src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                      data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/home-pillar-jar.jpeg' ); ?>"
                      alt=""
                      width="280"
                      height="320"
                      decoding="async"
                    />
                  </div>
                </div>

                <div class="home-pillar__content">
                  <p class="home-pillar__inspire-text">
                    Together, we can<br />
                    inspire big
                    <span class="home-pillar__accent home-pillar__accent--pink">dreams</span><br />
                    and create lasting<br />
                    <span class="heading-underline heading-underline--inspire">
                      <span class="home-pillar__accent home-pillar__accent--green"
                        >change.</span
                      >
                      <img
                        class="heading-underline__img"
                        src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/heading-underline.jpeg' ); ?>"
                        alt=""
                        width="120"
                        height="12"
                      />
                    </span>
                  </p>
                </div>
              </div>
            </article>
          </div>
        </div>
      </section>

      <section class="home-different scroll-rise scroll-rise--delay-1" aria-labelledby="home-different-title">
        <div class="site-container">
          <h2 class="home-different__title" id="home-different-title">
            What Makes Bright Dreamers Different?
            <svg
              class="home-different__title-icon"
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
          </h2>

          <div class="home-different__grid">
            <div class="home-different__item">
              <span class="home-different__icon-wrap" aria-hidden="true">
                <img
                  class="home-different__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/believe-icon-star.png' ); ?>"
                alt=""
                width="56"
                height="56"
                loading="lazy"
                decoding="async"
                />
              </span>
              <p class="home-different__text">
                <strong class="home-different__name">Dream</strong>
                Children imagine possibilities.
              </p>
            </div>

            <div class="home-different__item">
              <span class="home-different__icon-wrap" aria-hidden="true">
                <img
                  class="home-different__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/role-icon-palette.jpeg' ); ?>"
                alt=""
                width="56"
                height="56"
                loading="lazy"
                decoding="async"
                />
              </span>
              <p class="home-different__text">
                <strong class="home-different__name">Create</strong>
                Turn ideas into real projects.
              </p>
            </div>

            <div class="home-different__item">
              <span class="home-different__icon-wrap" aria-hidden="true">
                <img
                  class="home-different__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/home-diff-grow.jpeg' ); ?>"
                alt=""
                width="56"
                height="56"
                loading="lazy"
                decoding="async"
                />
              </span>
              <p class="home-different__text">
                <strong class="home-different__name">Grow</strong>
                Build confidence through experience.
              </p>
            </div>

            <div class="home-different__item">
              <span class="home-different__icon-wrap" aria-hidden="true">
                <img
                  class="home-different__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/home-diff-connect.jpeg' ); ?>"
                alt=""
                width="56"
                height="56"
                loading="lazy"
                decoding="async"
                />
              </span>
              <p class="home-different__text">
                <strong class="home-different__name">Connect</strong>
                Work together and make friends.
              </p>
            </div>

            <div class="home-different__item">
              <span class="home-different__icon-wrap" aria-hidden="true">
                <img
                  class="home-different__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/home-diff-lead.jpeg' ); ?>"
                alt=""
                width="56"
                height="56"
                loading="lazy"
                decoding="async"
                />
              </span>
              <p class="home-different__text">
                <strong class="home-different__name">Lead</strong>
                Share ideas and solve problems.
              </p>
            </div>

            <div class="home-different__item">
              <span class="home-different__icon-wrap" aria-hidden="true">
                <img
                  class="home-different__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/home-diff-give.jpeg' ); ?>"
                alt=""
                width="56"
                height="56"
                loading="lazy"
                decoding="async"
                />
              </span>
              <p class="home-different__text">
                <strong class="home-different__name">Give</strong>
                Use creativity to help others.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="home-reality scroll-rise scroll-rise--delay-2" aria-labelledby="home-reality-title">
        <div class="site-container">
          <div class="home-reality__box">
            <span class="home-reality__deco-wrap home-reality__deco-wrap--left" aria-hidden="true">
              <img
                class="home-reality__deco"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/believe-deco-dots-removebg-preview.png' ); ?>"
                alt=""
                loading="lazy"
                decoding="async"
              />
            </span>
            <span class="home-reality__deco-wrap home-reality__deco-wrap--right" aria-hidden="true">
              <img
                class="home-reality__deco"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/believe-deco-dots-removebg-preview (1).png' ); ?>"
                alt=""
                loading="lazy"
                decoding="async"
              />
            </span>

            <div class="home-reality__inner">
          <h2 class="home-reality__title" id="home-reality-title">
            How Ideas Become Reality
            <svg
              class="home-reality__title-icon"
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
          </h2>

          <div class="home-reality__steps">
            <div class="home-reality-step">
              <span class="home-reality-step__icon-wrap home-reality-step__icon-wrap--dream" aria-hidden="true">
                <img
                  class="home-reality-step__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/home-reality-dream.png' ); ?>"
                  alt=""
                  loading="lazy"
                  decoding="async"
                />
              </span>
              <p class="home-reality-step__title home-reality-step__title--dream">Dream</p>
              <p class="home-reality-step__text">It starts with a spark of an idea.</p>
            </div>

            <img
              class="home-reality-step__arrow"
              src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/approach-arrow.jpeg' ); ?>"
              alt=""
              width="32"
              height="16"
              aria-hidden="true"
            />

            <div class="home-reality-step">
              <span class="home-reality-step__icon-wrap home-reality-step__icon-wrap--imagine" aria-hidden="true">
                <img
                  class="home-reality-step__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/home-reality-imagine.png' ); ?>"
                  alt=""
                  loading="lazy"
                  decoding="async"
                />
              </span>
              <p class="home-reality-step__title home-reality-step__title--imagine">Imagine</p>
              <p class="home-reality-step__text">We explore and plan together.</p>
            </div>

            <img
              class="home-reality-step__arrow"
              src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/approach-arrow.jpeg' ); ?>"
              alt=""
              width="32"
              height="16"
              aria-hidden="true"
            />

            <div class="home-reality-step">
              <span class="home-reality-step__icon-wrap home-reality-step__icon-wrap--create" aria-hidden="true">
                <img
                  class="home-reality-step__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/home-reality-create.png' ); ?>"
                  alt=""
                  loading="lazy"
                  decoding="async"
                />
              </span>
              <p class="home-reality-step__title home-reality-step__title--create">Create</p>
              <p class="home-reality-step__text">We build, design, and make.</p>
            </div>

            <img
              class="home-reality-step__arrow"
              src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/approach-arrow.jpeg' ); ?>"
              alt=""
              width="32"
              height="16"
              aria-hidden="true"
            />

            <div class="home-reality-step">
              <span class="home-reality-step__icon-wrap home-reality-step__icon-wrap--share" aria-hidden="true">
                <img
                  class="home-reality-step__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/home-reality-share.png' ); ?>"
                  alt=""
                  loading="lazy"
                  decoding="async"
                />
              </span>
              <p class="home-reality-step__title home-reality-step__title--share">Share</p>
              <p class="home-reality-step__text">We present, celebrate, and inspire.</p>
            </div>

            <img
              class="home-reality-step__arrow"
              src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/approach-arrow.jpeg' ); ?>"
              alt=""
              width="32"
              height="16"
              aria-hidden="true"
            />

            <div class="home-reality-step">
              <span class="home-reality-step__icon-wrap home-reality-step__icon-wrap--help" aria-hidden="true">
                <img
                  class="home-reality-step__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/home-reality-help.png' ); ?>"
                  alt=""
                  loading="lazy"
                  decoding="async"
                />
              </span>
              <p class="home-reality-step__title home-reality-step__title--help">Help Others</p>
              <p class="home-reality-step__text">We use our ideas to make a difference.</p>
            </div>

            <img
              class="home-reality-step__arrow"
              src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/approach-arrow.jpeg' ); ?>"
              alt=""
              width="32"
              height="16"
              aria-hidden="true"
            />

            <div class="home-reality-step">
              <span class="home-reality-step__icon-wrap home-reality-step__icon-wrap--celebrate" aria-hidden="true">
                <img
                  class="home-reality-step__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/home-reality-celebrate.png' ); ?>"
                  alt=""
                  loading="lazy"
                  decoding="async"
                />
              </span>
              <p class="home-reality-step__title home-reality-step__title--celebrate">Celebrate</p>
              <p class="home-reality-step__text">
                We cheer each other on and keep growing!
              </p>
            </div>
          </div>
            </div>
          </div>
        </div>
      </section>

      <section class="home-explore scroll-rise scroll-rise--delay-1" aria-labelledby="home-explore-title">
        <div class="site-container">
          <h2 class="home-explore__title" id="home-explore-title">
            Explore Experiences
            <svg
              class="home-explore__title-icon"
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

          <div class="home-explore__grid">
            <article class="experience-card">
              <div class="experience-card__media">
                <div class="lazy-img-wrap lazy-img-wrap--cover">
                  <img
                    class="experience-card__photo lazy-img"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                    data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-makers-photo.jpeg' ); ?>"
                    alt="A young girl painting with watercolors"
                    width="400"
                    height="300"
                    decoding="async"
                  />
                </div>
                <span class="experience-card__icon-wrap" aria-hidden="true">
                  <img
                    class="experience-card__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-makers-icon.jpeg' ); ?>"
                  alt=""
                  width="44"
                  height="44"
                  loading="lazy"
                    decoding="async"
                  />
                </span>
              </div>
              <h3 class="experience-card__title">Creative Makers</h3>
              <p class="experience-card__text">
                Art, design, crafts, and creative projects that bring ideas to life.
              </p>
              <a class="experience-card__link" href="<?php echo esc_url( bdc_page_url( 'creative-makers.html' ) ); ?>">
                Learn More
                <span aria-hidden="true">&rarr;</span>
              </a>
            </article>

            <article class="experience-card">
              <div class="experience-card__media">
                <div class="lazy-img-wrap lazy-img-wrap--cover">
                  <img
                    class="experience-card__photo lazy-img"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                    data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-ideas-photo.jpeg' ); ?>"
                    alt="Two boys working on a creative science project"
                    width="400"
                    height="300"
                    decoding="async"
                  />
                </div>
                <span class="experience-card__icon-wrap" aria-hidden="true">
                  <img
                    class="experience-card__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-ideas-icon.jpeg' ); ?>"
                  alt=""
                  width="44"
                  height="44"
                  loading="lazy"
                    decoding="async"
                  />
                </span>
              </div>
              <h3 class="experience-card__title">Young Ideas Lab</h3>
              <p class="experience-card__text">
                Science, innovation, coding, and invention for curious minds.
              </p>
              <a class="experience-card__link" href="<?php echo esc_url( bdc_page_url( 'young-ideas-lab.html' ) ); ?>">
                Learn More
                <span aria-hidden="true">&rarr;</span>
              </a>
            </article>

            <article class="experience-card">
              <div class="experience-card__media">
                <div class="lazy-img-wrap lazy-img-wrap--cover">
                  <img
                    class="experience-card__photo lazy-img"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                    data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-cause-photo.jpeg' ); ?>"
                    alt="Children working together on a community cleanup project"
                    width="400"
                    height="300"
                    decoding="async"
                  />
                </div>
                <span class="experience-card__icon-wrap" aria-hidden="true">
                  <img
                    class="experience-card__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-cause-icon.jpeg' ); ?>"
                  alt=""
                  width="44"
                  height="44"
                  loading="lazy"
                    decoding="async"
                  />
                </span>
              </div>
              <h3 class="experience-card__title">Create for a Cause</h3>
              <p class="experience-card__text">
                Projects that help our community and make the world better.
              </p>
              <a class="experience-card__link" href="<?php echo esc_url( bdc_page_url( 'create-for-cause.html' ) ); ?>">
                Learn More
                <span aria-hidden="true">&rarr;</span>
              </a>
            </article>

            <article class="experience-card">
              <div class="experience-card__media">
                <div class="lazy-img-wrap lazy-img-wrap--cover">
                  <img
                    class="experience-card__photo lazy-img"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                    data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-adventures-photo.jpeg' ); ?>"
                    alt="Children exploring outdoors with binoculars"
                    width="400"
                    height="300"
                    decoding="async"
                  />
                </div>
                <span class="experience-card__icon-wrap" aria-hidden="true">
                  <img
                    class="experience-card__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-adventures-icon.jpeg' ); ?>"
                  alt=""
                  width="44"
                  height="44"
                  loading="lazy"
                    decoding="async"
                  />
                </span>
              </div>
              <h3 class="experience-card__title">Community Adventures</h3>
              <p class="experience-card__text">
                Explore, discover, and learn through real-world adventures.
              </p>
              <a class="experience-card__link" href="<?php echo esc_url( bdc_page_url( 'community-adventures.html' ) ); ?>">
                Learn More
                <span aria-hidden="true">&rarr;</span>
              </a>
            </article>
          </div>
        </div>
      </section>

      <section class="home-spotlight scroll-rise scroll-rise--delay-2" aria-label="Children lead at Bright Dreamers">
        <div class="site-container">
          <div class="home-spotlight__grid">
          <article class="spotlight-card spotlight-card--ideas">
            <div class="spotlight-card__content">
              <h3 class="spotlight-card__title">
                Children&rsquo;s Ideas Matter
                <svg
                  class="spotlight-card__title-icon spotlight-card__title-icon--star"
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

              <div class="spotlight-card__copy">
                <p class="spotlight-card__lead">
                  Bright Dreamers is built with children&mdash;not just for children.
                </p>
                <p class="spotlight-card__body">
                  Many of our projects begin with children&rsquo;s own ideas.
                  Children help imagine new activities, suggest community projects,
                  and inspire future programs through our Young Dreamers Council.
                </p>
                <p class="spotlight-card__highlight">
                  Because the best ideas sometimes<br />
                  come from the smallest voices.
                </p>
              </div>
            </div>

            <div class="spotlight-card__figure">
              <span class="spotlight-card__figure-wrap spotlight-card__figure-wrap--ideas" aria-hidden="true">
                <div class="lazy-img-wrap lazy-img-wrap--fill">
                  <img
                    class="spotlight-card__figure-img lazy-img"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                    data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/home-ideas-photo.jpeg' ); ?>"
                    alt="Children collaborating together at a table"
                    width="520"
                    height="360"
                    decoding="async"
                  />
                </div>
              </span>
            </div>
          </article>

          <article class="spotlight-card spotlight-card--council">
            <div class="spotlight-card__content">
              <h3 class="spotlight-card__title">
                Young Dreamers Council
                <svg
                  class="spotlight-card__title-icon spotlight-card__title-icon--crown"
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

              <ul class="spotlight-card__list">
                <li>Share ideas</li>
                <li>Suggest projects</li>
                <li>Identify causes they care about</li>
                <li>Vote on activities</li>
                <li>Help shape the future</li>
              </ul>

              <p class="spotlight-card__note">
                Adult mentors guide and support them every step of the way.
              </p>

              <a class="btn btn--outline btn-hover spotlight-card__btn" href="<?php echo esc_url( bdc_page_url( 'about.html' ) ); ?>">
                Learn How It Works
                <span aria-hidden="true">&rarr;</span>
              </a>
            </div>

            <div class="spotlight-card__figure">
              <span class="spotlight-card__figure-wrap" aria-hidden="true">
                <div class="lazy-img-wrap lazy-img-wrap--fill">
                  <img
                    class="spotlight-card__figure-img lazy-img"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                    data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/home-council-illustration-removebg-preview.png' ); ?>"
                    alt=""
                    width="400"
                    height="400"
                    decoding="async"
                  />
                </div>
              </span>
            </div>
          </article>
          </div>
        </div>
      </section>

      <!-- HOME SECTIONS GO HERE -->
    </main>

<?php
get_footer();
