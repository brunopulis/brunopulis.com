<?php

function cpt_palestras() {
	$palestras = new Odin_Post_Type(
		'Palestra',
		'palestra'
	);

	$palestras->set_labels(
		array(
      'name'                  => __( 'Palestras', 'odin' ),
			'menu_name'             => __( 'Palestras', 'odin' ),
      'name_admin_bar'        => __( 'Palestras', 'odin' ),
      'all_items'             => __( 'Todas palestras', 'odin' ),
      'add_new_item'          => __( 'Adicionar nova palestra', 'odin' ),
      'add_new'               => __( 'Adicionar nova palestra', 'odin' ),
      'new_item'              => __( 'Adicionar depoimento', 'odin' ),
      'edit_item'             => __( 'Editar Palestra', 'odin' ),
      'update_item'           => __( 'Atualizar Palestra', 'odin' ),
      'view_item'             => __( 'Ver Palestra', 'odin' ),
      'view_items'            => __( 'Ver Palestras', 'odin' ),
      'search_items'          => __( 'Procurar Palestras', 'odin' ),
      'not_found'             => __( 'Nenhuma palestra encontrada', 'odin' ),
      'not_found_in_trash'    => __( 'Nenhuma palestra encontrada', 'odin' ),
		)
	);

	$palestras->set_arguments(
		array(
      'supports'  => array( 'title' ),
      'menu_icon' => 'dashicons-cover-image',
		)
	);
}

add_action( 'init', 'cpt_palestras', 1 );
