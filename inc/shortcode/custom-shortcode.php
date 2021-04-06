<?php

// shortcode for theme
function bizni_slider(){ 
 ob_start(); ?>

	<section id="slider">
	    <div id="carousel-example-generic" class="carousel slide carousel-fade">

	        <div class="carousel-inner" role="listbox">

	            <?php 
	                $sldr_post = new WP_Query( array(
	                    'post_type'     => 'slider',
	                    'posts_per_page'    => -1,
	                ));

	                if($sldr_post->have_posts()){
	                    $x=0;
	                    while($sldr_post->have_posts()){
	                        $x++;
	                        $sldr_post->the_post(); 
	                        $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID() ), 'full', false );

	                        $slider_meta_1 = get_post_meta(get_the_ID(), 'slider_link_1', true );
	                        $slider_meta_2 = get_post_meta(get_the_ID(), 'slider_link_2', true );

	                        ?>

	                        <!-- Item 1 -->
	                        <div class="item <?php if($x==1){echo 'active';} ?>" style="background: url('<?php echo $thumbnail[0]; ?>') no-repeat !important;">
	                            <div class="table">
	                                <div class="table-cell">
	                                    <div class="intro-text">
	                                        <h2><?php the_title(); ?></h2>
	                                        <p><?php the_content(); ?></p>
	                                        <a href="<?php echo $slider_meta_1; ?>" class="btn">Learn More</a>
	                                        <a href="<?php echo $slider_meta_2; ?>" class="btn btn-trnsp">Contact</a>
	                                    </div>
	                                </div>
	                            </div>
	                         </div>

	                   <?php }
	                    wp_reset_query();
	                }else{
	                    echo "<h2>NO POST DATA FOUND !!</h2>";
	                }
	            ?>


	        </div>
	        <!-- End Wrapper for slides-->


	        <!-- Carousel Pagination -->
	        <ol class="carousel-indicators">
	                <?php 
	                    for($i=0; $i<$x; $i++){ ?>
	                        <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i; ?>" class="<?php if($i==0){echo 'active';} ?>"></li>
	                   <?php }
	                ?>
	        </ol>


	        <!-- Slider left right button -->
	        <!-- <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/left-arrow.png" alt="">
	        </a>

	        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/right-arrow.png" alt="">
	        </a> -->

	    </div>
	</section>

<?php 
	return ob_get_clean();
}
add_shortcode( 'bizni_slider', 'bizni_slider' );


// shortcode for theme
function bizni_feature_post( $atts, $content = null ){ 
	$theme_option    = get_option( '_bizni' );
	$feature_posts   = $theme_option['feature_post_grp'];

	$atts = shortcode_atts( array(
			'section_title' => 'Titile',
			'section_dsc'   => 'Description',
	), $atts ); ob_start(); ?>


    <!-- About area starts -->
    <section id="about" class="about-area section-big">
        <div class="container">

            <div class="row">
                <!-- About Text -->
                <div class="col-md-6">
                    <div class="about-text">
                        <h3><?php echo $atts['section_title']; ?></h3>
                        <p><?php echo $atts['section_dsc']; ?></p>

                        <div class="row">
                            <?php 
                            if( is_array( $feature_posts )):

                                foreach ($feature_posts as $feature_post ): ?>
                                <div class="about-box col-xs-6 col-xxs-12">
                                    <i class="fa <?php echo $feature_post['feature_icon']; ?>"></i>
                                    <h4><?php echo $feature_post['feature_post_title']; ?></h4>
                                    <p><?php echo $feature_post['feature_post_content']; ?></p>
                                </div>

                            <?php endforeach; endif; ?>
                        </div>

                        <a href="<?php echo $theme_option['feature_page_link']; ?>" class="btn">Read more</a>
                    </div>
                </div>

                <!-- About Image -->
                <div class="col-md-6 about-img text-center">
                    <img src="<?php echo $theme_option['feature_post_img']['url']; ?>" >
                </div>

            </div>

        </div>
    </section>
    <!-- About area ends -->

<?php 
	return ob_get_clean();
}
add_shortcode( 'feature_post', 'bizni_feature_post' );


