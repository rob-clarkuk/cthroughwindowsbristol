<section class="itb section__lightgrey pb2 pl2 pr2 pt2 mb2">
	<div class="grid3 grid">
		<?php if(get_sub_field('title')){ ;?>
			<div class="itb__title">
				<h2 class="heading__lg heading__body-font text__center font400 heading__grey"><?php the_sub_field('title');?></h2>
			</div>
		<?php } ;?>
		<?php if(get_sub_field('content')){ ;?>
			<div class="itb__content">
				<?php the_sub_field('content');?>
			</div>
		<?php } ;?>
		<?php if(get_sub_field('bullet_points')){ ;?>
			<div class="itb__bullets">
				<?php if( have_rows('bullet_points') ): ;?>
				<ul>
					<?php while( have_rows('bullet_points') ) : the_row();?>
						<li><?php the_sub_field('bullet_point');?></li>
					<?php endwhile;?>
				</ul>
				<?php endif;?>
			</div>
		<?php } ;?>
		<?php if(get_sub_field('image')){ ;?>
			<?php $image = get_sub_field('image');?>
			<div class="itb__image">
				<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_url($image['alt']); ?>">
			</div>
		<?php } ;?>
	</div>
</section>