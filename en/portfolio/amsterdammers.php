<?php

	$page_title = "Portfolio > Amsterdammers";
	$page_description = "Jose Viso's portfolio | Amsterdammers: Photo project of people from Amsterdam.";

	include("../includes/header.php"); ?>


		<!-- Big Text -->	
		<div class="header spacer"><h1>Amsterdammers</h1></div>
		
		<!-- Summary -->
		<div class="row spacer">
			<div class="hero-unit span6">
				<p><em>Amsterdammers</em> is a project that tries to reflect the kind of people who live in Amsterdam.</p> 

				<p>It contains a collection of pictures of the people you can find in a normal Saturday morning.</p>
			</div>
			<div class="span4">
				<img src="../../images/amsterdammers_front.jpg" class="img-polaroid">
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

		<div class="row spacer">
			<div class="span12 centered">
				<a data-toggle="lightbox" href="#photo1_big">
					<img src="../../images/amsterdammers_front.jpg" class="img-polaroid" alt="Click to view the lightbox">
				</a>
				<div id="photo1_big" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
						<div class='lightbox-header'>
							<button type="button" class="close" data-dismiss="lightbox" aria-hidden="true">&times;</button>
						</div>
						<div class='lightbox-content'>
							<img src="../../images/amsterdammers_photo1.jpg">
						</div>
				</div>
				<p>Test 1</p>
			</div>
		</div>

		<div class="row spacer">
			<div class="span12 centered">
				<a data-toggle="lightbox" href="#photo2_big">
					<img src="../../images/amsterdammers_front.jpg" class="img-polaroid" alt="Click to view the lightbox">
				</a>
				<div id="photo2_big" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
						<div class='lightbox-header'>
							<button type="button" class="close" data-dismiss="lightbox" aria-hidden="true">&times;</button>
						</div>
						<div class='lightbox-content'>
							<img src="../../images/amsterdammers_photo1.jpg">
						</div>
				</div>
				<p>Test 2</p>
			</div>
		</div>

		<div class="row spacer">
			<div class="span12 centered">
				<a data-toggle="lightbox" href="#photo3_big">
					<img src="../../images/amsterdammers_front.jpg" class="img-polaroid" alt="Click to view the lightbox">
				</a>
				<div id="photo3_big" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
						<div class='lightbox-header'>
							<button type="button" class="close" data-dismiss="lightbox" aria-hidden="true">&times;</button>
						</div>
						<div class='lightbox-content'>
							<img src="../../images/amsterdammers_photo1.jpg">
						</div>
				</div>
				<p>Test 2</p>
			</div>
		</div>

		<hr/>

		<div class="row">
			<div class="span11 centered well">
				<a href="http://flickr.com/"><button class="btn btn-info btn-large" type="button">Check all my photos</button></a>
			</div>
		</div>

		<hr/>

		<!-- Indicator of location inside Portfolio -->
		<ul class="breadcrumb">
		  <li><a href="../portfolio">Portfolio</a> <span class="divider">/</span></li>
		  <li class="active">Amsterdammers</li>
		</ul>		

	 <?php 

	 include("../includes/footer.php"); 

	 ?>