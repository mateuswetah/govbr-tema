/**
 * External dependencies
 */
import classnames from 'classnames';

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
import {
	RichText,
	useBlockProps,
	__experimentalUseColorProps as useColorProps,
	__experimentalGetSpacingClassesAndStyles as useSpacingProps,
} from '@wordpress/block-editor';

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
		attributes,
		setAttributes,
		className,
		context
	} = props;

	const colorProps = useColorProps( attributes );
	const spacingProps = useSpacingProps( attributes );
	const elementClasses = classnames(
		className,
		'flex-fill',
		colorProps.className
	);
	const elementStyle = {
		...colorProps.style,
		...spacingProps.style,
	};
	const wrapperClasses = classnames( className, {
		[ `has-custom-font-size` ]:
			attributes.fontSize || attributes.style?.typography?.fontSize,
	} );

	const parentBlockId = context[ 'govbr/blockId' ]
		? context[ 'govbr/blockId' ]
		: '';

	const blockProps = useBlockProps( { className: wrapperClasses + ' br-item' } );

	setAttributes( { parentBlockId: parentBlockId } );

	return (
		<div { ...blockProps } data-toggle="collapse"  data-breakpoint="true" data-target={ 'brgov-collapse--' + parentBlockId }>
			<div class="content">
				<RichText
					className={ elementClasses }
					style={ elementStyle }
					tagName="div"
					value={ attributes.content }
					allowedFormats={ [
						'core/bold',
						'core/italic',
						'core/image',
						'core/text-color',
						'core/underline',
						'core/keyboard',
						'core/subscript',
						'core/supercript',
						'core/code',
					] } // Allow the content to be made bold or italic, but do not allow other formatting options
					onChange={ ( content ) =>
						setAttributes( { content } )
					}
					placeholder={ __(
						'Categoria',
						'govbr'
					) }
				/>
				<div class="support">
					<i 
						class="fas fa-angle-down"
						aria-hidden="true"
						aria-label={ __(
							'Expandir/Recolher',
							'govbr'
						)} />
				</div>
			</div>
		</div>
	);
}
