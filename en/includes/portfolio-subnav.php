	<header class="jumbotron subhead">
	  <div class="container">
	    <h1 style="color:gray">Portfolio</h1>
	  </div>
	</header>

	<div class="row hidden-desktop hidden-tablet">
		<div class="span5">
				<?php 
					if (strpos($_SERVER['PHP_SELF'], 'user-research.php')){
						echo " <h3 class='muted centered'>User Research</h3>";
					}
					elseif (strpos($_SERVER['PHP_SELF'], 'heuristic-evaluation.php')) {
						echo " <h3 class='muted centered'>Heuristic Evaluation</h3>";
					}
					elseif (strpos($_SERVER['PHP_SELF'], 'interaction-design.php')){
						echo "<h3 class='muted centered'>Interaction Design</h3>";
					}
					elseif (strpos($_SERVER['PHP_SELF'], 'development.php')){
						echo "<h3 class='muted centered'>Development</h3>";
					}
					elseif (strpos($_SERVER['PHP_SELF'], 'other.php')){
						echo "<h3 class='muted centered'>Other</h3>";
					}
				?>
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
