<?php

	$page_title = "Portfolio > Eva Criado";
	$page_description = "Jose Viso's portfolio | Heuristic Evaluation for Evacriado.com";

	include("../includes/header.php"); ?>


		<!-- Big Text -->	
		<div class="header spacer"><h1>Eva Criado</h1></div>
		
		<!-- Summary -->
		<div class="row spacer">
			<div class="hero-unit span7">
				<p>Heuristic Evaluation of the existing <a href="http://eva-spa.com">Eva Criado's beauty center website</a> for a future redesign.</p> 
				<a class="btn btn-large btn-primary pull-right" href="HE_EvaSpa.pdf">Download the Heuristic Evaluation</a>
			</div>

			<div class="span3 pull-right" >
				<img src="../../images/thumb_evaspa.jpg" class="img-rounded">
			</div>
		</div>

		<hr/>

		<!-- Design Process -->
		<div class="row">
			<h3>Process</h3>
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
			<h3>Tools Used</h3>
			<div class="offset4 span4">
				<!-- <img src="http://placehold.it/700x150"> -->
				<table class="table table-bordered">
					<tr>
						<td><p class="lead centered"><a href="http://www.nngroup.com/articles/ten-usability-heuristics/">10 Usability Heuristics</a> (Jakob Nielsen)</p></td>
					</tr>
					<tr>
						<td><p class="lead centered">iWork: Pages</p></td>
					</tr>
					<tr>
						<td><p class="lead centered">Own Heuristic Evaluation template</p></td>
					</tr>
  				</table>
			</div>
		</div>

	 <?php 

	 $project_name = "Eva Criado";
	 include("../includes/portfolio_extra.php"); 
	 include("../includes/footer.php"); 

	 ?>
		
		