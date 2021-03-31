<section id="pricing" class="pricing">
<div class="triangulo1">
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/triangulo1.png" alt="">
</div>
<div class="triangulo2">
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/triangulo2.png" alt="">
</div>
<div class="title-flex">
<div class="icon-pricing">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" alt="">
</div>
	<?php 
		$lang = get_bloginfo('language');
	    if( $lang == 'es-CO'): ?>
			  <!-- ESPAÑOL -->
<h2>Precios</h2>
<?php else: ?>
			  <!-- INGLES-->
	<h2>Pricing </h2>
	<?php endif; ?>
</div>
<div class="line-pricing">
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/line23.png" alt="">
</div>


<div class="design-process-section" id="process-tab">
<div class="container">
<div class="">
  <div class=""> 
    <!-- design process steps--> 
    <!-- Nav tabs -->
	 		   	

    <ul class="nav nav-tabs process-model more-icon-preocess" role="tablist">
		
      <li role="presentation" class="active">
		
		  <a href="#discover" aria-controls="discover" role="tab" data-toggle="tab">
		  
		  <div class="border-line">
		  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/paper.png" alt="">
		  </div>
        </a></li>
      <li role="presentation"><a href="#strategy" aria-controls="strategy" role="tab" data-toggle="tab"><div class="border-line2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/avion.png" alt=""></div>
        </a></li>
      <li role="presentation"><a href="#optimization" aria-controls="optimization" role="tab" data-toggle="tab"><div class="border-line3"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/avioneta.png" alt=""></div>
     
        </a></li>
      <li role="presentation"><a href="#content" aria-controls="content" role="tab" data-toggle="tab"><div class="border-line4"><img style="width: 55px;" src="<?php echo get_template_directory_uri(); ?>/assets/img/cohete.png" alt=""></div>
   
        </a></li>
     
    </ul>
    <!-- end design process steps--> 
    <!-- Tab panes -->
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="discover">
	  <?php 
		$lang = get_bloginfo('language');
	    if( $lang == 'es-CO'): ?>
			  <!-- ESPAÑOL -->
       <div class="design-process-content">
			<?php $loop = new WP_Query( 'post_type=Planes&tipo_planes=Avion de papel&posts_per_page=-1' ); ?>
    			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		   
		 
	<?php if ( have_rows( 'tipo_de_planes' ) ) : ?>
	    <?php while ( have_rows( 'tipo_de_planes' ) ) : the_row(); ?>
		  <?php if ( have_rows( 'plan_por_semana_' ) ) : ?>
			<?php while ( have_rows( 'plan_por_semana_' ) ) : the_row(); ?>

		   
			 <div class="card-pricing">
				  <h5> <?php the_sub_field( 'titulo-plan' ); ?> </h5>
				  <div class=" items2">
					  
                    
					  	<?php if ( have_rows( 'contenido-plan' ) ) : ?>
					     <?php while ( have_rows( 'contenido-plan' ) ) : the_row(); ?>
					  <div class="content-semana">
						
							  <div class="image-check__semana">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/check.png" alt="">
                                </div>
						  
						  <p><?php the_sub_field( 'items-izquierda' ); ?> </p>
					 <p class="content-semana__p"> <?php the_sub_field( 'items-derecha' ); ?> </p>  
					  </div>
			
				 
					 
					 
					  <?php endwhile; ?>
				<?php else : ?>
					<?php // no rows found ?>
				<?php endif; ?>
                     
            </div>
				
				
			</div>
			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
		<?php if ( have_rows( 'plan_adicional' ) ) : ?>
			<?php while ( have_rows( 'plan_adicional' ) ) : the_row(); ?>
			 <div class="card-pricing">
			  <h5><?php the_sub_field( 'titulo-plan' ); ?></h5>
		    <div class="price-items">
             
              <div class="content-plan_adicional">
            <?php the_sub_field( 'contenido-plan' ); ?>
              </div>
            </div>
				
				
			</div>
			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
		     <?php if ( have_rows( 'precio_del_plan' ) ) : ?>
		    <?php while ( have_rows( 'precio_del_plan' ) ) : the_row(); ?>
		  
			    <h3> <?php the_sub_field( 'text-1' ); ?> <span class="price-span"><?php the_sub_field( 'precio' ); ?></span> / <span class="text-precio"><?php the_sub_field( 'text-2' ); ?></span>  </h3> 
		   
			  
		
				
				
		   	<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
		   
		<?php if ( have_rows( 'plan_general' ) ) : ?>
		  <div class="card-pricing">
			<?php while ( have_rows( 'plan_general' ) ) : the_row(); ?>
			<h5><?php the_sub_field( 'titulo-plan' ); ?></h5>	
			 <div class="price-items">
             
             <div class="content-plan_general">
             	<?php the_sub_field( 'contenido-plan' ); ?>
              </div>
     
            </div>

			<?php endwhile; ?>
			</div>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
