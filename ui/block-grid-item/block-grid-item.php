<?php
/**
 * Hero Banner Component
 *
 * @package Components
 * @since 1.0.0
 */

// grid item.
$grid_item = $args['grid_item'];

// outer styles.
$css_id     = esc_attr( $grid_item['blockId'] );
$css_class  = 'block-grid-item ' . esc_attr( $grid_item['blockUniqueClass'] );
$css_style  = 'background-color: ' . esc_attr( $grid_item['grid-background-color'] ) . ';';
$css_style .= 'color: ' . esc_attr( $grid_item['grid-text-color'] ) . ';';

// inner styles.
$overlay_style = null;
if ( $grid_item['background-image'] ) {
	$overlay_style  = 'background-image: url(' . $grid_item['background-image']['sizes']['medium']['url'] . ');';
	$overlay_style .= 'background-color: ' . esc_attr( $grid_item['grid-background-color'] ) . ';';
}

?><div id="<?php echo $css_id; ?>" class="<?php echo $css_class; ?>" style="<?php echo $css_style; ?>"> <?php // phpcs:ignore; ?>
	<div class="background-overlay" style="<?php echo $overlay_style; // phpcs:ignore. ?>"></div>
	<div class="inner">
		<h3><?php echo esc_attr( $grid_item['grid-item-title'] ); ?></h3>
		<div>
			<?php echo esc_html( $grid_item['grid-item-content'] ); ?>
		</div>
		<?php if ( $grid_item['button-url'] ) : ?>
			<a 
				class="grid-item-button"
				href="<?php echo esc_url( $grid_item['button-url'] ); ?>"
			>
				<?php echo esc_attr( $grid_item['button-label'] ); ?>
			</a>
		<?php endif; ?>
	</div>
</div><!--.block-grid-item-->
