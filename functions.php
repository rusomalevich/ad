<?php

	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(610, 346, true);
	add_image_size( 'thumbDestacadaHome', 1903, 509, true );
	add_image_size( 'medium', 523, 740, true );
	/*
	thumbnail (uses the size 150px × 150px)
	medium (uses the size 300px × 300px)
	medium_large (uses the size 768px × 0px)
	large (uses the size 1024px × 1024px)
	*/

	// Registro del menú de WordPress
	add_theme_support( 'nav-menus' );
	if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
        array(
          'main' => 'Main'
        )
    );
    }

    function tituloLargo(){
        $titulo = get_the_title();
        $letras = strlen($titulo);
        if ($letras > 20) {
            echo 'tituloNotaLargo';
        }
    }
?>