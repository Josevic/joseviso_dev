<?php

	$page_title = "Portfolio > NextEpisode";
	$page_description = "Jose Viso's portfolio | NextEpisode: An app for following your favourite series.";

	include("../includes/header.php"); ?>


		<!-- Big Text -->	
		<div class="header spacer"><h1>NextEpisode</h1></div>
		
		<!-- Summary -->
		<div class="row spacer">
			<div class="hero-unit span7">
				<p><em>NextEpisode</em> is a concept of multiplatform software to easily manage and follow your favorite TV shows.</p> 
				<p>The goals are not having to remember which is the next episode to see, not wasting time to download it, not having to remember what had happened until that moment, and easily discover more shows you may like.</p>
				
				<a class="btn btn-large btn-primary pull-right" href="">Try the interactive prototype!</a>
			</div>
			<div class="span3 pull-right">
				<img src="../../images/thumb_nextEpisode_dummy.jpeg" class="img-rounded">
			</div>
		</div>

		<hr/>

		<!-- Design Process -->
		<div class="row">
			<div class="span12">
				<h3>Design Process</h3>
			</div>
			<div class="span6">
				<ol>
					<li><p class="spacer"><b>Needfinding</b>: I realize close people around me were having a similar problem to follow their favorite series, so there was a clear opportunity for improvement.</p></li>
					<li><p class="spacer">Sketches of the structure: Creation of a point of view, brainstorming different alternatives, creating a <b>paper prototypes</b> to test.</p></li>
					<li>
						<p class="spacer">Creation of <b>HTML interactive Prototypes</b> using <a href="http://twitter.github.com/bootstrap/">Twitter Bootstrap framework</a>.</p>
						<p>For this project I wanted to try rapid prototyping directly in HTML and after some research I concluded the best option was using a frontend framework like Bootstrap.</p>
					</li>
				</ol>
			</div>
			<div class="span6">
				<!-- <img src="http://placehold.it/500x350"> -->

				<div id="myCarousel" class="carousel slide">  
					<!-- Carousel items -->  
				    <div class="carousel-inner">  
				    	<div class="active item">
				        	<img src="../../images/NextEpisode_paperPrototype.jpg" alt="Paper Prototype" />
				        	<div class="carousel-caption">
				        		<p>First paper prototype to test some interactions.</p>
				        	</div>
				        </div>  
				        <div class="item">
				        	<img src="../../images/NextEpisode_TB_prototype.png" alt="Storyboard" />
				        	<div class="carousel-caption">
				        		<p>HTML prototype</p>
				        	</div>
				        </div>  
				  	</div>  
				  	<!-- Carousel nav -->  
				  	<a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a>  
				  	<a class="carousel-control right" href="#myCarousel" data-slide="next">›</a>  
				</div>  


			</div>
		</div>

		<hr/>

		<!-- Tools Used -->
		<div class="row">
			<div class="span12">
				<h3>Tools Used</h3>
			</div>
			<div class="offset4 span4">
				<!-- <img src="http://placehold.it/700x150"> -->
				<table class="table table-bordered">
					<tr>
						<td><p class="lead centered">Pen, Paper, Markers and Scissors</p></td>
					</tr>
					<tr>
						<td><p class="lead centered"><a href="http://twitter.github.com/bootstrap/">Twitter Bootstrap framework</a></p></td>
					</tr>
					<tr>
						<td><p class="lead centered"><a href="http://bootswatch.com/">Bootswatch theme</a>
					</tr>
  				</table>
			</div>
		</div>

	 <?php 

	 $project_name = "NextEpisode";
	 include("../includes/portfolio_extra.php"); 
	 include("../includes/footer.php"); 

	 ?>
		
		