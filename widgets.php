<?php
add_filter('widget_text', 'do_shortcode');
add_action('widgets_init', 'ecommerce_rr_widgets');
function ecommerce_rr_widgets(){
	
			register_sidebar( array(
				'name' => __( 'Social Share', 'robi' ),
				'id' => 'socila',
				'before_widget' => '<div class="social_share">',
				'after_widget'  => '</div>',
				'before_title'  => '<h2 style="display: none;">',
				'after_title'   => '</h2>',
				) );
			register_sidebar( array(
				'name' => __( 'Right Sidebar', 'robi' ),
				'id' => 'right-sidebar',
				'class' => 'widget_content',
				'before_widget' => '<figure class="widget shadow r_corners wrapper m_bottom_30">',
				'after_widget'  => '</div></figure>',
				'before_title'  => '<figcaption><h3 class="color_light">',
				'after_title'   => '</h3></figcaption><div class="widget_content">',
				) );
		
			register_sidebar( array(
				'name' => __( 'Footer Widgets', 'robi' ),
				'id' => 'footer',
				'class' => 'widget_content',
				'before_widget' => '<div class="col-lg-3 col-md-3 col-sm-3 footer_widgets m_xs_bottom_30 m_bottom_40">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="color_light_2 m_bottom_20">',
				'after_title'   => '</h3>',
				) );
		
			register_sidebar( array(
				'name' => __( 'Footer Newsletter', 'robi' ),
				'id' => 'footer-newsletter',
				'before_widget' => '<div class="footer-newsletter col-lg-6 col-md-6 col-sm-6 m_bottom_20 m_xs_bottom_30">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="color_light_2 d_inline_middle m_md_bottom_15 d_xs_block">',
				'after_title'   => '</h3>',
				) );
		
	
}
