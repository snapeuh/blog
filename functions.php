<?php
/*--------------------------*
/*  Theme support
/*--------------------------*/
function custom_theme_setup() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'custom_theme_setup');

/*--------------------------*
/*  Register menus
/*--------------------------*/
function register_menu() {
    register_nav_menus([
        'header-menu' => __('Header Menu', 're')
    ]);
}
add_action('init', 'register_menu');

/*--------------------------*
/*  Custom helpers
/*--------------------------*/
function is_last_post(){
    global $wp_query;
    return (($wp_query->current_post + 1) == $wp_query->post_count);
}

/*--------------------------*
/*  Alter autop order
/*--------------------------*/
remove_filter('the_content', 'wpautop');
add_filter('the_content', 'wpautop' , 99);
add_filter('the_content', 'shortcode_unautop', 100);

/*--------------------------*
/*  Register shortcodes
/*--------------------------*/
function code_shortcode($atts, $content = null) {
    $atts = shortcode_atts([
        'language' => ''
    ], $atts);

    return '<pre><code class="' . $atts['language'] . '">' . $content . '</code></pre>';
}
add_shortcode('code', 'code_shortcode');

/*--------------------------*
/*  Allow HTML on User bio
/*--------------------------*/
remove_filter('pre_user_description', 'wp_filter_kses');

/*--------------------------*
/*  Remove emojis
/*--------------------------*/
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

/*--------------------------*
/*  Remove REST API
/*--------------------------*/
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);

/*--------------------------*
/*  Remove RSD link
/*--------------------------*/
remove_action ('wp_head', 'rsd_link');

/*--------------------------*
/*  Remove manifest link
/*--------------------------*/
remove_action('wp_head', 'wlwmanifest_link');

/*--------------------------*
/*  Remove shortlink link
/*--------------------------*/
remove_action('wp_head', 'wp_shortlink_wp_head');

/*--------------------------*
/*  Disable XML-RPC
/*--------------------------*/
add_filter('xmlrpc_enabled', '__return_false');

/*--------------------------*
/*  Remove XML-RPC exploit
/*--------------------------*/
function remove_xmlrpc_exploit($methods){
    unset($methods['system.multicall']);
    return $methods;
}
add_filter('xmlrpc_methods', 'remove_xmlrpc_exploit');

/*--------------------------*
/*  Remove WordPress version
/*--------------------------*/
function remove_wp_version() {
    return '';
}
add_filter('the_generator', 'remove_wp_version');
