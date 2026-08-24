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

$footer_logo_url                = $footer['logo_url'];
$footer_logo_alt                = $footer['logo_alt'];
$footer_mission_text            = $footer['mission_text'];
$footer_social_links            = $footer['social_links'];
$footer_explore_heading         = $footer['explore_heading'];
$footer_explore_links           = $footer['explore_links'];
$footer_get_involved_heading    = $footer['get_involved_heading'];
$footer_get_involved_links      = $footer['get_involved_links'];
$footer_resources_heading       = $footer['resources_heading'];
$footer_resources_links         = $footer['resources_links'];
$footer_art_url                 = $footer['art_url'];
$footer_art_alt                 = $footer['art_alt'];
$footer_newsletter_heading_link = $footer['newsletter_heading_link'];
$footer_newsletter_text         = $footer['newsletter_text'];
$footer_newsletter_placeholder  = $footer['newsletter_placeholder'];
$footer_newsletter_button_text  = $footer['newsletter_button_text'];
$footer_newsletter_form_action  = $footer['newsletter_form_action'];
$footer_plant_url               = $footer['plant_url'];

$stay_heading = __( 'Stay Connected', 'bright-dreamers-club' );
$stay_links   = array();

if ( ! empty( $footer_newsletter_heading_link['url'] ) ) {
	$stay_links[] = array(
		'text' => __( 'Newsletter', 'bright-dreamers-club' ),
		'link' => $footer_newsletter_heading_link,
	);
}

$stay_links[] = array(
	'text' => __( 'Contact Us', 'bright-dreamers-club' ),
	'link' => array(
		'title'  => __( 'Contact Us', 'bright-dreamers-club' ),
		'url'    => home_url( '/contact/' ),
		'target' => '',
	),
);

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

$acc_groups = array(
	array(
		'key'     => 'explore',
		'label'   => $footer_explore_heading,
		'links'   => $footer_explore_links,
	),
	array(
		'key'     => 'involved',
		'label'   => $footer_get_involved_heading,
		'links'   => $footer_get_involved_links,
	),
	array(
		'key'     => 'resources',
		'label'   => $footer_resources_heading,
		'links'   => $footer_resources_links,
	),
	array(
		'key'     => 'connected',
		'label'   => $stay_heading,
		'links'   => $stay_links,
	),
);
?>
<div class="site-footer__mobile">
	<div class="footer-acc" data-footer-acc>
		<?php foreach ( $acc_groups as $group ) : ?>
			<?php
			$panel_id = 'footer-acc-' . sanitize_html_class( $group['key'] );
			$heading_url = '';
			if ( 'explore' === $group['key'] ) {
				$heading_url = home_url( '/explore/' );
			} elseif ( 'involved' === $group['key'] ) {
				$heading_url = home_url( '/get-involved/' );
			} elseif ( 'connected' === $group['key'] ) {
				$heading_url = home_url( '/contact/' );
			}
			?>
			<div class="footer-acc__item footer-acc__item--<?php echo esc_attr( $group['key'] ); ?>">
				<?php if ( '' !== $heading_url ) : ?>
				<div class="footer-acc__trigger footer-acc__trigger--split">
					<a class="footer-acc__link" href="<?php echo esc_url( $heading_url ); ?>">
						<span class="footer-acc__icon footer-acc__icon--<?php echo esc_attr( $group['key'] ); ?>">
							<?php bdc_render_footer_acc_icon( $group['key'] ); ?>
						</span>
						<span class="footer-acc__label"><?php echo esc_html( $group['label'] ); ?></span>
					</a>
					<button
						class="footer-acc__chevron-btn"
						type="button"
						data-footer-accordion
						aria-expanded="false"
						aria-controls="<?php echo esc_attr( $panel_id ); ?>"
						aria-label="<?php echo esc_attr( sprintf( __( 'Show %s links', 'bright-dreamers-club' ), $group['label'] ) ); ?>"
					>
						<span class="footer-acc__chevron" aria-hidden="true">
							<svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
								<path d="M6 9l6 6 6-6" />
							</svg>
						</span>
					</button>
				</div>
				<?php else : ?>
				<button
					class="footer-acc__trigger"
					type="button"
					data-footer-accordion
					aria-expanded="false"
					aria-controls="<?php echo esc_attr( $panel_id ); ?>"
				>
					<span class="footer-acc__icon footer-acc__icon--<?php echo esc_attr( $group['key'] ); ?>">
						<?php bdc_render_footer_acc_icon( $group['key'] ); ?>
					</span>
					<span class="footer-acc__label"><?php echo esc_html( $group['label'] ); ?></span>
					<span class="footer-acc__chevron" aria-hidden="true">
						<svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
							<path d="M6 9l6 6 6-6" />
						</svg>
					</span>
				</button>
				<?php endif; ?>
				<div class="footer-acc__panel" id="<?php echo esc_attr( $panel_id ); ?>" inert>
					<?php bdc_render_footer_link_list( $group['links'], 'footer-acc__links' ); ?>
				</div>
			</div>
		<?php endforeach; ?>
	</div>

	<div class="footer-m-brand">
		<div class="footer-m-brand__copy">
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
			<ul class="footer-m-brand__social" aria-label="<?php esc_attr_e( 'Social media', 'bright-dreamers-club' ); ?>">
				<?php foreach ( $ordered_social as $social ) : ?>
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
		</div>
		<img
			class="footer-m-brand__art"
			src="<?php echo esc_url( $footer_art_url ); ?>"
			alt="<?php echo esc_attr( $footer_art_alt ); ?>"
			width="140"
			height="140"
			loading="lazy"
			decoding="async"
		>
	</div>

	<div class="footer-m-news">
		<div class="footer-m-news__copy">
			<a class="footer-m-news__heading-link" href="<?php echo esc_url( $footer_newsletter_heading_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $footer_newsletter_heading_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
				<h2 class="footer-m-news__heading">
					<?php esc_html_e( 'Subscribe for updates', 'bright-dreamers-club' ); ?>
					<span class="footer-m-news__heading-heart" aria-hidden="true">♡</span>
				</h2>
			</a>
			<p class="footer-m-news__text"><?php echo esc_html( $footer_newsletter_text ); ?></p>
			<form class="footer-m-news__form" action="<?php echo esc_url( $footer_newsletter_form_action ); ?>" method="get">
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
				<button class="footer-m-news__btn" type="submit">
					<?php echo esc_html( $footer_newsletter_button_text ); ?>
					<span aria-hidden="true">♡</span>
				</button>
			</form>
		</div>
		<img
			class="footer-m-news__plant"
			src="<?php echo esc_url( $footer_plant_url ); ?>"
			alt=""
			width="96"
			height="128"
			loading="lazy"
			decoding="async"
		>
	</div>
</div>
