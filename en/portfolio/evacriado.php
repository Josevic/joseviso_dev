<?php

	$page_title = "Portfolio > Eva Criado";
	$page_description = "Jose Viso's portfolio | Redesign of Evacriado.com";
	$project_name = "Eva Criado";
	$herounit_width = 7;
	$herounit_desc = 
		"<p>Redesign of the existing Eva Criado's beauty center website.</p>";

	$design_opportunity_desc = 
		"<p>This beauty center contacted me because they had the need to redesign their webpage to try to reach in a better way their current clients, and wanted to gain new ones with different characteristics.</p>
		 <p>One of the limitations was the budget, because it was a small business. Another limitation was they didn't have any study about their regular clients.</p>
		 <p>After several interviews and observations in the center, I detected the following opportunities of improvement:</p>	
			<ul>
				<li><p>Need of showing a <b>more clear information</b> about the business, offered services and what make them different from other competitors.</p></li>
				<li><p>Possibility of <b>automate some actions</b>: as reservations and update offers.</p></li>
				<li><p><b>Adaptation to new devices</b>: desktop, smartphone and tablet. Previously the webpage was appropriate just for desktop computers.</p></li>
			</ul>";

	$process = array(
    	"steps" =>  array(
			"<b>Heuristic Evaluation</b> of the existing website to detect problems. Deep evaluation considering the <a href='http://www.useit.com/papers/heuristic/heuristic_list.html'>10 Usability Heuristics</a> by <a href='http://en.wikipedia.org/wiki/Jakob_Nielsen_(usability_consultant)'>Jakob Nielsen</a>, noting the severity and importance of each one of them.</b>",
			"To <b/>know roughly the domain field</b>: General research about this area, what are the different treatments and services that appear in the website and what the business do.",
			"To <b>know the goals and the clients</b> of the business. Creation of personas and storyboards.",
			"<b>Redefinition of the Information Architecture</b> of the site. Use of <b>card sorting</b> to detect the most natural organization from user's perspective for the different services and treatments.",
			"Creation of paper sketches, low and mid-fidelity wireframes and prototypes. For this project I made use of a <b>sketchboard</b>, for self-use and communicating with the client.",
			"User testing and a lot of iterations."
		),
		"slides" => array(
			0 => array(
					"image" => "../../images/sketchboard.jpg",
					"alt_text" => "Sketchboard",
					"caption" => "Sketchboard"
				 ),
			1 => array(
					"image" => "../../images/evacriado_personas.gif",
					"alt_text" => "Personas",
					"caption" => "The two personas defined: one primary and another secondary"
				 ),
			2 => array(
					"image" => "../../images/evacriado_storyboards.jpg",
					"alt_text" => "Storyboards",
					"caption" => "Storyboards created to define the context of use"
				 ),
			3 => array(
					"image" => "../../images/evacriado_ia.jpg",
					"alt_text" => "Information Architecture",
					"caption" => "Rough approximation of the Information Architecture"
				 ),
			4 => array(
					"image" => "../../images/evacriado_low-fi_wireframes.jpg",
					"alt_text" => "Low-fidelity wireframes",
					"caption" => "Three low-fidelity wireframes alternatives to get first feedback from client and users"
				 ),
			5 => array(
					"image" => "../../images/evacriado_home_before.jpg",
					"alt_text" => "Home",
					"caption" => "Before the redesign"
				 ),
			6 => array(
					"image" => "../../images/evacriado_home_after.gif",
					"alt_text" => "After",
					"caption" => "After the redesign"
				 ),
			7 => array(
					"image" => "../../images/evacriado_he.jpg",
					"alt_text" => "Findings",
					"caption" => "Some of the findings of the Heuristic Evaluation"
				 )
		),
		"active" => 0
    );

	include("../includes/header.php"); 
	include("../includes/portfolio-template.php");

	?>



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
						<td><p class="centered"><a href="http://www.nngroup.com/articles/ten-usability-heuristics/">10 Usability Heuristics</a> (Jakob Nielsen)</p></td>
					</tr>
					<tr>
						<td><p class="centered">Card sorting</p></td>
					</tr>
					<tr>
						<td><p class="centered">Pen and Paper</p></td>
					</tr>
					<tr>
						<td><p class="centered">Balsamiq Mockups</p></td>
					</tr>
					<tr>
						<td><p class="centered">Axure</p></td>
					</tr>
					<tr>
						<td><p class="centered">Sketchboard</p></td>
					</tr>
  				</table>
			</div>
		</div>

		<div class="row">
			<div class="span12">
				<h3>Details</h3>
			</div>
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
	 
	 <?php include("../includes/footer.php"); ?>