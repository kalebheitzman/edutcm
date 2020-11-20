<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Components
 * @since 1.0.0
 */

$args = array(
	'menu'       => 'faq',
	'menu_class' => 'faq-menu',
);

?>

<aside class="secondary widget-area sidebar-faq">
	<div class="page-menu">
		<?php wp_nav_menu( $args ); ?>
	</div>
</aside><!-- #secondary -->
