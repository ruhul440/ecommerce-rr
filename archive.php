<?php

 get_header(); ?>
			<!--breadcrumbs-->

			<section class="breadcrumbs">

				<div class="container">

					<ul class="horizontal_list clearfix bc_list f_size_medium">

						<li class="m_right_10 current"><a href="<?php bloginfo('home'); ?>" class="default_t_color">Home<i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>

					</ul>

				</div>

			</section>

			<!--content-->

			<div class="page_content_offset">

				<div class="container">

					<div class="row clearfix">

						<!--left content column-->
								<?php 
								$term = get_queried_object();
								$product = new WP_Query( array(
									'post_type' => 'products',
									'category_name'=>$term->name
								) ); 
								
								
								?>
						<section class="col-lg-9 col-md-9 col-sm-9">
<?php if(  have_posts() ) : ?>
							<h2 class="tt_uppercase color_dark m_bottom_25"><?php echo $term->name; ?></h2>

							<hr class="m_bottom_10 divider_type_3">


							<!--products-->

							<section class="products_container category_grid clearfix m_bottom_15">

								<!--product item-->
								
								
								

								
								
								<?php 
								
								
									while( have_posts() ) : the_post();
								
								
								?>
								

								<div class="product_item hit w_xs_full">

									<figure class="r_corners photoframe type_2 t_align_c tr_all_hover shadow relative">

										<!--product preview-->

										<a href="<?php the_permalink(); ?>" class="d_block relative wrapper pp_wrap m_bottom_15">
										
										<?php the_post_thumbnail('home_thumb', array( 'class' => 'tr_all_hover' ));  ?>
											

											<span role="button" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none"><?php echo __('Quick View', 'robi'); ?></span>

										</a>

										<!--description and price of product-->

										<figcaption>

											<h5 class="m_bottom_10"><a href="<?php the_permalink(); ?>" class="color_dark"><?php the_title(); ?></a></h5>

											<p class="scheme_color f_size_large m_bottom_15"><?php echo get_post_meta( $post->ID, '_product-price', true ); ?></p>	

											<button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15"><a style="color:#fff" href="<?php bloginfo('home'); ?>/checkout/"><?php echo __('Buy Now', 'robi'); ?></a></button>


										</figcaption>

									</figure>

								</div>

								<?php endwhile; endif; ?>
								
								
								
							
							
							</section>

							<hr class="m_bottom_10 divider_type_3">

							
							
							
						</section>

						<!--right column-->

					<?php get_sidebar(); ?>
					</div>

				</div>

			</div>
<?php get_footer(); ?>