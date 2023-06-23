<?php
/**
 * Displays the post header
 *
 * @since 0.1.0
 */
?>

<header class="entry-header container-lg">
	<?php
	gov_br_post_thumbnail();
	the_title( sprintf( '<h2 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' );
	?>
</header><!-- .entry-header -->
