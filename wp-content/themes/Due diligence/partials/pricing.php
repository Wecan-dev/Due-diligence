<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
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
	<h2><?php the_field( 'title_pricing' ); ?></h2>
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
		  <img id="img-one"  src="http://159.89.229.55/Due-diligence/wp-content/uploads/2021/05/paper-orange.png" alt="">
		  </div>
        </a></li>
      <li role="presentation"><a href="#strategy" aria-controls="strategy" role="tab" data-toggle="tab"><div class="border-line2"><img id="img-two" src="<?php echo get_template_directory_uri(); ?>/assets/img/avion.png" alt=""></div>
        </a></li>
      <li role="presentation"><a href="#optimization" aria-controls="optimization" role="tab" data-toggle="tab"><div class="border-line3"><img id="img-three"  src="<?php echo get_template_directory_uri(); ?>/assets/img/avioneta.png" alt=""></div>
     
        </a></li>
      <li role="presentation"><a href="#content" aria-controls="content" role="tab" data-toggle="tab"><div class="border-line4"><img id="img-four"  style="width: 55px;" src="<?php echo get_template_directory_uri(); ?>/assets/img/cohete.png" alt=""></div>
   
        </a></li>
     
    </ul>
    <!-- end design process steps--> 
    <!-- Tab panes -->
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="discover">
		  
		  <div class="design-process-content">
			  <?php $loop = new WP_Query( 'post_type=Planes&tipo_planes=Avion de papel&posts_per_page=-1' ); ?>
        <?php $counterTab = 'One'; ?>
    
			  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			  <!-- OPEN LOOP -->
			  	<?php if ( have_rows( 'type_of_plan' ) ) : ?>
					<?php while ( have_rows( 'type_of_plan' ) ) : the_row(); ?>
			  
			  			<!-- PLAN GENERAL-->
						<?php if ( have_rows( 'plan_general' ) ) : ?>
			  			   <!-- CARD -->
						   <div class="card-pricing">
								<?php while ( have_rows( 'plan_general' ) ) : the_row(); ?>
									<h5><?php the_sub_field( 'title_of_the_general_plan' ); ?></h5>	
									 <div class="price-items">
									 <div class="content-plan_general">
										<?php the_sub_field( 'contents_of_the_general_plan' ); ?>
									  </div>
									</div>
								<?php endwhile; ?>
							</div>
						<?php else : ?>
							<?php // no rows found ?>
						<?php endif; ?>

						<!-- PLAN POR SEMANA -->
						<?php if ( have_rows( 'plan_per_week' ) ) : ?>
							<?php while ( have_rows( 'plan_per_week' ) ) : the_row(); ?>
								<!-- CARD -->
								<div class="card-pricing">
								  <h5> <?php the_sub_field( 'plan_title' ); ?></h5>
								  <div class=" items2">
									<?php if ( have_rows( 'plan_content' ) ) : ?>
									<?php while ( have_rows( 'plan_content' ) ) : the_row(); ?>
										<div class="content-semana">
											<div class="image-check__semana">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/img/check.png" alt="">
											</div>
											<p><?php the_sub_field( 'text_left' ); ?></p>
											<p class="content-semana__p"><?php the_sub_field( 'text_right' ); ?> </p>  
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



						<!-- PLAN ADICIONAL -->
						<?php if ( have_rows( 'additional_plan' ) ) : ?>
							<?php while ( have_rows( 'additional_plan' ) ) : the_row(); ?>
							   <!-- CARD -->
							   <div class="card-pricing">
								   <h5><?php the_sub_field( 'additional_plan_title' ); ?></h5>
								     
								   <div class="price-items">

									  <div class="price-items">

                      <ul class="addons">
                          
                          <?php if ( have_rows( 'additional_plan_content' ) ) : ?>
                           <?php $counterBase = 1; ?>
                              <?php while ( have_rows( 'additional_plan_content' ) ) : the_row(); ?>

                                  <li class="list-one">
                                     
                                      <input type="checkbox" value="<?php the_sub_field( 'valor' ); ?>" id="<?php echo $counterTab.'_'.$counterBase; ?>" name="price" class="p1"/>
                                      <label for="<?php echo $counterTab.'_'.$counterBase; ?>"><?php the_sub_field( 'opcion' ); ?></label>
                                  </li>
                                  
                                  
                              <?php  $counterBase++;   endwhile; ?>
                          <?php else : ?>
                              <?php // no rows found ?>
                          <?php endif; ?>
                      
                      
                      </ul>
										   
										   
									   </div>
								   </div>
								</div>
							<?php endwhile; ?>
						<?php else : ?>
							<?php // no rows found ?>
						<?php endif; ?>


					  <!-- PRECIO DEL PLAN -->
					  <?php if ( have_rows( 'plan_price' ) ) : ?>
						  <?php while ( have_rows( 'plan_price' ) ) : the_row(); ?>
            <?php $priceBase1 = get_sub_field( 'price' ); ?>
            
							<h3> <?php the_sub_field( 'text_1' ); ?>
								<span class="price-span">	<?php the_sub_field( 'signo_$_o_valor_personalizado' ); ?> <span class=" base1"><?php the_sub_field( 'price' ); ?></span></span> / 
								<span class="text-precio"><?php the_sub_field( 'text_2' ); ?></span>  
							</h3> 
						  <?php endwhile; ?>
					  <?php else : ?>
					  <?php // no rows found ?>
					  <?php endif; ?>


						

					<?php endwhile; ?>
				<?php else : ?>
					<?php // no rows found ?>
				<?php endif; ?>
			  <script>
	$(document).ready(function() {


  $("ul.addons li.list-one:nth-child(1) input").change(function() {
    if ($(this).prop('checked')) {
      $("ul.addons li.list-one:nth-child(1) input").prop('checked', true);
    }
  });

  $("ul.addons li.list-one:nth-child(2) input").change(function() {
    if ($(this).prop('checked')) {
      $("ul.addons li.list-one:nth-child(2) input").prop('checked', true);
    }
  });
    $("ul.addons li.list-one:nth-child(3) input").change(function() {
    if ($(this).prop('checked')) {
      $("ul.addons li.list-one:nth-child(3) input").prop('checked', true);
    }
  });

  $("ul.addons li.list-one:nth-child(4) input").change(function() {
    if ($(this).prop('checked')) {
      $("ul.addons li.list-one:nth-child(4) input").prop('checked', true);
    }
  });
		$("ul.addons li.list-one:nth-child(5) input").change(function() {
			if ($(this).prop('checked')) {
				$("ul.addons li.list-one:nth-child(5) input").prop('checked', true);
			}
		});
$("ul.addons li.list-one:nth-child(1) input").change(function() {
    if (!$(this).prop('checked')) {
      $("ul.addons li.list-one:nth-child(1) input").prop('checked', false);
    }
  });

   $("ul.addons li.list-one:nth-child(2) input").change(function() {
    if (!$(this).prop('checked')) {
      $("ul.addons li.list-one:nth-child(2) input").prop('checked', false);
    }
  });
  $("ul.addons li.list-one:nth-child(3) input").change(function() {
    if (!$(this).prop('checked')) {
      $("ul.addons li.list-one:nth-child(3) input").prop('checked', false);
    }
  });

   $("ul.addons li.list-one:nth-child(4) input").change(function() {
    if (!$(this).prop('checked')) {
      $("ul.addons li.list-one:nth-child(4) input").prop('checked', false);
    }
  });
   $("ul.addons li.list-one:nth-child(5) input").change(function() {
    if (!$(this).prop('checked')) {
      $("ul.addons li.list-one:nth-child(4) input").prop('checked', false);
    }
  });

  $("ul.addons li.list-one input").each(function() {
    $(this).change(function() {

      var base1 = <?php echo  $priceBase1; ?>;

      $("ul.addons li.list-one input[type=checkbox]:checked").each(function() {
        base1 += parseInt($(this).val());
      });
      console.log(base1);



      $(".base1").text(base1);
     
    });
  });
});

	
	</script>
			  <!-- CLOSE LOOP -->
			  <?php endwhile; ?>
		</div>
	  <!-- CLOSE 1 TAB -->
      </div>
		
	  <!-- TAB 2 -->
      <div role="tabpanel" class="tab-pane" id="strategy">
		  <div class="design-process-content">
			<?php $loop = new WP_Query( 'post_type=Planes&tipo_planes=Avion de Helice&posts_per_page=-1' ); ?>
    			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <?php $counterTab = 'Two'; ?>
			  		<!-- OPEN LOOP -->
					<?php if ( have_rows( 'type_of_plan' ) ) : ?>
						<?php while ( have_rows( 'type_of_plan' ) ) : the_row(); ?>
			  
			  				<!-- PLAN GENERAL-->
						<?php if ( have_rows( 'plan_general' ) ) : ?>
			  			   <!-- CARD -->
						   <div class="card-pricing">
								<?php while ( have_rows( 'plan_general' ) ) : the_row(); ?>
									<h5><?php the_sub_field( 'title_of_the_general_plan' ); ?></h5>	
									 <div class="price-items">
									 <div class="content-plan_general">
										<?php the_sub_field( 'contents_of_the_general_plan' ); ?>
									  </div>
									</div>
								<?php endwhile; ?>
							</div>
						<?php else : ?>
							<?php // no rows found ?>
						<?php endif; ?>

							<!-- PLAN POR SEMANA -->
							<?php if ( have_rows( 'plan_per_week' ) ) : ?>
								<?php while ( have_rows( 'plan_per_week' ) ) : the_row(); ?>
									<!-- CARD -->
									<div class="card-pricing">
									  <h5> <?php the_sub_field( 'plan_title' ); ?></h5>
									  <div class=" items2">
										<?php if ( have_rows( 'plan_content' ) ) : ?>
										<?php while ( have_rows( 'plan_content' ) ) : the_row(); ?>
											<div class="content-semana">
												<div class="image-check__semana">
													<img src="<?php echo get_template_directory_uri(); ?>/assets/img/check.png" alt="">
												</div>
												<p><?php the_sub_field( 'text_left' ); ?></p>
												<p class="content-semana__p"><?php the_sub_field( 'text_right' ); ?> </p>  
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

							<!-- PLAN ADICIONAL -->
							<?php if ( have_rows( 'additional_plan' ) ) : ?>
								<?php while ( have_rows( 'additional_plan' ) ) : the_row(); ?>
								   <!-- CARD -->
								   <div class="card-pricing">
									   <h5><?php the_sub_field( 'additional_plan_title' ); ?></h5>
									     
									   <div class="price-items">
                        <div class="price-items">
										
												<ul class="addons">
													
													 <?php if ( have_rows( 'additional_plan_content' ) ) : ?>
													<?php $counterBase = 1; ?>
														<?php while ( have_rows( 'additional_plan_content' ) ) : the_row(); ?>

													  <li class="list-two">

													  <input type="checkbox" value="<?php the_sub_field( 'valor' ); ?>" id="<?php echo $counterTab.'_'.$counterBase; ?>" name="price" class="p1"/>
													  <label for="<?php echo $counterTab.'_'.$counterBase; ?>"><?php the_sub_field( 'opcion' ); ?></label>
													  </li>

															
														<?php $counterBase++; endwhile; ?>
													<?php else : ?>
														<?php // no rows found ?>
													<?php endif; ?>
												</ul>

									   </div>
									   </div>
									</div>
								<?php endwhile; ?>
							<?php else : ?>
								<?php // no rows found ?>
							<?php endif; ?>

						  <!-- PRECIO DEL PLAN -->
						  <?php if ( have_rows( 'plan_price' ) ) : ?>
							  <?php while ( have_rows( 'plan_price' ) ) : the_row(); ?>
