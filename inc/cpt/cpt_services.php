<?php

function cpt_services() {
	$events = new Odin_Post_Type(
		'Services',
		'services'
	);

	$events->set_labels(
		array(
      'name'                  => __( 'Serviços', 'odin' ),
			'menu_name'             => __( 'Serviços', 'odin' ),
      'name_admin_bar'        => __( 'Serviços', 'odin' ),
      'all_items'             => __( 'Todos serviços', 'odin' ),
      'add_new_item'          => __( 'Adicionar novo serviço', 'odin' ),
      'add_new'               => __( 'Adicionar novo serviço', 'odin' ),
      'new_item'              => __( 'Adicionar serviço', 'odin' ),
      'edit_item'             => __( 'Editar Serviço', 'odin' ),
      'update_item'           => __( 'Atualizar Serviço', 'odin' ),
      'view_item'             => __( 'Ver Serviço', 'odin' ),
      'view_items'            => __( 'Ver Serviços', 'odin' ),
      'search_items'          => __( 'Procurar Serviços', 'odin' ),
      'not_found'             => __( 'Nenhum serviço encontrado', 'odin' ),
      'not_found_in_trash'    => __( 'Nenhum serviço encontrado', 'odin' ),
		)
	);

	$events->set_arguments(
		array(
      'menu_icon' => 'dashicons-filter',
      'taxonomies'    => array( 'category', 'post_tag' ),
		)
	);
}

add_action( 'init', 'cpt_services', 1 );
