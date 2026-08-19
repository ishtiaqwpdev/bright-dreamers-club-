<?php
/**
 * Partner Inquiry page template — converted from partner-inquiry.html.
 *
 * Template Name: Partner Inquiry
 *
 * @package Bright_Dreamers_Club
 */

get_header();
?>
    <main id="main-content">
      <section class="page-hero apply-hero partner-inquiry-hero" aria-label="Partner Inquiry Form">
        <div class="site-container page-hero__inner">
          <div class="page-hero__content apply-hero__content">
            <h1 class="apply-hero__title partner-inquiry-hero__title">
              <span class="apply-hero__title-line apply-hero__title-line--pink">Partner</span><span class="apply-hero__title-line apply-hero__title-line--navy"> Inquiry Form</span>
            </h1>

            <p class="apply-hero__text">
              Bright Dreamers welcomes partnerships with organizations, businesses, and individuals
              who want to help children explore ideas, create, and make a difference.
            </p>
          </div>

          <div class="about-hero__media">
            <div class="lazy-img-wrap">
              <img
                class="about-hero__banner apply-hero__banner partner-inquiry-hero__banner lazy-img"
                src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Partner inquery form/c6cd5763-32f5-4059-9418-034cb7100a9f.png' ); ?>"
                alt="An educator and children working together on a creative project"
                width="1200"
                height="900"
                decoding="async"
              />
            </div>
          </div>
        </div>
      </section>

      <section class="apply-form section-padding" aria-label="Partner inquiry form">
        <div class="site-container apply-form__inner">
          <div class="apply-form__main">
            <form class="apply-form__form" id="partner-inquiry-form" action="#" method="post" enctype="multipart/form-data" data-form-id="partner_inquiry">
              <?php bdc_render_form_security_fields( 'partner_inquiry' ); ?>
              <div class="partner-form-intro">
                <img
                  class="partner-form-intro__icon"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Partner inquery form/8d793268-6fcb-4896-b468-98eaf633c9e3__1_-removebg-preview-e1786253242766-removebg-preview.png' ); ?>"
                  alt=""
                  width="32"
                  height="32"
                  decoding="async"
                  aria-hidden="true"
                />
                <div class="partner-form-intro__text">
                  <h2 class="partner-form-intro__title">We&rsquo;re building partnerships intentionally.</h2>
                  <p class="partner-form-intro__desc">Tell us about your idea, offering, or way you&rsquo;d like to support children.</p>
                </div>
              </div>

              <fieldset class="apply-section apply-section--parent partner-section" aria-label="Organization or Individual Information">
                <img class="partner-section__deco-icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Partner inquery form/d9f3d774-e8d1-425e-98d6-7595b7c06bfd-removebg-preview.png' ); ?>" alt="" width="40" height="40" decoding="async" aria-hidden="true" />
                <div class="apply-section__head partner-section__head">
                  <span class="apply-section__badge apply-section__badge--pink">1</span>
                  <span class="apply-section__title">Organization / Individual Information</span>
                </div>
                <div class="apply-section__body">
                  <div class="apply-form__row">
                    <label class="contact-field">
                      <span class="apply-field__label">Organization or Individual Name *</span>
                      <span class="contact-field__box"><input class="contact-field__input" type="text" name="organization_name" placeholder="Enter organization or individual name" required /></span>
                    </label>
                    <label class="contact-field">
                      <span class="apply-field__label">Contact Person *</span>
                      <span class="contact-field__box"><input class="contact-field__input" type="text" name="contact_person" autocomplete="name" placeholder="Enter contact person name" required /></span>
                    </label>
                  </div>
                  <div class="apply-form__row">
                    <label class="contact-field">
                      <span class="apply-field__label">Role / Title *</span>
                      <span class="contact-field__box"><input class="contact-field__input" type="text" name="role_title" placeholder="Enter your role or title" required /></span>
                    </label>
                    <label class="contact-field">
                      <span class="apply-field__label">Website or Social Link</span>
                      <span class="contact-field__box"><input class="contact-field__input" type="text" name="website_social" placeholder="https://yourwebsite.com or @username" /></span>
                    </label>
                  </div>
                </div>
              </fieldset>

              <fieldset class="apply-section apply-section--more partner-section" aria-label="Contact Details">
                <img class="partner-section__deco-icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Partner inquery form/b5ac6df8-ed7d-4932-b661-5191125370fd-removebg-preview.png' ); ?>" alt="" width="40" height="40" decoding="async" aria-hidden="true" />
                <div class="apply-section__head partner-section__head">
                  <span class="apply-section__badge apply-section__badge--purple">2</span>
                  <span class="apply-section__title">Contact Details</span>
                </div>
                <div class="apply-section__body">
                  <div class="apply-form__row">
                    <label class="contact-field">
                      <span class="apply-field__label">Email Address *</span>
                      <span class="contact-field__box"><input class="contact-field__input" type="email" name="email" autocomplete="email" placeholder="Enter your email address" required /></span>
                    </label>
                    <label class="contact-field">
                      <span class="apply-field__label">Organization Type *</span>
                      <div class="apply-select" data-apply-select>
                        <select class="apply-select__native" name="organization_type" required tabindex="-1" aria-hidden="true">
                          <option value="" disabled selected>Select organization type</option>
                          <option value="nonprofit">Nonprofit Organization</option>
                          <option value="business">Business / Company</option>
                          <option value="school">School / Educational Institution</option>
                          <option value="community">Community Group</option>
                          <option value="individual">Individual</option>
                          <option value="other">Other</option>
                        </select>
                        <button type="button" class="apply-select__trigger contact-field__box" aria-haspopup="listbox" aria-expanded="false"><span class="apply-select__value is-placeholder">Select organization type</span><svg class="apply-select__chevron" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M6 9l6 6 6-6" /></svg></button>
                        <ul class="apply-select__menu" role="listbox" hidden></ul>
                      </div>
                    </label>
                  </div>
                  <div class="apply-form__row">
                    <label class="contact-field">
                      <span class="apply-field__label">City / Area *</span>
                      <span class="contact-field__box"><input class="contact-field__input" type="text" name="city_area" autocomplete="address-level2" placeholder="Enter your city or area" required /></span>
                    </label>
                    <label class="contact-field">
                      <span class="apply-field__label">Best Way to Reach You *</span>
                      <div class="apply-select" data-apply-select>
                        <select class="apply-select__native" name="best_contact" required tabindex="-1" aria-hidden="true">
                          <option value="" disabled selected>Select an option</option>
                          <option value="email">Email</option>
                          <option value="phone">Phone</option>
                          <option value="either">Either Email or Phone</option>
                        </select>
                        <button type="button" class="apply-select__trigger contact-field__box" aria-haspopup="listbox" aria-expanded="false"><span class="apply-select__value is-placeholder">Select an option</span><svg class="apply-select__chevron" viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M6 9l6 6 6-6" /></svg></button>
                        <ul class="apply-select__menu" role="listbox" hidden></ul>
                      </div>
                    </label>
                  </div>
                </div>
              </fieldset>

              <fieldset class="apply-section apply-section--about partner-section" aria-label="Partnership Interest">
                <img class="partner-section__deco-icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Partner inquery form/ChatGPT_Image_Aug_9__2026__10_13_48_AM-removebg-preview-e1786252527358.png' ); ?>" alt="" width="40" height="40" decoding="async" aria-hidden="true" />
                <div class="apply-section__head partner-section__head">
                  <span class="apply-section__badge apply-section__badge--orange">3</span>
                  <span class="apply-section__title">Partnership Interest</span>
                </div>
                <div class="apply-section__body">
                  <p class="apply-more__label">Select all that apply.</p>
                  <ul class="apply-checklist partner-interest-grid">
                    <li><label class="apply-check"><input type="checkbox" name="partnership_interest[]" value="sponsor" /><span>Sponsor a Project</span></label></li>
                    <li><label class="apply-check"><input type="checkbox" name="partnership_interest[]" value="supplies" /><span>Donate Supplies or Materials</span></label></li>
                    <li><label class="apply-check"><input type="checkbox" name="partnership_interest[]" value="workshop" /><span>Offer a Workshop or Skill</span></label></li>
                    <li><label class="apply-check"><input type="checkbox" name="partnership_interest[]" value="space" /><span>Provide Space or Venue</span></label></li>
                    <li><label class="apply-check"><input type="checkbox" name="partnership_interest[]" value="event" /><span>Support an Event or Market</span></label></li>
                    <li><label class="apply-check"><input type="checkbox" name="partnership_interest[]" value="group-volunteer" /><span>Volunteer as a Group</span></label></li>
                    <li><label class="apply-check"><input type="checkbox" name="partnership_interest[]" value="business" /><span>Business Collaboration</span></label></li>
                    <li><label class="apply-check"><input type="checkbox" name="partnership_interest[]" value="community" /><span>Community Partnership</span></label></li>
                    <li><label class="apply-check"><input type="checkbox" name="partnership_interest[]" value="other" /><span>Other</span></label></li>
                  </ul>
                </div>
              </fieldset>

              <fieldset class="apply-section apply-section--parent partner-section" aria-label="Tell Us About Your Idea">
                <img class="partner-section__deco-icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Partner inquery form/8d793268-6fcb-4896-b468-98eaf633c9e3__1_-removebg-preview-e1786253242766-removebg-preview.png' ); ?>" alt="" width="40" height="40" decoding="async" aria-hidden="true" />
                <div class="apply-section__head partner-section__head">
                  <span class="apply-section__badge apply-section__badge--pink">4</span>
                  <span class="apply-section__title">Tell Us About Your Idea</span>
                </div>
                <div class="apply-section__body">
                  <label class="contact-field">
                    <span class="apply-field__label">Why are you interested in partnering with Bright Dreamers? *</span>
                    <span class="contact-field__box contact-field__box--area"><textarea class="contact-field__input contact-field__textarea" name="why_partner" rows="4" placeholder="Share what inspires you and what you hope to contribute." required></textarea></span>
                  </label>
                  <label class="contact-field">
                    <span class="apply-field__label">What kind of opportunity, project, or support would you like to offer? *</span>
                    <span class="contact-field__box contact-field__box--area"><textarea class="contact-field__input contact-field__textarea" name="opportunity_offer" rows="4" placeholder="Describe your idea, offering, or support in a few sentences." required></textarea></span>
                  </label>
                  <label class="contact-field">
                    <span class="apply-field__label">Who would this help and how? *</span>
                    <span class="contact-field__box contact-field__box--area"><textarea class="contact-field__input contact-field__textarea" name="who_help" rows="4" placeholder="Tell us who would benefit and the impact you hope to make." required></textarea></span>
                  </label>
                </div>
              </fieldset>

              <fieldset class="apply-section apply-section--question partner-section partner-section--resources" aria-label="Resources You Can Offer">
                <img class="partner-section__deco-icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Partner inquery form/fd83dcce-5e29-4f24-ba61-2a9addaf1e96-removebg-preview-e1786252180908.png' ); ?>" alt="" width="40" height="40" decoding="async" aria-hidden="true" />
                <div class="apply-section__head partner-section__head">
                  <div class="partner-section__head-main">
                    <span class="apply-section__badge apply-section__badge--green">5</span>
                    <div class="partner-section__head-text">
                      <span class="apply-section__title">Resources You Can Offer</span>
                      <p class="partner-section__subtitle">Select all that apply.</p>
                    </div>
                  </div>
                </div>
                <div class="apply-section__body">
                  <div class="partner-resource-grid">
                    <label class="partner-resource-card"><input type="checkbox" name="resources[]" value="materials" /><span class="partner-resource-card__inner"><img class="partner-resource-card__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Partner inquery form/f397a743-ab8c-4d3d-87cb-d97bf5c309f8-removebg-preview.png' ); ?>" alt="" width="36" height="36" decoding="async" aria-hidden="true" /><span>Materials</span></span></label>
                    <label class="partner-resource-card"><input type="checkbox" name="resources[]" value="funding" /><span class="partner-resource-card__inner"><img class="partner-resource-card__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/create-for-cause-icon-donation.png' ); ?>" alt="" width="36" height="36" decoding="async" aria-hidden="true" /><span>Funding</span></span></label>
                    <label class="partner-resource-card"><input type="checkbox" name="resources[]" value="skills" /><span class="partner-resource-card__inner"><img class="partner-resource-card__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Partner inquery form/75df90a0-28a2-46ca-b807-55c366a43616-removebg-preview.png' ); ?>" alt="" width="36" height="36" decoding="async" aria-hidden="true" /><span>Skills / Mentorship</span></span></label>
                    <label class="partner-resource-card"><input type="checkbox" name="resources[]" value="space" /><span class="partner-resource-card__inner"><img class="partner-resource-card__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Partner inquery form/6ecb79b9-eb28-46f1-81c3-ea3f3413fffe-removebg-preview.png' ); ?>" alt="" width="36" height="36" decoding="async" aria-hidden="true" /><span>Space</span></span></label>
                    <label class="partner-resource-card"><input type="checkbox" name="resources[]" value="services" /><span class="partner-resource-card__inner"><img class="partner-resource-card__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Partner inquery form/084f3201-4453-4347-9d94-d91b8c79727f.png' ); ?>" alt="" width="36" height="36" decoding="async" aria-hidden="true" /><span>Services</span></span></label>
                    <label class="partner-resource-card"><input type="checkbox" name="resources[]" value="community" /><span class="partner-resource-card__inner"><img class="partner-resource-card__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Partner inquery form/97f4da01-f16f-4e98-9267-60d7e64423e6__1_-removebg-preview.png' ); ?>" alt="" width="36" height="36" decoding="async" aria-hidden="true" /><span>Community Connections</span></span></label>
                    <label class="partner-resource-card"><input type="checkbox" name="resources[]" value="promotion" /><span class="partner-resource-card__inner"><img class="partner-resource-card__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/volunteer-interest-marketing.png' ); ?>" alt="" width="36" height="36" decoding="async" aria-hidden="true" /><span>Promotion</span></span></label>
                    <label class="partner-resource-card"><input type="checkbox" name="resources[]" value="other" /><span class="partner-resource-card__inner"><img class="partner-resource-card__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Partner inquery form/08116992-7cf0-4e6f-b79a-55f2309cdc46-removebg-preview.png' ); ?>" alt="" width="36" height="36" decoding="async" aria-hidden="true" /><span>Other</span></span></label>
                  </div>
                  <label class="contact-field">
                    <span class="apply-field__label">Estimated timeline or availability</span>
                    <span class="contact-field__box"><input class="contact-field__input" type="text" name="timeline" placeholder="e.g., Ongoing, Next 3 months, Specific dates, etc." /></span>
                  </label>
                </div>
              </fieldset>

              <fieldset class="apply-section apply-section--idea partner-section partner-section--upload" aria-label="Optional Upload">
                <img class="partner-section__deco-icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Partner inquery form/ChatGPT Image Aug 11, 2026, 08_43_13 PM.png' ); ?>" alt="" width="40" height="40" decoding="async" aria-hidden="true" />
                <div class="apply-section__head partner-section__head">
                  <div class="partner-section__head-main">
                    <span class="apply-section__badge apply-section__badge--blue">6</span>
                    <div class="partner-section__head-text">
                      <span class="apply-section__title">Optional Upload</span>
                      <p class="partner-section__subtitle">Upload a logo, flyer, proposal, or any supporting document (optional).</p>
                    </div>
                  </div>
                </div>
                <div class="apply-section__body">
                  <label class="apply-upload apply-idea__upload">
                    <input class="apply-upload__input" type="file" name="partner_file" accept="image/jpeg,image/png,.pdf" />
                    <span class="apply-upload__box">
                      <svg class="apply-upload__cloud" viewBox="0 0 24 24" width="34" height="34" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M7 18h10a4 4 0 000-8 5 5 0 00-9.8-1.2A3.5 3.5 0 007 18z" /><path d="M12 13v5M9.5 15.5L12 13l2.5 2.5" /></svg>
                      <span class="apply-upload__text">Drag and drop a file here, or click to browse</span>
                      <span class="apply-upload__hint">PDF, JPG, PNG up to 10MB</span>
                    </span>
                  </label>
                </div>
              </fieldset>

              <fieldset class="apply-section apply-section--more partner-section partner-section--agreement" aria-label="Agreement">
                <img class="partner-section__deco-icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Partner inquery form/bb82fd16-57fa-467c-b022-eb4b24b91569-removebg-preview.png' ); ?>" alt="" width="40" height="40" decoding="async" aria-hidden="true" />
                <div class="apply-section__head partner-section__head">
                  <span class="apply-section__badge apply-section__badge--purple">7</span>
                  <span class="apply-section__title">Agreement</span>
                </div>
                <div class="apply-section__body">
                  <ul class="apply-consent-list">
                    <li><label class="apply-check apply-check--block"><input type="checkbox" name="agreement_review" required /><span>I understand Bright Dreamers reviews each inquiry carefully.</span></label></li>
                    <li><label class="apply-check apply-check--block"><input type="checkbox" name="agreement_no_guarantee" required /><span>I understand submitting this form does not guarantee an immediate partnership.</span></label></li>
                    <li><label class="apply-check apply-check--block"><input type="checkbox" name="agreement_contact" required /><span>I agree to be contacted regarding this inquiry and have read the <a href="<?php echo esc_url( bdc_page_url( 'privacy-policy.html' ) ); ?>">Privacy Policy</a>.</span></label></li>
                  </ul>
                </div>
              </fieldset>
            </form>
          </div>

          <aside class="apply-form__sidebar" aria-label="Partner inquiry help">
            <article class="apply-sidebar-card apply-sidebar-card--about partner-sidebar-card--about">
              <h2 class="apply-sidebar-card__title partner-sidebar-card__title--icon">
                <img class="partner-sidebar-title-icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Partner inquery form/ChatGPT_Image_Aug_9__2026__10_13_48_AM-removebg-preview-e1786252527358.png' ); ?>" alt="" width="32" height="32" loading="lazy" decoding="async" aria-hidden="true" />
                About Partnerships
              </h2>
              <p class="apply-sidebar-card__text">Bright Dreamers partners with organizations, businesses, and community members who share our vision.</p>
              <ul class="apply-sidebar-list partner-sidebar-list">
                <li><img class="apply-sidebar-list__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Partner inquery form/bb82fd16-57fa-467c-b022-eb4b24b91569-removebg-preview.png' ); ?>" alt="" width="28" height="28" loading="lazy" decoding="async" aria-hidden="true" /><span>We welcome creative, meaningful partnerships.</span></li>
                <li><img class="apply-sidebar-list__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Partner inquery form/fd83dcce-5e29-4f24-ba61-2a9addaf1e96-removebg-preview-e1786252180908.png' ); ?>" alt="" width="28" height="28" loading="lazy" decoding="async" aria-hidden="true" /><span>We prioritize child safety and thoughtful collaboration.</span></li>
                <li><img class="apply-sidebar-list__icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Partner inquery form/97f4da01-f16f-4e98-9267-60d7e64423e6__1_-removebg-preview.png' ); ?>" alt="" width="28" height="28" loading="lazy" decoding="async" aria-hidden="true" /><span>We look for partners who align with our values.</span></li>
              </ul>
            </article>

            <article class="apply-sidebar-card apply-sidebar-card--timeline partner-sidebar-card--next">
              <img
                class="partner-sidebar-card__plane-deco"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Partner inquery form/WhatsApp Image 2026-08-10 at 2.27.50 PM.jpeg' ); ?>"
                alt=""
                width="128"
                height="80"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
              <div class="apply-sidebar-card__head">
                <h2 class="apply-sidebar-card__title">What Happens Next?</h2>
              </div>
              <ol class="partner-next-list">
                <li><strong>We Review Your Inquiry</strong><span>Our team reads every submission carefully.</span></li>
                <li><strong>We Schedule a Conversation</strong><span>If it looks like a good fit, we reach out to learn more.</span></li>
                <li><strong>We Explore Partnership Opportunities</strong><span>Together, we discuss ways to support children and the community.</span></li>
              </ol>
            </article>

            <article class="apply-sidebar-card apply-sidebar-card--questions partner-sidebar-card--questions">
              <h2 class="apply-sidebar-card__title partner-sidebar-card__title--icon">
                <img class="partner-sidebar-title-icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Partner inquery form/74393145-3039-498d-87cb-5427fa180064-removebg-preview.png' ); ?>" alt="" width="32" height="32" loading="lazy" decoding="async" aria-hidden="true" />
                Questions?
              </h2>
              <p class="apply-sidebar-card__text">We&rsquo;re here to help! Support is available through the Contact Us form only.</p>
              <a class="btn btn--outline btn-hover apply-sidebar-card__btn partner-sidebar-questions-btn" href="<?php echo esc_url( bdc_page_url( 'contact.html' ) ); ?>">Go to Contact Us<svg class="btn__icon" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6" /></svg></a>
            </article>

            <figure class="partner-sidebar-spotlight">
              <img class="partner-sidebar-spotlight__img" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Partner inquery form/7d109b7e-f3ba-4c7a-a1d2-d1bcc0c89f1c-removebg-preview.png' ); ?>" alt="" width="320" height="220" loading="lazy" decoding="async" aria-hidden="true" />
              <figcaption class="partner-sidebar-spotlight__caption">Open doors. Bright futures. Stronger together.</figcaption>
            </figure>
          </aside>
        </div>
      </section>

      <section class="partner-footer-bar section-padding" aria-label="Submit partner inquiry">
        <div class="site-container partner-footer-bar__inner">
          <div class="partner-footer-bar__card">
            <div class="partner-footer-bar__message">
              <img
                class="partner-footer-bar__envelope"
                src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Partner inquery form/a02a1588-2649-4a87-b502-7ca80459a5f5-removebg-preview.png' ); ?>"
                alt=""
                width="150"
                height="120"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
              <p class="partner-footer-bar__text">Thank you for helping create opportunities for young ideas to grow.</p>
            </div>

            <div class="partner-footer-bar__divider" aria-hidden="true"></div>

            <div class="partner-footer-bar__action">
              <button class="btn btn--solid btn-hover partner-footer-bar__btn" type="submit" form="partner-inquiry-form">
                <img
                  class="partner-footer-bar__plane"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Partner inquery form/ChatGPT Image Aug 11, 2026, 08_30_03 PM.png' ); ?>"
                  alt=""
                  width="24"
                  height="24"
                  loading="lazy"
                  decoding="async"
                  aria-hidden="true"
                />
                Submit Inquiry
              </button>

              <div class="partner-footer-bar__deco" aria-hidden="true">
                <svg class="partner-footer-bar__trail" viewBox="0 0 120 48" width="120" height="48" fill="none" aria-hidden="true">
                  <path d="M8 34C28 10 52 8 78 18" stroke="rgba(238, 29, 120, 0.35)" stroke-width="2" stroke-dasharray="5 5" stroke-linecap="round" />
                </svg>
                <img
                  class="partner-footer-bar__deco-heart"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Partner inquery form/bb82fd16-57fa-467c-b022-eb4b24b91569-removebg-preview.png' ); ?>"
                  alt=""
                  width="34"
                  height="34"
                  loading="lazy"
                  decoding="async"
                />
                <img
                  class="partner-footer-bar__deco-star"
                  src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Partner inquery form/ChatGPT_Image_Aug_9__2026__10_13_48_AM-removebg-preview-e1786252527358.png' ); ?>"
                  alt=""
                  width="34"
                  height="34"
                  loading="lazy"
                  decoding="async"
                />
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
