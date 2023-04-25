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
		
		// Group: Layers (shadows) style.
		$layers = [1, 2, 3, 4];
		foreach($layers as $layer) {
			register_block_style(
				'core/group',
				array(
					'name'  => 'govbr-layer-' . $layer,
					'label' => esc_html__( 'Layer ' . $layer, 'govbr' ),
					'inline_style' => '.wp-block-group.is-style-govbr-layer-' . $layer .' { box-shadow: var(--wp--preset--shadow--layer-' . $layer .'); }',
				)
			);
		}

		/* Button: Tertiary style */
		register_block_style(
			'core/button',
			array(
				'name'  => 'tertiary',
				'label' => esc_html__( 'Tertiary', 'govbr' )
			)
		);

		/* Button: Magic style */
		register_block_style(
			'core/button',
			array(
				'name'  => 'magic',
				'label' => esc_html__( 'Magic', 'govbr' )
			)
		);
		
		/* Lists: BRGov style */
		$list_blocks = [
			'core/list',
			'core/latest-posts',
			'core/page-list',
			'core/categories',
			'core/navigation'
		];
		foreach($list_blocks as $block) {
			register_block_style(
				$block,
				array(
					'name'  => 'govbr-list',
					'label' => esc_html__( 'DSGov', 'govbr' )
				)
			);
		}
		
	}
	add_action( 'init', 'gov_br_register_block_styles' );
}
