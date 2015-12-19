<?php

/**
 * Setup our theme defaults
 */
function km_theme_setup() {

	// Add feed links to <head>
	add_theme_support('automatic-feed-links');

	// Let WordPress handle document titles
	add_theme_support('title-tag');

	// Register nav menu
	register_nav_menus(array(
		'site_nav' => 'Site Nav',
		'photos_nav' => 'Photos',
	));

}
add_action('after_setup_theme', 'km_theme_setup');

/**
 * Enqueue scripts and styles
 */
function theme_scripts_styles() {

	// Load our main stylesheet
	wp_enqueue_style('theme-style', get_stylesheet_uri(), false, '1.0.0');

	// Load The Final Countdown
	wp_enqueue_script( 'final-countdown', get_template_directory_uri() . '/assets/js/jquery.countdown.min.js', array( 'jquery' ), '2.1.0' );

	// Load custom JavaScript
	wp_enqueue_script( 'km-js', get_template_directory_uri() . '/assets/js/km.js', array( 'jquery' ), '1.0.0' );

}
add_action('wp_enqueue_scripts', 'theme_scripts_styles');
