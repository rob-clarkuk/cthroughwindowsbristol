<?php $image = get_sub_field('background_image');?>
<section class="fullcta pt7 pb5 mb2" style="background-image: url(<?php echo esc_url($image['url']); ?>)">
	<div class="container">
		<?php if(get_sub_field('title')){ ;?>
			<div class="fullcta__title">
				<h2 class="heading__lg heading__body-font text__center font400 heading__primary"><?php the_sub_field('title');?></h2>
			</div>
		<?php } ;?>
	</div>
</section>