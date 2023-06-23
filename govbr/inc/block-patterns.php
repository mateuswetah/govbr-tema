<?php
/**
 * Block Patterns
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern/
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern_category/
 *
 * @since 0.1.0
 */

if ( function_exists( 'register_block_pattern_category' ) ) {
	/**
	 * Register Block Pattern Category.
	 *
	 * @since 0.1.0
	 *
	 * @return void
	 */
	function gov_br_register_block_pattern_category() {
		register_block_pattern_category(
			'govbr',
			array( 'label' => esc_html__( 'Gov BR', 'govbr' ) )
		);
	}
	add_action( 'init', 'gov_br_register_block_pattern_category' );
}