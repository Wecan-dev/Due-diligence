<!doctype html>

<html <?php bloginfo('language'); ?>>
<head>

  <meta charset='UTF-8'>
  <meta content='width=device-width, initial-scale=1.0' name='viewport'>
  <meta content='ie=edge' http-equiv='X-UA-Compatible'>
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/media.css">
 
	<title><?php wp_title('|', true, 'right'); ?></title>
  <meta content='#fff' name=' theme-color'>
  <meta content='<?php bloginfo('description'); ?>' name='description'>
  <meta content='Accounting florida, Accountant Florida, Business accounting, Bookkeeping Florida, CFO Florida, Accounting Services Florida, Online accounting, Accounts Receivable, Accounting software, Finance Services' name='keywords'>
  <meta content='website' property='og:type'>
  <meta content='<?php wp_title('|', true, 'right'); ?>' property='og:title'>
  <meta content='<?php bloginfo('description'); ?>' property='og:description'>
<?php wp_head(); ?>
</head>

<body>
	
	<div class="main-content__global">
		
		<?php if ( wp_is_mobile() ) : ?>
		<div class="btn-float__whats">
			<a href="https://api.whatsapp.com/send?phone=+13057124957">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/whatsapp (1).png">
			</a>
		</div>
		<?php else : ?>
			<div class="btn-float__whats">
			<a  href="https://web.whatsapp.com/send?phone=+13057124957">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/whatsapp (1).png">
			</a>
		</div>
		<?php endif; ?>
		

	


     
<?php if(is_front_page()): ?>
	  <header class="header__main navbar-me back container-fluid header2">
  
    <a href="<?php echo bloginfo('url');?>"   class="logo-main"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-color.svg" alt="logo"> </a>


<button class="responsive-menu-btn">
   <svg class="open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
       <path d="M14.000002 15.99999c-3.3137 0-6 2.68619-6 6 0 3.31359 2.6863 6 6 6h71.999996c3.3137 0 6-2.68641 6-6 0-3.31381-2.6863-6-6-6zm0 28.00003c-3.3137 0-6 2.6862-6 6 0 3.3136 2.6863 6 6 6h71.999996c3.3137 0 6-2.6864 6-6 0-3.3138-2.6863-6-6-6zm0 28c-3.3137 0-6 2.6862-6 6 0 3.3136 2.6863 6 6 6h71.999996c3.3137 0 6-2.6864 6-6 0-3.3138-2.6863-6-6-6z"
        style="text-indent:0;text-transform:none;block-progression:tb" overflow="visible" color="#000" />
   </svg>

   <svg class="close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20">
       <path d="M14.7 1.3c-.4-.4-1-.4-1.4 0L8 6.6 2.7 1.3c-.4-.4-1-.4-1.4 0s-.4 1 0 1.4L6.6 8l-5.3 5.3c-.4.4-.4 1 0 1.4.2.2.4.3.7.3s.5-.1.7-.3L8 9.4l5.3 5.3c.2.2.5.3.7.3s.5-.1.7-.3c.4-.4.4-1 0-1.4L9.4 8l5.3-5.3c.4-.4.4-1 0-1.4z"
       />
   </svg>
</button>
	 <?php 
		$lang = get_bloginfo('language');
	    if( $lang == 'es-CO'): ?>
			  <!-- ESPAÑOL -->	  
<nav class="nav__menu">
   <div class="nav-item">
 
   <a class="nav-link nav-scrolling" href="#works">¿Cómo funcionamos?</a>

   </div>
   <div class="nav-item">
    <a class="nav-link nav-scrolling" href="#pricing">Precios</a>
   </div>
   <div class="nav-item">
     <a class="nav-link nav-scrolling" href="#solutions">Soluciones</a>
   </div>
   <div class="nav-item">
    <a class="nav-link nav-scrolling" href="#team">Nuestro Equipo</a>
  </div>
  <div class="nav-item">
    <a class="nav-link " href="<?php echo bloginfo('url');?>/educacion">Educación</a>
  </div>
	

  <div class="nav-item">
    <a  class="btn_custom btn-open-modal" data-toggle="modal" data-target="#modal-fullscreen-xl" href="#">Contáctanos </a>
  </div>
  <div class="nav-item">
    
       <?php if(is_active_sidebar('main_sidebar')){
                dynamic_sidebar('main_sidebar');
               }?>  

  </div>
