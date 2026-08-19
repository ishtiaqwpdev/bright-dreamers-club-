<?php
/**
 * Contact page template — converted from contact.html.
 *
 * Template Name: Contact
 *
 * @package Bright_Dreamers_Club
 */

get_header();
?>
    <main id="main-content">
      <section class="page-hero contact-hero" aria-label="Contact Bright Dreamers">
        <div class="site-container page-hero__inner">
          <div class="page-hero__content">
            <h1 class="contact-hero__title">
              <span class="contact-hero__title-row">
                <span class="heading-underline contact-hero__contact-word">
                  Contact
                  <img
                    class="heading-underline__img"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/heading-underline.jpeg' ); ?>"
                    alt=""
                    width="120"
                    height="12"
                  />
                </span>
                <span class="contact-hero__us-word">Us</span>
                <svg
                  class="contact-hero__star"
                  viewBox="0 0 24 24"
                  width="28"
                  height="28"
                  fill="none"
                  stroke="var(--color-yellow)"
                  stroke-width="1.8"
                  stroke-linejoin="round"
                  aria-hidden="true"
                >
                  <path
                    d="M12 2.8l2.55 5.35 5.85.7-4.35 3.95 1.2 5.75L12 15.7l-5.25 2.85 1.2-5.75-4.35-3.95 5.85-.7L12 2.8z"
                  />
                </svg>
              </span>
            </h1>

            <div class="contact-hero__body">
              <p class="contact-hero__copy">
                We'd love to hear from you. Whether you have a question, an
                idea, or want to learn more about Bright Dreamers, please reach
                out. Your message helps us build a
                <span class="contact-hero__accent contact-hero__accent--purple"
                  >brighter</span
                >
                future for kids with
                <span class="contact-hero__accent contact-hero__accent--pink"
                  >ideas</span
                >.
              </p>

              <svg
                class="contact-hero__heart"
                viewBox="0 0 24 24"
                width="26"
                height="26"
                fill="none"
                stroke="var(--color-plane)"
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

          <div class="about-hero__media">
            <div class="lazy-img-wrap">
              <img
                class="about-hero__banner lazy-img"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/contact-hero-banner.jpeg' ); ?>"
                alt="A Bright Dreamer writing a thank-you card"
                width="1200"
                height="720"
                decoding="async"
              />
            </div>
          </div>
        </div>
      </section>

      <section class="contact-form" aria-label="Send us a message">
        <div class="site-container contact-form__inner">
          <div class="contact-form__wrap">
            <aside class="contact-form__aside" aria-label="We're here to help">
              <img
                class="contact-form__aside-plane"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/contact-form-plane.jpeg' ); ?>"
                alt=""
                width="200"
                height="120"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />

              <div class="contact-form__aside-copy">
                <h2 class="contact-form__aside-title">
                  <span class="heading-underline">
                    We're
                    <img
                      class="heading-underline__img"
                      src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/heading-underline.jpeg' ); ?>"
                      alt=""
                      width="120"
                      height="12"
                    />
                  </span>
                  Here to Help
                </h2>

                <p class="contact-form__aside-text">
                  Use the form to send us a message. We read every message and
                  will get back to you as soon as we can. Thank you for being
                  part of the Bright Dreamers community.
                </p>
              </div>

              <img
                class="contact-form__aside-plant"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/contact/WhatsApp_Image_2026-08-10_at_1.24.08_PM-removebg-preview.png' ); ?>"
                alt=""
                width="200"
                height="180"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
            </aside>

            <div class="contact-form__main">
              <h2 class="contact-form__title">
                Send Us a Message
                <svg
                  class="contact-form__title-heart"
                  viewBox="0 0 24 24"
                  width="22"
                  height="22"
                  fill="none"
                  stroke="var(--color-pink)"
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

              <form class="contact-form__form" id="contact-form" action="#" method="post" data-form-id="contact">
                <?php bdc_render_form_security_fields( 'contact' ); ?>
                <div class="contact-form__row">
                  <label class="contact-field">
                    <span class="contact-field__box">
                      <svg
                        class="contact-field__icon"
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
                        <circle cx="12" cy="8" r="3.5" />
                        <path d="M5.5 20c.8-3.2 3-5 6.5-5s5.7 1.8 6.5 5" />
                      </svg>
                      <input
                        class="contact-field__input"
                        type="text"
                        name="name"
                        placeholder="Your Name *"
                        autocomplete="name"
                        required
                      />
                    </span>
                  </label>

                  <label class="contact-field">
                    <span class="contact-field__box">
                      <svg
                        class="contact-field__icon"
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
                        <rect x="3" y="5.5" width="18" height="13" rx="2" />
                        <path d="M3 7.5l9 6.5 9-6.5" />
                      </svg>
                      <input
                        class="contact-field__input"
                        type="email"
                        name="email"
                        placeholder="Email Address *"
                        autocomplete="email"
                        required
                      />
                    </span>
                  </label>
                </div>

                <label class="contact-field">
                  <span class="contact-field__box">
                    <svg
                      class="contact-field__icon"
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
                      <path d="M4 7h16v10H4z" />
                      <path d="M8 7V5.5h8V7" />
                      <circle cx="12" cy="12" r="1.2" fill="currentColor" stroke="none" />
                    </svg>
                    <input
                      class="contact-field__input"
                      type="text"
                      name="subject"
                      placeholder="Subject *"
                      required
                    />
                  </span>
                </label>

                <label class="contact-field contact-field--message">
                  <span class="contact-field__box contact-field__box--area">
                    <svg
                      class="contact-field__icon contact-field__icon--top"
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
                      <path d="M4 18l2-2h12l2 2V6H4v12z" />
                      <path d="M8 10h8M8 13.5h5.5" />
                    </svg>
                    <textarea
                      class="contact-field__input contact-field__textarea"
                      name="message"
                      placeholder="Your Message *"
                      rows="5"
                      required
                    ></textarea>
                  </span>
                </label>

                <div class="contact-form__privacy">
                  <svg
                    class="contact-form__privacy-icon"
                    viewBox="0 0 24 24"
                    width="28"
                    height="28"
                    aria-hidden="true"
                  >
                    <path
                      d="M12 2.8l7 3.2v5.8c0 4.6-3 8.8-7 10.2-4-1.4-7-5.6-7-10.2V6l7-3.2z"
                      fill="var(--color-pink-soft)"
                      stroke="var(--color-pink)"
                      stroke-width="1.5"
                      stroke-linejoin="round"
                    />
                    <path
                      d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
                      transform="translate(0 -1.5) scale(0.42) translate(14 14)"
                      fill="var(--color-pink)"
                      stroke="none"
                    />
                  </svg>
                  <p class="contact-form__privacy-text">
                    <strong>Your privacy matters to us.</strong> We will never
                    share your information. Your message is safe with us.
                  </p>
                </div>

                <button class="btn btn--solid btn--lg btn-hover contact-form__submit" type="submit">
                  Send Message
                  <svg
                    class="btn__icon contact-form__submit-plane"
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
                    <path d="M3 12l18-7-7 18-2.5-7.5L3 12z" />
                    <path d="M14 5l4 4" />
                  </svg>
                </button>
              </form>
            </div>
          </div>
        </div>
      </section>

      <section class="contact-cta" aria-label="See our vision">
        <div class="site-container contact-cta__inner">
          <div class="contact-cta__card">
            <img
              class="contact-cta__door"
              src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/contact-cta-door.jpeg' ); ?>"
              alt=""
              width="167"
              height="107"
              loading="lazy"
              decoding="async"
            />

            <div class="contact-cta__content">
              <h2 class="contact-cta__text">
                Together, we can open doors for young ideas and create lasting
                change.
              </h2>

              <div class="contact-cta__deco" aria-hidden="true">
                <svg
                  class="contact-cta__heart"
                  viewBox="0 0 24 24"
                  width="22"
                  height="22"
                  fill="none"
                  stroke="var(--color-pink)"
                  stroke-width="1.8"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path
                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
                  />
                </svg>
                <svg
                  class="contact-cta__star"
                  viewBox="0 0 24 24"
                  width="22"
                  height="22"
                  fill="none"
                  stroke="var(--color-yellow)"
                  stroke-width="1.8"
                  stroke-linejoin="round"
                >
                  <path
                    d="M12 2.8l2.55 5.35 5.85.7-4.35 3.95 1.2 5.75L12 15.7l-5.25 2.85 1.2-5.75-4.35-3.95 5.85-.7L12 2.8z"
                  />
                </svg>
              </div>
            </div>

            <a
              class="btn btn--outline btn--lg btn-hover contact-cta__btn"
              href="<?php echo esc_url( bdc_page_url( 'our-vision.html' ) ); ?>"
            >
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
      </section>
    </main>

<?php
get_footer();
