<?php global $optionr; 

if( $optionr['show-slider']['yes'] ==1 ){
	$sliders = $optionr['main-slider']; 
?>
			<!--slider-->

			<section class="revolution_slider">

				<div class="r_slider">

					<ul>
					
					<?php
						foreach( $sliders as $single_side ){
						
					
					?>

						<li class="f_left" data-transition="random" data-slotamount="7">

							<img src="<?php echo $single_side['image'] ; ?>" alt="" data-bgrepeat="no-repeat" data-bgfit="cover" data-bgposition="center center">
							

						</li>
						
						<?php } ?>

					</ul>

				</div>

			</section>
<?php }?>