<?php
   
/** Variables *************************************************************/

$key     = 'confbuddy';
$version = '0.1.0';

/**
 * Hook actions in that run on every page-load
 *
 * @uses add_action()
 * @uses add_filter()
 */
function add_actions() {
    add_action( 'wp_enqueue_scripts', 'enqueue' );
    add_filter( 'show_admin_bar', 'kill_admin_bar');
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
 * Remove default styles
 */
function bp_dtheme_enqueue_styles() {}
function kill_admin_bar() { return false; }

/** Load Methods **********************************************************/
add_actions();