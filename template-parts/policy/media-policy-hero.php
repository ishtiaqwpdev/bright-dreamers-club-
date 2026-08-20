<?php
/**
 * Shared hero for media-policy layout pages (privacy, photo-media).
 *
 * Expects: $hero_section_class, $hero_aria_label, $hero_show_breadcrumbs,
 * $hero_breadcrumb_home_link, $hero_breadcrumb_home_text, $hero_breadcrumb_parent_link,
 * $hero_breadcrumb_parent_text, $hero_breadcrumb_current_text, $hero_title, $hero_heart_url,
 * $hero_text, $hero_text_second, $hero_text_second_class, $hero_banner_url, $hero_banner_alt,
 * $hero_lazy_placeholder.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
      <section class="<?php echo esc_attr( $hero_section_class ); ?>" aria-label="<?php echo esc_attr( $hero_aria_label ); ?>">
        <div class="site-container media-policy-hero__inner page-hero__inner">
          <div class="page-hero__content media-policy-hero__content">
            <?php if ( ! empty( $hero_show_breadcrumbs ) ) : ?>
            <nav class="creative-makers-breadcrumbs media-policy-breadcrumbs" aria-label="Breadcrumb">
              <ol class="creative-makers-breadcrumbs__list">
                <li><a href="<?php echo esc_url( $hero_breadcrumb_home_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $hero_breadcrumb_home_link ); ?>><?php echo esc_html( $hero_breadcrumb_home_text ); ?></a></li>
                <li><a href="<?php echo esc_url( $hero_breadcrumb_parent_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $hero_breadcrumb_parent_link ); ?>><?php echo esc_html( $hero_breadcrumb_parent_text ); ?></a></li>
                <li aria-current="page"><?php echo esc_html( $hero_breadcrumb_current_text ); ?></li>
              </ol>
            </nav>
            <?php endif; ?>

            <h1 class="media-policy-hero__title">
              <?php echo esc_html( $hero_title ); ?>
              <img
                class="media-policy-hero__heart"
                src="<?php echo esc_url( $hero_heart_url ); ?>"
                alt=""
                width="28"
                height="28"
                decoding="async"
                aria-hidden="true"
              />
            </h1>

            <p class="media-policy-hero__text">
              <?php echo esc_html( $hero_text ); ?>
            </p>
            <?php if ( '' !== trim( $hero_text_second ) ) : ?>
            <p class="media-policy-hero__text <?php echo esc_attr( $hero_text_second_class ); ?>">
              <?php echo esc_html( $hero_text_second ); ?>
            </p>
            <?php endif; ?>
          </div>

          <div class="about-hero__media media-policy-hero__media">
            <div class="lazy-img-wrap">
              <img
                class="about-hero__banner media-policy-hero__banner lazy-img"
                src="<?php echo esc_attr( $hero_lazy_placeholder ); ?>"
                data-src="<?php echo esc_url( $hero_banner_url ); ?>"
                alt="<?php echo esc_attr( $hero_banner_alt ); ?>"
                width="1200"
                height="900"
                decoding="async"
              />
            </div>
          </div>
        </div>
      </section>
