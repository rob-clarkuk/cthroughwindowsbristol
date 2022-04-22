<section class="ktp section__lightgrey pb2 pl3 pr3 pt2 mb2">
	<div class="grid1 grid">
		<?php if(get_sub_field('title')){ ;?>
			<div class="kpt__title">
				<h2 class="heading__lg heading__body-font text__center font400 heading__grey"><?php the_sub_field('title');?></h2>
			</div>
		<?php } ;?>
		<?php if(get_sub_field('key_point')){ ;?>
			<div class="ktp__content">
				<?php if( have_rows('key_point') ): ;?>
					<?php while( have_rows('key_point') ) : the_row();?>
						<div class="ktp__content--item pl2 pr2">
							<?php if(get_sub_field('title')){ ;?>
								<div class="ktp__content__title">
									<h2 class="heading__sm heading__body-font text__center heading__primary"><?php the_sub_field('title');?></h2>
								</div>
							<?php } ;?>
						</div>
					<?php endwhile;?>
				<?php endif;?>
			</div>
		<?php } ;?>
	</div>
</section>