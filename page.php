<?php get_header(); ?>

    <?php
      while (have_posts()) {
      the_post();
    ?>

    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 pr-45 blog-space">

                <h2 class="title-page"><?php the_title() ?></h2>
                <?php the_content(); ?>

            </div>
            
            <?php get_sidebar(); ?>

        </div>
        
    </div>

    <?php } ?>

<?php get_footer(); ?>