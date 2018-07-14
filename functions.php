<?php

function lapizzeria_styles() {

    // Adding stylesheets

    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), '1.0');

    // Enqueue the style

    wp_enqueue_style('style');

}

add_action('wp_enqueue_scripts', 'lapizzeria_styles');
