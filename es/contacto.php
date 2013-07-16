<?php 

	$page_title = "Contacto";
 	$page_description = "Formas de contactarme.";

	include("includes/header.php"); ?>

	<header class="jumbotron subhead">
	  <div class="container">
	    <h1 style="color:gray">Contacto</h1>
	  </div>
	</header>
		
	<div class="row spacer">
			<div class="span7">	
				<p class="lead">Envíame un email, habla conmigo por teléfono o encuéntrame en cualquiera de las redes sociales y otras páginas conocidas que uso. Responderé pronto :)</p>
			</div>
	</div>

	<div class="row">
			<div class="span7">	
				<h3><a href="mailto:contacto@joseviso.com">contacto@joseviso.com</a></h3>
			</div>
	</div>

	<div class="row">
			<div class="span7">	
				<h3><a href="tel:+34687352837">+34 687 352 837</a></h3>
			</div>
	</div>
		
	<div class="row">
			<div class="span7">
				
				<?php include("includes/social_networks.php"); ?>
			</div>
	</div>
	<?php include("includes/footer.php"); ?>