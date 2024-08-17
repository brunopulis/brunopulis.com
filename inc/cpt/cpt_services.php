<?php

function cpt_services() {
	$events = new Odin_Post_Type(
		'Services',
		'services'
	);

	$events->set_labels(
		array(
			'menu_name' => __( 'Meus serviços', 'odin' )
		)
	);

	$events->set_arguments(
		array(
      'menu_icon' => 'dashicons-clipboard'
		)
	);
}

add_action( 'init', 'cpt_services', 1 );