// Project Facts Shortcode
function bizni_projects_info( $atts, $content = null ){ 
	$theme_option    = get_option( '_bizni' );
	$project_details = $theme_option['opt_group_project'];

	$atts = shortcode_atts( array(
			'section_title' => '',
			'section_dsc'   => '',
	), $atts ); ob_start(); ?>

    <!-- fun-facts area starts -->
    <section class="fun-facts-area section-big">
        <div class="container">
            <div class="row">

                <?php foreach ($project_details as $details ): ?>

                    <div class="col-sm-6 col-md-3">
                        <div class="fun-facts-icon"><i class=" fa <?php echo $details['projects_icon']; ?>"></i></div>
                        <div class="fun-fact text-center">
                            <h3> <span class="cp-counter"><?php echo $details['project_number']; ?></span></h3>
                            <p><?php echo $details['project_text']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>
    <!-- fun-facts area ends -->


<?php 
	return ob_get_clean();
}
add_shortcode( 'projects_info', 'bizni_projects_info' );

// Skills Shortcode
function bizni_skill_post( $atts, $content = null ){ 
	$theme_option    = get_option( '_bizni' );
	$skills_bar      = $theme_option['skills_bar'];

	$atts = shortcode_atts( array(
			'section_title' => '',
			'section_dsc'   => '',
	), $atts ); ob_start(); ?>

    <!-- Skills area starts -->
    <div id="skills" class="skill-area section-big">
        <div class="container">

            <!-- Skills starts -->
            <div class="row">

                <div class="col-md-6 col-sm-6">

                    <h3><?php echo $atts['section_title']; ?></h3>
                    
                    <!-- Tab -->
                    <ul class="nav nav-tabs">

                      <?php 

                        $tab_about = null;
                        $tab_about = new WP_Query( array(
                                'post_type'         => 'about_post',
                                'posts_per_page'    => -1,
                                 'orderby'          => 'title', 
                                 'order'            => 'ASC',    
                        ) );

                            if($tab_about->have_posts()){
                                $x = 0;
                                while($tab_about->have_posts()){
                                    $tab_about->the_post(); 
                                    $tab_name    = get_post_meta( get_the_ID(), 'tab_name_id', true );
                                    ?>
                                    <li class="<?php if($x==0){echo 'active'; } ?>">
                                        <a data-toggle="tab" href="#tab-id-<?php the_ID(); ?>"><?php echo $tab_name; ?></a>
                                    </li>
                               <?php  $x++; }
                            }
                               wp_reset_postdata();
                               $tab_about = null;
                        ?>
                    </ul>

                    <div class="tab-content">
                                            
                    <?php 
                        $tab_about = null;
                        $tab_about = new WP_Query( array(
                                'post_type'         => 'about_post',
                                'posts_per_page'    => -1,
                        ) );

                    if( $tab_about->have_posts()){
                        $x = 0;
                        while($tab_about->have_posts()){ $tab_about->the_post(); 
                            $tab_name = get_post_meta( get_the_ID(), 'tab_name_id', true ); ?>

                           <!-- Tab pane -->
                            <div id="tab-id-<?php the_ID(); ?>" class="tab-pane fade <?php if( $x == 0 ){ echo 'in active'; } ?>">
                                <p><?php the_content(); ?></p>
                            </div>

                       <?php  $x++; } }
                           wp_reset_postdata();
                           $tab_about = null;
                    ?>

                    </div>

                </div>
                <!-- /column -->

                <div class="col-md-6 col-sm-6">
                    
                    <h3><?php echo $atts['section_dsc']; ?></h3>

                    <?php if( is_array($skills_bar ) ): ?>
                        <?php foreach( $skills_bar  as $skills  ): ?>
                    <div class="skill-bar-container">
                        <h4><?php echo $skills['skill_name']; ?></h4>
                        <div class="skill-progress-bar">
                            <span data-percent="<?php echo $skills['skill_lvl']; ?>" style="transition: width 2.5s; width: <?php echo $skills['skill_lvl']; ?>%;"></span>
                        </div>
                        <!-- /skill-progress-bar -->
                    </div>
                    <!-- /skill-bar-container -->
                        <?php endforeach; ?>
                    <?php  endif; ?>

     



                </div>
                <!-- /column -->
            </div>
            <!-- / Skills ends -->

        </div>
    </div>
    <!-- Skills area ends -->

<?php 
	return ob_get_clean();
}
add_shortcode( 'skill_post', 'bizni_skill_post' );

