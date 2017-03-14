<?php

function cl_styles() {
	wp_enqueue_style( 'animate',  get_template_directory_uri() . '/css/animate.css');
	wp_enqueue_style( 'icomoon',  get_template_directory_uri() . '/css/icomoon.css');
	wp_enqueue_style( 'bootstrap',  get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style( 'main-style',  get_template_directory_uri() . '/css/style.css');
}

add_action( 'wp_enqueue_scripts', 'cl_styles' );


function cl_scripts() {
	wp_enqueue_script( 'modernizr.min',  get_template_directory_uri() . '/js/modernizr-2.6.2.min.js', '', '', true);
	wp_enqueue_script( 'jquery.easing.1.3',  get_template_directory_uri() . '/js/jquery.min.js', '', '', true);
	wp_enqueue_script( 'jquery.easing.1.3',  get_template_directory_uri() . '/js/jquery.easing.1.3.js', '', '', true);
	wp_enqueue_script( 'bootstrap.min',  get_template_directory_uri() . '/js/bootstrap.min.js', '', '', true);
	wp_enqueue_script( 'jquery.waypoints.min',  get_template_directory_uri() . '/js/jquery.waypoints.min.js', '', '', true);
	wp_enqueue_script( 'main',  get_template_directory_uri() . '/js/main.js', '', '', true);
}

add_action( 'wp_enqueue_scripts', 'cl_scripts' );

register_nav_menus( array(
		'main-menu' => "Main menu",
		'footer-menu' => "Footer menu"
));

//Filtering a Class in Navigation Menu Item
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class($classes, $item){
     $classes[] = 'cl-menu__item';
     return $classes;
}


function add_specific_menu_location_atts( $atts, $item, $args ) {
    // check if the item is in the primary menu
    $atts['class'] = 'cl-menu__link';
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3 );

add_theme_support('title-tag' );

add_theme_support('post-thumbnails' );



