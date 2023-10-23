<?php

// Add styles
function load_css()
{

    wp_register_style(
        'quasar-style',
        get_template_directory_uri() . '/css/quasar.rtl.prod.css',
        array(),
        false,
        'all'
    );

    wp_enqueue_style('quasar-style');

    wp_register_style(
        'outlined-material',
        get_template_directory_uri() . '/css/outlined_material_ui.css',
        array(),
        false,
        'all'
    );

    wp_enqueue_style('outlined-material');

    wp_register_style(
        'main-style',
        get_template_directory_uri() . '/style.css',
        array(),
        false,
        'all'
    );

    wp_enqueue_style('main-style');
}

add_action('wp_enqueue_scripts', 'load_css');

// Add js
function load_js()
{

    wp_enqueue_script('vue', get_template_directory_uri() . '/js/vue.global.js', array(), null, true);
    wp_enqueue_script('quasar', get_template_directory_uri() . '/js/quasar.umd.prod.js', array(), null, true);
    
}

add_action('wp_enqueue_scripts', 'load_js');

// Theme options
add_theme_support('menus');

// Register menus location
register_nav_menus(
    array('top-menu' => 'Top Menu Location', 'footer-menu' => 'Footer Menu Location')
);

