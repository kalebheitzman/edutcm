<?php
/**
 * Hero CTA
 *
 * @package Components
 * @since 1.0.0
 */

$cta = $args['cta'];

// cta is missing.
if ( ! $cta['label'] ) {
	return;
}
?>

<a class="hero-cta" href="<?php echo esc_url( $cta['url']['url'] ); ?>" title="<?php esc_attr( $cta['url']['title'] ); ?>">
	<span><?php echo esc_attr( $cta['label'] ); ?></span>
</a>
