	<div class="row hidden-desktop">
		<div class="span6">
			<ul class="breadcrumb">
				<li><a href="<?php echo $base; ?>">Home</a> <span class="divider">/</span></li>
				<?php 
					if (strpos($_SERVER['PHP_SELF'], 'index.php')) {
						echo "<li class='active'>Portfolio</li>";
					}		
					else{
						echo "<li><a href='". $base . "/en/portfolio'>" . "Portfolio</a></li>";
					}
					
					if (strpos($_SERVER['PHP_SELF'], 'user-research.php')){
						echo "<li class='active'><span class='divider'> / </span>User Research</li>";
					}
					elseif (strpos($_SERVER['PHP_SELF'], 'heuristic-evaluation.php')) {
						echo "<li class='active'><span class='divider'>/</span>Heuristic Evaluation</li>";
					}
					elseif (strpos($_SERVER['PHP_SELF'], 'interaction-design.php')){
						echo "<li class='active'><span class='divider'>/</span>Interaction Design</li>";
					}
					elseif (strpos($_SERVER['PHP_SELF'], 'development.php')){
						echo "<li class='active'><span class='divider'>/</span>Development</li>";
					}
					elseif (strpos($_SERVER['PHP_SELF'], 'other.php')){
						echo "<li class='active'><span class='divider'>/</span>Other</li>";
					}
				?>		  
		    </ul>
		</div>
	</div>

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


	<!-- 
	 <div class="row clearfix visible-phone centered">
	  	<div class="span12">
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
	-->	

	<div class="row clearfix visible-phone centered">
	  	<div class="span12">
        	<div class="controls">
              <select name="myselect" onchange="redirectMe(this);">
              	<option value="" disabled selected>
              		<?php 
              			if (strpos($_SERVER['PHP_SELF'], 'index.php')){
              				echo  "Filter by category";	
              			}
              			else{
              				echo "Filter by another category";
              			}
              		?>
              	</option>
                <option value="<?php echo $base . '/en/portfolio'?>">All</option>
                <option value="<?php echo $base . '/en/portfolio/category/user-research'?>">User Research</option>
                <option value="<?php echo $base . '/en/portfolio/category/heuristic-evaluation'?>">Heuristic Evaluation</option>
                <option value="<?php echo $base . '/en/portfolio/category/interaction-design'?>">Interaction Design</option>
                <option value="<?php echo $base . '/en/portfolio/category/development'?>">Development</option>
                <option value="<?php echo $base . '/en/portfolio/category/other'?>">Other</option>
              </select>
            </div>
        </div>
      </div>

	<?php

		/* Inclusion of the different projects in each subnav category */

		$projects = array(
		 			"evacriado" 		 => "Eva Criado",
		 			"smartbite" 		 => "SmartBite",
		 			"museoalmeria" 		 => "Museum of Almería Kiosk",
		 			"schiphol"			 => "Schiphol",
		 			"streetrockstars" 	 => "Street Rockstars",
		 			"supersimple_mobile" => "SuperSimple Mobile",
		 			"nextepisode" 		 => "NextEpisode",
		 			"takemethere" 		 => "Take Me There",
		 			"amsterdammers"		 => "Amsterdammers"
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
		 			"evacriado" 		 => "Eva Criado",
		 			"smartbite" 		 => "SmartBite"
		 		);

		$interaction_design = array(
		 			"evacriado" 		 => "Eva Criado",
		 			"smartbite" 		 => "SmartBite",
		 			"museoalmeria" 		 => "Museum of Almería Kiosk",
		 			"streetrockstars" 	 => "Street Rockstars",
		 			"supersimple_mobile" => "SuperSimple Mobile",
		 			"nextepisode" 		 => "NextEpisode",
		 			"takemethere" 		 => "Take Me There"
		 		);

		$development = array(
					"schiphol"		  => "Schiphol",
					"streetrockstars" => "Street Rockstars"
			);

		$other = array(
		 			"amsterdammers" 	=> "Amsterdammers"
		 		);
	?>
