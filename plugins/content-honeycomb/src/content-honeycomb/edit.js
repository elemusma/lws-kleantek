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
	InspectorControls,
	useBlockProps,
	MediaUpload,
	MediaUploadCheck,
	InnerBlocks,
} from '@wordpress/block-editor';

import {
	Button,
	PanelBody,
	TextControl,
	TextareaControl,
	__experimentalInputControl as InputControl,
} from '@wordpress/components';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit( { attributes, setAttributes } ) {
	const {
		classes,
		style,
		id,
		section_image,
		section_image_title,
		section_image_alt,
		section_image_class,
		section_image_style,
		section_block,
		top_image,
		top_image_alt,
		top_image_title,
		sidebarTitles,
		topRowGallery,
		bottomRowGallery,
		bottom_image,
		bottom_image_alt,
		bottom_image_title,
		gallery_content_titles_class,
		gallery_content_titles_style,
		sidebar_titles_class,
		sidebar_titles_style,
	} = attributes;

	const blockProps = useBlockProps();

	// Update sidebar title
	const updateSidebarTitle = ( index, value ) => {
		const updated = [ ...sidebarTitles ];
		updated[ index ].title = value;
		setAttributes( { sidebarTitles: updated } );
	};

	// Add sidebar title
	const addSidebarTitle = () => {
		setAttributes( {
			sidebarTitles: [ ...sidebarTitles, { title: 'New Title' } ],
		} );
	};

	// Remove sidebar title
	const removeSidebarTitle = ( index ) => {
		const updated = sidebarTitles.filter( ( _, i ) => i !== index );
		setAttributes( { sidebarTitles: updated } );
	};

	// Update gallery item - handles both single field and object updates
	const updateTopRowGallery = ( index, field, value ) => {
		const updated = [ ...topRowGallery ];
		if ( typeof value === 'object' && value !== null ) {
			updated[ index ] = { ...updated[ index ], ...value };
		} else {
			updated[ index ] = { ...updated[ index ], [ field ]: value };
		}
		setAttributes( { topRowGallery: updated } );
	};

	// Add top row gallery item
	const addTopRowGallery = () => {
		setAttributes( {
			topRowGallery: [ ...topRowGallery, { imageUrl: '', imageAlt: '', imageTitle: '', title: 'New Item', col_class: 'col-lg-4 col-md-6 col-top-row-links text-white text-center d-flex justify-content-center overflow-h', data_aos: 'fade-up', data_aos_delay: '100' } ],
		} );
	};

	// Remove top row gallery item
	const removeTopRowGallery = ( index ) => {
		const updated = topRowGallery.filter( ( _, i ) => i !== index );
		setAttributes( { topRowGallery: updated } );
	};

	// Update bottom gallery item - handles both single field and object updates
	const updateBottomRowGallery = ( index, field, value ) => {
		const updated = [ ...bottomRowGallery ];
		if ( typeof value === 'object' && value !== null ) {
			updated[ index ] = { ...updated[ index ], ...value };
		} else {
			updated[ index ] = { ...updated[ index ], [ field ]: value };
		}
		setAttributes( { bottomRowGallery: updated } );
	};

	// Add bottom row gallery item
	const addBottomRowGallery = () => {
		setAttributes( {
			bottomRowGallery: [ ...bottomRowGallery, { imageUrl: '', imageAlt: '', imageTitle: '', title: 'New Item', col_class: 'col-md-6 col-bottom-row-links text-white text-center d-flex justify-content-center overflow-h', data_aos: 'fade-up', data_aos_delay: '100' } ],
		} );
	};

	// Remove bottom row gallery item
	const removeBottomRowGallery = ( index ) => {
		const updated = bottomRowGallery.filter( ( _, i ) => i !== index );
		setAttributes( { bottomRowGallery: updated } );
	};

	return (
		<>
			<InspectorControls>
				<PanelBody title={ __( 'Section Settings' ) } initialOpen={ true }>
					<TextControl
						label={ __( 'Section Classes' ) }
						value={ classes }
						onChange={ ( value ) =>
							setAttributes( { classes: value } )
						}
					/>
					<TextareaControl
						label={ __( 'Section Style' ) }
						value={ style }
						onChange={ ( value ) =>
							setAttributes( { style: value } )
						}
					/>
					<TextControl
						label={ __( 'Section ID' ) }
						value={ id }
						onChange={ ( value ) =>
							setAttributes( { id: value } )
						}
					/>
				</PanelBody>

				<PanelBody
					title={ __( 'Background Image' ) }
					initialOpen={ false }
				>
					<MediaUploadCheck>
						<MediaUpload
							onSelect={(media) => setAttributes({ section_image: media.url, section_image_alt: media.alt,section_image_title: media.title?.rendered || media.title || '' })}
							type="image"
							allowedTypes={['image']}
							value={section_image}
							render={({ open }) => (
								<div>
									{section_image && (
										<>
											<Button
												isLink
												isDestructive
												onClick={() => setAttributes({ section_image: '', section_image_alt: '',section_image_title: '' })}
											>
												{__('Remove Section Image')}
											</Button>
											<img src={section_image} alt={section_image_alt || section_image_title} style={{maxWidth: '100%'}} />
											<p>{__('Alt Text:')} {section_image_alt || section_image_title}</p>
										</>
									)}
									<Button
										onClick={open}
										icon="upload"
										className="editor-media-placeholder__button is-button is-default is-large"
									>
										{__('Select Section Image')}
									</Button>
								</div>
							)}
						/>
					</MediaUploadCheck>

					<TextControl
						label="Background Image Class"
						value={ section_image_class }
						onChange={ ( nextValue ) =>
							setAttributes( { section_image_class: nextValue } )
						}
					/>
					<TextareaControl
						label="Background Image Style"
						value={ section_image_style }
						onChange={ ( nextValue ) =>
							setAttributes( { section_image_style: nextValue } )
						}
					/>
				</PanelBody>

				<PanelBody title={ __( 'Code Block' ) } initialOpen={ false }>
					<label style={ { lineHeight: '2' } }>Code Block</label>
					<textarea
						id="sectionStyleTextarea"
						value={ section_block }
						onChange={ ( event ) =>
							setAttributes( {
								section_block: event.target.value,
							} )
						}
						placeholder="Enter section block here"
						style={ { width: '100%', height: '150px' } }
					/>
				</PanelBody>

				<PanelBody
					title={ __( 'Top Image' ) }
					initialOpen={ false }
				>
					<MediaUploadCheck>
						<MediaUpload
							onSelect={ ( media ) =>
								setAttributes( {
									top_image: media.url,
									top_image_alt: media.alt,
									top_image_title: media.title?.rendered || media.title || '',
								} )
							}
							type="image"
							allowedTypes={ [ 'image' ] }
							value={ top_image }
							render={ ( { open } ) => (
								<div>
									{ top_image && (
										<>
											<Button
												isLink
												isDestructive
												onClick={ () =>
													setAttributes( {
														top_image: '',
														top_image_alt: '',
														top_image_title: '',
													} )
												}
											>
												{ __( 'Remove Image' ) }
											</Button>
											<img
												src={ top_image }
												alt={ top_image_alt || top_image_title }
												style={ { maxWidth: '100%' } }
											/>
											<p>
												{ __( 'Alt Text:' ) }{ ' ' }
												{ top_image_alt || top_image_title }
											</p>
										</>
									) }
									<Button
										onClick={ open }
										icon="upload"
										variant="primary"
									>
										{ __( 'Select Top Image' ) }
									</Button>
								</div>
							) }
						/>
					</MediaUploadCheck>
				</PanelBody>

				
				<PanelBody
					title={ __( 'Sidebar Titles' ) }
					initialOpen={ false }
				>
					<InputControl
						label="Sidebar Col Class"
						value={ sidebar_titles_class }
						onChange={ ( nextValue ) =>
							setAttributes( { sidebar_titles_class: nextValue } )
						}
					/>
					<InputControl
						label="Sidebar Col Style"
						value={ sidebar_titles_style }
						onChange={ ( nextValue ) =>
							setAttributes( { sidebar_titles_style: nextValue } )
						}
					/>
					{ sidebarTitles.map( ( item, index ) => (
						<div
							key={ index }
							style={ {
								marginBottom: '15px',
								padding: '10px',
								border: '1px solid #e0e0e0',
								borderRadius: '4px',
							} }
						>
							<TextControl
								label={ `Title ${ index + 1 }` }
								value={ item.title }
								onChange={ ( value ) =>
									updateSidebarTitle(
										index,
										value
									)
								}
							/>
							<Button
								isDestructive
								onClick={ () =>
									removeSidebarTitle(
										index
									)
								}
								variant="secondary"
							>
								{ __( 'Remove' ) }
							</Button>
						</div>
					) ) }
					<Button
						onClick={ addSidebarTitle }
						variant="primary"
					>
						{ __( 'Add Title' ) }
					</Button>
				</PanelBody>

				<PanelBody
					title={ __( 'Gallery & Content Col' ) }
					initialOpen={ false }
				>
					<InputControl
						label="Gallery & Content Col Class"
						value={ gallery_content_titles_class }
						onChange={ ( nextValue ) =>
							setAttributes( { gallery_content_titles_class: nextValue } )
						}
					/>
					<InputControl
						label="Gallery & Content Col Style"
						value={ gallery_content_titles_style }
						onChange={ ( nextValue ) =>
							setAttributes( { gallery_content_titles_style: nextValue } )
						}
					/>
				</PanelBody>

				<PanelBody
					title={ __( 'Top Row Gallery' ) }
					initialOpen={ false }
				>
					{ topRowGallery.map( ( item, index ) => (
						<div
							key={ index }
							style={ {
								marginBottom: '20px',
								padding: '15px',
								border: '1px solid #e0e0e0',
								borderRadius: '4px',
							} }
						>
							<h4>{ `Item ${ index + 1 }` }</h4>
							<MediaUploadCheck>
								<MediaUpload
									onSelect={ ( media ) =>
										updateTopRowGallery(
											index,
											null,
											{ imageUrl: media.url, imageAlt: media.alt, imageTitle: media.title?.rendered || media.title || '' }
										)
									}
									type="image"
									allowedTypes={ [ 'image' ] }
									value={ item.imageUrl }
									render={ ( { open } ) => (
										<div>
											{ item.imageUrl && (
												<>
													<img
														src={ item.imageUrl }
														alt={ item.imageAlt || item.imageTitle }
														style={ { maxWidth: '100%', marginBottom: '10px' } }
													/>
													<p>
														<strong>{ __( 'Alt Text:' ) }</strong> { item.imageAlt || item.imageTitle }
													</p>
												</>
											) }
											<Button
												onClick={ open }
												variant="secondary"
											>
												{ item.imageUrl
													? __(
														'Change Image'
													)
													: __(
														'Select Image'
													) }
											</Button>
											{ item.imageUrl && (
												<Button
													isLink
													isDestructive
													onClick={ () =>
														updateTopRowGallery(
															index,
															null,
															{ imageUrl: '', imageAlt: '', imageTitle: '' }
														)
													}
													style={ { marginLeft: '10px' } }
												>
													{ __( 'Remove Image' ) }
												</Button>
											) }
										</div>
									) }
								/>
							</MediaUploadCheck>
							
							<TextControl
								label={ __( 'Col Class Name' ) }
								value={ item.col_class }
								onChange={ ( value ) =>
									updateTopRowGallery(
										index,
										'col_class',
										value
									)
								}
							/>
							<TextControl
								label={ __( 'Data AOS' ) }
								value={ item.data_aos }
								onChange={ ( value ) =>
									updateTopRowGallery(
										index,
										'data_aos',
										value
									)
								}
							/>
							<TextControl
								label={ __( 'Data AOS Delay' ) }
								value={ item.data_aos_delay }
								onChange={ ( value ) =>
									updateTopRowGallery(
										index,
										'data_aos_delay',
										value
									)
								}
							/>
							<TextControl
								label={ __( 'Title' ) }
								value={ item.title }
								onChange={ ( value ) =>
									updateTopRowGallery(
										index,
										'title',
										value
									)
								}
							/>
							<Button
								isDestructive
								onClick={ () =>
									removeTopRowGallery(
										index
									)
								}
								variant="secondary"
							>
								{ __( 'Remove' ) }
							</Button>
						</div>
					) ) }
					<Button
						onClick={ addTopRowGallery }
						variant="primary"
					>
						{ __( 'Add Gallery Item' ) }
					</Button>
				</PanelBody>

				<PanelBody
					title={ __( 'Bottom Row Gallery' ) }
					initialOpen={ false }
				>
					{ bottomRowGallery.map( ( item, index ) => (
						<div
							key={ index }
							style={ {
								marginBottom: '20px',
								padding: '15px',
								border: '1px solid #e0e0e0',
								borderRadius: '4px',
							} }
						>
							<h4>{ `Item ${ index + 1 }` }</h4>
							<MediaUploadCheck>
								<MediaUpload
									onSelect={ ( media ) =>
										updateBottomRowGallery(
											index,
											null,
											{ imageUrl: media.url, imageAlt: media.alt, imageTitle: media.title?.rendered || media.title || '' }
										)
									}
									type="image"
									allowedTypes={ [ 'image' ] }
									value={ item.imageUrl }
									render={ ( { open } ) => (
										<div>
											{ item.imageUrl && (
												<>
													<img
														src={ item.imageUrl }
														alt={ item.imageAlt || item.imageTitle }
														style={ { maxWidth: '100%', marginBottom: '10px' } }
													/>
													<p>
														<strong>{ __( 'Alt Text:' ) }</strong> { item.imageAlt || item.imageTitle }
													</p>
												</>
											) }
											<Button
												onClick={ open }
												variant="secondary"
											>
												{ item.imageUrl
													? __(
														'Change Image'
													)
													: __(
														'Select Image'
													) }
											</Button>
											{ item.imageUrl && (
												<Button
													isLink
													isDestructive
													onClick={ () =>
														updateBottomRowGallery(
															index,
															null,
															{ imageUrl: '', imageAlt: '', imageTitle: '' }
														)
													}
													style={ { marginLeft: '10px' } }
												>
													{ __( 'Remove Image' ) }
												</Button>
											) }
										</div>
									) }
								/>
							</MediaUploadCheck>
							
							<TextControl
								label={ __( 'Col Class Name' ) }
								value={ item.col_class }
								onChange={ ( value ) =>
									updateBottomRowGallery(
										index,
										'col_class',
										value
									)
								}
							/>
							<TextControl
								label={ __( 'Data AOS' ) }
								value={ item.data_aos }
								onChange={ ( value ) =>
									updateBottomRowGallery(
										index,
										'data_aos',
										value
									)
								}
							/>
							<TextControl
								label={ __( 'Data AOS Delay' ) }
								value={ item.data_aos_delay }
								onChange={ ( value ) =>
									updateBottomRowGallery(
										index,
										'data_aos_delay',
										value
									)
								}
							/>
							<TextControl
								label={ __( 'Title' ) }
								value={ item.title }
								onChange={ ( value ) =>
									updateBottomRowGallery(
										index,
										'title',
										value
									)
								}
							/>
							<Button
								isDestructive
								onClick={ () =>
									removeBottomRowGallery(
										index
									)
								}
								variant="secondary"
							>
								{ __( 'Remove' ) }
							</Button>
						</div>
					) ) }
					<Button
						onClick={ addBottomRowGallery }
						variant="primary"
					>
						{ __( 'Add Gallery Item' ) }
					</Button>
				</PanelBody>

				<PanelBody
					title={ __( 'Bottom Image' ) }
					initialOpen={ false }
				>
					<MediaUploadCheck>
						<MediaUpload
							onSelect={ ( media ) =>
								setAttributes( {
									bottom_image: media.url,
									bottom_image_alt: media.alt,
									bottom_image_title: media.title?.rendered || media.title || '',
								} )
							}
							type="image"
							allowedTypes={ [ 'image' ] }
							value={ bottom_image }
							render={ ( { open } ) => (
								<div>
									{ bottom_image && (
										<>
											<Button
												isLink
												isDestructive
												onClick={ () =>
													setAttributes( {
														bottom_image: '',
														bottom_image_alt: '',
														bottom_image_title: '',
													} )
												}
											>
												{ __( 'Remove Image' ) }
											</Button>
											<img
												src={ bottom_image }
												alt={ bottom_image_alt || bottom_image_title }
												style={ { maxWidth: '100%' } }
											/>
											<p>
												{ __( 'Alt Text:' ) }{ ' ' }
												{ bottom_image_alt || bottom_image_title }
											</p>
										</>
									) }
									<Button
										onClick={ open }
										icon="upload"
										variant="primary"
									>
										{ __( 'Select Bottom Image' ) }
									</Button>
								</div>
							) }
						/>
					</MediaUploadCheck>
				</PanelBody>
			</InspectorControls>

			<section { ...blockProps }>
				<div style={ { padding: '20px', backgroundColor: '#f5f5f5' } }>
					<h2>{ __( 'Applications Block' ) }</h2>

					{ section_image && (
						<div style={ { marginBottom: '20px' } }>
							<p>
								<strong>Section Image:</strong> { section_image }
							</p>
						</div>
					) }

					{ section_block && (
						<div style={ { marginBottom: '20px' } }>
							<p>
								<strong>Code Block Present</strong>
							</p>
						</div>
					) }

					{ top_image && (
						<div style={ { marginBottom: '20px' } }>
							<p>
								<strong>Top Image:</strong> { top_image }
							</p>
						</div>
					) }

					{ sidebarTitles.length > 0 && (
						<div style={ { marginBottom: '20px' } }>
							<h3>{ __( 'Sidebar Titles' ) }</h3>
							<ul>
								{ sidebarTitles.map(
									( item, index ) => (
										<li key={ index }>
											{ item.title }
										</li>
									)
								) }
							</ul>
						</div>
					) }

					{ topRowGallery.length > 0 && (
						<div style={ { marginBottom: '20px' } }>
							<h3>{ __( 'Top Gallery' ) }</h3>
							<ul>
								{ topRowGallery.map(
									( item, index ) => (
										<li key={ index }>
											{ item.title }
										</li>
									)
								) }
							</ul>
						</div>
					) }

					<div style={ { marginBottom: '20px' } }>
						<h3>{ __( 'Content' ) }</h3>
						<InnerBlocks
							allowedBlocks={ [
								'core/paragraph',
								'core/heading',
								'core/image',
								'core/columns',
								'core/group',
								'core/button',
								'core/list',
							] }
							template={ [
								[ 'core/paragraph', { placeholder: 'Add your content here' } ],
							] }
						/>
					</div>

					{ bottomRowGallery.length > 0 && (
						<div style={ { marginBottom: '20px' } }>
							<h3>{ __( 'Bottom Gallery' ) }</h3>
							<ul>
								{ bottomRowGallery.map(
									( item, index ) => (
										<li key={ index }>
											{ item.title }
										</li>
									)
								) }
							</ul>
						</div>
					) }

					{ bottom_image && (
						<div>
							<p>
								<strong>Bottom Image:</strong>{' '}
								{ bottom_image }
							</p>
						</div>
					) }
				</div>
			</section>
		</>
	);
}