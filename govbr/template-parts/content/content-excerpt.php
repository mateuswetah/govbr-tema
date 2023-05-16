<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gov_BR
 * @since Gov BR 0.1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php get_template_part( 'template-parts/header/excerpt-header', get_post_format() ); ?>

	<div class="entry-content">
		<?php get_template_part( 'template-parts/excerpt/excerpt', get_post_format() ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer container-lg">
		<?php gov_br_entry_meta_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-${ID} -->
