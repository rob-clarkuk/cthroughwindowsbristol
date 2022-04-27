<?php
	if( have_rows('ctas') ):?>
	<section class="ctaLinks section__lightgrey pb2 pl3 pr3 pt2 mb2">
		<div class="grid6 grid ">
			<?php while( have_rows('ctas') ) : the_row();?>
				<a class="ctaLinks__item text__center heading__xs">
					<h6 class="heading__dark"><?php the_sub_field('title');?></h6>
				</a>
			<?php endwhile;?>
		</div>
	</section>
<?php endif;?>