<?php 

	//$base = "http://joseviso.com";
	$base = "/joseviso_dev";

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
  	<div class="navbar navbar-inverse navbar-fixed-top">
	   <div class="navbar-inner">
	     <div class="container">
	        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		        <span class="">Menu</span>
		        <span class="icon-chevron-down icon-white"></span>
		    </a>
	       <a class="brand <?php if (strpos($_SERVER['PHP_SELF'], 'index.php') && !strpos($_SERVER['PHP_SELF'], 'portfolio')) echo 'home-active';?>" href="<?php echo $base; ?>"><strong>Jose Viso</strong></a>   
		   
	       <div class="nav-collapse collapse" id="main-menu">
		       <ul class="nav">
  				  
		          <li <?php if (strpos($_SERVER['PHP_SELF'], 'about.php')) echo 'class="active"';?>><a href="<?php echo $base;?>/en/about">About</a></li>
				  <li <?php if (strpos($_SERVER['PHP_SELF'], 'portfolio')) echo 'class="active"';?>><a href="<?php echo $base;?>/en/portfolio">Portfolio</a></li>
				  <li><a href="http://joseviso.tumblr.com" target="_blank">Blog</a></li>
				  <li <?php if (strpos($_SERVER['PHP_SELF'], 'contact.php')) echo 'class="active"';?>><a href="<?php echo $base;?>/en/contact">Contact</a></li>
				</ul>

				<ul class="nav pull-right">
	       			<li><a href="<?php echo $base; ?>/es/"><small>En Castellano</small></a></li>
	       		</ul>
	       </div>
	     </div>
	   </div>
	</div>

    <div class="container">
	   