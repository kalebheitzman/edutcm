<?php
/**
 * Handbook Custom Post Type
 *
 * @package Components
 * @since 1.0.0
 */

/**
 * Register Handbook custom post type.
 */
function tcm_handbook_post_type() {

	$labels = array(
		'name'                  => _x( 'Handbooks', 'Post Type General Name', 'tcm' ),
		'singular_name'         => _x( 'Handbook', 'Post Type Singular Name', 'tcm' ),
		'menu_name'             => __( 'Handbooks', 'tcm' ),
		'name_admin_bar'        => __( 'Handbook', 'tcm' ),
		'archives'              => __( 'Handbook Archives', 'tcm' ),
		'attributes'            => __( 'Handbook Attributes', 'tcm' ),
		'parent_item_colon'     => __( 'Parent Handbook:', 'tcm' ),
		'all_items'             => __( 'All Handbooks', 'tcm' ),
		'add_new_item'          => __( 'Add New Handbook', 'tcm' ),
		'add_new'               => __( 'Add New', 'tcm' ),
		'new_item'              => __( 'New Handbook', 'tcm' ),
		'edit_item'             => __( 'Edit Handbook', 'tcm' ),
		'update_item'           => __( 'Update Handbook', 'tcm' ),
		'view_item'             => __( 'View Handbook', 'tcm' ),
		'view_items'            => __( 'View Handbooks', 'tcm' ),
		'search_items'          => __( 'Search Handbook', 'tcm' ),
		'not_found'             => __( 'Not found', 'tcm' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'tcm' ),
		'featured_image'        => __( 'Featured Image', 'tcm' ),
		'set_featured_image'    => __( 'Set featured image', 'tcm' ),
		'remove_featured_image' => __( 'Remove featured image', 'tcm' ),
		'use_featured_image'    => __( 'Use as featured image', 'tcm' ),
		'insert_into_item'      => __( 'Insert into handbook', 'tcm' ),
		'uploaded_to_this_item' => __( 'Uploaded to this handbook', 'tcm' ),
		'items_list'            => __( 'Handbooks list', 'tcm' ),
		'items_list_navigation' => __( 'Handbooks list navigation', 'tcm' ),
		'filter_items_list'     => __( 'Filter Handbooks list', 'tcm' ),
	);
	$args   = array(
		'label'               => __( 'Handbook', 'tcm' ),
		'description'         => __( 'TCM Handbooks', 'tcm' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'revisions', 'thumbnail', 'custom-fields' ),
		'taxonomies'          => array(),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-media-text',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'show_in_rest'        => true,
	);
	register_post_type( 'handbook', $args );

}
add_action( 'init', 'tcm_handbook_post_type', 0 );
