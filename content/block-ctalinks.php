<?php
	if( have_rows('ctas') ):?>
	<section class="ctaLinks section__lightgrey mb2">
		<div class="grid6 grid ">
			<?php while( have_rows('ctas') ) : the_row();?>
				<a class="ctaLinks__item text__center pb3 pl3 pr3 pt3" href="<?php the_sub_field('link');?>">
					<div class="ctaLinks__item--icon">
						<?php 
							if( get_sub_field('icon') == 'icon-house1' ) {
							     get_template_part( 'icons/icon', 'house1' );
							} elseif( get_sub_field('icon') == 'icon-house2' ) {
							     get_template_part( 'icons/icon', 'house2' );
							} elseif( get_sub_field('icon') == 'icon-house3' ) {
							     get_template_part( 'icons/icon', 'house3' );
							} elseif( get_sub_field('icon') == 'icon-person' ) {
							     get_template_part( 'icons/icon', 'person' );
							} elseif( get_sub_field('icon') == 'icon-roof' ) {
							     get_template_part( 'icons/icon', 'roof' );
							} elseif( get_sub_field('icon') == 'icon-buildings' ) {
							     get_template_part( 'icons/icon', 'buildings' );
							}
						;?>
					</div>
					<h6 class="heading__dark heading__xs font400"><?php the_sub_field('title');?></h6>
				</a>
			<?php endwhile;?>
		</div>
	</section>
<?php endif;?>