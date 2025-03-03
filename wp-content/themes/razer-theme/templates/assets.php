<?php

function load_theme_styles() {
    // css
    wp_enqueue_style('goku', get_template_directory_uri() . '/assets/css/style.css', [], 1, 'all');
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.2', 'all');

    // js
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array(), '5.3.2', true);
}

add_action('wp_enqueue_scripts', 'load_theme_styles');