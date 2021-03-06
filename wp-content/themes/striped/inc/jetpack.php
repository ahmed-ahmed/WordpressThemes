<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Striped
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function striped_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'striped_jetpack_setup' );
