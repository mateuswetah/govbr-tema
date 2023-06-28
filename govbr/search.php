<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @since 0.1.0
 */

get_header();

the_breadcrumb();

if ( have_posts() ) {
	?>

	<?php do_action( 'gov_br_search_before_page_header' ); ?>

	<header class="page-header container-lg">
		<h1 class="page-title">
			<?php
			printf(
				/* translators: %s: Search term. */
				esc_html__( 'Resultados para "%s"', 'govbr' ),
				'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
			);
			?>
		</h1>
	</header><!-- .page-header -->

	<?php do_action( 'gov_br_search_after_page_header' ); ?>

	<div class="search-result-count container-lg">
		<?php
		printf(
			esc_html(
				/* translators: %d: The number of search results. */
				_n(
					'Foi encontrado %d resultado para sua busca.',
					'Foram encontrados %d resultados para sua busca.',
					(int) $wp_query->found_posts,
					'govbr'
				)
			),
			(int) $wp_query->found_posts
		);
		?>
	</div><!-- .search-result-count -->
	<?php
	// Start the Loop.
	while ( have_posts() ) {
		the_post();

		/*
		 * Include the Post-Format-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		 */
		get_template_part( 'template-parts/content/content-excerpt', get_post_format() );
	} // End the loop.

	// Previous/next page navigation.
	echo '<div class="container-lg">';
	gov_br_the_posts_navigation();
	echo '</div>';

	// If no content, include the "No posts found" template.
} else {
	get_template_part( 'template-parts/content/content-none' );
}

get_footer();
