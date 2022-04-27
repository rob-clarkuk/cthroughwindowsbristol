<?php if( have_rows('content') ):?>

<main class="pt2">
	<?php while ( have_rows('content') ) : the_row();?>

		<?php if( get_row_layout() == 'text_&_image_block' ):?>

		<div class="container">
			
			<?php get_template_part( 'content/block', 'textimage' );?>

		</div>

		<?php endif ;?>

		<?php if( get_row_layout() == 'text_image_combine_block' ):?>

		<div class="container">
			
			<?php get_template_part( 'content/block', 'combinedtextimage' );?>

		</div>

		<?php endif ;?>

		<?php if( get_row_layout() == 'cta_block' ):?>

		<div class="container">
			
			<?php get_template_part( 'content/block', 'cta' );?>

		</div>

		<?php endif ;?>

		<?php if( get_row_layout() == 'seperator' ):?>
			
			<?php get_template_part( 'content/block', 'seperator' );?>

		<?php endif ;?>

		<?php if( get_row_layout() == 'full_block_cta' ):?>
			
			<?php get_template_part( 'content/block', 'fullcta' );?>

		<?php endif ;?>

	<?php endwhile;?>
</main>

<?php endif ;?>