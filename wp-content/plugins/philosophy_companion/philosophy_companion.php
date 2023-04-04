<?php
    /*

    Plugin Name: Philosophy-Companion
    Plugin URI:
    Description: Companion plugin for the philosophy theme
    Version:1.0
    Author: LWCH
    License: GPLv2 or later
    Text Domain: philosophy_companion

    */

    // function philosophy_companion_register_my_cpts_book() {

    //     /**
    //      * Post Type: Books.
    //      */
    
    //     $labels = [
    //         "name" => esc_html__( "Books", "custom-post-type-ui" ),
    //         "singular_name" => esc_html__( "Book", "custom-post-type-ui" ),
    //         "all_items" => esc_html__( "My Books", "custom-post-type-ui" ),
    //         "add_new" => esc_html__( "New Book", "custom-post-type-ui" ),
    //         "featured_image" => esc_html__( "Book Cover", "custom-post-type-ui" ),
    //     ];
    
    //     $args = [
    //         "label" => esc_html__( "Books", "custom-post-type-ui" ),
    //         "labels" => $labels,
    //         "description" => "",
    //         "public" => true,
    //         "publicly_queryable" => true,
    //         "show_ui" => true,
    //         "show_in_rest" => true,
    //         "rest_base" => "",
    //         "rest_controller_class" => "WP_REST_Posts_Controller",
    //         "rest_namespace" => "wp/v2",
    //         "has_archive" => "books",
    //         "show_in_menu" => true,
    //         "show_in_nav_menus" => true,
    //         "delete_with_user" => false,
    //         "exclude_from_search" => false,
    //         "capability_type" => "post",
    //         "map_meta_cap" => true,
    //         "hierarchical" => false,
    //         "can_export" => false,
    //         "rewrite" => [ "slug" => "book", "with_front" => true ],
    //         "query_var" => true,
    //         "menu_position" => 6,
    //         "menu_icon" => "dashicons-book-alt",
    //         "supports" => [ "title", "editor", "thumbnail", "excerpt" ],
    //         "taxonomies" => [ "category" ],
    //         "show_in_graphql" => false,
    //         "rewrite" =>array(
    //             'with_front'=> false
    //         )

    //     ];
    
    //     register_post_type( "book", $args );
    // }
    
    // add_action( 'init', 'philosophy_companion_register_my_cpts_book' );

    //custom post from tool wp-hasty.com site
    function create_book_cpt() {

        $labels = array(
            'name' => _x( 'Books', 'Post Type General Name', 'textdomain' ),
            'singular_name' => _x( 'Book', 'Post Type Singular Name', 'textdomain' ),
            'menu_name' => _x( 'Books', 'Admin Menu text', 'textdomain' ),
            'name_admin_bar' => _x( 'Book', 'Add New on Toolbar', 'textdomain' ),
            'archives' => __( 'Book Archives', 'textdomain' ),
            'attributes' => __( 'Book Attributes', 'textdomain' ),
            'parent_item_colon' => __( 'Parent Book:', 'textdomain' ),
            'all_items' => __( 'All Books', 'textdomain' ),
            'add_new_item' => __( 'Add New Book', 'textdomain' ),
            'add_new' => __( 'Add New', 'textdomain' ),
            'new_item' => __( 'New Book', 'textdomain' ),
            'edit_item' => __( 'Edit Book', 'textdomain' ),
            'update_item' => __( 'Update Book', 'textdomain' ),
            'view_item' => __( 'View Book', 'textdomain' ),
            'view_items' => __( 'View Books', 'textdomain' ),
            'search_items' => __( 'Search Book', 'textdomain' ),
            'not_found' => __( 'Not found', 'textdomain' ),
            'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
            'featured_image' => __( 'Featured Image', 'textdomain' ),
            'set_featured_image' => __( 'Set featured image', 'textdomain' ),
            'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
            'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
            'insert_into_item' => __( 'Insert into Book', 'textdomain' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Book', 'textdomain' ),
            'items_list' => __( 'Books list', 'textdomain' ),
            'items_list_navigation' => __( 'Books list navigation', 'textdomain' ),
            'filter_items_list' => __( 'Filter Books list', 'textdomain' ),
        );
        $args = array(
            'label' => __( 'Book', 'textdomain' ),
            'description' => __( '', 'textdomain' ),
            'labels' => $labels,
            'menu_icon' => 'dashicons-buddicons-friends',
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
            'taxonomies' => array(),
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            // 'has_archive' => true,
            'has_archive' => "books",
            'hierarchical' => false,
            'exclude_from_search' => false,
            'show_in_rest' => true,
            'publicly_queryable' => true,
            'capability_type' => 'post',
            'rewrite' =>array(
                'with_front'=>false
            )
        );
        register_post_type( 'book', $args );
    
    }
  add_action( 'init', 'create_book_cpt', 0 );
        
    