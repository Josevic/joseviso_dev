<?php

	$page_title = "Portfolio > Street Rockstars";
	$page_description = "Jose Viso's portfolio | Street Rockstars: Project to find the best street musicians in the world.";
	
	include("../includes/header.php"); ?>

	<div class="row">
		<div class="span6">
			<ul class="breadcrumb">
				<li><a href="<?php echo $base; ?>/en/">Home</a> <span class="divider">></span></li>
				<li><a href="<?php echo $base; ?>/en/portfolio"> Portfolio</a> <span class="divider">></span></li>
				<li class="active">Street Rockstars</li>	
		    </ul>
		</div>
	</div>

		<!-- Big Text -->	
		<div class="header"><h1>Street Rockstars</h1></div>
		
		<!-- Summary -->
		<div class="row spacer">
			<div class="span8">
						<p class="lead"><em>Street Rockstars</em> is a project that tries to collect the best street musicians around the world. It is not about rock but of creating a place to find those strangers playing in the street and nobody, a part of the people passing near in that moment see.</p>
						<br/>
						<div class="video-container hidden-phone">
							<iframe width="560" height="315" src="http://www.youtube.com/embed/xlAoMDWxRfY" frameborder="0" allowfullscreen></iframe>
						</div>
						<br class="hidden-phone"/>
						<p><a class="btn btn-large btn-primary" href="http://streetrockstars.com">Visit the site!</a></p>
			</div>
		</div>

		<hr/>

		<!-- Design Process -->
		<div class="row">
			<div class="span12">
				<h3>Design process</h3>
			</div>
			<div class="span7">
				<ol>
					<li>
						<p><b>Observation</b> in the street of the type of people who become interested in street musicians: approximated age, gender, nationality. Interviews with people who matched that description.</p>
						<div class="centered">
							<img src="../../images/streetrockstars_observation.png" alt="" />
							<p class="centered muted">One of the performances observed.</p>
						</div>
					</li>
					<li>
						<p class="spacer">Creation of 2 <b>personas</b> (one primary and one secondary) and typical <b>scenarios</b> for each one of them. Generation of a list of necessary functionalities.</p>
						<div class="centered">
							<img src="../../images/streetrockstars_persona1.png" alt="Personas" />
						</div>
					</li>
					<li><p class="spacer">Definition of the <b>Information Architecture</b>:</p></li>
						<ol type='a'>
							<li><p><b>Blueprints</b> or Sitemaps generation.</p></li>
							<li>
								<p>Firsts <b>sketches in paper</b> with possible alternative representations.</p>
								<div class="centered">
									<img src="../../images/streetrockstars_papersketch.JPG" alt="" />
								</div>
							</li>
							<li>
								<p class="spacer">Selection of the most appropriate representations and develop <b>wireframes</b> in more detail, using Balsamiq Mockups.</p>
								<div class="centered">
									<img src="../../images/streetrockstars_low_fidelity.png" alt="" />
								</div>
							</li>
						</ol>
					<li>
						<p class="spacer">Prioritization of the basic functionalities, creation of a simple <b>interactive prototype</b> using Axure and <b>user tests</b>.</p>
					</li>
					<li>
						<p class="spacer"><b>Iteration</b> over the prototype until having a version that is intuitive for the users.</p>
						<div class="centered">
							<img src="../../images/streetrockstars_high_fidelity.png" alt="" />
						</div>
					</li>
					<li><p class="spacer">Implementation.</p></li>
				</ol>
			</div>
		</div>

		<hr/>

		<!-- Tools Used -->
		<div class="row">
			<div class="span12">
				<h3>Tools used</h3>
			</div>
			<div class="offset2 span4">
				<!-- <img src="http://placehold.it/700x150"> -->
				<table class="table table-bordered">
					<tr>
						<td><p class="centered">Pen and Paper</p></td>
					</tr>
					<tr>
						<td><p class="centered">OmniGraffle</p></td>
					</tr>
					<tr>
						<td><p class="centered">Balsamiq Mockups</p></td>
					</tr>
					<tr>
						<td><p class="centered">Adobe Fireworks CS5</p></td>
					</tr>
					<tr>
						<td><p class="centered">Axure RP</p></td>
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
				  <dd>Year 2012</dd>
				  <dt>Tags</dt>
				  <dd>
				      <a href="<?php echo $base . '/en/portfolio/category/user-research'; ?>"><span class="label">User Research</span></a>
				      <a href="<?php echo $base . '/en/portfolio/category/interaction-design'; ?>"><span class="label">Interaction Design</span></a>
				      <a href="<?php echo $base . '/en/portfolio/category/development'; ?>"><span class="label">Development</span></a>
				  </dd>
				</dl>
			</div>
		</div>

		<?php include("../includes/footer.php"); ?>