<?php get_header(); ?>

<div href="#" class="toTop"> ↑ </div>


<section class="education">
<h2>Due Diligence<br>

</h2>

<?php the_content(); ?>
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
<form  action="http://159.89.229.55/Due-diligence/es/"  method="get">
  <input type="search" id="search-input" name="s" autocomplete="off">
</form>
</div> </a>
</li>
</ul>
<div class="tab-content" id="myTabContent">
	<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      <div class=" card-blog">
<?php if ( have_posts ) :  ?>
<?php 
$args = array('posts_per_page' => 1, 'offset' => 0);
$query = new WP_Query( $args );?>

			<?php while( $query->have_posts()) : $query->the_post();?>
				 
			<div class="block-first">
				<div class="mancha7">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mancha6.png" alt="">
				</div>
					<div class="card-first">
						<div class="blog-item">
							<div class="img-card-principal">
								<a href="<?php the_permalink(); ?>">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>">
								</a>
								
							</div>
						</div>
					</div>
					<div class="text-blog">
						<?php the_category()?>
						<a href="<?php the_permalink(); ?>"><h3><?php the_title() ?> </h3></a>
						<a href="<?php the_permalink(); ?>"><p>
							<?php the_excerpt() ?>
							</p>
						</a>
					</div>
			</div>
			 <?php  endwhile;  ?>
			

		<?php endif; ?>		

	
	
		
	
				 

			
      
			<div class="flex-blog">
				<div class="mancha8">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/triangulo1.png" alt="">
				</div>
	      
	
		
<?php 
$args = array('posts_per_page' => 2, 'offset' => 1);
$query = new WP_Query( $args );?>
 <?php if ( have_posts ) : ?>
			<?php while( $query->have_posts()) : $query->the_post();?>
				
				<a href="<?php the_permalink(); ?>">
				<div class="card-first">
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
$args = array('posts_per_page' => 10, 'offset' => 3);
$query = new WP_Query( $args );?>
 <?php if ( have_posts ) : ?>
			<?php while( $query->have_posts()) : $query->the_post();?>
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
				
<?php endif; ?>
			
			
			
			</div>
		<div class="content-education" style="margin: 0 0 2rem 0">
				<a class="btn_custom2" href="#">CARGAR MAS</a>
			</div>
		</div>
	</div>
	
	
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
	
	  <?php $args = array('post_type' => 'Banner suscripcion'); ?>
    <?php $loop = new WP_Query($args); ?>
    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
		<h4> <?php the_title(); ?></h4>

		<p> <?php the_content(); ?></p>

		<div class="" style="margin-top: 2%;">
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
		</div>
	
	 <?php endwhile; ?>
	
</section>
     


	
<?php get_footer(); ?>

