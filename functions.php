<?php

add_theme_support( 'custom-logo' );
add_theme_support( 'custom-header' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-background' );
add_post_type_support( 'page' , 'excerpt' );
register_nav_menus( 
    array(
        'header-menu' => 'Header Menu',
    )
);

function laslesvpn_enqueue_styles() {
    wp_enqueue_style( 'font-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );

}
add_action( 'wp_enqueue_scripts', 'laslesvpn_enqueue_styles' );
?>