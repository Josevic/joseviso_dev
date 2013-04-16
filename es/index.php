<?php

	$page_title = "Inicio";
	$page_description = "Web personal de Jose Viso. Profesional de la Experiencia de Usuario. Descubre quién soy, lo que hago y lo que me gusta.";

	include("includes/header.php"); ?>
	
	   <div class="container" style="max-width: 800px;">
	 	 <div class="centered spacer visible-desktop">
		 	<img src="../images/jose.png">
		 </div>		

		 <div class="centered visible-phone visible-tablet">
		 	<img src="../images/jose.png">
		 </div>	

		<div class="quote">
			<span>Hola, soy Jose Viso y diseño software realmente útil, simple y fácil de usar.</span>
 		</div>
 		
	   </div>	
	</div>

 <footer>
	<div class="container hidden-desktop">
		<p class="muted credit spacer"><small><a class="muted" href="mailto:contacto@joseviso.com">contacto@joseviso.com</a></small></p>
	</div>
 </footer>

 <script src="http://code.jquery.com/jquery-latest.js"></script>
 <script src="<?php echo $base;?>/bootstrap/js/bootstrap.min.js"></script>
 <script src="<?php echo $base;?>/bootstrap-lightbox/bootstrap-lightbox.min.js"></script>

 <script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-37330001-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
 </script>
 </body>

</html>
