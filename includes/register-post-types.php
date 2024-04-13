<?php


/* ------------------------------------------------------------------------------ */
/* register hotel post type  */
/* ------------------------------------------------------------------------------ */
function bulus_hotel_custom_post_type() {

    // Labels for the post type
    $labels = array(
        'name'               => _x( 'Hotel', 'post type general name', 'bulus' ),
        'singular_name'      => _x( 'Hotel', 'post type singular name', 'bulus' ),
        'menu_name'          => _x( 'Hotels', 'admin menu', 'bulus' ),
        'name_admin_bar'     => _x( 'Hotel', 'add new on admin bar', 'bulus' ),
        'add_new'            => _x( 'Add New', 'book', 'bulus' ),
        'add_new_item'       => __( 'Add New Hotel', 'bulus' ),
        'new_item'           => __( 'New Hotel', 'bulus' ),
        'edit_item'          => __( 'Edit Hotel', 'bulus' ),
        'view_item'          => __( 'View Hotel', 'bulus' ),
        'all_items'          => __( 'All Hotels', 'bulus' ),
        'search_items'       => __( 'Search Hotels', 'bulus' ),
        'parent_item_colon'  => __( 'Parent Hotels:', 'bulus' ),
        'not_found'          => __( 'No Hotels found.', 'bulus' ),
        'not_found_in_trash' => __( 'No Hotels found in Trash.', 'bulus' )
    );

    // Arguments to define the post type
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'hotel' ), // Custom slug for your post type
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ) // Add or remove features you want for your post type
     ,
	 'description'          => 'Represents a Hotels',
'menu_icon'            => 'dashicons-images-alt2',
'show_in_admin_bar'    => false,
'show_in_nav_menus'    => true,
   'capabilities' => array(
        'edit_post' => 'edit_hotel',
        'edit_posts' => 'edit_hotels',
        'edit_others_posts' => 'edit_other_hotels',
        'publish_posts' => 'publish_hotels',
        'read_post' => 'read_hotel',
        'read_private_posts' => 'read_private_hotels',
        'delete_post' => 'delete_hotel'
    ));

    // Register the post type
    register_post_type( 'Hotels', $args );

}



/* ------------------------------------------------------------------------------ */
/* register hotel post type end */
/* ------------------------------------------------------------------------------ */


/* ------------------------------------------------------------------------------ */
/* register Room post type begin */
/* ------------------------------------------------------------------------------ */

	function bulus_room_custom_post_type() {

    // Labels for the post type
    $labels = array(
        'name'               => _x( 'Room', 'post type general name', 'bulus' ),
        'singular_name'      => _x( 'Room', 'post type singular name', 'bulus' ),
        'menu_name'          => _x( 'Rooms', 'admin menu', 'bulus' ),
        'name_admin_bar'     => _x( 'Room', 'add new on admin bar', 'bulus' ),
        'add_new'            => _x( 'Add New', 'book', 'bulus' ),
        'add_new_item'       => __( 'Add New Room', 'bulus' ),
        'new_item'           => __( 'New Room', 'bulus' ),
        'edit_item'          => __( 'Edit Room', 'bulus' ),
        'view_item'          => __( 'View Room', 'bulus' ),
        'all_items'          => __( 'All Rooms', 'bulus' ),
        'search_items'       => __( 'Search Rooms', 'bulus' ),
        'parent_item_colon'  => __( 'Parent Rooms:', 'bulus' ),
        'not_found'          => __( 'No Rooms found.', 'bulus' ),
        'not_found_in_trash' => __( 'No Rooms found in Trash.', 'bulus' )
    );

    // Arguments to define the post type
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'room' ), // Custom slug for your post type
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ) // Add or remove features you want for your post type
    ,
   'capabilities' => array(
        'edit_post' => 'edit_room',
        'edit_posts' => 'edit_rooms',
        'edit_others_posts' => 'edit_other_rooms',
        'publish_posts' => 'publish_rooms',
        'read_post' => 'read_room',
        'read_private_posts' => 'read_private_rooms',
        'delete_post' => 'delete_room'
    )
);

    // Register the post type
    register_post_type( 'Room', $args );

}

/* ------------------------------------------------------------------------------ */
/* register Room post type end */
/* ------------------------------------------------------------------------------ */



/* ------------------------------------------------------------------------------ */
/* create booking custom post type begin */
/* ------------------------------------------------------------------------------ */

	function bulus_booking_custom_post_type() {

    // Labels for the post type
    $labels = array(
        'name'               => _x( 'booking', 'post type general name', 'bulus' ),
        'singular_name'      => _x( 'booking', 'post type singular name', 'bulus' ),
        'menu_name'          => _x( 'bookings', 'admin menu', 'bulus' ),
        'name_admin_bar'     => _x( 'booking', 'add new on admin bar', 'bulus' ),
        'add_new'            => _x( 'Add New', 'book', 'bulus' ),
        'add_new_item'       => __( 'Add New booking', 'bulus' ),
        'new_item'           => __( 'New booking', 'bulus' ),
        'edit_item'          => __( 'Edit booking', 'bulus' ),
        'view_item'          => __( 'View booking', 'bulus' ),
        'all_items'          => __( 'All bookings', 'bulus' ),
        'search_items'       => __( 'Search bookings', 'bulus' ),
        'parent_item_colon'  => __( 'Parent bookings:', 'bulus' ),
        'not_found'          => __( 'No bookings found.', 'bulus' ),
        'not_found_in_trash' => __( 'No bookings found in Trash.', 'bulus' )
    );

    // Arguments to define the post type
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'booking' ), // Custom slug for your post type
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ) // Add or remove features you want for your post type
    ,
   'capabilities' => array(
        'edit_post' => 'edit_booking',
        'edit_posts' => 'edit_bookings',
        'edit_others_posts' => 'edit_other_bookings',
        'publish_posts' => 'publish_bookings',
        'read_post' => 'read_booking',
        'read_private_posts' => 'read_private_bookings',
        'delete_post' => 'delete_booking'
    ) );

    // Register the post type
    register_post_type( 'custom_post_type', $args );

}

/* ------------------------------------------------------------------------------ */
/* create booking custom post type end */
/* ------------------------------------------------------------------------------ */


function custom_post_type_menu() {
    add_menu_page(
        'Booking Post Type', // Page title
        'Booking Post Type', // Menu title
        'manage_options',   // Capability required to access
        'edit.php?post_type=booking', // Menu slug (URL)
        '',                 // Callback function (optional)
        'dashicons-admin-post', // Icon (optional)
        20                   // Position in the menu
    );
}

add_action('admin_menu', 'custom_post_type_menu');


// Hook into the 'init' action
add_action( 'init', 'bulus_booking_custom_post_type', 0 );
// Hook into the 'init' action
add_action( 'init', 'bulus_hotel_custom_post_type', 0 );
// Hook into the 'init' action
add_action( 'init', 'bulus_room_custom_post_type', 0 );
