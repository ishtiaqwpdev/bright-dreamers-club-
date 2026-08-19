<?php
/**
 * Creative Makers page — parents FAQ accordion (ACF-driven).
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
          <div class="creative-makers-parents__accordion">
            <?php foreach ( $creative_makers_parents_faq_items as $faq_index => $faq_item ) : ?>
              <?php if ( '' === trim( $faq_item['tab_label'] ) && '' === trim( $faq_item['panel_text'] ) ) : ?>
                <?php continue; ?>
              <?php endif; ?>
            <input
              class="creative-makers-faq__input"
              type="radio"
              name="creative-makers-faq"
              id="creative-makers-faq-<?php echo esc_attr( $faq_item['panel_slug'] ); ?>"
              <?php checked( 0, $faq_index ); ?>
            />
            <?php endforeach; ?>

            <div class="creative-makers-parents__tablist" role="tablist" aria-label="<?php echo esc_attr( $creative_makers_parents_tablist_aria_label ); ?>">
              <?php foreach ( $creative_makers_parents_faq_items as $faq_item ) : ?>
                <?php if ( '' === trim( $faq_item['tab_label'] ) ) : ?>
                  <?php continue; ?>
                <?php endif; ?>
              <label class="creative-makers-faq__tab" for="creative-makers-faq-<?php echo esc_attr( $faq_item['panel_slug'] ); ?>" role="tab">
                <?php echo esc_html( $faq_item['tab_label'] ); ?>
              </label>
              <?php endforeach; ?>
            </div>

            <div class="creative-makers-parents__panels">
              <?php foreach ( $creative_makers_parents_faq_items as $faq_item ) : ?>
                <?php if ( '' === trim( $faq_item['panel_text'] ) ) : ?>
                  <?php continue; ?>
                <?php endif; ?>
              <article
                class="creative-makers-faq__panel creative-makers-faq__panel--<?php echo esc_attr( $faq_item['panel_slug'] ); ?>"
                role="tabpanel"
                aria-labelledby="creative-makers-faq-<?php echo esc_attr( $faq_item['panel_slug'] ); ?>"
              >
                <p>
                  <?php echo esc_html( $faq_item['panel_text'] ); ?>
                </p>
              </article>
              <?php endforeach; ?>
            </div>
          </div>
