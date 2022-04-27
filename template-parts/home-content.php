<?php if( have_rows('content') ):?>

<main class="pt2 container">
	<?php while ( have_rows('content') ) : the_row();?>

		<?php if( get_row_layout() == 'text_image_block' ):?>
			
			<?php get_template_part( 'content/block', 'textimage' );?>

		<?php endif ;?>

	<?php endwhile;?>
</main>

<?php endif ;?>