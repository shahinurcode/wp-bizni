<?php

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = '_bizni';

  //
  // Create options
  CSF::createOptions( $prefix, array(
    'menu_title' => 'Theme Option',
    'menu_slug'  => 'theme_option',
  ) );

  //
  // Create a section - Basic Fields
  CSF::createSection( $prefix, array(
    'id'     => 'basic_field',
    'title'  => 'General',
    'icon'   => 'fa fa-plus-circle'

  ) );
  //
  // Create a section - Fevicon 
  CSF::createSection( $prefix, array(
    'parent'     => 'basic_field',
    'title'      => 'Fevicon',

    'fields'     => array(
        array(
            'id'          => 'opt_fevicon',
            'title'       => 'Fevicon Option',
            'subtitle'    => 'Upload your site fevicon here',
            'type'        => 'media',
        )
    )

  ) );

  //
  // Create a section - Logo 
  CSF::createSection( $prefix, array(
    'parent'     => 'basic_field',
    'title'      => 'Logo',

    'fields'     => array(
        array(
            'id'          => 'opt_logo',
            'title'       => 'Logo Option',
            'subtitle'    => 'Upload your logo here',
            'type'        => 'media',

        ),
    )

  ) );

   //
  // Create a section - header 
  CSF::createSection( $prefix, array(
    'parent'     => 'basic_field',
    'title'      => 'Header Option',

    'fields'     => array(
        array(
            'id'          => 'opt_header_phn',
            'title'       => 'Phone Number',
            'subtitle'    => 'Input your Phone Number here',
            'type'        => 'text',

        ),
        array(
            'id'          => 'opt_header_email',
            'title'       => 'Email Address',
            'subtitle'    => 'Input your email address here',
            'type'        => 'text',

        ),
        array(
            'id'          => 'opt_header_address',
            'title'       => 'Address',
            'subtitle'    => 'Input your address here',
            'type'        => 'text',

        ),
    )

  ) );

   //
  // Create a section - Slider 
  CSF::createSection( $prefix, array(
    'parent'     => 'basic_field',
    'title'      => 'SLIDER OPTION',

    'fields'     => array(
        array(
            'id'          => 'slider_sec_id',
            'title'       => 'SECTION ID',
            'subtitle'    => 'Input your Phone Number here',
            'type'        => 'text',

        ),
        array(
            'id'          => 'slider_post_num',
            'title'       => 'POST PER PAGES',
            'subtitle'    => 'Input your number to post count',
            'type'        => 'number',

        ),
    )

  ) );


  // Create a section - Home Page
  CSF::createSection( $prefix, array(
    'id'     => 'opt_home_page',
    'title'  => 'Home Page',
    'icon'   => 'fa fa-home'

  ) );

  // Create a section - Featur Post 
  CSF::createSection( $prefix, array(
    'parent'     => 'opt_home_page',
    'title'      => 'Feature Post',
    'icon'       => 'fa fa-minus',

    'fields'     => array(
        array(
        'type'    => 'heading',
        'content' => 'FEATURE POST OPTION FOR HOME PAGE',
        ),

        // SECTION ID AND DESCRIPTION
        array(
            'id'          => 'section_1_id',
            'title'       => 'SECTION ID',
            'subtitle'    => 'PUT YOUR SECTION ID',
            'type'        => 'text',
            'default'     => 'about',
        ),
    
        array(
            'id'          => 'feature_post_title',
            'title'       => 'TITLE',
            'subtitle'    => 'Put your post text here',
            'type'        => 'text',
            'default'     => 'About Our Creative Work',

        ),
        array(
            'id'          => 'feature_post_text',
            'title'       => 'SECTION DESCRIPTION',
            'subtitle'    => 'Put your post content text here',
            'type'        => 'textarea',
            'default'     => 'Possession of my entire soul, like these sweet mornings of spring which enjoy with my whole heart. I am alone, and feel the charm I enjoy with my whole joy with my whole heart. I am alone, and feel the charm of the charm of like mine.',

        ),
        array(
        'type'    => 'subheading',
        'content' => 'POST CONTENT OPTIONS',
        ),

        //#END SECTION ID AND DESCRIPTION
        array(
            'id'          => 'feature_post_img',
            'title'       => 'Post Image',
            'subtitle'    => 'Put your post image here',
            'type'        => 'media',
        ),
        array(
            'id'          => 'feature_page_link',
            'title'       => 'Feature Post Page Link',
            'subtitle'    => 'Put your Page link here here',
            'type'        => 'text',
        ),
        
       array(
            'type'    => 'subheading',
            'content' => 'FEATURE POST OPTION',
          ),
          array(
            'id'           => 'feature_post_grp',
            'type'         => 'group',
            'title'        => 'Feature Post',
            'button_title' => 'Add Feature Details',
            'fields'       => array(
                  array(
                    'id'          => 'feature_icon',
                    'type'        => 'icon',
                    'title'       => 'Feature Icon',
                    'placeholder' => 'Choose your Icon',
                  ),
                  array(
                    'id'          => 'feature_post_title',
                    'type'        => 'text',
                    'title'       => 'Feature Post Title',
                    'placeholder' => 'Input your Feature Post Title',
                  ),
                  array(
                    'id'    => 'feature_post_content',
                    'type'  => 'textarea',
                    'title' => 'Feature Post Content',
                    'placeholder' => 'Input your Feature Post content',
                  ),
                ),
          ),
    )

  ) );  
  
  //
  // Create a section - Project Details 
  CSF::createSection( $prefix, array(
    'parent'     => 'opt_home_page',
    'title'      => 'Project Details',

    'fields'     => array(

          array(
            'type'    => 'heading',
            'content' => 'OUR PROJECT DETAILS OPTION',
          ),


          array(
            'id'           => 'opt_group_project',
            'type'         => 'group',
            'title'        => 'Our Project',
            'button_title' => 'Add Project Details',
            'fields'       => array(
                  array(
                    'id'          => 'projects_icon',
                    'type'        => 'icon',
                    'title'       => 'Project Icon',
                    'placeholder' => 'Choose your Icon',
                  ),
                  array(
                    'id'          => 'project_number',
                    'type'        => 'text',
                    'title'       => 'Project Number',
                    'placeholder' => 'Input your project Number',
                  ),
                  array(
                    'id'    => 'project_text',
                    'type'  => 'text',
                    'title' => 'Service Text',
                    'placeholder' => 'Input your project content text',
                  ),
                ),
          ),
        
    )

  ) );  

 //
  // Create a section - Skills 
  CSF::createSection( $prefix, array(
    'parent'     => 'opt_home_page',
    'title'      => 'Skills',

    'fields'     => array(

          array(
            'type'    => 'subheading',
            'content' => 'SKILL OPTIONS',
          ),
          array(
            'id'           => 'skills_bar',
            'type'         => 'repeater',
            'title'        => 'SKill Bar',
            'fields'       => array(

                  array(
                    'id'          => 'skill_name',
                    'type'        => 'text',
                    'title'       => 'Skill Name',
                    'placeholder' => 'Input your Skill Name',
                    'default'     => 'Monitoring',
                  ),
                  array(
                    'id'          => 'skill_lvl',
                    'type'        => 'text',
                    'title'       => 'Skill Lavel',
                    'placeholder' => 'Input your Skill Label',
                    'default'     => '85',
                  ),
    
                ),
          ),
        
    )

  ) );  



  //
  // Create a section - Our Service 
  CSF::createSection( $prefix, array(
    'parent'     => 'opt_home_page',
    'title'      => 'Our Service',

    'fields'     => array(

          array(
            'type'    => 'heading',
            'content' => 'OUR SERVICE POST OPTION FOR HOME PAGE',
          ),


        // SECTION ID AND DESCRIPTION
        array(
            'id'          => 'section_2_id',
            'title'       => 'SECTION ID',
            'subtitle'    => 'PUT YOUR SECTION ID',
            'type'        => 'text',
            'default'     => 'about',
        ),
        array(
            'id'          => 'section_2_title',
            'title'       => 'SECTION TITLE',
            'subtitle'    => 'PUT YOUR SECTION TITLE',
            'type'        => 'text',
            'default'     => 'ABOUT US',
        ),
        array(
            'id'          => 'section_2_dsc',
            'title'       => 'SECTION DESCRIPTION',
            'subtitle'    => 'PUT YOUR SECTION DESCRIPTION',
            'type'        => 'textarea',
            'default'     => 'input your description text here',
        ),
        array(
        'type'    => 'subheading',
        'content' => 'POST CONTENT OPTIONS',
        ),

        //#END SECTION ID AND DESCRIPTION

          array(
            'id'           => 'opt-group-service',
            'type'         => 'group',
            'title'        => 'Our Service',
            'button_title' => 'Add Service',
            'fields'       => array(
                  array(
                    'id'          => 'service_icon',
                    'type'        => 'icon',
                    'title'       => 'Service image',
                    'placeholder' => 'Choose your Service icon',
                  ),
                  array(
                    'id'          => 'service_title',
                    'type'        => 'text',
                    'title'       => 'Service Title',
                    'placeholder' => 'Input your Service title',
                  ),
                  array(
                    'id'    => 'service_text',
                    'type'  => 'textarea',
                    'title' => 'Service Text',
                    'placeholder' => 'Input your Service content text',
                  ),
                ),
          ),
        
    )

  ) );  

  //
  // Create a section - Our Work/ Projcets 
  CSF::createSection( $prefix, array(
    'parent'     => 'opt_home_page',
    'title'      => 'Our Work',

    'fields'     => array(

          array(
            'type'    => 'subheading',
            'content' => 'OUR WORK POST OPTION FOR HOME PAGE',
          ),

        // SECTION ID AND DESCRIPTION
        array(
            'id'          => 'section_3_id',
            'title'       => 'SECTION ID',
            'subtitle'    => 'PUT YOUR SECTION ID',
            'type'        => 'text',
            'default'     => 'work',
        ),
        array(
            'id'          => 'section_3_title',
            'title'       => 'SECTION TITLE',
            'subtitle'    => 'PUT YOUR SECTION TITLE',
            'type'        => 'text',
            'default'     => 'OUR WORK',
        ),
        array(
            'id'          => 'section_3_dsc',
            'title'       => 'SECTION DESCRIPTION',
            'subtitle'    => 'PUT YOUR SECTION DESCRIPTION',
            'type'        => 'textarea',
            'default'     => 'input your description text here',
        ),
        array(
        'type'    => 'subheading',
        'content' => 'POST CONTENT OPTIONS',
        ),
        //#END SECTION ID AND DESCRIPTION
        array(
          'id'          => 'posts_number',
          'title'       => 'POST PER PAGES',
          'subtitle'    => 'PUT YOUR SECTION DESCRIPTION',
          'type'        => 'number',
          'default'     => -1,
        ),
    )

  ) );  
  //
  // Create a section - Our team 
  CSF::createSection( $prefix, array(
    'parent'     => 'opt_home_page',
    'title'      => 'Our Team',

    'fields'     => array(

          array(
            'type'    => 'subheading',
            'content' => 'OUR TEAM  OPTION FOR HOME PAGE',
          ),


        // SECTION ID AND DESCRIPTION
        array(
            'id'          => 'section_4_id',
            'title'       => 'SECTION ID',
            'subtitle'    => 'PUT YOUR SECTION ID',
            'type'        => 'text',
            'default'     => 'team',
        ),
        array(
            'id'          => 'section_4_title',
            'title'       => 'SECTION TITLE',
            'subtitle'    => 'PUT YOUR SECTION TITLE',
            'type'        => 'text',
            'default'     => 'Our Team',
        ),
        array(
            'id'          => 'section_4_dsc',
            'title'       => 'SECTION DESCRIPTION',
            'subtitle'    => 'PUT YOUR SECTION DESCRIPTION',
            'type'        => 'textarea',
            'default'     => 'input your description text here',
        ),
        array(
        'type'    => 'subheading',
        'content' => 'POST CONTENT OPTIONS',
        ),

        //#END SECTION ID AND DESCRIPTION

          array(
            'id'           => 'opt_group_team',
            'type'         => 'group',
            'title'        => 'Our Team',
            'button_title' => 'Add Team Member',
            'fields'       => array(
                  array(
                    'id'          => 'member_pic',
                    'type'        => 'media',
                    'title'       => 'Team Member image',
                    'placeholder' => 'Choose your Service icon',
                  ),
                  array(
                    'id'          => 'member_name',
                    'type'        => 'text',
                    'title'       => 'Team Member Name',
                    'placeholder' => 'Input your Service title',
                  ),
                  array(
                    'id'    => 'member_designation',
                    'type'  => 'text',
                    'title' => 'Member Designation',
                    'placeholder' => 'Input your Member Profession',
                  ),

                // Subheading 
                array(
                  'type'    => 'subheading',
                  'content' => 'SOCIAL PROFILE LIKS',
                ),

                //social profiles link
                array(
                      'id'    => 'opt_social_1',
                      'type'  => 'text',
                      'title' => 'Facebook Profile Link'
                  ),
                array(
                      'id'    => 'opt_social_2',
                      'type'  => 'text',
                      'title' => 'Twitter Profile Link'
                  ),
                array(
                      'id'    => 'opt_social_3',
                      'type'  => 'text',
                      'title' => 'Google Plus Profile Link'
                  ),
                array(
                      'id'    => 'opt_social_4',
                      'type'  => 'text',
                      'title' => 'Linkedin Profile Link'
                  ),
                array(
                      'id'    => 'opt_social_5',
                      'type'  => 'text',
                      'title' => 'Pinterest Profile Link'
                  ),


            ),
          ),
        
    )

  ) ); 

  //
  // Create a section - PRICING TABLE 
  CSF::createSection( $prefix, array(
    'parent'     => 'opt_home_page',
    'title'      => 'PRICING TABLE',

    'fields'     => array(

          array(
            'type'    => 'heading',
            'content' => 'OUR BLOG POST OPTION FOR FRONT PAGE',
          ),

        // SECTION ID AND DESCRIPTION
        array(
            'id'          => 'section_5_id',
            'title'       => 'SECTION ID',
            'subtitle'    => 'PUT YOUR SECTION ID',
            'type'        => 'text',
            'default'     => 'pricing',
        ),
          array(
            'id'      => 'section_5_title',
            'title'   => 'SECTION TITLE',
            'type'    => 'text',
            'desc'    => 'Write your section title',
            'default' => 'Our Pricing',
          ),

          array(
            'id'    => 'section_5_dsc',
            'title' => 'SECTION DESCRIPTION',
            'type'    => 'textarea',
            'desc' => 'Write your section title',
            'default'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, quisquam.',
          ),
          array(
          'type'    => 'subheading',
          'content' => 'POST CONTENT OPTIONS',
          ),
        //#END SECTION ID AND DESCRIPTION
          array(
            'id'      => 'pricing_post_num',
            'title'   => 'PRICING POST NUMBER',
            'type'    => 'Number',
            'desc'    => 'Choose  post number you want',
            'default' => 4,
          ),    
    )

  ) );

 //
  // Create a section - Latest blog post 
  CSF::createSection( $prefix, array(
    'parent'     => 'opt_home_page',
    'title'      => 'Blog Post',
    'icon'       => 'fa fa-minus',

    'fields'     => array(

          array(
            'type'    => 'heading',
            'content' => 'OUR BLOG POST OPTION FOR FRONT PAGE',
          ),

        // SECTION ID AND DESCRIPTION
        array(
            'id'          => 'section_6_id',
            'title'       => 'SECTION ID',
            'subtitle'    => 'PUT YOUR SECTION ID',
            'type'        => 'text',
            'default'     => 'news',
        ),
          array(
            'id'    => 'blog_post_heading',
            'title' => 'SECTION TITLE',
            'type'    => 'text',
            'desc' => 'Write your section title',
            'default'   => 'LATEST NEWS',
          ),

          array(
            'id'    => 'blog_post_subheading',
            'title' => 'SECTION DESCRIPTION',
            'type'    => 'textarea',
            'desc' => 'Write your section title',
            'default'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente, quisquam.',
          ),
          array(
          'type'    => 'subheading',
          'content' => 'POST CONTENT OPTIONS',
          ),
        //#END SECTION ID AND DESCRIPTION
          array(
            'id'    => 'blog_post_num',
            'title' => 'Blog posts per page',
            'type'    => 'Number',
            'desc' => 'Choose blog post number you want',
            'default'   => 3,
          ),

          array(
            'id'    => 'blog_post_type',
            'title' => 'Choose post from post type',
            'type'    => 'text',
            'desc' => 'Put your post-type name here "\Ex: post"',
            'default'   => 'post',
          ),

        
    )

  ) );

  // Create a section Fields - Testimonial 
  CSF::createSection( $prefix, array(
    'parent'     => 'opt_home_page',
    'title'      => 'Testimonial Options',

    'fields'     => array(

          array(
            'type'    => 'subheading',
            'content' => 'OPTIONS FOR TESTIMONIAL SECTION',
          ),

          array(
            'id'           => 'opt_testimonial',
            'type'         => 'group',
            'title'        => 'Testimonial Item',
            'button_title' => 'Add Testimonial',
            'fields'       => array(
                  array(
                    'id'    => 'testimonial_pic',
                    'type'  => 'media',
                    'title' => 'Profile Picture',

                  ),
                  array(
                    'id'          => 'testimonial_desc',
                    'type'        => 'textarea',
                    'title'       => 'Profile Description',
                    'placeholder' => 'Input your work description text',
                  ),
                  array(
                    'id'          => 'testimonial_name',
                    'type'        => 'text',
                    'title'       => 'Profile\'s Name',
                    'placeholder' => 'Input user profile name',
                  ),
                  array(
                    'id'          => 'testimonial_desig',
                    'type'        => 'text',
                    'title'       => 'Designation',
                    'placeholder' => 'Input Company or designation title',
                  ),
                ),
          ),
        


        
    )

  ) );


 
  //
  // Create a section - Client Area Option 
  CSF::createSection( $prefix, array(
    'parent'     => 'opt_home_page',
    'title'      => 'Client List',

    'fields'     => array(

          array(
            'type'    => 'subheading',
            'content' => 'OUR CLIENT OPTION FOR FRONT PAGE',
          ),

          array(
            'id'      => 'clients_list',
            'title'   => 'Clients List',
            'type'    => 'repeater',
            'fields'  => array(
                array(
                'id'    => 'client_id',
                'title' => 'Client Logo',
                'type'  => 'media'
              )
            )
          ),  
    )

  ) );


  //
  // Create a section - Contact Us 
  CSF::createSection( $prefix, array(
    'id'     => 'contact_us',
    'title'  => 'CONTACT US',
    'icon'   => 'fa fa-envelope-o'

  ) );


  // Create a section - Contact fields 
  CSF::createSection( $prefix, array(
    'parent'     => 'contact_us',
    'title'      => 'Contact Option',

    'fields'     => array(

          array(
            'type'    => 'subheading',
            'content' => 'OPTIONS FOR CONTACT US SECTION',
          ),

        // SECTION ID AND DESCRIPTION
        array(
            'id'          => 'section_7_id',
            'title'       => 'SECTION ID',
            'subtitle'    => 'PUT YOUR SECTION ID',
            'type'        => 'text',
            'default'     => 'contact',
        ),

        array(
        'type'    => 'subheading',
        'content' => 'POST CONTENT OPTIONS',
        ),
        //#END SECTION ID AND DESCRIPTION

          array(
            'id'      => 'section_name_contact',
            'title'   => 'Section Name',
            'type'    => 'text',
            'desc'    => 'Input your Section Name',
            'default' => 'Contact Us',
          ),
          array(
            'id'      => 'section_info_contact',
            'title'   => 'Section Information',
            'type'    => 'textarea',
            'desc'    => 'Input your Section Information',
            'default' => 'Bizniz is a clean and awesome template for your company. Bizniz is a clean and awesome template for your company. Bizniz is a clean and awesome template for your company.',
          ), 


          array(
            'type'    => 'subheading',
            'content' => 'OPTIONS FOR CONTACT US CONTENT',
          ), 


           array(
            'id'      => 'bizni_contact_form',
            'title'   => 'CONTACT FORM',
            'type'    => 'wp_editor',
            'default'    => '[contact-form-7 id="69" title="Contact form 1"]',
          ), 
           array(
            'id'      => 'contact_address',
            'title'   => 'CONTACT ADDRESS',
            'desc'    => 'Input your Information',
            'type'    => 'repeater',
            'fields' => array(

              array(
                'id'    => 'contact_icon',
                'type'  => 'icon',
                'title' => 'Social icon',
              ),
              array(
                'id'          => 'contact_text',
                'type'        => 'text',
                'title'       => 'Contact text',
                'placeholder' => 'Paste your Text here'
              ),

              array(
                'id'          => 'contact_link',
                'type'        => 'text',
                'title'       => 'Contact Link',
                'placeholder' => 'Paste your link here'
              ),

            ),
          ), 
    )



  ) );









  //
  // Create a section - Footer 
  CSF::createSection( $prefix, array(
    'id'     => 'opt_footer',
    'title'  => 'Footer',
    'icon'   => 'fa fa-plus-circle'

  ) );


  // Create a section - Footer fields 
  CSF::createSection( $prefix, array(
    'parent'     => 'opt_footer',
    'title'      => 'Footer Options',

    'fields'     => array(

          array(
            'type'    => 'subheading',
            'content' => 'OPTIONS FOR FOOTER SECTION',
          ),

          array(
            'id'    => 'opt_footer_copyright',
            'title' => 'CopyRight Text',
            'type'    => 'text',
            'desc' => 'Input your copyright content',
            'default'   => '&copy; Copyright 2020 | Developed by Shahinur Rahman | All Rights Reserved',
          ),
        
    )

  ) );

  //
  // Create a section - Social Profile 
  CSF::createSection( $prefix, array(
    'id'     => 'opt_social_profile',
    'title'  => 'Social Profile',
    'icon'   => 'fa fa-share-alt'

  ) );


  //
  //Create fields for -- Social link
  CSF::createSection( $prefix, array(
      'parent'      => 'opt_social_profile',
      'title'       => 'SOCIAL LINK',
      'fields'      => array(

          array(
            'type'    => 'subheading',
            'content' => 'OPTIONS FOR SOCIAL PROFILE OPTION',
          ),
          // Repeater field
          array(
            'id'     => 'social_link_top',
            'type'   => 'repeater',
            'title'  => 'Social Profile Top',
            'fields' => array(

              array(
                'id'    => 'social_icon_top',
                'type'  => 'icon',
                'title' => 'Social icon',
              ),
              array(
                'id'          => 'social_link_top',
                'type'        => 'text',
                'title'       => 'Profile Link',
                'placeholder' => 'Paste your social profile link here'
              ),

            ),


          ),

          array(
            'type'    => 'subheading',
            'content' => 'FOOTER SOCIAL PROFILE OPTION',
          ),
          array(
            'id'     => 'social_link_footer',
            'type'   => 'repeater',
            'title'  => 'Social Profile Footer',
            'fields' => array(

              array(
                'id'    => 'social_icon_footer',
                'type'  => 'icon',
                'title' => 'Social icon',
              ),
              array(
                'id'          => 'social_link_footer',
                'type'        => 'text',
                'title'       => 'Profile Link',
                'placeholder' => 'Paste your social profile link here'
              ),

            ),
          ), 

      )
  ));

  //
  // Create a section - Google map 
  CSF::createSection( $prefix, array(
    'id'     => 'opt_googlemap',
    'title'  => 'Google Map',
    'icon'   => 'fa fa-globe'

  ) );

    // Create a section - Footer fields 
  CSF::createSection( $prefix, array(
    'parent'     => 'opt_googlemap',
    'title'      => 'Google Map Options',

    'fields'     => array(

          array(
            'type'    => 'subheading',
            'content' => 'OPTIONS FOR GOOGLE MAP SECTION',
          ),

          array(
            'id'    => 'opt_map_key',
            'title' => 'Google Api key',
            'type'    => 'text',
            'desc' => 'Input your Google map API key',
            'default'   => 'AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo',
          ),

        
    )

  ) );

}