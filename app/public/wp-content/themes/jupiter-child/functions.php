<?php
/**
 *
 * [Parent Theme] child theme functions and definitions
 *
 * @package jupiter
 * @author  Florian Perrier <contact@florianperrier.com>
 *
 */

$theme = wp_get_theme();

define( 'VERSION', $theme->get('Version'));

function jupiter_child_style() {
    wp_deregister_style('mk-style');
    wp_register_style( 'mk-style', get_stylesheet_uri(), null, VERSION );
    wp_enqueue_style( 'mk-style' );
}
add_action( 'wp_enqueue_scripts', 'jupiter_child_style', 11 );
