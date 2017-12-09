<?php

function titolo() {
	return bloginfo('name');
}

function provaTemp_scripts() {
	// Add custom fonts, used in the main stylesheet.

	wp_enqueue_style( 'bootstrap', '/wp-content/themes/provaTemp/css/bootstrap.min.css', array(), null );

	wp_enqueue_style( 'animate', '/wp-content/themes/provaTemp/css/animate.css', array(), null );

	wp_enqueue_style( 'font-awesome', '/wp-content/themes/provaTemp/css/font-awesome.css', array(), null );

	wp_enqueue_style( 'owl.theme', '/wp-content/themes/provaTemp/css/owl.theme.css', array(), null );

	wp_enqueue_style( 'owl.carousel', '/wp-content/themes/provaTemp/css/owl.carousel.css', array(), null );

	wp_enqueue_style( 'style', '/wp-content/themes/provaTemp/css/style.css', array(), null );


	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', array(), '20141010', true );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '20141010', true );

	wp_enqueue_script( 'jquery.parallax', get_template_directory_uri() . '/js/jquery.parallax.js', array('jquery', 'bootstrap'), '20141010', true );

	wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery', 'bootstrap'), '20141010', true );

	wp_enqueue_script( 'smoothscroll', get_template_directory_uri() . '/js/smoothscroll.js', array('jquery', 'bootstrap'), '20141010', true );

	wp_enqueue_script( 'wow.min', get_template_directory_uri() . '/js/wow.min.js', array('jquery', 'bootstrap'), '20141010', true );

	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array('jquery', 'bootstrap'), '20141010', true );

}

