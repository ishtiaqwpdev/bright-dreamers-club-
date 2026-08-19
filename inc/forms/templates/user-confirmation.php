<?php
/**
 * User confirmation email body.
 *
 * @package Bright_Dreamers_Club
 *
 * @var string[] $paragraphs Email paragraphs (already escaped where needed).
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

foreach ( $paragraphs as $paragraph ) :
	?>
	<p style="margin:0 0 16px;"><?php echo wp_kses_post( $paragraph ); ?></p>
	<?php
endforeach;