// Service Shortcode
function bizni_service_post( $atts, $content = null ){ 
	$theme_option    = get_option( '_bizni' );
	$services        = $theme_option['opt-group-service'];

	$atts = shortcode_atts( array(
			'section_title' => '',
			'section_dsc'   => '',
	), $atts ); ob_start(); ?>


    <!-- Service area starts -->
    <section  class="service-area section-big">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2><?php echo $atts['section_title']; ?></h2>
                        <p><?php echo $atts['section_dsc']; ?></p>
                    </div>
                </div>
            </div>

            <div class="row">


                <?php foreach ( $services  as $service  ): ?>


                <!-- Service Item -->
                <div class="single-service col-md-4 col-sm-6">
                    <i class="fa <?php echo $service[ 'service_icon']; ?>"></i>
                    <h4><?php echo $service[ 'service_title']; ?></h4>
                    <p><?php echo $service[ 'service_text']; ?></p>
                </div>
                <!-- /Service Item -->
                <?php endforeach; ?>


            </div>

        </div>
    </section>
    <!-- Service area ends -->

<?php 
	return ob_get_clean();
}
add_shortcode( 'service_post', 'bizni_service_post' );

// Latest project/work Shortcode
function bizni_latest_projects( $atts, $content = null ){ 
	$theme_option    = get_option( '_bizni' );

	$atts = shortcode_atts( array(
			'section_title' => '',
			'section_dsc'   => '',
	), $atts ); ob_start(); ?>


    <!-- Latest Project starts -->
    <section class="latest-project-area section-big">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2><?php echo $atts['section_title']; ?></h2>
                        <p><?php echo $atts['section_dsc']; ?></p>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="project-carousel">


                    <?php 
                        $qry_project = new WP_Query( array(
                            'post_type'         => 'our_project',
                            'posts_per_page'    => -1,    
                        ) );
                    ?>

                    <?php while($qry_project->have_posts()): $qry_project->the_post(); 
                        $img_src = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()),  'full', false );
                        $project_link = get_post_meta( get_the_ID(), 'project_link', true );

                    ?>
                    <!-- Single Project -->
                    <div class="project-item imghvr-shutter-in-out-diag-1">
                        <?php the_post_thumbnail(); ?>
                        <div class="figcaption">
                            <div class="overlay">
                                <h3><?php the_title(); ?></h3>
                                <p><?php echo wp_trim_words( get_the_content()); ?></p>
                                <a href="<?php echo $project_link; ?>"><i class="fa fa-external-link"></i></a>
                                <a href="<?php echo $img_src[0]; ?>" class="work-popup">
                                    <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <?php endwhile; wp_reset_query(); ?>


                </div>
            </div>
        </div>
    </section>
    <!-- Latest Project ends -->

<?php 
	return ob_get_clean();
}
add_shortcode( 'latest_projects', 'bizni_latest_projects' );


// Call to Action Shortcode
function bizni_call_to_action( $atts, $content = null ){ 
	$theme_option    = get_option( '_bizni' );
	$services        = $theme_option['opt-group-service'];

	$atts = shortcode_atts( array(
			'call_action_title'   => '',
			'call_action_text'   => '',
			'call_action_link'   => '',
	), $atts ); ob_start(); ?>


    <!-- Action starts -->
    <section class="action-area section-big">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h2><?php echo $atts['call_action_title']; ?></h2>
          </div>
          <div class="col-md-2"><a href="<?php echo $atts['call_action_link']; ?>" class="btn"><?php echo $atts['call_action_text']; ?></a></div>
        </div>
      </div>
    </section>
    <!-- Action area ends -->

<?php 
	return ob_get_clean();
}
add_shortcode( 'call_to_action', 'bizni_call_to_action' );


