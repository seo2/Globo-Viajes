<?php

//ESTILOS Y SCRIPTS
function my_assets() {
	$themeURL = get_stylesheet_directory_uri();
	wp_enqueue_style( 'boot-strap', $themeURL . '/vendor/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'font-awesome', $themeURL . '/vendor/font-awesome/css/font-awesome.min.css' );
	wp_enqueue_style('style-valio', get_template_directory_uri() . '/vendor/formvalidation/css/formValidation.min.css', array(), '1', 'screen' );
	wp_enqueue_style( 'theme-style', $themeURL . '/assets/css/style.css', array( 'boot-strap' ),'5');
	wp_enqueue_style( 'animate-style', $themeURL . '/vendor/wow/css/animate.css' );
	wp_enqueue_style( 'twentytwenty-style', $themeURL . '/vendor/mixitup/style.css' );
	wp_enqueue_style( 'slick-style', $themeURL . '/vendor/slick/slick.css' );
	wp_enqueue_style( 'slick-theme-style', $themeURL . '/vendor/slick/slick-theme.css' );

	wp_enqueue_script( 'jquery', $themeURL . '/vendor/jquery/jquery.min.js' );
	wp_enqueue_script( 'jquery-easing',  'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js');
	wp_enqueue_script( 'bootstrap-js',  $themeURL . '/vendor/bootstrap/js/bootstrap.min.js' , false, NULL, true );
	wp_enqueue_script('formvalio-js', get_template_directory_uri() . '/vendor/formvalidation/js/formValidation.min.js', array('jquery'),'1', true);
	wp_enqueue_script('valiolang-js', get_template_directory_uri() . '/vendor/formvalidation/js/language/es_ES.js', array('jquery'),'1', true);
	wp_enqueue_script('valioboot-js', get_template_directory_uri() . '/vendor/formvalidation/js/framework/bootstrap.min.js', array('jquery'),'1', true);
	wp_enqueue_script( 'wow-js', $themeURL . '/vendor/wow/dist/wow.js', false, NULL, true);
	wp_enqueue_script( 'mixitup-js', $themeURL . '/vendor/mixitup/mixitup.min.js', false, NULL, true);
	wp_enqueue_script( 'slick-js', $themeURL . '/vendor/slick/slick.min.js' , false, NULL, true );

	wp_enqueue_script( 'funciones-js', $themeURL . '/assets/js/funciones.js' , false, NULL, true );

}

add_action( 'wp_enqueue_scripts', 'my_assets' );

//ACTIVAR MENUS
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
  register_nav_menu('interior-menu',__( 'Interior Menu' ));
}
add_action( 'init', 'register_my_menu' );

//ACTIVAR FOTO DESTACADA
add_theme_support( 'post-thumbnails' ); 

//NUEVO TAMAÑO PARA GALERIA PROYECTOS
add_image_size( 'galeria', 250, 250, true );

// CUSTOM POST TYPE
function create_posttype() {
	// CUSTOM POST TYPE SOCIOS / banner
	register_post_type( 'banner',
		array(
			'labels' => array(
				'name' => __( 'Banner' ),
				'singular_name' => __( 'Banner' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'banner'),
			'supports' => array('title', 'thumbnail'),
			'menu_icon' => 'dashicons-format-image',

		)
	);
	
	// CUSTOM POST TYPE SERVICIOS
	register_post_type( 'salidas',
			array(
				'labels' => array(
					'name' => __( 'Salidas confirmadas' ),
					'singular_name' => __( 'Salida confirmada' )
				),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'salidas'),
				'supports' => array('title', 'editor', 'thumbnail'),
				'menu_icon' => 'dashicons-palmtree',
			)
		);

	// CUSTOM POST TYPE TRSTIMONIOS
	register_post_type( 'destinos',
			array(
				'labels' => array(
					'name' => __( 'Destinos' ),
					'singular_name' => __( 'Destino' )
				),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'destinos'),
				'supports' => array('title', 'editor', 'thumbnail'),
				'menu_icon' => 'dashicons-admin-site',

			)
		);
	register_taxonomy( 'destinos-categorias', 'destinos', 
        array( 
            'hierarchical' => true,
            'label' => __( 'Categorias' ), 
            'labels' => array(
                'name' => __( 'Categorias'),
                'singular_name' => __( 'Categorias')
            ),
            'show_admin_column'=> true,
        ) 
    );

	

}

// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );






?>