<?php

/*
Plugin Name: Books
Description: Description
Plugin URI: http://ronaldhunter.co
Author: Ronald Hunter
Author URI: http://ronaldhunter.co
Version: 1.0
License: GPL2
Text Domain: Text Domain
Domain Path: Domain Path
*/

/*

    Copyright (C) 2015  Ronald Hunter  ronald@ronaldhunter.co

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

        
        
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
				'title', 'editor', 'author', 'thumbnail',
				'excerpt','custom-fields', 'trackbacks', 'comments',
				'revisions', 'page-attributes', 'post-formats','featured-image',
				)
		);
	
		register_post_type( 'slug', $args );
}
	
add_action( 'init', 'registar_post_type_books' );

?>