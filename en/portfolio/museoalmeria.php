<?php

	$page_title = "Portfolio > Museum of Almería Kiosk";
	$page_description = "Portfolio de Jose Viso | Interactive kiosk for the Museum of Almería";
	
	include("../includes/header.php"); ?>

	<div class="row">
		<div class="span12">
			<ul class="breadcrumb">
				<li><a href="<?php echo $base; ?>/en/">Home</a> <span class="divider">></span></li>
				<li><a href="<?php echo $base; ?>/en/portfolio"> Portfolio</a> <span class="divider">></span></li>
				<li class="active">Museum of Almería Kiosk</li>	
		    </ul>
		</div>
	</div>

		<!-- Big Text -->	
		<div class="header"><h1>Museum of Almería Kiosk</h1></div>
		
		<!-- Summary -->
		<div class="row spacer">
			<div class="span12">
				<div class="row">
					<div class="span7">
						<p class="lead">This project is a concept of interactive kiosk especially devised for the needs of the <a href='http://www.museosdeandalucia.es/culturaydeporte/museos/MAL/?lng=es'>Museum of Almería</a>.</p>
						<p class="lead">It was created for the Interaction Design class of the <a href='http://estudis.uoc.edu/ca/masters-postgraus-especialitzacions/diploma-postgrau/informatica-multimedia-telecomunicacio/interaccio-persona-ordinador/presentacio'>Postgraduate course on Human-Computer Interaction</a> of the Open University of Catalunya.</p>
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
				<h3 style="color:gray;">Design opportunity</h3>
				<div class="row">
					<div class="span7">
						<p>I made a visit to the museum to find not covered needs and design opportunities, and I got the following:</p>
						<ul>
							<li><p>Very <b>few information about the</b> regular archeological <b>elements</b>. There were people asking themselves what were some of the objects on the showcases, and they didn't have where to go to resolve their doubts.</li>
							<li><p>There wasn't a way for the users to <b>give feedback to the museum</b> to improve, not even an information point.</p></li>
							<li><p>The temporary exhibition room had a lot of pieces of work, but almost no information about what they were or the authors (just a small piece of card with the name).</p></li>
							<li><p>I missed a <b>guiding thread</b> to indicate the visitors why certain objects were located in particular zones.</p></li>
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
				<h3 style="color:gray;">Process</h3>
				<div class="row">
					<div class="span7">
						<ol>
							<li>
								<p class="spacer">Creation of <b>personas</b> to represent the 3 main roles detected.</p>
								<div class="centered">
									<img src="../../images/museoAlmeria_personas.png" alt="Personas" />
								</div>
							</li>

							<li>
								<p class="spacer">Definition of the <b>information architecture</b>. First I made an outline and after that I created the site map.</p>
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
								<p class="spacer">Definition of the <b>interaction flows</b> in the application. I identified the main tasks the users needed to do and throught different charts I designed how the application should work.</p>
								<div class="centered">
									<img src="../../images/museoAlmeria_flowchart_small.png" alt="Flujos de interacción" />
								</div>
							</li>
							<li>
								<p class="spacer">Creation of <b>sketches and wireframes</b>. First I tried to get a good number of alternatives for each screen. After that I chose an option and continued developing it with a higher level of fidelity.</p>
								<div class="centered">
									<img src="../../images/museoAlmeria_sketches.JPG" alt="Sketch en papel" />
									<p class="centered muted">First sketches of design alternatives for the home screen.</p>
								</div>
								<div class="spacer centered">
									<img src="../../images/museoAlmeria_lowfi_wireframe.png" alt="Primer prototipo" />
									<p class="centered muted">Once an alternative was picked up, I created a version with Balsamiq Mockups.</p>
								</div>
								<div class="spacer centered">
												<a data-toggle="lightbox" href="#annotated_wireframe_big">
													<img src="../../images/museoAlmeria_annotated_wireframe_small.jpg" class="img-polaroid" alt="Click to make bigger">
												</a>
												<p class="centered muted">Annotated wireframe explaining the "Detailed information about object" screen.</p>
												<div id="annotated_wireframe_big" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
														<div class='lightbox-header'>
															<button type="button" class="close" data-dismiss="lightbox" aria-hidden="true">&times;</button>
														</div>
														<div class='lightbox-content'>
															<img src="../../images/museoAlmeria_annotated_wireframe.jpg">
														</div>
												</div>

									<img class="spacer" src="../../images/museoalmeria_hf_wireframe.jpg" alt="Wireframe de alta fidelidad" />
									<p class="centered muted">High-fidelity version created using OmniGraffle.</p>
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
				<h3 style="color:gray;">Tools used</h3>
			</div>
			<div class="offset2 span4">
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
				<h3 style="color:gray;">Details</h3>
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

<?php include("../includes/footer.php"); ?>