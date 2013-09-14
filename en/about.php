<?php 

	$page_title = "About";
 	$page_description = "Biography, studies and more personal information.";

	include("includes/header.php"); ?>

	<header class="jumbotron subhead">
	  <div class="container">
	    <h1>About</h1>
	  </div>
	</header>

	<div class="row">
		<div class="span12">
			
			<h3>Who I am</h3>
			<div class="row">
				<div class="offset1 span4">
					<p class="lead">José Viso Vargas</p>
					<p>Interaction Designer</p>
					<p>September 29th, 1984 (29 years old)</p>
					<p>From Almería (Spain), living in Aberdeen (UK)</p>
				</div>
				<div class="span4">
					<img src="../images/jose_about.jpg" alt="Photo of Jose Viso"/>
				</div>
			</div>
			
			<h3 class="spacer">What I do</h3>
				<div class="row">					
					<div class="offset1 span11">
						<div class="row">
							<div class="span8">
								<!-- Explanation of what I do -->
								<p class="lead">User Centered Design</p>
								<p>I <strong>design software that satisfy the users' needs</strong>, studying their capabilities, motivations and limitations, <strong>but considering the client's needs too</strong>.</p>
								<p>I graduated in Computer Science, and after that I've been working in complex projects, both in Spain and abroad, from analyzing the user requirements to deploying software.</p>
								<p>Later I've specialized in Human-Computer Interaction, that is what I'm really passionate about.</p>
								<p>You can find some of the things I've made taking a look at <a href="portfolio">my portfolio</a>.</p>
							</div>
						</div>
						<div class="row">
							<div class="span8">
								<h4 class="spacer">Techniques, Methodologies and Tools I use</h4>
								<ol>
									<li>Iterative Design <small class="muted">(Design - Prototype - Evaluate)</small>.</li>
										<ul>
											<li>Personas, Scenarios and Storyboarding.</li>
											<li>Sitemap diagrams and user flow diagrams.</li>
											<li>Prototyping: paper prototypes, low and high fidelity graphic tools <small class="muted">(Balsamiq Mockups, Axure, Justinmind)</small>, code prototypes.</li>
											<li>Wireframing <small class="muted">(OmniGraffle, Fireworks, Photoshop)</small>.</li>
											<li>User Testing <small class="muted">(Silverback)</small>.</li>
										</ul>
									
									<li>Heuristic evaluations and other usability studies.</li>
									<li>Agile Development.</li>
									<li>Software frameworks and CMSs <small class="muted">(CodeIgniter, Twitter Bootstrap, Wordpress, etc)</small>.</li>
								</ol>
							</div>

							
							<div class="span6">
								<!-- Placeholder for an image -->
							</div>
							
						</div>

						<h4 class="spacer">Distinguished Projects I'm involved</h4>
						<div class="row">
							<div class="span8">
								<ul>
									<li><em>Community TA</em> in the <a href="https://www.coursera.org/course/hci">Human-Computer Interaction course</a> by <a href="https://www.coursera.org/">Coursera</a> - Stanford University.</li>
									<li>Founder of <a href="http://streetrockstars.com">Street Rockstars</a>.</li>
								</ul>

								<h4 class="spacer">Experience</h4>
								<ul>
									<li>Interaction Designer <small class="muted">Sep 2013 - Present (Aberdeen, UK)</small>.</li>
									<li>User Experience Designer & Developer <small class="muted">Apr 2012 - Present (Almería, Spain)</small>.</li>
									<li>Web Developer <small class="muted">Apr 2011 - Apr 2012 (Amsterdam, Netherlands)</small>.</li>
									<li>Backend Developer <small class="muted">May 2008 - Apr 2011 (Almería, Spain)</small>.</li>
								</ul>
							</div>
						</div>
					</div>

			

				</div>
			
				<h3 class="spacer">Things I like</h3>
				<div class="row">
					<div class="offset1 span8">			
						<p>Sports, Photography, Music, Science, Travelling, Food.</p>

						<blockquote class="spacer">
							<p>Design should not dominate things. Not dominate people. It should help people.</p>
							<small>Dieter Rams</small>
						</blockquote>
					</div>
				</div>
			
			</div>
	</div>
	
	<?php include("includes/footer.php"); ?>