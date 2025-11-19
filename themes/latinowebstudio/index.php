<?php

get_header();

// Fetch the posts page title for the header
$posts_page_id = get_option('page_for_posts');
$posts_page_title = get_the_title($posts_page_id);
?>

<!-- <div class="col-12 text-center text-white" style="padding-top:25px;padding-bottom:25px;background:#1E2D34;">

</div> -->

<section class="body" style="padding:50px 0;">
    <div class="position-absolute w-100 h-100" style="clip-path: polygon(100% 0, 0 0, 100% 100%);
background: #FFF;
background: linear-gradient(30deg, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 1) 25%, rgba(163, 29, 33, 0.5) 50%, rgba(163, 29, 33, 0.75) 75%, rgba(163, 29, 33, 1) 100%);
background: #FFF;
background: linear-gradient(25deg, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 1) 60%, rgba(163, 29, 33, 1) 100%);
top:0;
left:0;"></div>
    <div class="container">
        <div class="row">
			<div class="col-12">
                <div style="padding-left:15px;">
                    <h1><?php echo esc_html($posts_page_title); ?></h1>
                </div>
			</div>
<div class="col-md-9 order-1 d-flex flex-wrap">
            <?php
            if (have_posts()) :
                $counterBlog = 0;
                while (have_posts()) : the_post();
                    $counterBlog++;
                    if ($counterBlog > 2) {
                        $counterBlog = 1; // Reset counter for delay calculation
                    }

                    ?>

                    <?php echo get_template_part('partials/blogs-query'); ?>
                    
            <?php
                endwhile;

                echo '<div class="col-12 d-flex justify-content-center pt-4">';
                the_posts_pagination(array(
                    'mid_size' => 2, // Reduced mid_size to show fewer page numbers
                    'prev_text' => __('Previous Page', 'textdomain'),
                    'next_text' => __('Next Page', 'textdomain'),
                ));
                echo '</div>';

            else : ?>
                <div class="col-12"><p><?php echo esc_html__('No posts found.', 'textdomain') ?></p></div>
<?php           
	endif;
            ?>
			</div>
			<?php echo get_template_part('partials/sidebar'); ?>
        </div>
    </div>
</section>

<?php get_template_part('partials/cta-block'); ?>

<?php get_footer(); ?>