<?php get_header(); ?>


<section>
  <div class="container">
    <p class="lead">Um estúdio criativo que atende as melhores marcas e pessoas do mundo desde 2014.</p>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <p class="lead">Passamos da marca de 300 clientes atendidos e mais de 800 milhões de pessoas impactadas pelo nosso trabalho.</p>

        <p class="lead">É apenas o começo.</p>

        <a href="#">Conheça nossos planos</a>
      </div>
    </div>
  </div>
</section>

<div class="container">

<div class="row">

                <?php
                    $wp_query = new WP_Query();
                    query_posts( array( 'post_type' => 'post', 'showposts' => 4, 'paged'=>$paged ));
                    if(have_posts()):
                    while ($wp_query -> have_posts()) : $wp_query -> the_post();
                ?>
                  

                  <div class="col-md-3">
                    
                    <div class="post--pre">

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
</div>

                
<?php get_footer(); ?>