<?php endwhile; ?>
         
          
        
      </div>
	<?php else: ?>
			  <!-- INGLES-->
       <div class="design-process-content">
			<?php $loop = new WP_Query( 'post_type=Planes&tipo_planes=Avion de papel&posts_per_page=-1' ); ?>
    			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	 <?php if ( have_rows( 'tipo_de_planes_ingles' ) ) : ?>
	    <?php while ( have_rows( 'tipo_de_planes_ingles' ) ) : the_row(); ?>
		  <?php if ( have_rows( 'plan_por_semana_ingles' ) ) : ?>
			<?php while ( have_rows( 'plan_por_semana_ingles' ) ) : the_row(); ?>
			 <div class="card-pricing">
				  <h5> <?php the_sub_field( 'titulo-plan-ingles' ); ?> </h5>
				  <div class=" items2">
					  
                    
					  	<?php if ( have_rows( 'contenido-plan-ingles' ) ) : ?>
					     <?php while ( have_rows( 'contenido-plan-ingles' ) ) : the_row(); ?>
					  <div class="content-semana">
						
							  <div class="image-check__semana">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/check.png" alt="">
                                </div>
						  
						  <p><?php the_sub_field( 'items-izquierda-ingles' ); ?> </p>
					 <p class="content-semana__p"> <?php the_sub_field( 'items-derecha-ingles' ); ?> </p>  
					  </div>
			
				 
					 
					 
					  <?php endwhile; ?>
				<?php else : ?>
					<?php // no rows found ?>
				<?php endif; ?>
                     
            </div>
				
				
			</div>
			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
		   <?php if ( have_rows( 'precio_del_plan_ingles' ) ) : ?>
			<?php while ( have_rows( 'precio_del_plan_ingles' ) ) : the_row(); ?>
			
			
				
				
		      <h3> <?php the_sub_field( 'text-1-ingles' ); ?> <span class="price-span"><?php the_sub_field( 'precio-ingles' ); ?></span> / <span class="text-precio">	<?php the_sub_field( 'text-2-ingles' ); ?></span>  </h3> 
			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
		
		<?php if ( have_rows( 'plan_adicional_ingles' ) ) : ?>
			<?php while ( have_rows( 'plan_adicional_ingles' ) ) : the_row(); ?>
			 <div class="card-pricing">
			  <h5><?php the_sub_field( 'titulo-plan-ingles' ); ?></h5>
		    <div class="price-items">
             
              <div class="content-plan_adicional">
            <?php the_sub_field( 'contenido-plan-ingles' ); ?>
              </div>
            </div>
				
				
			</div>
			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
	  <?php if ( have_rows( 'plan_general_ingles' ) ) : ?>
		    <?php while ( have_rows( 'plan_general_ingles' ) ) : the_row(); ?>
		     <div class="card-pricing">
		
			<h5><?php the_sub_field( 'titulo-plan-ingles' ); ?></h5>	
			 <div class="price-items">
             
             <div class="content-plan_general">
             	<?php the_sub_field( 'contenido-plan-ingles' ); ?>
              </div>
     
            </div>

			<?php endwhile; ?>
			</div>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
