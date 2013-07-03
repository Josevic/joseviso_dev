<?php

	$page_title = "Portfolio > Take Me There";
	$page_description = "Jose Viso's portfolio | Take Me There: See places as if you were there.";
	$project_name = "Take Me There";
	$herounit_width = 10;
	$herounit_desc = "<p><em>Take Me There</em> is a website that groups videos of popular places around the world recorded in a subjective POV (Point-Of-View). The goal is to give people watching the video the feeling to be in that place.</p>";

	$process = array(
	    	"steps" =>  array(
				"Generation of <b>Personas</b> and <b>Scenarios</b>.",
				"Definition of <b>User Flows</b> and <b>User Journeys</b>.",
				"Definition of the <b>Information Architecture</b>.",
				"Creation of Low and Mid fidelity <b>wireframes</b>.",
				"<b>User Tests</b>.",
				"<b>Iteration</b> over the wireframes, analysis and redesigns.",
				"Creation of High fidelity wireframes.",
				"A/B and specific parts testing."
			),
			"slides" => array(
				0 => array(
						"image" => "../../images/takemethere_persona.png",
						"alt_text" => "Primary Persona",
						"caption" => "Primary Persona"
					 ),
				1 => array(
						"image" => "../../images/takemethere_scenario.png",
						"alt_text" => "Scenario for the Primary Persona",
						"caption" => "One of the Scenarios"
					 ),
				2 => array(
						"image" => "../../images/takemethere_userflow.jpg",
						"alt_text" => "User Flow",
						"caption" => "User Flow Sketches"
					 ),
				3 => array(
						"image" => "../../images/takemethere_wireframe1.png",
						"alt_text" => "Low-fidelity Wireframe",
						"caption" => "Low-fidelity Wireframe"
					 ),
				4 => array(
						"image" => "../../images/takemethere_wireframe2.png",
						"alt_text" => "High-fidelity Wireframe",
						"caption" => "High-fidelity Wireframe"
					 )
			),
			"active" => 3
	    );

	$tools_used = array(
		"Pen and Paper",
		"OmniGraffle",
		"Balsamiq Mockups",
		"Adobe Fireworks CS5",
		"Axure RP"
	);

	$details = array(
		"date" => "April 2012",
		"tags" => array(
			"User Research" => "user-research", 
			"Interaction Design" => "interaction-design"
		)
	);

	include("../includes/header.php"); 
	include("../includes/portfolio-template.php");
	include("../includes/footer.php");
	?>