	<?php

	/*** 
	Data structure example for the arrays used;
	
		$process = array(
	    	"steps" =>  array(
				"Step 1",
				"Step 2"
			),
			"slides" => array(
				0 => array(
						"image" => "../../images/image0.jpg",
						"alt_text" => "Element 0",
						"caption" => "This is the element 0"
					 ),
				1 => array(
						"image" => "../../images/image1.jpg",
						"alt_text" => "Element 1",
						"caption" => "This is the element 1"
					 )
			),
			"active" => 0
	    );

	 ***/

	if (isset($process)): 
	?>

	<div class="row">
			<div class="span12">
				<h3>Process</h3>
			</div>
			<div class="span6">
				<ol>
					<?php foreach ($process['steps'] as $step): ?>
						<li><p class="spacer"><?php echo $step; ?></p></li>
					<?php endforeach; ?>
				</ol>
			</div>
			<div class="span6">
		
				<div id="myCarousel" class="carousel slide">  
					<ol class="carousel-indicators">
						<?php foreach ($process['slides'] as $i => $slide): ?>
							<li data-target="#myCarousel" data-slide-to="<? echo $i; ?>" <?php if($process['active'] === $i): echo " class='active'"; endif;?> ></li>
						<?php endforeach; ?>
					</ol>

					<!-- Carousel items -->  
				    <div class="carousel-inner">

				    	<?php foreach ($process['slides'] as $i => $slide): ?>
				    	<div class="item <?php if($process['active'] === $i): echo " active"; endif;?>">
				        	<img src="<?php echo $slide['image']; ?>" alt="<?php echo $slide['alt_text']; ?>" />
				        	<div class="carousel-caption">
				        		<p><?php echo $slide['caption']; ?></p>
				        	</div>
				        </div> 
				    	<?php endforeach; ?>
				        
				  	</div>

				  	<!-- Carousel nav -->  
				  	<a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a>  
				  	<a class="carousel-control right" href="#myCarousel" data-slide="next">›</a>  
				</div>  
			</div>
	</div>
	<hr/>
	<?php endif; ?>