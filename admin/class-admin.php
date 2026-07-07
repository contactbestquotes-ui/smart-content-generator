<?php
/**
 * Admin Class
 *
 * @package Smart_Content_Generator
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class SCG_Admin {

	/**
	 * Constructor
	 */
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'register_admin_menu' ) );
	}

	/**
	 * Register Admin Menu
	 *
	 * @return void
	 */
	public function register_admin_menu() {

		add_menu_page(
			'Content Generator',
			'Content Generator',
			'manage_options',
			'scg-generator',
			array( $this, 'generate_page' ),
			'dashicons-edit-page',
			25
		);

		add_submenu_page(
			'scg-generator',
			'Generate Post',
			'Generate Post',
			'manage_options',
			'scg-generator',
			array( $this, 'generate_page' )
		);

		add_submenu_page(
			'scg-generator',
			'Templates',
			'Templates',
			'manage_options',
			'scg-templates',
			array( $this, 'templates_page' )
		);

		add_submenu_page(
			'scg-generator',
			'Settings',
			'Settings',
			'manage_options',
			'scg-settings',
			array( $this, 'settings_page' )
		);
	}

	/**
	 * Generate Page
	 */
	public function generate_page() {

		require_once SCG_PATH . 'admin/views/generate-page.php';

	}

	/**
	 * Templates Page
	 */
	public function templates_page() {

		require_once SCG_PATH . 'admin/views/templates-page.php';

	}

	/**
	 * Settings Page
	 */
	public function settings_page() {

		require_once SCG_PATH . 'admin/views/settings-page.php';

	}

}
