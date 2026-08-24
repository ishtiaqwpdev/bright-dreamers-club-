<?php
/**
 * FAQ page template — converted from faq.html.
 *
 * Template Name: FAQ
 *
 * @package Bright_Dreamers_Club
 */

get_header();

$faq_page_id    = get_queried_object_id();
$faq_asset_base = 'assets/images/faq/';
$faq_lazy_placeholder = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';

$faq_hero_aria_label = bdc_get_acf_text( 'faq_hero_aria_label', 'Frequently Asked Questions', $faq_page_id );
$faq_hero_eyebrow    = bdc_get_acf_text( 'faq_hero_eyebrow', 'FAQ', $faq_page_id );
$faq_hero_heart_url  = bdc_get_acf_image_url(
	'faq_hero_heart',
	bdc_theme_asset_url( $faq_asset_base . '7af0e916-3b9b-47fe-9a8f-24aa0a8d0005-removebg-preview.png' ),
	$faq_page_id
);
$faq_hero_title_navy = bdc_get_acf_text( 'faq_hero_title_navy', 'Frequently Asked', $faq_page_id );
$faq_hero_title_pink = bdc_get_acf_text( 'faq_hero_title_pink', 'Questions', $faq_page_id );
$faq_hero_text       = bdc_get_acf_text(
	'faq_hero_text',
	'Find answers to common questions about Bright Dreamers and how we support children to dream, create, and grow.',
	$faq_page_id
);
$faq_hero_banner_url = bdc_get_acf_image_url(
	'faq_hero_banner',
	bdc_theme_asset_url( $faq_asset_base . '78f5df94-6504-44c0-a7a4-28a535e9b0d2.png' ),
	$faq_page_id
);
$faq_hero_banner_alt = bdc_get_acf_text(
	'faq_hero_banner_alt',
	'Three children smiling while reading a book together',
	$faq_page_id
);

$faq_search_aria_label = bdc_get_acf_text( 'faq_search_aria_label', 'Search FAQ', $faq_page_id );
$faq_search_intro      = bdc_get_acf_text( 'faq_search_intro', 'Have a question? Search below or browse by topic.', $faq_page_id );
$faq_search_icon_url   = bdc_get_acf_image_url(
	'faq_search_icon',
	bdc_theme_asset_url( $faq_asset_base . 'f51d4c98-7edf-4542-bca5-052679d27864-removebg-preview.png' ),
	$faq_page_id
);
$faq_search_placeholder = bdc_get_acf_text( 'faq_search_placeholder', 'Search for answers...', $faq_page_id );

$faq_topics_aria_label = bdc_get_acf_text( 'faq_topics_aria_label', 'Browse by topic', $faq_page_id );
$faq_topics_title      = bdc_get_acf_text( 'faq_topics_title', 'Browse by Topic', $faq_page_id );
$faq_topics            = bdc_get_faq_resolved_topics( $faq_page_id );

$faq_sidebar_card_heart_url = bdc_get_acf_image_url(
	'faq_sidebar_card_heart',
	bdc_theme_asset_url( $faq_asset_base . '66d25676-c9e3-488b-a47e-d84290173765-removebg-preview.png' ),
	$faq_page_id
);
$faq_sidebar_card_title = bdc_get_acf_text( 'faq_sidebar_card_title', 'Still have questions?', $faq_page_id );
$faq_sidebar_card_text  = bdc_get_acf_text(
	'faq_sidebar_card_text',
	'We\'re here to help! Reach out to our team and we\'ll get back to you soon.',
	$faq_page_id
);
$faq_sidebar_card_link = bdc_get_acf_link(
	'faq_sidebar_card_link',
	array(
		'title'  => 'Contact Us',
		'url'    => bdc_page_url( 'contact.html' ),
		'target' => '',
	),
	$faq_page_id
);
$faq_sidebar_card_btn_heart_url = bdc_get_acf_image_url(
	'faq_sidebar_card_btn_heart',
	bdc_theme_asset_url( $faq_asset_base . '7af0e916-3b9b-47fe-9a8f-24aa0a8d0005-removebg-preview.png' ),
	$faq_page_id
);

$faq_main_aria_label = bdc_get_acf_text( 'faq_main_aria_label', 'FAQ topics and answers', $faq_page_id );
$faq_toggle_icon_url = bdc_get_acf_image_url(
	'faq_toggle_icon',
	bdc_theme_asset_url( $faq_asset_base . '2c9127ae-db9f-4e11-a389-86f17a5c9a54-removebg-preview.png' ),
	$faq_page_id
);
$faq_empty_text = bdc_get_acf_text(
	'faq_empty_text',
	'No matching questions found. Try another search or topic.',
	$faq_page_id
);
$faq_items = bdc_get_faq_resolved_items( $faq_page_id );

