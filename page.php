<?php get_header(); ?>

    <?php
      while (have_posts()) {
      the_post();
    ?>

    <div class="container">

        <div class="content-page">

        <div class="row">
            <div class="col-md-9 blog-space">

            <h2><?php the_title() ?></h2>
                
                <?php the_content(); ?>

            </div>
            
            <?php get_sidebar(); ?>
            
        </div>

        </div>
        
    </div>

    <?php } ?>

<?php get_footer(); ?>