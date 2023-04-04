<?php

add_action( 'cmb2_init', 'cmb2_add_image_info_metabox' );
function cmb2_add_image_info_metabox() {

	// if(isset($_REQUEST['post']) || isset($_REQUEST['post_ID'])){
	// 	$post_ID = empty($_REQUEST['post_ID']) ? $_REQUEST['post'] : $_REQUEST['post_ID'];

	// }

	// $post_format = get_post_format($post_ID);
	// if ("image" == $post_format){

	$prefix = '_neuron_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'image_information',
		'title'        => __( 'Image Information', 'neuron' ),
		'object_types' => array( 'page', 'post' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => __( 'Camera Model', 'neuron' ),
		'id' => $prefix . 'camera_model',
		'type' => 'text',
		'default' => 'canon',
	) );

	$cmb->add_field( array(
		'name' => __( 'Location', 'neuron' ),
		'id' => $prefix . 'location',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Date', 'neuron' ),
		'id' => $prefix . 'date',
		'type' => 'text_date',
	) );

	$cmb->add_field( array(
		'name' => __( 'Licensed', 'neuron' ),
		'id' => $prefix . 'licensed',
		'type' => 'checkbox',
	) );

	$cmb->add_field( array(
		'name' => __( 'License Information', 'neuron' ),
		'id' => $prefix . 'license_information',
		'type' => 'textarea',

		'attributes' => array(
			'data-conditional-id' => $prefix . 'licensed',
			
		),
	) );
	$cmb->add_field( array(
		'name' => __( 'Upload Resume', 'neuron' ),
		'id' => $prefix . 'resume',
		'type' => 'file',

		 'text' => array(
			'add_upload_file_text' => __('Upload PDF File', 'neuron'),
		 ),

		 'query_args' => array(
			'type' => array ('application/pdf')

		 ),

		 'options' =>array(
			'url' => false,
		 )

	) );

	// }

}

add_action( 'cmb2_init', 'cmb2_add_pricingtable' );
function cmb2_add_pricingtable() {

	$prefix = '_neuron_pt_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'pricing_table',
		'title'        => __( 'Pricing Table', 'neuron' ),
		'object_types' => array( 'page' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$group = $cmb->add_field( array(
		'name' => __( 'Pricing Table', 'neuron' ),
		'id' => $prefix . 'pricing_table',
		'type' => 'group',
	) );

	$cmb->add_group_field( $group, array(
		'name' => __( 'Caption', 'neuron' ),
		'id' => $prefix . 'pricing_caption',
		'type' => 'text',
	) );

	$cmb->add_group_field( $group, array(
		'name' => __( 'Pricing Option', 'neuron' ),
		'id' => $prefix . 'pricing_option',
		'type' => 'text',
		'repeatable' => true
	) );

	$cmb->add_group_field( $group, array(
		'name' => __( 'Price', 'neuron' ),
		'id' => $prefix . 'price',
		'type' => 'text',
	) );

}


/**
 * Services
 */

 add_action( 'cmb2_init', 'neuron_add_services' );
function neuron_add_services() {

	$prefix = '_neuron_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'services',
		'title'        => __( 'Services', 'neuron' ),
		'object_types' => array( 'page'),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$service = $cmb->add_field( array(
		'name' => __( 'service', 'neuron' ),
		'id' => $prefix . 'service',
		'type' => 'group',
	) );

	$cmb->add_group_field($service, array(
		'name' => __( 'icon', 'neuron' ),
		'id' => $prefix . 'icon',
		'type' => 'text',
	) );

	$cmb->add_group_field($service, array(
		'name' => __( 'title', 'neuron' ),
		'id' => $prefix . 'title',
		'type' => 'text',
	) );

	$cmb->add_group_field($service, array(
		'name' => __( 'content', 'neuron' ),
		'id' => $prefix . 'content',
		'type' => 'text',
	) );



}