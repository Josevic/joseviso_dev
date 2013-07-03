<?php

 	$page_title = "Portfolio";
 	$page_description = "Jose Viso's portfolio. Check out the different projects I've work on.";

 	include("../includes/header.php"); 
	include("../includes/portfolio-subnav.php"); ?>

	<!-- Projects -->		  
	<ul class="thumbnails">
		<?php foreach ($projects as $url => $name): ?>
			<li class="span8 spacer">
				<a href="<?php echo $url ?>" class="thumbnail">
			    	<img src="../../images/thumb_<?php echo $url; ?>.png" alt="">
			    	<h3 class="centered"><?php echo $projects[$url]; ?></h3>
			    </a>
			</li>
		<?php endforeach; ?>
	</ul>
		
	<?php include("../includes/footer.php");