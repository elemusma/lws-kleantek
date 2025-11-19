<?php
$post_id = get_the_ID();
$title_slug = sanitize_title_with_dashes(get_the_title());

$excerpt = get_the_excerpt();
$yoast_meta = get_post_meta( get_the_ID(), '_yoast_wpseo_metadesc', true );
?>
<div class="col-md-6 col-12 post-id-<?php echo esc_attr($post_id); ?> post-<?php echo esc_attr($title_slug); ?>" style="margin-bottom: 50px;" data-aos="fade-up" data-aos-delay="">
<div class="w-100 h-100 blog-content position-relative overflow-hidden" style="">
	<div style="background:#3D3D3D;padding:15px;border-radius:25px;">
	<div class="img-hover overflow-hidden" style="overflow:hidden;">
		<a href="<?php echo esc_url(get_permalink()); ?>" style="text-decoration:none;" title="<?php echo esc_attr('Read more for article ' . get_the_title()); ?>">
			<?php
			the_post_thumbnail(
				'full',
				array(
					'class' => 'w-100 d-block',
					'style' => 'height:250px;object-fit:contain;object-position:top;'
				)
			);
			?>
		</a>
	</div>
	<div class="position-relative z-1" style="padding-bottom:25px;">
		<a href="<?php echo esc_url(get_permalink()); ?>" style="text-decoration:none;" title="<?php echo esc_attr('Read more for article ' . get_the_title()); ?>">
			<h3 class="bold" style="line-height:1.5;"><?php echo esc_html(get_the_title()); ?></h3>
		</a>
		<?php 
		if ( !empty( $excerpt ) ) {
		echo wp_kses_post(get_the_excerpt()); 
		} elseif ( !empty( $yoast_meta ) ) {
    		echo '<p>' . esc_html( $yoast_meta ) . '</p>';
}
		?>
	</div>
	<a href="<?php echo esc_url(get_permalink()); ?>" title="<?php echo esc_attr('Read more for article ' . get_the_title()); ?>" class="z-3 bold" style="">
		Read More <?php echo chevronRight(); ?>
	</a>
</div>
</div>
</div>