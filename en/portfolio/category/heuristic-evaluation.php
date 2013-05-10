<?php

 	$page_title = "Portfolio > Heuristic Evaluation";
 	$page_description = "Jose Viso's portfolio | Heuristic Evaluation Projects";

 	include("../../includes/header.php"); 
 	include("../../includes/portfolio-subnav.php"); ?>

	<div class="row">

		  <!-- Projects -->
		  <ul class="thumbnails pull-left">
			  <?php foreach ($heuristic_evaluation as $url => $name): ?>
			  <li>
			    <div class="thumbnail span3">
			    	<a href="../<?php echo $url ?>">
			    		<img src="../../../images/thumb_<?php echo $url; ?>.png" alt="">
			    		<h4><?php echo $heuristic_evaluation[$url]; ?></h4>
			    	</a>
				</div>
			  </li>
			  <?php endforeach; ?>
		  </ul>
		
	</div>
		
	<?php include("../../includes/footer.php");