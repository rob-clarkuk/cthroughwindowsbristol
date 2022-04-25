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
    				<div class="section__grey pt1 pb1 text__center heading__primary">
    					<?php the_sub_field('footer_cta_content');?>
    					<a href="<?php the_sub_field('footer_cta_button_link');?>" class="ml1 btn btn__primary heading__xs heading__light"><?php the_sub_field('footer_cta_button_text');?></a>
    				</div>
    			<?php };?>
    			<div class="footer__contact pb5 pt5 text__center">
    				<?php if (get_sub_field('availability_content')) { ?>
    					<div class="heading__lg heading__grey"><?php the_sub_field('availability_content');?></div>
    				<?php };?>
    				<?php if (get_sub_field('phone_number')) { ?>
    					<div class="pb2 pt2"><a href="tel:<?php the_sub_field('phone_number');?>" class="heading__lg heading__orange"><?php the_sub_field('phone_number');?></a></div>
    				<?php };?>
    				<?php if (get_sub_field('availability_content_2')) { ?>
    					<div class="heading__grey"><?php the_sub_field('availability_content_2');?></div>
    				<?php };?>
    			</div>
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
