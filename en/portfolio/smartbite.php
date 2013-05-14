<?php

	$page_title = "Portfolio > SmartBite";
	$page_description = "Jose Viso's portfolio | Smartbite: An app for eating healthy.";
	$project_name = "SmartBite";
	$herounit_width = 7;
	$herounit_desc = "<p><em>SmartBite</em> is a diet application for smartphones focused on motivate the users to not give in, adapting the diet to the favourite food of each person and providing a wide range of meal alternatives.</p> 

				<p>Created during the <a href='https://class.coursera.org/hci/class/index'><em>Human-Computer Interaction course</em></a> offered by <a href='https://www.coursera.org/stanford'>Coursera - Stanford University</a>.</p>
				<br/>
				<a class='btn btn-large btn-primary pull-right' href='https://dl.dropbox.com/u/3953712/SmartBite/test/screens/iPhoneDashboard.html'>Try the interactive prototype!</a>";
	
	$image_front = "../../images/smartbite.png";

	$design_opportunity_desc =
		"<p>The first part of this project was to find not covered needs and design opportunities around me, related to a topic up to me. 
			I decided to observe and interview <b>people in diet</b> to discover how they knew what food could/should eat and how they got motivated.</p>

		  <p>The problems and opportunities found were the following:</p>
			<ul>
				<li><p>The <b>lack of motivation</b> for keep following the diet after the first days.</p></li>
				<li><p>People get tired of having just a <b>few choices for each meal</b>. Eating routine.</p></li>
				<li><p><b>To know if a given food is appropiate</b> for the diet the person is following.</p></li>
				<li><p><b>Lack of time</b> to cook. Need of finding specific recipes.</p></li>
			</ul>";

	$process = array(
		'steps' => array(
			"Creation of a <b>point of view</b>:<br/>
						 <blockquote><p>Without support and motivation, diets are a pain. Enhancements of mobile technology and Internet can be a great tool.</p></blockquote>",
			"Sketches of the structure: Creation of a point of view, use of <b>storyboards</b>, pick one concrete direction and creating <b>rapid prototypes</b> with <a href='http://www.balsamiq.com/'>Balsamiq Mockups</a>.",
			"Creation of <b>interactive Prototypes</b> using <a href='http://www.justinmind.com/'>Justinmind</a>.",
			"<b>User Tests</b>: Defining an Evaluation Plan, conducting the tests, analysis of the results and planification of the next design iteration."
		 ),
		'slides' => array(
			0 => array(
						"image" => "../../images/smartbite_observation.jpg",
						"alt_text" => "Person observed",
						"caption" => "One of the people observed for finding a design opportunity"
			),
			1 => array(
						"image" => "../../images/smartbite_storyboard.png",
						"alt_text" => "Storyboard",
						"caption" => "Storyboard for representing the context where the app would be used"
			),
			2 => array(
						"image" => "../../images/smartbite_lowfidelity2.png",
						"alt_text" => "Low-fidelity prototype",
						"caption" => "Basic Prototype built with Balsamiq Mockups"
			),
			3 => array(
						"image" => "../../images/smartbite_highfidelity.png",
						"alt_text" => "High-fidelity prototype",
						"caption" => "More detailed prototype considering the users' feedback built with Justinmind"
			),
			4 => array(
						"image" => "../../images/smartbite_usertest.jpg",
						"alt_text" => "User test",
						"caption" => "One of the user tests"
			)
		),
		'active' => 1
	);

	$tools_used = array(
		"Pen and Paper",
		"Balsamiq Mockups",
		"Justinmind"
	);

	$details = array(
		"date" => "May - July 2012",
		"tags" => array(
			"User Research" => "user-research", 
			"Heuristic Evaluation" => "heuristic-evaluation",
			"Interaction Design" => "interaction-design"
		)
	);

	include("../includes/header.php"); 
	include("../includes/portfolio-template.php");
	include("../includes/footer.php");
	?>