<?php

 	$page_title = "Portfolio";
 	$page_description = "Portfolio de Jose Viso. Descubre los distintos proyectos en los que he estado trabajando.";

 	include("../includes/header.php");
 	include("../includes/portfolio-subnav.php"); ?>

	<!-- Projects -->		  
	<ul class="thumbnails">
		<?php foreach ($projects as $url => $name): ?>
			<li class="span4 spacer">   
				<a href="<?php echo $url ?>" class="thumbnail">
			    	<img src="../../images/thumb_<?php echo $url; ?>.png" onmouseover="this.src='<?php echo $base; ?>/images/thumb_bg_<?php echo $url; ?>.png'" onmouseout="this.src='<?php echo $base; ?>/images/thumb_<?php echo $url; ?>.png'">
			    </a>
			</li>
		<?php endforeach; ?>
	</ul>
		  	
	<?php include("../includes/footer.php");