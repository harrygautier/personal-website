<?php

//checks is user is logged in as administrator then show bar
add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
	  show_admin_bar(false);
	}
}

show_admin_bar( false );


/*============================
INCLUDE SCRIPTS
============================*/
function hghome_script_enqueue() {

	//bootstrap files || https://getbootstrap.com/
	wp_enqueue_style('boostrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css', array(), '4.1.0', 'all');
	//wp_enqueue_script('bootstrap-jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', array( 'jquery' ), '3.1.1', true);
	wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', array(), '4.1.0', true);

	//google fonts queue || https://fonts.google.com
	wp_enqueue_style('google-font-montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,700', array(), '5.8.1', 'all');

	//my files || https://harrygautier.com
	wp_enqueue_style('my-css', get_template_directory_uri() . '/css/stylesheet.css', array(), '1.0.0', 'all');
	wp_enqueue_script('my-js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);

}
add_action('wp_enqueue_scripts', 'hghome_script_enqueue');



/*============================
ACTIVATE MENUS
============================*/
function hghome_theme_setup() {

	add_theme_support('menus');

	register_nav_menu('primary', 'Primary header navigation');
	//register_nav_menu('secondary', 'Footer navigation');

}
add_action('init', 'hghome_theme_setup', 0); //after init (initilisation)

/*============================
THEME SUPPORT FUNCTIONS
============================*/
//allow for post thumbnails
add_theme_support('post-thumbnails');




/*============================
ADDING CLASSES FUNCTIONS
============================*/
//adds bootstrap needed classes to li'
function add_classes_on_li($classes, $item, $args) {
  $classes[] = 'nav-item my-2 my-sm-0';
  return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li',1,3);




function custom_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
