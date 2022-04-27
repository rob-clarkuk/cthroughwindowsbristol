<section class="textmap grid3 grid mb2">
	<div class="textmap__content pb3 pl4 pr4 pt2">
		<?php if(get_sub_field('title')){ ;?>
			<h3 class="heading__md heading__body-font font400 heading__light text__center"><?php the_sub_field('title');?></h3>
		<?php } ;?>
		<?php if( have_rows('info_blocks') ): ;?>
			<?php while( have_rows('info_blocks') ) : the_row();?>
				<div class="textmap__content--item">
					<?php if(get_sub_field('icon')){ ;?>
						<?php $icon = get_sub_field('icon');?>
						<div class="textmap__content--item__image">
							<img src="<?php echo esc_url($icon['sizes']['ktp-image']); ?>" alt="<?php echo esc_url($icon['alt']); ?>">
						</div>
					<?php } ;?>
					<div class="textmap__content--item__content">
						<div class="heading__md font700 heading__light"><?php the_sub_field('title');?></div>
						<div class="heading__body-font font400 heading__light"><?php the_sub_field('content');?></div>
					</div>
				</div>
			<?php endwhile;?>
		<?php endif;?>
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