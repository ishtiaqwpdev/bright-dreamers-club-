<?php
/**
 * Create for a Cause page — skills, growth, and impact cards (ACF-driven).
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
          <div class="creative-makers-info__grid">
            <article class="creative-makers-info-card creative-makers-info-card--skills">
              <?php if ( '' !== trim( $create_for_cause_info_skills_title ) ) : ?>
              <h2 class="creative-makers-info-card__title"><?php echo esc_html( $create_for_cause_info_skills_title ); ?></h2>
              <?php endif; ?>
              <?php if ( ! empty( $create_for_cause_info_skills_items ) ) : ?>
              <ul class="creative-makers-info-card__list">
                <?php foreach ( $create_for_cause_info_skills_items as $skills_item ) : ?>
                  <?php if ( '' === trim( $skills_item['item_text'] ) ) : ?>
                    <?php continue; ?>
                  <?php endif; ?>
                <li>
                  <span class="creative-makers-info-card__check" aria-hidden="true">
                    <svg viewBox="0 0 24 24" width="11" height="11" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 13l4 4L19 7" /></svg>
                  </span>
                  <?php echo esc_html( $skills_item['item_text'] ); ?>
                </li>
                <?php endforeach; ?>
              </ul>
              <?php endif; ?>
              <?php if ( '' !== trim( $create_for_cause_info_skills_deco_url ) ) : ?>
              <span class="creative-makers-info-card__deco-box creative-makers-info-card__deco-box--star" aria-hidden="true">
                <img
                  class="creative-makers-info-card__deco"
                  src="<?php echo esc_url( $create_for_cause_info_skills_deco_url ); ?>"
                  alt=""
                  loading="lazy"
                  decoding="async"
                />
              </span>
              <?php endif; ?>
            </article>

            <article class="creative-makers-info-card creative-makers-info-card--grow">
              <?php if ( '' !== trim( $create_for_cause_info_grow_title ) ) : ?>
              <h2 class="creative-makers-info-card__title creative-makers-info-card__title--pink">
                <?php echo esc_html( $create_for_cause_info_grow_title ); ?>
              </h2>
              <?php endif; ?>
              <?php if ( '' !== trim( $create_for_cause_info_grow_text ) ) : ?>
              <p class="creative-makers-info-card__text">
                <?php echo esc_html( $create_for_cause_info_grow_text ); ?>
              </p>
              <?php endif; ?>
              <?php if ( '' !== trim( $create_for_cause_info_grow_deco_url ) ) : ?>
              <span class="creative-makers-info-card__deco-box creative-makers-info-card__deco-box--heart" aria-hidden="true">
                <img
                  class="creative-makers-info-card__deco"
                  src="<?php echo esc_url( $create_for_cause_info_grow_deco_url ); ?>"
                  alt=""
                  loading="lazy"
                  decoding="async"
                />
              </span>
              <?php endif; ?>
            </article>

            <article class="creative-makers-info-card creative-makers-info-card--impact">
              <?php if ( '' !== trim( $create_for_cause_info_impact_title ) ) : ?>
              <h2 class="creative-makers-info-card__title"><?php echo esc_html( $create_for_cause_info_impact_title ); ?></h2>
              <?php endif; ?>
              <?php if ( '' !== trim( $create_for_cause_info_impact_text ) ) : ?>
              <p class="creative-makers-info-card__text">
                <?php echo esc_html( $create_for_cause_info_impact_text ); ?>
              </p>
              <?php endif; ?>
              <?php if ( '' !== trim( $create_for_cause_info_impact_deco_url ) ) : ?>
              <span class="creative-makers-info-card__deco-box creative-makers-info-card__deco-box--plant" aria-hidden="true">
                <img
                  class="creative-makers-info-card__deco"
                  src="<?php echo esc_url( $create_for_cause_info_impact_deco_url ); ?>"
                  alt=""
                  loading="lazy"
                  decoding="async"
                />
              </span>
              <?php endif; ?>
            </article>
          </div>
