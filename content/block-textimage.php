<section class="textimage grid3 grid pb2 pl2 pr2 pt2">
	<div class="textimage__content section__lightgrey">
		<?php if(get_sub_field('title')){ ;?>
			<h3 class="heading__lg heading__body-font font400 heading__grey"><?php the_sub_field('title');?></h3>
		<?php } ;?>
		<?php if(get_sub_field('content')){ ;?>
			<div><?php the_sub_field('content');?></div>
		<?php } ;?>
	</div>
</section>