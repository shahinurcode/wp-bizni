<?php


/**
 * Registers a new post type
 * @uses $wp_post_types Inserts new post type object into the list
 *
 * @param string  Post type key, must not exceed 20 characters
 * @param array|string  See optional args description above.
 * @return object|WP_Error the registered post type object, or an error object
 */
function bizni_slider_post() {

	$labels = array(
		'name'               => __( 'Slider', 'bizni' ),
		'singular_name'      => __( 'Slider', 'bizni' ),
		'add_new'            => _x( 'Add New Slider', 'bizni' ),
		'add_new_item'       => __( 'Add New Slider', 'bizni' ),
		'edit_item'          => __( 'Edit Slider', 'bizni' ),
		'new_item'           => __( 'New Slider', 'bizni' ),
		'view_item'          => __( 'View Slider', 'bizni' ),
		'search_items'       => __( 'Search Sliders', 'bizni' ),
		'menu_name'          => __( 'Sliders', 'bizni' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'taxonomies'          => array(),
		'public'              => true,
		'show_in_admin_bar'   => true,
		'menu_icon'           => null,
		'has_archive'         => true,
		'rewrite'             => array( 'slug' => 'service'),
		'supports'            => array(
			'title',
			'editor',
			'author',
			'thumbnail',
			'custom-fields',
			'post-formats',
		),
	);

	register_post_type( 'slider', $args );
}

add_action( 'init', 'bizni_slider_post' );


// About Post tab
function bizni_about_tab_post() {

	$labels = array(
		'name'               => __( 'About Tab', 'bizni' ),
		'singular_name'      => __( 'About Tab', 'bizni' ),
		'add_new'            => _x( 'Add New Tab', 'bizni' ),
		'add_new_item'       => __( 'Add New Tab', 'bizni' ),
		'edit_item'          => __( 'Edit Tab', 'bizni' ),
		'new_item'           => __( 'New Tab', 'bizni' ),
		'view_item'          => __( 'View Tab', 'bizni' ),
		'search_items'       => __( 'Search Tab', 'bizni' ),
		'menu_name'          => __( 'About Tabs', 'bizni' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'taxonomies'          => array(),
		'public'              => true,
		'show_in_admin_bar'   => true,
		'menu_icon'           => null,
		'has_archive'         => true,
		'rewrite'             => array( 'slug' => 'about'),
		'supports'            => array(
			'title',
			'editor',
			'custom-fields',
		),
	);

	register_post_type( 'about_post', $args );
}

add_action( 'init', 'bizni_about_tab_post' );

// Project Post type
function bizni_our_project_post() {

	$labels = array(
		'name'               => __( 'Projects', 'bizni' ),
		'singular_name'      => __( 'Projects', 'bizni' ),
		'add_new'            => _x( 'Add New Project', 'bizni' ),
		'add_new_item'       => __( 'Add New Project', 'bizni' ),
		'edit_item'          => __( 'Edit Project', 'bizni' ),
		'new_item'           => __( 'New Project', 'bizni' ),
		'view_item'          => __( 'View Project', 'bizni' ),
		'search_items'       => __( 'Search Projects', 'bizni' ),
		'menu_name'          => __( 'Projects', 'bizni' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'taxonomies'          => array(),
		'public'              => true,
		'show_in_admin_bar'   => true,
		'menu_icon'           => null,
		'has_archive'         => true,
		'rewrite'             => array( 'slug' => 'service'),
		'supports'            => array(
			'title',
			'editor',
			'author',
			'thumbnail',
			'custom-fields',
			'post-formats',
		),
	);

	register_post_type( 'our_project', $args );
}

add_action( 'init', 'bizni_our_project_post' );



// Project Post type
function bizni_help_and_question() {

	$labels = array(
		'name'               => __( 'Help & FAQ', 'bizni' ),
		'singular_name'      => __( 'Help & FAQ', 'bizni' ),
		'add_new'            => _x( 'Add New Help & FAQ', 'bizni' ),
		'add_new_item'       => __( 'Add New Help & FAQ', 'bizni' ),
		'edit_item'          => __( 'Edit Help & FAQ', 'bizni' ),
		'new_item'           => __( 'New Help & FAQ', 'bizni' ),
		'view_item'          => __( 'View Help & FAQ', 'bizni' ),
		'search_items'       => __( 'Search Help & FAQ', 'bizni' ),
		'menu_name'          => __( 'Help & FAQS', 'bizni' ),
	);

	$args = array(
		'labels'            => $labels,
		'hierarchical'      => false,
		'taxonomies'        => array(),
		'public'            => true,
		'show_in_admin_bar' => true,
		'menu_icon'         => 'dashicons-editor-help',
		'has_archive'       => true,
		'rewrite'           => array( 'slug' => 'help'),
		'supports'          => array(	'title', 'editor', ),
	);

	register_post_type( 'help_and_ques', $args );
}

add_action( 'init', 'bizni_help_and_question' );

// Pricing Table
function bizni_pricing_table() {

	$labels = array(
		'name'               => __( 'Pricing Table', 'bizni' ),
		'singular_name'      => __( 'Pricing Table', 'bizni' ),
		'add_new'            => _x( 'Add New Pricing Table', 'bizni' ),
		'add_new_item'       => __( 'Add New Pricing Table', 'bizni' ),
		'edit_item'          => __( 'Edit Pricing Table', 'bizni' ),
		'new_item'           => __( 'New Pricing Table', 'bizni' ),
		'view_item'          => __( 'View Pricing Table', 'bizni' ),
		'menu_name'          => __( 'Pricing Tables', 'bizni' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'taxonomies'          => array(),
		'public'              => true,
		'show_in_admin_bar'   => true,
		'menu_icon'           => null,
		'has_archive'         => true,
		'rewrite'             => array( 'slug' => 'princing-table'),
		'supports'            => array(
			'title',
			'author',
		),
	);

	register_post_type( 'pricing_table', $args );
}

add_action( 'init', 'bizni_pricing_table' );