<?php

 $page_title = "Home";
 $page_description = "Jose Viso's personal website. User Experience professional. Discover who I am, what I do and what I like.";

 include("includes/header.php"); ?>

	 <div class="container" style="max-width: 800px;">
	 	 <div class="centered spacer visible-desktop">
		 	<img class="img-shadow" src="../images/jose.png">
		 </div>		

		 <div class="centered visible-phone visible-tablet">
		 	<img class="img-shadow" src="../images/jose.png">
		 </div>		
		
		 <div class="hidden-phone">
			<p class="primary">I create really useful, simple and easy to use software.</p>
		 </div>

		 <div class="visible-phone">
			<p class="secondary">I create really useful, simple and easy to use software.</p>
		 </div>
	 </div>
  </div> 

 <footer>
	<div class="container hidden-desktop">
		<p class="muted credit"><small><a class="muted" href="mailto:contact@joseviso.com">contact@joseviso.com</a></small></p>
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
