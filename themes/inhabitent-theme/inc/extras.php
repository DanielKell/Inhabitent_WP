<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

//This function changes the logo on the login page to the inhabitent logo
function inhabitent_login_logo() { ?> 
    <style type="text/css">
        #login h1 a, .login h1 a {
        background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/inhabitent-site/images/logos/inhabitent-logo-text-dark.svg);
		height:100px;
		width:320px;
		background-size: 320px 100px;
		background-repeat: no-repeat;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'inhabitent_login_logo' );

function inhabitent_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'inhabitent_login_logo_url' );

function inhabitent_login_title() {
	return 'Inhabitent';
}
add_filter('login_headertitle', 'inhabitent_login_title');

//Remove theme and plugin editors in this folder