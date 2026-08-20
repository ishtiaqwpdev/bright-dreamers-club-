<?php
/**
 * Terms page — sections grid.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
      <section class="terms-sections section-padding" aria-label="<?php echo esc_attr( $terms_sections_aria_label ); ?>">
        <div class="site-container">
          <div class="terms-sections-grid">
            <?php foreach ( $terms_sections as $terms_section ) : ?>
            <article class="terms-section-card">
              <img
                class="terms-section-card__icon"
                src="<?php echo esc_url( $terms_section['icon'] ); ?>"
                alt=""
                width="48"
                height="48"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
              <h2 class="terms-section-card__title"><?php echo esc_html( $terms_section['title'] ); ?></h2>
              <?php echo wp_kses_post( $terms_section['section_body'] ); ?>
            </article>
            <?php endforeach; ?>
          </div>
        </div>
      </section>
