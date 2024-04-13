<?php

// Hook into ACF initialization
function my_plugin_register_fields()
{

	// Check if ACF function exists (to prevent errors if ACF is not installed or deactivated)
	if (function_exists('acf_add_local_field_group')) {



		// Define field group
		$fields = array(
			'key' => 'group_609dd157e35f1',
			'title' => 'Hotel - Room Relationship',
			'fields' => array(
				array(
					'key' => 'field_609dd178e35f2',
					'label' => 'Rooms',
					'name' => 'rooms',
					'type' => 'relationship',
					'post_type' => array(
						0 => 'room',
					),
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'multiple' => 1,
					'return_format' => 'object',
					'ui' => 1,
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'hotels',
					),
				),
			),
		);

		// Register field group
		acf_add_local_field_group($fields);
	}
}
add_action('acf/init', 'my_plugin_register_fields');
