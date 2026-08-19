<?php
/**
 * Admin notification email body.
 *
 * @package Bright_Dreamers_Club
 *
 * @var string                               $form_label   Form label.
 * @var array<int, array{label:string,value:string}> $rows Display rows.
 * @var string                               $submitted_at Submission timestamp.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<h1 style="margin:0 0 12px;font-family:Bitter,Georgia,serif;font-size:24px;color:#001b66;">New <?php echo esc_html( $form_label ); ?> Submission</h1>
<p style="margin:0 0 20px;font-size:15px;color:#334;">Submitted on <?php echo esc_html( $submitted_at ); ?>.</p>
<table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="border-collapse:collapse;font-size:15px;">
	<?php foreach ( $rows as $row ) : ?>
		<tr>
			<th align="left" valign="top" style="padding:10px 12px;border:1px solid #e6e9f2;background:#f8f9fc;width:38%;font-weight:600;color:#001b66;"><?php echo esc_html( $row['label'] ); ?></th>
			<td valign="top" style="padding:10px 12px;border:1px solid #e6e9f2;color:#001b66;white-space:pre-wrap;"><?php echo esc_html( $row['value'] ); ?></td>
		</tr>
	<?php endforeach; ?>
</table>
