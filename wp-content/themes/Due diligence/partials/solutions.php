<section id="solutions" class="solutions">
<div class="title-flex">
<div class="icon-pricing">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" alt="">
</div>
	<?php 
	$lang = get_bloginfo('language');
	if( $lang == 'es-CO'): ?>
	 <!-- ESPAÑOL -->
<h2>
Soluciones</h2>
 <?php else: ?>
			  <!-- INGLES-->
	<h2>Solutions</h2>
	 <?php endif; ?>
</div>
<div class="line-pricing">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/line24.png" alt="">
</div>
<div class="p-text">
	  <?php 
		$lang = get_bloginfo('language');
	    if( $lang == 'es-CO'): ?>
			  <!-- ESPAÑOL -->
  <p> 
Incluye contabilidad en línea subcontratada, en tiempo real, con un equipo de contabilidad dedicado disponible.</p>
	 <?php else: ?>
			  <!-- INGLES-->
	<p>  Includes out-sourced, real-time, online bookkeeping, with an available dedicated accounting team.</p>
	  <?php endif; ?>
	</div>
<div class="flex-solutions  ">
	<?php $args = array( 'post_type' => 'Solutions', ); ?>
	<?php $loop = new WP_Query( $args ); ?>
	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<div class="solutions-item">
  <div class="solutions-img">
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
  </div>
  <h5><?php the_title(); ?></h5>
  <?php the_content(); ?>
</div>
<?php endwhile; ?>




</div>
<div class="btn-center" style="margin-top: 2%;">
	 <?php 
		$lang = get_bloginfo('language');
	    if( $lang == 'es-CO'): ?>
			  <!-- ESPAÑOL -->
<a class="btn_custom2" href="#">EMPEZAR AHORA</a>
	<?php else: ?>
	<a class="btn_custom2" href="#">Let's start now</a>
	 <?php endif; ?>
</div>
</section>
