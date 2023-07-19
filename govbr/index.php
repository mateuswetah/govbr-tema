<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @since 0.1.0
 */

get_header();

the_breadcrumb();

?>

<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>

	<?php 
		/**
		 * Action for rendering content before the page header in the index template.
		 *
		 * @since 0.1.0
		 */
		do_action( 'gov_br_index_before_page_header' );
	?>

	<header class="page-header container-lg">
		<h1 class="page-title"><?php single_post_title(); ?></h1>
	</header><!-- .page-header -->

	<?php 
		/**
		 * Action for rendering content after the page header in the index template.
		 *
		 * @since 0.1.0
		 */
		do_action( 'gov_br_index_after_page_header' );
	?>

<?php endif; ?>

<?php
if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();

		get_template_part( 'template-parts/content/content', 'excerpt' );
	}

	echo '<div class="container-lg">';
	gov_br_the_posts_navigation();
	echo '</div>';

} else {

	// If no content, include the "No posts found" template.
	get_template_part( 'template-parts/content/content-none' );

}

get_footer();
