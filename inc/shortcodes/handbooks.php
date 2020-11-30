<?php
/**
 * Handbook Shortcodes
 *
 * @package Components
 * @since 1.0.0
 */

/**
 * Handbook Shortcode
 *
 * @param Array $attrs Shortcode Attributes.
 */
function tcm_handbooks_shortcode( $attrs ) {
	extract( // phpcs:ignore.
		shortcode_atts(
			array(
				'language' => 'en',
			),
			$atts
		),
	);

	ob_start();

	get_component( 'handbooks', 'handbooks', $args = array( 'language' => $language ) );

	return ob_get_clean();
}
add_shortcode( 'handbooks', 'tcm_handbooks_shortcode' );
