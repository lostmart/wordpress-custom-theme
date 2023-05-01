<?php

function mart_theme_support(){
    //Adds dynamic title tags support
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'mart_theme_support');



function mart_register_styles(){
    $version =  wp_get_theme()-> get('Version') ;
    wp_enqueue_style('bootsrap-five', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style('bootsrap-five-map', get_template_directory_uri() . '/assets/css/bootstrap.min.css.map' );
    wp_enqueue_style('bootsrap-five-cutom-css', get_template_directory_uri() . '/assets/css/products.css', array('bootsrap-five'), $version );
}
add_action('wp_enque_scripts', mart_register_styles());



function mart_register_scripts(){
    $version =  wp_get_theme()-> get('Version') ;

    $handle = 'bootsrap-five-bundle-js';
    $src = get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js';
    $deps = array();
    $in_footer = true;
    $ver = '5.0.2';
    wp_enqueue_script($handle, $src, $deps, $ver, $in_footer);

    $handle_personal = 'personal-js';
    $src_personal = get_template_directory_uri() . '/assets/js/test.js';
    $deps_personal = array();
    $in_footer_personal = true;
    wp_enqueue_script($handle_personal, $src_personal, $deps, $version, $in_footer);

}
add_action('wp_enque_scripts', mart_register_scripts());

?>