<?php endwhile; ?>
         
          
        
      </div>
<?php endif; ?>
      </div>
	
      <div role="tabpanel" class="tab-pane" id="strategy">
     <?php 
		$lang = get_bloginfo('language');
	    if( $lang == 'es-CO'): ?>
			  <!-- ESPAÑOL -->
       <div class="design-process-content">
			<?php $loop = new WP_Query( 'post_type=Planes&tipo_planes=Avion de Helice&posts_per_page=-1' ); ?>
    			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<?php if ( have_rows( 'tipo_de_planes' ) ) : ?>
	    <?php while ( have_rows( 'tipo_de_planes' ) ) : the_row(); ?>
		  <?php if ( have_rows( 'plan_por_semana_' ) ) : ?>
			<?php while ( have_rows( 'plan_por_semana_' ) ) : the_row(); ?>
			 <div class="card-pricing">
				  <h5> <?php the_sub_field( 'titulo-plan' ); ?> </h5>
				  <div class=" items2">
					  
                    
					  	<?php if ( have_rows( 'contenido-plan' ) ) : ?>
					     <?php while ( have_rows( 'contenido-plan' ) ) : the_row(); ?>
					  <div class="content-semana">
						
							  <div class="image-check__semana">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/check.png" alt="">
                                </div>
						  
						  <p><?php the_sub_field( 'items-izquierda' ); ?> </p>
					 <p class="content-semana__p"> <?php the_sub_field( 'items-derecha' ); ?> </p>  
					  </div>
			
				 
					 
					 
					  <?php endwhile; ?>
				<?php else : ?>
					<?php // no rows found ?>
				<?php endif; ?>
                     
            </div>
				
				
			</div>
			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
		   		     <?php if ( have_rows( 'precio_del_plan' ) ) : ?>
		    <?php while ( have_rows( 'precio_del_plan' ) ) : the_row(); ?>
		   
			   <h3> <?php the_sub_field( 'text-1' ); ?> <span class="price-span"><?php the_sub_field( 'precio' ); ?></span> / <span class="text-precio"><?php the_sub_field( 'text-2' ); ?></span>  </h3> 
		
				
				
		   	<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
		<?php if ( have_rows( 'plan_adicional' ) ) : ?>
			<?php while ( have_rows( 'plan_adicional' ) ) : the_row(); ?>
			 <div class="card-pricing">
			  <h5><?php the_sub_field( 'titulo-plan' ); ?></h5>
		    <div class="price-items">
             
              <div class="content-plan_adicional">
            <?php the_sub_field( 'contenido-plan' ); ?>
              </div>
            </div>
				
				
			</div>
			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
		<?php if ( have_rows( 'plan_general' ) ) : ?>
		  <div class="card-pricing">
			<?php while ( have_rows( 'plan_general' ) ) : the_row(); ?>
			<h5><?php the_sub_field( 'titulo-plan' ); ?></h5>	
			 <div class="price-items">
             
             <div class="content-plan_general">
             	<?php the_sub_field( 'contenido-plan' ); ?>
              </div>
     
            </div>

			<?php endwhile; ?>
			</div>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
