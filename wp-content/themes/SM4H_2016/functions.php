<?php 

	// Theme & Javascript Functions

	function SM4H_2015_scripts() {

		// Google Fonts
		wp_enqueue_style( 'google-font', "http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" );

		// Load our main stylesheets.
		wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . "/css/bootstrap.min.css" );
		wp_enqueue_style( 'main-style', get_template_directory_uri() . "/css/SM4H_style.css" );
		wp_enqueue_style('jquery-ui-css', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/smoothness/jquery-ui.css');
		wp_enqueue_style( 'SM4H-2015-style', get_stylesheet_uri() );

		wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js' );
		wp_register_script( 'form-js', get_template_directory_uri() . '/js/min/form-validation-min.js', array() , false, true );

		if(is_page('enquiry')) : {
			wp_enqueue_script( 'form-js' );
		} endif;
	}

	add_action( 'wp_enqueue_scripts', 'SM4H_2015_scripts' );




	// Menu Functions
?>