<?php

/**------------------------------------------------------------------------
 *                                    assets
*------------------------------------------------------------------------**/
include('templates/assets.php');

/**------------------------------------------------------------------------
 *                                     menu
*------------------------------------------------------------------------**/
include('templates/menu.php');

/**------------------------------------------------------------------------
 *                                 carousel
*------------------------------------------------------------------------**/
include('templates/carousel.php');



// function enqueue_custom_styles() {
//     $version = filemtime(get_template_directory() . '/assets/css/style.css'); // Obtiene el timestamp del archivo
//     wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/style.css', array(), $version);
// }
// add_action('wp_enqueue_scripts', 'enqueue_custom_styles');


/**------------------------------------------------------------------------
 *                            single post template
*------------------------------------------------------------------------**/
// function change_post_template($template) {
//     if (is_singular('post')) {
//         return get_template_directory() . '/templates/custom-post-template.php';
//     }
//     return $template;
// }
// add_filter('template_include', 'change_post_template');

/**------------------------------------------------------------------------
 *                            footer dashboard
*------------------------------------------------------------------------**/
// include('templates/widgets.php');
