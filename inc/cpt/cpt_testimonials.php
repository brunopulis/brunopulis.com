<?php

function cpt_testimonials() {
	$testimonials = new Odin_Post_Type(
		'Depoiments',
		'depoiments'
	);

	$testimonials->set_labels(
		array(
      'name'                  => __( 'Depoimentos', 'odin' ),
			'menu_name'             => __( 'Depoimentos', 'odin' ),
      'name_admin_bar'        => __( 'Depoimentos', 'odin' ),
      'all_items'             => __( 'Todos depoimentos', 'odin' ),
      'add_new_item'          => __( 'Adicionar novo depoimento', 'odin' ),
      'add_new'               => __( 'Adicionar novo depoimento', 'odin' ),
      'new_item'              => __( 'Adicionar depoimento', 'odin' ),
      'edit_item'             => __( 'Editar Depoimento', 'odin' ),
      'update_item'           => __( 'Atualizar Depoimento', 'odin' ),
      'view_item'             => __( 'Ver Depoimento', 'odin' ),
      'view_items'            => __( 'Ver Depoimentos', 'odin' ),
      'search_items'          => __( 'Procurar Depoimentos', 'odin' ),
      'not_found'             => __( 'Nenhum depoimento encontrado', 'odin' ),
      'not_found_in_trash'    => __( 'Nenhum depoimento encontrado', 'odin' ),
		)
	);

	$testimonials->set_arguments(
		array(
      'menu_icon' => 'dashicons-testimonial',
		)
	);
}

add_action( 'init', 'cpt_testimonials', 1 );
