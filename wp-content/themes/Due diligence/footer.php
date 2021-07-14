<?php if(is_front_page()): ?>
<!-- footer start -->
<footer class="ftco-footer ftco-section">
<div class="container">
<div class="row mb-5">
  <div class="col-lg-3 col-md-4 logo-footer">
    <div class="ftco-footer-widget">
      <div class="logo-footer" style="justify-content: flex-start;">

        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png">
      </div>
		<?php 
		$lang = get_bloginfo('language');
	    if( $lang == 'es-CO'): ?>
			  <!-- ESPAÑOL -->
      <p style="text-align: justify;"> Due Diligence es un servicio de asesoría y contabilidad en línea que te permite ahorrar tiempo para que puedas concentrarte en lo más importante para tu negocio.<br>

Facilita preparación de impuestos, realiza facturación y cobranza, registra obligaciones y sus respectivos pagos, seguimiento de gastos y ayuda a servicios de nómina.<br>
		  Cuando te suscribes a Due Diligence, obtienes todo un equipo contable, financiero y gerencial que siempre está disponible para ayudarte.

</p>
	
		<?php else: ?>
			  <!-- INGLES-->
<p  style="text-align: justify;" >Due Diligence is an online accounting and consulting service that saves you time so you can focus on what is most important to your business.<br>

It facilitates tax preparation, invoicing and collection, recording bills and their payments, expense tracking and helping with payroll services providers.<br>
	When you subscribe to due diligence, you get an entire accounting, finance and management team that is always available to help you.

</p>
	
			<?php endif; ?>
    </div>
  </div>

  <div class="col-lg-3 col-md-3 logo-footer">
    <div class="ftco-footer-widget">
		
		
    
      <div class="block-237 ">
		  <?php 
		$lang = get_bloginfo('language');
	    if( $lang == 'es-CO'): ?>
			  <!-- ESPAÑOL -->
        <div>
			  <h2 class="ftco-heading-2">Menú</h2>
      			<hr>
          <li ><a class="nav-scrolling" href="#works">¿Cómo funcionamos?</a></li>
          <li ><a class="nav-scrolling" href="#pricing">Precios</a></li>
          <li ><a class="nav-scrolling" href="#solutions">Soluciones</a></li>
          <li ><a class="nav-scrolling" href="#team">Nuestro Equipo</a></li>
			 <li ><a class="nav-scrolling" href="<?php echo bloginfo('url');?>/index.php/educacion	">Educación</a></li>
        </div>
		  <?php else: ?>
			  <!-- INGLES-->
		   <div>
			     <h2 class="ftco-heading-2">Menu</h2>
      <hr>
          <li ><a class="nav-scrolling" href="#works	">How It Works</a></li>
		<li ><a class="nav-scrolling" href="#pricing	">Pricing </a></li>
          <li ><a class="nav-scrolling" href="#solutions	">Solutions</a></li>
          <li ><a class="nav-scrolling" href="#team	">Our Team</a></li>
		  
          <li ><a class="nav-scrolling" href="<?php echo bloginfo('url');?>/index.php/education	">Education</a></li>
        </div>
		  <?php endif; ?>
      </div>
    </div>
  </div>


  <div class="col-lg-3 col-md-3 logo-footer">
    <div class="ftco-footer-widget">
		  <?php 
		$lang = get_bloginfo('language');
	    if( $lang == 'es-CO'): ?>
			  <!-- ESPAÑOL -->
      <h2 class="ftco-heading-2">Contacto</h2>
		 <?php else: ?>
			  <!-- INGLES-->
		<h2 class="ftco-heading-2">Contact</h2>
	  <?php endif; ?>	
      <hr>
      <div class="block-237 ">
		  	<?php 
		$lang = get_bloginfo('language');
	    if( $lang == 'es-CO'): ?>
        <div class="this-block">
          <li><i class="fa fa-map-marker" aria-hidden="true"></i><a target="_blank" href="https://goo.gl/maps/8Y2rT91DfSf8YraJ8"><span class="text">P.O. BOX 144597 CORAL GABLES FL 33114</span></a></li>
          <li><a href="mailto:info@duediligenceuscorp.com"><i class="fa fa-envelope" aria-hidden="true"></i><span class="text">Correo: info@duediligenceuscorp.com</span></a></li>
          <li ><a href="tel:(+1) 305 712 4957"><i class="fa fa-phone" aria-hidden="true"></i><span class="text">Telefono: (+1) 305 712 4957</span></a></li>
   

        </div>
		  		<?php else: ?>
			  <!-- INGLES-->
		   <div class="this-block">
          <li><i class="fa fa-map-marker" aria-hidden="true"></i><a target="_blank" href="https://goo.gl/maps/8Y2rT91DfSf8YraJ8"><span class="text">P.O. BOX 144597 CORAL GABLES FL 33114</span></a></li>
          <li><a href="mailto:info@duediligenceuscorp.com"><i class="fa fa-envelope" aria-hidden="true"></i><span class="text">Email: info@duediligenceuscorp.com</span></a></li>
          <li ><a href="tel:(+1) 305 712 4957"><i class="fa fa-phone" aria-hidden="true"></i><span class="text">Phone: (+1) 305 712 4957</span></a></li>
   

        </div>
		   <?php endif; ?>	
      </div>
    </div>

  </div>

  <div class="col-lg-3 col-md-2 logo-footer">
    <div class="ftco-footer-widget social">
		  <?php 
		$lang = get_bloginfo('language');
	    if( $lang == 'es-CO'): ?>
			  <!-- ESPAÑOL -->
      <h2 class="ftco-heading-2">Síguenos</h2>
		 <?php else: ?>
			  <!-- INGLES-->
		<h2 class="ftco-heading-2">Follow Us</h2>
	  <?php endif; ?>	
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
  <?php else: ?>
