<?php
//Theme functions go HERE

function enqueue_my_styles_and_scripts(){

  //enqueue bootstrap
  //wp_enqueue_style('bootstrap-styles', get_stylesheet_directory_uri() . '/assets/css/master.css', array(), '1.0.0', 'all');
  //wp_enqueue_script('bootstrap-script', get_theme_file_uri() . '/assets/js', array(), '1.0.0', false);
  wp_enqueue_style('bootstrap-styles', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), '1.0.0', 'all');
  wp_enqueue_script('bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js', array(), '1.0.0', false);




  //enqueue personal code
  wp_enqueue_style('my-styles', get_stylesheet_directory_uri() . '/assets/css/master.css', array(), '1.0.0', 'all');
  wp_enqueue_style('about-styles', get_stylesheet_directory_uri() . '/assets/css/about.css', array(), '1.0.0', 'all');
  wp_enqueue_style('contact-styles', get_stylesheet_directory_uri() . '/assets/css/contact.css', array(), '1.0.0', 'all');
  wp_enqueue_style('gallery-styles', get_stylesheet_directory_uri() . '/assets/css/gallery.css', array(), '1.0.0', 'all');
  wp_enqueue_style('responsive-styles', get_stylesheet_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', 'all');
  wp_enqueue_script('js-script', get_theme_file_uri() . '/assets/js/about.js', array(), '1.0.0', true);

}

add_action('wp_enqueue_scripts','enqueue_my_styles_and_scripts');

function myTheme_setup(){
  //Registering our nav menus
  register_nav_menus(array(
    'primary' => __('Primary Menu')
  ));

}

add_action('after_setup_theme', 'myTheme_setup');















 ?>
