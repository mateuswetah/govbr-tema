<?php
/**
 * Contrast Mode Class
 *
 * @since 0.1.0
 */

/**
 * This class is in charge of Contrast Mode.
 */
class Gov_BR_Contrast_Mode {

	/**
	 * Instantiate the object.
	 *
	 * @since 0.1.0
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
	 * @since 0.1.0
	 *
	 * @return void
	 */
	public function enqueue_scripts() {

		if ( !get_theme_mod( 'enable_feature_contrast_mode', true ) )
			return;

		wp_enqueue_style( 'govbr-contrast-mode-style', get_template_directory_uri() . '/assets/css/style-contrast-mode.css', array( 'gov-br-style' ), wp_get_theme()->get( 'Version' ) ); // @phpstan-ignore-line. Version is always a string.

		wp_enqueue_script( 'govbr-contrast-mode-script', get_template_directory_uri() . '/assets/js/contrast-mode.js', array(), wp_get_theme()->get( 'Version' ), true );
	}

	/**
	 * Adds information to the privacy policy.
	 *
	 * @since 0.1.0
	 *
	 * @return void
	 */
	public function add_privacy_policy_content() {

		if ( !get_theme_mod( 'enable_feature_contrast_mode', true ) )
			return;

		if ( !function_exists( 'wp_add_privacy_policy_content' ) )
			return;
		
		$content = '<p class="privacy-policy-tutorial">' . __( 'Este tema usa LocalStorage quando o modo de Contraste Alto está habilitado.', 'govbr' ) . '</p>'
				. '<strong class="privacy-policy-tutorial">' . __( 'Texto sugerido:', 'govbr' ) . '</strong> '
				. __( 'Este tema usar LocalStorage para salvar se o modo de Contraste Alto está desativado ou ativado.<br> LocalStorage é necessário para esta configuração funcionar e só é usado quando um usuário clica no botão de Contraste alto.<br> Nenhum dado é salvo no banco de dados ou transferida.', 'govbr' );
		wp_add_privacy_policy_content( __( 'Gov BR', 'govbr' ), wp_kses_post( wpautop( $content, false ) ) );
	}

}
