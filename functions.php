<?php
/*
* Add your own functions here. You can also copy some of the theme functions into this file and WordPress will use these functions instead of the original functions.
*/

// Load parent style.css
function bolby_theme_child_enqueue_styles() {

    $parent_style = 'bolby-custom-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'bolby-custom-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'bolby_theme_child_enqueue_styles' );
 
// Your php code goes here
 
?>