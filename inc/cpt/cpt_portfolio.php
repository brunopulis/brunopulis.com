<?php

function cpt_portfolio() {
	$portfolio = new Odin_Post_Type(
		'Portfolio',
		'portfolio'
	);

	$portfolio->set_labels(
		array(
			'menu_name' => __( 'Portfólio', 'odin' )
		)
	);

	$portfolio->set_arguments(
		array(
      'supports'  => array( 'title', 'excerpt', 'thumbnail' ),
      'menu_icon' => 'dashicons-clipboard',
      'public' => true,
      'has_archive' => true,
      'rewrite' => array( 'slug' => 'portfolio' ),
		)
	);
}

add_action( 'init', 'cpt_portfolio', 1 );
