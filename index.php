<?php get_header(); ?>
<?php get_template_part('slider'); ?>

			
			
			
	<?php $terms = wp_get_post_terms( get_the_ID, 'procuct_category' ); ?>		
			
			
			<!--content-->

			<div class="page_content_offset">

				<div class="container">

					<!--banners-->

					<?php get_template_part('templates/banner'); ?>
					<!--filter navigation-->
					
					<div class="clearfix">
					<?php
						if( !is_tax() ){
							$terms = get_terms( 'procuct_cat' );
							$count = count( $terms );
							if( $count > 0 ){ ?>
						<ul class="horizontal_list clearfix tt_uppercase isotope_menu f_size_ex_large f_left f_xs_none m_xs_bottom_15" data-carousel-filter=".wfilter_carousel">

							<li class="active m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr"><button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter="*"><?php echo __('All', 'robi'); ?></button></li>
							
							<?php 
							
								foreach( $terms as $term ){
									
									echo '<li class="m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr"><button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter="'.$term->slug.'">'.$term->name.'</button></li>';
								
								}
							?>

						</ul>
						<?php } ?>
						
						<div class="f_right clearfix nav_buttons_wrap f_mxs_none m_mxs_bottom_5 f_xs_none">
							<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left tr_delay_hover r_corners wfilter_prev"><i class="fa fa-angle-left"></i></button>
							<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners wfilter_next"><i class="fa fa-angle-right"></i></button>
						</div>
							<?php }?>

					</div>

					<!--carousel with filter-->
					<div class="wfilter_carousel m_bottom_30 m_xs_bottom_15">
						<?php
							$product = new WP_Query(
								array(
									'post_type' => 'products',
									'posts_per_page' => 20,
								)
							);
							$terms = get_the_terms($post->ID, 'procuct_category' );
							if( $product->have_posts() ): while( $product->have_posts() ) : $product->the_post(); 
						?>
						<figure <?php post_class('r_corners photoframe shadow relative tr_all_hover animate_ftb long'); ?>>
							<a href="<?php the_permalink(); ?>" class="d_block relative pp_wrap">
								
								
								
								
									<?php $hot_price = get_post_meta($post->ID, '_hot-product', true) ?>
									<?php $sale_price = get_post_meta($post->ID, '_sale-product', true) ?>
								
									<?php if( $hot_price == 'yes' ){ ?>
										
										<span class="hot_stripe"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/hot_product.png" alt=""></span>
									<?php }else{ if( $sale_price == 'yes' ){ ?>
										
											<span class="hot_stripe"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/sale_product.png" alt=""></span>
										
										
									<?php }} ?>
								<?php the_post_thumbnail( 'home_thumb',  array( 'class' => 'tr_all_hover' ) ); ?>
								<span class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none"><?php echo __('View Details', 'robi'); ?></span>
							</a>
							<figcaption>
								<h5 class="m_bottom_10"><a href="<?php the_permalink(); ?>" class="color_dark ellipsis"><?php the_title(); ?></a></h5>
								<div class="clearfix">
									<button class="button_type_4 bg_scheme_color f_left r_corners tr_all_hover color_light mw_0"><a style="color:#fff" href="<?php bloginfo('home'); ?>/checkout/"><?php echo __('Buy Now', 'robi'); ?></a></button>
									<p style="margin:10px;" class="scheme_color f_right f_size_large m_bottom_15"><?php echo __('Tk', 'robi'); ?> <?php echo get_post_meta($post->ID, '_product-price', true) ?>/-</p>
								</div>
							</figcaption>
						</figure>
						<?php endwhile; else: ?>
							<h1><?php echo __('There is no product you have searched', 'robi'); ?></h1>
						<?php endif; ?>
						
						
						

					</div>


					
<?php get_template_part('from', 'blog'); ?>
<?php get_template_part('banner', 'bottom'); ?>
<?php get_template_part('brand'); ?>
					
					
					

				</div>

			</div>
<?php get_footer(); ?>