<!-- footer start -->
<footer class="ftco-footer ftco-section">
<div class="container">
<div class="row mb-5">
  <div class="col-lg-3 col-md-4 logo-footer">
    <div class="ftco-footer-widget">
      <div class="logo-footer" style="justify-content: flex-start;">

        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png">
      </div>
		<?php 
		$lang = get_bloginfo('language');
	    if( $lang == 'es-CO'): ?>
			  <!-- ESPAÑOL -->
      <p style="text-align: justify;"> Due Diligence es un servicio de asesoría y contabilidad en línea que te permite ahorrar tiempo para que puedas concentrarte en lo más importante para tu negocio.<br>

Facilita preparación de impuestos, realiza facturación y cobranza, registra obligaciones y sus respectivos pagos, seguimiento de gastos y ayuda a servicios de nómina.<br>

Cuando te suscribes a Due Diligence, obtienes todo un equipo contable, financiero y gerencial que siempre está disponible para ayudarte.</p>
		<?php else: ?>
			  <!-- INGLES-->
<p style="text-align: justify;" >Due Diligence is an online accounting and consulting service that saves you time so you can focus on what is most important to your business.<br>

It facilitates tax preparation, invoicing and collection, recording bills and their payments, expense tracking and helping with payroll services providers.<br>

When you subscribe to due diligence, you get an entire accounting, finance and management team that is always available to help you.</p>
			<?php endif; ?>
    </div>
  </div>

  <div class="col-lg-3 col-md-3 logo-footer">
    <div class="ftco-footer-widget">
      <h2 class="ftco-heading-2">Menú</h2>
      <hr>
      <div class="block-237 ">
		  <?php 
		$lang = get_bloginfo('language');
	    if( $lang == 'es-CO'): ?>
			  <!-- ESPAÑOL -->
        <div>
          <li ><a href="http://159.89.229.55/Due-diligence/index.php/es/#works">¿Cómo funcionamos?</a></li>
          <li ><a href="http://159.89.229.55/Due-diligence/index.php/es/#pricing">Precios</a></li>
          <li ><a href="http://159.89.229.55/Due-diligence/index.php/es/#solutions">Soluciones</a></li>
          <li ><a href="http://159.89.229.55/Due-diligence/index.php/es/#team">Nuestro Equipo</a></li>
			 <li ><a href="<?php echo bloginfo('url');?>/index.php/educacion	">Educación</a></li>
        </div>
		  <?php else: ?>
			  <!-- INGLES-->
		   <div>
          <li ><a href="http://159.89.229.55/Due-diligence/#works">How It Works</a></li>
		<li ><a href="http://159.89.229.55/Due-diligence/#pricing	">Pricing </a></li>
          <li ><a href="http://159.89.229.55/Due-diligence/#solutions	">Solutions</a></li>
          <li ><a href="http://159.89.229.55/Due-diligence/#team	">Our Team</a></li>
		  
          <li ><a href="<?php echo bloginfo('url');?>/index.php/education	">Education</a></li>
        </div>
		  <?php endif; ?>
      </div>
    </div>
  </div>


  <div class="col-lg-3 col-md-3 logo-footer">
    <div class="ftco-footer-widget">
		  <?php 
		$lang = get_bloginfo('language');
	    if( $lang == 'es-CO'): ?>
			  <!-- ESPAÑOL -->
      <h2 class="ftco-heading-2">Contacto</h2>
		 <?php else: ?>
			  <!-- INGLES-->
		<h2 class="ftco-heading-2">Contact</h2>
	  <?php endif; ?>	
      <hr>
      <div class="block-237 ">
		  	<?php 
		$lang = get_bloginfo('language');
	    if( $lang == 'es-CO'): ?>
        <div class="this-block">
          <li><i class="fa fa-map-marker" aria-hidden="true"></i><a target="_blank" href="https://goo.gl/maps/8Y2rT91DfSf8YraJ8"><span class="text">P.O. BOX 144597 CORAL GABLES FL 33114</span></a></li>
          <li><a href="mailto:info@duediligenceuscorp.com"><i class="fa fa-envelope" aria-hidden="true"></i><span class="text">Correo: info@duediligenceuscorp.com</span></a></li>
          <li ><a href="tel:(+1) 305 712 4957"><i class="fa fa-phone" aria-hidden="true"></i><span class="text">Telefono: (+1) 305 712 4957</span></a></li>
   

        </div>
		  		<?php else: ?>
			  <!-- INGLES-->
		   <div class="this-block">
          <li><i class="fa fa-map-marker" aria-hidden="true"></i><a target="_blank" href="https://goo.gl/maps/8Y2rT91DfSf8YraJ8"><span class="text">P.O. BOX 144597 CORAL GABLES FL 33114</span></a></li>
          <li><a href="mailto:info@duediligenceuscorp.com"><i class="fa fa-envelope" aria-hidden="true"></i><span class="text">Email: info@duediligenceuscorp.com</span></a></li>
          <li ><a href="tel:(+1) 305 712 4957"><i class="fa fa-phone" aria-hidden="true"></i><span class="text">Phone: (+1) 305 712 4957</span></a></li>
   

        </div>
		   <?php endif; ?>	
      </div>
    </div>

  </div>

  <div class="col-lg-3 col-md-3 logo-footer">
    <div class="ftco-footer-widget social">
		  <?php 
		$lang = get_bloginfo('language');
	    if( $lang == 'es-CO'): ?>
			  <!-- ESPAÑOL -->
      <h2 class="ftco-heading-2">Síguenos</h2>
		 <?php else: ?>
			  <!-- INGLES-->
		<h2 class="ftco-heading-2">Follow Us</h2>
	  <?php endif; ?>	
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


