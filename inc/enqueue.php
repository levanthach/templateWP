<?php
/**
 * huggy enqueue scripts
 *
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'theme_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function theme_scripts() {
	
		wp_enqueue_style( 'theme-core', get_template_directory_uri() . '/assets/css/core.min.css?v=1.2', array(), rand(1,100) );
		wp_enqueue_style( 'theme-atomic', get_template_directory_uri() . '/assets/css/atomic.min.css?v=1.2', array(), rand(1,100) );
		wp_enqueue_style( 'theme-main', get_template_directory_uri() . '/assets/css/main.css?v=2.2', array(), rand(1,100) );
		wp_enqueue_style( 'theme-custom', get_template_directory_uri() . '/assets/css/custom.css?v=2.3', array(), rand(1,100) );

		wp_enqueue_script( 'jquery' );

		// wp_enqueue_script( 'theme-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js?v=1.1', array(),  rand(1,100), true );
		wp_enqueue_script( 'theme-core', get_template_directory_uri() . '/assets/js/core.min.js?v=1.2', array(),  rand(1,100), true );
		wp_enqueue_script( 'theme-main', get_template_directory_uri() . '/assets/js/main.js?v=1.2', array(),  rand(1,100), true );
		wp_enqueue_script( 'theme-custom', get_template_directory_uri() . '/assets/js/custom.js?v=1.1', array(), rand(1,100), true );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

	}
} // End of if function_exists( 'theme_scripts' ).

add_action( 'wp_enqueue_scripts', 'theme_scripts' );
