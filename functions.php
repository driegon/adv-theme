<?php
// Definimos la función
function ss_scripts() {
	// El primer paso es usar wp_register_script para registrar el script que queremos cargar. Fíjense que aquí sí usamos *get_template_directory_uri()*
	wp_register_script( 'sticky', get_template_directory_uri() . '/js/jquery.sticky.js', array( 'jquery'), null, true );
	wp_register_script( 'easing', get_template_directory_uri() . '/js/jquery.easing.min.js', array( 'jquery'), null, true );
	wp_register_script( 'custom', get_template_directory_uri() . '/js/custom.js', array( 'easing'), null, true );

	// Una vez que registramos el script debemos colocarlo en la cola de WordPress
	wp_enqueue_script( 'sticky' );
	wp_enqueue_script( 'custom' );
	wp_enqueue_script( 'easing' );
}

// Agregamos la función a la lista de cargas de WordPress.
add_action( 'wp_enqueue_scripts', 'ss_scripts' );