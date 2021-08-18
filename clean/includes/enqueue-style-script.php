<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue scripts and styles.
 */
function clean_scripts() {
	wp_enqueue_style( 'clean-style', get_template_directory_uri(). '/assets/css/app.css' );
	wp_style_add_data( 'clean-style', 'rtl', 'replace' );

	wp_enqueue_script( 'clean-navigation', get_template_directory_uri(). '/assets/js/app.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'clean_scripts' );









