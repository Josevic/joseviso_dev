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
				?>
		</div>
	</div>

	<ul class="nav nav-pills nav-stacked pull-right span3 spacer visible-desktop visible-tablet">
    	<li <?php if (strpos($_SERVER['PHP_SELF'], 'index.php')) echo 'class="active"';?>><a href="<?php echo $base . '/en/portfolio'; ?>">All</a></li>
	    <li <?php if (strpos($_SERVER['PHP_SELF'], 'user-research.php')) echo 'class="active"';?>><a href="<?php echo $base . '/en/portfolio/';?>category/user-research">User Research</a></li>		  
	    <li <?php if (strpos($_SERVER['PHP_SELF'], 'heuristic-evaluation.php')) echo 'class="active"';?>><a href="<?php echo $base . '/en/portfolio/';?>category/heuristic-evaluation">Heuristic Evaluation</a></li>
	    <li <?php if (strpos($_SERVER['PHP_SELF'], 'interaction-design.php')) echo 'class="active"';?>><a href="<?php echo $base . '/en/portfolio/';?>category/interaction-design">Interaction Design</a></li>
	    <li <?php if (strpos($_SERVER['PHP_SELF'], 'development.php')) echo 'class="active"';?>><a href="<?php echo $base . '/en/portfolio/';?>category/development">Development</a></li>
    </ul>

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
		 			"renfe"				 => "Redesign Renfe.com",
		 			"schiphol"			 => "Schiphol",
		 			"streetrockstars" 	 => "Street Rockstars"
		 		);
		
		$user_research = array(
		 			"evacriado" 		 => "Eva Criado",
		 			"smartbite" 		 => "SmartBite",
		 			"streetrockstars" 	 => "Street Rockstars",
		 		);

		$heuristic_evaluation = array(
		 			"evacriado" 		 => "Eva Criado",
		 			"smartbite" 		 => "SmartBite",
		 			"renfe"				 => "Redesign Renfe.com"
		 		);

		$interaction_design = array(
		 			"evacriado" 		 => "Eva Criado",
		 			"smartbite" 		 => "SmartBite",
		 			"museoalmeria" 		 => "Museum of Almería Kiosk",
		 			"renfe"				 => "Redesign Renfe.com",
		 			"streetrockstars" 	 => "Street Rockstars",
		 		);

		$development = array(
					"schiphol"		  => "Schiphol",
					"streetrockstars" => "Street Rockstars"
			);
	?>
