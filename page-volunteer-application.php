<?php
/**
 * Volunteer Application page template — converted from volunteer-application.html.
 *
 * Template Name: Volunteer Application
 *
 * @package Bright_Dreamers_Club
 */

get_header();

$volunteer_page_id = get_queried_object_id();
$volunteer_lazy_placeholder = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';

$volunteer_hero_aria_label = bdc_get_acf_text( 'volunteer_hero_aria_label', 'Volunteer Application', $volunteer_page_id );
$volunteer_hero_title_pink = bdc_get_acf_text( 'volunteer_hero_title_pink', 'Volunteer', $volunteer_page_id );
$volunteer_hero_title_navy = bdc_get_acf_text( 'volunteer_hero_title_navy', ' Application', $volunteer_page_id );
$volunteer_hero_text       = bdc_get_acf_text(
	'volunteer_hero_text',
	'Thank you for wanting to be part of Bright Dreamers. Together, we can inspire children to dream, create, learn, lead, and give.',
	$volunteer_page_id
);
$volunteer_hero_note_icon_url = bdc_get_acf_image_url(
	'volunteer_hero_note_icon',
	bdc_theme_asset_url( 'assets/images/volunteer-hero-note-icon.png' ),
	$volunteer_page_id
);
$volunteer_hero_note_text = bdc_get_acf_text(
	'volunteer_hero_note_text',
	'Every volunteer makes a meaningful difference in a child\'s journey.',
	$volunteer_page_id
);
$volunteer_hero_banner_url = bdc_get_acf_image_url(
	'volunteer_hero_banner',
	bdc_theme_asset_url( 'assets/images/volunteer-hero-banner.png' ),
	$volunteer_page_id
);
$volunteer_hero_banner_alt = bdc_get_acf_text(
	'volunteer_hero_banner_alt',
	'A volunteer smiling while helping children with a creative activity',
	$volunteer_page_id
);

$volunteer_spotlight_heart_url = bdc_get_acf_image_url(
	'volunteer_spotlight_heart',
	bdc_theme_asset_url( 'assets/images/volunteer-sidebar-heart-deco.png' ),
	$volunteer_page_id
);
$volunteer_spotlight_title_line1 = bdc_get_acf_text( 'volunteer_spotlight_title_line1', 'Be a Part of', $volunteer_page_id );
$volunteer_spotlight_title_line2 = bdc_get_acf_text( 'volunteer_spotlight_title_line2', 'Something Big', $volunteer_page_id );
$volunteer_spotlight_text        = bdc_get_acf_text(
	'volunteer_spotlight_text',
	'Your time and skills can help create brighter futures for children in our community.',
	$volunteer_page_id
);
$volunteer_spotlight_image_url = bdc_get_acf_image_url(
	'volunteer_spotlight_image',
	bdc_theme_asset_url( 'assets/images/volunteer-sidebar-hands.png' ),
	$volunteer_page_id
);

$volunteer_why_title_icon_url = bdc_get_acf_image_url(
	'volunteer_why_title_icon',
	bdc_theme_asset_url( 'assets/images/Volunteer Application/a13d88a7-3c1f-46c3-8e9c-dd62a73dbd9e-removebg-preview.png' ),
	$volunteer_page_id
);
$volunteer_why_title_line1 = bdc_get_acf_text( 'volunteer_why_title_line1', 'Why Volunteer', $volunteer_page_id );
$volunteer_why_title_line2 = bdc_get_acf_text( 'volunteer_why_title_line2', 'With Us?', $volunteer_page_id );
$volunteer_why_items       = bdc_get_volunteer_resolved_why( $volunteer_page_id );

