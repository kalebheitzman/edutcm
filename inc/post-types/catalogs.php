<?php
/**
 * Catalog Custom Post Type
 *
 * @package Components
 * @since 1.0.0
 */

/**
 * Register Catalog custom post type.
 */
function tcm_catalog_post_type() {

	$labels = array(
		'name'                  => _x( 'Catalogs', 'Post Type General Name', 'tcm' ),
		'singular_name'         => _x( 'Catalog', 'Post Type Singular Name', 'tcm' ),
		'menu_name'             => __( 'Catalogs', 'tcm' ),
		'name_admin_bar'        => __( 'Catalog', 'tcm' ),
		'archives'              => __( 'Catalog Archives', 'tcm' ),
		'attributes'            => __( 'Catalog Attributes', 'tcm' ),
		'parent_item_colon'     => __( 'Parent Catalog:', 'tcm' ),
		'all_items'             => __( 'All Catalogs', 'tcm' ),
		'add_new_item'          => __( 'Add New Catalog', 'tcm' ),
		'add_new'               => __( 'Add New', 'tcm' ),
		'new_item'              => __( 'New Catalog', 'tcm' ),
		'edit_item'             => __( 'Edit Catalog', 'tcm' ),
		'update_item'           => __( 'Update Catalog', 'tcm' ),
		'view_item'             => __( 'View Catalog', 'tcm' ),
		'view_items'            => __( 'View Catalogs', 'tcm' ),
		'search_items'          => __( 'Search Catalog', 'tcm' ),
		'not_found'             => __( 'Not found', 'tcm' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'tcm' ),
		'featured_image'        => __( 'Featured Image', 'tcm' ),
		'set_featured_image'    => __( 'Set featured image', 'tcm' ),
		'remove_featured_image' => __( 'Remove featured image', 'tcm' ),
		'use_featured_image'    => __( 'Use as featured image', 'tcm' ),
		'insert_into_item'      => __( 'Insert into catalog', 'tcm' ),
		'uploaded_to_this_item' => __( 'Uploaded to this catalog', 'tcm' ),
		'items_list'            => __( 'Catalogs list', 'tcm' ),
		'items_list_navigation' => __( 'Catalogs list navigation', 'tcm' ),
		'filter_items_list'     => __( 'Filter Catalogs list', 'tcm' ),
	);
	$args   = array(
		'label'               => __( 'Catalog', 'tcm' ),
		'description'         => __( 'TCM Catalogs', 'tcm' ),
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
	register_post_type( 'catalog', $args );

}
add_action( 'init', 'tcm_catalog_post_type', 0 );
