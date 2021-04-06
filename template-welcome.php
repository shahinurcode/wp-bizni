<?php 

/**
 * Template Name: Front-page template
 * 
 * 
 */
$theme_option    = get_option( '_bizni' );
$project_details = $theme_option['opt_group_project'];
$feature_posts   = $theme_option['feature_post_grp'];
$services        = $theme_option['opt-group-service'];
$opt_teams       = $theme_option['opt_group_team'];
$opt_testimonial = $theme_option['opt_testimonial'];
$clients_list    = $theme_option['clients_list'];
$skills_bar      = $theme_option['skills_bar'];
$contact_address = $theme_option['contact_address'];


get_header(); ?>

    <!-- Slider area starts -->
    <?php get_template_part( '/template-parts/slider' ) ?>
    <!-- Slider area ends -->

    <!-- About area starts -->
    <section id="<?php echo $theme_option['section_1_id']; ?>" class="about-area section-big">
        <div class="container">

            <div class="row">
                <!-- About Text -->
                <div class="col-md-6">
                    <div class="about-text">
                        <h3><?php echo $theme_option['feature_post_title']; ?></h3>
                        <p><?php echo $theme_option['feature_post_text']; ?></p>

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

    <!-- fun-facts area starts -->
    <section id="fun-facts" class="fun-facts-area section-big">
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

    <!-- Skills area starts -->
    <div id="skills" class="skill-area section-big">
        <div class="container">

            <!-- Skills starts -->
            <div class="row">

                <div class="col-md-6 col-sm-6">

                    <h3>How We Work</h3>
                    
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
                    
                    <h3>Our Skills</h3>

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

    <!-- Service area starts -->
    <section id="<?php echo $theme_option['section_2_id']; ?>" class="service-area section-big">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2><?php echo $theme_option['section_2_title']; ?></h2>
                        <p><?php echo $theme_option['section_2_dsc']; ?></p>
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

    <!-- Latest Project starts -->
    <section id="<?php echo $theme_option['section_3_id']; ?>" class="latest-project-area section-big">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2><?php echo $theme_option['section_3_title']; ?></h2>
                        <p><?php echo $theme_option['section_3_dsc']; ?></p>

                    </div>
                </div>
            </div>

            <div class="row">

                <div class="project-carousel">
                    <?php 
                        $pns = $theme_option['posts_number'];
                        $qry_project = new WP_Query( array(
                            'post_type'         => 'our_project',
                            'posts_per_page'    => $pns  ,    
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


    <!-- Action starts -->
    <section id="action" class="action-area section-big">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h2><strong>Bizniz</strong> is the perfect template for your next project</h2>
          </div>
          <div class="col-md-2"><a href="#" class="btn">Get It Now!</a></div>
        </div>
      </div>
    </section>
    <!-- Action area ends -->



    <!-- Team area starts -->
    <section id="<?php echo $theme_option['section_4_id']; ?>" class="team-area section-big">
        <div class="container">


            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2><?php echo $theme_option['section_4_title']; ?></h2>
                        <p><?php echo $theme_option['section_4_dsc']; ?></p>
                    </div>
                </div>
            </div>

            <div class="row">


            <?php 
                if( is_array($opt_teams )):

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
                <?php endforeach; endif;?>
   



            </div>
        </div>
    </section>
    <!-- Team area ends -->


    <!-- Testimonial area starts -->
    <section id="testimonial" class="testimonial-area section-big">
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


    <!-- Video area starts -->
    <section id="video" class="video-area section-big">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2>Help & FAQ</h2>
                        <p>Bizniz is super clean, modern, corporate responsive template. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>
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


    <!-- Price area starts -->
    <section id="<?php echo $theme_option['section_5_id']; ?>" class="pricing-area section-big">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2><?php echo $theme_option['section_5_title']; ?></h2>
                        <p><?php echo $theme_option['section_5_dsc']; ?></p>
                    </div>
                </div>
            </div>

            <div class="row">

                <?php
                    $prcing_posts = $theme_option['pricing_post_num'];

                    $pricing_qry = new WP_Query( array(
                            'post_type'         => 'pricing_table',
                            'posts_per_page'    => $prcing_posts,
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


    <!-- Subscribe area starts -->
    <div id="subscribe" class="subscribe-area section-big">
        <div class="container">
            <div class="subscribe-box">
                <h2>Stay up to date</h2>
                <p><strong>Subscribe</strong> to our Newsletter. We'll send email notifications everytime we release new Theme.</p>

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


    <!-- News area starts -->
    <section id="<?php echo $theme_option['section_6_id']; ?>" class="news-area section-big">
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



    <!-- Contact area starts -->
    <section id="<?php echo $theme_option['section_7_id']; ?>" class="contact-area section-big">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">

                <?php if($theme_option['section_name_contact']): ?>
                    <h2><?php echo $theme_option['section_name_contact']; ?></h2>

                <?php else: ?>
                    <h2>Contact Us</h2>
                <?php endif; ?>

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



                <?php if($theme_option['section_name_contact']): ?>

                    <p class="contact-info"><?php echo $theme_option['section_info_contact']; ?></p>
                <?php else: ?>
                    <p>Bizniz is a clean and awesome template for your company. Bizniz is a clean and awesome template for your company. Bizniz is a clean and awesome template for your company.</p>
                <?php endif; ?>
                   
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



    <!-- Google Map starts-->
    <div id="contactgoogleMap"></div>
    <!-- Google Map ends -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=<?php echo $theme_option['opt_map_key']; ?>"></script>


<?php get_footer(); ?>