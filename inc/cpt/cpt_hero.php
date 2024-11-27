<?php

function cpt_hero() {
	$hero = new Odin_Post_Type(
		'Hero',
		'hero'
	);

	$hero->set_labels(
		array(
      'name'                  => __( 'Banners', 'odin' ),
			'menu_name'             => __( 'Meus banners', 'odin' ),
      'name_admin_bar'        => __( 'Banners', 'odin' ),
      'archives'              => __( 'Item Arquivado', 'odin' ),
      'attributes'            => __( 'Atributos', 'odin' ),
      'all_items'             => __( 'Todos os banners', 'odin' ),
      'add_new_item'          => __( 'Adicionar novo banner', 'odin' ),
      'add_new'               => __( 'Adicionar novo banner', 'odin' ),
      'new_item'              => __( 'Adicionar novo banner', 'odin' ),
      'edit_item'             => __( 'Editar banner', 'odin' ),
      'update_item'           => __( 'Atualizar banner', 'odin' ),
      'view_item'             => __( 'Ver banner', 'odin' ),
      'view_items'            => __( 'Ver banners', 'odin' ),
      'search_items'          => __( 'Procurar banners', 'odin' ),
      'not_found'             => __( 'Nenhum banner encontrado', 'odin' ),
      'not_found_in_trash'    => __( 'Nenhum banner encontrado', 'odin' ),
		)
	);

	$hero->set_arguments(
		array(
      'menu_icon' => 'dashicons-images-alt2',
		)
	);
}

add_action( 'init', 'cpt_hero', 1 );
