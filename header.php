<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wcm-static
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
<?php wp_body_open(); ?>
<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wcm-static' ); ?></a>

	<div class="header__top-bar"><?php echo get_theme_mod('set-text-header','Summer Sale For All Swim Suits And Free Express Delivery - OFF 50%!')?><a class="header__show-now" href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>">ShopNow</a></div>
	<!-- navigation main -->
	<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'wcm-static' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
	</nav><!-- #site-navigation -->
	<div class="header__main">
	 <header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
				<?php
			endif;
			$wcm_static_description = get_bloginfo( 'description', 'display' );
			if ( $wcm_static_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $wcm_static_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

	
	 </header><!-- #masthead -->
     <div class="header__search"><?php get_search_form() ?></div>

    <div class="header__left">
	  <div class="header__cart">
		<a class="fs-3" href="<?php echo wc_get_cart_url() ?>"><i class="bi bi-cart2 header__cart-number"></i></a>
		<div class="header__cart-count"><?php echo $cart_quantity = WC()->cart->get_cart_contents_count() ;?></div>
	  </div>
	  <a href="<?php echo get_permalink (wc_get_page_id ('myaccount'))?>" class="header__accout "><?php print_r(get_avatar(get_current_user_id())) ; ?></a>
	</div>
	</div>

	

	
