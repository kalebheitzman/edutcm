<?php
/**
 * FAQ Custom Post Type
 *
 * @package Components
 * @since 1.0.0
 */

/**
 * Register FAQ custom post type.
 */
function tcm_faq_post_type() {

	$labels = array(
		'name'                  => _x( 'FAQs', 'Post Type General Name', 'tcm' ),
		'singular_name'         => _x( 'FAQ', 'Post Type Singular Name', 'tcm' ),
		'menu_name'             => __( 'FAQs', 'tcm' ),
		'name_admin_bar'        => __( 'FAQ', 'tcm' ),
		'archives'              => __( 'FAQ Archives', 'tcm' ),
		'attributes'            => __( 'FAQ Attributes', 'tcm' ),
		'parent_item_colon'     => __( 'Parent FAQ:', 'tcm' ),
		'all_items'             => __( 'All FAQs', 'tcm' ),
		'add_new_item'          => __( 'Add New FAQ', 'tcm' ),
		'add_new'               => __( 'Add New', 'tcm' ),
		'new_item'              => __( 'New FAQ', 'tcm' ),
		'edit_item'             => __( 'Edit FAQ', 'tcm' ),
		'update_item'           => __( 'Update FAQ', 'tcm' ),
		'view_item'             => __( 'View FAQ', 'tcm' ),
		'view_items'            => __( 'View FAQs', 'tcm' ),
		'search_items'          => __( 'Search FAQ', 'tcm' ),
		'not_found'             => __( 'Not found', 'tcm' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'tcm' ),
		'featured_image'        => __( 'Featured Image', 'tcm' ),
		'set_featured_image'    => __( 'Set featured image', 'tcm' ),
		'remove_featured_image' => __( 'Remove featured image', 'tcm' ),
		'use_featured_image'    => __( 'Use as featured image', 'tcm' ),
		'insert_into_item'      => __( 'Insert into faq', 'tcm' ),
		'uploaded_to_this_item' => __( 'Uploaded to this faq', 'tcm' ),
		'items_list'            => __( 'FAQs list', 'tcm' ),
		'items_list_navigation' => __( 'FAQs list navigation', 'tcm' ),
		'filter_items_list'     => __( 'Filter FAQs list', 'tcm' ),
	);
	$args = array(
		'label'               => __( 'FAQ', 'tcm' ),
		'description'         => __( 'Frequently Asked Questions', 'tcm' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail', 'revisions', 'custom-fields' ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-info-outline',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest'        => true,
	);
	register_post_type( 'faq', $args );

}
add_action( 'init', 'tcm_faq_post_type', 0 );
