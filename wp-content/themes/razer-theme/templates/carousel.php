<?php

function create_cpt_slides() {
    $labels = array(
        'name' => 'Carrusel',
        'singular_name' => 'Slide',
        'menu_name' => 'Carrusel',
        'add_new' => 'Añadir Slide',
        'add_new_item' => 'Añadir Nuevo Slide',
        'edit_item' => 'Editar Slide',
        'new_item' => 'Nuevo Slide',
        'view_item' => 'Ver Slide',
        'view_items' => 'Ver Slides',

        // 'edit' => 'Editar',
        // 'view' => 'Ver',
        // 'search_items' => 'Buscar Banner',
        // 'not_found' => 'No se encontró el Banner',
        // 'not_found_in_trash' => 'No se encontró el Banner en la papelera',
        // 'parent' => 'Banner padre'
    );

    $args = array(
        'label' => 'Slides',
        'labels' => $labels,
        'public' => true,
        'menu_position' => 5,
        'supports' => array('title', 'thumbnail'),
        'menu_icon' => 'dashicons-images-alt2',

        // 'taxonomies' => array( '' ),
        // 'has_archive' => false,
        // 'exclude_from_search' =>  true,
    );

    register_post_type('slides', $args);
}

add_action('init', 'create_cpt_slides');

// Asegúrate de que WordPress admita imágenes destacadas en tu tema
add_theme_support('post-thumbnails');

