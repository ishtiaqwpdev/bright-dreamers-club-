<?php
/**
 * Explore page — ways grid cards (ACF-driven).
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
            <div class="explore-ways__grid">
              <?php foreach ( $explore_ways_cards as $way_card ) : ?>
                <?php if ( '' === trim( $way_card['title'] ) && '' === trim( $way_card['text'] ) ) : ?>
                  <?php continue; ?>
                <?php endif; ?>
              <article class="explore-way">
                <div class="explore-way__head">
                  <span class="explore-way__icon-wrap<?php echo ! empty( $way_card['icon_boost'] ) ? ' explore-way__icon-wrap--boost' : ''; ?>" aria-hidden="true">
                    <img
                      class="explore-way__icon"
                      src="<?php echo esc_url( $way_card['icon'] ); ?>"
                      alt=""
                      width="52"
                      height="52"
                      loading="lazy"
                      decoding="async"
                    />
                  </span>
                  <?php if ( '' !== trim( $way_card['title'] ) ) : ?>
                  <h3 class="explore-way__title"><?php echo esc_html( $way_card['title'] ); ?></h3>
                  <?php endif; ?>
                </div>
                <div class="explore-way-card card-shadow">
                  <div class="lazy-img-wrap lazy-img-wrap--cover">
                    <img
                      class="explore-way-card__photo lazy-img"
                      src="<?php echo esc_attr( $explore_hero_lazy_placeholder ); ?>"
                      data-src="<?php echo esc_url( $way_card['photo'] ); ?>"
                      alt="<?php echo esc_attr( $way_card['photo_alt'] ); ?>"
                      width="400"
                      height="300"
                      decoding="async"
                    />
                  </div>
                  <?php if ( '' !== trim( $way_card['text'] ) ) : ?>
                  <p class="explore-way-card__text">
                    <?php echo esc_html( $way_card['text'] ); ?>
                  </p>
                  <?php endif; ?>
                </div>
              </article>
              <?php endforeach; ?>
            </div>
