<?php
the_post_thumbnail();
the_post_thumbnail('thumbnail');       // Thumbnail (por defecto 150px x 150px max)
the_post_thumbnail('medium');          // Media resolución (por defecto 300px x 300px max)
the_post_thumbnail('large');           // Alta resolución (por defecto 640px x 640px max)
the_post_thumbnail('full');            // Resolución original de la imagen (sin modificar)

the_post_thumbnail(array(100, 100));

add_theme_support('post-thumbnails');

// Register Custom Post Type
function Banners() {

	$labels = array(
		'name' => _x ('Banners', 'Nombre general del tipo de publicación', 'apk'),
		'singular_name' => _x ('Banners', 'Nombre singular del tipo de publicación', 'apk'),
		'menu_name' => __ ('Banners', 'apk'),
		'name_admin_bar' => __ ('Banners', 'apk'),
		'archives' => __ ('Archivos de elementos', 'apk'),
		'atributos' => __ ('Atributos del artículo', 'apk'),
		'parent_item_colon' => __ ('Elemento principal:', 'apk'),
		'all_items' => __ ('Todos los artículos', 'apk'),
		'add_new_item' => __ ('Agregar nuevo elemento', 'apk'),
		'add_new' => __ ('Agregar nuevo', 'apk'),
		'new_item' => __ ('Nuevo artículo', 'apk'),
		'edit_item' => __ ('Editar elemento', 'apk'),
		'update_item' => __ ('Actualizar elemento', 'apk'),
		'view_item' => __ ('Ver elemento', 'apk'),
		'view_items' => __ ('Ver elementos', 'apk'),
		'search_items' => __ ('Elemento de búsqueda', 'apk'),
		'not_found' => __ ('No encontrado', 'apk'),
		'not_found_in_trash' => __ ('No encontrado en la Papelera', 'apk'),
		'Featured_image' => __ ('Imagen destacada', 'apk'),
		'set_featured_image' => __ ('Establecer imagen destacada', 'apk'),
		'remove_featured_image' => __ ('Eliminar imagen destacada', 'apk'),
		'use_featured_image' => __ ('Usar como imagen destacada', 'apk'),
		'insert_into_item' => __ ('Insertar en el elemento', 'apk'),
		'uploaded_to_this_item' => __ ('Subido a este elemento', 'apk'),
		'items_list' => __ ('Lista de artículos', 'apk'),
		'items_list_navigation' => __ ('Navegación de lista de elementos', 'apk'),
		'filter_items_list' => __ ('Lista de elementos de filtro', 'apk'),
	);
	$args = array(
		'label'                 => __( 'Banners', 'apk' ),
		'description'           => __( 'Banners', 'apk' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => false,
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



// Register Custom Post Type
function Suscripcion() {

	$labels = array(
		'name' => _x ('Banner suscripcion', 'Post Type General Name', 'apk'),
		'singular_name' => _x ('Banner suscripcion', 'Post Type Singular Name', 'apk'),
		'menu_name' => __ ('Banner suscripcion', 'apk'),
		'name_admin_bar' => __ ('Banner suscripcion', 'apk'),
		'archives' => __ ('Archivos de elementos', 'apk'),
		'atributos' => __ ('Atributos del artículo', 'apk'),
		'parent_item_colon' => __ ('Elemento principal:', 'apk'),
		'all_items' => __ ('Todos los artículos', 'apk'),
		'add_new_item' => __ ('Agregar nuevo elemento', 'apk'),
		'add_new' => __ ('Agregar nuevo', 'apk'),
		'new_item' => __ ('Nuevo artículo', 'apk'),
		'edit_item' => __ ('Editar elemento', 'apk'),
		'update_item' => __ ('Actualizar elemento', 'apk'),
		'view_item' => __ ('Ver elemento', 'apk'),
		'view_items' => __ ('Ver elementos', 'apk'),
		'search_items' => __ ('Elemento de búsqueda', 'apk'),
		'not_found' => __ ('No encontrado', 'apk'),
		'not_found_in_trash' => __ ('No encontrado en la Papelera', 'apk'),
		'Featured_image' => __ ('Imagen destacada', 'apk'),
		'set_featured_image' => __ ('Establecer imagen destacada', 'apk'),
		'remove_featured_image' => __ ('Eliminar imagen destacada', 'apk'),
		'use_featured_image' => __ ('Usar como imagen destacada', 'apk'),
		'insert_into_item' => __ ('Insertar en el elemento', 'apk'),
		'uploaded_to_this_item' => __ ('Subido a este elemento', 'apk'),
		'items_list' => __ ('Lista de artículos', 'apk'),
		'items_list_navigation' => __ ('Navegación de lista de elementos', 'apk'),
		'filter_items_list' => __ ('Lista de elementos de filtro', 'apk'),
	);
	$args = array(
		'label'                 => __( 'Banner suscripcion', 'apk' ),
		'description'           => __( 'Banner suscripcion', 'apk' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor'),
		'taxonomies'            => false,
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
	register_post_type( 'Banner suscripcion', $args );

}
add_action( 'init', 'Suscripcion', 0 );

// Register Custom Post Type
function Planes() {

	$labels = array(
		'name' => _x ('Planes', 'Post Type General Name', 'apk'),
		'singular_name' => _x ('Planes', 'Post Type Singular Name', 'apk'),
		'menu_name' => __ ('Planes', 'apk'),
		'name_admin_bar' => __ ('Planes', 'apk'),
		'archives' => __ ('Archivos de elementos', 'apk'),
		'atributos' => __ ('Atributos del artículo', 'apk'),
		'parent_item_colon' => __ ('Elemento principal:', 'apk'),
		'all_items' => __ ('Todos los artículos', 'apk'),
		'add_new_item' => __ ('Agregar nuevo elemento', 'apk'),
		'add_new' => __ ('Agregar nuevo', 'apk'),
		'new_item' => __ ('Nuevo artículo', 'apk'),
		'edit_item' => __ ('Editar elemento', 'apk'),
		'update_item' => __ ('Actualizar elemento', 'apk'),
		'view_item' => __ ('Ver elemento', 'apk'),
		'view_items' => __ ('Ver elementos', 'apk'),
		'search_items' => __ ('Elemento de búsqueda', 'apk'),
		'not_found' => __ ('No encontrado', 'apk'),
		'not_found_in_trash' => __ ('No encontrado en la Papelera', 'apk'),
		'Featured_image' => __ ('Imagen destacada', 'apk'),
		'set_featured_image' => __ ('Establecer imagen destacada', 'apk'),
		'remove_featured_image' => __ ('Eliminar imagen destacada', 'apk'),
		'use_featured_image' => __ ('Usar como imagen destacada', 'apk'),
		'insert_into_item' => __ ('Insertar en el elemento', 'apk'),
		'uploaded_to_this_item' => __ ('Subido a este elemento', 'apk'),
		'items_list' => __ ('Lista de artículos', 'apk'),
		'items_list_navigation' => __ ('Navegación de lista de elementos', 'apk'),
		'filter_items_list' => __ ('Lista de elementos de filtro', 'apk'),
	);
	$args = array(
		'label'                 => __( 'Planes', 'apk' ),
		'description'           => __( 'Planes', 'apk' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'taxonomies'            => array(  ),
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
		'name' => _x ('<span class = "name_none"> seleccione tipo de planes </span>', 'Taxonomy General Name', 'text_domain'),
		'singular_name' => _x ('Seleccione tipo de planes', 'Taxonomy Singular Name', 'text_domain'),
		'menu_name' => __ ('Seleccione tipo de planes', 'text_domain'),
		'all_items' => __ ('Todos los Planes', 'text_domain'),
		'parent_item' => __ ('Planos principales', 'text_domain'),
		'parent_item_colon' => __ ('Planos principales:', 'text_domain'),
		'new_item_name' => __ ('Nuevos Planes', 'text_domain'),
		'add_new_item' => __ ('Agregar Nueva Planes', 'text_domain'),
		'edit_item' => __ ('Editar planos', 'text_domain'),
		'update_item' => __ ('Actualizar planos', 'text_domain'),
		'view_item' => __ ('Ver artículo', 'text_domain'),
		'independent_items_with_commas' => __ ('Separe los elementos con comas', 'text_domain'),
		'add_or_remove_items' => __ ('Agregar o quitar elementos', 'text_domain'),
		'choose_from_most_used' => __ ('Elija entre los elementos más utilizados', 'text_domain'),
		'popular_items' => __ ('Elementos populares', 'text_domain'),
		'search_items' => __ ('Buscar planos', 'text_domain'),
		'not_found' => __ ('No encontrado', 'dominio_texto'),
		'no_terms' => __ ('Sin elementos', 'dominio_texto'),
		'items_list' => __ ('Lista de artículos', 'text_domain'),
		'items_list_navigation' => __ ('Navegación de lista de elementos', 'text_domain'),
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
function Solutions() {

	$labels = array(
		'name' => _x ('Soluciones', 'Post Type General Name', 'apk'),
		'singular_name' => _x ('Soluciones', 'Post Type Singular Name', 'apk'),
		'menu_name' => __ ('Soluciones', 'apk'),
		'name_admin_bar' => __ ('Soluciones', 'apk'),
		'archives' => __ ('Archivos de elementos', 'apk'),
		'atributos' => __ ('Atributos del artículo', 'apk'),
		'parent_item_colon' => __ ('Elemento principal:', 'apk'),
		'all_items' => __ ('Todos los artículos', 'apk'),
		'add_new_item' => __ ('Agregar nuevo elemento', 'apk'),
		'add_new' => __ ('Agregar nuevo', 'apk'),
		'new_item' => __ ('Nuevo artículo', 'apk'),
		'edit_item' => __ ('Editar elemento', 'apk'),
		'update_item' => __ ('Actualizar elemento', 'apk'),
		'view_item' => __ ('Ver elemento', 'apk'),
		'view_items' => __ ('Ver elementos', 'apk'),
		'search_items' => __ ('Elemento de búsqueda', 'apk'),
		'not_found' => __ ('No encontrado', 'apk'),
		'not_found_in_trash' => __ ('No encontrado en la Papelera', 'apk'),
		'Featured_image' => __ ('Imagen destacada', 'apk'),
		'set_featured_image' => __ ('Establecer imagen destacada', 'apk'),
		'remove_featured_image' => __ ('Eliminar imagen destacada', 'apk'),
		'use_featured_image' => __ ('Usar como imagen destacada', 'apk'),
		'insert_into_item' => __ ('Insertar en el elemento', 'apk'),
		'uploaded_to_this_item' => __ ('Subido a este elemento', 'apk'),
		'items_list' => __ ('Lista de artículos', 'apk'),
		'items_list_navigation' => __ ('Navegación de lista de elementos', 'apk'),
		'filter_items_list' => __ ('Lista de elementos de filtro', 'apk'),
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

// Register Custom Post Type
function Clientes() {

	$labels = array(
		'name' => _x ('Clientes', 'Post Type General Name', 'apk'),
		'singular_name' => _x ('Cliente', 'Nombre singular del tipo de publicación', 'apk'),
		'menu_name' => __ ('Clientes', 'apk'),
		'name_admin_bar' => __ ('Clientes', 'apk'),
		'archives' => __ ('Archivos de elementos', 'apk'),
		'atributos' => __ ('Atributos del artículo', 'apk'),
		'parent_item_colon' => __ ('Elemento principal:', 'apk'),
		'all_items' => __ ('Todos los artículos', 'apk'),
		'add_new_item' => __ ('Agregar nuevo elemento', 'apk'),
		'add_new' => __ ('Agregar nuevo', 'apk'),
		'new_item' => __ ('Nuevo artículo', 'apk'),
		'edit_item' => __ ('Editar elemento', 'apk'),
		'update_item' => __ ('Actualizar elemento', 'apk'),
		'view_item' => __ ('Ver elemento', 'apk'),
		'view_items' => __ ('Ver elementos', 'apk'),
		'search_items' => __ ('Elemento de búsqueda', 'apk'),
		'not_found' => __ ('No encontrado', 'apk'),
		'not_found_in_trash' => __ ('No encontrado en la Papelera', 'apk'),
		'Featured_image' => __ ('Imagen destacada', 'apk'),
		'set_featured_image' => __ ('Establecer imagen destacada', 'apk'),
		'remove_featured_image' => __ ('Eliminar imagen destacada', 'apk'),
		'use_featured_image' => __ ('Usar como imagen destacada', 'apk'),
		'insert_into_item' => __ ('Insertar en el elemento', 'apk'),
		'uploaded_to_this_item' => __ ('Subido a este elemento', 'apk'),
		'items_list' => __ ('Lista de artículos', 'apk'),
		'items_list_navigation' => __ ('Navegación de lista de elementos', 'apk'),
		'filter_items_list' => __ ('Lista de elementos de filtro', 'apk'),
	);
	$args = array(
		'label'                 => __( 'Cliente', 'apk' ),
		'description'           => __( 'Clientes', 'apk' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => false,
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
function Team() {

	$labels = array(
		'name' => _x ('Equipo', 'Nombre general del tipo de publicación', 'apk'),
		'singular_name' => _x ('Equipo', 'Nombre singular del tipo de publicación', 'apk'),
		'menu_name' => __ ('Equipo', 'apk'),
		'name_admin_bar' => __ ('Equipo', 'apk'),
		'archives' => __ ('Archivos de elementos', 'apk'),
		'atributos' => __ ('Atributos del artículo', 'apk'),
		'parent_item_colon' => __ ('Elemento principal:', 'apk'),
		'all_items' => __ ('Todos los artículos', 'apk'),
		'add_new_item' => __ ('Agregar nuevo elemento', 'apk'),
		'add_new' => __ ('Agregar nuevo', 'apk'),
		'new_item' => __ ('Nuevo artículo', 'apk'),
		'edit_item' => __ ('Editar elemento', 'apk'),
		'update_item' => __ ('Actualizar elemento', 'apk'),
		'view_item' => __ ('Ver elemento', 'apk'),
		'view_items' => __ ('Ver elementos', 'apk'),
		'search_items' => __ ('Elemento de búsqueda', 'apk'),
		'not_found' => __ ('No encontrado', 'apk'),
		'not_found_in_trash' => __ ('No encontrado en la Papelera', 'apk'),
		'Featured_image' => __ ('Imagen destacada', 'apk'),
		'set_featured_image' => __ ('Establecer imagen destacada', 'apk'),
		'remove_featured_image' => __ ('Eliminar imagen destacada', 'apk'),
		'use_featured_image' => __ ('Usar como imagen destacada', 'apk'),
		'insert_into_item' => __ ('Insertar en el elemento', 'apk'),
		'uploaded_to_this_item' => __ ('Subido a este elemento', 'apk'),
		'items_list' => __ ('Lista de artículos', 'apk'),
		'items_list_navigation' => __ ('Navegación de lista de elementos', 'apk'),
		'filter_items_list' => __ ('Lista de elementos de filtro', 'apk'),
	);
	$args = array(
		'label'                 => __( 'Equipo', 'apk' ),
		'description'           => __( 'Equipo', 'apk' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => true,
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
function Nuestros_trabajos() {

	$labels = array(
		'name' => _x ('Nuestros trabajos', 'Post Type General Name', 'apk'),
		'singular_name' => _x ('Nuestros trabajo', 'Post Type Singular Name', 'apk'),
		'menu_name' => __ ('Nuestros trabajos', 'apk'),
		'name_admin_bar' => __ ('Nuestros trabajos', 'apk'),
		'archives' => __ ('Archivos de elementos', 'apk'),
		'atributos' => __ ('Atributos del artículo', 'apk'),
		'parent_item_colon' => __ ('Elemento principal:', 'apk'),
		'all_items' => __ ('Todos los artículos', 'apk'),
		'add_new_item' => __ ('Agregar nuevo elemento', 'apk'),
		'add_new' => __ ('Agregar nuevo', 'apk'),
		'new_item' => __ ('Nuevo artículo', 'apk'),
		'edit_item' => __ ('Editar elemento', 'apk'),
		'update_item' => __ ('Actualizar elemento', 'apk'),
		'view_item' => __ ('Ver elemento', 'apk'),
		'view_items' => __ ('Ver elementos', 'apk'),
		'search_items' => __ ('Elemento de búsqueda', 'apk'),
		'not_found' => __ ('No encontrado', 'apk'),
		'not_found_in_trash' => __ ('No encontrado en la Papelera', 'apk'),
		'Featured_image' => __ ('Imagen destacada', 'apk'),
		'set_featured_image' => __ ('Establecer imagen destacada', 'apk'),
		'remove_featured_image' => __ ('Eliminar imagen destacada', 'apk'),
		'use_featured_image' => __ ('Usar como imagen destacada', 'apk'),
		'insert_into_item' => __ ('Insertar en el elemento', 'apk'),
		'uploaded_to_this_item' => __ ('Subido a este elemento', 'apk'),
		'items_list' => __ ('Lista de artículos', 'apk'),
		'items_list_navigation' => __ ('Navegación de lista de elementos', 'apk'),
		'filter_items_list' => __ ('Lista de elementos de filtro', 'apk'),
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
function FAQ() {

	$labels = array(
		'name' => _x ('Preguntas frecuentes', 'Nombre general del tipo de publicación', 'apk'),
		'singular_name' => _x ('FAQ', 'Post Type Singular Name', 'apk'),
		'menu_name' => __ ('Preguntas frecuentes', 'apk'),
		'name_admin_bar' => __ ('Preguntas frecuentes', 'apk'),
		'archives' => __ ('Archivos de elementos', 'apk'),
		'atributos' => __ ('Atributos del artículo', 'apk'),
		'parent_item_colon' => __ ('Elemento principal:', 'apk'),
		'all_items' => __ ('Todos los artículos', 'apk'),
		'add_new_item' => __ ('Agregar nuevo elemento', 'apk'),
		'add_new' => __ ('Agregar nuevo', 'apk'),
		'new_item' => __ ('Nuevo artículo', 'apk'),
		'edit_item' => __ ('Editar elemento', 'apk'),
		'update_item' => __ ('Actualizar elemento', 'apk'),
		'view_item' => __ ('Ver elemento', 'apk'),
		'view_items' => __ ('Ver elementos', 'apk'),
		'search_items' => __ ('Elemento de búsqueda', 'apk'),
		'not_found' => __ ('No encontrado', 'apk'),
		'not_found_in_trash' => __ ('No encontrado en la Papelera', 'apk'),
		'Featured_image' => __ ('Imagen destacada', 'apk'),
		'set_featured_image' => __ ('Establecer imagen destacada', 'apk'),
		'remove_featured_image' => __ ('Eliminar imagen destacada', 'apk'),
		'use_featured_image' => __ ('Usar como imagen destacada', 'apk'),
		'insert_into_item' => __ ('Insertar en el elemento', 'apk'),
		'uploaded_to_this_item' => __ ('Subido a este elemento', 'apk'),
		'items_list' => __ ('Lista de artículos', 'apk'),
		'items_list_navigation' => __ ('Navegación de lista de elementos', 'apk'),
		'filter_items_list' => __ ('Lista de elementos de filtro', 'apk'),
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

 function theme_customize_register($wp_customize){
	 $wp_customize->add_panel('panel1',
		array(
			'title' => 'Home',
			'priority' => 1,
		)
	);
	$wp_customize->add_panel('panel2',
		array(
			'title' => 'Pop up Formulario',
			'priority' => 1,
		)
	);
	 /// Section-mapa

	 $wp_customize->add_section('section_popup', array (
    'title' => 'Informacion del formulario',
    'panel' => 'panel2'
  ));
	 
	 $wp_customize->add_setting('section_popup_title', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'section_popup_title_control', array (
    'description' => 'Título Español',
    'section' => 'section_popup',
    'settings' => 'section_popup_title',
  )));
	 $wp_customize->add_setting('section_popupeng_title', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'section_popupeng_title_control', array (
    'description' => 'Título Ingles',
    'section' => 'section_popup',
    'settings' => 'section_popupeng_title',
  )));
	 
	 
	  $wp_customize->add_setting('section_popup_description', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'section_popup_description_control', array (
    'description' => 'Descripcion en español',
    'section' => 'section_popup',
	  'type' => 'textarea',
    'settings' => 'section_popup_description',
  )));
	 
	 
	  $wp_customize->add_setting('section_popupeng_description', array(
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'section_popupeng_description_control', array (
    'description' => 'Descripcion Ingles',
    'section' => 'section_popup',
	  'type' => 'textarea',
    'settings' => 'section_popupeng_description',
  )));
	 
	 
	

	 $wp_customize->add_setting( 'video_upload',
   array(
      'default' => ''
   )
);

$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'video_upload',
   array(
      'label' => __( 'Cargar video' ),
      'description' => esc_html__( 'Esta es la descripción del control de medios' ),
      'section' => 'section_popup',
      'mime_type' => 'video',  // Required. Can be image, audio, video, application, text
      'button_labels' => array( // Optional
         'select' => __ ('Seleccionar archivo'),
          'change' => __ ('Cambiar archivo'),
          'default' => __ ('Default'),
          'eliminar' => __ ('Eliminar'),
          'placeholder' => __ ('Ningún archivo seleccionado'),
          'frame_title' => __ ('Seleccionar archivo'),
          'frame_button' => __ ('Elegir archivo'),

      )
   )
) );
	
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



// colocar en el title el nombre de la page 
function wpdocs_filter_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

    // Add the site name.
	$title .= get_bloginfo( 'name' );

    // Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

    // Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'twentytwelve' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'wpdocs_filter_wp_title', 10, 2 );


