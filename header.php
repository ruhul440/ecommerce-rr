<?php global $optionr; ?>

<!doctype html>

<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->

<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>><!--<![endif]-->

<head>


		<meta charset="<?php bloginfo('charset'); ?>">

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">


		
		
		
		
		
		
		
		<link rel="icon" type="<?php echo esc_url(get_template_directory_uri()); ?>/image/ico" href="<?php echo esc_url(get_template_directory_uri()); ?>/images/fav.ico">

		<!--stylesheet include-->

		
		
<?php get_template_part('stylesheets'); ?>
		
		
		
		
		
		
		
		<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/modernizr.js"></script>

		
		
		
		
		
		
		
		
		<?php wp_head(); ?>
	</head>

	<body>

		
		<div class="wide_layout relative w_xs_auto">

			<!--[if (lt IE 9) | IE 9]>

				<div style="background:#fff;padding:8px 0 10px;">

				<div class="container" style="width:1170px;"><div class="row wrapper"><div class="clearfix" style="padding:9px 0 0;float:left;width:83%;"><i class="fa fa-exclamation-triangle scheme_color f_left m_right_10" style="font-size:25px;color:#e74c3c;"></i><b style="color:#e74c3c;">Attention! This page may not display correctly.</b> <b>You are using an outdated version of Internet Explorer. For a faster, safer browsing experience.</b></div><div class="t_align_r" style="float:left;width:16%;"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" class="button_type_4 r_corners bg_scheme_color color_light d_inline_b t_align_c" target="_blank" style="margin-bottom:2px;">Update Now!</a></div></div></div></div>

			<![endif]-->

			<!--markup header-->

			<header role="banner" class="type_5">

				<!--header top part-->

				<section class="h_top_part">

					<div class="container">

						<div class="row clearfix">


							<div class="col-lg-12 col-md-12 col-sm-12 t_align_c t_xs_align_l">

								<p class="f_size_small">Call us : <b class="color_dark">(+880) <?php echo $optionr['phone-number']; ?></b></p>

							</div>

						</div>

					</div>

				</section>
				
				<?php get_template_part('menu'); ?>

			</header>
