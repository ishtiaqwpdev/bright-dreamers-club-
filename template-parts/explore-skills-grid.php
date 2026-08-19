<?php
/**
 * Explore page — skills grid cards (ACF-driven).
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
            <div class="explore-skills__grid">
              <?php foreach ( $explore_skills_cards as $skill_card ) : ?>
                <?php if ( '' === trim( $skill_card['title'] ) && '' === trim( $skill_card['text'] ) ) : ?>
                  <?php continue; ?>
                <?php endif; ?>
              <article class="explore-skill">
                <img
                  class="explore-skill__icon"
                  src="<?php echo esc_url( $skill_card['icon'] ); ?>"
                  alt=""
                  width="56"
                  height="56"
                  loading="lazy"
                  decoding="async"
                />
                <?php if ( '' !== trim( $skill_card['title'] ) ) : ?>
                <h3 class="explore-skill__title"><?php echo esc_html( $skill_card['title'] ); ?></h3>
                <?php endif; ?>
                <?php if ( '' !== trim( $skill_card['text'] ) ) : ?>
                <p class="explore-skill__text">
                  <?php echo esc_html( $skill_card['text'] ); ?>
                </p>
                <?php endif; ?>
              </article>
              <?php endforeach; ?>
            </div>
