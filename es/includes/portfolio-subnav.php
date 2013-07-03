	<header class="jumbotron subhead">
	  <div class="container">
	    <h1 style="color:gray">Portfolio</h1>
	  </div>
	</header>

	<div class="row hidden-desktop hidden-tablet">
		<div class="span5">
				<?php 
					if (strpos($_SERVER['PHP_SELF'], 'investigacion-de-usuarios.php')){
						echo "<h3 class='muted centered'>Investigación de Usuarios</h3>";
					}
					elseif (strpos($_SERVER['PHP_SELF'], 'evaluacion-heuristica.php')) {
						echo "<h3 class='muted centered'>Evaluación Heurística</h3>";
					}
					elseif (strpos($_SERVER['PHP_SELF'], 'diseno-de-interaccion.php')){
						echo "<h3 class='muted centered'>Diseño de Interacción</h3>";
					}
					elseif (strpos($_SERVER['PHP_SELF'], 'desarrollo.php')){
						echo "<h3 class='muted centered'>Desarrollo</h3>";
					}
				?>		  
		</div>
	</div>

	<ul class="nav nav-pills nav-stacked pull-right span3 spacer visible-desktop visible-tablet">
	      <li <?php if (strpos($_SERVER['PHP_SELF'], 'index.php')) echo 'class="active"';?>><a href="<?php echo $base . '/es/portfolio'; ?>">Todos</a></li>
	      <li <?php if (strpos($_SERVER['PHP_SELF'], 'investigacion-de-usuarios.php')) echo 'class="active"';?>><a href="<?php echo $base . '/es/portfolio/';?>categoria/investigacion-de-usuarios">Investigación de Usuarios</a></li>		  
	      <li <?php if (strpos($_SERVER['PHP_SELF'], 'evaluacion-heuristica.php')) echo 'class="active"';?>><a href="<?php echo $base . '/es/portfolio/';?>categoria/evaluacion-heuristica">Evaluación Heurística</a></li>
	      <li <?php if (strpos($_SERVER['PHP_SELF'], 'diseno-de-interaccion.php')) echo 'class="active"';?>><a href="<?php echo $base . '/es/portfolio/';?>categoria/diseno-de-interaccion">Diseño de Interacción</a></li>
	      <li <?php if (strpos($_SERVER['PHP_SELF'], 'desarrollo.php')) echo 'class="active"';?>><a href="<?php echo $base . '/es/portfolio/';?>categoria/desarrollo">Desarrollo</a></li>
	</ul>


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
		 			"smartbite" 		 => "SmartBite",
		 			"evacriado" 		 => "Eva Criado",
		 			"museoalmeria"       => "Kiosco Museo Almería",
		 			"streetrockstars" 	 => "Street Rockstars",
		 			"schiphol"			 => "Schiphol"
		 		);
		
		$user_research = array(
		 			"smartbite" 		 => "SmartBite",
		 			"evacriado" 		 => "Eva Criado",
		 			"streetrockstars" 	 => "Street Rockstars"
		 		);

		$heuristic_evaluation = array(
		 			"smartbite" 		 => "SmartBite",
		 			"evacriado" 		 => "Eva Criado"
		 		);

		$interaction_design = array(
		 			"smartbite" 		 => "SmartBite",
		 			"evacriado" 		 => "Eva Criado",
		 			"museoalmeria"       => "Kiosco Museo Almería",
		 			"streetrockstars" 	 => "Street Rockstars"
		 		);

		$development = array(
				"streetrockstars" => "Street Rockstars",
				"schiphol"		  => "Schiphol"
			);
	?>
