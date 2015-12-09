<?php 

function Wp_alter_books_icon($args)
{
	$args['menu_icons'] = 'dashicons-book-alt';
	return $args;
}

add_filter('Wp_post_type_args',  'Wp_alter_books_icon' ); 

function registar_post_type_books()
{
	
		$labels = array(
			'name'                => __( 'Books', 'text-domain' ),
			'singular_name'       => __( 'Book', 'text-domain' ),
			'add_new'             => _x( 'Add New Book', 'text-domain', 'text-domain' ),
			'add_new_item'        => __( 'Add New Book', 'text-domain' ),
			'edit_item'           => __( 'Edit book', 'text-domain' ),
			'new_item'            => __( 'New book', 'text-domain' ),
			'view_item'           => __( 'View book', 'text-domain' ),
			'search_items'        => __( 'Search Plural Name', 'text-domain' ),
			'not_found'           => __( 'No Plural Name found', 'text-domain' ),
			'not_found_in_trash'  => __( 'No Plural Name found in Trash', 'text-domain' ),
			'parent_item_colon'   => __( 'Parent Book', 'text-domain' ),
			'menu_name'           => __( 'Books', 'text-domain' ),
		);
	
		$args = array(
			'labels'                   => $labels,
			'hierarchical'        => false,
			'description'         => 'description',
			'taxonomies'          => array(),
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => null,
			'menu_icon'           => 'dashicons-book-alt',
			'show_in_nav_menus'   => true,
			'publicly_queryable'  => true,
			'exclude_from_search' => false,
			'has_archive'         => true,
			'query_var'           => true,
			'can_export'          => true,
			'rewrite'             => true,
			'capability_type'     => 'post',
			'supports'            => array(
				'title', 'editor', 'author', 'thumbnail'
				, 'comments',
				'revisions', 'page-attributes', 'post-formats'
				)
		);
	
		register_post_type( 'slug', $args );
}
	
add_action( 'after_setup_theme', 'registar_post_type_books' );


function registar_taxonomy_books(){


	
		$labels = array(
			'name'					=> _x( 'authors', 'Taxonomy plural name', 'text-domain' ),
			'singular_name'			=> _x( 'Author', 'Taxonomy singular name', 'text-domain' ),
			'search_items'			=> __( 'Search authors', 'text-domain' ),
			'popular_items'			=> __( 'Popular authors', 'text-domain' ),
			'all_items'				=> __( 'All authors', 'text-domain' ),
			'parent_item'			=> __( 'Parent Author', 'text-domain' ),
			'parent_item_colon'		=> __( 'Parent Author', 'text-domain' ),
			'edit_item'				=> __( 'Edit Author', 'text-domain' ),
			'update_item'			=> __( 'Update Author', 'text-domain' ),
			'add_new_item'			=> __( 'Add New Author', 'text-domain' ),
			'new_item_name'			=> __( 'New Author', 'text-domain' ),
			'add_or_remove_items'	=> __( 'Add or remove authors', 'text-domain' ),
			'choose_from_most_used'	=> __( 'Choose from most used text-domain', 'text-domain' ),
			'menu_name'				=> __( 'Author', 'text-domain' ),
		);
	
		$args = array(
			'labels'            => $labels,
			'public'            => true,
			'show_in_nav_menus' => true,
			'show_admin_column' => false,
			'hierarchical'      => false,
			'show_tagcloud'     => true,
			'show_ui'           => true,
			'query_var'         => true,
			'rewrite'           => true,
			'query_var'         => true,
			'capabilities'      => array(),
		);

	register_taxonomy('Author','slug',$args );
}

add_action('init', 'registar_taxonomy_books');


?>