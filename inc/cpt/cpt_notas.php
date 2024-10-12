<?php

function cpt_notas() {
	$notas = new Odin_Post_Type(
		'Nota',
		'notas'
	);

	$notas->set_labels(
		array(
      'menu_name'             => __( 'Notas', 'odin' ),
      'name_admin_bar'        => __( 'Notas', 'odin' ),
      'archives'              => __( 'Item Archives', 'odin' ),
      'attributes'            => __( 'Item Attributes', 'odin' ),
      'parent_item_colon'     => __( '', 'odin' ),
      'all_items'             => __( 'Todas as notas', 'odin' ),
      'add_new_item'          => __( 'Adicionar nova nota', 'odin' ),
      'add_new'               => __( 'Adicionar nova nota', 'odin' ),
      'new_item'              => __( 'Adicionar nova nota', 'odin' ),
      'edit_item'             => __( 'Editar Nota', 'odin' ),
      'update_item'           => __( 'Atualizar Nota', 'odin' ),
      'view_item'             => __( 'Ver Nota', 'odin' ),
      'view_items'            => __( 'Ver Notas', 'odin' ),
      'search_items'          => __( 'Procurar Notas', 'odin' ),
      'not_found'             => __( 'Nenhuma encontrada', 'odin' ),
      'not_found_in_trash'    => __( 'Nenhuma encontrada', 'odin' ),
		)
	);

	$notas->set_arguments(
		array(
      'menu_icon'     => 'dashicons-format-status',
      'supports'      => array( 'title', 'editor', 'post-formats' ),
      'menu_position' => 5,
      'taxonomies'    => array( 'category', 'post_tag' ),
		)
	);
}

add_action( 'init', 'cpt_notas', 1 );
