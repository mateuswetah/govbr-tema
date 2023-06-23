<?php
/**
 * Displays the site bottom header
 *
 * @since 0.1.0
 */

$site_name    = get_bloginfo( 'name' );
$site_description  = get_bloginfo( 'description', 'display' );
$show_title   = ( true === get_theme_mod( 'display_title_and_tagline', true ) );
$header_class = $show_title ? 'site-title' : 'screen-reader-text';

?>

<div class="header-bottom">

    <div class="header-menu">

        <?php get_template_part( 'template-parts/header/site-header-navigation' ); ?>

        <div class="header-info">

            <?php if ( $site_name ) : ?>
            <div class="header-title">
                <?php if ( is_front_page() && ! is_paged() ) : ?>
                <h1 class="<?php echo esc_attr( $header_class ); ?>"><?php echo esc_html( $site_name ); ?></h1>
                <?php elseif ( is_front_page() && ! is_home() ) : ?>
                <h1 class="<?php echo esc_attr( $header_class ); ?>"><a
                        href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( $site_name ); ?></a></h1>
                <?php else : ?>
                <p class="<?php echo esc_attr( $header_class ); ?>"><a
                        href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( $site_name ); ?></a></p>
                <?php endif; ?>
            </div>
            <?php endif; ?>

            <?php if ( $site_description && true === get_theme_mod( 'display_title_and_tagline', true ) ) : ?>
            <div class="header-subtitle">
                <?php echo $site_description; // phpcs:ignore WordPress.Security.EscapeOutput ?>
            </div>
            <?php endif; ?>

        </div>
    </div><!-- .header-menu -->

    <?php echo get_search_form(); ?>

</div><!-- .header-bottom -->