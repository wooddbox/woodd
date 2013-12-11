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
 <script type="text/javascript">
            jQuery(document).ready(function($) {
                var count = 2;
                var total = <?php echo $wp_query->max_num_pages; ?>;
                $(window).scroll(function(){
                        if  ($(window).scrollTop() == $(document).height() - $(window).height()){
                           if (count > total){
                                             return false;
                           }else{
                                           loadArticle(count);
                           }
                           count++;
                        }
                }); 

                function loadArticle(pageNumber){    
                        $('a#inifiniteLoader').show('fast');
                        $.ajax({
                            url: "<?php bloginfo('wpurl') ?>/wp-admin/admin-ajax.php",
                            type:'POST',
                            data: "action=infinite_scroll&page_no="+ pageNumber + '&loop_file=loop', 
                            success: function(html){
                                $('a#inifiniteLoader').fadeOut(2000);
                                $("#content").append(html);    // This will be the div where our content will be loaded
                            }
                        });
                    return false;
                }

            });

        </script>

</head>

<body <?php body_class(); ?>>

<!-- BEGIN #wrapper-->
<div id="wrapper">

    <!-- BEGIN #page-->
    <div id="page">


        <!-- BEGIN #top-bar-->
        <div id="top-bar">

        <!-- END #top-bar-->
        </div>

        <!-- BEGIN #header-->
        <div id="header" class="clearfix">

            <?php $logo = get_option('dt_custom_logo'); ?>

            <div id="logo">

            <?php if ($logo == '' || !$logo): ?>

                <?php if (is_home() || is_front_page()): ?>

                    <h1 id="site-title"><span><a href="<?php echo home_url() ?>/" title="<?php bloginfo('name') ?>" rel="home"><?php bloginfo('name') ?></a></span></h1>

                <?php else: ?>

                    <div id="site-title"><a href="<?php echo home_url() ?>/" title="<?php bloginfo('name') ?>" rel="home"><?php bloginfo('name') ?></a></div>

                <?php endif; ?>

            <?php else: ?>

                <?php if (is_home() || is_front_page()): ?>

                    <h1 id="site-title"><span><a href="<?php echo home_url() ?>/" title="<?php bloginfo('name') ?> - <?php bloginfo('description') ?>" rel="home"><img class="logo" alt="<?php bloginfo('name') ?>" src="<?php echo stripslashes($logo); ?>" /></a></span></h1>

                <?php else: ?>

                    <div id="site-title"><span><a href="<?php echo home_url() ?>/" title="<?php bloginfo('name') ?> - <?php bloginfo('description') ?>" rel="home"><img class="logo" alt="<?php bloginfo('name') ?>" src="<?php echo stripslashes($logo); ?>" /></a></span></div>

                <?php endif; ?>

            <?php endif; ?>

            <!-- END #logo -->
            </div>

            <!-- BEGIN #primary-menu -->
            <div id="primary-menu" class="clearfix">

                <?php if ( has_nav_menu( 'primary-menu' ) ) : wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); endif; ?>

            <!-- END #primary-menu -->
            </div>

        <!-- END #header -->
        </div>

welcome
        <?php if(is_home() || is_front_page() && $welcome != '') : ?>

        <h3 id="home-title"><?php echo stripslashes(htmlspecialchars_decode(nl2br($welcome))); ?></h3>

        <?php endif; ?>

        <div id="main" class="clearfix">

            <div id="container" class="clearfix">

                <?php if(!is_home() || !is_front_page()) : ?>

                <div id="breadcrumb-wrap" class="clearfix">
                  breadcrump
                </div>
                <?php endif; ?>
