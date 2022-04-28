<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cthroughwindowsbristol
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<script src="https://kit.fontawesome.com/96c1c048a9.js" crossorigin="anonymous"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'cthroughwindowsbristol' ); ?></a>

	<header class="header">
		<?php if( have_rows('header', 'option') ): ?>
    		<?php while( have_rows('header', 'option') ): the_row();?>
				<div class="header__topbar pb1 pt1">
					<div class="header__container header__topbar--container">
						<div class="header__topbar--opening heading__light">
							<?php get_template_part( 'icons/icon', 'clock' );?> <?php the_sub_field('opening_hours');?>
						</div>
						<div class="header__topbar--phone heading__light-grey">
							Call us on <a href="<?php the_sub_field('phone_number');?>" class="heading__light"><?php the_sub_field('phone_number');?></a><?php get_template_part( 'icons/icon', 'phone' );?>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
		<div class="header__nav">
			<div class="header__container header__nav--container">
				<div class="header__nav--logo">
					<?php
					the_custom_logo();
					?>
				</div>
				<nav class="header__nav--navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'cthroughwindowsbristol' ); ?></button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav>
			</div>
		</div>




		

		
	</header><!-- #masthead -->
