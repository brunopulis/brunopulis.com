<?php

function cpt_notas() {
	$notas = new Odin_Post_Type(
		'Nota',
		'notas'
	);

	$notas->set_labels(
		array(
			'menu_name' => __( 'Notas', 'odin' ),
		)
	);

	$notas->set_arguments(
		array(
      'menu_icon' => 'dashicons-editor-ltr',
      'supports' => array( 'title', 'editor', 'post-formats' )
		)
	);
}

add_action( 'init', 'cpt_notas', 1 );
