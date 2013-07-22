<?php

	$page_title = "Portfolio > Eva Criado";
	$page_description = "Jose Viso's portfolio | Redesign of Evacriado.com";
	
	include("../includes/header.php"); ?>

	<div class="row">
		<div class="span6">
			<ul class="breadcrumb">
				<li><a href="<?php echo $base; ?>/en/">Home</a> <span class="divider">></span></li>
				<li><a href="<?php echo $base; ?>/en/portfolio"> Portfolio</a> <span class="divider">></span></li>
				<li class="active">Eva Criado</li>	
		    </ul>
		</div>
	</div>


		<!-- Big Text -->	
		<div class="header"><h1>Eva Criado</h1></div>
		
		<!-- Summary -->
		<div class="row spacer">
			<div class="span12">
				<div class="row">
					<div class="span7">
						<p class="lead">Redesign of the existing Eva Criado's beauty and massage center website (El Ejido, Almería).</p>
						<p class="lead">Study of the business' clients, responsive design to adapt to smartphones, tablets and desktop computers.</p> 
						<p class="lead">Strategic and technical consulting.</p>
					</div>
					<div class="span5">
						<div class="pull-right hidden-phone">
							<img src="../../images/evacriado_present.png" alt="Capture of the home page">
						</div>
					</div>
				</div>
			</div>
		</div>

		<hr/>

		<!-- Design Opportunity -->
		<div class="row">
			<div class="span12">
				<h3>Design opportunity and Strategy</h3>
				<div class="row">
					<div class="span7">
						<p>This beauty center contacted me because they had the need to redesign their webpage to try to reach in a better way their current clients, and wanted to gain new ones with different characteristics.</p>
		 				<p>One of the limitations was the budget, because it was a small business. Another limitation was they didn't have any study about their regular clients.</p>
						<p>After several interviews and observations in the center, I detected the following opportunities of improvement:</p>	
							<ul>
								<li><p>Need of showing a <b>more clear information</b> about the business, offered services and what make them different from other competitors.</p></li>
								<li><p>Possibility of <b>automate some actions</b>: as reservations and update offers.</p></li>
								<li><p><b>Adaptation to new devices</b>: desktop, smartphone and tablet. Previously the webpage was appropriate just for desktop computers.</p></li>
							</ul>
					</div>
					<div class="span5">
						<img class="pull-right" src="../../images/moleskine.jpg" alt="Photo of a notebook" />
					</div>
				</div>
			</div>
		</div>
		<hr/>

		<!-- Design Process -->
		<div class="row">
			<div class="span12">
				<h3>Process</h3>
				<div class="row">
					<div class="span7">
						<ol>
							<li>
								<p>
									<b>Heuristic Evaluation</b> of the existing website to detect problems. Deep evaluation considering the <a href="http://www.useit.com/papers/heuristic/heuristic_list.html">10 Usability Heuristics</a> by <a href="http://en.wikipedia.org/wiki/Jakob_Nielsen_(usability_consultant)">Jakob Nielsen</a>, noting the severity and importance of each one of them.
								</p>
								<p>**<a href="HE_EvaSpa.pdf">Check out the heuristic evaluation</a>**.</p>
									<!-- 
									<div class="centered">

										<a data-toggle="lightbox" href="#he_big">
											<img src="../../images/evacriado_he.png" class="img-polaroid" alt="Click to make bigger" width="500">
										</a>
										<div id="he_big" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
												<div class='lightbox-header'>
													<button type="button" class="close" data-dismiss="lightbox" aria-hidden="true">&times;</button>
												</div>
												<div class='lightbox-content'>
													<img src="../../images/evacriado_he.png">
												</div>
										</div>
									</div>
										-->
							
							</li>
							
							<li>
								<p class="spacer">
									<b/>Know roughly the domain field</b>: General research about this area, what are the different treatments and services that appear in the website and what the business do.
								</p>
							</li>
							<li>
								<p class="spacer">
									<b>Know the goals and the clients</b> of the business. Creation of personas and storyboards.
								</p>
									<div class="centered">
												<a data-toggle="lightbox" href="#persona1_big">
													<img src="../../images/Evacriado_personas_small.png" class="img-polaroid" alt="Click to make bigger">
												</a>
												<div id="persona1_big" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
														<div class='lightbox-header'>
															<button type="button" class="close" data-dismiss="lightbox" aria-hidden="true">&times;</button>
														</div>
														<div class='lightbox-content'>
															<img src="../../images/evacriado_personas.png">
														</div>
												</div>
									</div>
									
									<div class="spacer centered">

												<a data-toggle="lightbox" href="#storyboard_big">
													<img src="../../images/evacriado_storyboard_small.jpg" class="img-polaroid" alt="Click to make bigger">
												</a>
												<div id="storyboard_big" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
														<div class='lightbox-header'>
															<button type="button" class="close" data-dismiss="lightbox" aria-hidden="true">&times;</button>
														</div>
														<div class='lightbox-content'>
															<img src="../../images/evacriado_storyboard.jpg">
														</div>
												</div>
									</div>	
								
							</li>
							<li>
								<p class="spacer">
									<b>Redefinition of the Information Architecture</b> of the site. Use of <b>card sorting</b> to detect the most natural organization from user's perspective for the different services and treatments.
									<div class="centered">
										<img src="../../images/evacriado_ia.jpg" alt="Information Architecture" />
									</div>
								</p>
							</li>
							<li>
								<p class="spacer">
									Creation of paper sketches, low, mid and high-fidelity wireframes and prototypes.
									<div class="centered">
										<img src="../../images/evacriado_lowfi_wireframes.jpg" alt="Low-fidelity wireframes" />
										<img class="spacer" src="../../images/evacriado_home_after.jpg" alt="Homepage redesigned" />
									</div>
								</p>
							</li>
							<li>
								<p class="spacer">User tests and several iterations.</p>
								<p>For this project I made use of a <b>sketchboard</b>, for self-use and communicating with the client.
									<div class="centered">
										<img src="../../images/sketchboard.jpg" alt="Sketchboard" />
									</div>
								</p>
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
				<h3>Tools used</h3>
				<div class="row">
					<div class="offset2 span4">
						<!-- <img src="http://placehold.it/700x150"> -->
						<table class="table table-bordered table-striped">
							<tr>
								<td><p><a href="http://www.nngroup.com/articles/ten-usability-heuristics/">10 Usability Heuristics</a> (Jakob Nielsen)</p></td>
							</tr>
							<tr>
								<td><p>Card sorting</p></td>
							</tr>
							<tr>
								<td><p>Pen and Paper</p></td>
							</tr>
							<tr>
								<td><p>Balsamiq Mockups</p></td>
							</tr>
							<tr>
								<td><p>Axure</p></td>
							</tr>
							<tr>
								<td><p>Photoshop</p></td>
							</tr>
							<tr>
								<td><p>Sketchboard</p></td>
							</tr>
		  				</table>
					</div>
				</div>
			</div>
			
		</div>

		<hr/>

		<div class="row">
			<div class="span12">
				<h3>Details</h3>
				<div class="row">
					<div class="span12">
						<dl class="dl-horizontal">
						  <dt>Date</dt>
						  <dd>October 2012 - January 2013</dd>
						
						  <dt>Tags</dt>
						  <dd>
						      <a href="<?php echo $base . '/en/portfolio/category/user-research'; ?>"><span class="label">User Research</span></a>
						      <a href="<?php echo $base . '/en/portfolio/category/heuristic-evaluation'; ?>"><span class="label">Heuristic Evaluation</span></a>
						      <a href="<?php echo $base . '/en/portfolio/category/interaction-design'; ?>"><span class="label">Interaction Design</span></a>
		    			  </dd>
						</dl>
					</div>
				</div>
			</div>
		</div>
		
 <?php include("../includes/footer.php"); ?>