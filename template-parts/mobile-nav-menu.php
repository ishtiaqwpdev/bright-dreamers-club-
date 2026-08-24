<?php
/**
 * Full-screen mobile navigation (shared across all pages).
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$header = bdc_get_site_header_context();
$links  = bdc_get_mobile_nav_links();

$header_logo_url    = $header['logo_url'];
$header_logo_alt    = $header['logo_alt'];
$header_donate_text = $header['donate_text'];
$header_donate_link = $header['donate_link'];
$header_apply_text  = $header['apply_text'];
$header_apply_link  = $header['apply_link'];
$header_social      = $header['social_links'];
?>
<div class="mobile-nav">
	<div class="mobile-nav__header">
		<a class="mobile-nav__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Bright Dreamers Club home">
			<img
				src="<?php echo esc_url( $header_logo_url ); ?>"
				alt="<?php echo esc_attr( $header_logo_alt ); ?>"
				width="220"
				height="72"
			>
		</a>
		<button
			class="mobile-nav__close"
			type="button"
			data-menu-close
			aria-label="<?php esc_attr_e( 'Close menu', 'bright-dreamers-club' ); ?>"
		>
			<svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" aria-hidden="true">
				<path d="M6 6l12 12M18 6L6 18" />
			</svg>
		</button>
	</div>

	<div class="mobile-nav__body">
		<nav class="mobile-nav__nav" aria-label="<?php esc_attr_e( 'Mobile', 'bright-dreamers-club' ); ?>">
			<ul class="mobile-nav__list">
				<?php foreach ( $links as $link ) : ?>
					<?php
					$label      = (string) ( $link['label'] ?? '' );
					$url        = (string) ( $link['url'] ?? '' );
					$children   = isset( $link['children'] ) && is_array( $link['children'] ) ? $link['children'] : array();
					$icon_key   = bdc_mobile_nav_icon_key( $label, $url );
					if ( ! empty( $children ) && '' === trim( $url ) && 'explore' === $icon_key ) {
						$url = home_url( '/explore/' );
					}
					$is_current = bdc_nav_url_is_current( $url );
					$child_on   = false;

					foreach ( $children as $child ) {
						if ( bdc_nav_url_is_current( (string) ( $child['url'] ?? '' ) ) ) {
							$child_on = true;
							break;
						}
					}

					$is_accordion = ! empty( $children );
					$is_open      = $is_accordion && $child_on;
					$item_class   = 'mobile-nav__item mobile-nav__item--' . sanitize_html_class( $icon_key );

					if ( $is_accordion ) {
						$item_class .= ' mobile-nav__item--accordion';
					}

					if ( $is_current && ! $child_on ) {
						$item_class .= ' is-active';
					}

					if ( $is_open ) {
						$item_class .= ' is-open';
					}

					$panel_id = 'mobile-nav-panel-' . sanitize_html_class( $icon_key );
					?>
					<li class="<?php echo esc_attr( $item_class ); ?>">
						<?php if ( $is_accordion ) : ?>
							<div class="mobile-nav__row mobile-nav__row--split">
								<a
									class="mobile-nav__link"
									href="<?php echo esc_url( $url ); ?>"
									<?php echo $is_current ? ' aria-current="page"' : ''; ?>
								>
									<span class="mobile-nav__icon mobile-nav__icon--<?php echo esc_attr( $icon_key ); ?>">
										<?php bdc_render_mobile_nav_icon( $icon_key ); ?>
									</span>
									<span class="mobile-nav__label"><?php echo esc_html( $label ); ?></span>
								</a>
								<button
									class="mobile-nav__chevron-btn"
									type="button"
									data-mobile-accordion
									aria-expanded="<?php echo $is_open ? 'true' : 'false'; ?>"
									aria-controls="<?php echo esc_attr( $panel_id ); ?>"
									aria-label="<?php echo esc_attr( sprintf( __( 'Show %s pages', 'bright-dreamers-club' ), $label ) ); ?>"
								>
									<span class="mobile-nav__chevron" aria-hidden="true">
										<svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M9 6l6 6-6 6" />
										</svg>
									</span>
								</button>
							</div>
							<ul class="mobile-nav__sublist" id="<?php echo esc_attr( $panel_id ); ?>"<?php echo $is_open ? '' : ' inert'; ?>>
								<?php foreach ( $children as $child ) : ?>
									<?php
									$child_label   = (string) ( $child['label'] ?? '' );
									$child_url     = (string) ( $child['url'] ?? '' );
									$child_current = bdc_nav_url_is_current( $child_url );
									$sub_class     = 'mobile-nav__subitem';

									if ( $child_current ) {
										$sub_class .= ' is-active';
									}
									?>
									<li class="<?php echo esc_attr( $sub_class ); ?>">
										<a
											class="mobile-nav__sublink"
											href="<?php echo esc_url( $child_url ); ?>"
											<?php echo $child_current ? ' aria-current="page"' : ''; ?>
										>
											<?php echo esc_html( $child_label ); ?>
										</a>
									</li>
								<?php endforeach; ?>
							</ul>
						<?php else : ?>
							<a
								class="mobile-nav__row"
								href="<?php echo esc_url( $url ); ?>"
								<?php echo $is_current ? ' aria-current="page"' : ''; ?>
							>
								<span class="mobile-nav__icon mobile-nav__icon--<?php echo esc_attr( $icon_key ); ?>">
									<?php bdc_render_mobile_nav_icon( $icon_key ); ?>
								</span>
								<span class="mobile-nav__label"><?php echo esc_html( $label ); ?></span>
								<span class="mobile-nav__chevron" aria-hidden="true">
									<svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
										<path d="M9 6l6 6-6 6" />
									</svg>
								</span>
							</a>
						<?php endif; ?>
					</li>
				<?php endforeach; ?>
			</ul>
		</nav>

		<div class="mobile-nav__actions">
			<a
				class="mobile-nav__cta mobile-nav__cta--donate"
				href="<?php echo esc_url( $header_donate_link['url'] ); ?>"
				<?php echo bdc_acf_link_target_attr( $header_donate_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
			>
				<span><?php echo esc_html( $header_donate_text ); ?></span>
				<svg class="mobile-nav__cta-icon" viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.9" aria-hidden="true">
					<path d="M12 20.35l-1.45-1.32C5.4 14.36 2 11.28 2 7.5 2 4.42 4.42 2 7.5 2c1.74 0 3.41.81 4.5 2.09C13.09 2.81 14.76 2 16.5 2 19.58 2 22 4.42 22 7.5c0 3.78-3.4 6.86-8.55 11.54L12 20.35z" />
				</svg>
			</a>
			<a
				class="mobile-nav__cta mobile-nav__cta--apply"
				href="<?php echo esc_url( $header_apply_link['url'] ); ?>"
				<?php echo bdc_acf_link_target_attr( $header_apply_link ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
			>
				<span><?php echo esc_html( $header_apply_text ); ?></span>
				<svg class="mobile-nav__cta-icon" viewBox="0 0 24 24" width="20" height="20" fill="currentColor" aria-hidden="true">
					<circle cx="8.4" cy="8.2" r="2.15" />
					<path d="M3.7 16.55c.25-2.25 2.15-3.45 4.7-3.45s4.45 1.2 4.7 3.45c.04.35-.23.7-.6.7H4.3c-.37 0-.64-.35-.6-.7z" />
					<circle cx="16.2" cy="8.55" r="1.9" />
					<path d="M13.35 16.55c.16-1.3 1-2.25 2.45-2.65 1.35.4 2.35 1.35 2.55 2.65.04.35-.23.7-.6.7h-3.8c-.37 0-.64-.35-.6-.7z" />
				</svg>
			</a>
		</div>

		<div class="mobile-nav__follow">
			<p class="mobile-nav__follow-title"><?php esc_html_e( 'Follow Us', 'bright-dreamers-club' ); ?></p>
			<ul class="mobile-nav__social" aria-label="<?php esc_attr_e( 'Social media', 'bright-dreamers-club' ); ?>">
				<?php foreach ( $header_social as $social ) : ?>
					<?php
					$social_slug = isset( $social['slug'] ) ? (string) $social['slug'] : '';
					$social_url  = ! empty( $social['url'] ) ? (string) $social['url'] : '';

					if ( '' === $social_slug || '' === $social_url ) {
						continue;
					}
					?>
					<li>
						<a
							class="mobile-nav__social-link"
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
	</div>
</div>
