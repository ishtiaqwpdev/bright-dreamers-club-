<?php
/**
 * For Parents page — experience & get started cards (ACF-driven).
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$for_parents_info_heading_underline_url = bdc_theme_asset_url( 'assets/images/heading-underline.jpeg' );
?>
          <div class="for-parents-info__grid">
            <article class="for-parents-info-card for-parents-info-card--cream">
              <h2 class="for-parents-info-card__title" id="for-parents-info-experience-title">
                <?php if ( '' !== trim( $for_parents_info_experience_title_underline ) ) : ?>
                <span class="heading-underline heading-underline--orange">
                  <?php echo esc_html( $for_parents_info_experience_title_underline ); ?>
                  <img
                    class="heading-underline__img"
                    src="<?php echo esc_url( $for_parents_info_heading_underline_url ); ?>"
                    alt=""
                    width="120"
                    height="12"
                  />
                </span>
                <?php endif; ?>
                <?php if ( '' !== trim( $for_parents_info_experience_title_suffix ) ) : ?>
                <?php echo esc_html( $for_parents_info_experience_title_suffix ); ?>
                <?php endif; ?>
              </h2>

              <?php if ( ! empty( $for_parents_info_features ) ) : ?>
              <div class="for-parents-info-card__features">
                <?php foreach ( $for_parents_info_features as $feature ) : ?>
                  <?php if ( '' === trim( $feature['title'] ) && '' === trim( $feature['text'] ) ) : ?>
                    <?php continue; ?>
                  <?php endif; ?>
                <div class="for-parents-info-feature">
                  <img
                    class="for-parents-info-feature__icon"
                    src="<?php echo esc_url( $feature['icon'] ); ?>"
                    alt=""
                    width="42"
                    height="42"
                    loading="lazy"
                    decoding="async"
                  />
                  <div>
                    <?php if ( '' !== trim( $feature['title'] ) ) : ?>
                    <h3 class="for-parents-info-feature__title"><?php echo esc_html( $feature['title'] ); ?></h3>
                    <?php endif; ?>
                    <?php if ( '' !== trim( $feature['text'] ) ) : ?>
                    <p class="for-parents-info-feature__text">
                      <?php echo esc_html( $feature['text'] ); ?>
                    </p>
                    <?php endif; ?>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
              <?php endif; ?>

              <?php if ( '' !== trim( $for_parents_info_experience_footer_line_1 ) || '' !== trim( $for_parents_info_experience_footer_line_2 ) ) : ?>
              <p class="for-parents-info-card__footer">
                <?php if ( '' !== trim( $for_parents_info_experience_footer_line_1 ) ) : ?>
                <?php echo esc_html( $for_parents_info_experience_footer_line_1 ); ?><br />
                <?php endif; ?>
                <?php if ( '' !== trim( $for_parents_info_experience_footer_line_2 ) ) : ?>
                <?php echo esc_html( $for_parents_info_experience_footer_line_2 ); ?>
                <?php endif; ?>
              </p>
              <?php endif; ?>

              <img
                class="for-parents-info-card__heart"
                src="<?php echo esc_url( $for_parents_info_experience_heart_url ); ?>"
                alt=""
                width="30"
                height="30"
                loading="lazy"
                decoding="async"
                aria-hidden="true"
              />
            </article>

            <article class="for-parents-info-card for-parents-info-card--lavender">
              <h2 class="for-parents-info-card__title" id="for-parents-info-start-title">
                <?php if ( '' !== trim( $for_parents_info_start_title_prefix ) ) : ?>
                <?php echo esc_html( $for_parents_info_start_title_prefix ); ?>
                <?php endif; ?>
                <?php if ( '' !== trim( $for_parents_info_start_title_underline ) ) : ?>
                <span class="heading-underline heading-underline--pink">
                  <?php echo esc_html( $for_parents_info_start_title_underline ); ?>
                  <img
                    class="heading-underline__img"
                    src="<?php echo esc_url( $for_parents_info_heading_underline_url ); ?>"
                    alt=""
                    width="120"
                    height="12"
                  />
                </span>
                <?php endif; ?>
                <?php if ( '' !== trim( $for_parents_info_start_title_suffix ) ) : ?>
                <?php echo esc_html( $for_parents_info_start_title_suffix ); ?>
                <?php endif; ?>
              </h2>

              <div class="for-parents-info-start">
                <?php if ( ! empty( $for_parents_info_steps ) ) : ?>
                <ol class="for-parents-info-steps">
                  <?php foreach ( $for_parents_info_steps as $step_index => $step ) : ?>
                    <?php if ( '' === trim( $step['title'] ) && '' === trim( $step['text'] ) ) : ?>
                      <?php continue; ?>
                    <?php endif; ?>
                  <li class="for-parents-info-step">
                    <span class="for-parents-info-step__num for-parents-info-step__num--<?php echo esc_attr( $step['num_slug'] ); ?>"
                      ><?php echo esc_html( (string) ( $step_index + 1 ) ); ?></span
                    >
                    <div>
                      <?php if ( '' !== trim( $step['title'] ) ) : ?>
                      <h3 class="for-parents-info-step__title"><?php echo esc_html( $step['title'] ); ?></h3>
                      <?php endif; ?>
                      <?php if ( '' !== trim( $step['text'] ) ) : ?>
                      <p class="for-parents-info-step__text">
                        <?php echo esc_html( $step['text'] ); ?>
                      </p>
                      <?php endif; ?>
                    </div>
                  </li>
                  <?php endforeach; ?>
                </ol>
                <?php endif; ?>

                <img
                  class="for-parents-info-start__plane"
                  src="<?php echo esc_url( $for_parents_info_plane_url ); ?>"
                  alt=""
                  width="128"
                  height="140"
                  loading="lazy"
                  decoding="async"
                  aria-hidden="true"
                />

                <?php if ( ! empty( $for_parents_info_start_btn_link['url'] ) && '' !== trim( $for_parents_info_start_btn_text ) ) : ?>
                <a
                  class="btn btn--solid btn--lg btn-hover for-parents-info-start__btn"
                  href="<?php echo esc_url( $for_parents_info_start_btn_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $for_parents_info_start_btn_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                >
                  <?php echo esc_html( $for_parents_info_start_btn_text ); ?>
                  <svg
                    class="btn__icon"
                    viewBox="0 0 24 24"
                    width="18"
                    height="18"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    aria-hidden="true"
                  >
                    <path d="M5 12h14M13 6l6 6-6 6" />
                  </svg>
                </a>
                <?php endif; ?>
              </div>
            </article>
          </div>
