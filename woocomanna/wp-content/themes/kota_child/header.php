<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kota
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kota' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
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
				$kota_description = get_bloginfo( 'description', 'display' );
				if ( $kota_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $kota_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->
			<?php
                if ( is_active_sidebar( 'custom-header-widget' ) ) : ?>
	          <div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">
	          <?php dynamic_sidebar( 'custom-header-widget' ); ?>
	 </div>
	  
 <?php endif; ?>
			<div class="site-navbar">
				<ul class="site-search-toggle">
					<li><i class="fa fa-search"></i></li>
					<div class="site-search-wrap">
						<i class="fa fa-times"></i>
					<?php if ( class_exists( 'WooCommerce' ) ) :
						kota_woocommerce_header_search();
					else :
						get_search_form();
					endif;
					?>
					</div>
				</ul>
				<?php
				wp_nav_menu( array(
					'theme_location'	=> 'navbar-menu',
					'menu_id'			=> 'navbar-menu',
					'container_class'	=> 'site-navbar-menu',
					'fallback_cb'		=> '',
					'depth'				=> 1,
				) );
				?>
				<?php
					if ( function_exists( 'kota_woocommerce_header_cart' ) ) {
						kota_woocommerce_header_cart();
					}
				?>
				
			</div><!-- .site-navbar -->
		</div>
		<nav id="site-navigation" class="main-navigation">
			<div class="container">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i> <?php esc_html_e( 'Menu', 'kota' ); ?></button>
				<?php
				wp_nav_menu( array(
					'theme_location'	=> 'menu-1',
					'menu_id'			=> 'primary-menu',
				) );
				?>
				
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div class="container">
