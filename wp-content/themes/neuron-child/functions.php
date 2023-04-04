<?php

function neuron_child_assets(){
    // wp_enqueue_style("parent-style", get_parent_theme_file_uri("/style.css"), array("bootstrap"));
     wp_enqueue_style("parent-style", get_parent_theme_file_uri("/style.css"));

    //wp_enqueue_style("parent-style");
}

add_action("wp_enqueue_scripts", "neuron_child_assets");


function neuron_child_assets_dequeue(){
    wp_dequeue_style("neuron-se");
    wp_deregister_style("neuron-se");
    wp_enqueue_style("neuron-se-new", get_theme_file_uri("/assets/css/neuron.css"));
    
}

 add_action("wp_enqueue_scripts", "neuron_child_assets_dequeue", 14);

// function neuron_child_bootstrap_ed(){
    
//     wp_dequeue_style("bootstrap");
//     wp_deregister_style("bootstrap");

//     wp_enqueue_style("bootstrap", "//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap-grid.css");
   

// }
//add_action("wp_enqueue_scripts", "neuron_child_bootstrap_ed", 11);

function neuron_theme_supports(){
    //loading theme text domain
    load_theme_textdomain('neuron-rrfonline', get_template_directory() . '/languages');

    // Generate automated feed links on head
    add_theme_support( 'automatic-feed-links' );

    // Adding support for automatic title tag
    add_theme_support( 'title-tag' );

    //Enabling post thumbnail support
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'menu-1' => esc_html__( 'Primary', 'neuron-rrfonline' ),
        )
    );

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

// Add theme support for selective refresh for widgets.
add_theme_support( 'customize-selective-refresh-widgets' );

}

// hasin hayder 
function neuron_todays_date(){
    echo date("d-m-y");
}

// hasin hayder 


?>