<?php
/**
 * Partners page — founding partners grid cards (ACF-driven).
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
          <div class="partners-founding__grid">
            <?php foreach ( $partners_founding_cards as $founding_card ) : ?>
              <?php if ( '' === trim( $founding_card['title'] ) && '' === trim( $founding_card['text'] ) ) : ?>
                <?php continue; ?>
              <?php endif; ?>
            <article class="partners-founding-card partners-founding-card--<?php echo esc_attr( $founding_card['color_slug'] ); ?>">
              <img
                class="partners-founding-card__icon"
                src="<?php echo esc_url( $founding_card['icon'] ); ?>"
                alt=""
                width="84"
                height="84"
                loading="lazy"
                decoding="async"
              />
              <?php if ( '' !== trim( $founding_card['title'] ) ) : ?>
              <h3 class="partners-founding-card__title"><?php echo esc_html( $founding_card['title'] ); ?></h3>
              <?php endif; ?>
              <?php if ( '' !== trim( $founding_card['text'] ) ) : ?>
              <p class="partners-founding-card__text">
                <?php echo esc_html( $founding_card['text'] ); ?>
              </p>
              <?php endif; ?>
            </article>
            <?php endforeach; ?>
          </div>
