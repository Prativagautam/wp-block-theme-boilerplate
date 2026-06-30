<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Template for getting started notice.
 *
 * @link       https://www.acmeit.org/
 * @since      1.0.0
 *
 * @package    Theme_Lab
 * @subpackage Theme_Lab/Theme_Lab_Intro
 */
?>
<div id="prativa-theme-lab-gsn" class="updated notice-info prativa-theme-lab-gsn at-pos">
	<button class="prativa-theme-lab-gsn-close notice-dismiss at-flx at-al-itm-ctr">
		<?php esc_html_e( 'Dismiss', 'theme-lab' ); ?>
	</button>
	<div class="prativa-theme-lab-gsn-container at-flx at-gap at-p">
		<img class="prativa-theme-lab-gsn-screenshot at-w" src="<?php echo esc_url( THEME_LAB_URL . 'screenshot.png' ); ?>" alt="<?php esc_attr_e( 'Theme Lab', 'theme-lab' ); ?>" />
		<div class="prativa-theme-lab-gsn-notice">
			<h2>
				<?php
				printf(
					/* translators: 1: welcome page link starting html tag, 2: welcome page link ending html tag. */
					esc_html__( 'Welcome! Thank you for choosing %1$s! To fully take advantage of the best our theme can offer, please make sure you visit our %2$swelcome page%3$s.', 'theme-lab' ),
					'<strong>' . esc_html( wp_get_theme()->get( 'Name' ) ) . '</strong>',
					'<a href="' . esc_url( menu_page_url( THEME_LAB_THEME_NAME, false ) ) . '">',
					'</a>'
				);
				?>
			</h2>
			<?php
			$plugin_names = theme_lab_get_plugin_names();
			if ( $plugin_names ) {
				?>
				<p>
					<?php
					$plugin_count = count( explode( ', ', $plugin_names ) );
					printf(
						/* translators: %s: singular/plural . */
						esc_html__( 'Clicking the button below will install and activate the following %s:', 'theme-lab' ),
						$plugin_count > 1 ? esc_html__( 'plugins', 'theme-lab' ) : esc_html__( 'plugin', 'theme-lab' )
					);
					echo ' ';
					echo esc_html( $plugin_names );
					?>
				</p>
				<?php
			}
			?>
			<button class="prativa-theme-lab-btn-primary button button-primary button-hero prativa-theme-lab-install-plugins">
				<?php esc_html_e( 'Get started with Theme Lab', 'theme-lab' ); ?>
			</button>
		</div>
	</div>
</div>
