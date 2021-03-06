<section class="itb section__lightgrey pb2 pl3 pr3 pt2 mb2">
	<div class="grid3 grid">
		<div class="itb__combined">
			<?php if(get_sub_field('title')){ ;?>
				<div class="itb__title">
					<h2 class="heading__lg heading__body-font text__center font400 heading__dark-grey"><?php the_sub_field('title');?></h2>
				</div>
			<?php } ;?>
			<?php if(get_sub_field('content')){ ;?>
				<div class="itb__content">
					<?php the_sub_field('content');?>
				</div>
			<?php } ;?>
		</div>
		<?php if(get_sub_field('image')){ ;?>
			<?php $image = get_sub_field('image');?>
			<div class="itb__image">
				<img src="<?php echo esc_url($image['sizes']['itb-image']); ?>" alt="<?php echo esc_url($image['alt']); ?>">
			</div>
		<?php } ;?>
	</div>
</section>