</nav>
  <?php else: ?>
	 <!-- INGLES-->
		  <nav class="nav__menu">
   <div class="nav-item">

   <a class="nav-link nav-scrolling" href="#works">How it Works</a>

   </div>
   <div class="nav-item">
    <a class="nav-link nav-scrolling" href="#pricing">Pricing</a>
   </div>
   <div class="nav-item">
     <a class="nav-link nav-scrolling" href="#solutions">Solutions</a>
   </div>
   <div class="nav-item">
    <a class="nav-link nav-scrolling" href="#team">Our Team</a>
  </div>
 
<div class="nav-item">
    <a class="nav-link " href="<?php echo bloginfo('url');?>/education">Education</a>
  </div>
  <div class="nav-item">
    <a class="btn_custom btn-open-modal" data-toggle="modal" data-target="#modal-fullscreen-xl">Contact Us</a>
  </div>
  <div class="nav-item">
    
       <?php if(is_active_sidebar('main_sidebar')){
                dynamic_sidebar('main_sidebar');
               }?>  

  </div>
</nav>
	<?php endif; ?>
</header>
<?php if(is_single()): ?>	
	<!doctype html>

<html lang="en">
<head>
<?php wp_head(); ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/media.css">
<title>Due Diligence</title>

</head>
 <div class="elipse">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
</div>


    <style>
      .elipse{
      background: #fff;
      position: fixed;
      z-index: 9999999;
      height: 100%;
      width: 100%;
      overflow: hidden;
      display: flex;
      justify-content: center;
      align-items: center;
      }

      </style> 
<body>

<header style="background-color: rgb(255 255 255 / 100%)" class="header__main navbar-me back container-fluid header2">

  <a href="<?php echo bloginfo('url');?>"   class="logo-main"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-color.svg" alt="logo"> </a>


<button class="responsive-menu-btn">
  <svg class="open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
      <path d="M14.000002 15.99999c-3.3137 0-6 2.68619-6 6 0 3.31359 2.6863 6 6 6h71.999996c3.3137 0 6-2.68641 6-6 0-3.31381-2.6863-6-6-6zm0 28.00003c-3.3137 0-6 2.6862-6 6 0 3.3136 2.6863 6 6 6h71.999996c3.3137 0 6-2.6864 6-6 0-3.3138-2.6863-6-6-6zm0 28c-3.3137 0-6 2.6862-6 6 0 3.3136 2.6863 6 6 6h71.999996c3.3137 0 6-2.6864 6-6 0-3.3138-2.6863-6-6-6z"
      style="text-indent:0;text-transform:none;block-progression:tb" overflow="visible" color="#000" />
  </svg>

  <svg class="close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20">
      <path d="M14.7 1.3c-.4-.4-1-.4-1.4 0L8 6.6 2.7 1.3c-.4-.4-1-.4-1.4 0s-.4 1 0 1.4L6.6 8l-5.3 5.3c-.4.4-.4 1 0 1.4.2.2.4.3.7.3s.5-.1.7-.3L8 9.4l5.3 5.3c.2.2.5.3.7.3s.5-.1.7-.3c.4-.4.4-1 0-1.4L9.4 8l5.3-5.3c.4-.4.4-1 0-1.4z"
      />
  </svg>
</button>
<nav class="nav__menu">
  <div class="nav-item">

  <a class="nav-link" href="http://159.89.229.55/Due-diligence/#works">How it Works</a>

  </div>
  <div class="nav-item">
  <a class="nav-link" href="http://159.89.229.55/Due-diligence/#pricing">Pricing</a>
  </div>
  <div class="nav-item">
  <a class="nav-link active" href="<?php echo bloginfo('url');?>/education">Education</a>
  </div>
  <div class="nav-item">
  <a class="nav-link" href="http://159.89.229.55/Due-diligence/#team">Resources</a>
</div>
<div class="nav-item">
<a class="nav-link" href="http://159.89.229.55/Due-diligence/#team">For Accountants</a>
</div>
<div class="nav-item">
<a class="nav-link" href="tel:1887601940">1 (888) 760 1940</a>
</div>
<div class="nav-item">
  <a class="btn_custom btn-open-modal" data-toggle="modal" data-target="#modal-fullscreen-xl">Contact Us</a>
