<?php
/**
 * Explore page — impact cards + quote (ACF-driven).
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
            <div class="explore-impact__track">
              <?php foreach ( $explore_impact_cards as $impact_card ) : ?>
                <?php if ( '' === trim( $impact_card['title'] ) && '' === trim( $impact_card['text'] ) ) : ?>
                  <?php continue; ?>
                <?php endif; ?>
              <article class="explore-impact-card">
                <div class="lazy-img-wrap lazy-img-wrap--cover">
                  <img
                    class="explore-impact-card__photo lazy-img"
                    src="<?php echo esc_attr( $explore_hero_lazy_placeholder ); ?>"
                    data-src="<?php echo esc_url( $impact_card['photo'] ); ?>"
                    alt="<?php echo esc_attr( $impact_card['photo_alt'] ); ?>"
                    width="400"
                    height="300"
                    decoding="async"
                  />
                </div>
                <?php if ( '' !== trim( $impact_card['title'] ) ) : ?>
                <h3 class="explore-impact-card__title"><?php echo esc_html( $impact_card['title'] ); ?></h3>
                <?php endif; ?>
                <?php if ( '' !== trim( $impact_card['text'] ) ) : ?>
                <p class="explore-impact-card__text">
                  <?php echo esc_html( $impact_card['text'] ); ?>
                </p>
                <?php endif; ?>
              </article>
              <?php endforeach; ?>

              <?php if ( ! empty( $explore_impact_quote_stanzas ) ) : ?>
              <aside class="explore-impact-quote" aria-label="Inspiring message">
                <img
                  class="explore-impact-quote__blob"
                  src="<?php echo esc_url( $explore_impact_quote_blob_url ); ?>"
                  alt=""
                  width="320"
                  height="280"
                  loading="lazy"
                  decoding="async"
                  aria-hidden="true"
                />
                <div class="explore-impact-quote__text">
                  <?php foreach ( $explore_impact_quote_stanzas as $stanza ) : ?>
                    <?php if ( '' === trim( $stanza['line_1'] ) && '' === trim( $stanza['line_2'] ) ) : ?>
                      <?php continue; ?>
                    <?php endif; ?>
                  <p class="explore-impact-quote__stanza">
                    <?php if ( '' !== trim( $stanza['line_1'] ) ) : ?>
                    <?php echo esc_html( $stanza['line_1'] ); ?><br />
                    <?php endif; ?>
                    <?php if ( '' !== trim( $stanza['line_2'] ) ) : ?>
                    <?php echo esc_html( $stanza['line_2'] ); ?>
                    <?php endif; ?>
                  </p>
                  <?php endforeach; ?>
                </div>
              </aside>
              <?php endif; ?>
            </div>
