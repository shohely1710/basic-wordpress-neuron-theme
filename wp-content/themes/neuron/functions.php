<?php

require_once get_theme_file_path('/inc/tgm.php');
require_once get_theme_file_path('/inc/cmb2-mb.php');

    function neuron_theme_files(){
        wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '1.0', 'all');
        wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/fonts/font-awesome/css/font-awesome.min.css', array(), '1.0', 'all');
        wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.0', 'all');
        wp_enqueue_style('bootsnav', get_template_directory_uri() . '/assets/css/bootsnav.css', array(), '1.0', 'all');
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), '1.0', 'all');


       
         wp_enqueue_style('neuron-style', get_stylesheet_uri());
         wp_enqueue_style('neuron-se', get_theme_file_uri(). ("/assets/css/neuron.css"));
        // wp_enqueue_style('neuron-style', get_theme_file_uri()."/style.css", null, 1.0);



        wp_enqueue_script('jquery-ver', get_template_directory_uri() . '/assets/js/jquery-2.1.3.min.js', array(), '1.0', 'true');
        wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array(), '1.0', 'true');
        wp_enqueue_script('bootsnav-js', get_template_directory_uri() . '/assets/js/bootsnav.js', array(), '1.0', 'true');
        wp_enqueue_script('carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.0', 'true');
        wp_enqueue_script('wow-js', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '1.0', 'true');
        // wp_enqueue_script('ajaxchimp-js', get_template_directory_uri() . '/assets/js/ajaxchimp.js"', array(), '1.0', 'true');
        // wp_enqueue_script('ajaxchimp-config-js', get_template_directory_uri() . '/assets/js/ajaxchimp-config.js', array(), '1.0', 'true');
        
        wp_enqueue_script('neuron-js', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0', 'true');
    }

    add_action('wp_enqueue_scripts', 'neuron_theme_files');


  
    if(!function_exists("neuron_theme_supports")){
        
    function neuron_theme_supports(){

        require_once get_theme_file_path(). '/themeoption/codestar-framework.php';
        require_once get_theme_file_path(). '/themeoption/samples/__neuron-options.php';  
        


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
  


    // Custom logo support
    add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

    add_theme_support( 
        'post-formats', 
        array( 
            'gallery', 
            'quote', 
            'video', 
            'aside', 
            'image', 
            'link' 
            
            ) 
        );



    }

    add_action('after_setup_theme', 'neuron_theme_supports');


    // Register Custom Posts Start
    
    add_action('init', 'neuron_theme_custom_post');

    function neuron_theme_custom_post(){
        register_post_type( 'slide',
            array(
                'labels' => array(
                    'name' => __('Slides'),
                    'singular_name' => __('Slide')
                ),

                'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
                'public' => false,
                'show_ui' => true
            
            )
            );
        register_post_type( 'feature',
            array(
                'labels' => array(
                    'name' => __('Features'),
                    'singular_name' => __('Features')
                ),

                'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
                'public' => false,
                'show_ui' => true
            
            )
            );
        register_post_type( 'service',
            array(
                'labels' => array(
                    'name' => __('Services'),
                    'singular_name' => __('Services')
                ),

                'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
                'public' => false,
                'show_ui' => true
            
            )
            );
        register_post_type( 'work',
            array(
                'labels' => array(
                    'name' => __('Works'),
                    'singular_name' => __('Work')
                ),

                'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
                'public' => true
            
            )
            );
    }

    //codestar framework

    // $my_options = get_option('_prefix_my_options-'); // prefix of framework
    // echo $my_options['sub_title']; // id of field

    // Register Custom Posts End


    // Register Widgets Area Start


    function neuron_widgets_init() {
        register_sidebar(
            array(
                'name'          => esc_html__( 'Footer one', 'jkkl' ),
                'id'            => 'footer-1',
                'description'   => esc_html__( 'Add footer one widgets here.', 'jkkl' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );
        register_sidebar(
            array(
                'name'          => esc_html__( 'Footer two', 'jkkl' ),
                'id'            => 'footer-2',
                'description'   => esc_html__( 'Add footer two widgets here.', 'jkkl' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );
        register_sidebar(
            array(
                'name'          => esc_html__( 'Footer three', 'jkkl' ),
                'id'            => 'footer-3',
                'description'   => esc_html__( 'Add footer three widgets here.', 'jkkl' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );
        register_sidebar(
            array(
                'name'          => esc_html__( 'Footer four', 'jkkl' ),
                'id'            => 'footer-4',
                'description'   => esc_html__( 'Add footer four widgets here.', 'jkkl' ),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );
 
    }
    add_action( 'widgets_init', 'neuron_widgets_init' );


    // Register Widgets Area End

    // Create shortcode part start
add_filter('widget_text', 'do_shortcode');


function thumbpost_list_shortcode($atts) {
	extract( shortcode_atts( array(
        'count' => 3,
    ),$atts) );
		


	$q = new WP_Query(
        array('posts_per_page' => $count, 'post_type' => 'post')
    );

    $list = '<ul>';
    while($q->have_posts()) : $q->the_post();

        $idd = get_the_ID();
      
        $list  .= '
        <li>
		 '.get_the_post_thumbnail($idd, 'thumbnail').'
		 <p><a href="'.get_permalink().'">'.get_the_title().'</a></p>
		 <span>'.get_the_date('d F Y', $idd).'</span>
										
		</li>
        ';



        endwhile;
        $list.= '</ul>';
        wp_reset_query();
        return $list;



	
}

add_shortcode( 'thumb_posts', 'thumbpost_list_shortcode' );

 // Create shortcode part end

 // Include +++++++++++++++++Codestart framework
 


//hasin hayder
 //cmb2 metabox interactivity with js

 function neuron_admin_assets($hook){

    if(isset($_REQUEST['post']) || isset($_REQUEST['post_ID'])){
		$post_id = empty($_REQUEST['post_ID']) ? $_REQUEST['post'] : $_REQUEST['post_ID'];

	}

        // if($post_id){}

    //  $post_format = get_post_format($post_id);
	//  if ("image" == $post_id){}

    // $time = time('date');

// var_dump, print_r
    // echo"<pre";
    // var_dump($time);
    // exit();

    if("post.php" == $hook)
    {
        $post_format = get_post_format($post_id);

        //wp_enqueue_script("admin-js", get_theme_file_uri("/assets/js/admin.js"),array("jquery"), VERSION, true);

        wp_enqueue_script('admin-js', get_template_directory_uri() . '/assets/js/admin.js', array('jquery'),time(), true);
        wp_localize_script("admin-js", "neuron_pf", array("format" => $post_format));

    }
   
 

 }



 add_action('admin_enqueue_scripts', 'neuron_admin_assets');

if(!function_exists("neuron_todays_date")){
    function neuron_todays_date(){
        echo date("d/m/y");
    }
}


function neuron_modify_main_query($wpq){

    if(is_home() && $wpq->is_main_query()){
        $wpq->set("tag__not_in", array(8));
    }
   
}
add_action("pre_get_posts", "neuron_modify_main_query");


//codestar framework

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $prefix = 'my_framework';
  
    //
    // Create options
    CSF::createOptions( $prefix, array(
      'menu_title' => 'My Framework',
      'menu_slug'  => 'my-framework',
    ) );
  
    //
    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => 'Tab Title 1',
      'fields' => array(
  
        //
        // A text field
        array(
          'id'    => 'opt-text',
          'type'  => 'text',
          'title' => 'Simple Text',
        ),
  
      )
    ) );
  
    //
    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => 'Tab Title 2',
      'fields' => array(
  
        // A textarea field
        array(
          'id'    => 'opt-textarea',
          'type'  => 'textarea',
          'title' => 'Simple Textarea',
        ),
  
      )
    ) );
  
  }

  //
// Get options
$options = get_option( 'my_framework' ); // unique id of the framework

echo $options['opt-text']; // id of the field
echo $options['opt-textarea']; // id of the field

    


?>