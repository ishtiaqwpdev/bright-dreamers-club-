<?php
/**
 * Our Vision — pillar cards grid (ACF-driven).
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
            <?php foreach ( $vision_pillars_cards as $card ) : ?>
              <?php
              if ( '' === trim( $card['title'] ) && '' === trim( $card['description'] ) ) {
                continue;
              }

              $style_slug   = $card['style_slug'];
              $icon_classes = 'vision-pillar-card__icon';

              if ( 'green' === $style_slug ) {
                $icon_classes .= ' vision-pillar-card__icon--purpose';
              }
              ?>
            <article class="vision-pillar-card vision-pillar-card--<?php echo esc_attr( $style_slug ); ?>">
              <img
                class="<?php echo esc_attr( $icon_classes ); ?>"
                src="<?php echo esc_url( $card['icon'] ); ?>"
                alt=""
                width="72"
                height="72"
                loading="lazy"
                decoding="async"
              />
              <?php if ( '' !== trim( $card['title'] ) ) : ?>
              <h3 class="vision-pillar-card__title"><?php echo esc_html( $card['title'] ); ?></h3>
              <?php endif; ?>
              <?php if ( '' !== trim( $card['description'] ) ) : ?>
              <p class="vision-pillar-card__text">
                <?php echo esc_html( $card['description'] ); ?>
              </p>
              <?php endif; ?>
              <?php if ( 'pink' === $style_slug ) : ?>
              <img
                class="vision-pillar-card__deco vision-pillar-card__deco--heart-bl"
                src="<?php echo esc_url( $vision_pillars_deco_heart ); ?>"
                alt=""
                width="40"
                height="40"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
              <svg
                class="vision-pillar-card__deco vision-pillar-card__deco--star-br"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.6"
                stroke-linejoin="round"
                aria-hidden="true"
              >
                <path
                  d="M12 2.8l2.55 5.35 5.85.7-4.35 3.95 1.2 5.75L12 15.7l-5.25 2.85 1.2-5.75-4.35-3.95 5.85-.7L12 2.8z"
                />
              </svg>
              <?php elseif ( 'purple' === $style_slug ) : ?>
              <img
                class="vision-pillar-card__deco vision-pillar-card__deco--heart-br vision-pillar-card__deco--offset-up"
                src="<?php echo esc_url( $vision_pillars_deco_heart ); ?>"
                alt=""
                width="40"
                height="40"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
              <img
                class="vision-pillar-card__deco vision-pillar-card__deco--heart-br"
                src="<?php echo esc_url( $vision_pillars_deco_heart ); ?>"
                alt=""
                width="40"
                height="40"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
              <?php elseif ( 'green' === $style_slug ) : ?>
              <img
                class="vision-pillar-card__deco vision-pillar-card__deco--leaf-br vision-pillar-card__deco--offset-up"
                src="<?php echo esc_url( $vision_pillars_deco_leaf ); ?>"
                alt=""
                width="40"
                height="40"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
              <img
                class="vision-pillar-card__deco vision-pillar-card__deco--leaf-br"
                src="<?php echo esc_url( $vision_pillars_deco_leaf ); ?>"
                alt=""
                width="40"
                height="40"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
              <?php elseif ( 'orange' === $style_slug ) : ?>
              <svg
                class="vision-pillar-card__deco vision-pillar-card__deco--star-tr"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.6"
                stroke-linejoin="round"
                aria-hidden="true"
              >
                <path
                  d="M12 2.8l2.55 5.35 5.85.7-4.35 3.95 1.2 5.75L12 15.7l-5.25 2.85 1.2-5.75-4.35-3.95 5.85-.7L12 2.8z"
                />
              </svg>
              <img
                class="vision-pillar-card__deco vision-pillar-card__deco--heart-br"
                src="<?php echo esc_url( $vision_pillars_deco_heart ); ?>"
                alt=""
                width="40"
                height="40"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
              <?php endif; ?>
            </article>
            <?php endforeach; ?>
