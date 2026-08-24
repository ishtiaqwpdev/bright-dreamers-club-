<?php
/**
 * Apply to Become page template — converted from apply-to-become.html.
 *
 * Template Name: Apply to Become
 *
 * @package Bright_Dreamers_Club
 */

get_header();

$apply_page_id = get_queried_object_id();
$apply_lazy_placeholder = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';

$apply_hero_aria_label = bdc_get_acf_text( 'apply_hero_aria_label', 'Apply to Become a Bright Dreamer', $apply_page_id );
$apply_hero_title_pink = bdc_get_acf_text( 'apply_hero_title_pink', 'Apply to Become a', $apply_page_id );
$apply_hero_title_navy = bdc_get_acf_text( 'apply_hero_title_navy', 'Bright Dreamer', $apply_page_id );
$apply_hero_text       = bdc_get_acf_text(
	'apply_hero_text',
	'Bright Dreamers welcomes children who are curious, creative, and excited to explore their ideas with others. This application helps us get to know your child and your family.',
	$apply_page_id
);
$apply_hero_note_icon_url = bdc_get_acf_image_url(
	'apply_hero_note_icon',
	bdc_theme_asset_url( 'assets/images/apply-intro-heart-badge.png' ),
	$apply_page_id
);
$apply_hero_note_text = bdc_get_acf_text(
	'apply_hero_note_text',
	'Participation in Bright Dreamers experiences is <strong>free</strong>. We never want cost to be a barrier for a child with an idea.',
	$apply_page_id
);
$apply_hero_banner_url = bdc_get_acf_image_url(
	'apply_hero_banner',
	bdc_theme_asset_url( 'assets/images/apply-hero-banner.png' ),
	$apply_page_id
);
$apply_hero_banner_alt = bdc_get_acf_text(
	'apply_hero_banner_alt',
	'A young girl smiling while drawing with colored pencils',
	$apply_page_id
);

$apply_about_title = bdc_get_acf_text( 'apply_about_title', 'About the Application', $apply_page_id );
$apply_about_items = bdc_get_apply_resolved_about( $apply_page_id );

$apply_timeline_title = bdc_get_acf_text( 'apply_timeline_title', 'What Happens Next?', $apply_page_id );
$apply_timeline_plane_url = bdc_get_acf_image_url(
	'apply_timeline_plane',
	bdc_theme_asset_url( 'assets/images/apply-timeline-plane-deco.png' ),
	$apply_page_id
);
$apply_timeline_steps = bdc_get_apply_resolved_timeline( $apply_page_id );

