<?php
/**
 * Shared branded HTML email wrapper.
 *
 * @package Bright_Dreamers_Club
 *
 * @var string $content   Inner HTML content.
 * @var string $home_url  Site home URL.
 * @var string $logo_url  Logo image URL.
 * @var bool   $show_home Whether to show Back to Home button.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Bright Dreamers</title>
</head>
<body style="margin:0;padding:0;background-color:#f7f8fb;font-family:Outfit,Arial,sans-serif;color:#001b66;">
	<table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background-color:#f7f8fb;padding:24px 12px;">
		<tr>
			<td align="center">
				<table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="max-width:620px;background:#ffffff;border:1px solid #e6e9f2;border-radius:16px;overflow:hidden;">
					<tr>
						<td style="padding:28px 28px 12px;text-align:center;">
							<img src="<?php echo esc_url( $logo_url ); ?>" alt="Bright Dreamers" width="180" style="max-width:180px;height:auto;display:inline-block;" />
						</td>
					</tr>
					<tr>
						<td style="padding:8px 28px 24px;font-size:16px;line-height:1.6;color:#001b66;">
							<?php echo $content; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- template HTML built with escaped values. ?>
						</td>
					</tr>
					<tr>
						<td style="padding:0 28px 28px;text-align:center;">
							<p style="margin:0 0 16px;font-family:Bitter,Georgia,serif;font-size:16px;font-weight:700;color:#ee1d78;">Dream &bull; Create &bull; Grow &bull; Give</p>
							<?php if ( ! empty( $show_home ) ) : ?>
								<a href="<?php echo esc_url( $home_url ); ?>" style="display:inline-block;padding:12px 22px;background:#ee1d78;color:#ffffff;text-decoration:none;border-radius:10px;font-weight:600;font-size:15px;">Back to Home</a>
							<?php endif; ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>
