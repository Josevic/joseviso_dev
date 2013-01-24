<?php

 	$page_title = "Portfolio > Interaction Design";
 	$page_description = "Jose Viso's portfolio | Interaction Design Projects";

 	include("../../includes/header.php"); ?>

 	<div class="row visible-desktop visible-tablet">
	  <div class="span12 centered-pills test11">
	    <ul class="nav nav-pills">
	      <li><a href="<?php echo $base . 'en/portfolio'?>">All</a></li>
	      <li><a href="user-research">User Research</a></li>
	      <li><a href="heuristic-evaluation">Heuristic Evaluation</a></li>
	      <li class="active"><a href="interaction-design">Interaction Design</a></li>
	      <li><a href="development">Development</a></li>
	      <li><a href="photography">Photography</a></li>
	    </ul>
	  </div>
	</div>

	<div class="row visible-phone">
	  testtt
	</div>


	<div class="row">

		<!-- Projects -->	
		<ul class="thumbnails pull-left">
			
		  <li id="ec">
		    <div class="thumbnail span3">
		    	<a href="../evacriado">
		    		<img src="../../../images/thumb_evaspa.jpg" alt="" width="260" height="197">
		    		<h4>Centro Eva Criado</h4>
		    	</a>	
			</div>
		  </li>	
		
		  <li id="sb">
		    <div class="thumbnail span3">
		    	<a href="../smartbite">
		    		<img src="../../../images/thumb_smartBite.png" alt="">
		    		<h4>Smart Bite</h4>
		    	</a>
			</div>
		  </li>
		
		  <li id="sr">
		    <div class="thumbnail span3">
		    	<a href="../streetrockstars">
		    		<img src="../../../images/thumb_streetRockstars.png" alt="">
		    		<h4>Street Rockstars</h4>
		    	</a>	
			</div>
		  </li>
		
		  <li id="ssm">
		  	<div class="thumbnail span3">
		  		<a href="../supersimple_mobile">
		    		<img src="../../../images/thumb_superSimple_mobile.png" alt="">
		    		<h4>SuperSimple Mobile</h4>
		    	</a>
		    	
			</div>
		  </li>
		
		  <li id="ne">
		    <div class="thumbnail span3">
		    	<a href="../nextepisode">
		    		<img src="../../../images/thumb_nextEpisode.jpg" alt="">
		    		<h4>NextEpisode</h4>
		    	</a>
			</div>
		  </li>
		
		  <li id="tmt">
		    <div class="thumbnail span3">
		    	<a href="../takemethere">
		    		<img src="../../../images/thumb_takeMeThere.png" alt="">
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
		
			<a href="../../portfolio/portfolio_es.pdf"><button class="btn btn-info btn-large" type="button">Download the PDF version</button></a>
		</div>
	</div>

		
	<?php include("../../includes/footer.php");