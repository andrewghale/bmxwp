<?php

function wp_theme_styles() {

  wp_enqueue_style( 'style_css', get_template_directory_uri() . '/css/style.css' );

}

add_action( 'wp_enqueue_scripts', 'wp_theme_styles' );



function wp_theme_js() {


  wp_enqueue_script( 'app_js', get_template_directory_uri() . '/js/app.js' );
  wp_enqueue_script( 'slick_js', get_template_directory_uri() . '/js/slick.js' );

}

add_action( 'wp_enqueue_scripts', 'wp_theme_js' );

