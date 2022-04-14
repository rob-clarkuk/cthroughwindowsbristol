<?php 
	$heroImage = get_field('hero_image');?>

<section class="hero text__center" style="background-image: url(<?php echo esc_url($heroImage['url']); ?>);">
	<?php if(get_field('hero_title')){ ;?>
		<div class="hero__title pb1 mb0 mt0">
			<h1 class="heading__xl heading__shadow heading__light font100"><?php the_field('hero_title');?></h1>
		</div>
	<?php } ;?>
	<?php if(get_field('hero_sub_title')){ ;?>
		<div class="hero__subtitle pb1">
			<h2 class="heading__md heading__shadow heading__light font100"><?php the_field('hero_sub_title');?></h2>
		</div>
	<?php } ;?>
	<?php
		if( have_rows('hero_buttons') ):?>
			<div class="hero__cta">
			<?php while( have_rows('hero_buttons') ) : the_row();?>
				<a href="<?php the_sub_field('button_link');?>" class="btn btn__shadow <?php the_sub_field('button_style');?>">
					<?php the_sub_field('button_title');?>
				</a>
			<?php endwhile;?>
			</div>
		<?php endif;?>
</section>