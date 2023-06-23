<?php
/**
 * The template for displaying author info below posts.
 *
 * @since 0.1.0
 */

?>
<?php if ( (bool) get_the_author_meta( 'description' ) && post_type_supports( get_post_type(), 'author' ) ) : ?>
	<div class="author-bio container-lg <?php echo get_option( 'show_avatars' ) ? 'show-avatars' : ''; ?>">
		<?php echo get_avatar( get_the_author_meta( 'ID' ), '85' ); ?>
		<div class="author-bio-content">
			<h2 class="author-title">
			<?php
			printf(
				/* translators: %s: Author name. */
				esc_html__( 'Por %s', 'govbr' ),
				get_the_author()
			);
			?>
			</h2><!-- .author-title -->
			<p class="author-description"> <?php the_author_meta( 'description' ); ?></p><!-- .author-description -->
			<?php
			printf(
				'<a class="author-link" href="%1$s" rel="author">%2$s</a>',
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				sprintf(
					/* translators: %s: Author name. */
					esc_html__( 'Ver todos posts de %s', 'govbr' ),
					get_the_author()
				)
			);
			?>
		</div><!-- .author-bio-content -->
	</div><!-- .author-bio -->
	<?php
endif;
