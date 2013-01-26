<?php

	$page_title = "Portfolio > NextEpisode";
	$page_description = "Portfolio de Jose Viso | NextEpisode: App para seguir tus series favoritas.";
	
	include("../includes/header.php"); ?>


		<!-- Big Text -->	
		<div class="header spacer"><h1>NextEpisode</h1></div>
		
		<!-- Summary -->
		<div class="row spacer">
			<div class="hero-unit span7">
				<p><em>NextEpisode</em> es un concepto de software multiplataforma para gestionar y seguir tus series de televisión favoritas.</p> 
				<p>Los objetivos son no tener que recordar cuál es el siguiente episodio que te toca ver, no perder tiempo descargándolo, no tener que recordar qué ha ocurrido en la serie hasta ese momento, y descubrir fácilmente más series que te puedan gustar.</p>
				<a class="btn btn-large btn-primary pull-right" href="http://joseviso.com/external_resources/NextEpisode/index.html">Prueba el prototipo interactivo!</a>
			</div>
			<div class="span3 pull-right">
				<img src="../../images/nextEpisode_front.jpg" class="img-rounded">
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
					<li><p class="spacer"><b>Búsqueda de Necesidades</b>: Me di cuenta de que la gente que me rodeaba en general tenía dificultades a la hora de seguir las series que veían habitualmente, así que existía una clara oportunidad de mejora.</p></li>
					<li><p class="spacer">Bocetos de la estructura: Creación de un punto de vista de diseño, brainstorm diferentes alternativas, creación de <b>prototipos en papel</b> para hacer pruebas.</p></li>
					<li>
						<p class="spacer">Creación de <b>Prototipos interactivos en HTML</b> usando el framework <a href="http://twitter.github.com/bootstrap/">Twitter Bootstrap</a>.</p>
						<p>Para este proyecto quería probar a hacer prototipos rápidos directamente en HTML justo después de las pruebas en papel. Para hacer esto usé un framework de desarrollo frontend.</p>
						<p>Resultó ser una buena alternativa para cuando tienes cierta seguridad de que la alternativa de diseño que has elegido es la apropiada, obteniendo una base de código casi listo para producción en una etapa muy temprana del proyecto.</p>
					</li>
				</ol>
			</div>
			<div class="span6">
				<!-- <img src="http://placehold.it/500x350"> -->

				<div id="myCarousel" class="carousel slide">  
					<!-- Carousel items -->  
				    <div class="carousel-inner">  
				    	<div class="active item">
				        	<img src="../../images/NextEpisode_paperPrototype.jpg" alt="Prototipo en papel" />
				        	<div class="carousel-caption">
				        		<p>Primer prototipo en papel para probar algunas interacciones y navegabilidad.</p>
				        	</div>
				        </div>  
				        <div class="item">
				        	<img src="../../images/NextEpisode_TB_prototype.png" alt="Storyboard" />
				        	<div class="carousel-caption">
				        		<p>Prototipo en HTML.</p>
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
						<td><p class="centered">Lápiz, Papel, Rotuladores y Tijeras</p></td>
					</tr>
					<tr>
						<td><p class="centered">El framework  <a href="http://twitter.github.com/bootstrap/">Twitter Bootstrap</a></p></td>
					</tr>
					<tr>
						<td><p class="centered">Uno de los temas de <a href="http://bootswatch.com/">Bootswatch</a>
					</tr>
  				</table>
			</div>
		</div>

	 <?php 

	 $project_name = "NextEpisode";
	 include("../includes/portfolio_extra.php"); 
	 include("../includes/footer.php"); 

	 ?>
		
		