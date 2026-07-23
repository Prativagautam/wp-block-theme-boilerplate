<?php
/**
 * Title: Single Post
 * Slug: theme-lab/hidden-single-post-content
 * Inserter: no
 * Categories: posts
 * Description: A layout that displays single post content with post navigation and comments.
 *
 * @package    Theme_Lab
 * @subpackage Theme_Lab/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull">

		<!-- wp:template-part {"slug":"post-meta","align":"wide"} /-->
		</div>
	<!-- /wp:group -->


	<!-- wp:post-content {"className":"pwp-child-reset","align":"full","layout":{"type":"constrained","contentSize":"1320px"}} /-->
	 <!-- wp:post-content {"className":"pwp-child-reset","align":"full","layout":{"type":"constrained","contentSize":"1320px"}} /-->

<?php if ( 'project' === get_post_type() ) : ?>
	<?php
	$github_url = get_post_meta( get_the_ID(), 'github_url', true );
	$live_url   = get_post_meta( get_the_ID(), 'live_url', true );
	$tech_stack = get_post_meta( get_the_ID(), 'tech_stack', true );
	?>
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<?php if ( $github_url ) : ?>
			<!-- wp:paragraph -->
			<p><strong><?php esc_html_e( 'GitHub:', 'theme-lab' ); ?></strong> <a href="<?php echo esc_url( $github_url ); ?>"><?php echo esc_html( $github_url ); ?></a></p>
			<!-- /wp:paragraph -->
		<?php endif; ?>

		<?php if ( $live_url ) : ?>
			<!-- wp:paragraph -->
			<p><strong><?php esc_html_e( 'Live URL:', 'theme-lab' ); ?></strong> <a href="<?php echo esc_url( $live_url ); ?>"><?php echo esc_html( $live_url ); ?></a></p>
			<!-- /wp:paragraph -->
		<?php endif; ?>

		<?php if ( $tech_stack ) : ?>
			<!-- wp:paragraph -->
			<p><strong><?php esc_html_e( 'Tech Stack:', 'theme-lab' ); ?></strong> <?php echo esc_html( $tech_stack ); ?></p>
			<!-- /wp:paragraph -->
		<?php endif; ?>
	</div>
	<!-- /wp:group -->
<?php endif; ?>

<!-- wp:template-part {"slug":"post-navigation","area":"uncategorized","align":"full"} /-->
	<!-- wp:template-part {"slug":"post-navigation","area":"uncategorized","align":"full"} /-->

	<!-- wp:template-part {"slug":"comments","tagName":"section","align":"full"} /-->

</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|80"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
