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
	<div class="container spacer">
		<p class="muted credit spacer"><small><a class="link-muted" href="mailto:contacto@joseviso.com" title="Mi cuenta de correo electrónico">contacto@joseviso.com</a> · <a href="http://facebook.com/joseviso" title="Mi página de Facebook"><img src="../images/icons/PNG/facebook-32.png" onmouseover="this.src='../images/icons/PNG/facebook-hover.png'" onmouseout="this.src='../images/icons/PNG/facebook-32.png'"/></a> · <a href="http://twitter.com/XoseViso" title="Mi cuenta de Twitter"><img src="../images/icons/PNG/twitter-32.png" onmouseover="this.src='../images/icons/PNG/twitter-hover.png'" onmouseout="this.src='../images/icons/PNG/twitter-32.png'"/></a></small></p>
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
