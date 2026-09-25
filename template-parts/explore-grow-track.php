<?php
/**
 * Explore page — grow stages track (ACF-driven).
 *
 * Stage visuals are full lockup images (photo + splash + label/copy).
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$explore_grow_arrow_colors_allowed = array( 'green', 'orange', 'pink', 'blue' );
?>
            <div class="explore-grow__track" role="list">
              <?php foreach ( $explore_grow_stages as $grow_stage ) : ?>
                <?php if ( '' === trim( $grow_stage['label'] ) && '' === trim( $grow_stage['text'] ) && '' === trim( $grow_stage['quote'] ) ) : ?>
                  <?php continue; ?>
                <?php endif; ?>
              <article class="explore-grow-stage explore-grow-stage--<?php echo esc_attr( $grow_stage['style_slug'] ); ?> explore-grow-stage--lockup" role="listitem">
                <div class="explore-grow-stage__card">
                  <div class="explore-grow-stage__layout">
                    <div class="lazy-img-wrap">
                      <img
                        class="explore-grow-stage__photo lazy-img"
                        src="<?php echo esc_attr( $explore_hero_lazy_placeholder ); ?>"
                        data-src="<?php echo esc_url( $grow_stage['photo'] ); ?>"
                        alt="<?php echo esc_attr( $grow_stage['photo_alt'] ); ?>"
                        width="320"
                        height="420"
                        decoding="async"
                      />
                    </div>
                  </div>
                </div>
              </article>

                <?php if ( in_array( $grow_stage['arrow_color'], $explore_grow_arrow_colors_allowed, true ) ) : ?>
              <span class="explore-grow__arrow explore-grow__arrow--<?php echo esc_attr( $grow_stage['arrow_color'] ); ?>" aria-hidden="true">
                <svg viewBox="0 0 32 16" width="32" height="16" fill="none" aria-hidden="true">
                  <path
                    d="M0 8h22M17 3l9 5-9 5"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-dasharray="3.5 2.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </span>
                <?php endif; ?>
              <?php endforeach; ?>
            </div>
