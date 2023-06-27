<?php

/**
 * Tools for intergrating The Icon Block plugin to our theme.
 * 
 */
function gov_br_register_custom_icons() {
	wp_enqueue_script(
		'govbr-register-icons',
		get_theme_file_uri( '/assets/js/icons-plugin.js' ),
		array( 'wp-i18n', 'wp-hooks', 'wp-dom' ),
		wp_get_theme()->get( 'Version' ),
		true // Very important, otherwise the filter is called too early.
	);
}
add_action( 'enqueue_block_editor_assets', 'gov_br_register_custom_icons' );