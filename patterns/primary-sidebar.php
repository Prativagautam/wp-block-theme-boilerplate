<?php
/**
 * Title: Primary Sidebar
 * Slug: theme-lab/primary-sidebar
 * Categories: posts
 * Block Types: core/template-part/primary-sidebar
 * Description: Display a collection of blocks for primary sidebar template part.
 *
 * @package    Theme_Lab
 * @subpackage Theme_Lab/patterns
 * @since      1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    <!-- wp:pattern {"slug":"theme-lab/search-form"} /-->
    <!-- wp:pattern {"slug":"theme-lab/latest-posts"} /-->
    <!-- wp:pattern {"slug":"theme-lab/latest-comments"} /-->
</div>
<!-- /wp:group -->
