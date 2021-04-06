<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bizni
 */

 get_header(); ?>

     <?php if(  ! is_single() ) : ?>

        <?php else: ?>
        <!-- Page Title area starts -->
        <section class="page-title section-big">
            <div class="container">
                <?php while(have_posts()): the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <?php endwhile; ?>

                <p><a href="<?php bloginfo('home'); ?>">Home</a> /
                <?php while(have_posts()): the_post(); ?>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <?php endwhile; ?>

                </p>
            </div>
        </section>
        <!-- Page Title area ends -->
    <?php endif; ?>
    <div class="container">
        <div class="single-blog-content section-big">

            <div class="row">

                <!-- Blog Post Loop Starts -->
                <div class="col-md-9">

                	<?php while( have_posts() ): the_post(); ?>
                    <!-- Single Post -->
                    <div class="single-post">
                      <div class="featured-img">                               
                       <?php the_post_thumbnail(); ?>                                
                        <p class="news-meta text-muted">
                            <span><i class="fa fa-calendar"></i> <?php echo get_the_date( 'd M, Y'); ?> </span>
                            <span><i class="fa fa-user"></i> <?php the_author(); ?></span>
                            <span><i class="fa fa-comments-o"></i> <?php comments_popup_link( 'No Comment', ' 1 Comment', '% Comments' ) ?></span>
                        </p>
                        </div>

                        <h2><?php the_title(); ?></h2>

                        <?php the_content(); ?>
                         <br>
                         <hr>
                        <!-- Comments -->
                        <div class="comments">
                            <h3><?php comments_popup_link( 'No Comment', ' 1 Comment', '% Comments' ) ?></h3>

                            <?php comments_template(); ?>
                        </div>
                    </div>

                    <?php endwhile; ?>

                </div>
                <!-- Blog Post Loop ends -->




                <!-- Sidebar Starts -->
                <?php get_sidebar(); ?>
                <!-- Sidebar Ends -->

            </div>


        </div>
    </div>

<?php get_footer(); ?>