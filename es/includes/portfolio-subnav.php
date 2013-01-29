	<div class="row visible-desktop visible-tablet">
	  <div class="span12 centered-pills">
	    <ul class="nav nav-pills">
	      <li <?php if (strpos($_SERVER['PHP_SELF'], 'index.php')) echo 'class="active"';?>><a href="<?php echo $base . 'es/portfolio'; ?>">Todos</a></li>
	      <li <?php if (strpos($_SERVER['PHP_SELF'], 'investigacion-de-usuarios.php')) echo 'class="active"';?>><a href="<?php echo $base . 'es/portfolio/';?>categoria/investigacion-de-usuarios">Investigación de Usuarios</a></li>		  
	      <li <?php if (strpos($_SERVER['PHP_SELF'], 'evaluacion-heuristica.php')) echo 'class="active"';?>><a href="<?php echo $base . 'es/portfolio/';?>categoria/evaluacion-heuristica">Evaluación Heurística</a></li>
	      <li <?php if (strpos($_SERVER['PHP_SELF'], 'diseno-de-interaccion.php')) echo 'class="active"';?>><a href="<?php echo $base . 'es/portfolio/';?>categoria/diseno-de-interaccion">Diseño de Interacción</a></li>
	      <li <?php if (strpos($_SERVER['PHP_SELF'], 'desarrollo.php')) echo 'class="active"';?>><a href="<?php echo $base . 'es/portfolio/';?>categoria/desarrollo">Desarrollo</a></li>
	      <li <?php if (strpos($_SERVER['PHP_SELF'], 'otro.php')) echo 'class="active"';?>><a href="<?php echo $base . 'es/portfolio/';?>categoria/otro">Otro</a></li>
	    </ul>
	  </div>
	</div>

	<div class="row clearfix visible-phone">
	  	<div class="span1">
	  		<h5>Tipo de Proyectos</h5>
	  	</div>
	  	<div class="span11">
        	<div class="controls">
              <select name="myselect" onchange="redirectMe(this);">
                <option value="<?php echo $base . 'es/portfolio'?>" <?php if (strpos($_SERVER['PHP_SELF'], 'index.php')) echo 'selected="selected"';?>>Todos</option>
                <option value="<?php echo $base . 'es/portfolio/categoria/investigacion-de-usuarios'?>" <?php if (strpos($_SERVER['PHP_SELF'], 'investigacion-de-usuarios.php')) echo 'selected="selected"';?>>Investigación de Usuarios</option>
                <option value="<?php echo $base . 'es/portfolio/categoria/evaluacion-heuristica'?>" <?php if (strpos($_SERVER['PHP_SELF'], 'evaluacion-heuristica.php')) echo 'selected="selected"';?>>Evaluación Heurística</option>
                <option value="<?php echo $base . 'es/portfolio/categoria/diseno-de-interaccion'?>" <?php if (strpos($_SERVER['PHP_SELF'], 'diseno-de-interaccion.php')) echo 'selected="selected"';?>>Diseño de Interacción</option>
                <option value="<?php echo $base . 'es/portfolio/categoria/desarrollo'?>" <?php if (strpos($_SERVER['PHP_SELF'], 'desarrollo.php')) echo 'selected="selected"';?>>Desarrollo</option>
                <option value="<?php echo $base . 'es/portfolio/categoria/otro'?>" <?php if (strpos($_SERVER['PHP_SELF'], 'otro.php')) echo 'selected="selected"';?>>Otro</option>
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
