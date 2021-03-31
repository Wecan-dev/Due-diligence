<section id="section1" class="work">
	  <?php 
		$lang = get_bloginfo('language');
	    if( $lang == 'es-CO'): ?>
			  <!-- ESPAÑOL -->
  <div class="work-flex">
	 <div class="work-text">
      <h2><?php echo get_theme_mod('section_mapa_title'); ?></h2>
    <div class="linea"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/linea.png" alt=""></div>
      <p><?php echo get_theme_mod('section_mapa_subtitle'); ?></p>
    <div style="width: fit-content;">
      <a class="btn_custom" href="<?php echo get_theme_mod('section_mapa_urlbuttom'); ?>"><?php echo get_theme_mod('section_mapa_buttom'); ?></a></div>
    </div>
    <div class="work-img">
    <img src="<?php echo get_theme_mod('section_mapa_image'); ?>" alt="">
    <div class="lorem"> <p>wwww.lorem impusn dolor sitamet</p>  </div>
  </div>
</div>
	<?php else: ?>
			  <!-- INGLES-->
	 <div class="work-flex">
	 <div class="work-text">
      <h2><?php echo get_theme_mod('section_mapa_title_ingles'); ?></h2>
    <div class="linea"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/linea.png" alt=""></div>
      <p><?php echo get_theme_mod('section_mapa_subtitle_ingles'); ?></p>
    <div style="width: fit-content;">
      <a class="btn_custom" href="<?php echo get_theme_mod('section_mapa_urlbuttom'); ?>"><?php echo get_theme_mod('section_mapa_buttom_ingles'); ?></a></div>
    </div>
    <div class="work-img">
    <img src="<?php echo get_theme_mod('section_mapa_image'); ?>" alt="">
    <div class="lorem"> <p>wwww.lorem impusn dolor sitamet</p>  </div>
  </div>
</div>
	<?php endif; ?>
</section>