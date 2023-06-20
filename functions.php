<?php

add_theme_support( 'custom-logo');
add_theme_support( 'title-tag' );

function laslesvpn_enqueue_styles() {
    wp_enqueue_style( 'font-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );

}
add_action( 'wp_enqueue_scripts', 'laslesvpn_enqueue_styles' );
?>