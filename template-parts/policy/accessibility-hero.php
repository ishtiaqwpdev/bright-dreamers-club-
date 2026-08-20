<?php
/**
 * Accessibility page — hero section.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
      <section class="page-hero accessibility-hero" aria-label="<?php echo esc_attr( $accessibility_hero_aria_label ); ?>">
        <div class="site-container accessibility-hero__inner page-hero__inner">
          <div class="page-hero__content accessibility-hero__content">
            <nav class="creative-makers-breadcrumbs accessibility-breadcrumbs" aria-label="Breadcrumb">
              <ol class="creative-makers-breadcrumbs__list">
                <li><a href="<?php echo esc_url( $accessibility_hero_breadcrumb_home_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $accessibility_hero_breadcrumb_home_link ); ?>><?php echo esc_html( $accessibility_hero_breadcrumb_home_text ); ?></a></li>
                <li><a href="<?php echo esc_url( $accessibility_hero_breadcrumb_parent_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $accessibility_hero_breadcrumb_parent_link ); ?>><?php echo esc_html( $accessibility_hero_breadcrumb_parent_text ); ?></a></li>
                <li aria-current="page"><?php echo esc_html( $accessibility_hero_breadcrumb_current_text ); ?></li>
              </ol>
            </nav>

            <h1 class="accessibility-hero__title">
              <?php echo esc_html( $accessibility_hero_title ); ?>
              <img
                class="accessibility-hero__heart"
                src="<?php echo esc_url( $accessibility_hero_heart_url ); ?>"
                alt=""
                width="28"
                height="28"
                decoding="async"
                aria-hidden="true"
              />
            </h1>

            <p class="accessibility-hero__text">
              <?php echo esc_html( $accessibility_hero_text ); ?>
            </p>
          </div>

          <div class="about-hero__media accessibility-hero__media">
            <div class="lazy-img-wrap">
              <img
                class="about-hero__banner accessibility-hero__banner lazy-img"
                src="<?php echo esc_attr( $accessibility_hero_lazy_placeholder ); ?>"
                data-src="<?php echo esc_url( $accessibility_hero_banner_url ); ?>"
                alt="<?php echo esc_attr( $accessibility_hero_banner_alt ); ?>"
                width="1200"
                height="900"
                decoding="async"
              />
            </div>
          </div>
        </div>
      </section>