$apply_questions_title = bdc_get_acf_text( 'apply_questions_title', 'Questions?', $apply_page_id );
$apply_questions_text  = bdc_get_acf_text(
	'apply_questions_text',
	'We\'re happy to answer questions before you apply. Send us a message anytime.',
	$apply_page_id
);
$apply_questions_link = bdc_get_acf_link(
	'apply_questions_link',
	array(
		'title'  => 'Go to Contact Us',
		'url'    => bdc_page_url( 'contact.html' ),
		'target' => '',
	),
	$apply_page_id
);
$apply_sidebar_door_url = bdc_get_acf_image_url(
	'apply_sidebar_door',
	bdc_theme_asset_url( 'assets/images/apply-door-path.png' ),
	$apply_page_id
);
?>
    <main id="main-content">
      <?php
      get_template_part(
        'template-parts/page-hero',
        null,
        array(
          'section_class'   => 'apply-hero about-hero',
          'aria_label'      => $apply_hero_aria_label,
          'headline_html'   => bdc_hero_lines_html(
            array(
              array( 'text' => $apply_hero_title_pink, 'class' => 'apply-hero__title-line apply-hero__title-line--pink' ),
              array( 'text' => $apply_hero_title_navy, 'class' => 'apply-hero__title-line apply-hero__title-line--navy' ),
            )
          ),
          'supporting_copy' => $apply_hero_text,
          'hero_image'      => $apply_hero_banner_url,
          'hero_image_alt'  => $apply_hero_banner_alt,
          'media_class'     => 'about-hero__media',
          'image_class'     => 'about-hero__banner apply-hero__banner',
        )
      );
      ?>
      <?php if ( '' !== trim( $apply_hero_note_text ) ) : ?>
      <div class="site-container apply-hero__note-wrap">
        <div class="apply-hero__note">
          <p class="apply-hero__note-text"><?php echo wp_kses_post( $apply_hero_note_text ); ?></p>
        </div>
      </div>
      <?php endif; ?>

      <section class="apply-form section-padding" aria-label="Bright Dreamer application">
        <div class="site-container apply-form__inner">
          <div class="apply-form__main">
            <form class="apply-form__form" id="apply-to-join-form" action="#" method="post" enctype="multipart/form-data" data-form-id="apply_to_join">
              <?php bdc_render_form_security_fields( 'apply_to_join' ); ?>
              <fieldset class="apply-section apply-section--parent" aria-label="Parent or Guardian Information">
                <div class="apply-section__head">
                  <img
                    class="apply-section__icon"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/apply-section-icon-parent.png' ); ?>"
                    alt=""
                    width="40"
                    height="40"
                    decoding="async"
                    aria-hidden="true"
                  />
                  <span class="apply-section__badge apply-section__badge--pink">1</span>
                  <span class="apply-section__title">Parent / Guardian Information</span>
                </div>

                <div class="apply-section__body">

                <div class="apply-form__row">
                  <label class="contact-field">
                    <span class="apply-field__label">Parent or Guardian Name *</span>
                    <span class="contact-field__box">
                      <img
                        class="apply-field__icon"
                        src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/apply-field-user.png' ); ?>"
                        alt=""
                        width="24"
                        height="24"
                        decoding="async"
                        aria-hidden="true"
                      />
                      <input
                        class="contact-field__input"
                        type="text"
                        name="guardian_name"
                        autocomplete="name"
                        required
                      />
                    </span>
                  </label>

                  <label class="contact-field">
                    <span class="apply-field__label">Email *</span>
                    <span class="contact-field__box">
                      <svg
                        class="contact-field__icon"
                        viewBox="0 0 24 24"
                        width="24"
                        height="24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.7"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        aria-hidden="true"
                      >
                        <path d="M4 6h16v12H4z" />
                        <path d="M4 7l8 6 8-6" />
                      </svg>
                      <input
                        class="contact-field__input"
                        type="email"
                        name="email"
                        autocomplete="email"
                        required
                      />
                    </span>
                  </label>
                </div>

                <div class="apply-form__row">
                  <label class="contact-field">
                    <span class="apply-field__label">Phone *</span>
                    <span class="contact-field__box">
                      <svg
                        class="contact-field__icon"
                        viewBox="0 0 24 24"
                        width="24"
                        height="24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.7"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        aria-hidden="true"
                      >
                        <path
                          d="M6.5 4h11l1 1v14l-1 1h-11l-1-1V5zM8 7h8M8 11h8M8 15h5"
                        />
                      </svg>
                      <input
                        class="contact-field__input"
                        type="tel"
                        name="phone"
                        autocomplete="tel"
                        required
                      />
                    </span>
                  </label>

                  <label class="contact-field">
                    <span class="apply-field__label">City *</span>
                    <span class="contact-field__box">
                      <svg
                        class="contact-field__icon"
                        viewBox="0 0 24 24"
                        width="24"
                        height="24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.7"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        aria-hidden="true"
                      >
                        <path d="M12 21s6-5.2 6-10a6 6 0 10-12 0c0 4.8 6 10 6 10z" />
                        <circle cx="12" cy="11" r="2.2" />
                      </svg>
                      <input
                        class="contact-field__input"
                        type="text"
                        name="city"
                        autocomplete="address-level2"
                        required
                      />
                    </span>
                  </label>
                </div>
                </div>
              </fieldset>

              <fieldset class="apply-section apply-section--child" aria-label="About Your Child">
                <div class="apply-section__head">
                  <img
                    class="apply-section__icon"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/apply-section-icon-child.png' ); ?>"
                    alt=""
                    width="40"
                    height="40"
                    decoding="async"
                    aria-hidden="true"
                  />
                  <span class="apply-section__badge apply-section__badge--yellow">2</span>
                  <span class="apply-section__title">About Your Child</span>
                </div>

                <div class="apply-section__body">

                <div class="apply-form__row">
                  <label class="contact-field">
                    <span class="apply-field__label">Child&rsquo;s First Name *</span>
                    <span class="contact-field__box">
                      <img
                        class="apply-field__icon"
                        src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/apply-field-user.png' ); ?>"
                        alt=""
                        width="24"
                        height="24"
                        decoding="async"
                        aria-hidden="true"
                      />
                      <input
                        class="contact-field__input"
                        type="text"
                        name="child_first_name"
                        required
                      />
                    </span>
                  </label>

                  <label class="contact-field">
                    <span class="apply-field__label">Child&rsquo;s Age *</span>
                    <div class="apply-select" data-apply-select>
                      <select class="apply-select__native" name="child_age" required tabindex="-1" aria-hidden="true">
                        <option value="" disabled selected>Select Age</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                      </select>
                      <button
                        type="button"
                        class="apply-select__trigger contact-field__box"
                        aria-haspopup="listbox"
                        aria-expanded="false"
                        id="child-age-select"
                      >
                        <span class="apply-select__value is-placeholder">Select Age</span>
                        <svg
                          class="apply-select__chevron"
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
                          <path d="M6 9l6 6 6-6" />
                        </svg>
                      </button>
                      <ul class="apply-select__menu" role="listbox" aria-labelledby="child-age-select" hidden>
                        <li>
                          <button type="button" class="apply-select__option" role="option" data-value="6">6</button>
                        </li>
                        <li>
                          <button type="button" class="apply-select__option" role="option" data-value="7">7</button>
                        </li>
                        <li>
                          <button type="button" class="apply-select__option" role="option" data-value="8">8</button>
                        </li>
                        <li>
                          <button type="button" class="apply-select__option" role="option" data-value="9">9</button>
                        </li>
                        <li>
                          <button type="button" class="apply-select__option" role="option" data-value="10">10</button>
                        </li>
                        <li>
                          <button type="button" class="apply-select__option" role="option" data-value="11">11</button>
                        </li>
                        <li>
                          <button type="button" class="apply-select__option" role="option" data-value="12">12</button>
                        </li>
                        <li>
                          <button type="button" class="apply-select__option" role="option" data-value="13">13</button>
                        </li>
                        <li>
                          <button type="button" class="apply-select__option" role="option" data-value="14">14</button>
                        </li>
                        <li>
                          <button type="button" class="apply-select__option" role="option" data-value="15">15</button>
                        </li>
                        <li>
                          <button type="button" class="apply-select__option" role="option" data-value="16">16</button>
                        </li>
                        <li>
                          <button type="button" class="apply-select__option" role="option" data-value="17">17</button>
                        </li>
                      </ul>
                    </div>
                  </label>
                </div>

                <label class="contact-field">
                  <span class="apply-field__label">What does your child love doing? *</span>
                  <span class="contact-field__box contact-field__box--area">
                    <textarea
                      class="contact-field__input contact-field__textarea"
                      name="child_love_doing"
                      rows="3"
                      placeholder="Example: Art, building, animals, nature, helping others, inventing, fashion, sports, storytelling, technology, music, organizing, etc."
                      required
                    ></textarea>
                  </span>
                </label>

                <label class="contact-field">
                  <span class="apply-field__label">What is your child curious about right now?</span>
                  <span class="contact-field__box contact-field__box--area">
                    <textarea
                      class="contact-field__input contact-field__textarea"
                      name="child_curious"
                      rows="3"
                    ></textarea>
                  </span>
                </label>

                <label class="contact-field">
                  <span class="apply-field__label">Does your child have an idea, project, or dream they would like to explore?</span>
                  <span class="contact-field__box contact-field__box--area">
                    <textarea
                      class="contact-field__input contact-field__textarea"
                      name="child_dream"
                      rows="3"
                      placeholder="It&rsquo;s completely okay if they don&rsquo;t have one yet."
                    ></textarea>
                  </span>
                </label>
                </div>
              </fieldset>

              <fieldset class="apply-section apply-section--question" aria-label="A Question for the Child">
                <div class="apply-section__head">
                  <img
                    class="apply-section__icon"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/apply-section-icon-question.png' ); ?>"
                    alt=""
                    width="40"
                    height="40"
                    decoding="async"
                    aria-hidden="true"
                  />
                  <span class="apply-section__badge apply-section__badge--green">3</span>
                  <span class="apply-section__title">A Question for the Child</span>
                </div>

                <div class="apply-section__body">

                <label class="contact-field">
                  <span class="apply-field__label">If you could create, build, change, or help with anything, what would you do?</span>
                  <span class="apply-field__hint">Parents can type their child&rsquo;s answer exactly as they say it.</span>
                  <span class="contact-field__box contact-field__box--area">
                    <textarea
                      class="contact-field__input contact-field__textarea"
                      name="child_question"
                      rows="4"
                    ></textarea>
                  </span>
                </label>
                </div>
              </fieldset>

              <fieldset class="apply-section apply-section--more" aria-label="Tell Us More">
                <div class="apply-section__head">
                  <img
                    class="apply-section__icon"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/apply-section-icon-tell-us-more.png' ); ?>"
                    alt=""
                    width="40"
                    height="40"
                    decoding="async"
                    aria-hidden="true"
                  />
                  <span class="apply-section__badge apply-section__badge--purple">4</span>
                  <span class="apply-section__title">Tell Us More</span>
                </div>

                <div class="apply-section__body">

                <div class="apply-more__grid">
                  <div class="apply-more__checks">
                    <p class="apply-more__label">Which experiences interest your child?</p>
                    <ul class="apply-checklist">
                      <li class="apply-program-item">
                        <label class="apply-check apply-check--program">
                          <input type="checkbox" name="interest[]" value="creative-makers" />
                        </label>
                        <span class="apply-program-item__content">
                          <a class="apply-program-item__name" href="<?php echo esc_url( bdc_page_url( 'creative-makers.html' ) ); ?>">Creative Makers</a>
                          <a class="apply-program-item__learn-more" href="<?php echo esc_url( bdc_page_url( 'creative-makers.html' ) ); ?>">Learn More <span aria-hidden="true">&rarr;</span></a>
                        </span>
                      </li>
                      <li class="apply-program-item">
                        <label class="apply-check apply-check--program">
                          <input type="checkbox" name="interest[]" value="young-ideas-lab" />
                        </label>
                        <span class="apply-program-item__content">
                          <a class="apply-program-item__name" href="<?php echo esc_url( bdc_page_url( 'young-ideas-lab.html' ) ); ?>">Young Ideas Lab</a>
                          <a class="apply-program-item__learn-more" href="<?php echo esc_url( bdc_page_url( 'young-ideas-lab.html' ) ); ?>">Learn More <span aria-hidden="true">&rarr;</span></a>
                        </span>
                      </li>
                      <li class="apply-program-item">
                        <label class="apply-check apply-check--program">
                          <input type="checkbox" name="interest[]" value="create-for-cause" />
                        </label>
                        <span class="apply-program-item__content">
                          <a class="apply-program-item__name" href="<?php echo esc_url( bdc_page_url( 'create-for-cause.html' ) ); ?>">Create for a Cause</a>
                          <a class="apply-program-item__learn-more" href="<?php echo esc_url( bdc_page_url( 'create-for-cause.html' ) ); ?>">Learn More <span aria-hidden="true">&rarr;</span></a>
                        </span>
                      </li>
                      <li class="apply-program-item">
                        <label class="apply-check apply-check--program">
                          <input type="checkbox" name="interest[]" value="community-adventures" />
                        </label>
                        <span class="apply-program-item__content">
                          <a class="apply-program-item__name" href="<?php echo esc_url( bdc_page_url( 'community-adventures.html' ) ); ?>">Community Adventures</a>
                          <a class="apply-program-item__learn-more" href="<?php echo esc_url( bdc_page_url( 'community-adventures.html' ) ); ?>">Learn More <span aria-hidden="true">&rarr;</span></a>
                        </span>
                      </li>
                      <li>
                        <label class="apply-check">
                          <input type="checkbox" name="interest[]" value="not-sure" />
                          <span>Not sure yet</span>
                        </label>
                      </li>
                    </ul>
                  </div>

                  <label class="contact-field apply-more__textarea">
                    <span class="apply-field__label">What would you most like your child to gain from Bright Dreamers?</span>
                    <span class="contact-field__box contact-field__box--area">
                      <textarea
                        class="contact-field__input contact-field__textarea"
                        name="child_gain"
                        rows="6"
                      ></textarea>
                    </span>
                  </label>
                </div>

                <p class="apply-more__label">How comfortable is your child in group projects?</p>
                <div class="apply-radio-group">
                  <label class="apply-radio">
                    <input type="radio" name="group_comfort" value="very" />
                    <span>Very comfortable</span>
                  </label>
                  <label class="apply-radio">
                    <input type="radio" name="group_comfort" value="somewhat" />
                    <span>Somewhat comfortable</span>
                  </label>
                  <label class="apply-radio">
                    <input type="radio" name="group_comfort" value="needs-support" />
                    <span>Needs gentle support</span>
                  </label>
                </div>

                <label class="apply-check apply-check--block">
                  <input type="checkbox" name="parent_involvement" value="yes" />
                  <span
                    >I understand that parent/guardian involvement and communication are an important
                    part of Bright Dreamers.</span
                  >
                </label>
                </div>
              </fieldset>

              <fieldset class="apply-section apply-section--idea" aria-label="Optional show us an idea">
                <div class="apply-section__head">
                  <img
                    class="apply-section__icon"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/apply-section-icon-idea.png' ); ?>"
                    alt=""
                    width="40"
                    height="40"
                    decoding="async"
                    aria-hidden="true"
                  />
                  <span class="apply-section__badge apply-section__badge--blue">5</span>
                  <span class="apply-section__title">Optional: Show Us an Idea</span>
                </div>

                <div class="apply-section__body">

                <div class="apply-idea__layout">
                  <div class="apply-idea__copy">
                    <p class="apply-idea__text">
                      Upload a drawing, photo of something your child created, or another example of
                      an idea. (Optional)
                    </p>
                  </div>

                  <label class="apply-upload apply-idea__upload">
                    <input class="apply-upload__input" type="file" name="idea_file" accept="image/jpeg,image/png,.pdf" />
                    <span class="apply-upload__box">
                      <svg
                        class="apply-upload__cloud"
                        viewBox="0 0 24 24"
                        width="34"
                        height="34"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.6"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        aria-hidden="true"
                      >
                        <path d="M7 18h10a4 4 0 000-8 5 5 0 00-9.8-1.2A3.5 3.5 0 007 18z" />
                        <path d="M12 13v5M9.5 15.5L12 13l2.5 2.5" />
                      </svg>
                      <span class="apply-upload__text">Click to upload or drag and drop</span>
                      <span class="apply-upload__hint">Files: JPG, PNG, PDF (Max 10MB)</span>
                    </span>
                  </label>
                </div>
                </div>
              </fieldset>

              <fieldset class="apply-section apply-section--consent" aria-label="Consent">
                <div class="apply-section__head">
                  <img
                    class="apply-section__icon"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/apply-section-icon-consent.png' ); ?>"
                    alt=""
                    width="40"
                    height="40"
                    decoding="async"
                    aria-hidden="true"
                  />
                  <span class="apply-section__badge apply-section__badge--red">6</span>
                  <span class="apply-section__title">Consent</span>
                </div>

                <div class="apply-section__body">

                <ul class="apply-consent-list">
                  <li>
                    <label class="apply-check apply-check--block">
                      <input type="checkbox" name="consent_guardian" required />
                      <span
                        >I confirm that I am the parent or legal guardian submitting this
                        application.</span
                      >
                    </label>
                  </li>
                  <li>
                    <label class="apply-check apply-check--block">
                      <input type="checkbox" name="consent_contact" required />
                      <span
                        >I give permission for Bright Dreamers to contact me about this
                        application.</span
                      >
                    </label>
                  </li>
                  <li>
                    <label class="apply-check apply-check--block">
                      <input type="checkbox" name="consent_privacy" required />
                      <span
                        >I have read and agree to the
                        <a href="<?php echo esc_url( bdc_page_url( 'privacy-policy.html' ) ); ?>">Privacy Policy</a>.</span
                      >
                    </label>
                  </li>
                </ul>
                </div>
              </fieldset>

              <div class="apply-submit">
                <div class="apply-submit__copy">
                  <img
                    class="apply-submit__star"
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/apply-submit-star.png' ); ?>"
                    alt=""
                    width="56"
                    height="56"
                    loading="lazy"
                    decoding="async"
                    aria-hidden="true"
                  />
                  <div class="apply-submit__text">
                    <h2 class="apply-submit__title">Ready to Share Their Spark?</h2>
                    <p class="apply-submit__lead">Every child&rsquo;s journey begins differently.</p>
                    <p class="apply-submit__lead">We look forward to learning more about yours.</p>
                  </div>
                </div>
                <button class="btn btn--solid btn--lg btn-hover apply-submit__btn" type="submit">
                  Submit Application
                  <svg
                    class="btn__icon apply-submit__plane"
                    viewBox="0 0 24 24"
                    width="22"
                    height="22"
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
              </div>
            </form>
          </div>

          <aside class="apply-form__sidebar" aria-label="Application help">
            <article class="apply-sidebar-card apply-sidebar-card--about">
              <h2 class="apply-sidebar-card__title"><?php echo esc_html( $apply_about_title ); ?></h2>
              <ul class="apply-sidebar-list">
                <?php foreach ( $apply_about_items as $apply_about_item ) : ?>
                <li>
                  <?php if ( ! empty( $apply_about_item['wrap_slot'] ) ) : ?>
                  <span class="apply-sidebar-list__icon-slot" aria-hidden="true">
                    <img
                      class="<?php echo esc_attr( $apply_about_item['icon_class'] ); ?>"
                      src="<?php echo esc_url( $apply_about_item['icon'] ); ?>"
                      alt=""
                      width="36"
                      height="36"
                      loading="lazy"
                      decoding="async"
                    />
                  </span>
                  <?php else : ?>
                  <img
                    class="<?php echo esc_attr( $apply_about_item['icon_class'] ); ?>"
                    src="<?php echo esc_url( $apply_about_item['icon'] ); ?>"
                    alt=""
                    width="30"
                    height="30"
                    loading="lazy"
                    decoding="async"
                    aria-hidden="true"
                  />
                  <?php endif; ?>
                  <span><?php echo esc_html( $apply_about_item['text'] ); ?></span>
                </li>
                <?php endforeach; ?>
              </ul>
            </article>

            <article class="apply-sidebar-card apply-sidebar-card--timeline">
              <div class="apply-sidebar-card__head">
                <h2 class="apply-sidebar-card__title"><?php echo esc_html( $apply_timeline_title ); ?></h2>
                <img
                  class="apply-sidebar-card__plane"
                  src="<?php echo esc_url( $apply_timeline_plane_url ); ?>"
                  alt=""
                  width="88"
                  height="56"
                  loading="lazy"
                  decoding="async"
                  aria-hidden="true"
                />
              </div>

              <div class="apply-timeline" role="list">
                <?php foreach ( $apply_timeline_steps as $apply_timeline_step ) : ?>
                <article class="apply-timeline__step" role="listitem">
                  <div class="apply-timeline__rail" aria-hidden="true">
                    <span class="apply-timeline__dot"></span>
                  </div>
                  <div class="apply-timeline__content">
                    <h3 class="apply-timeline__title"><?php echo esc_html( $apply_timeline_step['title'] ); ?></h3>
                    <p class="apply-timeline__text">
                      <?php echo esc_html( $apply_timeline_step['text'] ); ?>
                    </p>
                  </div>
                </article>
                <?php endforeach; ?>
              </div>
            </article>

            <article class="apply-sidebar-card apply-sidebar-card--questions">
              <h2 class="apply-sidebar-card__title">
                <?php echo esc_html( $apply_questions_title ); ?>
                <svg
                  class="apply-sidebar-card__bubble"
                  viewBox="0 0 24 24"
                  width="22"
                  height="22"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1.7"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  aria-hidden="true"
                >
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z" />
                </svg>
              </h2>
              <p class="apply-sidebar-card__text">
                <?php echo esc_html( $apply_questions_text ); ?>
              </p>
              <a class="btn btn--outline btn-hover apply-sidebar-card__btn" href="<?php echo esc_url( $apply_questions_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $apply_questions_link ); ?>>
                <?php echo esc_html( $apply_questions_link['title'] ); ?>
                <svg
                  class="btn__icon"
                  viewBox="0 0 24 24"
                    width="24"
                    height="24"
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
            </article>

            <img
              class="apply-sidebar__door"
              src="<?php echo esc_url( $apply_sidebar_door_url ); ?>"
              alt=""
              width="320"
              height="220"
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />
          </aside>
        </div>
      </section>
    </main>

<?php
get_footer();
