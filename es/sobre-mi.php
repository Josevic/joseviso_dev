<?php

	$page_title = "Sobre mí";
	$page_description = "Biografía, estudios y más información personal.";

	include("includes/header.php"); ?>

	<div class="row hidden-desktop">
		<div class="span6">
			<ul class="breadcrumb">
				<li><a href="<?php echo $base; ?>/es/">Inicio</a> <span class="divider">/</span></li>
				<li class="active">Sobre mí</li>
			</ul>
		</div>
	</div>

	<div class="row">
		<div class="span12">
			
			<h3>Quién soy</h3>
			<div class="row">
				<div class="offset1 span4">
					<img src="../images/In_Canal.JPG"/>
				</div>
				<div class="span7">
					<p class="lead">José Viso Vargas</p>
					<p>29 Septiembre 1984 (28 años)</p>
					<p>Almería, España</p>
					<p>Cursando <em><a href="http://www.uoc.edu/masters/esp/web/informatica_multimedia_telecomunicacion/interaccion-persona-ordenador/">Posgrado de Interacción Persona-Ordenador</a> (Universitat Oberta de Catalunya)</em><br/> 
						<em>Ingeniero Técnico en Informática de Gestión (Universidad de Almería)</em></p>
				</div>
			</div>
			
			<h3 class="spacer">Qué hago</h3>
				<div class="row">

					
					<div class="offset1 span11">
						<!-- Explanation of what I do -->
						<p class="lead">Diseño Centrado en el Usuario </p>
						<p>Mi principal objetivo es diseñar software que satisfaga las necesidades de los usuarios, estudiando sus capacidades, motivaciones y limitaciones, pero teniendo en cuenta también las necesidades del cliente.</p>
						<p>He trabajado en proyectos complejos tanto en España como en el extranjero, analizando los requisitos de los usuarios y desarrollando software. Más tarde me he especializado en el campo de la Interacción Persona-Ordenador, que es lo que realmente me apasiona. Creo que esta experiencia me permite poseer una buena visión global de los proyectos.</p>

						<h5 class="spacer">Técnicas que utilizo</h5>
						<ul>
							<li>Evaluaciones Heurísticas</li>
							<li>Investigación de usuarios</li>
							<li>Personas</li>
							<li>Scenarios</li>
							<li>Storyboards</li>
							<li>Prototipado (papel, baja y alta fidelidad)</li>
							<li>Wireframing</li>
							<li>Tests de usuarios</li>
							<li>Diseño iterativo: (Diseño - Prototipado - Evaluación)</li>
						</ul>

						<h5 class="spacer">Proyectos destacados en los que participo</h5>
						<ul>
							<li><em>Community TA</em> en el <a href="https://www.coursera.org/course/hci">curso de Interacción Persona-Ordenador</a> de <a href="https://www.coursera.org/">Coursera</a> - Stanford University</li>
							<li><a href="http://streetrockstars.com">Street Rockstars</a></li>
						</ul>

						<h5 class="spacer">Experiencia</h5>
						<ul>
							<li>Consultor de Experiencia de Usuario</li>
							<li>Desarrollador web (Ámsterdam, Países Bajos)</li>
							<li>Desarrollador backend (Almería, España)</li>
						</ul>
					</div>

			

				</div>
			
			<h3 class="spacer">Cosas que me gustan</h3>
				<div class="row">
					<div class="offset1 span3">
						
						<ul>
							<li>Deportes</li>
							<li>Fotografía</li>
							<li>Música</li>
							<li>Ciencia</li>
							<li>Viajar</li>
						</ul>
					</div>

				</div>
			
			</div>
	</div>

		<?php include("includes/footer.php"); ?>