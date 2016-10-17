<?php

function code_script_enqueue(){
	wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/code.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'bootstrap min', get_template_directory_uri(). '/css/bootstrap.min.css', array(), '3.3.7', 'all' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '3.3.7', true );
}

add_action( 'wp_enqueue_scripts', 'code_script_enqueue' );


function code_theme_setup(){
	add_theme_support('menus');
	register_nav_menu( 'primary', 'Primary Header Navigation' );
}

add_action( 'init', 'code_theme_setup');