<?php /* Template Name: Portfolio Template */ ?>

<?php get_header(); ?>

  <div class="container">

    <div class="head--post text-center">
      <h2><?php the_title() ?></h2>
      <p>Aqui estão os meus últimos trabalhos publicados.</p>
    </div>

  </div>




<div class="container-fluid">

<div class="row">

                <?php
                    $wp_query = new WP_Query();
                    query_posts( array( 'post_type' => 'post', 'showposts' => 4, 'paged'=>$paged, 'category_name' => 'portfolio' ));
                    if(have_posts()):
                    while ($wp_query -> have_posts()) : $wp_query -> the_post();
                ?>
                  

                  <div class="col-md-3">
                    
                    <div class="post--pre text-center">

                    <a href="<?php the_permalink();?>">

                    <?php
                    
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail('singlelist');
                    }
                    else {
                        echo '<img src="https://via.placeholder.com/500x650.png" />';
                    }
                    ?>

                      <h3 class="post-title">
                        <?php the_title(); ?>
                      </h3>

                      </a>
                    </div>  
                    
                </div>
                <?php endwhile; endif; ?>
                
    

                </div>
<div class="text-center">

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

</div>

</div>



<?php get_footer(); ?>