<?php endwhile; ?>
         
          
        
      </div>
	<?php else: ?>
			  <!-- INGLES-->
       <div class="design-process-content">
			<?php $loop = new WP_Query( 'post_type=Planes&tipo_planes=Avion de Helice&posts_per_page=-1' ); ?>
    			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	 <?php if ( have_rows( 'tipo_de_planes_ingles' ) ) : ?>
	    <?php while ( have_rows( 'tipo_de_planes_ingles' ) ) : the_row(); ?>
		  <?php if ( have_rows( 'plan_por_semana_ingles' ) ) : ?>
			<?php while ( have_rows( 'plan_por_semana_ingles' ) ) : the_row(); ?>
			 <div class="card-pricing">
				  <h5> <?php the_sub_field( 'titulo-plan-ingles' ); ?> </h5>
				  <div class=" items2">
					  
                    
					  	<?php if ( have_rows( 'contenido-plan-ingles' ) ) : ?>
					     <?php while ( have_rows( 'contenido-plan-ingles' ) ) : the_row(); ?>
					  <div class="content-semana">
						
							  <div class="image-check__semana">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/check.png" alt="">
                                </div>
						  
						  <p><?php the_sub_field( 'items-izquierda-ingles' ); ?> </p>
					 <p class="content-semana__p"> <?php the_sub_field( 'items-derecha-ingles' ); ?> </p>  
					  </div>
			
				 
					 
					 
					  <?php endwhile; ?>
				<?php else : ?>
					<?php // no rows found ?>
				<?php endif; ?>
                     
            </div>
				
				
			</div>
			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
		      <?php if ( have_rows( 'precio_del_plan_ingles' ) ) : ?>
			<?php while ( have_rows( 'precio_del_plan_ingles' ) ) : the_row(); ?>
			
			
				
				
		      <h3> <?php the_sub_field( 'text-1-ingles' ); ?> <span class="price-span"><?php the_sub_field( 'precio-ingles' ); ?></span> / <span class="text-precio">	<?php the_sub_field( 'text-2-ingles' ); ?></span>  </h3> 
			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
		   
		 
		<?php if ( have_rows( 'plan_adicional_ingles' ) ) : ?>
			<?php while ( have_rows( 'plan_adicional_ingles' ) ) : the_row(); ?>
			 <div class="card-pricing">
			  <h5><?php the_sub_field( 'titulo-plan-ingles' ); ?></h5>
		    <div class="price-items">
             
              <div class="content-plan_adicional">
            <?php the_sub_field( 'contenido-plan-ingles' ); ?>
              </div>
            </div>
				
				
			</div>
			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
	
	  <?php if ( have_rows( 'plan_general_ingles' ) ) : ?>
		    <?php while ( have_rows( 'plan_general_ingles' ) ) : the_row(); ?>
		     <div class="card-pricing">
		
			<h5><?php the_sub_field( 'titulo-plan-ingles' ); ?></h5>	
			 <div class="price-items">
             
             <div class="content-plan_general">
             	<?php the_sub_field( 'contenido-plan-ingles' ); ?>
              </div>
     
            </div>

			<?php endwhile; ?>
			</div>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
<?php endwhile; ?>
         
          
        
      </div>
