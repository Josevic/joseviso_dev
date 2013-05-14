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


	    $details = array(
		"date" => "Month Year start - Month Year end",
		"tags" => array(
			"Tag name 1" => "tag-url", 
			"Tag name 2" => "tag2-url"
		)
	);

	***/ 
	?>

	<!-- Breadcrumb -->
	<div class="row">
		<div class="span12">
			<ul class="breadcrumb">
				<li><a href="<?php echo $base; ?>">Home</a> <span class="divider">></span></li>
				<li><a href="<?php echo $base; ?>/en/portfolio"> Portfolio</a> <span class="divider">></span></li>
				<li class="active"><?php echo $project_name; ?></li>	
		    </ul>
		</div>
	</div>

	<!-- Project big title -->
	<div class="header"><h1><?php echo $project_name; ?></h1></div>

	<!-- Summary of the project -->
	<div class="row spacer">

		<!-- Description-->
		<div class="hero-unit span<?php echo $herounit_width; ?>">
			<?php echo $herounit_desc; ?>
		</div>

		<!-- Front image (if available) -->
		<?php if (isset($image_front)): ?>
		<div class="span3 pull-right hidden-phone">
			<img src="<?php echo $image_front; ?>">
		</div>
		<?php endif; ?>
	</div>

	<hr/>

	<!-- Design Opportunity -->
	<?php if (isset($design_opportunity_desc)): ?>
	<div class="row">
		<div class="span12">
			<h3>Design opportunity and strategy</h3>
		</div>
		<div class="span12">
			<?php echo $design_opportunity_desc; ?>
		</div>
	</div>
	<hr/>
	<?php endif; ?>

	

	<!-- Process -->
	<?php if (isset($process)): ?>
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

	

	<!-- Tools used -->
	<?php if(isset($tools_used)): ?>
	<div class="row">
		<div class="span12">
			<h3>Tools used</h3>
		</div>
		<div class="offset4 span4">
			<table class="table table-bordered">

				<?php foreach ($tools_used as $i => $tool): ?>
				<tr>
					<td><p class="centered"><?php echo $tools_used[$i]; ?></p></td>
				</tr>
				<?php endforeach; ?>

  			</table>
		</div>
	</div>
	<hr/>
	<?php endif; ?>


	<!-- Details -->
	<?php if(isset($details)): ?>
	<div class="row">
			<div class="span12">
				<h3>Details</h3>
			</div>
			<div class="span12">
				<dl class="dl-horizontal">
				  <dt>Date</dt>
				  <dd><?php echo $details['date']; ?></dd>
				
				  <dt>Tags</dt>
				  <dd>

				  	<?php foreach ($details['tags'] as $tag_name => $tag_url): ?>
				  	<a href="<?php echo $base . '/en/portfolio/category/' . $tag_url; ?>"><span class="label"><?php echo $tag_name; ?></span></a>
				  	<?php endforeach; ?>

    			  </dd>
				</dl>
			</div>
	</div>
	<?php endif; ?>

	