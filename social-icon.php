
		<ul class="social_widgets d_xs_none">

			<!--facebook-->

			<li class="relative">

				<button class="sw_button t_align_c facebook"><i class="fa fa-facebook"></i></button>

				<div class="sw_content">

					<h3 class="color_dark m_bottom_20">Join Us on Facebook</h3>

					
<div style="width: 250px;">
  <div class="fb-page" data-href="https://www.facebook.com/MNCollection-1719291994971566" data-width="250"></div>
</div>
				</div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "http://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
			</li>

			<!--contact form-->

			<li class="relative">

				<button class="sw_button t_align_c contact"><i class="fa fa-envelope-o"></i></button>

				<div class="sw_content">

					<h3 class="color_dark m_bottom_20">Contact Us</h3>

					<p class="f_size_medium m_bottom_15">Lorem ipsum dolor sit amet, consectetuer adipis mauris</p>
					
					<?php echo do_shortcode('[contact-form-7 id="75" title="Mini Form" html_id="contactform" html_class="mini"]'); ?>

				</div>	

			</li>

			<!--contact info-->

			<li class="relative">

				<button class="sw_button t_align_c googlemap"><i class="fa fa-map-marker"></i></button>

				<div class="sw_content">

					<h3 class="color_dark m_bottom_20">Store Location</h3>

					<ul class="c_info_list">

						<li class="m_bottom_10">

							<div class="clearfix m_bottom_15">

								<i class="fa fa-map-marker f_left color_dark"></i>

								<p class="contact_e"><?php echo $optionr['cpageaddress']; ?></p>

							</div>

							<iframe class="r_corners full_width" id="gmap_mini" src="<?php echo $optionr['cpage-map']; ?>"></iframe>

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

			</li>

		</ul>

