<?php
/**
 * Dark Mode Class
 *
 * @package Gov_BR
 * @since Gov BR 0.1.0
 */

/**
 * This class is in charge of Dark Mode.
 */
class Gov_BR_Dark_Mode {

	/**
	 * Instantiate the object.
	 *
	 * @since Gov BR 0.1.0
	 */
	public function __construct() {

		// Enqueue assets for the block-editor.
		add_action( 'enqueue_block_editor_assets', array( $this, 'editor_custom_color_variables' ) );

		// Add styles for dark-mode.
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );

		// Add classes to <body> in the dashboard.
		add_filter( 'admin_body_class', array( $this, 'admin_body_classes' ) );

		// Add the switch on the frontend & customizer.
		add_action( 'wp_footer', array( $this, 'the_switch' ) );

		// Add the privacy policy content.
		add_action( 'admin_init', array( $this, 'add_privacy_policy_content' ) );
	}

	/**
	 * Editor custom color variables & scripts.
	 *
	 * @since Gov BR 0.1.0
	 *
	 * @return void
	 */
	public function editor_custom_color_variables() {
		
		// Add Dark Mode variable overrides.
		wp_add_inline_style(
			'gov-br-custom-color-overrides',
			'.is-dark-theme.is-dark-theme .editor-styles-wrapper { --wp--preset--color--surface-light-alternative: #222; --wp--preset--color--surface-light: #000; --wp--preset--color--border-light: #9ea1a7; --table--stripes-border-color: rgba(240, 240, 240, 0.15); }'
		);

		wp_enqueue_script(
			'govbr-dark-mode-support-toggle',
			get_template_directory_uri() . '/assets/js/dark-mode-toggler.js',
			array(),
			'1.0.0',
			true
		);

		wp_enqueue_script(
			'govbr-editor-dark-mode-support',
			get_template_directory_uri() . '/assets/js/editor-dark-mode-support.js',
			array( 'govbr-dark-mode-support-toggle' ),
			'1.0.0',
			true
		);
	}

	/**
	 * Enqueue scripts and styles.
	 *
	 * @since Gov BR 0.1.0
	 *
	 * @return void
	 */
	public function enqueue_scripts() {

		$url = get_template_directory_uri() . '/assets/css/style-dark-mode.css';
		if ( is_rtl() ) {
			$url = get_template_directory_uri() . '/assets/css/style-dark-mode-rtl.css';
		}
		wp_enqueue_style( 'tt1-dark-mode', $url, array( 'gov-br-style' ), wp_get_theme()->get( 'Version' ) ); // @phpstan-ignore-line. Version is always a string.
	}

	/**
	 * Adds a class to the <body> element in the editor to accommodate dark-mode.
	 *
	 * @since Gov BR 0.1.0
	 *
	 * @param string $classes The admin body-classes.
	 * @return string
	 */
	public function admin_body_classes( $classes ) {

		global $current_screen;
		if ( empty( $current_screen ) ) {
			set_current_screen();
		}

		if ( $current_screen->is_block_editor() ) {
			$classes .= ' govbr-supports-dark-theme';
		}

		return $classes;
	}

	/**
	 * Add night/day switch.
	 *
	 * @since Gov BR 0.1.0
	 *
	 * @return void
	 */
	public function the_switch() {
		$this->the_html();
		$this->the_script();
	}

	/**
	 * Print the dark-mode switch HTML.
	 *
	 * Inspired from https://codepen.io/aaroniker/pen/KGpXZo (MIT-licensed)
	 *
	 * @since Gov BR 0.1.0
	 *
	 * @param array $attrs The attributes to add to our <button> element.
	 * @return void
	 */
	public function the_html( $attrs = array() ) {
		$attrs = wp_parse_args(
			$attrs,
			array(
				'id'           => 'dark-mode-toggler',
				'class'        => 'fixed-bottom',
				'aria-pressed' => 'false',
				'onClick'      => 'toggleDarkMode()',
			)
		);
		echo '<button';
		foreach ( $attrs as $key => $val ) {
			echo ' ' . esc_attr( $key ) . '="' . esc_attr( $val ) . '"';
		}
		echo '>';
		printf(
			/* translators: %s: On/Off */
			esc_html__( 'Dark Mode: %s', 'govbr' ),
			'<span aria-hidden="true"></span>'
		);
		echo '</button>';
		?>
		<style>
			#dark-mode-toggler > span {
				margin-<?php echo is_rtl() ? 'right' : 'left'; ?>: 5px;
			}
			#dark-mode-toggler > span::before {
				content: '<?php esc_attr_e( 'Off', 'govbr' ); ?>';
			}
			#dark-mode-toggler[aria-pressed="true"] > span::before {
				content: '<?php esc_attr_e( 'On', 'govbr' ); ?>';
			}
			<?php if ( is_admin() || wp_is_json_request() ) : ?>
				.components-editor-notices__pinned ~ .edit-post-visual-editor #dark-mode-toggler {
					z-index: 20;
				}
				.is-dark-theme.is-dark-theme #dark-mode-toggler:not(:hover):not(:focus) {
					color: var(--wp--preset--color--reading-light, #333);
				}
				@media only screen and (max-width: 782px) {
					#dark-mode-toggler {
						margin-top: 32px;
					}
				}
			<?php endif; ?>
		</style>

		<?php
	}

	/**
	 * Print the dark-mode switch script.
	 *
	 * @since Gov BR 0.1.0
	 *
	 * @return void
	 */
	public function the_script() {
		echo '<script>';
		include get_template_directory() . '/assets/js/dark-mode-toggler.js'; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude
		echo '</script>';
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
		$content = '<p class="privacy-policy-tutorial">' . __( 'Gov BR uses LocalStorage when Dark Mode support is enabled.', 'govbr' ) . '</p>'
				. '<strong class="privacy-policy-tutorial">' . __( 'Suggested text:', 'govbr' ) . '</strong> '
				. __( 'This website uses LocalStorage to save the setting when Dark Mode support is turned on or off.<br> LocalStorage is necessary for the setting to work and is only used when a user clicks on the Dark Mode button.<br> No data is saved in the database or transferred.', 'govbr' );
		wp_add_privacy_policy_content( __( 'Gov BR', 'govbr' ), wp_kses_post( wpautop( $content, false ) ) );
	}

}