$volunteer_commitment_icon_url = bdc_get_acf_image_url(
	'volunteer_commitment_icon',
	bdc_theme_asset_url( 'assets/images/Volunteer Application/ba5b6fdf-cdc5-4614-b9b1-9b709bc5af0a-removebg-preview.png' ),
	$volunteer_page_id
);
$volunteer_commitment_title = bdc_get_acf_text( 'volunteer_commitment_title', 'Time Commitment', $volunteer_page_id );
$volunteer_commitment_text  = bdc_get_acf_text(
	'volunteer_commitment_text',
	'We know life is busy. That\'s why we offer flexible volunteering opportunities that fit your schedule and availability.',
	$volunteer_page_id
);
$volunteer_commitment_image_url = bdc_get_acf_image_url(
	'volunteer_commitment_image',
	bdc_theme_asset_url( 'assets/images/volunteer-sidebar-calendar.png' ),
	$volunteer_page_id
);

$volunteer_note_icon_url = bdc_get_acf_image_url(
	'volunteer_note_icon',
	bdc_theme_asset_url( 'assets/images/Volunteer Application/be289ad1-97dd-461d-9dc9-77752bbeec9a-removebg-preview.png' ),
	$volunteer_page_id
);
$volunteer_note_title  = bdc_get_acf_text( 'volunteer_note_title', 'Important Note', $volunteer_page_id );
$volunteer_note_text_1 = bdc_get_acf_text(
	'volunteer_note_text_1',
	'All volunteers may be subject to a background check depending on their role and level of interaction with children.',
	$volunteer_page_id
);
$volunteer_note_text_2 = bdc_get_acf_text(
	'volunteer_note_text_2',
	'We take confidentiality seriously and handle all personal information with care.',
	$volunteer_page_id
);
$volunteer_note_lock_url = bdc_get_acf_image_url(
	'volunteer_note_lock',
	bdc_theme_asset_url( 'assets/images/Volunteer Application/345d6728-ceeb-471b-b3b0-c01f7a34edc1-removebg-preview.png' ),
	$volunteer_page_id
);

$volunteer_questions_icon_url = bdc_get_acf_image_url(
	'volunteer_questions_icon',
	bdc_theme_asset_url( 'assets/images/Volunteer Application/9aa2e4eb-a1ca-471a-834e-b9962440cef6-removebg-preview (1).png' ),
	$volunteer_page_id
);
$volunteer_questions_title = bdc_get_acf_text( 'volunteer_questions_title', 'Questions?', $volunteer_page_id );
$volunteer_questions_text  = bdc_get_acf_text(
	'volunteer_questions_text',
	'We\'re happy to help! If you have questions, please use our <strong>Contact Form</strong>.',
	$volunteer_page_id
);
$volunteer_questions_link = bdc_get_acf_link(
	'volunteer_questions_link',
	array(
		'title'  => 'Go to Contact Form',
		'url'    => bdc_page_url( 'contact.html' ),
		'target' => '',
	),
	$volunteer_page_id
);

