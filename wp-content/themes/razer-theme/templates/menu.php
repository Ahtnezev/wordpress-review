<?php

function registrar_menus() {
    register_nav_menus(array(
        'menu-principal' => __('Menú Principal', 'mi-tema'),
    ));
}

add_action('after_setup_theme', 'registrar_menus');


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
