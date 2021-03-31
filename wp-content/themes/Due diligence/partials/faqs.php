<section class="faqs">
<div class="mancha3">
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/1.png" alt="">
</div>

<div class="mancha4">
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/2.png" alt="">
</div>
<div class="title-flex">
<div class="icon-pricing">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" alt="">
</div>
	 <?php 
		$lang = get_bloginfo('language');
	    if( $lang == 'es-CO'): ?>
			  <!-- ESPAÑOL -->
<h2>Preguntas frecuentes</h2>
	 <?php else: ?>
			  <!-- INGLES-->
	<h2> Frequently asked questions</h2>
	 <?php endif; ?>
</div>
<div class="line-pricing">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/line26.png" alt="">
</div>
<section class="faqs_acc">
  <div class="container">
<div class="row">				
  <div class="col-md-12">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		<?php $args = array( 'post_type' => 'FAQ', ); ?>
	<?php $loop = new WP_Query( $args ); ?>
	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne<?php the_id(); ?>">
          <h4 class="panel-title">
            <a  class="collapsed active2 "  role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne<?php the_id(); ?>" aria-expanded="false" aria-controls="collapseOne<?php the_id(); ?>">
              <i class="fa fa-plus" aria-hidden="true"></i> <?php the_title(); ?>
            </a>
          </h4>
        </div>
        <div id="collapseOne<?php the_id(); ?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
          <div class="panel-body">
           <?php the_content(); ?>
          </div>
        </div>
      </div>
		<?php endwhile; ?>

    </div>
  </div><!--- END COL -->		
</div><!--- END ROW -->			
</div>
</section>
<div style=" display: flex; justify-content: center;">
	 <?php 
		$lang = get_bloginfo('language');
	    if( $lang == 'es-CO'): ?>
<a class="btn_custom" href="">EMPEZAR AHORA</a></div>
	<?php else: ?>
			  <!-- INGLES-->
	<a class="btn_custom" href="">LET'S START NOW</a>
	<?php endif; ?>
</div>
</section>