<?php endif; ?>







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
						<source src="http://159.89.229.55/Due-diligence/wp-content/uploads/2021/06/beautiful-night-aerial-brickell-miami-2YYAVWW-1.mp4"  type="video/mp4">
                        <source src="<?php echo get_template_directory_uri(); ?>/assets/img/beautiful-night-aerial-brickell-miami-2YYAVWW-1.ogg"  type="video/ogg">
                    </video>  
         <?php } ?>

  </div>
</div>
</div>
</div>




<!-- Modal Fullscreen xl -->

	<div class="modal modal-fullscreen-xl" id="modal-fullscreen-xl" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
      <div class="modal-body">
		   
        <div class="main-modal__content" >
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
			<video id="video_modal"  autoplay muted >
			<source src="http://159.89.229.55/Due-diligence/wp-content/uploads/2021/07/videoplayback.mp4"  type="video/mp4">
                        <source src="<?php echo get_template_directory_uri(); ?>/assets/img/beautiful-night-aerial-brickell-miami-2YYAVWW-1.ogg"  type="video/ogg">
				</video>
			<div class="main-modal__grid">
				<div class="main-modal__item">
					<div class="main-modal__img">
						<a  class="logo-main"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-blanco.svg" alt="logo"> </a>
					</div>
					
					<div class="main-modal__text">
						<div class="main-modal__shadow">
							<?php 
								$lang = get_bloginfo('language');
								if( $lang == 'es-CO'): ?>
									  <!-- ESPAÑOL -->
							  		<div class="main-modal__card">
											<div class="work-text">
											  <h2>Hablemos de tu negocio</h2>
											<div class="linea"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/linea.png" alt=""></div>
											  <p>Antes de que podamos comenzar tu mes gratuito de contabilidad, necesitaremos más detalles. Indícanos cuál es tu número de teléfono para comunicarnos contigo y nos pondremos en contacto lo antes posible para comenzar.
