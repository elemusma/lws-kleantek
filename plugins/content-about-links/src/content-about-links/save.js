/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';

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
		sideLinks,
		bottomImage,
	} = attributes;

	const blockProps = useBlockProps.save();

	return (
		<div { ...blockProps }>
			<section
				className={ `position-relative content-section ${ classes }` }
				style={ `padding:50px 0 0;${ style }` }
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

				<div className="container">
					<div className="row align-items-center">
						{ /* Side Links */ }
						{ sideLinks.length > 0 && (
							<div className="col-md-4 col-side-links pr-md-5">
								<div className="row">
									<div className="col-10">
										{ sideLinks.map(
											( item, index ) => {
												const linkCount = index + 1;
												return (
													<div
														key={ index }
														className="position-relative"
														style={ {
															marginBottom:
																'15px',
														} }
													>
														<a
															className="text-white position-relative text-center about-side-links d-block w-100"
															href={
																item.url ||
																'#'
															}
															target={
																item.target
															}
															data-aos="fade-up"
															data-aos-delay={
																linkCount +
																'50'
															}
														>
															<div
																className="position-absolute w-100 h-100 about-side-links-bg"
																style={ {
																	top: '0',
																	left: '0',
																	background: '#87b7bd',
																} }
															></div>
															<div
																className="position-relative handel"
																style={ {
																	padding:
																		'15px 0px',
																} }
															>
																{
																	item.title
																}
															</div>
														</a>
													</div>
												);
											}
										) }
									</div>
									<div className="col-2">
										<div
											className="m-auto"
											style={ {
												height: '100%',
												width: '4px',
												background:
													'var(--accent-primary)',
											} }
										></div>
									</div>
								</div>
							</div>
						) }

						{ /* Content */ }
						<div
							className="col-md-7 pl-md-5"
							data-aos="fade-up"
							data-aos-delay="100"
						>
							<InnerBlocks.Content />
						</div>

						{ /* Bottom Image */ }
						<div
							className="col-12"
							style={ { paddingTop: '100px' } }
						>
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
				</div>
			</section>
		</div>
	);
}