// Latest project/work Shortcode
function bizni_team_post( $atts, $content = null ){ 
	$theme_option    = get_option( '_bizni' );
	$opt_teams       = $theme_option['opt_group_team'];

	$atts = shortcode_atts( array(
			'section_title' => '',
			'section_dsc'   => '',
	), $atts ); ob_start(); ?>


    <!-- Team area starts -->
    <section class="team-area section-big">
        <div class="container">


            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2><?php echo $atts['call_action_title']; ?></h2>
                        <p><?php echo $atts['section_dsc']; ?></p>
                    </div>
                </div>
            </div>

            <div class="row">


                <?php 

                foreach ( $opt_teams  as $opt_team   ): ?>

                     <div class="col-md-3 col-sm-6">
                            <div class="team-member">
                                <div class="member-image">
                                    <img src="<?php echo $opt_team['member_pic']['url']; ?>">
                                </div>
                                <div class="member-info">
                                    <h3><?php echo $opt_team['member_name']; ?></h3>
                                    <p class="text-muted"><?php echo $opt_team['member_designation']; ?></p>
                                    <div class="member-social">

                                      <?php if( isset($opt_team['opt_social_1'])): ?>
                                        <a href="<?php echo $opt_team['opt_social_1']; ?>"><i class="fa fa-facebook"></i></a>
                                      <?php endif; ?>

                                      <?php if( $opt_team['opt_social_2']): ?>
                                        <a href="<?php echo $opt_team['opt_social_2']; ?>"><i class="fa fa-twitter"></i></a>
                                      <?php endif; ?>

                                      <?php if( $opt_team['opt_social_3']): ?>
                                        <a href="<?php echo $opt_team['opt_social_3']; ?>"><i class="fa fa-google-plus"></i></a>
                                      <?php endif; ?>

                                      <?php if( $opt_team['opt_social_4']): ?>
                                        <a href="<?php echo $opt_team['opt_social_4']; ?>"><i class="fa fa-linkedin"></i></a>
                                      <?php endif; ?>

                                      <?php if( $opt_team['opt_social_5']): ?>
                                        <a href="<?php echo $opt_team['opt_social_5']; ?>"><i class="fa fa-pinterest"></i></a>
                                      <?php endif; ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                <?php endforeach; ?>

   
            </div>
        </div>
    </section>
    <!-- Team area ends -->
<?php 
	return ob_get_clean();
}
add_shortcode( 'bizni_team', 'bizni_team_post' );



// Bizni Testimonial Shortcode
function bizni_testimonail_post( $atts, $content = null ){ 
	$theme_option    = get_option( '_bizni' );
	$opt_testimonial = $theme_option['opt_testimonial'];

	$atts = shortcode_atts( array(
			'section_title' => '',
			'section_dsc'   => '',
	), $atts ); ob_start(); ?>

    <!-- Testimonial area starts -->
    <section  class="testimonial-area section-big">
        <div class="container">

            <div class="row">
                <div class="testimonial-list">

                <?php 
                    if( is_array( $opt_testimonial) ){

                        foreach ( $opt_testimonial as $opt_testimoni ) { ?>
                            <!-- Testimonial item -->
                            <div class="single-testimonial text-center">
                                <i class="fa fa-quote-left"></i>
                                <p><?php echo $opt_testimoni['testimonial_desc']; ?></p>
                                <img src="<?php echo $opt_testimoni['testimonial_pic']['url']; ?>" alt="Testimonial">
                                <h4><?php echo $opt_testimoni['testimonial_name']; ?></h4>
                                <p class="desg"><?php echo $opt_testimoni['testimonial_desig']; ?></p>
                            </div>

                       <?php }
                    }
                ?>
               
                </div>
            </div>

        </div>
    </section>
    <!-- Testimonial area ends -->

<?php 
	return ob_get_clean();
}
add_shortcode( 'bizni_testimonial', 'bizni_testimonail_post' );

// Bizni Help & FAQ Shortcode
function bizni_help_and_faq( $atts, $content = null ){ 
	$theme_option    = get_option( '_bizni' );
	$opt_testimonial = $theme_option['opt_testimonial'];

	$atts = shortcode_atts( array(
			'section_title' => '',
			'section_dsc'   => '',
	), $atts ); ob_start(); ?>

    <!-- Video area starts -->
    <section class="video-area section-big">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2><?php echo $atts['section_title']; ?></h2>
                        <p><?php echo $atts['section_dsc']; ?></p>
                    </div>
                </div>
            </div>


            <div class="row">

                <div class="col-md-6">
                    <div class="video-area">
                        <iframe width="555" height="300" src="https://player.vimeo.com/video/121536763?title=0&amp;portrait=0&amp;byline=0&amp;autoplay=0"  allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-md-6 accordion">

                    <!-- accordion starts -->

                    <div class="panel-group" id="accordion" role="tablist">

                    <?php 

                        $qry_help = new WP_Query( array(
                            'post_type' => 'help_and_ques',
                            'posts_per_page' => -1
                        ));
                        while ( $qry_help->have_posts() ) : $qry_help->the_post(); ?>

                        <div class="panel clearfix">

                            <div class="panel-heading" role="tab">
                                <a href="#collapse-<?php echo the_ID(); ?>" class="collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false">
                                    <i class="fa fa-minus"></i>
                                    <h4 class="panel-title"><?php the_title(); ?></h4>
                                </a>
                            </div>

                            <div id="collapse-<?php echo the_ID(); ?>" class="panel-collapse collapse" role="tabpanel" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                   <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
      
                    <?php endwhile; wp_reset_query(); ?>
                    </div>
                    <!-- / accordion ends-->

                </div>

            </div>

        </div>
    </section>
    <!-- Video area ends -->

<?php 
	return ob_get_clean();
}
add_shortcode( 'bizni_help_FAQ', 'bizni_help_and_faq' );


