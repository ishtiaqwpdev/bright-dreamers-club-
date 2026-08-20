<?php
/**
 * Terms page — hero section.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
      <section class="page-hero terms-hero" aria-label="<?php echo esc_attr( $terms_hero_aria_label ); ?>">
        <div class="site-container terms-hero__inner page-hero__inner">
          <div class="page-hero__content terms-hero__content">
            <h1 class="terms-hero__title">
              <?php echo esc_html( $terms_hero_title ); ?>
              <img
                class="terms-hero__heart"
                src="<?php echo esc_url( $terms_hero_heart_url ); ?>"
                alt=""
                width="28"
                height="28"
                decoding="async"
                aria-hidden="true"
              />
            </h1>

            <p class="terms-hero__text">
              <?php echo esc_html( $terms_hero_text ); ?>
            </p>

            <p class="terms-hero__updated">
              <img
                class="terms-hero__updated-icon"
                src="<?php echo esc_url( $terms_hero_updated_icon_url ); ?>"
                alt=""
                width="22"
                height="22"
                decoding="async"
                aria-hidden="true"
              />
              <span><?php echo esc_html( $terms_hero_updated_text ); ?></span>
            </p>
          </div>

          <div class="about-hero__media terms-hero__media">
            <div class="lazy-img-wrap">
              <img
                class="about-hero__banner terms-hero__banner lazy-img"
                src="<?php echo esc_attr( $terms_hero_lazy_placeholder ); ?>"
                data-src="<?php echo esc_url( $terms_hero_banner_url ); ?>"
                alt="<?php echo esc_attr( $terms_hero_banner_alt ); ?>"
                width="1200"
                height="900"
                decoding="async"
              />
            </div>
          </div>
        </div>
      </section>
