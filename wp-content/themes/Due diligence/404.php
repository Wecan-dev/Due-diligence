 <?php get_header(); ?>
<section class="error-found">
	
	<?php 
		$lang = get_bloginfo('language');
	    if( $lang == 'es-CO'): ?>
			  <!-- ESPAÑOL -->
    		<div class="container">
				<h2>404</h2>
				<h6>Lo sentimos, no podemos encontrar la página que estás buscando </h6>

				<div class="btn-back">
					<button class="btn_custom"><a href="<?php echo bloginfo('url');?>/">Regresar al inicio</a></button>
				</div>
			</div>
		 <?php else: ?>
			  <!-- INGLES-->
		<div class="container">
				<h2>404</h2>
				<h6>Sorry, we can't find the page you're looking for </h6>

				<div class="btn-back">
					<button class="btn_custom"><a href="<?php echo bloginfo('url');?>/">Back to top</a></button>
				</div>
			</div>
	  <?php endif; ?>	
	
	
</section>

<style>
	.error-found{
		    padding: 10rem 0 2rem 0;
    text-align: center;
	}
	
	.error-found h2 {
		    font-size: 150px;
	}
	.error-found h6{
		    margin: 0rem 0 4rem 0;
	}
	
	.error-found  .btn-back {
		display: flex;
    justify-content: center;
	}
</style>

  <?php get_footer(); ?>