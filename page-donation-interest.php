<?php
/**
 * Donation Interest page template — converted from donation-interest.html.
 *
 * Template Name: Donation Interest
 *
 * @package Bright_Dreamers_Club
 */

get_header();

$donation_page_id = get_queried_object_id();
$donation_asset_base = 'assets/images/Donation-form/';
$donation_lazy_placeholder = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';

$donation_hero_aria_label = bdc_get_acf_text( 'donation_hero_aria_label', 'Donation Interest', $donation_page_id );
$donation_hero_title_pink = bdc_get_acf_text( 'donation_hero_title_pink', 'Support Their Dreams.', $donation_page_id );
$donation_hero_title_navy = bdc_get_acf_text( 'donation_hero_title_navy', ' Create a Brighter Tomorrow.', $donation_page_id );
$donation_hero_text       = bdc_get_acf_text(
	'donation_hero_text',
	'Your generosity helps children dream, learn, create, and grow into confident, kind, and capable individuals.',
	$donation_page_id
);
$donation_hero_note_text = bdc_get_acf_text(
	'donation_hero_note_text',
	'Thank you for being a part of their journey.',
	$donation_page_id
);
$donation_hero_note_icon_url = bdc_get_acf_image_url(
	'donation_hero_note_icon',
	bdc_theme_asset_url( $donation_asset_base . 'c22eace8-72e0-4c7c-ade2-217f93963a03-removebg-preview.png' ),
	$donation_page_id
);
$donation_hero_banner_url = bdc_get_acf_image_url(
	'donation_hero_banner',
	bdc_theme_asset_url( $donation_asset_base . '6e8303fc-5fad-48ca-8f95-71edb4eca60e.png' ),
	$donation_page_id
);
$donation_hero_banner_alt = bdc_get_acf_text(
	'donation_hero_banner_alt',
	'Children smiling and holding a handmade Thank You sign',
	$donation_page_id
);

$donation_impact_heading_icon_url = bdc_get_acf_image_url(
	'donation_impact_heading_icon',
	bdc_theme_asset_url( $donation_asset_base . '7ace0363-5c5f-4db2-b270-1c09da91a31d.png' ),
	$donation_page_id
);
$donation_impact_heading = bdc_get_acf_text( 'donation_impact_heading', 'Your Impact', $donation_page_id );
$donation_impact_items   = bdc_get_donation_resolved_impact( $donation_page_id );

$donation_future_icon_url = bdc_get_acf_image_url(
	'donation_future_icon',
	bdc_theme_asset_url( $donation_asset_base . '5326df83-1c2d-42a8-9f30-7ce4460255b8-removebg-preview.png' ),
	$donation_page_id
);
$donation_future_title = bdc_get_acf_text( 'donation_future_title', 'Future Online Giving', $donation_page_id );
$donation_future_text  = bdc_get_acf_text(
	'donation_future_text',
	'We are working on secure online giving options. Thank you for your patience as we build this thoughtfully.',
	$donation_page_id
);
$donation_future_trail_url = bdc_get_acf_image_url(
	'donation_future_trail',
	bdc_theme_asset_url( $donation_asset_base . 'd9d49a82-66ee-44a3-b040-279a56feb44d-removebg-preview.png' ),
	$donation_page_id
);

$donation_trusted_icon_url = bdc_get_acf_image_url(
	'donation_trusted_icon',
	bdc_theme_asset_url( $donation_asset_base . '0e4ea675-db2c-4e88-9443-f70ae8361d27-e1786258237229-258x300.png' ),
	$donation_page_id
);
$donation_trusted_title = bdc_get_acf_text( 'donation_trusted_title', 'Safe & Trusted', $donation_page_id );
$donation_trusted_text  = bdc_get_acf_text(
	'donation_trusted_text',
	'We are committed to responsible stewardship and transparency in how every gift is used.',
	$donation_page_id
);
$donation_trusted_link = bdc_get_acf_link(
	'donation_trusted_link',
	array(
		'title'  => 'Learn more about our commitment to transparency.',
		'url'    => bdc_page_url( 'about.html' ),
		'target' => '',
	),
	$donation_page_id
);

