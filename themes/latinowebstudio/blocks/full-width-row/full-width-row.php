<?php

// start of full width row
echo '<section class="pt-5 pb-5 position-relative">';

$fullWidthRowBgImg = get_field('full_width_row_bg_img');
echo wp_get_attachment_image($fullWidthRowBgImg['id'],'full','',[
    'class'=>'w-100 h-100 position-absolute bg-img',
    'style'=>'object-position:top;'
]);

$fullWidthRowBgImgCol1 = get_field('full_width_row_bg_img_1');
echo wp_get_attachment_image($fullWidthRowBgImgCol1['id'],'full','',[
    'class'=>'w-100 h-100 position-absolute bg-img img-full-width-row-bg',
    'style'=>'object-position:top;',
    'id'=>'imgFullWidthRowCol1'
]);

$fullWidthRowBgImgCol2 = get_field('full_width_row_bg_img_2');
echo wp_get_attachment_image($fullWidthRowBgImgCol2['id'],'full','',[
    'class'=>'w-100 h-100 position-absolute bg-img img-full-width-row-bg',
    'style'=>'object-position:top;',
    'id'=>'imgFullWidthRowCol2'
]);

$fullWidthRowBgImgCol3 = get_field('full_width_row_bg_img_3');
echo wp_get_attachment_image($fullWidthRowBgImgCol3['id'],'full','',[
    'class'=>'w-100 h-100 position-absolute bg-img img-full-width-row-bg',
    'style'=>'object-position:top;',
    'id'=>'imgFullWidthRowCol3'
]);

$mobileImage = get_field('mobile_image');
echo wp_get_attachment_image($mobileImage['id'],'full','',[
    'class'=>'w-100 h-100 position-absolute bg-img d-lg-none d-block',
    'style'=>'object-position:80% 50%;',
    'id'=>''
]);

echo '<div class="container-fluid">';
echo '<div class="row">';

$counterFullWidthRow=0;
if(have_rows('full_width_row_columns')): 
while(have_rows('full_width_row_columns')): 
$counterFullWidthRow++;
the_row();

echo '<div class="col-lg-4 col-md-6 text-white text-center col-full-width-row" style="padding-top:300px;padding-bottom:300px;padding-left: 0px;padding-right: 0px;" id="fullWidthRowCol' . $counterFullWidthRow . '">';

echo '<div class="position-absolute col-full-width-row-border"></div>';

echo '<div class="position-absolute col-full-width-row-background"></div>';

echo '<div class="position-relative w-100" style="padding-top:25px;padding-bottom:25px;">';

echo '<div class="position-absolute w-100 h-100" style="background:#b9764c;opacity:.51;top:0;left:0;transition:all .25s ease-in-out;"></div>';

echo '<div class="position-relative">';

echo '<h6 class="" style="margin:0;">' . get_sub_field('pretitle') . '</h6>';
echo '<h3 class="" style="margin:0;">' . get_sub_field('title') . '</h3>';

echo '</div>';
echo '</div>';
echo '</div>';
endwhile; 
endif;
echo '</div>';
echo '</div>';
echo '</section>';
// end of full width row

wp_enqueue_script('full-width-row-js', get_theme_file_uri('/js/full-width-row.js'));

?>