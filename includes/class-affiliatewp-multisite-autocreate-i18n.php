<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://mydigitalsauce.com
 * @since      1.0.0
 *
 * @package    Affiliatewp_Multisite_Autocreate
 * @subpackage Affiliatewp_Multisite_Autocreate/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Affiliatewp_Multisite_Autocreate
 * @subpackage Affiliatewp_Multisite_Autocreate/includes
 * @author     MyDigitalSauce <justin@mydigitalsauce.com>
 */
class Affiliatewp_Multisite_Autocreate_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'affiliatewp-multisite-autocreate',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
