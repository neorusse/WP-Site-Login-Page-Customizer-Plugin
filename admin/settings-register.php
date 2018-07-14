<?php // customrusdem - Register Settings



// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}



// register plugin settings
function customrusdem_register_settings() {

	/*

	register_setting(
		string   $option_group,
		string   $option_name,
		callable $sanitize_callback = ''
	);

	*/

	register_setting(
		'customrusdem_options',
		'customrusdem_options',
		'customrusdem_callback_validate_options'
	);

	/*

	add_settings_section(
		string   $id,
		string   $title,
		callable $callback,
		string   $page
	);

	*/

	add_settings_section(
		'customrusdem_section_login',
		esc_html__('Customize Login Page', 'customrusdem'),
		'customrusdem_callback_section_login',
		'customrusdem'
	);

	add_settings_section(
		'customrusdem_section_admin',
		esc_html__('Customize Admin Area', 'customrusdem'),
		'customrusdem_callback_section_admin',
		'customrusdem'
	);

	/*

	add_settings_field(
    	string   $id,
		string   $title,
		callable $callback,
		string   $page,
		string   $section = 'default',
		array    $args = []
	);

	*/

	add_settings_field(
		'custom_url',
		esc_html__('Custom URL', 'customrusdem'),
		'customrusdem_callback_field_text',
		'customrusdem',
		'customrusdem_section_login',
		[ 'id' => 'custom_url', 'label' => esc_html__('Custom URL for the login logo link', 'customrusdem') ]
	);

	add_settings_field(
		'custom_title',
		esc_html__('Custom Title', 'customrusdem'),
		'customrusdem_callback_field_text',
		'customrusdem',
		'customrusdem_section_login',
		[ 'id' => 'custom_title', 'label' => esc_html__('Custom title attribute for the logo link', 'customrusdem') ]
	);

	add_settings_field(
		'custom_style',
		esc_html__('Custom Style', 'customrusdem'),
		'customrusdem_callback_field_radio',
		'customrusdem',
		'customrusdem_section_login',
		[ 'id' => 'custom_style', 'label' => esc_html__('Custom CSS for the Login screen', 'customrusdem') ]
	);

	add_settings_field(
		'custom_message',
		esc_html__('Custom Message', 'customrusdem'),
		'customrusdem_callback_field_textarea',
		'customrusdem',
		'customrusdem_section_login',
		[ 'id' => 'custom_message', 'label' => esc_html__('Custom text and/or markup', 'customrusdem') ]
	);

	add_settings_field(
		'custom_footer',
		esc_html__('Custom Footer', 'customrusdem'),
		'customrusdem_callback_field_text',
		'customrusdem',
		'customrusdem_section_admin',
		[ 'id' => 'custom_footer', 'label' => esc_html__('Custom footer text', 'customrusdem') ]
	);

	add_settings_field(
		'custom_toolbar',
		esc_html__('Custom Toolbar', 'customrusdem'),
		'customrusdem_callback_field_checkbox',
		'customrusdem',
		'customrusdem_section_admin',
		[ 'id' => 'custom_toolbar', 'label' => esc_html__('Remove new post and comment links from the Toolbar', 'customrusdem') ]
	);

	add_settings_field(
		'custom_scheme',
		esc_html__('Custom Scheme', 'customrusdem'),
		'customrusdem_callback_field_select',
		'customrusdem',
		'customrusdem_section_admin',
		[ 'id' => 'custom_scheme', 'label' => esc_html__('Default color scheme for new users', 'customrusdem') ]
	);

}
add_action( 'admin_init', 'customrusdem_register_settings' );
