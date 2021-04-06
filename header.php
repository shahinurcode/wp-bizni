<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bizni
     */
    $theme_option   = get_option( '_bizni' );
    $fevicon        = $theme_option['opt_fevicon'];
    $logo           = $theme_option['opt_logo'];
    $header_phn     = $theme_option['opt_header_phn'];
    $header_email   = $theme_option['opt_header_email'];
    $header_address = $theme_option['opt_header_address'];
    $social_top     = $theme_option['social_link_top'];
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <!-- meta -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"       content="width=device-width, initial-scale=1.0">
    <meta name="description"    content="<?php bloginfo( 'description' ); ?>">
    <meta name="keywords"       content="business, responsive, onepage, corporate, clean">
    <meta name="author"         content="Coderspoint">


    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $fevicon['url'];  ?>">
    








    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<?php wp_head(); ?>
</head>

<body>

    <!-- Preloader starts-->
    <div id="preloader"></div>
    <!-- Preloader ends -->





    <!-- Top Bar Starts -->
    <div class="top-bar">
        <div class="container">
            <div class="tphone">
                <i class="fa fa-volume-control-phone"></i><?php echo $header_phn; ?>
            </div>    
            <div class="tmail">
                <i class="fa fa-paper-plane"></i> 
                <a href="mailto:<?php echo $header_email; ?>">
                    <?php echo $header_email; ?>
                </a>
            </div>
            <div class="tlocation">
                <i class="fa fa-globe"></i> <?php echo $header_address; ?>
            </div>
            <div class="tsocial">

                <?php if( is_array($social_top )){
                    foreach ($social_top as $social_link ) {
                       echo  '<a href="'.$social_link['social_link_top'].'"><i class="fa '.$social_link['social_icon_top'].'"></i></a>';
                    }
                } else{ ?>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                    <a href="#"><i class="fa fa-skype"></i></a>
                <?php } ?>       
            </div>
        </div>
    </div>
    <!-- Top Bar Ends -->


    <!-- Navigation area starts -->
    <div class="menu-holder clearfix">
        <div class="menu-area">
            <div class="container">
                <div class="row">

                    <!-- Navigation starts -->
                    <div class="col-md-12">
                        <div class="mainmenu">
                            <div class="navbar navbar-nobg">
                            
                                <div class="navbar-header">
                                    <a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo  $logo['url']; ?>"></a>
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse">

									<?php 
								    	wp_nav_menu( array(
								    		'theme_location'  => 'main-menu',
								    		'container'       => 'nav',
								    		'container_class' => '',
								    		'menu_class'      => 'nav navbar-nav navbar-right',
								    		'fallback_cb'     => 'wp_page_menu',
								    		'walker'            => new Bizni_walker_menu(),
								    	) );


								    ?>



                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Navigation ends -->

                </div>
            </div>
        </div>
    </div>
    <!-- Navigation area ends -->
 
