<?php
/**
 * Back compat functionality
 *
 * Prevents the theme from running on WordPress versions prior to 6.2,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 6.2.
 *
 * @since 0.1.0
 */

/**
 * Display upgrade notice on theme switch.
 *
 * @since 0.1.0
 *
 * @return void
 */
function gov_br_switch_theme() {
	add_action( 'admin_notices', 'gov_br_upgrade_notice' );
}
add_action( 'after_switch_theme', 'gov_br_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * the theme on WordPress versions prior to 6.2.
 *
 * @since 0.1.0
 *
 * @global string $wp_version WordPress version.
 *
 * @return void
 */
function gov_br_upgrade_notice() {
	echo '<div class="error"><p>';
	printf(
		/* translators: %s: WordPress Version. */
		esc_html__( 'Este tema exige a versão 6.2 do WordPress ou mais recente. Você está rodando a versão %s. Por favor, atualize.', 'govbr' ),
		esc_html( $GLOBALS['wp_version'] )
	);
	echo '</p></div>';
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 6.2.
 *
 * @since 0.1.0
 *
 * @global string $wp_version WordPress version.
 *
 * @return void
 */
function gov_br_customize() {
	wp_die(
		sprintf(
			/* translators: %s: WordPress Version. */
			esc_html__( 'Este tema exige a versão 6.2 do WordPress ou mais recente. Você está rodando a versão %s. Por favor, atualize.', 'govbr' ),
			esc_html( $GLOBALS['wp_version'] )
		),
		'',
		array(
			'back_link' => true,
		)
	);
}
add_action( 'load-customize.php', 'gov_br_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 6.2.
 *
 * @since 0.1.0
 *
 * @global string $wp_version WordPress version.
 *
 * @return void
 */
function gov_br_preview() {
	if ( isset( $_GET['preview'] ) ) { // phpcs:ignore WordPress.Security.NonceVerification
		wp_die(
			sprintf(
				/* translators: %s: WordPress Version. */
				esc_html__( 'Este tema exige a versão 6.2 do WordPress ou mais recente. Você está rodando a versão %s. Por favor, atualize.', 'govbr' ),
				esc_html( $GLOBALS['wp_version'] )
			)
		);
	}
}
add_action( 'template_redirect', 'gov_br_preview' );
