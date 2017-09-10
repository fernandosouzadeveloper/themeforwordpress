<?php 
 	function theme_styles() {
 		wp_enqueue_style('bootstrap_css', get_template_directory_uri()  . '/css/bootstrap.min.css');
 		wp_enqueue_style('main_style' , get_template_directory_uri() . '/style.css');

 	}

 	add_action( 'wp_enqueue_scripts', 'theme_styles' );


 	function theme_js() {
 		wp_enqueue_script( 'bootstrap_js_min', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', '' ,true);
 
}
 	
 	add_action ('wp_enqueue_scripts' , 'theme_js');


// show or not admin bar

// add_filter('show_admin_bar', '__return_false');

add_theme_support( 'menus');

	function register_theme_menus(){
	register_nav_menus(
		array(
			'header-menu' => __('Header Menu')
			)
		);

}
add_action( 'init', 'register_theme_menus');




?>