<?php



// functions.php

function post_class_function( $classes, $class, $ID ){
	$texonomy = 'procuct_category';
	$terms = get_the_terms( (init) $ID, $texonomy );
	
	if( !empty( $terms ) ){
		foreach( (array) $terms as $order => $term ){
			if( !in_array( $term->slug, $classes ) ){
				$classes[] = $term->slug;
			}
		}
	}
	return $classes;
}
add_filter('post_class', 'post_class_function');



















?>