<?php
function theme_styles() {
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'jumbotron_css', get_template_directory_uri() . '/css/jumbotron.css' );
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

add_filter( 'show_admin_bar', '__return_false' );

/*=============================
=            Menus            =
=============================*/
add_theme_support( 'menus' );

function rg_wptest_register_menu() {
  register_nav_menu('main-menu', __( 'Main Menu') );
}

add_action('init', 'rg_wptest_register_menu');


// activate google fonts
function tutsplus_add_google_fonts() {
  wp_register_style( 'googleFonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300');
  wp_enqueue_style( 'googleFonts');
}
add_action( 'wp_enqueue_scripts', 'tutsplus_add_google_fonts' );

?>
