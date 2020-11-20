<?php
/**
 * Hero Banner Component
 *
 * @package Components
 * @since 1.0.0
 */

$grid_item = $args['grid_item'];

?><div id="<?php echo esc_attr( $grid_item['blockId'] ); ?>" class="block-grid-item <?php echo esc_attr( $grid_item['blockUniqueClass'] ); ?>" style="background-color: <?php echo esc_attr( $grid_item['grid-background-color'] ); ?>">
	<h3><?php echo esc_attr( $grid_item['grid-item-title'] ); ?></h3>
	<div>
		<?php echo esc_html( $grid_item['grid-item-content'] ); ?>
	</div>
</div><!--.block-grid-item-->
