<?php
/**
 * Plugin Name: Smart Content Generator
 * Plugin URI: https://github.com/
 * Description: Generate Quotes, Wishes, Shayari and Instagram Bio posts automatically.
 * Version: 1.0.0
 * Requires at least: 6.5
 * Requires PHP: 8.0
 * Author: Prince Soni
 * Author URI: https://myinstabios.com
 * License: GPL v2 or later
 * Text Domain: smart-content-generator
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Plugin Version
 */
define( 'SCG_VERSION', '1.0.0' );

/**
 * Plugin Path
 */
define( 'SCG_PATH', plugin_dir_path( __FILE__ ) );

/**
 * Plugin URL
 */
define( 'SCG_URL', plugin_dir_url( __FILE__ ) );

/**
 * Load Admin
 */
if ( is_admin() ) {
	require_once SCG_PATH . 'admin/class-admin.php';
	new SCG_Admin();
}
