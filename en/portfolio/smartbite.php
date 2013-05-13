<?php

	$page_title = "Portfolio > SmartBite";
	$page_description = "Jose Viso's portfolio | Smartbite: An app for eating healthy.";

	include("../includes/header.php"); ?>

	<div class="row">
		<div class="span12">
			<ul class="breadcrumb">
				<li><a href="<?php echo $base; ?>">Home</a> <span class="divider">></span></li>
				<li><a href="<?php echo $base; ?>/en/portfolio"> Portfolio</a> <span class="divider">></span></li>
				<li class="active">SmartBite</li>	
		    </ul>
		</div>
	</div>

		<!-- Big Text -->	
		<div class="header"><h1>SmartBite</h1></div>
		
		<!-- Summary -->
		<div class="row spacer">
			<div class="hero-unit span7">
				<p><em>SmartBite</em> is a diet application for smartphones focused on motivate the users to not give in, adapting the diet to the favourite food of each person and providing a wide range of meal alternatives.</p> 

				<p>Created during the <a href="https://class.coursera.org/hci/class/index"><em>Human-Computer Interaction course</em></a> offered by <a href="https://www.coursera.org/stanford">Coursera - Stanford University</a>.</p>
				<br/>
				<a class="btn btn-large btn-primary pull-right" href="https://dl.dropbox.com/u/3953712/SmartBite/test/screens/iPhoneDashboard.html">Try the interactive prototype!</a>
			</div>
			<div class="span3 pull-right hidden-phone">
				<img src="../../images/smartbite.png">
			</div>
		</div>

		<hr/>

		<!-- Design Opportunity -->
		<div class="row">
			<div class="span12">
				<h3>Design opportunity</h3>
			</div>
			<div class="span12">
				<p>The first part of this project was to find not covered needs and design opportunities around me, related to a topic up to me. 
				   I decided to observe and interview <b>people in diet</b> to discover how they knew what food could/should eat and how they got motivated.</p>

				<p>The problems and opportunities found were the following:</p>
				<ul>
					<li><p>The <b>lack of motivation</b> for keep following the diet after the first days.</p></li>
					<li><p>People get tired of having just a <b>few choices for each meal</b>. Eating routine.</p></li>
					<li><p><b>To know if a given food is appropiate</b> for the diet the person is following.</p></li>
					<li><p><b>Lack of time</b> to cook. Need of finding specific recipes.</p></li>
				</ul>

			</div>
		</div>

		<hr/>

		<!-- Design Process -->
		<div class="row">
			<div class="span12">
				<h3>Process</h3>
			</div>
			<div class="span6">
				<ol>
					<li><p class="spacer">Creation of a <b>point of view</b>:</p>
						 <blockquote><p>Without support and motivation, diets are a pain. Enhancements of mobile technology and Internet can be a great tool.</p></blockquote></li>
					<li><p class="spacer">Sketches of the structure: Creation of a point of view, use of <b>storyboards</b>, pick one concrete direction and creating <b>rapid prototypes</b> with <a href="http://www.balsamiq.com/">Balsamiq Mockups</a>.</p></li>
					<li><p class="spacer">Creation of <b>interactive Prototypes</b> using <a href="http://www.justinmind.com/">Justinmind</a>.</p></li>
					<li><p class="spacer"><b>User Tests</b>: Defining an Evaluation Plan, conducting the tests, analysis of the results and planification of the next design iteration.</p></li>
				</ol>
			</div>
			<div class="span6">
				<!-- <img src="http://placehold.it/500x350"> -->

				<div id="myCarousel" class="carousel slide"> 
					<ol class="carousel-indicators">
					    <li data-target="#myCarousel" data-slide-to="0"></li>
					    <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
					    <li data-target="#myCarousel" data-slide-to="2"></li>
					    <li data-target="#myCarousel" data-slide-to="3"></li>
					    <li data-target="#myCarousel" data-slide-to="4"></li>
					</ol>

					<!-- Carousel items -->  
				    <div class="carousel-inner">  
				    	<div class="item">
				        	<img src="../../images/smartbite_observation.jpg" alt="First sketches" />
				        	<div class="carousel-caption">
				        		<p>One of the people observed for finding a design opportunity</p>
				        	</div>
				        </div>  
				        <div class="item active">
				        	<img src="../../images/smartbite_storyboard.png" alt="Storyboard" />
				        	<div class="carousel-caption">
				        		<p>Storyboard for representing the context where the app would be used</p>
				        	</div>
				        </div>  
				        
				        <div class="item">
				        	<img src="../../images/smartbite_lowfidelity2.png" alt="" />
				        	<div class="carousel-caption">
				        		<p>Basic Prototype built with Balsamiq Mockups</p>
				        	</div>
				        </div>
				        <div class="item">
				        	<img src="../../images/smartbite_highfidelity.png" alt="" />
				        	<div class="carousel-caption">
				        		<p>More detailed prototype considering the users' feedback built with Justinmind</p>
				        	</div>
				        </div>    
				        <div class="item">
				        	<img src="../../images/smartbite_usertest.jpg" alt="" />
				        	<div class="carousel-caption">
				        		<p>User test</p>
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
				<h3>Tools used</h3>
			</div>
			<div class="offset4 span4">
				<!-- <img src="http://placehold.it/700x150"> -->
				<table class="table table-bordered">
					<tr>
						<td><p class="centered">Pen and Paper</p></td>
					</tr>
					<tr>
						<td><p class="centered">Balsamiq Mockups</p></td>
					</tr>
					<tr>
						<td><p class="centered">Justinmind</p></td>
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
				  <dd>May - July 2012</dd>
				
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
		
		