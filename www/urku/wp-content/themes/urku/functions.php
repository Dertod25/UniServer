<?php
function vb_styles(){
	wp_enqueue_style( 'aurora-pack', get_template_directory_uri() . '/assets/css/aurora-pack.min.css');
	wp_enqueue_style( 'aurora-theme', get_template_directory_uri() . '/assets/css/aurora-theme-base.min.css');
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/urku.css');
	wp_enqueue_style( 'info-box-style', get_template_directory_uri() . '/assets/css/info-box.css');
}

add_action('wp_enqueue_scripts','vb_styles');

function vb_cripts(){	wp_enqueue_script( 'svg', get_template_directory_uri() . '/assets/js/svg4everybody.min.js', null, null, true);
}
add_action('wp_enqueue_scripts','vb_styles');

register_nav_menus( array(
		'main-menu' => "Main menu",
		'footer-menu' => "Footer menu"
));

//Filtering a Class in Navigation Menu Item
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class($classes, $item){
     $classes[] = 'rk-menu__item';
     return $classes;
}


function add_specific_menu_location_atts( $atts, $item, $args ) {
    // check if the item is in the primary menu
    $atts['class'] = 'rk-menu__link';
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3 );

add_theme_support('title-tag' );

add_theme_support('post-thumbnails' );

add_image_size( 'post-thumb', 910, 400, true);
 add_image_size( 'large', 910, 400, false); // false -будет обрезаться только по ширине, если true то четкое обрезание
add_image_size( 'team-photo', 410, 410, true);


register_sidebar( array(
		'name'          => 'Copyright', //имя в админке
		'id'            => 'copyright',
		'description'   => 'Content Copyright Area',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
