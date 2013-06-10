<?php

 	$page_title = "Portfolio > Development";
 	$page_description = "Jose Viso's portfolio. Development Projects";

 	include("../../includes/header.php");
 	include("../../includes/portfolio-subnav.php"); ?>

	<div class="row">

		  <!-- Projects -->
		  <ul class="thumbnails pull-left">
			  <?php foreach ($development as $url => $name): ?>
			  <li>
			    <div class="thumbnail span3 project">
			    	<a href="../<?php echo $url ?>">
			    		<img src="../../../images/thumb_<?php echo $url; ?>.png" alt="">
			    		<h4><?php echo $development[$url]; ?></h4>
			    	</a>
				</div>
			  </li>
			  <?php endforeach; ?>
		  </ul>
		
	</div>

	<?php include("../../includes/footer.php");