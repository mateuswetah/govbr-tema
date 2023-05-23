<?php
/**
 * Contrast Mode Class
 *
 * @package Gov_BR
 * @since Gov BR 0.1.0
 */

/**
 * This class is in charge of Contrast Mode.
 */
class Gov_BR_Contrast_Mode {

	/**
	 * Instantiate the object.
	 *
	 * @since Gov BR 0.1.0
	 */
	public function __construct() {

		// Add styles for contrast-mode.
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );

		// Add the privacy policy content.
		add_action( 'admin_init', array( $this, 'add_privacy_policy_content' ) );
	}

	/**
	 * Enqueue scripts and styles.
	 *
	 * @since Gov BR 0.1.0
	 *
	 * @return void
	 */
	public function enqueue_scripts() {

		wp_enqueue_style( 'govbr-contrast-mode-style', get_template_directory_uri() . '/assets/css/style-contrast-mode.css', array( 'gov-br-style' ), wp_get_theme()->get( 'Version' ) ); // @phpstan-ignore-line. Version is always a string.

		wp_enqueue_script( 'govbr-contrast-mode-script', get_template_directory_uri() . '/assets/js/contrast-mode.js', array(), wp_get_theme()->get( 'Version' ), true );
	}

	/**
	 * Adds information to the privacy policy.
	 *
	 * @since Gov BR 0.1.0
	 *
	 * @return void
	 */
	public function add_privacy_policy_content() {
		if ( ! function_exists( 'wp_add_privacy_policy_content' ) ) {
			return;
		}
		$content = '<p class="privacy-policy-tutorial">' . __( 'Gov BR uses LocalStorage when Contrast Mode support is enabled.', 'govbr' ) . '</p>'
				. '<strong class="privacy-policy-tutorial">' . __( 'Suggested text:', 'govbr' ) . '</strong> '
				. __( 'This website uses LocalStorage to save the setting when Contrast Mode support is turned on or off.<br> LocalStorage is necessary for the setting to work and is only used when a user clicks on the Contrast Mode button.<br> No data is saved in the database or transferred.', 'govbr' );
		wp_add_privacy_policy_content( __( 'Gov BR', 'govbr' ), wp_kses_post( wpautop( $content, false ) ) );
	}

}
