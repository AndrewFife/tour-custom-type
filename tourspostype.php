<?php
/**
* Plugin Name: Tours Custom post type
* Plugin URI: ucc.co.za
* Description: A plugin to create a custom post type for Tours
* Version:  1.0
* Author: Andrew Fife
* Author URI:ucc.co.za
* License:  GPL2
*/

// Register Custom Post Type
function tours_post_type() {

	$labels = array(
		'name'                  => _x( 'Tours', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Tour', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Tours', 'text_domain' ),
		'name_admin_bar'        => __( 'Tour', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Tour:', 'text_domain' ),
		'all_items'             => __( 'All Tours', 'text_domain' ),
		'add_new_item'          => __( 'Add New Tour', 'text_domain' ),
		'add_new'               => __( 'New Tour', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Tour', 'text_domain' ),
		'update_item'           => __( 'Update Tour', 'text_domain' ),
		'view_item'             => __( 'View Tour', 'text_domain' ),
		'search_items'          => __( 'Search tours', 'text_domain' ),
		'not_found'             => __( 'No tours found', 'text_domain' ),
		'not_found_in_trash'    => __( 'No tours found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'post_type',
		'with_front'            => false,
		'pages'                 => false,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Tour', 'text_domain' ),
		'description'           => __( 'Tour information pages.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', ),
		'taxonomies'            => array( 'category', 'post_tag', 'tour_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-location-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'tour', $args );

}
add_action( 'init', 'tours_post_type', 0 );
