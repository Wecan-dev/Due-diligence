<!-- footer start -->
<footer class="ftco-footer ftco-section">
<div class="container">
<div class="row mb-5">
  <div class="col-md-3 logo-footer">
    <div class="ftco-footer-widget">
      <div class="logo-footer" style="justify-content: flex-start;">

        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png">
      </div>
		<?php 
		$lang = get_bloginfo('language');
	    if( $lang == 'es-CO'): ?>
			  <!-- ESPAÑOL -->
      <p> Due Diligence es un servicio de asesoría y contabilidad en línea que te permite ahorrar tiempo para que puedas concentrarte en lo más importante para tu negocio.

Facilita preparación de impuestos, realiza facturación y cobranza, registra obligaciones y sus respectivos pagos, seguimiento de gastos y ayuda a servicios de nómina.

Cuando te suscribes a Due Diligence, obtienes todo un equipo contable, financiero y gerencial que siempre está disponible para ayudarte.</p>
		<?php else: ?>
			  <!-- INGLES-->
<p>Due Diligence is an online accounting and consulting service that saves you time so you can focus on what is most important to your business.

It facilitates tax preparation, invoicing and collection, recording bills and their payments, expense tracking and helping with payroll services providers.

When you subscribe to due diligence, you get an entire accounting, finance and management team that is always available to help you.</p>
			<?php endif; ?>
    </div>
  </div>

  <div class="col-md-3 logo-footer">
    <div class="ftco-footer-widget">
      <h2 class="ftco-heading-2">Menu</h2>
      <hr>
      <div class="block-237 ">
		  <?php 
		$lang = get_bloginfo('language');
	    if( $lang == 'es-CO'): ?>
			  <!-- ESPAÑOL -->
        <div>
          <li ><a href="#works	">¿Cómo funcionamos?</a></li>
          <li ><a href="#pricing	">Precios</a></li>
          <li ><a href="#solutions	">Soluciones</a></li>
          <li ><a href="#team	">Nuestro Equipo</a></li>
			 <li ><a href="<?php echo bloginfo('url');?>/index.php/education	">Educación</a></li>
        </div>
		  <?php else: ?>
			  <!-- INGLES-->
		   <div>
          <li ><a href="#works	">How It Works</a></li>
		<li ><a href="#pricing	">Pricing </a></li>
          <li ><a href="#solutions	">Solutions</a></li>
          <li ><a href="#team	">Our Team</a></li>
		  
          <li ><a href="<?php echo bloginfo('url');?>/index.php/education	">Education</a></li>
        </div>
		  <?php endif; ?>
      </div>
    </div>
  </div>


  <div class="col-md-3 logo-footer">
    <div class="ftco-footer-widget">
      <h2 class="ftco-heading-2">Contact</h2>
      <hr>
      <div class="block-237 ">
        <div class="this-block">
          <li><i class="fa fa-map-marker" aria-hidden="true"></i><a target="_blank" href="https://goo.gl/maps/8Y2rT91DfSf8YraJ8"><span class="text">P.O. BOX 144597 CORAL GABLES FL 33114</span></a></li>
          <li><a href="mailto:info@duediligenceuscorp.com"><i class="fa fa-envelope" aria-hidden="true"></i><span class="text">Email: info@duediligenceuscorp.com</span></a></li>
          <li ><a href="tel:(+1) 305 712 4957"><i class="fa fa-phone" aria-hidden="true"></i><span class="text">Phone: (+1) 305 712 4957</span></a></li>
   

        </div>
      </div>
    </div>

  </div>

  <div class="col-md-3 logo-footer">
    <div class="ftco-footer-widget social">
      <h2 class="ftco-heading-2">Social Media</h2>
      <hr>
      <div class="ftco-footer-social list-unstyled ">
        <li class="ftco-animate"><a target="_blank" href=" https://www.facebook.com/DueDiligenceUSCorp"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li class="ftco-animate"><a target="_blank" href="https://twitter.com/duediligenceus"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        <li class="ftco-animate"><a target="_blank" href="https://www.youtube.com/channel/UCjz8JCOXtj28zBvU5MABgjQ"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
        <li class="ftco-animate"><a target="_blank" href="https://www.instagram.com/duediligenceuscorp/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        <li class="ftco-animate"><a target="_blank" href="https://www.linkedin.com/company/due-diligence-us-corp/?viewAsMember=true"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
      </div>
    </div>
  </div>
</div>

</div>
<hr class="hr-this">
<div class=" copy text-center">
<p style="margin-bottom: 0;

padding-top: 25px;
padding-bottom: 25px;
color: black!important;
"><a href="https://branch.com.co/" >Copyright © 2020 Branch</a>
</p>
</div>
</footer>
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
                    <video class="main-banner__video" id="mivideo">
                        <source src="<?php echo get_theme_mod('section_video_url') ?>" type="video/mp4">
                    </video>  
         <?php } ?>

  </div>
</div>
</div>
</div>
<!--/ footer end  -->
<!--===============================================================================================-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



<script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow-settings.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/setting-slick.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>