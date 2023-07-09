<?php

/**
 * Fired during plugin activation
 *
 * @link       https://wordpress.org/author/vasantasubedi301
 * @since      1.0.0
 *
 * @package    Addon_Custom_Field_Test_Assessment
 * @subpackage Addon_Custom_Field_Test_Assessment/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Addon_Custom_Field_Test_Assessment
 * @subpackage Addon_Custom_Field_Test_Assessment/includes
 * @author     Vasanta Subedi <vasantasubedi301@gmail.com>
 */
class Addon_Custom_Field_Test_Assessment_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		$plugin = plugin_basename( __FILE__ );
		if ( ! is_plugin_active( 'test-assessment/test-assessment.php' ) and current_user_can( 'activate_plugins' ) ) {
			deactivate_plugins( $plugin );
			wp_die('Sorry, but this plugin requires the Parent Plugin "Test Assessment" to be installed and active. <br><a href="' . admin_url( 'plugins.php' ) . '">&laquo; Return to Plugins</a>');
		}
	}

}
