<?php
/**
 * Custom Blocks
 *
 * @package Components
 * @since 1.0.0
 */

if ( ! function_exists( 'tcm_grid_item_block_ouput' ) ) :
	/**
	 * Grid Item Block Output
	 *
	 * @param String $output HTML Output.
	 * @param Array  $attributes Block Attributes.
	 */
	function tcm_grid_item_block_output( $output, $attributes ) {
		$args = array(
			'grid_item' => $attributes,
		);
		ob_start();
		get_component( 'block-grid-item', 'block-grid-item', $args );
		return ob_get_clean();
	}
	add_filter( 'lazyblock/grid-item/frontend_callback', 'tcm_grid_item_block_output', 10, 2 );
endif;
