<?php
add_action( 'init', 'portfolio_register' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */

function portfolio_register() {
    $labels = array(
        'name'               => _x( 'Portfolio', 'post type general name', 'understrap' ),
        'singular_name'      => _x( 'Portfolio', 'post type singular name', 'understrap' ),
        'menu_name'          => _x( 'Portfolio', 'admin menu', 'understrap' ),
        'name_admin_bar'     => _x( 'Portfolio', 'add new on admin bar', 'understrap' ),
        'add_new'            => _x( 'Add New portfolio item', 'Portfolio member', 'understrap' ),
        'add_new_item'       => __( 'Add New portfolio item', 'understrap' ),
        'new_item'           => __( 'New Portfolio item', 'understrap' ),
        'edit_item'          => __( 'Edit Portfolio item', 'understrap' ),
        'view_item'          => __( 'View Portfolio item', 'understrap' ),
        'all_items'          => __( 'All Portfolio items', 'understrap' ),
        'search_items'       => __( 'Search Portfolio items', 'understrap' ),
        'parent_item_colon'  => __( 'Parent Portfolio items:', 'understrap' ),
        'not_found'          => __( 'No Portfolio members found.', 'understrap' ),
        'not_found_in_trash' => __( 'No Portfolio members found in Trash.', 'understrap' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'This is a list of portfolio items', 'understrap' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'portfolio' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'thumbnail')
    );

    register_post_type( 'Portfolio', $args );
}


add_action( 'init', 'clients_register' );

function clients_register() {
    $labels = array(
        'name'               => _x( 'Clients', 'post type general name', 'understrap' ),
        'singular_name'      => _x( 'Clients', 'post type singular name', 'understrap' ),
        'menu_name'          => _x( 'Clients', 'admin menu', 'understrap' ),
        'name_admin_bar'     => _x( 'Clients', 'add new on admin bar', 'understrap' ),
        'add_new'            => _x( 'Add New Client', 'Portfolio member', 'understrap' ),
        'add_new_item'       => __( 'Add New Client', 'understrap' ),
        'new_item'           => __( 'New Client', 'understrap' ),
        'edit_item'          => __( 'Edit Client', 'understrap' ),
        'view_item'          => __( 'View Client', 'understrap' ),
        'all_items'          => __( 'All Clients', 'understrap' ),
        'search_items'       => __( 'Search Clients', 'understrap' ),
        'parent_item_colon'  => __( 'Parent Clients:', 'understrap' ),
        'not_found'          => __( 'No Clients found.', 'understrap' ),
        'not_found_in_trash' => __( 'No Clients found in Trash.', 'understrap' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'This is a list of Clients', 'understrap' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'clients' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'thumbnail')
    );

    register_post_type( 'clients', $args );
}
