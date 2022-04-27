<?php $image = get_sub_field('background_image');?>
<section class="fullcta pt7 pb5 mb2" style="background-image: url(<?php echo esc_url($image['url']); ?>)">
	<div class="container">
		<?php if(get_sub_field('title')){ ;?>
			<div class="fullcta__title">
				<h2 class="heading__lg heading__body-font text__center font400 heading__primary"><?php the_sub_field('title');?></h2>
			</div>
		<?php } ;?>
		<?php if( have_rows('ctas') ):?>
			<div class="grid4 grid fullcta__container">
				<?php while( have_rows('ctas') ) : the_row();?>
					<div class="fullcta__item">
						<?php if(get_sub_field('title')){ ;?>
							<div class="fullcta__item--title section__primary">
								<h5 class="heading__md heading__body-font text__center font400 heading__white pl2 pr2 pt2 pb2">
									<?php the_sub_field('title');?>
								</h5>
							</div>
						<?php } ;?>
					</div>
				<?php endwhile;?>
			</div>
		<?php endif ;?>
	</div>
</section>