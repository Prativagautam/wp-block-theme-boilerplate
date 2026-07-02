<?php
/**
 * Title: Portfolio Footer
 * Slug: theme-lab/portfolio-footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Clean minimal footer for portfolio theme.
 *
 * @package    Theme_Lab
 * @subpackage Theme_Lab/patterns
 * @since      1.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">

    <!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
    <div class="wp-block-group alignwide">

        <!-- wp:paragraph {"textColor":"tertiary"} -->
        <p class="has-tertiary-color has-text-color"><?php esc_html_e( '© 2026 Prativa Gautam. All rights reserved.', 'theme-lab' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"textColor":"tertiary"} -->
        <p class="has-tertiary-color has-text-color"><?php esc_html_e( 'Built with WordPress Block Themes', 'theme-lab' ); ?></p>
        <!-- /wp:paragraph -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->