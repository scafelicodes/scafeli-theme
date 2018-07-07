<?php get_header(); ?>

    <?php
      while (have_posts()) {
      the_post();
    ?>


    <section class="top-pages">
  <div class="container text-center">
    <h1><?php the_title() ?></h1>
  </div>
</section>


    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 pr-45 blog-space">
                
                <?php the_content(); ?>

            </div>
            
            <?php get_sidebar(); ?>

        </div>
        
    </div>

    <?php } ?>

<?php get_footer(); ?>