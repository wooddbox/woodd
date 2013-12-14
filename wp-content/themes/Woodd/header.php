<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
    <!--
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/supersized.css" type="text/css" media="screen">
    <script src="<?php echo get_template_directory_uri(); ?>/js/supersized.3.2.7.min.js"></script>
    <script type="text/javascript">
            
            jQuery(function($){
                console.log('go');
                $.supersized({
                
                    // Functionality
                    start_slide             :   0,          // Start slide (0 is random)
                    new_window              :   1,          // Image links open in new window/tab
                    image_protect           :   1,          // Disables image dragging and right click with Javascript
                                                               
                    // Size & Position                         
                    min_width               :   0,          // Min width allowed (in pixels)
                    min_height              :   0,          // Min height allowed (in pixels)
                    vertical_center         :   1,          // Vertically center background
                    horizontal_center       :   1,          // Horizontally center background
                    fit_always              :   0,          // Image will never exceed browser width or height (Ignores min. dimensions)
                    fit_portrait            :   0,          // Portrait images will not exceed browser height
                    fit_landscape           :   0,          // Landscape images will not exceed browser width
                                                               
                    // Components
                    slides                  :   [           // Slideshow Images
                                                        {image : 'wp-content/themes/Woodd/images/background.jpg'}
                                                ]
                    
                });
            });
            
        </script>
        -->
</head>

<body <?php body_class(); ?>>
    <div id="page" class="hfeed site">
        <header id="masthead" class="site-header" role="banner">
            <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
            </a>

            <div id="navbar" class="navbar">
                <nav id="site-navigation" class="navigation main-navigation" role="navigation">
                    <h3 class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></h3>
                    <a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
                    <?php get_search_form(); ?>
                </nav><!-- #site-navigation -->
            </div><!-- #navbar -->
        </header><!-- #masthead -->

        <div id="main" class="site-main">