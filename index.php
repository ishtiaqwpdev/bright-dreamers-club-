<?php
/**
 * Main template file (required by WordPress).
 *
 * Page content migration pending — placeholder skeleton only.
 *
 * @package Bright_Dreamers_Club
 */

get_header();
?>

<main id="main-content">
	<?php if ( have_posts() ) : ?>
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<article <?php post_class(); ?>>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</article>
		<?php endwhile; ?>
	<?php else : ?>
		<p><?php esc_html_e( 'Bright Dreamers Club theme is active. Static page templates will be added in a later step.', 'bright-dreamers-club' ); ?></p>
	<?php endif; ?>
</main>

<?php
get_footer();
