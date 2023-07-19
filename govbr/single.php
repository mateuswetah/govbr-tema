<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @since 0.1.0
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();

	get_template_part( 'template-parts/content/content-single' );

	/**
	 * Action for rendering content before the post navigation in the single template.
	 * 
	 * @since 0.1.0
	 */
	do_action( 'gov_br_single_before_post_navigation' );

	if ( is_attachment() ) {
		// Parent post navigation.
		the_post_navigation(
			array(
				'class' => 'container-lg',
				/* translators: %s: Parent post link. */
				'prev_text' => sprintf( __( '<span class="meta-nav">Publicado em </span><span class="post-title">%s</span>', 'govbr' ), '%title' ),
			)
		);
	}

	$current_post_type = get_post_type_object( get_post_type() );

	// Previous/next post navigation.
	$govbr_next_label     = esc_html__( 'Próximo', 'govbr' ) . ' ' . ($current_post_type->labels ? __( 'Post', 'govbr' ) : $current_post_type->labels->singular_name);
	$govbr_previous_label = esc_html__( 'Anterior', 'govbr' ) . ' ' . ($current_post_type->labels ? __( 'Post', 'govbr' ) : $current_post_type->labels->singular_name);

	$govbr_next_button = is_rtl() ? '<button class="br-button circle" type="button" data-previous-page="data-previous-page" aria-label="Página anterior"><i class="fas fa-angle-left" aria-hidden="true"></i></button>' : '<button class="br-button circle" type="button" data-next-page="data-next-page" aria-label="Página seguinte"><i class="fas fa-angle-right" aria-hidden="true"></i></button>';
	$govbr_prev_button = is_rtl() ? '<button class="br-button circle" type="button" data-next-page="data-next-page" aria-label="Página seguinte"><i class="fas fa-angle-right" aria-hidden="true"></i></button>' : '<button class="br-button circle" type="button" data-previous-page="data-previous-page" aria-label="Página anterior"><i class="fas fa-angle-left" aria-hidden="true"></i></button>';

	the_post_navigation(
		array(
			'class' => 'container-lg',
			'next_text' => '<p class="meta-nav">' . $govbr_next_label . $govbr_next_button . '</p><p class="post-title">%title</p>',
			'prev_text' => '<p class="meta-nav">' . $govbr_prev_button . $govbr_previous_label . '</p><p class="post-title">%title</p>',
		)
	);

	/**
	 * Action for rendering content after the post navigation in the single template.
	 * 
	 * @since 0.1.0
	 */
	do_action( 'gov_br_single_after_post_navigation' );

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}

endwhile; // End of the loop.

get_footer();
