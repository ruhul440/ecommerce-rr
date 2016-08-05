					<!--blog-->

					<div class="row clearfix m_bottom_45 m_md_bottom_35 m_xs_bottom_30">

						<div class="col-lg-6 col-md-6 col-sm-12 m_sm_bottom_35 blog_animate animate_ftr">

							<div class="clearfix m_bottom_25 m_sm_bottom_20">

								<h2 class="tt_uppercase color_dark f_left"><?php echo __('From The Blog', 'robi'); ?></h2>

								<div class="f_right clearfix nav_buttons_wrap">

									<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large bg_light_color_1 f_left tr_delay_hover r_corners blog_prev"><i class="fa fa-angle-left"></i></button>

									<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners blog_next"><i class="fa fa-angle-right"></i></button>

								</div>

							</div>

							<!--blog carousel-->

							<div class="blog_carousel">

							
							<?php 
							
								if( have_posts() ) : while( have_posts() ) : the_post(); 
							?>
								<div class="clearfix">
									<!--image-->
									<?php if( has_post_thumbnail() ) {?>

									<a href="#" class="d_block photoframe relative shadow wrapper r_corners f_left m_right_20 animate_ftt f_mxs_none m_mxs_bottom_10">
									
									<?php the_post_thumbnail( 'blog_img', array( 'class' => 'tr_all_long_hover' ) ); ?>
									</a>
									<?php }?>

									<!--post content-->

									<div class="mini_post_content">

										<h4 class="m_bottom_5 animate_ftr"><a href="#" class="color_dark"><b><?php the_title(); ?></b></a></h4>

										<p class="f_size_medium m_bottom_10 animate_ftr"> <?php the_time('d F, Y'); ?>,  <?php comments_number('No Comments', 'One Comment', '% Comments'); ?></p>

										<p class="m_bottom_10 animate_ftr"><?php echo wp_trim_words( the_content(), 25, '');  ?></p>

										<a class="tt_uppercase f_size_large animate_ftr" href="<?php the_permalink(); ?>"><?php echo __('Read More', 'robi'); ?></a>

									</div>

								</div>
								
								<?php endwhile; else: ?>
									<h1><?php echo __('There is no post available', 'robi'); ?></h1>
								<?php endif; ?>
								
							</div>

						</div>

						
						
						<!--testimonials-->

						<div class="col-lg-6 col-md-6 col-sm-12 ti_animate animate_ftr">

							<div class="clearfix m_bottom_25 m_sm_bottom_20">

								<h2 class="tt_uppercase color_dark f_left f_mxs_none m_mxs_bottom_15"><?php echo __('What Our Customers Say', 'robi'); ?></h2>

								<div class="f_right clearfix nav_buttons_wrap f_mxs_none">

									<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large bg_light_color_1 f_left tr_delay_hover r_corners ti_prev"><i class="fa fa-angle-left"></i></button>

									<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners ti_next"><i class="fa fa-angle-right"></i></button>

								</div>

							</div>

							<!--testimonials carousel-->

							<div class="testiomials_carousel">
							<?php
								$testimonial = new WP_Query( array(
									'post_type' => 'testimonials',
									'posts_per_page' => -1,
								) ); 
								
								while( $testimonial->have_posts() ): $testimonial->the_post(); 
							?>

							
							
								<div>

									<blockquote class="r_corners shadow f_size_large relative m_bottom_15 animate_ftr"><?php echo get_the_content(); ?></blockquote>
									
									
									<?php if( has_post_thumbnail() ){ 
										
										the_post_thumbnail('client_img', array( 'class' => 'circle m_left_20 d_inline_middle animate_ftr' ));  } 
									
									?>
									

									<div class="d_inline_middle m_left_15 animate_ftr">

										<h5 class="color_dark"><b><?php echo get_post_meta( $post->ID, '_client-name', true ); ?></b></h5>
										<p><?php echo get_post_meta( $post->ID, '_client-address', true ) ?></p>

									</div>

								</div>
								<?php endwhile; ?>

								

							</div>

						</div>

					</div>

					