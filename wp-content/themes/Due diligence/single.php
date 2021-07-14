<?php get_header(); ?>
<?php $category_id = get_queried_object_id();?>
<div href="#" class="toTop"> ↑ </div>


<section class="header-two">
<div class="text-header">

<div class="title-header">
	
    <h2 class="main-category__single"> <?php the_category()?></h2>
    <p><?php the_title() ?></p>
</div>
</div>
<div class="content-img__single">
	
	<?php $banner_single_blog = get_field( 'banner-single-blog' ); ?>
<?php if ( $banner_single_blog ) : ?>
	<img class="img-single" src="<?php echo esc_url( $banner_single_blog['url'] ); ?>" alt="<?php echo esc_attr( $banner_single_blog['alt'] ); ?>" />
<?php endif; ?>
	
	
</div>
	<div class="mask-single"></div>
</section>


<section class="interna-blog">
<h2><?php the_field( 'titulo-blog' ); ?></h2>

<div class="interna-flex">
<div class="box-info">
	
	 <?php 
		$lang = get_bloginfo('language');
	    if( $lang == 'es-CO'): ?>
			  <!-- ESPAÑOL -->
      <h6>Contenido</h6>
		 <?php else: ?>
			  <!-- INGLES-->
		<h6>Contents</h6>
	  <?php endif; ?>	
      
	
	<?php 
	$categories = get_the_category();
$category_id = $categories[0]->cat_ID;
	
$args = array('cat' => $category_id);
$query = new WP_Query( $args );?>
			<?php while( $query->have_posts()) : $query->the_post();?>
     <a href="<?php the_permalink(); ?>"> <p><?php the_title(); ?></p></a>
     <?php endwhile; ?>
</div>

<div class="text-interna">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<p>
				<small>
					<?php $lang = get_bloginfo('language'); if( $lang == 'es-CO'): ?> Por <?php else: ?> By <?php endif; ?>
					
					
					<?php the_author(); ?> , <?php the_date(); ?>
				</small>
			</p>
	
	
<?php if ( have_rows( 'content-blog' ) ) : ?>
	<?php while ( have_rows( 'content-blog' ) ) : the_row(); ?>
		<?php if ( have_rows( 'section-1' ) ) : ?>
			<?php while ( have_rows( 'section-1' ) ) : the_row(); ?>
				<?php the_sub_field( 'text-blog' ); ?>
				<?php the_sub_field( 'video' ); ?>
			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
		<?php if ( have_rows( 'section-2' ) ) : ?>
			<?php while ( have_rows( 'section-2' ) ) : the_row(); ?>
				<?php the_sub_field( 'text-pdf-1' ); ?>
				<?php $imagen_pdf = get_sub_field( 'imagen-pdf' ); ?>
				<?php if ( get_sub_field( 'imagen-blog' ) ) : ?>
					<img src="<?php the_sub_field( 'imagen-blog' ); ?>" />
				<?php endif ?>
				
			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
		<?php the_sub_field( 'section-3' ); ?>
		<?php if ( have_rows( 'section-cta' ) ) : ?>
	

			<div class="box-aviso">
			<?php while ( have_rows( 'section-cta' ) ) : the_row(); ?>
			<?php $imagen_cta = get_sub_field( 'imagen-cta' ); ?>
		 		<div class="box-img">
				 <?php if ( $imagen_cta ) : ?>
				 	<img src="<?php echo esc_url( $imagen_cta['url'] ); ?>" alt="<?php echo esc_attr( $imagen_cta['alt'] ); ?>" />
				 <?php endif; ?>
				</div>
			   <div class="box-text">
				   <?php if ( have_rows( 'Contenido-cta' ) ) : ?>
				   <div class="mancha11">
					   <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mancha1.png" alt="">
				   </div>
				   <div class="mancha12">
					   <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mancha1.png" alt="">
				   </div>
				   <?php while ( have_rows( 'Contenido-cta' ) ) : the_row(); ?>
				   <h3><?php the_sub_field( 'titulo-cta' ); ?></h3>
				   <?php the_sub_field( 'text-cta' ); ?>
				   <?php $Boton_cta = get_sub_field( 'Boton-cta' ); ?>
				   <?php if ( $Boton_cta ) : ?>
				   <div class="" style="margin-top: 2%;">
					   <a style="background:#fff; color:#000" class="btn_custom2"  href="<?php echo esc_url( $Boton_cta) ; ?>">
						   LOAD MORE
					   </a>
				   </div>
				   <?php endif; ?>
				   <?php endwhile; ?> 
				   <?php else : ?>
				   <?php // no rows found ?>
				   <?php endif; ?>
			
				<?php endwhile; ?>
			 </div> 
		</div> 
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>

<!-- <h5>MORE PPP resources</h5> -->
<!--  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est similique</p> -->
 <!--    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est similique</p> -->
 <!--    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est similique</p> -->
<!--     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est similique</p> -->
</div>
	  <?php endwhile; else : ?>
  
  <?php endif; ?>
  
</div>
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

<style>
	.main-category__single ul.post-categories li a{
		position: relative;
	}
</style>

<?php $lang = get_bloginfo('language');
if( $lang == 'es-CO'): ?>
<!-- ESPAÑOL -->
<style>
.main-category__single ul.post-categories li a:before{
	position: absolute;
	content:'< Volver a categoría';
	top: -3rem;
	left:0;
	font-size: 1rem;
	color: #fff;
	
}

</style>

<?php else: ?>
<style>

.main-category__single ul.post-categories li a:before{
	position: absolute;
	content:'< Back to category';
	top: -3rem;
	left:0;
	font-size: 1rem;
	color: #fff;
	
}

</style>

<?php endif; ?>
