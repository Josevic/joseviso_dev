<?php

	$page_title = "Portfolio > Schiphol";
	$page_description = "Portfolio de Jose Viso | Schiphol: Página móvil del Aeropuerto de Amsterdam.";

	include("../includes/header.php"); ?>

	<div class="row">
		<div class="span6">
			<ul class="breadcrumb">
				<li><a href="<?php echo $base; ?>/es/">Inicio</a> <span class="divider">></span></li>
				<li><a href="<?php echo $base; ?>/es/portfolio"> Portfolio</a> <span class="divider">></span></li>
				<li class="active">Schiphol</li>	
		    </ul>
		</div>
	</div>

		<!-- Big Text -->	
		<div class="header"><h1>Schiphol</h1></div>
		
		<!-- Summary -->
		<div class="row spacer">
			<div class="hero-unit span10">
				<p>Contribuí en este proyecto ayudando a desarrollar la <a href="https://schiphol.mobi">web móvil</a> y el backend del <a href="http://en.wikipedia.org/wiki/Amsterdam_Airport_Schiphol">Aeropuerto de Ámsterdam - Schiphol</a> (uno de los más grandes de Europa), mientras trabajaba en <a href="http://m2mobi.com">M2Mobi</a>.</p>
			</div>
 		</div>

		<hr/>

		<!-- Design Process -->
		<div class="row">
			<div class="span12">
				<h3>Tareas realizadas</h3>
			</div>
			<div class="span6">
				<ul>
					<li><p class="spacer">Desarrollo e integración de funciones de redes sociales en la web móvil y en el backend, para conectar con las apps de iPhone y Android.</p></li>
					<li><p class="spacer">Desarrollo y mejora de un sistema de notificaciones existente, incluyendo notificaciones por email, SMS y push a iPhone y Android.</p></li>
					<li><p class="spacer">Ayuda en la mejora del sistema de traducciones para la web móvil.</p></li>
				</ul>
			</div>
			<div class="span6">
				<!-- <img src="http://placehold.it/500x350"> -->

				<div id="myCarousel" class="carousel slide">  
					<!-- Carousel items -->  
				    <div class="carousel-inner">  
				    	<div class="active item">
				        	<img src="../../images/schiphol_snlogin.png" alt="Page for signing in with social networks" border="1"/>
				        	<div class="carousel-caption">
				        		<p>Página para acceder a través de redes sociales</p>
				        	</div>
				        </div>  
				        <div class="item">
				        	<img src="../../images/schiphol_notifications.png" alt="Flight notifications page" />
				        	<div class="carousel-caption">
				        		<p>Página de notificaciones de vuelos</p>
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
				<h3>Herramientas y Metodologías usadas</h3>
			</div>
			<div class="offset4 span4">
				<!-- <img src="http://placehold.it/700x150"> -->
				<table class="table table-bordered">
					<tr>
						<td><p class="centered">PHP</p></td>
					</tr>
					<tr>
						<td><p class="centered">HTML</p></td>
					</tr>
					<tr>
						<td><p class="centered">CSS</p></td>
					</tr>
					<tr>
						<td><p class="centered">Git</p></td>
					</tr>
					<tr>
						<td><p class="centered">Framework basado en <a href="http://ellislab.com/codeigniter">CodeIgniter</a></p></td>
					</tr>
					<tr>
						<td><p class="centered">Peer Review</p></td>
					</tr>
					<tr>
						<td><p class="centered">Scrum</p></td>
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
				  <dd>Abril 2011 - Abril 2012</dd>
				
				  <dt>Etiquetas</dt>
				  <dd>
				      <a href="<?php echo $base . '/es/portfolio/categoria/desarrollo'; ?>"><span class="label">Desarrollo</span></a>
				  </dd>
				</dl>
			</div>
		</div>

	<?php include("../includes/footer.php"); ?>