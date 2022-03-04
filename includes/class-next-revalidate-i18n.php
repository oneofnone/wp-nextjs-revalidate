<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://twitter.com/mikedarche
 * @since      1.0.0
 *
 * @package    Next_Revalidate
 * @subpackage Next_Revalidate/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Next_Revalidate
 * @subpackage Next_Revalidate/includes
 * @author     Mike Darche <mike@oneofnone.io>
 */
class Next_Revalidate_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'next-revalidate',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
