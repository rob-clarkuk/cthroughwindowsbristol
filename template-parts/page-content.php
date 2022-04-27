<?php if( have_rows('content_section') ):?>

<main class="pt2 container">
	<?php while ( have_rows('content_section') ) : the_row();?>

		<?php if( get_row_layout() == 'image_text_bullet_points_block' ):?>

			<?php get_template_part( 'content/block', 'itb' );?>

		<?php endif ;?>

		<?php if( get_row_layout() == 'text_image_block' ):?>
			
			<?php get_template_part( 'content/block', 'textimage' );?>

		<?php endif ;?>

		<?php if( get_row_layout() == 'key_points_text_block' ):?>
			
			<?php get_template_part( 'content/block', 'keypointstext' );?>

		<?php endif ;?>

		<?php if( get_row_layout() == 'cta_links' ):?>
			
			<?php get_template_part( 'content/block', 'ctalinks' );?>

		<?php endif ;?>

		<?php if( get_row_layout() == 'text' ):?>
			
			<?php get_template_part( 'content/block', 'text' );?>

		<?php endif ;?>

	<?php endwhile;?>
</main>

<?php endif ;?>