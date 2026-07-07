<?php
/**
 * Settings Class
 *
 * @package Smart_Content_Generator
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class SCG_Settings {

	/**
	 * Constructor
	 */
	public function __construct() {

		add_action( 'admin_init', array( $this, 'register_settings' ) );

	}

	/**
	 * Register Plugin Settings
	 */
	public function register_settings() {

		register_setting(
			'scg_settings_group',
			'scg_templates',
			array(
				'type'              => 'array',
				'sanitize_callback' => array( $this, 'sanitize_templates' ),
				'default'           => array(),
			)
		);

	}

	/**
	 * Sanitize Settings
	 *
	 * @param array $input Settings.
	 * @return array
	 */
	public function sanitize_templates( $input ) {

		if ( ! is_array( $input ) ) {
			return array();
		}

		foreach ( $input as $key => $value ) {
			$input[ $key ] = wp_kses_post( $value );
		}

		return $input;

	}

}