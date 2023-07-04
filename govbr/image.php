<?php
/**
 * The template for displaying image attachments
 *
 * @since 0.1.0
 */

get_header();

// Start the loop.
while ( have_posts() ) {
	the_post();
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php
			/**
			 * Action for rendering content before the page header in the image template.
			 * 
			 * @since 0.1.0
			 */		
			do_action( 'gov_br_image_template_before_page_header' );
		?>

		<header class="entry-header container-lg">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

		<?php
			/**
			 * Action for rendering content after the page header in the image template.
			 * 
			 * @since 0.1.0
			 */		
			do_action( 'gov_br_image_template_after_page_header' );
		?>

		<div class="entry-content">
			<figure class="wp-block-image">
				<?php
				/**
				 * Filter the default image attachment size.
				 *
				 * @since 0.1.0
				 *
				 * @param string $image_size Image size. Default 'full'.
				 */
				$image_size = apply_filters( 'gov_br_attachment_size', 'full' );
				echo wp_get_attachment_image( get_the_ID(), $image_size );
				?>

				<?php if ( wp_get_attachment_caption() ) : ?>
					<figcaption class="wp-caption-text"><?php echo wp_kses_post( wp_get_attachment_caption() ); ?></figcaption>
				<?php endif; ?>
			</figure><!-- .wp-block-image -->

			<?php
			the_content();

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
	<?php
	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
} // End the loop.

get_footer();
