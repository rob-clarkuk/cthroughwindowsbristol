<?php
	if( have_rows('ctas') ):?>
	<section class="ctaBlock section__lightgrey pb2 pl3 pr3 pt2 mb2">
		<div class="grid4 grid">
			<?php while( have_rows('ctas') ) : the_row();?>
				<div class="ctaBlock__item text__center heading__xs">
					<h4 class="heading__secondary"><?php the_sub_field('title');?></h4>
					<div><?php the_sub_field('content');?></div>
					<a href="<?php the_sub_field('link');?>" class="btn"><?php the_sub_field('button_title');?></a>
				</div>
			<?php endwhile;?>
		</div>
	</section>
<?php endif;?>