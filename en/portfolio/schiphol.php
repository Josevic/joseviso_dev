<?php

	$page_title = "Portfolio > Schiphol";
	$page_description = "Jose Viso's portfolio | Schiphol: Amsterdam Airport mobile page.";

	include("../includes/header.php"); ?>

	<div class="row">
		<div class="span12">
			<ul class="breadcrumb">
				<li><a href="<?php echo $base; ?>">Home</a> <span class="divider">></span></li>
				<li><a href="<?php echo $base; ?>/en/portfolio"> Portfolio</a> <span class="divider">></span></li>
				<li class="active">Schiphol</li>	
		    </ul>
		</div>
	</div>

		<!-- Big Text -->	
		<div class="header"><h1>Schiphol</h1></div>
		
		<!-- Summary -->
		<div class="row spacer">
			<div class="hero-unit span10">
				<p>I contributed to this project helping to develop the <a href="https://schiphol.mobi">mobile website</a> and backend system of <a href="http://en.wikipedia.org/wiki/Amsterdam_Airport_Schiphol">Amsterdam Airport Schiphol</a> (one of Europe's largest), while working for <a href="http://m2mobi.com">M2Mobi</a>.</p>
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

		<!-- Tools Used -->
		<div class="row">
			<div class="span12">
				<h3>Tools and Methodologies used</h3>
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
						<td><p class="centered">Git</p></td>
					</tr>
					<tr>
						<td><p class="centered"><a href="http://ellislab.com/codeigniter">CodeIgniter</a>-based framework</p></td>
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
				      <a href="<?php echo $base . '/en/portfolio/category/development'; ?>"><span class="label">Development</span></a>
				  </dd>
				</dl>
			</div>
		</div>

	<?php include("../includes/footer.php"); ?>