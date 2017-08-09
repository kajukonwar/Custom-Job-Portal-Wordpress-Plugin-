<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       www.coffeepost.in
 * @since      1.0.0
 *
 * @package    Cps_Job_Portal
 * @subpackage Cps_Job_Portal/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Cps_Job_Portal
 * @subpackage Cps_Job_Portal/includes
 * @author     Kaju Konwar <kaju.k2@gmail.com>
 */
class Cps_Job_Portal_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'cps-job-portal',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
