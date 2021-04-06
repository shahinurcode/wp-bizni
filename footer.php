<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bizni
 */

$theme_option    = get_option( '_bizni' );
$social_footer   = $theme_option['social_link_footer'];
$footer_cpyright   = $theme_option['opt_footer_copyright'];

?>

    <!-- Footer area starts -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <?php if( isset($footer_cpyright)){
                        echo $footer_cpyright;
                    }else{
                        echo "<p>&copy; 2016 Copyright Web_bean</p>";
                    } ?>
                 
                </div>
                <div class="col-md-6 col-sm-6">
                    <ul class="social-links">

                    <?php if( is_array($social_footer) ): ?>
                        <?php foreach( $social_footer as $socials ): ?>
                        <li><a href="<?php echo $socials['social_link_footer']; ?>"><i class="fa <?php echo $socials['social_icon_footer']; ?>"></i></a></li>
                        <?php endforeach; ?>
                    <?php  endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer area ends -->

    <?php wp_footer(); ?>
</body>
</html>
