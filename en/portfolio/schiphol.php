<?php

	$page_title = "Portfolio > Schiphol";
	$page_description = "Jose Viso's portfolio | Schiphol: Amsterdam Airport mobile page.";

	include("../includes/header.php"); ?>

		<!-- Big Text -->	
		<div class="header spacer"><h1>Schiphol</h1></div>
		
		<!-- Summary -->
		<div class="row spacer">
			<div class="hero-unit span10">
				<p>Helping to develop the mobile website and backend system of Amsterdam Airport Schiphol (one of Europe's largest), while working on M2Mobi.</p>
			</div>
 		</div>

		<hr/>

		<!-- Design Process -->
		<div class="row">
			<div class="span12">
				<h3>Tasks</h3>
			</div>
			<div class="span6">
				<ul>
					<li><p class="spacer">Integrated social networks on mobile website and backend, to connect with the iPhone and Android apps.</p></li>
					<li><p class="">Developed previously existing notification system, including: email, SMS and push notifications to Android and iPhone.</p></li>
				</ul>
			</div>
			<div class="span6">
				<!-- <img src="http://placehold.it/500x350"> -->

				<div id="myCarousel" class="carousel slide">  
					<!-- Carousel items -->  
				    <div class="carousel-inner">  
				    	<div class="active item">
				        	<img src="../../images/schiphol_snlogin.png" alt="Social Networks login" border="1"/>
				        	<div class="carousel-caption">
				        		<p>Social Networks login page</p>
				        	</div>
				        </div>  
				        <div class="item">
				        	<img src="../../images/schiphol_notifications.png" alt="Notifications page" />
				        	<div class="carousel-caption">
				        		<p>Notifications page</p>
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
						<td><p class="centered">PHP</p></td>
					</tr>
					<tr>
						<td><p class="centered">HTML</p></td>
					</tr>
					<tr>
						<td><p class="centered">CSS</p></td>
					</tr>
					<tr>
						<td><p class="centered">CodeIgniter-based framework</p></td>
					</tr>
					<tr>
						<td><p class="centered">Peer Review</p></td>
					</tr>
					<tr>
						<td><p class="centered">Scrum</p></td>
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
				  <dd>April 2011 - April 2012</dd>
				
				  <dt>Tags</dt>
				  <dd>
				      <a href="<?php echo $base . 'en/portfolio/category/development'; ?>"><span class="label">Development</span></a>
				  </dd>
				</dl>
			</div>
		</div>

	<?php 

	 $project_name = "Take Me There";
	 include("../includes/portfolio_extra.php"); 
	 include("../includes/footer.php"); 

	 ?>