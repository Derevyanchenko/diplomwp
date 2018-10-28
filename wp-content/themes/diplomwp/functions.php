<?php  

add_action('wp_enqueue_scripts', 'theme_styles');
add_action('wp_enqueue_scripts', 'theme_scripts');

add_theme_support("custom-logo");

add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'top', 'Меню в шапке' );
	add_theme_support('post-thumbnails', array("partners"));
	add_theme_support('title-tag');
	// add_image_size('partners_thumb', 540, 300, true);
}

function theme_settings_init(){
    register_setting( 'theme_settings', 'theme_settings' );
}



// Добавление Страницы настроек в меню
function add_settings_page() {
add_menu_page( __( 'Опции темы' ), __( 'Опции темы' ), 'manage_options', 'settings', 'theme_settings_page');
}

add_action('acf/init', 'my_acf_init');

function my_acf_init() {
	
	if( function_exists('acf_add_options_page') ) {
		
		$option_page = acf_add_options_page(array(
			'page_title' => 'Настройки темы',
			'menu_title' => 'Настройки темы',
			'menu_slug' => 'theme-general-settings',
			'capability' => 'edit_posts',
			'redirect' => false,
			'position' => '75.1',
			'post_id' => 'theme-general-settings',
		));
		
	}
	
}

add_action('init', 'my_custom_init');
function my_custom_init(){
	register_post_type('partners', array(
		'labels'             => array(
			'name'               => 'Партнеры', // Основное название типа записи
			'singular_name'      => 'Партнеры', // отдельное название записи типа Book
			'add_new'            => 'Добавить новых',
			'add_new_item'       => 'Добавить новых партнеров',
			'edit_item'          => 'Редактировать партнеров',
			'new_item'           => 'Новая партнер',
			'view_item'          => 'Посмотреть партнеров',
			'search_items'       => 'Найти партнеров',
			'not_found'          =>  'партнеров не найдено',
			'not_found_in_trash' => 'В корзине партнеров не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'партнеры'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','thumbnail','excerpt')
	) );
}

//Добавление действий
add_action( 'admin_init', 'theme_settings_init' );
add_action( 'admin_menu', 'add_settings_page' );


function theme_styles() {
	wp_enqueue_style('styles', get_stylesheet_uri() );
	wp_enqueue_style('audioplayer',get_template_directory_uri() . '/assets/css/audioplayer.css');
	wp_enqueue_style('bootstrap',get_template_directory_uri() . '/assets/css/bootstrap.css');
	wp_enqueue_style('jquery.fancybox',get_template_directory_uri() . '/assets/css/jquery.fancybox.css');
	wp_enqueue_style('jquery.formstyler',get_template_directory_uri() . '/assets/css/jquery.formstyler.css');
	wp_enqueue_style('style',get_template_directory_uri() . '/assets/css/style.css');
}
function theme_scripts() {
	wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), true);
    wp_enqueue_script('jquery');
	wp_enqueue_script('audioplayer', get_template_directory_uri() . 	'/assets/js/audioplayer.js', array('jquery'), true );
	wp_enqueue_script('google-maps', get_template_directory_uri() . 	'/assets/js/jquery.google-maps.min.js', array('jquery'), true );
	wp_enqueue_script('fancybox', get_template_directory_uri() . 		'/assets/js/jquery.fancybox.js', array('jquery'), true );
	wp_enqueue_script('formstyler', get_template_directory_uri() . 		'/assets/js/jquery.formstyler.js', array('jquery'), true );
	wp_enqueue_script('maskedinput', get_template_directory_uri() . 	'/assets/js/jquery.maskedinput.js', array('jquery'), true );
	wp_enqueue_script('map', get_template_directory_uri() . 			'/assets/js/map.js', array('jquery'), true );
	wp_enqueue_script('modernizr', get_template_directory_uri() . 		'/assets/js/modernizr.js', array('jquery'), true );
	wp_enqueue_script('onReady', get_template_directory_uri() . 		'/assets/js/onReady.js', array('jquery'), true );
	wp_enqueue_script('plugins-scroll', get_template_directory_uri() .  '/assets/js/plugins-scroll.js', array('jquery'), true );
	wp_enqueue_script('slick', get_template_directory_uri() . 			'/assets/js/slick.min.js', array('jquery'), true );
}

