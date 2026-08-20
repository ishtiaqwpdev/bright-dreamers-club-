<?php
/**
 * Accessibility page — provide grid section.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
      <section class="accessibility-provide section-padding" aria-label="<?php echo esc_attr( $accessibility_provide_aria_label ); ?>">
        <div class="site-container accessibility-provide__inner">
          <h2 class="accessibility-provide__title"><?php echo esc_html( $accessibility_provide_title ); ?></h2>

          <div class="accessibility-provide-grid">
            <?php foreach ( $accessibility_provide_items as $provide_item ) : ?>
            <article class="accessibility-provide-card">
              <img
                class="accessibility-provide-card__icon"
                src="<?php echo esc_url( $provide_item['icon'] ); ?>"
                alt=""
                width="56"
                height="56"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
              <h3 class="accessibility-provide-card__title"><?php echo esc_html( $provide_item['title'] ); ?></h3>
              <p class="accessibility-provide-card__text">
                <?php echo esc_html( $provide_item['text'] ); ?>
              </p>
            </article>
            <?php endforeach; ?>
          </div>
        </div>
      </section>
