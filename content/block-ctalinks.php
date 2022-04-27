<?php
	if( have_rows('ctas') ):?>
	<section class="ctaLinks section__lightgrey pb2 pl3 pr3 pt2 mb2">
		<div class="grid6 grid ">
			<?php while( have_rows('ctas') ) : the_row();?>
				<a class="ctaLinks__item text__center heading__xs">

				</a>
			<?php endwhile;?>
		</div>
	</section>
<?php endif;?>