<?php

function cpt_guestbook() {
	$guestbook = new Odin_Post_Type(
		'Guestbook',
		'guestbooks'
	);

	$guestbook->set_labels(
		array(
      'name'                  => __( 'Cartas', 'odin' ),
			'menu_name'             => __( 'Minhas entradas', 'odin' ),
      'name_admin_bar'        => __( 'Cartas', 'odin' ),
      'archives'              => __( 'Item Archives', 'odin' ),
      'attributes'            => __( 'Item Attributes', 'odin' ),
      'all_items'             => __( 'Todas as cartas', 'odin' ),
      'add_new_item'          => __( 'Adicionar nova carta', 'odin' ),
      'add_new'               => __( 'Adicionar nova carta', 'odin' ),
      'new_item'              => __( 'Adicionar nova carta', 'odin' ),
      'edit_item'             => __( 'Editar Carta', 'odin' ),
      'update_item'           => __( 'Atualizar Carta', 'odin' ),
      'view_item'             => __( 'Ver Carta', 'odin' ),
      'view_items'            => __( 'Ver cartas', 'odin' ),
      'search_items'          => __( 'Procurar Cartas', 'odin' ),
      'not_found'             => __( 'Nenhuma carta encontrada', 'odin' ),
      'not_found_in_trash'    => __( 'Nenhuma carta encontrada', 'odin' ),
		)
	);

	$guestbook->set_arguments(
		array(
      'menu_icon' => 'dashicons-book',
      'taxonomies'    => array( 'category', 'post_tag' ),
		)
	);
}

add_action( 'init', 'cpt_guestbook', 1 );
