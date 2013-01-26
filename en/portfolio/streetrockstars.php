<?php

	$page_title = "Portfolio > Street Rockstars";
	$page_description = "Jose Viso's portfolio | Street Rockstars: Project to find the best street musicians in the world.";

	include("../includes/header.php"); ?>

		<!-- Big Text -->	
		<div class="header spacer"><h1>Street Rockstars</h1></div>
		
		<!-- Summary -->
		<div class="row spacer">
			<div class="hero-unit span10">
				<p><em>Street Rockstars</em> is a project that tries to collect the best street musicians around the world. It isn't about rock but of creating a place to find those strangers playing in the street and nobody, a part of the people passing near in that moment see.</p>
				<br/>
				<div class="video-container centered hidden-phone">
					<iframe width="560" height="315" src="http://www.youtube.com/embed/xlAoMDWxRfY" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="spacer centered">
					<a class="btn btn-large btn-primary" href="http://streetrockstars.com">Visit the site!</a>
				</div>
			</div>
			<!--
			<div class="span4 pull-right">
				<img src="../../images/streetrockstars.png">
			</div>
			-->
		</div>

		<hr/>

		<!-- Design Process -->
		<div class="row">
			<div class="span12">
				<h3>Design Process</h3>
			</div>
			<div class="span6">
				<ol>
					<li><p class="spacer"><b>Observation</b> in the street of people recording street musicians' performances: approximated age, gender, nationality. Interviews with people who matched that description.</p></li>
					<li><p class="spacer">Creation of 2 <b>personas</b> (one primary and one secondary) and typical <b>scenarios</b> for each one of them. Generation of a list of necessary functionalities.</p></li>
					<li><p class="spacer">Start defining the <b>Information Architecture</b>:</p></li>
						<ol type="a">
							<li><p><b>Blueprints</b> or Sitemaps generation.</p></li>
							<li><p>Firsts <b>sketches in paper</b> with possible alternative representations.</p></li>
							<li><p>Selection of the most appropriate representations and develop <b>wireframes</b> in more detail, using Balsamiq Mockups.</p></li>
						</ol>
					<li><p class="spacer">Creation of a simple <b>interactive prototype</b> and <b>user tests</b> on the basic functionalities. Several iterations with redesigns.</p></li>
					<li><p class="spacer"><b>Add more details</b> to the wireframes using Adobe Fireworks and to the prototypes using Axure.</p></li>
					<li><p class="spacer"><b>Heuristic Evaluation</b>. Test of the changes and concrete aspects.</p></li>
					<li><p class="spacer">Implementation.</p></li>
				</ol>
			</div>
			<div class="span6">
				<!-- <img src="http://placehold.it/500x350"> -->

				<div id="myCarousel" class="carousel slide">  
					<!-- Carousel items -->  
				    <div class="carousel-inner">  
				    	<div class="active item">
				        	<img src="../../images/streetrockstars_persona1.png" alt="Primary Persona" />
				        	<div class="carousel-caption">
				        		<p>Primary Persona</p>
				        	</div>
				        </div>  
				        <div class="item">
				        	<img src="../../images/streetrockstars_ia.png" alt="Information Architecture definition" />
				        	<div class="carousel-caption">
				        		<p>Blueprint with the different parts of the site and their relations.</p>
				        	</div>
				        </div>  
				        
				        <div class="item">
				        	<img src="../../images/streetrockstars_wf1.png" alt="Low-fidelity wireframe" />
				        	<div class="carousel-caption">
				        		<p>Low fidelity wireframe created with Balsamiq Mockups</p>
				        	</div>
				        </div>
				        <div class="item">
				        	<img src="../../images/streetrockstars_wf2.png" alt="Mid-fidelity wireframe" />
				        	<div class="carousel-caption">
				        		<p>More detailed wireframe considering the users' feedback built with Axure RP.</p>
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
						<td><p class="centered">Pen and Paper</p></td>
					</tr>
					<tr>
						<td><p class="centered">OmniGraffle</p></td>
					</tr>
					<tr>
						<td><p class="centered">Balsamiq Mockups</p></td>
					</tr>
					<tr>
						<td><p class="centered">Adobe Fireworks CS5</p></td>
					</tr>
					<tr>
						<td><p class="centered">Axure RP</p></td>
					</tr>
  				</table>
			</div>
		</div>

		<?php 

			 $project_name = "Street Rockstars";
			 include("../includes/portfolio_extra.php"); 
			 include("../includes/footer.php"); 
		?>