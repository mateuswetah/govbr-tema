<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gov_BR
 * @since Gov BR 0.1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php the_breadcrumb(); ?>

	<?php if ( ! is_front_page() ) : ?>
		<header class="entry-header container-lg">
			<?php get_template_part( 'template-parts/header/entry-header' ); ?>
			<?php gov_br_post_thumbnail(); ?>
		</header><!-- .entry-header -->
	<?php elseif ( has_post_thumbnail() ) : ?>
		<header class="entry-header container-lg">
			<?php gov_br_post_thumbnail(); ?>
		</header><!-- .entry-header -->
	<?php endif; ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'govbr' ) . '">',
				'after'    => '</nav>',
				/* translators: %: Page number. */
				'pagelink' => esc_html__( 'Page %', 'govbr' ),
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php gov_br_entry_meta_footer(); ?>

</article><!-- #post-<?php the_ID(); ?> -->
