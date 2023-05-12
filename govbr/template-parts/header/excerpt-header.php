<?php
/**
 * Displays the post header
 *
 * @package Gov_BR
 * @since Gov BR 0.1.0
 */
?>

<header class="entry-header default-max-width">
	<?php
	the_title( sprintf( '<h2 class="entry-title default-max-width"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' );
	gov_br_post_thumbnail();
	?>
</header><!-- .entry-header -->
