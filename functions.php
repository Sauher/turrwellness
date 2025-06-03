<?php
function custom_theme_setup() {
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'custom-theme' ),
  ) );
}
add_action( 'after_setup_theme', 'custom_theme_setup' );

function custom_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'custom_theme_scripts' );
function custom_theme_remove_wp_block_styles() {
  wp_dequeue_style( 'wp-block-library' );
  wp_dequeue_style( 'wp-block-library-theme' );
  wp_dequeue_style( 'global-styles' );
}
add_action( 'wp_enqueue_scripts', 'custom_theme_remove_wp_block_styles', 100 );
?>