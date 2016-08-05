<?php


function etheme_scripts(){
	
	
	
	wp_register_style( 'colorpicker',  esc_url(get_template_directory_uri())."css/colorpicker.css" );
	
	
	
	
	
	
	
	
	
	
	
	
	wp_enqueue_script('jquery', true); 
	
	
	
	
	wp_register_script('retina', esc_url(get_template_directory_uri())."/js/retina.js"); 
	wp_register_script('themepunch_plugin', esc_url(get_template_directory_uri())."/js/jquery.themepunch.plugins.min.js"); 
	wp_register_script('revolution', esc_url(get_template_directory_uri())."/js/jquery.themepunch.revolution.min.js"); 
	wp_register_script('colorpicker', esc_url(get_template_directory_uri())."/js/colorpicker.js"); 
	wp_register_script('waypoints', esc_url(get_template_directory_uri())."/js/waypoints.min.js"); 
	wp_register_script('carousel', esc_url(get_template_directory_uri())."/js/owl.carousel.min.js"); 
	wp_register_script('tweet', esc_url(get_template_directory_uri())."/js/jquery.tweet.min.js"); 
	wp_register_script('scrollbar', esc_url(get_template_directory_uri())."/js/jquery.custom-scrollbar.js"); 
	
	
	
	wp_register_script('jquery-ui', esc_url(get_template_directory_uri())."/js/jquery-ui.min.js"); 
	wp_register_script('elevatezoom', esc_url(get_template_directory_uri())."/js/elevatezoom.min.js");
	wp_register_script('styleswitcher', esc_url(get_template_directory_uri())."/js/styleswitcher.js"); 
	wp_register_script('fancybox', esc_url(get_template_directory_uri())."/js/jquery.fancybox-1.3.4.js"); 
	wp_register_script('isotope', esc_url(get_template_directory_uri())."/js/jquery.isotope.min.js"); 
	
	
	wp_register_script('scripts', esc_url(get_template_directory_uri())."/js/scripts.js"); 
	
	
	
	
	if( is_singular('products') ){
		
		wp_enqueue_script('jquery-ui', array('jquery'), false, true);
		wp_enqueue_script('retina', array('jquery', 'jquery-ui'), false, true);
		wp_enqueue_script('elevatezoom', array('jquery', 'jquery-ui', 'retina'), false, true);
		wp_enqueue_script('waypoints', array('jquery', 'jquery-ui', 'retina', 'elevatezoom'), false, true);
		wp_enqueue_script('tweet', array('jquery', 'jquery-ui', 'retina', 'elevatezoom', 'waypoints'), false, true);
		wp_enqueue_script('carousel', array('jquery', 'jquery-ui', 'retina', 'elevatezoom', 'waypoints', 'tweet'), false, true);
		wp_enqueue_script('styleswitcher', array('jquery', 'jquery-ui', 'retina', 'elevatezoom', 'waypoints', 'tweet', 'carousel'), false, true);
		wp_enqueue_script('fancybox', array('jquery'), false, true);
		wp_enqueue_script('colorpicker', array('jquery'), false, true);
		
		
	}else{
		
		if( is_home() ){
			
		wp_enqueue_script('retina', array('jquery'), false, true);
		wp_enqueue_script('themepunch_plugin', array('jquery'), 1, true);
		wp_enqueue_script('revolution', array('jquery'), 2, true);
		wp_enqueue_script('colorpicker', array('jquery'), 3, true);
		wp_enqueue_script('waypoints', array('jquery'), 4, true);
		wp_enqueue_script('carousel', array('jquery'), 5, true);
		wp_enqueue_script('tweet', array('jquery'), 6, true);
		wp_enqueue_script('scrollbar', array('jquery'), 8, true);
		}else{
			wp_enqueue_script('retina', array('jquery'), false, true);
			wp_enqueue_script('themepunch_plugin', array('jquery'), 1, true);
			wp_enqueue_script('revolution', array('jquery'), 2, true);
			wp_enqueue_script('colorpicker', array('jquery'), 3, true);
			wp_enqueue_script('waypoints', array('jquery'), 4, true);
			wp_enqueue_script('carousel', array('jquery'), 5, true);
			wp_enqueue_script('tweet', array('jquery'), 6, true);
			wp_enqueue_script('scrollbar', array('jquery'), 8, true);
			
			if( is_archive() ){
			
					wp_enqueue_script('isotope', array('jquery'), 8, true);
				}
		}
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	wp_enqueue_script('scripts', array('jquery'), 7, true);
	
	
	
	
	
	
	
	
	//single page
	
}
add_action('wp_enqueue_scripts', 'etheme_scripts');

