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
    				<div class="section__grey pt1 pb1 text__center heading__primary footer__cta">
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
				<div class="pt3 pb3 section__grey text__left">
					<div class="container footer__navigation">
						<?php if( have_rows('navigation_1') ): ?>
							<?php while( have_rows('navigation_1') ): the_row();?>
								<div>
									<div class="heading__md heading__primary pb1"><?php the_sub_field('title');?></div>
									<?php if( have_rows('links') ): ?>
										<ul class="ml0 pl0">
											<?php while( have_rows('links') ): the_row();?>
												<li>
													<a href="<?php the_sub_field('link');?>" class="heading__dark-grey heading__xs">
														<?php the_sub_field('title');?>			
													</a>
												</li>
											<?php endwhile; ?>
										</ul>
									<?php endif; ?>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
						<?php if( have_rows('navigation_2') ): ?>
							<?php while( have_rows('navigation_2') ): the_row();?>
								<div>
									<div class="heading__md heading__primary pb1"><?php the_sub_field('title');?></div>
									<?php if( have_rows('links') ): ?>
										<ul class="ml0 pl0">
											<?php while( have_rows('links') ): the_row();?>
												<li>
													<a href="<?php the_sub_field('link');?>" class="heading__dark-grey heading__xs">
														<?php the_sub_field('title');?>			
													</a>
												</li>
											<?php endwhile; ?>
										</ul>
									<?php endif; ?>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
						<div>
							<?php if(get_sub_field('contact_details')){ ;?>
								<div class="heading__md heading__primary pb1">Contact Details</div>
								<div class="heading__xs">
									<?php the_sub_field('contact_details');?>
								</div>
							<?php } ;?>
						</div>
						<?php if( have_rows('social') ): ?>
							<div>
								<div class="heading__md heading__primary pb1">Follow us</div>
								<div class="footer__navigation--social">
									<?php while( have_rows('social') ): the_row();?>
										<?php if(get_sub_field('image')){ ;?>
										<?php $image = get_sub_field('image');?>
											<a href="<?php the_sub_field('link');?>">
												<img src="<?php echo esc_url($image['sizes']['ktp-image']);?>">
											</a>
										<?php } ;?>
									<?php endwhile; ?>
								</div>
							</div>
						<?php endif; ?>
					</div>
				</div>
	    	<?php endwhile; ?>
		<?php endif; ?>
		<div class="text__center section__darkgrey heading__xs heading__grey">
			<div class="footer__copyright pt1 pb1 ">
				<div>Copyright <?php echo date("Y"); ?> &copy; CThrough Windows</div>
				<div>Website design by Synergy</div>
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
