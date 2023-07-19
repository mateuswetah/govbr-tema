<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @since 0.1.0
 */

get_header();

$description = get_the_archive_description();

the_breadcrumb();
?>

<?php do_action( 'gov_br_archive_before_page_header' ); ?>

<header class="page-header container-lg">
	<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
	<?php if ( $description ) : ?>
		<div class="archive-description"><?php echo wp_kses_post( wpautop( $description ) ); ?></div>
	<?php endif; ?>
</header><!-- .page-header -->

<?php do_action( 'gov_br_archive_after_page_header' ); ?>

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
