<?php 

// Registramos los Menus
register_nav_menus( array(
	'menu-top' => 'Menu Principal',
	'menu-footer' => 'Menu Footer'
));

// Agregamos el Soporte para Thumbnails
add_theme_support( 'post-thumbnails' );

// Agregamos un tamaño de imagen y permitimos que la imagen se corte si no cabe.
add_image_size( 'homepage-thumb', 745, 372, true );





?>