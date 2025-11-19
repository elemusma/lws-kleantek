<?php

// start of testimonials
echo '<section class="position-relative content-section ' . get_field('classes') . '" style="padding:50px 0;' . get_field('style') . '" id="' . get_field('id') . '">';

echo get_template_part('partials/bg-img');

echo get_field('code_block');

echo '<div class="container">';
echo '<div class="row justify-content-center">';

echo get_template_part('partials/content-block');

// echo '<div class="col-12 text-center pb-4">';
// echo '<h3 class="text-white">' . get_field('testimonials_title') . '</h3>';
// echo '</div>';

echo '<div class="testimonial-carousel owl-carousel owl-theme arrows-middle">';
// start of repeater

if(have_rows('testimonials')): 
$counterTestimonials = 0; 
while(have_rows('testimonials')): the_row(); $counterTestimonials++;

echo '<div class="col col-reviews text-white h-100" style="" data-aos="fade-up" data-aos-delay="' . $counterTestimonials . '00">';

echo '<div class="row h-100" style="background:#393939;border-radius:4px;padding:25px;">';

// echo '<div class="col-1">';

// echo '<span class="h1 text-gray" style="font-family: cursive;">"</span>';

// echo '</div>';

echo '<div class="col-12">';

// echo '<span class="text-gray quotes-testimonial" style="font-size:3rem;">"</span>';

echo '<div class="position-relative" style="">';

echo wp_get_attachment_image(487,'full','',[
	'class'=>'position-absolute',
	'style'=>'width:25px;height:25px;object-fit:contain;right:0;top:0;'
]);

echo '<div class="row align-items-center position-relative">';


echo '<div class="col-3" style="padding-left:0px;">';

$headshot = get_sub_field('headshot'); 
echo wp_get_attachment_image($headshot['id'],'full','',[
    'class'=>'img-testimonial',
	'style'=>'height:50px;width:50px;object-fit:contain;border-radius:50%;'
]);

echo '</div>'; // end of col-3

echo '<div class="col-9" style="padding-left:0px;">';

echo '<span class="name text-uppercase">' . get_sub_field('name') . '</span><br>';

echo wp_get_attachment_image(488,'full','',[
	'class'=>'',
	'style'=>'width:75px;height:25px;object-fit:contain;'
]);
// echo '<span class="industry text-white"><small>' . get_sub_field('title') . '</small></span>';

echo '</div>'; // end of col-9
echo '</div>'; // end of row

echo '<small>' . get_sub_field('content') . '</small>';


echo '</div>'; // end of position-relative

echo '</div>';
echo '</div>';

echo '</div>';
endwhile; 
endif;
// end of repeater -->
echo '</div>';

echo '</div>';
echo '</div>';
echo '</section>';
// end of testimonials

?>