<?php 

	// Theme & Javascript Functions

	function SM4H_2015_scripts() {

		// Google Fonts
		wp_enqueue_style( 'google-font', "http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" );

		// Load our main stylesheets.
		wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . "/css/bootstrap.min.css" );
		wp_enqueue_style( 'SM4H-2015-style', get_stylesheet_uri() );

		wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js' );
	}

	add_action( 'wp_enqueue_scripts', 'SM4H_2015_scripts' );


	// Menu Functions
?>