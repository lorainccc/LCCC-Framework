<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package LCCC Framework
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function lccc_framework_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'lccc_framework_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function lccc_framework_jetpack_setup
add_action( 'after_setup_theme', 'lccc_framework_jetpack_setup' );

function lccc_framework_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function lccc_framework_infinite_scroll_render