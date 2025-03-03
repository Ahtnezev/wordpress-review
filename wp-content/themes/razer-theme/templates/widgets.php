<?php

//! just if the user wants edit the footer from dashboard
function registrar_widget_footer() {
    register_sidebar(array(
        'name'          => 'Footer Widget',
        'id'            => 'footer_widget',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'registrar_widget_footer');