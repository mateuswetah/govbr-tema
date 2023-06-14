<?php
/**
 * Admin Theme Page with settings.
 *
 * @package Gov_BR
 * @since Gov BR 0.1.0
 */

if ( ! class_exists( 'Gov_BR_Admin_Page' ) ) {
	/**
	 * Admin Page Settings.
	 *
	 * @since Gov BR 0.1.0
	 */
	class Gov_BR_Admin_Page {

		/**
		 * Constructor. Instantiate the object.
		 *
		 * @since Gov BR 0.1.0
		 */
		public function __construct() {
			add_action( 'admin_menu', array( $this, 'add_page_to_menu' ) );
		}


		/**
		 * Adds the submenu with the page
		 *
		 * @since Gov BR 0.1.0
		 *
		 * @return void
		 */
		function add_page_to_menu() {
			add_theme_page(
				__( 'Configurações do Tema Gov BR', 'govbr'),
				'Gov BR',
				'manage_options',
				'govbr/govbr-settings.php',
				array( $this, 'govbr_settings_page' )
			); 
		}

		/**
		 * The theme settings page
		 *
		 * @since Gov BR 0.1.0
		 *
		 * @return void
		 */
		function govbr_settings_page() {
			?>
			<div class="wrap">
				<h2><?php _e( 'Configurações do Tema Gov BR', 'govbr'); ?></h2>
			</div>
			<?php
		}
	
	}
}