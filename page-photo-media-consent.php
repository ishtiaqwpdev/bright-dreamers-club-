<?php
/**
 * Photo Media Consent page template — converted from photo-media-consent.html.
 *
 * Template Name: Photo Media Consent
 *
 * @package Bright_Dreamers_Club
 */

get_header();

$photo_consent_page_id          = get_queried_object_id();
$photo_consent_asset_base       = 'assets/images/Photo & Media conoent form/';
$photo_consent_lazy_placeholder = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';

$photo_consent_hero_aria_label = bdc_get_acf_text(
	'photo_consent_hero_aria_label',
	'Photo and Media Consent Form',
	$photo_consent_page_id
);
$photo_consent_hero_breadcrumb_home_text = bdc_get_acf_text(
	'photo_consent_hero_breadcrumb_home_text',
	'Home',
	$photo_consent_page_id
);
$photo_consent_hero_breadcrumb_home_link = bdc_get_acf_link(
	'photo_consent_hero_breadcrumb_home_link',
	array(
		'title'  => 'Home',
		'url'    => bdc_page_url( 'index.html' ),
		'target' => '',
	),
	$photo_consent_page_id
);
$photo_consent_hero_breadcrumb_resources_text = bdc_get_acf_text(
	'photo_consent_hero_breadcrumb_resources_text',
	'Resources',
	$photo_consent_page_id
);
$photo_consent_hero_breadcrumb_resources_link = bdc_get_acf_link(
	'photo_consent_hero_breadcrumb_resources_link',
	array(
		'title'  => 'Resources',
		'url'    => bdc_page_url( 'faq.html' ),
		'target' => '',
	),
	$photo_consent_page_id
);
$photo_consent_hero_breadcrumb_policy_text = bdc_get_acf_text(
	'photo_consent_hero_breadcrumb_policy_text',
	'Photo & Media Policy',
	$photo_consent_page_id
);
$photo_consent_hero_breadcrumb_policy_link = bdc_get_acf_link(
	'photo_consent_hero_breadcrumb_policy_link',
	array(
		'title'  => 'Photo & Media Policy',
		'url'    => bdc_page_url( 'photo-media-policy.html' ),
		'target' => '',
	),
	$photo_consent_page_id
);
$photo_consent_hero_breadcrumb_current_text = bdc_get_acf_text(
	'photo_consent_hero_breadcrumb_current_text',
	'Consent Form',
	$photo_consent_page_id
);
$photo_consent_hero_title = bdc_get_acf_text(
	'photo_consent_hero_title',
	'Photo & Media Consent Form',
	$photo_consent_page_id
);
$photo_consent_hero_heart_url = bdc_get_acf_image_url(
	'photo_consent_hero_heart',
	bdc_theme_asset_url( $photo_consent_asset_base . '6b7c85b9-ee3e-48ed-9f05-2403fb816741-removebg-preview.png' ),
	$photo_consent_page_id
);
$photo_consent_hero_text = bdc_get_acf_text(
	'photo_consent_hero_text',
	'Your consent helps us capture and share the magic of children\'s ideas and experiences in a safe, respectful, and responsible way.',
	$photo_consent_page_id
);
$photo_consent_hero_banner_url = bdc_get_acf_image_url(
	'photo_consent_hero_banner',
	bdc_theme_asset_url( 'assets/images/Photo & Media Policy/77ada95f-2de9-4cb6-ab7a-01ffed9e2327.png' ),
	$photo_consent_page_id
);
$photo_consent_hero_banner_alt = bdc_get_acf_text(
	'photo_consent_hero_banner_alt',
	'A young girl holding a camera',
	$photo_consent_page_id
);

$photo_consent_main_aria_label = bdc_get_acf_text(
	'photo_consent_main_aria_label',
	'Photo and media consent form',
	$photo_consent_page_id
);
$photo_consent_sidebar_aria_label = bdc_get_acf_text(
	'photo_consent_sidebar_aria_label',
	'On this page',
	$photo_consent_page_id
);
$photo_consent_sidebar_title = bdc_get_acf_text(
	'photo_consent_sidebar_title',
	'On This Page',
	$photo_consent_page_id
);
$photo_consent_nav_aria_label = bdc_get_acf_text(
	'photo_consent_nav_aria_label',
	'Form sections',
	$photo_consent_page_id
);
$photo_consent_nav_items = bdc_get_photo_consent_resolved_nav( $photo_consent_page_id );

