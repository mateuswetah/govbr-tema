<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_unique_id/
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 *
 * @since 0.1.0
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */
$govbr_unique_id = wp_unique_id( 'search-form-' );

$govbr_aria_label = ! empty( $args['aria_label'] ) ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';
?>
<form id="main-searchbox" role="search" <?php echo $govbr_aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?> method="get" class="header-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="br-input has-icon">
		<label for="<?php echo esc_attr( $govbr_unique_id ); ?>"><?php _e( 'Buscar&hellip;', 'govbr' ); // phpcs:ignore: WordPress.Security.EscapeOutput.UnsafePrintingFunction -- core trusts translations ?></label>
		<input type="search" id="<?php echo esc_attr( $govbr_unique_id ); ?>" placeholder="<?php _e( 'O que você está procurando?', 'govbr' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
		<button type="submit" class="br-button circle small">
			<i class="fas fa-search" aria-hidden="true"></i>
		</button>
	</div>
	<button class="br-button circle search-close ml-1" type="button" aria-label="<?php _e( 'Fechar busca', 'govbr' ); ?>" data-dismiss="search">
        <i class="fas fa-times" aria-hidden="true"></i>
    </button>
</form>
