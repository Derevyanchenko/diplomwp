<?php  

add_action('wp_enqueue_scripts', 'theme_styles');
// add_action('wp_enqueue_scripts', 'theme_scripts');


function theme_styles() {
	wp_enqueue_style('styles', get_stylesheet_uri() );
	wp_enqueue_style('bootstrap',get_template_directory_uri() . '/assets/css/bootstrap.css');
	wp_enqueue_style('style',get_template_directory_uri() . '/assets/css/style.css');
}
// function theme_scripts() {

// 	wp_deregister_script( 'jquery' );
// 	wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js');
// 	wp_enqueue_script('jquery');
// 	wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', array('jquery'), null, true );
// 	wp_enqueue_script('flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js', array('jquery'), null, true );
// 	wp_enqueue_script('doubletaptogo', get_template_directory_uri() . '/assets/js/doubletaptogo.js', array('jquery'), null, true );
// 	wp_enqueue_script('init', get_template_directory_uri() . '/assets/js/init.js', array('jquery'), null, true );
// }

