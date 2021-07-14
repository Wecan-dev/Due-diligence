<?php get_header(); 
// get the current taxonomy term
$term = get_queried_object();


// vars
$image = get_field('imagen-banners-category', $term);
$text = get_field('text-category', $term)
?>

<div href="#" class="toTop"> ↑ </div>
<section class="header">
<div class="img-category">
	
     <img class="img-header__category" src="<?php echo $image; ?>">


</div>
	<div class="mask-category"></div>
	
<div class="text-header">
    <div class="back-to">
			<?php 
		$lang = get_bloginfo('language');
	    if( $lang == 'es-CO'): ?>
			  <!-- ESPAÑOL -->
		<a href="<?php bloginfo('url');?>/educacion"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/left-arrow.svg" alt=""> <p>Todos los artículos</p></a>
			<?php else: ?>
		<a href="<?php bloginfo('url');?>/education"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/left-arrow.svg" alt=""> <p>All articles</p></a>
 <?php endif; ?>
</div>
<div class="title-header">
    <?php the_category()?>
    <?php echo $text; ?>
</div>
</div>

</section>

<section class="articles articles__category">
<div style="padding-top: 5%; margin-top:0" class="flex-blog2 ">
			<div class="mancha9">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/triangulo2.png" alt="">
			</div>
			<div class="mancha10">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/triangulo1.png" alt="">
			</div>
	      
              
	  <?php

   if ( have_posts() ) :
      while ( have_posts() ) : the_post(); ?>
	<a href="<?php the_permalink(); ?>">
	<div class="blog-item">
					<div class="img-card">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>">
					</div>
					<div class="text-card_blog">
						<?php the_category()?>
						<a href="<?php the_permalink(); ?>"><h3><?php the_title() ?> </h3></a>
						<a href="<?php the_permalink(); ?>"><p>
							<?php the_excerpt() ?>
							</p>
						</a>
					</div>
				</div>
	</a>
			
	  <?php  endwhile; ?>
	
<?php endif; ?>
	  
			
				
		
			
            </div>
             <?php 
	$lang = get_bloginfo('language');
	if( $lang == 'es-CO'): ?>
	 <!-- ESPAÑOL -->
			<div class="content-education" style="margin-top: 2%;">
				<a class="btn_custom2" href="#">CARGAR MAS</a>
			</div>
		  <?php else: ?>
			  <!-- INGLES-->
		  <div class="content-education" style="margin-top: 2%;">
				<a class="btn_custom2" href="#">LOAD MORE</a>
			</div>
		  <?php endif; ?>
</section>

<section class="free">

<div class="mancha6">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mancha6.png" alt="">
</div>
<div class="mancha5">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mancha5.png" alt="">
</div>
	
	  <?php $args = array('post_type' => 'Banner suscripcion'); ?>
    <?php $loop = new WP_Query($args); ?>
    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
		<h4> <?php the_title(); ?></h4>

		<p> <?php the_content(); ?></p>

		<div class="" style="margin-top: 2%;">
			
	
			
			
			   <?php 
				$lang = get_bloginfo('language');
				if( $lang == 'es-CO'): ?>
				 <!-- ESPAÑOL -->
					<?php if ( get_field( 'seleccionar_tipo_de_boton_' ) == 1 ) : ?>
						<?php $popup = get_field( 'popup' ); ?>
							<?php if ( $popup ) : ?>
								<a  class="btn_custom2 btn-open-modal" data-toggle="modal"  href="<?php echo esc_url( $popup['url'] ); ?>" target="<?php echo esc_attr( $popup['target'] ); ?>"><?php echo esc_html( $popup['title'] ); ?></a>
							<?php endif; ?>
					<?php else : ?>
					<?php $enlace = get_field( 'enlace' ); ?>
					<?php if ( $enlace ) : ?>
						<a class="btn_custom2" href="<?php echo esc_url( $enlace['url'] ); ?>" target="<?php echo esc_attr( $enlace['target'] ); ?>"><?php echo esc_html( $enlace['title'] ); ?></a>
					<?php endif; ?>
					<?php endif; ?>
			
				
				<?php else: ?>
				<!-- INGLES-->
			
					<?php if ( get_field( 'select_type_button' ) == 1 ) : ?>
							<?php $popup_suscripbe = get_field( 'popup-suscripbe' ); ?>
							<?php if ( $popup_suscripbe ) : ?>
								<a class="btn_custom2 btn-open-modal" data-toggle="modal"  href="<?php echo esc_url( $popup_suscripbe['url'] ); ?>" target="<?php echo esc_attr( $popup_suscripbe['target'] ); ?>"><?php echo esc_html( $popup_suscripbe['title'] ); ?></a>
							<?php endif; ?>

					<?php else : ?>
			
						<?php $link_suscripbe = get_field( 'link-suscripbe' ); ?>
							<?php if ( $link_suscripbe ) : ?>
								<a class="btn_custom2"  href="<?php echo esc_url( $link_suscripbe['url'] ); ?>" target="<?php echo esc_attr( $link_suscripbe['target'] ); ?>"><?php echo esc_html( $link_suscripbe['title'] ); ?></a>
							<?php endif; ?>

					<?php endif; ?>
			
				<?php endif; ?>
			
			
		</div>
	
	 <?php endwhile; ?>
	
</section>
<?php get_footer(); ?>
