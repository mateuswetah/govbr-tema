<?php
/**
 * VLibras functionality
 *
 * @since 0.1.0
 */

/**
 * This class is in charge of enabling VLibras for Brazilian Sign Language.
 */
class Gov_BR_VLibras {

	/**
	 * Instantiate the object.
	 *
	 * @since 0.1.0
	 */
	public function __construct() {

		// Loads scripts for VLibras.
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );

		add_action( 'wp_footer', array( $this, 'add_html_before_footer' ) );
	}

	/**
	 * Enqueue scripts and styles.
	 *
	 * @since 0.1.0
	 *
	 * @return void
	 */
	public function enqueue_scripts() {
		
		if ( !get_theme_mod( 'enable_feature_vlibras', true ) )
			return;

		wp_enqueue_style( 'govbr-vlibras-style', get_template_directory_uri() . '/assets/css/style-vlibras.css', array(), wp_get_theme()->get( 'Version' ) ); // @phpstan-ignore-line. Version is always a string.

		wp_enqueue_script( 'govbr-vlibras-script', 'https://vlibras.gov.br/app/vlibras-plugin.js', array(), wp_get_theme()->get( 'Version' ), true );
		wp_enqueue_script( 'govbr-vlibras-script-setup', get_template_directory_uri() . '/assets/js/vlibras.js', array(), wp_get_theme()->get( 'Version' ), true );
	}

	/**
	 * Adds VLibras html to the end of the body.
	 *
	 * @since 0.1.0
	 *
	 * @return void
	 */
	public function add_html_before_footer() {
		
		if ( !get_theme_mod( 'enable_feature_vlibras', true ) )
			return;

		?>
		<div vw class="enabled">
			<!-- We do not use this trigger, as there is a vw-access-button inside the header buttons -->
			<!-- <div vw-access-button class="active"></div> --> 
			<div vw-plugin-wrapper>
				<div class="vw-plugin-top-wrapper"></div>
			</div>
		</div>
		<?php
	}
}
