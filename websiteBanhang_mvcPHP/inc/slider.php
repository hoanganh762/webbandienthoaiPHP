<div class="header_bottom">
		
			 <div class="header_bottom_right_images">
		   <!-- FlexSlider -->
             

<!-- FlexSlider -->
	    </div>
	  <div class="clear">
	  </div>
			<div class="" >
				
			</div>
			
	  <section class="slider">
				  <div class="flexslider">
					  
					<ul class="slides">
						
						 <?php 
						$get_slider = $product->show_slider();
						if($get_slider){
							while($result_slider = $get_slider->fetch_assoc()){
						 ?>
						 
						<li><img src="admin/uploads/<?php echo $result_slider['slider_image'] ?>" alt="<?php echo $result_slider['sliderName'] ?>"/></li>
						<?php
							}
						}

						 ?>  
				    </ul>
				  </div>
	      </section>
 </div>