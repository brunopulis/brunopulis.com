<?php

function cpt_hero() {
	$hero = new Odin_Post_Type(
		'Hero',
		'hero'
	);

	$hero->set_labels(
		array(
      'name'                  => __( 'Banners', 'bruno-pulis' ),
			'menu_name'             => __( 'Meus banners', 'bruno-pulis' ),
      'name_admin_bar'        => __( 'Banners', 'bruno-pulis' ),
      'archives'              => __( 'Item Arquivado', 'bruno-pulis' ),
      'attributes'            => __( 'Atributos', 'bruno-pulis' ),
      'all_items'             => __( 'Todos os banners', 'bruno-pulis' ),
      'add_new_item'          => __( 'Adicionar novo banner', 'bruno-pulis' ),
      'add_new'               => __( 'Adicionar novo banner', 'bruno-pulis' ),
      'new_item'              => __( 'Adicionar novo banner', 'bruno-pulis' ),
      'edit_item'             => __( 'Editar banner', 'bruno-pulis' ),
      'update_item'           => __( 'Atualizar banner', 'bruno-pulis' ),
      'view_item'             => __( 'Ver banner', 'bruno-pulis' ),
      'view_items'            => __( 'Ver banners', 'bruno-pulis' ),
      'search_items'          => __( 'Procurar banners', 'bruno-pulis' ),
      'not_found'             => __( 'Nenhum banner encontrado', 'bruno-pulis' ),
      'not_found_in_trash'    => __( 'Nenhum banner encontrado', 'bruno-pulis' ),
		)
	);

	$hero->set_arguments(
		array(
      'menu_icon' => 'dashicons-images-alt2',
		)
	);
}

add_action( 'init', 'cpt_hero', 1 );
