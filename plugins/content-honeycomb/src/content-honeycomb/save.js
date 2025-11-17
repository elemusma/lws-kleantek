/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps,RichText,InnerBlocks } from '@wordpress/block-editor';
import { RawHTML } from '@wordpress/element';

/**
 * The save function defines the way in which the different attributes should
 * be combined into the final markup, which is then serialized by the block
 * editor into `post_content`.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#save
 *
 * @return {Element} Element to render.
 */
export default function save( { attributes } ) {
	const {
		classes,
		style,
		id,
		section_image,
		section_image_alt,
		section_image_title,
		section_image_class,
		section_image_style,
		section_block,
		topImage,
		sidebarTitles,
		topRowGallery,
		bottomRowGallery,
		bottomImage,
		gallery_content_titles_class,
		gallery_content_titles_style,
		sidebar_titles_class,
		sidebar_titles_style,
	} = attributes;

	const blockProps = useBlockProps.save();

	return (
		<div { ...blockProps }>
			<section
				className={ `position-relative content-section ${ classes }` }
				style={ `padding:50px 0;overflow:hidden;${ style }` }
				id={ id }
			>
				{ /* Background image */ }
				{ section_image && (
					<img
						src={ `${
							window.wp?.data
								?.select( 'core' )
								?.getEntityRecord(
									'postType',
									'attachment',
									section_image
								)?.source_url || '#'
						}` }
						alt={ section_image_alt || section_image_title }
						className={ section_image_class }
						style={ section_image_style }
					/>
				) }

				{ /* Custom code block */ }
				{ section_block && <RawHTML>{ section_block }</RawHTML> }

				<div className="container">
					<div className="col-12" style={ { padding: '50px 0px' } }>
						{ topImage && (
							<img
								src={ `${
									window.wp?.data
										?.select( 'core' )
										?.getEntityRecord(
											'postType',
											'attachment',
											topImage
										)?.source_url || '#'
								}` }
								alt="Top section image"
								className="w-100 h-auto"
							/>
						) }
					</div>
				</div>

				<div className="container-fluid">
					<div className="row">
						{ /* Sidebar */ }
						{ sidebarTitles.length > 0 && (
							<div
								className={sidebar_titles_class}
								style={sidebar_titles_style}
								data-aos="fade-up"
								data-aos-delay="200"
							>
								<ul className="list-unstyled ul-applications">
									{ sidebarTitles.map(
										( item, index ) => (
											<li
												key={ index }
												className="text-accent-green-1 handel"
											>
												{ item.title }
											</li>
										)
									) }
								</ul>
							</div>
						) }

						<div className={gallery_content_titles_class} style={gallery_content_titles_style}>
							<div className="row">
								<div className="col-12">
									{ /* Top Row Gallery */ }
									{ topRowGallery.length >
										0 && (
										<div className="row position-relative justify-content-end">
											{ topRowGallery.map(
												(
													item,
													index
												) => (
													<div
														key={ index }
														className="col-lg-4 col-md-6 col-top-row-links text-white text-center d-flex justify-content-center overflow-h"
													>
														<div
															className="overlay-custom position-absolute w-100 h-100 z-1"
															style={ {
																pointerEvents:
																	'none',
															} }
														></div>
														{ item.image && (
															<img
																src={ `${
																	window.wp?.data
																		?.select(
																			'core'
																		)
																		?.getEntityRecord(
																			'postType',
																			'attachment',
																			item.image
																		)
																		?.source_url ||
																	'#'
																}` }
																alt={ item.title }
																className="w-100 h-100 position-absolute bg-img"
															/>
														) }
														<div className="position-relative z-1 w-100">
															<h3 className="mb-0 heading text-uppercase h5 handel">
																{ item.title }
															</h3>
														</div>
													</div>
												)
											) }
										</div>
									) }
								</div>
							</div>

							<div className="row">
								<div
									className="col-lg-5"
									style={ {
										padding: '50px 15px',
									} }
									data-aos="fade-up"
									data-aos-delay="400"
								>
									<InnerBlocks.Content />
								</div>

								{ /* Bottom Row Gallery */ }
								{ bottomRowGallery.length >
									0 && (
									<div className="col-lg-7">
										<div className="row position-relative justify-content-start">
											{ bottomRowGallery.map(
												(
													item,
													index
												) => (
													<div
														key={ index }
														className="col-md-6 col-bottom-row-links text-white text-center d-flex justify-content-center overflow-h"
													>
														<div
															className="overlay-custom position-absolute w-100 h-100 z-1"
															style={ {
																pointerEvents:
																	'none',
															} }
														></div>
														{ item.image && (
															<img
																src={ `${
																	window.wp?.data
																		?.select(
																			'core'
																		)
																		?.getEntityRecord(
																			'postType',
																			'attachment',
																			item.image
																		)
																		?.source_url ||
																	'#'
																}` }
																alt={ item.title }
																className="w-100 h-100 position-absolute bg-img"
															/>
														) }
														<div className="position-relative z-1 w-100">
															<h3 className="mb-0 heading text-uppercase h5 handel">
																{ item.title }
															</h3>
														</div>
													</div>
												)
											) }
										</div>
									</div>
								) }
							</div>
						</div>
					</div>
				</div>

				<div className="container">
					<div className="col-12" style={ { paddingTop: '100px' } }>
						{ bottomImage && (
							<img
								src={ `${
									window.wp?.data
										?.select( 'core' )
										?.getEntityRecord(
											'postType',
											'attachment',
											bottomImage
										)?.source_url || '#'
								}` }
								alt="Bottom section image"
								className="w-100 h-auto"
							/>
						) }
					</div>
				</div>
			</section>
		</div>
	);
}