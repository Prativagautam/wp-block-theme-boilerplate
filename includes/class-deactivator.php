<?php // phpcs:ignore Class file names should be based on the class name with "class-" prepended.
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Fired during plugin deactivation
 *
 * @link       https://www.acmeit.org/
 * @since      1.0.0
 *
 * @package    Portfolio_Manager
 * @subpackage Portfolio_Manager/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Portfolio_Manager
 * @subpackage Portfolio_Manager/includes
 * @author     codersantosh <codersantosh@gmail.com>
 */
class Portfolio_Manager_Deactivator {

	/**
	 * Fired during plugin deactivation.
	 *
	 * Removing options and all data related to plugin if user select remove data on deactivate.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		if ( portfolio_manager_get_options( 'deleteAll' ) ) {
			delete_option( PORTFOLIO_MANAGER_OPTION_NAME );
		}
	}
}
