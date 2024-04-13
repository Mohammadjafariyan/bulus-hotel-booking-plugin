<?php
function bulut_add_roles()
{
	add_role(
		'hotel_owner_role',
		'Hotel Owner Role'
	);

	add_role(
		'booker_role',
		'Booker Role'
	);
	// Remove existing capabilities from the role
	$role = get_role('hotel_owner_role');
	if ($role !== null) {

		/* 	echo 'addddddddddddddddddddddddddddddddddddddddddddded';
		echo 'addddddddddddddddddddddddddddddddddddddddddddded';
		echo 'addddddddddddddddddddddddddddddddddddddddddddded';
		echo 'addddddddddddddddddddddddddddddddddddddddddddded';
		echo 'addddddddddddddddddddddddddddddddddddddddddddded';
		echo 'addddddddddddddddddddddddddddddddddddddddddddded';
		echo 'addddddddddddddddddddddddddddddddddddddddddddded';
		echo 'addddddddddddddddddddddddddddddddddddddddddddded';
		echo 'addddddddddddddddddddddddddddddddddddddddddddded';
		echo 'addddddddddddddddddddddddddddddddddddddddddddded';
		echo 'addddddddddddddddddddddddddddddddddddddddddddded';
		echo 'addddddddddddddddddddddddddddddddddddddddddddded';
		echo 'addddddddddddddddddddddddddddddddddddddddddddded'; */
		$role->remove_cap('edit_posts');
		$role->add_cap('edit_dashboards');
		$role->add_cap('upload_files');

		// hotels
		$role->add_cap('edit_hotel');
		$role->add_cap('edit_hotels');
		$role->add_cap('edit_other_hotels');
		$role->add_cap('publish_hotels');
		$role->add_cap('read_hotel');
		$role->add_cap('read_private_hotels');
		$role->add_cap('delete_hotel');
		// rooms
		$role->add_cap('edit_room');
		$role->add_cap('edit_rooms');
		$role->add_cap('edit_other_rooms');
		$role->add_cap('publish_rooms');
		$role->add_cap('read_room');
		$role->add_cap('read_private_rooms');
		$role->add_cap('delete_room');
		// bookings
		$role->add_cap('edit_booking');
		$role->add_cap('edit_bookings');
		$role->add_cap('edit_other_bookings');
		$role->add_cap('publish_bookings');
		$role->add_cap('read_booking');
		$role->add_cap('read_private_bookings');
		$role->add_cap('delete_booking');
	} else {

		/* echo 'notnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnot';
		echo 'notnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnot';
		echo 'notnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnot';
		echo 'notnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnot';
		echo 'notnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnot';
		echo 'notnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnot';
		echo 'notnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnot';
		echo 'notnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnot';
		echo 'notnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnot';
		echo 'notnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnot';
		echo 'notnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnotnot'; */
	}

	$booker_role = get_role('booker_role');
	if ($booker_role !== null) {
		/* 		echo '-----------985-------------';
		echo '-----------985-------------';
		echo '-----------985-------------';
		echo '-----------985-------------';
		echo '-----------985-------------';
		echo '-----------985-------------'; */
		$booker_role->remove_cap('edit_posts');
		$booker_role->remove_cap('upload_files');

		$booker_role->add_cap('Read');
		$booker_role->add_cap('read');
		$booker_role->add_cap('edit_dashboards');


		$booker_role->add_cap('edit_booking');
		$booker_role->add_cap('edit_bookings');
		$booker_role->add_cap('edit_other_bookings');
		$booker_role->add_cap('publish_bookings');
		$booker_role->add_cap('read_booking');
		$booker_role->add_cap('read_private_bookings');
		$booker_role->add_cap('delete_booking');
	} else {
		/* 		echo '-----------not booker role-------------';
		echo '-----------not booker role-------------';
		echo '-----------not booker role-------------';
		echo '-----------not booker role-------------';
		echo '-----------not booker role-------------';
		echo '-----------not booker role-------------';
		echo '-----------not booker role-------------';
		echo '-----------not booker role-------------';
		echo '-----------not booker role-------------';
		echo '-----------not booker role-------------';
		echo '-----------not booker role-------------';
		echo '-----------not booker role-------------'; */
	}

	if (!get_user_by('login',  'booker_role')) {
		$user_data1 = [
			'user_login' => 'booker_role',
			'user_pass'  =>  'booker_role',
			'user_url'   =>  'booker_role',
		];

		$user_id = wp_insert_user($user_data1);

		// success
		if (!is_wp_error($user_id)) {
			echo 'User created: ' . $user_id;
		}
	}

	$user1 = get_user_by('login',  'booker_role');

	// Fetch the WP_User object of our user.
	$u1 = new WP_User($user1->ID);

	// Replace the current role with 'editor' role
	$u1->set_role('booker_role');


	if (!get_user_by('login', 'hotel_owner')) {
		$user_data = [
			'user_login' => 'hotel_owner',
			'user_pass'  =>  'hotel_owner',
			'user_url'   =>  'hotel_owner',
		];

		$user_id = wp_insert_user($user_data);

		// success
		if (!is_wp_error($user_id)) {
			echo 'User created: ' . $user_id;
		}
	}



	$user = get_user_by('login',  'hotel_owner');

	// Fetch the WP_User object of our user.
	$u = new WP_User($user->ID);

	// Replace the current role with 'editor' role
	$u->set_role('hotel_owner_role');
}

// Add the simple_role.
add_action('init', 'bulut_add_roles');
