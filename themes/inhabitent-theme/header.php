<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
			  <div class="top-container"> 

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<div class="header-logo-box">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
								<img class ="header-logo" id="header-logo" src="<?php echo get_template_directory_uri() ?>/Inhabitent-site/images/logos/inhabitent-logo-tent.svg" alt="">
							</a>
					</div>

					<div class="nav-logo-box">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

						<span class="header-search">
                        	<?php get_search_form(); ?>
                    	</span><!--header-search-->
					</div>
				</nav><!-- #site-navigation -->
			  </div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">
