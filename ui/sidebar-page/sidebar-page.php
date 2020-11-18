<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Components
 * @since 1.0.0
 */

?>

<aside class="secondary widget-area sidebar-page">
	<?php get_component( 'page-menu' ); ?>

	<?php if ( is_active_sidebar( 'post-sidebar' ) ) : ?>
		<ul>
			<?php dynamic_sidebar( 'page-sidebar' ); ?>
		</ul>
	<?php endif; ?>
</aside><!-- #secondary -->
