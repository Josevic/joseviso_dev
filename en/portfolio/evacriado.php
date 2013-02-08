<?php

	$page_title = "Portfolio > Eva Criado";
	$page_description = "Jose Viso's portfolio | Heuristic Evaluation for Evacriado.com";

	include("../includes/header.php"); ?>

	<div class="row hidden-desktop">
		<div class="span6">
			<ul class="breadcrumb">
				<li><a href="<?php echo $base; ?>">Home</a> <span class="divider">/</span></li>
				<li><a href="<?php echo $base; ?>/en/portfolio"> Portfolio</a> <span class="divider">/</span></li>
				<li class="active">Eva Criado</li>	
		    </ul>
		</div>
	</div>

		<!-- Big Text -->	
		<div class="header spacer"><h1>Eva Criado</h1></div>
		
		<!-- Summary -->
		<div class="row spacer">
			<div class="hero-unit span7">
				<p>Heuristic Evaluation of the existing Eva Criado's beauty center website for a future redesign.</p> 
				<a class="btn btn-large btn-primary pull-right" href="HE_EvaSpa.pdf">Download the Heuristic Evaluation</a>
			</div>

			<div class="span3 pull-right" >
				<img src="../../images/thumb_evaspa.jpg" class="img-rounded">
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
					<li><p class="spacer"><b>To know roughly the domain field</b>: General research about this area, what are the different treatments and services that appear in the website and what the business do.</p></li>
					<li><p class="spacer"><b>Basic evaluation of the interface</b>: The goal here was to look for important and easily noticeable problems.</p></li>
					<li><p class="spacer"><b>Deep evaluation</b> considering the <a href="http://www.useit.com/papers/heuristic/heuristic_list.html">10 Usability Heuristics</a> by <a href="http://en.wikipedia.org/wiki/Jakob_Nielsen_(usability_consultant)">Jakob Nielsen</a>, noting the severity and importance of each one of them.</b></p></li>
					<li><p class="spacer"><b>Analysis of the results</b> and recommendation of alternatives to solve or at least minimize the problems</p></li>
				</ol>
			</div>
			<div class="span6">
		
				<div id="myCarousel" class="carousel slide">  
					<!-- Carousel items -->  
				    <div class="carousel-inner">

				    	<div class="active item">
				        	<img src="../../images/evaspa_home.png" alt="Home" />
				        	<div class="carousel-caption">
				        		<p>Homepage studied</p>
				        	</div>
				        </div>    
				    	<div class="item">
				        	<img src="../../images/he1.png" alt="Findings" />
				        	<div class="carousel-caption">
				        		<p>Some of the findings</p>
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
						<td><p class="centered">Own Heuristic Evaluation template</p></td>
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
				  <dd>October 2012</dd>
				
				  <dt>Tags</dt>
				  <dd>
				      <a href="<?php echo $base . '/en/portfolio/category/user-research'; ?>"><span class="label">User Research</span></a>
				      <a href="<?php echo $base . '/en/portfolio/category/heuristic-evaluation'; ?>"><span class="label">Heuristic Evaluation</span></a>
    			  </dd>
				</dl>
			</div>
		</div>
	 
		<!-- Indicator of location inside Portfolio -->
		<ul class="breadcrumb hidden-phone spacer">
		  <li><a href="<?php echo $base; ?>">Home</a> <span class="divider">/</span></li>
		  <li><a href="../portfolio">Portfolio</a> <span class="divider">/</span></li>
		  <li class="active">Eva Criado</li>
		</ul>
	 
	 <?php include("../includes/footer.php"); ?>