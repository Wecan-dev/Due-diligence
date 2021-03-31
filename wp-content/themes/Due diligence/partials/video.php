<section class="video ">
<div class="video-flex">
	<?php 
		$lang = get_bloginfo('language');
	    if( $lang == 'es-CO'): ?>
<div class="video-text">
	
<h2><?php echo get_theme_mod('section_video_title'); ?> </h2>
<p><?php echo get_theme_mod('section_video_subtitle'); ?></p>
<div class="" style="margin-top: 2%;">
<a class="btn_custom2" href="<?php echo get_theme_mod('section_video_urlbuttom'); ?>"><?php echo get_theme_mod('section_video_buttom'); ?></a>
</div>
</div>
	<?php else: ?>
			  <!-- INGLES-->
	<div class="video-text">
	
   <h2><?php echo get_theme_mod('section_video_title_ingles'); ?> </h2>
  <p><?php echo get_theme_mod('section_video_subtitle_ingles'); ?></p>
  <div class="" style="margin-top: 2%;">
   <a class="btn_custom2" href="<?php echo get_theme_mod('section_video_urlbuttom'); ?>"><?php echo get_theme_mod('section_video_buttom_ingles'); ?></a>
  </div>
</div>
	<?php endif; ?>
<div class="video-here">
<div class="icon-video">
	
<button type="button" data-toggle="modal" data-target="#exampleModal">
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Titulo</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    
   <?php  $extension = pathinfo(get_theme_mod('section_video_url'))['extension']; ?>
             <?php if($extension=="jpg" || $extension == "jpeg" || $extension == "png"){ ?>
                   <img src="<?php echo get_theme_mod('section_video_url') ?>">
              <?php } else { ?> 
                    <video class="main-banner__video" id="mivideo "  preload loop controls >
                        <source src="<?php echo get_theme_mod('section_video_url') ?>" type="video/mp4">
                    </video>  
         <?php } ?>

  </div>
</div>
</div>
</div>
	
<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/play.png"> -->
	

	</button>
</div>
<div class="text-video">
<!-- <h4>+20</h4> -->
</div>

</div>

</div>
</section>