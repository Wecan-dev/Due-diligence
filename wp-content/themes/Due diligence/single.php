<?php get_header(); ?>
<div href="#" class="toTop"> ↑ </div>


<section class="header-two">
<div class="text-header">

<div class="title-header">
    <h2> <?php the_category()?></h2>
    <p><?php the_title() ?></p>
</div>
</div>
<div class="content-img__single">
	<?php $banner_single_blog = get_field( 'banner-single-blog' ); ?>
<?php if ( $banner_single_blog ) : ?>
	<img class="img-single" src="<?php echo esc_url( $banner_single_blog['url'] ); ?>" alt="<?php echo esc_attr( $banner_single_blog['alt'] ); ?>" />
<?php endif; ?>
	
	
</div>
</section>


<section class="interna-blog">
<h2><?php the_field( 'titulo-blog' ); ?></h2>

<div class="interna-flex">
<div class="box-info">
      <h6>Contents</h6>
      <p>Page 1: Lorem ipsum is simply dummy text of the printing</p>
      <p>Page 4: Lorem ipsum is simply</p>
      <p>Lorem / Ipsum is simply</p>
      <p>Page 3: Lorem Ipsum</p>
      <hr>
      <p>Lorem ipsum is simply</p>
      <p>Lorem ipsum </p>
</div>

<div class="text-interna">
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
<!--	<div class="box-aviso">
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
		</div> -->
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
  
</div>
</section>

<section class="free">

<div class="mancha6">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mancha6.png" alt="">
</div>
<div class="mancha5">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mancha5.png" alt="">
</div>
<h4>Want a free month of bookkeeping?</h4>

<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi adipisci nemo <br> esse, amet, maxime dolor, minus  tenetur molestiae <br> magnam omnis dolore!</p>

<div class="" style="margin-top: 2%;">
<a class="btn_custom2" href="#">GET STARTED</a>
</div>
</section>

<?php get_footer(); ?>

