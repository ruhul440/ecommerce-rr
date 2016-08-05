					
					<div class="clearfix">

						<h2 class="color_dark tt_uppercase f_left m_bottom_15 f_mxs_none heading5 animate_ftr"><?php echo __('Best Seller', 'robi'); ?></h2>

						<div class="f_right clearfix nav_buttons_wrap f_mxs_none m_mxs_bottom_5 animate_fade">

							<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left tr_delay_hover r_corners bestsellers_prev"><i class="fa fa-angle-left"></i></button>

							<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners bestsellers_next"><i class="fa fa-angle-right"></i></button>

						</div>

					</div>

					<!--bestsellers carousel-->

					<div class="bestsellers_carousel m_bottom_30 m_xs_bottom_15">

						<?php 
							$best = new WP_Query( array(
							
								'post_type' => 'products',
								'procuct_cat' => 'best-seller',
							)
							
							); 
						 while( $best->have_posts() ) : the_post(); 
						?>
						
						<figure class="r_corners photoframe shadow relative tr_all_hover animate_ftb long">

							<!--product preview-->

							<a href="<?php the_permalink(); ?>" class="d_block relative pp_wrap">

								<!--hot product-->
								<?php 
									the_post_thumbnail('home_thumb', array( 'class' => 'tr_all_hover') ); 
								?>

								<span class="box_s_none button_type_5 color_light r_corners tr_all_hover d_xs_none"><?php echo __('View Details', 'robi'); ?></span>

							</a>

							<!--description and price of product-->

							<figcaption>

								<h5 class="m_bottom_10"><a href="<?php the_permalink(); ?>" class="color_dark ellipsis"><?php the_title(); ?></a></h5>


								<button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0"><?php echo __('Buy Now', 'robi'); ?></button>

							</figcaption>

						</figure>
					<?php endwhile; ?>
		
					</div>