<?php endif; ?>
		</div>
      <div role="tabpanel" class="tab-pane" id="optimization">
      <?php 
		$lang = get_bloginfo('language');
	    if( $lang == 'es-CO'): ?>
			  <!-- ESPAÑOL -->
       <div class="design-process-content">
			<?php $loop = new WP_Query( 'post_type=Planes&tipo_planes=Avion de Turbina&posts_per_page=-1' ); ?>
    			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<?php if ( have_rows( 'tipo_de_planes' ) ) : ?>
	    <?php while ( have_rows( 'tipo_de_planes' ) ) : the_row(); ?>
		  <?php if ( have_rows( 'plan_por_semana_' ) ) : ?>
			<?php while ( have_rows( 'plan_por_semana_' ) ) : the_row(); ?>
			 <div class="card-pricing">
				  <h5> <?php the_sub_field( 'titulo-plan' ); ?> </h5>
				  <div class=" items2">
					  
                    
					  	<?php if ( have_rows( 'contenido-plan' ) ) : ?>
					     <?php while ( have_rows( 'contenido-plan' ) ) : the_row(); ?>
					  <div class="content-semana">
						
							  <div class="image-check__semana">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/check.png" alt="">
                                </div>
						  
						  <p><?php the_sub_field( 'items-izquierda' ); ?> </p>
					 <p class="content-semana__p"> <?php the_sub_field( 'items-derecha' ); ?> </p>  
					  </div>
			
				 
					 
					 
					  <?php endwhile; ?>
				<?php else : ?>
					<?php // no rows found ?>
				<?php endif; ?>
                     
            </div>
				
				
			</div>
			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
		   		     <?php if ( have_rows( 'precio_del_plan' ) ) : ?>
		    <?php while ( have_rows( 'precio_del_plan' ) ) : the_row(); ?>
		   
			   <h3> <?php the_sub_field( 'text-1' ); ?> <span class="price-span"><?php the_sub_field( 'precio' ); ?></span> / <span class="text-precio"><?php the_sub_field( 'text-2' ); ?></span>  </h3> 
		
				
				
		   	<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
		<?php if ( have_rows( 'plan_adicional' ) ) : ?>
			<?php while ( have_rows( 'plan_adicional' ) ) : the_row(); ?>
			 <div class="card-pricing">
			  <h5><?php the_sub_field( 'titulo-plan' ); ?></h5>
		    <div class="price-items">
             
              <div class="content-plan_adicional">
            <?php the_sub_field( 'contenido-plan' ); ?>
              </div>
            </div>
				
				
			</div>
			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
		<?php if ( have_rows( 'plan_general' ) ) : ?>
		  <div class="card-pricing">
			<?php while ( have_rows( 'plan_general' ) ) : the_row(); ?>
			<h5><?php the_sub_field( 'titulo-plan' ); ?></h5>	
			 <div class="price-items">
             
             <div class="content-plan_general">
             	<?php the_sub_field( 'contenido-plan' ); ?>
              </div>
     
            </div>

			<?php endwhile; ?>
			</div>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
<?php endwhile; ?>
         
          
        
      </div>
	<?php else: ?>
			  <!-- INGLES-->
       <div class="design-process-content">
			<?php $loop = new WP_Query( 'post_type=Planes&tipo_planes=Avion de Turbina&posts_per_page=-1' ); ?>
    			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	 <?php if ( have_rows( 'tipo_de_planes_ingles' ) ) : ?>
	    <?php while ( have_rows( 'tipo_de_planes_ingles' ) ) : the_row(); ?>
		  <?php if ( have_rows( 'plan_por_semana_ingles' ) ) : ?>
			<?php while ( have_rows( 'plan_por_semana_ingles' ) ) : the_row(); ?>
			 <div class="card-pricing">
				  <h5> <?php the_sub_field( 'titulo-plan-ingles' ); ?> </h5>
				  <div class=" items2">
					  
                    
					  	<?php if ( have_rows( 'contenido-plan-ingles' ) ) : ?>
					     <?php while ( have_rows( 'contenido-plan-ingles' ) ) : the_row(); ?>
					  <div class="content-semana">
						
							  <div class="image-check__semana">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/check.png" alt="">
                                </div>
						  
						  <p><?php the_sub_field( 'items-izquierda-ingles' ); ?> </p>
					 <p class="content-semana__p"> <?php the_sub_field( 'items-derecha-ingles' ); ?> </p>  
					  </div>
			
				 
					 
					 
					  <?php endwhile; ?>
				<?php else : ?>
					<?php // no rows found ?>
				<?php endif; ?>
                     
            </div>
				
				
			</div>
			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
		      <?php if ( have_rows( 'precio_del_plan_ingles' ) ) : ?>
			<?php while ( have_rows( 'precio_del_plan_ingles' ) ) : the_row(); ?>
			
			
				
				
		      <h3> <?php the_sub_field( 'text-1-ingles' ); ?> <span class="price-span"><?php the_sub_field( 'precio-ingles' ); ?></span> / <span class="text-precio">	<?php the_sub_field( 'text-2-ingles' ); ?></span>  </h3> 
			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
		<?php if ( have_rows( 'plan_adicional_ingles' ) ) : ?>
			<?php while ( have_rows( 'plan_adicional_ingles' ) ) : the_row(); ?>
			 <div class="card-pricing">
			  <h5><?php the_sub_field( 'titulo-plan-ingles' ); ?></h5>
		    <div class="price-items">
             
              <div class="content-plan_adicional">
            <?php the_sub_field( 'contenido-plan-ingles' ); ?>
              </div>
            </div>
				
				
			</div>
			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
	  <?php if ( have_rows( 'plan_general_ingles' ) ) : ?>
		    <?php while ( have_rows( 'plan_general_ingles' ) ) : the_row(); ?>
		     <div class="card-pricing">
		
			<h5><?php the_sub_field( 'titulo-plan-ingles' ); ?></h5>	
			 <div class="price-items">
             
             <div class="content-plan_general">
             	<?php the_sub_field( 'contenido-plan-ingles' ); ?>
              </div>
     
            </div>

			<?php endwhile; ?>
			</div>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
