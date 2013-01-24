<?php

 	$page_title = "Portfolio > Photography";
 	$page_description = "Jose Viso's portfolio | Photography Projects";

 	include("../../includes/header.php");
 	include("../../includes/portfolio-subnav.php"); ?>

	<div class="row">

		<!-- Projects -->	
		<ul class="thumbnails pull-left">
		  <li id="ec">
		    <div class="thumbnail span3">
		    	<a href="../amsterdammers">
		    		<img src="../../../images/thumb_amsterdammers.jpg" alt="">
		    		<h4>Amsterdammers</h4>
		    	</a>	
			</div>
		  </li>	
		</ul>
		
	</div>

	<hr/>

	<!-- Link to the PDF version of the portfolio -->
	<div class="row">
		<div class="span12 centered">
		
			<a href="../../portfolio/portfolio_es.pdf"><button class="btn btn-info btn-large" type="button">Download the PDF version</button></a>
		</div>
	</div>

		
	<?php include("../../includes/footer.php");