<?php

	$page_title = "Portfolio > SmartBite";
	$page_description = "Portfolio de Jose Viso | Smartbite: Una app para comer sano.";
	
	include("../includes/header.php"); ?>

	<div class="row">
		<div class="span6">
			<ul class="breadcrumb">
				<li><a href="<?php echo $base; ?>/es/">Inicio</a> <span class="divider">></span></li>
				<li><a href="<?php echo $base; ?>/es/portfolio"> Portfolio</a> <span class="divider">></span></li>
				<li class="active">SmartBite</li>	
		    </ul>
		</div>
	</div>

		<!-- Big Text -->	
		<div class="header"><h1>SmartBite</h1></div>
		
		<!-- Summary -->
		<div class="row spacer">
			<div class="span12">
				<div class="row">
					<div class="span7">
						<p class="lead"><em>SmartBite</em> es una aplicación de dietas para smartphone enfocada en motivar a los usuarios a no abandonar, adaptándo la dieta a la comida preferida de cada persona y proporcionando una amplia variedad de alternativas.</p>
						<p class="lead">Creado durante el <a href="http://hci-class.org">curso de Interacción-Persona Ordenador</a> ofrecido por <a href="https://www.coursera.org/stanford">Coursera - Stanford University</a>.</p>
						<br/>
						<a class="btn btn-large btn-primary" href="https://dl.dropbox.com/u/3953712/SmartBite/test/screens/iPhoneDashboard.html">¡Prueba el prototipo interactivo!</a>
					</div>
					<div class="span5">
						<div class="pull-right hidden-phone">
							<img src="../../images/smartbite.jpg">
						</div>
					</div>
				</div>
			</div>
			
		</div>

		<hr/>

		<!-- Design Opportunity -->
		<div class="row">
			<div class="span12">
				<h3 style="color:gray">Oportunidad de diseño</h3>
			</div>
			<div class="span6">
				<p>La primera parte de este proyecto fue buscar necesidades no cubiertas u oportunidades de diseño a mi alrededor relacionadas a un tema a mi elección. 
				   Me decidí por observar y entrevistar a <b>gente que hace dieta</b> y ver cómo decide qué comida puede o debería comer, cómo obtiene motivación y cómo hace para continuar con la dieta.</p>

				<p>Los problemas y oportunidades detectados fueron los siguientes:</p>
				<ul>
					<li><p><b>Falta de motivación para seguir</b> con la dieta tras unos días.</p></li>
					<li><p>Las personas teminan cansándose de tener <b>pocas alternativas para cada comida</b> (rutina a la hora de comer).</p></li>
					<li><p>Dificultad para <b>saber si un alimento es apropiado</b> para la dieta que se está siguiendo.</p></li>
					<li><p><b>Falta de tiempo</b> para poder cocinar y necesidad de encontrar recetas específicas.</p></li>
				</ul>
			</div>
			<div class="span6">
				<img src="../../images/smartbite_observation.jpg" alt="" />
				<p class="centered muted">Una de las personas observadas para encontrar oportunidades de diseño.</p>
			</div>
		</div>

		<hr/>

		<!-- Design Process -->
		<div class="row">
			<div class="span7">
				<h3 style="color:gray">Proceso seguido</h3>
			</div>
			<div class="span7">
				<p>Tras haber detectado una serie de oportunidades de mejora, comencé a diseñar una solución que resolviese dichos problemas. Para ello seguí los siguientes pasos:</p>
				<ol>
					<li><p class="spacer">Creé un <b>punto de vista</b> para dirigir el proceso en todo momento:</p>
						 <blockquote><p>Sin apoyo y motivación, las dietas son una lata. Las mejoras de las tecnologías móviles e Internet pueden ser una gran herramienta de ayuda.</p></blockquote>
					</li>

					<li>
						<p class="spacer">Elaboré <b>storyboards</b> para representar el contexto de uso de la aplicación: <br/>
							<div class="centered">
								<img src="../../images/smartbite_storyboard.png" alt="Storyboard" />
							</div>
						</p>
					</li>
					<li>
						<p class="spacer">Realicé bocetos de la estructura, elegí una dirección concreta para continuar desarrollando la idea y creé varios <b>prototipos rápidos</b> alternativos con <a href="http://www.balsamiq.com/">Balsamiq Mockups</a>.<br/>
							<div class="centered">
								<img src="../../images/smartbite_lowfidelity2.png" alt="" />
							</div>
						</p>
					</li>
					<li>
						<p class="spacer">A continuación realicé y recibí <b>evaluaciones heurísticas</b> sobre dichos prototipos. Con ese feedback realicé las modificaciones correspondientes para mejorarlos.</p>
					</li>
					<li>
						<p class="spacer">Con la seguridad de que estaba en la dirección correcta y se habían solucionado los problemas más graves de usabilidad, creé un <b>prototipo interactivo</b> de más alta fidelidad usando <a href="http://www.justinmind.com/">Justinmind</a>.
							<div class="centered">
								<img src="../../images/smartbite_highfidelity.png" alt="" />
							</div>
						</p>
					</li>
					<li>
						<p class="spacer">Más adelante elaboré un plan de evaluación, realicé <b>Pruebas de Usuario</b> con 3 personas usando el prototipo creado anteriormente (y otra alternativa de diseño para comparar), analicé los resultados y planifiqué la siguiente iteración de diseño.
							<div class="centered">
								<img src="../../images/smartbite_usertest.jpg" alt="" />
							</div>
						</p>
					</li>
					<li>
						<p class="spacer">Por último incorporé los cambios motivados por las pruebas de usuario en la aplicación. El más significativo fue el simplificar el proceso de registro.<br/>(<a href="https://dl.dropbox.com/u/3953712/SmartBite/test/screens/iPhoneDashboard.html">Prototipo interactivo</a> modificado tras ese paso).</p>
					</li>
				</ol>
			</div>
		</div>
		<!-- </div> -->

		<hr/>

		<!-- Tools Used -->
		<div class="row">
			<div class="span7">
				<h3 style="color:gray">Herramientas usadas</h3>
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
						<td><p class="centered">Justinmind</p></td>
					</tr>
  				</table>
			</div>
		</div>

		<hr/>

		<div class="row">
			<div class="span12">
				<h3 style="color:gray">Detalles</h3>
			</div>
			<div class="span12">
				<dl class="dl-horizontal">
				  <dt>Fecha de Realización</dt>
				  <dd>Mayo - Julio 2012</dd>
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