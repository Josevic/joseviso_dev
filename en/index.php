<?php

 $page_title = "Home";
 $page_description = "Jose Viso's personal website. User Experience professional. Discover who I am, what I do and what I like.";

 include("includes/header.php"); ?>

	 <div class="container" style="max-width: 800px;">
	 	 <div class="centered spacer visible-desktop">
		 	<img src="../images/jose.png">
		 </div>		

		 <div class="centered visible-phone visible-tablet">
		 	<img src="../images/jose.png">
		 </div>		
		
		 <div class="quote">
			<span>Hi, I'm Jose Viso and I design really useful, simple and easy to use software.</span>
		 </div>
	 </div>
  </div> 

 <footer>
	<div class="container spacer">
		<p class="muted credit spacer"><small><a class="link-muted" href="mailto:contact@joseviso.com" title="My email account">contact@joseviso.com</a> · <a href="http://facebook.com/joseviso" title="My Facebook page"><img src="../images/icons/PNG/facebook-32.png" onmouseover="this.src='../images/icons/PNG/facebook-hover.png'" onmouseout="this.src='../images/icons/PNG/facebook-32.png'"/></a> · <a href="http://twitter.com/XoseViso" title="My Twitter account"><img src="../images/icons/PNG/twitter-32.png" onmouseover="this.src='../images/icons/PNG/twitter-hover.png'" onmouseout="this.src='../images/icons/PNG/twitter-32.png'"/></a></small></p>
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
