<?php

 $page_title = "Home";
 $page_description = "Jose Viso's personal website. User Experience professional. Discover who I am, what I do and what I like.";

 include("includes/header.php"); ?>

	 <div class="container" style="max-width: 800px;">
	 	 <div class="centered extra_space visible-desktop">
		 	<img class="img-polaroid" src="../images/jose.png">
		 </div>		

		 <div class="centered visible-phone visible-tablet">
		 	<img class="img-polaroid" src="../images/jose.png">
		 </div>		
		
		 <blockquote>
			<p class="spacer lead">I create really useful, simple and easy to use software. In my free time I enjoy sports and photography. I'm also the founder of <a href="http://streetrockstars.com">Street Rockstars</a>.</p>		    
		 </blockquote>		
	 </div>

 </div> <!-- Close container (opened in header file) -->

 <div id="push"></div>
</div> <!-- Close wrap !-->	
 <div id="footer">
 	<div class="container">
		<p class="muted credit"><small>2013 - Built using <a href="http://twitter.github.com/bootstrap/">Twitter Bootstrap</a></small></p>
	</div>
 </div>

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
