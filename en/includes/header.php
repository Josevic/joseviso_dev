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
    <style type="text/css">
    /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }

      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 60px;
      }
      #footer {
        background-color: #f5f5f5; 
      }

      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }

      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */

      .container {
        width: auto;
        /* max-width: 1200px; */
      }
      .container .credit {
        margin: 20px 0;
      }
    </style>
	<link href="<?php echo $base;?>/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo $base;?>/bootstrap-lightbox/bootstrap-lightbox.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>
  <div id="wrap">
  	<div class="navbar navbar-fixed-top">
	   <div class="navbar-inner">
	     <div class="container">
	        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		    </a>
	       <a class="brand" href="<?php echo $base; ?>">Jose Viso</a>

	       <div class="nav-collapse collapse pull-left visible-phone">
	       		<a href="<?php echo $base; ?>/es/"><p id="change-language" style="color:black;">En Castellano</p></a></li>
	       </div>
		   
	       <div class="nav-collapse collapse pull-right" id="main-menu">
		       <ul class="nav">
		          <li <?php if (strpos($_SERVER['PHP_SELF'], 'about.php')) echo 'class="active"';?>><a href="<?php echo $base;?>/en/about">About</a></li>
				  <li <?php if (strpos($_SERVER['PHP_SELF'], 'portfolio')) echo 'class="active"';?>><a href="<?php echo $base;?>/en/portfolio">Portfolio</a></li>
				  <li <?php if (strpos($_SERVER['PHP_SELF'], 'contact.php')) echo 'class="active"';?>><a href="<?php echo $base;?>/en/contact">Contact</a></li>
				</ul>
	       </div>
	     </div>
	   </div>
	</div>

    <div class="container">

    	<a class="pull-right hidden-phone" href="<?php echo $base; ?>/es/"><p id="change-language" class="muted"><small>En Castellano</small></p></a>
	   