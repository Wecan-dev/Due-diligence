<section id="section1" class="work">
  <div class="work-flex">
	 <div class="work-text">
      <h2><?php the_field( 'title_map' ); ?></h2>
    <div class="linea"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/linea.png" alt=""></div>
      <p><?php the_field( 'description_map' ); ?></p>
		 <div class="main-img__country">
			 <a href="https://www.instagram.com/duediligenceuscorp/" target="_blank">
			 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/colombia.png" alt="">
			 </a>
			 
			 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mexico.png" alt="">
			 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/argentina.png" alt="">
			 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/chile.png" alt="">
			 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/peru.png" alt="">
		 </div>
    <div style="width: fit-content;display:none">
      <a class="btn_custom" href="<?php echo get_theme_mod('section_mapa_urlbuttom'); ?>"><?php echo get_theme_mod('section_mapa_buttom'); ?></a></div>
    </div>
	
	  
    <div class="work-img">
    <?php $image_map = get_field( 'image_map' ); ?>
	<?php if ( $image_map ) : ?>
		<img src="<?php echo esc_url( $image_map['url'] ); ?>" alt="<?php echo esc_attr( $image_map['alt'] ); ?>" />
	<?php endif; ?>
   
  </div>
</div>
</section>
<style>
	.main-img__country{
		display: flex !important;
	}
	.main-img__country img, .main-img__country a img{
		    width: 35px;
    height: 35px;
    object-fit: contain;
    margin-right: 1rem;
	}
</style>