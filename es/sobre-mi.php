<?php

	$page_title = "Sobre mí";
	$page_description = "Biografía, estudios y más información personal.";

	include("includes/header.php"); ?>

	<header class="jumbotron subhead">
	  <div class="container">
	    <h1 style="color:gray">Sobre mí</h1>
	  </div>
	</header>

	<div class="row">
		<div class="span12">
			
			<h3>Quién soy</h3>
			<div class="row">
				<div class="offset1 span4">
					<img src="../images/Jose_whitebg.JPG"/>
				</div>
				<div class="span7">
					<p class="lead">José Viso Vargas</p>
					<p><em>Diseñador / Desarrollador de Experiencia de Usuario</em></p>
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
						<p>He trabajado en proyectos complejos tanto en España como en el extranjero, analizando los requisitos de los usuarios y desarrollando software. Más tarde me he especializado en el campo de la Interacción Persona-Ordenador, que es lo que realmente me apasiona. Creo que esta experiencia me permite poseer una buena visión global de los proyectos.
							Puedes encontrar algunas cosas de las que he hecho echando un vistazo a <a href="portfolio">mi portfolio</a>.</p>

						<div class="row">
							
							<h4 class="spacer">Técnicas, Metodologías y Herramientas que utilizo</h4>
							<div class="span4">
								<ol>
									<li>Sketchboard</li>
									<li>Evaluacines Heurísticas y otros estudios de Usabilidad</li>
									<li>Investigación de Usuarios</li>
									<li>Personas</li>
									<li>Escenarios</li>
									<li>Creación de Storyboards</li>
									<li>Árboles de contenidos o mapas del sitio</li>
									<li>Diagramas de flujo de interacción</li>
									<li>Prototipado: prototipos en papel, herramientas gráficas de baja y alta fidelidad (Balsamiq Mockups, Axure, Justinmind), protitipos en código.</li>
									<li>Creación de Wireframes (OmniGraffle, Fireworks, Photoshop)</li>
									<li>Pruebas de Usuario</li>
									<li>Diseño Iterativo (Diseñar - Prototipar - Evaluar)</li>
									<li>Desarrollo Ágil</li>
									<li>Frameworks software y CMSs</li>
								</ol>
							</div>
							<div class="span6">
										<div id="myCarousel" class="carousel slide">  
											<ol class="carousel-indicators">
												<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
												<li data-target="#myCarousel" data-slide-to="1"></li>
												<li data-target="#myCarousel" data-slide-to="2"></li>
												<li data-target="#myCarousel" data-slide-to="3"></li>
												<li data-target="#myCarousel" data-slide-to="4"></li>
												<li data-target="#myCarousel" data-slide-to="5"></li>
												<li data-target="#myCarousel" data-slide-to="6"></li>
												<li data-target="#myCarousel" data-slide-to="7"></li>
											</ol>

											<!-- Carousel items -->  
										    <div class="carousel-inner">

										    	<div class="item active">
										        	<img src="../images/sketchboard.jpg" alt="Sketchboard" />
										        	<div class="carousel-caption">
										        		<p>Sketchboard</p>
										        	</div>
										        </div> 
										        
										        <div class="item ">
										        	<img src="../images/evacriado_personas.gif" alt="Personas"/>
										        	<div class="carousel-caption">
										        		<p>Personas</p>
										        	</div>
										        </div> 
										        <div class="item ">
										        	<img src="../images/smartbite_storyboard.png" alt="Storyboard"/>
										        	<div class="carousel-caption">
										        		<p>Storyboard</p>
										        	</div>
										        </div> 
										        <div class="item ">
										        	<img src="../images/NextEpisode_paperPrototype.jpg" alt="Paper prototype"/>
										        	<div class="carousel-caption">
										        		<p>Prototipo en papel</p>
										        	</div>
										        </div> 
										        <div class="item ">
										        	<img src="../images/museoAlmeria_mf-wireframe.jpg" alt="Wireframe con anotaciones"/>
										        	<div class="carousel-caption">
										        		<p>Wireframe con anotaciones</p>
										        	</div>
										        </div> 
										        <div class="item ">
										        	<img src="../images/museoAlmeria_hf-wireframe.jpg" alt="Wireframe de alta fidelidad"/>
										        	<div class="carousel-caption">
										        		<p>Wireframe de alta fidelidad</p>
										        	</div>
										        </div> 
										        <div class="item ">
										        	<img src="../images/user_test.png" alt="Pruebas de usuario"/>
										        	<div class="carousel-caption">
										        		<p>Pruebas de usuario</p>
										        	</div>
										        </div> 
										        <div class="item ">
										        	<img src="../images/live_website.png" alt="Página web en funcionamiento"/>
										        	<div class="carousel-caption">
										        		<p>Página web en funcionamiento</p>
										        	</div>
										        </div>   
										  	</div>

										  	<!-- Carousel nav -->  
										  	<a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a>  
										  	<a class="carousel-control right" href="#myCarousel" data-slide="next">›</a>  
								</div>
							</div>
						</div>

						<h4 class="spacer">Proyectos destacados en los que participo</h4>
						<ul>
							<li><em>Community TA</em> en el <a href="https://www.coursera.org/course/hci">curso de Interacción Persona-Ordenador</a> de <a href="https://www.coursera.org/">Coursera</a> - Stanford University</li>
							<li>Creador de <a href="http://streetrockstars.com">Street Rockstars</a></li>
						</ul>

						<h4 class="spacer">Experiencia</h4>
						<ul>
							<li>Consultor de Experiencia de Usuario (Almería, España - Internacional)</li>
							<li>Desarrollador web (Ámsterdam, Países Bajos)</li>
							<li>Desarrollador backend (Almería, España)</li>
						</ul>
					</div>

			

				</div>
			
			<h3 class="spacer">Cosas que me gustan</h3>
				<div class="row">
					<div class="offset1 span11">
						<p>Deportes, Fotografía, Música, Ciencia, Viajar</p>
					</div>

				</div>
			
			</div>
	</div>

		<?php include("includes/footer.php"); ?>