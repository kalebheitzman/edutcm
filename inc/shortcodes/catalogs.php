<?php
/**
 * Catalog Shortcodes
 *
 * @package Components
 * @since 1.0.0
 */

/**
 * Catalog Shortcode
 *
 * @param Array $attrs Shortcode Attributes.
 */
function tcm_catalogs_shortcode( $attrs ) {
	extract( // phpcs:ignore.
		shortcode_atts(
			array(
				'language' => 'en',
			),
			$atts
		),
	);

	ob_start();

	get_component( 'catalogs', 'catalogs', $args = array( 'language' => $language ) );

	return ob_get_clean();
}
add_shortcode( 'catalogs', 'tcm_catalogs_shortcode' );
