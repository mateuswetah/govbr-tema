<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @since 0.1.0
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @since 0.1.0
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function gov_br_body_classes( $classes ) {

	// Helps detect if JS is enabled or not.
	$classes[] = 'no-js';

	// Adds `singular` to singular pages, and `hfeed` to all other pages.
	$classes[] = is_singular() ? 'singular' : 'hfeed';

	// Add a body class if main navigation is active.
	if ( has_nav_menu( 'primary' ) ) {
		$classes[] = 'has-main-navigation';
	}

	return $classes;
}
add_filter( 'body_class', 'gov_br_body_classes' );

/**
 * Adds custom class to the array of posts classes.
 *
 * @since 0.1.0
 *
 * @param array $classes An array of CSS classes.
 * @return array
 */
function gov_br_post_classes( $classes ) {
	$classes[] = 'entry';

	return $classes;
}
add_filter( 'post_class', 'gov_br_post_classes', 10, 3 );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 *
 * @since 0.1.0
 *
 * @return void
 */
function gov_br_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'gov_br_pingback_header' );

/**
 * Remove the `no-js` class from body if JS is supported.
 *
 * @since 0.1.0
 *
 * @return void
 */
function gov_br_supports_js() {
	echo '<script>document.body.classList.remove("no-js");</script>';
}
add_action( 'wp_footer', 'gov_br_supports_js' );

/**
 * Changes comment form default fields.
 *
 * @since 0.1.0
 *
 * @param array $defaults The form defaults.
 * @return array
 */
function gov_br_comment_form_defaults( $defaults ) {

	// Adjust height of comment form.
	$defaults['comment_field'] = preg_replace( '/rows="\d+"/', 'rows="5"', $defaults['comment_field'] );

	return $defaults;
}
add_filter( 'comment_form_defaults', 'gov_br_comment_form_defaults' );

/**
 * Determines if post thumbnail can be displayed.
 *
 * @since 0.1.0
 *
 * @return bool
 */
function gov_br_can_show_post_thumbnail() {
	/**
	 * Filters whether post thumbnail can be displayed.
	 *
	 * @since 0.1.0
	 *
	 * @param bool $show_post_thumbnail Whether to show post thumbnail.
	 */
	return apply_filters(
		'gov_br_can_show_post_thumbnail',
		! post_password_required() && ! is_attachment() && has_post_thumbnail()
	);
}

/**
 * Returns the size for avatars used in the theme.
 *
 * @since 0.1.0
 *
 * @return int
 */
function gov_br_get_avatar_size() {
	return 60;
}

/**
 * Creates continue reading text.
 *
 * @since 0.1.0
 */
function gov_br_continue_reading_text() {
	$continue_reading = sprintf(
		/* translators: %s: Post title. Only visible to screen readers. */
		esc_html__( 'Continue lendo %s', 'govbr' ),
		the_title( '<span class="screen-reader-text">', '</span>', false )
	);

	return $continue_reading;
}

/**
 * Creates the continue reading link for excerpt.
 *
 * @since 0.1.0
 */
function gov_br_continue_reading_link_excerpt() {
	if ( ! is_admin() ) {
		return '&hellip; <a class="more-link" href="' . esc_url( get_permalink() ) . '">' . gov_br_continue_reading_text() . '</a>';
	}
}

// Filter the excerpt more link.
add_filter( 'excerpt_more', 'gov_br_continue_reading_link_excerpt' );

/**
 * Creates the continue reading link.
 *
 * @since 0.1.0
 */
function gov_br_continue_reading_link() {
	if ( ! is_admin() ) {
		return '<div class="more-link-container"><a class="more-link" href="' . esc_url( get_permalink() ) . '#more-' . esc_attr( get_the_ID() ) . '">' . gov_br_continue_reading_text() . '</a></div>';
	}
}

// Filter the content more link.
add_filter( 'the_content_more_link', 'gov_br_continue_reading_link' );

if ( ! function_exists( 'gov_br_post_title' ) ) {
	/**
	 * Adds a title to posts and pages that are missing titles.
	 *
	 * @since 0.1.0
	 *
	 * @param string $title The title.
	 * @return string
	 */
	function gov_br_post_title( $title ) {
		return '' === $title ? esc_html_x( 'Sem título', 'Added to posts and pages that are missing titles', 'govbr' ) : $title;
	}
}
add_filter( 'the_title', 'gov_br_post_title' );

/**
 * Gets the SVG code for a given icon.
 *
 * @since 0.1.0
 *
 * @param string $group The icon group.
 * @param string $icon  The icon.
 * @param int    $size  The icon size in pixels.
 * @return string
 */
function gov_br_get_icon_svg( $group, $icon, $size = 24 ) {
	return Gov_BR_SVG_Icons::get_svg( $group, $icon, $size );
}

/**
 * Changes the default navigation arrows to svg icons
 *
 * @since 0.1.0
 *
 * @param string $calendar_output The generated HTML of the calendar.
 * @return string
 */
