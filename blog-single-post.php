<?php 

/*
 * Template Name: Blog Article
 * Template Post Type: post
 */

get_header(); ?>


<?php
  while (have_posts()) {
  the_post();
?>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-9">
                
                <div class="head--post text-center">

                  <span class="cat"><?php
                    $category = get_the_category(); 
                    echo $category[0]->cat_name;
                    ?></span>

                    <h2 class="title-post"><?php the_title() ?></h2>

                    <span class="meta-single"><?php the_time('j \d\e F \d\e Y') ?></span>


                </div>

                <div class="content--post">
                  <?php the_content(); ?>
                </div>


      

        </div>
      

        </div>
        
    </div>

<?php } ?>

<?php get_footer(); ?>