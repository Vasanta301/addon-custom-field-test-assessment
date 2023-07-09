<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://wordpress.org/author/vasantasubedi301
 * @since      1.0.0
 *
 * @package    Addon_Custom_Field_Test_Assessment
 * @subpackage Addon_Custom_Field_Test_Assessment/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Addon_Custom_Field_Test_Assessment
 * @subpackage Addon_Custom_Field_Test_Assessment/public
 * @author     Vasanta Subedi <vasantasubedi301@gmail.com>
 */
class Addon_Custom_Field_Test_Assessment_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Addon_Custom_Field_Test_Assessment_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Addon_Custom_Field_Test_Assessment_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/addon-custom-field-test-assessment-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Addon_Custom_Field_Test_Assessment_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Addon_Custom_Field_Test_Assessment_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/addon-custom-field-test-assessment-public.js', array( 'jquery' ), $this->version, false );

	}

	function ta_biodata_add_custom_field($bio_data) { ?>
		<div class="form-group">
			<label for="user_bio">Custom Field through Addon : </label>
			<input type="text" name="bio_data[basic][custom_field]" id="bio_data[basic][custom_field]" value="<?php echo isset($bio_data['basic']['custom_field']) && !empty($bio_data['basic']['custom_field'])?$bio_data['basic']['custom_field']:''; ?>">
		</div>
		<?php
	}
}
