<?php get_header(); ?>


<section class="presentation">
	<div class="container">
		<h1>fashion <br> photographer</h1>

		<p><i class="fas fa-map-marker-alt"></i> Rio de Janeiro, Brazil</p>
	</div>
</section>



<!-- <div class="container">

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

</div> -->


<section class="sec-light services">
	<div class="container text-center">
		<div class="row">
			<div class="col-md-3">
				<h3>ensaios</h3>
				<a href="#"><i class="fas fa-angle-right"></i> ver valores</a>
			</div>
			<div class="col-md-3">
				<h3>lookbook</h3>
				<a href="<?php bloginfo( 'url' ); ?>/contato"><i class="fas fa-angle-right"></i> solicitar orçamento</a>
			</div>
			<div class="col-md-3">
				<h3>publicidade</h3>
				<a href="<?php bloginfo( 'url' ); ?>/contato"><i class="fas fa-angle-right"></i> solicitar orçamento</a>
			</div>
			<div class="col-md-3">
				<h3>e-commerce</h3>
				<a href="<?php bloginfo( 'url' ); ?>/contato"><i class="fas fa-angle-right"></i> solicitar orçamento</a>
			</div>
		</div>
	</div>
</section>


<div class="container posts-home-area">

    <h1 class="area-title">últimos posts</h1>

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