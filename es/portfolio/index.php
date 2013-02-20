<?php

 	$page_title = "Portfolio";
 	$page_description = "Portfolio de Jose Viso. Descubre los distintos proyectos en los que he estado trabajando.";

 	include("../includes/header.php");
 	include("../includes/portfolio-subnav.php"); ?>

 	<div class="row">

		  <!-- Projects -->		  
		  <ul class="thumbnails pull-left">
			  <?php foreach ($projects as $url => $name): ?>
			  <li>
			    <div class="thumbnail span3">
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