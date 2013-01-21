<?php

	$page_title = "Portfolio > SmartBite";
	$page_description = "Portfolio de Jose Viso | Smartbite: Una app para comer sano.";

	include("../includes/header.php"); ?>

		<!-- Big Text -->	
		<div class="header spacer"><h1>SmartBite</h1></div>
		
		<!-- Summary -->
		<div class="row spacer">
			<div class="hero-unit span7">
				<p><em>SmartBite</em> es una aplicación de dietas para smartphone enfocada en motivar a los usuarios a no abandonar, adaptándo la dieta a la comida preferida de cada persona y proporcionando una amplia variedad de alternativas.</p>
				<br/>
				<a class="btn btn-large btn-primary pull-right" href="https://dl.dropbox.com/u/3953712/SmartBite/test/screens/iPhoneDashboard.html">¡Prueba el prototipo interactivo!</a>
			</div>
			<div class="span3 pull-right">
				<img src="../../images/smartbite.png">
			</div>
		</div>

		<hr/>

		<!-- Design Process -->
		<div class="row">
			<div class="span12">
				<h3>Proceso de Diseño</h3>
			</div>
			<div class="span6">
				<ol>
					<li><p class="spacer"><b>Búsqueda de Necesidades</b>: Descubrir necesidades no cubiertas u oportunidnades de mejora a mi alrededor. Para conseguirlo, observé y entrevisté a varias personas.</p></li>
					<li><p class="spacer">Bocetos de la estructura: Creación de un "punto de vista", uso de <b>storyboards</b>, elección de una dirección concreta y creación de <b>prototipos rápidos</b> con Balsamiq Mockups.</p></li>
					<li><p class="spacer">Creación de <b>prototipos interactivos</b> usando Justinmind.</p></li>
					<li><p class="spacer"><b>Pruebas de Usuario</b>: Definición de un Plan de Evaluación, realización de las pruebas, análisis de los resultados y planificación de la siguiente iteración de diseño.</p></li>
				</ol>
			</div>
			<div class="span6">
				<!-- <img src="http://placehold.it/500x350"> -->

				<div id="myCarousel" class="carousel slide">  
					<!-- Carousel items -->  
				    <div class="carousel-inner">  
				    	<div class="active item">
				        	<img src="../../images/smartbite_observation.jpg" alt="First sketches" />
				        	<div class="carousel-caption">
				        		<p>Una de las personas observadas para encontrar una oportunidad de diseño.</p>
				        	</div>
				        </div>  
				        <div class="item">
				        	<img src="../../images/smartbite_storyboard.png" alt="Storyboard" />
				        	<div class="carousel-caption">
				        		<p>Storyboard para representar el contexto donde la app sería usada.</p>
				        	</div>
				        </div>  
				        
				        <div class="item">
				        	<img src="../../images/smartbite_lowfidelity2.png" alt="" />
				        	<div class="carousel-caption">
				        		<p>Prototipo básico construído usando Balsamiq Mockups</p>
				        	</div>
				        </div>
				        <div class="item">
				        	<img src="../../images/smartbite_highfidelity.png" alt="" />
				        	<div class="carousel-caption">
				        		<p>Prototipo más detallado teniendo en cuenta el feedback de los usuarios, construído con Justinmind</p>
				        	</div>
				        </div>    
				        <div class="item">
				        	<img src="../../images/smartbite_usertest.jpg" alt="" />
				        	<div class="carousel-caption">
				        		<p>Prueba de Usuario</p>
				        	</div>
				        </div>  
				  	</div>  
				  	<!-- Carousel nav -->  
				  	<a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a>  
				  	<a class="carousel-control right" href="#myCarousel" data-slide="next">›</a>  
				</div>  


			</div>
		</div>

		<hr/>

		<!-- Tools Used -->
		<div class="row">
			<div class="span12">
				<h3>Herramientas Usadas</h3>
			</div>
			<div class="offset4 span4">
				<!-- <img src="http://placehold.it/700x150"> -->
				<table class="table table-bordered">
					<tr>
						<td><p class="lead centered">Lápiz y Papel</p></td>
					</tr>
					<tr>
						<td><p class="lead centered">Balsamiq Mockups</p></td>
					</tr>
					<tr>
						<td><p class="lead centered">Justinmind</p></td>
					</tr>
					<tr>
						<td><p class="lead centered">Google Docs</p></td>
					</tr>
  				</table>
			</div>
		</div>

<?php 

	 $project_name = "SmartBite";
	 include("../includes/portfolio_extra.php"); 
	 include("../includes/footer.php"); 

?>