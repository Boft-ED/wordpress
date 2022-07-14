<?php

/**
 * Theme functions
 * 
 * @package test
 */

// wp_enqueue_style('main.css', get_template_directory() . '/main.css', [stylesheet], filemtime(get_template_directory() . '/main.css')); 

// wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
// if (is_home()) {
//     wp_enqueue_style('style-css');
// }

function theme_enqueue_scripts()
{
    wp_enqueue_style('style-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
    wp_enqueue_script('scripts-js', get_template_directory_uri() . '/assets/js/script.js', [], filemtime(get_template_directory() . '/assets/js/script.js'), true);
}

add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
