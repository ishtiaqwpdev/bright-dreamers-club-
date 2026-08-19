<?php
/**
 * FAQ page template — converted from faq.html.
 *
 * Template Name: FAQ
 *
 * @package Bright_Dreamers_Club
 */

get_header();
?>
    <main id="main-content">
      <section class="page-hero faq-hero" aria-label="Frequently Asked Questions">
        <div class="site-container page-hero__inner">
          <div class="page-hero__content faq-hero__content">
            <p class="faq-hero__eyebrow">
              FAQ
              <img
                class="faq-hero__eyebrow-heart"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/faq/7af0e916-3b9b-47fe-9a8f-24aa0a8d0005-removebg-preview.png' ); ?>"
                alt=""
                width="22"
                height="22"
                decoding="async"
                aria-hidden="true"
              />
            </p>

            <h1 class="faq-hero__title">
              <span class="faq-hero__title-line faq-hero__title-line--navy">Frequently Asked</span>
              <span class="faq-hero__title-line faq-hero__title-line--pink">Questions</span>
            </h1>

            <p class="faq-hero__text">
              Find answers to common questions about Bright Dreamers and how we support children to
              dream, create, and grow.
            </p>
          </div>

          <div class="about-hero__media faq-hero__media">
            <div class="lazy-img-wrap">
              <img
                class="about-hero__banner faq-hero__banner lazy-img"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/faq/78f5df94-6504-44c0-a7a4-28a535e9b0d2.png' ); ?>"
                alt="Three children smiling while reading a book together"
                width="1200"
                height="900"
                decoding="async"
              />
            </div>
          </div>
        </div>
      </section>

      <section class="faq-search section-padding" aria-label="Search FAQ">
        <div class="site-container faq-search__inner">
          <p class="faq-search__intro">Have a question? Search below or browse by topic.</p>
          <label class="faq-search__field">
            <span class="visually-hidden">Search for answers</span>
            <img
              class="faq-search__icon"
              src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/faq/f51d4c98-7edf-4542-bca5-052679d27864-removebg-preview.png' ); ?>"
              alt=""
              width="22"
              height="22"
              decoding="async"
              aria-hidden="true"
            />
            <input
              class="faq-search__input"
              id="faq-search-input"
              type="search"
              name="faq_search"
              placeholder="Search for answers..."
              autocomplete="off"
            />
          </label>
        </div>
      </section>

      <section class="faq-main section-padding" aria-label="FAQ topics and answers">
        <div class="site-container faq-main__inner">
          <aside class="faq-sidebar" aria-label="Browse by topic">
            <h2 class="faq-sidebar__title">Browse by Topic</h2>
            <ul class="faq-topic-list" role="tablist">
              <li>
                <button class="faq-topic is-active" type="button" data-faq-topic="about" role="tab" aria-selected="true">
                  <img class="faq-topic__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/faq/98a64bbe-c19d-4a6b-85cc-84889788bb0a-removebg-preview.png' ); ?>" alt="" width="28" height="28" decoding="async" aria-hidden="true" />
                  <span>About Bright Dreamers</span>
                </button>
              </li>
              <li>
                <button class="faq-topic" type="button" data-faq-topic="programs" role="tab" aria-selected="false">
                  <img class="faq-topic__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/faq/0401b3ea-7e4a-4ccc-b5b5-9600ffb2ac1c-removebg-preview.png' ); ?>" alt="" width="28" height="28" decoding="async" aria-hidden="true" />
                  <span>Programs &amp; Experiences</span>
                </button>
              </li>
              <li>
                <button class="faq-topic" type="button" data-faq-topic="parents" role="tab" aria-selected="false">
                  <img class="faq-topic__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/faq/7a067c96-48b6-4dce-9edb-94229ab9eb32-removebg-preview.png' ); ?>" alt="" width="28" height="28" decoding="async" aria-hidden="true" />
                  <span>For Parents</span>
                </button>
              </li>
              <li>
                <button class="faq-topic" type="button" data-faq-topic="join" role="tab" aria-selected="false">
                  <img class="faq-topic__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/faq/9ec2a6ea-f797-44c6-b014-cf293910c5ef-removebg-preview.png' ); ?>" alt="" width="28" height="28" decoding="async" aria-hidden="true" />
                  <span>Join &amp; Participate</span>
                </button>
              </li>
              <li>
                <button class="faq-topic" type="button" data-faq-topic="safety" role="tab" aria-selected="false">
                  <img class="faq-topic__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/faq/d106249c-aebc-4fda-92a2-7dca03fb818e-removebg-preview.png' ); ?>" alt="" width="28" height="28" decoding="async" aria-hidden="true" />
                  <span>Safety &amp; Privacy</span>
                </button>
              </li>
              <li>
                <button class="faq-topic" type="button" data-faq-topic="volunteering" role="tab" aria-selected="false">
                  <img class="faq-topic__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/faq/5bc9f8e2-56e2-4ec8-91d4-14f9183d39ea-removebg-preview.png' ); ?>" alt="" width="28" height="28" decoding="async" aria-hidden="true" />
                  <span>Volunteering</span>
                </button>
              </li>
              <li>
                <button class="faq-topic" type="button" data-faq-topic="donations" role="tab" aria-selected="false">
                  <img class="faq-topic__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/faq/15a1a426-65a0-4300-9353-cc62724fe2f5-removebg-preview.png' ); ?>" alt="" width="28" height="28" decoding="async" aria-hidden="true" />
                  <span>Donations &amp; Partners</span>
                </button>
              </li>
            </ul>

            <article class="faq-sidebar-card">
              <img
                class="faq-sidebar-card__heart"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/faq/66d25676-c9e3-488b-a47e-d84290173765-removebg-preview.png' ); ?>"
                alt=""
                width="36"
                height="36"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
              <h3 class="faq-sidebar-card__title">Still have questions?</h3>
              <p class="faq-sidebar-card__text">
                We&rsquo;re here to help! Reach out to our team and we&rsquo;ll get back to you soon.
              </p>
              <div class="faq-card-action">
                <a class="btn btn--solid btn-hover faq-sidebar-card__btn" href="<?php echo esc_url( bdc_page_url( 'contact.html' ) ); ?>">
                  <span class="faq-card-action__label">Contact Us</span>
                  <svg class="faq-card-action__arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6" /></svg>
                </a>
                <img
                  class="faq-card-action__heart"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/faq/7af0e916-3b9b-47fe-9a8f-24aa0a8d0005-removebg-preview.png' ); ?>"
                  alt=""
                  width="30"
                  height="30"
                  loading="lazy"
                  decoding="async"
                  aria-hidden="true"
                />
              </div>
            </article>
          </aside>

          <div class="faq-accordion-wrap">
            <div class="faq-accordion" id="faq-accordion">
              <article class="faq-item" data-faq-topic="about">
                <h3 class="faq-item__heading">
                  <button class="faq-item__trigger" type="button" aria-expanded="false">
                    <span class="faq-item__question">What is Bright Dreamers?</span>
                    <span class="faq-item__toggle" aria-hidden="true">
                      <img class="faq-item__toggle-plus" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/faq/2c9127ae-db9f-4e11-a389-86f17a5c9a54-removebg-preview.png' ); ?>" alt="" width="20" height="20" decoding="async" />
                      <span class="faq-item__toggle-minus"></span>
                    </span>
                  </button>
                </h3>
                <div class="faq-item__panel">
                  <div class="faq-item__answer">
                    <p>
                      Bright Dreamers is a nonprofit community initiative that helps children explore
                      ideas, create, learn, and make a positive difference. We offer project-based
                      experiences where young people can dream, build, and share their work with others.
                    </p>
                  </div>
                </div>
              </article>

              <article class="faq-item" data-faq-topic="about programs parents">
                <h3 class="faq-item__heading">
                  <button class="faq-item__trigger" type="button" aria-expanded="false">
                    <span class="faq-item__question">What age group do your programs serve?</span>
                    <span class="faq-item__toggle" aria-hidden="true">
                      <img class="faq-item__toggle-plus" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/faq/2c9127ae-db9f-4e11-a389-86f17a5c9a54-removebg-preview.png' ); ?>" alt="" width="20" height="20" decoding="async" />
                      <span class="faq-item__toggle-minus"></span>
                    </span>
                  </button>
                </h3>
                <div class="faq-item__panel">
                  <div class="faq-item__answer">
                    <p>
                      Our programs are designed primarily for school-age children who are curious,
                      creative, and excited to work on ideas with others. Specific experiences may vary
                      by project, and we share age guidance with families when opportunities open.
                    </p>
                  </div>
                </div>
              </article>

              <article class="faq-item is-open" data-faq-topic="join">
                <h3 class="faq-item__heading">
                  <button class="faq-item__trigger" type="button" aria-expanded="true">
                    <span class="faq-item__question">How can my child join Bright Dreamers?</span>
                    <span class="faq-item__toggle" aria-hidden="true">
                      <img class="faq-item__toggle-plus" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/faq/2c9127ae-db9f-4e11-a389-86f17a5c9a54-removebg-preview.png' ); ?>" alt="" width="20" height="20" decoding="async" />
                      <span class="faq-item__toggle-minus"></span>
                    </span>
                  </button>
                </h3>
                <div class="faq-item__panel">
                  <div class="faq-item__answer">
                    <p>
                      Families can start by completing our
                      <a href="<?php echo esc_url( bdc_page_url( 'apply-to-become.html' ) ); ?>">Apply to Join</a>
                      form. We review each application thoughtfully and follow up when a project or
                      experience is a good fit for your child&rsquo;s interests and readiness.
                    </p>
                  </div>
                </div>
              </article>

              <article class="faq-item" data-faq-topic="about programs parents join">
                <h3 class="faq-item__heading">
                  <button class="faq-item__trigger" type="button" aria-expanded="false">
                    <span class="faq-item__question">Are your programs free?</span>
                    <span class="faq-item__toggle" aria-hidden="true">
                      <img class="faq-item__toggle-plus" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/faq/2c9127ae-db9f-4e11-a389-86f17a5c9a54-removebg-preview.png' ); ?>" alt="" width="20" height="20" decoding="async" />
                      <span class="faq-item__toggle-minus"></span>
                    </span>
                  </button>
                </h3>
                <div class="faq-item__panel">
                  <div class="faq-item__answer">
                    <p>
                      Many of our community experiences are offered at low or no cost whenever
                      possible. When materials, venues, or special projects require support, we share
                      details with families in advance so there are no surprises.
                    </p>
                  </div>
                </div>
              </article>

              <article class="faq-item" data-faq-topic="volunteering">
                <h3 class="faq-item__heading">
                  <button class="faq-item__trigger" type="button" aria-expanded="false">
                    <span class="faq-item__question">How can I volunteer?</span>
                    <span class="faq-item__toggle" aria-hidden="true">
                      <img class="faq-item__toggle-plus" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/faq/2c9127ae-db9f-4e11-a389-86f17a5c9a54-removebg-preview.png' ); ?>" alt="" width="20" height="20" decoding="async" />
                      <span class="faq-item__toggle-minus"></span>
                    </span>
                  </button>
                </h3>
                <div class="faq-item__panel">
                  <div class="faq-item__answer">
                    <p>
                      We welcome volunteers who want to share time, skills, and encouragement with
                      children. Visit our
                      <a href="<?php echo esc_url( bdc_page_url( 'volunteer-application.html' ) ); ?>">Volunteer Application</a>
                      page to tell us about your interests and availability.
                    </p>
                  </div>
                </div>
              </article>

              <article class="faq-item" data-faq-topic="safety parents">
                <h3 class="faq-item__heading">
                  <button class="faq-item__trigger" type="button" aria-expanded="false">
                    <span class="faq-item__question">How do you ensure children&rsquo;s safety?</span>
                    <span class="faq-item__toggle" aria-hidden="true">
                      <img class="faq-item__toggle-plus" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/faq/2c9127ae-db9f-4e11-a389-86f17a5c9a54-removebg-preview.png' ); ?>" alt="" width="20" height="20" decoding="async" />
                      <span class="faq-item__toggle-minus"></span>
                    </span>
                  </button>
                </h3>
                <div class="faq-item__panel">
                  <div class="faq-item__answer">
                    <p>
                      Child safety is central to everything we do. We use thoughtful supervision,
                      age-appropriate activities, and clear guidelines for volunteers and partners.
                      Additional screening may apply depending on a volunteer&rsquo;s role and level of
                      interaction with children.
                    </p>
                  </div>
                </div>
              </article>

              <article class="faq-item" data-faq-topic="donations">
                <h3 class="faq-item__heading">
                  <button class="faq-item__trigger" type="button" aria-expanded="false">
                    <span class="faq-item__question">How are donations used?</span>
                    <span class="faq-item__toggle" aria-hidden="true">
                      <img class="faq-item__toggle-plus" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/faq/2c9127ae-db9f-4e11-a389-86f17a5c9a54-removebg-preview.png' ); ?>" alt="" width="20" height="20" decoding="async" />
                      <span class="faq-item__toggle-minus"></span>
                    </span>
                  </button>
                </h3>
                <div class="faq-item__panel">
                  <div class="faq-item__answer">
                    <p>
                      Donations help provide materials, learning experiences, and project support for
                      children. Gifts may fund supplies, child-led initiatives, community projects, or
                      our Dream Market social enterprise depending on donor preference.
                    </p>
                  </div>
                </div>
              </article>

              <article class="faq-item" data-faq-topic="donations">
                <h3 class="faq-item__heading">
                  <button class="faq-item__trigger" type="button" aria-expanded="false">
                    <span class="faq-item__question">Can organizations or schools partner with you?</span>
                    <span class="faq-item__toggle" aria-hidden="true">
                      <img class="faq-item__toggle-plus" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/faq/2c9127ae-db9f-4e11-a389-86f17a5c9a54-removebg-preview.png' ); ?>" alt="" width="20" height="20" decoding="async" />
                      <span class="faq-item__toggle-minus"></span>
                    </span>
                  </button>
                </h3>
                <div class="faq-item__panel">
                  <div class="faq-item__answer">
                    <p>
                      Yes. We welcome partnerships with schools, businesses, and community
                      organizations that align with our mission. Share your idea through our
                      <a href="<?php echo esc_url( bdc_page_url( 'partner-inquiry.html' ) ); ?>">Partner Inquiry</a>
                      form and our team will follow up.
                    </p>
                  </div>
                </div>
              </article>

              <article class="faq-item" data-faq-topic="join">
                <h3 class="faq-item__heading">
                  <button class="faq-item__trigger" type="button" aria-expanded="false">
                    <span class="faq-item__question">How can I stay updated?</span>
                    <span class="faq-item__toggle" aria-hidden="true">
                      <img class="faq-item__toggle-plus" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/faq/2c9127ae-db9f-4e11-a389-86f17a5c9a54-removebg-preview.png' ); ?>" alt="" width="20" height="20" decoding="async" />
                      <span class="faq-item__toggle-minus"></span>
                    </span>
                  </button>
                </h3>
                <div class="faq-item__panel">
                  <div class="faq-item__answer">
                    <p>
                      Subscribe to our newsletter for stories, events, and ways to get involved. You
                      can sign up on our
                      <a href="<?php echo esc_url( bdc_page_url( 'newsletter-signup.html' ) ); ?>">Newsletter Sign Up</a>
                      page or through the footer on any page.
                    </p>
                  </div>
                </div>
              </article>
            </div>

            <p class="faq-empty" id="faq-empty" hidden>No matching questions found. Try another search or topic.</p>
          </div>
        </div>
      </section>

      <section class="faq-contact-cta section-padding" aria-label="Contact us for help">
        <div class="site-container">
          <div class="faq-contact-cta__card">
            <img
              class="faq-contact-cta__envelope"
              src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/faq/50f46071-ef86-4d6e-915c-1d446e83586d-removebg-preview.png' ); ?>"
              alt=""
              width="88"
              height="88"
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />

            <div class="faq-contact-cta__copy">
              <h2 class="faq-contact-cta__title">Can&rsquo;t find what you&rsquo;re looking for?</h2>
              <p class="faq-contact-cta__text">
                We&rsquo;re happy to help! Send us a message and our team will get back to you.
              </p>
            </div>

            <div class="faq-contact-cta__action">
              <img
                class="faq-card-action__plane"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/faq/4dcc91b9-472a-4e88-9c01-e4b68e349229-removebg-preview.png' ); ?>"
                alt=""
                width="88"
                height="48"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
              <a class="btn btn--solid btn--lg btn-hover faq-contact-cta__btn" href="<?php echo esc_url( bdc_page_url( 'contact.html' ) ); ?>">
                <span class="faq-card-action__label">Contact Us</span>
                <svg class="faq-card-action__arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6" /></svg>
              </a>
              <img
                class="faq-card-action__heart"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/faq/7af0e916-3b9b-47fe-9a8f-24aa0a8d0005-removebg-preview.png' ); ?>"
                alt=""
                width="36"
                height="36"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