$photo_consent_trust_icon_url = bdc_get_acf_image_url(
	'photo_consent_trust_icon',
	bdc_theme_asset_url( $photo_consent_asset_base . '0cd6e16c-e819-42e9-a75a-86895f2bc843-removebg-preview.png' ),
	$photo_consent_page_id
);
$photo_consent_trust_heading = bdc_get_acf_text(
	'photo_consent_trust_heading',
	'Your Trust Matters',
	$photo_consent_page_id
);
$photo_consent_trust_text = bdc_get_acf_text(
	'photo_consent_trust_text',
	'We respect your decisions and will always protect your child\'s privacy and dignity.',
	$photo_consent_page_id
);
?>
    <main id="main-content">
      <section class="page-hero media-policy-hero" aria-label="<?php echo esc_attr( $photo_consent_hero_aria_label ); ?>">
        <div class="site-container media-policy-hero__inner page-hero__inner">
          <div class="page-hero__content media-policy-hero__content">
            <nav class="creative-makers-breadcrumbs media-policy-breadcrumbs" aria-label="Breadcrumb">
              <ol class="creative-makers-breadcrumbs__list">
                <li><a href="<?php echo esc_url( $photo_consent_hero_breadcrumb_home_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $photo_consent_hero_breadcrumb_home_link ); ?>><?php echo esc_html( $photo_consent_hero_breadcrumb_home_text ); ?></a></li>
                <li><a href="<?php echo esc_url( $photo_consent_hero_breadcrumb_resources_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $photo_consent_hero_breadcrumb_resources_link ); ?>><?php echo esc_html( $photo_consent_hero_breadcrumb_resources_text ); ?></a></li>
                <li><a href="<?php echo esc_url( $photo_consent_hero_breadcrumb_policy_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $photo_consent_hero_breadcrumb_policy_link ); ?>><?php echo esc_html( $photo_consent_hero_breadcrumb_policy_text ); ?></a></li>
                <li aria-current="page"><?php echo esc_html( $photo_consent_hero_breadcrumb_current_text ); ?></li>
              </ol>
            </nav>

            <h1 class="media-policy-hero__title media-consent-hero__title">
              <span class="media-consent-hero__title-text"><?php echo esc_html( $photo_consent_hero_title ); ?></span>
              <img
                class="media-policy-hero__heart media-consent-hero__heart"
                src="<?php echo esc_url( $photo_consent_hero_heart_url ); ?>"
                alt=""
                width="28"
                height="28"
                decoding="async"
                aria-hidden="true"
              />
            </h1>

            <p class="media-policy-hero__text">
              <?php echo esc_html( $photo_consent_hero_text ); ?>
            </p>
          </div>

          <div class="about-hero__media media-policy-hero__media">
            <div class="lazy-img-wrap">
              <img
                class="about-hero__banner media-policy-hero__banner lazy-img"
                src="<?php echo esc_attr( $photo_consent_lazy_placeholder ); ?>"
                data-src="<?php echo esc_url( $photo_consent_hero_banner_url ); ?>"
                alt="<?php echo esc_attr( $photo_consent_hero_banner_alt ); ?>"
                width="1200"
                height="900"
                decoding="async"
              />
            </div>
          </div>
        </div>
      </section>

      <section class="media-policy-main section-padding" aria-label="<?php echo esc_attr( $photo_consent_main_aria_label ); ?>">
        <div class="site-container media-policy-main__inner">
          <aside class="media-policy-sidebar" aria-label="<?php echo esc_attr( $photo_consent_sidebar_aria_label ); ?>">
            <div class="media-policy-sidebar__sticky">
              <h2 class="media-policy-sidebar__title"><?php echo esc_html( $photo_consent_sidebar_title ); ?></h2>
              <nav class="media-policy-nav" aria-label="<?php echo esc_attr( $photo_consent_nav_aria_label ); ?>">
                <ul class="media-policy-nav__list">
                  <?php foreach ( $photo_consent_nav_items as $photo_consent_nav_index => $photo_consent_nav_item ) : ?>
                  <li>
                    <a class="media-policy-nav__link<?php echo 0 === (int) $photo_consent_nav_index ? ' is-active' : ''; ?>" href="#<?php echo esc_attr( $photo_consent_nav_item['anchor_id'] ); ?>">
                      <img class="media-policy-nav__icon" src="<?php echo esc_url( $photo_consent_nav_item['icon'] ); ?>" alt="" width="28" height="28" decoding="async" aria-hidden="true" />
                      <span><?php echo esc_html( $photo_consent_nav_item['label'] ); ?></span>
                    </a>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </nav>

              <article class="media-policy-sidebar-card">
                <img
                  class="media-policy-sidebar-card__icon"
                  src="<?php echo esc_url( $photo_consent_trust_icon_url ); ?>"
                  alt=""
                  width="72"
                  height="72"
                  loading="lazy"
                  decoding="async"
                  aria-hidden="true"
                />
                <p class="media-policy-sidebar-card__text">
                  <strong><?php echo esc_html( $photo_consent_trust_heading ); ?></strong><br />
                  <?php echo esc_html( $photo_consent_trust_text ); ?>
                </p>
              </article>
            </div>
          </aside>

          <div class="media-policy-content">
            <form class="media-consent-form" id="media-consent-form" action="#" method="post" data-form-id="photo_media_consent">
              <?php bdc_render_form_security_fields( 'photo_media_consent' ); ?>
              <article class="media-policy-section" id="consent-child" data-media-section>
                <div class="media-policy-section__head">
                  <img class="media-policy-section__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media conoent form/3cf2faca-23f5-4f28-bad2-0b9cae7a26d8-removebg-preview.png' ); ?>" alt="" width="40" height="40" loading="lazy" decoding="async" aria-hidden="true" />
                  <div class="media-consent-section__intro">
                    <h2 class="media-policy-section__title">1. Child Information</h2>
                    <p class="media-consent-section__desc">
                      Please enter the child&rsquo;s details and the parent or guardian information
                      for this consent form.
                    </p>
                  </div>
                </div>
                <div class="media-policy-section__body media-consent-section__body--form media-consent-section__body--flush">
                  <div class="media-consent-fields media-consent-fields--child">
                    <label class="contact-field media-consent-field--name">
                      <span class="apply-field__label">Child&rsquo;s Full Name *</span>
                      <span class="contact-field__box"><input class="contact-field__input" type="text" name="child_name" placeholder="Enter child's full name" autocomplete="name" required /></span>
                    </label>
                    <label class="contact-field media-consent-field--dob">
                      <span class="apply-field__label">Date of Birth *</span>
                      <span class="contact-field__box media-consent-field-box">
                        <input class="contact-field__input media-consent-date-input" type="date" name="child_dob" required />
                        <button type="button" class="media-consent-field-box__btn" aria-label="Choose date of birth">
                          <img class="media-consent-field-box__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media conoent form/c7af00a7-eeec-4c78-81c2-807008ed93ef-removebg-preview.png' ); ?>" alt="" width="20" height="20" decoding="async" aria-hidden="true" />
                        </button>
                      </span>
                    </label>
                    <label class="contact-field media-consent-field--guardian">
                      <span class="apply-field__label">Parent / Guardian Full Name *</span>
                      <span class="contact-field__box"><input class="contact-field__input" type="text" name="guardian_name" placeholder="Enter your full name" autocomplete="name" required /></span>
                    </label>
                    <label class="contact-field media-consent-field--email">
                      <span class="apply-field__label">Email Address *</span>
                      <span class="contact-field__box"><input class="contact-field__input" type="email" name="email" placeholder="Enter your email address" autocomplete="email" required /></span>
                    </label>
                    <label class="contact-field media-consent-field--phone">
                      <span class="apply-field__label">Phone Number</span>
                      <span class="contact-field__box"><input class="contact-field__input" type="tel" name="phone" autocomplete="tel" placeholder="(123) 456-7890" /></span>
                    </label>
                  </div>
                </div>
              </article>

              <article class="media-policy-section" id="consent-options" data-media-section>
                <div class="media-policy-section__head">
                  <img class="media-policy-section__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media conoent form/b374bddc-61e4-4aac-8f34-415f539153f3-removebg-preview.png' ); ?>" alt="" width="40" height="40" loading="lazy" decoding="async" aria-hidden="true" />
                  <div class="media-consent-section__intro">
                    <h2 class="media-policy-section__title">2. Consent Options</h2>
                    <p class="media-consent-section__desc">
                      Select the consent level that best reflects your family&rsquo;s wishes for
                      photos and videos.
                    </p>
                  </div>
                </div>
                <div class="media-policy-section__body media-consent-section__body--flush">
                  <fieldset class="media-consent-options">
                    <legend class="visually-hidden">Select your consent level</legend>
                    <div class="media-consent-options__grid">
                      <label class="media-consent-option media-consent-option--full">
                        <input type="radio" name="consent_level" value="full" checked required />
                        <span class="media-consent-option__inner">
                          <img class="media-consent-option__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media conoent form/7ac788f3-2674-486b-a5c5-21fe489bb929-removebg-preview.png' ); ?>" alt="" width="32" height="32" decoding="async" aria-hidden="true" />
                          <span class="media-consent-option__copy">
                            <strong>Full Consent</strong>
                            <span>Photos and videos may be used for all approved Bright Dreamers purposes.</span>
                          </span>
                        </span>
                      </label>
                      <label class="media-consent-option media-consent-option--limited">
                        <input type="radio" name="consent_level" value="limited" />
                        <span class="media-consent-option__inner">
                          <img class="media-consent-option__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media conoent form/c7af00a7-eeec-4c78-81c2-807008ed93ef-removebg-preview.png' ); ?>" alt="" width="32" height="32" decoding="async" aria-hidden="true" />
                          <span class="media-consent-option__copy">
                            <strong>Limited Consent</strong>
                            <span>Use only for specific purposes selected below.</span>
                          </span>
                        </span>
                      </label>
                      <label class="media-consent-option media-consent-option--none">
                        <input type="radio" name="consent_level" value="none" />
                        <span class="media-consent-option__inner">
                          <img class="media-consent-option__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media Policy/a0259083-2c50-4600-a1b2-9b3f656305ee-removebg-preview.png' ); ?>" alt="" width="32" height="32" decoding="async" aria-hidden="true" />
                          <span class="media-consent-option__copy">
                            <strong>No Consent</strong>
                            <span>Do not photograph or use images of my child.</span>
                          </span>
                        </span>
                      </label>
                    </div>
                  </fieldset>
                </div>
              </article>

              <article class="media-policy-section" id="consent-usage" data-media-section>
                <div class="media-policy-section__head">
                  <img class="media-policy-section__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media conoent form/23b70f0e-fa13-46ac-b61d-e237fe9be65d__1_-removebg-preview.png' ); ?>" alt="" width="40" height="40" loading="lazy" decoding="async" aria-hidden="true" />
                  <div class="media-consent-section__intro">
                    <h2 class="media-policy-section__title">3. Usage &amp; Sharing</h2>
                    <p class="media-consent-section__desc">
                      I understand that if I give consent, photos and videos may be used for:
                    </p>
                  </div>
                </div>
                <div class="media-policy-section__body media-consent-section__body--flush">
                  <div class="media-consent-usage-grid">
                    <label class="media-consent-usage-card">
                      <input type="checkbox" name="usage[]" value="activities" />
                      <span class="media-consent-usage-card__inner">
                        <img class="media-consent-usage-card__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media conoent form/81137ac5-a0df-45ca-864b-2c4f468c4310-removebg-preview.png' ); ?>" alt="" width="28" height="28" decoding="async" aria-hidden="true" />
                        <span>Club activities &amp; projects</span>
                      </span>
                    </label>
                    <label class="media-consent-usage-card">
                      <input type="checkbox" name="usage[]" value="website" />
                      <span class="media-consent-usage-card__inner">
                        <img class="media-consent-usage-card__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media conoent form/81e6b8ad-49f2-4714-a8e8-0133d3824dcd-removebg-preview.png' ); ?>" alt="" width="28" height="28" decoding="async" aria-hidden="true" />
                        <span>Website &amp; newsletters</span>
                      </span>
                    </label>
                    <label class="media-consent-usage-card">
                      <input type="checkbox" name="usage[]" value="social" />
                      <span class="media-consent-usage-card__inner">
                        <img class="media-consent-usage-card__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media conoent form/da193189-7139-45a4-9015-a1b9353e26f7-removebg-preview.png' ); ?>" alt="" width="28" height="28" decoding="async" aria-hidden="true" />
                        <span>Social media channels</span>
                      </span>
                    </label>
                    <label class="media-consent-usage-card">
                      <input type="checkbox" name="usage[]" value="promotional" />
                      <span class="media-consent-usage-card__inner">
                        <img class="media-consent-usage-card__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media conoent form/2e22ad3a-2a87-43ab-9927-2d28839cf5b0-removebg-preview.png' ); ?>" alt="" width="28" height="28" decoding="async" aria-hidden="true" />
                        <span>Promotional materials</span>
                      </span>
                    </label>
                    <label class="media-consent-usage-card">
                      <input type="checkbox" name="usage[]" value="presentations" />
                      <span class="media-consent-usage-card__inner">
                        <img class="media-consent-usage-card__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media conoent form/cfe90c1c-688d-4f93-adcf-9d78ede46be7-removebg-preview.png' ); ?>" alt="" width="28" height="28" decoding="async" aria-hidden="true" />
                        <span>Presentations &amp; reports</span>
                      </span>
                    </label>
                    <label class="media-consent-usage-card">
                      <input type="checkbox" name="usage[]" value="community" />
                      <span class="media-consent-usage-card__inner">
                        <img class="media-consent-usage-card__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media conoent form/9ffbc718-2966-4421-ba7c-e643a5671d5d-removebg-preview (2).png' ); ?>" alt="" width="28" height="28" decoding="async" aria-hidden="true" />
                        <span>Community engagement</span>
                      </span>
                    </label>
                  </div>
                  <p class="media-consent-usage-note">
                    We will never share a child&rsquo;s full name, personal details, or exact location.
                  </p>
                </div>
              </article>

              <article class="media-policy-section" id="consent-rights" data-media-section>
                <div class="media-policy-section__head">
                  <img class="media-policy-section__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media conoent form/8dfaeb43-a271-4015-b1d9-07af7165566b-removebg-preview.png' ); ?>" alt="" width="40" height="40" loading="lazy" decoding="async" aria-hidden="true" />
                  <div class="media-consent-section__intro">
                    <h2 class="media-policy-section__title">4. Your Rights</h2>
                    <p class="media-consent-section__desc">
                      As a parent or guardian, you always remain in control of how your child&rsquo;s
                      image is used.
                    </p>
                  </div>
                </div>
                <div class="media-policy-section__body media-consent-section__body--flush">
                  <ul class="media-consent-rights-grid">
                    <li>
                      <img class="media-consent-checklist__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media conoent form/7ac788f3-2674-486b-a5c5-21fe489bb929-removebg-preview.png' ); ?>" alt="" width="18" height="18" loading="lazy" decoding="async" aria-hidden="true" />
                      <span>Approve or decline photo and video use at any time</span>
                    </li>
                    <li>
                      <img class="media-consent-checklist__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media conoent form/7ac788f3-2674-486b-a5c5-21fe489bb929-removebg-preview.png' ); ?>" alt="" width="18" height="18" loading="lazy" decoding="async" aria-hidden="true" />
                      <span>Request removal of existing images</span>
                    </li>
                    <li>
                      <img class="media-consent-checklist__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media conoent form/7ac788f3-2674-486b-a5c5-21fe489bb929-removebg-preview.png' ); ?>" alt="" width="18" height="18" loading="lazy" decoding="async" aria-hidden="true" />
                      <span>Change or withdraw consent later</span>
                    </li>
                    <li>
                      <img class="media-consent-checklist__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media conoent form/7ac788f3-2674-486b-a5c5-21fe489bb929-removebg-preview.png' ); ?>" alt="" width="18" height="18" loading="lazy" decoding="async" aria-hidden="true" />
                      <span>Ask questions about our media practices</span>
                    </li>
                    <li>
                      <img class="media-consent-checklist__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media conoent form/7ac788f3-2674-486b-a5c5-21fe489bb929-removebg-preview.png' ); ?>" alt="" width="18" height="18" loading="lazy" decoding="async" aria-hidden="true" />
                      <span>Be informed about how images are shared</span>
                    </li>
                    <li>
                      <img class="media-consent-checklist__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media conoent form/7ac788f3-2674-486b-a5c5-21fe489bb929-removebg-preview.png' ); ?>" alt="" width="18" height="18" loading="lazy" decoding="async" aria-hidden="true" />
                      <span>Receive respectful, prompt responses from our team</span>
                    </li>
                  </ul>
                </div>
              </article>

              <div class="media-consent-split">
                <article class="media-policy-section" id="consent-terms" data-media-section>
                  <div class="media-policy-section__head">
                    <img class="media-policy-section__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media conoent form/81e6b8ad-49f2-4714-a8e8-0133d3824dcd-removebg-preview.png' ); ?>" alt="" width="40" height="40" loading="lazy" decoding="async" aria-hidden="true" />
                    <div class="media-consent-section__intro">
                      <h2 class="media-policy-section__title">5. Terms</h2>
                      <p class="media-consent-section__desc">
                        Please review and confirm the following before submitting this form.
                      </p>
                    </div>
                  </div>
                  <div class="media-policy-section__body media-consent-section__body--flush">
                    <ul class="media-consent-terms-list">
                      <li>
                        <img class="media-consent-checklist__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media conoent form/7ac788f3-2674-486b-a5c5-21fe489bb929-removebg-preview.png' ); ?>" alt="" width="18" height="18" decoding="async" aria-hidden="true" />
                        <span>I understand how photos and videos may be used.</span>
                      </li>
                      <li>
                        <img class="media-consent-checklist__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media conoent form/7ac788f3-2674-486b-a5c5-21fe489bb929-removebg-preview.png' ); ?>" alt="" width="18" height="18" decoding="async" aria-hidden="true" />
                        <span>I may update or withdraw consent at any time.</span>
                      </li>
                      <li>
                        <img class="media-consent-checklist__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media conoent form/7ac788f3-2674-486b-a5c5-21fe489bb929-removebg-preview.png' ); ?>" alt="" width="18" height="18" decoding="async" aria-hidden="true" />
                        <span>Bright Dreamers will protect my child&rsquo;s privacy.</span>
                      </li>
                      <li>
                        <img class="media-consent-checklist__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media conoent form/7ac788f3-2674-486b-a5c5-21fe489bb929-removebg-preview.png' ); ?>" alt="" width="18" height="18" decoding="async" aria-hidden="true" />
                        <span>Images will not be sold to third parties.</span>
                      </li>
                    </ul>
                    <label class="apply-check apply-check--block media-consent-terms-check">
                      <input type="checkbox" name="terms_agree" required />
                      <span>I agree to the terms above and have read the Photo &amp; Media Policy.</span>
                    </label>
                  </div>
                </article>

                <article class="media-policy-section" id="consent-signature" data-media-section>
                  <div class="media-policy-section__head">
                    <img class="media-policy-section__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media conoent form/504972f1-7c43-42ab-9310-b8d0690162a1-removebg-preview.png' ); ?>" alt="" width="40" height="40" loading="lazy" decoding="async" aria-hidden="true" />
                    <div class="media-consent-section__intro">
                      <h2 class="media-policy-section__title">6. Signature</h2>
                      <p class="media-consent-section__desc">
                        Please type full name below as digital signature.
                      </p>
                    </div>
                  </div>
                  <div class="media-policy-section__body media-consent-section__body--form media-consent-section__body--flush">
                    <div class="media-consent-fields media-consent-fields--signature">
                      <label class="contact-field">
                        <span class="apply-field__label">Full Name (Digital Signature) *</span>
                        <span class="contact-field__box"><input class="contact-field__input" type="text" name="signature_name" placeholder="Enter your full name" autocomplete="name" required /></span>
                      </label>
                      <label class="contact-field">
                        <span class="apply-field__label">Date *</span>
                        <span class="contact-field__box media-consent-field-box">
                          <input class="contact-field__input media-consent-date-input" type="date" name="signature_date" required />
                          <button type="button" class="media-consent-field-box__btn" aria-label="Choose signature date">
                            <img class="media-consent-field-box__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media conoent form/c7af00a7-eeec-4c78-81c2-807008ed93ef-removebg-preview.png' ); ?>" alt="" width="20" height="20" decoding="async" aria-hidden="true" />
                          </button>
                        </span>
                      </label>
                    </div>
                  </div>
                </article>
              </div>

              <article class="media-consent-submit" id="consent-contact" data-media-section>
                <div class="media-consent-submit__copy">
                  <img class="media-consent-submit__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media conoent form/c8787907-a5fc-4a6d-bb5b-434cea33372a-removebg-preview.png' ); ?>" alt="" width="36" height="36" decoding="async" aria-hidden="true" />
                  <div>
                    <h2 class="media-consent-submit__title">Questions or Need Help?</h2>
                    <p class="media-consent-submit__text">
                      Our team is happy to answer any questions about this form or our media
                      practices. <a href="<?php echo esc_url( bdc_page_url( 'contact.html' ) ); ?>">Contact us</a> anytime.
                    </p>
                  </div>
                </div>
                <button class="btn btn--solid btn--lg btn-hover media-consent-submit__btn" type="submit">
                  Submit Consent
                  <img class="media-consent-submit__heart" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Photo & Media conoent form/6b7c85b9-ee3e-48ed-9f05-2403fb816741-removebg-preview.png' ); ?>" alt="" width="22" height="22" decoding="async" aria-hidden="true" />
                </button>
              </article>
            </form>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
