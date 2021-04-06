<?php


/**
 * Enqueue scripts and styles.
 */
function bizni_theme_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css');
	wp_enqueue_style( 'animate', get_template_directory_uri().'/assets/css/animate.min.css');
	wp_enqueue_style( 'imagehover', get_template_directory_uri().'/assets/css/imagehover.min.css');
	wp_enqueue_style( 'normalize', get_template_directory_uri().'/assets/css/normalize.css');
	wp_enqueue_style( 'carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css');
	wp_enqueue_style( 'transitions', get_template_directory_uri().'/assets/css/owl.transitions.css');
	wp_enqueue_style( 'magnific', get_template_directory_uri().'/assets/css/magnific-popup.css');
	wp_enqueue_style( 'style', get_template_directory_uri().'/assets/css/style.css');
	wp_enqueue_style( 'site-style', get_template_directory_uri().'/assets/css/style.css');
	wp_enqueue_style( 'responsive', get_template_directory_uri().'/assets/css/responsive.css');
	wp_enqueue_style( 'switcher-1', get_template_directory_uri().'/assets/css/skin/switcher.css');

	// Skin Css
	wp_enqueue_style( 'skin-orange', get_template_directory_uri().'/assets/css/skin/orange.css');
	wp_enqueue_style( 'skin-green', get_template_directory_uri().'/assets/css/skin/green.css');
	wp_enqueue_style( 'skin-yellow', get_template_directory_uri().'/assets/css/skin/yellow.css');
	wp_enqueue_style( 'skin-wood', get_template_directory_uri().'/assets/css/skin/wood.css');
	wp_enqueue_style( 'skin-asbestos', get_template_directory_uri().'/assets/css/skin/asbestos.css');
	wp_enqueue_style( 'skin-alizarin', get_template_directory_uri().'/assets/css/skin/alizarin.css');
	wp_enqueue_style( 'main-css', get_stylesheet_uri() );


	// Theme scripts files
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js',  array('jquery'), time(), true );
	wp_enqueue_script( 'carousel', get_template_directory_uri().'/assets/js/owl.carousel.min.js',  array('jquery'), time(), true );
	wp_enqueue_script( 'mixitup', get_template_directory_uri().'/assets/js/jquery.mixitup.js',  array('jquery'), time(), true );
	wp_enqueue_script( 'magnific', get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js',  array('jquery'), time(), true );
	wp_enqueue_script( 'waypoints', get_template_directory_uri().'/assets/js/jquery.waypoints.min.js',  array('jquery'), time(), true );
	wp_enqueue_script( 'ajaxchimp', get_template_directory_uri().'/assets/js/jquery.ajaxchimp.min.js',  array('jquery'), time(), true );
	wp_enqueue_script( 'main_script', get_template_directory_uri().'/assets/js/main_script.js',  array('jquery'), time(), true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bizni_theme_scripts' );
