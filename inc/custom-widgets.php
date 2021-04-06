<?php

/**
 * Register widget area.
 *
 */
function bizni_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'bizni' ),
			'id'            => 'bizni_widget_sidebar',
			'description'   => esc_html__( 'Bizni Right Sidebar.', 'bizni' ),
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => ' <h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Recent Post', 'bizni' ),
			'id'            => 'bizni_recent_post',
			'description'   => esc_html__( 'Recent Post widgets.', 'bizni' ),
			'before_widget' => '<div class="widget widget-recent-posts">',
			'after_widget'  => '</div>',
			'before_title'  => ' <h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'bizni_widgets_init' );



// Recent Custom Widget

class Bizni_recent_post extends WP_Widget {
		public function __construct(){
			parent::__construct(
				'Bizni_recent_post',
				'Bizni Recent Post', array(
					'description'	=> __( 'Recent Post widget for Food Theme', 'bizni'),
				)
			);
		}


		// Widget front design will go there
		public function Widget($args, $instance){ 
			echo $args['before_widget'] = '<div class="widget widget-recent-posts">';
			echo $args['before_title'].$instance['title'].$args['after_title'];


			?>
	        
        <ul>

						<?php 
							$qry_post	= new WP_Query( array(
								'post_type'			=> 'post',
								'posts_per_page'	=> -1,
							));

							while(have_posts()): the_post(); ?>

				            <li>
				                <?php the_post_thumbnail(); ?>
				                <a class="post-title" href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 4, false); ?></a>
				                <div class="post-details">
				                    <span><i class="fa fa-calendar"></i> <?php echo get_the_date('d M'); ?> </span>
				                    <span><i class="fa fa-user"></i><?php the_author(); ?></span>
				                </div><!-- post-details -->
				            </li>

							<?php endwhile; ?>
		        </ul>

		<?php
			echo $args['after_widget'] = '</div>';

		 }


		// Widget Backend control
		public function form($instance){ ?>
			<p>
				<label for="<?php echo $this->get_field_id('title_id'); ?>"><?php _e( ' Title', 'bizni' ); ?></label>
				<input type="text" class="widefat" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title_id'); ?>" value="<?php echo $instance['title']; ?>">
			</p>

		<?php }


		// Update Widget data
	   public function update( $new_instance, $old_instance ) {

	        $instance = array();
	        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
	 
	        return $instance;
	    }
}

// Register Food Recent post widget
function register_bizni_recent_post(){
	register_widget( 'Bizni_recent_post' );
}
add_action( 'widgets_init', 'register_bizni_recent_post');
