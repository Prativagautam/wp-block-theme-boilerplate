<?php // phpcs:ignore Class file names should be based on the class name with "class-" prepended.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * File for Block Editor.
 *
 * @link       https://www.acmeit.org/
 * @since      1.0.0
 *
 * @package    Theme_Lab
 * @subpackage Theme_Lab/Theme_Lab_Editor
 */

/**
 * Class used to add CSS/JavaScript on block editor.
 *
 * @package    Theme_Lab
 * @subpackage Theme_Lab/Theme_Lab_Editor
 * @author     codersantosh <codersantosh@gmail.com>
 */
class Theme_Lab_Editor {

	/**
	 * Empty Constructor
	 */
	private function __construct() {}

	/**
	 * Gets an instance of this object.
	 * Prevents duplicate instances which avoid artefacts and improves performance.
	 *
	 * @static
	 * @access public
	 * @since 1.0.0
	 * @return object
	 */
	public static function get_instance() {
		// Store the instance locally to avoid private static replication.
		static $instance = null;

		// Only run these methods if they haven't been ran previously.
		if ( null === $instance ) {
			$instance = new self();
		}

		// Always return the instance.
		return $instance;
	}

	/**
	 * Initialize the class.
	 *
	 * @access public
	 * @return void
	 */
	public function run() {
		add_action( 'after_setup_theme', array( $this, 'add_editor_style' ) );
		add_action( 'enqueue_block_editor_assets', array( $this, 'enqueue_resources' ) );
	}

	/**
	 * Register the CSS for the block editor.
	 * using add_editor_style because using enqueue_block_editor_assets doesnot work for iframe editors.
	 *
	 * @access public
	 *
	 * @since    1.0.0
	 */
	public function add_editor_style() {
		add_editor_style( array( 'atomic', THEME_LAB_URL . 'build/admin/editor/editor.css' ) );
	}

	/**
	 * Register the CSS/JavaScript Resources for the block editor.
	 *
	 * @access public
	 *
	 * @since    1.0.0
	 */
	public function enqueue_resources() {

		$unique_id = THEME_LAB_THEME_NAME . '-editor';

		/*Scripts dependency files*/
		$deps_file = THEME_LAB_PATH . 'build/admin/editor/editor.asset.php';

		/*Fallback dependency array*/
		$dependency = array();
		$version    = THEME_LAB_VERSION;

		/*Set dependency and version*/
		if ( file_exists( $deps_file ) ) {
			$deps_file  = require $deps_file;
			$dependency = $deps_file['dependencies'];
			$version    = $deps_file['version'];
		}

		wp_enqueue_script( $unique_id, THEME_LAB_URL . 'build/admin/editor/editor.js', $dependency, $version, true );

		/* Localize */
		$localize = apply_filters(
			'theme_lab_editor_localize',
			array(
				'version'  => $version,
				'nonce'    => wp_create_nonce( 'wp_rest' ),
				'rest_url' => get_rest_url(),
			)
		);

		wp_set_script_translations( $unique_id, THEME_LAB_THEME_NAME );
		wp_localize_script( $unique_id, 'ThemeLabLocalize', $localize );
	}
}

/**
 * Return instance of  Theme_Lab_Editor class
 *
 * @since 1.0.0
 *
 * @return Theme_Lab_Editor
 */
function theme_lab_editor() { //phpcs:ignore
	return Theme_Lab_Editor::get_instance();
}
theme_lab_editor()->run();
