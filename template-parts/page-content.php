<?php if( have_rows('content_section') ):?>

<main class="pt2 container">
	<?php while ( have_rows('content_section') ) : the_row();?>

		<?php if( get_row_layout() == 'image_text_bullet_points_block' ):?>
			
			<?php get_template_part( 'content/block', 'itb' );?>

		<?php endif ;?>

	<?php endwhile;?>
</main>

<?php endif ;?>