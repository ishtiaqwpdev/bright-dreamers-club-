<?php
/**
 * For Parents page — expect cards grid (ACF-driven).
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
            <div class="for-parents-expect__grid">
              <?php foreach ( $for_parents_expect_cards as $expect_card ) : ?>
                <?php if ( '' === trim( $expect_card['title'] ) && '' === trim( $expect_card['text'] ) ) : ?>
                  <?php continue; ?>
                <?php endif; ?>
              <article class="for-parents-expect-card">
                <img
                  class="for-parents-expect-card__icon"
                  src="<?php echo esc_url( $expect_card['icon'] ); ?>"
                  alt=""
                  width="72"
                  height="72"
                  loading="lazy"
                  decoding="async"
                />
                <?php if ( '' !== trim( $expect_card['title'] ) ) : ?>
                <h3 class="for-parents-expect-card__title"><?php echo esc_html( $expect_card['title'] ); ?></h3>
                <?php endif; ?>
                <?php if ( '' !== trim( $expect_card['text'] ) ) : ?>
                <p class="for-parents-expect-card__text">
                  <?php echo esc_html( $expect_card['text'] ); ?>
                </p>
                <?php endif; ?>
              </article>
              <?php endforeach; ?>
            </div>
