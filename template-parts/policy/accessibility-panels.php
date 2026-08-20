<?php
/**
 * Accessibility page — panels section (purple / pink / yellow variants).
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
      <section class="accessibility-panels section-padding" aria-label="<?php echo esc_attr( $accessibility_panels_aria_label ); ?>">
        <div class="site-container accessibility-panels__inner">
          <?php foreach ( $accessibility_panels as $accessibility_panel ) : ?>
          <article class="accessibility-panel accessibility-panel--<?php echo esc_attr( $accessibility_panel['panel_slug'] ); ?>">
            <img
              class="accessibility-panel__icon"
              src="<?php echo esc_url( $accessibility_panel['icon'] ); ?>"
              alt=""
              width="64"
              height="64"
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />
            <div class="accessibility-panel__copy">
              <h2 class="accessibility-panel__title"><?php echo esc_html( $accessibility_panel['title'] ); ?></h2>
              <?php echo wp_kses_post( $accessibility_panel['section_body'] ); ?>
            </div>
            <?php if ( 'purple' === $accessibility_panel['panel_slug'] && ! empty( $accessibility_panel['deco_url'] ) ) : ?>
            <img
              class="accessibility-panel__deco accessibility-panel__deco--heart"
              src="<?php echo esc_url( $accessibility_panel['deco_url'] ); ?>"
              alt=""
              width="72"
              height="72"
              loading="lazy"
              decoding="async"
              aria-hidden="true"
            />
            <?php elseif ( 'pink' === $accessibility_panel['panel_slug'] && ! empty( $accessibility_panel['aside_body'] ) ) : ?>
            <div class="accessibility-panel__aside">
              <?php echo wp_kses_post( $accessibility_panel['aside_body'] ); ?>
            </div>
            <?php elseif ( 'yellow' === $accessibility_panel['panel_slug'] && ! empty( $accessibility_panel['panel_link']['url'] ) ) : ?>
            <a
              class="accessibility-panel__link"
              href="<?php echo esc_url( $accessibility_panel['panel_link']['url'] ); ?>"
              <?php echo bdc_acf_link_target_attr( $accessibility_panel['panel_link'] ); ?>
              rel="noopener noreferrer"
            >
              <?php echo esc_html( $accessibility_panel['panel_link']['title'] ); ?>
              <span class="accessibility-panel__link-arrow" aria-hidden="true">&rarr;</span>
            </a>
            <?php endif; ?>
          </article>
          <?php endforeach; ?>
        </div>
      </section>
