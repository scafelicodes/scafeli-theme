<?php get_header(); ?>


<div class="single-post">
  
<?php
  while (have_posts()) {
  the_post();
?>

    <div class="container">

        <div class="content-page">

        <div class="row">
            <div class="col-md-9">

            <div class="content--post">
                
                <div class="head--post">

                <?php the_category(); ?>

                    <h2 class="title-post"><?php the_title() ?></h2>

                    <p>por <?php the_author(); ?> <i class="fas fa-check-circle"></i></p>


                </div>

                
                  <?php the_content(); ?>
                </div>      

        </div>

        <?php get_sidebar(); ?>
      

        </div>

        </div>
        
    </div>

<?php } ?>


</div>


<?php get_footer(); ?>