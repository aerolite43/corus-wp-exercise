<?php

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles');
// Enqueue the style and css.
function child_enqueue_styles() {

	// The slickjs in this repository isn't working. Required to use the CDN.
	//wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/components/slick-slider/slick-theme.css', array() );
	//wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/components/slick-slider/slick.css', array() );
	//wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/components/slick-slider/slick.min.js', array( 'jquery' ), '', true );
	wp_enqueue_style( 'slick-style', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css', array() );
	wp_enqueue_style( 'slick-style', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css', array() );
	wp_enqueue_script( 'slick-js', '//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js', array( 'jquery' ), '', true );

}
include_once ('gallery_functions.php');

