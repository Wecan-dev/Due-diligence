<?php get_header(); ?>
<div href="#" class="toTop"> ↑ </div>


<section class="education">
<h2>Due Diligence<br>
<span style="font-weight:600;">Blog</span>
</h2>
		<?php 
	$lang = get_bloginfo('language');
	if( $lang == 'es-CO'): ?>
	 <!-- ESPAÑOL -->
<p>Tips contables, tributarios y asesoramiento sobre ganancias que le ayudarán a entender las finanzas de su empresa.</p>
	<?php else: ?>
			  <!-- INGLES-->
	<p>Accounting, profit advisory and tax tips to help you understand your business finances.</p>
	 <?php endif; ?>

<div class="tab-education">





<ul class="nav nav-tabs">
<?php $wcatTerms = get_terms('category', array('hide_empty' => 0,'orderby' => 'id', 'exclude' => '552,550,661,665', 'parent' =>0)); 
                   foreach($wcatTerms as $wcatTerm) : ?>	
<li class="nav-item3">
  <a class="nav-link "   href="<?php echo get_term_link(  $wcatTerm->slug,  $wcatTerm->taxonomy );?>"><?php echo $wcatTerm->name; ?></a>
</li>
	<?php endforeach; ?>


<li class="nav-item3">
  <a><div id="search">
<i class="fa fa-search" id="search-icon"></i>
<form  action="<?php bloginfo('url'); ?>  method="get" ">
  <input type="search" id="search-input" name="search" autocomplete="off">
</form>
</div> </a>
</li>
</ul>
<div class="tab-content" id="myTabContent">
	<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      <div class=" card-blog">
<?php if ( have_posts ) :  ?>
<?php 
$args = array('posts_per_page' => 1,);
$query = new WP_Query( $args );?>

			<?php while( $query->have_posts()) : $query->the_post();?>
				 
			<div class="block-first">
				<div class="mancha7">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mancha6.png" alt="">
				</div>
					<div class="card-first">
						<div class="blog-item">
							<div class="img-card-principal">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-card.png">
							</div>
						</div>
					</div>
					<div class="text-blog">
						<?php the_category()?>
						<h3><?php the_title() ?> </h3>
						<?php the_excerpt() ?>
					</div>
			</div>
			 <?php  endwhile;  ?>
			

		<?php endif; ?>		

	
	
		
	
				 

			
      
			<div class="flex-blog">
				<div class="mancha8">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/triangulo1.png" alt="">
				</div>
	      
	
		
<?php 
$args = array('posts_per_page' => 2,);
$query = new WP_Query( $args );?>
 <?php if ( have_posts ) : ?>
			<?php while( $query->have_posts()) : $query->the_post();?>
				
				<a href="<?php the_permalink(); ?>">
				<div class="card-first">
					<div class="blog-item">
						<div class="img-card">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-card.png">
						</div>
						<div class="text-card_blog">
							<?php the_category()?>
							<h3><?php the_title() ?></h3>
								<?php the_excerpt() ?>
						</div>
					</div>
				</div>
					</a>
				<?php  endwhile;  ?> 
			<?php endif; ?>
			
			</div>
			<div class="flex-blog2 ">
			<div class="mancha9">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/triangulo2.png" alt="">
			</div>
			<div class="mancha10">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/triangulo1.png" alt="">
			</div>
		
	 <?php 
$args = array('posts_per_page' => -1,);
$query = new WP_Query( $args );?>
 <?php if ( have_posts ) : ?>
			<?php while( $query->have_posts()) : $query->the_post();?>
				<a href="<?php the_permalink(); ?>">
				<div class="blog-item">
					<div class="img-card">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/card2.png">
					</div>
					<div class="text-card_blog">
						<?php the_category()?>
						<h3><?php the_title() ?> </h3>
						<?php the_excerpt() ?>
					</div>
				</div>
					</a>
					<?php  endwhile; ?> 
				
<?php endif; ?>
			
			
			
			</div>
			<div class="" style="margin-top: 2%;">
				<a class="btn_custom2" href="#">LOAD MORE</a>
			</div>
		</div>
	</div>
	
	
	</div>
	
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

<p> Suscríbete a Due Diligence. Haremos un mes gratis de tu contabilidad y prepararemos un conjunto de estados financieros para que los conserves.</p>

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

<p>Subscribe to Due Diligence. We'll done one a free month of your bookkeeping and prepare a set of financial statements for you to keep. </p>

<div class="" style="margin-top: 2%;">
<a class="btn_custom2" href="#">GET STARTED</a>
</div>
</section>
 <?php endif; ?>     


	
<?php get_footer(); ?>

