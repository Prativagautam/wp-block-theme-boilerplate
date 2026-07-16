<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.acmeit.org/
 * @since             1.0.0
 * @package           Portfolio_Manager
 *
 * @wordpress-plugin
 * Plugin Name:       Portfolio Manager - WordPress Setting via React and Rest API
 * Plugin URI:        https://github.com/prativagautam/portfolio-manager
 * Description:       Manages portfolio projects and profile data (GitHub, LinkedIn, resume) via a Custom Post Type and REST API.
 * Version:           1.0.0
 * Version:           1.0.0
 * Author:            codersantosh
 * Author URI:        https://www.acmeit.org/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       portfolio-manager
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Current plugin path.
 * Current plugin url.
 * Current plugin version.
 * Current plugin name.
 * Current plugin option name.
 */
define( 'PORTFOLIO_MANAGER_PATH', plugin_dir_path( __FILE__ ) );
define( 'PORTFOLIO_MANAGER_URL', plugin_dir_url( __FILE__ ) );
define( 'PORTFOLIO_MANAGER_VERSION', '1.0.0' );
define( 'PORTFOLIO_MANAGER_PLUGIN_NAME', 'portfolio-manager' );
define( 'PORTFOLIO_MANAGER_OPTION_NAME', 'portfolio-manager' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-activator.php
 */
function portfolio_manager_activate() {
	require_once PORTFOLIO_MANAGER_PATH . 'includes/class-activator.php';
	Portfolio_Manager_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-deactivator
 */
function portfolio_manager_deactivate() {
	require_once PORTFOLIO_MANAGER_PATH . 'includes/class-deactivator.php';
	Portfolio_Manager_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'portfolio_manager_activate' );
register_deactivation_hook( __FILE__, 'portfolio_manager_deactivate' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require PORTFOLIO_MANAGER_PATH . 'includes/main.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function portfolio_manager_run() {

	$plugin = new Portfolio_Manager();
	$plugin->run();
}
portfolio_manager_run();
