<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.elk-lab.com
 * @since             1.0.0
 * @package           Offline_Maps_Test
 *
 * @wordpress-plugin
 * Plugin Name:       OfflineMapsTest
 * Plugin URI:        https://github.com/kokiddp/OfflineMapsTest
 * Description:       TODO
 * Version:           1.0.0
 * Author:            Gabriele Coquillard
 * Author URI:        https://www.elk-lab.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       offline-maps-test
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'OFFLINE_MAPS_TEST_VERSION', '1.0.0' );

/**
 * Current environment state.
 *
 */
define( 'OFFLINE_MAPS_TEST_ENVIRONMENT', 'development' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-offline-maps-test-activator.php
 */
function activate_offline_maps_test() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-offline-maps-test-activator.php';
	Offline_Maps_Test_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-offline-maps-test-deactivator.php
 */
function deactivate_offline_maps_test() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-offline-maps-test-deactivator.php';
	Offline_Maps_Test_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_offline_maps_test' );
register_deactivation_hook( __FILE__, 'deactivate_offline_maps_test' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-offline-maps-test.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_offline_maps_test() {

	$plugin = new Offline_Maps_Test();
	$plugin->run();

}
run_offline_maps_test();
