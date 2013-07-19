<?php

	$page_title = "Portfolio > Street Rockstars";
	$page_description = "Portfolio de Jose Viso | Street Rockstars: Proyecto para encontrar a los mejores músicos callejeros del mundo.";
	
	include("../includes/header.php"); ?>

	<div class="row">
		<div class="span6">
			<ul class="breadcrumb">
				<li><a href="<?php echo $base; ?>/es/">Inicio</a> <span class="divider">></span></li>
				<li><a href="<?php echo $base; ?>/es/portfolio"> Portfolio</a> <span class="divider">></span></li>
				<li class="active">Street Rockstars</li>	
		    </ul>
		</div>
	</div>

		<!-- Big Text -->	
		<div class="header"><h1>Street Rockstars</h1></div>
		
		<!-- Summary -->
		<div class="row spacer">
			<div class="span9">
						<p class="lead"><em>Street Rockstars</em> es un proyecto que intenta recoger a los mejores músicos callejeros del mundo. No se trata únicamente de Rock, sino sobre crear un lugar donde encontrar a todos esos desconocidos que tocan en la calle y nadie ve, a parte de la gente que pasa en ese momento cerca.</p>
						<br/>
						<div class="video-container hidden-phone">
							<iframe width="560" height="315" src="http://www.youtube.com/embed/xlAoMDWxRfY" frameborder="0" allowfullscreen></iframe>
						</div>
						<br class="spacer"/>
						<p><a class="btn btn-large btn-primary" href="http://streetrockstars.com">¡Visita la página!</a></p>
						
			</div>
		</div>

		<hr/>

		<!-- Design Process -->
		<div class="row">
			<div class="span12">
				<h3>Proceso de Diseño</h3>
			</div>
			<div class="span7">
				<ol>
					<li>
						<p><b>Observación</b> en la calle del tipo de gente que se acerca a escuchar a los músicos callejeros: edad aproximada, género, nacionalidad, etc. Entrevistas con personas que encajaban en esa descripción.</p>
						<div class="centered">
							<img src="../../images/streetrockstars_observation.png" alt="Personas" />
							<p class="centered muted">Una de las actuaciones observadas.</p>
						</div>
					</li>
					<li>
						<p class="spacer">Creación de 2 <b>personas</b> (una primaria y una secundaria) y de <b>escenarios</b> típicos para cada uno de ellos. Generación de una lista de funcionalidades necesarias.</p>
						<div class="centered">
							<img src="../../images/streetrockstars_persona1.png" alt="Personas" />
						</div>
					</li>
					<li><p class="spacer">Comenzar a definir la <b>Arquitectura de la Información</b>:</p></li>
						<ol type="a">
							<li><p>Generación de <b>Blueprints</b> o Sitemaps.</p></li>
							<li>
								<p>Primeros <b>sketches en papel</b> con posibles alternativas de representación.</p>
								<div class="centered">
									<img src="../../images/streetrockstars_papersketch.JPG" alt="" />
								</div>
							</li>
								
							<li>
								<p class="spacer">Selección de las representaciones más apropiadas y desarrollo de <b>wireframes</b> más detallados, usando Balsamiq Mockups.</p>
								<div class="centered">
									<img src="../../images/streetrockstars_low_fidelity.png" alt="" />
								</div>
							</li>
						</ol>
					<li><p class="spacer">Definir las funcionalidades básicas, creación de un <b>prototipo interactivo</b> simple usando Axure y <b>pruebas de usuario</b>.</p></li>
					<li>
						<p class="spacer"><b>Ir refinando</b> los prototipos hasta obtener una versión que es intuitiva para los usuarios.</p>
						<div class="centered">
							<img src="../../images/streetrockstars_high_fidelity.png" alt="" />
						</div>
					</li>
					<li><p>Implementación.</p></li>
				</ol>
			</div>
		</div>

		<hr/>

		<!-- Tools Used -->
		<div class="row">
			<div class="span12">
				<h3>Herramientas Usadas</h3>
			</div>
			<div class="offset2 span4">
				<!-- <img src="http://placehold.it/700x150"> -->
				<table class="table table-bordered table-striped">
					<tr>
						<td><p>Lápiz y Papel</p></td>
					</tr>
					<tr>
						<td><p>OmniGraffle</p></td>
					</tr>
					<tr>
						<td><p>Balsamiq Mockups</p></td>
					</tr>
					<tr>
						<td><p>Adobe Fireworks CS5</p></td>
					</tr>
					<tr>
						<td><p>Axure RP</p></td>
					</tr>
  				</table>
			</div>
		</div>

		<hr/>

		<div class="row">
			<div class="span12">
				<h3>Detalles</h3>
			</div>
			<div class="span12">
				<dl class="dl-horizontal">
				  <dt>Fecha</dt>
				  <dd>Año 2012</dd>
				  <dt>Etiquetas</dt>
				  <dd>
				      <a href="<?php echo $base . '/es/portfolio/categoria/investigacion-de-usuarios'; ?>"><span class="label">Investigación de Usuarios</span></a>
				      <a href="<?php echo $base . '/es/portfolio/categoria/diseno-de-interaccion'; ?>"><span class="label">Diseño de Interacción</span></a>
				      <a href="<?php echo $base . '/es/portfolio/categoria/desarrollo'; ?>"><span class="label">Desarrollo</span></a>
				  </dd>
				</dl>
			</div>
		</div>

		<?php include("../includes/footer.php"); ?>