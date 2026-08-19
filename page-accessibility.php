<?php
/**
 * Accessibility page template — converted from accessibility.html.
 *
 * Template Name: Accessibility
 *
 * @package Bright_Dreamers_Club
 */

get_header();
?>
    <main id="main-content">
      <section class="page-hero accessibility-hero" aria-label="Accessibility">
        <div class="site-container accessibility-hero__inner page-hero__inner">
          <div class="page-hero__content accessibility-hero__content">
            <nav class="creative-makers-breadcrumbs accessibility-breadcrumbs" aria-label="Breadcrumb">
              <ol class="creative-makers-breadcrumbs__list">
                <li><a href="<?php echo esc_url( bdc_page_url( 'index.html' ) ); ?>">Home</a></li>
                <li><a href="<?php echo esc_url( bdc_page_url( 'faq.html' ) ); ?>">Resources</a></li>
                <li aria-current="page">Accessibility</li>
              </ol>
            </nav>

            <h1 class="accessibility-hero__title">
              Accessibility
              <img
                class="accessibility-hero__heart"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Accessibility/17e9775d-fb51-4e15-8923-ed640844345c-removebg-preview-e1786341996741.png' ); ?>"
                alt=""
                width="28"
                height="28"
                decoding="async"
                aria-hidden="true"
              />
            </h1>

            <p class="accessibility-hero__text">
              Bright Dreamers Club is committed to ensuring our website is accessible to everyone,
              including people with disabilities. We strive to provide an inclusive experience for
              all visitors.
            </p>
          </div>

          <div class="about-hero__media accessibility-hero__media">
            <div class="lazy-img-wrap">
              <img
                class="about-hero__banner accessibility-hero__banner lazy-img"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Accessibility/Gemini_Generated_Image_os9ru3os9ru3os9r.png' ); ?>"
                alt="A young girl in a wheelchair using a laptop"
                width="1200"
                height="900"
                decoding="async"
              />
            </div>
          </div>
        </div>
      </section>

      <section class="accessibility-commitment section-padding" aria-label="Our commitment">
        <div class="site-container">
          <div class="accessibility-commitment__card">
            <div class="accessibility-commitment__inner">
              <img
                class="accessibility-commitment__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Accessibility/2cdbd022-39f7-4097-a9f0-05a8b50c2d8e-removebg-preview.png' ); ?>"
                alt=""
                width="72"
                height="72"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />

              <div class="accessibility-commitment__copy">
                <h2 class="accessibility-commitment__title">Our Commitment</h2>
                <p class="accessibility-commitment__text">
                  We are dedicated to making brightdreamersclub.org accessible and usable for all.
                  We follow recognized accessibility standards and work continuously to improve the
                  experience for every visitor, including adherence to the Web Content Accessibility
                  Guidelines (WCAG) 2.1 Level AA.
                </p>
              </div>

              <div class="accessibility-commitment__deco" aria-hidden="true">
                <div class="accessibility-commitment__stars">
                  <img
                    class="accessibility-commitment__star"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Accessibility/26cbaa97-18ff-4146-a1c5-67a824d943c1-removebg-preview (1).png' ); ?>"
                    alt=""
                    width="28"
                    height="28"
                    loading="lazy"
                    decoding="async"
                  />
                  <img
                    class="accessibility-commitment__star"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Accessibility/26cbaa97-18ff-4146-a1c5-67a824d943c1-removebg-preview (1).png' ); ?>"
                    alt=""
                    width="22"
                    height="22"
                    loading="lazy"
                    decoding="async"
                  />
                </div>
                <img
                  class="accessibility-commitment__quote-img"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Accessibility/16e5410c-5a68-47fb-9932-3d504a00c0e6-removebg-preview.png' ); ?>"
                  alt=""
                  width="220"
                  height="80"
                  loading="lazy"
                  decoding="async"
                />
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="accessibility-provide section-padding" aria-label="We aim to provide">
        <div class="site-container accessibility-provide__inner">
          <h2 class="accessibility-provide__title">We aim to provide</h2>

          <div class="accessibility-provide-grid">
            <article class="accessibility-provide-card">
              <img
                class="accessibility-provide-card__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Accessibility/906ef700-e6bf-4359-8c2a-745554349ba9-removebg-preview.png' ); ?>"
                alt=""
                width="56"
                height="56"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
              <h3 class="accessibility-provide-card__title">Easy Navigation</h3>
              <p class="accessibility-provide-card__text">
                Clear menus and logical page structure so you can find what you need quickly.
              </p>
            </article>

            <article class="accessibility-provide-card">
              <img
                class="accessibility-provide-card__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Accessibility/cf6a9c15-4f87-46c4-a2d9-0a1deb401e6d-removebg-preview.png' ); ?>"
                alt=""
                width="56"
                height="56"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
              <h3 class="accessibility-provide-card__title">Readable Content</h3>
              <p class="accessibility-provide-card__text">
                Legible fonts, sufficient contrast, and well-organized text for comfortable reading.
              </p>
            </article>

            <article class="accessibility-provide-card">
              <img
                class="accessibility-provide-card__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Accessibility/20981b85-1e35-46dc-8319-6430fbfc04e6-removebg-preview.png' ); ?>"
                alt=""
                width="56"
                height="56"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
              <h3 class="accessibility-provide-card__title">Keyboard Accessibility</h3>
              <p class="accessibility-provide-card__text">
                Full functionality for users who navigate with a keyboard or assistive devices.
              </p>
            </article>

            <article class="accessibility-provide-card">
              <img
                class="accessibility-provide-card__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Accessibility/dab96672-b166-4e8f-a580-cc3b6b24ea03-removebg-preview.png' ); ?>"
                alt=""
                width="56"
                height="56"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
              <h3 class="accessibility-provide-card__title">Alt Text &amp; Labels</h3>
              <p class="accessibility-provide-card__text">
                Descriptive text for images and clear labels on forms and interactive elements.
              </p>
            </article>

            <article class="accessibility-provide-card">
              <img
                class="accessibility-provide-card__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Accessibility/0c918463-dc16-4e2c-8855-07feb739708b-removebg-preview.png' ); ?>"
                alt=""
                width="56"
                height="56"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
              <h3 class="accessibility-provide-card__title">Compatibility</h3>
              <p class="accessibility-provide-card__text">
                Support for common browsers, screen readers, and assistive technologies.
              </p>
            </article>

            <article class="accessibility-provide-card">
              <img
                class="accessibility-provide-card__icon"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Accessibility/77f5c4ed-843d-40bc-a5f1-8551b8ee5dc8-removebg-preview.png' ); ?>"
                alt=""
                width="56"
                height="56"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
              <h3 class="accessibility-provide-card__title">Responsive Design</h3>
              <p class="accessibility-provide-card__text">
                A consistent experience across desktop, tablet, and mobile devices.
              </p>
            </article>
          </div>
        </div>
      </section>

      <section class="accessibility-panels section-padding" aria-label="Accessibility information">
        <div class="site-container accessibility-panels__inner">
          <article class="accessibility-panel accessibility-panel--purple">
            <img
              class="accessibility-panel__icon"
              src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Accessibility/bb97bc2a-bfef-4cd1-8fbf-7682b2da1864-removebg-preview.png' ); ?>"
              alt=""
              width="64"
              height="64"
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />
            <div class="accessibility-panel__copy">
              <h2 class="accessibility-panel__title">Ongoing Improvements</h2>
              <p class="accessibility-panel__text">
                Accessibility is an ongoing effort. We regularly review our website and content to
                identify and remove barriers and ensure we meet the evolving needs of our community.
              </p>
            </div>
            <img
              class="accessibility-panel__deco accessibility-panel__deco--heart"
              src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Accessibility/b4102ca5-050d-4ae4-bcc8-c0103428b45b-removebg-preview.png' ); ?>"
              alt=""
              width="72"
              height="72"
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />
          </article>

          <article class="accessibility-panel accessibility-panel--pink">
            <img
              class="accessibility-panel__icon"
              src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Accessibility/752d6f1f-1b10-4ee5-a9fd-bdff1d4889c2-removebg-preview.png' ); ?>"
              alt=""
              width="64"
              height="64"
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />
            <div class="accessibility-panel__copy">
              <h2 class="accessibility-panel__title">Need Assistance or Have Feedback?</h2>
              <p class="accessibility-panel__text">
                If you encounter any accessibility barriers on our website or have suggestions on
                how we can improve, we&rsquo;d love to hear from you.
              </p>
            </div>
            <div class="accessibility-panel__aside">
              <p class="accessibility-panel__aside-row">
                <img
                  class="accessibility-panel__aside-icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Accessibility/752d6f1f-1b10-4ee5-a9fd-bdff1d4889c2-removebg-preview.png' ); ?>"
                  alt=""
                  width="28"
                  height="28"
                  loading="lazy"
                  decoding="async"
                  aria-hidden="true"
                />
                <span>
                  Email:
                  <a class="accessibility-panel__email" href="mailto:hello@brightdreamersclub.org"
                    >hello@brightdreamersclub.org</a
                  >
                </span>
              </p>
              <p class="accessibility-panel__aside-row">
                <img
                  class="accessibility-panel__aside-icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Accessibility/2031e644-cd28-4b1a-8e69-26a210fad38b-removebg-preview.png' ); ?>"
                  alt=""
                  width="28"
                  height="28"
                  loading="lazy"
                  decoding="async"
                  aria-hidden="true"
                />
                <span>We aim to respond within 3 business days</span>
              </p>
            </div>
          </article>

          <article class="accessibility-panel accessibility-panel--yellow">
            <img
              class="accessibility-panel__icon"
              src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Accessibility/26cbaa97-18ff-4146-a1c5-67a824d943c1-removebg-preview (1).png' ); ?>"
              alt=""
              width="64"
              height="64"
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />
            <div class="accessibility-panel__copy">
              <h2 class="accessibility-panel__title">Standards We Follow</h2>
              <p class="accessibility-panel__text">
                This website strives to conform to WCAG 2.1 Level AA standards to ensure a more
                inclusive experience for all.
              </p>
            </div>
            <a
              class="accessibility-panel__link"
              href="https://www.w3.org/WAI/standards-guidelines/wcag/"
              target="_blank"
              rel="noopener noreferrer"
            >
              Learn more about WCAG 2.1
              <span class="accessibility-panel__link-arrow" aria-hidden="true">&rarr;</span>
            </a>
          </article>
        </div>
      </section>
    </main>

<?php
get_footer();
