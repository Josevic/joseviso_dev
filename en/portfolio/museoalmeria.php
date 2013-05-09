<?php

	$page_title = "Portfolio > Museum of Almería Kiosk";
	$page_description = "Portfolio de Jose Viso | Interactive kiosk for the Museum of Almería";
	
	include("../includes/header.php"); ?>

	<div class="row hidden-desktop">
		<div class="span12">
			<ul class="breadcrumb">
				<li><a href="<?php echo $base; ?>/en/">Home</a> <span class="divider">/</span></li>
				<li><a href="<?php echo $base; ?>/en/portfolio"> Portfolio</a> <span class="divider">/</span></li>
				<li class="active">Museum of Almería Kiosk</li>	
		    </ul>
		</div>
	</div>

		<!-- Big Text -->	
		<div class="header spacer"><h1>Museum of Almería Kiosk</h1></div>
		
		<!-- Summary -->
		<div class="row spacer">
			<div class="hero-unit span7">
				<p>This project is a concept of interactive kiosk especially devised for the needs of the <a href="http://www.museosdeandalucia.es/culturaydeporte/museos/MAL/?lng=es">Museum of Almería</a>. It was created for the Interaction Design class of the <a href="http://estudis.uoc.edu/ca/masters-postgraus-especialitzacions/diploma-postgrau/informatica-multimedia-telecomunicacio/interaccio-persona-ordinador/presentacio">Postgraduate course on Human-Computer Interaction</a> of the Open University of Catalunya.</p>
				<br/>
				<!-- 
				<a class="btn btn-large btn-primary pull-right" href="https://dl.dropbox.com/u/3953712/SmartBite/test/screens/iPhoneDashboard.html">¡Prueba el prototipo interactivo!</a>
				-->
			</div>
			<div class="span3 pull-right hidden-phone">
				<img src="../../images/museoalmeria_front.png">
			</div>
		</div>

		<hr/>

		<!-- Design Process -->
		<div class="row">
			<div class="span12">
				<h3>Design opportunity</h3>
			</div>
			<div class="span12">
				<p>I made a visit to the museum to find not covered needs and design opportunities, and I got the following:
				<ul>
					<li><p>Very <b>few information about the</b> regular archeological <b>elements</b>. There were people asking themselves what were some of the objects on the showcases, and they didn't have where to go to resolve their doubts.</li>
					<li><p>There wasn't a way for the users to <b>give feedback to the museum</b> to improve, not even an information point.</p></li>
					<li><p>The temporary exhibition room had a lot of pieces of work, but almost no information about what they were or the authors (just a small piece of card with the name).</p></li>
					<li><p>I missed a <b>guiding thread</b> to indicate the visitors why certain objects were located in particular zones.</p></li>
				</ul>

			</div>
		</div>

		<hr/>

		<!-- Design Process -->
		<div class="row">
			<div class="span12">
				<h3>Process</h3>
			</div>
			<div class="span6">
				<ol>
					<li><p class="spacer">Creation of <b>personas</b> to represent the 3 main roles detected.</p></li>
					<li><p class="spacer">Definition of the <b>information architecture</b>. First I made an outline and after that I created the site map.</p></li>
					<li><p class="spacer">Definition of the <b>interaction flows</b> in the application. I identified the main tasks the users needed to do and throught different charts I designed how the application should work.</p></li>
					<li><p class="spacer">Creation of <b>sketches and wireframes</b>. First I tried to get a good number of alternatives for each screen. After that I chose an option and continued developing it with a higher level of fidelity.</p> </li>
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
					    <li data-target="#myCarousel" data-slide-to="5"></li>
					</ol>

					<!-- Carousel items -->  
				    <div class="carousel-inner">  
				    	
				        <div class="active item">
				        	<img src="../../images/museoAlmeria_personas.jpg" alt="Personas" />
				        	<div class="carousel-caption">
				        		<p>The three personas defined</p>
				        	</div>
				        </div>  
				        <div class="item">
				        	<img src="../../images/museoAlmeria_IA.jpg" alt="Information Architecture" />
				        	<div class="carousel-caption">
				        		<p>Information Architecture of the kiosk</p>
				        	</div>
				        </div>  
				        <div class="item">
				        	<img src="../../images/museoAlmeria_flowchart.jpg" alt="Flow charts" />
				        	<div class="carousel-caption">
				        		<p>Flow chart for one of the functions</p>
				        	</div>
				        </div> 
				        <div class="item">
				        	<img src="../../images/museoAlmeria_prototype.jpg" alt="First prototype" />
				        	<div class="carousel-caption">
				        		<p>Home screen for the first prototype</p>
				        	</div>
				        </div>   
				        <div class="item">
				        	<img src="../../images/museoAlmeria_mf-wireframe.jpg" alt="Mid-fidelity wireframe" />
				        	<div class="carousel-caption">
				        		<p>Annotated wireframe for the object information screen</p>
				        	</div>
				        </div> 
				        <div class="item">
				        	<img src="../../images/museoalmeria_hf-wireframe.jpg" alt="High-fidelity wireframe" />
				        	<div class="carousel-caption">
				        		<p>High-fidelity wireframe for the home screen</p>
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
				<h3>Tools used</h3>
			</div>
			<div class="offset4 span4">
				<!-- <img src="http://placehold.it/700x150"> -->
				<table class="table table-bordered">
					<tr>
						<td><p class="centered">Pen and Paper</p></td>
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
				<h3>Details</h3>
			</div>
			<div class="span12">
				<dl class="dl-horizontal">
				  <dt>Date</dt>
				  <dd>March - May 2013</dd>
				  <dt>Tags</dt>
				  <dd>
				      <a href="<?php echo $base . '/en/portfolio/category/interaction-design'; ?>"><span class="label">Interaction Design</span></a>
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