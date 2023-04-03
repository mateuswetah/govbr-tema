<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage Gov_BR
 * @since Gov BR 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since Gov BR 1.0
	 *
	 * @return void
	 */
	function gov_br_register_block_styles() {
		
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'govbr-columns-overlap',
				'label' => esc_html__( 'Overlap', 'govbr' ),
			)
		);
	}
	add_action( 'init', 'gov_br_register_block_styles' );
}
