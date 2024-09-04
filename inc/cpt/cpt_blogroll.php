<?php

function cpt_blogroll() {
	$events = new Odin_Post_Type(
		'Blogroll',
		'blogrolls'
	);

	$events->set_labels(
		array(
			'menu_name'             => __( 'Blogroll', 'odin' ),
      'name_admin_bar'        => __( 'Blogroll', 'odin' ),
      'all_items'             => __( 'Toda a listas', 'odin' ),
      'add_new_item'          => __( 'Adicionar nova lista', 'odin' ),
      'add_new'               => __( 'Adicionar nova lista', 'odin' ),
      'new_item'              => __( 'Adicionar nova lista', 'odin' ),
      'edit_item'             => __( 'Editar Lista', 'odin' ),
      'update_item'           => __( 'Atualizar Lista', 'odin' ),
      'view_item'             => __( 'Ver Lista', 'odin' ),
      'view_items'            => __( 'Ver listas', 'odin' ),
      'search_items'          => __( 'Procurar Listas', 'odin' ),
      'not_found'             => __( 'Nenhuma lista encontrada', 'odin' ),
      'not_found_in_trash'    => __( 'Nenhuma lista encontrada', 'odin' ),
		)
	);

	$events->set_arguments(
		array(
      'menu_icon' => 'dashicons-share-alt',
      'taxonomies'    => array( 'category', 'post_tag' ),
      
		)
	);
}

add_action( 'init', 'cpt_blogroll', 1 );
