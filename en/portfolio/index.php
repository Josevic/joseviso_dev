<?php

 	$page_title = "Portfolio";
 	$page_description = "Jose Viso's portfolio. Check out the different projects I've work on.";

 	include("../includes/header.php"); ?>

	<div class="row">

		<!-- Projects -->	
		<ul class="thumbnails pull-left">
			
		  <li id="ec">
		    <div class="thumbnail span3">
		    	<a href="evacriado">
		    		<img src="../../images/thumb_evaspa.jpg" alt="" width="260" height="197">
		    		<h3>Centro Eva Criado</h3>
		    	</a>	
			</div>
		  </li>	
		
		  <li id="sb">
		    <div class="thumbnail span3">
		    	<a href="smartbite">
		    		<img src="../../images/thumb_smartBite.png" alt="">
		    		<h3>Smart Bite</h3>
		    	</a>
			</div>
		  </li>
		
		  <li id="sr">
		    <div class="thumbnail span3">
		    	<a href="streetrockstars">
		    		<img src="../../images/thumb_streetRockstars.png" alt="">
		    		<h3>Street Rockstars</h3>
		    	</a>	
			</div>
		  </li>
		
		  <li id="ssm">
		  	<div class="thumbnail span3">
		  		<a href="supersimple_mobile">
		    		<img src="../../images/thumb_superSimple_mobile.png" alt="">
		    		<h3>SuperSimple Mobile</h3>
		    	</a>
		    	
			</div>
		  </li>
		
		<!--
		  <li id="ne">
		    <div class="thumbnail span3">
		    	<a href="nextepisode">
		    		<img src="http://flickholdr.com/270/205/television" alt="">
		    		<h3>NextEpisode</h3>
		    	</a>
			</div>
		  </li>
		-->
		
		  <li id="tmt">
		    <div class="thumbnail span3">
		    	<a href="takemethere">
		    		<img src="../../images/thumb_takeMeThere.png" alt="">
		    		<h3>Take Me There</h3>
		    	</a>
			</div>
		  </li>
	
		</ul>
	</div>

	<!-- Link to the PDF version of the portfolio -->
	<div class="row">
		<div class="span11 centered well">
			<a href="../portfolio/portfolio_es.pdf"><button class="btn btn-info btn-large" type="button">Download the PDF version</button></a>
		</div>
	</div>

		
	<?php include("../includes/footer.php");