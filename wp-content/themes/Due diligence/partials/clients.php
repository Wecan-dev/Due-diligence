<section class="clients">
	 <h2><?php the_field( 'title_testimonials' ); ?></h2>
<div class="linea2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/linea25.png" alt=""></div>
<div class="mancha"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/mancha1.png" alt=""></div>
<div class="mancha2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/mancha.png" alt=""></div>
<div class="multiple-items container">
	<?php $args = array( 'post_type' => 'Clientes', ); ?>
	<?php $loop = new WP_Query( $args ); ?>
	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<div class="client-card">
<div class="circle1"></div>
<div class="client-img">
	<div class="main-clients__img">
		<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
	</div>

</div>

<h5><?php the_title(); ?></h5>
<div class="card-text">
<?php the_content(); ?>
	
	</div>
</div>
<?php endwhile; wp_reset_postdata(); ?>
	
	



</div>
</section>