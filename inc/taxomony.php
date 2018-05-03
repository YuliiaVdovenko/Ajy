<?php
add_action( 'init', 'create_portfolio_taxonomies', 0 );

function create_portfolio_taxonomies() {

    $labels = array(
        'name'              => _x( 'Portfolio', 'taxonomy general name', 'understrap' ),
        'singular_name'     => _x( 'Portfolio', 'taxonomy singular name', 'understrap' ),
        'search_items'      => __( 'Search Portfolio item', 'understrap' ),
        'all_items'         => __( 'All Portfolio items', 'understrap' ),
        'parent_item'       => __( 'Parent Portfolio item', 'understrap' ),
        'parent_item_colon' => __( 'Parent Portfolio item:', 'understrap' ),
        'edit_item'         => __( 'Edit portfolio item', 'understrap' ),
        'update_item'       => __( 'Update portfolio item', 'understrap' ),
        'add_new_item'      => __( 'Add New portfolio item', 'understrap' ),
        'new_item_name'     => __( 'New portfolio item name', 'understrap' ),
        'menu_name'         => __( 'Portfolio taxonomy', 'understrap' ),
    );

    $args = array(
        'hierarchical'      => false,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'projects' ),
    );

    register_taxonomy( 'projects', array( 'portfolio' ), $args );
}
