<?php get_header(); ?>

    <div class="container blog-content section-big">

        <div class="row">

            <!-- Blog Post Loop Starts -->
            <div class="col-md-9">

            <?php 

                if(have_posts()){
                    while(have_posts()){ the_post(); ?>
                        <!-- Single Post -->
                        <div class="single-post">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="featured-img">                               
                                        <?php the_post_thumbnail(); ?>                                
                                        <p class="news-meta text-muted">
                                            <span><i class="fa fa-calendar"></i> <?php echo get_the_date( 'd M, Y'); ?> </span>
                                            <span><i class="fa fa-user"></i> <?php the_author(); ?></span>
                                            <span><i class="fa fa-comments-o"></i> <?php comments_popup_link( 'No Comment', ' 1 Comment', '% Comments' ) ?></span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <h3><?php the_title(); ?></h3>
                                    <p><?php echo wp_trim_words( get_the_content(), 50, false ); ?></p>
                                    <a class="btn" href="<?php the_permalink(); ?>">Read More</a>
                                </div>
                            </div>
                        </div>

                   <?php }
                }else{
                    _e( "No Post Found", 'bizni' );
                }
                wp_reset_query();
            ?>

            </div>
            <!-- Blog Post Loop ends -->

            <!-- Sidebar Starts -->
            <?php get_sidebar(); ?>
            <!-- Sidebar Ends -->

        </div>


        <!-- Pagination starts -->
        <div class="row">
            <div class="col-sm-12">
                
                <nav class="pagination pagination-lg">
                    <?php
                    the_posts_pagination( array(
                        'prev_text'         => __( 'Prev', 'bizni'),
                        'next_text'         => __( 'Next', 'bizni'),
                        'screen_reader_text'    => ' ',
                        'type'  => 'list'
                    ) );
                ?>
                </nav>
 
            </div><!-- col -->
        </div><!-- row -->
        <!-- Pagination ends -->


    </div>



<?php get_footer(); ?>