<?php
/**
 * Financial Transparency page — hero section.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
      <section class="page-hero financial-hero" aria-label="<?php echo esc_attr( $financial_transparency_hero_aria_label ); ?>">
        <div class="site-container financial-hero__inner page-hero__inner">
          <div class="page-hero__content financial-hero__content">
            <h1 class="financial-hero__title">
              <?php echo esc_html( $financial_transparency_hero_title ); ?>
              <img
                class="financial-hero__heart"
                src="<?php echo esc_url( $financial_transparency_hero_heart_url ); ?>"
                alt=""
                width="28"
                height="28"
                decoding="async"
                aria-hidden="true"
              />
            </h1>

            <p class="financial-hero__text">
              <?php echo esc_html( $financial_transparency_hero_text ); ?>
            </p>
          </div>

          <div class="about-hero__media financial-hero__media">
            <div class="lazy-img-wrap">
              <img
                class="about-hero__banner financial-hero__banner lazy-img"
                src="<?php echo esc_attr( $financial_transparency_hero_lazy_placeholder ); ?>"
                data-src="<?php echo esc_url( $financial_transparency_hero_banner_url ); ?>"
                alt="<?php echo esc_attr( $financial_transparency_hero_banner_alt ); ?>"
                width="1200"
                height="900"
                decoding="async"
              />
            </div>
          </div>
        </div>
      </section>
