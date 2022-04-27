<?php if( have_rows('content') ):?>

<main class="pt2 container">
	<?php while ( have_rows('content') ) : the_row();?>

		<?php if( get_row_layout() == 'text_&_image_block' ):?>
			
			<?php get_template_part( 'content/block', 'textimage' );?>

		<?php endif ;?>

		<?php if( get_row_layout() == 'text_image_combine_block' ):?>
			
			<?php get_template_part( 'content/block', 'combinedtextimage' );?>

		<?php endif ;?>

		<?php if( get_row_layout() == 'cta_block' ):?>
			
			<?php get_template_part( 'content/block', 'cta' );?>

		<?php endif ;?>

	<?php endwhile;?>
</main>

<?php endif ;?>