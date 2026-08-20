<?php
/**
 * Accessibility page — commitment card section.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
      <section class="accessibility-commitment section-padding" aria-label="<?php echo esc_attr( $accessibility_commitment_aria_label ); ?>">
        <div class="site-container">
          <div class="accessibility-commitment__card">
            <div class="accessibility-commitment__inner">
              <img
                class="accessibility-commitment__icon"
                src="<?php echo esc_url( $accessibility_commitment_icon_url ); ?>"
                alt=""
                width="72"
                height="72"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />

              <div class="accessibility-commitment__copy">
                <h2 class="accessibility-commitment__title"><?php echo esc_html( $accessibility_commitment_title ); ?></h2>
                <p class="accessibility-commitment__text">
                  <?php echo esc_html( $accessibility_commitment_text ); ?>
                </p>
              </div>

              <div class="accessibility-commitment__deco" aria-hidden="true">
                <div class="accessibility-commitment__stars">
                  <img
                    class="accessibility-commitment__star"
                    src="<?php echo esc_url( $accessibility_commitment_star_url ); ?>"
                    alt=""
                    width="28"
                    height="28"
                    loading="lazy"
                    decoding="async"
                  />
                  <img
                    class="accessibility-commitment__star"
                    src="<?php echo esc_url( $accessibility_commitment_star_url ); ?>"
                    alt=""
                    width="22"
                    height="22"
                    loading="lazy"
                    decoding="async"
                  />
                </div>
                <img
                  class="accessibility-commitment__quote-img"
                  src="<?php echo esc_url( $accessibility_commitment_quote_url ); ?>"
                  alt=""
                  width="220"
                  height="80"
                  loading="lazy"
                  decoding="async"
                />
              </div>
            </div>
          </div>
        </div>
      </section>
