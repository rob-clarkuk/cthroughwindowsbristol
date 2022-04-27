<section class="textmap grid3 grid mb2">
	<div class="textmap__content pb2 pl4 pr4 pt2">
		<?php if(get_sub_field('title')){ ;?>
			<h3 class="heading__lg heading__body-font font400 heading__light"><?php the_sub_field('title');?></h3>
		<?php } ;?>
	</div>
	<?php if(get_sub_field('image')){ ;?>
		<?php $image = get_sub_field('image');?>
		<div class="textmap__image" style="background-image: url(<?php echo esc_url($image['sizes']['textimage-image']); ?>);">
			
		</div>
	<?php } ;?>
</section>