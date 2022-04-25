<?php
	if( have_rows('key_points') ):?>
	<section class="keypoints pb1 pt1">
		<div class="container keypoints__container">
		<?php while( have_rows('key_points') ) : the_row();?>
			<div class="keypoints__item text-center pb2 pl2 pr2 pt2" style="background-color:<?php the_sub_field('background_colour');?>"><?php the_sub_field('title');?></div>
		<?php endwhile;?>
		</div>
	</section>
<?php endif;?>