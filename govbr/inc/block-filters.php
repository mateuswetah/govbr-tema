<?php
/**
 * Block Filters
 *
 * PHP logic that hooks into the blocks parsing to insert special content
 */

/**
 * Add classes to list blocks.
 *
 * @param string $block_content The block content about to be edited.
 * @param array  $block         The full block, including name and attributes.
 * @return string Modified block content.
 */
function gov_br_custom_lists( $block_content, $block ) {
	
	if ( empty($block_content) )
		return $block_content;

	// This filter is for the following blocks only
	if (
		$block['blockName'] !== 'core/list' &&
		$block['blockName'] !== 'core/latest-posts' &&
		$block['blockName'] !== 'core/page-list' &&
		$block['blockName'] !== 'core/categories' &&
		$block['blockName'] !== 'core/navigation'
	)
		return $block_content;

	if (
		isset($block['attrs']) &&
		isset($block['attrs']['className']) &&
		str_contains($block['attrs']['className'], 'govbr-list')
	) {
		
		$tags = new WP_HTML_Tag_Processor($block_content);

		while ( $tags->next_tag( 'ul' ) ) {

			while ( $tags->next_tag( 'a' ) )
				$tags->add_class( 'content' );
		}

		$updated_tags = $tags->get_updated_html();

		return $updated_tags;
	}

	return $block_content;
}
add_filter( 'render_block', 'gov_br_custom_lists', 10, 4 );