<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cthroughwindowsbristol
 */

?>

	<footer class="footer">
		<?php if( have_rows('footer', 'option') ): ?>
    		<?php while( have_rows('footer', 'option') ): the_row();?>
    			<?php if (get_sub_field('footer_cta_content')) { ?>
    				<div class="section__grey pt1 pb1">

    				</div>
    			<?php };?>
	    	<?php endwhile; ?>
		<?php endif; ?>


		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'cthroughwindowsbristol' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'cthroughwindowsbristol' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'cthroughwindowsbristol' ), 'cthroughwindowsbristol', '<a href="https://robclarkdesigner.uk">Rob Clark Designer</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
