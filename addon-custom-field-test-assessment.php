<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://wordpress.org/author/vasantasubedi301
 * @since             1.0.0
 * @package           Addon_Custom_Field_Test_Assessment
 *
 * @wordpress-plugin
 * Plugin Name:       Addon Custom Field Test Assessment
 * Plugin URI:        https://wordpress.org/plugins/addon-custom-field-test-assessment
 * Description:       Addon for adding custom field. Static field for now. When activated, look for custom field in bio field in dashboard in front.
 * Version:           1.0.0
 * Author:            Vasanta Subedi
 * Author URI:        https://wordpress.org/author/vasantasubedi301
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       addon-custom-field-test-assessment
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
define( 'ADDON_CUSTOM_FIELD_TEST_ASSESSMENT_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-addon-custom-field-test-assessment-activator.php
 */
function activate_addon_custom_field_test_assessment() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-addon-custom-field-test-assessment-activator.php';
	Addon_Custom_Field_Test_Assessment_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-addon-custom-field-test-assessment-deactivator.php
 */
function deactivate_addon_custom_field_test_assessment() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-addon-custom-field-test-assessment-deactivator.php';
	Addon_Custom_Field_Test_Assessment_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_addon_custom_field_test_assessment' );
register_deactivation_hook( __FILE__, 'deactivate_addon_custom_field_test_assessment' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-addon-custom-field-test-assessment.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_addon_custom_field_test_assessment() {

	$plugin = new Addon_Custom_Field_Test_Assessment();
	$plugin->run();

}
run_addon_custom_field_test_assessment();
