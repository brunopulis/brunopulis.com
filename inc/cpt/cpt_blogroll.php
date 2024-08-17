<?php

function cpt_blogroll() {
	$events = new Odin_Post_Type(
		'Blogroll',
		'blogrolls'
	);

	$events->set_labels(
		array(
			'menu_name' => __( 'Blogroll', 'odin' )
		)
	);

	$events->set_arguments(
		array(
      'menu_icon' => 'dashicons-editor-quote'
		)
	);
}

add_action( 'init', 'cpt_blogroll', 1 );
