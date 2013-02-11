<?php

	$page_title = "Portfolio > SuperSimple Mobile";
	$page_description = "Portfolio de Jose Viso | SuperSimple Mobile: Concepto de un teléfono móvil para personas a las que no les gusta la tecnología.";
	
	include("../includes/header.php"); ?>

	<div class="row hidden-desktop">
		<div class="span6">
			<ul class="breadcrumb">
				<li><a href="<?php echo $base; ?>/es/">Inicio</a> <span class="divider">/</span></li>
				<li><a href="<?php echo $base; ?>/es/portfolio"> Portfolio</a> <span class="divider">/</span></li>
				<li class="active">SuperSimple Mobile</li>	
		    </ul>
		</div>
	</div>

		<!-- Big Text -->	
		<div class="header spacer"><h1>SuperSimple Mobile</h1></div>
		
		<!-- Summary -->
		<div class="row spacer">
			<div class="hero-unit span10">
				<p>Concepto de un teléfono móvil diseñado especialmente para gente que no está acostumbrada a las últimas tecnologías. Simple al máximo: presentar la mejor Experiencia de Usuario posible para llamar y recibir llamadas.</p>
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
					<li><p class="spacer"><b>Brainstorming</b>. Sketches de posibles alternativas.</p></li>
					<li><p class="spacer">Desarrollo de dos <b>prototipos de papel</b> alternativos muy básicos.</p></li>
					<li class="hidden-phone">
						<p class="spacer"><b>Pruebas de Usuario</b> con personas representativas de a quienes va dirigido el producto:
						<iframe style="margin-top:15px" width="340" height="230" src="http://www.youtube.com/embed/epEz5XPhyeQ" frameborder="0" allowfullscreen></iframe></p>
					</li>
					<li class="visible-phone">
						<p class="spacer"><b>Pruebas de Usuario</b> con personas representativas de a quienes va dirigido el producto:</p>
						<p><small><a href="http://youtu.be/epEz5XPhyeQ">[Video de las Pruebas de Usuario]</a></small></p>
					</li>
					<li><p class="spacer">Tras varias iteraciones en ambos prototipos, llegué a la conclusión de que el que tenía botones físicos es más apropiado, ya que encaja mejor con el modelo mental de los usuarios.</p></li>
				</ol>
			</div>
			<div class="span6">
				<!-- <img src="http://placehold.it/500x350"> -->

				<div id="myCarousel" class="carousel slide">  
					<!-- Carousel items -->  
				    <div class="carousel-inner">  
				    	<div class="active item">
				        	<img src="../../images/supersimplemobile1.jpg" alt="Design alternative 1" />
				        	<div class="carousel-caption">
				        		<p>Primera alternativa de diseño</p>
				        	</div>
				        </div>  
				        <div class="item">
				        	<img src="../../images/supersimplemobile2.jpg" alt="Design alternative 2" />
				        	<div class="carousel-caption">
				        		<p>Segunda alternativa de diseño</p>
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
						<td><p class="centered">Lápiz</p></td>
					</tr>
					<tr>
						<td><p class="centered">Papel</p></td>
					</tr>
					<tr>
						<td><p class="centered">Rotuladores</p></td>
					</tr>
					<tr>
						<td><p class="centered">Tijeras</p></td>
					</tr>
					<tr>
						<td><p class="centered">Post-its</p></td>
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
				  <dd>Agosto 2012</dd>
				  <dt>Etiquetas</dt>
				  <dd>
				      <a href="<?php echo $base . '/es/portfolio/categoria/investigacion-de-usuarios'; ?>"><span class="label">Investigación de Usuarios</span></a>
				      <a href="<?php echo $base . '/es/portfolio/categoria/diseno-de-interaccion'; ?>"><span class="label">Diseño de Interacción</span></a>
				  </dd>
				</dl>
			</div>
		</div>

<!-- Indicator of location inside Portfolio -->
		<ul class="breadcrumb hidden-phone spacer">
		  <li><a href="<?php echo $base; ?>/es/">Inicio</a> <span class="divider">/</span></li>
		  <li><a href="../portfolio">Portfolio</a> <span class="divider">/</span></li>
		  <li class="active">SuperSimple Mobile</li>
		</ul>

	<?php include("../includes/footer.php"); ?>