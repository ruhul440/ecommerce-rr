<?php global $optionr; 
if( $optionr['show-botom-ad']['yes'] ==1 ) {
?>					
					
					<!--banners-->

					<section class="row clearfix m_bottom_45 m_sm_bottom_35">

						
						<?php
							$banner_bottoms = $optionr['bottom-banner-ad'];
							
							foreach( $banner_bottoms as $banner_bottom ){
						
						?>
						
						<div class="col-lg-6 col-md-6 col-sm-6 animate_half_tc">

							<a href="<?php echo $banner_bottom['url']; ?>" class="d_block banner wrapper r_corners relative m_xs_bottom_30">

								<img src="<?php echo $banner_bottom['image']; ?>" alt="">

								<span class="banner_caption d_block vc_child t_align_c w_sm_auto">

									<span class="d_inline_middle">

										<span class="d_block color_dark tt_uppercase m_bottom_5 let_s"><?php echo $banner_bottom['title']; ?></span>

										<span class="d_block divider_type_2 centered_db m_bottom_5"></span>

										<span class="d_block color_light tt_uppercase m_bottom_15 banner_title"><b><?php echo $banner_bottom['description']; ?></b></span>

										<span class="button_type_6 bg_scheme_color tt_uppercase r_corners color_light d_inline_b tr_all_hover box_s_none f_size_ex_large">Shop Now!</span>

									</span>

								</span>

							</a>

						</div>
						
							<?php } ?>


					</section>
<?php } ?>