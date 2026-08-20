<?php
/**
 * Terms page — bottom banner section.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
      <section class="terms-bottom section-padding" aria-label="<?php echo esc_attr( $terms_bottom_aria_label ); ?>">
        <div class="site-container">
          <article class="terms-bottom-banner">
            <div class="terms-bottom-banner__questions">
              <img
                class="terms-bottom-banner__questions-icon"
                src="<?php echo esc_url( $terms_bottom_questions_icon_url ); ?>"
                alt=""
                width="56"
                height="56"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
              <div class="terms-bottom-banner__questions-copy">
                <h2 class="terms-bottom-banner__title"><?php echo esc_html( $terms_bottom_title ); ?></h2>
                <p class="terms-bottom-banner__text">
                  <?php echo esc_html( $terms_bottom_text ); ?>
                </p>
              </div>
            </div>

            <a class="terms-bottom-banner__cta" href="<?php echo esc_url( $terms_bottom_cta_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $terms_bottom_cta_link ); ?>>
              <img
                class="terms-bottom-banner__cta-icon"
                src="<?php echo esc_url( $terms_bottom_cta_icon_url ); ?>"
                alt=""
                width="24"
                height="24"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
              <span class="terms-bottom-banner__cta-copy">
                <strong class="terms-bottom-banner__cta-title"><?php echo esc_html( $terms_bottom_cta_title ); ?></strong>
                <span class="terms-bottom-banner__cta-text"><?php echo esc_html( $terms_bottom_cta_text ); ?></span>
              </span>
              <span class="terms-bottom-banner__cta-arrow" aria-hidden="true">&rarr;</span>
            </a>

            <img
              class="terms-bottom-banner__deco"
              src="<?php echo esc_url( $terms_bottom_deco_url ); ?>"
              alt=""
              width="88"
              height="88"
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />
          </article>
        </div>
      </section>
