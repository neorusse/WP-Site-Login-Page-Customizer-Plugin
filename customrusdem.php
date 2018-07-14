<?php
/*
Plugin Name:       CustomRusdem
Description:       Plugin Developed for the Customization of WordPress Login Page and its Admin Area
Plugin URI:        https://profiles.wordpress.org/
Author:            Russell Nyorere
Version:           1.0
Text Domain:       customrusdem
Domain Path:       /languages
License:           GPL v2 or later
License URI:       https://www.gnu.org/licenses/gpl-2.0.txt

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version
2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
with this program. If not, visit: https://www.gnu.org/licenses/
*/



// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}



// load text domain
function customrusdem_load_textdomain() {

	load_plugin_textdomain( 'customrusdem', false, plugin_dir_path( __FILE__ ) . 'languages/' );

}
add_action( 'plugins_loaded', 'customrusdem_load_textdomain' );



// include plugin dependencies: admin only
if ( is_admin() ) {

	require_once plugin_dir_path( __FILE__ ) . 'admin/admin-menu.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-page.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-register.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-callbacks.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-validate.php';

}



// include plugin dependencies: admin and public
require_once plugin_dir_path( __FILE__ ) . 'includes/core-functions.php';



// default plugin options
function customrusdem_options_default() {

	return array(
		'custom_url'     => 'https://wordpress.org/',
		'custom_title'   => esc_html__('Powered by WordPress', 'customrusdem'),
		'custom_style'   => 'disable',
		'custom_message' => '<p class="custom-message">'. esc_html__('My custom message', 'customrusdem') .'</p>',
		'custom_footer'  => esc_html__('Special message for users', 'customrusdem'),
		'custom_toolbar' => false,
		'custom_scheme'  => 'default',
	);

}
