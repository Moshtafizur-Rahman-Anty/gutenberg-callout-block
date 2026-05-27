<?php
/**
 * PHP file to use when rendering the block type on the server to show on the front end.
 *
 * The following variables are exposed to the file:
 *     $attributes (array): The block attributes.
 *     $content (string): The block default content.
 *     $block (WP_Block): The block instance.
 *
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

//Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Get the content. default to empty string
$content = isset($attributes['content']) ? $attributes['content'] : '';

// Build the wrapper with accessibility tags
$wrapper_attributes = get_block_wrapper_attributes( array (
	'role' => "note",
	'aria-label' => 'Styled Callout'
) );

?>

<div <?php echo $wrapper_attributes; ?>>

	<p>
		<?php echo wp_kses_post($content); ?>
	</p>

</div>