// Bizni Pricing Table
function bizni_princing_table( $atts, $content = null ){ 
	$theme_option    = get_option( '_bizni' );
	$opt_testimonial = $theme_option['opt_testimonial'];

	$atts = shortcode_atts( array(
			'section_title' => '',
			'section_dsc'   => '',
	), $atts ); ob_start(); ?>


    <!-- Price area starts -->
    <section id="pricing" class="pricing-area section-big">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2><?php echo $atts['section_title']; ?></h2>
                        <p><?php echo $atts['section_dsc']; ?></p>
                    </div>
                </div>
            </div>

            <div class="row">

                <?php
                    $pricing_qry = new WP_Query( array(
                            'post_type'         => 'pricing_table',
                            'posts_per_page'    => 4,
                            'post_status'       => 'publish',
                            'order'             => 'ASC'
                    ));
                 ?>
                <?php while($pricing_qry->have_posts()): $pricing_qry->the_post(); 
                    $price = get_post_meta(get_the_ID(), 'pakage_price', true);
                    $pkg_facility = get_post_meta(get_the_ID(), 'pakage_facility', true);
                    $pkg_featured = get_post_meta(get_the_ID(), 'pakage_featured', true);
                    $pakage_link = get_post_meta(get_the_ID(), 'pakage_link', true);
                ?>
                <!-- Pricing Table -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="price-item <?php if( $pkg_featured == 1 ){ echo 'featured'; } ?>" data-connectors="1">
                        <div class="info">
                            <p class="level"><?php the_title(); ?></p>
                            <p class="price">
                                <span class="dollar">$</span>
                                <span class="number"><?php echo $price; ?></span>
                                <span>/ mon</span>
                            </p>
                        </div>
                        <div class="features">
                            <ul>
                                <?php foreach ($pkg_facility as $acility ): ?>
                                    <li><?php echo $acility; ?></li>
                               <?php endforeach; ?>
                            </ul>
                        </div>
                        <a class="btn" href="<?php echo $pakage_link; ?>">Start Trial</a>
                    </div>
                </div>
                <?php endwhile; ?>
 

            </div>
        </div>
    </section>
    <!-- Price area ends -->

<?php 
	return ob_get_clean();
}
add_shortcode( 'bizni_pricing_table', 'bizni_princing_table' );


// Bizni Newsletter
function bizni_newsletter( $atts, $content = null ){ 
	$theme_option    = get_option( '_bizni' );
	$opt_testimonial = $theme_option['opt_testimonial'];

	$atts = shortcode_atts( array(
			'section_title' => '',
			'section_dsc'   => '',
	), $atts ); ob_start(); ?>


    <!-- Subscribe area starts -->
    <div id="subscribe" class="subscribe-area section-big">
        <div class="container">
            <div class="subscribe-box">
                    <h2><?php echo $atts['section_title']; ?></h2>
                    <p><?php echo $atts['section_dsc']; ?></p>

                <form id="mc-form" class="mc-form">
                    <div class="newsletter-form">

                        <input type="email" autocomplete="off" id="mc-email" placeholder="Enter your email address" class="form-control">

                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                        </div>
                        <!-- mailchimp-alerts end -->

                        <div class="clearfix"></div>

                        <button class="mc-submit" type="submit"><i class="fa fa-paper-plane"></i> Subscribe now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Subscribe area ends -->

<?php 
	return ob_get_clean();
}
add_shortcode( 'bizni_newsletter', 'bizni_newsletter' );


