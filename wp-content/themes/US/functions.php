<?php
/**
 *  functions
 *
 * @package WordPress
 * @subpackage 
 */
?>
<?php
add_theme_support( 'nav-menus' );
add_action( 'init', 'register_my_menus' );

function register_my_menus() {
	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu' )
		)
	);
}
?>
<?php
if ( function_exists('register_sidebar') )
    register_sidebar();
add_theme_support( 'post-thumbnails' ); 

if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150, true ); // Normal post thumbnails
}
function custom_excerpt_length( $length ) {
	return 120;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
function new_excerpt_more($excerpt) {
	return str_replace('[...]', '...', $excerpt);
}
add_filter('wp_trim_excerpt', 'new_excerpt_more');
?>