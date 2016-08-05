<?php


function robi_theme_custom_post(){
	
	register_post_type( 'products',
        array(
            'labels' => array(
                'name' => __( 'Products' ),
                'singular_name' => __( 'Product' ),
                'add_new' => __( 'Add New' ),
                'add_new_item' => __( 'Add New Product' ),
                'edit_item' => __( 'Edit Product' ),
                'new_item' => __( 'New Product' ),
                'view_item' => __('product'),
                'not_found' => __( 'Sorry, we couldnt find the Product you are looking for.' )
            ),
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'has_archive' => false,
        'hierarchical' => false, 
        'capability_type' => 'page',
        'rewrite' => array( 'slug' => 'products' ),
		'supports' => array( 'title', 'custom-fields', 'author', 'thumbnail', 'editor', 'excerpt'),
		'menu_icon' => 'dashicons-cart',
		'has_archive' => true,
		'taxonomies' => array('category')

        )
    );
	register_post_type( 'testimonials',
        array(
            'labels' => array(
                'name' => __( 'Testimonials' ),
                'singular_name' => __( 'Testimonial' ),
                'add_new' => __( 'Add New Testimonial' ),
                'add_new_item' => __( 'Add New Testimonial' ),
                'edit_item' => __( 'Edit Testimonial' ),
                'new_item' => __( 'New Testimonial' ),
                'view_item' => __('testimonial'),
                'not_found' => __( 'Sorry, we couldnt find the testimonial you are looking for.' )
            ),
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'has_archive' => false,
        'hierarchical' => false, 
        'capability_type' => 'page',
        'rewrite' => array( 'slug' => 'testimonials' ),
		'supports' => array( 'title', 'custom-fields', 'thumbnail', 'editor'),
		'menu_icon' => 'dashicons-format-aside',
        )
    );
	register_post_type( 'brands',
        array(
            'labels' => array(
                'name' => __( 'Brands' ),
                'singular_name' => __( 'Brand' ),
                'add_new' => __( 'Add New Brand' ),
                'add_new_item' => __( 'Add New Brand' ),
                'edit_item' => __( 'Edit Brand' ),
                'new_item' => __( 'New Brand' ),
                'view_item' => __('brand'),
                'not_found' => __( 'Sorry, we couldnt find the brand you are looking for.' )
            ),
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'has_archive' => false,
        'hierarchical' => false, 
        'capability_type' => 'page',
        'rewrite' => array( 'slug' => 'brands' ),
		'supports' => array( 'title', 'custom-fields', 'thumbnail'),
		'menu_icon' => 'dashicons-editor-unlink',
        )
    );
	
	
}
add_action('init', 'robi_theme_custom_post');




add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
  if(is_category() || is_tag()) {
    $post_type = get_query_var('post_type');
	if($post_type)
	    $post_type = $post_type;
	else
	    $post_type = array('post','products'); 
    $query->set('post_type',$post_type);
	return $query;
    }
}






















function ecommerce_taxonomy() {
    register_taxonomy(
        'procuct_cat',  
        'products',  
        array(
            'hierarchical'          => true,
            'label'                         => 'Products Category',  //Display name
            'query_var'             => true,
            'show_admin_column'             => true,
            'rewrite'                       => array(
                'slug'                  => 'products', // This controls the base slug that will display before each term
                'with_front'    => true // Don't display the category base before
                )
            )
    );
}
add_action( 'init', 'ecommerce_taxonomy');











