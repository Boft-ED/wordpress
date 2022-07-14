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
    // reg styles
    wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
    wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/css/lib/bootstrap/bootstrap.min.css', [], false, 'all');
    
    // reg scripts
    wp_register_script('scripts-js', get_template_directory_uri() . '/assets/js/script.js', [], filemtime(get_template_directory() . '/assets/js/script.js'), true);
    wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/js/lib/bootstrap/bootstrap.min.js', ['jquery'], false, true);

    // enqueue styles
    wp_enqueue_style('style-css');
    wp_enqueue_style('bootstrap-css');

    // enqueue scripts
    wp_enqueue_script('scripts-js');
    wp_enqueue_script('bootstrap-js');
}

add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
