<?php
/**
 * Partners page — ways to partner grid cards (ACF-driven).
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
          <div class="partners-ways__grid">
            <?php foreach ( $partners_ways_cards as $ways_card ) : ?>
              <?php if ( '' === trim( $ways_card['title'] ) && '' === trim( $ways_card['text'] ) ) : ?>
                <?php continue; ?>
              <?php endif; ?>
            <article class="partners-ways-card partners-ways-card--<?php echo esc_attr( $ways_card['color_slug'] ); ?>">
              <img
                class="partners-ways-card__icon"
                src="<?php echo esc_url( $ways_card['icon'] ); ?>"
                alt=""
                width="84"
                height="84"
                loading="lazy"
                decoding="async"
              />
              <?php if ( '' !== trim( $ways_card['title'] ) ) : ?>
              <h3 class="partners-ways-card__title"><?php echo esc_html( $ways_card['title'] ); ?></h3>
              <?php endif; ?>
              <?php if ( '' !== trim( $ways_card['text'] ) ) : ?>
              <p class="partners-ways-card__text">
                <?php echo esc_html( $ways_card['text'] ); ?>
              </p>
              <?php endif; ?>
            </article>
            <?php endforeach; ?>
          </div>
