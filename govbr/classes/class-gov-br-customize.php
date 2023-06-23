<?php
/**
 * Customizer settings for this theme.
 *
 * @since 0.1.0
 */

if ( ! class_exists( 'Gov_BR_Customize' ) ) {
	/**
	 * Customizer Settings.
	 *
	 * @since 0.1.0
	 */
	class Gov_BR_Customize {

		/**
		 * Constructor. Instantiate the object.
		 *
		 * @since 0.1.0
		 */
		public function __construct() {
			add_action( 'customize_register', array( $this, 'register' ) );
		}

		/**
		 * Register customizer options.
		 *
		 * @since 0.1.0
		 *
		 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
		 * @return void
		 */
		public function register( $wp_customize ) {

			// Add partial for the header logo.
			$wp_customize->selective_refresh->add_partial(
				'custom_logo',
				array(
					'selector'        => '.header-logo',
				)
			);

			// Change header-title & description to postMessage.
			$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage'; // @phpstan-ignore-line. Assume that this setting exists.
			$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage'; // @phpstan-ignore-line. Assume that this setting exists.

			// Add partial for blogname.
			$wp_customize->selective_refresh->add_partial(
				'blogname',
				array(
					'selector'        => '.header-title',
					'render_callback' => array( $this, 'partial_blogname' ),
				)
			);

			// Add partial for blogdescription.
			$wp_customize->selective_refresh->add_partial(
				'blogdescription',
				array(
					'selector'        => '.header-subtitle',
					'render_callback' => array( $this, 'partial_blogdescription' ),
				)
			);

			// Add "display_title_and_tagline" setting for displaying the header-title & tagline.
			$wp_customize->add_setting(
				'display_title_and_tagline',
				array(
					'capability'        => 'edit_theme_options',
					'default'           => true,
					'sanitize_callback' => array( __CLASS__, 'sanitize_checkbox' ),
				)
			);

			// Add control for the "display_title_and_tagline" setting.
			$wp_customize->add_control(
				'display_title_and_tagline',
				array(
					'type'    => 'checkbox',
					'section' => 'title_tagline',
					'label'   => esc_html__( 'Mostrar título e descrição', 'govbr' ),
				)
			);

			// Add "Signature text" setting
			$wp_customize->add_setting(
				'govbr-signature-field__text',
				array(
					'capability' => 'edit_theme_options',
					'default'    => get_option('govbr-signature-field__text'),
					'transport'  => 'postMessage'
				)
			);

			// Add control for the "Signature text" setting.
			$wp_customize->add_control(
				'govbr-signature-field__text',
				array(
					'type'    => 'text',
					'section' => 'title_tagline',
					'label'   => esc_html__( 'Título da Assinatura', 'govbr' ),
				)
			);

			// Add partial for "Signature text" setting.
			$wp_customize->selective_refresh->add_partial(
				'govbr-signature-field__text',
				array(
					'selector'        => '.header-sign',
					'render_callback' => array( $this, 'partial_signature_text' ),
				)
			);

			// Add "Signature url" setting
			$wp_customize->add_setting(
				'govbr-signature-field__url',
				array(
					'capability' => 'edit_theme_options',
					'default'    => get_option('govbr-signature-field__url'),
					'transport'  => 'postMessage'
				)
			);

			// Add control for the "Signature url" setting.
			$wp_customize->add_control(
				'govbr-signature-field__url',
				array(
					'type'    => 'url',
					'section' => 'title_tagline',
					'label'   => esc_html__( 'Link da Assinatura', 'govbr' ),
				)
			);

			// Add partial for the primary menu links.
			$wp_customize->selective_refresh->add_partial(
				'nav_menu_locations[primary]',
				array(
					'selector'        => '#primary-menu-list',
				)
			);

			// Add partial for the institutional menu links.
			$wp_customize->selective_refresh->add_partial(
				'nav_menu_locations[institutional]',
				array(
					'selector'        => '.header-links .br-list',
				)
			);


			// Add "Theme features" section 
			$wp_customize->add_section(
				'theme_features',
				array(
  					'capability' => 'edit_theme_options',
					'title'   => esc_html__( 'Funcionalidades do Tema', 'govbr' ),
					'description'   => esc_html__( 'As opções habilitadas aqui estarão disponíveis do canto direito do rodapé superior.', 'govbr' ),
				)
			);

			// Add "enable_feature_vlibras" setting for displaying the VLibras button.
			$wp_customize->add_setting(
				'enable_feature_vlibras',
				array(
					'capability'        => 'edit_theme_options',
					'default'           => true,
					'sanitize_callback' => array( __CLASS__, 'sanitize_checkbox' ),
				)
			);

			// Add control for the "enable_feature_vlibras" setting.
			$wp_customize->add_control(
				'enable_feature_vlibras',
				array(
					'type'    => 'checkbox',
					'section' => 'theme_features',
					'label'   => esc_html__( 'Mostrar botão de Libras', 'govbr' ),
				)
			);

			// Add "enable_feature_contrast_mode" setting for displaying the High Contrast mode button.
			$wp_customize->add_setting(
				'enable_feature_contrast_mode',
				array(
					'capability'        => 'edit_theme_options',
					'default'           => true,
					'sanitize_callback' => array( __CLASS__, 'sanitize_checkbox' ),
				)
			);

			// Add control for the "enable_feature_contrast_mode" setting.
			$wp_customize->add_control(
				'enable_feature_contrast_mode',
				array(
					'type'    => 'checkbox',
					'section' => 'theme_features',
					'label'   => esc_html__( 'Mostrar botão de Alto Contraste', 'govbr' ),
				)
			);

			// Add partial for the header loging section.
			$wp_customize->selective_refresh->add_partial(
				'enable_wordpress_login',
				array(
					'selector' => '.header-login',
				)
			);

			// Add "enable_wordpress_login" setting for displaying the WordPress login and user button.
			$wp_customize->add_setting(
				'enable_wordpress_login',
				array(
					'capability'        => 'edit_theme_options',
					'default'           => true,
					'sanitize_callback' => array( __CLASS__, 'sanitize_checkbox' ),
				)
			);

			// Add control for the "enable_wordpress_login" setting.
			$wp_customize->add_control(
				'enable_wordpress_login',
				array(
					'type'    => 'checkbox',
					'section' => 'theme_features',
					'label'   => esc_html__( 'Login no WordPress', 'govbr' ),
				)
			);
			
		}

		/**
		 * Sanitize boolean for checkbox.
		 *
		 * @since 0.1.0
		 *
		 * @param bool $checked Whether or not a box is checked.
		 * @return bool
		 */
		public static function sanitize_checkbox( $checked = null ) {
			return (bool) isset( $checked ) && true === $checked;
		}

		/**
		 * Render the site title for the selective refresh partial.
		 *
		 * @since 0.1.0
		 *
		 * @return void
		 */
		public function partial_blogname() {
			bloginfo( 'name' );
		}

		/**
		 * Render the site tagline for the selective refresh partial.
		 *
		 * @since 0.1.0
		 *
		 * @return void
		 */
		public function partial_blogdescription() {
			bloginfo( 'description' );
		}

		/**
		 * Render the site signature for the selective refresh partial.
		 *
		 * @since 0.1.0
		 *
		 * @return void
		 */
		public function partial_signature_text() {
			if ( !empty( get_theme_mod('govbr-signature-field__url') ) ): ?>
				<a href="<?php echo esc_url( get_theme_mod('govbr-signature-field__url') ); ?>">
					<?php echo get_theme_mod('govbr-signature-field__text'); ?>
				</a>
			<?php else: ?>
				<?php echo get_theme_mod('govbr-signature-field__text'); ?>
			<?php endif;
		}
	}
}
