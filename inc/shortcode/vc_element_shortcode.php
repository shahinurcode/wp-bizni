<?php


// VC widgets 
function bizni_vc_element(){
	// Slider VC Map
	vc_map( array(
		'name'        => 'Bizni Slider',
		'description' => 'Bizni Slider for Bizni theme ',
		'base'        => 'bizni_slider',
		'category'    => 'Bizni Theme',
		'icon'		=> get_template_directory_uri(). '/assets/img/logo.png',
	));


	// Feature VC Map
	vc_map( array(
		'name'        => 'Bizni Feature',
		'description' => 'Bizni Feature',
		'base'        => 'feature_post',
		'category'    => 'Bizni Theme',
		'icon'		=> get_template_directory_uri(). '/assets/img/logo.png',
		'params'		=> array(

			array(
				'param_name'		=> 'section_title',
				'type'				=> 'textfield',
				'heading'			=> 'Write or Input Sction Title'
			),
			array(
				'param_name'		=> 'section_dsc',
				'type'				=> 'textarea',
				'heading'			=> 'Write or Input Sction Description'
			),

		)
	));
	// project VC Map
	vc_map( array(
		'name'        => 'Bizni Project Info',
		'description' => 'Bizni Project',
		'base'        => 'projects_info',
		'category'    => 'Bizni Theme',
		'icon'		=> get_template_directory_uri(). '/assets/img/logo.png',
		'params'		=> array(

			array(
				'param_name'		=> 'section_title',
				'type'				=> 'textfield',
				'heading'			=> 'Write or Input Sction Title',

			),
			array(
				'param_name'		=> 'section_dsc',
				'type'				=> 'textfield',
				'heading'			=> 'Write or Input Sction Description',

			),

		)
	));

	// Service VC Map
	vc_map( array(
		'name'        => 'Bizni Service',
		'description' => 'Bizni Service',
		'base'        => 'service_post',
		'category'    => 'Bizni Theme',
		'icon'		=> get_template_directory_uri(). '/assets/img/logo.png',
		'params'		=> array(

			array(
				'param_name'		=> 'section_title',
				'type'				=> 'textfield',
				'heading'			=> 'Write or Input Sction Title',
				'value'				=> 'Our Services',
			),
			array(
				'param_name'		=> 'section_dsc',
				'type'				=> 'textarea',
				'heading'			=> 'Write or Input Sction Description',
				'value'				=> 'Service Description',
			),

		)
	));


	// Our latest project VC Map
	vc_map( array(
		'name'        => 'Bizni Latest Projects',
		'description' => 'Bizni Latest Projects',
		'base'        => 'latest_projects',
		'category'    => 'Bizni Theme',
		'icon'		=> get_template_directory_uri(). '/assets/img/logo.png',
		'params'		=> array(

			array(
				'param_name'		=> 'section_title',
				'type'				=> 'textfield',
				'heading'			=> 'Write or Input Sction Title',
				'value'				=> 'Our Project',
			),
			array(
				'param_name'		=> 'section_dsc',
				'type'				=> 'textarea',
				'heading'			=> 'Write or Input Sction Description',
				'value'				=> 'Project Description',
			),


		)
	));

	// Bizni Call to Action VC Map
	vc_map( array(
		'name'        => 'Bizni Call To Action',
		'description' => 'Bizni Call To Action',
		'base'        => 'call_to_action',
		'category'    => 'Bizni Theme',
		'icon'		=> get_template_directory_uri(). '/assets/img/logo.png',
		'params'		=> array(

			array(
				'param_name'		=> 'call_action_title',
				'type'				=> 'textarea',
				'heading'			=> 'Write or Input Sction Title',
				'value'				=> 'Call to action Title',
			),
			array(
				'param_name'		=> 'call_action_text',
				'type'				=> 'textfield',
				'heading'			=> 'Write or Input Sction Description',
				'value'				=> 'Call to action text',
			),

			array(
				'param_name'		=> 'project_action_link',
				'type'				=> 'textfield',
				'heading'			=> 'Write or Input Sction Description',
				'value'				=> 'Call to Action Link',
			),

		)
	));

	// Bizni Team VC Map
	vc_map( array(
		'name'        => 'Bizni Team',
		'description' => 'Bizni Team',
		'base'        => 'bizni_team',
		'category'    => 'Bizni Theme',
		'icon'		=> get_template_directory_uri(). '/assets/img/logo.png',
		'params'		=> array(

			array(
				'param_name'		=> 'section_title',
				'type'				=> 'textfield',
				'heading'			=> 'Write or Input Sction Title',
				'value'				=> 'Our Team',
			),
			array(
				'param_name'		=> 'section_dsc',
				'type'				=> 'textarea',
				'heading'			=> 'Write or Input Sction Description',
				'value'				=> 'Project Description',
			),


		)
	));

	// Bizni testimonail VC Map
	vc_map( array(
		'name'        => 'Bizni Testimonial',
		'description' => 'Bizni Testimonial',
		'base'        => 'bizni_testimonial',
		'category'    => 'Bizni Theme',
		'icon'		=> get_template_directory_uri(). '/assets/img/logo.png',
		'params'		=> array(

			array(
				'param_name'		=> 'section_title',
				'type'				=> 'textfield',
				'heading'			=> 'Write or Input Sction Title',
				'value'				=> 'Our Team',
			),
			array(
				'param_name'		=> 'section_dsc',
				'type'				=> 'textarea',
				'heading'			=> 'Write or Input Sction Description',
				'value'				=> 'Project Description',
			),


		)
	));

	// Bizni Help FAQ VC Map
	vc_map( array(
		'name'        => 'Bizni HELP AND FAQ',
		'description' => 'Bizni HELP AND FAQ',
		'base'        => 'bizni_help_FAQ',
		'category'    => 'Bizni Theme',
		'icon'		=> get_template_directory_uri(). '/assets/img/logo.png',
		'params'		=> array(

			array(
				'param_name'		=> 'section_title',
				'type'				=> 'textfield',
				'heading'			=> 'Write or Input Sction Title',
				'value'				=> 'Section Title',
			),
			array(
				'param_name'		=> 'section_dsc',
				'type'				=> 'textarea',
				'heading'			=> 'Write or Input Sction Description',
				'value'				=> 'Section Description',
			),


		)
	));
	
	// Bizni NewsLetter VC Map
	vc_map( array(
		'name'        => 'Bizni News Letter',
		'description' => 'Bizni News Letter',
		'base'        => 'bizni_newsletter',
		'category'    => 'Bizni Theme',
		'icon'		=> get_template_directory_uri(). '/assets/img/logo.png',
		'params'		=> array(

			array(
				'param_name'		=> 'section_title',
				'type'				=> 'textfield',
				'heading'			=> 'Write or Input Sction Title',
				'value'				=> 'Section Title',
			),
			array(
				'param_name'		=> 'section_dsc',
				'type'				=> 'textarea',
				'heading'			=> 'Write or Input Sction Description',
				'value'				=> 'Section Description',
			),


		)
	));

	// Bizni Pricing Table VC Map
	vc_map( array(
		'name'        => 'Bizni Pricing Table',
		'description' => 'Bizni Pricing Table',
		'base'        => 'bizni_pricing_table',
		'category'    => 'Bizni Theme',
		'icon'		=> get_template_directory_uri(). '/assets/img/logo.png',
		'params'		=> array(

			array(
				'param_name'		=> 'section_title',
				'type'				=> 'textfield',
				'heading'			=> 'Write or Input Sction Title',
				'value'				=> 'Section Title',
			),
			array(
				'param_name'		=> 'section_dsc',
				'type'				=> 'textarea',
				'heading'			=> 'Write or Input Sction Description',
				'value'				=> 'Section Description',
			),


		)
	));

	// Bizni Letest News VC Map
	vc_map( array(
		'name'        => 'Bizni Letest News',
		'description' => 'Bizni Letest News',
		'base'        => 'bizni_blog_post',
		'category'    => 'Bizni Theme',
		'icon'		=> get_template_directory_uri(). '/assets/img/logo.png',
		'params'		=> array(

			array(
				'param_name'		=> 'section_title',
				'type'				=> 'textfield',
				'heading'			=> 'Write or Input Sction Title',
				'value'				=> 'Section Title',
			),
			array(
				'param_name'		=> 'section_dsc',
				'type'				=> 'textarea',
				'heading'			=> 'Write or Input Sction Description',
				'value'				=> 'Section Description',
			),


		)
	));


	// Bizni Clents VC Map
	vc_map( array(
		'name'        => 'Bizni Clients',
		'description' => 'Bizni Clients List',
		'base'        => 'bizni_client',
		'category'    => 'Bizni Theme',
		'icon'		=> get_template_directory_uri(). '/assets/img/logo.png',
		'params'		=> array(

			array(
				'param_name'		=> 'section_title',
				'type'				=> 'textfield',
				'heading'			=> 'Write or Input Sction Title',
				'value'				=> 'Section Title',
			),
			array(
				'param_name'		=> 'section_dsc',
				'type'				=> 'textarea',
				'heading'			=> 'Write or Input Sction Description',
				'value'				=> 'Section Description',
			),


		)
	));

	// Bizni Contact us VC Map
	vc_map( array(
		'name'        => 'Bizni Contact us',
		'description' => 'Bizni Contact us info',
		'base'        => 'bizni_contact',
		'category'    => 'Bizni Theme',
		'icon'		=> get_template_directory_uri(). '/assets/img/logo.png',
		'params'		=> array(

			array(
				'param_name'		=> 'section_title',
				'type'				=> 'textfield',
				'heading'			=> 'Write or Input Sction Title',
				'value'				=> 'Section Title',
			),
			array(
				'param_name'		=> 'section_dsc',
				'type'				=> 'textarea',
				'heading'			=> 'Write or Input Sction Description',
				'value'				=> 'Section Description',
			),


		)
	));

	// Bizni Googole map VC Map
	vc_map( array(
		'name'        => 'Bizni Google Map',
		'description' => 'Bizni Google Map info',
		'base'        => 'bizni_map',
		'category'    => 'Bizni Theme',
		'icon'		=> get_template_directory_uri(). '/assets/img/logo.png',
		'params'		=> array(

			array(
				'param_name'		=> 'apni_key',
				'type'				=> 'textfield',
				'heading'			=> 'Write or Input Sction Title',
				'value'				=> 'Google Map apni key',
			),
		)
	));
	// // Slider VC Map
	// vc_map( array(
	// 	'name'        => 'Bizni Slider',
	// 	'description' => 'Bizni Slider for Bizni theme ',
	// 	'base'        => 'bizni_slider',
	// 	'category'    => 'Bizni Theme',
	// 	'icon'		=> get_template_directory_uri(). '/assets/img/logo.png',
	// 	'params'      => array(
	// 		array(
	// 			'param_name'  => 'posts',
	// 			'type'        => 'textfield',
	// 			'heading'     => __('Input Number to posts per page', 'bizni'),
	// 		)


	// 	),
	// ));





}
add_action( 'vc_before_init', 'bizni_vc_element' );