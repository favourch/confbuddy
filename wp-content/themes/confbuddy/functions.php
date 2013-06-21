<?php
   
/** Variables *************************************************************/

$key     = 'confbuddy';
$version = '0.1.0';

/**
 * Hook actions in that run on every page-load
 *
 * @uses add_action()
 */
function add_actions() {
    add_action( 'wp_enqueue_scripts', 'enqueue' );
}

/**
 * Enqueue the necessary CSS and JS
 *
 * @uses wp_enqueue_style
 * @uses wp_enqueue_script
 */
function enqueue() {

    // js
    wp_enqueue_script( 'modernizr', get_stylesheet_directory_uri() . '/js/vendor/custom.modernizr.js', null, '1.0', false );

}

/**
 * Remove buddypress styles
 */
function bp_dtheme_enqueue_styles() {}

/** Load Methods **********************************************************/
add_actions();