</p>

									</div>
								</div>
								 <?php else: ?>
									  <!-- INGLES-->
									<div class="main-modal__card">
												<div class="work-text">
												  <h2>Let's talk about your business</h2>
												<div class="linea"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/linea.png" alt=""></div>
												  <p>Before we can get your free month of bookkeeping started, we'll need a few more details. Let us know the best phone number to reach you, and we'll get in touch ASAP to get started.</p>

										</div>
									</div>
							  <?php endif; ?>
					</div>
					<div class="main-modal__form">
						<?php 
						$lang = get_bloginfo('language');
						if( $lang == 'es-CO'): ?>
						<!-- ESPAÑOL -->
							<?php echo FrmFormsController::get_form_shortcode( array( 'id' => 1, 'title' => false, 'description' => false ) ); ?>
						 <?php else: ?>
						<!-- INGLES-->
						<?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2, 'title' => false, 'description' => false ) ); ?>
						 <?php endif; ?>
					</div>
				 
			</div>
				
				
				
			</div>
				<div class="main-modal__item main-modal__video">
					<div class="content-modal__video">
						
						</div>
				
			</div>
		</div>
      </div>
     
    </div>
  </div>
</div>


<style>
	#video_modal{
		    top: 0;
    left: 0;
    width: 100vw;
    height: 110vh;
    object-fit: cover;
	}
	.main-modal__video{
		display: flex;
		justify-content: center;
		align-items: center;
	}
	.content-modal__video{
		width: 100%;
		height: 400px;
		
	}
	.content-modal__video video{
		width:100%;
		height:100%;
		object-fit: cover;
	}
	.modal-fullscreen-xl .close {
    float: right;
    font-size: 3.5rem;
    font-weight: 700;
    line-height: 1;
       color: #fff;
    text-shadow: 0 1px 0 #fff;
    opacity: .5;
    margin: 1rem 2rem;
		    position: absolute;
    right: 0;
    z-index: 999999;
}
	.main-modal__img .logo-main img{
		    width: 35%;
    margin-bottom: 1rem;

	}
	
	.frm_style_formidable-style.with_frm_style .form-field {
    margin-bottom: 15px;
}
	
	.main-modal__card, .main-modal__form {
		background-color: #ffff;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 1px 5px 0px rgb(154 150 146 / 40%);
    width: 80%;
    margin-bottom: 1.5rem;
	}
	.main-modal__form {
		margin-bottom: 0;
		padding: 2rem 2rem 0  2rem;
	}
	.main-modal__card .work-text{
		width: 100%;
	}
	.main-modal__card .work-text h2 {
    font-size: 25px;
}
	
	.main-modal__card  .work-text p {
    line-height: 26px;
    margin-bottom: 12px;
    color: rgb(158 158 158 / 86%);
    font-size: 13px;
		font-weight: 300;
}
	
