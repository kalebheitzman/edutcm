<?php
/**
 * Page Navigation Menu
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Components
 * @since 1.0.0
 */

// get the post.
global $post;

// determing parent post id.
$pid = $post->ID;

if ( is_page() && $post->post_parent ) {
	$pid = $post->post_parent;
}

// get the associated menu.
$menu_id = get_field( 'navigation_menu', $pid );

// check if menu found.
if ( ! $menu_id ) {
	return;
}

// build the menu args.
$menu_args = array(
	'menu'       => $menu_id,
	'menu_class' => 'page-menu',
);

$current_page = get_post( $pid );

?>

<div class="page-menu">
	<h3><?php echo esc_attr( $current_page->post_title ); ?></h3>
	<?php wp_nav_menu( $menu_args ); ?>
</div><!--.page-menu-->
