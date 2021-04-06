<?php 

$theme_option = get_option( '_bizni' );
$sec_id    =  $theme_option['slider_sec_id'];
$posts_num    =  $theme_option['slider_post_num'];

?>

<section id="slider">
    <div id="<?php echo $sec_id; ?>"></div>
    <div id="carousel-example-generic" class="carousel slide carousel-fade">

        <div class="carousel-inner" role="listbox">

            <?php 
                $sldr_post = new WP_Query( array(
                    'post_type'     => 'slider',
                    'posts_per_page'    => $posts_num  ,
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