<?php endwhile; ?>
         
          
        
      </div>
<?php endif; ?>
      </div>
      <div role="tabpanel" class="tab-pane" id="content">
     <?php 
		$lang = get_bloginfo('language');
	    if( $lang == 'es-CO'): ?>
			  <!-- ESPAÑOL -->
       <div class="design-process-content">
			<?php $loop = new WP_Query( 'post_type=Planes&tipo_planes=Cohete&posts_per_page=-1' ); ?>
    			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<?php if ( have_rows( 'tipo_de_planes' ) ) : ?>
	    <?php while ( have_rows( 'tipo_de_planes' ) ) : the_row(); ?>
		  <?php if ( have_rows( 'plan_por_semana_' ) ) : ?>
			<?php while ( have_rows( 'plan_por_semana_' ) ) : the_row(); ?>
			 <div class="card-pricing">
				  <h5> <?php the_sub_field( 'titulo-plan' ); ?> </h5>
				  <div class=" items2">
					  
                    
					  	<?php if ( have_rows( 'contenido-plan' ) ) : ?>
					     <?php while ( have_rows( 'contenido-plan' ) ) : the_row(); ?>
					  <div class="content-semana">
						
							  <div class="image-check__semana">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/check.png" alt="">
                                </div>
						  
						  <p><?php the_sub_field( 'items-izquierda' ); ?> </p>
					 <p class="content-semana__p"> <?php the_sub_field( 'items-derecha' ); ?> </p>  
					  </div>
			
				 
					 
					 
					  <?php endwhile; ?>
				<?php else : ?>
					<?php // no rows found ?>
				<?php endif; ?>
                     
            </div>
				
				
			</div>
			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
		<?php if ( have_rows( 'plan_adicional' ) ) : ?>
			<?php while ( have_rows( 'plan_adicional' ) ) : the_row(); ?>
			 <div class="card-pricing">
			  <h5><?php the_sub_field( 'titulo-plan' ); ?></h5>
		    <div class="price-items">
             
              <div class="content-plan_adicional">
            <?php the_sub_field( 'contenido-plan' ); ?>
              </div>
            </div>
				
				
			</div>
			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
		   		     <?php if ( have_rows( 'precio_del_plan' ) ) : ?>
		    <?php while ( have_rows( 'precio_del_plan' ) ) : the_row(); ?>
		   
			   <h3> <?php the_sub_field( 'text-1' ); ?> <span class="price-span"><?php the_sub_field( 'precio' ); ?></span> / <span class="text-precio"><?php the_sub_field( 'text-2' ); ?></span>  </h3> 
		
				
				
		   	<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
		<?php if ( have_rows( 'plan_general' ) ) : ?>
		  <div class="card-pricing">
			<?php while ( have_rows( 'plan_general' ) ) : the_row(); ?>
			<h5><?php the_sub_field( 'titulo-plan' ); ?></h5>	
			 <div class="price-items">
             
             <div class="content-plan_general">
             	<?php the_sub_field( 'contenido-plan' ); ?>
              </div>
     
            </div>

			<?php endwhile; ?>
			</div>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
