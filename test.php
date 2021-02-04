<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta charset='UTF-8'>
  <meta content='width=device-width, initial-scale=1.0' name='viewport'>
  <meta content='ie=edge' http-equiv='X-UA-Compatible'>
  <meta content='#fff' name=' theme-color'>
  <meta content='<?php bloginfo('description'); ?>' name='description'>
  <meta content='camiones hino, hino colombia, camiones hino colombia, camiones hino precios, camiones hino en venta, concesionario hino, hino bogota, hino' name='keywords'>
  <meta content='website' property='og:type'>
  <meta content='<?php wp_title('|', true, 'right'); ?>' property='og:title'>
  <meta content='<?php bloginfo('description'); ?>' property='og:description'>
  <meta content='<?php echo get_template_directory_uri(); ?>/assets/img/logos/hino_logo.png' property='og:image'>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri(); ?>/assets/css/animate/animate.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri(); ?>/assets/css/slick/slick.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri(); ?>/assets/css/slick/slick-theme.css' rel='stylesheet'>
  <link href='<?php echo get_template_directory_uri(); ?>/assets/css/main.css' rel='stylesheet'>
<?php wp_head(); ?>
</head>

	<style>
	
	.deplegable-1 li ul {
display:none;
position:absolute;
min-width:140px;
}
		.deplegable-1 li:hover > ul {
display:block;
}

	</style>
	
	
<body class="id-<?php the_id();?>">
	<div class="search_container">

		<form action="<?php bloginfo('url'); ?>" method="get" class="search-form">
		<input type=search name=s placeholder="Buscar...">
		<div class="close"></div>
			</form>
	</div>
  <nav class='navbar navbar-expand-lg'>
    <div class='container-fluid'>
      <a class='navbar-brand' href='<?php bloginfo('url'); ?>'>
        <img alt='Hino Grupo Toyota' src='<?php echo get_template_directory_uri(); ?>/assets/img/logos/hino_logo.png'>
      </a>
      <button aria-controls='hinoNavbar' aria-expanded='false' aria-label='Toggle navigation' class='navbar-toggler' data-bs-target='#hinoNavbar' data-bs-toggle='collapse' type='button'>
        <i class='fa fa-bars'></i>
      </button>
      <div class='collapse navbar-collapse' id='hinoNavbar'>
        <ul class='navbar-nav'>
			<li class="nav-item dropdown deplegable-1">
			   <a class="nav-link  dropdown-toggle" href="<?php bloginfo('url'); ?>/vehiculos" data-toggle="dropdown">Vehiculos  </a>
				<ul class="dropdown-menu">
					<?php $wcatTerms = get_terms('tipo-de-vehiculo', array('hide_empty' => 0,'orderby' => 'id', 'parent' =>0)); 
                 	foreach($wcatTerms as $wcatTerm) : ?>
					<li class="main-li__flex">
						<a class="dropdown-item dropdown-item__type"  href='<?php echo get_term_link(  $wcatTerm->slug,  $wcatTerm->taxonomy );?>'><?php echo $wcatTerm->name ?></a>
					<ul class='sub-custom-dropdown'>

  <?php  $wsubargs1 = array( 'hierarchical' => 3, 'show_option_none' => '','hide_empty' => 0, 'parent' => $wcatTerm->term_id, 'taxonomy' => 'tipo-de-vehiculo', 'posts_per_page' => 3);
                    $wsubcats1 = get_categories($wsubargs1);
                    foreach ($wsubcats1 as $wsc1):
                    ?>



  <li>
                    <a href='<?php echo get_term_link(  $wsc1->slug,  $wsc1->taxonomy );?>'><?php echo $wsc1->name;?></a>

                    <?php $args =  array( 'post_type' => 'vehiculo', 'posts_per_page' => 5,
                           'tax_query' => array('relation'=>'AND', // 'AND' 'OR' ...
                                          array(
                                                'taxonomy' => 'tipo-de-vehiculo',
                                                'field'           => 'slug',
                                                'terms'           => $wcatTerm->slug,
                                           
                                                'parent'          => 0,
                                                'operator'        => 'IN',
                                                'orderby' => 'id',
                                              )),
                                          );  ?>
                            <?php $loop = new WP_Query( $args ); ?>  

                         <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                  <li>
                    <a href='<?php the_permalink();?>'><?php the_title();?></a>
					
                 
                  </li>
                <?php endwhile; ?>
                  </li>
						
<?php endforeach; ?>

                 


                </ul>
						
              </li>
            <?php endforeach;?>
            </ul>
			</li>
         
          <li class='nav-item'>
            <a class='nav-link' href='<?php bloginfo('url'); ?>/postventa'>Posventa</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='<?php bloginfo('url'); ?>/blog'>Blog</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='<?php bloginfo('url'); ?>/nosotros'>Nosotros</a>
          </li>
			
			<?php if ( is_home() ) { ?>
				<li class='nav-item'>
				<a class='nav-link' href='#GoogleMaps'>Ubicación</a>
			  </li>

			<?php } else { ?>
			<li class='nav-item'>
				<a class='nav-link' href='<?php bloginfo('url');?>/#GoogleMaps'>Ubicación</a>
			  </li>
			<?php } ?>

          
          <li class='nav-item'>
            <a class='nav-link' href='<?php bloginfo('url'); ?>/contacto'>Contacto</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='#'>
              <img alt='Yokomotor' class='navbar-secondary-logo' src='<?php echo get_template_directory_uri(); ?>/assets/img/logos/yokomotor_logo.png'>
            </a>
          </li>
          <li class='nav-item'>
            <div class='nav-link'>
				<div id="search">
					<div class="icon">
						<div class="rtoc"></div>
						<div class="rod"></div>
					</div>
				</div>

            </div>
          </li>
          <li class='nav-item d-lg-none navbar-socialmedia'>
            <ul>
              <li>
                <a target="_blank" href='https://www.facebook.com/Yokomotor-Hino-312963756077868/'>
                  <img alt='Hino Facebook' src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/fb.svg'>
                </a>
              </li>
              <li>
                <a target="_blank" href='https://www.instagram.com/yokomotorhino/?hl=es'>
                  <img alt='Hino Instagram' src='<?php echo get_template_directory_uri(); ?>/assets/img/icons/instagram.svg'>
                </a>
              </li>
            </ul>
          </li>
			
			<li class='nav-item nav-search__mobile'>
				<form class="example" action="<?php bloginfo('url'); ?>" method="get">
				  <input type="text" placeholder="Buscar..." name="s">
				  <button class="nav-search__btn" type="submit"><i class="fa fa-search"></i></button>
				</form>
			</li>
		
        </ul>
      </div>
    </div>
  </nav>
	
	