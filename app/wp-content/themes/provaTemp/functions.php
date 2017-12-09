<?php

function titolo() {
	return bloginfo('name');
}

function provaTemp_scripts() {
	// Add custom fonts, used in the main stylesheet.

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), null );

	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array(), null );

	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), null );

	wp_enqueue_style( 'owl.theme', get_template_directory_uri() . '/css/owl.theme.css', array(), null );

	wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/css/owl.carousel.css', array(), null );

	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), null );


	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', array(), '20141010', true );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '20141010', true );

	wp_enqueue_script( 'jquery.parallax', get_template_directory_uri() . '/js/jquery.parallax.js', array('jquery', 'bootstrap'), '20141010', true );

	wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery', 'bootstrap'), '20141010', true );

	wp_enqueue_script( 'smoothscroll', get_template_directory_uri() . '/js/smoothscroll.js', array('jquery', 'bootstrap'), '20141010', true );

	wp_enqueue_script( 'wow.min', get_template_directory_uri() . '/js/wow.min.js', array('jquery', 'bootstrap'), '20141010', true );

	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array('jquery', 'bootstrap'), '20141010', true );

}

add_action( 'wp_enqueue_scripts', 'provaTemp_scripts' );
