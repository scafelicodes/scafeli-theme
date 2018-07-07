<?php /* Template Name: Blog Template */ ?>

<?php get_header(); ?>

<section class="top-pages">
  <div class="container text-center">
    <h1><?php the_title() ?></h1>
  </div>
</section>



<div class="container">

<!-- <h2 class="title-page"><?php the_title() ?></h2> -->

	<div class="row">
		<div class="col-md-8">
			<!-- <h1 class="ultimas">últimas</h1> -->
                <?php
                    $wp_query = new WP_Query();
                    query_posts( array( 'post_type' => 'post', 'showposts' => 5, 'paged'=>$paged ));
                    if(have_posts()):
                    while ($wp_query -> have_posts()) : $wp_query -> the_post();
                ?>

                <div class="post-preview">
                  

                  <div class="row">
                    
                    <div class="col-md-5">
                      <a href="<?php the_permalink();?>"><?php the_post_thumbnail('singlelist'); ?></a>
                    </div>

                    <div class="col-md-7">

                      <h3 class="post-title">
                        <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                      </h3>

                    
                                
                    <div class="excerpt"><?php the_excerpt(); ?></div>

                    </div>
                  
                  </div>
                        
                    
                            
                    
                </div>
                <?php endwhile; endif; ?>
                
                <!-- <ul class="pager">
                    <li class="previous"><?php next_posts_link('<span>Mais publicações</span>') ?></li>
                    <li class="next"><?php previous_posts_link('<span>Anteriores</span>') ?></li>
                </ul> -->

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

		
			<?php get_sidebar();?>
		
	</div>
</div>

</div>



<?php get_footer(); ?>