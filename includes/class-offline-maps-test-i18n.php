<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.elk-lab.com
 * @since      1.0.0
 *
 * @package    Offline_Maps_Test
 * @subpackage Offline_Maps_Test/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Offline_Maps_Test
 * @subpackage Offline_Maps_Test/includes
 * @author     Gabriele Coquillard <gabriele.coquillard@gmail.com>
 */
class Offline_Maps_Test_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'offline-maps-test',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
