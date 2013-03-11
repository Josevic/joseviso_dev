<?php 

	$page_title = "About";
 	$page_description = "Biography, studies and more personal information.";

	include("includes/header.php"); ?>
		
	<!-- <h1 class="hidden-desktop centered">About</h1> -->
	<div class="row hidden-desktop">
		<div class="span6">
			<ul class="breadcrumb">
				<li><a href="<?php echo $base; ?>">Home</a> <span class="divider">/</span></li>
				<li class="active">About</li>
			</ul>
		</div>
	</div>

	<div class="row">
		<div class="span12">
			
			<h3>Who I am</h3>
			<div class="row">
				<div class="offset1 span4">
					<img src="../images/In_Canal.JPG"/>
				</div>
				<div class="span7">
					<p class="lead">José Viso Vargas</p>
					<p>29th September 1984 (28 years old)</p>
					<p>Almería, Spain</p>
					<p>Studying a <em><a href="http://www.uoc.edu/masters/esp/web/informatica_multimedia_telecomunicacion/interaccion-persona-ordenador/">Human-Computer Interaction Postgraduate degree</a> (Universitat Oberta de Catalunya)</em><br/> 
						<em>Bachelor of Computer Science (Universidad de Almería)</em></p>
				</div>
			</div>
			
			<h3 class="spacer">What I do</h3>
				<div class="row">

					
					<div class="offset1 span11">
						<!-- Explanation of what I do -->
						<p class="lead">User Centered Design</p>
						<p>My main goal is to design software that satisfy the users' needs, studying their capabilities, motivations and limitations, but considering the client's needs too.</p>
						<p>I've worked in complex projects, both in Spain and abroad, analyzing the user requirements and developing software. Later I've specialized in the Human-Computer Interaction field, that is what I'm really passionate about. I think this experience helps me to have a global vision for the projects I work on.</p>

						<h5>Techniques I use</h5>
						<ul>
							<li>Heuristic Evaluation</li>
							<li>User Research</li>
							<li>Prototyping (paper, low and high fidelity)</li>
							<li>Wireframing</li>
							<li>User tests</li>
							<li>Iterative Design: (Design - Prototype - Evaluate)</li>
						</ul>

						<h5>Distinguished Projects I'm involved</h5>
						<ul>
							<li><em>Community TA</em> in the <a href="https://www.coursera.org/course/hci">Human-Computer Interaction course</a> by <a href="https://www.coursera.org/">Coursera</a> - Stanford University</li>
							<li><a href="http://streetrockstars.com">Street Rockstars</a></li>
						</ul>

						<h5>Experience</h5>
						<ul>
							<li>User Experience Consultant</li>
							<li>Web Developer (Amsterdam, Netherlands)</li>
							<li>Backend Developer (Almería, Spain)</li>
						</ul>
					</div>

			

				</div>
			
			<h3 class="spacer">Things I like</h3>
				<div class="row">
					<div class="offset1 span3">
						
						<ul>
							<li>Sports</li>
							<li>Photography</li>
							<li>Music</li>
							<li>Science</li>
							<li>To Travel</li>
						</ul>
					</div>

				</div>
			
			</div>
	</div>
	
	<?php include("includes/footer.php"); ?>