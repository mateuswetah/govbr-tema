<?php
/**
 * Gov BR Starter Content
 *
 * @link https://make.wordpress.org/core/2016/11/30/starter-content-for-themes-in-4-7/
 *
 * @package WordPress
 * @subpackage Gov_BR
 * @since Gov BR 1.0
 */

/**
 * Function to return the array of starter content for the theme.
 *
 * Passes it through the `gov_br_starter_content` filter before returning.
 *
 * @since Gov BR 1.0
 *
 * @return array A filtered array of args for the starter_content.
 */
function gov_br_get_starter_content() {

	// Define and register starter content to showcase the theme on new sites.
	$starter_content = array(

		// Specify the core-defined pages to create and add custom thumbnails to some of them.
		'posts'     => array(
			'front' => array(
				'post_type'    => 'page',
				'post_title'   => esc_html_x( 'Create your website with blocks', 'Theme starter content', 'govbr' ),
				'post_content' => '
					<!-- wp:heading {"align":"wide","fontSize":"gigantic","style":{"typography":{"lineHeight":"1.1"}}} -->
					<h2 class="has-text-align-wide has-gigantic-font-size" style="line-height:1.1">' . esc_html_x( 'Create your website with blocks', 'Theme starter content', 'govbr' ) . '</h2>
					<!-- /wp:heading -->

					<!-- wp:spacer -->
					<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"is-style-govbr-columns-overlap"} -->
					<div class="wp-block-columns are-vertically-aligned-center is-style-govbr-columns-overlap"><!-- wp:column {"verticalAlignment":"center"} -->
					<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"align":"full","sizeSlug":"large"} -->
					<figure class="wp-block-image alignfull size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/roses-tremieres-hollyhocks-1884.jpg" alt="' . esc_attr__( '&#8220;Roses Trémières&#8221; by Berthe Morisot', 'govbr' ) . '"/></figure>
					<!-- /wp:image -->

					<!-- wp:spacer -->
					<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:image {"align":"full","sizeSlug":"large"} -->
					<figure class="wp-block-image alignfull size-large"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/in-the-bois-de-boulogne.jpg" alt="' . esc_attr__( '&#8220;In the Bois de Boulogne&#8221; by Berthe Morisot', 'govbr' ) . '"/></figure>
					<!-- /wp:image --></div>
					<!-- /wp:column -->

					<!-- wp:column {"verticalAlignment":"center"} -->
					<div class="wp-block-column is-vertically-aligned-center"><!-- wp:spacer -->
					<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:image {"sizeSlug":"large","className":"alignfull size-full"} -->
					<figure class="wp-block-image size-large alignfull size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/young-woman-in-mauve.jpg" alt="' . esc_attr__( '&#8220;Young Woman in Mauve&#8221; by Berthe Morisot', 'govbr' ) . '"/></figure>
					<!-- /wp:image --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->

					<!-- wp:spacer {"height":50} -->
					<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:columns {"verticalAlignment":"top","align":"wide"} -->
					<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top"} -->
					<div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading {"level":3} -->
					<h3>' . esc_html_x( 'Add block patterns', 'Theme starter content', 'govbr' ) . '</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p>' . esc_html_x( 'Block patterns are pre-designed groups of blocks. To add one, select the Add Block button [+] in the toolbar at the top of the editor. Switch to the Patterns tab underneath the search bar, and choose a pattern.', 'Theme starter content', 'govbr' ) . '</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column -->

					<!-- wp:column {"verticalAlignment":"top"} -->
					<div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading {"level":3} -->
					<h3>' . esc_html_x( 'Frame your images', 'Theme starter content', 'govbr' ) . '</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p>' . esc_html_x( 'Gov BR includes stylish borders for your content. With an Image block selected, open the "Styles" panel within the Editor sidebar. Select the "Frame" block style to activate it.', 'Theme starter content', 'govbr' ) . '</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column -->

					<!-- wp:column {"verticalAlignment":"top"} -->
					<div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading {"level":3} -->
					<h3>' . esc_html_x( 'Overlap columns', 'Theme starter content', 'govbr' ) . '</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p>' . esc_html_x( 'Gov BR also includes an overlap style for column blocks. With a Columns block selected, open the "Styles" panel within the Editor sidebar. Choose the "Overlap" block style to try it out.', 'Theme starter content', 'govbr' ) . '</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->

					<!-- wp:spacer -->
					<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:cover {"overlayColor":"green","contentPosition":"center center","align":"wide"} -->
					<div class="wp-block-cover has-green-background-color has-background-dim"><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":20} -->
					<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:paragraph {"fontSize":"huge"} -->
					<p class="has-huge-font-size">' . esc_html_x( 'Need help?', 'Theme starter content', 'govbr' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:spacer {"height":75} -->
					<div style="height:75px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:columns -->
					<div class="wp-block-columns"><!-- wp:column -->
					<div class="wp-block-column"><!-- wp:paragraph -->
					<p><a href="https://wordpress.org/documentation/article/gov-br/">' . esc_html_x( 'Read the Theme Documentation', 'Theme starter content', 'govbr' ) . '</a></p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:paragraph -->
					<p><a href="https://wordpress.org/support/theme/govbr/">' . esc_html_x( 'Check out the Support Forums', 'Theme starter content', 'govbr' ) . '</a></p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->

					<!-- wp:spacer {"height":20} -->
					<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer --></div></div>
					<!-- /wp:cover -->',
			),
			'about',
			'contact',
			'blog',
		),

		// Default to a static front page and assign the front and posts pages.
		'options'   => array(
			'show_on_front'  => 'page',
			'page_on_front'  => '{{front}}',
			'page_for_posts' => '{{blog}}',
		),

		// Set up nav menus for each of the two areas registered in the theme.
		'nav_menus' => array(
			// Assign a menu to the "primary" location.
			'primary' => array(
				'name'  => esc_html__( 'Primary menu', 'govbr' ),
				'items' => array(
					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
					'page_about',
					'page_blog',
					'page_contact',
				),
			)
		),
	);

	/**
	 * Filters the array of starter content.
	 *
	 * @since Gov BR 1.0
	 *
	 * @param array $starter_content Array of starter content.
	 */
	return apply_filters( 'gov_br_starter_content', $starter_content );
}
