<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bizni
 */

 get_header(); ?>

	 <?php if( is_front_page()) : ?>


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

		<!-- query for page -->

        <?php while( have_posts()):  the_post() ?>
              
          <?php the_content(); ?>



        <?php endwhile;  ?>


<?php get_footer(); ?>

