<?php



// Metabox for theme
function bizni_theme_metabox() {


	$prifix = '_bizni_';

	/*
	 * Metabox to be displayed on a single page ID
	 */
	$slider = new_cmb2_box( array(
		'id'           => $prefix . 'slider_metabox',
		'title'        => esc_html__( 'Slider Metabox', 'cmb2' ),
		'object_types' => array( 'slider' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
	) );

	// Fields for slider
	$slider->add_field( array(
		'name' => esc_html__( 'Slider Link 1', 'cmb2' ),
		'desc' => esc_html__( 'Input slider link 1', 'cmb2' ),
		'id'   => 'slider_link_1',
		'type' => 'text',
	) );
	// Fields for slider
	$slider->add_field( array(
		'name' => esc_html__( 'Slider Link 2', 'cmb2' ),
		'desc' => esc_html__( 'Input slider link 2', 'cmb2' ),
		'id'   => 'slider_link_2',
		'type' => 'text',
	) );


	/// About Tab Post
	$about_tab = new_cmb2_box( array(
		'id'           => $prefix . 'about_tab_meta',
		'title'        => esc_html__( 'About Metabox', 'cmb2' ),
		'object_types' => array( 'about_post' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
	) );

	// Fields for About Tab
	$about_tab->add_field( array(
		'name' => esc_html__( 'Tab Name', 'cmb2' ),
		'desc' => esc_html__( 'Input Your Tab Name', 'cmb2' ),
		'id'   => 'tab_name_id',
		'type' => 'text',
	) );

	/// Our Project meta
	$project = new_cmb2_box( array(
		'id'           => $prefix . 'project_meta',
		'title'        => esc_html__( 'Project Metabox', 'cmb2' ),
		'object_types' => array( 'our_project' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
	) );
	// Fields for project
	$project->add_field( array(
		'name' => esc_html__( 'Project Link', 'cmb2' ),
		'desc' => esc_html__( 'Input Your Project Link', 'cmb2' ),
		'id'   => 'project_link',
		'type' => 'text',
	) );


	/// Pricing Table Metabox
	$pricing_table = new_cmb2_box( array(
		'id'           => $prefix . 'pricing_meta',
		'title'        => esc_html__( 'Pricing Table Metabox', 'cmb2' ),
		'object_types' => array( 'pricing_table' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
	) );

	// Fields for Pricing
	$pricing_table->add_field( array(
		'name' => esc_html__( 'Pakage Price', 'cmb2' ),
		'desc' => esc_html__( 'Input Your Pakage Price', 'cmb2' ),
		'id'   => 'pakage_price',
		'type' => 'text',
	) );
	// Fields for Pricing
	$pricing_table->add_field( array(
			'name' 			=> esc_html__( 'Pakage Featured', 'cmb2' ),
			'desc' 			=> esc_html__( 'Input Your Pakage Facility', 'cmb2' ),
			'id'   			=> 'pakage_featured',
			'type'             => 'radio',
			'show_option_none' => true,
			'options'          => array(
			'1' => __( 'Featured Pakage ?', 'cmb2' 
		)),
	) );

	// Fields for Pricing
	$pricing_table->add_field( array(
		'name' => esc_html__( 'Pakage Facility', 'cmb2' ),
		'desc' => esc_html__( 'Input Your Pakage Facility', 'cmb2' ),
		'id'   => 'pakage_facility',
		'type' => 'text',
		'repeatable' 	=> true,
		'default'		=> 'X'
	) );

	// Fields for Pricing
	$pricing_table->add_field( array(
		'name' => esc_html__( 'Pakage Link', 'cmb2' ),
		'desc' => esc_html__( 'Input Your Pakage Link', 'cmb2' ),
		'id'   => 'pakage_link',
		'type' => 'text',
	) );



}
add_action( 'cmb2_init', 'bizni_theme_metabox' );