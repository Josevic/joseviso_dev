<?php

 	$page_title = "Portfolio > Fotografía";
 	$page_description = "Portfolio de Jose Viso | Proyectos de Fotografía";

 	include("../../includes/header.php");
 	include("../../includes/portfolio-subnav.php"); ?>

	<div class="row">

		 <!-- Projects -->
		  <ul class="thumbnails pull-left">
			  <?php foreach ($other as $url => $name): ?>
			  <li>
			    <div class="thumbnail span3">
			    	<a href="../<?php echo $url ?>">
			    		<img src="../../../images/thumb_<?php echo $url; ?>.png" alt="">
			    		<h4><?php echo $other[$url]; ?></h4>
			    	</a>
				</div>
			  </li>
			  <?php endforeach; ?>
		  </ul>
		
	</div>
		
	<?php include("../../includes/footer.php");