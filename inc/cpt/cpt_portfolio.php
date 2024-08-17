<<<<<<< HEAD
<?php

function cpt_portfolio() {
	$portfolio = new Odin_Post_Type(
		'Portfolio',
		'portfolio'
	);

	$portfolio->set_labels(
		array(
			'menu_name' => __( 'Meu portfólio', 'odin' )
		)
	);

	$portfolio->set_arguments(
		array(
      'menu_icon' => 'dashicons-clipboard'
		)
	);
}

add_action( 'init', 'cpt_portfolio', 1 );
=======
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
      'menu_icon' => 'dashicons-clipboard'
		)
	);
}

add_action( 'init', 'cpt_portfolio', 1 );
>>>>>>> master
