<?php
/**
 * Community Adventures page — explore activities grid (ACF-driven).
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
          <div class="creative-makers-explore__grid">
            <?php foreach ( $community_adventures_explore_activities as $activity ) : ?>
              <?php if ( '' === trim( $activity['title'] ) ) : ?>
                <?php continue; ?>
              <?php endif; ?>
            <article class="creative-makers-activity creative-makers-activity--<?php echo esc_attr( $activity['color_slug'] ); ?>">
              <img
                class="creative-makers-activity__icon"
                src="<?php echo esc_url( $activity['icon'] ); ?>"
                alt=""
                width="68"
                height="68"
                loading="lazy"
                decoding="async"
              />
              <h3 class="creative-makers-activity__title"><?php echo esc_html( $activity['title'] ); ?></h3>
            </article>
            <?php endforeach; ?>
          </div>
