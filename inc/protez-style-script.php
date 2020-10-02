<?php
if(!defined("ABSPATH")) return;


/**
 * Enqueue scripts and styles.
 */
function protez_scripts() {
//	wp_enqueue_style( 'protez-style', get_stylesheet_uri(), array(), _S_VERSION );
//	wp_style_add_data( 'protez-style', 'rtl', 'replace' );

	wp_enqueue_script( 'protez-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}


	// styles
//	wp_enqueue_style("" , get_template_directory_uri()."/google_fonts.css" , array() );

	wp_enqueue_style("fontawesome" , get_template_directory_uri()."/css/fontawesome-free-5.15.0-web/css/all.min.css" , array() );

//not work - why&
	//wp_enqueue_style("fontawesome" , get_template_directory_uri()."/node_modules/@fontawesome/fontawesome-free/css/all.min.css" , array() );

	wp_enqueue_style("main" , get_template_directory_uri()."/css/main.css" , array() );


	//wp_enqueue_style("" , get_template_directory_uri()."/google_fonts.css" , array() );


	// scripts

//	wp_enqueue_script("jquery-easing" , get_template_directory_uri()."/js/jquery.easing.1.3.js" , array("jquery") , null , true);

	//wp_enqueue_script("jquery.waypoints" , get_template_directory_uri()."/js/jquery.waypoints.min.js" , array("jquery") , null , true);

	//wp_enqueue_script("jquery.stellar" , get_template_directory_uri()."/js/jquery.stellar.min.js" , array("jquery") , null , true);

//	wp_enqueue_script("owl.carousel" , get_template_directory_uri()."/js/owl.carousel.min.js" , array("jquery") , null , true);
//	wp_enqueue_script("jquery.magnific-popup" , get_template_directory_uri()."/js/jquery.magnific-popup.min.js" , array("jquery") , null , true);
//	wp_enqueue_script("aos" , get_template_directory_uri()."/js/aos.js" , array("jquery") , null , true);
//	wp_enqueue_script("jquery.animateNumber" , get_template_directory_uri()."/js/jquery.animateNumber.min.js" , array("jquery") , null , true);
//	wp_enqueue_script("scrollax.min.js" , get_template_directory_uri()."/js/scrollax.min.js" , array("jquery") , null , true);


	wp_enqueue_script("main" , get_template_directory_uri()."/js/main.js" , array("jquery") , null , true);

//	wp_enqueue_script("jquery-easing" , get_template_directory_uri()."/js/jquery.easing.1.3.js" , array("jquery") , null , true);





}
add_action( 'wp_enqueue_scripts', 'protez_scripts' );
