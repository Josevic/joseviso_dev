<?php

	$page_title = "Portfolio > NextEpisode";
	$page_description = "Jose Viso's portfolio | NextEpisode: An app for following your favourite series.";

	$project_name = "NextEpisode";
	$herounit_width = 7;
	$herounit_desc = "<p><em>NextEpisode</em> is a concept of multiplatform software to easily manage and follow your favorite TV shows.</p> 
				<p>The goals are not having to remember which is the next episode to see, not wasting time to download it, not having to remember what had happened until that moment, and easily discover more shows you may like.</p>
				<a class='btn btn-large btn-primary pull-right' href='http://joseviso.com/external_resources/NextEpisode/index.html'>Try the interactive prototype!</a>";
	
	$image_front = "../../images/nextEpisode_front.jpg";


	$process = array(
	    	"steps" =>  array(
				"<b>Needfinding</b>: I realize people around me were having a similar problem to follow their favorite series, so there was a clear opportunity for improvement.",
				"Sketches of the structure: Creation of a point of view, brainstorming different alternatives, creating <b>paper prototypes</b> to test.",
				"Creation of <b>HTML interactive Prototypes</b> using <a href='http://twitter.github.com/bootstrap/'>Twitter Bootstrap framework</a>.</p>
						<p>For this project I wanted to try rapid prototyping directly in HTML right after the paper prototyping. For doing this I used a frontend framework.</p>
						<p>It turned out to be a good alternative when you are confident about the design alternative chosen, obtaining a base of production code in an early stage of the project."
			),
			"slides" => array(
				0 => array(
						"image" => "../../images/NextEpisode_paperPrototype.jpg",
						"alt_text" => "Paper Prototype",
						"caption" => "First paper prototype to test some interactions."
					 ),
				1 => array(
						"image" => "../../images/NextEpisode_TB_prototype.png",
						"alt_text" => "HTML prototype",
						"caption" => "HTML prototype"
					 )
			),
			"active" => 0
	    );

	$tools_used = array(
		"Pen, Paper, Markers and Scissors",
		"Twitter Bootstrap framework",
		"Bootswatch theme"
	);

	$details = array(
		"date" => "December 2012 - January 2013",
		"tags" => array(
			"User Research" => "user-research", 
			"Interaction Design" => "interaction-design"
		)
	);

	include("../includes/header.php"); 
	include("../includes/portfolio-template.php");
	include("../includes/footer.php"); 
	?>