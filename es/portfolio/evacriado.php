<?php

	$page_title = "Portfolio > Eva Criado";
	$page_description = "Portfolio de Jose Viso | Evaluación Heurística de Evacriado.com";
	
	include("../includes/header.php"); ?>


		<!-- Big Text -->	
		<div class="header spacer"><h1>Eva Criado</h1></div>
		
		<!-- Summary -->
		<div class="row spacer">
			<div class="hero-unit span7">
				<p>Evaluación Heurística de la web del centro de belleza Eva Criado, pensando en un futuro rediseño.</p>
				<a class="btn btn-large btn-primary pull-right" href="HE_EvaSpa.pdf">Descarga la Evaluación Heurística</a>
			</div>

			<div class="span3 pull-right" >
				<img src="../../images/thumb_evaspa.jpg" class="img-rounded">
			</div>
		</div>

		<hr/>

		<!-- Design Process -->
		<div class="row">
			<div class="span12">
				<h3>Proceso Seguido</h3>
			</div>
			<div class="span6">
				<ol>
					<li><p class="spacer"><b>Conocer</b> a grandes rasgos <b>el campo de dominio</b>: Investigación general sobre el área, en qué consisten los distintos tratamientos y servicios que aparecen en el sitio, con la intención de saber qué es lo que hace el negocio exáctamente.</p></li>
					<li><p class="spacer"><b>Evaluación superficial de la interfaz</b>: El objetivo en este punto era buscar los problemas más importantes y fácilmente detectables.</p></li>
					<li><p class="spacer"><b>Evaluación exhaustiva</b> considerando las <a href="http://www.useit.com/papers/heuristic/heuristic_list.html">10 Heurísticas de Usabilidad</a> propuestas por <a href="http://es.wikipedia.org/wiki/Jakob_Nielsen">Jakob Nielsen</a>, teniendo en cuenta la severidad e importancia de cada una de ellas.</b></p></li>
					<li><p class="spacer"><b>Análisis de los resultados</b> y <b>recomendación de alternativas</b> para solucionar los problemas o al menos minimizarlos.</p></li>
				</ol>
			</div>
			<div class="span6">
		
				<div id="myCarousel" class="carousel slide">  
					<!-- Carousel items -->  
				    <div class="carousel-inner">

				    	<div class="active item">
				        	<img src="../../images/evaspa_home.png" alt="Página principal" />
				        	<div class="carousel-caption">
				        		<p>Página principal estudiada</p>
				        	</div>
				        </div>    
				    	<div class="item">
				        	<img src="../../images/he1.png" alt="Findings" />
				        	<div class="carousel-caption">
				        		<p>Algunos de los hallazgos</p>
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
						<td><p class="centered"><a href="http://www.nngroup.com/articles/ten-usability-heuristics/">10 Heurísticas de Usabilidad</a> (Jakob Nielsen)</p></td>
					</tr>
					<tr>
						<td><p class="centered">iWork: Pages</p></td>
					</tr>
					<tr>
						<td><p class="centered">Plantilla propia para Evaluaciones Heurísticas</p></td>
					</tr>
  				</table>
			</div>
		</div>

	 <?php 

	 $project_name = "Eva Criado";
	 include("../includes/portfolio_extra.php"); 
	 include("../includes/footer.php"); 

	 ?>
		
		