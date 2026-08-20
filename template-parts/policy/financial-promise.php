<?php
/**
 * Financial Transparency page — promise section.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
      <section class="financial-promise section-padding" aria-label="<?php echo esc_attr( $financial_transparency_promise_aria_label ); ?>">
        <div class="site-container">
          <div class="financial-promise__card">
            <h2 class="financial-promise__title"><?php echo esc_html( $financial_transparency_promise_title ); ?></h2>

            <div class="financial-promise-grid">
              <?php foreach ( $financial_transparency_promise_items as $promise_item ) : ?>
              <article class="financial-promise-item">
                <img
                  class="financial-promise-item__icon"
                  src="<?php echo esc_url( $promise_item['icon'] ); ?>"
                  alt=""
                  width="48"
                  height="48"
                  loading="lazy"
                  decoding="async"
                  aria-hidden="true"
                />
                <h3 class="financial-promise-item__title"><?php echo esc_html( $promise_item['title'] ); ?></h3>
                <p class="financial-promise-item__text">
                  <?php echo esc_html( $promise_item['text'] ); ?>
                </p>
              </article>
              <?php endforeach; ?>
            </div>

            <p class="financial-promise__footer">
              <?php echo esc_html( $financial_transparency_promise_footer_text ); ?>
              <img
                class="financial-promise__footer-heart"
                src="<?php echo esc_url( $financial_transparency_promise_footer_heart_url ); ?>"
                alt=""
                width="20"
                height="20"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
            </p>
          </div>
        </div>
      </section>
