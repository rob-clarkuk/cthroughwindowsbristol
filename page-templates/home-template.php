<?php
/**
 * ============== Template Name: Home
 */
get_header();?>

<?php get_template_part( 'template-parts/home', 'hero' );?>
<?php get_template_part( 'template-parts/home', 'keypoints' );?>
<?php get_template_part( 'template-parts/home', 'content' );?>

<?php get_footer(); ?>