<?php endwhile; ?>
         
          
        
      </div>
	<?php else: ?>
			  <!-- INGLES-->
       <div class="design-process-content">
			<?php $loop = new WP_Query( 'post_type=Planes&tipo_planes=Cohete&posts_per_page=-1' ); ?>
    			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	 <?php if ( have_rows( 'tipo_de_planes_ingles' ) ) : ?>
	    <?php while ( have_rows( 'tipo_de_planes_ingles' ) ) : the_row(); ?>
		  <?php if ( have_rows( 'plan_por_semana_ingles' ) ) : ?>
			<?php while ( have_rows( 'plan_por_semana_ingles' ) ) : the_row(); ?>
			 <div class="card-pricing">
				  <h5> <?php the_sub_field( 'titulo-plan-ingles' ); ?> </h5>
				  <div class=" items2">
					  
                    
					  	<?php if ( have_rows( 'contenido-plan-ingles' ) ) : ?>
					     <?php while ( have_rows( 'contenido-plan-ingles' ) ) : the_row(); ?>
					  <div class="content-semana">
						
							  <div class="image-check__semana">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/check.png" alt="">
                                </div>
						  
						  <p><?php the_sub_field( 'items-izquierda-ingles' ); ?> </p>
					 <p class="content-semana__p"> <?php the_sub_field( 'items-derecha-ingles' ); ?> </p>  
					  </div>
			
				 
					 
					 
					  <?php endwhile; ?>
				<?php else : ?>
					<?php // no rows found ?>
				<?php endif; ?>
                     
            </div>
				
				
			</div>
			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
		      <?php if ( have_rows( 'precio_del_plan_ingles' ) ) : ?>
			<?php while ( have_rows( 'precio_del_plan_ingles' ) ) : the_row(); ?>
			
			
				
				
		      <h3> <?php the_sub_field( 'text-1-ingles' ); ?> <span class="price-span"><?php the_sub_field( 'precio-ingles' ); ?></span> / <span class="text-precio">	<?php the_sub_field( 'text-2-ingles' ); ?></span>  </h3> 
			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
		<?php if ( have_rows( 'plan_adicional_ingles' ) ) : ?>
			<?php while ( have_rows( 'plan_adicional_ingles' ) ) : the_row(); ?>
			 <div class="card-pricing">
			  <h5><?php the_sub_field( 'titulo-plan-ingles' ); ?></h5>
		    <div class="price-items">
             
              <div class="content-plan_adicional">
            <?php the_sub_field( 'contenido-plan-ingles' ); ?>
              </div>
            </div>
				
				
			</div>
			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
	  <?php if ( have_rows( 'plan_general_ingles' ) ) : ?>
		    <?php while ( have_rows( 'plan_general_ingles' ) ) : the_row(); ?>
		     <div class="card-pricing">
		
			<h5><?php the_sub_field( 'titulo-plan-ingles' ); ?></h5>	
			 <div class="price-items">
             
             <div class="content-plan_general">
             	<?php the_sub_field( 'contenido-plan-ingles' ); ?>
              </div>
     
            </div>

			<?php endwhile; ?>
			</div>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>
	<?php endwhile; ?>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
<?php endwhile; ?>
         
          
        
      </div>
<?php endif; ?>
      </div>

  </div>
</div>
</div>
</div>
	 <?php 
		$lang = get_bloginfo('language');
	    if( $lang == 'es-CO'): ?>
			  <!-- ESPAÑOL -->
<div class="btn-center">
<a class="btn_custom2" href="#">EMPEZAR AHORA</a>
</div>
	<?php else: ?>
			  <!-- INGLES-->
	<div class="btn-center">
<a class="btn_custom2" href="#">LET'S START NOW</a>
</div>
	<?php endif; ?>
</section>