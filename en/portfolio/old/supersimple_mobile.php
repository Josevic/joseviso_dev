<?php

	$page_title = "Portfolio > SuperSimple Mobile";
	$page_description = "Jose Viso's portfolio | SuperSimple Mobile: Concept of a mobile phone for non-tech people.";
	$project_name = "SuperSimple Mobile";
	$herounit_width = 10;
	$herounit_desc = "<p>Concept of a mobile phone specially designed to people who are not used to latest technology. Simple at the maximum: present the best User Experience possible for calling and receiving calls.</p>";

	$process = array(
	    	"steps" =>  array(
				"<b>Brainstorming</b>. Sketches of possible alternatives.",
				"Development of two very basic <b>paper prototypes</b> alternatives.",
				"<b>User Tests</b> with people to which the product is aimed: 
				<iframe class='hidden-phone' style='margin-top:15px' width='340' height='230' src='http://www.youtube.com/embed/epEz5XPhyeQ' frameborder='0' allowfullscreen></iframe>
				<a class='visible-phone' href='http://youtu.be/epEz5XPhyeQ'>[See the video of the user test]</a></p>",
				"After several iterations on both prototypes, I concluded the one with physical buttons is more appropriate, because if fits with the users' mental model."
			),
			"slides" => array(
				0 => array(
						"image" => "../../images/supersimplemobile1.jpg",
						"alt_text" => "Design alternative 1",
						"caption" => "One of the design alternatives"
					 ),
				1 => array(
						"image" => "../../images/image1.jpg",
						"alt_text" => "Design alternative 2",
						"caption" => "Second design alternative"
					 )
			),
			"active" => 0
	    );

	$tools_used = array(
		"Pen",
		"Paper",
		"Marker",
		"Scissors",
		"Post-its"
	);

	$details = array(
		"date" => "August 2012",
		"tags" => array(
			"User Research" => "user-research", 
			"Interaction Design" => "interaction-design"
		)
	);

	include("../includes/header.php"); 
	include("../includes/portfolio-template.php");
	include("../includes/footer.php");

	?>