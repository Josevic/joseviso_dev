<?php 

	$page_title = "Contact";
 	$page_description = "Ways of contacting me.";

	include("includes/header.php"); ?>

	<header class="jumbotron subhead">
	  <div class="container">
	    <h1>Contact</h1>
	  </div>
	</header>
	
		<div class="row spacer">
			<div class="span7">	
				<p class="lead">Send me an email, speak with me by phone or find me in any of the social networks and other popular sites I use. I will reply back soon :)</p>
			</div>
		</div>

		<div class="row">
			<div class="span7">	
				<h3><a href="mailto:contact@joseviso.com">contact@joseviso.com</a></h3>
			</div>
		</div>

		<div class="row">
			<div class="span7">	
				<h3><a href="tel:+447547892704">+44 7547 892704</a></h3>
			</div>
		</div>
		
		<div class="row">
			<div class="span7">
				
				<?php include("includes/social_networks.php"); ?>
			</div>
		</div>
		<?php include("includes/footer.php"); ?>