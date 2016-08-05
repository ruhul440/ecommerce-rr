	<!--product brands-->

					<div class="clearfix m_bottom_25 m_sm_bottom_20">

						<h2 class="tt_uppercase color_dark f_left heading2 animate_fade f_mxs_none m_mxs_bottom_15"><?php echo __('Product Brands', 'robi'); ?></h2>

						<div class="f_right clearfix nav_buttons_wrap animate_fade f_mxs_none">

							<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left tr_delay_hover r_corners pb_prev"><i class="fa fa-angle-left"></i></button>

							<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners pb_next"><i class="fa fa-angle-right"></i></button>

						</div>

					</div>

					<!--product brands carousel-->

					<div class="product_brands m_sm_bottom_35 m_xs_bottom_0">
						<?php
							$brand = new WP_Query( array(
								'post_type' => 'brands',
								'posts_per_page' => -1,
								
							) );
							
							while( $brand->have_posts() ) : $brand->the_post(); 
						?>
						<a href="<?php echo get_post_meta( $post->ID, '_brandurl', true ); ?>" class="d_block t_align_c animate_fade"><?php the_post_thumbnail('brand');  ?></a>
						
						<?php endwhile; ?>


					</div>