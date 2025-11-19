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
	SelectControl,
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
		section_image_url,
		section_image_alt,
		section_image_title,
		section_image_class,
		section_image_style,
		sideLinks,
		bottomImage,
		bottomImage_url,
	} = attributes;

	const blockProps = useBlockProps();

	// Update side link
	const updateSideLink = ( index, field, value ) => {
		const updated = [ ...sideLinks ];
		updated[ index ] = { ...updated[ index ], [ field ]: value };
		setAttributes( { sideLinks: updated } );
	};

	// Add side link
	const addSideLink = () => {
		setAttributes( {
			sideLinks: [ ...sideLinks, { title: 'New Link', url: '', target: '_self' } ],
		} );
	};

	// Remove side link
	const removeSideLink = ( index ) => {
		const updated = sideLinks.filter( ( _, i ) => i !== index );
		setAttributes( { sideLinks: updated } );
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
							onSelect={ ( media ) =>
								setAttributes( {
									section_image: media.id,
									section_image_url: media.url,
									section_image_alt: media.alt,
									section_image_title:
										media.title?.rendered ||
										media.title ||
										'',
								} )
							}
							type="image"
							allowedTypes={ [ 'image' ] }
							value={ section_image }
							render={ ( { open } ) => (
								<div>
									{ section_image && (
										<>
											<Button
												isLink
												isDestructive
												onClick={ () =>
													setAttributes( {
														section_image: 0,
														section_image_url: '',
														section_image_alt: '',
														section_image_title: '',
													} )
												}
											>
												{ __( 'Remove Section Image' ) }
											</Button>
											<p>
												{ __( 'Image ID:' ) }{ ' ' }
												{ section_image }
											</p>
											<p>
												{ __( 'Alt Text:' ) }{ ' ' }
												{ section_image_alt ||
													section_image_title }
											</p>
										</>
									) }
									<Button
										onClick={ open }
										icon="upload"
										variant="primary"
									>
										{ __( 'Select Section Image' ) }
									</Button>
								</div>
							) }
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

				<PanelBody
					title={ __( 'Side Links' ) }
					initialOpen={ false }
				>
					{ sideLinks.map( ( item, index ) => (
						<div
							key={ index }
							style={ {
								marginBottom: '20px',
								padding: '15px',
								border: '1px solid #e0e0e0',
								borderRadius: '4px',
							} }
						>
							<h4>{ `Link ${ index + 1 }` }</h4>
							<TextControl
								label={ __( 'Title' ) }
								value={ item.title }
								onChange={ ( value ) =>
									updateSideLink(
										index,
										'title',
										value
									)
								}
							/>
							<TextControl
								label={ __( 'URL' ) }
								type="url"
								value={ item.url }
								onChange={ ( value ) =>
									updateSideLink(
										index,
										'url',
										value
									)
								}
							/>
							<SelectControl
								label={ __( 'Link Target' ) }
								value={ item.target }
								options={ [
									{
										label: 'Same Window',
										value: '_self',
									},
									{
										label: 'New Window',
										value: '_blank',
									},
								] }
								onChange={ ( value ) =>
									updateSideLink(
										index,
										'target',
										value
									)
								}
							/>
							<Button
								isDestructive
								onClick={ () =>
									removeSideLink( index )
								}
								variant="secondary"
							>
								{ __( 'Remove Link' ) }
							</Button>
						</div>
					) ) }
					<Button
						onClick={ addSideLink }
						variant="primary"
					>
						{ __( 'Add Link' ) }
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
									bottomImage: media.id,
									bottomImage_url: media.url,
								} )
							}
							type="image"
							allowedTypes={ [ 'image' ] }
							value={ bottomImage }
							render={ ( { open } ) => (
								<div>
									{ bottomImage && (
										<>
											<Button
												isLink
												isDestructive
												onClick={ () =>
													setAttributes( {
														bottomImage: 0,
														bottomImage_url: '',
													} )
												}
											>
												{ __( 'Remove Image' ) }
											</Button>
											<p>
												{ __(
													'Image ID:'
												) }
												{ bottomImage }
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
					<h2>{ __( 'About Block' ) }</h2>

					{ section_image && (
						<div style={ { marginBottom: '20px' } }>
							<p>
								<strong>Section Image ID:</strong> { section_image }
							</p>
						</div>
					) }

					{ sideLinks.length > 0 && (
						<div style={ { marginBottom: '20px' } }>
							<h3>{ __( 'Side Links' ) }</h3>
							<ul>
								{ sideLinks.map(
									( item, index ) => (
										<li key={ index }>
											{ item.title }
											{ item.url && (
												<> ({ item.url })</>
											) }
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

					{ bottomImage && (
						<div>
							<p>
								<strong>Bottom Image ID:</strong>{' '}
								{ bottomImage }
							</p>
						</div>
					) }
				</div>
			</section>
		</>
	);
}