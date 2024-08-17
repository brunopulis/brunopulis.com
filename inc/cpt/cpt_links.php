<?php

function cpt_links() {
	$notas = new Odin_Post_Type(
		'Link',
		'bookmark'
	);

	$notas->set_labels(
		array(
			'menu_name' => __( 'Links', 'odin' ),
		)
	);

	$notas->set_arguments(
		array(
      'menu_icon' => 'dashicons-admin-links',
      'supports' => array( 'title', 'editor', 'post-formats', 'tag' )
		)
	);
}

add_action( 'init', 'cpt_links', 1 );
