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

/* Elements that are rendered inside the block */
const TEMPLATE = [
	[ 'govbr/collapse-label' ],
	[ 'govbr/collapse-content' ]
];

/* Elements that are allowed the block */
const ALLOWED_BLOCKS = [
	'govbr/collapse-label',
	'govbr/collapse-content'
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
		clientId,
		setAttributes
	} = props;


	const blockProps = useBlockProps({ className: 'br-list' });
	const innerBlocksProps = useInnerBlocksProps(blockProps, { template: TEMPLATE, allowedBlock: ALLOWED_BLOCKS });

	setAttributes( { blockId: clientId } );

	return (
		<div {...innerBlocksProps } />
	);
}
