<?php
	if( have_rows('ctas') ):?>
	<section class="ctaLinks section__lightgrey mb2">
		<div class="grid6 grid ">
			<?php while( have_rows('ctas') ) : the_row();?>
				<a class="ctaLinks__item text__center" href="<?php the_sub_field('link');?>">
					<h6 class="heading__dark heading__xs font400"><?php the_sub_field('title');?></h6>
				</a>
			<?php endwhile;?>
		</div>
	</section>
<?php endif;?>