<section class="textmap grid3 grid mb2">
	<div class="textmap__content pb2 pl4 pr4 pt2">
		<?php if(get_sub_field('title')){ ;?>
			<h3 class="heading__md heading__body-font font400 heading__light text__center;"><?php the_sub_field('title');?></h3>
		<?php } ;?>
	</div>
	<?php if(get_sub_field('map_image')){ ;?>
		<?php $image = get_sub_field('map_image');?>
		<div class="textmap__image pl2 pr2 pt2 pb2" style="background-image: url(<?php echo esc_url($image['sizes']['textimage-image']); ?>);">
			<?php if(get_sub_field('title')){ ;?>
				<h3 class="heading__md heading__body-font font700 heading__light text__center"><?php the_sub_field('map_overlay_text');?></h3>
			<?php } ;?>
		</div>
	<?php } ;?>
</section>