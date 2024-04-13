<?php

// Register Province Taxonomy
function register_province_taxonomy() {
    $labels = array(
        'name'              => _x( 'Provinces', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Province', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Provinces', 'textdomain' ),
        'all_items'         => __( 'All Provinces', 'textdomain' ),
        'edit_item'         => __( 'Edit Province', 'textdomain' ),
        'update_item'       => __( 'Update Province', 'textdomain' ),
        'add_new_item'      => __( 'Add New Province', 'textdomain' ),
        'new_item_name'     => __( 'New Province Name', 'textdomain' ),
        'menu_name'         => __( 'Provinces', 'textdomain' ),
    );

    $args = array(
        'labels'            => $labels,
        'public'            => true,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'show_admin_column' => true,
        'hierarchical'      => true,
        'rewrite'           => array( 'slug' => 'province' ),
    );

    register_taxonomy( 'province', array( 'hotel' ), $args );
}

// Register City Taxonomy
function register_city_taxonomy() {
    $labels = array(
        'name'              => _x( 'Cities', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'City', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Cities', 'textdomain' ),
        'all_items'         => __( 'All Cities', 'textdomain' ),
        'edit_item'         => __( 'Edit City', 'textdomain' ),
        'update_item'       => __( 'Update City', 'textdomain' ),
        'add_new_item'      => __( 'Add New City', 'textdomain' ),
        'new_item_name'     => __( 'New City Name', 'textdomain' ),
        'menu_name'         => __( 'Cities', 'textdomain' ),
    );

    $args = array(
        'labels'            => $labels,
        'public'            => true,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'show_admin_column' => true,
        'hierarchical'      => true,
        'rewrite'           => array( 'slug' => 'city' ),
		  // Set 'province' as the parent taxonomy
        'parent'            => 'province',
    );

    register_taxonomy( 'city', array( 'hotel' ), $args );
}




add_action( 'init', 'register_city_taxonomy' );
add_action( 'init', 'register_province_taxonomy' );