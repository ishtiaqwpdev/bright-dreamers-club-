<?php
/**
 * Our Vision page template — converted from our-vision.html.
 *
 * Template Name: Our Vision
 *
 * @package Bright_Dreamers_Club
 */

get_header();
?>
    <main id="main-content">
      <section class="page-hero vision-hero about-hero" aria-label="Our Vision">
        <div class="site-container page-hero__inner">
          <div class="page-hero__content vision-hero__content">
            <p class="vision-hero__eyebrow">
              OUR VISION
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
                <span class="vision-hero__title-line vision-hero__title-line--navy">Building a</span>
                <span class="vision-hero__title-line vision-hero__title-line--pink"
                  >Brighter Future</span
                >
                <span class="vision-hero__title-line vision-hero__title-line--navy">Together</span>
              </h1>
            </div>

            <p class="vision-hero__lead">
              Every meaningful change can begin with something very small<br />
              <span class="vision-hero__accent vision-hero__accent--pink"
                >a child saying, &ldquo;I have an idea.&rdquo;</span
              >
            </p>

            <p class="vision-hero__text">
              Bright Dreamers creates a community where children are encouraged to explore what
              excites them, discover their talents, bring their ideas to life, and use their
              creativity to help others.
            </p>

            <ul class="vision-hero__list">
              <li>
                <span class="vision-hero__check" aria-hidden="true">
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
                Adults provide the support, resources, safety, and encouragement.
              </li>
              <li>
                <span class="vision-hero__check" aria-hidden="true">
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
                Children help shape the journey.
              </li>
            </ul>
          </div>

          <div class="about-hero__media">
            <div class="lazy-img-wrap">
              <img
                class="about-hero__banner lazy-img"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/our-vision-hero-banner.png' ); ?>"
                alt="Children painting a mural with the words Big Ideas Brighter Tomorrows"
                width="1200"
                height="900"
                decoding="async"
              />
            </div>
          </div>
        </div>
      </section>

      <section class="vision-pillars section-padding" aria-labelledby="vision-pillars-title">
        <div class="site-container">
          <h2 class="vision-pillars__title" id="vision-pillars-title">
            Our Vision
            <svg
              class="vision-pillars__title-icon"
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

          <div class="vision-pillars__grid">
            <article class="vision-pillar-card vision-pillar-card--pink">
              <img
                class="vision-pillar-card__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/vision-pillar-icon-dream.png' ); ?>"
                alt=""
                width="72"
                height="72"
                loading="lazy"
                decoding="async"
              />
              <h3 class="vision-pillar-card__title">Let Children Dream</h3>
              <p class="vision-pillar-card__text">
                Create safe spaces for children to imagine, ask questions, and discover what truly
                interests them.
              </p>
              <img
                class="vision-pillar-card__deco vision-pillar-card__deco--heart-bl"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/vision-pillar-deco-heart-removebg-preview.png' ); ?>"
                alt=""
                width="40"
                height="40"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
              <svg
                class="vision-pillar-card__deco vision-pillar-card__deco--star-br"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.6"
                stroke-linejoin="round"
                aria-hidden="true"
              >
                <path
                  d="M12 2.8l2.55 5.35 5.85.7-4.35 3.95 1.2 5.75L12 15.7l-5.25 2.85 1.2-5.75-4.35-3.95 5.85-.7L12 2.8z"
                />
              </svg>
            </article>

            <article class="vision-pillar-card vision-pillar-card--purple">
              <img
                class="vision-pillar-card__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/vision-pillar-icon-ideas.png' ); ?>"
                alt=""
                width="72"
                height="72"
                loading="lazy"
                decoding="async"
              />
              <h3 class="vision-pillar-card__title">Turn Ideas Into Reality</h3>
              <p class="vision-pillar-card__text">
                Help children transform their own ideas into art, inventions, projects, writings and
                solutions&mdash;and gain real-world experience.
              </p>
              <img
                class="vision-pillar-card__deco vision-pillar-card__deco--heart-br vision-pillar-card__deco--offset-up"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/vision-pillar-deco-heart-removebg-preview.png' ); ?>"
                alt=""
                width="40"
                height="40"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
              <img
                class="vision-pillar-card__deco vision-pillar-card__deco--heart-br"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/vision-pillar-deco-heart-removebg-preview.png' ); ?>"
                alt=""
                width="40"
                height="40"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
            </article>

            <article class="vision-pillar-card vision-pillar-card--green">
              <img
                class="vision-pillar-card__icon vision-pillar-card__icon--purpose"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/vision-pillar-icon-purpose.png' ); ?>"
                alt=""
                width="72"
                height="72"
                loading="lazy"
                decoding="async"
              />
              <h3 class="vision-pillar-card__title">Create With Purpose</h3>
              <p class="vision-pillar-card__text">
                Show children that what they create can bring joy, support others, and help make our
                community and world better.
              </p>
              <img
                class="vision-pillar-card__deco vision-pillar-card__deco--leaf-br vision-pillar-card__deco--offset-up"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/vision-pillar-deco-leaf-removebg-preview.png' ); ?>"
                alt=""
                width="40"
                height="40"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
              <img
                class="vision-pillar-card__deco vision-pillar-card__deco--leaf-br"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/vision-pillar-deco-leaf-removebg-preview.png' ); ?>"
                alt=""
                width="40"
                height="40"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
            </article>

            <article class="vision-pillar-card vision-pillar-card--orange">
              <img
                class="vision-pillar-card__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/vision-pillar-icon-grow.png' ); ?>"
                alt=""
                width="72"
                height="72"
                loading="lazy"
                decoding="async"
              />
              <h3 class="vision-pillar-card__title">Grow Together</h3>
              <p class="vision-pillar-card__text">
                Bring children, families, volunteers, businesses, artists, and community partners
                together to build young leaders and stronger communities.
              </p>
              <svg
                class="vision-pillar-card__deco vision-pillar-card__deco--star-tr"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.6"
                stroke-linejoin="round"
                aria-hidden="true"
              >
                <path
                  d="M12 2.8l2.55 5.35 5.85.7-4.35 3.95 1.2 5.75L12 15.7l-5.25 2.85 1.2-5.75-4.35-3.95 5.85-.7L12 2.8z"
                />
              </svg>
              <img
                class="vision-pillar-card__deco vision-pillar-card__deco--heart-br"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/vision-pillar-deco-heart-removebg-preview.png' ); ?>"
                alt=""
                width="40"
                height="40"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
            </article>
          </div>
        </div>
      </section>

      <section class="vision-roadmap section-padding" aria-labelledby="vision-roadmap-title">
        <div class="site-container vision-roadmap__inner">
          <div class="vision-roadmap__goals">
            <h2 class="vision-roadmap__title" id="vision-roadmap-title">
              Our First Goals
              <svg
                class="vision-roadmap__title-icon"
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
            <p class="vision-roadmap__intro">We are starting with a few simple goals:</p>
            <ul class="vision-roadmap__list">
              <li>
                <span class="vision-roadmap__check" aria-hidden="true">
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
                Welcome our first Bright Dreamers
              </li>
              <li>
                <span class="vision-roadmap__check" aria-hidden="true">
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
                Listen to children&rsquo;s ideas
              </li>
              <li>
                <span class="vision-roadmap__check" aria-hidden="true">
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
                Launch our Young Dreamers Council
              </li>
              <li>
                <span class="vision-roadmap__check" aria-hidden="true">
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
                Turn the first child-inspired idea into a real project
              </li>
              <li>
                <span class="vision-roadmap__check" aria-hidden="true">
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
                Create our first community art or kindness project
              </li>
              <li>
                <span class="vision-roadmap__check" aria-hidden="true">
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
                Hold our first Dream Market
              </li>
              <li>
                <span class="vision-roadmap__check" aria-hidden="true">
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
                Build relationships with local businesses and community partners
              </li>
              <li>
                <span class="vision-roadmap__check" aria-hidden="true">
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
                Create more opportunities for children to discover what they love
              </li>
            </ul>
          </div>

          <div class="vision-roadmap__journey">
            <h2 class="vision-roadmap__title" id="vision-journey-title">
              Our Journey Begins Here
              <svg
                class="vision-roadmap__title-icon"
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

            <div class="vision-journey-steps" role="list" aria-labelledby="vision-journey-title">
              <div class="vision-journey-step vision-journey-step--pink" role="listitem">
                <div class="vision-journey-step__icon-wrap">
                  <img
                    class="vision-journey-step__icon"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/vision-journey-icon-idea.jpeg' ); ?>"
                    alt=""
                    width="68"
                    height="68"
                    loading="lazy"
                    decoding="async"
                  />
                  <span class="vision-journey-step__num">1</span>
                </div>
                <p class="vision-journey-step__title">The Idea</p>
                <p class="vision-journey-step__quote">&ldquo;What if...?&rdquo;</p>
                <p class="vision-journey-step__text">A child shares an idea.</p>
              </div>

              <img
                class="vision-journey-step__arrow"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/approach-arrow.jpeg' ); ?>"
                alt=""
                width="32"
                height="16"
                loading="lazy"
                decoding="async"
              />

              <div class="vision-journey-step vision-journey-step--purple" role="listitem">
                <div class="vision-journey-step__icon-wrap">
                  <img
                    class="vision-journey-step__icon"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/vision-journey-icon-community.jpeg' ); ?>"
                    alt=""
                    width="68"
                    height="68"
                    loading="lazy"
                    decoding="async"
                  />
                  <span class="vision-journey-step__num">2</span>
                </div>
                <p class="vision-journey-step__title">The Community</p>
                <p class="vision-journey-step__quote">&ldquo;Let&rsquo;s explore it.&rdquo;</p>
                <p class="vision-journey-step__text">
                  Children and adults think about how it could become possible.
                </p>
              </div>

              <img
                class="vision-journey-step__arrow"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/approach-arrow.jpeg' ); ?>"
                alt=""
                width="32"
                height="16"
                loading="lazy"
                decoding="async"
              />

              <div class="vision-journey-step vision-journey-step--green" role="listitem">
                <div class="vision-journey-step__icon-wrap">
                  <img
                    class="vision-journey-step__icon"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/vision-journey-icon-project.jpeg' ); ?>"
                    alt=""
                    width="68"
                    height="68"
                    loading="lazy"
                    decoding="async"
                  />
                  <span class="vision-journey-step__num">3</span>
                </div>
                <p class="vision-journey-step__title">The Project</p>
                <p class="vision-journey-step__quote">&ldquo;Let&rsquo;s make it.&rdquo;</p>
                <p class="vision-journey-step__text">
                  The idea becomes art, a product, an event, or a community project.
                </p>
              </div>

              <img
                class="vision-journey-step__arrow"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/approach-arrow.jpeg' ); ?>"
                alt=""
                width="32"
                height="16"
                loading="lazy"
                decoding="async"
              />

              <div class="vision-journey-step vision-journey-step--orange" role="listitem">
                <div class="vision-journey-step__icon-wrap">
                  <img
                    class="vision-journey-step__icon"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/vision-journey-icon-impact.jpeg' ); ?>"
                    alt=""
                    width="68"
                    height="68"
                    loading="lazy"
                    decoding="async"
                  />
                  <span class="vision-journey-step__num">4</span>
                </div>
                <p class="vision-journey-step__title">The Impact</p>
                <p class="vision-journey-step__quote">&ldquo;Who can this help?&rdquo;</p>
                <p class="vision-journey-step__text">
                  Children decide how their creation can make a difference.
                </p>
              </div>

              <img
                class="vision-journey-step__arrow"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/approach-arrow.jpeg' ); ?>"
                alt=""
                width="32"
                height="16"
                loading="lazy"
                decoding="async"
              />

              <div class="vision-journey-step vision-journey-step--blue" role="listitem">
                <div class="vision-journey-step__icon-wrap">
                  <img
                    class="vision-journey-step__icon"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/vision-journey-icon-celebration.jpeg' ); ?>"
                    alt=""
                    width="68"
                    height="68"
                    loading="lazy"
                    decoding="async"
                  />
                  <span class="vision-journey-step__num">5</span>
                </div>
                <p class="vision-journey-step__title">The Celebration</p>
                <p class="vision-journey-step__quote">&ldquo;Look what we did together!&rdquo;</p>
                <p class="vision-journey-step__text">
                  Children share what they created and celebrate their progress.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="vision-moments section-padding" aria-labelledby="vision-moments-title">
        <div class="site-container vision-moments__inner">
          <article class="vision-moments__card">
            <h2 class="vision-section__title" id="vision-moments-title">
              Moments We&rsquo;ll Create Together
              <svg
                class="vision-section__title-icon"
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
            <p class="vision-moments__intro">
              Soon, this space will be filled with real moments created by Bright Dreamers.
            </p>
            <ul class="vision-moments__list">
              <li>
                <span class="vision-moments__check" aria-hidden="true">
                  <svg viewBox="0 0 24 24" width="10" height="10" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7" /></svg>
                </span>
                Community murals
              </li>
              <li>
                <span class="vision-moments__check" aria-hidden="true">
                  <svg viewBox="0 0 24 24" width="10" height="10" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7" /></svg>
                </span>
                Gardens
              </li>
              <li>
                <span class="vision-moments__check" aria-hidden="true">
                  <svg viewBox="0 0 24 24" width="10" height="10" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7" /></svg>
                </span>
                Dream Market
              </li>
              <li>
                <span class="vision-moments__check" aria-hidden="true">
                  <svg viewBox="0 0 24 24" width="10" height="10" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7" /></svg>
                </span>
                Creative collaborators
              </li>
              <li>
                <span class="vision-moments__check" aria-hidden="true">
                  <svg viewBox="0 0 24 24" width="10" height="10" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7" /></svg>
                </span>
                Kindness projects
              </li>
              <li>
                <span class="vision-moments__check" aria-hidden="true">
                  <svg viewBox="0 0 24 24" width="10" height="10" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7" /></svg>
                </span>
                Donation drives
              </li>
              <li>
                <span class="vision-moments__check" aria-hidden="true">
                  <svg viewBox="0 0 24 24" width="10" height="10" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7" /></svg>
                </span>
                Presenting ideas
              </li>
              <li>
                <span class="vision-moments__check" aria-hidden="true">
                  <svg viewBox="0 0 24 24" width="10" height="10" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7" /></svg>
                </span>
                Children&rsquo;s events
              </li>
              <li class="vision-moments__list-more">
                <span class="vision-moments__check" aria-hidden="true">
                  <svg viewBox="0 0 24 24" width="10" height="10" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7" /></svg>
                </span>
                And so much more!
              </li>
            </ul>
          </article>

          <div class="vision-moments__gallery">
            <figure class="vision-moments__photo-wrap">
              <div class="lazy-img-wrap">
                <img
                  class="vision-moments__photo lazy-img"
                  src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                  data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/vision-moments-photo-art.jpeg' ); ?>"
                  alt="Children creating colorful art together"
                  width="320"
                  height="400"
                  decoding="async"
                />
              </div>
            </figure>

            <figure class="vision-moments__feature">
              <div class="vision-moments__feature-inner">
                <div class="lazy-img-wrap">
                  <img
                    class="vision-moments__feature-img lazy-img"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                    data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/vision-moments-banner.jpeg' ); ?>"
                    alt=""
                    width="900"
                    height="400"
                    decoding="async"
                    aria-hidden="true"
                  />
                </div>
                <figcaption class="vision-moments__feature-copy">
                  <p class="vision-moments__feature-title">Our story is just beginning.</p>
                  <p class="vision-moments__feature-text">
                    We can&rsquo;t wait to fill this space with creativity, courage, friendship, and
                    kindness.
                  </p>
                </figcaption>
              </div>
            </figure>

            <div class="vision-moments__photo-duo">
              <figure class="vision-moments__photo-wrap">
                <div class="lazy-img-wrap">
                  <img
                    class="vision-moments__photo lazy-img"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                    data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/vision-moments-photo-read.jpeg' ); ?>"
                    alt="Children reading and learning together"
                    width="320"
                    height="400"
                    decoding="async"
                  />
                </div>
              </figure>

              <figure class="vision-moments__photo-wrap">
                <div class="lazy-img-wrap">
                  <img
                    class="vision-moments__photo lazy-img"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                    data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/vision-moments-photo-give.jpeg' ); ?>"
                    alt="Children placing hearts in a kindness donation box"
                    width="320"
                    height="400"
                    decoding="async"
                  />
                </div>
              </figure>
            </div>
          </div>
        </div>
      </section>

      <section class="vision-partner section-padding" aria-labelledby="vision-partner-title">
        <div class="site-container">
          <div class="vision-partner__card">
            <div class="vision-partner__inner">
              <div class="vision-partner__copy">
                <h2 class="vision-section__title" id="vision-partner-title">
                  Become a Founding Partner
                  <svg
                    class="vision-section__title-icon"
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
                <p class="vision-partner__intro">
                  Help bring young ideas to life. We&rsquo;re looking for businesses, artists, mentors,
                  volunteers, community organizations, and supporters who believe children deserve
                  opportunities to explore their ideas.
                </p>
              </div>

              <div class="vision-partner__panel">
                <div class="vision-partner__panel-inner">
                  <div class="vision-partner__icons" role="list">
                <div class="vision-partner__icon-item" role="listitem">
                  <img
                    class="vision-partner__icon"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/vision-partner-icon-materials.jpeg' ); ?>"
                    alt=""
                    width="52"
                    height="52"
                    loading="lazy"
                    decoding="async"
                  />
                  <p class="vision-partner__icon-label">Materials &amp; Supplies</p>
                </div>
                <div class="vision-partner__icon-item" role="listitem">
                  <img
                    class="vision-partner__icon"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/vision-partner-icon-space.jpeg' ); ?>"
                    alt=""
                    width="52"
                    height="52"
                    loading="lazy"
                    decoding="async"
                  />
                  <p class="vision-partner__icon-label">Creative Space</p>
                </div>
                <div class="vision-partner__icon-item" role="listitem">
                  <img
                    class="vision-partner__icon"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/vision-partner-icon-skills.jpeg' ); ?>"
                    alt=""
                    width="52"
                    height="52"
                    loading="lazy"
                    decoding="async"
                  />
                  <p class="vision-partner__icon-label">Professional Skills</p>
                </div>
                <div class="vision-partner__icon-item" role="listitem">
                  <img
                    class="vision-partner__icon"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/vision-partner-icon-community.jpeg' ); ?>"
                    alt=""
                    width="52"
                    height="52"
                    loading="lazy"
                    decoding="async"
                  />
                  <p class="vision-partner__icon-label">Community Opportunities</p>
                </div>
                <div class="vision-partner__icon-item" role="listitem">
                  <img
                    class="vision-partner__icon"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/vision-partner-icon-mentorship.png' ); ?>"
                    alt=""
                    width="52"
                    height="52"
                    loading="lazy"
                    decoding="async"
                  />
                  <p class="vision-partner__icon-label">Mentorship</p>
                </div>
                <div class="vision-partner__icon-item" role="listitem">
                  <img
                    class="vision-partner__icon"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/vision-partner-icon-event.jpeg' ); ?>"
                    alt=""
                    width="52"
                    height="52"
                    loading="lazy"
                    decoding="async"
                  />
                  <p class="vision-partner__icon-label">Event</p>
                </div>
                <div class="vision-partner__icon-item" role="listitem">
                  <img
                    class="vision-partner__icon"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/vision-partner-icon-funding.jpeg' ); ?>"
                    alt=""
                    width="52"
                    height="52"
                    loading="lazy"
                    decoding="async"
                  />
                  <p class="vision-partner__icon-label">Project Funding</p>
                </div>
              </div>

                  <div class="vision-partner__cta-wrap">
                    <a class="btn btn--purple btn--lg btn-hover vision-partner__btn" href="<?php echo esc_url( bdc_page_url( 'get-involved.html' ) ); ?>">
                      Become a Founding Partner
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
                    <svg
                      class="vision-partner__cta-heart"
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
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="vision-together section-padding" aria-labelledby="vision-together-title">
        <div class="site-container">
          <div class="vision-together__card">
            <div class="vision-together__grid">
              <div class="vision-together__jar-wrap">
                <div class="lazy-img-wrap">
                  <img
                    class="vision-together__jar lazy-img"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                    data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/vision-together-jar.png' ); ?>"
                    alt=""
                    width="170"
                    height="200"
                    decoding="async"
                    aria-hidden="true"
                  />
                </div>
                <img
                  class="vision-together__stars"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/for-parents-expect-stars.png' ); ?>"
                  alt=""
                  width="44"
                  height="44"
                  loading="lazy"
                  decoding="async"
                  aria-hidden="true"
                />
              </div>

              <h2 class="vision-together__title" id="vision-together-title">
                Together, We Can Turn Little Ideas Into Something
                <span class="vision-together__accent">Big</span>
                <svg
                  class="vision-together__title-icon"
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
              </h2>

              <ul class="vision-together__list">
                <li>
                  <span class="vision-together__check" aria-hidden="true">
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
                  A mural can brighten a neighborhood.
                </li>
                <li>
                  <span class="vision-together__check" aria-hidden="true">
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
                  A handmade creation can support a local cause.
                </li>
                <li>
                  <span class="vision-together__check" aria-hidden="true">
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
                  A garden can bring people together.
                </li>
                <li>
                  <span class="vision-together__check" aria-hidden="true">
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
                  A child&rsquo;s idea can become a project.
                </li>
                <li>
                  <span class="vision-together__check" aria-hidden="true">
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
                  And a project can make a child discover &ldquo;I can create something that
                  matters.&rdquo;
                </li>
              </ul>

              <div class="vision-together__actions">
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
                    <path d="M5 12h14M13 6l6 6-6 6" />
                  </svg>
                </a>
                <a
                  class="btn btn--outline btn--lg btn-hover vision-together__btn-outline"
                  href="<?php echo esc_url( bdc_page_url( 'about.html' ) ); ?>"
                >
                  Explore Our Story
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
                    <circle cx="12" cy="12" r="9" />
                    <path d="M10 8.5v7l5.5-3.5L10 8.5z" fill="currentColor" stroke="none" />
                  </svg>
                </a>
                <a class="btn btn--orange btn--lg btn-hover" href="<?php echo esc_url( bdc_page_url( 'get-involved.html' ) ); ?>">
                  Support Our Vision
                  <svg
                    class="btn__icon"
                    viewBox="0 0 24 24"
                    width="16"
                    height="16"
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
                <div class="vision-together__deco-stars" aria-hidden="true">
                  <svg class="vision-together__deco-star" viewBox="0 0 24 24" fill="currentColor">
                    <path
                      d="M12 2.8l2.55 5.35 5.85.7-4.35 3.95 1.2 5.75L12 15.7l-5.25 2.85 1.2-5.75-4.35-3.95 5.85-.7L12 2.8z"
                    />
                  </svg>
                  <svg class="vision-together__deco-star" viewBox="0 0 24 24" fill="currentColor">
                    <path
                      d="M12 2.8l2.55 5.35 5.85.7-4.35 3.95 1.2 5.75L12 15.7l-5.25 2.85 1.2-5.75-4.35-3.95 5.85-.7L12 2.8z"
                    />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- OUR VISION SECTIONS GO HERE -->
    </main>

<?php
get_footer();