<?php $priceBase2 = get_sub_field( 'price' ); ?>
			  
								<h3> <?php the_sub_field( 'text_1' ); ?>
									<span class="price-span">	<?php the_sub_field( 'signo_$_o_valor_personalizado' ); ?> <span class=" base2"><?php the_sub_field( 'price' ); ?></span></span> / 
									<span class="text-precio"><?php the_sub_field( 'text_2' ); ?></span>  
								</h3> 
							  <?php endwhile; ?>
						  <?php else : ?>
						  <?php // no rows found ?>
						  <?php endif; ?>



						<?php endwhile; ?>
					<?php else : ?>
						<?php // no rows found ?>
					<?php endif; ?>
          <script>
	$(document).ready(function() {


  $("ul.addons li.list-two:nth-child(1) input").change(function() {
    if ($(this).prop('checked')) {
      $("ul.addons li.list-two:nth-child(1) input").prop('checked', true);
    }
  });

  $("ul.addons li.list-two:nth-child(2) input").change(function() {
    if ($(this).prop('checked')) {
      $("ul.addons li.list-two:nth-child(2) input").prop('checked', true);
    }
  });
    $("ul.addons li.list-two:nth-child(3) input").change(function() {
    if ($(this).prop('checked')) {
      $("ul.addons li.list-two:nth-child(3) input").prop('checked', true);
    }
  });

  $("ul.addons li.list-two:nth-child(4) input").change(function() {
    if ($(this).prop('checked')) {
      $("ul.addons li.list-two:nth-child(4) input").prop('checked', true);
    }
  });
		$("ul.addons li.list-two:nth-child(5) input").change(function() {
			if ($(this).prop('checked')) {
				$("ul.addons li.list-two:nth-child(5) input").prop('checked', true);
			}
		});
$("ul.addons li.list-two:nth-child(1) input").change(function() {
    if (!$(this).prop('checked')) {
      $("ul.addons li.list-two:nth-child(1) input").prop('checked', false);
    }
  });

   $("ul.addons li.list-two:nth-child(2) input").change(function() {
    if (!$(this).prop('checked')) {
      $("ul.addons li.list-two:nth-child(2) input").prop('checked', false);
    }
  });
  $("ul.addons li.list-two:nth-child(3) input").change(function() {
    if (!$(this).prop('checked')) {
      $("ul.addons li.list-two:nth-child(3) input").prop('checked', false);
    }
  });

   $("ul.addons li.list-two:nth-child(4) input").change(function() {
    if (!$(this).prop('checked')) {
      $("ul.addons li.list-two:nth-child(4) input").prop('checked', false);
    }
  });
   $("ul.addons li.list-two:nth-child(5) input").change(function() {
    if (!$(this).prop('checked')) {
      $("ul.addons li.list-two:nth-child(4) input").prop('checked', false);
    }
  });

  $("ul.addons li.list-two input").each(function() {
    $(this).change(function() {

      var base2 = <?php echo  $priceBase2; ?>;

      $("ul.addons li.list-two input[type=checkbox]:checked").each(function() {
        base2 += parseInt($(this).val());
      });
      console.log(base2);



      $(".base2").text(base2);
     
    });
  });
});
</script>
				  <!-- CLOSE LOOP -->
			  	
		  		<?php endwhile; ?>
		   </div>
		</div>
		
		<!-- TAB 3-->	
		<div role="tabpanel" class="tab-pane" id="optimization">
			<div class="design-process-content">
				<?php $loop = new WP_Query( 'post_type=Planes&tipo_planes=Avion de Turbina&posts_per_page=-1' ); ?>
        <?php $counterTab = 'Three'; ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<!-- OPEN LOOP -->
					<?php if ( have_rows( 'type_of_plan' ) ) : ?>
						<?php while ( have_rows( 'type_of_plan' ) ) : the_row(); ?>
							
				
							<!-- PLAN GENERAL-->
							<?php if ( have_rows( 'plan_general' ) ) : ?>
							   <!-- CARD -->
							   <div class="card-pricing">
									<?php while ( have_rows( 'plan_general' ) ) : the_row(); ?>
										<h5><?php the_sub_field( 'title_of_the_general_plan' ); ?></h5>	
										 <div class="price-items">
										 <div class="content-plan_general">
											<?php the_sub_field( 'contents_of_the_general_plan' ); ?>
										  </div>
										</div>
									<?php endwhile; ?>
								</div>
							<?php else : ?>
								<?php // no rows found ?>
							<?php endif; ?>
				
							<!-- PLAN POR SEMANA -->
							<?php if ( have_rows( 'plan_per_week' ) ) : ?>
								<?php while ( have_rows( 'plan_per_week' ) ) : the_row(); ?>
									<!-- CARD -->
									<div class="card-pricing">
									  <h5> <?php the_sub_field( 'plan_title' ); ?></h5>
									  <div class=" items2">
										<?php if ( have_rows( 'plan_content' ) ) : ?>
										<?php while ( have_rows( 'plan_content' ) ) : the_row(); ?>
											<div class="content-semana">
												<div class="image-check__semana">
													<img src="<?php echo get_template_directory_uri(); ?>/assets/img/check.png" alt="">
												</div>
												<p><?php the_sub_field( 'text_left' ); ?></p>
												<p class="content-semana__p"><?php the_sub_field( 'text_right' ); ?> </p>  
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

							<!-- PLAN ADICIONAL -->
							<?php if ( have_rows( 'additional_plan' ) ) : ?>
								<?php while ( have_rows( 'additional_plan' ) ) : the_row(); ?>
								   <!-- CARD -->
								   <div class="card-pricing">
									   <h5><?php the_sub_field( 'additional_plan_title' ); ?></h5>
									    
									   <div class="price-items">

										   <div class="price-items">
											
										   
											


												<ul class="addons">
													
													 <?php if ( have_rows( 'additional_plan_content' ) ) : ?>
													<?php $counterBase = 1; ?>
														<?php while ( have_rows( 'additional_plan_content' ) ) : the_row(); ?>

															  <li class="list-three">
																  
																<input type="checkbox" value="<?php the_sub_field( 'valor' ); ?>" id="<?php echo $counterTab.'_'.$counterBase; ?>" name="price" class="p1"/>
																<label for="<?php echo $counterTab.'_'.$counterBase; ?>"><?php the_sub_field( 'opcion' ); ?></label>
															  </li>
															
															
														<?php $counterBase++; endwhile; ?>
													<?php else : ?>
														<?php // no rows found ?>
													<?php endif; ?>
												
												
												</ul>
										   
										   
									   </div>
									   </div>
									</div>
								<?php endwhile; ?>
							<?php else : ?>
								<?php // no rows found ?>
							<?php endif; ?>

						  <!-- PRECIO DEL PLAN -->
						  <?php if ( have_rows( 'plan_price' ) ) : ?>
							  <?php while ( have_rows( 'plan_price' ) ) : the_row(); ?>
