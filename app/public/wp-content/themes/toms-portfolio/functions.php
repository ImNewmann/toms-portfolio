<?php 

function website_files(){
    wp_enqueue_script('website_main_scripts', get_template_directory_uri() .'/dist/js/main.js', NULL, microtime(), true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900|Roboto:300');
    wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.0.12/css/all.css');
    wp_enqueue_style('website_main_styles', get_template_directory_uri() . '/dist/css/main.css', NULL, microtime());
}

add_action('wp_enqueue_scripts', 'website_files');
add_theme_support( 'post-thumbnails' ); 
?>