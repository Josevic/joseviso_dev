<?php

	$page_title = "Portfolio > Street Rockstars";
	$page_description = "Jose Viso's portfolio | Street Rockstars: Project to find the best street musicians in the world.";
	$project_name = "Street Rockstars";
	$herounit_width = 10;
	$herounit_desc = 
				"<p><em>Street Rockstars</em> is a project that tries to collect the best street musicians around the world. It isn't about rock but of creating a place to find those strangers playing in the street and nobody, a part of the people passing near in that moment see.</p>
				<br/>
				<div class='video-container centered hidden-phone'>
					<iframe width='560' height='315' src='http://www.youtube.com/embed/xlAoMDWxRfY' frameborder='0' allowfullscreen></iframe>
				</div>
				<div class='spacer centered'>
					<a class='btn btn-large btn-primary' href='http://streetrockstars.com'>Visit the site!</a>
				</div>";

	$process = array(
	    	"steps" =>  array(
				"<b>Observation</b> in the street of people recording street musicians' performances: approximated age, gender, nationality. Interviews with people who matched that description.",
				"Creation of 2 <b>personas</b> (one primary and one secondary) and typical <b>scenarios</b> for each one of them. Generation of a list of necessary functionalities.",
				"Start defining the <b>Information Architecture</b>:</p></li>
						<ol type='a'>
							<li><p><b>Blueprints</b> or Sitemaps generation.</p></li>
							<li><p>Firsts <b>sketches in paper</b> with possible alternative representations.</p></li>
							<li><p>Selection of the most appropriate representations and develop <b>wireframes</b> in more detail, using Balsamiq Mockups.</p></li>
						</ol>",
				"Creation of a simple <b>interactive prototype</b> and <b>user tests</b> on the basic functionalities. Several iterations with redesigns.",
				"<b>Add more details</b> to the wireframes using Adobe Fireworks and to the prototypes using Axure.",
				"<b>Heuristic Evaluation</b>. Test of the changes and concrete aspects.",
				"Implementation"
			),
			"slides" => array(
				0 => array(
						"image" => "../../images/streetrockstars_persona1.png",
						"alt_text" => "Primary Persona",
						"caption" => "Primary Persona"
					 ),
				1 => array(
						"image" => "../../images/streetrockstars_ia.png",
						"alt_text" => "Information Architecture definition",
						"caption" => "Blueprint with the different parts of the site and their relations."
					 ),
				2 => array(
						"image" => "../../images/streetrockstars_wf1.png",
						"alt_text" => "Low-fidelity wireframe",
						"caption" => "Low fidelity wireframe created with Balsamiq Mockups"
					 ),
				3 => array(
						"image" => "../../images/streetrockstars_wf2.png",
						"alt_text" => "Mid-fidelity wireframe",
						"caption" => "More detailed wireframe considering the users' feedback built with Axure RP."
					 )
			),
			"active" => 2
	    );

	$tools_used = array(
		"Pen and Paper",
		"OmniGraffle",
		"Balsamiq Mockups",
		"Adobe Fireworks CS5",
		"Axure RP"
	);

	$details = array(
		"date" => "Year 2012",
		"tags" => array(
			"User Research" => "user-research", 
			"Interaction Design" => "interaction-design",
			"Development" => "development"
		)
	);

	include("../includes/header.php"); 
	include("../includes/portfolio-template.php");
	include("../includes/footer.php");

	?>