.modal-fullscreen-xl {
  padding: 0 !important;

}
.modal-fullscreen-xl .modal-dialog {
  width: 100%;
  max-width: none;
  height: 100%;
  margin: 0;
	display: flex;
    justify-content: center;
}
.modal-fullscreen-xl .modal-content {
  height: 100%;
  border: 0;
  border-radius: 0;
	max-width:1600px;
}
.modal-fullscreen-xl .modal-body {
  overflow-y: scroll;
			padding:0;
	height: 100%;
}


.btn-open-modal {
  margin-bottom: 0.5em;
}
	.main-modal__content{
	    
		width: 100%;
		height: 110vh;
		background-position: center;
		background-size: cover;
		background-repeat: no-repeat;
		overflow: hidden;
		    
	}
	.main-modal__grid{
		display: grid;
		grid-template-columns: 1.5fr 1fr;
		grid-gap:2rem;
		position: absolute;
    top: 0;
    padding: .5rem 4rem;
	}
	.main-modal__content label {
		position: relative;
	}
	.main-modal__content label img{
	    width: 15px;
    position: absolute;
    top: 14px;
    left: 10px;
    object-fit: none;
	}
	.main-modal__content input {
		background-color: rgb(235 235 235 / 75%) !important;
    border: none  !important;
    height: 40px !important;
		border-color: transparent !important;
		color:#808080 !important;
		font-family: 'Montserrat' !important;
		    padding: 1rem 2rem !important;
	}
	.main-modal__content select {
		background-color: rgb(235 235 235 / 75%) !important;
    border: none !important;
		 height: 40px !important;
		color:rgb(128 128 128 / 76%) !important;
		font-family: 'Montserrat' !important;
		
		text-indent: 20px;
    
	}
	
	#frm_field_13_container label img, #frm_field_6_container label img{
		    top: 8px;
	}
	.main-modal__content .frm_form_fields fieldset{
		width:100%;
	}
	.main-modal__content input:placeholder{
		color: #808080 !important;
	}
	.btn_custom.frm_button_submit {
		        font-family: 'Montserrat' !important;
    background: #ff9100 !important;
    border: 1px solid #ff9100 !important;
    padding: 10px 25px!important;
    justify-content: center!important;
    display: flex!important;
    color: #fff!important;
    font-weight: bold!important;
    align-items: center;
    transition: .5s;
    border-radius: 50px !important;
    font-size: 15px !important;
    box-shadow: 0 1px 5px 0px #ff9100!important;
	}
	
	.modal-fullscreen-xl .modal-body::-webkit-scrollbar {
    width: 8px;     /* Tamaño del scroll en vertical */
    height: 8px;    /* Tamaño del scroll en horizontal */
    display: none;  /* Ocultar scroll */
}
	/* Ponemos un color de fondo y redondeamos las esquinas del thumb */
.modal-fullscreen-xl .modal-body::-webkit-scrollbar-thumb {
    background: #ccc;
    border-radius: 4px;
}

/* Cambiamos el fondo y agregamos una sombra cuando esté en hover */
.modal-fullscreen-xl .modal-body::-webkit-scrollbar-thumb:hover {
    background: #b3b3b3;
    box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.2);
}

/* Cambiamos el fondo cuando esté en active */
.modal-fullscreen-xl .modal-body::-webkit-scrollbar-thumb:active {
    background-color: #999999;
}
	
	.modal-fullscreen-xl .modal-body::-webkit-scrollbar-track {
    background: #e1e1e1;
    border-radius: 4px;
}

