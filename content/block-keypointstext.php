<section class="kpt section__lightgrey pb2 pl3 pr3 pt2 mb2">
	<div class="grid1 grid">
		<?php if(get_sub_field('title')){ ;?>
			<div class="kpt__title">
				<h2 class="heading__lg heading__body-font text__center font400 heading__grey"><?php the_sub_field('title');?></h2>
			</div>
		<?php } ;?>
		<?php if(get_sub_field('key_point')){ ;?>
			<div class="kpt__content">
				<?php if( have_rows('key_point') ): ;?>
					<?php while( have_rows('key_point') ) : the_row();?>
						<div class="kpt__content--item">
							<?php if(get_sub_field('title')){ ;?>
								<div class="kpt__content__title">
									<h2 class="heading__md heading__body-font text__center font400 heading__primary"><?php the_sub_field('title');?></h2>
								</div>
							<?php } ;?>
						</div>
					<?php endwhile;?>
				<?php endif;?>
			</div>
		<?php } ;?>
	</div>
</section>