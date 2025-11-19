<?php

// owl carousel
wp_enqueue_style('owl.carousel.min', get_theme_file_uri('/owl-carousel/owl.carousel.min.css'));
wp_enqueue_style('owl.theme.default', get_theme_file_uri('/owl-carousel/owl.theme.default.min.css'));
// lightbox
wp_enqueue_style('lightbox-css', get_theme_file_uri('/lightbox/lightbox.min.css'));

// start of process
echo '<section class="position-relative ' . get_field('classes') . '" style="' . get_field('style') . '" id="' . get_field('id') . '">';

echo '<div class="container">';
echo '<div class="row justify-content-center">';

echo get_template_part('partials/content-block');

echo '</div>';
echo '</div>';

echo '<div class="process-carousel owl-carousel owl-theme">';


$partnerPhotos = get_field('process_gallery');
$counterPartner = 0;
if( $partnerPhotos ): 
foreach( $partnerPhotos as $partnerPhoto ): 
$counterPartner++;

echo '<div class="col col-portfolio overflow-h" style="padding:0px;margin-top:15px;margin-bottom:15px;">';

echo '<div class="position-relative overflow-h" data-aos="fade-up" data-aos-delay="' . $counterPartner . '00">';

echo '<a href="' . wp_get_attachment_image_url($partnerPhoto['id'], 'full') . '" data-lightbox="image-set-process">';

echo wp_get_attachment_image($partnerPhoto['id'], 'full','',[
    'class'=>'img-partners img-hover',
    'style'=>'height:350px;object-fit:cover;'
]);

echo '<div class="position-absolute pt-4 w-100 text-center bg-accent" style="bottom:0;left:0;">';

echo wp_get_attachment_image(316,'full','',[
    'class'=>'h-auto position-absolute',
    'style'=>'top:-25px;
    width: 200px;
    left: 50%;
    transform: translate(-50%, 0);
    object-fit: contain;object-position:bottom;'
]);

echo '<div class="position-relative pb-1">';
echo '<h4 class="text-white text-shadow" style="margin:0px;transform: translate(0, -30px);font-size:3rem;line-height:0.5;"><em>' . $counterPartner . '</em></h4>';

echo '<h6 class="text-black pt-2 bold">' . $partnerPhoto['title'] . '</h6>';

echo '</div>';
echo '</div>';
echo '</a>';
echo '</div>';
echo '</div>';

endforeach; endif;

echo '</div>';

// <div class="container">
// <div class="row">
// <div class="col-12">

// </div>
// </div>
// </div>

echo '</section>';

// owl carousel
wp_enqueue_script('jquery-min', get_theme_file_uri('/owl-carousel/jquery.min.js'));
wp_enqueue_script('owl-carousel', get_theme_file_uri('/owl-carousel/owl.carousel.min.js'));
wp_enqueue_script('owl-carousel-custom', get_theme_file_uri('/owl-carousel/owl-carousels.js'));
// lightbox
wp_enqueue_script('lightbox-min-js', get_theme_file_uri('/lightbox/lightbox.min.js'));
wp_enqueue_script('lightbox-js', get_theme_file_uri('/lightbox/lightbox.js'));

// end of process