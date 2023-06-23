<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @since 0.1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php the_breadcrumb(); ?>

	<header class="entry-header container-lg">
		<?php if ( is_singular() ) : ?>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php else : ?>
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php endif; ?>

		<?php gov_br_entry_meta_header(); ?>
		
		<?php gov_br_post_thumbnail(); ?>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content(
			gov_br_continue_reading_text()
		);

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Página', 'govbr' ) . '">',
				'after'    => '</nav>',
				/* translators: %: Page number. */
				'pagelink' => esc_html__( 'Página %', 'govbr' ),
			)
		);

		?>
	</div><!-- .entry-content -->
	
	<?php gov_br_entry_meta_footer(); ?>

</article><!-- #post-<?php the_ID(); ?> -->
