<?php

	$page_title = "Portfolio > Usability study - Renfe.com";
	$page_description = "Portfolio de Jose Viso | Usability study - Renfe.com";
	$project_name = "Usability study - Renfe.com";
	$herounit_width = 7;
	$herounit_desc = "<p>This project is a study of the usability and interaction problems on the national trains company's website. It was created for the <em>Evaluation of Usability</em> class of the <a href='http://estudis.uoc.edu/ca/masters-postgraus-especialitzacions/diploma-postgrau/informatica-multimedia-telecomunicacio/interaccio-persona-ordinador/presentacio'>Postgraduate course on Human-Computer Interaction</a> of the Open University of Catalunya.</p>";
	//$image_front = "../../images/museoalmeria_front.png";
	
	$design_opportunity_desc = 
		"<p>I made a visit to the museum to find not covered needs and design opportunities, and I got the following:</p>
		 <ul>
			<li><p>Very <b>few information about the</b> regular archeological <b>elements</b>. There were people asking themselves what were some of the objects on the showcases, and they didn't have where to go to resolve their doubts.</li>
			<li><p>There wasn't a way for the users to <b>give feedback to the museum</b> to improve, not even an information point.</p></li>
			<li><p>The temporary exhibition room had a lot of pieces of work, but almost no information about what they were or the authors (just a small piece of card with the name).</p></li>
			<li><p>I missed a <b>guiding thread</b> to indicate the visitors why certain objects were located in particular zones.</p></li>
		 </ul>";
	
	$process = array(
	    	"steps" =>  array(
				"Creation of <b>personas</b> to represent the 3 main roles detected.",
				"Definition of the <b>information architecture</b>. First I made an outline and after that I created the site map.",
				"Definition of the <b>interaction flows</b> in the application. I identified the main tasks the users needed to do and throught different charts I designed how the application should work.",
				"Creation of <b>sketches and wireframes</b>. First I tried to get a good number of alternatives for each screen. After that I chose an option and continued developing it with a higher level of fidelity."
			),
			"slides" => array(
				0 => array(
						"image" => "../../images/museoAlmeria_personas.jpg",
						"alt_text" => "Personas",
						"caption" => "The three personas defined"
					 ),
				1 => array(
						"image" => "../../images/museoAlmeria_IA.jpg",
						"alt_text" => "Information Architecture",
						"caption" => "Information Architecture of the kiosk"
					 ),
				2 => array(
						"image" => "../../images/museoAlmeria_flowchart.jpg",
						"alt_text" => "Flow charts",
						"caption" => "Flow chart for one of the functions"
					 ),
				3 => array(
						"image" => "../../images/museoAlmeria_prototype.jpg",
						"alt_text" => "First prototype",
						"caption" => "Home screen for the first prototype"
					 ),
				4 => array(
						"image" => "../../images/museoAlmeria_mf-wireframe.jpg",
						"alt_text" => "Mid-fidelity wireframe",
						"caption" => "Annotated wireframe for the object information screen"
					 ),
				5 => array(
						"image" => "../../images/museoalmeria_hf-wireframe.jpg",
						"alt_text" => "High-fidelity wireframe",
						"caption" => "High-fidelity wireframe for the home screen"
					 )
			),
			"active" => 5
	);

	$tools_used = array(
		"Pen and Paper",
		"Balsamiq Mockups",
		"OmniGraffle",
		"Axure",
		"Photoshop"
	);

	$details = array(
		"date" => "May - July 2013",
		"tags" => array(
			"Heuristic Evaluation" => "heuristic-evaluation",
			"Interaction Design" => "interaction-design"
		)
	);
	
	include("../includes/header.php"); 
	include("../includes/portfolio-template.php");
	include("../includes/footer.php"); 

	?>