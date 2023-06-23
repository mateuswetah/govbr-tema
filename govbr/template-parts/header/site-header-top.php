<?php
/**
 * Displays header site top header
 *
 * @since 0.1.0
 */

 require_once get_template_directory() . '/classes/class-gov-br-walker-institutional-menu.php';

 $is_feature_contrast_mode_enabled = get_theme_mod('enable_feature_contrast_mode', true);
 $is_feature_vlibras_enabled = get_theme_mod('enable_feature_vlibras', true);
 $is_wordpress_login_enabled = get_theme_mod('enable_wordpress_login', true);

 $has_some_feature_enabled = $is_feature_vlibras_enabled || $is_feature_contrast_mode_enabled;
?>

<div class="header-top">
    <div class="header-logo">
        <?php if ( has_custom_logo() ): ?>
        	<?php the_custom_logo(); ?>
        <?php else: ?>
        	<img src="data:image/png;base64,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" alt="logo" />
        <?php endif; ?>

        <?php if ( !empty( get_theme_mod('govbr-signature-field__text') ) ): ?>
            <span class="br-divider vertical"></span>
            <div class="header-sign">
                <?php if ( !empty( get_theme_mod('govbr-signature-field__url') ) ): ?>
                    <a href="<?php echo esc_url( get_theme_mod('govbr-signature-field__url') ); ?>">
                        <?php echo get_theme_mod('govbr-signature-field__text'); ?>
                    </a>
                <?php else: ?>
                    <?php echo get_theme_mod('govbr-signature-field__text'); ?>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="header-actions">
        <?php if ( has_nav_menu( 'institutional' ) ) : ?>
            <div class="header-links dropdown">
                <button class="br-button circle small" type="button" data-toggle="dropdown"
                    aria-label="Abrir Acesso Rápido"><i class="fas fa-ellipsis-v" aria-hidden="true"></i>
                </button>
                <div class="br-list">
                    <div class="header">
                        <div class="title"><?php _e( 'Acesso Rápido', 'govbr' ); ?></div>
                    </div>
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location'  => 'institutional',
                                'container'       => '',
                                'depth' => 1,
                                'menu_class'      => '',
                                'items_wrap'      => '%3$s',
                                'fallback_cb'     => false,
                                'walker'          => new Gov_BR_Walker_Institutional_Menu(),
                            )
                        );
                    ?>
                </div>
            </div>
        <?php endif; ?>
        <span class="br-divider vertical mx-half mx-sm-1"></span>
        <?php if ( $has_some_feature_enabled ) : ?>
            <div class="header-functions dropdown">
                <button class="br-button circle small" type="button" data-toggle="dropdown"
                    aria-label="Abrir Funcionalidades do Sistema"><i class="fas fa-th" aria-hidden="true"></i>
                </button>
                <div class="br-list">
                    <div class="header">
                        <div class="title"><?php echo __( 'Funcionalidades do Sistema', 'govbr' ); ?></div>
                    </div>
                    <?php if ( $is_feature_vlibras_enabled ) : ?>
                        <div class="br-item">
                            <button id="vlibras-toggler" vw-access-button class="br-button circle small" type="button" aria-label="<?php echo __( 'VLibras', 'govbr' ); ?>">
                                <i class="fas fa-hands" aria-hidden="true"></i>
                                <span class="text"><?php echo __( 'VLibras', 'govbr' ); ?></span>
                            </button>
                            <button class="br-button circle small" type="button" aria-label="<?php echo __( 'VLibras', 'govbr' ); ?>">
                                <i class="fas fa-hands" aria-hidden="true"></i>
                                <span class="text"><?php echo __( 'VLibras', 'govbr' ); ?></span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <?php if ( $is_feature_contrast_mode_enabled ) : ?>
                        <div class="br-item">
                            <button
                                    id="contrast-mode-toggler"
                                    class="br-button circle small"
                                    type="button"
                                    aria-label="<?php _e('Alto contraste', 'govbr' ); ?>"
                                    aria-pressed="false">
                                <i class="fas fa-adjust" aria-hidden="true"></i>
                                <span class="text"><?php _e('Alto contraste', 'govbr' ); ?></span>
                            </button>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="header-search-trigger">
            <button class="br-button circle" type="button" aria-label="Abrir Busca" data-toggle="search" data-target=".header-search">
                <i class="fas fa-search" aria-hidden="true"></i>
            </button>
        </div>
        <?php if ( $is_wordpress_login_enabled ) : ?>
            <div class="header-login">
                <?php if ( !is_user_logged_in() ): ?>
                    <div class="header-sign-in">
                        <a href="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>"class="br-sign-in small" data-trigger="login">
                            <i class="fas fa-user" aria-hidden="true"></i>
                            <span class="d-sm-inline"><?php _e('Entrar', 'govbr' ); ?></span>
                        </a>
                    </div>
                <?php else: $current_user = wp_get_current_user(); ?>
                    <div class="header-sign-in">
                        <button class="br-sign-in medium" type="button" id="avatar-dropdown-trigger" data-toggle="dropdown" data-target="avatar-menu" aria-label="Avatar com dropdown">
                            <span class="br-avatar" title="<?php echo $current_user->display_name; ?>">
                                <?php if ( get_avatar( $current_user->ID ) ) : ?>
                                    <span class="content"><?php echo get_avatar( $current_user->ID, 32 ); ?></span>
                                <?php else: ?>
                                    <span class="content bg-orange-vivid-30 text-pure-0"><?php echo substr($current_user->display_name, 0, 1); ?></span>
                                <?php endif; ?>
                            </span>
                            <span class="ml-2 text-gray-80 text-weight-regular">Olá, <span class="text-weight-semi-bold"><?php echo strtok($current_user->display_name, " "); ?></span></span>
                            <i class="fas fa-caret-down" aria-hidden="true"></i>
                        </button>
                        <div class="br-list" id="avatar-menu" hidden="hidden">
                            <a class="br-item" href="<?php echo esc_url( get_edit_profile_url() ); ?>"><?php _e('Perfil', 'govbr' ); ?></a>
                            <a class="br-item" href="<?php echo esc_url( wp_logout_url( get_permalink() ) ); ?>"><?php _e('Sair', 'govbr' ); ?></a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</div>