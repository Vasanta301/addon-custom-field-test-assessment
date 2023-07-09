<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://wordpress.org/author/vasantasubedi301
 * @since      1.0.0
 *
 * @package    Addon_Custom_Field_Test_Assessment
 * @subpackage Addon_Custom_Field_Test_Assessment/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Addon_Custom_Field_Test_Assessment
 * @subpackage Addon_Custom_Field_Test_Assessment/includes
 * @author     Vasanta Subedi <vasantasubedi301@gmail.com>
 */
class Addon_Custom_Field_Test_Assessment_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'addon-custom-field-test-assessment',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
