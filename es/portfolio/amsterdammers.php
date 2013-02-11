<?php

	$page_title = "Portfolio > Amsterdammers";
	$page_description = "Portfolio de Jose Viso | Amsterdammers: Proyecto fotográfico sobre gente de Amsterdam.";
	$number_of_photos = 33;

	include("../includes/header.php"); ?>

	<div class="row hidden-desktop">
		<div class="span6">
			<ul class="breadcrumb">
				<li><a href="<?php echo $base; ?>/es/">Inicio</a> <span class="divider">/</span></li>
				<li><a href="<?php echo $base; ?>/es/portfolio"> Portfolio</a> <span class="divider">/</span></li>
				<li class="active">Amsterdammers</li>	
		    </ul>
		</div>
	</div>


		<!-- Big Text -->	
		<div id="top" class="header spacer"><h1>Amsterdammers</h1></div>
		
		<!-- Summary -->
		<div class="row spacer">
			<div class="hero-unit span5">
				<p><em>Amsterdammers</em> es un proyecto fotográfico que intenta reflejar el tipo de personas que uno se puede encontrar cualquier sábado por la mañana en Ámsterdam.</p>			
			</div>
			<div class="span5">
				<img src="../../images/amsterdammers_front.jpg" class="img-rounded">
			</div>
		</div>

		<hr/>

		<!-- Process -->
		<div class="row">
			<div class="span12">
				<h3>Por qué y Cómo</h3>
				<p>Decidí hacer este proyecto para reflejar la diversidad de gente que vive en los Países Bajos y especialmente en Ámsterdam. Otra cosa que quería mostrar es cómo la gente de todas las edades usa la bicicleta a diario. En España yo estaba acostumbrado a ver sólo a alguna gente joven usándola, y allí desde el primer día, eso me impactó muchísimo. Más que una costumbre es un estilo de vida. Y me encanta.</p>
				<p>Para conseguir la mayoría de las fotos, simplemente me senté de espaldas a una réplica de un barco antiguo durante unos minutos y tomé fotos de la gente que pasaba frente a mí. Otras cuantas fotos están tomadas cerca de un carril bici. Un último grupo de fotos son sólo gente que me fui encontrando en el camino de vuelta a casa y que creo que representa lo que es esa ciudad.</p>
			</div>
		</div>

		<!-- Loop for loading all the photos -->
		<?php for ($i=0;$i<=$number_of_photos;$i++): ?>
		<div class="row spacer">
			<div class="span12 centered">
				<a data-toggle="lightbox" href="#photo<?php echo $i; ?>_big">
					<img src="../../images/amsterdammers/<?php echo $i; ?>_small.jpg" class="img-polaroid" alt="Click to view the lightbox">
				</a>
				<div id="photo<?php echo $i; ?>_big" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
						<div class='lightbox-header'>
							<button type="button" class="close" data-dismiss="lightbox" aria-hidden="true">&times;</button>
						</div>
						<div class='lightbox-content'>
							<img src="../../images/amsterdammers/<?php echo $i; ?>.jpg">
						</div>
				</div>
			</div>
		</div>
		<?php endfor; ?>

		<hr/>

		<div class="row">
			<div class="span12">
				<h3>Detalles</h3>
			</div>
			<div class="span12">
				<dl class="dl-horizontal">
				  <dt>Fecha de Realización</dt>
				  <dd>Marzo 2012</dd>
				
				  <dt>Etiquetas</dt>
				  <dd>
				      <a href="<?php echo $base . '/en/portfolio/category/otro'; ?>"><span class="label">Otro</span></a>
				      <span class="label label-important">Fotografía</span>
				  </dd>
				</dl>
			</div>
		</div>

		<!-- Indicator of location inside Portfolio -->
		<ul class="breadcrumb hidden-phone spacer">
		  <li><a href="<?php echo $base; ?>/es/">Inicio</a> <span class="divider">/</span></li>
		  <li><a href="../portfolio">Portfolio</a> <span class="divider">/</span></li>
		  <li class="active">Amsterdammers</li>
		</ul>	

	 <?php include("../includes/footer.php"); ?>