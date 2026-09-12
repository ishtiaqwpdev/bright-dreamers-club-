<?php
/**
 * Mobile footer layout (phones only — desktop markup stays in footer.php).
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$footer = bdc_get_site_footer_context();

$footer_logo_url                = bdc_get_theme_footer_logo_url();
$footer_logo_alt                = $footer['logo_alt'];
$footer_mission_text            = $footer['mission_text'];
$footer_social_links            = $footer['social_links'];
$footer_explore_heading         = $footer['explore_heading'];
$footer_explore_links           = $footer['explore_links'];
$footer_get_involved_heading    = $footer['get_involved_heading'];
$footer_get_involved_links      = $footer['get_involved_links'];
$footer_resources_heading       = $footer['resources_heading'];
$footer_resources_links         = $footer['resources_links'];
$footer_newsletter_heading_link = $footer['newsletter_heading_link'];
$footer_newsletter_text         = $footer['newsletter_text'];
$footer_newsletter_placeholder  = $footer['newsletter_placeholder'];
$footer_newsletter_button_text  = $footer['newsletter_button_text'];
$footer_newsletter_form_action  = $footer['newsletter_form_action'];

$social_order = array( 'instagram', 'facebook', 'pinterest', 'youtube' );
$social_by    = array();

foreach ( (array) $footer_social_links as $social ) {
	$slug = isset( $social['slug'] ) ? (string) $social['slug'] : '';
	if ( '' !== $slug ) {
		$social_by[ $slug ] = $social;
	}
}

$ordered_social = array();

foreach ( $social_order as $slug ) {
	if ( isset( $social_by[ $slug ] ) ) {
		$ordered_social[] = $social_by[ $slug ];
		unset( $social_by[ $slug ] );
	}
}

$ordered_social = array_merge( $ordered_social, array_values( $social_by ) );

$mobile_social = array();

foreach ( $ordered_social as $social ) {
	if ( 'instagram' === ( $social['slug'] ?? '' ) ) {
		$mobile_social[] = $social;
		break;
	}
}

if ( empty( $mobile_social ) && ! empty( $ordered_social ) ) {
	$mobile_social[] = $ordered_social[0];
}

$acc_groups = array(
	array(
		'key'   => 'explore',
		'label' => $footer_explore_heading,
		'links' => $footer_explore_links,
	),
	array(
		'key'   => 'involved',
		'label' => $footer_get_involved_heading,
		'links' => $footer_get_involved_links,
	),
	array(
		'key'   => 'resources',
		'label' => $footer_resources_heading,
		'links' => $footer_resources_links,
	),
	array(
		'key'        => 'newsletter',
		'label'      => $footer_newsletter_heading_link['title'],
		'newsletter' => true,
	),
);
?>
<div class="site-footer__mobile">
	<div class="footer-m-brand">
		<a class="footer-m-brand__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Bright Dreamers Club home">
			<img
				src="<?php echo esc_url( $footer_logo_url ); ?>"
				alt="<?php echo esc_attr( $footer_logo_alt ); ?>"
				width="220"
				height="72"
				loading="lazy"
				decoding="async"
			>
		</a>
		<p class="footer-m-brand__mission"><?php echo esc_html( $footer_mission_text ); ?></p>
		<?php if ( ! empty( $mobile_social ) ) : ?>
		<ul class="footer-m-brand__social" aria-label="<?php esc_attr_e( 'Social media', 'bright-dreamers-club' ); ?>">
			<?php foreach ( $mobile_social as $social ) : ?>
				<?php
				$social_slug = isset( $social['slug'] ) ? (string) $social['slug'] : '';
				$social_url  = ! empty( $social['url'] ) ? (string) $social['url'] : '';

				if ( '' === $social_slug || '' === $social_url ) {
					continue;
				}
				?>
				<li>
					<a
						class="social-icon"
						href="<?php echo esc_url( $social_url ); ?>"
						target="_blank"
						rel="noopener noreferrer"
						aria-label="<?php echo esc_attr( bdc_get_social_aria_label( $social_slug ) ); ?>"
					>
						<?php bdc_render_social_icon_svg( $social_slug ); ?>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
		<?php endif; ?>
	</div>

	<div class="footer-acc" data-footer-acc>
		<?php foreach ( $acc_groups as $group ) : ?>
			<?php
			$panel_id   = 'footer-acc-' . sanitize_html_class( $group['key'] );
			$is_newsletter = ! empty( $group['newsletter'] );
			?>
			<div class="footer-acc__item footer-acc__item--<?php echo esc_attr( $group['key'] ); ?>">
				<button
					class="footer-acc__trigger"
					type="button"
					data-footer-accordion
					aria-expanded="false"
					aria-controls="<?php echo esc_attr( $panel_id ); ?>"
				>
					<span class="footer-acc__label">
						<?php echo esc_html( $group['label'] ); ?>
						<?php if ( $is_newsletter ) : ?>
						<span class="footer-acc__label-heart" aria-hidden="true">♡</span>
						<?php endif; ?>
					</span>
					<span class="footer-acc__toggle" aria-hidden="true">+</span>
				</button>
				<div class="footer-acc__panel" id="<?php echo esc_attr( $panel_id ); ?>" inert>
					<?php if ( $is_newsletter ) : ?>
					<div class="footer-acc__newsletter">
						<p class="footer-acc__newsletter-text"><?php echo esc_html( $footer_newsletter_text ); ?></p>
						<form class="footer-m-news__form footer-acc__newsletter-form" action="<?php echo esc_url( $footer_newsletter_form_action ); ?>" method="get">
							<div class="footer-m-news__field">
								<label class="visually-hidden" for="footer-newsletter-email-mobile"><?php esc_html_e( 'Your email', 'bright-dreamers-club' ); ?></label>
								<input
									class="footer-m-news__input"
									id="footer-newsletter-email-mobile"
									name="email"
									type="email"
									placeholder="<?php echo esc_attr( $footer_newsletter_placeholder ); ?>"
									autocomplete="email"
									required
								>
							</div>
							<button class="footer-m-news__btn" type="submit">
								<?php echo esc_html( $footer_newsletter_button_text ); ?>
								<span aria-hidden="true">♡</span>
							</button>
						</form>
					</div>
					<?php else : ?>
					<?php bdc_render_footer_link_list( $group['links'], 'footer-acc__links' ); ?>
					<?php endif; ?>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
