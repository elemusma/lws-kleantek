<?php
// This file is generated. Do not modify it manually.
return array(
	'content-about-links' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/content-about-links',
		'version' => '0.1.0',
		'title' => 'Content About Links',
		'category' => 'widgets',
		'icon' => 'smiley',
		'description' => 'Example block scaffolded with Create Block tool.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => true
		),
		'attributes' => array(
			'classes' => array(
				'type' => 'string',
				'default' => ''
			),
			'style' => array(
				'type' => 'string',
				'default' => ''
			),
			'id' => array(
				'type' => 'string',
				'default' => ''
			),
			'section_image' => array(
				'type' => 'number',
				'default' => 0
			),
			'section_image_url' => array(
				'type' => 'string',
				'default' => ''
			),
			'section_image_alt' => array(
				'type' => 'string',
				'default' => ''
			),
			'section_image_title' => array(
				'type' => 'string',
				'default' => ''
			),
			'section_image_class' => array(
				'type' => 'string',
				'default' => 'w-100 h-100 position-absolute bg-img'
			),
			'section_image_style' => array(
				'type' => 'string',
				'default' => 'top:0;left:0;object-fit:cover;pointer-events:none;'
			),
			'sideLinks' => array(
				'type' => 'array',
				'default' => array(
					array(
						'title' => 'Link 1',
						'url' => '',
						'target' => '_self'
					),
					array(
						'title' => 'Link 2',
						'url' => '',
						'target' => '_self'
					)
				)
			),
			'bottomImage' => array(
				'type' => 'number',
				'default' => 0
			),
			'bottomImage_url' => array(
				'type' => 'string',
				'default' => ''
			)
		),
		'textdomain' => 'content-about-links',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js'
	)
);
