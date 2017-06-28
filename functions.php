<?php
	
	function wpstarter_child_style() {
	    wp_dequeue_style('wpforge');
	    wp_enqueue_style('parent-styles', get_template_directory_uri() . '/style.css', '', '5.5.2.5');
	    wp_enqueue_style('child-styles', get_stylesheet_uri(), array( 'parent-styles' ), '4.0');
	}
	add_action( 'wp_enqueue_scripts', 'wpstarter_child_style');
	
	include('includes/textivia-functions.php');
	include('includes/customposttypes.php');
	
	//wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/css/slick.css');
	//wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri() . '/css/slick-theme.css');
	
	//wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() . '/js/slick.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'sitescripts', get_stylesheet_directory_uri() . '/js/sitescripts.js', array('jquery'), '1.0', true );
	
	//acf_add_options_page();

?>