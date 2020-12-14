<?php /* Template Name: Blog Template */ ?>

<?php get_header(); ?>


<div class="container page-blog">

<div class="content-page">

  <h1 class="title-page"><?php the_title() ?></h1>

  <div class="row">

    <div class="col-md-9">

      <?php
      $wp_query = new WP_Query();
      query_posts(array(
        'post_type' => 'post',
        'showposts' => 3,
        'paged' => $paged
      ));
      if (have_posts()) :
        while ($wp_query->have_posts()) : $wp_query->the_post();
      ?>


          <div class="sp-list">
            <a href="<?php the_permalink(); ?>">

              <div class="row align-items-center">





                <div class="col-md-5">

                  <?php the_post_thumbnail('singlelist'); ?>

                </div>

                <div class="col-md-7">
                  <div class="desc-post">

                    <h3><?php the_title(); ?></h3>


                    <?php the_excerpt(); ?>





                  </div>
                </div>




              </div>



          </div>



      <?php endwhile;
      endif; ?>

      <div class="text-center">

        <?php
        global $wp_query;

        $big = 999999999; // need an unlikely integer

        echo paginate_links(array(
          'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
          'format' => '?paged=%#%',
          'current' => max(1, get_query_var('paged')),
          'total' => $wp_query->max_num_pages
        ));
        ?>

      </div>

    </div>

    <?php get_sidebar(); ?>

  </div>



</div>

</div>

</div>



<?php get_footer(); ?>