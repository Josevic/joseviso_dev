<?php 

	$base = "http://joseviso.com";
	//$base = "/joseviso_dev/";
 ?>

<!DOCTYPE html>
<html>

  <head>
  	<meta charset="utf-8">
    <title>Jose Viso | <?php echo $page_title; ?></title>
    <link rel="shortcut icon" href="<?php echo $base;?>/images/favicon.ico">
    <meta name="description" content="<?php echo $page_description; ?>" />
    <meta name="keywords" content="Jose Viso, José Viso, Jose Viso Vargas, José Viso Vargas, José Manuel Viso Vargas, Jose Manuel Viso Vargas, José Vargas, Jose Vargas, User Experience Almería, Usabilidad Almería, Experiencia de Usuario en Almería, UX Almería, User Experience Spain, User Experience Spain, UX Spain, HCI, Human-Computer Interaction Spain, Human-Computer Interaction Almería, HCI Spain, HCI Almería" /> 



    <!-- Bootstrap -->
    <link href="<?php echo $base;?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo $base;?>/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $base;?>/bootstrap-lightbox/bootstrap-lightbox.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>

  	<div class="navbar navbar-fixed-top">
	   <div class="navbar-inner">
	     <div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		    </a>

	       <a class="brand" href="<?php echo $base;?>/es/">Jose Viso</a>
		   
	       <div class="pull-right" id="main-menu">
		       <ul class="nav nav-collapse collapse" id="main-menu-left">
		          <li <?php if (strpos($_SERVER['PHP_SELF'], 'sobre-mi.php')) echo 'class="active"';?>><a href="<?php echo $base;?>/es/sobre-mi">Sobre mí</a></li>
				  <li <?php if (strpos($_SERVER['PHP_SELF'], 'portfolio')) echo 'class="active"';?>><a href="<?php echo $base;?>/es/portfolio">Portfolio</a></li>
				  <li <?php if (strpos($_SERVER['PHP_SELF'], 'contacto.php')) echo 'class="active"';?>><a href="<?php echo $base;?>/es/contacto">Contacto</a></li>
		       </ul>
	       </div>
	     </div>
	   </div>
	</div>

    <div class="container">
    	<a class="pull-right" href="<?php echo $base; ?>/en/"><p id="change-language" class="muted">In English</p></a>
	   