/* Cambiamos el fondo cuando esté en active o hover */
.modal-fullscreen-xl .modal-body::-webkit-scrollbar-track:hover,
.modal-fullscreen-xl .modal-body::-webkit-scrollbar-track:active {
  background: #d4d4d4;
}
	@media (min-width: 0px) and (max-width: 767px){
		.main-modal__card .work-text div{
			    justify-content: flex-start;
    align-items: flex-start;
		}
		.main-modal__card .work-text {
			text-align: left;
		}
		.main-modal__shadow{
			margin-top: 2rem;
		}
		.work-text{
			margin-bottom: 2%;
		}
		.main-modal__img .logo-main img {
    width: 55%;
    margin-bottom: .5rem;
}
		
		.main-modal__card, .main-modal__form {
    width: 100%;
    margin-bottom: 2rem;
			padding: 1rem;
}
		.main-modal__content {
			    padding: 0rem;

    height: auto;
    background-image: unset !important;
			}
		.main-modal__grid {
			display: grid;
			grid-template-columns: 1fr;
			width: 100%;
			    padding: 1rem;
		}
		.main-modal__video{
			display: none;
		}
			.work-text h2, .how h2, .title-flex h2 {
    font-size: 20px !important;
}
		.main-modal__card .work-text p{
			    margin-top: 0%;
		}
	}
	
	@media (min-width: 768px) and (max-width: 991px){
		
		.main-modal__img .logo-main img {
    width: 30%;
    margin-bottom: 1rem;
}
				.main-modal__card, .main-modal__form {
    width: 100%;
     margin-bottom: 1rem;

}
			.work-text h2, .how h2, .title-flex h2 {
    font-size: 20px !important;
}
	
		
		.main-modal__content {
			    padding: 0rem;
    background: #ebebeb;
    height:100vh;
    background-image: unset !important;
			}
		.main-modal__grid {
			display: grid;
			grid-template-columns: 2fr 1fr;
			width: 100%;
		}
		.content-modal__video {
    width: 100%;
    height: 300px;
}
	}
	
	@media (min-width: 992px) and (max-width: 1024px){
	
		.main-modal__img .logo-main img {
    width: 40%;
    margin-bottom: 1rem;
}
		
		.main-modal__card, .main-modal__form {
    width: 100%;
     margin-bottom: 1rem;

}
			.work-text h2, .how h2, .title-flex h2 {
    font-size: 20px !important;
}
	
		.main-modal__content {
		
    
    height: auto;
    
			}
		
	}
	@media (min-width: 1025px) and (max-width: 1367px){
		.down {
    display: flex;
    margin-top: 1rem;
}
		.text-banner__content p{
			    font-size: 22px;
    line-height: 30px;
		}
		.card-first {
    width: 48%;
}
		.card-blog{
			padding-right:50px;
			padding-left:50px;
		}
		.flex-blog2 .blog-item {
    width: 46%;
		}
		.header2 .nav-link{
			font-size: 13px;
		}
		.btn_custom{
			    height: 5vh;
    width: 150px;
		}
		.header2 {
    display: flex;
    padding: 1.5rem 1.8rem!important;
}
		.main-modal__img .logo-main img {
    width: 60%;
    margin-bottom: 1rem;
}
		
		.main-modal__card, .main-modal__form {
    width: 100%;
    margin-bottom: 2rem;
}
		.main-modal__content {
			    
    
    height: auto;
    
			}
		
	}
	
	#frm_field_19_container, #frm_field_20_container{
		position: relative;
		margin-top: 3px;
	}
	#frm_field_19_container #field_mmsou_label, #frm_field_20_container #field_t2uqr_label{
		position: absolute;
    top: 7px;
    left: 10px;
	}
	#frm_field_19_container #field_mmsou_label img,  #frm_field_20_container #field_t2uqr_label img{
		width: 85%;
    object-fit: cover;
	}
	
	
	@media (min-height: 500px) and (max-height: 768px){
		.main-modal__content {
			height: 150vh;
		}
		#video_modal{
			height: 100%;
		}
	}
</style>
<!--===============================================================================================-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow-settings.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/setting-slick.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

<script>
	$('#field_mmsou').append('<option value="Time availability" selected="selected">Time availability</option>');
	$('#field_t2uqr').append('<option value="Time availability" selected="selected">Disponibilidad de tiempo</option>');
		$(".nav-scrolling").on("click", function (e) {
		  // 1
		  e.preventDefault();
		  // 2
		  const href = $(this).attr("href");
		  // 3
		  $("html, body").animate({ scrollTop: $(href).offset().top - 100 }, 600);
		});
	
	
	$('#modal-fullscreen-xl').on('shown.bs.modal', function () {
	  $('#video_modal')[0].play();
	})
	$('#modal-fullscreen-xl').on('hidden.bs.modal', function () {
	  $('#video_modal')[0].pause();
	})
	
		</script>
		
		
<?php wp_footer(); ?>
		
		
	</div>
</body>
</html>
