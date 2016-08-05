<?php
	/*
	 Template Name: Contact US
	
	*/
 get_header(); ?>
<?php global $optionr; ?>
			<!--breadcrumbs-->

			<section class="breadcrumbs">

				<div class="container">

					<ul class="horizontal_list clearfix bc_list f_size_medium">

						<li class="m_right_10 current"><a href="<?php bloginfo('home'); ?>" class="default_t_color"><?php echo __('Home', 'robi'); ?><i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>

						<li><a href="#" class="default_t_color"><?php echo $optionr['cpage-title']; ?></a></li>

					</ul>

				</div>

			</section>

			<!--content-->

			<div class="page_content_offset">

				<div class="container">

					<div class="row clearfix">

						<!--left content column-->

						<section class="col-lg-9 col-md-9 col-sm-9">

							<h2 class="tt_uppercase color_dark m_bottom_25"><?php echo $optionr['cpage-title']; ?></h2>

							<div class="r_corners photoframe map_container shadow m_bottom_45">

								<iframe src="<?php echo $optionr['cpage-map']; ?>"></iframe>

							</div>

							<div class="row clearfix">

								<div class="col-lg-4 col-md-4 col-sm-4 m_xs_bottom_30">

									<h2 class="tt_uppercase color_dark m_bottom_25"><?php echo $optionr['info-title']; ?></h2>

									<ul class="c_info_list">

										<li class="m_bottom_10">

											<div class="clearfix m_bottom_15">

												<i class="fa fa-map-marker f_left color_dark"></i>

												<p class="contact_e"><?php echo $optionr['cpageaddress']; ?></p>

											</div>

										</li>

										<li class="m_bottom_10">

											<div class="clearfix m_bottom_10">

												<i class="fa fa-phone f_left color_dark"></i>

												<p class="contact_e">(+880) <?php echo $optionr['phone-number']; ?></p>

											</div>

										</li>

										<li class="m_bottom_10">

											<div class="clearfix m_bottom_10">

												<i class="fa fa-envelope f_left color_dark"></i>

												<a class="contact_e default_t_color" href="mailto:#"><?php echo $optionr['email-address']; ?></a>

											</div>

										</li>

										<li>

											<div class="clearfix">

												<i class="fa fa-clock-o f_left color_dark"></i>

												<p class="contact_e"><?php echo $optionr['workinghours']; ?></p>

											</div>

										</li>

									</ul>

								</div>

								<?php
									 while(have_posts()): the_post(); 
									
									the_content(); 
									endwhile;
								?>
							
							</div>

						</section>

						<!--right column-->
						<?php get_sidebar(); ?>
					</div>

				</div>

			</div>

<?php get_footer(); ?>