<?php

	$page_title = "Portfolio > Kiosco Museo Almería";
	$page_description = "Portfolio de Jose Viso | Kiosco interactivo para el museo de Almería";
	
	include("../includes/header.php"); ?>

	<div class="row">
		<div class="span12">
			<ul class="breadcrumb">
				<li><a href="<?php echo $base; ?>/es/">Inicio</a> <span class="divider">></span></li>
				<li><a href="<?php echo $base; ?>/es/portfolio"> Portfolio</a> <span class="divider">></span></li>
				<li class="active">Kiosco Museo Almería</li>	
		    </ul>
		</div>
	</div>

		<!-- Big Text -->	
		<div class="header"><h1>Kiosco Museo Almería</h1></div>
		
		<!-- Summary -->
		<div class="row spacer">
			<div class="span12">
				<div class="row">
					<div class="span7">
						<p class="lead">Este proyecto es un concepto de kiosco interactivo ideado especialmente para las necesidades del <a href="http://www.museosdeandalucia.es/culturaydeporte/museos/MAL/?lng=es">Museo Arqueológico de Almería</a>.</p>
						<p class="lead">Fue realizado para la asignatura Diseño de Interacción del <a href="http://estudis.uoc.edu/ca/masters-postgraus-especialitzacions/diploma-postgrau/informatica-multimedia-telecomunicacio/interaccio-persona-ordinador/presentacio">Posgrado de Interacción Persona-Ordenador</a> de la Universitat Oberta de Catalunya.</p>
					</div>
					<div class="span5">
						<div class="pull-right hidden-phone">
							<img src="../../images/museoalmeria_front.png">
						</div>
					</div>
				</div>
			</div>
		</div>

		<hr/>

		
		<!-- Design Opportunity -->
		<div class="row">
			<div class="span12">
				<h3 style="color:gray;">Oportunidad de diseño y estrategia</h3>
				<div class="row">
					<div class="span7">
						<p>Tras una primera visita al museo para buscar posibles necesidades no cubiertas y oportunidades de diseño, se obtuvieron las siguientes:</p>

						<ul>
							<li><p>Muy <b>poca información sobre los elementos</b> arqueológicos permanentes. Había gente preguntandose qué eran algunos objetos de las vitrinas y no tenían a donde acudir para resolver sus dudas.</li>
							<li><b>No había forma de</b> que los usuarios pudiesen <b>dar feedback</b> al museo para mejorar. No había zona de atención al visitante o de información.</p></li>
							<li><p>La <b>sala de exposiciones temporales</b> tenía muchas obras pero prácticamente <b>ninguna información sobre qué se expone</b> o quiénes son los autores (tan sólo aparecía un pequeño cartel con el nombre).</p></li>
							<li><p>Se echaba en falta un <b>“hilo conductor”</b> que hiciese a los visitantes comprender mejor por qué ciertos objetos estaban expuestos en determinadas zonas.</p></li>
						</ul>
					</div>
					<div class="span5">
						<img class="pull-right" src="../../images/moleskine.jpg" alt="" />
					</div>
				</div>
			</div>
		</div>
		<hr/>

		<!-- Design Process -->
		<div class="row">
			<div class="span12">
				<h3 style="color:gray;">Proceso seguido</h3>
				<div class="row">
					<div class="span7">
						<ol>
							<li>
								<p class="spacer">Creación de <b>personas</b> para representar los 3 perfiles principales detectados.</p>
								<div class="centered">
									<img src="../../images/museoAlmeria_personas.png" alt="Personas" />
								</div>
							</li>

							<li>
								<p class="spacer">Definición de la <b>arquitectura de la información</b>. Primero se realizó un outline y posteriormente se creó un árbol de contenidos.</p>
								<div class="centered">
									

												<a data-toggle="lightbox" href="#ia_big">
													<img src="../../images/museoAlmeria_ia_small.png" class="img-polaroid" alt="Click to make bigger">
												</a>
												<div id="ia_big" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
														<div class='lightbox-header'>
															<button type="button" class="close" data-dismiss="lightbox" aria-hidden="true">&times;</button>
														</div>
														<div class='lightbox-content'>
															<img src="../../images/museoAlmeria_ia.jpg">
														</div>
												</div>
								</div>
							</li>
							<li>
								<p class="spacer">Definición de <b>flujos de interacción</b> en la aplicación. Se identificaron las tareas principales que los usuarios necesitaban realizar, y a través de esquemas se diseñaron cómo se desarrollarían dentro de la aplicación.</p>
								<div class="centered">
									<img src="../../images/museoAlmeria_flowchart_small.png" alt="Flujos de interacción" />
								</div>
							</li>
							<li>
								<p class="spacer">Realización de <b>sketches y wireframes</b>. Primero intenté obtener el mayor número de alternativas para cada una de las pantallas, posteriormente elegí una opción, y continué desarrollándola cada vez con un nivel de fidelidad mayor.</p>
								<div class="centered">
									<img src="../../images/museoAlmeria_sketches.JPG" alt="Sketch en papel" />
									<p class="centered muted">Primeros sketches con alternativas para la pantalla inicial.</p>
								</div>
								<div class="spacer centered">
									<img src="../../images/museoAlmeria_lowfi_wireframe.png" alt="Primer prototipo" />
									<p class="centered muted">Una vez elegida una de las alternativas, creé una versión en Balsamiq Mockups.</p>
								</div>
								<div class="spacer centered">
												<a data-toggle="lightbox" href="#annotated_wireframe_big">
													<img src="../../images/museoAlmeria_annotated_wireframe_small.jpg" class="img-polaroid" alt="Click to make bigger">
												</a>
												<p class="centered muted">Wireframe anotado explicando la pantalla de "Información detallada de Objeto"</p>
												<div id="annotated_wireframe_big" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
														<div class='lightbox-header'>
															<button type="button" class="close" data-dismiss="lightbox" aria-hidden="true">&times;</button>
														</div>
														<div class='lightbox-content'>
															<img src="../../images/museoAlmeria_annotated_wireframe.jpg">
														</div>
												</div>

									<img class="spacer" src="../../images/museoalmeria_hf_wireframe.jpg" alt="Wireframe de alta fidelidad" />
									<p class="centered muted">Versión de alta fidelidad creada con OmniGraffle.</p>
								</div>
							</li>
						</ol>
						</div>
				</div>
			</div>
		</div>

		<hr/>		

		<!-- Tools Used -->
		<div class="row">
			<div class="span12">
				<h3 style="color:gray;">Herramientas usadas</h3>
			</div>
			<div class="offset2 span4">
				<!-- <img src="http://placehold.it/700x150"> -->
				<table class="table table-bordered">
					<tr>
						<td><p class="centered">Lápiz y Papel</p></td>
					</tr>
					<tr>
						<td><p class="centered">Balsamiq Mockups</p></td>
					</tr>
					<tr>
						<td><p class="centered">OmniGraffle</p></td>
					</tr>
  				</table>
			</div>
		</div>

		<hr/>

		<div class="row">
			<div class="span12">
				<h3 style="color:gray;">Detalles</h3>
			</div>
			<div class="span12">
				<dl class="dl-horizontal">
				  <dt>Fecha de Realización</dt>
				  <dd>Marzo - Mayo 2013</dd>
				  <dt>Etiquetas</dt>
				  <dd>
				      <a href="<?php echo $base . '/es/portfolio/categoria/diseno-de-interaccion'; ?>"><span class="label">Diseño de Interacción</span></a>
				  </dd>
				</dl>
			</div>
		</div>

<?php include("../includes/footer.php"); ?>