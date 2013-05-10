<?php

	$page_title = "Portfolio > Eva Criado";
	$page_description = "Jose Viso's portfolio | Redesign of Evacriado.com";

	include("../includes/header.php"); ?>

	<div class="row">
		<div class="span12">
			<ul class="breadcrumb">
				<li><a href="<?php echo $base; ?>">Home</a> <span class="divider">></span></li>
				<li><a href="<?php echo $base; ?>/en/portfolio"> Portfolio</a> <span class="divider">></span></li>
				<li class="active">Eva Criado</li>	
		    </ul>
		</div>
	</div>

		<!-- Big Text -->	
		<div class="header"><h1>Eva Criado</h1></div>
		
		<!-- Summary -->
		<div class="row spacer">
			<div class="hero-unit span7">
				<p>Redesign of the existing Eva Criado's beauty center website.</p> 
				<!-- <a class="btn btn-large btn-primary pull-right" href="HE_EvaSpa.pdf">Download the Heuristic Evaluation</a> -->
			</div>

			<!--
			<div class="span3 pull-right hidden-phone" >
				<img src="../../images/thumb_evacriado2.png">
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
					<li><p class="spacer"><b>Heuristic Evaluation</b> of the existing website to detect problems. Deep evaluation considering the <a href="http://www.useit.com/papers/heuristic/heuristic_list.html">10 Usability Heuristics</a> by <a href="http://en.wikipedia.org/wiki/Jakob_Nielsen_(usability_consultant)">Jakob Nielsen</a>, noting the severity and importance of each one of them.</b></p></li>
					<li><p class="spacer">To <b/>know roughly the domain field</b>: General research about this area, what are the different treatments and services that appear in the website and what the business do.</p></li>
					<li><p class="spacer">To <b>know the goals and the clients</b> of the business. Creation of personas and storyboards.</p></li>
					<li><p class="spacer"><b>Redefinition of the Information Architecture</b> of the site. Use of <b>card sorting</b> to detect the most natural organization from user's perspective for the different services and treatments.</p></li>
					<li><p class="spacer">Creation of paper sketches, low and mid-fidelity wireframes and prototypes. For this project I made use of a <b>sketchboard</b>, for self-use and communicating with the client.</p></li>
					<li><p class="spacer">User testing and a lot of iterations.</p></li>
				</ol>
			</div>
			<div class="span6">
		
				<div id="myCarousel" class="carousel slide">  
					<ol class="carousel-indicators">
					    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					    <li data-target="#myCarousel" data-slide-to="1"></li>
					    <li data-target="#myCarousel" data-slide-to="2"></li>
					    <li data-target="#myCarousel" data-slide-to="3"></li>
					    <li data-target="#myCarousel" data-slide-to="4"></li>
					    <li data-target="#myCarousel" data-slide-to="5"></li>
					    <li data-target="#myCarousel" data-slide-to="6"></li>
					    <li data-target="#myCarousel" data-slide-to="7"></li>
					</ol>

					<!-- Carousel items -->  
				    <div class="carousel-inner">

				    	<div class="item active">
				        	<img src="../../images/sketchboard.jpg" alt="Sketchboard" />
				        	<div class="carousel-caption">
				        		<p>Sketchboard</p>
				        	</div>
				        </div>  
				    	<div class="item">
				        	<img src="../../images/evacriado_personas.gif" alt="Personas" />
				        	<div class="carousel-caption">
				        		<p>The two personas defined: one primary and another secondary</p>
				        	</div>
				        </div>  
				        <div class="item">
				        	<img src="../../images/evacriado_storyboards.jpg" alt="Storyboards" />
				        	<div class="carousel-caption">
				        		<p>Storyboards created to define the context of use</p>
				        	</div>
				        </div>  
				        <div class="item">
				        	<img src="../../images/evacriado_ia.jpg" alt="Information Architecture" />
				        	<div class="carousel-caption">
				        		<p>Rough approximation of the Information Architecture</p>
				        	</div>
				        </div> 
				        <div class="item">
				        	<img src="../../images/evacriado_low-fi_wireframes.jpg" alt="Low-fidelity wireframes" />
				        	<div class="carousel-caption">
				        		<p>Three low-fidelity wireframes alternatives to get first feedback from client and users</p>
				        	</div>
				        </div>   
				    	<div class="item">
				        	<img src="../../images/evacriado_home_before.jpg" alt="Home" />
				        	<div class="carousel-caption">
				        		<p>Before the redesign</p>
				        	</div>
				        </div>    
				        <div class="item">
				        	<img src="../../images/evacriado_home_after.gif" alt="After" />
				        	<div class="carousel-caption">
				        		<p>After the redesign</p>
				        	</div>
				        </div>    
				    	<div class="item">
				        	<img src="../../images/evacriado_he.jpg" alt="Findings" />
				        	<div class="carousel-caption">
				        		<p>Some of the findings of the Heuristic Evaluation</p>
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
						<td><p class="centered"><a href="http://www.nngroup.com/articles/ten-usability-heuristics/">10 Usability Heuristics</a> (Jakob Nielsen)</p></td>
					</tr>
					<tr>
						<td><p class="centered">Card sorting</p></td>
					</tr>
					<tr>
						<td><p class="centered">Pen and Paper</p></td>
					</tr>
					<tr>
						<td><p class="centered">Balsamiq Mockups</p></td>
					</tr>
					<tr>
						<td><p class="centered">Axure</p></td>
					</tr>
					<tr>
						<td><p class="centered">Sketchboard</p></td>
					</tr>
  				</table>
			</div>
		</div>

		<div class="row">
			<div class="span12">
				<h3>Details</h3>
			</div>
			<div class="span12">
				<dl class="dl-horizontal">
				  <dt>Date</dt>
				  <dd>October 2012 - January 2013</dd>
				
				  <dt>Tags</dt>
				  <dd>
				      <a href="<?php echo $base . '/en/portfolio/category/user-research'; ?>"><span class="label">User Research</span></a>
				      <a href="<?php echo $base . '/en/portfolio/category/heuristic-evaluation'; ?>"><span class="label">Heuristic Evaluation</span></a>
				      <a href="<?php echo $base . '/en/portfolio/category/interaction-design'; ?>"><span class="label">Interaction Design</span></a>
    			  </dd>
				</dl>
			</div>
		</div>
	 
	 <?php include("../includes/footer.php"); ?>