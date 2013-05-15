<?php

	$page_title = "Portfolio > Schiphol";
	$page_description = "Jose Viso's portfolio | Schiphol: Amsterdam Airport mobile page.";
	$project_name = "Schiphol";
	$herounit_width = 10;
	$herounit_desc = "<p>I contributed to this project helping to develop the <a href='https://schiphol.mobi'>mobile website</a> and backend system of <a href='http://en.wikipedia.org/wiki/Amsterdam_Airport_Schiphol'>Amsterdam Airport Schiphol</a> (one of Europe's largest), while working for <a href='http://m2mobi.com'>M2Mobi</a>.";


	include("../includes/header.php"); 
	include("../includes/portfolio-sections/breadcrumb.php");
	include("../includes/portfolio-sections/project-title.php"); 
	include("../includes/portfolio-sections/project-summary.php");
	?>

		<!-- Design Process -->
		<div class="row">
			<div class="span12">
				<h3>Tasks</h3>
			</div>
			<div class="span6">
				<ul>
					<li><p class="spacer">Integrated social networks functions on mobile website and backend, to connect with the iPhone and Android apps.</p></li>
					<li><p class="spacer">Developed previously existing notification system, including: email, SMS and push notifications to iPhone and Android apps.</p></li>
					<li><p class="spacer">Helped to improve the translation system of the mobile website.</p></li>
				</ul>
			</div>
			<div class="span6">
				<!-- <img src="http://placehold.it/500x350"> -->

				<div id="myCarousel" class="carousel slide"> 
					<ol class="carousel-indicators">
					    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					    <li data-target="#myCarousel" data-slide-to="1"></li>
					</ol>

					<!-- Carousel items -->  
				    <div class="carousel-inner">  
				    	<div class="active item">
				        	<img src="../../images/schiphol_snlogin.png" alt="Page for signing in with social networks" border="1"/>
				        	<div class="carousel-caption">
				        		<p>Page for signing in with social networks</p>
				        	</div>
				        </div>  
				        <div class="item">
				        	<img src="../../images/schiphol_notifications.png" alt="Flight notifications page" />
				        	<div class="carousel-caption">
				        		<p>Flight notifications page</p>
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


	<?php 

	$tools_used = array(
		"PHP",
		"HTML",
		"CSS",
		"Git",
		"<a href='http://ellislab.com/codeigniter'>CodeIgniter</a>-based framework",
		"Peer Review",
		"Scrum"
	);

	$details = array(
		"date" => "April 2011 - April 2012",
		"tags" => array(
			"Development" => "development"
		)
	);
	include("../includes/portfolio-sections/tools-used.php");
	include("../includes/portfolio-sections/project-details.php");
	include("../includes/footer.php");

	?>