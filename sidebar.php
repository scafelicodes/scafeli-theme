<div class="col-md-4">


	<div class="about text-center">

		<img class="rounded-circle" src="<?php bloginfo('template_url') ?>/gustavoscafeli.jpg" alt="Gustavo Scafeli">
		<h3>Gustavo Scafeli</h3>
		<p>Lifestyle & Fashion Photographer</p>
		<a href="<?php bloginfo( 'url' ); ?>/contato" style="border:1px solid; display: inline-block; padding: 10px 20px; border-radius:4px ">Contato</a>
		<!-- 
		<a href=""><i class="fab fa-instagram"></i> instagram</a>
		<a href=""><i class="fab fa-facebook"></i> facebook</a>
		<a href=""><i class="fab fa-spotify"></i> spotify</a> -->

	</div>




<!-- <?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<a href="<?php the_permalink() ?>">
<div class="latest">
<?php the_post_thumbnail('singlelist'); ?>

<h3><?php the_title(); ?></h3>
</div>
</a>

<?php 
endwhile;
wp_reset_postdata();
?> -->
	



	<?php if ( dynamic_sidebar('sidebar_widgets') ) : else : endif; ?>
</div>