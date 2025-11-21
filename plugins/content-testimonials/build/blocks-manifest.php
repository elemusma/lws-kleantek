<?php
// This file is generated. Do not modify it manually.
return array(
	'content-testimonials' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/content-testimonials',
		'version' => '0.1.0',
		'title' => 'Content Testimonials',
		'category' => 'widgets',
		'icon' => 'smiley',
		'description' => 'Example block scaffolded with Create Block tool.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => true
		),
		'attributes' => array(
			'section_style' => array(
				'type' => 'string',
				'default' => 'padding:50px 0;'
			),
			'section_class' => array(
				'type' => 'string',
				'default' => 'position-relative'
			),
			'section_id' => array(
				'type' => 'string',
				'default' => ''
			),
			'section_image' => array(
				'type' => 'string',
				'default' => null
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
			'container_style' => array(
				'type' => 'string',
				'default' => ''
			),
			'container_class' => array(
				'type' => 'string',
				'default' => 'container'
			),
			'container_id' => array(
				'type' => 'string',
				'default' => ''
			),
			'row_style' => array(
				'type' => 'string',
				'default' => ''
			),
			'row_class' => array(
				'type' => 'string',
				'default' => 'row justify-content-center'
			),
			'row_id' => array(
				'type' => 'string',
				'default' => ''
			),
			'col_style' => array(
				'type' => 'string',
				'default' => 'padding-bottom:50px;'
			),
			'col_class' => array(
				'type' => 'string',
				'default' => 'col-lg-9 text-center'
			),
			'col_id' => array(
				'type' => 'string',
				'default' => ''
			),
			'columns_style' => array(
				'type' => 'string',
				'default' => ''
			),
			'columns_class' => array(
				'type' => 'string',
				'default' => 'row'
			),
			'columns_id' => array(
				'type' => 'string',
				'default' => ''
			),
			'columns' => array(
				'type' => 'array',
				'items' => array(
					'type' => 'object'
				),
				'default' => array(
					array(
						'col_class' => 'col-md-6',
						'col_style' => '',
						'col_id' => '',
						'inner_col_style' => '',
						'inner_col_class' => '',
						'data_aos' => '',
						'data_aos_delay' => '',
						'img' => '',
						'img_alt' => array(
							'type' => 'string'
						),
						'img_title' => array(
							'type' => 'string'
						),
						'img_class' => '',
						'img_style' => '',
						'title' => 'Column',
						'content' => 'This is the column content.',
						'code_block' => ''
					)
				)
			)
		),
		'textdomain' => 'content-testimonials',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js'
	)
);
