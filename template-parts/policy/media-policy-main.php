<?php
/**
 * Shared main content for media-policy layout pages (sidebar nav + sections).
 *
 * Expects: $main_aria_label, $sidebar_title, $nav_aria_label, $nav_items, $sidebar_card_icon,
 * $sidebar_card_text, $sections.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
      <section class="media-policy-main section-padding" aria-label="<?php echo esc_attr( $main_aria_label ); ?>">
        <div class="site-container media-policy-main__inner">
          <aside class="media-policy-sidebar" aria-label="On this page">
            <div class="media-policy-sidebar__sticky">
              <h2 class="media-policy-sidebar__title"><?php echo esc_html( $sidebar_title ); ?></h2>
              <nav class="media-policy-nav" aria-label="<?php echo esc_attr( $nav_aria_label ); ?>">
                <ul class="media-policy-nav__list">
                  <?php foreach ( $nav_items as $nav_index => $nav_item ) : ?>
                  <li>
                    <a class="media-policy-nav__link<?php echo 0 === $nav_index ? ' is-active' : ''; ?>" href="#<?php echo esc_attr( $nav_item['anchor_id'] ); ?>">
                      <img class="media-policy-nav__icon" src="<?php echo esc_url( $nav_item['icon'] ); ?>" alt="" width="28" height="28" decoding="async" aria-hidden="true" />
                      <span><?php echo esc_html( $nav_item['label'] ); ?></span>
                    </a>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </nav>

              <article class="media-policy-sidebar-card">
                <img
                  class="media-policy-sidebar-card__icon"
                  src="<?php echo esc_url( $sidebar_card_icon ); ?>"
                  alt=""
                  width="120"
                  height="120"
                  loading="lazy"
                  decoding="async"
                  aria-hidden="true"
                />
                <p class="media-policy-sidebar-card__text">
                  <?php echo esc_html( $sidebar_card_text ); ?>
                </p>
              </article>
            </div>
          </aside>

          <div class="media-policy-content">
            <?php foreach ( $sections as $section ) : ?>
            <article class="media-policy-section" id="<?php echo esc_attr( $section['section_id'] ); ?>" data-media-section>
              <div class="media-policy-section__head">
                <img class="media-policy-section__icon<?php echo ! empty( $section['icon_blend'] ) ? ' media-policy-section__icon--blend' : ''; ?>" src="<?php echo esc_url( $section['icon'] ); ?>" alt="" width="40" height="40" loading="lazy" decoding="async" aria-hidden="true" />
                <h2 class="media-policy-section__title"><?php echo esc_html( $section['title'] ); ?></h2>
              </div>
              <div class="media-policy-section__body">
                <?php echo wp_kses_post( $section['section_body'] ); ?>
              </div>
            </article>
            <?php endforeach; ?>
          </div>
        </div>
      </section>
