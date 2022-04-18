<section class="itb section__lightgrey pb2 pl2 pr2 pt2">
	<div class="grid3 grid">
		<?php if(get_field('title')){ ;?>
			<div class="">
				<h2 class="heading__lg heading__body-font text-center font400 heading__grey"><?php the_field('title');?></h2>
			</div>
		<?php } ;?>
	</div>
</section>