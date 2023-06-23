<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @since 0.1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since 0.1.0
	 *
	 * @return void
	 */
	function gov_br_register_block_styles() {
		
		/* Group: Cartão clicável (com link interno) */
		register_block_style(
			'core/group',
			array(
				'name'  => 'govbr-clickable-card',
				'label' => esc_html__( 'Cartão clicável', 'govbr' )
			)
		);

		/* Button: Tertiary style */
		register_block_style(
			'core/button',
			array(
				'name'  => 'tertiary',
				'label' => esc_html__( 'Terciário', 'govbr' )
			)
		);

		/* Button: Magic style */
		register_block_style(
			'core/button',
			array(
				'name'  => 'magic',
				'label' => esc_html__( 'Mágica!', 'govbr' )
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
					'label' => esc_html__( 'Lista do DS Gov', 'govbr' )
				)
			);
		}
		
	}
	add_action( 'init', 'gov_br_register_block_styles' );
}