</div>
<div class="nav-item">
  <select class="form-control" id="exampleFormControlSelect1">
    <option>ES</option>
    <option>ENG</option>        
  </select>
</div>
</nav>
</header>
	<?php endif; ?>
	
<?php if(is_category()): ?>	
	<!doctype html>

<html lang="en">
<head>
<?php wp_head(); ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/media.css">
<title>Due Diligence</title>

</head>
<div class="elipse">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
</div>


    <style>
      .elipse{
      background: #fff;
      position: fixed;
      z-index: 9999999;
      height: 100%;
      width: 100%;
      overflow: hidden;
      display: flex;
      justify-content: center;
      align-items: center;
      }

      </style> 
<body>

<header style="background-color: rgb(255 255 255 / 28%);" class="header__main navbar-me back container-fluid header2">

  <a href="<?php echo bloginfo('url');?>"   class="logo-main"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-color.svg" alt="logo"> </a>


<button class="responsive-menu-btn">
  <svg class="open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
      <path d="M14.000002 15.99999c-3.3137 0-6 2.68619-6 6 0 3.31359 2.6863 6 6 6h71.999996c3.3137 0 6-2.68641 6-6 0-3.31381-2.6863-6-6-6zm0 28.00003c-3.3137 0-6 2.6862-6 6 0 3.3136 2.6863 6 6 6h71.999996c3.3137 0 6-2.6864 6-6 0-3.3138-2.6863-6-6-6zm0 28c-3.3137 0-6 2.6862-6 6 0 3.3136 2.6863 6 6 6h71.999996c3.3137 0 6-2.6864 6-6 0-3.3138-2.6863-6-6-6z"
      style="text-indent:0;text-transform:none;block-progression:tb" overflow="visible" color="#000" />
  </svg>

  <svg class="close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20">
      <path d="M14.7 1.3c-.4-.4-1-.4-1.4 0L8 6.6 2.7 1.3c-.4-.4-1-.4-1.4 0s-.4 1 0 1.4L6.6 8l-5.3 5.3c-.4.4-.4 1 0 1.4.2.2.4.3.7.3s.5-.1.7-.3L8 9.4l5.3 5.3c.2.2.5.3.7.3s.5-.1.7-.3c.4-.4.4-1 0-1.4L9.4 8l5.3-5.3c.4-.4.4-1 0-1.4z"
      />
  </svg>
</button>
<nav class="nav__menu">
  <div class="nav-item">

  <a class="nav-link nav-scrolling" href="http://159.89.229.55/Due-diligence/#works">How it Works</a>

  </div>
  <div class="nav-item">
  <a class="nav-link nav-scrolling" href="http://159.89.229.55/Due-diligence/#pricing">Pricing</a>
  </div>
  <div class="nav-item">
  <a class="nav-link  active" href="<?php echo bloginfo('url');?>/education">Education</a>
  </div>
  <div class="nav-item">
  <a class="nav-link nav-scrolling" href="http://159.89.229.55/Due-diligence/#team">Resources</a>
</div>
<div class="nav-item">
<a class="nav-link nav-scrolling" href="http://159.89.229.55/Due-diligence/#team">For Accountants</a>
</div>
<div class="nav-item">
<a class="nav-link nav-scrolling" href="http://159.89.229.55/Due-diligence/#team">1 (888) 760 1940</a>
</div>
<div class="nav-item">
  <a class="btn_custom btn-open-modal" data-toggle="modal" data-target="#modal-fullscreen-xl">Contact Us</a>
</div>
<div class="nav-item">
  <div class="nav-item">
    
       <?php if(is_active_sidebar('main_sidebar')){
                dynamic_sidebar('main_sidebar');
               }?>  

  </div>
</div>
</nav>
</header>
<?php endif; ?>	
<?php else: ?>	
		
	<header style="background-color: rgb(255 255 255 / 28%);" class="header__main navbar-me back container-fluid header2">

 
<a href="<?php echo bloginfo('url');?>"   class="logo-main"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-color.svg" alt="logo"> </a>

