/**
 * WordPress dependencies
 */
import { __ } from "@wordpress/i18n";
import { useBlockProps, RichText } from "@wordpress/block-editor";

/**
 * Edit component for the block.
 *
 * Handles block content editing inside the Gutenberg editor.
 *
 * @param {Object}   props                Component props.
 * @param {Object}   props.attributes     Block attributes.
 * @param {string}   props.attributes.content Content text value.
 * @param {Function} props.setAttributes  Function to update block attributes.
 *
 * @return {JSX.Element} Block editor component.
 */


export default function ({ attributes, setAttributes }) {
	const { content } = attributes;

	const blockProps = useBlockProps();

	return (
		<div {...blockProps}>
			<RichText
				tagName="p"
				value={content}
				onChange={(newValue) => {
					setAttributes({ content: newValue });
				}}
				placeholder={__(
					"Type your callout message here",
					"callout-and-alert-box"
				)}
			/>
		</div>
	);
}