<?php
/**
 * Newsletter Signup page template — converted from newsletter-signup.html.
 *
 * Template Name: Newsletter Signup
 *
 * @package Bright_Dreamers_Club
 */

get_header();
?>
    <main id="main-content">
      <section class="newsletter-signup section-padding" aria-label="Newsletter sign up">
        <div class="site-container">
          <div class="newsletter-layout">
            <div class="newsletter-info">
              <img
                class="newsletter-info__heart-deco"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Newsletter form/dfcc4104-0e61-43f8-81e6-0126494125e6-removebg-preview.png' ); ?>"
                alt=""
                width="36"
                height="36"
                decoding="async"
                aria-hidden="true"
              />

              <h1 class="newsletter-info__title">
                <span class="newsletter-info__title-line newsletter-info__title-line--navy">Stay Connected.</span>
                <span class="newsletter-info__title-line newsletter-info__title-line--pink">Be a Bright Dreamer.</span>
              </h1>

              <p class="newsletter-info__intro">
                Join our community and receive inspiring updates, stories, and ways to make a
                difference in children&rsquo;s lives.
                <img
                  class="newsletter-info__sparkle"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Newsletter form/5e8df45b-9bb3-42bf-9114-5557f3e13e6e-removebg-preview.png' ); ?>"
                  alt=""
                  width="28"
                  height="28"
                  decoding="async"
                  aria-hidden="true"
                />
              </p>

              <div class="newsletter-info__benefits">
                <h2 class="newsletter-info__benefits-title">When you subscribe, you&rsquo;ll receive:</h2>
                <ul class="newsletter-benefits-list">
                  <li>
                    <img class="newsletter-benefits-list__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Newsletter form/2ddeafed-dd66-4ca3-8a5c-055efd2e7083-removebg-preview.png' ); ?>" alt="" width="36" height="36" loading="lazy" decoding="async" aria-hidden="true" />
                    <span>Inspiring stories of our Bright Dreamers in action</span>
                  </li>
                  <li>
                    <img class="newsletter-benefits-list__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Newsletter form/6684836c-25c8-4147-bcea-ffbe697e500a-removebg-preview.png' ); ?>" alt="" width="36" height="36" loading="lazy" decoding="async" aria-hidden="true" />
                    <span>Updates on new experiences, events, and projects</span>
                  </li>
                  <li>
                    <img class="newsletter-benefits-list__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Newsletter form/6fecbcf6-1650-406f-9442-bfed9906a5b8-removebg-preview.png' ); ?>" alt="" width="36" height="36" loading="lazy" decoding="async" aria-hidden="true" />
                    <span>Volunteer opportunities and ways to get involved</span>
                  </li>
                  <li>
                    <img class="newsletter-benefits-list__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Newsletter form/ef22b805-101e-48c3-8bb0-e4b965825016-removebg-preview.png' ); ?>" alt="" width="36" height="36" loading="lazy" decoding="async" aria-hidden="true" />
                    <span>News, resources, and community highlights</span>
                  </li>
                </ul>
              </div>

              <figure class="newsletter-info__photo">
                <div class="lazy-img-wrap">
                  <img
                    class="newsletter-info__photo-img lazy-img"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                    data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Newsletter form/58c6acb1-3b0a-4c9b-966f-0bac6c54ed91.png' ); ?>"
                    alt="Children coloring together at a table"
                    width="640"
                    height="420"
                    decoding="async"
                  />
                </div>
              </figure>

              <aside class="newsletter-privacy-box">
                <img
                  class="newsletter-privacy-box__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Donation-form/0e4ea675-db2c-4e88-9443-f70ae8361d27-e1786258237229-258x300.png' ); ?>"
                  alt=""
                  width="36"
                  height="36"
                  loading="lazy"
                  decoding="async"
                  aria-hidden="true"
                />
                <p class="newsletter-privacy-box__text">
                  We respect your privacy. We will never share your information. You can
                  unsubscribe at any time.
                </p>
                <img
                  class="newsletter-privacy-box__deco"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Donation-form/d9d49a82-66ee-44a3-b040-279a56feb44d-removebg-preview.png' ); ?>"
                  alt=""
                  width="120"
                  height="32"
                  loading="lazy"
                  decoding="async"
                  aria-hidden="true"
                />
              </aside>
            </div>

            <div class="newsletter-form-wrap">
              <form class="newsletter-form" id="newsletter-signup-form" action="#" method="post" data-form-id="newsletter_signup">
                <?php bdc_render_form_security_fields( 'newsletter_signup' ); ?>
                <header class="newsletter-form__head">
                  <img
                    class="newsletter-form__head-icon"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Newsletter form/9971f580-3079-4776-a337-0c2de3e1498f.png' ); ?>"
                    alt=""
                    width="44"
                    height="44"
                    decoding="async"
                    aria-hidden="true"
                  />
                  <div class="newsletter-form__head-text">
                    <h2 class="newsletter-form__title">Newsletter Sign Up</h2>
                    <p class="newsletter-form__desc">Join our community and help us create brighter futures for children.</p>
                  </div>
                </header>

                <label class="contact-field">
                  <span class="apply-field__label">Full Name *</span>
                  <span class="contact-field__box newsletter-field-box">
                    <input class="contact-field__input" type="text" name="full_name" autocomplete="name" placeholder="Enter your full name" required />
                    <img class="contact-field__icon newsletter-field-box__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Newsletter form/d9f3d774-e8d1-425e-98d6-7595b7c06bfd-removebg-preview (1).png' ); ?>" alt="" width="22" height="22" decoding="async" aria-hidden="true" />
                  </span>
                </label>

                <label class="contact-field">
                  <span class="apply-field__label">Email Address *</span>
                  <span class="contact-field__box newsletter-field-box">
                    <input class="contact-field__input" type="email" name="email" autocomplete="email" placeholder="Enter your email address" required />
                    <img class="contact-field__icon newsletter-field-box__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Newsletter form/ef22b805-101e-48c3-8bb0-e4b965825016-removebg-preview.png' ); ?>" alt="" width="22" height="22" decoding="async" aria-hidden="true" />
                  </span>
                  <span class="newsletter-form__hint">We&rsquo;ll send good things straight to your inbox.</span>
                </label>

                <fieldset class="newsletter-fieldset" aria-label="What would you like to receive">
                  <legend class="apply-field__label">What would you like to receive?</legend>
                  <ul class="newsletter-receive-list">
                    <li>
                      <label class="newsletter-receive-card newsletter-receive-card--pink">
                        <input type="checkbox" name="receive[]" value="program-updates" />
                        <span class="newsletter-receive-card__inner">
                          <span class="newsletter-receive-card__check" aria-hidden="true"></span>
                          <img class="newsletter-receive-card__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Newsletter form/d9f3d774-e8d1-425e-98d6-7595b7c06bfd-removebg-preview (1).png' ); ?>" alt="" width="32" height="32" decoding="async" aria-hidden="true" />
                          <span class="newsletter-receive-card__copy">
                            <strong>Program updates</strong>
                            <span>Stories and news from our programs</span>
                          </span>
                        </span>
                      </label>
                    </li>
                    <li>
                      <label class="newsletter-receive-card newsletter-receive-card--yellow">
                        <input type="checkbox" name="receive[]" value="new-experiences" />
                        <span class="newsletter-receive-card__inner">
                          <span class="newsletter-receive-card__check" aria-hidden="true"></span>
                          <img class="newsletter-receive-card__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Newsletter form/62a87121-0407-4382-94fc-1b7c40a68d17-removebg-preview-removebg-preview.png' ); ?>" alt="" width="32" height="32" decoding="async" aria-hidden="true" />
                          <span class="newsletter-receive-card__copy">
                            <strong>New experiences</strong>
                            <span>Events, workshops, and activities</span>
                          </span>
                        </span>
                      </label>
                    </li>
                    <li>
                      <label class="newsletter-receive-card newsletter-receive-card--green">
                        <input type="checkbox" name="receive[]" value="volunteer" />
                        <span class="newsletter-receive-card__inner">
                          <span class="newsletter-receive-card__check" aria-hidden="true"></span>
                          <img class="newsletter-receive-card__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Newsletter form/9924cdf8-4acd-46d7-a43d-e3d943735289-e1786257706516-300x267-removebg-preview.png' ); ?>" alt="" width="32" height="32" decoding="async" aria-hidden="true" />
                          <span class="newsletter-receive-card__copy">
                            <strong>Volunteer opportunities</strong>
                            <span>Ways to share your time and skills</span>
                          </span>
                        </span>
                      </label>
                    </li>
                    <li>
                      <label class="newsletter-receive-card newsletter-receive-card--blue">
                        <input type="checkbox" name="receive[]" value="partnership" />
                        <span class="newsletter-receive-card__inner">
                          <span class="newsletter-receive-card__check" aria-hidden="true"></span>
                          <img class="newsletter-receive-card__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Newsletter form/ba2e0d55-8e30-4eab-acbd-16dbeb71936a-removebg-preview.png' ); ?>" alt="" width="32" height="32" decoding="async" aria-hidden="true" />
                          <span class="newsletter-receive-card__copy">
                            <strong>Partnership news</strong>
                            <span>Collaborations and sponsor updates</span>
                          </span>
                        </span>
                      </label>
                    </li>
                    <li>
                      <label class="newsletter-receive-card newsletter-receive-card--purple">
                        <input type="checkbox" name="receive[]" value="community" />
                        <span class="newsletter-receive-card__inner">
                          <span class="newsletter-receive-card__check" aria-hidden="true"></span>
                          <img class="newsletter-receive-card__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Newsletter form/62a07291-ab44-4310-aa5f-1ce0782e1e15__1_-removebg-preview.png' ); ?>" alt="" width="32" height="32" decoding="async" aria-hidden="true" />
                          <span class="newsletter-receive-card__copy">
                            <strong>Community highlights</strong>
                            <span>Stories from families and supporters</span>
                          </span>
                        </span>
                      </label>
                    </li>
                  </ul>
                </fieldset>

                <fieldset class="newsletter-fieldset" aria-label="What is your role">
                  <legend class="apply-field__label">What is your role?</legend>
                  <div class="newsletter-role-grid">
                    <label class="newsletter-role-card newsletter-role-card--pink">
                      <input type="checkbox" name="role[]" value="parent" />
                      <span class="newsletter-role-card__inner">
                        <span class="newsletter-role-card__check" aria-hidden="true"></span>
                        <img class="newsletter-role-card__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Newsletter form/d9f3d774-e8d1-425e-98d6-7595b7c06bfd-removebg-preview (1).png' ); ?>" alt="" width="28" height="28" decoding="async" aria-hidden="true" />
                        <span>Parent / Guardian</span>
                      </span>
                    </label>
                    <label class="newsletter-role-card newsletter-role-card--green">
                      <input type="checkbox" name="role[]" value="volunteer" />
                      <span class="newsletter-role-card__inner">
                        <span class="newsletter-role-card__check" aria-hidden="true"></span>
                        <img class="newsletter-role-card__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Newsletter form/9924cdf8-4acd-46d7-a43d-e3d943735289-e1786257706516-300x267-removebg-preview.png' ); ?>" alt="" width="28" height="28" decoding="async" aria-hidden="true" />
                        <span>Volunteer</span>
                      </span>
                    </label>
                    <label class="newsletter-role-card newsletter-role-card--blue">
                      <input type="checkbox" name="role[]" value="partner" />
                      <span class="newsletter-role-card__inner">
                        <span class="newsletter-role-card__check" aria-hidden="true"></span>
                        <img class="newsletter-role-card__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Newsletter form/ba2e0d55-8e30-4eab-acbd-16dbeb71936a-removebg-preview.png' ); ?>" alt="" width="28" height="28" decoding="async" aria-hidden="true" />
                        <span>Partner / Sponsor</span>
                      </span>
                    </label>
                    <label class="newsletter-role-card newsletter-role-card--purple">
                      <input type="checkbox" name="role[]" value="supporter" />
                      <span class="newsletter-role-card__inner">
                        <span class="newsletter-role-card__check" aria-hidden="true"></span>
                        <img class="newsletter-role-card__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Newsletter form/62a07291-ab44-4310-aa5f-1ce0782e1e15__1_-removebg-preview.png' ); ?>" alt="" width="28" height="28" decoding="async" aria-hidden="true" />
                        <span>Community Supporter</span>
                      </span>
                    </label>
                    <label class="newsletter-role-card newsletter-role-card--yellow newsletter-role-card--wide">
                      <input type="checkbox" name="role[]" value="educator" />
                      <span class="newsletter-role-card__inner">
                        <span class="newsletter-role-card__check" aria-hidden="true"></span>
                        <img class="newsletter-role-card__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Newsletter form/01a00370-066a-4301-b359-32b8eee342f3-removebg-preview.png' ); ?>" alt="" width="28" height="28" decoding="async" aria-hidden="true" />
                        <span>Educator</span>
                      </span>
                    </label>
                  </div>
                </fieldset>

                <button class="btn btn--solid btn--lg btn-hover newsletter-submit-btn" type="submit">
                  <img
                    class="newsletter-submit-btn__icon"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Newsletter form/fcf363b7-3fb2-4a1d-9690-2354888d1104-removebg-preview.png' ); ?>"
                    alt=""
                    width="22"
                    height="22"
                    decoding="async"
                    aria-hidden="true"
                  />
                  Subscribe to Newsletter
                </button>

                <p class="newsletter-form__thanks">
                  Thank you for being part of the Bright Dreamers community!
                  <img
                    class="newsletter-form__thanks-heart"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Newsletter form/dfcc4104-0e61-43f8-81e6-0126494125e6-removebg-preview.png' ); ?>"
                    alt=""
                    width="20"
                    height="20"
                    decoding="async"
                    aria-hidden="true"
                  />
                </p>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
