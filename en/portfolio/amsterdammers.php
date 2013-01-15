<?php

	$page_title = "Portfolio > Amsterdammers";
	$page_description = "Jose Viso's portfolio | Amsterdammers: Photo project of people from Amsterdam.";
	$number_of_photos = 33;

	include("../includes/header.php"); ?>


		<!-- Big Text -->	
		<div id="top" class="header spacer"><h1>Amsterdammers</h1></div>
		
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

		<!-- Process -->
		<div class="row">
			<h3>Why</h3>
			<div class="">
				<p>Topping danish cotton candy. Sugar plum sweet marzipan. Chocolate bar cupcake gummi bears carrot cake applicake chocolate cake bonbon macaroon macaroon. Chocolate bonbon chupa chups fruitcake candy canes. Dragée cotton candy ice cream jelly beans dragée ice cream. Powder tootsie roll wypas lollipop jujubes jelly dragée.</p>
				<p>Applicake sesame snaps pastry tart sesame snaps chocolate cake. Liquorice tiramisu lollipop powder wypas apple pie chocolate.</p>
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
		<?php endfor; ?>

		<hr/>

		<div class="row">
			<div class="span11 centered well">
				<a href="http://www.flickr.com/photos/josevv/"><button class="btn btn-info btn-large" type="button">Check all my Photos!</button></a>
			</div>
		</div>

		<hr/>

		<!-- Indicator of location inside Portfolio -->
		<ul class="breadcrumb">
		  <li><a href="../portfolio">Portfolio</a> <span class="divider">/</span></li>
		  <li class="active">Amsterdammers</li>
		</ul>	

		<p class="pull-right"><a href="#top"><i class="icon-arrow-up"></i>Go to Top</a></p>

	 <?php 

	 include("../includes/footer.php"); 

	 ?>