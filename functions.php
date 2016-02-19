<?php

/*--------------------------*
/*  Theme features
/*--------------------------*/
function theme_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_features');

/*--------------------------*
/*  Register Menus
/*--------------------------*/
function register_menu() {
    register_nav_menus([
        'header-menu' => __('Header Menu', 're')
    ]);
}
add_action('init', 'register_menu');

/*--------------------------*
/*  Remove emojis
/*--------------------------*/
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');