function gov_br_change_calendar_nav_arrows( $calendar_output ) {
	$calendar_output = str_replace( '&laquo; ', is_rtl() ? gov_br_get_icon_svg( 'ui', 'arrow_right' ) : gov_br_get_icon_svg( 'ui', 'arrow_left' ), $calendar_output );
	$calendar_output = str_replace( ' &raquo;', is_rtl() ? gov_br_get_icon_svg( 'ui', 'arrow_left' ) : gov_br_get_icon_svg( 'ui', 'arrow_right' ), $calendar_output );
	return $calendar_output;
}
add_filter( 'get_calendar', 'gov_br_change_calendar_nav_arrows' );

/**
 * Print the first instance of a block in the content, and then break away.
 *
 * @since 0.1.0
 *
 * @param string      $block_name The full block type name, or a partial match.
 *                                Example: `core/image`, `core-embed/*`.
 * @param string|null $content    The content to search in. Use null for get_the_content().
 * @param int         $instances  How many instances of the block will be printed (max). Default  1.
 * @return bool Returns true if a block was located & printed, otherwise false.
 */
function gov_br_print_first_instance_of_block( $block_name, $content = null, $instances = 1 ) {
	$instances_count = 0;
	$blocks_content  = '';

	if ( ! $content ) {
		$content = get_the_content();
	}

	// Parse blocks in the content.
	$blocks = parse_blocks( $content );

	// Loop blocks.
	foreach ( $blocks as $block ) {

		// Sanity check.
		if ( ! isset( $block['blockName'] ) ) {
			continue;
		}

		// Check if this the block matches the $block_name.
		$is_matching_block = false;

		// If the block ends with *, try to match the first portion.
		if ( '*' === $block_name[-1] ) {
			$is_matching_block = 0 === strpos( $block['blockName'], rtrim( $block_name, '*' ) );
		} else {
			$is_matching_block = $block_name === $block['blockName'];
		}

		if ( $is_matching_block ) {
			// Increment count.
			$instances_count++;

			// Add the block HTML.
			$blocks_content .= render_block( $block );

			// Break the loop if the $instances count was reached.
			if ( $instances_count >= $instances ) {
				break;
			}
		}
	}

	if ( $blocks_content ) {
		/** This filter is documented in wp-includes/post-template.php */
		echo apply_filters( 'the_content', $blocks_content ); // phpcs:ignore WordPress.Security.EscapeOutput
		return true;
	}

	return false;
}

/**
 * Retrieve protected post password form content.
 *
 * @since 0.1.0
 * @since 0.1.0 1.4 Corrected parameter name for `$output`,
 *                              added the `$post` parameter.
 *
 * @param string      $output The password form HTML output.
 * @param int|WP_Post $post   Optional. Post ID or WP_Post object. Default is global $post.
 * @return string HTML content for password form for password protected post.
 */
function gov_br_password_form( $output, $post = 0 ) {
	$post   = get_post( $post );
	$label  = 'pwbox-' . ( empty( $post->ID ) ? wp_rand() : $post->ID );
	$output = '<p class="post-password-message">' . esc_html__( 'Este conteúdo está protegido por senha. Insira a senha para acessar.', 'govbr' ) . '</p>
	<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" class="post-password-form" method="post">
	<label class="post-password-form__label" for="' . esc_attr( $label ) . '">' . esc_html_x( 'Senha', 'Post password form', 'govbr' ) . '</label><input class="post-password-form__input" name="post_password" id="' . esc_attr( $label ) . '" type="password" spellcheck="false" size="20" /><input type="submit" class="post-password-form__submit" name="' . esc_attr_x( 'Enviado', 'Post password form', 'govbr' ) . '" value="' . esc_attr_x( 'Enviar', 'Post password form', 'govbr' ) . '" /></form>
	';
	return $output;
}
add_filter( 'the_password_form', 'gov_br_password_form', 10, 2 );

/**
 * Filters the list of attachment image attributes.
 *
 * @since 0.1.0
 *
 * @param string[]     $attr       Array of attribute values for the image markup, keyed by attribute name.
 *                                 See wp_get_attachment_image().
 * @param WP_Post      $attachment Image attachment post.
 * @param string|int[] $size       Requested image size. Can be any registered image size name, or
 *                                 an array of width and height values in pixels (in that order).
 * @return string[] The filtered attributes for the image markup.
 */
function gov_br_get_attachment_image_attributes( $attr, $attachment, $size ) {

	if ( is_admin() ) {
		return $attr;
	}

	if ( isset( $attr['class'] ) && false !== strpos( $attr['class'], 'custom-logo' ) ) {
		return $attr;
	}

	$width  = false;
	$height = false;

	if ( is_array( $size ) ) {
		$width  = (int) $size[0];
		$height = (int) $size[1];
	} elseif ( $attachment && is_object( $attachment ) && $attachment->ID ) {
		$meta = wp_get_attachment_metadata( $attachment->ID );
		if ( isset( $meta['width'] ) && isset( $meta['height'] ) ) {
			$width  = (int) $meta['width'];
			$height = (int) $meta['height'];
		}
	}

	if ( $width && $height ) {

		// Add style.
		$attr['style'] = isset( $attr['style'] ) ? $attr['style'] : '';
		$attr['style'] = 'width:100%;height:' . round( 100 * $height / $width, 2 ) . '%;max-width:' . $width . 'px;' . $attr['style'];
	}

	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'gov_br_get_attachment_image_attributes', 10, 3 );
