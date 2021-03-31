<section class="clients">
	 <?php 
		$lang = get_bloginfo('language');
	    if( $lang == 'es-CO'): ?>
			  <!-- ESPAÑOL -->
	<h2>Lo que dicen los clientes acerca de Due Diligence </h2>
	<?php else: ?>
			  <!-- INGLES-->
<h2>What Customers Say about Due Diligence</h2>
	<?php endif; ?>
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
<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
</div>

<h5><?php the_title(); ?></h5>
<div class="card-text">
<?php the_content(); ?>
	
	</div>
</div>
<?php endwhile; ?>
	
	



</div>
</section>