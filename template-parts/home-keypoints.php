<?php
	if( have_rows('key_points') ):?>
	<section class="keypoints pb1 pt1">
		<div class="container keypoints__container">
		<?php while( have_rows('key_points') ) : the_row();?>
			<div class="keypoints__item text__center pb2 pl2 pr2 pt2" style="background-color:<?php the_sub_field('background_colour');?>">
				<div class="keypoints__item--icon"><?php get_template_part( 'icons/icon', 'tick' );?></div>
				<div class="keypoints__item--title font700 heading__sm"><?php the_sub_field('title');?></div>
			</div>
		<?php endwhile;?>
		</div>
	</section>
<?php endif;?>