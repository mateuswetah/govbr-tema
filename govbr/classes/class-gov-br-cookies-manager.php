<?php
/**
 * Cookies Manager Classe
 *
 * @since 0.1.0
 */

/**
 * This class is in charge of Cookies Manager features.
 */
class Gov_BR_Cookies_Manager {

	/**
	 * Instantiate the object.
	 *
	 * @since 0.1.0
	 */
	public function __construct() {

		// Add styles for contrast-mode.
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
	}

	/**
	 * Enqueue scripts and styles.
	 *
	 * @since 0.1.0
	 *
	 * @return void
	 */
	public function enqueue_scripts() {

		if ( !get_theme_mod( 'enable_feature_cookies_manager', true ) )
			return;

		wp_enqueue_script( 'govbr-cookies_manager-script', get_template_directory_uri() . '/assets/js/cookies_manager.js', array(), wp_get_theme()->get( 'Version' ), true );
	}

}
