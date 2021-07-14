<?php get_header() ?>		


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
	  	<?php 
			$lang = get_bloginfo('language');
			if( $lang == 'es-CO'): ?>
			<!-- ESPAÑOL -->
			 <form  action="http://159.89.229.55/Due-diligence/es/"  method="get" >
			  <input type="search" id="search-input" name="s" autocomplete="off">
			</form>
			 <?php else: ?>
			 <!-- INGLES-->
				<form  action="<?php bloginfo('url'); ?>"  method="get" >
				  <input type="search" id="search-input" name="s" autocomplete="off">
				</form>
			 <?php endif; ?>

</div> </a>
</li>
</ul>
	
	<?php if ( have_posts() ) : ?>
<div class="tab-content" id="myTabContent">
	 <div style="padding: 2rem 0 0;">
        <p>
			
			<?php 
			$lang = get_bloginfo('language');
			if( $lang == 'es-CO'): ?>
			<!-- ESPAÑOL -->
			 Resultados de: <span><?php echo "$s"; ?></span>
			 <?php else: ?>
			 <!-- INGLES-->
			 Results of: <span><?php echo "$s"; ?></span>
			 <?php endif; ?>
			
		 </p>       
      </div>
	<div class="tab-pane fade show active" style="padding-bottom:5rem;" id="home" role="tabpanel" aria-labelledby="home-tab">
      <div class=" card-blog">

		
			<div class="flex-blog2 " style="margin-top: 0%;">
			<div class="mancha9">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/triangulo2.png" alt="">
			</div>
			<div class="mancha10">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/triangulo1.png" alt="">
			</div>
		

			<?php while( have_posts()) : the_post();?>
				<a href="<?php the_permalink(); ?>">
				<div class="blog-item">
					<div class="img-card">
							<a href="<?php the_permalink(); ?>">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>">
								</a>
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
		</div>
	</div>
	
	
	</div>

	<?php else: ?>
	<p style="padding: 4rem 0;">
		
		  <?php 
	$lang = get_bloginfo('language');
	if( $lang == 'es-CO'): ?>
	 <!-- ESPAÑOL -->
		No se encontraron resultados: <span><?php echo "$s"; ?></span>
		  <?php else: ?>
			  <!-- INGLES-->
		No results found: <span><?php echo "$s"; ?></span>
		  <?php endif; ?>
			
		 </p>   
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
		<?php $boton = get_field( 'boton' ); ?>
		<?php if ( $boton ) : ?>
			<a class="btn_custom2" href="<?php echo esc_url( $boton['url'] ); ?>" target="<?php echo esc_attr( $boton['target'] ); ?>"><?php echo esc_html( $boton['title'] ); ?></a>
		<?php endif; ?>
		</div>
	
	 <?php endwhile; ?>
	
</section>
     

<?php get_footer() ?> 