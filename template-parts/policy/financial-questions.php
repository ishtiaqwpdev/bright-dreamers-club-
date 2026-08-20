<?php
/**
 * Financial Transparency page — questions CTA section.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
      <section class="financial-questions section-padding" aria-label="<?php echo esc_attr( $financial_transparency_questions_aria_label ); ?>">
        <div class="site-container">
          <div class="financial-questions__card">
            <img
              class="financial-questions__icon"
              src="<?php echo esc_url( $financial_transparency_questions_icon_url ); ?>"
              alt=""
              width="64"
              height="64"
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />

            <div class="financial-questions__copy">
              <h2 class="financial-questions__title"><?php echo esc_html( $financial_transparency_questions_title ); ?></h2>
              <p class="financial-questions__text">
                <?php echo esc_html( $financial_transparency_questions_text ); ?>
              </p>
            </div>

            <a class="financial-questions__cta" href="<?php echo esc_url( $financial_transparency_questions_cta_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $financial_transparency_questions_cta_link ); ?>>
              <img
                class="financial-questions__cta-icon"
                src="<?php echo esc_url( $financial_transparency_questions_cta_icon_url ); ?>"
                alt=""
                width="22"
                height="22"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
              <span class="financial-questions__cta-copy">
                <strong class="financial-questions__cta-title"><?php echo esc_html( $financial_transparency_questions_cta_title ); ?></strong>
                <span class="financial-questions__cta-text"><?php echo esc_html( $financial_transparency_questions_cta_text ); ?></span>
              </span>
              <img
                class="financial-questions__cta-arrow"
                src="<?php echo esc_url( $financial_transparency_questions_cta_arrow_url ); ?>"
                alt=""
                width="18"
                height="18"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
            </a>

            <img
              class="financial-questions__deco"
              src="<?php echo esc_url( $financial_transparency_questions_deco_url ); ?>"
              alt=""
              width="88"
              height="88"
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />
          </div>
        </div>
      </section>
