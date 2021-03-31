<?php get_header() ?>		

<div class=" card-blog">
  
		<?php 
    // the query
    $wpb_all_query = new WP_Query(array('post_type'=>'post', 
                                        'post_status'=>'publish', 
                                        'posts_per_page => 1&offset = 1'

    )); ?>
  
     <?php if ( $wpb_all_query->have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post();  ?> 		
			 
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
			
	
				  <?php  endwhile; ?>
	<?php endif; ?>
	
		
      
			<div class="flex-blog">
				<div class="mancha8">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/triangulo1.png" alt="">
				</div>
		<?php 
    // the query
    $all_query = new WP_Query(array('post_type'=>'post', 
                                        'post_status'=>'publish', 
                                        'posts_per_page => 2&offset = 2'

    )); ?>
  
      <?php if ( $all_query->have_posts() ) : ?>
		<?php while ( have_posts() ) :the_post();  query_posts('offset=2');  ?> 		
	 
				
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
				<?php  endwhile; ?> 
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
    // the query
    $query = new WP_Query(array('post_type'=>'post', 
                                        'post_status'=>'publish', 
                                        'posts_per_page => -1&offset = -1'

    )); ?>
  
	   <?php if ( $query->have_posts() ) : ?>
     
		<?php while ( have_posts() ) :the_post();  query_posts('offset=-1');  ?> 		
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
<?php get_footer() ?> 