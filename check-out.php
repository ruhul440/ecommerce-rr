<?php
	/*
	 Template Name: Check Out Page
	
	*/
 get_header(); ?>
<?php global $optionr; ?>
			<!--breadcrumbs-->

			<section class="breadcrumbs">

				<div class="container">

					<ul class="horizontal_list clearfix bc_list f_size_medium">

						<li class="m_right_10 current"><a href="<?php bloginfo('home'); ?>" class="default_t_color"><?php echo __('Home', 'robi'); ?><i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>

						<li><a href="#" class="default_t_color"><?php the_title(); ?></a></li>

					</ul>

				</div>

			</section>

			<!--content-->

			<div class="page_content_offset">

				<div class="container">

					<div class="row clearfix">

						<!--left content column-->
				
					
<?php
						 while( have_posts() ) : the_post();
						
						
						the_content();
						
						endwhile;
						
					?>

				
				
						<!--right column-->
						<?php get_sidebar(); ?>
					</div>

				</div>

			</div>

<?php get_footer(); ?>