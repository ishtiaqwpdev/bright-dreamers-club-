<?php
/**
 * Financial Transparency page — support grid section.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
      <section class="financial-support section-padding" aria-label="<?php echo esc_attr( $financial_transparency_support_aria_label ); ?>">
        <div class="site-container financial-support__inner">
          <h2 class="financial-support__title"><?php echo esc_html( $financial_transparency_support_title ); ?></h2>

          <div class="financial-support-grid">
            <?php foreach ( $financial_transparency_support_items as $support_item ) : ?>
            <article class="financial-support-card">
              <img
                class="financial-support-card__icon"
                src="<?php echo esc_url( $support_item['icon'] ); ?>"
                alt=""
                width="56"
                height="56"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
              <h3 class="financial-support-card__title"><?php echo esc_html( $support_item['title'] ); ?></h3>
              <p class="financial-support-card__text">
                <?php echo esc_html( $support_item['text'] ); ?>
              </p>
            </article>
            <?php endforeach; ?>
          </div>
        </div>
      </section>
