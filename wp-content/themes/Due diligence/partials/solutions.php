<?php wp_reset_postdata();?>
<section id="solutions" class="solutions">
<div class="title-flex">
<div class="icon-pricing">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" alt="">
</div>
	<h2><?php the_field( 'title_solutions' ); ?><h2>
</div>
<div class="line-pricing">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/line24.png" alt="">
</div>
<div class="p-text">
	    <p><?php the_field( 'description_solutions' ); ?></p>
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
<?php endwhile; wp_reset_postdata(); ?>




</div>
<div class="btn-center" style="margin-top: 2%;">
	
		<?php 
		$lang = get_bloginfo('language');
	    if( $lang == 'es-CO'): ?>
		<!-- ESPAÑOL -->
	
		<?php if ( get_field( 'seleccione_tipo_de__boton_soluciones' ) == 1 ) : ?>
			<?php $popup_de_soluciones = get_field( 'popup_de_soluciones' ); ?>
			<?php if ( $popup_de_soluciones ) : ?>
				<a class="btn_custom2 btn-open-modal" data-toggle="modal" href="<?php echo esc_url( $popup_de_soluciones['url'] ); ?>" target="<?php echo esc_attr( $popup_de_soluciones['target'] ); ?>"><?php echo esc_html( $popup_de_soluciones['title'] ); ?></a>
			<?php endif; ?>
	
	
		<?php else : ?>
		<?php $enlace_soluciones = get_field( 'enlace_soluciones' ); ?>
		<?php if ( $enlace_soluciones ) : ?>
			<a class="btn_custom2 btn-open-modal"  href="<?php echo esc_url( $enlace_soluciones['url'] ); ?>" target="<?php echo esc_attr( $enlace_soluciones['target'] ); ?>"><?php echo esc_html( $enlace_soluciones['title'] ); ?></a>
		<?php endif; ?>
	
		<?php endif; ?>
	
	
		
		<?php else: ?>
			<?php if ( get_field( 'select_solutions_type' ) == 1 ) : ?>
				<?php $buttom_solutions = get_field( 'buttom_solutions' ); ?>
			<?php if ( $buttom_solutions ) : ?>
				<a class="btn_custom2 btn-open-modal" data-toggle="modal" href="<?php echo esc_url( $buttom_solutions['url'] ); ?>" target="<?php echo esc_attr( $buttom_solutions['target'] ); ?>"><?php echo esc_html( $buttom_solutions['title'] ); ?></a>
			<?php endif; ?>
	
	
			<?php else : ?>
				<?php $link_solutions = get_field( 'link_solutions' ); ?>
				<?php if ( $link_solutions ) : ?>
					<a class="btn_custom2 btn-open-modal" href="<?php echo esc_url( $link_solutions['url'] ); ?>" target="<?php echo esc_attr( $link_solutions['target'] ); ?>"><?php echo esc_html( $link_solutions['title'] ); ?></a>
				<?php endif; ?>
			<?php endif; ?>
	
	
 		<?php endif; ?>
	


	
	
	
</div>
</section>
	

