<?php
/**
 * Resource Category
 *
 * @package Components
 * @since 1.0.0
 */

/**
 * Register Resource Category.
 */
function resource_category() {

	$labels = array(
		'name'                       => _x( 'Resource Category', 'Taxonomy General Name', 'components' ),
		'singular_name'              => _x( 'Resource Category', 'Taxonomy Singular Name', 'components' ),
		'menu_name'                  => __( 'Resource Category', 'components' ),
		'all_items'                  => __( 'All Resource Categories', 'components' ),
		'parent_item'                => __( 'Parent Resource Category', 'components' ),
		'parent_item_colon'          => __( 'Parent Resource Category:', 'components' ),
		'new_item_name'              => __( 'New Resource Category', 'components' ),
		'add_new_item'               => __( 'Add New Resource Category', 'components' ),
		'edit_item'                  => __( 'Edit Resource Category', 'components' ),
		'update_item'                => __( 'Update Resource Category', 'components' ),
		'view_item'                  => __( 'View Resource Category', 'components' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'components' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'components' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'components' ),
		'popular_items'              => __( 'Popular Items', 'components' ),
		'search_items'               => __( 'Search Items', 'components' ),
		'not_found'                  => __( 'Not Found', 'components' ),
		'no_terms'                   => __( 'No items', 'components' ),
		'items_list'                 => __( 'Items list', 'components' ),
		'items_list_navigation'      => __( 'Items list navigation', 'components' ),
	);
	$args   = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'resource_category', array( 'resource' ), $args );

}
add_action( 'init', 'resource_category', 0 );
