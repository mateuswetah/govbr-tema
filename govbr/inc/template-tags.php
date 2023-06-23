<?php
/**
 * Custom template tags for this theme
 *
 * @since 0.1.0
 */

if ( ! function_exists( 'gov_br_posted_on' ) ) {
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 *
	 * @since 0.1.0
	 *
	 * @return void
	 */
	function gov_br_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() )
		);
		echo '<span class="posted-on">';
		printf(
			/* translators: %s: Publish date. */
			esc_html__( 'Publicado em %s', 'govbr' ),
			$time_string // phpcs:ignore WordPress.Security.EscapeOutput
		);
		echo '</span>';
	}
}

if ( ! function_exists( 'gov_br_posted_by' ) ) {
	/**
	 * Prints HTML with meta information about theme author.
	 *
	 * @since 0.1.0
	 *
	 * @return void
	 */
	function gov_br_posted_by() {
		if ( ! get_the_author_meta( 'description' ) && post_type_supports( get_post_type(), 'author' ) ) {
			echo '<span class="byline">';
			printf(
				/* translators: %s: Author name. */
				esc_html__( 'Por %s', 'govbr' ),
				'<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" rel="author">' . esc_html( get_the_author() ) . '</a>'
			);
			echo '</span>';
		}
	}
}

if ( ! function_exists( 'gov_br_entry_meta_header' ) ) {
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 * Header entry meta is displayed differently in archives and single posts.
	 *
	 * @since 0.1.0
	 *
	 * @return void
	 */
	function gov_br_entry_meta_header() {

		// Early exit if not a post.
		if ( 'post' !== get_post_type() ) {
			return;
		}

		echo '<div class="entry-header-meta">';

		// Hide meta information on pages.
		if ( ! is_single() ) {

			if ( is_sticky() ) {
				echo '<p>' . esc_html_x( 'Post destacado', 'Label for sticky posts', 'govbr' ) . '</p>';
			}

			$post_format = get_post_format();
			if ( 'aside' === $post_format || 'status' === $post_format ) {
				echo '<p><a href="' . esc_url( get_permalink() ) . '">' . gov_br_continue_reading_text() . '</a></p>'; // phpcs:ignore WordPress.Security.EscapeOutput
			}

			// Posted on.
			gov_br_posted_on();

		} else {

			// Posted on.
			gov_br_posted_on();
			// Posted by.
			gov_br_posted_by();

		}

		echo '</div>';
	}
}


if ( ! function_exists( 'gov_br_entry_meta_footer' ) ) {
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 * Footer entry meta is displayed differently in archives and single posts.
	 *
	 * @since 0.1.0
	 *
	 * @return void
	 */
	function gov_br_entry_meta_footer() {

		// Early exit if in the main page
		if ( is_front_page() )
			return;

		echo '<footer class="entry-footer container-lg"><div class="entry-meta-footer">';

		if ( has_category() || has_tag() ) {

			echo '<div class="post-taxonomies">';

			$categories_list = get_the_category_list( ' ' );
			if ( $categories_list ) {
				$categories_label = '<strong>' . esc_html__( 'Categorizado como', 'govbr' ) . ': </strong>';
				printf(
					'<span class="cat-links">' . $categories_label . ' %s</span>',
					$categories_list // phpcs:ignore WordPress.Security.EscapeOutput
				);
			}

			$tags_list = get_the_tag_list( '', ' ' );
			if ( $tags_list ) {
				$tags_label = '<strong>' . esc_html__( 'Marcado como', 'govbr' ) . ': </strong>';
				printf(
					'<span class="tags-links">' . $tags_label . '%s</span>',
					$tags_list // phpcs:ignore WordPress.Security.EscapeOutput
				);
			}
			echo '</div>';
		}

		if ( is_page_template( 'image.php' ) ) {

			// Check if there is a parent, then add the published in link.
			if ( wp_get_post_parent_id( $post ) ) {
				echo '<span class="posted-on">';
				printf(
					/* translators: %s: Parent post. */
					esc_html__( 'Published in %s', 'govbr' ),
					'<a href="' . esc_url( get_the_permalink( wp_get_post_parent_id( $post ) ) ) . '">' . esc_html( get_the_title( wp_get_post_parent_id( $post ) ) ) . '</a>'
				);
				echo '</span>';
			}

			// Retrieve attachment metadata.
			$metadata = wp_get_attachment_metadata();
			if ( $metadata ) {
				printf(
					'<span class="full-size-link"><span class="screen-reader-text">%1$s</span><a href="%2$s">%3$s &times; %4$s</a></span>',
					/* translators: Hidden accessibility text. */
					esc_html_x( 'Tamanho completo', 'Used before full size attachment link.', 'govbr' ), // phpcs:ignore WordPress.Security.EscapeOutput
					esc_url( wp_get_attachment_url() ),
					absint( $metadata['width'] ),
					absint( $metadata['height'] )
				);
			}
		}

		echo '</div></footer>';
	}
}

if ( ! function_exists( 'gov_br_post_thumbnail' ) ) {
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 *
	 * @since 0.1.0
	 *
	 * @return void
	 */
	function gov_br_post_thumbnail() {
		if ( ! gov_br_can_show_post_thumbnail() ) {
			return;
		}
		?>

		<?php if ( is_singular() ) : ?>

			<figure class="post-thumbnail">
				<?php
				// Lazy-loading attributes should be skipped for thumbnails since they are immediately in the viewport.
				the_post_thumbnail( 'post-thumbnail', array( 'loading' => false ) );
				?>
				<?php if ( wp_get_attachment_caption( get_post_thumbnail_id() ) ) : ?>
					<figcaption class="wp-caption-text"><?php echo wp_kses_post( wp_get_attachment_caption( get_post_thumbnail_id() ) ); ?></figcaption>
				<?php endif; ?>
			</figure><!-- .post-thumbnail -->

		<?php else : ?>

			<figure class="post-thumbnail">
				<a class="post-thumbnail-inner" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
					<?php the_post_thumbnail( 'medium' ); ?>
				</a>
				<?php if ( wp_get_attachment_caption( get_post_thumbnail_id() ) ) : ?>
					<figcaption class="wp-caption-text"><?php echo wp_kses_post( wp_get_attachment_caption( get_post_thumbnail_id() ) ); ?></figcaption>
				<?php endif; ?>
			</figure><!-- .post-thumbnail -->

		<?php endif; ?>
		<?php
	}
}

if ( ! function_exists( 'gov_br_the_posts_navigation' ) ) {
	/**
	 * Print the next and previous posts navigation.
	 *
	 * @since 0.1.0
	 *
	 * @return void
	 */
	function gov_br_the_posts_navigation() {
		the_posts_pagination(
			array(
				'mid_size'           => 3,
				'show_all'			 => true,
				'type'				 => 'list',
				'prev_text'          => '<i class="fas fa-angle-left" aria-hidden="true"></i>',
				'next_text'          => '<i class="fas fa-angle-right" aria-hidden="true"></i>',
			)
		);
	}
}
