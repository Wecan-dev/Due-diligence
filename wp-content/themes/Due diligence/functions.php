<?php
the_post_thumbnail();
the_post_thumbnail('thumbnail');       // Thumbnail (por defecto 150px x 150px max)
the_post_thumbnail('medium');          // Media resolución (por defecto 300px x 300px max)
the_post_thumbnail('large');           // Alta resolución (por defecto 640px x 640px max)
the_post_thumbnail('full');            // Resolución original de la imagen (sin modificar)

the_post_thumbnail(array(100, 100));

add_theme_support('post-thumbnails');
// Register Custom Post Type
function Nuestros_trabajos() {

	$labels = array(
		'name'                  => _x( 'Nuestros trabajos', 'Post Type General Name', 'apk' ),
		'singular_name'         => _x( 'Nuestros trabajo', 'Post Type Singular Name', 'apk' ),
		'menu_name'             => __( 'Nuestros trabajos', 'apk' ),
		'name_admin_bar'        => __( 'Nuestros trabajos', 'apk' ),
		'archives'              => __( 'Item Archives', 'apk' ),
		'attributes'            => __( 'Item Attributes', 'apk' ),
		'parent_item_colon'     => __( 'Parent Item:', 'apk' ),
		'all_items'             => __( 'All Items', 'apk' ),
		'add_new_item'          => __( 'Add New Item', 'apk' ),
		'add_new'               => __( 'Add New', 'apk' ),
		'new_item'              => __( 'New Item', 'apk' ),
		'edit_item'             => __( 'Edit Item', 'apk' ),
		'update_item'           => __( 'Update Item', 'apk' ),
		'view_item'             => __( 'View Item', 'apk' ),
		'view_items'            => __( 'View Items', 'apk' ),
		'search_items'          => __( 'Search Item', 'apk' ),
		'not_found'             => __( 'Not found', 'apk' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'apk' ),
		'featured_image'        => __( 'Featured Image', 'apk' ),
		'set_featured_image'    => __( 'Set featured image', 'apk' ),
		'remove_featured_image' => __( 'Remove featured image', 'apk' ),
		'use_featured_image'    => __( 'Use as featured image', 'apk' ),
		'insert_into_item'      => __( 'Insert into item', 'apk' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'apk' ),
		'items_list'            => __( 'Items list', 'apk' ),
		'items_list_navigation' => __( 'Items list navigation', 'apk' ),
		'filter_items_list'     => __( 'Filter items list', 'apk' ),
	);
	$args = array(
		'label'                 => __( 'Nuestros trabajo', 'apk' ),
		'description'           => __( 'Nuestros trabajos', 'apk' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-tools',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Nuestros trabajos', $args );

}
add_action( 'init', 'Nuestros_trabajos', 0 );

// Register Custom Post Type
// Register Custom Post Type
function Clientes() {

	$labels = array(
		'name'                  => _x( 'Clientes', 'Post Type General Name', 'apk' ),
		'singular_name'         => _x( 'Cliente', 'Post Type Singular Name', 'apk' ),
		'menu_name'             => __( 'Clientes', 'apk' ),
		'name_admin_bar'        => __( 'Clientes', 'apk' ),
		'archives'              => __( 'Item Archives', 'apk' ),
		'attributes'            => __( 'Item Attributes', 'apk' ),
		'parent_item_colon'     => __( 'Parent Item:', 'apk' ),
		'all_items'             => __( 'All Items', 'apk' ),
		'add_new_item'          => __( 'Add New Item', 'apk' ),
		'add_new'               => __( 'Add New', 'apk' ),
		'new_item'              => __( 'New Item', 'apk' ),
		'edit_item'             => __( 'Edit Item', 'apk' ),
		'update_item'           => __( 'Update Item', 'apk' ),
		'view_item'             => __( 'View Item', 'apk' ),
		'view_items'            => __( 'View Items', 'apk' ),
		'search_items'          => __( 'Search Item', 'apk' ),
		'not_found'             => __( 'Not found', 'apk' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'apk' ),
		'featured_image'        => __( 'Featured Image', 'apk' ),
		'set_featured_image'    => __( 'Set featured image', 'apk' ),
		'remove_featured_image' => __( 'Remove featured image', 'apk' ),
		'use_featured_image'    => __( 'Use as featured image', 'apk' ),
		'insert_into_item'      => __( 'Insert into item', 'apk' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'apk' ),
		'items_list'            => __( 'Items list', 'apk' ),
		'items_list_navigation' => __( 'Items list navigation', 'apk' ),
		'filter_items_list'     => __( 'Filter items list', 'apk' ),
	);
	$args = array(
		'label'                 => __( 'Cliente', 'apk' ),
		'description'           => __( 'Clientes', 'apk' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Clientes', $args );

}
add_action( 'init', 'Clientes', 0 );
// Register Custom Post Type
function FAQ() {

	$labels = array(
		'name'                  => _x( 'FAQ', 'Post Type General Name', 'apk' ),
		'singular_name'         => _x( 'FAQ', 'Post Type Singular Name', 'apk' ),
		'menu_name'             => __( 'FAQ', 'apk' ),
		'name_admin_bar'        => __( 'FAQ', 'apk' ),
		'archives'              => __( 'Item Archives', 'apk' ),
		'attributes'            => __( 'Item Attributes', 'apk' ),
		'parent_item_colon'     => __( 'Parent Item:', 'apk' ),
		'all_items'             => __( 'All Items', 'apk' ),
		'add_new_item'          => __( 'Add New Item', 'apk' ),
		'add_new'               => __( 'Add New', 'apk' ),
		'new_item'              => __( 'New Item', 'apk' ),
		'edit_item'             => __( 'Edit Item', 'apk' ),
		'update_item'           => __( 'Update Item', 'apk' ),
		'view_item'             => __( 'View Item', 'apk' ),
		'view_items'            => __( 'View Items', 'apk' ),
		'search_items'          => __( 'Search Item', 'apk' ),
		'not_found'             => __( 'Not found', 'apk' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'apk' ),
		'featured_image'        => __( 'Featured Image', 'apk' ),
		'set_featured_image'    => __( 'Set featured image', 'apk' ),
		'remove_featured_image' => __( 'Remove featured image', 'apk' ),
		'use_featured_image'    => __( 'Use as featured image', 'apk' ),
		'insert_into_item'      => __( 'Insert into item', 'apk' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'apk' ),
		'items_list'            => __( 'Items list', 'apk' ),
		'items_list_navigation' => __( 'Items list navigation', 'apk' ),
		'filter_items_list'     => __( 'Filter items list', 'apk' ),
	);
	$args = array(
		'label'                 => __( 'FAQ', 'apk' ),
		'description'           => __( 'FAQ', 'apk' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-aside',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'FAQ', $args );

}
add_action( 'init', 'FAQ', 0 );
// Register Custom Post Type
function Solutions() {

	$labels = array(
		'name'                  => _x( 'Solutions', 'Post Type General Name', 'apk' ),
		'singular_name'         => _x( 'Solutions', 'Post Type Singular Name', 'apk' ),
		'menu_name'             => __( 'Solutions', 'apk' ),
		'name_admin_bar'        => __( 'Solutions', 'apk' ),
		'archives'              => __( 'Item Archives', 'apk' ),
		'attributes'            => __( 'Item Attributes', 'apk' ),
		'parent_item_colon'     => __( 'Parent Item:', 'apk' ),
		'all_items'             => __( 'All Items', 'apk' ),
		'add_new_item'          => __( 'Add New Item', 'apk' ),
		'add_new'               => __( 'Add New', 'apk' ),
		'new_item'              => __( 'New Item', 'apk' ),
		'edit_item'             => __( 'Edit Item', 'apk' ),
		'update_item'           => __( 'Update Item', 'apk' ),
		'view_item'             => __( 'View Item', 'apk' ),
		'view_items'            => __( 'View Items', 'apk' ),
		'search_items'          => __( 'Search Item', 'apk' ),
		'not_found'             => __( 'Not found', 'apk' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'apk' ),
		'featured_image'        => __( 'Featured Image', 'apk' ),
		'set_featured_image'    => __( 'Set featured image', 'apk' ),
		'remove_featured_image' => __( 'Remove featured image', 'apk' ),
		'use_featured_image'    => __( 'Use as featured image', 'apk' ),
		'insert_into_item'      => __( 'Insert into item', 'apk' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'apk' ),
		'items_list'            => __( 'Items list', 'apk' ),
		'items_list_navigation' => __( 'Items list navigation', 'apk' ),
		'filter_items_list'     => __( 'Filter items list', 'apk' ),
	);
	$args = array(
		'label'                 => __( 'Solutions', 'apk' ),
		'description'           => __( 'Solutions', 'apk' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-media-text',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Solutions', $args );

}
add_action( 'init', 'Solutions', 0 );

 function theme_customize_register($wp_customize){
	 $wp_customize->add_panel('panel1',
		array(
			'title' => 'Home',
			'priority' => 1,
		)
	);
	
	/// Section-mapa

	 $wp_customize->add_section('section_mapa', array (
    'title' => 'Section-mapa',
    'panel' => 'panel1'
  ));
  

  
  $wp_customize->add_setting('section_mapa_title', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'section_mapa_title_control', array (
    'description' => 'Título-Español',
    'section' => 'section_mapa',
    'settings' => 'section_mapa_title',
  )));
	 
   $wp_customize->add_setting('section_mapa_title_ingles', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'section_mapa_title_ingles_control', array (
    'description' => 'Título-Ingles',
    'section' => 'section_mapa',
    'settings' => 'section_mapa_title_ingles',
  )));

  $wp_customize->add_setting('section_mapa_subtitle', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'section_mapa_subtitle_control', array (
    'description' => 'Subtítulo-Español',
    'section' => 'section_mapa',
    'settings' => 'section_mapa_subtitle',
  )));
	 
	$wp_customize->add_setting('section_mapa_subtitle_ingles', array(
    'default' => ''
  ));
	 
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'section_mapa_subtitle_ingles_control', array (
    'description' => 'Subtítulo-Ingles',
    'section' => 'section_mapa',
    'settings' => 'section_mapa_subtitle_ingles',
  )));
	  $wp_customize->add_setting('section_mapa_buttom', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'section_mapa_buttom_control', array (
    'description' => 'Botón-Español',
    'section' => 'section_mapa',
    'settings' => 'section_mapa_buttom',
  )));
	 
	  $wp_customize->add_setting('section_mapa_buttom_ingles', array(
    'default' => ''
  ));
	 $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'section_mapa_buttom_ingles_control', array (
    'description' => 'Botón-Ingles',
    'section' => 'section_mapa',
    'settings' => 'section_mapa_buttom_ingles',
  )));
  $wp_customize->add_setting('section_mapa_urlbuttom', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'section_mapa_urlbuttom_control', array (
    'description' => 'Url Botón',
    'section' => 'section_mapa',
    'settings' => 'section_mapa_urlbuttom',
  ))); 
	 
 $wp_customize->add_setting('section_mapa_image');

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_mapa_image_control', array (
    'description' => 'Imagen',
    'section' => 'section_mapa',
      'settings' => 'section_mapa_image'
  )));
	 
	 ///Section-video
	 
	  $wp_customize->add_section('section_video', array (
    'title' => 'Section-video',
    'panel' => 'panel1'
  ));
	 $wp_customize->add_setting('section_video_title', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'section_video_title_control', array (
    'description' => 'Título-Español',
    'section' => 'section_video',
    'settings' => 'section_video_title',
  )));
	 
	 $wp_customize->add_setting('section_video_title_ingles', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'section_video_title_ingles_control', array (
    'description' => 'Título-Ingles',
    'section' => 'section_video',
    'settings' => 'section_video_title_ingles',
  )));


  $wp_customize->add_setting('section_video_subtitle', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'section_video_subtitle_control', array (
    'description' => 'Subtítulo-Español',
    'section' => 'section_video',
    'settings' => 'section_video_subtitle',
  )));
	
	 $wp_customize->add_setting('section_video_subtitle_ingles', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'section_video_subtitle_ingles_control', array (
    'description' => 'Subtítulo-Ingles',
    'section' => 'section_video',
    'settings' => 'section_video_subtitle_ingles',
  )));
	  $wp_customize->add_setting('section_video_buttom', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'section_video_buttom_control', array (
    'description' => 'Botón',
    'section' => 'section_video',
    'settings' => 'section_video_buttom',
  )));
	  $wp_customize->add_setting('section_video_buttom_ingles', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'section_video_buttom_ingles_control', array (
    'description' => 'Botón ingles',
    'section' => 'section_video',
    'settings' => 'section_video_buttom_ingles',
  )));
  $wp_customize->add_setting('section_video_urlbuttom', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'section_video_urlbuttom_control', array (
    'description' => 'Url Botón',
    'section' => 'section_video',
    'settings' => 'section_video_urlbuttom',
  ))); 
	 
 $wp_customize->add_setting('section_video_url', array(
    'default' => ''
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_video_url_control', array (
    'description' => ' Video',
    'section' => 'section_video',
      'settings' => 'section_video_url'
  )));
	 $wp_customize->add_setting('section_video_image2');

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_video_image2_control', array (
    'description' => 'Imagen Secundaria',
    'section' => 'section_video',
      'settings' => 'section_video_image2'
  )));
	 
	 
 }

    add_action('customize_register','theme_customize_register');