// Bizni Latest News
function bizni_blog_post( $atts, $content = null ){ 
	$theme_option    = get_option( '_bizni' );

	$atts = shortcode_atts( array(
			'section_title' => '',
			'section_dsc'   => '',
	), $atts ); ob_start(); ?>



    <!-- News area starts -->
    <section id="news" class="news-area section-big">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2><?php echo $theme_option['blog_post_heading']; ?></h2>
                        <p><?php echo $theme_option['blog_post_subheading']; ?></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="news-carousel">

                    <?php
                        $pst_num = $theme_option['blog_post_num'];
                        $pst_type = $theme_option['blog_post_type'];


                        $qry_post = new WP_Query( array(
                            'post_type'         =>  $pst_type,
                            'posts_per_page'    =>  $pst_num,
                        ));

                    if( $qry_post ->have_posts() ): 
                        while( $qry_post ->have_posts() ): $qry_post ->the_post(); ?>

                    <!-- News item 1 -->
                    <div class="single-news">
                        <div class="news-image">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        </div>
                        <div class="news-content">
                            <p class="news-meta text-muted">
                                <span><i class="fa fa-calendar"></i> <?php echo get_the_date( 'd M, Y'); ?> </span>
                                <span><i class="fa fa-user"></i> <?php the_author(); ?></span>
                            </p>
                            <a href="<?php the_permalink(); ?>">
                                <h3><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <?php the_title(); ?></h3>
                            </a>
                            <p><?php echo wp_trim_words( get_the_content(), 20, false); ?></p>
                            <a class="btn" href="<?php the_permalink(); ?>">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                <?php endwhile; endif; wp_reset_postdata(); ?>

                </div>
            </div>

        </div>
    </section>
    <!-- News area ends -->
>
<?php 
	return ob_get_clean();
}
add_shortcode( 'bizni_blog_post', 'bizni_blog_post' );

// Bizni Clients
function bizni_clients( $atts, $content = null ){ 
	$theme_option    = get_option( '_bizni' );
	$clients_list    = $theme_option['clients_list'];

	$atts = shortcode_atts( array(
			'section_title' => '',
			'section_dsc'   => '',
	), $atts ); ob_start(); ?>

    <!-- Client area starts -->
    <div id="client" class="client-area section-small">
        <div class="container">


            <!-- client carousel -->
            <div class="owl-client">

                <?php 
                    if( is_array( $clients_list) ){

                        foreach ( $clients_list as $clients ) { ?>
                            <!-- item 1 -->
                            <div class="item active text-center">
                                <img src="<?php echo $clients['client_id']['url']; ?>" alt="">
                            </div>

                       <?php }
                    }
                ?>


            </div>
            <!-- / client carousel -->

        </div>
    </div>
    <!-- Client area ends -->
>
<?php 
	return ob_get_clean();
}
add_shortcode( 'bizni_client', 'bizni_clients' );


// Bizni Contact Us
function bizni_contact_us( $atts, $content = null ){ 
	$theme_option    = get_option( '_bizni' );
	$contact_address = $theme_option['contact_address'];

	$atts = shortcode_atts( array(
			'section_title' => '',
			'section_dsc'   => '',
	), $atts ); ob_start(); ?>


    <!-- Contact area starts -->
    <section class="contact-area section-big">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                    <h2><?php echo $atts['section_title']; ?></h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-6">

                    <!-- Contact form starts -->
                    <div class="contact-form">
                        <?php echo do_shortcode( '[contact-form-7 id="67" title="Contact form 1"]' ); ?>

                        <!-- Submition status -->
                        <div id="form-messages"></div>

                    </div>
                    <!-- Contact form ends-->
                </div>

                <div class="col-md-6">



                 <p><?php echo $atts['section_dsc']; ?></p>
                   
                  
                <?php 
                    if( is_array( $contact_address) ){
                    	foreach ( $contact_address as $address ) { ?>
                    <!-- item 1 -->
                    <div class="address-box clearfix">
                        <i class="fa <?php echo $address['contact_icon']; ?>"></i>
                        <p><a href="<?php echo $address['contact_link']; ?>"><?php echo $address['contact_text']; ?></a></p>
                    </div>

                <?php } }  ?>


                </div>


            </div>

        </div>
    </section>
    <!-- Contact area ends -->
>
<?php 
	return ob_get_clean();
}
add_shortcode( 'bizni_contact', 'bizni_contact_us' );

// Bizni Google Map
function bizni_google_map( $atts, $content = null ){ 
	$theme_option    = get_option( '_bizni' );
	$atts = shortcode_atts( array(
			'apni_key' => '',
	), $atts ); ob_start(); ?>

    <!-- Google Map starts-->
    <div id="contactgoogleMap"></div>
    <!-- Google Map ends -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=<?php echo $atts['apni_key']; ?>"></script>

>
<?php 
	return ob_get_clean();
}
add_shortcode( 'bizni_map', 'bizni_google_map' );