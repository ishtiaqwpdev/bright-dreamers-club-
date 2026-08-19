<?php
/**
 * Get Involved page — ways grid cards (ACF-driven).
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
            <div class="get-involved-ways__grid">
              <?php foreach ( $get_involved_ways_cards as $ways_card ) : ?>
                <?php if ( '' === trim( $ways_card['title'] ) && '' === trim( $ways_card['text'] ) ) : ?>
                  <?php continue; ?>
                <?php endif; ?>
              <article class="get-involved-ways-card">
                <img
                  class="get-involved-ways-card__icon"
                  src="<?php echo esc_url( $ways_card['icon'] ); ?>"
                  alt=""
                  width="84"
                  height="84"
                  loading="lazy"
                  decoding="async"
                />
                <?php if ( '' !== trim( $ways_card['title'] ) ) : ?>
                <h3 class="get-involved-ways-card__title"><?php echo esc_html( $ways_card['title'] ); ?></h3>
                <?php endif; ?>
                <?php if ( '' !== trim( $ways_card['text'] ) ) : ?>
                <p class="get-involved-ways-card__text">
                  <?php echo esc_html( $ways_card['text'] ); ?>
                </p>
                <?php endif; ?>
                <?php if ( ! empty( $ways_card['link']['url'] ) && '' !== trim( $ways_card['link_text'] ) ) : ?>
                <a class="get-involved-ways-card__link" href="<?php echo esc_url( $ways_card['link']['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $ways_card['link'] ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
                  <?php echo esc_html( $ways_card['link_text'] ); ?>
                  <span aria-hidden="true">&rarr;</span>
                </a>
                <?php endif; ?>
              </article>
              <?php endforeach; ?>
            </div>
