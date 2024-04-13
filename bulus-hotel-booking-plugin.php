<?php
/**
 * Plugin Name:     Bulus Hotel Booking Plugin
 * Plugin URI:      https://plugins.wp-cli.org/demo-plugin
 * Description:     Hotel Booking Plugin
 * Author:          Mohammad Jafariyan Khosrowshahi
 * Author URI:      https://bulus.ir
 * Text Domain:     bulus-hotel-booking-plugin
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Bulus_Hotel_Booking_Plugin
 */

// Your code starts here.


$url = plugin_dir_url(__FILE__);
define('MY_UNIQUE_PLUGIN_URL',$url);


include_once ( 'includes/register-post-types.php');
include_once ( 'includes/register-relationships.php');
include_once ( 'includes/register-taxonomies.php');
include_once ( 'includes/register-user-types.php');
