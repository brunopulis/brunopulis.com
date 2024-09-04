<?php

function cpt_portfolio() {
	$portfolio = new Odin_Post_Type(
		'Portfolio',
		'portfolio'
	);

	$portfolio->set_labels(
		array(
			'menu_name'             => __( 'Portfólio', 'odin' ),
      'name_admin_bar'        => __( 'Portfólios', 'odin' ),
      'all_items'             => __( 'Todos trabalhos', 'odin' ),
      'add_new_item'          => __( 'Adicionar trabalho', 'odin' ),
      'add_new'               => __( 'Adicionar trabalho', 'odin' ),
      'new_item'              => __( 'Adicionar trabalho', 'odin' ),
      'edit_item'             => __( 'Editar trabalho', 'odin' ),
      'update_item'           => __( 'Atualizar trabalho', 'odin' ),
      'view_item'             => __( 'Ver trabalho', 'odin' ),
      'view_items'            => __( 'Ver Portfólio', 'odin' ),
      'search_items'          => __( 'Procurar Portfólio', 'odin' ),
      'not_found'             => __( 'Nenhum trabalho encontrado', 'odin' ),
      'not_found_in_trash'    => __( 'Nenhum trabalho encontrado', 'odin' ),
		)
	);

	$portfolio->set_arguments(
		array(
      'menu_icon' => 'dashicons-clipboard',
      'taxonomies'    => array( 'category', 'post_tag' ),
		)
	);
}

add_action( 'init', 'cpt_portfolio', 1 );
