<?php
/**
 * Plugin Name: Woodd AJAX Posts Loader
 * Plugin URI: http://www.woodd.org
 * Description: Load the next page of posts with AJAX.
 * Version: 0.1
 * Author: Michael Bontyes
 * Author URI: http://www.woodd.org
 * License: GPLv2
 */

 /**
  * Initialization. Add our script if needed on this page.
  */
 function woodd_alp_init() {
 	global $wp_query;
 
 	// Add code to index pages.
 	if( !is_singular() ) {	
 		// Queue JS and CSS
 		wp_enqueue_script(
 			'woodd-apl-load-posts',
 			plugin_dir_url( __FILE__ ) . 'js/load-posts.js',
 			array('jquery'),
 			'1.0',
 			true
 		);
 		
 		wp_enqueue_style(
 			'woodd-apl-style',
 			plugin_dir_url( __FILE__ ) . 'css/style.css',
 			false,
 			'1.0',
 			'all'
 		);
 		
 	
 		
 		// What page are we on? And what is the pages limit?
 		$max = $wp_query->max_num_pages;
 		$paged = ( get_query_var('paged') > 1 ) ? get_query_var('paged') : 1;
 		
 		// Add some parameters for the JS.
 		wp_localize_script(
 			'woodd-apl-load-posts',
 			'woodd_alp',
 			array(
 				'startPage' => $paged,
 				'maxPages' => $max,
 				'nextLink' => next_posts($max, false)
 			)
 		);
 	}
 }
 add_action('template_redirect', 'woodd_alp_init');
 
 ?>