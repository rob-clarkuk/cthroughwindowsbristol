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
    					<a href="<?php the_sub_field('footer_cta_button_link');?>" class="ml1 btn btn__secondary heading__xs heading__light"><?php the_sub_field('footer_cta_button_text');?></a>
    				</div>
    			<?php };?>
    			<div class="footer__contact pb9 pt9 text__center">
    				<?php if (get_sub_field('availability_content')) { ?>
    					<div class="heading__lg heading__grey"><?php the_sub_field('availability_content');?></div>
    				<?php };?>
    				<?php if (get_sub_field('phone_number')) { ?>
    					<div class="pb1 pt1"><a href="tel:<?php the_sub_field('phone_number');?>" class="heading__lg heading__orange"><?php the_sub_field('phone_number');?></a></div>
    				<?php };?>
    				<?php if (get_sub_field('availability_content_2')) { ?>
    					<div class="heading__grey"><a href="<?php the_sub_field('contact_link');?>" class="heading__grey"><?php the_sub_field('availability_content_2');?></a></div>
    				<?php };?>
    				<?php if( have_rows('contact_icons') ): ?>
	    			<div class="footer__icons pt2">
						<?php while( have_rows('contact_icons') ): the_row();?>	
							<a href="<?php the_sub_field('link');?>">
								<div class="heading__xs heading__light pb1"><?php the_sub_field('title');?></div>
								<?php if(get_sub_field('image')){ ;?>
									<?php $image = get_sub_field('image');?>
									<img src="<?php echo esc_url($image['sizes']['ktp-image']);?>">
								<?php } ;?>
							</a>
						<?php endwhile; ?>
	    			</div>
	    			<?php endif; ?>
    			</div>
    			<div class="pt1 pb1 text__center heading__primary">
					Click to Go Back to Top of Page
					<a href="#top" class="ml1 btn btn__secondary heading__xs heading__light">Top of Page</a>
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
