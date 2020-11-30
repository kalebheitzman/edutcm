<?php
/**
 * Resource Custom Post Type
 *
 * @package Components
 * @since 1.0.0
 */

/**
 * Register Resource custom post type.
 */
function tcm_resource_post_type() {

	$labels = array(
		'name'                  => _x( 'Resources', 'Post Type General Name', 'tcm' ),
		'singular_name'         => _x( 'Resource', 'Post Type Singular Name', 'tcm' ),
		'menu_name'             => __( 'Resources', 'tcm' ),
		'name_admin_bar'        => __( 'Resource', 'tcm' ),
		'archives'              => __( 'Resource Archives', 'tcm' ),
		'attributes'            => __( 'Resource Attributes', 'tcm' ),
		'parent_item_colon'     => __( 'Parent Resource:', 'tcm' ),
		'all_items'             => __( 'All Resources', 'tcm' ),
		'add_new_item'          => __( 'Add New Resource', 'tcm' ),
		'add_new'               => __( 'Add New', 'tcm' ),
		'new_item'              => __( 'New Resource', 'tcm' ),
		'edit_item'             => __( 'Edit Resource', 'tcm' ),
		'update_item'           => __( 'Update Resource', 'tcm' ),
		'view_item'             => __( 'View Resource', 'tcm' ),
		'view_items'            => __( 'View Resources', 'tcm' ),
		'search_items'          => __( 'Search Resource', 'tcm' ),
		'not_found'             => __( 'Not found', 'tcm' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'tcm' ),
		'featured_image'        => __( 'Featured Image', 'tcm' ),
		'set_featured_image'    => __( 'Set featured image', 'tcm' ),
		'remove_featured_image' => __( 'Remove featured image', 'tcm' ),
		'use_featured_image'    => __( 'Use as featured image', 'tcm' ),
		'insert_into_item'      => __( 'Insert into resource', 'tcm' ),
		'uploaded_to_this_item' => __( 'Uploaded to this resource', 'tcm' ),
		'items_list'            => __( 'Resources list', 'tcm' ),
		'items_list_navigation' => __( 'Resources list navigation', 'tcm' ),
		'filter_items_list'     => __( 'Filter Resources list', 'tcm' ),
	);
	$args   = array(
		'label'               => __( 'Resource', 'tcm' ),
		'description'         => __( 'TCM Resources', 'tcm' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'revisions', 'thumbnail', 'custom-fields' ),
		'taxonomies'          => array(),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-media-document',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'show_in_rest'        => true,
	);
	register_post_type( 'resource', $args );

}
add_action( 'init', 'tcm_resource_post_type', 0 );
