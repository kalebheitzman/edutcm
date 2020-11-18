<?php
/**
 * Admin Tweaks
 *
 * Add administrative tweaks
 *
 * @package Components
 * @since 1.0.0
 */

/**
 * Add filter for parent posts
 */
function make_post_parent_public_qv() {
	global $pagenow;
	if ( is_admin() && 'edit.php' === $pagenow ) {
		$GLOBALS['wp']->add_query_var( 'post_parent' );
	}
}
add_action( 'init', 'make_post_parent_public_qv' );

/**
 * Add Parent Page Filter
 *
 * @param Array $views View.
 *
 * @return Array
 */
function add_filter_link( array $views ) {

	$url = add_query_arg(
		array(
			'bfilter'     => 'parents',
			'post_parent' => 0,
			'post_type'   => 'page',
		),
		'edit.php'
	);

	$views['post_parent'] = sprintf(
		'<a href="%1$s"%2$s>%3$s</a>',
		esc_url( $url ),
		( is_filter_active() ) ? ' class="current" aria-current="page"' : '',
		'Parent Pages'
	);

	return $views;
}
add_filter( 'views_edit-page', 'add_filter_link' );

/**
 * Check if filter active
 */
function is_filter_active() {
	return ( filter_input( INPUT_GET, 'bfilter' ) === 'parents' );
}
