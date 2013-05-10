<?php

	$page_title = "Portfolio > Eva Criado";
	$page_description = "Portfolio de Jose Viso | Rediseño de Evacriado.com";
	
	include("../includes/header.php"); ?>

	<div class="row">
		<div class="span6">
			<ul class="breadcrumb">
				<li><a href="<?php echo $base; ?>/es/">Inicio</a> <span class="divider">></span></li>
				<li><a href="<?php echo $base; ?>/es/portfolio"> Portfolio</a> <span class="divider">></span></li>
				<li class="active">Eva Criado</li>	
		    </ul>
		</div>
	</div>


		<!-- Big Text -->	
		<div class="header"><h1>Eva Criado</h1></div>
		
		<!-- Summary -->
		<div class="row spacer">
			<div class="hero-unit span7">
				<p>Rediseño de la web ya existente del centro de belleza y masaje Eva Criado.</p> 
			</div>
		</div>

		<hr/>

		<!-- Design Opportunity -->
		<div class="row">
			<div class="span12">
				<h3>Oportunidad de diseño y estrategia</h3>
			</div>
			<div class="span12">
				<p>Este centro de belleza y masaje me contactó con la necesidad de rediseñar su página web para intentar llegar mejor a sus clientes actuales,
					así como ampliarlo captando a otros de unas características distintas.</p>
				<p>Una de las limitaciones que tenía este proyecto era el presupuesto disponible, ya que se trataba de un negocio pequeño. Otra limitación era la falta de un estudio
					sobre sus usuarios habituales.</p>

				<p>Tras varias entrevistas y observaciones en el centro, se detectaron las siguientes oportunidades de mejora:</p>	
				<ul>
					<li><p>Mostrar <b>más información clara</b> sobre el negocio, los servicios ofrecidos y diferenciación respecto a otros competidores.</p></li>
					<li><p>Posibilidad de <b>automatizar ciertas acciones</b>: como reserva de cita y actualización de ofertas.</p></li>
					<li><p><b>Adaptarse a los distintos dispositivos</b>: ordenador de escritorio, smartphone y tablet. Previamente sólo se disponía de una versión apropiada para ordenadores de escritorio.</p></li>
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
					<li><p><b>Evaluación Heurística</b> de la web existente para detectar problemas. Estudio en produndidad considerando las <a href="http://www.useit.com/papers/heuristic/heuristic_list.html">10 Heurísticas de Usabilidad</a> de <a href="http://en.wikipedia.org/wiki/Jakob_Nielsen_(usability_consultant)">Jakob Nielsen</a>, teniendo en cuenta la severidad e importancia de cada un de los problemas encontrados</b>.</p></li>
					<li><p class="spacer"><b/>Conocer a grandes rasgos el campo de dominio</b>: Investigación general sobre el área, sobre los diferentes tratamientos y servicios que aparecen en la web existente. En definitiva, saber qué hace el negocio exáctamente.</p></li>
					<li><p class="spacer"><b>Conocer los objetivos y los clientes</b>. Estudio de lo que quería conseguir realmente el negocio, así como de los clientes actuales y sus características. Uso de personas y storyboards para identificar qué tareas necesitaban realizar realmente los usuarios y la forma más natural de hacerlas.</p></li>
					<li><p class="spacer"><b>Redefinición de la Arquitectura de la Información</b> del sitio. Uso de la técnica de <b>card sorting</b> para detectar la organización más natural desde la perspectiva del usuario para los diferentes servicios y tratamientos.</p></li>
					<li><p class="spacer">Creación de sketches en papel, wireframes y prototipos de baja y alta fidelidad. Para este proyecto usé un <b>sketchboard</b>, tanto para uso personal, como para la comunicación con el cliente.</p></li>
					<li><p class="spacer">Pruebas de usuarios y un montón de iteraciones.</p></li>
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
				        	<img src="../../images/sketchboard.jpg" alt="Sketchboard" />
				        	<div class="carousel-caption">
				        		<p>Sketchboard</p>
				        	</div>
				        </div>  
				        <div class="item">
				        	<img src="../../images/evacriado_personas.gif" alt="Personas" />
				        	<div class="carousel-caption">
				        		<p>Las dos personas definidas: una primaria y una secundaria</p>
				        	</div>
				        </div>  
				        <div class="item">
				        	<img src="../../images/evacriado_storyboards.jpg" alt="Storyboards" />
				        	<div class="carousel-caption">
				        		<p>Storyboards creados para definir un contexto de uso</p>
				        	</div>
				        </div>  
				        <div class="item">
				        	<img src="../../images/evacriado_ia.jpg" alt="Information Architecture" />
				        	<div class="carousel-caption">
				        		<p>Aproximación a grandes rasgos de la Arquitectura de la Información</p>
				        	</div>
				        </div>  
				        <div class="item">
				        	<img src="../../images/evacriado_low-fi_wireframes.jpg" alt="Low-fidelity wireframes" />
				        	<div class="carousel-caption">
				        		<p>Tres wireframes alternativos de baja fidelidad para obtener el primer feedback del cliente y los usuarios</p>
				        	</div>
				        </div>  
				    	<div class="item">
				        	<img src="../../images/evacriado_home_before.jpg" alt="Página principal" />
				        	<div class="carousel-caption">
				        		<p>Antes del rediseño</p>
				        	</div>
				        </div>    
				        <div class="item">
				        	<img src="../../images/evacriado_home_after.gif" alt="Después" />
				        	<div class="carousel-caption">
				        		<p>Después del rediseño</p>
				        	</div>
				        </div>    
				    	<div class="item">
				        	<img src="../../images/evacriado_he.jpg" alt="Hallazgos" />
				        	<div class="carousel-caption">
				        		<p>Algunos de los hallazgos obtenidos con la Evaluación Heurística</p>
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
				<h3>Herramientas usadas</h3>
			</div>
			<div class="offset4 span4">
				<!-- <img src="http://placehold.it/700x150"> -->
				<table class="table table-bordered">
					<tr>
						<td><p class="centered"><a href="http://www.nngroup.com/articles/ten-usability-heuristics/">10 Heurísticas de Usabilidad</a> (Jakob Nielsen)</p></td>
					</tr>
					<tr>
						<td><p class="centered">Card sorting</p></td>
					</tr>
					<tr>
						<td><p class="centered">Lápiz y Papel</p></td>
					</tr>
					<tr>
						<td><p class="centered">Balsamiq Mockups</p></td>
					</tr>
					<tr>
						<td><p class="centered">Axure</p></td>
					</tr>
					<tr>
						<td><p class="centered">Sketchboard</p></td>
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
				  <dd>Octubre 2012 - Enero 2013</dd>
				
				  <dt>Etiquetas</dt>
				  <dd>
				      <a href="<?php echo $base . '/es/portfolio/categoria/investigacion-de-usuarios'; ?>"><span class="label">Investigación de Usuarios</span></a>
				      <a href="<?php echo $base . '/es/portfolio/categoria/evaluacion-heuristica'; ?>"><span class="label">Evaluación Heurística</span></a>
				      <a href="<?php echo $base . '/es/portfolio/categoria/diseno-de-interaccion'; ?>"><span class="label">Diseño de Interacción</span></a>
    			  </dd>
				</dl>
			</div>
		</div>
	 
	 <?php include("../includes/footer.php"); ?>