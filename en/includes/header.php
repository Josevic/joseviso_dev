<?php 

	//$base = "../..";
	$base = "/joseviso_dev/";
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
	       <a class="brand" href="../">Jose Viso</a>
		   
	       <div class="nav-collapse collapse pull-right" id="main-menu">
		       <ul class="nav" id="main-menu-left">
		          <li <?php if (strpos($_SERVER['PHP_SELF'], 'about.php')) echo 'class="active"';?>><a href="<?php echo $base;?>/en/about">About</a></li>
				  <li <?php if (strpos($_SERVER['PHP_SELF'], 'portfolio')) echo 'class="active"';?>><a href="<?php echo $base;?>/en/portfolio">Portfolio</a></li>
				  <li <?php if (strpos($_SERVER['PHP_SELF'], 'contact.php')) echo 'class="active"';?>><a href="<?php echo $base;?>/en/contact">Contact</a></li>
				  <li class="divider-vertical"></li> 
				  <a class="btn btn-primary pull-right" href="<?php echo $base; ?>/es/">Castellano</a>
		       </ul>
	       </div>
	     </div>
	   </div>
	</div>

    <div class="container">
	   