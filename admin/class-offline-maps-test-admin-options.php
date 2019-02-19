<?php

/**
 * The options class of the plugin.
 *
 * @link       https://www.elk-lab.com
 * @since      1.0.0
 *
 * @package    Offline_Maps_Test
 * @subpackage Offline_Maps_Test/admin
 */

/**
 * The options of the plugin.
 *
 *
 * @package    Offline_Maps_Test
 * @subpackage Offline_Maps_Test/admin
 * @author     Gabriele Coquillard <gabriele.coquillard@gmail.com>
 */
class Offline_Maps_Test_Admin_Options {

	/**
	 * Helper class
	 *
	 * @since    1.0.0
	 * @access   public
	 * @var      array    $options
	 */
	public $options;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {
		$this->options = get_option( 'offline-maps-test_options' );
	}

	/**
	 * Undocumented function
	 *
	 * @return void
	 */
	public function add_options_page() {
		add_options_page( __('Offline Maps Test', 'offline-maps-test'), __('Offline Maps Test', 'offline-maps-test'), 'manage_options', 'offline-maps-test', array( $this, 'include_options_page' ) );
	}

	/**
	 * Undocumented function
	 *
	 * @return void
	 */
	public function include_options_page() {
		include_once 'partials/offline-maps-test-admin-display.php';
	}

	/**
	 * Undocumented function
	 *
	 * @return void
	 */
	public function init_options() {
		register_setting( 'offline-maps-test_options', 'offline-maps-test_options', array( $this, 'validate_options' ) );
		
		add_settings_section( 'offline-maps-test_main', __('Main Settings', 'offline-maps-test'), array( $this, 'main_section_text' ), 'offline-maps-test' );
		
		add_settings_field( 'stub', __('STUB', 'offline-maps-test'), array( $this, 'render_setting_stub'), 'offline-maps-test', 'offline-maps-test_main' );

	}

	/**
	 * Undocumented function
	 *
	 * @return void
	 */
	function main_section_text() {
		echo '<p>' . __('Theese are the general settings', 'offline-maps-test') . '</p>';
	}

	/**
	 * Undocumented function
	 *
	 * @return void
	 */
	public function render_setting_stub() {
		echo "<input type='text' id='offline-maps-test_stub' name='offline-maps-test_options[stub]' value='{$this->options['stub']}' />";
	}


	/**
	 * Undocumented function
	 *
	 * @param mixed $input
	 * @return mixed
	 */
	public function validate_options( $input ) {
		
		return $input;
	}
}