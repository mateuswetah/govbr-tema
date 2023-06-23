<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @since 0.1.0
 */

get_header();

the_breadcrumb();
?>

	<header class="page-header container-lg">
		<h1 class="page-title"><?php esc_html_e( 'Nada aqui', 'govbr' ); ?></h1>
	</header><!-- .page-header -->

	<div class="error-404 not-found container-lg">
		<div class="page-content">
			<p><?php esc_html_e( 'Parece que nada foi encontrado nesta localização. Talvez tentando outra busca?', 'govbr' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .page-content -->
	</div><!-- .error-404 -->

<?php
get_footer();
