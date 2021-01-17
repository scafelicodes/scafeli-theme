<?php get_header(); ?>


<div class="container">

<div class="content-page">
    
    <div class="header-blog">
        <h1 class="title-base"><?php single_cat_title(); ?></h1>
        <?php
        // Display optional category description
        if ( category_description() ) : ?>
        <div class="archive-meta"><?php echo category_description(); ?></div>
        <?php endif; ?>

	</div>


    


        <div class="row">
            <div class="col-md-8">
            
            <?php 
    // Check if there are any posts to display
    if ( have_posts() ) : ?>

            <?php
            while ( have_posts() ) : the_post(); ?>
 
            
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


</a>
          </div>

       
                

             
<?php endwhile; // End Loop
 
else: ?>
<p>Desculpe, ainda não temos conteúdo nessa categoria.</p>
<?php endif; ?>

            </div>

        <?php get_sidebar();?>

        </div>

        


        </div>
        	

</div>


<div class="container content text-center">

<?php
global $wp_query;

$big = 999999999; // need an unlikely integer

echo paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $wp_query->max_num_pages
) );
?>

</div>

<?php get_footer(); ?>