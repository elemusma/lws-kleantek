<?php 
/**
 * Template Name: Areas of Expertise
 */
get_header(); 

$posts_page_id = get_option( 'page_for_posts' );
$posts_page_title = get_the_title( $posts_page_id );
// echo '<section class="bg-light" style="">';
// echo '<div class="container">';
// echo '<div class="row align-items-center">';

// echo '<div class="col-lg-6 col-md-12">';
// echo '<h1 class="h4" style="padding:1rem 0rem;line-height:1.5;">' . $posts_page_title . ' » </h1>';
// echo '</div>';
// echo '<div class="col-lg-6 col-md-12">';
// echo '<span class="" style="padding:1rem 0rem;line-height:1.5;"><a href="/">Home</a> » <a href="/blog/">Blog</a> » ' . get_the_title() . '</span>';
// echo '</div>';
// echo '</div>';
// echo '</div>';
// echo '</section>';




// echo '<h1 class="text-center" style="margin-bottom:0;line-height:1.5;">' . get_the_title() . '</h1>';
// echo '<p class="text-center" style="margin:0px;">' . get_the_time('F jS, Y') . '</p>';

// echo get_the_post_thumbnail(null, 'full', array(
//     'class' => 'w-100 h-auto',
//     'style' => ''
// ));

?>
<section>
<div class="container" style="padding:50px 0px;">
<div class="row">
<div class="col-lg-9">
<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else:
echo '<p>Sorry, no posts matched your criteria.</p>';
endif;
	?>
	</div>
	<?php
get_template_part('partials/sidebar'); ?>
</div>
</div>
</section>

<section class="bg-light" id="expert-witness">
<div class="container" style="padding: 75px 0px;">
<div class="row justify-content-center">
<div class="col-lg-9 text-center">
<h2>
	How to Get Started
	</h2>
	<p>If you’re a <strong>lawyer or litigator</strong> looking to get <strong>clear insights on complex technical evidence</strong> – Call <a href="tel:+1(720) 593-1640">(720) 593-1640</a> or send a message and Discovery Engineering will <strong>discuss your specific needs</strong> to see if our <strong>expert witness testimony services</strong> are a good fit for your case.</p>
	<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
</div>
</div>
</div>
</section>
<?php

echo '<section class="body" style="padding:50px 0px;">';
echo '<div class="container">';
// echo '<div class="row justify-content-center">';

// echo '<div class="col-lg-9 col-md-12 order-1">';
// echo '</div>';
// get_template_part('partials/sidebar');
// <div class="col-lg-3">
// </div>
// echo '</div>';
echo '<div class="row justify-content-center pt-5">';
echo '<div class="col-md-6" id="previous">';
echo '<small>Previous</small>';
echo '<h3 class="h5">' . get_previous_post_link() . '</h3>';
echo '</div>';
echo '<div class="col-md-6 text-right" id="next">';
echo '<small>Next</small>';
echo '<h3 class="h5">' . get_next_post_link() . '</h3>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';

get_footer(); ?>