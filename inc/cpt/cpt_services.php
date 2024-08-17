<?php

function cpt_services() {
	$events = new Odin_Post_Type(
		'Services',
		'services'
	);

	$events->set_labels(
		array(
			'menu_name' => __( 'Serviços', 'odin' )
		)
	);

	$events->set_arguments(
		array(
      'menu_icon' => 'dashicons-code-standards'
		)
	);
}

add_action( 'init', 'cpt_services', 1 );
