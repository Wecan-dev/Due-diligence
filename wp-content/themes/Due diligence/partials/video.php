<section class="video ">
<div class="video-flex">

<div class="video-text">
	
<h2><?php the_field( 'title_experience' ); ?> </h2>
<p><?php the_field( 'description_experience' ); ?></p>
<div class="" style="margin-top: 2%;">
	
	<?php $buttom_experience = get_field( 'buttom_experience' ); ?>
<?php if ( $buttom_experience ) : ?>
	<a  class="btn_custom2" href="<?php echo esc_url( $buttom_experience['url'] ); ?>" target="<?php echo esc_attr( $buttom_experience['target'] ); ?>"><?php echo esc_html( $buttom_experience['title'] ); ?></a>
<?php endif; ?>
	
<!--<a href="<?php echo get_theme_mod('section_video_urlbuttom'); ?>"><?php echo get_theme_mod('section_video_buttom'); ?></a>-->
</div>
</div>

<div class="video-here">
	<button type="button" data-toggle="modal" data-target="#exampleModal">
	<div class="text-video" id="counter-stats">
		  <span>+</span>
 <div class="counting" data-count="20">0</div>
</div>
	  <?php $video_experience = get_field( 'video_experience' ); ?>
<?php if ( $video_experience ) : ?>
	  <video class="main-banner__video" id="mivideo "  preload loop  >
                        <source src="<?php echo esc_url( $video_experience['url'] ); ?>" type="video/mp4">
                    </video> 

<?php endif; ?>
		<div class="main-video__icon">
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/play.png">
	</div>

	</button>
	
	



</div>

</div>
</section>

<div class="modal fade modal__video" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">

  <div class="modal-body">
	    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
	  
   <?php $video_experience = get_field( 'video_experience' ); ?>
<?php if ( $video_experience ) : ?>
	  <video class="main-banner__video" id="mivideo "  preload loop  controls>
                        <source src="<?php echo esc_url( $video_experience['url'] ); ?>" type="video/mp4">
                    </video> 

<?php endif; ?>

  </div>
</div>
</div>
</div>