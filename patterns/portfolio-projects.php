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

     

        <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
        <div class="wp-block-columns alignwide">

            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:group {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-base-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
                    <!-- wp:heading {"level":3,"textColor":"default"} -->
                    <h3 class="wp-block-heading has-default-color has-text-color"><?php esc_html_e( 'TruthLens', 'theme-lab' ); ?></h3>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph {"textColor":"tertiary"} -->
                    <p class="has-tertiary-color has-text-color"><?php esc_html_e( 'Fake news detector built with React and Python LSTM model.', 'theme-lab' ); ?></p>
                    <!-- /wp:paragraph -->
                    <!-- wp:buttons -->
                    <div class="wp-block-buttons">
                        <!-- wp:button {"className":"is-style-outline","borderColor":"primary","textColor":"primary"} -->
                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-primary-color has-text-color has-border-color has-primary-border-color wp-element-button" href="#"><?php esc_html_e( 'View Project', 'theme-lab' ); ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:group {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-base-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
                    <!-- wp:heading {"level":3,"textColor":"default"} -->
                    <h3 class="wp-block-heading has-default-color has-text-color"><?php esc_html_e( 'React Movie App', 'theme-lab' ); ?></h3>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph {"textColor":"tertiary"} -->
                    <p class="has-tertiary-color has-text-color"><?php esc_html_e( 'Movie discovery app built with React, TMDB API, and Firebase authentication.', 'theme-lab' ); ?></p>
                    <!-- /wp:paragraph -->
                    <!-- wp:buttons -->
                    <div class="wp-block-buttons">
                        <!-- wp:button {"className":"is-style-outline","borderColor":"primary","textColor":"primary"} -->
                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-primary-color has-text-color has-border-color has-primary-border-color wp-element-button" href="#"><?php esc_html_e( 'View Project', 'theme-lab' ); ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:group {"style":{"border":{"radius":"12px"},"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-base-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
                    <!-- wp:heading {"level":3,"textColor":"default"} -->
                    <h3 class="wp-block-heading has-default-color has-text-color"><?php esc_html_e( 'Currency Converter', 'theme-lab' ); ?></h3>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph {"textColor":"tertiary"} -->
                    <p class="has-tertiary-color has-text-color"><?php esc_html_e( 'Live currency converter using Frankfurter API with dynamic flag display.', 'theme-lab' ); ?></p>
                    <!-- /wp:paragraph -->
                    <!-- wp:buttons -->
                    <div class="wp-block-buttons">
                        <!-- wp:button {"className":"is-style-outline","borderColor":"primary","textColor":"primary"} -->
                        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-primary-color has-text-color has-border-color has-primary-border-color wp-element-button" href="#"><?php esc_html_e( 'View Project', 'theme-lab' ); ?></a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->

        </div>
        <!-- /wp:columns -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->