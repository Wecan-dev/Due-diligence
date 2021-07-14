<section id="team" class="team">
<div class="title-flex">
<div class="icon-pricing">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" alt="">
</div>
	 <h2><?php the_field( 'title_team' ); ?></h2>
</div>
<div class="line-pricing">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/line26.png" alt="">
</div>


<div class="multiple-card container">
	<?php $args = array( 'post_type' => 'Team', ); ?>
	<?php $loop = new WP_Query( $args ); ?>
	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
  <div class="item-card">
    <div class="item-img"> 
        <div class="red-social">
          <div>
			  <a  target="_blank" href="<?php the_field( 'redes_link' ); ?>">
			    <img src="http://159.89.229.55/Due-diligence/wp-content/uploads/2021/03/linkedin-1.png">
			  </a>
           
          </div>
         

        </div>
      <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
    </div>
   
    <div class="text-card">
      <h5><?php the_title(); ?></h5>
        <?php the_content(); ?>
    </div>
  </div>
	<?php endwhile; wp_reset_postdata(); ?>
  
   
    


</div>
</section>