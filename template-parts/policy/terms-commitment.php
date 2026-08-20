<?php
/**
 * Terms page — commitment card section.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
      <section class="terms-commitment section-padding" aria-label="<?php echo esc_attr( $terms_commitment_aria_label ); ?>">
        <div class="site-container">
          <div class="terms-commitment__card">
            <div class="terms-commitment__inner">
              <img
                class="terms-commitment__icon"
                src="<?php echo esc_url( $terms_commitment_icon_url ); ?>"
                alt=""
                width="72"
                height="72"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />

              <div class="terms-commitment__copy">
                <h2 class="terms-commitment__title"><?php echo esc_html( $terms_commitment_title ); ?></h2>
                <p class="terms-commitment__text">
                  <?php echo esc_html( $terms_commitment_text ); ?>
                </p>
              </div>

              <img
                class="terms-commitment__deco"
                src="<?php echo esc_url( $terms_commitment_deco_url ); ?>"
                alt=""
                width="240"
                height="90"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
            </div>
          </div>
        </div>
      </section>
