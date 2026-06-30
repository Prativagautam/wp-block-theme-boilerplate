<?php
/**
 * Title: No Search Result
 * Slug: theme-lab/hidden-no-search-results
 * Inserter: no
 *
 * @package    Theme_Lab
 * @subpackage Theme_Lab/patterns
 * @since      1.0.0
 */

?>
<!-- wp:paragraph -->
<p>
<?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'theme-lab' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'label', 'theme-lab' ); ?>","placeholder":"<?php echo esc_attr_x( 'Search...', 'placeholder for search field', 'theme-lab' ); ?>","showLabel":false,"buttonText":"<?php esc_attr_e( 'Search', 'theme-lab' ); ?>","buttonUseIcon":true} /-->
