<?php

function lapizzeria_styles() {

    // Adding stylesheets

    wp_register_style('normalize', get_template_directory_uri() . 'css/normalize.css', array(), '8.0.0');
    wp_register_style('fontawesome', get_template_directory_uri() . 'css/font-awesome.css', array(), '4.7.0');
    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), '1.0');

    // Enqueue the style

    wp_enqueue_style('normalize');
    wp_enqueue_style('fontawesome');
    wp_enqueue_style('style');

}

add_action('wp_enqueue_scripts', 'lapizzeria_styles');

//Add menu 

function lapizzeria_menu() {
    register_nav_menus(array(
        'header-menu' => __('Header Menu', 'lapizzeria'),
        'social-menu' => __('Social Menu', 'lapizzeria')
    ));

}

add_action('init', 'lapizzeria_menu');
