<div  class="main-banner">
    <div class="main-banner__content slider">
  <?php $a = 1;       
			$args = array (
				'post_type' => 'Banners',
				'post_status' => 'publish',
				'order' => 'DESC',
					
			);
		
		 ?>
<?php $counter = 0;?>
			<?php $loop = new WP_Query( $args 
				  );  
		 
		?>
		<?php while ( $loop->have_posts() ) : $loop->the_post();  $counter++; ?> 		
	
      <div class="main-banner__item" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
        <div class="mask">
          <div class="main-banner__text">
            
            <div  class="main-banner__description typewriter">
			<div>
				  <h1><?php the_title(); ?> </h1>
				</div>	
            <div class="text-banner__content">
				   <?php the_content(); ?>
				</div>
              
				  <?php 
	            	$lang = get_bloginfo('language');
	               if( $lang == 'es-CO'): ?>
			       <!-- ESPAÑOL -->
                <div style="width: fit-content;">
                  <a class="btn_custom btn-open-modal" data-toggle="modal" data-target="#modal-fullscreen-xl" style=" padding: 0px 15px;" href="#"> Obtén un mes gratis</a>
				</div>
				<?php else: ?>
			  <!-- INGLES-->
				<div style="width: fit-content;">
                  <a class="btn_custom btn-open-modal" data-toggle="modal" data-target="#modal-fullscreen-xl" style=" padding: 0px 15px;" href="#"> Get a free month </a>
				</div>
				 
				<?php endif; ?>
                 
                <a href="#section1">
                  <div class="down">
                <div id="scrollDown">

                  <div id="rond"></div>
                </div>
					    <?php 
	            	$lang = get_bloginfo('language');
	               if( $lang == 'es-CO'): ?>
			       <!-- ESPAÑOL -->
                  <div class="text-scroll"> <p class="text-down"> <span style="font-weight: 500; color: black;"> Descubre </span> <br> 
Desplazarse hacia abajo</p> 
				</div>
					  	<?php else: ?>
			  <!-- INGLES-->
					    <div class="text-scroll"> <p class="text-down"> <span style="font-weight: 500; color: black;"> Discover</span> <br> Scroll Down</p> 
				</div>
					  <?php endif; ?>
                </div>
                </a>
              </div>
            </div>
            <div class="main-banner-img">
              <!--<img src="" alt="">-->
            </div>
            <div class="numbers">
              <h5>0<?php echo $a ?></h5>
              <div class="estado">
              <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
				  <span class="slider__label sr-only"></span>
             </div>
              </div>
				
              <h6>04</h6>
            </div>
        </div>
      </div>
	<?php $a = $a + 1; endwhile;
				  
		wp_reset_postdata();
		?>

          </div>
    </div>