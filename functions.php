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
    wp_enqueue_style('header-css',get_template_directory_uri().'/assets/css/header.css');
    wp_enqueue_style('footer-css',get_template_directory_uri().'/assets/css/footer.css');
    wp_enqueue_style('middle-css',get_template_directory_uri().'/assets/css/middle.css');
    wp_enqueue_style( 'font-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_enqueue_script( 'video-js', get_template_directory_uri().'/assets/js/video-js.js', array('jquery'), time(), true );
    wp_localize_script( 'video-js', 'js_config', array(
        'admin_url' => admin_url('admin-ajax.php'),
    ) );

}
add_action( 'wp_enqueue_scripts', 'laslesvpn_enqueue_styles' );
function fetch_contents() {
    $id = $_POST['id'];
    $post = get_post($id);
    wp_send_json_success( $post->post_content, 200);
}
add_action('wp_ajax_fetch_content', 'fetch_contents');
add_action('wp_ajax_nopriv_fetch_content', 'fetch_contents');

?>