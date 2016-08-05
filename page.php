<?php get_header(); ?>

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
					<?php if( have_posts() ) { while( have_posts() ) : the_post(); ?>
						<section class="col-lg-9 col-md-9 col-sm-9">
							<h2 class="tt_uppercase color_dark m_bottom_30"><?php the_title(); ?></h2>

							<div class="clearfix m_bottom_30">

								<div class="f_size_large p_top_10">

										<?php the_content(); ?>

								</div>

							</div>

					<?php endwhile; } else{?>
							<div class="alert_box r_corners info m_bottom_10 m_xs_bottom_30">

								<i class="fa fa-info-circle"></i><p>There are no products.</p>

							</div>
					<?php  }?>

						</section>

						<!--right column-->

						<?php get_sidebar(); ?>
					</div>

				</div>

			</div>

		<?php get_footer(); ?>