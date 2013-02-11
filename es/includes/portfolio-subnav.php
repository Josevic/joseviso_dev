	<div class="row hidden-desktop">
		<div class="span6">
			<ul class="breadcrumb">
				<li><a href="<?php echo $base; ?>/es/">Inicio</a> <span class="divider">/</span></li>
				<?php 
					if (strpos($_SERVER['PHP_SELF'], 'index.php')) {
						echo "<li class='active'>Portfolio</li>";
					}		
					else{
						echo "<li><a href='". $base . "/es/portfolio'>" . "Portfolio</a></li>";
					}
					
					if (strpos($_SERVER['PHP_SELF'], 'investigacion-de-usuarios.php')){
						echo "<li class='active'><span class='divider'> / </span>Investigación de Usuarios</li>";
					}
					elseif (strpos($_SERVER['PHP_SELF'], 'evaluacion-heuristica.php')) {
						echo "<li class='active'><span class='divider'>/</span>Evaluación Heurística</li>";
					}
					elseif (strpos($_SERVER['PHP_SELF'], 'diseno-de-interaccion.php')){
						echo "<li class='active'><span class='divider'>/</span>Diseño de Interacción</li>";
					}
					elseif (strpos($_SERVER['PHP_SELF'], 'desarrollo.php')){
						echo "<li class='active'><span class='divider'>/</span>Desarrollo</li>";
					}
					elseif (strpos($_SERVER['PHP_SELF'], 'otro.php')){
						echo "<li class='active'><span class='divider'>/</span>Otro</li>";
					}
				?>		  
		    </ul>
		</div>
	</div>

	<div class="row visible-desktop visible-tablet">
	  <div class="span12 centered-pills">
	    <ul class="nav nav-pills">
	      <li <?php if (strpos($_SERVER['PHP_SELF'], 'index.php')) echo 'class="active"';?>><a href="<?php echo $base . '/es/portfolio'; ?>">Todos</a></li>
	      <li <?php if (strpos($_SERVER['PHP_SELF'], 'investigacion-de-usuarios.php')) echo 'class="active"';?>><a href="<?php echo $base . '/es/portfolio/';?>categoria/investigacion-de-usuarios">Investigación de Usuarios</a></li>		  
	      <li <?php if (strpos($_SERVER['PHP_SELF'], 'evaluacion-heuristica.php')) echo 'class="active"';?>><a href="<?php echo $base . '/es/portfolio/';?>categoria/evaluacion-heuristica">Evaluación Heurística</a></li>
	      <li <?php if (strpos($_SERVER['PHP_SELF'], 'diseno-de-interaccion.php')) echo 'class="active"';?>><a href="<?php echo $base . '/es/portfolio/';?>categoria/diseno-de-interaccion">Diseño de Interacción</a></li>
	      <li <?php if (strpos($_SERVER['PHP_SELF'], 'desarrollo.php')) echo 'class="active"';?>><a href="<?php echo $base . '/es/portfolio/';?>categoria/desarrollo">Desarrollo</a></li>
	      <li <?php if (strpos($_SERVER['PHP_SELF'], 'otro.php')) echo 'class="active"';?>><a href="<?php echo $base . '/es/portfolio/';?>categoria/otro">Otro</a></li>
	    </ul>
	  </div>
	</div>

	<!--
	<div class="row clearfix visible-phone centered">
	  	<div class="span12">
        	<div class="controls">
              <select name="myselect" onchange="redirectMe(this);">
                <option value="<?php echo $base . '/es/portfolio'?>" <?php if (strpos($_SERVER['PHP_SELF'], 'index.php')) echo 'selected="selected"';?>>Todos</option>
                <option value="<?php echo $base . '/es/portfolio/categoria/investigacion-de-usuarios'?>" <?php if (strpos($_SERVER['PHP_SELF'], 'investigacion-de-usuarios.php')) echo 'selected="selected"';?>>Investigación de Usuarios</option>
                <option value="<?php echo $base . '/es/portfolio/categoria/evaluacion-heuristica'?>" <?php if (strpos($_SERVER['PHP_SELF'], 'evaluacion-heuristica.php')) echo 'selected="selected"';?>>Evaluación Heurística</option>
                <option value="<?php echo $base . '/es/portfolio/categoria/diseno-de-interaccion'?>" <?php if (strpos($_SERVER['PHP_SELF'], 'diseno-de-interaccion.php')) echo 'selected="selected"';?>>Diseño de Interacción</option>
                <option value="<?php echo $base . '/es/portfolio/categoria/desarrollo'?>" <?php if (strpos($_SERVER['PHP_SELF'], 'desarrollo.php')) echo 'selected="selected"';?>>Desarrollo</option>
                <option value="<?php echo $base . '/es/portfolio/categoria/otro'?>" <?php if (strpos($_SERVER['PHP_SELF'], 'otro.php')) echo 'selected="selected"';?>>Otro</option>
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
              				echo  "Filtrar por categoría";	
              			}
              			else{
              				echo "Filtrar por otra categoría";
              			}
              		?>
              	</option>
                <option value="<?php echo $base . '/es/portfolio'?>">Todos</option>
                <option value="<?php echo $base . '/es/portfolio/categoria/investigacion-de-usuarios'?>">Investigación de Usuarios</option>
                <option value="<?php echo $base . '/es/portfolio/categoria/evaluacion-heuristica'?>">Evaluación Heurística</option>
                <option value="<?php echo $base . '/es/portfolio/categoria/diseno-de-interaccion'?>">Diseño de Interacción</option>
                <option value="<?php echo $base . '/es/portfolio/categoria/desarrollo'?>">Desarrollo</option>
                <option value="<?php echo $base . '/es/portfolio/categoria/otro'?>">Otro</option>
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
		 			"takemethere" 		 => "Take Me There",
		 			"schiphol"			 => "Schiphol"
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
				"streetrockstars" => "Street Rockstars",
				"schiphol"		  => "Schiphol"
			);

		$other = array(
		 			"amsterdammers" 	=> "Amsterdammers"
		 		);
	?>
