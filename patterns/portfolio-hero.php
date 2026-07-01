<?php
/**
 * Title: Portfolio Hero
 * Slug: theme-lab/portfolio-hero
 * Categories: featured
 * Description: Hero section for portfolio homepage.
 *
 * @package    Theme_Lab
 * @subpackage Theme_Lab/patterns
 * @since      1.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background">

    <!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
    <div class="wp-block-group alignwide">

        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group">

            <!-- wp:paragraph {"textColor":"primary","style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"2px"}}} -->
            <p class="has-primary-color has-text-color"><?php esc_html_e( 'Frontend Developer', 'theme-lab' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":1,"textColor":"default"} -->
            <h1 class="wp-block-heading has-default-color has-text-color"><?php esc_html_e( 'Hello, my name is Prativa Gautam', 'theme-lab' ); ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"tertiary"} -->
            <p class="has-tertiary-color has-text-color"><?php esc_html_e( 'Frontend developer passionate about building beautiful, accessible web experiences. Currently exploring WordPress block themes and full-stack development.', 'theme-lab' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons">
                <!-- wp:button {"backgroundColor":"primary","textColor":"base"} -->
                <div class="wp-block-button"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button"><?php esc_html_e( 'View Projects', 'theme-lab' ); ?></a></div>
                <!-- /wp:button -->

                <!-- wp:button {"className":"is-style-outline","borderColor":"primary","textColor":"primary"} -->
                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-primary-color has-text-color has-border-color has-primary-border-color wp-element-button"><?php esc_html_e( 'LinkedIn', 'theme-lab' ); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->