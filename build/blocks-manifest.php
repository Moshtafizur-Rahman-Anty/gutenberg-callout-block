<?php
// This file is generated. Do not modify it manually.
return array(
	'callout-and-alert-box' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'craftblocks/callout-and-alert-box-block',
		'version' => '1.0.0',
		'title' => 'Callout & Alert Box Block',
		'category' => 'text',
		'icon' => 'megaphone',
		'description' => 'A semantic, beautifully styled callout, alert, and notice box block for gutenberg',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'content' => array(
				'type' => 'string',
				'default' => 'Here is the notice'
			)
		),
		'styles' => array(
			array(
				'name' => 'info',
				'label' => 'Info',
				'isDefault' => true
			),
			array(
				'name' => 'success',
				'label' => 'Success'
			),
			array(
				'name' => 'warning',
				'label' => 'Warning'
			)
		),
		'textdomain' => 'callout-and-alert-box',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php',
		'viewScript' => 'file:./view.js'
	)
);
