<?php

function cpt_library() {
	$library = new Odin_Post_Type(
		'Biblioteca',
		'biblioteca'
	);

	$library->set_labels(
		array(
			'menu_name' => __( 'Minha biblioteca', 'odin' )
		)
	);

	$library->set_arguments(
		array(
      'menu_icon' => 'dashicons-books'
		)
	);
}

add_action( 'init', 'cpt_library', 1 );
