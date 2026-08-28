<?php
/**
 * Shared page hero: label → headline → copy → CTAs → image.
 *
 * @package Bright_Dreamers_Club
 *
 * @var array $args Hero arguments.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$hero = wp_parse_args(
	( isset( $args ) && is_array( $args ) ) ? $args : array(),
	array(
		'section_class'            => '',
		'aria_label'               => '',
		'labelledby'               => '',
		'section_label'            => '',
		'section_label_html'       => '',
		'headline'                 => '',
		'headline_html'            => '',
		'headline_id'              => '',
		'supporting_copy'          => '',
		'supporting_copy_html'     => '',
		'primary_cta_text'         => '',
		'primary_cta_link'         => array(),
		'secondary_cta_text'       => '',
		'secondary_cta_link'       => array(),
		'hero_image'               => '',
		'hero_image_mobile'        => '',
		'hero_image_alt'           => '',
		'hero_image_html'          => '',
		'hero_image_placeholder'   => 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7',
		'media_class'              => '',
		'image_class'              => '',
	)
);

$primary_link   = is_array( $hero['primary_cta_link'] ) ? $hero['primary_cta_link'] : array();
$secondary_link = is_array( $hero['secondary_cta_link'] ) ? $hero['secondary_cta_link'] : array();
$primary_url    = isset( $primary_link['url'] ) ? (string) $primary_link['url'] : '';
$secondary_url  = isset( $secondary_link['url'] ) ? (string) $secondary_link['url'] : '';
$has_primary    = ( '' !== $primary_url && '' !== trim( (string) $hero['primary_cta_text'] ) );
$has_secondary  = ( '' !== $secondary_url && '' !== trim( (string) $hero['secondary_cta_text'] ) );
$has_image      = ( '' !== trim( (string) $hero['hero_image'] ) || '' !== trim( (string) $hero['hero_image_html'] ) );
$has_mobile_image = '' !== trim( (string) $hero['hero_image_mobile'] );
$headline_text  = trim( (string) $hero['headline'] );
$headline_html  = trim( (string) $hero['headline_html'] );

$section_class = trim( 'page-hero ' . (string) $hero['section_class'] );
$media_class   = trim( 'hero-image-wrap ' . (string) $hero['media_class'] );
$image_class   = trim( 'lazy-img ' . (string) $hero['image_class'] );
?>
      <section
        class="<?php echo esc_attr( $section_class ); ?>"
        <?php if ( '' !== trim( (string) $hero['labelledby'] ) ) : ?>
        aria-labelledby="<?php echo esc_attr( $hero['labelledby'] ); ?>"
        <?php elseif ( '' !== trim( (string) $hero['aria_label'] ) ) : ?>
        aria-label="<?php echo esc_attr( $hero['aria_label'] ); ?>"
        <?php endif; ?>
      >
        <div class="site-container page-hero__inner">
          <div class="page-hero__content">
            <?php if ( '' !== trim( (string) $hero['section_label_html'] ) ) : ?>
            <span class="hero-label"><?php echo $hero['section_label_html']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span>
            <?php elseif ( '' !== trim( (string) $hero['section_label'] ) ) : ?>
            <span class="hero-label"><?php echo esc_html( $hero['section_label'] ); ?></span>
            <?php endif; ?>

            <?php if ( '' !== $headline_html || '' !== $headline_text ) : ?>
            <h1
              class="hero-headline"
              <?php if ( '' !== trim( (string) $hero['headline_id'] ) ) : ?>
              id="<?php echo esc_attr( $hero['headline_id'] ); ?>"
              <?php endif; ?>
            >
              <?php
              if ( '' !== $headline_html ) {
                echo $headline_html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
              } else {
                echo esc_html( $headline_text );
              }
              ?>
            </h1>
            <?php endif; ?>

            <?php if ( '' !== trim( (string) $hero['supporting_copy_html'] ) ) : ?>
            <p class="hero-copy"><?php echo $hero['supporting_copy_html']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
            <?php elseif ( '' !== trim( (string) $hero['supporting_copy'] ) ) : ?>
            <p class="hero-copy"><?php echo esc_html( $hero['supporting_copy'] ); ?></p>
            <?php endif; ?>

            <?php if ( $has_primary || $has_secondary ) : ?>
            <div class="hero-ctas page-hero__actions">
              <?php if ( $has_primary ) : ?>
              <a class="btn btn--solid btn--lg btn-hover" href="<?php echo esc_url( $primary_url ); ?>"<?php echo bdc_acf_link_target_attr( $primary_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
                <?php echo esc_html( $hero['primary_cta_text'] ); ?>
              </a>
              <?php endif; ?>
              <?php if ( $has_secondary ) : ?>
              <a class="btn btn--outline btn--lg btn-hover" href="<?php echo esc_url( $secondary_url ); ?>"<?php echo bdc_acf_link_target_attr( $secondary_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
                <?php echo esc_html( $hero['secondary_cta_text'] ); ?>
              </a>
              <?php endif; ?>
            </div>
            <?php endif; ?>
          </div>

          <?php if ( $has_image ) : ?>
          <div class="<?php echo esc_attr( $media_class ); ?>">
            <?php if ( '' !== trim( (string) $hero['hero_image_html'] ) ) : ?>
              <?php echo $hero['hero_image_html']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
            <?php else : ?>
            <div class="lazy-img-wrap">
              <?php if ( $has_mobile_image ) : ?>
              <picture>
                <source
                  media="(max-width: 767px)"
                  srcset="<?php echo esc_url( $hero['hero_image_mobile'] ); ?>"
                />
                <img
                  class="<?php echo esc_attr( $image_class ); ?>"
                  src="<?php echo esc_attr( $hero['hero_image_placeholder'] ); ?>"
                  data-src="<?php echo esc_url( $hero['hero_image'] ); ?>"
                  alt="<?php echo esc_attr( $hero['hero_image_alt'] ); ?>"
                  width="1200"
                  height="900"
                  decoding="async"
                />
              </picture>
              <?php else : ?>
              <img
                class="<?php echo esc_attr( $image_class ); ?>"
                src="<?php echo esc_attr( $hero['hero_image_placeholder'] ); ?>"
                data-src="<?php echo esc_url( $hero['hero_image'] ); ?>"
                alt="<?php echo esc_attr( $hero['hero_image_alt'] ); ?>"
                width="1200"
                height="900"
                decoding="async"
              />
              <?php endif; ?>
            </div>
            <?php endif; ?>
          </div>
          <?php endif; ?>
        </div>
      </section>
