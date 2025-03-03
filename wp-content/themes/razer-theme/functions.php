<?php

function load_theme_styles() {
    // css
    wp_enqueue_style('goku', get_template_directory_uri() . '/assets/css/style.css', [], 1, 'all');
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.2', 'all');

    // js
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array(), '5.3.2', true);
}

function registrar_menus() {
    register_nav_menus(array(
        'menu-principal' => __('Menú Principal', 'mi-tema'),
    ));
}


class Bootstrap_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = null) {
        $output .= '<ul class="dropdown-menu">';
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        if ($args->walker->has_children) {
            $output .= '<li class="nav-item dropdown">';
            $output .= '<a class="nav-link dropdown-toggle" href="' . esc_url($item->url) . '" data-bs-toggle="dropdown">' . esc_html($item->title) . '</a>';
        } else {
            $output .= '<li class="nav-item">';
            $output .= '<a class="nav-link" href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
        }
    }

    function end_el(&$output, $item, $depth = 0, $args = null) {
        $output .= '</li>';
    }
}



add_action('after_setup_theme', 'registrar_menus');
add_action('wp_enqueue_scripts', 'load_theme_styles');
