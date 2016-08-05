<?php

add_filter('http://localhost/robi',  'wpadmin_filter', 10, 3);
 function wpadmin_filter( $url, $path, $orig_scheme ) {
  $old  = array( "/(wp-admin)/");
  $admin_dir = WP_ADMIN_DIR;
  $new  = array($admin_dir);
  return preg_replace( $old, $new, $url, 1);
 }
 
 
 
 function etheme_setup(){
	 
	 // image size
	 add_image_size('home_thumb', 243, 243, true);
	 add_image_size('single_product', 438, 438, true);
	 add_image_size('blog_img', 243, 180, true);
	 add_image_size('client_img', 70, 70, true);
	 add_image_size('brand', 160, 78, true);
	 
	 add_theme_support('title-tag');
	 add_theme_support('post-thumbnails');
	 
	 load_theme_textdomain( 'robi', get_template_directory().'/language' );
	 
	 
	 register_nav_menus( array(
		'top-menu' => __('Top Menu', 'robi'),
		'main-menu' => __('Main Menu', 'robi'),
		'footer-menu1' => __('Footer Menu one', 'robi')
	 ) );
 }
 add_action('after_setup_theme', 'etheme_setup');


 
 
 



// files require 
if( file_exists( dirname( __FILE__ ).'/inc/scripts.php' ) ){
	require_once( dirname( __FILE__ ).'/inc/scripts.php' );
}
if( file_exists( dirname( __FILE__ ).'/inc/widgets.php' ) ){
	require_once( dirname( __FILE__ ).'/inc/widgets.php' );
}
if( file_exists( dirname( __FILE__ ).'/inc/custom-post.php' ) ){
	require_once( dirname( __FILE__ ).'/inc/custom-post.php' );
}
if( file_exists( dirname( __FILE__ ).'/inc/custom-nav-walker.php' ) ){
	require_once( dirname( __FILE__ ).'/inc/custom-nav-walker.php' );
}
if( file_exists( dirname( __FILE__ ).'/theme-settings/ReduxCore/framework.php' ) ){
	require_once( dirname( __FILE__ ).'/theme-settings/ReduxCore/framework.php' );
}
if( file_exists( dirname( __FILE__ ).'/theme-settings/sample/config.php' ) ){
	require_once( dirname( __FILE__ ).'/theme-settings/sample/config.php' );
}
if( file_exists( dirname( __FILE__ ).'/inc/metabox/init.php' ) ){
	require_once( dirname( __FILE__ ).'/inc/metabox/init.php' );
}
if( file_exists( dirname( __FILE__ ).'/inc/metabox/config.php' ) ){
	require_once( dirname( __FILE__ ).'/inc/metabox/config.php' );
}












function post_class_function( $classes, $class, $ID ){
	$texonomy = 'procuct_cat';
	$terms = get_the_terms( (int) $ID, $texonomy );
	
	if( !empty( $terms ) ){
		foreach( (array) $terms as $order => $term ){
			if( !in_array( $term->slug, $classes ) ){
				$classes[] = $term->slug;
			}
		}
	}
	return $classes;
}
add_filter('post_class', 'post_class_function', 10, 3);




 function product_gallery_image_urls( $content ) {

 	global $post;

 	// Only do this on singular items
 	if( ! is_singular() )
 		return $content;

 	// Make sure the post has a gallery in it
 	if( ! has_shortcode( $post->post_content, 'gallery' ) )
 		return $content;

 	// Retrieve the first gallery in the post
 	$gallery = get_post_gallery_images( $post );

	$image_list = '<ul class="qv_carousel_single d_inline_middle">';

	// Loop through each image in each gallery
	foreach( $gallery as $image_url ) {

		$image_list .= '<li>' . '<img src="' . $image_url . '">' . '</li>';

	}

	$image_list .= '</ul>';

	// Append our image list to the content of our post
	$content .= $image_list;

 	return $content;

 }
 add_filter( 'the_content', 'product_gallery_image_urls' );






?>