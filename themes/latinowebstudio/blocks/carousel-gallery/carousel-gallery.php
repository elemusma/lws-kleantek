<?php
echo '<section class="position-relative ' . get_field('classes') . '" style="padding:50px 0;' . get_field('style') . '" id="' . get_field('id') . '">';

echo '<div class="container">';
echo '<div class="row justify-content-center">';

echo get_template_part('partials/content-block');

echo '</div>';
echo '</div>';

echo '<div class="container-fluid">';
echo '<div class="carousel-gallery owl-carousel owl-theme arrows-middle">';

$workImages = get_field('carousel_gallery');

if( $workImages ):

foreach( $workImages as $workImage ):

echo '<div class="overflow-h position-relative">';
// echo '<div class="position-absolute w-100 h-100" style="background:rgba(0,0,0,.45);top:0;left:0;mix-blend-mode:multiply;pointer-events:none;z-index:1;"></div>';

echo '<a href="' . wp_get_attachment_image_url($workImage['id'], 'full') . '" data-lightbox="image-set-work-gallery">';
echo wp_get_attachment_image($workImage['id'], 'full','',[
	'class'=>'w-100',
	'style'=>'height:350px;object-fit:cover;'
] );

echo '</a>';

// echo '<div class="position-absolute w-100 text-center text-white z-2 pl-5 pr-5" style="top:50%;">';
// echo '<h3 class="headline-gallery bold">' . $workImage['title'] . '</h3>';
// echo '</div>';
echo '</div>';

endforeach;

endif;

echo '</div>';
echo '</div>';
echo '</section>';
// end of our work
?>