$faq_cta_aria_label = bdc_get_acf_text( 'faq_cta_aria_label', 'Contact us for help', $faq_page_id );
$faq_cta_envelope_url = bdc_get_acf_image_url(
	'faq_cta_envelope',
	bdc_theme_asset_url( $faq_asset_base . '50f46071-ef86-4d6e-915c-1d446e83586d-removebg-preview.png' ),
	$faq_page_id
);
$faq_cta_title = bdc_get_acf_text( 'faq_cta_title', 'Can\'t find what you\'re looking for?', $faq_page_id );
$faq_cta_text  = bdc_get_acf_text(
	'faq_cta_text',
	'We\'re happy to help! Send us a message and our team will get back to you.',
	$faq_page_id
);
$faq_cta_plane_url = bdc_get_acf_image_url(
	'faq_cta_plane',
	bdc_theme_asset_url( $faq_asset_base . '4dcc91b9-472a-4e88-9c01-e4b68e349229-removebg-preview.png' ),
	$faq_page_id
);
$faq_cta_link = bdc_get_acf_link(
	'faq_cta_link',
	array(
		'title'  => 'Contact Us',
		'url'    => bdc_page_url( 'contact.html' ),
		'target' => '',
	),
	$faq_page_id
);
$faq_cta_heart_url = bdc_get_acf_image_url(
	'faq_cta_heart',
	bdc_theme_asset_url( $faq_asset_base . '7af0e916-3b9b-47fe-9a8f-24aa0a8d0005-removebg-preview.png' ),
	$faq_page_id
);
?>
    <main id="main-content">
      <?php
      get_template_part(
        'template-parts/page-hero',
        null,
        array(
          'section_class'   => 'faq-hero about-hero',
          'aria_label'      => $faq_hero_aria_label,
          'section_label'   => $faq_hero_eyebrow,
          'headline_html'   => bdc_hero_lines_html(
            array(
              array( 'text' => $faq_hero_title_navy, 'class' => 'faq-hero__title-line faq-hero__title-line--navy' ),
              array( 'text' => $faq_hero_title_pink, 'class' => 'faq-hero__title-line faq-hero__title-line--pink' ),
            )
          ),
          'supporting_copy' => $faq_hero_text,
          'hero_image'      => $faq_hero_banner_url,
          'hero_image_alt'  => $faq_hero_banner_alt,
          'media_class'     => 'about-hero__media faq-hero__media',
          'image_class'     => 'about-hero__banner faq-hero__banner',
        )
      );
      ?>

      <section class="faq-search section-padding" aria-label="<?php echo esc_attr( $faq_search_aria_label ); ?>">
        <div class="site-container faq-search__inner">
          <p class="faq-search__intro"><?php echo esc_html( $faq_search_intro ); ?></p>
          <label class="faq-search__field">
            <span class="visually-hidden">Search for answers</span>
            <img
              class="faq-search__icon"
              src="<?php echo esc_url( $faq_search_icon_url ); ?>"
              alt=""
              width="22"
              height="22"
              decoding="async"
              aria-hidden="true"
            />
            <input
              class="faq-search__input"
              id="faq-search-input"
              type="search"
              name="faq_search"
              placeholder="<?php echo esc_attr( $faq_search_placeholder ); ?>"
              autocomplete="off"
            />
          </label>
        </div>
      </section>

      <section class="faq-main section-padding" aria-label="<?php echo esc_attr( $faq_main_aria_label ); ?>">
        <div class="site-container faq-main__inner">
          <aside class="faq-sidebar" aria-label="<?php echo esc_attr( $faq_topics_aria_label ); ?>">
            <h2 class="faq-sidebar__title"><?php echo esc_html( $faq_topics_title ); ?></h2>
            <ul class="faq-topic-list" role="tablist">
              <?php foreach ( $faq_topics as $faq_topic_index => $faq_topic ) : ?>
              <li>
                <button
                  class="faq-topic<?php echo 0 === $faq_topic_index ? ' is-active' : ''; ?>"
                  type="button"
                  data-faq-topic="<?php echo esc_attr( $faq_topic['slug'] ); ?>"
                  role="tab"
                  aria-selected="<?php echo 0 === $faq_topic_index ? 'true' : 'false'; ?>"
                >
                  <img class="faq-topic__icon" src="<?php echo esc_url( $faq_topic['icon'] ); ?>" alt="" width="28" height="28" decoding="async" aria-hidden="true" />
                  <span><?php echo esc_html( $faq_topic['label'] ); ?></span>
                </button>
              </li>
              <?php endforeach; ?>
            </ul>

            <article class="faq-sidebar-card">
              <img
                class="faq-sidebar-card__heart"
                src="<?php echo esc_url( $faq_sidebar_card_heart_url ); ?>"
                alt=""
                width="36"
                height="36"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
              <h3 class="faq-sidebar-card__title"><?php echo esc_html( $faq_sidebar_card_title ); ?></h3>
              <p class="faq-sidebar-card__text">
                <?php echo esc_html( $faq_sidebar_card_text ); ?>
              </p>
              <div class="faq-card-action">
                <a class="btn btn--solid btn-hover faq-sidebar-card__btn" href="<?php echo esc_url( $faq_sidebar_card_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $faq_sidebar_card_link ); ?>>
                  <span class="faq-card-action__label"><?php echo esc_html( $faq_sidebar_card_link['title'] ); ?></span>
                  <svg class="faq-card-action__arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6" /></svg>
                </a>
                <img
                  class="faq-card-action__heart"
                  src="<?php echo esc_url( $faq_sidebar_card_btn_heart_url ); ?>"
                  alt=""
                  width="30"
                  height="30"
                  loading="lazy"
                  decoding="async"
                  aria-hidden="true"
                />
              </div>
            </article>
          </aside>

          <div class="faq-accordion-wrap">
            <div class="faq-accordion" id="faq-accordion">
              <?php foreach ( $faq_items as $faq_item ) : ?>
              <article class="faq-item<?php echo ! empty( $faq_item['is_open'] ) ? ' is-open' : ''; ?>" data-faq-topic="<?php echo esc_attr( $faq_item['topics'] ); ?>">
                <h3 class="faq-item__heading">
                  <button class="faq-item__trigger" type="button" aria-expanded="<?php echo ! empty( $faq_item['is_open'] ) ? 'true' : 'false'; ?>">
                    <span class="faq-item__question"><?php echo esc_html( $faq_item['question'] ); ?></span>
                    <span class="faq-item__toggle" aria-hidden="true">
                      <img class="faq-item__toggle-plus" src="<?php echo esc_url( $faq_toggle_icon_url ); ?>" alt="" width="20" height="20" decoding="async" />
                      <span class="faq-item__toggle-minus"></span>
                    </span>
                  </button>
                </h3>
                <div class="faq-item__panel">
                  <div class="faq-item__answer">
                    <?php echo wp_kses_post( $faq_item['answer'] ); ?>
                  </div>
                </div>
              </article>
              <?php endforeach; ?>
            </div>

            <p class="faq-empty" id="faq-empty" hidden><?php echo esc_html( $faq_empty_text ); ?></p>
          </div>
        </div>
      </section>

      <section class="faq-contact-cta section-padding" aria-label="<?php echo esc_attr( $faq_cta_aria_label ); ?>">
        <div class="site-container">
          <div class="faq-contact-cta__card">
            <img
              class="faq-contact-cta__envelope"
              src="<?php echo esc_url( $faq_cta_envelope_url ); ?>"
              alt=""
              width="88"
              height="88"
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />

            <div class="faq-contact-cta__copy">
              <h2 class="faq-contact-cta__title"><?php echo esc_html( $faq_cta_title ); ?></h2>
              <p class="faq-contact-cta__text">
                <?php echo esc_html( $faq_cta_text ); ?>
              </p>
            </div>

            <div class="faq-contact-cta__action">
              <img
                class="faq-card-action__plane"
                src="<?php echo esc_url( $faq_cta_plane_url ); ?>"
                alt=""
                width="88"
                height="48"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
              <a class="btn btn--solid btn--lg btn-hover faq-contact-cta__btn" href="<?php echo esc_url( $faq_cta_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $faq_cta_link ); ?>>
                <span class="faq-card-action__label"><?php echo esc_html( $faq_cta_link['title'] ); ?></span>
                <svg class="faq-card-action__arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6" /></svg>
              </a>
              <img
                class="faq-card-action__heart"
                src="<?php echo esc_url( $faq_cta_heart_url ); ?>"
                alt=""
                width="36"
                height="36"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
            </div>
          </div>
        </div>
      </section>
    </main>

<?php
get_footer();
