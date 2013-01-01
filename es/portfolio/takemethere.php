<?php

	$page_title = "Portfolio > Take Me There";
	$page_description = "Portfolio de Jose Viso | Take Me There: Ve lugares como si estuvieses allí.";

	include("../includes/header.php"); ?>

		<!-- Big Text -->	
		<div class="header spacer"><h1>Take Me There</h1></div>
		
		<!-- Summary -->
		<div class="row spacer">
			<div class="hero-unit span10">
				<p><em>Take Me There</em> es una página web que reúne videos de lugares famosos por todo el mundo grabados en un punto de vista subjetivo (POV). El objetivo es transmitirle a la gente viendo el video la sensación de estar en ese lugar.</p>
			</div>
		</div>

		<hr/>

		<!-- Design Process -->
		<div class="row">
			<h3>Proceso de Diseño</h3>
			<div class="span6">
				<ol>
					<li><p class="spacer">Generación de <b>Personas</b> y <b>Escenarios</b>.</p></li>
					<li><p class="spacer">Definición de <b>Flujos de Usuario</b> y <b>User Journeys</b>.</p></li>
					<li><p class="spacer">Definición de la <b>Arquitectura de la Información</b>.</p></li>
					<li><p class="spacer">Creación de <b>Wireframes</b> de Baja y Media fidelidad.</p></li> 
					<li><p class="spacer"><b>Iteración</b> sobre los wireframes, análisis y rediseños.</p></li>
					<li><p class="spacer">Creación de wireframes de Alta fidelidad.</p></li>
					<li><p class="spacer">Test A/B y de partes específicas.</p></li>
				</ol>
			</div>
			<div class="span6">
				<!-- <img src="http://placehold.it/500x350"> -->

				<div id="myCarousel" class="carousel slide">  
					<!-- Carousel items -->  
				    <div class="carousel-inner">  
				    	<div class="active item">
				        	<img src="../../images/takemethere_persona.png" alt="Primary Persona" border="1"/>
				        	<div class="carousel-caption">
				        		<p>Persona Primaria</p>
				        	</div>
				        </div>  
				        <div class="item">
				        	<img src="../../images/takemethere_scenario.png" alt="Scenario for the Primary Persona" />
				        	<div class="carousel-caption">
				        		<p>Uno de los Escenarios</p>
				        	</div>
				        </div>  
				        <div class="item">
				        	<img src="../../images/takemethere_userflow.jpg" alt="User Flow" />
				        	<div class="carousel-caption">
				        		<p>Bocetos de un Flujo de Usuario</p>
				        	</div>
				        </div>  
				        <div class="item">
				        	<img src="../../images/takemethere_wireframe1.png" alt="Low-fidelity Wireframe" />
				        	<div class="carousel-caption">
				        		<p>Wireframe de Baja fidelidad</p>
				        	</div>
				        </div>  
				        <div class="item">
				        	<img src="../../images/takemethere_wireframe2.png" alt="High-fidelity Wireframe" />
				        	<div class="carousel-caption">
				        		<p>Wireframe de Alta fidelidad</p>
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
			<h3>Herramientas Usadas</h3>
			<div class="offset4 span4">
				<!-- <img src="http://placehold.it/700x150"> -->
				<table class="table table-bordered">
					<tr>
						<td><p class="lead centered">Lápiz y Papel</p></td>
					</tr>
					<tr>
						<td><p class="lead centered">OmniGraffle</p></td>
					</tr>
					<tr>
						<td><p class="lead centered">Balsamiq Mockups</p></td>
					</tr>
					<tr>
						<td><p class="lead centered">Adobe Fireworks CS5</p></td>
					</tr>
					<tr>
						<td><p class="lead centered">Axure RP</p></td>
					</tr>
  				</table>
			</div>
		</div>

	<?php 

	 $project_name = "Take Me There";
	 include("../includes/portfolio_extra.php"); 
	 include("../includes/footer.php"); 

	 ?>