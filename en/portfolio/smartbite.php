<?php

	$page_title = "Portfolio > SmartBite";
	$page_description = "Jose Viso's portfolio | Smartbite: An app for eating healthy.";
	
	include("../includes/header.php"); ?>

	<div class="row">
		<div class="span6">
			<ul class="breadcrumb">
				<li><a href="<?php echo $base; ?>/en/">Home</a> <span class="divider">></span></li>
				<li><a href="<?php echo $base; ?>/en/portfolio"> Portfolio</a> <span class="divider">></span></li>
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
						<p class="lead"><em>SmartBite</em> is a diet application for smartphones focused on motivate the users to not give in, adapting the diet to the favourite food of each person and providing a wide range of meal alternatives.</p>
						<p class="lead">Created during the <a href="https://class.coursera.org/hci/class/index"><em>Human-Computer Interaction course</em></a> offered by <a href="https://www.coursera.org/stanford">Coursera - Stanford University</a>.</p>
						<br/>
						<a class="btn btn-large btn-primary" href="https://dl.dropbox.com/u/3953712/SmartBite/test/screens/iPhoneDashboard.html">Try the interactive prototype!</a>
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
				<h3>Design opportunity</h3>
			</div>
			<div class="span6">
				<p>The first part of this project was to find not covered needs and design opportunities around me, related to a topic up to me. 
					I decided to observe and interview <b>people in diet</b> to discover how they knew what food could/should eat and how they got motivated.</p>
				
				<p>The problems and opportunities found were the following:</p>
				<ul>
					<li><p>The <b>lack of motivation</b> for keep following the diet after the first days.</p></li>
					<li><p>People get tired of having just a <b>few choices for each meal</b>. Eating routine.</p></li>
					<li><p><b>To know if a given food is appropiate</b> for the diet the person is following.</p></li>
					<li><p><b>Lack of time</b> to cook. Need of finding specific recipes.</p></li>
				</ul>
			</div>
			<div class="span6">
				<img src="../../images/smartbite_observation.jpg" alt="" />
				<p class="centered muted">One of the people observed for finding design opportunities.</p>
			</div>
		</div>

		<hr/>

		<!-- Design Process -->
		<div class="row">
			<div class="span7">
				<h3>Process</h3>
			</div>
			<div class="span7">
				<p>After having detected several opportunities for improvement, I started designing a solution to solve those problems. For doing that I followed these steps:</p>
				
				<ol>
					<li><p class="spacer">Created a <b>point of view</b> to guide me during all the process:</p>
						 <blockquote><p>Without support and motivation, diets are a pain. Enhancements of mobile technology and Internet can be a great tool.</p></blockquote>
					</li>

					<li>
						<p class="spacer">Produced <b>storyboards</b> to represent the context of use of the app:<br/>
							<div class="centered">
								<img src="../../images/smartbite_storyboard.png" alt="Storyboard" />
							</div>
						</p>
					</li>
					<li>
						<p class="spacer">Made sketches of the structure, picked one concrete direction to continue developing the idea and created several alternative <b>rapid prototypes</b> using <a href="http://www.balsamiq.com/">Balsamiq Mockups</a>.<br/>
							<div class="centered">
								<img src="../../images/smartbite_lowfidelity2.png" alt="" />
							</div>
						</p>
					</li>
					<li>
						<p class="spacer">After that, I made and received <b>heuristic evaluations</b> on those prototypes. With the feedback received I made the needed modifications to improve them.</p>
					</li>
					<li>
						<p class="spacer">At this moment I was confident of being in the correct direction and that all the most relevant usability problems had been found and fixed. So I created an high-fidelity <b>interactive prototype</b> using <a href="http://www.justinmind.com/">Justinmind</a>.
							<div class="centered">
								<img src="../../images/smartbite_highfidelity.png" alt="" />
							</div>
						</p>
					</li>
					<li>
						<p class="spacer">Later on, I produced an evaluation plan, made <b>User Tests</b> with 3 people using the previously created prototype (and another alternative one to compare), analyzed the results and planned the next design iteration.
							<div class="centered">
								<img src="../../images/smartbite_usertest.jpg" alt="" />
							</div>
						</p>
					</li>
					<li>
						<p class="spacer">Finally, I added the changes motivated from the user tests in the app. The most important modification was the simplification of the sign-up process.<br/>(<a href="https://dl.dropbox.com/u/3953712/SmartBite/test/screens/iPhoneDashboard.html">Interactive prototype</a> modified after that step).</p>
					</li>
				</ol>
			</div>
		</div>
		<!-- </div> -->

		<hr/>

		<!-- Tools Used -->
		<div class="row">
			<div class="span7">
				<h3>Tools used</h3>
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
						<td><p class="centered">Justinmind</p></td>
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
				  <dd>May - July 2012</dd>
				  <dt>Tags</dt>
				  <dd>
				      <a href="<?php echo $base . '/en/portfolio/category/user-research'; ?>"><span class="label">User Research</span></a>
				      <a href="<?php echo $base . '/en/portfolio/category/heuristic-evaluation'; ?>"><span class="label">Heuristic Evaluation</span></a>
				      <a href="<?php echo $base . '/en/portfolio/category/interaction-design'; ?>"><span class="label">Interaction Design</span></a>
				  </dd>
				</dl>
			</div>
		</div>

<?php include("../includes/footer.php"); ?>