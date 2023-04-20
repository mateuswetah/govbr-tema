/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps, useInnerBlocksProps } from '@wordpress/block-editor';

/* Elements that are rendered initially inside the block */
const TEMPLATE = [
	[ 'core/list' ],
];

/* Elements that are allowed the block */
const ALLOWED_BLOCKS = [
	'core/list',
	'core/latest-posts',
	'core/page-list',
	'core/categories',
	'core/navigation'
];

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {WPElement} Element to render.
 */
export default function Edit(props) {
	const {
		context,
		setAttributes
	} = props;

	const parentBlockId = context[ 'govbr/blockId' ]
		? context[ 'govbr/blockId' ]
		: '';

	const blockProps = useBlockProps({ id: 'brgov-collapse--' + parentBlockId } );
	const innerBlocksProps = useInnerBlocksProps({}, {
		template: TEMPLATE,
		allowedBlocks: ALLOWED_BLOCKS
	});

	setAttributes( { parentBlockId: parentBlockId } );

	return (
		<div { ...blockProps } >
			<div { ...innerBlocksProps } />
		</div>
	);
}
