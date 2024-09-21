<?php

function cpt_blogroll() {
	$blogroll = new Odin_Post_Type(
		'Blogroll',
		'blogrolls'
	);

	$blogroll->set_labels(
		array(
      'name'                  => __( 'Blogrolls', 'odin' ),
			'menu_name'             => __( 'Meu blogroll', 'odin' ),
      'name_admin_bar'        => __( 'Blogrolls', 'odin' ),
      'archives'              => __( 'Item Arquivados', 'odin' ),
      'attributes'            => __( 'Atributos do item', 'odin' ),
      'all_items'             => __( 'Todos os blogrolls', 'odin' ),
      'add_new_item'          => __( 'Adicionar novo favorito', 'odin' ),
      'add_new'               => __( 'Adicionar novo favorito', 'odin' ),
      'new_item'              => __( 'Adicionar novo favorito', 'odin' ),
      'edit_item'             => __( 'Editar Blogroll', 'odin' ),
      'update_item'           => __( 'Atualizar Blogroll', 'odin' ),
      'view_item'             => __( 'Ver Blogroll', 'odin' ),
      'view_items'            => __( 'Ver favoritos', 'odin' ),
      'search_items'          => __( 'Procurar favoritos', 'odin' ),
      'not_found'             => __( 'Nenhum favorito encontrado', 'odin' ),
      'not_found_in_trash'    => __( 'Nenhum favorito encontrado', 'odin' ),
		)
	);

	$blogroll->set_arguments(
		array(
      'menu_icon'  => 'dashicons-star-filled',
      'taxonomies' => array( 'category', 'post_tag' ),
		)
	);
}

add_action( 'init', 'cpt_blogroll', 1 );
