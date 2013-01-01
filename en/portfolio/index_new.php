<?php

 $page_title = "Portfolio";
 $page_description = "Jose Viso's portfolio. Check out the different projects I've work on.";

 include("../includes/header.php"); ?>

		
		<!-- Projects -->	
		<ul class="thumbnails pull-left">
		  <li>
		    <div class="thumbnail">
		    	<a href="smartbite">
		    		<img src="../../images/thumb_smartBite.png" alt="">
		    		<h3>Smart Bite</h3>
		    	</a>
		    	<p>App for eating healthy</p>
			</div>
		  </li>
		  <li>
		    <div class="thumbnail">
		    	<a href="streetrockstars">
		    		<img src="../../images/thumb_streetRockstars.png" alt="">
		    		<h3>Street Rockstars</h3>
		    	</a>
		    	<p>Project to find the best street musicians in the world</p>
			</div>
		  </li>
		  <li>
		  	<div class="thumbnail">
		  		<a href="supersimple_mobile">
		    		<img src="../../images/thumb_superSimple_mobile.png" alt="">
		    		<h3>SuperSimple Mobile</h3>
		    	</a>
		    	<p>Concept of a mobile phone for non-tech people</p>
			</div>
		  </li>
		  <li>
		    <div class="thumbnail">
		    	<a href="takemethere">
		    		<img src="../../images/thumb_takeMeThere.png" alt="">
		    		<h3>Take Me There</h3>
		    	</a>
		    	<p>See places as if you were there</p>
			</div>
		  </li>
		</ul>

		<!-- Link to the PDF version of the portfolio -->
		<div class="row">
			<div class="centered well">
				<a href="../portfolio/portfolio_en.pdf"><button class="btn btn-info btn-large" type="button">Download the PDF version</button></a>
			</div>
		</div>

		
		<?php include("../includes/footer.php"); ?>