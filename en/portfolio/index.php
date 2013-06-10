<?php

 	$page_title = "Portfolio";
 	$page_description = "Jose Viso's portfolio. Check out the different projects I've work on.";

 	include("../includes/header.php"); 
	include("../includes/portfolio-subnav.php"); ?>

	<div class="row">

		  <!-- Projects -->		  
		  <ul class="thumbnails pull-left">
			  <?php foreach ($projects as $url => $name): ?>
			  <li>
			    <div class="thumbnail span3 project">
			    	<a href="<?php echo $url ?>">
			    		<img src="../../images/thumb_<?php echo $url; ?>.png" alt="">
			    		<h4><?php echo $projects[$url]; ?></h4>
			    	</a>
				</div>
			  </li>
			  <?php endforeach; ?>
		  </ul>
		  
	</div>
	
	<?php include("../includes/footer.php");