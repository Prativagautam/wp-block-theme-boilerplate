<?php
/**
 * Title: Portfolio About
 * Slug: theme-lab/portfolio-about
 * Categories: text
 * Description: About me section with resume button for portfolio homepage.
 *
 * @package    Theme_Lab
 * @subpackage Theme_Lab/patterns
 * @since      1.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

    <!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
    <div class="wp-block-group alignwide">

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"560px"}} -->
        <div class="wp-block-group">

            <!-- wp:paragraph {"textColor":"primary","style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"2px"}}} -->
            <p class="has-primary-color has-text-color"><?php esc_html_e( 'About Me', 'theme-lab' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":2,"textColor":"default","style":{"typography":{"fontWeight":"700","fontSize":"clamp(2rem, 3vw, 3rem)"}}} -->
            <h2 class="wp-block-heading has-default-color has-text-color" style="font-size:clamp(2rem, 3vw, 3rem);font-weight:700"><?php esc_html_e( 'I build clean, modern portfolios for creative brands.', 'theme-lab' ); ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"tertiary","style":{"typography":{"fontSize":"1rem","lineHeight":"1.8"}}} -->
            <p class="has-tertiary-color has-text-color" style="font-size:1rem;line-height:1.8"><?php esc_html_e( 'I am a frontend developer who loves turning design into fast, accessible websites. I specialise in WordPress block themes, responsive interfaces, and polished portfolio presentations.', 'theme-lab' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons">
                <!-- wp:button {"backgroundColor":"primary","textColor":"base"} -->
                <div class="wp-block-button"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( theme_lab_get_resume_url() ); ?>" target="_blank"><?php esc_html_e( 'Download Resume', 'theme-lab' ); ?></a></div>
                <!-- /wp:button -->

                <!-- wp:button {"className":"is-style-outline","borderColor":"primary","textColor":"primary"} -->
                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-primary-color has-text-color has-border-color has-primary-border-color wp-element-button" href="#contact"><?php esc_html_e( 'Contact Me', 'theme-lab' ); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

        </div>
        <!-- /wp:group -->

        <!-- wp:group {"backgroundColor":"secondary","style":{"border":{"radius":"30px"},"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:30px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
            <!-- wp:image {"align":"center","sizeSlug":"large","linkDestination":"none"} -->
            <figure class="wp-block-image aligncenter size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/about-photo.png' ); ?>" alt="<?php esc_attr_e( 'About me photo', 'theme-lab' ); ?>"/></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->