<?php
// start of improve
echo '<section class="position-relative ' . get_field('classes') . '" style="' . get_field('style') . '" id="' . get_field('id') . '">';

// $improveBgDivider = get_field('improve_bg_img');
echo get_template_part('partials/bg-img');

echo '<div class="container" style="padding-top:50px;">';
echo '<div class="row">';
echo '<div class="col-12" style="">';

echo wp_get_attachment_image(147,'full','',[
    'class'=>'w-100 h-auto'
]);

echo '</div>';
echo '</div>';
echo '</div>';


echo '<div class="container-fluid overflow-h">';
echo '<div class="row align-items-center">';
echo '<div class="col-lg-4 col-md-9" style="padding:0;">';
echo '<div class="row position-relative justify-content-start">';

// if(have_rows('improve_top_row_links')): 
// while(have_rows('improve_top_row_links')): the_row(); 
// $animationGroup = get_sub_field('animation');

// $improveRowPages = get_sub_field('internal_link');
// if( $improveRowPages ):
// foreach( $improveRowPages as $post ):
// // Setup this post for WP functions (variable must be named $post).
// setup_postdata($post);

$gallery = get_field('honey_comb_part_two_images');
if( $gallery ): 
foreach( $gallery as $image ):

echo '<a data-aos="' . $animationGroup['type'] . '" data-aos-delay="' . $animationGroup['delay'] . '" class="col-md-12 col-improve-top-row-links text-white text-center d-flex justify-content-center overflow-h">';

echo '<div class="overlay-custom position-absolute w-100 h-100 z-1" style="pointer-events:none;"></div>';

echo wp_get_attachment_image($image['id'],'full','',[
    'class'=>'w-100 h-100 position-absolute bg-img',
    'style'=>'',
    'id'=>''
]);

// the_post_thumbnail('full',array('class'=>'w-100 h-100 position-absolute bg-img'));

echo '<div class="position-relative z-1 w-100">';

echo '<h3 class="mb-0 heading text-uppercase h5 handel">' . $image['title'] . '</h3>';

echo '</div>';
echo '</a>';
endforeach;


endif;

echo '</div>';
echo '</div>';
echo '<div class="col-lg-1"></div>';
echo '<div class="col-lg-5 col-md-6 pt-lg-0 pt-5" data-aos="fade-up" data-aos-delay="200">';
echo '<div class="row">';

echo get_template_part('partials/content-block');

// echo '<div class="col-md-12">';
// echo '<h3 class="h1 mb-4">' . get_field('improve_main_title') . '</h3>';
// echo '<h3 class="mb-4 bold"><em>' . get_field('improve_subtitle') . '</em></h3>';

// the_field('improve_main_content');

// // $applicationsLink = get_field('applications_link');
// // if( $applicationsLink ): 
// // $applicationsLink_url = $applicationsLink['url'];
// // $applicationsLink_title = $applicationsLink['title'];
// // $applicationsLink_target = $applicationsLink['target'] ? $applicationsLink['target'] : '_self';

// // echo '<a class="btn text-white pt-3 pb-3 pl-5 pr-5 bg-black btn-main" href="' . esc_url( $applicationsLink_url ) . '" target="' . esc_attr( $applicationsLink_target ) . '">';

// // echo '<div class="position-relative">';
// // echo esc_html( $applicationsLink_title );
// // echo '</div>';
// // echo '</a>';
// // endif;

// echo '</div>';


echo '</div>';

echo '</div>';


echo '<div class="col-lg-2 col-md-6 pt-lg-0 pt-5" data-aos="fade-up" data-aos-delay="400">';

echo '<ul class="list-unstyled ul-improve text-right">';

if(have_rows('sidebar_titles')): while(have_rows('sidebar_titles')): the_row();

echo '<li class="text-accent-green-1 handel">' . get_sub_field('title') . '</li>';

endwhile; else : endif;

echo '</ul>';

echo '</div>';


echo '</div>';

echo '</div>';

// echo '<div class="container" id="process">';
// echo '<div class="row">';
// echo '<div class="col-12 text-center">';

// echo '<h3 class="h1">' . get_field('partners_title') . '</h3>';

// echo '</div>';
// echo '</div>';
// echo '</div>';

echo '<div class="container" style="padding-bottom:50px;">';
echo '<div class="row">';
echo '<div class="col-12" style="">';

echo wp_get_attachment_image(234,'full','',[
    'class'=>'w-100 h-auto'
]);

echo '</div>';
echo '</div>';
echo '</div>';

echo '</section>';
?>