<?php

	$page_title = "Inicio";
	$page_description = "Web personal de Jose Viso. Profesional de la Experiencia de Usuario. Descubre quién soy, lo que hago y lo que me gusta.";

	include("includes/header.php"); ?>
	
	   <div class="row"> 
			<div class="span12 visible-desktop">
				<div class="parent">
					<div class="child">
						<p id="presentation_desktop">¡Hola! Soy <a class="link_presentation" href="sobre-mi">Jose Viso</a> y diseño <a class="link_presentation" href="portfolio">software</a> <span class="useful"><strong>útil</strong></span>, <span class="simple"><strong>simple</strong></span> y <span class="easy"><strong>fácil de usar</strong></span>.</p>
					</div>
				</div>
			</div>
			<div class="span12 visible-tablet">
				<div class="parent">
					<div class="child">
						<p id="presentation_tablet">¡Hola! Soy <a class="link_presentation" href="sobre-mi">Jose Viso</a> y diseño <a class="link_presentation" href="portfolio">software</a> <span class="useful"><strong>útil</strong></span>, <span class="simple"><strong>simple</strong></span> y <span class="easy"><strong>fácil de usar</strong></span>.</p>
					</div>
				</div>
			</div>
			<div class="span12 visible-phone">
				<div class="parent">
					<div class="child">
						<p id="presentation_phone">¡Hola! Soy <a class="link_presentation" href="sobre-mi">Jose Viso</a> y diseño <a class="link_presentation" href="portfolio">software</a> <span class="useful"><strong>útil</strong></span>, <span class="simple"><strong>simple</strong></span> y <span class="easy"><strong>fácil de usar</strong></span>.</p>
					</div>
				</div>
			</div>
		</div>

 <footer>
	<div class="container">
		<p class="muted credit"><small>contacto@joseviso.com · <a href="http://facebook.com/joseviso" title="Mi página de Facebook"><img src="../images/icons/PNG/facebook-32.png" onmouseover="this.src='../images/icons/PNG/facebook-hover.png'" onmouseout="this.src='../images/icons/PNG/facebook-32.png'"/></a> · <a href="http://twitter.com/XoseViso" title="Mi cuenta de Twitter"><img src="../images/icons/PNG/twitter-32.png" onmouseover="this.src='../images/icons/PNG/twitter-hover.png'" onmouseout="this.src='../images/icons/PNG/twitter-32.png'"/></a></small></p>
	</div>
 </footer>

 <script src="http://code.jquery.com/jquery-latest.js"></script>
 <script src="<?php echo $base;?>/bootstrap/js/bootstrap.min.js"></script>
 <script src="<?php echo $base;?>/bootstrap-lightbox/bootstrap-lightbox.min.js"></script>

 <script type="text/javascript">

 	  /* Code related to Google Analytics */
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-37330001-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	  /* Function to dynamically change the icon of the collapsable menu */
	  $(document).ready(function(){    
		    $('.nav-collapse').on('shown', function () {
		       $(".icon-chevron-down").removeClass("icon-chevron-down").addClass("icon-chevron-up");
		    });

		    $('.nav-collapse').on('hidden', function () {
		       $(".icon-chevron-up").removeClass("icon-chevron-up").addClass("icon-chevron-down");
		    });
	  });
 </script>
 </body>

</html>
