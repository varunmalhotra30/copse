<?php
/**
 * Registering custom post type
 */
function copse_init() {
    $labels = array(
        'name'                  => _x( 'Recipes', 'Post type general name', 'copse' ),
        'singular_name'         => _x( 'Recipe', 'Post type singular name', 'copse' ),
        'menu_name'             => _x( 'Recipes', 'Admin Menu text', 'copse' ),
        'name_admin_bar'        => _x( 'Recipe', 'Add New on Toolbar', 'copse' ),
        'add_new'               => __( 'Add New', 'copse' ),
        'add_new_item'          => __( 'Add New recipe', 'copse' ),
        'new_item'              => __( 'New recipe', 'copse' ),
        'edit_item'             => __( 'Edit recipe', 'copse' ),
        'view_item'             => __( 'View recipe', 'copse' ),
        'all_items'             => __( 'All recipes', 'copse' ),
        'search_items'          => __( 'Search recipes', 'copse' ),
        'parent_item_colon'     => __( 'Parent recipes:', 'copse' ),
        'not_found'             => __( 'No recipes found.', 'copse' ),
        'not_found_in_trash'    => __( 'No recipes found in Trash.', 'copse' ),
        'featured_image'        => _x( 'Recipe Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'copse' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'copse' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'copse' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'copse' ),
        'archives'              => _x( 'Recipe archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'copse' ),
        'insert_into_item'      => _x( 'Insert into recipe', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'copse' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this recipe', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'copse' ),
        'filter_items_list'     => _x( 'Filter recipes list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'copse' ),
        'items_list_navigation' => _x( 'Recipes list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'copse' ),
        'items_list'            => _x( 'Recipes list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'copse' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'copse custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'recipe' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'show_in_rest'       => true
    );

    register_post_type( 'copse_recipe', $args );
}
add_action( 'init', 'copse_init' );