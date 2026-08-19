<?php
/**
 * Bright Dreamers top-level WordPress admin menu.
 *
 * @package Bright_Dreamers_Club
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register the Bright Dreamers admin menu shell.
 */
function bdc_register_bright_dreamers_admin_menu() {
	add_menu_page(
		__( 'Bright Dreamers Settings', 'bright-dreamers-club' ),
		__( 'Bright Dreamers', 'bright-dreamers-club' ),
		'manage_options',
		'bdc-theme-settings',
		'bdc_render_form_settings_page',
		'dashicons-heart',
		59
	);

	add_submenu_page(
		'bdc-theme-settings',
		__( 'Form Notifications', 'bright-dreamers-club' ),
		__( 'Form Notifications', 'bright-dreamers-club' ),
		'manage_options',
		'bdc-theme-settings',
		'bdc_render_form_settings_page'
	);
}
add_action( 'admin_menu', 'bdc_register_bright_dreamers_admin_menu', 9 );
