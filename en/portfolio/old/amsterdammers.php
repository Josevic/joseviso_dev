<?php

	$page_title = "Portfolio > Amsterdammers";
	$page_description = "Jose Viso's portfolio | Amsterdammers: Photo project of people from Amsterdam.";
	$number_of_photos = 33;

	$project_name = "Amsterdammers";

	$details = array(
		"date" => "March 2012",
		"tags" => array(
			"Other" => "other", 
			"Photography" => ""
		)
	);

	include("../includes/header.php");
	include("../includes/portfolio-sections/breadcrumb.php");
	include("../includes/portfolio-sections/project-title.php"); 

	?>

		<!-- Summary -->
		<div class="row spacer">
			<div class="hero-unit span5">
				<p><em>Amsterdammers</em> is a photography project that tries to reflect the kind of people you can find in a normal Saturday morning in Amsterdam.</p>
			</div>
			<div class="span5">
				<img src="../../images/amsterdammers_front.jpg" class="img-rounded">
			</div>
		</div>

		<hr/>

		<!-- Detailed description -->
		<div class="row">
			<div class="span12">
				<h3>Why and How</h3>
				<p>I decided to make this project to show the diversity of people living in The Netherlands and especially in Amsterdam. Another thing I wanted to expose is how people of all ages are riding the bicycle in a daily basis. In Spain I was used to see just some young people using it and there from day one it blowed my mind. More than a custom it's a lifestyle. And I love it.</p>
				<p>To get most of the pictures, I just sat down backwards to an old ship replica for a few minutes and took photos of the people passing in front of me. Another bunch of photos are taken close to a bikeway. One last group of photos are just random people I encountered in the way home.</p>
			</div>
		</div>

		<!-- Loop for loading all the photos -->
		<?php for ($i=0;$i<=$number_of_photos;$i++): ?>
		<div class="row spacer">
			<div class="span12 centered">
				<a data-toggle="lightbox" href="#photo<?php echo $i; ?>_big">
					<img src="../../images/amsterdammers/<?php echo $i; ?>_small.jpg" class="img-polaroid" alt="Click to view the lightbox">
				</a>
				<div id="photo<?php echo $i; ?>_big" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
						<div class='lightbox-header'>
							<button type="button" class="close" data-dismiss="lightbox" aria-hidden="true">&times;</button>
						</div>
						<div class='lightbox-content'>
							<img src="../../images/amsterdammers/<?php echo $i; ?>.jpg">
						</div>
				</div>
			</div>
		</div>

		<?php 
		endfor; 

	include("../includes/portfolio-sections/project-details.php");	
	include("../includes/footer.php"); 
	?>