$volunteer_footer_aria_label = bdc_get_acf_text( 'volunteer_footer_aria_label', 'Thank you', $volunteer_page_id );
$volunteer_footer_envelope_url = bdc_get_acf_image_url(
	'volunteer_footer_envelope',
	bdc_theme_asset_url( 'assets/images/Volunteer Application/a02a1588-2649-4a87-b502-7ca80459a5f5-removebg-preview.png' ),
	$volunteer_page_id
);
$volunteer_footer_lead   = bdc_get_acf_text( 'volunteer_footer_lead', 'Every hour you give, a child\'s dream grows.', $volunteer_page_id );
$volunteer_footer_thanks = bdc_get_acf_text( 'volunteer_footer_thanks', 'Thank you for being a Bright Dreamer!', $volunteer_page_id );
$volunteer_footer_plane_url = bdc_get_acf_image_url(
	'volunteer_footer_plane',
	bdc_theme_asset_url( 'assets/images/Volunteer Application/ChatGPT_Image_Aug_11__2026__07_28_07_PM-removebg-preview.png' ),
	$volunteer_page_id
);
$volunteer_footer_heart_url = bdc_get_acf_image_url(
	'volunteer_footer_heart',
	bdc_theme_asset_url( 'assets/images/Volunteer Application/492004b0-ad5f-44cd-9688-456964672edf-removebg-preview.png' ),
	$volunteer_page_id
);
?>
    <main id="main-content">
      <?php
      get_template_part(
        'template-parts/page-hero',
        null,
        array(
          'section_class'   => 'apply-hero volunteer-hero',
          'aria_label'      => $volunteer_hero_aria_label,
          'headline_html'   => bdc_hero_lines_html(
            array(
              array( 'text' => $volunteer_hero_title_pink, 'class' => 'apply-hero__title-line apply-hero__title-line--pink' ),
              array( 'text' => $volunteer_hero_title_navy, 'class' => 'apply-hero__title-line apply-hero__title-line--navy' ),
            )
          ),
          'supporting_copy' => $volunteer_hero_text,
          'hero_image'      => $volunteer_hero_banner_url,
          'hero_image_alt'  => $volunteer_hero_banner_alt,
          'media_class'     => 'about-hero__media',
          'image_class'     => 'about-hero__banner apply-hero__banner',
        )
      );
      ?>

      <section class="apply-form section-padding" aria-label="Volunteer application form">
        <div class="site-container apply-form__inner">
          <div class="apply-form__main">
            <form class="apply-form__form" id="volunteer-application-form" action="#" method="post" data-form-id="volunteer_application">
              <?php bdc_render_form_security_fields( 'volunteer_application' ); ?>
              <fieldset class="apply-section apply-section--parent" aria-label="Personal Information">
                <div class="apply-section__head">
                  <img class="apply-section__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/volunteer-section-personal.png' ); ?>" alt="" width="28" height="28" decoding="async" aria-hidden="true" />
                  <span class="apply-section__badge apply-section__badge--pink">1</span>
                  <span class="apply-section__title">Personal Information</span>
                </div>
                <div class="apply-section__body">
                  <div class="apply-form__row">
                    <label class="contact-field">
                      <span class="apply-field__label">First Name *</span>
                      <span class="contact-field__box"><input class="contact-field__input" type="text" name="first_name" autocomplete="given-name" required /></span>
                    </label>
                    <label class="contact-field">
                      <span class="apply-field__label">Last Name *</span>
                      <span class="contact-field__box"><input class="contact-field__input" type="text" name="last_name" autocomplete="family-name" required /></span>
                    </label>
                  </div>
                  <div class="apply-form__row">
                    <label class="contact-field">
                      <span class="apply-field__label">Email Address *</span>
                      <span class="contact-field__box"><input class="contact-field__input" type="email" name="email" autocomplete="email" required /></span>
                    </label>
                    <label class="contact-field">
                      <span class="apply-field__label">Phone Number *</span>
                      <span class="contact-field__box"><input class="contact-field__input" type="tel" name="phone" autocomplete="tel" required /></span>
                    </label>
                  </div>
                  <div class="apply-form__row">
                    <label class="contact-field">
                      <span class="apply-field__label">City *</span>
                      <span class="contact-field__box"><input class="contact-field__input" type="text" name="city" autocomplete="address-level2" required /></span>
                    </label>
                    <label class="contact-field">
                      <span class="apply-field__label">State / Province *</span>
                      <div class="apply-select" data-apply-select>
                        <select class="apply-select__native" name="state" required tabindex="-1" aria-hidden="true">
                          <option value="" disabled selected>Select State</option>
                          <option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AZ">Arizona</option><option value="CA">California</option><option value="CO">Colorado</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="IL">Illinois</option><option value="NY">New York</option><option value="TX">Texas</option><option value="WA">Washington</option><option value="OTHER">Other</option>
                        </select>
                        <button type="button" class="apply-select__trigger contact-field__box" aria-haspopup="listbox" aria-expanded="false"><span class="apply-select__value is-placeholder">Select State</span><svg class="apply-select__chevron" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M6 9l6 6 6-6" /></svg></button>
                        <ul class="apply-select__menu" role="listbox" hidden></ul>
                      </div>
                    </label>
                  </div>
                  <div class="apply-form__row">
                    <label class="contact-field">
                      <span class="apply-field__label">ZIP / Postal Code *</span>
                      <span class="contact-field__box"><input class="contact-field__input" type="text" name="zip" autocomplete="postal-code" required /></span>
                    </label>
                    <label class="contact-field">
                      <span class="apply-field__label">Date of Birth *</span>
                      <span class="contact-field__box"><input class="contact-field__input" type="date" name="date_of_birth" required /></span>
                    </label>
                  </div>
                </div>
              </fieldset>

              <fieldset class="apply-section apply-section--about" aria-label="About You">
                <div class="apply-section__head">
                  <span class="apply-section__badge apply-section__badge--orange">2</span>
                  <span class="apply-section__title">About You</span>
                </div>
                <div class="apply-section__body">
                  <label class="contact-field">
                    <span class="apply-field__label">Why do you want to volunteer with Bright Dreamers? *</span>
                    <span class="contact-field__box contact-field__box--area"><textarea class="contact-field__input contact-field__textarea" name="why_volunteer" rows="4" placeholder="Share what inspires you and what you hope to contribute." required></textarea></span>
                  </label>
                  <label class="contact-field">
                    <span class="apply-field__label">What skills, talents, or experiences would you like to share? *</span>
                    <span class="contact-field__box contact-field__box--area"><textarea class="contact-field__input contact-field__textarea" name="skills" rows="4" placeholder="e.g., teaching, organizing events, graphic design, mentoring, admin support, etc." required></textarea></span>
                  </label>
                </div>
              </fieldset>

              <fieldset class="apply-section apply-section--question" aria-label="Availability">
                <div class="apply-section__head">
                  <span class="apply-section__badge apply-section__badge--green">3</span>
                  <span class="apply-section__title">Availability</span>
                </div>
                <div class="apply-section__body">
                  <p class="apply-more__label">When are you available to volunteer? (Select all that apply)</p>
                  <ul class="apply-checklist volunteer-checklist--inline">
                    <li><label class="apply-check"><input type="checkbox" name="availability[]" value="weekday-morning" /><span>Weekdays (Morning)</span></label></li>
                    <li><label class="apply-check"><input type="checkbox" name="availability[]" value="weekday-afternoon" /><span>Weekdays (Afternoon)</span></label></li>
                    <li><label class="apply-check"><input type="checkbox" name="availability[]" value="evenings" /><span>Evenings</span></label></li>
                    <li><label class="apply-check"><input type="checkbox" name="availability[]" value="weekends" /><span>Weekends</span></label></li>
                    <li><label class="apply-check"><input type="checkbox" name="availability[]" value="flexible" /><span>Flexible</span></label></li>
                  </ul>
                  <label class="contact-field">
                    <span class="apply-field__label">How many hours per week or month can you commit?</span>
                    <div class="apply-select" data-apply-select>
                      <select class="apply-select__native" name="hours_commitment" required tabindex="-1" aria-hidden="true">
                        <option value="" disabled selected>Select an option</option>
                        <option value="1-3">1–3 hours per month</option>
                        <option value="4-8">4–8 hours per month</option>
                        <option value="1-3-week">1–3 hours per week</option>
                        <option value="4-8-week">4–8 hours per week</option>
                        <option value="8-plus">8+ hours per week</option>
                      </select>
                      <button type="button" class="apply-select__trigger contact-field__box" aria-haspopup="listbox" aria-expanded="false"><span class="apply-select__value is-placeholder">Select an option</span><svg class="apply-select__chevron" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M6 9l6 6 6-6" /></svg></button>
                      <ul class="apply-select__menu" role="listbox" hidden></ul>
                    </div>
                  </label>
                </div>
              </fieldset>

              <fieldset class="apply-section apply-section--more" aria-label="Areas of Interest">
                <div class="apply-section__head">
                  <span class="apply-section__badge apply-section__badge--purple">4</span>
                  <span class="apply-section__title">Areas of Interest</span>
                </div>
                <div class="apply-section__body">
                  <p class="apply-more__label">Which areas interest you the most? (Select all that apply)</p>
                  <div class="volunteer-interest-grid">
                    <label class="volunteer-interest-card"><input type="checkbox" name="interest[]" value="children" /><span class="volunteer-interest-card__inner"><img class="volunteer-interest-card__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/volunteer-interest-children.png' ); ?>" alt="" width="36" height="36" decoding="async" aria-hidden="true" /><span>Working with Children</span></span></label>
                    <label class="volunteer-interest-card"><input type="checkbox" name="interest[]" value="programs" /><span class="volunteer-interest-card__inner"><img class="volunteer-interest-card__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/volunteer-interest-programs.png' ); ?>" alt="" width="36" height="36" decoding="async" aria-hidden="true" /><span>Programs &amp; Activities</span></span></label>
                    <label class="volunteer-interest-card"><input type="checkbox" name="interest[]" value="events" /><span class="volunteer-interest-card__inner"><img class="volunteer-interest-card__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/volunteer-interest-events.png' ); ?>" alt="" width="36" height="36" decoding="async" aria-hidden="true" /><span>Events &amp; Fundraising</span></span></label>
                    <label class="volunteer-interest-card"><input type="checkbox" name="interest[]" value="marketing" /><span class="volunteer-interest-card__inner"><img class="volunteer-interest-card__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/volunteer-interest-marketing.png' ); ?>" alt="" width="36" height="36" decoding="async" aria-hidden="true" /><span>Marketing &amp; Communications</span></span></label>
                    <label class="volunteer-interest-card"><input type="checkbox" name="interest[]" value="admin" /><span class="volunteer-interest-card__inner"><img class="volunteer-interest-card__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/volunteer-interest-admin.png' ); ?>" alt="" width="36" height="36" decoding="async" aria-hidden="true" /><span>Administration &amp; Office Support</span></span></label>
                    <label class="volunteer-interest-card"><input type="checkbox" name="interest[]" value="other" /><span class="volunteer-interest-card__inner"><img class="volunteer-interest-card__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/volunteer-interest-other.png' ); ?>" alt="" width="36" height="36" decoding="async" aria-hidden="true" /><span>Other (Please specify)</span></span></label>
                  </div>
                </div>
              </fieldset>

              <fieldset class="apply-section apply-section--idea" aria-label="Background Information">
                <div class="apply-section__head">
                  <span class="apply-section__badge apply-section__badge--blue">5</span>
                  <span class="apply-section__title">Background Information</span>
                </div>
                <div class="apply-section__body">
                  <p class="apply-more__label">Have you volunteered with any organization before?</p>
                  <div class="apply-radio-group">
                    <label class="apply-radio"><input type="radio" name="volunteered_before" value="yes" /><span>Yes</span></label>
                    <label class="apply-radio"><input type="radio" name="volunteered_before" value="no" /><span>No</span></label>
                  </div>
                  <label class="contact-field">
                    <span class="apply-field__label">If yes, please tell us about it.</span>
                    <span class="contact-field__box contact-field__box--area"><textarea class="contact-field__input contact-field__textarea" name="volunteer_history" rows="4" placeholder="Organization name, role, and duration."></textarea></span>
                  </label>
                </div>
              </fieldset>

              <fieldset class="apply-section apply-section--consent" aria-label="References">
                <div class="apply-section__head">
                  <span class="apply-section__badge apply-section__badge--pink">6</span>
                  <span class="apply-section__title">References</span>
                </div>
                <div class="apply-section__body">
                  <p class="apply-field__hint">Please provide one reference (not a family member).</p>
                  <div class="apply-form__row">
                    <label class="contact-field"><span class="apply-field__label">Full Name *</span><span class="contact-field__box"><input class="contact-field__input" type="text" name="reference_name" required /></span></label>
                    <label class="contact-field"><span class="apply-field__label">Relationship *</span><span class="contact-field__box"><input class="contact-field__input" type="text" name="reference_relationship" required /></span></label>
                  </div>
                  <div class="apply-form__row">
                    <label class="contact-field"><span class="apply-field__label">Email *</span><span class="contact-field__box"><input class="contact-field__input" type="email" name="reference_email" required /></span></label>
                    <label class="contact-field"><span class="apply-field__label">Phone Number *</span><span class="contact-field__box"><input class="contact-field__input" type="tel" name="reference_phone" required /></span></label>
                  </div>
                </div>
              </fieldset>

              <fieldset class="apply-section apply-section--parent volunteer-section--agreement" aria-label="Agreement">
                <div class="apply-section__head">
                  <span class="apply-section__badge apply-section__badge--pink">7</span>
                  <span class="apply-section__title">Agreement</span>
                </div>
                <div class="apply-section__body">
                  <ul class="apply-consent-list">
                    <li><label class="apply-check apply-check--block"><input type="checkbox" name="agreement_truth" required /><span>I confirm that the information provided is true and accurate to the best of my knowledge.</span></label></li>
                    <li><label class="apply-check apply-check--block"><input type="checkbox" name="agreement_guidelines" required /><span>I agree to follow Bright Dreamers <a href="#">policies and guidelines</a> as a volunteer.</span></label></li>
                  </ul>
                  <button class="btn btn--solid btn--lg btn-hover volunteer-submit-btn" type="submit">
                    Submit Application
                    <svg class="btn__icon" viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 12l18-7-7 18-2.5-7.5L3 12z" /><path d="M14 5l4 4" /></svg>
                  </button>
                </div>
              </fieldset>
            </form>
          </div>

          <aside class="apply-form__sidebar" aria-label="Volunteer application help">
            <article class="apply-sidebar-card apply-sidebar-card--about volunteer-sidebar-card--spotlight">
              <h2 class="apply-sidebar-card__title volunteer-sidebar-card__title--hearts volunteer-sidebar-card__title--large">
                <img class="volunteer-sidebar-title-heart" src="<?php echo esc_url( $volunteer_spotlight_heart_url ); ?>" alt="" width="32" height="32" decoding="async" aria-hidden="true" />
                <span class="volunteer-sidebar-card__title-text"><?php echo esc_html( $volunteer_spotlight_title_line1 ); ?><br /><?php echo esc_html( $volunteer_spotlight_title_line2 ); ?></span>
                <img class="volunteer-sidebar-title-heart" src="<?php echo esc_url( $volunteer_spotlight_heart_url ); ?>" alt="" width="32" height="32" decoding="async" aria-hidden="true" />
              </h2>
              <p class="apply-sidebar-card__text"><?php echo esc_html( $volunteer_spotlight_text ); ?></p>
              <img class="volunteer-sidebar-spotlight" src="<?php echo esc_url( $volunteer_spotlight_image_url ); ?>" alt="" width="240" height="155" loading="lazy" decoding="async" aria-hidden="true" />
            </article>

            <article class="apply-sidebar-card apply-sidebar-card--about volunteer-sidebar-card--why">
              <h2 class="apply-sidebar-card__title volunteer-sidebar-card__title--icon volunteer-sidebar-card__title--large">
                <img class="volunteer-sidebar-title-icon" src="<?php echo esc_url( $volunteer_why_title_icon_url ); ?>" alt="" width="32" height="32" loading="lazy" decoding="async" aria-hidden="true" />
                <span class="volunteer-sidebar-card__title-text"><?php echo esc_html( $volunteer_why_title_line1 ); ?><br /><?php echo esc_html( $volunteer_why_title_line2 ); ?></span>
              </h2>
              <ul class="apply-sidebar-list volunteer-sidebar-list">
                <?php foreach ( $volunteer_why_items as $volunteer_why_item ) : ?>
                <li><img class="apply-sidebar-list__icon" src="<?php echo esc_url( $volunteer_why_item['icon'] ); ?>" alt="" width="22" height="22" loading="lazy" decoding="async" aria-hidden="true" /><span><?php echo esc_html( $volunteer_why_item['text'] ); ?></span></li>
                <?php endforeach; ?>
              </ul>
            </article>

            <article class="apply-sidebar-card apply-sidebar-card--timeline volunteer-sidebar-card--commitment">
              <h2 class="apply-sidebar-card__title volunteer-sidebar-card__title--icon">
                <img class="volunteer-sidebar-title-icon" src="<?php echo esc_url( $volunteer_commitment_icon_url ); ?>" alt="" width="32" height="32" loading="lazy" decoding="async" aria-hidden="true" />
                <?php echo esc_html( $volunteer_commitment_title ); ?>
              </h2>
              <p class="apply-sidebar-card__text"><?php echo esc_html( $volunteer_commitment_text ); ?></p>
              <img class="volunteer-sidebar-commitment" src="<?php echo esc_url( $volunteer_commitment_image_url ); ?>" alt="" width="180" height="130" loading="lazy" decoding="async" aria-hidden="true" />
            </article>

            <article class="apply-sidebar-card apply-sidebar-card--questions volunteer-sidebar-card--note">
              <h2 class="apply-sidebar-card__title volunteer-sidebar-card__title--icon">
                <img class="volunteer-sidebar-title-icon" src="<?php echo esc_url( $volunteer_note_icon_url ); ?>" alt="" width="32" height="32" loading="lazy" decoding="async" aria-hidden="true" />
                <?php echo esc_html( $volunteer_note_title ); ?>
              </h2>
              <div class="volunteer-sidebar-note">
                <div class="volunteer-sidebar-note__copy">
                  <p class="apply-sidebar-card__text"><?php echo esc_html( $volunteer_note_text_1 ); ?></p>
                  <p class="apply-sidebar-card__text"><?php echo esc_html( $volunteer_note_text_2 ); ?></p>
                </div>
                <img class="volunteer-sidebar-note__lock" src="<?php echo esc_url( $volunteer_note_lock_url ); ?>" alt="" width="36" height="36" loading="lazy" decoding="async" aria-hidden="true" />
              </div>
            </article>

            <article class="apply-sidebar-card volunteer-sidebar-card--questions">
              <h2 class="apply-sidebar-card__title volunteer-sidebar-card__title--icon">
                <img class="volunteer-sidebar-title-icon" src="<?php echo esc_url( $volunteer_questions_icon_url ); ?>" alt="" width="32" height="32" loading="lazy" decoding="async" aria-hidden="true" />
                <?php echo esc_html( $volunteer_questions_title ); ?>
              </h2>
              <p class="apply-sidebar-card__text"><?php echo wp_kses_post( $volunteer_questions_text ); ?></p>
              <a class="btn btn--outline btn-hover apply-sidebar-card__btn volunteer-sidebar-questions-btn" href="<?php echo esc_url( $volunteer_questions_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $volunteer_questions_link ); ?>><?php echo esc_html( $volunteer_questions_link['title'] ); ?><svg class="btn__icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6" /></svg></a>
            </article>
          </aside>
        </div>
      </section>

      <section class="volunteer-footer-note section-padding" aria-label="<?php echo esc_attr( $volunteer_footer_aria_label ); ?>">
        <div class="site-container volunteer-footer-note__inner">
          <div class="volunteer-footer-note__card">
            <img
              class="volunteer-footer-note__envelope"
              src="<?php echo esc_url( $volunteer_footer_envelope_url ); ?>"
              alt=""
              width="150"
              height="120"
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />

            <div class="volunteer-footer-note__copy">
              <p class="volunteer-footer-note__lead"><?php echo esc_html( $volunteer_footer_lead ); ?></p>
              <p class="volunteer-footer-note__thanks"><?php echo esc_html( $volunteer_footer_thanks ); ?></p>
            </div>

            <div class="volunteer-footer-note__deco" aria-hidden="true">
              <img
                class="volunteer-footer-note__plane"
                src="<?php echo esc_url( $volunteer_footer_plane_url ); ?>"
                alt=""
                width="430"
                height="120"
                loading="lazy"
                decoding="async"
              />
              <img
                class="volunteer-footer-note__heart"
                src="<?php echo esc_url( $volunteer_footer_heart_url ); ?>"
                alt=""
                width="96"
                height="96"
                loading="lazy"
                decoding="async"
              />
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
