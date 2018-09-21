<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://mydigitalsauce.com
 * @since      1.0.0
 *
 * @package    Affiliatewp_Multisite_Autocreate
 * @subpackage Affiliatewp_Multisite_Autocreate/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Affiliatewp_Multisite_Autocreate
 * @subpackage Affiliatewp_Multisite_Autocreate/admin
 * @author     MyDigitalSauce <justin@mydigitalsauce.com>
 */
class Affiliatewp_Multisite_Autocreate_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->admin_settings_page();

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/affiliatewp-multisite-autocreate-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/affiliatewp-multisite-autocreate-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function page() {

		require plugin_dir_path( __FILE__ ) . 'partials/admin-settings-page.php';		

	}

}
