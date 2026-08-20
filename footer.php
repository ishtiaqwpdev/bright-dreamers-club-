<?php
/**
 * Theme footer.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$footer_logo_url = bdc_get_acf_option_image_url(
	'global_footer_logo',
	bdc_theme_asset_url( 'assets/images/bright-dreamers-logo-removebg-preview.png' )
);
$footer_logo_alt = bdc_get_acf_option_text(
	'global_footer_logo_alt',
	'Bright Dreamers — Dream, Create, Grow, Give'
);
$footer_mission_text = bdc_get_acf_option_text(
	'global_footer_mission_text',
	'Empowering children to dream, create, grow, learn, and give.'
);
$footer_social_links = bdc_get_acf_option_repeater( 'global_footer_social', bdc_get_default_social_links() );
$footer_explore_heading = bdc_get_acf_option_text( 'global_footer_explore_heading', 'Explore' );
$footer_explore_links   = bdc_get_acf_option_repeater(
	'global_footer_explore_links',
	array(
		array(
			'text' => 'Home',
			'link' => array(
				'title'  => 'Home',
				'url'    => home_url( '/' ),
				'target' => '',
			),
		),
		array(
			'text' => 'About Us',
			'link' => array(
				'title'  => 'About Us',
				'url'    => home_url( '/about/' ),
				'target' => '',
			),
		),
		array(
			'text' => 'Explore',
			'link' => array(
				'title'  => 'Explore',
				'url'    => home_url( '/explore/' ),
				'target' => '',
			),
		),
		array(
			'text' => 'For Parents',
			'link' => array(
				'title'  => 'For Parents',
				'url'    => home_url( '/for-parents/' ),
				'target' => '',
			),
		),
		array(
			'text' => 'Our Vision',
			'link' => array(
				'title'  => 'Our Vision',
				'url'    => home_url( '/our-vision/' ),
				'target' => '',
			),
		),
		array(
			'text' => 'Get Involved',
			'link' => array(
				'title'  => 'Get Involved',
				'url'    => home_url( '/get-involved/' ),
				'target' => '',
			),
		),
		array(
			'text' => 'Partners',
			'link' => array(
				'title'  => 'Partners',
				'url'    => home_url( '/partners/' ),
				'target' => '',
			),
		),
		array(
			'text' => 'Contact Us',
			'link' => array(
				'title'  => 'Contact Us',
				'url'    => home_url( '/contact/' ),
				'target' => '',
			),
		),
	)
);
$footer_get_involved_heading = bdc_get_acf_option_text( 'global_footer_get_involved_heading', 'Get Involved' );
$footer_get_involved_links   = bdc_get_acf_option_repeater(
	'global_footer_get_involved_links',
	array(
		array(
			'text' => 'Volunteer',
			'link' => array(
				'title'  => 'Volunteer',
				'url'    => bdc_page_url( 'volunteer-application.html' ),
				'target' => '',
			),
		),
		array(
			'text' => 'Partner With Us',
			'link' => array(
				'title'  => 'Partner With Us',
				'url'    => bdc_page_url( 'partner-inquiry.html' ),
				'target' => '',
			),
		),
		array(
			'text' => 'Donate',
			'link' => array(
				'title'  => 'Donate',
				'url'    => home_url( '/donation-interest/' ),
				'target' => '',
			),
		),
		array(
			'text' => 'Share Our Mission',
			'link' => array(
				'title'  => 'Share Our Mission',
				'url'    => home_url( '/our-vision/' ),
				'target' => '',
			),
		),
	)
);
$footer_resources_heading = bdc_get_acf_option_text( 'global_footer_resources_heading', 'Resources' );
$footer_resources_links   = bdc_get_acf_option_repeater(
	'global_footer_resources_links',
	array(
		array(
			'text' => 'FAQ',
			'link' => array(
				'title'  => 'FAQ',
				'url'    => home_url( '/faq/' ),
				'target' => '',
			),
		),
		array(
			'text' => 'Child Safety & Safeguarding',
			'link' => array(
				'title'  => 'Child Safety & Safeguarding',
				'url'    => home_url( '/faq/' ),
				'target' => '',
			),
		),
		array(
			'text' => 'Photo & Media Policy',
			'link' => array(
				'title'  => 'Photo & Media Policy',
				'url'    => home_url( '/photo-media-policy/' ),
				'target' => '',
			),
		),
		array(
			'text' => 'Photo & Media Consent Form',
			'link' => array(
				'title'  => 'Photo & Media Consent Form',
				'url'    => bdc_page_url( 'photo-media-consent.html' ),
				'target' => '',
			),
		),
		array(
			'text' => 'Financial Transparency',
			'link' => array(
				'title'  => 'Financial Transparency',
				'url'    => home_url( '/financial-transparency/' ),
				'target' => '',
			),
		),
	)
);
$footer_art_url = bdc_get_acf_option_image_url(
	'global_footer_art_image',
	bdc_theme_asset_url( 'assets/images/a78c0669-c149-4611-891f-86ce471532b4-removebg-preview.png' )
);
$footer_art_alt = bdc_get_acf_option_text(
	'global_footer_art_alt',
	'Bright Dreamers children gathered around a heart'
);
$footer_newsletter_heading_link = bdc_get_acf_option_link(
	'global_footer_newsletter_heading_link',
	array(
		'title'  => 'Stay Connected',
		'url'    => home_url( '/newsletter-signup/' ),
		'target' => '',
	)
);
$footer_newsletter_text = bdc_get_acf_option_text(
	'global_footer_newsletter_text',
	'Subscribe for updates, inspiring stories, new experiences, and ways to make a difference.'
);
$footer_newsletter_placeholder = bdc_get_acf_option_text( 'global_footer_newsletter_placeholder', 'Your email' );
$footer_newsletter_button_text = bdc_get_acf_option_text( 'global_footer_newsletter_button_text', 'Subscribe' );
$footer_newsletter_form_action = bdc_get_acf_option_text(
	'global_footer_newsletter_form_action',
	home_url( '/newsletter-signup/' )
);
$footer_plant_url = bdc_get_acf_option_image_url(
	'global_footer_plant_deco_image',
	bdc_theme_asset_url( 'assets/images/footer-plant-deco.png' )
);
$footer_copyright_prefix = bdc_get_acf_option_text(
	'global_footer_copyright_prefix',
	'Bright Dreamers. All rights reserved.'
);
$footer_legal_links = bdc_get_acf_option_repeater(
	'global_footer_legal_links',
	array(
		array(
			'text' => 'Privacy Policy',
			'link' => array(
				'title'  => 'Privacy Policy',
				'url'    => home_url( '/privacy-policy/' ),
				'target' => '',
			),
		),
		array(
			'text' => 'Terms of Use',
			'link' => array(
				'title'  => 'Terms of Use',
				'url'    => home_url( '/terms/' ),
				'target' => '',
			),
		),
		array(
			'text' => 'Accessibility',
			'link' => array(
				'title'  => 'Accessibility',
				'url'    => home_url( '/accessibility/' ),
				'target' => '',
			),
		),
	)
);
?>
<!-- Shared site footer -->
<footer class="site-footer">
	<div class="site-footer__edge" aria-hidden="true"></div>

	<div class="site-footer__main">
		<div class="site-container site-footer__grid">
			<div class="site-footer__col site-footer__col--brand">
				<a class="site-footer__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Bright Dreamers Club home">
					<img
						src="<?php echo esc_url( $footer_logo_url ); ?>"
						alt="<?php echo esc_attr( $footer_logo_alt ); ?>"
						width="240"
						height="72"
						loading="lazy"
						decoding="async"
					>
				</a>

				<p class="site-footer__mission">
					<?php echo esc_html( $footer_mission_text ); ?>
				</p>

				<ul class="site-footer__social" aria-label="Social media">
					<?php foreach ( $footer_social_links as $social ) : ?>
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

			<div class="site-footer__col">
				<h2 class="site-footer__heading"><?php echo esc_html( $footer_explore_heading ); ?></h2>
				<ul class="site-footer__links">
					<?php foreach ( $footer_explore_links as $row ) : ?>
						<?php
						$link = bdc_resolve_acf_link_value(
							$row['link'] ?? null,
							array(
								'title'  => '',
								'url'    => '#',
								'target' => '',
							)
						);

						if ( ! empty( $row['text'] ) && is_string( $row['text'] ) ) {
							$link['title'] = $row['text'];
						}

						if ( '' === trim( $link['title'] ) || '' === trim( $link['url'] ) ) {
							continue;
						}
						?>
						<li><a class="site-footer__link" href="<?php echo esc_url( $link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>><?php echo esc_html( $link['title'] ); ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>

			<div class="site-footer__col">
				<h2 class="site-footer__heading"><?php echo esc_html( $footer_get_involved_heading ); ?></h2>
				<ul class="site-footer__links">
					<?php foreach ( $footer_get_involved_links as $row ) : ?>
						<?php
						$link = bdc_resolve_acf_link_value(
							$row['link'] ?? null,
							array(
								'title'  => '',
								'url'    => '#',
								'target' => '',
							)
						);

						if ( ! empty( $row['text'] ) && is_string( $row['text'] ) ) {
							$link['title'] = $row['text'];
						}

						if ( '' === trim( $link['title'] ) || '' === trim( $link['url'] ) ) {
							continue;
						}
						?>
						<li><a class="site-footer__link" href="<?php echo esc_url( $link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>><?php echo esc_html( $link['title'] ); ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>

			<div class="site-footer__col site-footer__col--art">
				<img
					class="site-footer__art"
					src="<?php echo esc_url( $footer_art_url ); ?>"
					alt="<?php echo esc_attr( $footer_art_alt ); ?>"
					width="250"
					height="250"
					loading="lazy"
					decoding="async"
				>
			</div>

			<div class="site-footer__col">
				<h2 class="site-footer__heading"><?php echo esc_html( $footer_resources_heading ); ?></h2>
				<ul class="site-footer__links">
					<?php foreach ( $footer_resources_links as $row ) : ?>
						<?php
						$link = bdc_resolve_acf_link_value(
							$row['link'] ?? null,
							array(
								'title'  => '',
								'url'    => '#',
								'target' => '',
							)
						);

						if ( ! empty( $row['text'] ) && is_string( $row['text'] ) ) {
							$link['title'] = $row['text'];
						}

						if ( '' === trim( $link['title'] ) || '' === trim( $link['url'] ) ) {
							continue;
						}
						?>
						<li><a class="site-footer__link" href="<?php echo esc_url( $link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>><?php echo esc_html( $link['title'] ); ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>

			<div class="site-footer__col site-footer__col--newsletter">
				<div class="site-footer__newsletter-layout">
					<div class="site-footer__newsletter-content">
						<a class="site-footer__heading-link" href="<?php echo esc_url( $footer_newsletter_heading_link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $footer_newsletter_heading_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>
							<h2 class="site-footer__heading site-footer__heading--newsletter"><?php echo esc_html( $footer_newsletter_heading_link['title'] ); ?></h2>
						</a>

						<p class="site-footer__newsletter-text">
							<?php echo esc_html( $footer_newsletter_text ); ?>
						</p>

						<form class="footer-newsletter" action="<?php echo esc_url( $footer_newsletter_form_action ); ?>" method="get">
							<div class="footer-newsletter__field">
								<label class="visually-hidden" for="footer-newsletter-email">Your email</label>
								<input
									class="footer-newsletter__input"
									id="footer-newsletter-email"
									name="email"
									type="email"
									placeholder="<?php echo esc_attr( $footer_newsletter_placeholder ); ?>"
									autocomplete="email"
									required
								>
							</div>
							<button class="footer-newsletter__btn" type="submit">
								<?php echo esc_html( $footer_newsletter_button_text ); ?>
								<svg
									class="footer-newsletter__heart"
									viewBox="0 0 24 24"
									width="14"
									height="14"
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
							</button>
						</form>
					</div>

					<img
						class="site-footer__plant"
						src="<?php echo esc_url( $footer_plant_url ); ?>"
						alt=""
						width="120"
						height="160"
						loading="lazy"
						decoding="async"
					>
				</div>
			</div>
		</div>
	</div>

	<div class="site-footer__legal">
		<div class="site-container site-footer__legal-inner">
			<p class="site-footer__copyright">
				&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php echo esc_html( $footer_copyright_prefix ); ?>
			</p>
			<span class="site-footer__legal-sep" aria-hidden="true">|</span>
			<nav class="site-footer__legal-nav" aria-label="Legal">
				<?php
				$legal_index = 0;
				foreach ( $footer_legal_links as $row ) :
					$link = bdc_resolve_acf_link_value(
						$row['link'] ?? null,
						array(
							'title'  => '',
							'url'    => '#',
							'target' => '',
						)
					);

					if ( ! empty( $row['text'] ) && is_string( $row['text'] ) ) {
						$link['title'] = $row['text'];
					}

					if ( '' === trim( $link['title'] ) || '' === trim( $link['url'] ) ) {
						continue;
					}

					if ( $legal_index > 0 ) :
						?>
						<span class="site-footer__legal-sep" aria-hidden="true">|</span>
						<?php
					endif;
					?>
					<a class="site-footer__legal-link" href="<?php echo esc_url( $link['url'] ); ?>"<?php echo bdc_acf_link_target_attr( $link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>><?php echo esc_html( $link['title'] ); ?></a>
					<?php
					++$legal_index;
				endforeach;
				?>
			</nav>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