<?php $priceBase3 = get_sub_field( 'price' ); ?>
				 
								<h3> <?php the_sub_field( 'text_1' ); ?>
									<span class="price-span">	<?php the_sub_field( 'signo_$_o_valor_personalizado' ); ?> <span class=" base3"><?php the_sub_field( 'price' ); ?></span></span> / 
									<span class="text-precio"><?php the_sub_field( 'text_2' ); ?></span>  
								</h3> 
							  <?php endwhile; ?>
						  <?php else : ?>
						  <?php // no rows found ?>
						  <?php endif; ?>


					

						<?php endwhile; ?>
					<?php else : ?>
						<?php // no rows found ?>
					<?php endif; ?>
          <script>
	$(document).ready(function() {


  $("ul.addons li.list-three:nth-child(1) input").change(function() {
    if ($(this).prop('checked')) {
      $("ul.addons li.list-three:nth-child(1) input").prop('checked', true);
    }
  });

  $("ul.addons li.list-three:nth-child(2) input").change(function() {
    if ($(this).prop('checked')) {
      $("ul.addons li.list-three:nth-child(2) input").prop('checked', true);
    }
  });
    $("ul.addons li.list-three:nth-child(3) input").change(function() {
    if ($(this).prop('checked')) {
      $("ul.addons li.list-three:nth-child(3) input").prop('checked', true);
    }
  });

  $("ul.addons li.list-three:nth-child(4) input").change(function() {
    if ($(this).prop('checked')) {
      $("ul.addons li.list-three:nth-child(4) input").prop('checked', true);
    }
  });
		$("ul.addons li.list-three:nth-child(5) input").change(function() {
			if ($(this).prop('checked')) {
				$("ul.addons li.list-three:nth-child(5) input").prop('checked', true);
			}
		});
$("ul.addons li.list-three:nth-child(1) input").change(function() {
    if (!$(this).prop('checked')) {
      $("ul.addons li.list-three:nth-child(1) input").prop('checked', false);
    }
  });

   $("ul.addons li.list-three:nth-child(2) input").change(function() {
    if (!$(this).prop('checked')) {
      $("ul.addons li.list-three:nth-child(2) input").prop('checked', false);
    }
  });
  $("ul.addons li.list-three:nth-child(3) input").change(function() {
    if (!$(this).prop('checked')) {
      $("ul.addons li.list-three:nth-child(3) input").prop('checked', false);
    }
  });

   $("ul.addons li.list-three:nth-child(4) input").change(function() {
    if (!$(this).prop('checked')) {
      $("ul.addons li.list-three:nth-child(4) input").prop('checked', false);
    }
  });
   $("ul.addons li.list-three:nth-child(5) input").change(function() {
    if (!$(this).prop('checked')) {
      $("ul.addons li.list-three:nth-child(4) input").prop('checked', false);
    }
  });

  $("ul.addons li.list-three input").each(function() {
    $(this).change(function() {

      var base3 = <?php echo  $priceBase3; ?>;

      $("ul.addons li.list-three input[type=checkbox]:checked").each(function() {
        base3 += parseInt($(this).val());
      });
      console.log(base3);



      $(".base3").text(base3);
     
    });
  });
});
</script>
				  <!-- CLOSE LOOP -->

				<?php endwhile; ?>
			</div>
		</div>
   		
		<!-- TAB 4 -->	
		<div role="tabpanel" class="tab-pane" id="content">
			<div class="design-process-content">
				<?php $loop = new WP_Query( 'post_type=Planes&tipo_planes=Cohete&posts_per_page=-1' ); ?>
        <?php $counterTab = 'Four'; ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<!-- OPEN LOOP -->
					<?php if ( have_rows( 'type_of_plan' ) ) : ?>
						<?php while ( have_rows( 'type_of_plan' ) ) : the_row(); ?>
							
							<!-- PLAN GENERAL-->
						<?php if ( have_rows( 'plan_general' ) ) : ?>
			  			   <!-- CARD -->
						   <div class="card-pricing">
								<?php while ( have_rows( 'plan_general' ) ) : the_row(); ?>
									<h5><?php the_sub_field( 'title_of_the_general_plan' ); ?></h5>	
									 <div class="price-items">
									 <div class="content-plan_general">
										<?php the_sub_field( 'contents_of_the_general_plan' ); ?>
									  </div>
									</div>
								<?php endwhile; ?>
							</div>
						<?php else : ?>
							<?php // no rows found ?>
						<?php endif; ?>

							<!-- PLAN POR SEMANA -->
							<?php if ( have_rows( 'plan_per_week' ) ) : ?>
								<?php while ( have_rows( 'plan_per_week' ) ) : the_row(); ?>
									<!-- CARD -->
									<div class="card-pricing">
									  <h5> <?php the_sub_field( 'plan_title' ); ?></h5>
									  <div class=" items2">
										<?php if ( have_rows( 'plan_content' ) ) : ?>
										<?php while ( have_rows( 'plan_content' ) ) : the_row(); ?>
											<div class="content-semana">
												<div class="image-check__semana">
													<img src="<?php echo get_template_directory_uri(); ?>/assets/img/check.png" alt="">
												</div>
												<p><?php the_sub_field( 'text_left' ); ?></p>
												<p class="content-semana__p"><?php the_sub_field( 'text_right' ); ?> </p>  
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

							<!-- PLAN ADICIONAL -->
							<?php if ( have_rows( 'additional_plan' ) ) : ?>
								<?php while ( have_rows( 'additional_plan' ) ) : the_row(); ?>
								   <!-- CARD -->
								   <div class="card-pricing">
									   <h5><?php the_sub_field( 'additional_plan_title' ); ?></h5>
									     
									   <div class="price-items">
											
										   
											


												<ul class="addons">
													
													 <?php if ( have_rows( 'additional_plan_content' ) ) : ?>
													<?php $counterBase = 1; ?>
														<?php while ( have_rows( 'additional_plan_content' ) ) : the_row(); ?>

															  <li class="list-four">
																
																<input type="checkbox" value="<?php the_sub_field( 'valor' ); ?>" id="<?php echo $counterTab.'_'.$counterBase; ?>" name="price" class="p1"/>
																<label for="<?php echo $counterTab.'_'.$counterBase; ?>"><?php the_sub_field( 'opcion' ); ?></label>
															  </li>
															
															
														<?php $counterBase++; endwhile; ?>
													<?php else : ?>
														<?php // no rows found ?>
													<?php endif; ?>
												
												
												</ul>
										   
										   
									   </div>
									</div>
								<?php endwhile; ?>
							<?php else : ?>
								<?php // no rows found ?>
							<?php endif; ?>

						  <!-- PRECIO DEL PLAN -->
						  <?php if ( have_rows( 'plan_price' ) ) : ?>
							  <?php while ( have_rows( 'plan_price' ) ) : the_row(); ?>
								<?php $priceBase4 = get_sub_field( 'price' ); ?>
				 
								<h3> <?php the_sub_field( 'text_1' ); ?>
									<span class="price-span">	<?php the_sub_field( 'signo_$_o_valor_personalizado' ); ?> <span class=" base4"><?php the_sub_field( 'price' ); ?></span></span> / 
									<span class="text-precio"><?php the_sub_field( 'text_2' ); ?></span>  
								</h3> 
							  <?php endwhile; ?>
						  <?php else : ?>
						  <?php // no rows found ?>
						  <?php endif; ?>


						

						<?php endwhile; ?>
					<?php else : ?>
						<?php // no rows found ?>
					<?php endif; ?>
          <script>
	$(document).ready(function() {


  $("ul.addons li.list-four:nth-child(1) input").change(function() {
    if ($(this).prop('checked')) {
      $("ul.addons li.list-four:nth-child(1) input").prop('checked', true);
    }
  });

  $("ul.addons li.list-four:nth-child(2) input").change(function() {
    if ($(this).prop('checked')) {
      $("ul.addons li.list-four:nth-child(2) input").prop('checked', true);
    }
  });
    $("ul.addons li.list-four:nth-child(3) input").change(function() {
    if ($(this).prop('checked')) {
      $("ul.addons li.list-four:nth-child(3) input").prop('checked', true);
    }
  });

  $("ul.addons li.list-four:nth-child(4) input").change(function() {
    if ($(this).prop('checked')) {
      $("ul.addons li.list-four:nth-child(4) input").prop('checked', true);
    }
  });
		$("ul.addons li.list-four:nth-child(5) input").change(function() {
			if ($(this).prop('checked')) {
				$("ul.addons li.list-four:nth-child(5) input").prop('checked', true);
			}
		});
$("ul.addons li.list-four:nth-child(1) input").change(function() {
    if (!$(this).prop('checked')) {
      $("ul.addons li.list-four:nth-child(1) input").prop('checked', false);
    }
  });

   $("ul.addons li.list-four:nth-child(2) input").change(function() {
    if (!$(this).prop('checked')) {
      $("ul.addons li.list-four:nth-child(2) input").prop('checked', false);
    }
  });
  $("ul.addons li.list-four:nth-child(3) input").change(function() {
    if (!$(this).prop('checked')) {
      $("ul.addons li.list-four:nth-child(3) input").prop('checked', false);
    }
  });

   $("ul.addons li.list-four:nth-child(4) input").change(function() {
    if (!$(this).prop('checked')) {
      $("ul.addons li.list-four:nth-child(4) input").prop('checked', false);
    }
  });
   $("ul.addons li.list-four:nth-child(5) input").change(function() {
    if (!$(this).prop('checked')) {
      $("ul.addons li.list-four:nth-child(4) input").prop('checked', false);
    }
  });

  $("ul.addons li.list-four input").each(function() {
    $(this).change(function() {

      var base4 = <?php echo  $priceBase4; ?>;

      $("ul.addons li.list-four input[type=checkbox]:checked").each(function() {
        base4 += parseInt($(this).val());
      });
      console.log(base4);



      $(".base4").text(base4);
     
    });
  });
});
</script>
				  <!-- CLOSE LOOP -->

				<?php endwhile; ?>
			</div>

		</div>
	</div>
  </div>
