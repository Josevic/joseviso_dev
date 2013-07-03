<?php

 	$page_title = "Portfolio > Evaluación Heurística";
 	$page_description = "Portfolio de Jose Viso | Proyectos de Evaluación Heurística";

 	include("../../includes/header.php"); 
 	include("../../includes/portfolio-subnav.php"); ?>

	<!-- Projects -->
	<ul class="thumbnails">
		<?php foreach ($heuristic_evaluation as $url => $name): ?>
			<li class="span4 spacer">
				<a href="../<?php echo $url ?>" class="thumbnail">
			    	<img src="../../../images/thumb_<?php echo $url; ?>.png" alt="">
			    	<h3 class="centered"><?php echo $heuristic_evaluation[$url]; ?></h3>
			    </a>
			</li>
		<?php endforeach; ?>
	</ul>
		
	<?php include("../../includes/footer.php");