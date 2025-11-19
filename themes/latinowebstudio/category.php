<?php get_header(); ?>

<section class="body" style="padding:50px 0px;">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-md-8">

        <h1 style="padding:0px 15px;"><?php single_cat_title(); ?></h1>

        <div class="row">

        <?php
        $term = get_queried_object();
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $args = array(
          'posts_per_page' => 10,
          'post_type' => 'post',
          'paged' => $paged,
          'tax_query' => array(
            array(
              'taxonomy' => $term->taxonomy,
              'field'    => 'slug',
              'terms'    => $term->slug,
            )
          )
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
            get_template_part('partials/blogs-query');
          endwhile;
        ?>

        <!-- Pagination -->
        <div class="col-md-12 text-center pt-5 d-flex justify-content-center">
          <?php
          echo paginate_links(array(
            'total' => $query->max_num_pages,
            'current' => $paged,
            'show_all' => false,
            'prev_text' => '&#60;',
            'next_text' => '&#62;',
          ));
          ?>
        </div>

        <?php else : ?>
          <p style="padding: 15px;">No posts found in this category.</p>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>

        </div> <!-- .row -->
      </div> <!-- .col -->

      <?php get_template_part('partials/sidebar'); ?>

    </div> <!-- .row -->
  </div> <!-- .container -->
</section>

<?php get_template_part('partials/cta-block'); ?>
<?php get_footer(); ?>
