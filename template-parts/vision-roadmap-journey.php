<?php
/**
 * Our Vision — journey steps row (ACF-driven).
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$vision_journey_step_keys = array_keys( $vision_roadmap_journey_steps );
$vision_journey_last_key  = end( $vision_journey_step_keys );
$vision_journey_step_num  = 0;
?>
            <div class="vision-journey-steps" role="list" aria-labelledby="vision-journey-title">
              <?php foreach ( $vision_roadmap_journey_steps as $step_key => $step ) : ?>
                <?php $vision_journey_step_num++; ?>
              <div class="vision-journey-step vision-journey-step--<?php echo esc_attr( $step['style_slug'] ); ?>" role="listitem">
                <div class="vision-journey-step__icon-wrap">
                  <img
                    class="vision-journey-step__icon"
                    src="<?php echo esc_url( $step['icon'] ); ?>"
                    alt=""
                    width="68"
                    height="68"
                    loading="lazy"
                    decoding="async"
                  />
                  <span class="vision-journey-step__num"><?php echo esc_html( (string) $vision_journey_step_num ); ?></span>
                </div>
                <?php if ( '' !== trim( $step['title'] ) ) : ?>
                <p class="vision-journey-step__title"><?php echo esc_html( $step['title'] ); ?></p>
                <?php endif; ?>
                <?php if ( '' !== trim( $step['quote'] ) ) : ?>
                <p class="vision-journey-step__quote"><?php echo esc_html( $step['quote'] ); ?></p>
                <?php endif; ?>
                <?php if ( '' !== trim( $step['text'] ) ) : ?>
                <p class="vision-journey-step__text">
                  <?php echo esc_html( $step['text'] ); ?>
                </p>
                <?php endif; ?>
              </div>
                <?php if ( $step_key !== $vision_journey_last_key ) : ?>
              <img
                class="vision-journey-step__arrow"
                src="<?php echo esc_url( $vision_roadmap_arrow_url ); ?>"
                alt=""
                width="32"
                height="16"
                loading="lazy"
                decoding="async"
              />
                <?php endif; ?>
              <?php endforeach; ?>
            </div>
