<?php get_header(); ?>

<div class="container">

	<div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4000">
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="<?php bloginfo('template_url') ?>/fredy.jpg" alt="Fredy Miller">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="<?php bloginfo('template_url') ?>/yasmin.jpg" alt="Ingrid Carvalho">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="<?php bloginfo('template_url') ?>/lemerendi.jpg" alt="Leticia Merendi">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="<?php bloginfo('template_url') ?>/naan.jpg" alt="NAAN">
	    </div>
	  </div>
	   <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a> 
	</div>

</div>


<div class="container posts-home-area">

    <h1 class="area-title"> blog</h1>

                    <div class="row">



                        <?php
            $wp_query = new WP_Query();
            query_posts( array( 'post_type' => 'post', 'showposts' => 3, 'paged'=>$paged ));
            if(have_posts()):
            while ($wp_query -> have_posts()) : $wp_query -> the_post();
        ?>

            <div class="col-xl-4">
                
                <div class="post-home">

                    <a href="<?php the_permalink();?>"><?php the_post_thumbnail('singlelist'); ?></a>
            
                    <h4>
                        <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                    </h4>
                    <div class="excerpt"><?php the_excerpt(); ?></div>
                </div>
               
            </div>


            <?php endwhile; endif; ?>

    </div>  
    
</div>


                
<?php get_footer(); ?>