<?php 
	$heroImage = get_field('image');?>

<section class="hero text__center pb2 pt2" style="background-image: url(<?php echo esc_url($heroImage['url']); ?>);">
	<?php if(get_field('title')){ ;?>
		<div class="hero__title pb1">
			<h1 class="heading__xl heading__shadow heading__light font900 mb0 mt0"><?php the_field('title');?></h1>
		</div>
	<?php } ;?>
	<?php if(get_field('sub_title')){ ;?>
		<div class="hero__subtitle pb1">
			<h2 class="heading__md heading__shadow heading__light font100"><?php the_field('sub_title');?></h2>
		</div>
	<?php } ;?>
</section>