<?php
/**
 * For Parents page — fit section cards (ACF-driven).
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
          <div class="for-parents-fit__grid">
            <article class="for-parents-fit-card for-parents-fit-card--pink">
              <div class="for-parents-fit-card__head">
                <?php if ( '' !== trim( $for_parents_fit_pink_title ) ) : ?>
                <h2 class="for-parents-fit-card__title">
                  <?php echo esc_html( $for_parents_fit_pink_title ); ?>
                </h2>
                <?php endif; ?>
                <svg
                  class="for-parents-fit-card__star"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="1.8"
                  stroke-linejoin="round"
                  aria-hidden="true"
                >
                  <path
                    d="M12 2.8l2.55 5.35 5.85.7-4.35 3.95 1.2 5.75L12 15.7l-5.25 2.85 1.2-5.75-4.35-3.95 5.85-.7L12 2.8z"
                  />
                </svg>
              </div>

              <?php if ( '' !== trim( $for_parents_fit_pink_intro ) ) : ?>
              <p class="for-parents-fit-card__intro">
                <?php echo esc_html( $for_parents_fit_pink_intro ); ?>
              </p>
              <?php endif; ?>

              <?php if ( ! empty( $for_parents_fit_list_items ) ) : ?>
              <ul class="for-parents-fit-card__list">
                <?php foreach ( $for_parents_fit_list_items as $list_item ) : ?>
                  <?php if ( '' === trim( $list_item ) ) : ?>
                    <?php continue; ?>
                  <?php endif; ?>
                <li>
                  <span class="for-parents-fit-card__check" aria-hidden="true">
                    <svg
                      viewBox="0 0 24 24"
                      width="11"
                      height="11"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2.8"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <path d="M5 13l4 4L19 7" />
                    </svg>
                  </span>
                  <?php echo esc_html( $list_item ); ?>
                </li>
                <?php endforeach; ?>
              </ul>
              <?php endif; ?>
            </article>

            <article class="for-parents-fit-card for-parents-fit-card--lavender">
              <div class="for-parents-fit-card__quote-layout">
                <div class="lazy-img-wrap">
                  <img
                    class="for-parents-fit-card__jar lazy-img"
                    src="<?php echo esc_attr( $for_parents_fit_lazy_placeholder ); ?>"
                    data-src="<?php echo esc_url( $for_parents_fit_jar_url ); ?>"
                    alt=""
                    width="180"
                    height="220"
                    decoding="async"
                    aria-hidden="true"
                  />
                </div>
                <?php if ( '' !== trim( $for_parents_fit_quote_text ) ) : ?>
                <p class="for-parents-fit-card__quote">
                  <?php echo esc_html( $for_parents_fit_quote_text ); ?>
                </p>
                <?php endif; ?>
              </div>
              <svg
                class="for-parents-fit-card__heart"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="1.8"
                stroke-linecap="round"
                stroke-linejoin="round"
                aria-hidden="true"
              >
                <path
                  d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
                />
              </svg>
            </article>
          </div>
