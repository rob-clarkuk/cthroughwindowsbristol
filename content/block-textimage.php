<section class="textimage grid3 grid">
	<div class="textimage__content section__lightgrey pb2 pl4 pr4 pt2">
		<?php if(get_sub_field('title')){ ;?>
			<h3 class="heading__lg heading__body-font font400 heading__grey"><?php the_sub_field('title');?></h3>
		<?php } ;?>
		<?php if(get_sub_field('content')){ ;?>
			<div><?php the_sub_field('content');?></div>
		<?php } ;?>
	</div>
	<?php if(get_sub_field('image')){ ;?>
		<?php $image = get_sub_field('image');?>
		<div class="textimage__image">
			<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_url($image['alt']); ?>">
		</div>
	<?php } ;?>
</section>