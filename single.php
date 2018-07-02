<?php get_header(); ?>

<?php
  while (have_posts()) {
  the_post();
?>

    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 pr-45 content-area">
                
                <div class="head-post">

                  <span class="cat"><?php
                    $category = get_the_category(); 
                    echo $category[0]->cat_name;
                    ?></span>

                    <h1 class="title-post"><?php the_title() ?></h1>

                  <span class="meta-post">Por <?php the_author_posts_link(); ?> em <?php the_time('j \d\e F \d\e Y') ?></span>

                </div>

                <div class="singlepostimg"><?php the_post_thumbnail('singlepost'); ?></div>

      <?php the_content(); ?>

        </div>
        

        <?php get_sidebar(); ?>


        </div>
        
    </div>

<?php } ?>

<?php get_footer(); ?>