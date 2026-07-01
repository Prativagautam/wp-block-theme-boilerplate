<?php
/**
 * Title: Portfolio Header
 * Slug: theme-lab/portfolio-header
 * Categories: header
 * Block Types: core/template-part/header
 * Description: A clean minimal header for portfolio theme.
 *
 * @package    Theme_Lab
 * @subpackage Theme_Lab/patterns
 * @since      1.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">

    <!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"}} -->
    <div class="wp-block-group alignwide">

        <!-- wp:pattern {"slug":"theme-lab/site-identity"} /-->
        <!-- wp:pattern {"slug":"theme-lab/portfolio-navigation"} /-->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->