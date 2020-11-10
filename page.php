<?php get_header(); ?>

    <?php
      while (have_posts()) {
      the_post();
    ?>

    <div class="head--post text-center">
      <h2><?php the_title() ?></h2>
    </div>
 
    <div class="container marg-t-50">

        <div class="row justify-content-md-center">
            <div class="col-md-9 blog-space">
                
                <?php the_content(); ?>

            </div>
            
        </div>
        
    </div>

    <?php } ?>

<?php get_footer(); ?>