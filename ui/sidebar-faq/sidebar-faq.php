<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Components
 * @since 1.0.0
 */

$post_type_obj = get_post_type_object( 'faq' );

$args = array(
	'menu'       => 'faq',
	'menu_class' => 'faq-menu',
);

?>

<aside class="secondary widget-area sidebar-faq">
	<div class="page-menu">
		<h3><?php echo esc_attr( $post_type_obj->label ); ?></h3>
		<?php wp_nav_menu( $args ); ?>
	</div>
</aside><!-- #secondary -->
