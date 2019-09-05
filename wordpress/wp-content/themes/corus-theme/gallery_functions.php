<?php
// Add gallery ACF post type.
add_action( 'init', 'add_gallery_post_type' );
function add_gallery_post_type() {
	// Labels for the custom gallery post type.
	$labels = 	array(
				    'name' => __( 'Gallery' ),
				    'singular_name' => __( 'Gallery' ),
				    'all_items' => __( 'All galleries'),
				    'view_item'          => __( 'View Gallery', 'eot' ),
					'add_new_item'       => __( 'Add New Gallery', 'eot' ),
					'edit_item'          => __( 'Edit Gallery', 'eot' ),
					'search_items'       => __( 'Search Gallery', 'eot' ),
					'not_found'          => __( 'No gallery found.', 'eot' ),
					'not_found_in_trash' => __( 'No gallery found in Trash.', 'eot' )
				);
	// Arguments for the custom gallery post type.
    $args  	=	array(
	                'labels' => $labels,
	                'public' => true,
	                'has_archive' => true,
	                'rewrite' => array( 'slug' => 'gallery-item', 'with_front' => false ),
	                'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
	                'capability_type'     	=> 'post',
            	);
    register_post_type( 'gallery', $args );
}

if( function_exists('acf_add_local_field_group') ):
	// New fields
	$acf_fields	= 	array (
						array (
							'key' 	=> 'sldr_img1',
							'label' => 'Slider Image 1',
							'name' 	=> 'sldr_img1',
							'type' 	=> 'image',
						),
						array (
							'key' 	=> 'sldr_img2',
							'label' => 'Slider Image 2',
							'name' 	=> 'sldr_img2',
							'type' 	=> 'image',
						),
						array (
							'key' 	=> 'sldr_img3',
							'label' => 'Slider Image 3',
							'name' 	=> 'sldr_img3',
							'type' 	=> 'image',
						),
					);
	// Target location.
	$location 	=	array (
						array (
							array (
								'param' => 'post_type',
								'operator' => '==',
								'value' => 'gallery',
							),
						),
					);
	acf_add_local_field_group(array(
		'key' 		=> 'group_1',
		'title' 	=> 'Gallery images',
		'fields' 	=> $acf_fields,
		'location' 	=> 	$location,
	));
endif;