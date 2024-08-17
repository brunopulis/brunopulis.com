<?php

function cpt_letter() {
	$events = new Odin_Post_Type(
		'Letters',
		'letters'
	);

	$events->set_labels(
		array(
			'menu_name' => __( 'Minhas Cartas', 'odin' )
		)
	);

	$events->set_arguments(
		array(
      'menu_icon' => 'dashicons-clipboard'
		)
	);
}

add_action( 'init', 'cpt_letter', 1 );
