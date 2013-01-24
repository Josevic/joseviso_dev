<?php

 	$page_title = "Portfolio";
 	$page_description = "Jose Viso's portfolio. Check out the different projects I've work on.";

 	include("../includes/header.php"); 
	include("../includes/portfolio-subnav.php"); ?>

	<div class="row">

		<!-- Projects -->	
		<ul class="thumbnails pull-left">
			
		  <li id="ec">
		    <div class="thumbnail span3">
		    	<a href="evacriado">
		    		<img src="../../images/thumb_evaspa.jpg" alt="" width="260" height="197">
		    		<h4>Centro Eva Criado</h4>
		    	</a>	
			</div>
		  </li>	
		
		  <li id="sb">
		    <div class="thumbnail span3">
		    	<a href="smartbite">
		    		<img src="../../images/thumb_smartBite.png" alt="">
		    		<h4>Smart Bite</h4>
		    	</a>
			</div>
		  </li>
		
		  <li id="sr">
		    <div class="thumbnail span3">
		    	<a href="streetrockstars">
		    		<img src="../../images/thumb_streetRockstars.png" alt="">
		    		<h4>Street Rockstars</h4>
		    	</a>	
			</div>
		  </li>

		  <li id="sr">
		    <div class="thumbnail span3">
		    	<a href="amsterdammers">
		    		<img src="../../images/thumb_amsterdammers.jpg" alt="">
		    		<h4>Amsterdammers</h4>
		    	</a>	
			</div>
		  </li>
		
		  <li id="ssm">
		  	<div class="thumbnail span3">
		  		<a href="supersimple_mobile">
		    		<img src="../../images/thumb_superSimple_mobile.png" alt="">
		    		<h4>SuperSimple Mobile</h4>
		    	</a>
		    	
			</div>
		  </li>
		
		  <li id="ne">
		    <div class="thumbnail span3">
		    	<a href="nextepisode">
		    		<img src="../../images/thumb_nextEpisode.jpg" alt="">
		    		<h4>NextEpisode</h4>
		    	</a>
			</div>
		  </li>
		
		  <li id="tmt">
		    <div class="thumbnail span3">
		    	<a href="takemethere">
		    		<img src="../../images/thumb_takeMeThere.png" alt="">
		    		<h4>Take Me There</h4>
		    	</a>
			</div>
		  </li>
	
		</ul>
		
	</div>

	<hr/>

	<!-- Link to the PDF version of the portfolio -->
	<div class="row">
		<div class="span12 centered">
		
			<a href="../portfolio/portfolio_es.pdf"><button class="btn btn-info btn-large" type="button">Download the PDF version</button></a>
		</div>
	</div>

		
	<?php include("../includes/footer.php");