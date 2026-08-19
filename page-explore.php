<?php
/**
 * Explore page template — converted from explore.html.
 *
 * Template Name: Explore
 *
 * @package Bright_Dreamers_Club
 */

get_header();
?>
    <main id="main-content">
      <section class="page-hero explore-hero" aria-label="Explore Bright Dreamers">
        <div class="site-container page-hero__inner">
          <div class="page-hero__content">
            <p class="explore-hero__eyebrow">
              Explore Experiences
              <svg
                class="explore-hero__eyebrow-icon"
                viewBox="0 0 24 24"
                width="16"
                height="16"
                fill="none"
                stroke="currentColor"
                stroke-width="1.8"
                aria-hidden="true"
              >
                <path
                  d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
                />
              </svg>
            </p>

            <div class="explore-hero__heading-block">
              <div class="explore-hero__title-wrap">
                <h1 class="explore-hero__title">
                  <span class="explore-hero__title-line explore-hero__title-line--navy">
                    Big Dreams
                  </span>
                  <span class="explore-hero__title-line explore-hero__title-line--navy">
                    Begin With
                  </span>
                  <span class="explore-hero__title-line explore-hero__title-line--pink">
                    Small Ideas
                  </span>
                </h1>
              </div>
              <img
                class="explore-hero__deco"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-hero-deco-removebg-preview.png' ); ?>"
                alt=""
                width="142"
                height="180"
                decoding="async"
                aria-hidden="true"
              />
            </div>

            <p class="explore-hero__text">
              Every child is unique. Some love to paint. Some invent. Some help others.
            </p>

            <p class="explore-hero__text explore-hero__text--last">
              Bright Dreamers creates opportunities for children to explore who they
              are and discover what they love through creativity, real experiences,
              and community.
            </p>

            <div class="page-hero__actions">
              <a class="btn btn--solid btn--lg btn-hover" href="#explore-content">
                Explore Experiences
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
              <a class="btn btn--outline btn--lg btn-hover" href="<?php echo esc_url( bdc_page_url( 'about.html' ) ); ?>">
                How It Works
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
            </div>
          </div>

          <div class="explore-hero__media">
            <div class="lazy-img-wrap">
              <img
                class="explore-hero__banner lazy-img"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-hero-banner.jpeg' ); ?>"
                alt="Children painting a mural that reads together we create brighter communities"
                width="1200"
                height="900"
                decoding="async"
              />
            </div>

            <div
              class="explore-hero__tags-wrap"
              aria-hidden="true"
            >
              <ul class="explore-hero__tags">
                <li>Ideas</li>
                <li>Creativity</li>
                <li>Kindness</li>
                <li>Community</li>
                <li>Impact</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <div id="explore-content">
        <section class="explore-ways section-padding" aria-labelledby="explore-ways-title">
          <div class="site-container">
            <h2 class="explore-ways__title" id="explore-ways-title">
              Ways Children Can Explore
              <svg
                class="explore-ways__title-icon"
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

            <div class="explore-ways__grid">
              <article class="explore-way">
                <div class="explore-way__head">
                  <span class="explore-way__icon-wrap" aria-hidden="true">
                    <img
                      class="explore-way__icon"
                      src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-way-create-icon.jpeg' ); ?>"
                      alt=""
                      width="52"
                      height="52"
                      loading="lazy"
                      decoding="async"
                    />
                  </span>
                  <h3 class="explore-way__title">Create</h3>
                </div>
                <div class="explore-way-card card-shadow">
                  <div class="lazy-img-wrap lazy-img-wrap--cover">
                    <img
                      class="explore-way-card__photo lazy-img"
                      src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                      data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-makers-photo.jpeg' ); ?>"
                      alt="A young girl painting with watercolors"
                      width="400"
                      height="300"
                      decoding="async"
                    />
                  </div>
                  <p class="explore-way-card__text">
                    Paint, craft, design, build, sew, and make beautiful things with
                    your hands and imagination.
                  </p>
                </div>
              </article>

              <article class="explore-way">
                <div class="explore-way__head">
                  <span class="explore-way__icon-wrap explore-way__icon-wrap--boost" aria-hidden="true">
                    <img
                      class="explore-way__icon"
                      src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-way-invent-icon.jpeg' ); ?>"
                      alt=""
                      width="52"
                      height="52"
                      loading="lazy"
                      decoding="async"
                    />
                  </span>
                  <h3 class="explore-way__title">Imagine &amp; Invent</h3>
                </div>
                <div class="explore-way-card card-shadow">
                  <div class="lazy-img-wrap lazy-img-wrap--cover">
                    <img
                      class="explore-way-card__photo lazy-img"
                      src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                      data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-ideas-photo.jpeg' ); ?>"
                      alt="Two boys working on a creative project"
                      width="400"
                      height="300"
                      decoding="async"
                    />
                  </div>
                  <p class="explore-way-card__text">
                    Ask questions, experiment, solve problems, and turn ideas into
                    something new.
                  </p>
                </div>
              </article>

              <article class="explore-way">
                <div class="explore-way__head">
                  <span class="explore-way__icon-wrap" aria-hidden="true">
                    <img
                      class="explore-way__icon"
                      src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-way-give-icon.jpeg' ); ?>"
                      alt=""
                      width="52"
                      height="52"
                      loading="lazy"
                      decoding="async"
                    />
                  </span>
                  <h3 class="explore-way__title">Help &amp; Give</h3>
                </div>
                <div class="explore-way-card card-shadow">
                  <div class="lazy-img-wrap lazy-img-wrap--cover">
                    <img
                      class="explore-way-card__photo lazy-img"
                      src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                      data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-cause-photo.jpeg' ); ?>"
                      alt="Children working together on a community project"
                      width="400"
                      height="300"
                      decoding="async"
                    />
                  </div>
                  <p class="explore-way-card__text">
                    Create gifts, support local causes, organize donation projects, and
                    spread kindness together.
                  </p>
                </div>
              </article>

              <article class="explore-way">
                <div class="explore-way__head">
                  <span class="explore-way__icon-wrap" aria-hidden="true">
                    <img
                      class="explore-way__icon"
                      src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-way-lead-icon.jpeg' ); ?>"
                      alt=""
                      width="52"
                      height="52"
                      loading="lazy"
                      decoding="async"
                    />
                  </span>
                  <h3 class="explore-way__title">Lead Together</h3>
                </div>
                <div class="explore-way-card card-shadow">
                  <div class="lazy-img-wrap lazy-img-wrap--cover">
                    <img
                      class="explore-way-card__photo lazy-img"
                      src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                      data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/home-ideas-photo.jpeg' ); ?>"
                      alt="Children collaborating around a table"
                      width="400"
                      height="300"
                      decoding="async"
                    />
                  </div>
                  <p class="explore-way-card__text">
                    Share ideas, vote on projects, help shape Bright Dreamers, and lead
                    with your voice.
                  </p>
                </div>
              </article>

              <article class="explore-way">
                <div class="explore-way__head">
                  <span class="explore-way__icon-wrap" aria-hidden="true">
                    <img
                      class="explore-way__icon"
                      src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-way-world-icon.jpeg' ); ?>"
                      alt=""
                      width="52"
                      height="52"
                      loading="lazy"
                      decoding="async"
                    />
                  </span>
                  <h3 class="explore-way__title">Explore the World</h3>
                </div>
                <div class="explore-way-card card-shadow">
                  <div class="lazy-img-wrap lazy-img-wrap--cover">
                    <img
                      class="explore-way-card__photo lazy-img"
                      src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                      data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-adventures-photo.jpeg' ); ?>"
                      alt="Children exploring outdoors with binoculars"
                      width="400"
                      height="300"
                      decoding="async"
                    />
                  </div>
                  <p class="explore-way-card__text">
                    Visit places, meet people, discover nature, local businesses, and
                    learn from real-life experiences.
                  </p>
                </div>
              </article>

              <article class="explore-way">
                <div class="explore-way__head">
                  <span class="explore-way__icon-wrap" aria-hidden="true">
                    <img
                      class="explore-way__icon"
                      src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-way-market-icon.jpeg' ); ?>"
                      alt=""
                      width="52"
                      height="52"
                      loading="lazy"
                      decoding="async"
                    />
                  </span>
                  <h3 class="explore-way__title">Dream Market</h3>
                </div>
                <div class="explore-way-card card-shadow">
                  <div class="lazy-img-wrap lazy-img-wrap--cover">
                    <img
                      class="explore-way-card__photo lazy-img"
                      src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                      data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-way-market-photo.jpeg' ); ?>"
                      alt="Children sharing handmade creations at a community market"
                      width="400"
                      height="300"
                      decoding="async"
                    />
                  </div>
                  <p class="explore-way-card__text">
                    Share or sell creations at community markets. Grow confidence, earn,
                    and give back.
                  </p>
                </div>
              </article>
            </div>
          </div>
        </section>

        <section class="explore-skills section-padding" aria-labelledby="explore-skills-title">
          <div class="site-container">
            <h2 class="explore-skills__title" id="explore-skills-title">
              Skills Children Build (And Parents Love!)
              <svg
                class="explore-skills__title-icon"
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

            <div class="explore-skills__grid">
              <article class="explore-skill">
                <img
                  class="explore-skill__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-makers-icon.jpeg' ); ?>"
                  alt=""
                  width="56"
                  height="56"
                  loading="lazy"
                  decoding="async"
                />
                <h3 class="explore-skill__title">Creativity</h3>
                <p class="explore-skill__text">
                  Express original ideas and imagination.
                </p>
              </article>

              <article class="explore-skill">
                <img
                  class="explore-skill__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-skill-problem-icon.jpeg' ); ?>"
                  alt=""
                  width="56"
                  height="56"
                  loading="lazy"
                  decoding="async"
                />
                <h3 class="explore-skill__title">Problem Solving</h3>
                <p class="explore-skill__text">
                  Think critically and find solutions in fun ways.
                </p>
              </article>

              <article class="explore-skill">
                <img
                  class="explore-skill__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/approach-share.jpeg' ); ?>"
                  alt=""
                  width="56"
                  height="56"
                  loading="lazy"
                  decoding="async"
                />
                <h3 class="explore-skill__title">Communication</h3>
                <p class="explore-skill__text">
                  Share ideas clearly and listen to others.
                </p>
              </article>

              <article class="explore-skill">
                <img
                  class="explore-skill__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/home-diff-connect.jpeg' ); ?>"
                  alt=""
                  width="56"
                  height="56"
                  loading="lazy"
                  decoding="async"
                />
                <h3 class="explore-skill__title">Collaboration</h3>
                <p class="explore-skill__text">
                  Work as a team and build strong friendships.
                </p>
              </article>

              <article class="explore-skill">
                <img
                  class="explore-skill__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/home-diff-lead.jpeg' ); ?>"
                  alt=""
                  width="56"
                  height="56"
                  loading="lazy"
                  decoding="async"
                />
                <h3 class="explore-skill__title">Leadership</h3>
                <p class="explore-skill__text">
                  Take initiative, inspire others, and lead projects.
                </p>
              </article>

              <article class="explore-skill">
                <img
                  class="explore-skill__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-skill-confidence-icon.jpeg' ); ?>"
                  alt=""
                  width="56"
                  height="56"
                  loading="lazy"
                  decoding="async"
                />
                <h3 class="explore-skill__title">Confidence</h3>
                <p class="explore-skill__text">
                  Believe in themselves and celebrate progress.
                </p>
              </article>

              <article class="explore-skill">
                <img
                  class="explore-skill__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-cause-icon.jpeg' ); ?>"
                  alt=""
                  width="56"
                  height="56"
                  loading="lazy"
                  decoding="async"
                />
                <h3 class="explore-skill__title">Empathy</h3>
                <p class="explore-skill__text">
                  Understand others and show kindness every day.
                </p>
              </article>

              <article class="explore-skill">
                <img
                  class="explore-skill__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-skill-finance-icon.jpeg' ); ?>"
                  alt=""
                  width="56"
                  height="56"
                  loading="lazy"
                  decoding="async"
                />
                <h3 class="explore-skill__title">Financial Literacy</h3>
                <p class="explore-skill__text">
                  Learn money basics through real-world experiences.
                </p>
              </article>

              <article class="explore-skill">
                <img
                  class="explore-skill__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-skill-resilience-icon.jpeg' ); ?>"
                  alt=""
                  width="56"
                  height="56"
                  loading="lazy"
                  decoding="async"
                />
                <h3 class="explore-skill__title">Resilience</h3>
                <p class="explore-skill__text">
                  Keep trying, learn from mistakes, and grow stronger.
                </p>
              </article>
            </div>
          </div>
        </section>

        <section class="explore-grow section-padding" aria-labelledby="explore-grow-title">
          <div class="site-container">
            <h2 class="explore-grow__title" id="explore-grow-title">
              Our Experiences Grow With Children
            </h2>

            <div class="explore-grow__track" role="list">
              <article class="explore-grow-stage explore-grow-stage--wonder" role="listitem">
                <div class="explore-grow-stage__card">
                  <div class="explore-grow-stage__layout">
                    <div class="lazy-img-wrap">
                      <img
                        class="explore-grow-stage__photo lazy-img"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                        data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-grow-wonder-photo.png' ); ?>"
                        alt="A young girl looking up with curiosity"
                        width="200"
                        height="260"
                        decoding="async"
                      />
                    </div>
                    <div class="explore-grow-stage__body">
                      <div class="explore-grow-stage__head">
                        <img
                          class="explore-grow-stage__icon"
                          src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-grow-wonder-icon.png' ); ?>"
                          alt=""
                          width="28"
                          height="28"
                          loading="lazy"
                          decoding="async"
                        />
                        <h3 class="explore-grow-stage__label">Wonder</h3>
                      </div>
                      <p class="explore-grow-stage__quote">I love trying new things.</p>
                      <p class="explore-grow-stage__text">Curious and ready to explore.</p>
                    </div>
                  </div>
                </div>
              </article>

              <span class="explore-grow__arrow explore-grow__arrow--green" aria-hidden="true">
                <svg viewBox="0 0 32 16" width="32" height="16" fill="none" aria-hidden="true">
                  <path
                    d="M0 8h22M17 3l9 5-9 5"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-dasharray="3.5 2.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </span>

              <article class="explore-grow-stage explore-grow-stage--discover" role="listitem">
                <div class="explore-grow-stage__card">
                  <div class="explore-grow-stage__layout">
                    <div class="lazy-img-wrap">
                      <img
                        class="explore-grow-stage__photo lazy-img"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                        data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-grow-discover-photo.png' ); ?>"
                        alt="A girl exploring with a magnifying glass"
                        width="200"
                        height="260"
                        decoding="async"
                      />
                    </div>
                    <div class="explore-grow-stage__body">
                      <div class="explore-grow-stage__head">
                        <img
                          class="explore-grow-stage__icon"
                          src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-grow-discover-icon.png' ); ?>"
                          alt=""
                          width="28"
                          height="28"
                          loading="lazy"
                          decoding="async"
                        />
                        <h3 class="explore-grow-stage__label">Discover</h3>
                      </div>
                      <p class="explore-grow-stage__quote">I found something I enjoy.</p>
                      <p class="explore-grow-stage__text">Explore interests and talents.</p>
                    </div>
                  </div>
                </div>
              </article>

              <span class="explore-grow__arrow explore-grow__arrow--orange" aria-hidden="true">
                <svg viewBox="0 0 32 16" width="32" height="16" fill="none" aria-hidden="true">
                  <path
                    d="M0 8h22M17 3l9 5-9 5"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-dasharray="3.5 2.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </span>

              <article class="explore-grow-stage explore-grow-stage--create" role="listitem">
                <div class="explore-grow-stage__card">
                  <div class="explore-grow-stage__layout">
                    <div class="lazy-img-wrap">
                      <img
                        class="explore-grow-stage__photo lazy-img"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                        data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-grow-create-photo.png' ); ?>"
                        alt="A boy building and creating at a table"
                        width="200"
                        height="260"
                        decoding="async"
                      />
                    </div>
                    <div class="explore-grow-stage__body">
                      <div class="explore-grow-stage__head">
                        <img
                          class="explore-grow-stage__icon"
                          src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-grow-create-icon.png' ); ?>"
                          alt=""
                          width="28"
                          height="28"
                          loading="lazy"
                          decoding="async"
                        />
                        <h3 class="explore-grow-stage__label">Create</h3>
                      </div>
                      <p class="explore-grow-stage__quote">I can build something amazing!</p>
                      <p class="explore-grow-stage__text">
                        Practice, create, and bring ideas to life.
                      </p>
                    </div>
                  </div>
                </div>
              </article>

              <span class="explore-grow__arrow explore-grow__arrow--pink" aria-hidden="true">
                <svg viewBox="0 0 32 16" width="32" height="16" fill="none" aria-hidden="true">
                  <path
                    d="M0 8h22M17 3l9 5-9 5"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-dasharray="3.5 2.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </span>

              <article class="explore-grow-stage explore-grow-stage--share" role="listitem">
                <div class="explore-grow-stage__card">
                  <div class="explore-grow-stage__layout">
                    <div class="lazy-img-wrap">
                      <img
                        class="explore-grow-stage__photo lazy-img"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                        data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-grow-share-photo.png' ); ?>"
                        alt="A girl sharing ideas with a microphone"
                        width="200"
                        height="260"
                        decoding="async"
                      />
                    </div>
                    <div class="explore-grow-stage__body">
                      <div class="explore-grow-stage__head">
                        <img
                          class="explore-grow-stage__icon"
                          src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-grow-share-icon.png' ); ?>"
                          alt=""
                          width="28"
                          height="28"
                          loading="lazy"
                          decoding="async"
                        />
                        <h3 class="explore-grow-stage__label">Share</h3>
                      </div>
                      <p class="explore-grow-stage__quote">I can inspire others.</p>
                      <p class="explore-grow-stage__text">Share ideas and celebrate creations.</p>
                    </div>
                  </div>
                </div>
              </article>

              <span class="explore-grow__arrow explore-grow__arrow--blue" aria-hidden="true">
                <svg viewBox="0 0 32 16" width="32" height="16" fill="none" aria-hidden="true">
                  <path
                    d="M0 8h22M17 3l9 5-9 5"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-dasharray="3.5 2.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </span>

              <article class="explore-grow-stage explore-grow-stage--give" role="listitem">
                <div class="explore-grow-stage__card">
                  <div class="explore-grow-stage__layout">
                    <div class="lazy-img-wrap">
                      <img
                        class="explore-grow-stage__photo lazy-img"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                        data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-grow-give-photo.png' ); ?>"
                        alt="Two girls holding a thank you sign together"
                        width="200"
                        height="260"
                        decoding="async"
                      />
                    </div>
                    <div class="explore-grow-stage__body">
                      <div class="explore-grow-stage__head">
                        <img
                          class="explore-grow-stage__icon"
                          src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-grow-give-icon.png' ); ?>"
                          alt=""
                          width="28"
                          height="28"
                          loading="lazy"
                          decoding="async"
                        />
                        <h3 class="explore-grow-stage__label">Give</h3>
                      </div>
                      <p class="explore-grow-stage__quote">My ideas can help my community.</p>
                      <p class="explore-grow-stage__text">Use talents to make a positive impact.</p>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </section>

        <section class="explore-impact section-padding" aria-labelledby="explore-impact-title">
          <div class="site-container">
            <h2 class="explore-impact__title" id="explore-impact-title">
              Real Ideas. Real Projects. Real Impact.
              <svg
                class="explore-impact__title-icon"
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

            <div class="explore-impact__track">
              <article class="explore-impact-card">
                <div class="lazy-img-wrap lazy-img-wrap--cover">
                  <img
                    class="explore-impact-card__photo lazy-img"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                    data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-impact-art.jpeg' ); ?>"
                    alt="Children standing in front of a colorful community mural"
                    width="400"
                    height="300"
                    decoding="async"
                  />
                </div>
                <h3 class="explore-impact-card__title">Art in Our Community</h3>
                <p class="explore-impact-card__text">
                  Create murals and art installations to brighten public spaces.
                </p>
              </article>

              <article class="explore-impact-card">
                <div class="lazy-img-wrap lazy-img-wrap--cover">
                  <img
                    class="explore-impact-card__photo lazy-img"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                    data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-impact-sell.jpeg' ); ?>"
                    alt="Children collaborating at a table with books and a tablet"
                    width="400"
                    height="300"
                    decoding="async"
                  />
                </div>
                <h3 class="explore-impact-card__title">Create &amp; Sell</h3>
                <p class="explore-impact-card__text">
                  Make products, art, and creations to share and fund future projects.
                </p>
              </article>

              <article class="explore-impact-card">
                <div class="lazy-img-wrap lazy-img-wrap--cover">
                  <img
                    class="explore-impact-card__photo lazy-img"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                    data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-impact-give.jpeg' ); ?>"
                    alt="Children planting a sapling together outdoors"
                    width="400"
                    height="300"
                    decoding="async"
                  />
                </div>
                <h3 class="explore-impact-card__title">Give Back</h3>
                <p class="explore-impact-card__text">
                  Support shelters, food drives, clean-ups, parks, gardens, and more.
                </p>
              </article>

              <article class="explore-impact-card">
                <div class="lazy-img-wrap lazy-img-wrap--cover">
                  <img
                    class="explore-impact-card__photo lazy-img"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                    data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-impact-kindness.jpeg' ); ?>"
                    alt="Children working together to plant in a garden"
                    width="400"
                    height="300"
                    decoding="async"
                  />
                </div>
                <h3 class="explore-impact-card__title">Kindness Projects</h3>
                <p class="explore-impact-card__text">
                  Make cards, kits, and gifts to bring joy to others.
                </p>
              </article>

              <article class="explore-impact-card">
                <div class="lazy-img-wrap lazy-img-wrap--cover">
                  <img
                    class="explore-impact-card__photo lazy-img"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                    data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-impact-plants.jpeg' ); ?>"
                    alt="Three girls creating art together at a table"
                    width="400"
                    height="300"
                    decoding="async"
                  />
                </div>
                <h3 class="explore-impact-card__title">Plants &amp; Planet</h3>
                <p class="explore-impact-card__text">
                  Plant trees, grow gardens, and care for our planet together.
                </p>
              </article>

              <aside class="explore-impact-quote" aria-label="Inspiring message">
                <img
                  class="explore-impact-quote__blob"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-impact-quote-blob.png' ); ?>"
                  alt=""
                  width="320"
                  height="280"
                  loading="lazy"
                  decoding="async"
                  aria-hidden="true"
                />
                <div class="explore-impact-quote__text">
                  <p class="explore-impact-quote__stanza">
                    It starts with<br />
                    an idea.
                  </p>
                  <p class="explore-impact-quote__stanza">
                    It grows with<br />
                    kind hearts.
                  </p>
                  <p class="explore-impact-quote__stanza">
                    It changes<br />
                    the world.
                  </p>
                </div>
              </aside>
            </div>
          </div>
        </section>

        <section class="explore-dream section-padding" aria-labelledby="explore-dream-title">
          <div class="site-container">
            <div class="explore-dream__card">
              <div class="explore-dream__grid">
                <h2 class="explore-dream__title" id="explore-dream-title">
                  Where Will Your Child&rsquo;s <span class="explore-dream__accent">Dream</span>
                  Begin?
                </h2>

                <div class="explore-dream__photo-wrap">
                  <div class="lazy-img-wrap">
                    <img
                      class="explore-dream__photo lazy-img"
                      src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                      data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-dream-photo-removebg-preview.png' ); ?>"
                      alt="Two girls smiling and holding a sign that says I have an idea"
                      width="420"
                      height="320"
                      decoding="async"
                    />
                  </div>
                </div>

                <ul class="explore-dream__list">
                  <li>
                    <span class="explore-dream__check" aria-hidden="true">
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
                    There is no perfect age.
                  </li>
                  <li>
                    <span class="explore-dream__check" aria-hidden="true">
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
                    No perfect start.
                  </li>
                  <li>
                    <span class="explore-dream__check" aria-hidden="true">
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
                    No perfect idea.
                  </li>
                  <li>
                    <span class="explore-dream__check" aria-hidden="true">
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
                    Only curiosity.
                  </li>
                  <li>
                    <span class="explore-dream__check" aria-hidden="true">
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
                    And a small step forward.
                  </li>
                </ul>

                <div class="explore-dream__jar-wrap">
                  <div class="lazy-img-wrap">
                    <img
                      class="explore-dream__jar lazy-img"
                      src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                      data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/explore-dream-jar.jpeg' ); ?>"
                      alt=""
                      width="260"
                      height="280"
                      decoding="async"
                      aria-hidden="true"
                    />
                  </div>
                </div>

                <div class="explore-dream__actions">
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
                    class="btn btn--outline btn--lg btn-hover explore-dream__btn-outline"
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
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </main>

<?php
get_footer();
