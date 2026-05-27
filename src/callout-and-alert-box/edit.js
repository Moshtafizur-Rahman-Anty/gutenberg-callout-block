import {__} from "@wordpress/i18n";
import { useBlockProps, RichText } from "@wordpress/block-editor";


export default function ({attributes, setAttributes}) {
		const {content} = attributes;
		const blockProps = useBlockProps();

		return (
			<div {...blockProps}>

				<RichText tagName="p" value={content}

				onChange={(newValue) => {
					setAttributes({content: newValue});
				}}

				placeholder = {__("Type your callout message here", "callout-and-alert-box")}
				
				/>

			</div>
		);
}