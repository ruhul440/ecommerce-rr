<?php get_header(); ?>

<?php while( have_posts() ):the_post(); ?>
			<!--breadcrumbs-->

			<section class="breadcrumbs">

				<div class="container">

					<ul class="horizontal_list clearfix bc_list f_size_medium">

						<li class="m_right_10 current"><a href="<?php bloginfo('home'); ?>" class="default_t_color">Home<i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>

						<li><a href="#" class="default_t_color"><?php the_title(); ?></a></li>

					</ul>

				</div>

			</section>

			<!--content-->

			<div class="page_content_offset">

				<div class="container">

					<div class="row clearfix">

						<!--left content column-->

						<section class="col-lg-9 col-md-9 col-sm-9 m_xs_bottom_30">

						<div class="clearfix m_bottom_30 t_xs_align_c">

						<div class="photoframe type_2 shadow r_corners f_left f_sm_none d_xs_inline_b product_single_preview relative m_right_30 m_bottom_5 m_sm_bottom_20 m_xs_right_0 w_mxs_full">

							<span class="hot_stripe"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sale_product.png" alt=""></span>

							<div class="relative d_inline_b m_bottom_10 qv_preview d_xs_block">
						<?php
							$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
							
						?>
								
								
								
								<?php the_post_thumbnail( 'single_product',  array( 'class' => 'tr_all_hover', 'data-zoom-image' =>$feat_image, 'id' => 'zoom_image' ) ); ?>
								
							</div>

							<!--carousel-->

							<div class="relative qv_carousel_wrap">

									</button>
<!--							<button class="button_type_11 bg_light_color_1 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_single_prev">

									<i class="fa fa-angle-left "></i>


							/*	<ul class="qv_carousel_single d_inline_middle">

									<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/quick_view_img_10.jpg" alt="">

									<a href="#" data-image="<?php echo esc_url(get_template_directory_uri()); ?>/images/quick_view_img_8.jpg" data-zoom-image="<?php echo esc_url(get_template_directory_uri()); ?>/images/preview_zoom_2.jpg"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/quick_view_img_11.jpg" alt=""></a>

									<a href="#" data-image="<?php echo esc_url(get_template_directory_uri()); ?>/images/quick_view_img_9.jpg" data-zoom-image="<?php echo esc_url(get_template_directory_uri()); ?>/images/preview_zoom_3.jpg"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/quick_view_img_12.jpg" alt=""></a>

									<a href="#" data-image="<?php echo esc_url(get_template_directory_uri()); ?>/images/quick_view_img_16.jpg" data-zoom-image="<?php echo esc_url(get_template_directory_uri()); ?>/images/preview_zoom_4.jpg"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/quick_view_img_13.jpg" alt=""></a>

									<a href="#" data-image="<?php echo esc_url(get_template_directory_uri()); ?>/images/quick_view_img_17.jpg" data-zoom-image="<?php echo esc_url(get_template_directory_uri()); ?>/images/preview_zoom_5.jpg"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/quick_view_img_14.jpg" alt=""></a>

									<a href="#" data-image="<?php echo esc_url(get_template_directory_uri()); ?>/images/quick_view_img_18.jpg" data-zoom-image="<?php echo esc_url(get_template_directory_uri()); ?>/images/preview_zoom_6.jpg"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/quick_view_img_15.jpg" alt=""></a>

								</ul>

								<button class="button_type_11 bg_light_color_1 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_single_next">

									<i class="fa fa-angle-right "></i>

								</button> */
-->
							</div>

						</div>

						<div class="p_top_10 t_xs_align_l">

							<!--description-->

							<h2 class="color_dark fw_medium m_bottom_10"><?php the_title(); ?></h2>

							

							<hr class="m_bottom_10 divider_type_3">

							<table class="description_table m_bottom_10">


								<tr>

									<td><?php echo __('Availability:', 'robi'); ?></td>

									<td>
										<?php $available = get_post_meta( $post->ID, '_availability', true);
										if( $available == 'yes' ){ ?>
											
											<span class="color_green"><?php echo __('in stock', 'robi'); ?></span></td>
										 <?php }else{ ?>
												<span class="color_red"><?php echo __('Out of Stock', 'robi'); ?></span></td>
										<?php  }

										?>
									

								</tr>

								<tr>

									<td><?php echo __('Product Code:', 'robi'); ?></td>

									<td><?php echo get_post_meta($post->ID, '_pcode', true); ?></td>

								</tr>

							</table>

							<table class="description_table m_bottom_5">

								<tr>

									<td><hr class="divider_type_3 m_bottom_15">

							<div class="m_bottom_15">
								<?php $saleboffer = get_post_meta($post->ID, '_sale-product', true);

								if( $saleboffer == 'yes' ) { ?>
									
									<s class="v_align_b f_size_ex_large"><?php echo __('Tk ', 'robi'); ?> <?php echo get_post_meta( $post->ID, '_offerp', true); ?>/-</s>
									
								<?php }?>
								<span class="v_align_b f_size_big m_left_5 scheme_color fw_medium"><?php echo __('Tk ', 'robi'); ?> <?php echo get_post_meta( $post->ID, '_product-price', true ); ?>/-</span>

							</div>

							<div class="d_ib_offset_0 m_bottom_20">

								<button class="button_type_12 r_corners bg_scheme_color color_light tr_delay_hover d_inline_b f_size_large"><a style="color:#fff;font-weight:bold;" href="<?php bloginfo('home'); ?>/checkout/"><?php echo __('Buy Now', 'robi'); ?></a></button>
								
								
								<button class="button_type_12 bg_light_color_2 tr_delay_hover d_inline_b r_corners color_dark m_left_5 p_hr_0 relative"><a style="color:#fff;padding: 0 15px;" href="<?php bloginfo('home'); ?>/contact-us/"><i class="fa fa-question-circle f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small"><?php echo __('Ask a Question', 'robi'); ?></span></a></button>
								
								
								
								<div class="instead">
									<p style="margin-left:50px"><?php echo  __('or', 'robi'); ?></p>
									<p><?php echo  __('Contact To This Number', 'robi'); ?></p>
									<p class="number bg_scheme_color "> (+880) <?php echo $optionr['phone-number']; ?> </p>
								</div>
							</div></td>

								</tr>

							</table>
							


							<table class="description_table m_bottom_5">

								<tr>

									<td>Share this product:</td>

								</tr>

								<tr>

									<td><div class="social_share">
								<?php dynamic_sidebar('socila'); ?>
							</div>:</td>

								</tr>

							</table>

							<hr class="divider_type_3 m_bottom_10">

							<p class="m_bottom_10"><?php echo get_post_meta($post->ID, '_sdesc', true); ?></p>

							


							<div class="d_inline_middle m_left_5 addthis_widget_container">

								<!-- AddThis Button BEGIN -->

								<div class="addthis_toolbox addthis_default_style addthis_32x32_style">

								<a class="addthis_button_preferred_1"></a>

								<a class="addthis_button_preferred_2"></a>

								<a class="addthis_button_preferred_3"></a>

								<a class="addthis_button_preferred_4"></a>

								<a class="addthis_button_compact"></a>

								<a class="addthis_counter addthis_bubble_style"></a>

								</div>

								<!-- AddThis Button END -->

							</div>

						</div>

					</div>

	

					
<?php get_template_part('templates/description', 'tab'); ?>

<?php endwhile; ?>

		
<?php get_template_part('templates/releted', 'products'); ?>
							<hr class="divider_type_3 m_bottom_15">



						</section>

<?php get_sidebar(); ?>
					
					
					
					
					</div>

				</div>

			</div>
	<?php get_footer(); ?>