$donation_questions_icon_url = bdc_get_acf_image_url(
	'donation_questions_icon',
	bdc_theme_asset_url( $donation_asset_base . '0b9ad99f-6db0-4956-a72d-a77704f18a0f-removebg-preview.png' ),
	$donation_page_id
);
$donation_questions_title = bdc_get_acf_text( 'donation_questions_title', 'Questions?', $donation_page_id );
$donation_questions_text  = bdc_get_acf_text(
	'donation_questions_text',
	'We\'re happy to help! Reach out anytime with questions about giving.',
	$donation_page_id
);
$donation_questions_link = bdc_get_acf_link(
	'donation_questions_link',
	array(
		'title'  => 'Go to Contact Us',
		'url'    => bdc_page_url( 'contact.html' ),
		'target' => '',
	),
	$donation_page_id
);

$donation_footer_aria_label = bdc_get_acf_text( 'donation_footer_aria_label', 'Thank you', $donation_page_id );
$donation_footer_text       = bdc_get_acf_text(
	'donation_footer_text',
	'Thank you! Your kindness helps us create brighter futures for children.',
	$donation_page_id
);
$donation_footer_deco_url = bdc_get_acf_image_url(
	'donation_footer_deco',
	bdc_theme_asset_url( $donation_asset_base . 'bbc4d215-f3b4-408a-871d-6c0a3b87d527-removebg-preview.png' ),
	$donation_page_id
);
?>
    <main id="main-content">
      <?php
      get_template_part(
        'template-parts/page-hero',
        null,
        array(
          'section_class'   => 'apply-hero donation-hero',
          'aria_label'      => $donation_hero_aria_label,
          'headline_html'   => bdc_hero_lines_html(
            array(
              array( 'text' => $donation_hero_title_pink, 'class' => 'apply-hero__title-line apply-hero__title-line--pink' ),
              array( 'text' => $donation_hero_title_navy, 'class' => 'apply-hero__title-line apply-hero__title-line--navy' ),
            )
          ),
          'supporting_copy' => $donation_hero_text,
          'hero_image'      => $donation_hero_banner_url,
          'hero_image_alt'  => $donation_hero_banner_alt,
          'media_class'     => 'about-hero__media',
          'image_class'     => 'about-hero__banner apply-hero__banner',
        )
      );
      ?>

      <section class="apply-form section-padding" aria-label="Donation interest form">
        <div class="site-container apply-form__inner">
          <div class="apply-form__main">
            <form class="apply-form__form donation-form" id="donation-interest-form" action="#" method="post" data-form-id="donation_interest">
              <?php bdc_render_form_security_fields( 'donation_interest' ); ?>
              <div class="donation-form-card">
                <header class="donation-form-card__head">
                  <img
                    class="donation-form-card__head-icon"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Donation-form/698221a2-c8a9-4b9a-9195-e506b9e2d6f1-removebg-preview.png' ); ?>"
                    alt=""
                    width="40"
                    height="40"
                    decoding="async"
                    aria-hidden="true"
                  />
                  <div class="donation-form-card__head-text">
                    <h2 class="donation-form-card__title">Donation Interest Form</h2>
                    <p class="donation-form-card__desc">
                      Please complete the form below and we will follow up with information about
                      making a donation by check.
                    </p>
                  </div>
                </header>

                <div class="donation-form-card__body">
                  <label class="contact-field">
                    <span class="apply-field__label">Full Name *</span>
                    <span class="contact-field__box"><input class="contact-field__input" type="text" name="full_name" autocomplete="name" placeholder="Enter your full name" required /></span>
                  </label>

                  <label class="contact-field">
                    <span class="apply-field__label">Email Address *</span>
                    <span class="contact-field__box"><input class="contact-field__input" type="email" name="email" autocomplete="email" placeholder="Enter your email address" required /></span>
                  </label>

                  <label class="contact-field">
                    <span class="apply-field__label">Organization (Optional)</span>
                    <span class="contact-field__box"><input class="contact-field__input" type="text" name="organization" placeholder="Enter organization name if applicable" /></span>
                  </label>

                  <fieldset class="donation-support-fieldset" aria-label="I would like to support">
                    <legend class="apply-field__label">I would like to support: *</legend>
                    <div class="donation-support-grid">
                      <label class="donation-support-card">
                        <input type="checkbox" name="support[]" value="general" />
                        <span class="donation-support-card__inner">
                          <img class="donation-support-card__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Donation-form/698221a2-c8a9-4b9a-9195-e506b9e2d6f1-removebg-preview.png' ); ?>" alt="" width="40" height="40" decoding="async" aria-hidden="true" />
                          <span class="donation-support-card__copy">
                            <strong>General Support</strong>
                            <span>Where it&rsquo;s needed most</span>
                          </span>
                        </span>
                      </label>
                      <label class="donation-support-card">
                        <input type="checkbox" name="support[]" value="materials" />
                        <span class="donation-support-card__inner">
                          <img class="donation-support-card__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Donation-form/45a75fc7-d3bf-46ab-9553-bf8734632a6a-removebg-preview.png' ); ?>" alt="" width="40" height="40" decoding="async" aria-hidden="true" />
                          <span class="donation-support-card__copy">
                            <strong>Materials &amp; Supplies</strong>
                            <span>Resources for learning and creativity</span>
                          </span>
                        </span>
                      </label>
                      <label class="donation-support-card">
                        <input type="checkbox" name="support[]" value="child-led" />
                        <span class="donation-support-card__inner">
                          <img class="donation-support-card__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Donation-form/f7e48e1c-435e-4792-a9e1-aea97740b93a-removebg-preview.png' ); ?>" alt="" width="40" height="40" decoding="async" aria-hidden="true" />
                          <span class="donation-support-card__copy">
                            <strong>Child-Led Projects</strong>
                            <span>Empowering ideas created by kids</span>
                          </span>
                        </span>
                      </label>
                      <label class="donation-support-card">
                        <input type="checkbox" name="support[]" value="community" />
                        <span class="donation-support-card__inner">
                          <img class="donation-support-card__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Donation-form/f2f61efe-b1bf-451e-b3a4-5ae7dcc71f79-removebg-preview.png' ); ?>" alt="" width="40" height="40" decoding="async" aria-hidden="true" />
                          <span class="donation-support-card__copy">
                            <strong>Community Projects</strong>
                            <span>Strengthening families and neighborhoods</span>
                          </span>
                        </span>
                      </label>
                      <label class="donation-support-card">
                        <input type="checkbox" name="support[]" value="dream-market" />
                        <span class="donation-support-card__inner">
                          <img class="donation-support-card__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Donation-form/8c15c7a8-d946-4616-b946-5cfb5d9f2e04-removebg-preview.png' ); ?>" alt="" width="40" height="40" decoding="async" aria-hidden="true" />
                          <span class="donation-support-card__copy">
                            <strong>Dream Market</strong>
                            <span>Supporting our social enterprise</span>
                          </span>
                        </span>
                      </label>
                      <label class="donation-support-card">
                        <input type="checkbox" name="support[]" value="other" />
                        <span class="donation-support-card__inner">
                          <img class="donation-support-card__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Donation-form/e4674d30-8683-4032-98aa-a98a502736c7-removebg-preview.png' ); ?>" alt="" width="40" height="40" decoding="async" aria-hidden="true" />
                          <span class="donation-support-card__copy">
                            <strong>Other</strong>
                            <span>Support a specific area of need</span>
                          </span>
                        </span>
                      </label>
                    </div>
                  </fieldset>

                  <label class="contact-field">
                    <span class="apply-field__label">Estimated Donation Amount (Optional)</span>
                    <span class="contact-field__box donation-amount-field">
                      <span class="donation-amount-field__prefix" aria-hidden="true">$</span>
                      <input class="contact-field__input donation-amount-field__input" type="text" name="amount" inputmode="decimal" placeholder="0.00" />
                      <span class="donation-amount-field__suffix" aria-hidden="true">USD</span>
                    </span>
                  </label>

                  <label class="contact-field">
                    <span class="apply-field__label">Message / Notes (Optional)</span>
                    <span class="contact-field__box contact-field__box--area"><textarea class="contact-field__input contact-field__textarea" name="message" rows="4" placeholder="Share any notes or questions you&rsquo;d like us to know."></textarea></span>
                  </label>

                  <div class="donation-consent-box">
                    <label class="apply-check apply-check--block">
                      <input type="checkbox" name="check_instructions" required />
                      <span>I would like instructions for making a donation by check. We will contact you with the necessary information.</span>
                    </label>
                  </div>

                  <button class="btn btn--solid btn--lg btn-hover donation-submit-btn" type="submit">
                    <img
                      class="donation-submit-btn__icon"
                      src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Donation-form/5e2df2fd-dfc3-405d-91a0-e2bfc3b8eb32-removebg-preview.png' ); ?>"
                      alt=""
                      width="22"
                      height="22"
                      decoding="async"
                      aria-hidden="true"
                    />
                    Submit Donation Interest
                  </button>

                  <p class="donation-security-note">
                    <img
                      class="donation-security-note__icon"
                      src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Donation-form/3bdb88e0-9333-478a-824a-9f44796c87be-removebg-preview.png' ); ?>"
                      alt=""
                      width="18"
                      height="18"
                      decoding="async"
                      aria-hidden="true"
                    />
                    Your information is safe with us and will never be shared.
                  </p>
                </div>
              </div>
            </form>
          </div>

          <aside class="apply-form__sidebar" aria-label="Donation information">
            <article class="apply-sidebar-card donation-sidebar-card--impact">
              <h2 class="apply-sidebar-card__title donation-sidebar-card__title--icon">
                <img class="donation-sidebar-title-icon" src="<?php echo esc_url( $donation_impact_heading_icon_url ); ?>" alt="" width="32" height="32" loading="lazy" decoding="async" aria-hidden="true" />
                <?php echo esc_html( $donation_impact_heading ); ?>
              </h2>
              <ul class="apply-sidebar-list donation-impact-list">
                <?php foreach ( $donation_impact_items as $donation_impact_item ) : ?>
                <li>
                  <img class="apply-sidebar-list__icon" src="<?php echo esc_url( $donation_impact_item['icon'] ); ?>" alt="" width="28" height="28" loading="lazy" decoding="async" aria-hidden="true" />
                  <span><strong><?php echo esc_html( $donation_impact_item['title'] ); ?></strong> — <?php echo esc_html( $donation_impact_item['text'] ); ?></span>
                </li>
                <?php endforeach; ?>
              </ul>
            </article>

            <article class="apply-sidebar-card donation-sidebar-card--future">
              <h2 class="apply-sidebar-card__title donation-sidebar-card__title--icon">
                <img class="donation-sidebar-title-icon" src="<?php echo esc_url( $donation_future_icon_url ); ?>" alt="" width="32" height="32" loading="lazy" decoding="async" aria-hidden="true" />
                <?php echo esc_html( $donation_future_title ); ?>
              </h2>
              <p class="apply-sidebar-card__text">
                <?php echo esc_html( $donation_future_text ); ?>
              </p>
              <img
                class="donation-sidebar-card__trail"
                src="<?php echo esc_url( $donation_future_trail_url ); ?>"
                alt=""
                width="220"
                height="48"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
            </article>

            <article class="apply-sidebar-card donation-sidebar-card--trusted">
              <h2 class="apply-sidebar-card__title donation-sidebar-card__title--icon">
                <img class="donation-sidebar-title-icon" src="<?php echo esc_url( $donation_trusted_icon_url ); ?>" alt="" width="32" height="32" loading="lazy" decoding="async" aria-hidden="true" />
                <?php echo esc_html( $donation_trusted_title ); ?>
              </h2>
              <p class="apply-sidebar-card__text">
                <?php echo esc_html( $donation_trusted_text ); ?>
              </p>
              <a class="donation-sidebar-link" href="<?php echo esc_url( $donation_trusted_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $donation_trusted_link ); ?>><?php echo esc_html( $donation_trusted_link['title'] ); ?></a>
            </article>

            <article class="apply-sidebar-card donation-sidebar-card--questions">
              <h2 class="apply-sidebar-card__title donation-sidebar-card__title--icon">
                <img class="donation-sidebar-title-icon" src="<?php echo esc_url( $donation_questions_icon_url ); ?>" alt="" width="32" height="32" loading="lazy" decoding="async" aria-hidden="true" />
                <?php echo esc_html( $donation_questions_title ); ?>
              </h2>
              <p class="apply-sidebar-card__text"><?php echo esc_html( $donation_questions_text ); ?></p>
              <a class="btn btn--outline btn-hover apply-sidebar-card__btn donation-sidebar-questions-btn" href="<?php echo esc_url( $donation_questions_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $donation_questions_link ); ?>>
                <?php echo esc_html( $donation_questions_link['title'] ); ?>
                <svg class="btn__icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6" /></svg>
              </a>
            </article>
          </aside>
        </div>
      </section>

      <section class="donation-footer-note section-padding scroll-rise" aria-label="<?php echo esc_attr( $donation_footer_aria_label ); ?>">
        <div class="site-container donation-footer-note__inner">
          <p class="donation-footer-note__text">
            <?php echo esc_html( $donation_footer_text ); ?>
          </p>
          <div class="donation-footer-note__trail" aria-hidden="true">
            <img
              class="donation-footer-note__deco"
              src="<?php echo esc_url( $donation_footer_deco_url ); ?>"
              alt=""
              width="640"
              height="120"
              loading="lazy"
              decoding="async"
            />
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
