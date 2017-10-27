<?php
// Theme Supports
add_post_type_support( 'page', 'excerpt' );




//  Registando Menus
register_nav_menus(
	array(
		'menu_topo' => 'Menu de Cabeçalho',
	)
);

// Registrando Sidebar

register_sidebar( array(
	'name'          => 'home_sidebar',
	'description'   => 'Home Sidebar',
	'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => "</li>\n",
	'before_title'  => '<h4 class="widgettitle text-center">',
	'after_title'   => "</h4>\n", )
);

//----------------------



function post_type_noticias(){
	$labels = array(
		'name' => 'Notícias',
		'singular_name' => 'Notícia',
		'add_new_item' => 'Adicionar nova notícia',
		'add_new' => 'Adicionar Notícia'
	);
	register_post_type( 'noticias', 
		array(
			'labels' => $labels, 
			'public' => true,
			'menu_icon' => 'dashicons-admin-site',
			'has_archive' => true,
			'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
			'taxonomies' => array('post_tag')
		) 

	);
}

function post_type_informatica(){
	$labels = array(
		'name' => 'Informática',
		'singular_name' => 'Informática',
		'add_new_item' => 'Adicionar novo informativo - Informática',
		'add_new' => 'Adicionar - Informática'
	);
	register_post_type( 'informatica', 
		array(
			'labels' => $labels, 
			'public' => true,
			'menu_icon' => 'dashicons-laptop',
			'has_archive' => true,
			'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
		) 

	);
}

function post_type_adm(){
	$labels = array(
		'name' => 'Administração',
		'singular_name' => 'Administração',
		'add_new_item' => 'Adicionar novo informativo - Administração',
		'add_new' => 'Adicionar novo - Administração'
	);
	register_post_type( 'administracao', 
		array(
			'labels' => $labels, 
			'public' => true,
			'menu_icon' => 'dashicons-groups',
			'has_archive' => true,
			'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
		) 

	);
}


function post_type_rh(){
	$labels = array(
		'name' => 'Recursos Humanos',
		'singular_name' => 'Recursos Humanos',
		'add_new_item' => 'Adicionar novo informativo - Recursos Humanos',
		'add_new' => 'Adicionar novo - RH'
	);
	register_post_type( 'rh', 
		array(
			'labels' => $labels, 
			'public' => true,
			'menu_icon' => 'dashicons-universal-access-alt',
			'has_archive' => true,
			'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
		) 

	);
}

function wordpress_pagination() {
	global $wp_query;

	$big = 999999999;

	echo paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'current' => max( 1, get_query_var('paged') ),
		'prev_text' => __('«'),
		'next_text' => __('»'),
		'total' => $wp_query->max_num_pages
	) );
}


function my_forcelogin_redirect() {
	return site_url( '/' );
}
add_filter('v_forcelogin_redirect', 'my_forcelogin_redirect', 10, 1);

add_filter('login_redirect', 'my_forcelogin_redirect', 10, 1);

add_action( 'init', 'post_type_noticias');
add_action( 'init', 'post_type_informatica');
add_action( 'init', 'post_type_adm');
add_action( 'init', 'post_type_rh');
add_theme_support( 'post-thumbnails', array('noticias', 'informatica', 'administracao', 'rh'));