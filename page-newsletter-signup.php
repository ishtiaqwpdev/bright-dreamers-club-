<?php
/**
 * Newsletter Signup page template — converted from newsletter-signup.html.
 *
 * Template Name: Newsletter Signup
 *
 * @package Bright_Dreamers_Club
 */

get_header();

$newsletter_page_id = get_queried_object_id();
$newsletter_asset_base = 'assets/images/Newsletter form/';
$newsletter_lazy_placeholder = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';

$newsletter_aria_label = bdc_get_acf_text( 'newsletter_aria_label', 'Newsletter sign up', $newsletter_page_id );
$newsletter_heart_deco_url = bdc_get_acf_image_url(
	'newsletter_heart_deco',
	bdc_theme_asset_url( $newsletter_asset_base . 'dfcc4104-0e61-43f8-81e6-0126494125e6-removebg-preview.png' ),
	$newsletter_page_id
);
$newsletter_title_navy = bdc_get_acf_text( 'newsletter_title_navy', 'Stay Connected.', $newsletter_page_id );
$newsletter_title_pink = bdc_get_acf_text( 'newsletter_title_pink', 'Be a Bright Dreamer.', $newsletter_page_id );
$newsletter_intro      = bdc_get_acf_text(
	'newsletter_intro',
	'Join our community and receive inspiring updates, stories, and ways to make a difference in children\'s lives.',
	$newsletter_page_id
);
$newsletter_sparkle_url = bdc_get_acf_image_url(
	'newsletter_sparkle',
	bdc_theme_asset_url( $newsletter_asset_base . '5e8df45b-9bb3-42bf-9114-5557f3e13e6e-removebg-preview.png' ),
	$newsletter_page_id
);

$newsletter_benefits_title = bdc_get_acf_text(
	'newsletter_benefits_title',
	'When you subscribe, you\'ll receive:',
	$newsletter_page_id
);
$newsletter_benefits = bdc_get_newsletter_resolved_benefits( $newsletter_page_id );

$newsletter_photo_url = bdc_get_acf_image_url(
	'newsletter_photo',
	bdc_theme_asset_url( $newsletter_asset_base . '58c6acb1-3b0a-4c9b-966f-0bac6c54ed91.png' ),
	$newsletter_page_id
);
$newsletter_photo_alt = bdc_get_acf_text(
	'newsletter_photo_alt',
	'Children coloring together at a table',
	$newsletter_page_id
);
$newsletter_privacy_icon_url = bdc_get_acf_image_url(
	'newsletter_privacy_icon',
	bdc_theme_asset_url( 'assets/images/Donation-form/0e4ea675-db2c-4e88-9443-f70ae8361d27-e1786258237229-258x300.png' ),
	$newsletter_page_id
);
$newsletter_privacy_text = bdc_get_acf_text(
	'newsletter_privacy_text',
	'We respect your privacy. We will never share your information. You can unsubscribe at any time.',
	$newsletter_page_id
);
$newsletter_privacy_deco_url = bdc_get_acf_image_url(
	'newsletter_privacy_deco',
	bdc_theme_asset_url( 'assets/images/Donation-form/d9d49a82-66ee-44a3-b040-279a56feb44d-removebg-preview.png' ),
	$newsletter_page_id
);
?>
    <main id="main-content">
      <section class="newsletter-signup section-padding" aria-label="<?php echo esc_attr( $newsletter_aria_label ); ?>">
        <div class="site-container">
          <div class="newsletter-layout">
            <div class="newsletter-info">
              <img
                class="newsletter-info__heart-deco"
                src="<?php echo esc_url( $newsletter_heart_deco_url ); ?>"
                alt=""
                width="36"
                height="36"
                decoding="async"
                aria-hidden="true"
              />

              <h1 class="newsletter-info__title">
                <span class="newsletter-info__title-line newsletter-info__title-line--navy"><?php echo esc_html( $newsletter_title_navy ); ?></span>
                <span class="newsletter-info__title-line newsletter-info__title-line--pink"><?php echo esc_html( $newsletter_title_pink ); ?></span>
              </h1>

              <p class="newsletter-info__intro">
                <?php echo esc_html( $newsletter_intro ); ?>
                <img
                  class="newsletter-info__sparkle"
                  src="<?php echo esc_url( $newsletter_sparkle_url ); ?>"
                  alt=""
                  width="28"
                  height="28"
                  decoding="async"
                  aria-hidden="true"
                />
              </p>

              <div class="newsletter-info__benefits">
                <h2 class="newsletter-info__benefits-title"><?php echo esc_html( $newsletter_benefits_title ); ?></h2>
                <ul class="newsletter-benefits-list">
                  <?php foreach ( $newsletter_benefits as $newsletter_benefit ) : ?>
                  <li>
                    <img class="newsletter-benefits-list__icon" src="<?php echo esc_url( $newsletter_benefit['icon'] ); ?>" alt="" width="36" height="36" loading="lazy" decoding="async" aria-hidden="true" />
                    <span><?php echo esc_html( $newsletter_benefit['text'] ); ?></span>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </div>

              <figure class="newsletter-info__photo">
                <div class="lazy-img-wrap">
                  <img
                    class="newsletter-info__photo-img lazy-img"
                    src="<?php echo esc_attr( $newsletter_lazy_placeholder ); ?>"
                    data-src="<?php echo esc_url( $newsletter_photo_url ); ?>"
                    alt="<?php echo esc_attr( $newsletter_photo_alt ); ?>"
                    width="640"
                    height="420"
                    decoding="async"
                  />
                </div>
              </figure>

              <aside class="newsletter-privacy-box">
                <img
                  class="newsletter-privacy-box__icon"
                  src="<?php echo esc_url( $newsletter_privacy_icon_url ); ?>"
                  alt=""
                  width="36"
                  height="36"
                  loading="lazy"
                  decoding="async"
                  aria-hidden="true"
                />
                <p class="newsletter-privacy-box__text">
                  <?php echo esc_html( $newsletter_privacy_text ); ?>
                </p>
                <img
                  class="newsletter-privacy-box__deco"
                  src="<?php echo esc_url( $newsletter_privacy_deco_url ); ?>"
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
