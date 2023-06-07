/**
 * External dependencies
 */
import classnames from 'classnames';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import {
	RichText,
	useBlockProps,
	__experimentalGetColorClassesAndStyles as getColorClassesAndStyles,
	__experimentalGetSpacingClassesAndStyles as getSpacingClassesAndStyles,
} from '@wordpress/block-editor';

/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * The save function defines the way in which the different attributes should
 * be combined into the final markup, which is then serialized by the block
 * editor into `post_content`.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#save
 *
 * @return {WPElement} Element to render.
 */
export default function Save(props) {
	const {
		attributes,
		className
	} = props;

	const colorProps = getColorClassesAndStyles( attributes );
	const spacingProps = getSpacingClassesAndStyles( attributes );
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

	const blockProps = useBlockProps.save( { className: wrapperClasses + ' br-item' } );

	return (
		<div { ...blockProps } data-toggle="collapse"  data-breakpoint="true" data-target={ 'brgov-collapse--' + attributes.parentBlockId }>
			<div class="content">
				<RichText.Content
					className={ elementClasses }
					style={ elementStyle }
					tagName="div"
					value={ attributes.content }
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
