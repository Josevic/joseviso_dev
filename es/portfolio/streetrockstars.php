<?php

	$page_title = "Portfolio > Street Rockstars";
	$page_description = "Portfolio de Jose Viso | Street Rockstars: Proyecto para encontrar a los mejores músicos callejeros del mundo.";

	include("../includes/header.php"); ?>

		<!-- Big Text -->	
		<div class="header spacer"><h1>Street Rockstars</h1></div>
		
		<!-- Summary -->
		<div class="row spacer">
			<div class="hero-unit span10">
				<p><em>Street Rockstars</em> es un proyecto que intenta recoger a los mejores músicos callejeros del mundo. No se trata únicamente de Rock, sino sobre crear un lugar donde encontrar a todos esos desconocidos que tocan en la calle y nadie ve, a parte de la gente que pasa en ese momento cerca.</p>
				<br/>
				<div class="video-container centered hidden-phone">
					<iframe width="560" height="315" src="http://www.youtube.com/embed/xlAoMDWxRfY" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="spacer centered">
					<a class="btn btn-large btn-primary" href="http://streetrockstars.com">¡Visita la página!</a>
				</div>
			</div>
		</div>

		<hr/>

		<!-- Design Process -->
		<div class="row">
			<h3>Proceso de Diseño</h3>
			<div class="span6">
				<ol>
					<li><p class="spacer"><b>Observación</b> en la calle de gente que grababa las actuaciones de músicos callejeros: edad aproximada, género, nacionalidad, etc. Entrevistas con personas que encajaban en esa descripción.</p></li>
					<li><p class="spacer">Creación de 2 <b>personas</b> (una primaria y una secundaria) y de <b>escenarios</b> típicos para cada uno de ellos. Generación de una lista de funcionalidades necesarias.</p></li>
					<li><p class="spacer">Comenzar a definir la <b>Arquitectura de la Información</b>:</p></li>
						<ol type="a">
							<li><p>Generación de <b>Blueprints</b> o Sitemaps.</p></li>
							<li><p>Primeros <b>sketches en papel</b> con posibles alternativas de representación.</p></li>
							<li><p>Selección de las representaciones más apropiadas y desarrollo de <b>wireframes</b> más detallados, usando Balsamiq Mockups.</p></li>
						</ol>
					<li><p class="spacer">Creación de un <b>prototipo interactivo</b> simple y <b>pruebas de usuario</b> sobre las funcionalidades básicas. Varias iteraciones con rediseños.</p></li>
					<li><p class="spacer"><b>Añadir más detalles</b> a los wireframes usando Adobe Fireworks y a los prototipos usando Axure.</p></li>
					<li><p class="spacer"><b>Evaluación Heurística</b>. Pruebas de cambios y aspectos concretos.</p></li>
					<li><p class="spacer">Implementation.</p></li>
				</ol>
			</div>
			<div class="span6">
				<!-- <img src="http://placehold.it/500x350"> -->

				<div id="myCarousel" class="carousel slide">  
					<!-- Carousel items -->  
				    <div class="carousel-inner">  
				    	<div class="active item">
				        	<img src="../../images/streetrockstars_persona1.png" alt="Primary Persona" />
				        	<div class="carousel-caption">
				        		<p>Persona Primaria</p>
				        	</div>
				        </div>  
				        <div class="item">
				        	<img src="../../images/streetrockstars_ia.png" alt="Information Architecture definition" />
				        	<div class="carousel-caption">
				        		<p>Blueprint con las distintas partes del sitio y las relaciones entre ellas.</p>
				        	</div>
				        </div>  
				        
				        <div class="item">
				        	<img src="../../images/streetrockstars_wf1.png" alt="Low-fidelity wireframe" />
				        	<div class="carousel-caption">
				        		<p>Wireframe de baja fidelidad creado usando Balsamiq Mockups</p>
				        	</div>
				        </div>
				        <div class="item">
				        	<img src="../../images/streetrockstars_wf2.png" alt="Mid-fidelity wireframe" />
				        	<div class="carousel-caption">
				        		<p>Wireframe más detallado construído usando Axure RP, teniendo en cuenta el feedback de los usuarios.</p>
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
					<tr>
						<td><p class="lead centered">iWork (Pages)</p></td>
					</tr>
  				</table>
			</div>
		</div>

		<?php 

			 $project_name = "Street Rockstars";
			 include("../includes/portfolio_extra.php"); 
			 include("../includes/footer.php"); 
		?>