<?php
/**
 * Financial Transparency page — commitment card section.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
      <section class="financial-commitment section-padding" aria-label="<?php echo esc_attr( $financial_transparency_commitment_aria_label ); ?>">
        <div class="site-container">
          <div class="financial-commitment__card">
            <div class="financial-commitment__inner">
              <img
                class="financial-commitment__icon"
                src="<?php echo esc_url( $financial_transparency_commitment_icon_url ); ?>"
                alt=""
                width="72"
                height="72"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />

              <div class="financial-commitment__copy">
                <h2 class="financial-commitment__title"><?php echo esc_html( $financial_transparency_commitment_title ); ?></h2>
                <p class="financial-commitment__text">
                  <?php echo esc_html( $financial_transparency_commitment_text ); ?>
                </p>
              </div>

              <img
                class="financial-commitment__deco"
                src="<?php echo esc_url( $financial_transparency_commitment_deco_url ); ?>"
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
