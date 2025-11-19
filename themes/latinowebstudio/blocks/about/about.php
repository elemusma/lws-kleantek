<?php

echo '<section class="position-relative content-section ' . get_field('classes') . '" style="padding:50px 0 0;' . get_field('style') . '" id="' . get_field('id') . '">';

echo get_template_part('partials/bg-img');

echo '<div class="container">';
echo '<div class="row align-items-center">';

// start of side links
echo '<div class="col-md-4 col-side-links pr-md-5">';

echo '<div class="row">';

echo '<div class="col-10">';

$sideLinksCounter = 0;
if(have_rows('titles_repeater')): while(have_rows('titles_repeater')): the_row(); 
$sideLinksCounter++;

echo '<div class="position-relative" style="margin-bottom:15px;">';

$link = get_sub_field('link');
if( $link ): 
$link_url = $link['url'];
$link_title = $link['title'];
$link_target = $link['target'] ? $link['target'] : '_self';

echo '<a class="text-white position-relative text-center about-side-links d-block w-100" href="' . esc_url( $link_url ) . '" target="' . esc_attr( $link_target ) . '" data-aos="fade-up" data-aos-delay="' . $sideLinksCounter . '50" style="">';

echo '<div class="position-absolute w-100 h-100 about-side-links-bg"  style="top:0;left:0;background:#87b7bd;"></div>';

echo '<div class="position-relative handel" style="padding:15px 0px;">';
echo esc_html( $link_title );
echo '</div>';

echo '</a>';
endif;
echo '</div>';
endwhile; else : endif;

echo '</div>';

echo '<div class="col-2">';
    echo '<div class="m-auto" style="height:100%;width:4px;background:var(--accent-primary);"></div>';
echo '</div>';

echo '</div>';

echo '</div>';
// <!-- end of side links -->

// <!-- start of content -->
echo '<div class="col-md-7 pl-md-5" data-aos="fade-up" data-aos-delay="100">';

the_field('content');

echo '</div>';
// <!-- end of content -->

echo '<div class="col-12" style="padding-top:100px;">';

echo wp_get_attachment_image(147,'full','',[
    'class'=>'w-100 h-auto',
    'style'=>''
]);

echo '</div>';

echo '</div>'; // end of row

echo '</div>'; // end of container


echo '</section>';

?>