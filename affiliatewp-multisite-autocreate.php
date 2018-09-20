<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://mydigitalsauce.com
 * @since             1.0.0
 * @package           Affiliatewp_Multisite_Autocreate
 *
 * @wordpress-plugin
 * Plugin Name:       AffiliateWP - Multisite AutoCreate
 * Plugin URI:        https://mydigitalsauce.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            MyDigitalSauce
 * Author URI:        https://mydigitalsauce.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       affiliatewp-multisite-autocreate
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
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-affiliatewp-multisite-autocreate-activator.php
 */
function activate_affiliatewp_multisite_autocreate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-affiliatewp-multisite-autocreate-activator.php';
	Affiliatewp_Multisite_Autocreate_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-affiliatewp-multisite-autocreate-deactivator.php
 */
function deactivate_affiliatewp_multisite_autocreate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-affiliatewp-multisite-autocreate-deactivator.php';
	Affiliatewp_Multisite_Autocreate_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_affiliatewp_multisite_autocreate' );
register_deactivation_hook( __FILE__, 'deactivate_affiliatewp_multisite_autocreate' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-affiliatewp-multisite-autocreate.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_affiliatewp_multisite_autocreate() {

	$plugin = new Affiliatewp_Multisite_Autocreate();
	$plugin->run();

}
run_affiliatewp_multisite_autocreate();
