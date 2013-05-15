	<?php 

	/***
	
	All possible variables needed:
	
	$page_title = "";
	$page_description = "";
	$project_name = "";
	$herounit_width = 7;
	$herounit_desc = "";
	
	$image_front = "";

	$design_opportunity_desc = "";

	$process = array(
	    	"steps" =>  array(
				"Step 1",
				"Step 2"
			),
			"slides" => array(
				0 => array(
						"image" => "../../images/image0.jpg",
						"alt_text" => "Element 0",
						"caption" => "This is the element 0"
					 ),
				1 => array(
						"image" => "../../images/image1.jpg",
						"alt_text" => "Element 1",
						"caption" => "This is the element 1"
					 )
			),
			"active" => 0
	    );

	$tools_used = array(
		"Tool 1",
		"Tool 2"
	);

	$details = array(
		"date" => "",
		"tags" => array(
			"Tag name 1" => "tag url", 
			"Tag name 1" => "tag url 2"
		)
	);

	***/
	
	// Breadcrumb
	include("../includes/portfolio-sections/breadcrumb.php");

	// Project big title
	include("../includes/portfolio-sections/project-title.php"); 

	// Project summary (hero unit & image)
	include("../includes/portfolio-sections/project-summary.php");

	// Design opportunity
	include("../includes/portfolio-sections/design-opportunity.php");

	// Design process
	include("../includes/portfolio-sections/design-process.php");

	// Tools used
	include("../includes/portfolio-sections/tools-used.php");

	// Project details
	include("../includes/portfolio-sections/project-details.php");

	?>

	