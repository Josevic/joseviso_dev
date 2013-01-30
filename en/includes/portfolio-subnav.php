	<div class="row visible-desktop visible-tablet">
	  <div class="span12 centered-pills">
	    <ul class="nav nav-pills">
	      <li <?php if (strpos($_SERVER['PHP_SELF'], 'index.php')) echo 'class="active"';?>><a href="<?php echo $base . '/en/portfolio'; ?>">All</a></li>
	      <li <?php if (strpos($_SERVER['PHP_SELF'], 'user-research.php')) echo 'class="active"';?>><a href="<?php echo $base . '/en/portfolio/';?>category/user-research">User Research</a></li>		  
	      <li <?php if (strpos($_SERVER['PHP_SELF'], 'heuristic-evaluation.php')) echo 'class="active"';?>><a href="<?php echo $base . '/en/portfolio/';?>category/heuristic-evaluation">Heuristic Evaluation</a></li>
	      <li <?php if (strpos($_SERVER['PHP_SELF'], 'interaction-design.php')) echo 'class="active"';?>><a href="<?php echo $base . '/en/portfolio/';?>category/interaction-design">Interaction Design</a></li>
	      <li <?php if (strpos($_SERVER['PHP_SELF'], 'development.php')) echo 'class="active"';?>><a href="<?php echo $base . '/en/portfolio/';?>category/development">Development</a></li>
	      <li <?php if (strpos($_SERVER['PHP_SELF'], 'other.php')) echo 'class="active"';?>><a href="<?php echo $base . '/en/portfolio/';?>category/other">Other</a></li>
	    </ul>
	  </div>
	</div>

	
	  <div class="row clearfix visible-phone">
	  	<div class="span1">
	  		<h5>Portfolio Category</h5>
	  	</div>
	  	<div class="span11">
        	<div class="controls">
              <select name="myselect" onchange="redirectMe(this);">
                <option value="<?php echo $base . '/en/portfolio'?>" <?php if (strpos($_SERVER['PHP_SELF'], 'index.php')) echo 'selected="selected"';?>>All</option>
                <option value="<?php echo $base . '/en/portfolio/category/user-research'?>" <?php if (strpos($_SERVER['PHP_SELF'], 'user-research.php')) echo 'selected="selected"';?>>User Research</option>
                <option value="<?php echo $base . '/en/portfolio/category/heuristic-evaluation'?>" <?php if (strpos($_SERVER['PHP_SELF'], 'heuristic-evaluation.php')) echo 'selected="selected"';?>>Heuristic Evaluation</option>
                <option value="<?php echo $base . '/en/portfolio/category/interaction-design'?>" <?php if (strpos($_SERVER['PHP_SELF'], 'interaction-design.php')) echo 'selected="selected"';?>>Interaction Design</option>
                <option value="<?php echo $base . '/en/portfolio/category/development'?>" <?php if (strpos($_SERVER['PHP_SELF'], 'development.php')) echo 'selected="selected"';?>>Development</option>
                <option value="<?php echo $base . '/en/portfolio/category/other'?>" <?php if (strpos($_SERVER['PHP_SELF'], 'other.php')) echo 'selected="selected"';?>>Other</option>
              </select>
            </div>
        </div>
      </div>
  	


	<?php

		/* Inclusion of the different projects in each subnav category */

		$projects = array(
		 			"evacriado" 		 => "Eva Criado",
		 			"smartbite" 		 => "SmartBite",
		 			"streetrockstars" 	 => "Street Rockstars",
		 			"amsterdammers"		 => "Amsterdammers",
		 			"supersimple_mobile" => "SuperSimple Mobile",
		 			"nextepisode" 		 => "NextEpisode",
		 			"takemethere" 		 => "Take Me There"
		 		);
		
		$user_research = array(
		 			"evacriado" 		 => "Eva Criado",
		 			"smartbite" 		 => "SmartBite",
		 			"streetrockstars" 	 => "Street Rockstars",
		 			"supersimple_mobile" => "SuperSimple Mobile",
		 			"nextepisode" 		 => "NextEpisode",
		 			"takemethere" 		 => "Take Me There"
		 		);

		$heuristic_evaluation = array(
		 			"evacriado" 		 => "Eva Criado"
		 		);

		$interaction_design = array(
		 			"evacriado" 		 => "Eva Criado",
		 			"smartbite" 		 => "SmartBite",
		 			"streetrockstars" 	 => "Street Rockstars",
		 			"supersimple_mobile" => "SuperSimple Mobile",
		 			"nextepisode" 		 => "NextEpisode",
		 			"takemethere" 		 => "Take Me There"
		 		);

		$development = array(
					"streetrockstars" => "Street Rockstars"
			);

		$other = array(
		 			"amsterdammers" 	=> "Amsterdammers"
		 		);
	?>
