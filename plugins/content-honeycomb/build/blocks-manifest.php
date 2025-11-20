<?php
// This file is generated. Do not modify it manually.
return array(
	'content-honeycomb' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/content-honeycomb',
		'version' => '0.1.0',
		'title' => 'Content Honeycomb',
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
				'default' => 'padding:50px 0;overflow:hidden;'
			),
			'id' => array(
				'type' => 'string',
				'default' => ''
			),
			'section_image' => array(
				'type' => 'string',
				'default' => ''
			),
			'section_image_alt' => array(
				'type' => 'string',
				'default' => null
			),
			'section_image_title' => array(
				'type' => 'string',
				'default' => null
			),
			'section_image_class' => array(
				'type' => 'string',
				'default' => 'w-100 h-100 position-absolute bg-img'
			),
			'section_image_style' => array(
				'type' => 'string',
				'default' => 'top:0;left:0;object-fit:cover;pointer-events:none;'
			),
			'section_block' => array(
				'type' => 'string',
				'default' => ''
			),
			'top_image' => array(
				'type' => 'string',
				'default' => ''
			),
			'top_image_alt' => array(
				'type' => 'string',
				'default' => ''
			),
			'top_image_title' => array(
				'type' => 'string',
				'default' => ''
			),
			'top_image_url' => array(
				'type' => 'string',
				'default' => ''
			),
			'sidebar_titles_class' => array(
				'type' => 'string',
				'default' => 'col-lg-3 order-md-2 order-2'
			),
			'sidebar_titles_style' => array(
				'type' => 'string',
				'default' => ''
			),
			'gallery_content_titles_class' => array(
				'type' => 'string',
				'default' => 'col-lg-9 order-md-2 order1'
			),
			'gallery_content_titles_style' => array(
				'type' => 'string',
				'default' => ''
			),
			'sidebarTitles' => array(
				'type' => 'array',
				'default' => array(
					array(
						'title' => 'Title 1'
					),
					array(
						'title' => 'Title 2'
					),
					array(
						'title' => 'Title 3'
					)
				)
			),
			'topRowGallery' => array(
				'type' => 'array',
				'default' => array(
					array(
						'image' => '',
						'imageUrl' => '',
						'title' => 'Gallery Item 1',
						'col_class' => 'col-lg-4 col-md-6 col-top-row-links text-white text-center d-flex justify-content-center overflow-h',
						'data_aos' => 'fade-up',
						'data_aos_delay' => '100'
					),
					array(
						'image' => '',
						'imageUrl' => '',
						'title' => 'Gallery Item 2',
						'col_class' => 'col-lg-4 col-md-6 col-top-row-links text-white text-center d-flex justify-content-center overflow-h',
						'data_aos' => 'fade-up',
						'data_aos_delay' => '100'
					),
					array(
						'image' => '',
						'imageUrl' => '',
						'title' => 'Gallery Item 3',
						'col_class' => 'col-lg-4 col-md-6 col-top-row-links text-white text-center d-flex justify-content-center overflow-h',
						'data_aos' => 'fade-up',
						'data_aos_delay' => '100'
					)
				)
			),
			'bottomRowGallery' => array(
				'type' => 'array',
				'default' => array(
					array(
						'image' => '',
						'imageUrl' => '',
						'title' => 'Gallery Item 1',
						'col_class' => 'col-md-6 col-bottom-row-links text-white text-center d-flex justify-content-center overflow-h',
						'data_aos' => 'fade-up',
						'data_aos_delay' => '100'
					),
					array(
						'image' => '',
						'imageUrl' => '',
						'title' => 'Gallery Item 2',
						'col_class' => 'col-md-6 col-bottom-row-links text-white text-center d-flex justify-content-center overflow-h',
						'data_aos' => 'fade-up',
						'data_aos_delay' => '100'
					),
					array(
						'image' => '',
						'imageUrl' => '',
						'title' => 'Gallery Item 3',
						'col_class' => 'col-md-6 col-bottom-row-links text-white text-center d-flex justify-content-center overflow-h',
						'data_aos' => 'fade-up',
						'data_aos_delay' => '100'
					)
				)
			),
			'bottom_image' => array(
				'type' => 'string',
				'default' => ''
			),
			'bottom_image_alt' => array(
				'type' => 'string',
				'default' => ''
			),
			'bottom_image_title' => array(
				'type' => 'string',
				'default' => ''
			),
			'bottom_image_url' => array(
				'type' => 'string',
				'default' => ''
			)
		),
		'textdomain' => 'content-honeycomb',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js'
	)
);
