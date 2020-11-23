<?php
/**
 * Person Custom Post Type
 *
 * @package Components
 * @since 1.0.0
 */

/**
 * Register Person custom post type.
 */
function tcm_person_post_type() {

	$labels = array(
		'name'                  => _x( 'People', 'Post Type General Name', 'tcm' ),
		'singular_name'         => _x( 'Person', 'Post Type Singular Name', 'tcm' ),
		'menu_name'             => __( 'People', 'tcm' ),
		'name_admin_bar'        => __( 'Person', 'tcm' ),
		'archives'              => __( 'Person Archives', 'tcm' ),
		'attributes'            => __( 'Person Attributes', 'tcm' ),
		'parent_item_colon'     => __( 'Parent Person:', 'tcm' ),
		'all_items'             => __( 'All People', 'tcm' ),
		'add_new_item'          => __( 'Add New Person', 'tcm' ),
		'add_new'               => __( 'Add New', 'tcm' ),
		'new_item'              => __( 'New Person', 'tcm' ),
		'edit_item'             => __( 'Edit Person', 'tcm' ),
		'update_item'           => __( 'Update Person', 'tcm' ),
		'view_item'             => __( 'View Person', 'tcm' ),
		'view_items'            => __( 'View People', 'tcm' ),
		'search_items'          => __( 'Search Person', 'tcm' ),
		'not_found'             => __( 'Not found', 'tcm' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'tcm' ),
		'featured_image'        => __( 'Featured Image', 'tcm' ),
		'set_featured_image'    => __( 'Set featured image', 'tcm' ),
		'remove_featured_image' => __( 'Remove featured image', 'tcm' ),
		'use_featured_image'    => __( 'Use as featured image', 'tcm' ),
		'insert_into_item'      => __( 'Insert into person', 'tcm' ),
		'uploaded_to_this_item' => __( 'Uploaded to this person', 'tcm' ),
		'items_list'            => __( 'People list', 'tcm' ),
		'items_list_navigation' => __( 'People list navigation', 'tcm' ),
		'filter_items_list'     => __( 'Filter People list', 'tcm' ),
	);
	$args = array(
		'label'               => __( 'Person', 'tcm' ),
		'description'         => __( 'Frequently Asked Questions', 'tcm' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'revisions', 'custom-fields' ),
		'taxonomies'          => array(),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-admin-users',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'show_in_rest'        => true,
	);
	register_post_type( 'person', $args );

}
add_action( 'init', 'tcm_person_post_type', 0 );
