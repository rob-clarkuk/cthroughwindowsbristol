<section class="itb section__lightgrey pb2 pl2 pr2 pt2">
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
	</div>
</section>