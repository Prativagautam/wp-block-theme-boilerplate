<?php
/**
 * Title: Portfolio Projects
 * Slug: theme-lab/portfolio-projects
 * Categories: featured
 * Description: Projects grid section for portfolio homepage.
 *
 * @package    Theme_Lab
 * @subpackage Theme_Lab/patterns
 * @since      1.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"align":"center","textColor":"primary","style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"2px"}}} -->
		<p class="has-text-align-center has-primary-color has-text-color"><?php esc_html_e( 'Featured Projects', 'theme-lab' ); ?></p>
		<!-- /wp:paragraph -->

		<?php
		$projects = get_posts(
			array(
				'post_type'      => 'project',
				'posts_per_page' => 3,
				'post_status'    => 'publish',
			)
		);
		?>

		<?php if ( $projects ) : ?>
		<div class="wp-block-columns alignwide">
			<?php foreach ( $projects as $project ) : ?>
			<div class="wp-block-column">
				<div class="wp-block-group has-base-background-color has-background" style="border-radius:12px;padding:var(--wp--preset--spacing--40);">
					<h3 class="wp-block-heading has-default-color has-text-color">
						<a href="<?php echo esc_url( get_permalink( $project->ID ) ); ?>">
							<?php echo esc_html( get_the_title( $project->ID ) ); ?>
						</a>
					</h3>
					<p class="has-tertiary-color has-text-color">
						<?php echo esc_html( get_the_excerpt( $project->ID ) ); ?>
					</p>
					<div class="wp-block-buttons">
						<div class="wp-block-button is-style-outline">
							<a class="wp-block-button__link has-primary-color has-text-color has-border-color has-primary-border-color wp-element-button" href="<?php echo esc_url( get_permalink( $project->ID ) ); ?>">
								<?php esc_html_e( 'View Project', 'theme-lab' ); ?>
							</a>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		<?php endif; ?>

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->