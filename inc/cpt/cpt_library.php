<?php

function cpt_library() {
	$library = new Odin_Post_Type(
		'Biblioteca',
		'biblioteca'
	);

	$library->set_labels(
	    array(
            'name'                  => __( 'Biblioteca', 'odin' ),
	        'menu_name'             => __( 'Biblioteca', 'odin' ),
            'name_admin_bar'        => __( 'Biblioteca', 'odin' ),
            'all_items'             => __( 'Todos livros', 'odin' ),
            'add_new_item'          => __( 'Adicionar livro', 'odin' ),
            'add_new'               => __( 'Adicionar livro', 'odin' ),
            'new_item'              => __( 'Adicionar livro', 'odin' ),
            'edit_item'             => __( 'Editar livro', 'odin' ),
            'update_item'           => __( 'Atualizar livro', 'odin' ),
            'view_item'             => __( 'Ver livro', 'odin' ),
            'view_items'            => __( 'Ver Livro', 'odin' ),
            'search_items'          => __( 'Procurar Livro', 'odin' ),
            'not_found'             => __( 'Nenhum livro encontrado', 'odin' ),
            'not_found_in_trash'    => __( 'Nenhum livro encontrado', 'odin' ),
		)
	);

	$library->set_arguments(
		array(
            'menu_icon'  => 'dashicons-book-alt',
            'taxonomies' => array( 'category', 'post_tag' ),
		)
	);
}

add_action( 'init', 'cpt_library', 1 );
