<?php
/**
 * Creative Makers page — skills, growth, and impact cards (ACF-driven).
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
          <div class="creative-makers-info__grid">
            <article class="creative-makers-info-card creative-makers-info-card--skills">
              <?php if ( '' !== trim( $creative_makers_info_skills_title ) ) : ?>
              <h2 class="creative-makers-info-card__title"><?php echo esc_html( $creative_makers_info_skills_title ); ?></h2>
              <?php endif; ?>
              <?php if ( ! empty( $creative_makers_info_skills_items ) ) : ?>
              <ul class="creative-makers-info-card__list">
                <?php foreach ( $creative_makers_info_skills_items as $skills_item ) : ?>
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
              <?php if ( '' !== trim( $creative_makers_info_skills_deco_url ) ) : ?>
              <img
                class="creative-makers-info-card__deco creative-makers-info-card__deco--heart"
                src="<?php echo esc_url( $creative_makers_info_skills_deco_url ); ?>"
                alt=""
                width="26"
                height="26"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
              <?php endif; ?>
            </article>

            <article class="creative-makers-info-card creative-makers-info-card--grow">
              <?php if (
                '' !== trim( $creative_makers_info_grow_title_underline_word )
                || '' !== trim( $creative_makers_info_grow_title_suffix )
              ) : ?>
              <h2 class="creative-makers-info-card__title creative-makers-info-card__title--pink">
                <?php if ( '' !== trim( $creative_makers_info_grow_title_underline_word ) ) : ?>
                <span class="heading-underline">
                  <?php echo esc_html( $creative_makers_info_grow_title_underline_word ); ?>
                  <img
                    class="heading-underline__img"
                    src="<?php echo esc_url( $creative_makers_info_grow_title_underline_url ); ?>"
                    alt=""
                    width="120"
                    height="12"
                  />
                </span>
                <?php endif; ?>
                <?php if ( '' !== trim( $creative_makers_info_grow_title_suffix ) ) : ?>
                <?php echo esc_html( $creative_makers_info_grow_title_suffix ); ?>
                <?php endif; ?>
              </h2>
              <?php endif; ?>
              <?php if ( '' !== trim( $creative_makers_info_grow_text ) ) : ?>
              <p class="creative-makers-info-card__text">
                <?php echo esc_html( $creative_makers_info_grow_text ); ?>
              </p>
              <?php endif; ?>
              <?php if ( '' !== trim( $creative_makers_info_grow_deco_url ) ) : ?>
              <img
                class="creative-makers-info-card__deco creative-makers-info-card__deco--star"
                src="<?php echo esc_url( $creative_makers_info_grow_deco_url ); ?>"
                alt=""
                width="26"
                height="26"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
              <?php endif; ?>
            </article>

            <article class="creative-makers-info-card creative-makers-info-card--impact">
              <?php if ( '' !== trim( $creative_makers_info_impact_title ) ) : ?>
              <h2 class="creative-makers-info-card__title"><?php echo esc_html( $creative_makers_info_impact_title ); ?></h2>
              <?php endif; ?>
              <?php if ( '' !== trim( $creative_makers_info_impact_text ) ) : ?>
              <p class="creative-makers-info-card__text">
                <?php echo esc_html( $creative_makers_info_impact_text ); ?>
              </p>
              <?php endif; ?>
              <?php if ( '' !== trim( $creative_makers_info_impact_deco_url ) ) : ?>
              <img
                class="creative-makers-info-card__deco creative-makers-info-card__deco--plant"
                src="<?php echo esc_url( $creative_makers_info_impact_deco_url ); ?>"
                alt=""
                width="36"
                height="36"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
              <?php endif; ?>
            </article>
          </div>
