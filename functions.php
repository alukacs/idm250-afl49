<?php

add_post_type_support('page', 'excerpt');

function theme_styles_and_scripts() {
    wp_enqueue_style(
        'idm250_normalize',
        'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css',
        [],
        '8.0.1',
    );
    wp_enqueue_style(
        'idm250_main_style',
        get_template_directory_uri() . '/dist/styles/main.css',
        [],
        filemtime(get_template_directory() . '/dist/styles/main.css'),
    );
    wp_enqueue_script(
        'idm250_main_script',
        get_template_directory_uri() . '/dist/scripts/main.js',
        [],
        filemtime(get_template_directory() . '/dist/scripts/main.js'),
        true,
    );
}

add_action('wp_enqueue_scripts', 'theme_styles_and_scripts');

function theme_setup()
{
    add_theme_support('post-thumbnails');

    register_nav_menus([
        'primary-menu' => 'Primary Menu',
    ]);
}

add_action('after_setup_theme', 'theme_setup');