<button class="responsive-menu-btn">
  <svg class="open" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
      <path d="M14.000002 15.99999c-3.3137 0-6 2.68619-6 6 0 3.31359 2.6863 6 6 6h71.999996c3.3137 0 6-2.68641 6-6 0-3.31381-2.6863-6-6-6zm0 28.00003c-3.3137 0-6 2.6862-6 6 0 3.3136 2.6863 6 6 6h71.999996c3.3137 0 6-2.6864 6-6 0-3.3138-2.6863-6-6-6zm0 28c-3.3137 0-6 2.6862-6 6 0 3.3136 2.6863 6 6 6h71.999996c3.3137 0 6-2.6864 6-6 0-3.3138-2.6863-6-6-6z"
      style="text-indent:0;text-transform:none;block-progression:tb" overflow="visible" color="#000" />
  </svg>

  <svg class="close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 20">
      <path d="M14.7 1.3c-.4-.4-1-.4-1.4 0L8 6.6 2.7 1.3c-.4-.4-1-.4-1.4 0s-.4 1 0 1.4L6.6 8l-5.3 5.3c-.4.4-.4 1 0 1.4.2.2.4.3.7.3s.5-.1.7-.3L8 9.4l5.3 5.3c.2.2.5.3.7.3s.5-.1.7-.3c.4-.4.4-1 0-1.4L9.4 8l5.3-5.3c.4-.4.4-1 0-1.4z"
      />
  </svg>
</button>
 <?php 
		$lang = get_bloginfo('language');
	    if( $lang == 'es-CO'): ?>
			  <!-- ESPAÑOL -->	  
<nav class="nav__menu">
   <div class="nav-item">

   <a class="nav-link " href="http://159.89.229.55/Due-diligence/index.php/es/#works">¿Cómo funcionamos?</a>

   </div>
   <div class="nav-item">
    <a class="nav-link" href="http://159.89.229.55/Due-diligence/index.php/es/#pricing">Precios</a>
   </div>
   <div class="nav-item">
     <a class="nav-link " href="http://159.89.229.55/Due-diligence/index.php/es/#solutions">Soluciones</a>
   </div>
   <div class="nav-item">
    <a class="nav-link " href="http://159.89.229.55/Due-diligence/index.php/es/#team">Nuestro Equipo</a>
  </div>
  <div class="nav-item">
    <a class="nav-link " href="<?php echo bloginfo('url');?>/educacion">Educación</a>
  </div>

  <div class="nav-item">
    <a class="btn_custom btn-open-modal" data-toggle="modal" data-target="#modal-fullscreen-xl">Contáctanos</a>
  </div>
  <div class="nav-item">
    
       <?php if(is_active_sidebar('main_sidebar')){
                dynamic_sidebar('main_sidebar');
               }?>  

  </div>
</nav>
  <?php else: ?>
	 <!-- INGLES-->
		  <nav class="nav__menu">
   <div class="nav-item">

   <a class="nav-link" href="http://159.89.229.55/Due-diligence/#works">How it Works</a>

   </div>
   <div class="nav-item">
    <a class="nav-link " href="http://159.89.229.55/Due-diligence/#pricing">Pricing</a>
   </div>
   <div class="nav-item">
     <a class="nav-link " href="http://159.89.229.55/Due-diligence/#solutions">Solutions</a>
   </div>
   <div class="nav-item">
    <a class="nav-link " href="http://159.89.229.55/Due-diligence/#team">Our Team</a>
  </div>
  <div class="nav-item">
    <a class="nav-link " href="<?php echo bloginfo('url');?>/education">Education</a>
  </div>

  <div class="nav-item">
    <a class="btn_custom btn-open-modal" data-toggle="modal" data-target="#modal-fullscreen-xl">Contact Us</a>
  </div>
  <div class="nav-item">
    
       <?php if(is_active_sidebar('main_sidebar')){
                dynamic_sidebar('main_sidebar');
               }?>  

  </div>
</nav>
	<?php endif; ?>
</header>


<?php endif; ?>



	
<div href="#" class="toTop"> ↑ </div>
	
	 <style>
        .elipse{
        background: #fff;
        position: fixed;
        z-index: 9999999;
        height: 100%;
        width: 100%;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        }

        </style> 