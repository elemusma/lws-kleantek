<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preload" href="/wp-content/themes/latinowebstudio/font-poppins/poppins-regular-webfont.woff" as="font" type="font/woff2" crossorigin="anonymous">
  <link rel="preload" href="/wp-content/themes/latinowebstudio/font-poppins/poppins-regular-webfont.woff2" as="font" type="font/woff2" crossorigin="anonymous">
<link rel="preload" href="/wp-content/themes/latinowebstudio/font-poppins/poppins-semibold-webfont.woff" as="font" type="font/woff2" crossorigin="anonymous">
  <link rel="preload" href="/wp-content/themes/latinowebstudio/font-poppins/poppins-semibold-webfont.woff2" as="font" type="font/woff2" crossorigin="anonymous">
	<link rel="preload" href="/wp-content/themes/latinowebstudio/font-poppins/poppins-bold-webfont.woff" as="font" type="font/woff2" crossorigin="anonymous">
  <link rel="preload" href="/wp-content/themes/latinowebstudio/font-poppins/poppins-bold-webfont.woff2" as="font" type="font/woff2" crossorigin="anonymous">
  <?php 
    echo codeHeader(); 
    wp_head(); 
  ?>
</head>
<body <?php body_class(); ?>>

  <?php echo codeBody(); ?>

  <div class="blank-space" style=""></div>

  <header class="header-nav w-100 position-fixed" style="top:0;left:0;z-index:10;padding:15px 0px;">
    <div class="position-absolute w-100 h-100" style="top:0;left:0;background:#021d47;opacity:.5;"></div>
    <div class="nav" style="">
      <div class="container">
        <div class="row justify-content-between align-items-center">

          <div class="col-lg-2 col-md-4 col-4 text-center" style="padding:0px;">
            <a href="<?php echo home_url(); ?>" title="<?php echo get_bloginfo( 'name' ) . ' - ' . get_bloginfo( 'description' ); ?>">
              <div id="logoMain" style="min-width:100px;width:100%;transition:all .25s ease-in-out;">
                <div style="pointer-events:none;">
                  <?php 
                  echo logoSVG(); 
                  // echo wp_get_attachment_image(logoImg()['id'], 'full', false, array( 'alt' => get_bloginfo( 'name' ) . ' - ' . get_bloginfo( 'description' ), 'style' => 'width:100%;height:auto;' ));
                  // echo logoImg()['id'];
                  // echo print_r(logoImg());
                  ?>
                </div>
              </div>
            </a>
          </div>
<div class="col-1 mobile-hidden"></div>
        <div class="col-7 text-center mobile-hidden">
			  <div class="d-flex justify-content-end h-100">
            <?php
              wp_nav_menu(array(
                'menu' => 'primary',
                'menu_class' => 'menu list-unstyled mb-0 d-flex'
              ));
            ?>
            <div style="padding:0 9px;" class="text-white">
              <?php echo do_shortcode('[global_phone]'); ?>
            </div>
			  </div>
          </div>
          

          <div class="col-3 text-center desktop-hidden">
				            <div class="">
              <a id="mobileMenuToggle" class="openModalBtnCustom nav-toggle" data-modal-id="mobileMenu" title="mobile menu nav toggle for <?php echo get_bloginfo( 'name' ) . ' - ' . get_bloginfo( 'description' ); ?>">
                <div style="padding:10px 0px;">
                  <div class="line-1 bg-accent"></div>
                  <div class="line-2 bg-accent"></div>
                  <div class="line-3 bg-accent"></div>
                </div>
              </a>

            </div>
			</div>
      <div class="col-lg-2 col-5" style="padding-left:0px;">
            <?php echo do_shortcode('[book_online_button]'); ?>
            <div style="margin-left:15px;">
      
		<!-- <a class="d-flex align-items-center phone small" role="button" href="tel:+1<?php echo globalPhone(); ?>" style="" target="" id="">
<svg fill="" style="height:15px;width:15px;margin-right:10px;" id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 420 417">
  <g id="Layer_1-2" data-name="Layer 1">
    <g>
      <path d="M101.7,62.6c13.02,12.64,29.74,28.29,41.38,41.77,24.86,28.78-11.76,49.9-29.55,69.1-5.93,6.4-3.31,8.95-.04,15.92,7.69,16.42,21.12,33.72,33.07,47.33,23.96,27.3,53.38,52.7,86.91,67.44,2.11.28,3.7-1.06,5.25-2.27,20.84-16.42,40.24-57.45,70.92-30.98,18.3,15.8,35.33,36.68,52.83,53.54,17.17,24.99-11.04,44.01-26.89,59.82-10.66,10.63-15.36,16.85-30.92,21.02-6.28,1.68-17.13,2.63-23.79,1.76-.92-.12-.64-.93-1.06-1.03-2.05-.48-5.22-.23-7.33-.57-56.76-9.31-120.64-51.61-161.56-91.14-44.54-43.03-91.29-109.94-102.38-171.79-1.39-7.73-2.63-19.39-1.6-27.43.11-.87.89-.7.99-1.11,2.62-10.37,3.49-15.97,10.56-24.68,10.84-13.35,27.21-26.31,39.56-38.46,18.57-11.35,30.75-.74,43.64,11.77Z"/>
      <path d="M217.11,7.65c5.81,2.46,15.03,3.27,21.72,4.97,80.55,20.5,143.36,85.38,164.04,165.56,1.01,3.92,1.42,8.8,2.46,12.54.34,1.24,2,1.69,1.18,4.04l-28.8,4.81-2.11-.36c-.23-4.01-1.22-8.12-2.19-12.04-18.27-73.68-75.84-130.15-150.06-146.58-4.57-1.01-9.32-1.5-13.89-2.6l3.78-30.5c1.21.15,2.73-.32,3.86.16Z"/>
      <path d="M291.96,131.53c16.95,18.94,28.17,42.08,33.19,67,.1,1.29-.74,1.83-1.89,2.12-7.2,1.77-16.78,2.73-24.24,3.72-1.33.18-2.5,1.43-4.05.44-5.12-28.8-22.35-54.72-46.8-70.67-12.91-8.42-27.54-13.53-42.69-16.24l3.53-28.99c.18-.31.42-.6.75-.76,1.25-.63,13.19,1.9,15.5,2.49,24.62,6.26,49.83,22.04,66.71,40.91Z"/>
    </g>
  </g>
</svg> <?php echo globalPhone(); ?></a> -->
</div>
          </div>

        </div> <!-- end of row -->
      </div>
    </div>
  </header>