<?php

function uls_style() {

  wp_enqueue_script( 'slider', get_stylesheet_directory_uri() . '/js/jquery.min.js', array(), false, true );
  wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/js/jquery-migrate-3.0.0.js', array(), false, true );
  wp_enqueue_script( 'jquerymin', get_stylesheet_directory_uri() . '/js/jquery-ui.min.js', array(), false, true );
  wp_enqueue_script( 'eating', get_stylesheet_directory_uri() . '/js/easing.js', array(), false, true );
  wp_enqueue_script( 'colors', get_stylesheet_directory_uri() . '/js/colors.js', array(), false, true );
  wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap-datepicker.js', array(), false, true );
  wp_enqueue_script( 'jqscroll', get_stylesheet_directory_uri() . '/js/jquery.scrollUp.min.js', array(), false, true );
  wp_enqueue_script( 'tiltjquery', get_stylesheet_directory_uri() . '/js/tilt.jquery.min.js', array(), false, true );
  wp_enqueue_script( 'carouesl', get_stylesheet_directory_uri() . '/js/owl-carousel.js', array(), false, true );
  wp_enqueue_script( 'steller', get_stylesheet_directory_uri() . '/js/steller.js', array(), false, true );
  wp_enqueue_script( 'wow', get_stylesheet_directory_uri() . '/js/wow.min.js', array(), false, true );
  wp_enqueue_script( 'magnific', get_stylesheet_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), false, true );
  wp_enqueue_script( 'bootmin', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array(), false, true );
  wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/js/main.js', array(), false, true );
  wp_enqueue_script( 'counterup', get_stylesheet_directory_uri() . '/js/jquery.counterup.min.js', array(), false, true );
  wp_enqueue_script('waypoints', 'http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js', array(), false, true);


  wp_enqueue_style('bootstrap', get_theme_file_uri('/css/bootstrap.min.css'));
  wp_enqueue_style('nice-select', get_theme_file_uri('/css/nice-select.css'));
  wp_enqueue_style('fa-style', get_theme_file_uri('/css/font-awesome.min.css'));
  wp_enqueue_style('icofont', get_theme_file_uri('/css/icofont.css'));
  wp_enqueue_style('slicknav', get_theme_file_uri('/css/slicknav.min.css'));
  wp_enqueue_style('owl-carousel', get_theme_file_uri('/css/owl-carousel.css'));
  wp_enqueue_style('datepicker', get_theme_file_uri('/css/datepicker.css'));
  wp_enqueue_style('animate', get_theme_file_uri('/css/animate.min.css'));
  wp_enqueue_style('magnific', get_theme_file_uri('/css/magnific-popup.css'));
  wp_enqueue_style('normalize', get_theme_file_uri('/css/normalize.css'));
  wp_enqueue_style('responsive', get_theme_file_uri('/css/responsive.css'));
  wp_enqueue_style('main-style', get_theme_file_uri('/style.css'));
  }
  
add_action('wp_enqueue_scripts','uls_style');


function features() {
  add_theme_support('title-tag');
  
}

add_action('after_setup_theme', 'features');


?>