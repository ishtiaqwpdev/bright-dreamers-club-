<?php
/**
 * Photo Media Policy page template — converted from photo-media-policy.html.
 *
 * Template Name: Photo Media Policy
 *
 * @package Bright_Dreamers_Club
 */

get_header();
?>
    <main id="main-content">
      <section class="page-hero media-policy-hero" aria-label="Photo and Media Policy">
        <div class="site-container media-policy-hero__inner page-hero__inner">
          <div class="page-hero__content media-policy-hero__content">
            <nav class="creative-makers-breadcrumbs media-policy-breadcrumbs" aria-label="Breadcrumb">
              <ol class="creative-makers-breadcrumbs__list">
                <li><a href="<?php echo esc_url( bdc_page_url( 'index.html' ) ); ?>">Home</a></li>
                <li><a href="<?php echo esc_url( bdc_page_url( 'faq.html' ) ); ?>">Resources</a></li>
                <li aria-current="page">Photo &amp; Media Policy</li>
              </ol>
            </nav>

            <h1 class="media-policy-hero__title">
              Photo &amp; Media Policy
              <img
                class="media-policy-hero__heart"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media Policy/2ddeafed-dd66-4ca3-8a5c-055efd2e7083-removebg-preview.png' ); ?>"
                alt=""
                width="28"
                height="28"
                decoding="async"
                aria-hidden="true"
              />
            </h1>

            <p class="media-policy-hero__text">
              At Bright Dreamers, we believe in celebrating children&rsquo;s creativity while
              protecting their privacy and dignity. This policy explains how we take, use, and
              safeguard photos and videos.
            </p>
          </div>

          <div class="about-hero__media media-policy-hero__media">
            <div class="lazy-img-wrap">
              <img
                class="about-hero__banner media-policy-hero__banner lazy-img"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media Policy/77ada95f-2de9-4cb6-ab7a-01ffed9e2327.png' ); ?>"
                alt="A young girl holding a camera"
                width="1200"
                height="900"
                decoding="async"
              />
            </div>
          </div>
        </div>
      </section>

      <section class="media-policy-main section-padding" aria-label="Photo and media policy content">
        <div class="site-container media-policy-main__inner">
          <aside class="media-policy-sidebar" aria-label="On this page">
            <div class="media-policy-sidebar__sticky">
            <h2 class="media-policy-sidebar__title">On This Page</h2>
            <nav class="media-policy-nav" aria-label="Policy sections">
              <ul class="media-policy-nav__list">
                <li>
                  <a class="media-policy-nav__link is-active" href="#media-commitment">
                    <img class="media-policy-nav__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media Policy/abd4f72a-0bb4-4fb9-9096-e6413cd064f3-removebg-preview.png' ); ?>" alt="" width="28" height="28" decoding="async" aria-hidden="true" />
                    <span>Our Commitment</span>
                  </a>
                </li>
                <li>
                  <a class="media-policy-nav__link" href="#media-when-taken">
                    <img class="media-policy-nav__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media Policy/0296d481-5110-4e02-b060-d6b7728004c1-removebg-preview.png' ); ?>" alt="" width="28" height="28" decoding="async" aria-hidden="true" />
                    <span>When Photos &amp; Videos May Be Taken</span>
                  </a>
                </li>
                <li>
                  <a class="media-policy-nav__link" href="#media-how-used">
                    <img class="media-policy-nav__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media Policy/1450c6df-d881-4bf3-8949-a76704d63431-removebg-preview.png' ); ?>" alt="" width="28" height="28" decoding="async" aria-hidden="true" />
                    <span>How We Use Photos &amp; Videos</span>
                  </a>
                </li>
                <li>
                  <a class="media-policy-nav__link" href="#media-parental-consent">
                    <img class="media-policy-nav__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media Policy/a30541e3-b02b-4aa3-b173-579697f84539-removebg-preview.png' ); ?>" alt="" width="28" height="28" decoding="async" aria-hidden="true" />
                    <span>Parental Consent</span>
                  </a>
                </li>
                <li>
                  <a class="media-policy-nav__link" href="#media-protection">
                    <img class="media-policy-nav__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media Policy/14a0863a-4911-4c0c-9c16-24b11109cf12-removebg-preview.png' ); ?>" alt="" width="28" height="28" decoding="async" aria-hidden="true" />
                    <span>How We Protect Photos &amp; Videos</span>
                  </a>
                </li>
                <li>
                  <a class="media-policy-nav__link" href="#media-sharing">
                    <img class="media-policy-nav__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media Policy/1450c6df-d881-4bf3-8949-a76704d63431-removebg-preview.png' ); ?>" alt="" width="28" height="28" decoding="async" aria-hidden="true" />
                    <span>Sharing &amp; Publications</span>
                  </a>
                </li>
                <li>
                  <a class="media-policy-nav__link" href="#media-not-do">
                    <img class="media-policy-nav__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media Policy/a0259083-2c50-4600-a1b2-9b3f656305ee-removebg-preview.png' ); ?>" alt="" width="28" height="28" decoding="async" aria-hidden="true" />
                    <span>What We Do Not Do</span>
                  </a>
                </li>
                <li>
                  <a class="media-policy-nav__link" href="#media-rights">
                    <img class="media-policy-nav__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media Policy/60c31d4b-2d71-49b4-9311-979e1e6feeeb-removebg-preview.png' ); ?>" alt="" width="28" height="28" decoding="async" aria-hidden="true" />
                    <span>Your Rights</span>
                  </a>
                </li>
                <li>
                  <a class="media-policy-nav__link" href="#media-questions">
                    <img class="media-policy-nav__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media Policy/789fd039-72d6-40a1-a56e-a46a110b48cc-removebg-preview.png' ); ?>" alt="" width="28" height="28" decoding="async" aria-hidden="true" />
                    <span>Questions or Concerns</span>
                  </a>
                </li>
              </ul>
            </nav>

            <article class="media-policy-sidebar-card">
              <img
                class="media-policy-sidebar-card__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media Policy/8f3e5bf2-5474-4343-bebc-4b3c89358535-removebg-preview.png' ); ?>"
                alt=""
                width="120"
                height="120"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
              <p class="media-policy-sidebar-card__text">
                Protecting children is our priority. This policy helps us create a safe and
                respectful environment for all.
              </p>
            </article>
            </div>
          </aside>

          <div class="media-policy-content">
            <article class="media-policy-section" id="media-commitment" data-media-section>
              <div class="media-policy-section__head">
                <img class="media-policy-section__icon media-policy-section__icon--blend" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media Policy/abd4f72a-0bb4-4fb9-9096-e6413cd064f3-removebg-preview.png' ); ?>" alt="" width="40" height="40" loading="lazy" decoding="async" aria-hidden="true" />
                <h2 class="media-policy-section__title">1. Our Commitment</h2>
              </div>
              <div class="media-policy-section__body">
                <p>
                  Bright Dreamers is committed to protecting the privacy, dignity, and safety of
                  every child in our community. Photos and videos are used thoughtfully to celebrate
                  learning and creativity &mdash; never to exploit or misrepresent a child.
                </p>
              </div>
            </article>

            <article class="media-policy-section" id="media-when-taken" data-media-section>
              <div class="media-policy-section__head">
                <img class="media-policy-section__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media Policy/0296d481-5110-4e02-b060-d6b7728004c1-removebg-preview.png' ); ?>" alt="" width="40" height="40" loading="lazy" decoding="async" aria-hidden="true" />
                <h2 class="media-policy-section__title">2. When Photos &amp; Videos May Be Taken</h2>
              </div>
              <div class="media-policy-section__body">
                <p>
                  Photos and videos may be taken during approved Bright Dreamers activities,
                  including workshops, community projects, Dream Market events, and other
                  supervised experiences. Photography is always optional and conducted respectfully.
                </p>
              </div>
            </article>

            <article class="media-policy-section" id="media-how-used" data-media-section>
              <div class="media-policy-section__head">
                <img class="media-policy-section__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media Policy/1450c6df-d881-4bf3-8949-a76704d63431-removebg-preview.png' ); ?>" alt="" width="40" height="40" loading="lazy" decoding="async" aria-hidden="true" />
                <h2 class="media-policy-section__title">3. How We Use Photos &amp; Videos</h2>
              </div>
              <div class="media-policy-section__body">
                <p>We may use approved photos and videos to:</p>
                <ul class="media-policy-list media-policy-list--green">
                  <li>Share stories and updates on our website</li>
                  <li>Highlight children&rsquo;s projects and achievements</li>
                  <li>Promote programs, events, and community activities</li>
                  <li>Create newsletters, reports, and educational materials</li>
                </ul>
                <p>
                  We do not use photos or videos for advertising unrelated to our mission.
                </p>
              </div>
            </article>

            <article class="media-policy-section" id="media-parental-consent" data-media-section>
              <div class="media-policy-section__head">
                <img class="media-policy-section__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media Policy/a30541e3-b02b-4aa3-b173-579697f84539-removebg-preview.png' ); ?>" alt="" width="40" height="40" loading="lazy" decoding="async" aria-hidden="true" />
                <h2 class="media-policy-section__title">4. Parental Consent</h2>
              </div>
              <div class="media-policy-section__body">
                <p>
                  We obtain written consent from a parent or guardian before using a child&rsquo;s
                  photo or video in any public-facing materials. Families may choose full consent,
                  limited consent, or no photography at any time.
                </p>
                <p>
                  <a class="media-policy-section__contact" href="<?php echo esc_url( bdc_page_url( 'photo-media-consent.html' ) ); ?>">Complete the Photo &amp; Media Consent Form</a>
                </p>
              </div>
            </article>

            <article class="media-policy-section" id="media-protection" data-media-section>
              <div class="media-policy-section__head">
                <img class="media-policy-section__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media Policy/14a0863a-4911-4c0c-9c16-24b11109cf12-removebg-preview.png' ); ?>" alt="" width="40" height="40" loading="lazy" decoding="async" aria-hidden="true" />
                <h2 class="media-policy-section__title">5. How We Protect Photos &amp; Videos</h2>
              </div>
              <div class="media-policy-section__body">
                <p>
                  All media is stored securely with limited access to authorized staff and
                  volunteers. We never sell personal images, and we review our storage and sharing
                  practices regularly to keep children safe.
                </p>
              </div>
            </article>

            <article class="media-policy-section" id="media-sharing" data-media-section>
              <div class="media-policy-section__head">
                <img class="media-policy-section__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media Policy/1450c6df-d881-4bf3-8949-a76704d63431-removebg-preview.png' ); ?>" alt="" width="40" height="40" loading="lazy" decoding="async" aria-hidden="true" />
                <h2 class="media-policy-section__title">6. Sharing &amp; Publications</h2>
              </div>
              <div class="media-policy-section__body">
                <p>
                  When we share photos or videos, we do so thoughtfully. A child&rsquo;s full name
                  is rarely used; we may use a first name only or no name at all. We avoid sharing
                  identifying details such as school name or home address.
                </p>
              </div>
            </article>

            <article class="media-policy-section" id="media-not-do" data-media-section>
              <div class="media-policy-section__head">
                <img class="media-policy-section__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media Policy/a0259083-2c50-4600-a1b2-9b3f656305ee-removebg-preview.png' ); ?>" alt="" width="40" height="40" loading="lazy" decoding="async" aria-hidden="true" />
                <h2 class="media-policy-section__title">7. What We Do Not Do</h2>
              </div>
              <div class="media-policy-section__body">
                <ul class="media-policy-list media-policy-list--pink">
                  <li>Sell or share photos with third parties</li>
                  <li>Use images for unrelated marketing</li>
                  <li>Post photos without appropriate consent</li>
                  <li>Share identifiable images publicly without permission</li>
                </ul>
              </div>
            </article>

            <article class="media-policy-section" id="media-rights" data-media-section>
              <div class="media-policy-section__head">
                <img class="media-policy-section__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media Policy/60c31d4b-2d71-49b4-9311-979e1e6feeeb-removebg-preview.png' ); ?>" alt="" width="40" height="40" loading="lazy" decoding="async" aria-hidden="true" />
                <h2 class="media-policy-section__title">8. Your Rights</h2>
              </div>
              <div class="media-policy-section__body">
                <ul class="media-policy-checklist">
                  <li>
                    <img class="media-policy-checklist__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media Policy/WhatsApp Image 2026-08-09 at 6.01.25 PM.jpeg' ); ?>" alt="" width="18" height="18" loading="lazy" decoding="async" aria-hidden="true" />
                    <span>Request to review photos or videos of your child</span>
                  </li>
                  <li>
                    <img class="media-policy-checklist__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media Policy/WhatsApp Image 2026-08-09 at 6.01.25 PM.jpeg' ); ?>" alt="" width="18" height="18" loading="lazy" decoding="async" aria-hidden="true" />
                    <span>Request removal from future use</span>
                  </li>
                  <li>
                    <img class="media-policy-checklist__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media Policy/WhatsApp Image 2026-08-09 at 6.01.25 PM.jpeg' ); ?>" alt="" width="18" height="18" loading="lazy" decoding="async" aria-hidden="true" />
                    <span>Withdraw consent at any time</span>
                  </li>
                  <li>
                    <img class="media-policy-checklist__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media Policy/WhatsApp Image 2026-08-09 at 6.01.25 PM.jpeg' ); ?>" alt="" width="18" height="18" loading="lazy" decoding="async" aria-hidden="true" />
                    <span>Ask questions about our media practices</span>
                  </li>
                </ul>
              </div>
            </article>

            <article class="media-policy-section" id="media-questions" data-media-section>
              <div class="media-policy-section__head">
                <img class="media-policy-section__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media Policy/789fd039-72d6-40a1-a56e-a46a110b48cc-removebg-preview.png' ); ?>" alt="" width="40" height="40" loading="lazy" decoding="async" aria-hidden="true" />
                <h2 class="media-policy-section__title">9. Questions or Concerns</h2>
              </div>
              <div class="media-policy-section__body">
                <p>
                  If you have questions about this policy or how your child&rsquo;s image is used,
                  please contact us. We are happy to explain our practices and address any concerns
                  promptly.
                </p>
                <p>
                  <a class="media-policy-section__contact" href="<?php echo esc_url( bdc_page_url( 'contact.html' ) ); ?>">Contact our team</a>
                </p>
              </div>
            </article>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
