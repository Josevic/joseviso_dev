<?php

	$page_title = "Portfolio > SuperSimple Mobile";
	$page_description = "Jose Viso's portfolio | SuperSimple Mobile: Concept of a mobile phone for non-tech people.";

	include("../includes/header.php"); ?>

	<div class="row hidden-desktop">
		<div class="span6">
			<ul class="breadcrumb">
				<li><a href="<?php echo $base; ?>">Home</a> <span class="divider">/</span></li>
				<li><a href="<?php echo $base; ?>/en/portfolio"> Portfolio</a> <span class="divider">/</span></li>
				<li class="active">SuperSimple Mobile</li>	
		    </ul>
		</div>
	</div>

		<!-- Big Text -->	
		<div class="header spacer"><h1>SuperSimple Mobile</h1></div>
		
		<!-- Summary -->
		<div class="row spacer">
			<div class="hero-unit span10">
				<p>Concept of a mobile phone specially designed to people who are not used to latest technology. Simple at the maximum: present the best User Experience possible for calling and receiving calls.</p>
			</div>
			<!-- 
			<div class="span3 pull-right">
				<img src="http://placehold.it/270x270">
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
					<li><p class="spacer"><b>Brainstorming</b>. Sketches of possible alternatives.</p></li>
					<li><p class="spacer">Development of two very basic <b>paper prototypes</b> alternatives.</p></li>
					<li class="hidden-phone">
						<p class="spacer"><b>User Tests</b> with people to which the product is aimed:
						<iframe style="margin-top:15px" width="340" height="230" src="http://www.youtube.com/embed/epEz5XPhyeQ" frameborder="0" allowfullscreen></iframe></p>
					</li>
					<li class="visible-phone">
						<p class="spacer"><b>User Tests</b> with people to which the product is aimed:</p>
						<p><small><a href="http://youtu.be/epEz5XPhyeQ">[See the video of the user test]</a></small></p>
					</li>
					<li><p class="spacer">After several iterations on both prototypes, I concluded the one with physical buttons is more appropriate, because if fits with the users' mental model.</p></li>
				</ol>
			</div>
			<div class="span6">
				<!-- <img src="http://placehold.it/500x350"> -->

				<div id="myCarousel" class="carousel slide">  
					<!-- Carousel items -->  
				    <div class="carousel-inner">  
				    	<div class="active item">
				        	<img src="../../images/supersimplemobile1.jpg" alt="Design alternative 1" />
				        	<div class="carousel-caption">
				        		<p>One of the design alternatives</p>
				        	</div>
				        </div>  
				        <div class="item">
				        	<img src="../../images/supersimplemobile2.jpg" alt="Design alternative 2" />
				        	<div class="carousel-caption">
				        		<p>Second design alternative</p>
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
						<td><p class="centered">Pen</p></td>
					</tr>
					<tr>
						<td><p class="centered">Paper</p></td>
					</tr>
					<tr>
						<td><p class="centered">Marker</p></td>
					</tr>
					<tr>
						<td><p class="centered">Scissors</p></td>
					</tr>
					<tr>
						<td><p class="centered">Post-its</p></td>
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
				  <dd>August 2012</dd>
				
				  <dt>Tags</dt>
				  <dd>
				      <a href="<?php echo $base . '/en/portfolio/category/user-research'; ?>"><span class="label">User Research</span></a>
				 	  <a href="<?php echo $base . '/en/portfolio/category/interaction-design'; ?>"><span class="label">Interaction Design</span></a>
				  </dd>
				</dl>
			</div>
		</div>

		<!-- Indicator of location inside Portfolio -->
		<ul class="breadcrumb hidden-phone spacer">
		  <li><a href="<?php echo $base; ?>">Home</a> <span class="divider">/</span></li>
		  <li><a href="../portfolio">Portfolio</a> <span class="divider">/</span></li>
		  <li class="active">SuperSimple Mobile</li>
		</ul>

	<?php include("../includes/footer.php"); ?>