</div>
	
<?php wp_reset_postdata();?>
<div class="btn-center">
		<?php $lang = get_bloginfo('language');
	    if( $lang == 'es-CO'): ?>
		<!-- ESPAÑOL -->
	
		<?php if ( get_field( 'seleccione_tipo_de_boton_precio' ) == 1 ) : ?>
			<?php $popup_de_precio = get_field( 'popup_de_precio' ); ?>
			<?php if ( $popup_de_precio ) : ?>
				<a class="btn_custom2 btn-open-modal" data-toggle="modal"  href="<?php echo esc_url( $popup_de_precio['url'] ); ?>" target="<?php echo esc_attr( $popup_de_precio['target'] ); ?>"><?php echo esc_html( $popup_de_precio['title'] ); ?></a>
			<?php endif; ?>

		<?php else : ?>
			<?php $enlace_precio = get_field( 'enlace_precio' ); ?>
			<?php if ( $enlace_precio ) : ?>
				<a class="btn_custom2 btn-open-modal" href="<?php echo esc_url( $enlace_precio['url'] ); ?>" target="<?php echo esc_attr( $enlace_precio['target'] ); ?>"><?php echo esc_html( $enlace_precio['title'] ); ?></a>
			<?php endif; ?>
		<?php endif; ?>

		<?php else: ?>
	
			<?php if ( get_field( 'select_pricing_type' ) == 1 ) : ?>
			<?php $buttom_pricing = get_field( 'buttom_pricing' ); ?>
			<?php if ( $buttom_pricing ) : ?>
			<a class="btn_custom2 btn-open-modal" data-toggle="modal" data-target="<?php echo esc_url( $buttom_pricing['url'] ); ?>" href="<?php echo esc_url( $buttom_pricing['url'] ); ?>" target="<?php echo esc_attr( $buttom_pricing['target'] ); ?>"><?php echo esc_html( $buttom_pricing['title'] ); ?></a>
			<?php endif; ?>
	
			<?php else : ?>
			<?php $link_pricing = get_field( 'link_pricing' ); ?>
			<?php if ( $link_pricing ) : ?>
			<a class="btn_custom2 btn-open-modal" href="<?php echo esc_url( $link_pricing['url'] ); ?>" target="<?php echo esc_attr( $link_pricing['target'] ); ?>"><?php echo esc_html( $link_pricing['title'] ); ?></a>
			<?php endif; ?>
			<?php endif; ?>
		
 		<?php endif; ?>
	
	
	

	</div>
	
</section>
	 
	