<?php
/**
 * Generator Class
 *
 * @package Smart_Content_Generator
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class SCG_Generator {

	/**
	 * Constructor
	 */
	public function __construct() {

		add_action(
			'admin_post_scg_generate_post',
			array( $this, 'generate_post' )
		);

	}

	/**
	 * Generate Post
	 */
	public function generate_post() {

		if ( ! current_user_can( 'manage_options' ) ) {
			wp_die( 'Permission denied.' );
		}

		check_admin_referer( 'scg_generate_post' );

		// Generator Logic Phase 2

		wp_safe_redirect(
			admin_url( 'admin.php?page=scg-generator&generated=1' )
		);

		exit;

	}

}