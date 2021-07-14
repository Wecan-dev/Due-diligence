<section id="works" class="how">
	<h2><?php the_field( 'title_function' ); ?></h2>
<div class="linea2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/linea22.png" alt=""></div>
<div class="main-works__flex">
	<div class="how-flex">
	<?php $args = array( 'post_type' => 'Nuestros trabajos', ); ?>
	<?php $loop = new WP_Query( $args ); ?>
	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<div class="how-items">
<div class="how-center">
<div class="border-icon">
<div class="how-icon">
<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
</div>
</div>
</div>
<div class="how-tittle"><h5><?php the_title(); ?></h5></div>
<div>  <?php the_excerpt(); ?></div>

</div>
<?php endwhile;
		wp_reset_postdata();
		?>



</div>
	</div>

</section>