// Register Custom Post Type
function Team() {

	$labels = array(
		'name'                  => _x( 'Team', 'Post Type General Name', 'apk' ),
		'singular_name'         => _x( 'Team', 'Post Type Singular Name', 'apk' ),
		'menu_name'             => __( 'Team', 'apk' ),
		'name_admin_bar'        => __( 'Team', 'apk' ),
		'archives'              => __( 'Item Archives', 'apk' ),
		'attributes'            => __( 'Item Attributes', 'apk' ),
		'parent_item_colon'     => __( 'Parent Item:', 'apk' ),
		'all_items'             => __( 'All Items', 'apk' ),
		'add_new_item'          => __( 'Add New Item', 'apk' ),
		'add_new'               => __( 'Add New', 'apk' ),
		'new_item'              => __( 'New Item', 'apk' ),
		'edit_item'             => __( 'Edit Item', 'apk' ),
		'update_item'           => __( 'Update Item', 'apk' ),
		'view_item'             => __( 'View Item', 'apk' ),
		'view_items'            => __( 'View Items', 'apk' ),
		'search_items'          => __( 'Search Item', 'apk' ),
		'not_found'             => __( 'Not found', 'apk' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'apk' ),
		'featured_image'        => __( 'Featured Image', 'apk' ),
		'set_featured_image'    => __( 'Set featured image', 'apk' ),
		'remove_featured_image' => __( 'Remove featured image', 'apk' ),
		'use_featured_image'    => __( 'Use as featured image', 'apk' ),
		'insert_into_item'      => __( 'Insert into item', 'apk' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'apk' ),
		'items_list'            => __( 'Items list', 'apk' ),
		'items_list_navigation' => __( 'Items list navigation', 'apk' ),
		'filter_items_list'     => __( 'Filter items list', 'apk' ),
	);
	$args = array(
		'label'                 => __( 'Team', 'apk' ),
		'description'           => __( 'Team', 'apk' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Team', $args );

}
add_action( 'init', 'Team', 0 );
// Register Custom Post Type
function Banners() {

	$labels = array(
		'name'                  => _x( 'Banners', 'Post Type General Name', 'apk' ),
		'singular_name'         => _x( 'Banners', 'Post Type Singular Name', 'apk' ),
		'menu_name'             => __( 'Banners', 'apk' ),
		'name_admin_bar'        => __( 'Banners', 'apk' ),
		'archives'              => __( 'Item Archives', 'apk' ),
		'attributes'            => __( 'Item Attributes', 'apk' ),
		'parent_item_colon'     => __( 'Parent Item:', 'apk' ),
		'all_items'             => __( 'All Items', 'apk' ),
		'add_new_item'          => __( 'Add New Item', 'apk' ),
		'add_new'               => __( 'Add New', 'apk' ),
		'new_item'              => __( 'New Item', 'apk' ),
		'edit_item'             => __( 'Edit Item', 'apk' ),
		'update_item'           => __( 'Update Item', 'apk' ),
		'view_item'             => __( 'View Item', 'apk' ),
		'view_items'            => __( 'View Items', 'apk' ),
		'search_items'          => __( 'Search Item', 'apk' ),
		'not_found'             => __( 'Not found', 'apk' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'apk' ),
		'featured_image'        => __( 'Featured Image', 'apk' ),
		'set_featured_image'    => __( 'Set featured image', 'apk' ),
		'remove_featured_image' => __( 'Remove featured image', 'apk' ),
		'use_featured_image'    => __( 'Use as featured image', 'apk' ),
		'insert_into_item'      => __( 'Insert into item', 'apk' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'apk' ),
		'items_list'            => __( 'Items list', 'apk' ),
		'items_list_navigation' => __( 'Items list navigation', 'apk' ),
		'filter_items_list'     => __( 'Filter items list', 'apk' ),
	);
	$args = array(
		'label'                 => __( 'Banners', 'apk' ),
		'description'           => __( 'Banners', 'apk' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-image',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Banners', $args );



}
add_action( 'init', 'Banners', 0 );

function apk_register_sidebar()
{
	register_sidebar(array(
		'name'             => __('Sidebar principal', 'apk'),
		'id'               => 'main_sidebar',
		'description'      => __('Este es el Sidebar principal', 'apk'),
		'before_widget'    => '<div id="%1$s" class="nav-item">',
		'after_widget'     => '</div>',
		'before_title'     => '	<a class="nav-link idioma">',
		'after_title'      => '</a>',
	));
}
add_action('widgets_init', 'apk_register_sidebar');
function wpb_custom_new_menu()
{
	register_nav_menu('my-custom-menu', __('Main Menu'));
}
add_action('init', 'wpb_custom_new_menu');

// Register Recaudos Custom Taxonomy
function planes_taxonomy() {

	$labels = array(
		'name'                       => _x( '<span class="name_none">Seleccione tipo de planes</span>', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Seleccione tipo de planes', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Seleccione tipo de planes', 'text_domain' ),
		'all_items'                  => __( 'Todos los Planes', 'text_domain' ),
		'parent_item'                => __( 'Parent Planes', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Planes:', 'text_domain' ),
		'new_item_name'              => __( 'Nueva Planes', 'text_domain' ),
		'add_new_item'               => __( 'Agregar Nueva Planes', 'text_domain' ),
		'edit_item'                  => __( 'Editar Planes', 'text_domain' ),
		'update_item'                => __( 'Actualizar Planes', 'text_domain' ),
		'view_item'                  => __( 'Ver Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used items', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Buscar Planes', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		
	);
	register_taxonomy( 'tipo_planes', array( 'planes' ), $args );
}
add_action( 'init', 'planes_taxonomy', 0 );

// Register Custom Post Type
function Planes() {

	$labels = array(
		'name'                  => _x( 'Planes', 'Post Type General Name', 'apk' ),
		'singular_name'         => _x( 'Planes', 'Post Type Singular Name', 'apk' ),
		'menu_name'             => __( 'Planes', 'apk' ),
		'name_admin_bar'        => __( 'Planes', 'apk' ),
		'archives'              => __( 'Item Archives', 'apk' ),
		'attributes'            => __( 'Item Attributes', 'apk' ),
		'parent_item_colon'     => __( 'Parent Item:', 'apk' ),
		'all_items'             => __( 'All Items', 'apk' ),
		'add_new_item'          => __( 'Add New Item', 'apk' ),
		'add_new'               => __( 'Add New', 'apk' ),
		'new_item'              => __( 'New Item', 'apk' ),
		'edit_item'             => __( 'Edit Item', 'apk' ),
		'update_item'           => __( 'Update Item', 'apk' ),
		'view_item'             => __( 'View Item', 'apk' ),
		'view_items'            => __( 'View Items', 'apk' ),
		'search_items'          => __( 'Search Item', 'apk' ),
		'not_found'             => __( 'Not found', 'apk' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'apk' ),
		'featured_image'        => __( 'Featured Image', 'apk' ),
		'set_featured_image'    => __( 'Set featured image', 'apk' ),
		'remove_featured_image' => __( 'Remove featured image', 'apk' ),
		'use_featured_image'    => __( 'Use as featured image', 'apk' ),
		'insert_into_item'      => __( 'Insert into item', 'apk' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'apk' ),
		'items_list'            => __( 'Items list', 'apk' ),
		'items_list_navigation' => __( 'Items list navigation', 'apk' ),
		'filter_items_list'     => __( 'Filter items list', 'apk' ),
	);
	$args = array(
		'label'                 => __( 'Planes', 'apk' ),
		'description'           => __( 'Planes', 'apk' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor','thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-text-page',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Planes', $args );

}
add_action( 'init', 'Planes', 0 );
// Register Custom Post Type
function Banners_Category() {

	$labels = array(
		'name'                  => _x( 'Banners-Category', 'Post Type General Name', 'apk' ),
		'singular_name'         => _x( 'Banners-Category', 'Post Type Singular Name', 'apk' ),
		'menu_name'             => __( 'Banners-Category', 'apk' ),
		'name_admin_bar'        => __( 'Banners-Category', 'apk' ),
		'archives'              => __( 'Item Archives', 'apk' ),
		'attributes'            => __( 'Item Attributes', 'apk' ),
		'parent_item_colon'     => __( 'Parent Item:', 'apk' ),
		'all_items'             => __( 'All Items', 'apk' ),
		'add_new_item'          => __( 'Add New Item', 'apk' ),
		'add_new'               => __( 'Add New', 'apk' ),
		'new_item'              => __( 'New Item', 'apk' ),
		'edit_item'             => __( 'Edit Item', 'apk' ),
		'update_item'           => __( 'Update Item', 'apk' ),
		'view_item'             => __( 'View Item', 'apk' ),
		'view_items'            => __( 'View Items', 'apk' ),
		'search_items'          => __( 'Search Item', 'apk' ),
		'not_found'             => __( 'Not found', 'apk' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'apk' ),
		'featured_image'        => __( 'Featured Image', 'apk' ),
		'set_featured_image'    => __( 'Set featured image', 'apk' ),
		'remove_featured_image' => __( 'Remove featured image', 'apk' ),
		'use_featured_image'    => __( 'Use as featured image', 'apk' ),
		'insert_into_item'      => __( 'Insert into item', 'apk' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'apk' ),
		'items_list'            => __( 'Items list', 'apk' ),
		'items_list_navigation' => __( 'Items list navigation', 'apk' ),
		'filter_items_list'     => __( 'Filter items list', 'apk' ),
	);
	$args = array(
		'label'                 => __( 'Banners-Category', 'apk' ),
		'description'           => __( 'Banners-Category', 'apk' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-gallery',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Banners-Category', $args );

}
add_action( 'init', 'Banners_Category', 0 );
