<?php

	$page_title = "Portfolio > Kiosco Museo Almería";
	$page_description = "Portfolio de Jose Viso | Kiosco interactivo para el museo de Almería";
	
	include("../includes/header.php"); ?>

	<div class="row">
		<div class="span12">
			<ul class="breadcrumb">
				<li><a href="<?php echo $base; ?>/es/">Inicio</a> <span class="divider">/</span></li>
				<li><a href="<?php echo $base; ?>/es/portfolio"> Portfolio</a> <span class="divider">/</span></li>
				<li class="active">Kiosco Museo Almería</li>	
		    </ul>
		</div>
	</div>

		<!-- Big Text -->	
		<div class="header spacer"><h1>Kiosco Museo Almería</h1></div>
		
		<!-- Summary -->
		<div class="row spacer">
			<div class="hero-unit span7">
				<p>Este proyecto es un concepto de kiosco interactivo ideado especialmente para las necesidades del <a href="http://www.museosdeandalucia.es/culturaydeporte/museos/MAL/?lng=es">Museo Arqueológico de Almería</a>. Fue realizado para la asignatura Diseño de Interacción del <a href="http://estudis.uoc.edu/ca/masters-postgraus-especialitzacions/diploma-postgrau/informatica-multimedia-telecomunicacio/interaccio-persona-ordinador/presentacio">Posgrado de Interacción Persona-Ordenador</a> de la Universitat Oberta de Catalunya.</p>
				<br/>
				<!-- 
				<a class="btn btn-large btn-primary pull-right" href="https://dl.dropbox.com/u/3953712/SmartBite/test/screens/iPhoneDashboard.html">¡Prueba el prototipo interactivo!</a>
				-->
			</div>
			<div class="span3 pull-right hidden-phone">
				<img src="../../images/project_intro.jpeg">
			</div>
		</div>

		<hr/>

		<!-- Design Process -->
		<div class="row">
			<div class="span12">
				<h3>Oportunidad de diseño</h3>
			</div>
			<div class="span12">
				<p>Tras una primera visita al museo para buscar posibles necesidades no cubiertas y oportunidades de diseño, se obtuvieron las siguientes:</p>

				<ul>
					<li><p>Muy <b>poca información sobre los elementos</b> arqueológicos permanentes. Había gente preguntandose qué eran algunos objetos de las vitrinas y no tenían a donde acudir para resolver sus dudas.</li>
					<li><b>No había forma de</b> que los usuarios pudiesen <b>dar feedback</b> al museo para mejorar. No había zona de atención al visitante o de información.</p></li>
					<li><p>La <b>sala de exposiciones temporales</b> tenía muchas obras pero prácticamente <b>ninguna información sobre qué se expone</b> o quiénes son los autores (tan sólo aparecía un pequeño cartel con el nombre).</p></li>
					<li><p>Se echaba en falta un <b>“hilo conductor”</b> que hiciese a los visitantes comprender mejor por qué ciertos objetos estaban expuestos en determinadas zonas.</p></li>
				</ul>

			</div>
		</div>

		<hr/>

		<!-- Design Process -->
		<div class="row">
			<div class="span12">
				<h3>Proceso seguido</h3>
			</div>
			<div class="span6">
				<ol>
					<li><p class="spacer">Creación de <b>personas</b> para representar los 3 perfiles principales detectados.</p></li>
					<li><p class="spacer">Definición de la <b>arquitectura de la información</b>. Primero se realizó un outline y posteriormente se creó un árbol de contenidos.</p></li>
					<li><p class="spacer">Definición de <b>flujos de interacción</b> en la aplicación. Se identificaron las tareas principales que los usuarios necesitaban realizar, y a través de esquemas se diseñaron cómo se desarrollarían dentro de la aplicación.</p></li>
					<li><p class="spacer">Realización de <b>sketches y wireframes</b>. Primero intenté obtener el mayor número de alternativas para cada una de las pantallas, posteriormente elegí una opción, y continué desarrollándola cada vez con un nivel de fidelidad mayor.</p> </li>
				</ol>
			</div>
			<div class="span6">
				<!-- <img src="http://placehold.it/500x350"> -->

				<div id="myCarousel" class="carousel slide"> 
                    <ol class="carousel-indicators">
					    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					    <li data-target="#myCarousel" data-slide-to="1"></li>
					    <li data-target="#myCarousel" data-slide-to="2"></li>
					    <li data-target="#myCarousel" data-slide-to="3"></li>
					    <li data-target="#myCarousel" data-slide-to="4"></li>
					    <!-- <li data-target="#myCarousel" data-slide-to="5"></li> -->
					</ol>

					<!-- Carousel items -->  
				    <div class="carousel-inner">  
				    	
				        <div class="active item">
				        	<img src="../../images/museoAlmeria_personas.jpg" alt="Personas" />
				        	<div class="carousel-caption">
				        		<p>Las tres personas definidas</p>
				        	</div>
				        </div>  
				        <div class="item">
				        	<img src="../../images/museoAlmeria_IA.jpg" alt="Arquitectura de la Información" />
				        	<div class="carousel-caption">
				        		<p>Arquitectura de la Información del kiosco</p>
				        	</div>
				        </div>  
				        <div class="item">
				        	<img src="../../images/museoAlmeria_flowchart.jpg" alt="Flujos de interacción" />
				        	<div class="carousel-caption">
				        		<p>Diagrama de flujo de interacción para una de las funciones</p>
				        	</div>
				        </div> 
				        <div class="item">
				        	<img src="../../images/museoAlmeria_prototype.jpg" alt="Primer prototipo" />
				        	<div class="carousel-caption">
				        		<p>Pantalla principal del primer prototipo</p>
				        	</div>
				        </div>   
				        <div class="item">
				        	<img src="../../images/museoAlmeria_mf-wireframe.jpg" alt="Wireframe de media fidelidad" />
				        	<div class="carousel-caption">
				        		<p>Wireframe anotado de la pantalla de información de objeto</p>
				        	</div>
				        </div> 

				        <!--
				        <div class="item">
				        	<img src="../../images/placeholder.gif" alt="Wireframes de alta fidelidad" />
				        	<div class="carousel-caption">
				        		<p>Wireframes de alta fidelidad</p>
				        	</div>
				        </div>  
				        --> 
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
				<h3>Herramientas usadas</h3>
			</div>
			<div class="offset4 span4">
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
				<h3>Detalles</h3>
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

		<!-- Indicator of location inside Portfolio -->
		<!--
		<ul class="breadcrumb hidden-phone spacer">
		  <li><a href="<?php echo $base; ?>/es/">Inicio</a> <span class="divider">/</span></li>
		  <li><a href="../portfolio">Portfolio</a> <span class="divider">/</span></li>
		  <li class="active">SmartBite</li>
		</ul>
	    -->

<?php include("../includes/footer.php"); ?>