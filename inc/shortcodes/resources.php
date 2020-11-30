<?php
/**
 * Resources Shortcodes
 *
 * @package Components
 * @since 1.0.0
 */

/**
 * Resources Shortcode
 *
 * @param Array $attrs Shortcode Attributes.
 */
function tcm_resources_shortcode( $attrs ) {
	extract( // phpcs:ignore.
		shortcode_atts(
			array(
				'language' => 'en',
				'category' => 'general',
			),
			$attrs
		),
	);

	ob_start();

	get_component(
		'resources',
		'resources',
		$args = array(
			'language' => $language,
			'category' => $category,
		)
	);

	return ob_get_clean();
}
add_shortcode( 'resources', 'tcm_resources_shortcode' );
