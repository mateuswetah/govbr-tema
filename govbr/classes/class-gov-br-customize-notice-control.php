<?php
/**
 * Customize API: Gov_BR_Customize_Notice_Control class
 *
 * @package Gov_BR
 * @since Gov BR 0.1.0
 */

/**
 * Customize Notice Control class.
 *
 * @since Gov BR 0.1.0
 *
 * @see WP_Customize_Control
 */
class Gov_BR_Customize_Notice_Control extends WP_Customize_Control {
	/**
	 * The control type.
	 *
	 * @since Gov BR 0.1.0
	 *
	 * @var string
	 */
	public $type = 'gov-br-notice';

	/**
	 * Renders the control content.
	 *
	 * This simply prints the notice we need.
	 *
	 * @since Gov BR 0.1.0
	 *
	 * @return void
	 */
	public function render_content() {
		?>
		<div class="notice notice-warning">
			<p><?php esc_html_e( 'To access the Dark Mode settings, select a light background color.', 'govbr' ); ?></p>
			<p><a href="<?php echo esc_url( __( 'https://wordpress.org/documentation/article/gov-br/#dark-mode-support', 'govbr' ) ); ?>">
				<?php esc_html_e( 'Learn more about Dark Mode.', 'govbr' ); ?>
			</a></p>
		</div><!-- .notice -->
		<?php
	}
}
