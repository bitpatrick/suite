<?php
/*  Theme setup
/* ------------------------------------ */
if ( ! function_exists( 'suite_theme_setup' ) ) {

  function suite_theme_setup() {

    // Enable title in header
    add_theme_support( 'title-tag' );

    // Enable automatic feed links
    add_theme_support( 'automatic-feed-links' );

    // Enable featured image
    add_theme_support( 'post-thumbnails' );

    // Thumbnail sizes
    add_image_size( 'nakedpress_single', 800, 999, false );
    add_image_size( 'nakedpress_big', 1400, 928, true );   //(cropped)

    // Custom menu areas
    register_nav_menus( array(
      'header' => esc_html__( 'Header', 'suite_theme' )
    ) );

    // Load theme languages
    load_theme_textdomain( 'suite_theme', get_template_directory().'/languages' );

  }

}
add_action( 'after_setup_theme', 'suite_theme_setup' );


/*  Enqueue css
/* ------------------------------------ */
if ( ! function_exists( 'suite_theme_styles' ) ) {
  function suite_theme_styles() {

    wp_enqueue_style( 'suite_theme-style', get_template_directory_uri().'/style.css');

   }
}
add_action( 'wp_enqueue_scripts', 'suite_theme_styles' );



?>