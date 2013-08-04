<?php

	$page_title = "Sobre mí";
	$page_description = "Biografía, estudios y más información personal.";

	include("includes/header.php"); ?>

	<header class="jumbotron subhead">
	  <div class="container">
	    <h1>Sobre mí</h1>
	  </div>
	</header>

	<div class="row">
		<div class="span12">
			
			<h3>Quién soy</h3>
			<div class="row">
				<div class="offset1 span4">
					<p class="lead">José Viso Vargas</p>
					<p><em>Diseñador de Experiencia de Usuario y Desarrollador</em></p>
					<p>29 Septiembre 1984 (28 años)</p>
					<p>De Almería (España)</p>
				</div>
				<div class="span4">
					<img src="../images/jose_about.JPG" alt="Foto de Jose Viso"/>
				</div>
			</div>
			
			<h3 class="spacer">Qué hago</h3>
				<div class="row">

					<div class="offset1 span11">
						<div class="row">
							<div class="span8">
								<!-- Explanation of what I do -->
								<p class="lead">Diseño Centrado en el Usuario </p>
								<p>Me dedico a <b>diseñar software que satisfaga las necesidades de los usuarios</b>, estudiando sus capacidades, motivaciones y limitaciones, pero teniendo en cuenta también las necesidades del cliente.</p>
								<p>Estudié Ingeniería Técnica en Informática de Gestión y desde entonces he estado trabajado en proyectos complejos tanto en España como en el extranjero, desde el análisis de los requisitos de usuario hasta la puesta en producción.</p>
								<p>Más tarde me he especializado en el campo de la Interacción Persona-Ordenador, que es lo que realmente me apasiona.
								<p>Puedes encontrar algunas cosas de las que he hecho echando un vistazo a <a href="portfolio">mi portfolio</a>.</p>
							</div>
						</div>
						<div class="row">
							<div class="span8">
								<h4 class="spacer">Técnicas, Metodologías y Herramientas que utilizo</h4>
								<ol>
									<li>Diseño Iterativo <small class="muted">(Diseñar - Prototipar - Evaluar)</small>.</li>
									<ul>
										<li>Personas, Escenarios y Storyboards.</li>
										<li>Árboles de contenidos o sitemaps y Diagramas de flujo de interacción.</li>
										<li>Prototipado: prototipos en papel, herramientas gráficas de baja y alta fidelidad (Balsamiq Mockups, Axure, Justinmind), prototipos en código.</li>
										<li>Creación de Wireframes <small class="muted">(OmniGraffle, Fireworks, Photoshop)</small>.</li>
										<li>Pruebas de Usuario <small class="muted">(Silverback)</small>.</li>
									</ul>
					
									<li>Evaluacines Heurísticas y otros estudios de Usabilidad.</li>
									<li>Desarrollo Ágil.</li>
									<li>Frameworks software y CMSs <small class="muted">(CodeIgniter, Twitter Bootstrap, Wordpress, etc)</small>.</li>
								</ol>
							</div>
							<div class="span8">
								<!-- Placeholder for image -->			 
							</div>
						</div>

						<h4 class="spacer">Proyectos destacados en los que participo</h4>
						<div class="row">
							<div class="span8">
								<ul>
									<li><em>Community TA</em> en el <a href="https://www.coursera.org/course/hci">curso de Interacción Persona-Ordenador</a> de <a href="https://www.coursera.org/">Coursera</a> - Stanford University.</li>
									<li>Creador de <a href="http://streetrockstars.com">Street Rockstars</a>.</li>
								</ul>

								<h4 class="spacer">Experiencia</h4>
								<ul>
									<li>Consultor de Experiencia de Usuario <small class="muted">Abr 2012 - Presente (Almería, España)</small>.</li>
									<li>Desarrollador web <small class="muted">Abr 2011 - Abr 2012 (Ámsterdam, Países Bajos)</small>.</li>
									<li>Desarrollador backend <small class="muted">May 2008 - Abr 2011 (Almería, España)</small>.</li>
								</ul>
							</div>
						</div>
					</div>

				</div>
			
			<h3 class="spacer">Cosas que me gustan</h3>
				<div class="row">
					<div class="offset1 span8">
						<p>Deportes, Fotografía, Música, Ciencia, Viajar, Comida.</p>
						
						<blockquote class="spacer">
							<p>El diseño no debería dominar a las cosas. Ni dominar a la gente. Debería ayudar a la gente.</p>
							<small>Dieter Rams</small>
						</blockquote>
					</div>

				</div>
			
			</div>
	</div>

		<?php include("includes/footer.php"); ?>