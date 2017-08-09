<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              www.coffeepost.in
 * @since             1.0.0
 * @package           Cps_Job_Portal
 *
 * @wordpress-plugin
 * Plugin Name:       Job Portal By CoffeePost
 * Plugin URI:        www.coffeepost.in
 * Description:       Custom functionalities exclusively for  StarTall Job Portal website
 * Version:           1.0.0
 * Author:            Kaju Konwar
 * Author URI:        www.coffeepost.in
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       cps-job-portal
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-cps-job-portal-activator.php
 */
function activate_cps_job_portal() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cps-job-portal-activator.php';
	Cps_Job_Portal_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-cps-job-portal-deactivator.php
 */
function deactivate_cps_job_portal() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cps-job-portal-deactivator.php';
	Cps_Job_Portal_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_cps_job_portal' );
register_deactivation_hook( __FILE__, 'deactivate_cps_job_portal' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-cps-job-portal.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_cps_job_portal() {

	$plugin = new Cps_Job_Portal();
	$plugin->run();

}
run_cps_job_portal();
