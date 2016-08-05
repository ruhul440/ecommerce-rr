<?php global $optionr; ?>
			<!--markup footer-->

			<footer id="footer">

				<div class="footer_top_part p_vr_0">

					<div class="container">

						<div class="row clearfix">
							<?php dynamic_sidebar('footer'); ?>

						</div>

					</div>

					<hr class="divider_type_4 m_bottom_25">

					<div class="container">

						<div class="row clearfix">

							<div class="col-lg-6 col-md-6 col-sm-6 m_bottom_20 m_xs_bottom_10">

								<!--social icons-->

								<ul class="clearfix horizontal_list social_icons">
									<?php  
										if($optionr['fb-link-show']['yes'] == 1){
									?>
										<li class="facebook m_bottom_5 relative">

											<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Facebook</span>

											<a href="<?php echo $optionr['fb-link']; ?>" class="r_corners t_align_c tr_delay_hover f_size_ex_large">

												<i class="fa fa-facebook"></i>

											</a>

										</li>
									<?php }?>
									<?php  
										if($optionr['gp-link-show']['yes'] == 1){
									?>

									<li class="google_plus m_left_5 m_bottom_5 relative">

										<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Google Plus</span>

										<a href="<?php echo $optionr['gp-link']; ?>" class="r_corners f_size_ex_large t_align_c tr_delay_hover">

											<i class="fa fa-google-plus"></i>

										</a>

									</li>
										<?php } ?>
									<?php  
										if($optionr['youtube-link-show']['yes'] == 1){
									?>

									<li class="youtube m_left_5 m_bottom_5 relative">

										<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Youtube</span>

										<a href="<?php echo $optionr['youtube-link']; ?>" class="r_corners f_size_ex_large t_align_c tr_delay_hover">

											<i class="fa fa-youtube-play"></i>

										</a>

									</li>
										<?php } ?>
									<?php  
										if($optionr['contact-link-show']['yes'] == 1){
									?>

									<li class="envelope m_left_5 m_bottom_5 relative">

										<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Contact Us</span>

										<a href="<?php echo $optionr['contact-link']; ?>" class="r_corners f_size_ex_large t_align_c tr_delay_hover">

											<i class="fa fa-envelope-o"></i>

										</a>

									</li>
										<?php } ?>

								</ul>

							</div>


								<?php dynamic_sidebar('footer-newsletter'); ?>

						</div>

					</div>

				</div>

				<!--copyright part-->

				<div class="footer_bottom_part">

					<div class="container clearfix t_mxs_align_c">

						<p class="f_left f_mxs_none m_mxs_bottom_10">&copy; <?php echo current_time('Y'); ?> <a href="<?php bloginfo('home'); ?>"><span class="color_light">M.N.Collection</span></a>. All Rights Reserved.</p>

					</div>

				</div>

			</footer>

		</div>

		<!--social widgets-->
<?php get_template_part('social', 'icon') ?>	
		
		<!--login popup-->


		
		
		<?php wp_footer(); ?>


	</body>

</html>