<?php

	$page_title = "Portfolio > Take Me There";
	$page_description = "Jose Viso's portfolio | Take Me There: See places as if you were there.";

	include("../includes/header.php"); ?>

		<!-- Big Text -->	
		<div class="header spacer"><h1>Take Me There</h1></div>
		
		<!-- Summary -->
		<div class="row spacer">
			<div class="hero-unit span10">
				<p><em>Take Me There</em> is a website that groups videos of popular places around the world recorded in a subjective POV (Point-Of-View). The goal is to give people watching the video the feeling to be in that place.</p>
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
					<li><p class="spacer">Generation of <b>Personas</b> and <b>Scenarios</b>.</p></li>
					<li><p class="spacer">Definition of <b>User Flows</b> and <b>User Journeys</b>.</p></li>
					<li><p class="spacer">Definition of the <b>Information Architecture</b>.</p></li>
					<li><p class="spacer">Creation of Low and Mid fidelity <b>wireframes</b>.</p></li>
					<li><p class="spacer"><b>User Tests</b>.</p></li>
					<li><p class="spacer"><b>Iteration</b> over the wireframes, analysis and redesigns.</p></li>
					<li><p class="spacer">Creation of High fidelity wireframes.</p></li>
					<li><p class="spacer">A/B and specific parts testing .</p></li>
				</ol>
			</div>
			<div class="span6">
				<!-- <img src="http://placehold.it/500x350"> -->

				<div id="myCarousel" class="carousel slide">  
					<!-- Carousel items -->  
				    <div class="carousel-inner">  
				    	<div class="active item">
				        	<img src="../../images/takemethere_persona.png" alt="Primary Persona" border="1"/>
				        	<div class="carousel-caption">
				        		<p>Primary Persona</p>
				        	</div>
				        </div>  
				        <div class="item">
				        	<img src="../../images/takemethere_scenario.png" alt="Scenario for the Primary Persona" />
				        	<div class="carousel-caption">
				        		<p>One of the Scenarios</p>
				        	</div>
				        </div>  
				        <div class="item">
				        	<img src="../../images/takemethere_userflow.jpg" alt="User Flow" />
				        	<div class="carousel-caption">
				        		<p>User Flow Sketches</p>
				        	</div>
				        </div>  
				        <div class="item">
				        	<img src="../../images/takemethere_wireframe1.png" alt="Low-fidelity Wireframe" />
				        	<div class="carousel-caption">
				        		<p>Low-fidelity Wireframe</p>
				        	</div>
				        </div>  
				        <div class="item">
				        	<img src="../../images/takemethere_wireframe2.png" alt="High-fidelity Wireframe" />
				        	<div class="carousel-caption">
				        		<p>High-fidelity Wireframe</p>
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

		<hr/>

		<div class="row">
			<div class="span12">
				<h3>Details</h3>
			</div>
			<div class="span12">
				<dl class="dl-horizontal">
				  <dt>Date</dt>
				  <dd>April 2012</dd>
				
				  <dt>Tags</dt>
				  <dd>
				      <a href="<?php echo $base . 'en/portfolio/category/user-research'; ?>"><span class="label">User Research</span></a>
				 	  <a href="<?php echo $base . 'en/portfolio/category/interaction-design'; ?>"><span class="label">Interaction Design</span></a>
				  </dd>
				</dl>
			</div>
		</div>

	<?php 

	 $project_name = "Take Me There";
	 include("../includes/portfolio_extra.php"); 
	 include("../includes/footer.php"); 

	 ?>