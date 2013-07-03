<?php

 	$page_title = "Portfolio > Development";
 	$page_description = "Jose Viso's portfolio. Development Projects";

 	include("../../includes/header.php");
 	include("../../includes/portfolio-subnav.php"); ?>

	<!-- Projects -->
	<ul class="thumbnails">
		<?php foreach ($development as $url => $name): ?>
			<li class="span4 spacer">
				<a href="../<?php echo $url ?>" class="thumbnail">
			    	<img src="../../../images/thumb_<?php echo $url; ?>.png" alt="">
			    	<h3 class="centered"><?php echo $development[$url]; ?></h3>
			    </a>
			</li>
		<?php endforeach; ?>
	</ul>

	<?php include("../../includes/footer.php");