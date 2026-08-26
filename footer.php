<?php
/**
 * Theme footer.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$footer                        = bdc_get_site_footer_context();
$footer_logo_url               = $footer['logo_url'];
$footer_logo_alt               = $footer['logo_alt'];
$footer_mission_text           = $footer['mission_text'];
$footer_social_links           = $footer['social_links'];
$footer_explore_heading        = $footer['explore_heading'];
$footer_explore_links          = $footer['explore_links'];
$footer_get_involved_heading   = $footer['get_involved_heading'];
$footer_get_involved_links     = $footer['get_involved_links'];
$footer_resources_heading      = $footer['resources_heading'];
$footer_resources_links        = $footer['resources_links'];
$footer_art_url                = $footer['art_url'];
$footer_art_alt                = $footer['art_alt'];
$footer_newsletter_heading_link = $footer['newsletter_heading_link'];
$footer_newsletter_text        = $footer['newsletter_text'];
$footer_newsletter_placeholder = $footer['newsletter_placeholder'];
$footer_newsletter_button_text = $footer['newsletter_button_text'];
$footer_newsletter_form_action = $footer['newsletter_form_action'];
$footer_plant_url              = $footer['plant_url'];
$footer_copyright_prefix       = $footer['copyright'];
$footer_legal_links            = $footer['legal_links'];
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
				<h2 class="site-footer__heading site-footer__heading--explore"><?php echo esc_html( $footer_explore_heading ); ?></h2>
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

		<?php get_template_part( 'template-parts/footer-mobile' ); ?>
	</div>

	<div class="site-footer__legal">
		<div class="site-container site-footer__legal-inner">
			<div class="site-footer__legal-copy">
				<p class="site-footer__copyright">
					&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php echo esc_html( $footer_copyright_prefix ); ?>
				</p>
				<p class="site-footer__initiative"><?php esc_html_e( 'A nonprofit community initiative.', 'bright-dreamers-club' ); ?></p>
			</div>
			<span class="site-footer__legal-sep site-footer__legal-sep--lead" aria-hidden="true">|</span>
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
				<span class="site-footer__legal-sep site-footer__legal-sep--heart" aria-hidden="true">|</span>
				<span class="site-footer__legal-heart" aria-hidden="true">
					<svg viewBox="0 0 24 24" width="14" height="14" fill="currentColor">
						<path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
					</svg>
				</span>
			</nav>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
