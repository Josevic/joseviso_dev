<?php

 	$page_title = "Portfolio > Diseño de Interacción";
 	$page_description = "Portfolio de Jose Viso | Proyectos de Diseño de Interacción";

 	include("../../includes/header.php");
 	include("../../includes/portfolio-subnav.php"); ?>

	<!-- Projects -->
	<ul class="thumbnails">
		<?php foreach ($interaction_design as $url => $name): ?>
			<li class="span4 spacer">
				<a href="../<?php echo $url ?>" class="thumbnail">
			    	<img src="../../../images/thumb_<?php echo $url; ?>.png" alt="">
			    	<h3 class="centered"><?php echo $interaction_design[$url]; ?></h3>
			    </a>
			</li>
		<?php endforeach; ?>
	</ul>
		
	<?php include("../../includes/footer.php");