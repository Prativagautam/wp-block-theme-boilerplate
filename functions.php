<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme Lab functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Theme Lab
 */

/**
 * Current theme path.
 * Current theme url.
 * Current theme version.
 * Current theme name.
 * Current theme option name.
 */
define( 'THEME_LAB_PATH', trailingslashit( get_template_directory() ) );
define( 'THEME_LAB_URL', trailingslashit( get_template_directory_uri() ) );
define( 'THEME_LAB_VERSION', '1.0.0' );
define( 'THEME_LAB_THEME_NAME', 'theme-lab' );
define( 'THEME_LAB_OPTION_NAME', 'theme-lab' );

/**
 * The core theme class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require THEME_LAB_PATH . 'includes/main.php';

/**
 * Begins execution of the theme.
 *
 * @since    1.0.0
 */
function theme_lab_run() {
	new Theme_Lab();
}
theme_lab_run();
