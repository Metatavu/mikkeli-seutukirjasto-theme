<?php
add_action('wp_enqueue_scripts', 'twentytwentyfour_child_enqueue_styles');
function twentytwentyfour_child_enqueue_styles() {
    $parent_style = 'twentytwentyfour-style';
    wp_enqueue_style( 'titillium-web-font', 'https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;600;700&display=swap', false );
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array($parent_style),
        wp_get_theme()->get('Version')
    );
}
