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
	<h2> <?php the_field( 'title_faq' ); ?></h2>
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
		<?php endwhile; wp_reset_postdata(); ?>

    </div>
  </div><!--- END COL -->		
</div><!--- END ROW -->			
</div>
</section>
<div style=" display: flex; justify-content: center;">
		<?php 
		$lang = get_bloginfo('language');
	    if( $lang == 'es-CO'): ?>
		<!-- ESPAÑOL -->
			<?php if ( get_field( 'seleccione_tipo_de_boton_preguntas' ) == 1 ) : ?>
			<?php $popup_de_preguntas_frecuencias = get_field( 'popup_de_preguntas_frecuencias' ); ?>
			<?php if ( $popup_de_preguntas_frecuencias ) : ?>
				<a class="btn_custom btn-open-modal text-uppe" data-toggle="modal" href="<?php echo esc_url( $popup_de_preguntas_frecuencias['url'] ); ?>" target="<?php echo esc_attr( $popup_de_preguntas_frecuencias['target'] ); ?>"><?php echo esc_html( $popup_de_preguntas_frecuencias['title'] ); ?></a>
			<?php endif; ?>
		<?php else : ?>
			<?php $enlace_faq = get_field( 'enlace_faq' ); ?>
			<?php if ( $enlace_faq ) : ?>
				<a class="btn_custom btn-open-modal text-uppe "  href="<?php echo esc_url( $enlace_faq['url'] ); ?>" target="<?php echo esc_attr( $enlace_faq['target'] ); ?>"><?php echo esc_html( $enlace_faq['title'] ); ?></a>
			<?php endif; ?>
		<?php endif; ?>
		
		<?php else: ?>
	
	
	<?php if ( get_field( 'select_faq_type' ) == 1 ) : ?>
		<?php $buttom_faq = get_field( 'buttom_faq' ); ?>
		<?php if ( $buttom_faq ) : ?>
			<a  class="btn_custom btn-open-modal text-uppe" data-toggle="modal" data-target="<?php echo esc_url( $buttom_faq['url'] ); ?>" href="<?php echo esc_url( $buttom_faq['url'] ); ?>" target="<?php echo esc_attr( $buttom_faq['target'] ); ?>"><?php echo esc_html( $buttom_faq['title'] ); ?></a>
		<?php endif; ?>
	
	<?php else : ?>
		<?php $link_faq = get_field( 'link_faq' ); ?>
<?php if ( $link_faq ) : ?>
	<a class="btn_custom btn-open-modal text-uppe" href="<?php echo esc_url( $link_faq['url'] ); ?>" target="<?php echo esc_attr( $link_faq['target'] ); ?>"><?php echo esc_html( $link_faq['title'] ); ?></a>
<?php endif; ?>
	<?php endif; ?>
		
 		<?php endif; ?>
	
	

</div>
</section>
<style>
	.text-uppe{
		text-transform: uppercase;
	}
</style>
