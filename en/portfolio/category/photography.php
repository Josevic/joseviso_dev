<?php

 	$page_title = "Portfolio > Photography";
 	$page_description = "Jose Viso's portfolio | Photography Projects";

 	include("../../includes/header.php"); ?>

 	<div class="row visible-desktop visible-tablet">
	  <div class="span12 centered-pills test11">
	    <ul class="nav nav-pills">
	      <li><a href="<?php echo $base . 'en/portfolio'?>">All</a></li>
	      <li ><a href="user-research">User Research</a></li>
	      <li><a href="#">Heuristic Evaluation</a></li>
	      <li><a href="interaction-design">Interaction Design</a></li>
	      <li><a href="development">Development</a></li>
	      <li class="active"><a href="photography">Photography</a></li>
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