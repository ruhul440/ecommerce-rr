<!--header bottom part-->
<?php global $optionr; ?>
				<section class="h_bot_part">

					<div class="menu_wrap">

						<div class="container">

							<div class="clearfix row">

								<div class="col-lg-3 t_md_align_c m_md_bottom_15">

									<a href="<?php bloginfo('home'); ?>" class="logo d_md_inline_b">

										<img src="<?php echo $optionr['logo-upload']['url']; ?>" alt="">

									</a>

								</div>

								<div class="col-lg-9 clearfix t_sm_align_c">

									<div class="clearfix t_sm_align_l f_left f_sm_none relative s_form_wrap m_sm_bottom_15 p_xs_hr_0 m_xs_bottom_5">

										<!--button for responsive menu-->

										<button id="menu_button" class="r_corners centered_db d_none tr_all_hover d_xs_block m_xs_bottom_5">

											<span class="centered_db r_corners"></span>

											<span class="centered_db r_corners"></span>

											<span class="centered_db r_corners"></span>

										</button>

										<!--main menu-->

										<nav role="navigation" class="f_left f_xs_none d_xs_none m_right_35 m_md_right_30 m_sm_right_0">	

											
											<?php
												wp_nav_menu( array(
													'theme_location' => 'main-menu',
													'menu_class' => 'horizontal_list main_menu type_2 clearfix',
													'walker' => new Robi_Theme_Menu()
												) );
											?>
											
											

										</nav>

										<button class="f_right search_button tr_all_hover f_xs_none d_xs_none">

											<i class="fa fa-search"></i>

										</button>

										<!--search form-->

										<div class="searchform_wrap type_2 bg_tr tf_xs_none tr_all_hover w_inherit">

											<div class="container vc_child h_inherit relative w_inherit">

												<form role="search" action="<?php bloginfo('home'); ?>" method="GET" class="d_inline_middle full_width">

													<input type="text" name="s" placeholder="Type text and hit enter" class="f_size_large p_hr_0">

												</form>

												<button class="close_search_form tr_all_hover d_xs_none color_dark">

													<i class="fa fa-times"></i>

												</button>

											</div>

										</div>

									</div>

								
								</div>

							</div>

						</div>

						<hr class="divider_type_6">

					</div>

				</section>