<?php
/**
 * Masonry Shortcodes
 *
 * @package Components
 * @since 1.0.0
 */

/**
 * Masonry Shortcode
 *
 * @param Array $attrs Shortcode Attributes.
 */
function tcm_masonry_shortcode( $attrs ) {
	extract( // phpcs:ignore.
		shortcode_atts(
			array(
				'language'  => 'en',
				'term'      => 'general',
				'post_type' => 'post',
				'taxonomy'  => 'category',
				'count'     => 8,
			),
			$attrs
		),
	);

	ob_start();

	get_component(
		'masonry',
		'masonry',
		$args = array(
			'language'  => $language,
			'term'      => $term,
			'post_type' => $post_type,
			'taxonomy'  => $taxonomy,
			'count'     => $count,
		)
	);

	return ob_get_clean();
}
add_shortcode( 'masonry', 'tcm_masonry_shortcode' );
