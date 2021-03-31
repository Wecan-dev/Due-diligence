<?php get_header(); 

?>

<div href="#" class="toTop"> ↑ </div>


<section class="header">
	
<div class="img-category">
	
     <img class="img-header__category" src=" ">


</div>	
	
<div class="text-header">
    <div class="back-to">
<a href="<?php bloginfo('url');?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/left-arrow.svg" alt=""> <p>All articles</p></a>
</div>
<div class="title-header">
    <?php the_category()?>
    <p>Small business accounting tips <br> without the jargon</p>
</div>
</div>

</section>

<section class="articles">
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
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/ar1.png">
					</div>
					<div class="text-card_blog">
						<?php the_category()?>
						<h3> <?php the_title() ?></h3>
						<?php the_excerpt() ?>
					</div>
				</div>
	</a>
			
	  <?php  endwhile; ?>
	
<?php endif; ?>
	  
			
				
		
			
            </div>
            <div class="" style="display: flex; justify-content: center; margin-top: 2%;">
				<a class="btn_custom2" href="#">LOAD MORE</a>
			</div>
</section>


<?php 
		$lang = get_bloginfo('language');
	    if( $lang == 'es-CO'): ?>
			  <!-- ESPAÑOL -->

<section class="free">

<div class="mancha6">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mancha6.png" alt="">
</div>
<div class="mancha5">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mancha5.png" alt="">
</div>
<h4> Quieres un mes gratis de contabilidad?</h4>

<p> Suscríbete a Due Diligence. Haremos un mes gratis de tu contabilidad y prepararemos <br> un conjunto de estados financieros para que los conserves.</p>

<div class="" style="margin-top: 2%;">
<a class="btn_custom2" href="#">EMPEZAR</a>
</div>
</section>
<?php else: ?>
			  <!-- INGLES-->
<section class="free">

<div class="mancha6">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mancha6.png" alt="">
</div>
<div class="mancha5">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mancha5.png" alt="">
</div>
<h4> Want a free month of Accounting?</h4>

<p>Subscribe to Due Diligence. We'll done one a free month of your bookkeeping and prepare  <br>  a set of financial statements for you to keep. </p>

<div class="" style="margin-top: 2%;">
<a class="btn_custom2" href="#">GET STARTED</a>
</div>
</section>
<?php endif; ?>
<?php get_footer(); ?>
