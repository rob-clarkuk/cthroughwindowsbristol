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
				<div class="header__topbar">
					<div class="header__topbar--opening">
						<?php the_sub_field('opening_hours');?>
					</div>
					<div class="header__topbar--phone">
						Call us on <a href="<?php the_sub_field('phone_number');?>"><?php the_sub_field('phone_number');?></a>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>






		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$cthroughwindowsbristol_description = get_bloginfo( 'description', 'display' );
			if ( $cthroughwindowsbristol_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $cthroughwindowsbristol_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'cthroughwindowsbristol' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
